<?php
    require('examples/include_autoload.php');

    $options['secret_api_key'] = constant('SECRET_API_KEY');

    $xenditPHPClient = new XenditClient\XenditPHPClient($options);

    $credit_card_charge_id = $argv[1];
    $amount = $argv[2];
    $external_id = $argv[3];
    $options['X-IDEMPOTENCY-KEY'] = $argv[4];

    $response = $xenditPHPClient->issueCreditCardRefund($credit_card_charge_id, $amount, $external_id, $options);

    print_r($response);
?>
