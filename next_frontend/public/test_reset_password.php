<?php

// Password reset API URL
$url = "https://karsaazpos.karsaazebs.com/custom_apis/reset_password.php";

// Data to send
$data = [
    "username" => "admin",
    "new_password" => "admin321"
];

// Initialize cURL
$ch = curl_init($url);

// Encode the data as JSON
$payload = json_encode($data);

// Set cURL options
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, [
    "Content-Type: application/json",
    "Content-Length: " . strlen($payload)
]);
curl_setopt($ch, CURLOPT_POSTFIELDS, $payload);

// Execute the request
$response = curl_exec($ch);

// Check for errors
if ($response === false) {
    echo "cURL Error: " . curl_error($ch);
} else {
    $result = json_decode($response, true);
    echo "<pre>";
    print_r($result);
    echo "</pre>";
}

// Close the cURL session
curl_close($ch);
