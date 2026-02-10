<?php

// API URL (adjust if needed)
$url = "http://localhost:3001/custom_apis/login.php";

// User credentials to send
$data = [
    "username" => "admin",
    "password" => "admin321"
];

// Initialize cURL
$ch = curl_init($url);

// Encode data to JSON
$payload = json_encode($data);

// Set cURL options
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, [
    "Content-Type: application/json",
    "Content-Length: " . strlen($payload)
]);
curl_setopt($ch, CURLOPT_POSTFIELDS, $payload);

// Execute request
$response = curl_exec($ch);

// Check for errors
if ($response === false) {
    echo "cURL Error: " . curl_error($ch);
} else {
    // Decode and print response
    echo "Raw Response: " . $response . "\n";
    $result = json_decode($response, true);
    echo "Decoded JSON:\n";
    echo "<pre>";
    print_r($result);
    echo "</pre>";
}

// Close cURL
curl_close($ch);
