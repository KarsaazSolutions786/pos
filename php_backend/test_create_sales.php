<?php
// API URL
$url = 'http://localhost/karsaaz_pos/custom_apis/create_sales.php';

// Minimal required payload based on server code logic
$data = [
    "master" => [
        "PartyCode" => 71,
        "TotalAmount" => 1000.50,
        "LaborAccountCode" => 1,
				"FreightAccountCode" => 1,
				"FreightCharges" => 100, 
        "LaborCharges" => 30.00,
        "SaleTaxAccCode" => 1,
        "SaleTaxRate" => 10,
        "SaleTaxAmount" => 100.00,
        "DiscountAccCode" => 1,
        "DiscountRemarks" => "Seasonal Discount",
        "DiscountRate" => 5,
        "DiscountAmount" => 50.00,
        "GrandTotal" => 1030.50,
        "SaleMenCode" => 1,
        "Commission" => 15.00,
        "Remarks" => "Customer order remarks",
				"SaleType" => "Cash",
        "Block" => 0
    ],
    "details" => [
        [
            "ProductCode" => 51,
            "ProductGroupCode" => 1,
            "UnitCode" => 1,
            "Qty" => 10,
            "Rate" => 50.00,
            "Amount" => 500.00,
            "Remarks" => "Detail remarks",
            "UserName" => 1
        ],
        [
            "ProductCode" => 51,
            "ProductGroupCode" => 1,
            "UnitCode" => 1,
            "Qty" => 5,
            "Rate" => 100.00,
            "Amount" => 500.00,
            "Remarks" => "Another detail remarks",
            "UserName" => 1
        ]
    ],
	"api_key" => "123"
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
    'api_key: 123', // Replace with actual valid API key
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