<?php
include("../include/dbcommon.php");

header('Content-Type: application/json');

$headers = function_exists('getallheaders') ? getallheaders() : [];

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

$master = is_array($body['master']) ? $body['master'] : [];

// Closing month codes list (sclosingmonth.Code)
$years_array = $body['closing_years'] ?? [];
if (!is_array($years_array)) $years_array = [];

$buCode = null;
if (isset($master['BUnit']))  $buCode = (int)$master['BUnit'];
if (isset($master['BuCode'])) $buCode = (int)$master['BuCode'];
if ($buCode === null || $buCode <= 0) $buCode = 1;

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

function getMonthEndDateTime(string $endExclusive): string
{
    $dt = new DateTime($endExclusive);
    $dt->modify('-1 second');
    return $dt->format('Y-m-d H:i:s');
}

function monthName(int $month): string
{
    $dt = DateTime::createFromFormat('!m', (string)$month);
    return $dt ? $dt->format('F') : 'Month';
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
 * Signed SUM using TStatus:
 * - Dr => +Amount
 * - Cr => -Amount
 * (So sales typically become negative, expenses positive)
 *
 * Also excludes MONTH_CLOSE rows so re-run doesn't double count.
 */
function fetchSignedSumAndCount(array $accCodes, string $startDT, string $endDT, int $buCode): array
{
    $in = buildIntInList($accCodes);
    if ($in === '') return ['SignedSum' => 0.0, 'Count' => 0];

    $startDT = db_addslashes($startDT);
    $endDT   = db_addslashes($endDT);

    $sql = "
        SELECT
            COUNT(*) AS Cnt,
            COALESCE(SUM(
                CASE
                    WHEN UPPER(IFNULL(`TStatus`, 'DR')) = 'CR' THEN -`Amount`
                    ELSE `Amount`
                END
            ), 0) AS SignedSum
        FROM `GLTD`
        WHERE `AccountCode` IN ($in)
          AND `TDate` >= '$startDT'
          AND `TDate` <  '$endDT'
          AND `BUnit` = $buCode
          AND IFNULL(`TType`, '') <> 'MONTH_CLOSE'
    ";

    $rs  = DB::Query($sql);
    $row = $rs ? $rs->fetchAssoc() : null;

    return [
        'SignedSum' => (float)($row['SignedSum'] ?? 0),
        'Count'     => (int)($row['Cnt'] ?? 0),
    ];
}

/**
 * Guard: prevent running closing twice for same month closing code
 * (checks GLTD for any MONTH_CLOSE line with BookID=closing_code)
 */
function alreadyClosedBatch(int $closingCode): bool
{
    $id = db_addslashes((string)$closingCode);
    $sql = "SELECT COUNT(*) AS Cnt
            FROM `GLTD`
            WHERE `TType`='MONTH_CLOSE' AND `BookID`='$id'";
    $rs = DB::Query($sql);
    $row = $rs ? $rs->fetchAssoc() : null;
    return ((int)($row['Cnt'] ?? 0) > 0);
}

// -------------------- Main --------------------
try {

    if (!isAscendingStrict($years_array)) {
        echo json_encode([
            'success' => false,
            'message' => 'Codes are not in ascending order',
            'closing_years' => $years_array
        ]);
        exit;
    }

    // SALES accounts (your list)
    $salesAccountCodes = [];
    $rs_sales_accounts = DB::Query("SELECT `Code` FROM `paccounts` WHERE `AccSubCode` IN (21,22,28,29,30)");
    while ($rs_sales_accounts && ($row = $rs_sales_accounts->fetchAssoc())) {
        $salesAccountCodes[] = (int)$row['Code'];
    }
    $salesAccountCodes = array_values(array_unique($salesAccountCodes));

    // EXPENSE accounts
    $expenseAccountCodes = [];
    $rs_expense_accounts = DB::Query("SELECT `Code` FROM `paccounts` WHERE `AccSubCode` IN (14,19,20,31)");
    while ($rs_expense_accounts && ($row = $rs_expense_accounts->fetchAssoc())) {
        $expenseAccountCodes[] = (int)$row['Code'];
    }
    $expenseAccountCodes = array_values(array_unique($expenseAccountCodes));

    $PL_ACC = 13; // Only this account will be posted
    $userCode = $user['Code'] ?? $user['code'] ?? '';

    $results = [];

    foreach ($years_array as $closing_code) {
        $closing_code = (int)$closing_code;

        if (!isPreviousCodeClosed($closing_code)) {
            echo json_encode([
                'success' => false,
                'message' => 'Previous record is not closed. First close the previous record.',
                'closing_year_code' => $closing_code
            ]);
            exit;
        }

        if (alreadyClosedBatch($closing_code)) {
            echo json_encode([
                'success' => false,
                'message' => 'This closing month already has MONTH_CLOSE entries in GLTD.',
                'closing_year_code' => $closing_code
            ]);
            exit;
        }

        $rs_month = DB::Query("SELECT * FROM `sclosingmonth` WHERE `Code` = $closing_code LIMIT 1");
        $curr = $rs_month ? $rs_month->fetchAssoc() : null;

        if (!$curr) {
            echo json_encode([
                'success' => false,
                'message' => 'Closing record not found for Code',
                'closing_year_code' => $closing_code
            ]);
            exit;
        }

        $year  = (int)($curr['VYear'] ?? 0);
        $month = (int)($curr['VMonth'] ?? 0);

        if ($year <= 0 || $month < 1 || $month > 12) {
            echo json_encode([
                'success' => false,
                'message' => 'Invalid VYear/VMonth in sclosingmonth for this Code',
                'closing_year_code' => $closing_code,
                'VYear' => $curr['VYear'] ?? null,
                'VMonth' => $curr['VMonth'] ?? null
            ]);
            exit;
        }

        list($startDT, $endDT) = getMonthRangeDateTime($year, $month);
        $tDate = getMonthEndDateTime($endDT);
        $mName = monthName($month);

        // Signed sums from GLTD
        $sales = fetchSignedSumAndCount($salesAccountCodes, $startDT, $endDT, $buCode);
        $exp   = fetchSignedSumAndCount($expenseAccountCodes, $startDT, $endDT, $buCode);

        $salesSigned = (float)$sales['SignedSum']; // usually negative (Cr)
        $expSigned   = (float)$exp['SignedSum'];   // usually positive (Dr)

        // Net = Expense - Sales  (because sales are usually negative, this becomes exp + sales)
        // Profit => net < 0, Loss => net > 0
        $net = $expSigned + $salesSigned;

        // If net = 0, nothing to post
        if (abs($net) < 0.0001) {
            $results[] = [
                'ClosingCode' => $closing_code,
                'VYear' => $year,
                'VMonth' => $month,
                'MonthName' => $mName,
                'Range' => ['start' => $startDT, 'end_exclusive' => $endDT],
                'SalesSignedSum' => $salesSigned,
                'ExpenseSignedSum' => $expSigned,
                'Net' => $net,
                'Posted' => false,
                'ProfitLoss' => ['Status' => 'ZERO', 'Amount' => 0]
            ];
            continue;
        }

        $abs = abs($net);
        $plStatus = ($net < 0) ? 'PROFIT' : 'LOSS';
        $tStatus  = ($net < 0) ? 'Cr' : 'Dr'; // Profit => Credit P&L, Loss => Debit P&L

        // ---------- Create GLTH then GLTD (like your example) ----------
        $currentdatetime = $tDate; // closing at month end
        $virtual_code = "MC-" . $closing_code . "-" . (int)round(microtime(true) * 1000);
        $code = "MC";              // BookCode (varchar)
        $bookId = (string)$closing_code;

        DB::Exec("START TRANSACTION");
        try {
            // 1) GLTH header
            $gltHData = array();
            $gltHData["BookCode"] = $code;
            $gltHData["VirtualCode"] = $virtual_code;
            $gltHData["TBook"] = "GL";
            $gltHData["TType"] = "MONTH_CLOSE";
            $gltHData["TDate"] = $currentdatetime;
            $gltHData["BUnit"] = $buCode;
            $gltHData["Status"] = "OPEN";
            $gltHData["Remarks"] = $master["Remarks"] ?? ("Month closing " . $mName . " " . $year);
            $gltHData["UserName"] = $userCode;
            $gltHData["CreateDate"] = $currentdatetime;
            $gltHData["CreateTime"] = $currentdatetime;
            $gltHData["Block"] = 0;
            $gltHData["Lock"] = 0;
            $gltHData["TotalAmount"] = $abs;

            DB::Insert("GltH", $gltHData);
            $glth_id = DB::LastId();

            // 2) Single GLTD line (only AccountCode 13)
            $narr = "Month close $mName $year: net $plStatus (Sales vs Expense)";

            $gltd = array();
            $gltd["Code"] = $glth_id;           // link to GLTH
            $gltd["BookCode"] = $code;
            $gltd["BookID"] = $bookId;          // closing month code
            $gltd["VirtualCode"] = $virtual_code;
            $gltd["Status"] = "OPEN";
            $gltd["TDate"] = $currentdatetime;
            $gltd["BUnit"] = $buCode;
            $gltd["TBook"] = "GL";
            $gltd["TType"] = "MONTH_CLOSE";
            $gltd["Narration"] = $narr;
            $gltd["ParentAccountCode"] = 0;
            $gltd["AccountCode"] = $PL_ACC;     // ONLY 13
            $gltd["Remarks"] = $master["Remarks"] ?? "";
            $gltd["Amount"] = $abs;             // always positive
            $gltd["UserName"] = $userCode;
            $gltd["CreateDate"] = $currentdatetime;
            $gltd["CreateTime"] = $currentdatetime;
            $gltd["Block"] = 0;
            $gltd["TStatus"] = $tStatus;        // Dr (loss) / Cr (profit)

            DB::Insert("GLTD", $gltd);

            DB::Exec("COMMIT");
        } catch (Exception $inner) {
            DB::Exec("ROLLBACK");
            throw $inner;
        }

        $results[] = [
            'ClosingCode' => $closing_code,
            'VYear' => $year,
            'VMonth' => $month,
            'MonthName' => $mName,
            'Range' => ['start' => $startDT, 'end_exclusive' => $endDT],
            'SalesSignedSum' => $salesSigned,
            'ExpenseSignedSum' => $expSigned,
            'Net' => $net,
            'Posted' => true,
            'GLTH_ID' => $glth_id,
            'VirtualCode' => $virtual_code,
            'ProfitLoss' => ['Status' => $plStatus, 'Amount' => $abs, 'TStatus' => $tStatus]
        ];
    }

    echo json_encode([
        'success' => true,
        'message' => 'Month closing posted: GLTH created then single GLTD entry in AccountCode=13 (Dr=Loss / Cr=Profit).',
        'BUnit' => $buCode,
        'data' => $results
    ]);
    exit;

} catch (Exception $e) {
    http_response_code(500);
    echo json_encode(['error' => 'Error: ' . $e->getMessage()]);
    exit;
}