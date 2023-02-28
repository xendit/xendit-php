<?php

use Xendit\Xendit;

require 'vendor/autoload.php';

Xendit::setApiKey('SECRET_API_KEY');

$params = [
    'id' => 'xx-Example',
    'payment_request_id' => 'samp-2232323',
    'reference_id' => 'ref-23232m23n',
    'invoice_id' => 'inv-232323232',
    'currency' => "IDR",
    'amount' => 30000,
    'reason' => 'Cancel Payment',
    'metadata' => null
];

$createRefund = \Xendit\Refund::create($params);
var_dump($createRefund);

$retrieveRefund = \Xendit\Refund::retrieve($params['id']);
var_dump($retrieveRefund);

$retrieveAllRefund = \Xendit\Refund::retrieveAll();
var_dump($retrieveAllRefund);
