<?php
/**
 * jv_list.php
 * POST JSON:
 * {
 *   "api_key": "123",
 *   "status": "OPEN",               // optional
 *   "virtual_code": "12-25-7",      // optional
 *   "date_from": "2025-01-01",      // optional (YYYY-MM-DD)
 *   "date_to": "2025-12-31",        // optional (YYYY-MM-DD)
 *   "limit": 200,                   // optional (default 200, max 1000)
 *   "offset": 0,                    // optional (default 0)
 *   "include_details": true         // optional (default true)
 * }
 * Response shape:
 * {
 *   "success": true,
 *   "count": N,
 *   "data": [
 *     {
 *       "master":  { ...GLTH fields... },
 *       "details": [ ...GLTD rows... ]
 *     }
 *   ]
 * }
 */

include("../include/dbcommon.php");
header('Content-Type: application/json');

/* -------------------- helpers -------------------- */
function read_json_body(): array {
    $raw = file_get_contents('php://input');
    if ($raw === false) return [];
    $body = json_decode($raw, true);
    return is_array($body) ? $body : [];
}

function get_api_key_from_header_or_body(array $body): ?string {
    $hdrs = function_exists('getallheaders') ? getallheaders() : [];
    $lower = [];
    foreach ($hdrs as $k => $v) { $lower[strtolower($k)] = $v; }
    $api_key = $lower['api_key'] ?? null;

    if (!$api_key && isset($_SERVER['HTTP_API_KEY'])) {
        $api_key = $_SERVER['HTTP_API_KEY'];
    }
    if (!$api_key) {
        $api_key = $body['api_key'] ?? ($body['Api_Key'] ?? ($body['ApiKey'] ?? ($body['apiKey'] ?? null)));
    }
    return $api_key ? trim((string)$api_key) : null;
}

function ymd_or_null($s) {
    if (!is_string($s)) return null;
    $s = trim($s);
    if ($s === '') return null;
    if (preg_match('/^\d{4}-\d{2}-\d{2}$/', $s)) return $s;
    return null;
}

/* -------------------- read body -------------------- */
$body = read_json_body();

/* -------------------- api key auth -------------------- */
$api_key = get_api_key_from_header_or_body($body);
if (!$api_key) {
    http_response_code(401);
    echo json_encode(['error' => 'Missing API key']); exit;
}

try {
    $rs = DB::Query("SELECT * FROM umUserInfo WHERE api_key = '" . db_addslashes($api_key) . "'");
    $user = $rs->fetchAssoc();
    if (!$user) {
        http_response_code(403);
        echo json_encode(['error' => 'Invalid API key']); exit;
    }
} catch (Exception $e) {
    http_response_code(500);
    echo json_encode(['error' => 'API key check failed: ' . $e->getMessage()]); exit;
}

/* -------------------- filters -------------------- */
$status         = $body['status'] ?? ($body['Status'] ?? null);
$status         = is_string($status) ? trim($status) : null;
$virtual_code   = $body['virtual_code'] ?? ($body['VirtualCode'] ?? null);
$virtual_code   = is_string($virtual_code) ? trim($virtual_code) : null;
$date_from      = ymd_or_null($body['date_from'] ?? null);
$date_to        = ymd_or_null($body['date_to'] ?? null);
$include_detail = isset($body['include_details']) ? (bool)$body['include_details'] : true;

$limit  = isset($body['limit'])  ? (int)$body['limit']  : 200;
$offset = isset($body['offset']) ? (int)$body['offset'] : 0;
if ($limit <= 0)   $limit = 200;
if ($limit > 1000) $limit = 1000;
if ($offset < 0)   $offset = 0;

/* -------------------- build WHERE (JV only) -------------------- */
$conds = [];
$conds[] = "`TType` = 'J.v'";

if ($status !== null && $status !== '') {
    $statusSafe = db_addslashes(strtoupper($status));
    $conds[] = "`Status` = '{$statusSafe}'";
}
if ($virtual_code) {
    $vcSafe = db_addslashes($virtual_code);
    $conds[] = "`VirtualCode` = '{$vcSafe}'";
}
if ($date_from) {
    $dfSafe = db_addslashes($date_from . " 00:00:00");
    $conds[] = "`TDate` >= '{$dfSafe}'";
}
if ($date_to) {
    $dtSafe = db_addslashes($date_to . " 23:59:59");
    $conds[] = "`TDate` <= '{$dtSafe}'";
}

$where = $conds ? ("WHERE " . implode(" AND ", $conds)) : "";

/* -------------------- fetch GLTH masters -------------------- */
try {
    $sqlH = "
        SELECT
            `Code`, `BookCode`, `VirtualCode`, `TBook`, `TType`, `TDate`, `BUnit`,
            `Status`, `Remarks`, `UserName`, `CreateDate`, `CreateTime`,
            `UpdateUser`, `UpdateDate`, `UpdateTime`, `Block`, `Lock`, `TotalAmount`
        FROM `glth`
        {$where}
        ORDER BY `TDate` DESC, `Code` DESC
        LIMIT {$offset}, {$limit}
    ";
    $rsH = DB::Query($sqlH);

    $masters = [];
    $codes = [];
    while ($row = $rsH->fetchAssoc()) {
        $masters[] = $row;                 // one GLTH row = one master
        $codes[] = (int)$row['Code'];      // GLTD.Code references GLTH.Code
    }

    if (!$masters) {
        echo json_encode([
            'success' => true,
            'count'   => 0,
            'data'    => []
        ]);
        exit;
    }

    /* -------------------- fetch GLTD details for those masters -------------------- */
    $detailsByCode = [];
    if ($include_detail && $codes) {
        $idList = implode(',', array_map('intval', $codes));
        $sqlD = "
            SELECT
                `Code`, `CodeD`, `BookCode`, `BookID`, `VirtualCode`, `Status`, `TDate`, `BUnit`,
                `TBook`, `TType`, `ParentAccountCode`, `AccountCode`, `BillNo`, `ChequeNo`,
                `Narration`, `Remarks`, `Amount`, `StoreCode`, `Qty`, `Weight`, `Rate`, `UserName`,
                `CreateDate`, `CreateTime`, `UpdateUser`, `UpdateDate`, `UpdateTime`, `Block`,
                `ProductCode`, `ProductGroupCode`, `UnitCode`, `TStatus`
            FROM `gltd`
            WHERE `Code` IN ({$idList})
            ORDER BY `Code` ASC, `CodeD` ASC
        ";
        $rsD = DB::Query($sqlD);
        while ($d = $rsD->fetchAssoc()) {
            $c = (int)$d['Code'];
            if (!isset($detailsByCode[$c])) $detailsByCode[$c] = [];
            $detailsByCode[$c][] = $d;
        }
    }

    /* -------------------- build master/details objects -------------------- */
    $out = [];
    foreach ($masters as $m) {
        $c = (int)$m['Code'];
        $out[] = [
            'master'  => $m,                                  // GLTH row
            'details' => $include_detail ? ($detailsByCode[$c] ?? []) : [] // GLTD rows
        ];
    }

    /* -------------------- response -------------------- */
    echo json_encode([
        'success' => true,
        'count'   => count($out),
        'data'    => $out
    ]);

} catch (Exception $e) {
    http_response_code(500);
    echo json_encode(['error' => 'Fetch failed: ' . $e->getMessage()]);
}