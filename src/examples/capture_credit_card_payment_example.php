<?php
    require('examples/include_autoload.php');

    $options['secret_api_key'] = constant('SECRET_API_KEY');

    $xenditPHPClient = new XenditClient\XenditPHPClient($options);

    $external_id = $argv[1];
    $token_id = $argv[2];
    $amount = $argv[3];

    $response = $xenditPHPClient->captureCreditCardPayment($external_id, $token_id, $amount);

    print_r($response);
?>
