<?php
include("../include/dbcommon.php");

header('Content-Type: application/json');

$headers = function_exists('getallheaders') ? getallheaders() : [];

// Not used yet, kept to match your structure
$master_id = null;
$virtual_code = null;

// -------------------- Read JSON body --------------------
$raw  = file_get_contents("php://input");
$body = json_decode($raw, true);

if (!is_array($body)) {
    http_response_code(400);
    echo json_encode(['error' => 'Invalid JSON body']);
    exit;
}

$api_key = $body['api_key'] ?? $body['Api_Key'] ?? null;

if (!$api_key) {
    http_response_code(401);
    echo json_encode(['error' => 'Missing API key']);
    exit;
}

// -------------------- API key check --------------------
try {
    $sql = "SELECT * FROM umUserInfo WHERE api_key = '" . db_addslashes($api_key) . "' LIMIT 1";
    $rs  = DB::Query($sql);
    $user = $rs ? $rs->fetchAssoc() : null;

    if (!$user) {
        http_response_code(403);
        echo json_encode(['error' => 'Invalid API key']);
        exit;
    }
} catch (Exception $e) {
    http_response_code(500);
    echo json_encode(['error' => 'API key check failed: ' . $e->getMessage()]);
    exit;
}

// -------------------- Validate payload --------------------
if (!isset($body['master'])) {
    http_response_code(400);
    echo json_encode(['error' => 'Missing master data']);
    exit;
}

// You are sending Codes of sclosingmonth in this array
$years_array = $body['closing_years'] ?? [];
if (!is_array($years_array)) $years_array = [];

// -------------------- Helpers --------------------
function isAscendingStrict(array $arr): bool
{
    $n = count($arr);
    if ($n < 2) return true;

    for ($i = 1; $i < $n; $i++) {
        if (!is_numeric($arr[$i - 1]) || !is_numeric($arr[$i])) return false;
        if ((int)$arr[$i] <= (int)$arr[$i - 1]) return false;
    }
    return true;
}

function isPreviousCodeClosed($Code): bool
{
    $Code = (int)$Code;

    $rs  = DB::Query("SELECT `Code` FROM `sclosingmonth` WHERE `Code` = $Code LIMIT 1");
    $cur = $rs ? $rs->fetchAssoc() : null;

    if (!$cur) return false;

    $sqlPrev = "SELECT `Code`, `CloseStatus`
                FROM `sclosingmonth`
                WHERE `Code` < $Code
                ORDER BY `Code` DESC
                LIMIT 1";
    $rsPrev  = DB::Query($sqlPrev);
    $prevRow = $rsPrev ? $rsPrev->fetchAssoc() : null;

    if (!$prevRow) return true;

    // CloseStatus assumed values: "Open" / "Closed"
    return ($prevRow['CloseStatus'] !== "Open");
}

function getMonthRangeDateTime(int $year, int $month): array
{
    $start = sprintf('%04d-%02d-01 00:00:00', $year, $month);

    $ny = $year;
    $nm = $month + 1;
    if ($nm === 13) { $nm = 1; $ny++; }

    $end = sprintf('%04d-%02d-01 00:00:00', $ny, $nm);

    return [$start, $end]; // end exclusive
}

function buildIntInList(array $ints): string
{
    $clean = [];
    foreach ($ints as $v) $clean[] = (int)$v;
    $clean = array_values(array_unique($clean));
    if (!$clean) return '';
    return implode(',', $clean);
}

/**
 * GLTD totals for given accounts within date range.
 * Uses GLTD columns: AccountCode, Amount, TDate
 */
function fetchGltdTotals(array $accCodes, string $startDT, string $endDT): array
{
    $in = buildIntInList($accCodes);
    if ($in === '') {
        return ['TotalAmount' => 0.0, 'TotalTransactions' => 0];
    }

    $startDT = db_addslashes($startDT);
    $endDT   = db_addslashes($endDT);

    $sql = "
        SELECT
            COUNT(*) AS TotalTransactions,
            COALESCE(SUM(`Amount`), 0) AS TotalAmount
        FROM `gltd`
        WHERE `AccountCode` IN ($in)
          AND `TDate` >= '$startDT'
          AND `TDate` <  '$endDT'
    ";

    $rs  = DB::Query($sql);
    $row = $rs ? $rs->fetchAssoc() : null;

    return [
        'TotalAmount' => (float)($row['TotalAmount'] ?? 0),
        'TotalTransactions' => (int)($row['TotalTransactions'] ?? 0),
    ];
}

