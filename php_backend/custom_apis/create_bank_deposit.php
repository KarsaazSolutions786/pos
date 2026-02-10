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


if (!$body || !isset($body['master'])) {
    http_response_code(400);
    echo json_encode(['error' => 'Missing or invalid master data']);
    exit;
}

$master = $body['master'] ?? [];
$details = $body['details'] ?? [];

// Your custom function to generate Code from masterId and date (or anything else)
$virtual_code = null;
try {
    // Step 1: Insert master without Code to get masterId
		$currentMonthNumber = date('m');
		$currentYear = date('y');
		$currentdatetime = now();
		$last_sales_query = DB::query("SELECT * FROM GLTH WHERE (TType = 'Bank Deposit') ORDER BY Code DESC LIMIT 1");
		$last_sales = $last_sales_query->fetchAssoc();

		$code="";
		$virtual_code="";

		if ((int)$last_sales["TYear"] == $currentYear) {

			$get_virtual_code = $last_sales["VirtualCode"];

			$parts = explode('-', $get_virtual_code);

			$serial = (int)$parts[0] + 1;

			$code=$serial.$currentYear."7";

			$virtual_code=$serial."-".$currentYear."-7";
		} else {
			$code="1".$currentYear."7";
			$virtual_code="1-".$currentYear."-7";
		}
	


    $gltHData = array();
    $gltHData["BookCode"] = $code;
    $gltHData["VirtualCode"] = $virtual_code;
    $gltHData["TBook"] = "Bank Deposit";
    $gltHData["TType"] = "Bank Deposit";
    $gltHData["TDate"] = $currentdatetime;
    $gltHData["BUnit"] = 1;
    $gltHData["Status"] = "";
    $gltHData["UserName"] = $user["Code"];
    $gltHData["CreateDate"] = $currentdatetime;
    $gltHData["CreateTime"] = $currentdatetime;
    $gltHData["Block"] = 0;
    $gltHData["Lock"] = 0;
    $gltHData["TotalAmount"] = $master["Amount"];
    DB::Insert("GltH", $gltHData);


    $glth_id = DB::LastId();

    foreach ($details as $entry) {
        $pAccountsSale = DB::Query("SELECT * FROM pAccounts WHERE Code = ". $entry["AccountCode"]);
		$rowSale = $pAccountsSale->fetchAssoc();
		$paccount_code = $rowSale["ID"];
    

        $gltd = array();
        $gltd["Code"] = $glth_id;
        $gltd["BookCode"] = $code;
        $gltd["BookID"] = 3;
        $gltd["VirtualCode"] = $virtual_code;
        $gltd["Status"] = "";
        $gltd["TDate"] = $currentdatetime;
        $gltd["BUnit"] = 1;
        $gltd["TBook"] = "Bank Deposit";
        $gltd["TType"] = "Bank Deposit";
        $gltd["BillNo"] = $master["BillNo"];
        $gltd["ChequeNo"] = $master["ChequeNo"];
        $gltd["Narration"] = $entry["Narration"];
        $gltd["ParentAccountCode"] = $paccount_code;
        $gltd["AccountCode"] = $entry["AccountCode"];
        $gltd["Amount"] = $master["Amount"];
        $gltd["StoreCode"] = 1;
        $gltd["UserName"] = $user["Code"];
        $gltd["CreateDate"] = $currentdatetime;
        $gltd["CreateTime"] = $currentdatetime;
        $gltd["Block"] = 0;
        $gltd["TStatus"] = $entry["TStatus"];
        DB::Insert("GLTD", $gltd);
    }

    echo json_encode([
        'success' => true,
        'message' => 'Master and detail records inserted successfully',
        'master_id' => $glth_id
    ]);

} catch (Exception $e) {
		   if ($virtual_code !== null) {
        DB::Exec("DELETE FROM GLTD WHERE VirtualCode = '" . $virtual_code."'");
        DB::Exec("DELETE FROM GltH WHERE VirtualCode = '" . $virtual_code."'");
    }

    http_response_code(500);
    echo json_encode(['error' => 'Error inserting records: ' . $e->getMessage()]);
}