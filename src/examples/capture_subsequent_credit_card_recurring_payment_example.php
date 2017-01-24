<?php
    require('config/xendit_php_client_config.php');
    require('XenditPHPClient.php');

    $options['secret_api_key'] = constant('SECRET_API_KEY');

    $xenditPHPClient = new XenditClient\XenditPHPClient($options);

    $subscription_id = $argv[1];
    $amount = $argv[2];
    $external_id = $argv[3];

    $response = $xenditPHPClient->captureSubsequentCreditCardRecurringPayment($subscription_id, $amount, $external_id);

    print_r($response);
?>