// -------------------- Main --------------------
try {

    // 1) Validate ascending order of closing Codes
    if (!isAscendingStrict($years_array)) {
        echo json_encode([
            'success' => false,
            'message' => 'Codes are not in ascending order',
            'closing_years' => $years_array
        ]);
        exit;
    }

    // 2) SALES accounts (AccSubCode IN 30)
    $salesAccountCodes = [];
    $rs_sales_accounts = DB::Query("SELECT `Code` FROM `paccounts` WHERE `AccSubCode` IN (21,22,28,29,30)");
    while ($rs_sales_accounts && ($row = $rs_sales_accounts->fetchAssoc())) {
        $salesAccountCodes[] = (int)$row['Code'];
    }
    $salesAccountCodes = array_values(array_unique($salesAccountCodes));

    // 3) EXPENSE accounts (AccSubCode IN 14,19,20,31)
    $expenseAccountCodes = [];
    $rs_expense_accounts = DB::Query("SELECT `Code` FROM `paccounts` WHERE `AccSubCode` IN (14,19,20,31)");
    while ($rs_expense_accounts && ($row = $rs_expense_accounts->fetchAssoc())) {
        $expenseAccountCodes[] = (int)$row['Code'];
    }
    $expenseAccountCodes = array_values(array_unique($expenseAccountCodes));

    // 4) For each closing Code: use curr_year["VMonth"] and curr_year["VYear"]
    $data = [];

    foreach ($years_array as $year_code) {
        $year_code = (int)$year_code;

        if (!isPreviousCodeClosed($year_code)) {
            echo json_encode([
                'success' => false,
                'message' => 'Previous record is not closed. First close the previous record.',
                'closing_year_code' => $year_code
            ]);
            exit;
        }

        $rs_year = DB::Query("SELECT * FROM `sclosingmonth` WHERE `Code` = $year_code LIMIT 1");
        $curr_year = $rs_year ? $rs_year->fetchAssoc() : null;

        if (!$curr_year) {
            echo json_encode([
                'success' => false,
                'message' => 'Closing record not found for Code',
                'closing_year_code' => $year_code
            ]);
            exit;
        }

        // ✅ Use VYear instead of Year
        $year  = (int)($curr_year['VYear'] ?? 0);
        $month = (int)($curr_year['VMonth'] ?? 0);

        if ($year <= 0 || $month < 1 || $month > 12) {
            echo json_encode([
                'success' => false,
                'message' => 'Invalid VYear/VMonth in sclosingmonth for this Code',
                'closing_year_code' => $year_code,
                'VYear' => $curr_year['VYear'] ?? null,
                'VMonth' => $curr_year['VMonth'] ?? null
            ]);
            exit;
        }

        list($startDT, $endDT) = getMonthRangeDateTime($year, $month);

        $salesTotals   = fetchGltdTotals($salesAccountCodes, $startDT, $endDT);
        $expenseTotals = fetchGltdTotals($expenseAccountCodes, $startDT, $endDT);

        $data[] = [
            'ClosingCode'    => $year_code,
            'VYear'          => $year,
            'VMonth'         => $month,
            'Range'          => ['start' => $startDT, 'end_exclusive' => $endDT],
            'SalesTotals'    => $salesTotals,
            'ExpenseTotals'  => $expenseTotals,
        ];
    }

    echo json_encode([
        'success' => true,
        'message' => 'Sums calculated for Sales and Expense accounts from GLTD for each closing month.',
        'master_id' => $master_id,
        'data' => $data
    ]);
    exit;

} catch (Exception $e) {
    http_response_code(500);
    echo json_encode(['error' => 'Error: ' . $e->getMessage()]);
    exit;
}