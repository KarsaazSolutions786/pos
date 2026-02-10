<?php
// API URL for update
$url = 'https://karsaazpos.karsaazebs.com/custom_apis/update_sales.php';

// JSON payload (based on your example)
$data = [
    "id" => 9,
	"api_key" => 123,
    "master" => [
        "PartyCode" => 1,
        "TotalAmount" => 1500,
        "FreightAccountCode" => "F001",
        "FreightCharges" => 100,
        "LaborAccountCode" => "L001",
        "LaborCharges" => 50,
        "SaleTaxAccCode" => "ST001",
        "SaleTaxRate" => 5,
        "SaleTaxAmount" => 75,
        "DiscountAccCode" => "D001",
        "DiscountRemarks" => "Seasonal discount",
        "DiscountRate" => 10,
        "DiscountAmount" => 150,
        "GrandTotal" => 1475,
        "SaleMenCode" => "SM001",
        "Commission" => 25,
        "Remarks" => "Updated record",
				"SaleType" => "Cash",
        "Block" => "A"
    ],
    "details" => [
        [
            "ProductCode" => 1,
            "ProductGroupCode" => 1,
            "UnitCode" => "PCS",
            "Qty" => 5,
            "Rate" => 200,
            "Amount" => 1000,
            "Remarks" => "Updated qty",
            "UserName" => "admin",
            "Block" => "A"
        ],
        [
            // new row to insert
            "ProductCode" => 2,
            "ProductGroupCode" => 1,
            "UnitCode" => "BOX",
            "Qty" => 1,
            "Rate" => 500,
            "Amount" => 500,
            "Remarks" => "New item",
            "UserName" => "admin",
            "Block" => "A"
        ]
    ]
];

// Encode the data to JSON
$jsonData = json_encode($data);

// Initialize cURL
$ch = curl_init($url);

// Set cURL options
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
curl_setopt($ch, CURLOPT_POSTFIELDS, $jsonData);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, [
    'Content-Type: application/json',
    'Content-Length: ' . strlen($jsonData)
]);

// Execute request
$response = curl_exec($ch);

// Check for errors
if (curl_errno($ch)) {
    echo 'cURL error: ' . curl_error($ch);
} else {
    echo "Response from Update API:\n";
    echo $response;
}

// Close connection
curl_close($ch);
