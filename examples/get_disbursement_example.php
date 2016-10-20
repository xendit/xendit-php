<?php
    require('config/xendit_php_client_config.php');
    require('index.php');

    $options['secret_api_key'] = constant('SECRET_API_KEY');
    $options['server_domain'] = constant('SERVER_DOMAIN');

    $xenditPHPClient = new XenditPHPClient($options);

    $disbursement_id = $argv[1];

    $response = $xenditPHPClient->getDisbursement($disbursement_id);
    print_r($response);
?>
