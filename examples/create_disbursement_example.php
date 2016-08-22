<?php
	require('config/xendit_v2_client_config.php');
	require('index.php');

	$options['secret_api_key'] = constant('SECRET_API_KEY');

	$xenditV2InvoiceClient = new XenditV2InvoiceClient($options);

	$external_id = $argv[1];
	$amount = $argv[2];
	$bank_code = $argv[3];
	$account_holder_name = $argv[4];
	$account_number = $argv[5];

  	$xenditV2InvoiceClient->createDisbursement($external_id, $amount, $bank_code, $account_holder_name, $account_number);
?>
