<?php
	require('../config/partner_invoice_service_client.php');
	require('../config/partner.php');
	require('../config/secret_key.php');
	require('../partner_invoice_service_client/index.php');

	$options['server_domain'] = constant('SERVER_DOMAIN');
	$options['partner_id'] = constant('PARTNER_ID');
	$options['secret_key'] = constant('SECRET_KEY');

	$partnerInvoiceServiceClient = new PartnerInvoiceServiceClient($options);

	$amount = $argv[1];
	$payer_email = $argv[2];
	$description = $argv[3];

	$partnerInvoiceServiceClient->postInvoice($amount, $payer_email, $description);
?>