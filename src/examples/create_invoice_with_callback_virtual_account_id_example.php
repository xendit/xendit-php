<?php
    require('config/xendit_php_client_config.php');
    require('XenditPHPClient.php');
    
    $options['secret_api_key'] = constant('SECRET_API_KEY');

    $xenditPHPClient = new XenditClient\XenditPHPClient($options);

    $external_id = $argv[1];
    $amount = $argv[2];
    $payer_email = $argv[3];
    $description = $argv[4];
    $options['callback_virtual_account_id'] = $argv[5];

    $response = $xenditPHPClient->createInvoice($external_id, $amount, $payer_email, $description, $options);
    print_r($response);
?>
