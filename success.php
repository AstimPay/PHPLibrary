<?php
require_once 'AstimPay.php';

$apiKey = "4a59f023cbc02521417f21a0add4e028febb2ca8"; // API KEY
$apiBaseURL = "https://sandbox.astimpay.com/api/checkout-v1"; // API URL
$astimpay = new AstimPay($apiKey, $apiBaseURL);

// Simulating getting the invoice ID from payment success page (GET or POST)
$invoiceId = $_REQUEST['invoice_id']; // Assuming you receive it via GET or POST

try {
    // Verify payment
    $response = $astimpay->verifyPayment($invoiceId);

    print_r($response); // Display the verification response
} catch (Exception $e) {
    echo "Verification Error: " . $e->getMessage();
}