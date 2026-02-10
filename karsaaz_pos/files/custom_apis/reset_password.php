<?php
include("../include/dbcommon.php");
header('Content-Type: application/json');

// Read JSON body
$body = json_decode(file_get_contents("php://input"), true);

// Validate input
if (!isset($body["username"], $body["new_password"])) {
    http_response_code(400);
    echo json_encode(['error' => 'Missing required fields: username, new_password']);
    exit;
}

$username = trim($body["username"]);
$newPassword = trim($body["new_password"]);

// Validate new password length
if (strlen($newPassword) < 8) {
    http_response_code(400);
    echo json_encode(['error' => 'New password must be at least 8 characters long']);
    exit;
}

try {
    // Step 1: Fetch user by username
    $sql = "SELECT `Code`, `isAccountActive` FROM `umUserInfo` WHERE `LoginUserName` = ?";
    $rs = DB::Query($sql, [$username]);
    $user = $rs->fetchAssoc();

    if (!$user) {
        http_response_code(404);
        echo json_encode(['error' => 'User not found']);
        exit;
    }

    if ((int)$user['isAccountActive'] !== 1) {
        http_response_code(403);
        echo json_encode(['error' => 'Account is inactive. Contact admin.']);
        exit;
    }

    // Step 2: Update password in plain text and reset failed attempts
    DB::Exec(
        "UPDATE `umUserInfo` SET `Password` = ?, `NoOfWorngAttempt` = 0 WHERE `Code` = ?",
        [$newPassword, $user['Code']]
    );

    echo json_encode(['success' => true, 'message' => 'Password has been reset successfully']);

} catch (Exception $e) {
    http_response_code(500);
    echo json_encode(['error' => 'Password reset failed: ' . $e->getMessage()]);
}
