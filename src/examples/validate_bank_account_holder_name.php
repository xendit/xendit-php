<?php
    require('config/xendit_php_client_config.php');
    require('XenditPHPClient.php');
    
    $options['secret_api_key'] = constant('SECRET_API_KEY');

    $xenditPHPClient = new XenditClient\XenditPHPClient($options);

    $bank_account_number = $argv[1];
    $bank_code = $argv[2];

    $response = $xenditPHPClient->validateBankAccountHolderName($bank_account_number, $bank_code);
    print_r($response);
?>
