<?php
    require('config/xendit_php_client_config.php');
    require('XenditPHPClient.php');
    
    $options['secret_api_key'] = constant('SECRET_API_KEY');

    $xenditPHPClient = new XenditClient\XenditPHPClient($options);

    $invoice_id = $argv[1];

    $response = $xenditPHPClient->getInvoice($invoice_id);
    print_r($response);
?>
