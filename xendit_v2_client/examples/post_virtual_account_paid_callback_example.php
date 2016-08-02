<?php
	require('../config/xendit_v2_client_config.php');
	require('../../config/secret_key.php');
	require('../index.php');

	$options['server_domain'] = constant('SERVER_DOMAIN');
	$options['secret_api_key'] = constant('SECRET_API_KEY');

	$xenditV2InvoiceClient = new XenditV2InvoiceClient($options);

	$payment_id = $argv[1];
	$external_id = $argv[2];
	$owner_id = $argv[3];
	$amount = $argv[4];
	$bank_code = $argv[4];
	$transaction_timestamp = date('Y-m-d\TH:i:s\Z');

  	$xenditV2InvoiceClient->postVirtualAccountPaidCallback($payment_id, $external_id, $owner_id, $amount, $bank_code, $transaction_timestamp);
?>