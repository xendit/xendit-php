<?php
    require('config/xendit_php_client_config.php');
	require('index.php');

	$options['secret_api_key'] = constant('SECRET_API_KEY');
	$options['server_domain'] = constant('SERVER_DOMAIN');

	$xenditPHPClient = new XenditPHPClient($options);

	$external_id = $argv[1];
	$amount = $argv[2];
	$payer_email = $argv[3];
	$description = $argv[4];

	$response = $xenditPHPClient->createInvoice($external_id, $amount, $payer_email, $description);
	print_r($response);
?>
