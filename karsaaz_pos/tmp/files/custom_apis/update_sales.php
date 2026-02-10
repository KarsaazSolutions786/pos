<?php
include("../include/dbcommon.php");

header('Content-Type: application/json');

$headers = getallheaders();

$body = json_decode(file_get_contents("php://input"), true);
$api_key = $body['api_key'] ?? $body['Api_Key'] ?? null;

if (!$api_key) {
    http_response_code(401);
    echo json_encode(['error' => 'Missing API key']);
    exit;
}

try {
    $sql = "SELECT * FROM umUserInfo WHERE api_key = '" . db_addslashes($api_key) . "'";
    $rs = DB::Query($sql);
    $user = $rs->fetchAssoc();

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

if (!$body || !isset($body['master']) || !isset($body['details'])) {
    http_response_code(400);
    echo json_encode(['error' => 'Missing or invalid master/details data']);
    exit;
}

$master  = $body['master'] ?? [];
$details = $body['details'] ?? [];

// Accept virtual code from multiple casing/locations
$virtual_code = $body['virtual_code'] ?? $body['VirtualCode'] ?? ($master['VirtualCode'] ?? null);
if (!$virtual_code) {
    http_response_code(400);
    echo json_encode(['error' => 'Missing VirtualCode']);
    exit;
}

$vc_esc = db_addslashes($virtual_code);

try {
    // Make sure the voucher exists
    $existing = DB::Query("SELECT * FROM GLTH WHERE VirtualCode = '".$vc_esc."' LIMIT 1")->fetchAssoc();
    if (!$existing) {
        http_response_code(404);
        echo json_encode(['error' => 'VirtualCode not found']);
        exit;
    }

    // Derive BookCode from VirtualCode like "12-25-7" => "12257"
    $parts = explode('-', $virtual_code);
    if (count($parts) !== 3) {
        http_response_code(400);
        echo json_encode(['error' => 'Invalid VirtualCode format. Expecting n-yy-7']);
        exit;
    }
    $code = $parts[0] . $parts[1] . $parts[2];

    // Begin transactional update
    DB::Exec("START TRANSACTION");

    // Delete old detail + header rows for this VC
    DB::Exec("DELETE FROM GLTD WHERE VirtualCode = '".$vc_esc."'");
    DB::Exec("DELETE FROM GltH WHERE VirtualCode = '".$vc_esc."'");

    // Recreate header with same VirtualCode
    $currentdatetime = $master["Date"];

    $gltHData = array();
    $gltHData["BookCode"]    = $code;
    $gltHData["VirtualCode"] = $virtual_code;
    $gltHData["TBook"]       = "Journel Voucher";
    $gltHData["TType"]       = "J.v";
    $gltHData["TDate"]       = $currentdatetime;
    $gltHData["BUnit"]       = 1;
    $gltHData["Status"]      = "";
    $gltHData["UserName"]    = $user["Code"];
    $gltHData["CreateDate"]  = $currentdatetime;
    $gltHData["CreateTime"]  = $currentdatetime;
    $gltHData["Block"]       = 0;
    $gltHData["Lock"]        = 0;
    $gltHData["TotalAmount"] = $master["Amount"];

    DB::Insert("GltH", $gltHData);
    $glth_id = DB::LastId();

    // Recreate details
    foreach ($details as $entry) {
        if (!isset($entry["AccountCode"]) || !isset($entry["TStatus"])) {
            throw new Exception("Missing AccountCode or TStatus in details");
        }

        // Keep your style; also guard basic injection by casting to int
        $accCode = (int)$entry["AccountCode"];
        $pAccountsSale = DB::Query("SELECT * FROM pAccounts WHERE Code = ".$accCode);
        $rowSale = $pAccountsSale->fetchAssoc();
        if (!$rowSale) {
            throw new Exception("Account not found: ".$accCode);
        }
        $paccount_code = $rowSale["ID"];

        $gltd = array();
        $gltd["Code"]             = $glth_id;
        $gltd["BookCode"]         = $code;
        $gltd["BookID"]           = 3;
        $gltd["VirtualCode"]      = $virtual_code;
        $gltd["Status"]           = "";
        $gltd["TDate"]            = $currentdatetime;
        $gltd["BUnit"]            = 1;
        $gltd["TBook"]            = "Journel Voucher";
        $gltd["TType"]            = "J.v";
        $gltd["Narration"]        = $entry["Narration"] ?? "";
        $gltd["ParentAccountCode"]= $paccount_code;
        $gltd["AccountCode"]      = $accCode;
        $gltd["Amount"]           = $master["Amount"]; // mirrors your create API
        $gltd["StoreCode"]        = 1;
        $gltd["UserName"]         = $user["Code"];
        $gltd["CreateDate"]       = $currentdatetime;
        $gltd["CreateTime"]       = $currentdatetime;
        $gltd["Block"]            = 0;
        $gltd["TStatus"]          = $entry["TStatus"];

        DB::Insert("GLTD", $gltd);
    }

    DB::Exec("COMMIT");

    echo json_encode([
        'success'      => true,
        'message'      => 'Voucher updated successfully',
        'virtual_code' => $virtual_code,
        'master_id'    => $glth_id
    ]);

} catch (Exception $e) {
    // Roll back and best-effort cleanup of partial rows for the VC
    DB::Exec("ROLLBACK");
    DB::Exec("DELETE FROM GLTD WHERE VirtualCode = '".$vc_esc."'");
    DB::Exec("DELETE FROM GltH WHERE VirtualCode = '".$vc_esc."'");

    http_response_code(500);
    echo json_encode(['error' => 'Error updating records: ' . $e->getMessage()]);
}