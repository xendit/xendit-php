<?php
    require('examples/include_autoload.php');
    
    $options['secret_api_key'] = constant('SECRET_API_KEY');

    $xenditPHPClient = new XenditClient\XenditPHPClient($options);

    $disbursement_id = $argv[1];

    $response = $xenditPHPClient->getDisbursement($disbursement_id);
    print_r($response);
?>
