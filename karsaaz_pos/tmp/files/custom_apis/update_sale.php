<?php
include("../include/dbcommon.php");
header('Content-Type: application/json');

// Step 1: Authenticate using API key
$headers = getallheaders();

// Step 2: Read and validate input JSON
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



if (!$body || !isset($body['id']) || !isset($body['master'])) {
    http_response_code(400);
    echo json_encode(['error' => 'Missing or invalid master data']);
    exit;
}

$master_id = (int)$body['id'];
$master = $body['master'] ?? [];
$details = $body['details'] ?? [];

try {
    // Step 3: Fetch existing master record
    $existing_master = DB::Query("SELECT * FROM tSaleH WHERE ID = " . $master_id)->fetchAssoc();

    if (!$existing_master) {
        http_response_code(404);
        echo json_encode(['error' => 'Master record not found']);
        exit;
    }

    // Step 4: Update tSaleH (master record)
    $currentMonthNumber = date('m');
    $currentYear = date('y');
    $currentdatetime = now();

    $masterData = array();
    $masterData["TMonth"] = $currentMonthNumber;
    $masterData["TYear"] = $currentYear;
    $masterData["BookCode"] = 3;
    $masterData["BookID"] = 3;
    $masterData["TBook"] = "POS";
    $masterData["TType"] = "Point OF Sale";
    $masterData["TDate"] = $currentdatetime;
    $masterData["BUnit"] = 1;
    $masterData["Status"] = "OPEN";
    $masterData["PartyCode"] = $master["PartyCode"];
    $masterData["TotalAmount"] = $master["TotalAmount"];
    $masterData["FreightAccountCode"] = $master["FreightAccountCode"] ?? null;
    $masterData["FreightCharges"] = $master["FreightCharges"] ?? 0;
    $masterData["LaborAccountCode"] = $master["LaborAccountCode"];
    $masterData["LaborCharges"] = $master["LaborCharges"];
    $masterData["SaleTaxAccCode"] = $master["SaleTaxAccCode"];
    $masterData["SaleTaxRate"] = $master["SaleTaxRate"];
    $masterData["SaleTaxAmount"] = $master["SaleTaxAmount"];
    $masterData["DiscountAccCode"] = $master["DiscountAccCode"];
    $masterData["DiscountRemarks"] = $master["DiscountRemarks"];
    $masterData["DiscountRate"] = $master["DiscountRate"];
    $masterData["DiscountAmount"] = $master["DiscountAmount"];
    $masterData["GrandTotal"] = $master["GrandTotal"];
    $masterData["SaleMenCode"] = $master["SaleMenCode"];
    $masterData["Commission"] = $master["Commission"];
    $masterData["Remarks"] = $master["Remarks"];
    $masterData["UpdateUser"] = $user["ID"];
    $masterData["UpdateDate"] = $currentdatetime;
    $masterData["UpdateTime"] = $currentdatetime;
    $masterData["Block"] = $master["Block"];

    DB::Update("tSaleH", $masterData, "id = " . $master_id);

    // Step 5: Loop through detail items
    $incomingDetailIds = [];

    foreach ($details as $entry) {
        $detailData = array();
        $detailData["Code"] = $master_id;
        $detailData["VirtualCode"] = $existing_master["VirtualCode"];
        $detailData["Tdate"] = $currentdatetime;
        $detailData["PartyCode"] = $master["PartyCode"];
        $detailData["StoreCode"] = 1;
        $detailData["ProductCode"] = $entry["ProductCode"];
        $detailData["ProductGroupCode"] = $entry["ProductGroupCode"];
        $detailData["UnitCode"] = $entry["UnitCode"];
        $detailData["Qty"] = $entry["Qty"];
        $detailData["Rate"] = $entry["Rate"];
        $detailData["Amount"] = $entry["Amount"];
        $detailData["Remarks"] = $entry["Remarks"];
        $detailData["UpdateUser"] = $entry["UserName"];
        $detailData["UpdateDate"] = $currentdatetime;
        $detailData["UpdateTime"] = $currentdatetime;
        $detailData["Block"] = $entry["Block"];
        $detailData["BuCode"] = 1;

        if (!empty($entry["id"]) && (int)$entry["id"] > 0) {
            // Update existing detail record
            DB::Update("tSaleD", $detailData, "id = " . (int)$entry["id"]);
            $incomingDetailIds[] = (int)$entry["id"];
        } else {
            // Insert new detail record
            DB::Insert("tSaleD", $detailData);
            $incomingDetailIds[] = DB::LastId();
        }
    }

    // Step 6: Remove any detail records not in incoming list
    if (!empty($incomingDetailIds)) {
        $idList = implode(",", $incomingDetailIds);
        DB::Exec("DELETE FROM tSaleD WHERE Code = $master_id AND id NOT IN ($idList)");
    } else {
        DB::Exec("DELETE FROM tSaleD WHERE Code = $master_id");
    }

    // Step 7: Return success response
    echo json_encode([
        'success' => true,
        'message' => 'Master and detail records updated successfully',
        'master_id' => $master_id
    ]);

} catch (Exception $e) {
    http_response_code(500);
    echo json_encode(['error' => 'Error updating records: ' . $e->getMessage()]);
}
