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
function generateMasterCode($masterId) {
    // Example logic: "SALE" + zero-padded masterId + current date YYYYMMDD
    $datePart = date("Ymd");
    $idPart = str_pad($masterId, 6, "0", STR_PAD_LEFT);
    return "SALE" . $idPart . $datePart;
}
$virtual_code = null;
try {
    // Step 1: Insert master without Code to get masterId
		$currentMonthNumber = date('m');
		$currentYear = date('y');
		$currentdatetime = $master["Date"];
		$last_sales_query = DB::query("SELECT * FROM tSaleH ORDER BY id DESC LIMIT 1");
		$last_sales = $last_sales_query->fetchAssoc();

		$code="";
		$virtual_code="";

		if ((int)$last_sales["TYear"] == $currentYear) {

			$get_virtual_code = $last_sales["VirtualCode"];

			$parts = explode('-', $get_virtual_code);

			$serial = (int)$parts[0] + 1;

			$code=$serial.$currentYear."3";

			$virtual_code=$serial."-".$currentYear."-3";
		} else {
			$code="1".$currentYear."3";
			$virtual_code="1-".$currentYear."-3";
		}
	
		$masterData = array();
		$masterData["TMonth"] = $currentMonthNumber;
		$masterData["TYear"] = $currentYear; // 2-digit as you said
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
		$masterData["UserName"] = $user["Code"];
		$masterData["CreateDate"] = $currentdatetime;
		$masterData["CreateTime"] = $currentdatetime;
		$masterData["Block"] = $master["Block"];
		$masterData["Code"] = (int)$code;
		$masterData["VirtualCode"] = $virtual_code;
		$masterData["SaleType"] = $master["SaleType"];
		DB::Insert("tSaleH", $masterData);


		$master_id = DB::LastId();

		
		foreach($details as $entry) {
			$detailData = array();
			$detailData["Code"] = $master_id;
			$detailData["VirtualCode"] = $virtual_code;
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
			$detailData["Status"] = "OPEN";
			$detailData["UserName"] = $user["Code"];
			$detailData["CreateDate"] = $currentdatetime;
			$detailData["CreateTime"] = $currentdatetime;
			$detailData["Block"] = $entry["Block"];
			$detailData["BuCode"] = 1;
			DB::Insert("tSaleD", $detailData);
		}

		$accountCode = ($master["SaleType"] == "Cash") ? 11 : $master["PartyCode"];
		$pAccounts = DB::Query("SELECT * FROM pAccounts WHERE Code = " . $accountCode);
		$row = $pAccounts->fetchAssoc();
		$paccount_code = $row["ID"];
		$paccount_name = $row["Name"];
    $gltHData = array();
    $gltHData["BookCode"] = $code;
    $gltHData["VirtualCode"] = $virtual_code;
    $gltHData["TBook"] = "POS";
    $gltHData["TType"] = "Point OF Sale";
    $gltHData["TDate"] = $currentdatetime;
    $gltHData["BUnit"] = 1;
    $gltHData["Status"] = "OPEN";
    $gltHData["Remarks"] = $master["Remarks"];
    $gltHData["UserName"] = $user["Code"];
    $gltHData["CreateDate"] = $currentdatetime;
    $gltHData["CreateTime"] = $currentdatetime;
    $gltHData["Block"] = 0;
    $gltHData["Lock"] = 0;
    $gltHData["TotalAmount"] = $master["GrandTotal"];
    DB::Insert("GltH", $gltHData);


    $glth_id = DB::LastId();

    $sale_narration = "Sales id ".$master_id." of Amount ".$master["GrandTotal"]." on Account ".$row["Name"];

    $gltdparty = array();
    $gltdparty["Code"] = $glth_id;
    $gltdparty["BookCode"] = $code;
    $gltdparty["BookID"] = 3;
    $gltdparty["VirtualCode"] = $virtual_code;
    $gltdparty["Status"] = "OPEN";
    $gltdparty["TDate"] = $currentdatetime;
    $gltdparty["BUnit"] = 1;
    $gltdparty["TBook"] = "POS";
    $gltdparty["TType"] = "Point OF Sale";
    $gltdparty["Narration"] = $sale_narration;
    $gltdparty["ParentAccountCode"] = $paccount_code;
    $gltdparty["AccountCode"] = $accountCode;
    $gltdparty["Remarks"] = $row["Remarks"];
    $gltdparty["Amount"] = $master["TotalAmount"];
    $gltdparty["StoreCode"] = 1;
    $gltdparty["UserName"] = $user["Code"];
    $gltdparty["CreateDate"] = $currentdatetime;
    $gltdparty["CreateTime"] = $currentdatetime;
    $gltdparty["Block"] = $row["Block"];
    $gltdparty["ProductCode"] = $row["ProductCode"];
    $gltdparty["ProductGroupCode"] = $row["ProductGroupCode"];
    $gltdparty["UnitCode"] = $row["UnitCode"];
    $gltdparty["TStatus"] = "Dr";
    DB::Insert("GLTD", $gltdparty);

    // ✅ Insert into GLTD (loop through tSaleD)
    $saleD = DB::Query("SELECT * FROM tSaleD WHERE Code = " . $master_id);
    while ($row = $saleD->fetchAssoc()) {
        $pAccountsSale = DB::Query("SELECT * FROM pAccounts WHERE Code = ". 22);
		$rowSale = $pAccountsSale->fetchAssoc();
		$paccount_code = $rowSale["ID"];
    
        $productAccountsSale = DB::Query("SELECT * FROM pproductitems WHERE ID = ". $row["ProductCode"]);
		$rowProductSale = $productAccountsSale->fetchAssoc();
		$product_account_code = $rowProductSale["Code"];

        $proAccountsSale = DB::Query("SELECT * FROM pAccounts WHERE Code = ". $product_account_code);
		$rowProSale = $proAccountsSale->fetchAssoc();
		$pro_account_code = $rowProSale["ID"];
		$pro_name = $rowProSale["Name"];
        
        $product_sale_narration = $pro_name." @ ".$row["Rate"]."x".$row["Qty"]." Total Amount ".$row["Amount"]." Account ".$paccount_name;

        $gltd = array();
        $gltd["Code"] = $glth_id;
        $gltd["BookCode"] = $code;
        $gltd["BookID"] = 3;
        $gltd["VirtualCode"] = $virtual_code;
        $gltd["Status"] = "OPEN";
        $gltd["TDate"] = $currentdatetime;
        $gltd["BUnit"] = 1;
        $gltd["TBook"] = "POS";
        $gltd["TType"] = "Point OF Sale";
        $gltd["Narration"] = $product_sale_narration;
        $gltd["ParentAccountCode"] = $paccount_code;
        $gltd["AccountCode"] = 22;
        $gltd["Remarks"] = $row["Remarks"];
        $gltd["Amount"] = $row["Amount"];
        $gltd["StoreCode"] = 1;
        $gltd["Qty"] = $row["Qty"];
        $gltd["Rate"] = $row["Rate"];
        $gltd["UserName"] = $row["UserName"];
        $gltd["CreateDate"] = $currentdatetime;
        $gltd["CreateTime"] = $currentdatetime;
        $gltd["Block"] = $row["Block"];
        $gltd["ProductCode"] = $row["ProductCode"];
        $gltd["ProductGroupCode"] = $row["ProductGroupCode"];
        $gltd["UnitCode"] = $row["UnitCode"];
        $gltd["TStatus"] = "Cr";
        DB::Insert("GLTD", $gltd);
    }
    if ($master["SaleMenCode"]) {
        $pAccountsSaleMan = DB::Query("SELECT * FROM pAccounts WHERE Code = ". $master["SaleMenCode"]);
		$rowSaleMan = $pAccountsSaleMan->fetchAssoc();
		$paccount_codesaleman = $rowSaleMan["ID"];
        $commission_account_narration = "Get Comissionn ".$master["Commission"]." from sale ".$master_id;

        $gltdsalemenDr = array();
        $gltdsalemenDr["Code"] = $glth_id;
        $gltdsalemenDr["BookCode"] = $code;
        $gltdsalemenDr["BookID"] = 3;
        $gltdsalemenDr["VirtualCode"] = $virtual_code;
        $gltdsalemenDr["Status"] = "OPEN";
        $gltdsalemenDr["TDate"] = $currentdatetime;
        $gltdsalemenDr["BUnit"] = 1;
        $gltdsalemenDr["TBook"] = "POS";
        $gltdsalemenDr["TType"] = "Point OF Sale";
        $gltdsalemenDr["Narration"] = $commission_account_narration;
        $gltdsalemenDr["ParentAccountCode"] = $paccount_codesaleman;
        $gltdsalemenDr["AccountCode"] = $master["SaleMenCode"];
        $gltdsalemenDr["Remarks"] = $row["Remarks"];
        $gltdsalemenDr["Amount"] = $master["Commission"];
        $gltdsalemenDr["StoreCode"] = 1;
        $gltdsalemenDr["UserName"] = $user["Code"];
        $gltdsalemenDr["CreateDate"] = $currentdatetime;
        $gltdsalemenDr["CreateTime"] = $currentdatetime;
        $gltdsalemenDr["Block"] = $row["Block"];
        $gltdsalemenDr["ProductCode"] = $row["ProductCode"];
        $gltdsalemenDr["ProductGroupCode"] = $row["ProductGroupCode"];
        $gltdsalemenDr["UnitCode"] = $row["UnitCode"];
        $gltdsalemenDr["TStatus"] = "Cr";
        DB::Insert("GLTD", $gltdsalemenDr);

        $pAccountsSaleManCr = DB::Query("SELECT * FROM pAccounts WHERE Code = 29");
		$rowSaleManCr = $pAccountsSaleManCr->fetchAssoc();
		$paccount_codesalemanCr = $rowSaleManCr["ID"];
        $commission_saleman_account_narration = "Get Comissionn ".$master["Commission"]." from sale id ".$master_id." Salesman ".$rowSaleMan["Name"];
        
        $gltdsalemenCr = array();
        $gltdsalemenCr["Code"] = $glth_id;
        $gltdsalemenCr["BookCode"] = $code;
        $gltdsalemenCr["BookID"] = 3;
        $gltdsalemenCr["VirtualCode"] = $virtual_code;
        $gltdsalemenCr["Status"] = "OPEN";
        $gltdsalemenCr["TDate"] = $currentdatetime;
        $gltdsalemenCr["BUnit"] = 1;
        $gltdsalemenCr["TBook"] = "POS";
        $gltdsalemenCr["TType"] = "Point OF Sale";
        $gltdsalemenCr["Narration"] = $commission_saleman_account_narration;

        $gltdsalemenCr["ParentAccountCode"] = $paccount_codesalemanCr;
        $gltdsalemenCr["AccountCode"] = 29;
        $gltdsalemenCr["Remarks"] = $row["Remarks"];
        $gltdsalemenCr["Amount"] = $master["Commission"];
        $gltdsalemenCr["StoreCode"] = 1;
        $gltdsalemenCr["Qty"] = $row["Qty"];
        $gltdsalemenCr["Rate"] = $row["Rate"];
        $gltdsalemenCr["UserName"] = $user["Code"];
        $gltdsalemenCr["CreateDate"] = $currentdatetime;
        $gltdsalemenCr["CreateTime"] = $currentdatetime;
        $gltdsalemenCr["Block"] = $row["Block"];
        $gltdsalemenCr["ProductCode"] = $row["ProductCode"];
        $gltdsalemenCr["ProductGroupCode"] = $row["ProductGroupCode"];
        $gltdsalemenCr["UnitCode"] = $row["UnitCode"];
        $gltdsalemenCr["TStatus"] = "Dr";
        DB::Insert("GLTD", $gltdsalemenCr);
    }

    echo json_encode([
        'success' => true,
        'message' => 'Master and detail records inserted successfully',
        'master_id' => $master_id
    ]);

} catch (Exception $e) {
		   if ($virtual_code !== null) {
        DB::Exec("DELETE FROM GLTD WHERE VirtualCode = '" . $virtual_code."'");
        DB::Exec("DELETE FROM GltH WHERE VirtualCode = '" . $virtual_code."'");
        DB::Exec("DELETE FROM tSaleD WHERE VirtualCode = '" . $virtual_code."'");
        DB::Exec("DELETE FROM tSaleH WHERE VirtualCode = '" . $virtual_code."'");
    }

    http_response_code(500);
    echo json_encode(['error' => 'Error inserting records: ' . $e->getMessage()]);
}