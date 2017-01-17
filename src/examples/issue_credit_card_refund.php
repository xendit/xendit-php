<?php
    require('config/xendit_php_client_config.php');
    require('XenditPHPClient.php');

    $options['secret_api_key'] = constant('SECRET_API_KEY');

    $xenditPHPClient = new XenditClient\XenditPHPClient($options);

    $credit_card_charge_id = $argv[1];
    $amount = $argv[2];

    $response = $xenditPHPClient->issueCreditCardRefund($credit_card_charge_id, $amount);

    print_r($response);
?>
