<?php
    require('config/xendit_php_client_config.php');
    require('XenditPHPClient.php');

    $options['secret_api_key'] = constant('SECRET_API_KEY');

    $xenditPHPClient = new XenditClient\XenditPHPClient($options);

    $token_id = $argv[1];
    $initial_charge_amount = $argv[2];
    $initial_charge_external_id = $argv[3];

    $response = $xenditPHPClient->subscribeCreditCardRecurringPayment($token_id, $initial_charge_amount, $initial_charge_external_id);

    print_r($response);
?>
