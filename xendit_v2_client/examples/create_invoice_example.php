<?php
	require('../config/xendit_v2_client_config.php');
	require('../../config/secret_key.php');
	require('../index.php');

	$options['server_domain'] = constant('SERVER_DOMAIN');
	$options['secret_api_key'] = constant('SECRET_API_KEY');

	$xenditV2InvoiceClient = new XenditV2InvoiceClient($options);

	$external_id = $argv[1];
	$amount = $argv[2];
	$payer_email = $argv[3];
	$description = $argv[4];

	$xenditV2InvoiceClient->createInvoice($external_id, $amount, $payer_email, $description);
?>