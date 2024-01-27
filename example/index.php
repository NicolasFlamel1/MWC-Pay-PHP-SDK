<?php


// Require dependencies
require_once __DIR__ . '/vendor/autoload.php';

// Use MWC Pay class
use Nicolasflamel\MwcPay\MwcPay;

// Test MWC Pay
echo MwcPay::createPayment();


?>
