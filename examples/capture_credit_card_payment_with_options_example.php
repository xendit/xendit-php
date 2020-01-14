<?php
    require('config/xendit_php_client_config.php');
    require('XenditPHPClient.php');

    $options['secret_api_key'] = constant('SECRET_API_KEY');

    $xenditPHPClient = new XenditClient\XenditPHPClient($options);

    $external_id = $argv[1];
    $token_id = $argv[2];
    $amount = $argv[3];
    $capture_options['authentication_id'] = $argv[4];

    $response = $xenditPHPClient->captureCreditCardPayment($external_id, $token_id, $amount, $capture_options);

    print_r($response);
?>
