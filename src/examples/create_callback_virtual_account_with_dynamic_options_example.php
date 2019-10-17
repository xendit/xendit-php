<?php
    require('config/xendit_php_client_config.php'); 
    require('XenditPHPClient.php');
    
    $options['secret_api_key'] = constant('SECRET_API_KEY');

    $xenditPHPClient = new XenditClient\XenditPHPClient($options);

    $external_id = $argv[1];
    $bank_code = $argv[2];
    $name = $argv[3];
    $amount = $argv[4];

    $callback_virtual_account_options = [
        'is_closed' => true, 
        'expected_amount' => $amount
    ];

    $response = $xenditPHPClient->createCallbackVirtualAccount($external_id, $bank_code, $name, null, $callback_virtual_account_options);
    print_r($response);
?>
