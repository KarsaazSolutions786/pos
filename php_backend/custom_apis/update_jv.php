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

// -------- API KEY CHECK --------
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

// -------- BASIC BODY CHECKS --------
if (!$body || !isset($body['master'])) {
    http_response_code(400);
    echo json_encode(['error' => 'Missing or invalid master data']);
    exit;
}

$master  = $body['master'] ?? [];
$details = $body['details'] ?? [];

$virtual_code = $master['VirtualCode'] ?? null;

if (!$virtual_code) {
    http_response_code(400);
    echo json_encode(['error' => 'Missing VirtualCode in master']);
    exit;
}

try {
    $currentdatetime = now();

    // 1) Fetch existing GLTH row by VirtualCode (only J.v)
    $qGlth = DB::Query(
        "SELECT * FROM GLTH 
         WHERE VirtualCode = '" . db_addslashes($virtual_code) . "' 
           AND TType = 'J.v'
         LIMIT 1"
    );

    if (!$qGlth) {
        throw new Exception("Failed to query GLTH for VirtualCode '{$virtual_code}'");
    }

    $glthRow = $qGlth->fetchAssoc();

    if (!$glthRow) {
        http_response_code(404);
        echo json_encode(['error' => "Journal voucher not found for VirtualCode '{$virtual_code}'"]);
        exit;
    }

    $glth_id = $glthRow["Code"];      // primary key of header
    $code    = $glthRow["BookCode"];  // existing BookCode

    // 2) Update GLTH header (TotalAmount + update fields)
    $updateGlth = array();

    if (isset($master["Amount"])) {
        $updateGlth["TotalAmount"] = $master["Amount"];
    }

    $updateGlth["UpdateUser"] = $user["Code"];
    $updateGlth["UpdateDate"] = $currentdatetime;
    $updateGlth["UpdateTime"] = $currentdatetime;

    if (!empty($updateGlth)) {
        DB::Update("GLTH", $updateGlth, "Code = " . (int)$glth_id);
    }

    // 3) Delete existing GLTD rows for this VirtualCode
    DB::Exec(
        "DELETE FROM GLTD 
         WHERE VirtualCode = '" . db_addslashes($virtual_code) . "'"
    );

    // 4) Insert new GLTD rows
    foreach ($details as $entry) {

        if (!isset($entry["AccountCode"])) {
            throw new Exception("Missing AccountCode in one of the detail rows");
        }

        $accCode = $entry["AccountCode"];

        // Get pAccounts row
        $pAccountsSale = DB::Query(
            "SELECT * FROM pAccounts 
             WHERE Code = '" . db_addslashes($accCode) . "'"
        );

        if (!$pAccountsSale) {
            throw new Exception("pAccounts query failed for AccountCode '{$accCode}'");
        }

        $rowSale = $pAccountsSale->fetchAssoc();

        if (!$rowSale) {
            throw new Exception("Account with Code '{$accCode}' not found in pAccounts");
        }

        $paccount_code = $rowSale["ID"];

        $gltd = array();
        $gltd["Code"]            = $glth_id;
        $gltd["BookCode"]        = $code;
        $gltd["BookID"]          = 3;
        $gltd["VirtualCode"]     = $virtual_code;
        $gltd["Status"]          = "";
        $gltd["TDate"]           = $currentdatetime;
        $gltd["BUnit"]           = 1;
        $gltd["TBook"]           = "Journel Voucher";
        $gltd["TType"]           = "J.v";
        $gltd["BillNo"]          = $master["BillNo"];
        $gltd["ChequeNo"]        = $master["ChequeNo"];
        $gltd["Narration"]       = $entry["Narration"] ?? "";
        $gltd["ParentAccountCode"] = $paccount_code;
        $gltd["AccountCode"]     = $accCode;
        // If detail has its own amount, use it; otherwise use master amount
        $gltd["Amount"]          = $entry["Amount"] ?? $master["Amount"];
        $gltd["StoreCode"]       = 1;
        $gltd["UserName"]        = $user["Code"];
        $gltd["CreateDate"]      = $currentdatetime;
        $gltd["CreateTime"]      = $currentdatetime;
        $gltd["Block"]           = 0;
        $gltd["TStatus"]         = $entry["TStatus"] ?? "";

        DB::Insert("GLTD", $gltd);
    }

    echo json_encode([
        'success'      => true,
        'message'      => 'Journal voucher updated successfully',
        'virtual_code' => $virtual_code,
        'master_id'    => $glth_id
    ]);

} catch (Exception $e) {

    // On error, ensure we don't leave half-inserted detail rows
    if (!empty($virtual_code)) {
        DB::Exec(
            "DELETE FROM GLTD 
             WHERE VirtualCode = '" . db_addslashes($virtual_code) . "'"
        );
    }

    http_response_code(500);
    echo json_encode(['error' => 'Error updating records: ' . $e->getMessage()]);
}