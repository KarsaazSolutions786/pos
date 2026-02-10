<?php
// API URL for delete
$url = 'http://localhost/karsaaz_pos/custom_apis/delete_sales.php';

// Data to send — only requires the master record ID
$data = [
    "id" => 9 // Replace with the actual master ID you want to delete
];

// Convert to JSON
$jsonData = json_encode($data);

// Initialize cURL
$ch = curl_init($url);

// Set cURL options
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
curl_setopt($ch, CURLOPT_POSTFIELDS, $jsonData);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, [
    'Content-Type: application/json',
    'api_key: 123', // Replace with a valid key
    'Content-Length: ' . strlen($jsonData)
]);

// Execute the request
$response = curl_exec($ch);

// Check for cURL errors
if (curl_errno($ch)) {
    echo 'cURL error: ' . curl_error($ch);
} else {
    echo "Response from Delete API:\n";
    echo $response;
}

// Close cURL
curl_close($ch);
