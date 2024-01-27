# MWC Pay PHP SDK Example

Run the following commands from inside this directory to run this example. This example demonstrates how to create a payment, query its status, and get the current price of MimbleWimble Coin.
```
composer require nicolasflamel/mwc-pay
php index.php
```

If ran successfully, it should display something similar to the following.
```
Creating payment
Payment ID: 8666725530742698472
URL: mswedwkqfp4pwzijipz8
Recipient payment proof address: kvux7qqyighgb2nkfqio6fy2jyksq5nubjncq3xxh6hrstdvibfcxqqd
Getting payment info
URL: mswedwkqfp4pwzijipz8
Price: 123.456
Required confirmations: 5
Received: false
Confirmations: 0
Time remaining: 600
Status: Not received
Recipient payment proof address: kvux7qqyighgb2nkfqio6fy2jyksq5nubjncq3xxh6hrstdvibfcxqqd
Getting price
Price: 4.04839527
```
