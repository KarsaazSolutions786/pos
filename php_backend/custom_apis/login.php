<?php
include("../include/dbcommon.php");
header('Content-Type: application/json');

$body = json_decode(file_get_contents("php://input"), true);

if (!isset($body["username"]) || !isset($body["password"])) {
    http_response_code(400);
    echo json_encode(['error' => 'Missing username or password']);
    exit;
}

$username = trim($body["username"]);
$password = trim($body["password"]);

try {
    // Build SQL with PHPRunner escaping (no '?' placeholders)
    $sql = "SELECT `Code`, `UserName`, `CellNo`, `Email`, `LoginUserName`, `Password`, `PasswordHint`,
                   `GroupCode`, `Remarks`, `UserType`, `isAccountActive`, `NoOfAttempt`, `NoOfWorngAttempt`, `api_key`
            FROM `umUserInfo`
            WHERE `LoginUserName` = " . db_prepare_string($username);

    $rs = DB::Query($sql);
    $user = $rs ? $rs->fetchAssoc() : null;

    if (!$user) {
        http_response_code(401);
        echo json_encode(['error' => 'Invalid username or password']);
        exit;
    }

    if ((int)$user["isAccountActive"] !== 1) {
        http_response_code(403);
        echo json_encode(['error' => 'Account is inactive. Contact admin.']);
        exit;
    }

    $maxAttempts   = (int)$user["NoOfAttempt"];
    $wrongAttempts = (int)$user["NoOfWorngAttempt"];

    // If a limit is set and we've hit it, lock
    if ($maxAttempts > 0 && $wrongAttempts >= $maxAttempts) {
        http_response_code(403);
        echo json_encode(['error' => 'Account is locked. Too many failed attempts. Contact admin.']);
        exit;
    }

    // Plain-text comparison (as in your DB) – consider migrating to password_hash
    if ($password !== $user["Password"]) {
        $newAttempts = $wrongAttempts + 1;

        DB::Exec(
            "UPDATE `umUserInfo` 
             SET `NoOfWorngAttempt` = " . (int)$newAttempts . " 
             WHERE `Code` = " . (int)$user["Code"]
        );

        $remaining = ($maxAttempts > 0) ? max(0, $maxAttempts - $newAttempts) : 0;
        $msg = ($maxAttempts > 0 && $remaining > 0)
            ? "Invalid password. $remaining attempts remaining."
            : "Account locked. Contact admin.";

        http_response_code(401);
        echo json_encode(['error' => $msg]);
        exit;
    }

    // ✅ Password matched — reset attempts
    DB::Exec(
        "UPDATE `umUserInfo` 
         SET `NoOfWorngAttempt` = 0 
         WHERE `Code` = " . (int)$user["Code"]
    );

    unset($user["Password"]); // don’t return password

    echo json_encode([
        'success' => true,
        'message' => 'Login successful',
        'user' => $user
    ]);

} catch (Throwable $e) {
    http_response_code(500);
    echo json_encode(['error' => 'Login failed: ' . $e->getMessage()]);
}
