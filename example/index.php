<?php


// Require dependencies
require_once __DIR__ . "/vendor/autoload.php";

// Use MWC Pay
use Nicolasflamel\MwcPay\MwcPay;


// Initialize MWC Pay
$mwcPay = new MwcPay();

// Display message
echo "Creating payment" . PHP_EOL;

// Create payment
$payment = $mwcPay->createPayment("123.456", 5, 600, "http://example.com/completed", "http://example.com/received", "http://example.com/confirmed", "http://example.com/expired");

// Check if creating payment failed due to invalid parameters
if($payment === NULL) {

	// Display error
	echo "Invalid parameters" . PHP_EOL;
}

// Otherwise check if creating payment failed due to a server error
else if($payment === FALSE) {

	// Display error
	echo "Server error" . PHP_EOL;
}

// Otherwise
else {

	// Display payment's payment ID, URL, and recipient payment proof address
	echo "Payment ID: {$payment["payment_id"]}" . PHP_EOL;
	echo "URL: {$payment["url"]}" . PHP_EOL;
	echo "Recipient payment proof address: {$payment["recipient_payment_proof_address"]}" . PHP_EOL;
	
	// Display message
	echo "Getting payment info" . PHP_EOL;
	
	// Get payment info
	$paymentInfo = $mwcPay->getPaymentInfo($payment["payment_id"]);
	
	// Check if getting payment info failed due to invalid parameters
	if($paymentInfo === NULL) {

		// Display error
		echo "Invalid parameters" . PHP_EOL;
	}

	// Otherwise check if getting payment info failed due to a server error
	else if($paymentInfo === FALSE) {

		// Display error
		echo "Server error" . PHP_EOL;
	}

	// Otherwise
	else {
	
		// Display payment info's URL, price, required confirmations, received, confirmations, time remaining, status, and recipient payment proof address
		echo "URL: {$paymentInfo["url"]}" . PHP_EOL;
		echo "Price: " . (($paymentInfo["price"] === NULL) ? "N/A" : $paymentInfo["price"]) . PHP_EOL;
		echo "Required confirmations: {$paymentInfo["required_confirmations"]}" . PHP_EOL;
		echo "Received: " . (($paymentInfo["received"] === TRUE) ? "true" : "false") . PHP_EOL;
		echo "Confirmations: {$paymentInfo["confirmations"]}" . PHP_EOL;
		echo "Time remaining: " . (($paymentInfo["time_remaining"] === NULL) ? "N/A" : $paymentInfo["time_remaining"]) . PHP_EOL;
		echo "Status: {$paymentInfo["status"]}" . PHP_EOL;
		echo "Recipient payment proof address: {$paymentInfo["recipient_payment_proof_address"]}" . PHP_EOL;
		
		// Display message
		echo "Getting price" . PHP_EOL;
		
		// Get price
		$price = $mwcPay->getPrice();
		
		// Check if getting price failed due to invalid parameters
		if($price === NULL) {

			// Display error
			echo "Invalid parameters" . PHP_EOL;
		}

		// Otherwise check if getting price failed due to a server error
		else if($price === FALSE) {

			// Display error
			echo "Server error" . PHP_EOL;
		}

		// Otherwise
		else {
		
			// Display price
			echo "Price: $price" . PHP_EOL;
			
			// Display message
			echo "Getting public server info" . PHP_EOL;
			
			// Get public server info
			$publicServerInfo = $mwcPay->getPublicServerInfo();
			
			// Check if getting public server info failed due to invalid parameters
			if($publicServerInfo === NULL) {

				// Display error
				echo "Invalid parameters" . PHP_EOL;
			}

			// Otherwise check if getting public server info failed due to a server error
			else if($publicServerInfo === FALSE) {

				// Display error
				echo "Server error" . PHP_EOL;
			}

			// Otherwise
			else {
			
				// Display public server info's URL and Onion Service address
				echo "URL: {$publicServerInfo["url"]}" . PHP_EOL;
				echo "Onion Service address: " . (($publicServerInfo["onion_service_address"] === NULL) ? "N/A" : $publicServerInfo["onion_service_address"]) . PHP_EOL;
			}
		}
	}
}


?>
