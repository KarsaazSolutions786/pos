<?php
include("../include/dbcommon.php");
header('Content-Type: application/json');

// Step 1: Validate API key
$headers = getallheaders();

// Step 2: Parse input JSON
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
        exit
    }
} catch (Exception $e) {
    http_response_code(500);
    echo json_encode(['error' => 'API key check failed: ' . $e->getMessage()]);
    exit;
}


if (!$body || !isset($body['id'])) {
    http_response_code(400);
    echo json_encode(['error' => 'Missing master ID']);
    exit;
}

$master_id = (int)$body['id'];

try {
    // Step 3: Check if master exists
    $existing = DB::Query("SELECT * FROM tSaleH WHERE ID = $master_id")->fetchAssoc();

    if (!$existing) {
        http_response_code(404);
        echo json_encode(['error' => 'Master record not found']);
        exit;
    }

    // Step 4: Delete related detail records
    DB::Exec("DELETE FROM tSaleD WHERE Code = $master_id");

    // Step 5: Delete master record
    DB::Exec("DELETE FROM tSaleH WHERE id = $master_id");

		DB::Exec("DELETE FROM GLTD WHERE VirtualCode = '" . $existing["VirtualCode"]."'");


	  DB::Exec("DELETE FROM GltH WHERE VirtualCode = '" . $existing["VirtualCode"]."'");

    // Step 6: Return success
    echo json_encode([
        'success' => true,
        'message' => 'Record deleted successfully',
        'deleted_id' => $master_id
    ]);
} catch (Exception $e) {
    http_response_code(500);
    echo json_encode(['error' => 'Error deleting record: ' . $e->getMessage()]);
}