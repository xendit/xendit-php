<?php
    require('config/xendit_php_client_config.php');
    require('XenditPHPClient.php');
    
    $options['secret_api_key'] = constant('SECRET_API_KEY');
    $options['server_domain'] = constant('SERVER_DOMAIN');

    $xenditPHPClient = new XenditClient\XenditPHPClient($options);

    $response = $xenditPHPClient->getBalance();
    print_r($response);
?>
