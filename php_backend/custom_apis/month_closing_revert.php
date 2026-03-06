<?php
include("../include/dbcommon.php");

header('Content-Type: application/json');

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
$years_array = $body['closing_years'] ?? [];
if (!is_array($years_array) || count($years_array) === 0) {
    http_response_code(400);
    echo json_encode(['error' => 'Missing or empty closing_years array']);
    exit;
}

// -------------------- Helpers --------------------
function isDescendingStrict(array $arr): bool
{
    $n = count($arr);
    if ($n < 2) return true;
    for ($i = 1; $i < $n; $i++) {
        if (!is_numeric($arr[$i - 1]) || !is_numeric($arr[$i])) return false;
        if ((int)$arr[$i] >= (int)$arr[$i - 1]) return false;
    }
    return true;
}

function isNextCodeOpen($Code): bool
{
    $Code = (int)$Code;
    $sqlNext = "SELECT `Code`, `CloseStatus`
                FROM `sclosingmonth`
                WHERE `Code` > $Code
                ORDER BY `Code` ASC
                LIMIT 1";
    $rsNext  = DB::Query($sqlNext);
    $nextRow = $rsNext ? $rsNext->fetchAssoc() : null;

    // No next month exists — safe to revert
    if (!$nextRow) return true;

    // Next month must be Open (not Closed)
    return ($nextRow['CloseStatus'] === 'Open');
}

function monthName(int $month): string
{
    $dt = DateTime::createFromFormat('!m', (string)$month);
    return $dt ? $dt->format('F') : 'Month';
}

// -------------------- Main --------------------
try {
    // Codes must be in descending order (revert last closed first)
    if (!isDescendingStrict($years_array)) {
        echo json_encode([
            'success' => false,
            'message' => 'Codes must be in descending order for revert (last closed first)',
            'closing_years' => $years_array
        ]);
        exit;
    }

    $results = [];

    foreach ($years_array as $closing_code) {
        $closing_code = (int)$closing_code;

        // Fetch closing month record
        $rs_month = DB::Query("SELECT * FROM `sclosingmonth` WHERE `Code` = $closing_code LIMIT 1");
        $curr = $rs_month ? $rs_month->fetchAssoc() : null;

        if (!$curr) {
            echo json_encode([
                'success' => false,
                'message' => 'Closing record not found',
                'closing_year_code' => $closing_code
            ]);
            exit;
        }

        // Must be Closed to revert
        if ($curr['CloseStatus'] !== 'Closed') {
            echo json_encode([
                'success' => false,
                'message' => 'Month is not closed — cannot revert an open month',
                'closing_year_code' => $closing_code
            ]);
            exit;
        }

        // Next month (by Code) must be Open — can't revert Feb if March is still closed
        if (!isNextCodeOpen($closing_code)) {
            echo json_encode([
                'success' => false,
                'message' => 'Cannot revert — a later month is still closed. Revert later months first.',
                'closing_year_code' => $closing_code
            ]);
            exit;
        }

        $year  = (int)($curr['VYear'] ?? 0);
        $month = (int)($curr['VMonth'] ?? 0);
        $mName = monthName($month);

        // Find MONTH_CLOSE entries to delete
        $bookId = (string)$closing_code;
        $countSql = "SELECT COUNT(*) AS Cnt FROM `GLTD` WHERE `TType`='MONTH_CLOSE' AND `BookID`='" . db_addslashes($bookId) . "'";
        $rsCount = DB::Query($countSql);
        $rowCount = $rsCount ? $rsCount->fetchAssoc() : null;
        $entryCount = (int)($rowCount['Cnt'] ?? 0);

        // Find GLTH Code linked to these GLTD entries
        $glthCodeSql = "SELECT DISTINCT `Code` FROM `GLTD` WHERE `TType`='MONTH_CLOSE' AND `BookID`='" . db_addslashes($bookId) . "'";
        $rsGlth = DB::Query($glthCodeSql);
        $glthCodes = [];
        while ($rsGlth && ($row = $rsGlth->fetchAssoc())) {
            $glthCodes[] = (int)$row['Code'];
        }

        DB::Exec("START TRANSACTION");
        try {
            // 1) Delete GLTD entries with TType='MONTH_CLOSE' and BookID=closing_code
            DB::Exec("DELETE FROM `GLTD` WHERE `TType`='MONTH_CLOSE' AND `BookID`='" . db_addslashes($bookId) . "'");

            // 2) Delete GLTH headers linked to those entries
            foreach ($glthCodes as $glthCode) {
                DB::Exec("DELETE FROM `GltH` WHERE `Code` = $glthCode AND `TType`='MONTH_CLOSE'");
            }

            // 3) Set CloseStatus back to 'Open'
            DB::Exec("UPDATE `sclosingmonth` SET `CloseStatus` = 'Open' WHERE `Code` = $closing_code");

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
            'Reverted' => true,
            'DeletedGLTDEntries' => $entryCount,
            'DeletedGLTHCodes' => $glthCodes
        ];
    }

    echo json_encode([
        'success' => true,
        'message' => 'Month closing reverted successfully. GL entries removed and months reopened.',
        'data' => $results
    ]);
    exit;

} catch (Exception $e) {
    http_response_code(500);
    echo json_encode(['error' => 'Error: ' . $e->getMessage()]);
    exit;
}
