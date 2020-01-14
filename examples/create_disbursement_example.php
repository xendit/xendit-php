<?php
    require('config/xendit_php_client_config.php');
    require('XenditPHPClient.php');
    
    $options['secret_api_key'] = constant('SECRET_API_KEY');

    $xenditPHPClient = new XenditClient\XenditPHPClient($options);

    $external_id = $argv[1];
    $amount = $argv[2];
    $bank_code = $argv[3];
    $account_holder_name = $argv[4];
    $account_number = $argv[5];

    $response = $xenditPHPClient->createDisbursement($external_id, $amount, $bank_code, $account_holder_name, $account_number);
    print_r($response);
?>
