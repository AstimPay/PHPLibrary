<?php
require_once 'AstimPay.php';

$apiKey = "4a59f023cbc02521417f21a0add4e028febb2ca8";
$apiBaseURL = "https://sandbox.astimpay.com/api/checkout-v1";
$astimpay = new AstimPay($apiKey, $apiBaseURL);

try {
    $ipnResponse = $astimpay->executePayment();
    
    // Process the IPN response
    if ($ipnResponse['status']) {
        // IPN request was valid, process $ipnResponse data
        // ...
        echo "IPN request successfully processed.";
    } else {
        // Invalid IPN request, handle the error
        echo "IPN request error: " . $ipnResponse['message'];
    }
} catch (Exception $e) {
    echo "Error: " . $e->getMessage();
}