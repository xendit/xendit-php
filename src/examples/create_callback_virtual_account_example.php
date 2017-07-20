<?php
    require('examples/include_autoload.php');
    
    $options['secret_api_key'] = constant('SECRET_API_KEY');

    $xenditPHPClient = new XenditClient\XenditPHPClient($options);

    $external_id = $argv[1];
    $bank_code = $argv[2];
    $name = $argv[3];

    $response = $xenditPHPClient->createCallbackVirtualAccount($external_id, $bank_code, $name);
    print_r($response);
?>
