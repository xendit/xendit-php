<?php
    require('config/xendit_v2_client_config.php');
    require('index.php');
    
    $options['secret_api_key'] = constant('SECRET_API_KEY');

    $xenditV2InvoiceClient = new XenditV2InvoiceClient($options);

    $invoice_id = $argv[1];

    $xenditV2InvoiceClient->getInvoice($invoice_id);
?>
