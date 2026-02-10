<?php
/**
 * jv_delete.php
 * POST JSON:
 * {
 *   "api_key": "YOUR_KEY",
 *   "virtual_code": "12-25-7"      // or "VirtualCode" or master.VirtualCode
 * }
 * Response:
 * {
 *   "success": true,
 *   "virtual_code": "12-25-7",
 *   "deleted": { "masters": 1, "details": 2 }
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

/* -------------------- input: virtual code -------------------- */
$virtual_code =
    $body['virtual_code'] ??
    ($body['VirtualCode'] ?? ($body['master']['VirtualCode'] ?? null));

if (!$virtual_code || !is_string($virtual_code) || !trim($virtual_code)) {
    http_response_code(400);
    echo json_encode(['error' => 'Missing VirtualCode']); exit;
}
$virtual_code = trim($virtual_code);
$vcSafe = db_addslashes($virtual_code);

/* -------------------- ensure exists, get counts -------------------- */
try {
    // Find matching masters
    $rsH = DB::Query("SELECT `Code` FROM GltH WHERE VirtualCode = '".$vcSafe."'");
    $codes = [];
    while ($r = $rsH->fetchAssoc()) {
        $codes[] = (int)$r['Code'];
    }
    if (!$codes) {
        http_response_code(404);
        echo json_encode(['error' => 'VirtualCode not found']); exit;
    }

    // Pre-count (for response)
    $rsCntH = DB::Query("SELECT COUNT(*) AS c FROM GltH WHERE VirtualCode = '".$vcSafe."'");
    $masters_to_del = (int)($rsCntH->fetchAssoc()['c'] ?? 0);

    $rsCntD = DB::Query("SELECT COUNT(*) AS c FROM GLTD WHERE VirtualCode = '".$vcSafe."'");
    $details_to_del = (int)($rsCntD->fetchAssoc()['c'] ?? 0);

    /* -------------------- delete inside transaction -------------------- */
    DB::Exec("START TRANSACTION");

    // Delete details first (FK safe)
    DB::Exec("DELETE FROM GLTD WHERE VirtualCode = '".$vcSafe."'");

    // Delete masters
    DB::Exec("DELETE FROM GltH WHERE VirtualCode = '".$vcSafe."'");

    DB::Exec("COMMIT");

    echo json_encode([
        'success'       => true,
        'virtual_code'  => $virtual_code,
        'deleted'       => [
            'masters' => $masters_to_del,
            'details' => $details_to_del
        ]
    ]);
} catch (Exception $e) {
    DB::Exec("ROLLBACK");
    http_response_code(500);
    echo json_encode(['error' => 'Delete failed: ' . $e->getMessage()]);
}