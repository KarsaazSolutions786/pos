<?php
/**
 * sales_list.php
 * POST JSON: { "api_key": "123", "status": "OPEN" }
 * Returns: tSaleH rows (filtered by Status) each with embedded `tSaleD` array.
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
    // Headers (case-insensitive)
    $hdrs = function_exists('getallheaders') ? getallheaders() : [];
    $lower = [];
    foreach ($hdrs as $k => $v) { $lower[strtolower($k)] = $v; }
    $api_key = $lower['api_key'] ?? null;

    // Fallback to common server var (some SAPIs)
    if (!$api_key && isset($_SERVER['HTTP_API_KEY'])) {
        $api_key = $_SERVER['HTTP_API_KEY'];
    }

    // Fallback to JSON body keys
    if (!$api_key) {
        $api_key = $body['api_key'] ?? ($body['ApiKey'] ?? ($body['apiKey'] ?? null));
    }
    return $api_key ? trim((string)$api_key) : null;
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

/* -------------------- validate required fields -------------------- */
$status = $body['status'] ?? ($body['Status'] ?? null);
$status = is_string($status) ? trim($status) : null;
if ($status === null || $status === '') {
    http_response_code(400);
    echo json_encode(['error' => 'Missing required field: status']); exit;
}
$status = strtoupper($status); // normalize, if your DB stores OPEN/CLOSED etc.

/* -------------------- fetch tSaleH -------------------- */
try {
    $statusSafe = db_addslashes($status);

    $sqlH = "
        SELECT `ID`, `Code`, `TMonth`, `TYear`, `BookCode`, `BookID`, `VirtualCode`, `TBook`, `TType`,
               `SaleType`, `TDate`, `BUnit`, `Status`, `PartyCode`, `TotalAmount`, `FreightAccountCode`,
               `FreightCharges`, `LaborAccountCode`, `LaborCharges`, `SaleTaxAccCode`, `SaleTaxRate`,
               `SaleTaxAmount`, `DiscountAccCode`, `DiscountRemarks`, `DiscountRate`, `DiscountAmount`,
               `GrandTotal`, `SaleMenCode`, `Commission`, `Remarks`, `UserName`, `CreateDate`, `CreateTime`,
               `UpdateUser`, `UpdateDate`, `UpdateTime`, `Block`
        FROM `tSaleH`
        WHERE `Status` = '{$statusSafe}'
        ORDER BY `ID` DESC
    ";
    $rsH = DB::Query($sqlH);

    $saleH = [];
    $ids = [];
    while ($row = $rsH->fetchAssoc()) {
        $saleH[] = $row;
        $ids[] = (int)$row['ID'];
    }

    if (!$saleH) {
        echo json_encode([
            'success' => true,
            'status'  => $status,
            'count'   => 0,
            'data'    => []
        ]);
        exit;
    }

    /* -------------------- fetch all tSaleD for those headers -------------------- */
    $idList = implode(',', array_map('intval', $ids));
    $sqlD = "
        SELECT `Code`, `CodeD`, `VirtualCode`, `Tdate`, `Status`, `PartyCode`, `StoreCode`, `ProductCode`,
               `ProductGroupCode`, `UnitCode`, `Qty`, `Rate`, `Amount`, `Remarks`, `UserName`, `CreateDate`,
               `CreateTime`, `UpdateUser`, `UpdateDate`, `UpdateTime`, `Block`, `BuCode`, `TotalNos`
        FROM `tSaleD`
        WHERE `Code` IN ({$idList})
        ORDER BY `Code` ASC, `CodeD` ASC
    ";
    $rsD = DB::Query($sqlD);

    $detailsByCode = [];
    while ($d = $rsD->fetchAssoc()) {
        $code = (int)$d['Code'];
        if (!isset($detailsByCode[$code])) {
            $detailsByCode[$code] = [];
        }
        $detailsByCode[$code][] = $d;
    }

    /* -------------------- attach details to each header -------------------- */
    foreach ($saleH as &$h) {
        $hid = (int)$h['ID'];
        $h['tSaleD'] = $detailsByCode[$hid] ?? [];
    }
    unset($h);

    /* -------------------- response -------------------- */
    echo json_encode([
        'success' => true,
        'status'  => $status,
        'count'   => count($saleH),
        'data'    => $saleH
    ]);

} catch (Exception $e) {
    http_response_code(500);
    echo json_encode(['error' => 'Fetch failed: ' . $e->getMessage()]);
}