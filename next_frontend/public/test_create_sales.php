<?php
// API URL
$url = 'm';

// Minimal required payload based on server code logic
$data = [
	"api_key" => 123,
    "master" => [
        "PartyCode" => 1,
        "TotalAmount" => 1000.50,
        "LaborAccountCode" => 1,
		"FreightAccountCode" => 1, // optional
		"FreightCharges" => 100, // optional
        "LaborCharges" => 30.00, // optional
        "SaleTaxAccCode" => 1, // optional
        "SaleTaxRate" => 10, // optional
        "SaleTaxAmount" => 100.00, // optional
        "DiscountAccCode" => 1, // optional
        "DiscountRemarks" => "Seasonal Discount", // optional
        "DiscountRate" => 5, // optional
        "DiscountAmount" => 50.00, // optional
        "GrandTotal" => 1030.50,
        "SaleMenCode" => 1, // optional
        "Commission" => 15.00,  // optional
        "Remarks" => "Customer order remarks", // optional
		"SaleType" => "Cash",
        "Block" => 0 
        // status field is missing in the server code
    ],
    "details" => [
        [
            "ProductCode" => 1,
            "ProductGroupCode" => 1,
            "UnitCode" => 1,
            "Qty" => 10,
            "Rate" => 50.00,
            "Amount" => 500.00,
            "Remarks" => "Detail remarks", // optional
            "UserName" => 1
        ],
        [
            "ProductCode" => 2,
            "ProductGroupCode" => 2,
            "UnitCode" => 1,
            "Qty" => 5,
            "Rate" => 100.00,
            "Amount" => 500.00,
            "Remarks" => "Another detail remarks",
            "UserName" => 1
        ]
    ]
];

// Convert data array to JSON
$jsonData = json_encode($data);

// Initialize cURL session
$ch = curl_init($url);

// Set cURL options
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
curl_setopt($ch, CURLOPT_POSTFIELDS, $jsonData);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

// Set headers, including api_key
curl_setopt($ch, CURLOPT_HTTPHEADER, [
    'Content-Type: application/json',
    'Content-Length: ' . strlen($jsonData)
]);

// Execute the request
$response = curl_exec($ch);

// Check for cURL errors
if (curl_errno($ch)) {
    echo 'cURL error: ' . curl_error($ch);
} else {
    echo "Response from API:\n";
    echo $response;
}

// Close cURL session
curl_close($ch);