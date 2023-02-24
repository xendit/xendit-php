<?php

/**
 * PayoutsExample.php
 * php version 7.2.0
 *
 * @category Example
 * @package  Xendit/Examples
 * @author   Yanuar <yanuaraditia@outlook.com>
 * @license  https://opensource.org/licenses/MIT MIT License
 * @link     https://api.xendit.co
 */

use Xendit\Xendit;

require 'vendor/autoload.php';

Xendit::setApiKey('SECRET_API_KEY');

$params = [
    'reference_id'         => 'ref-823723232',
    'channel_code'         => 'ID_BRI',
    'channel_properties'   => [
        'account_number'      => '0000000000',
        'account_holder_name' => 'Yanuar'
    ],
    'amount'               => 1000,
    'description'          => 'Sample Successful Create IDR Payout',
    'currency'             => 'IDR',
    'receipt_notification' => [
        'email_to'  => ['someone@example.com'],
        'email_cc'  => ['someone1@example.com'],
        'email_bcc' => ['someone2@example.com'],
    ],
    'metadata'             => [
        'lotto_outlet' => 24
    ]
];

$id = "disb-b57fff2d-9699-470b-9978-ac509c5b266c";

$create_payouts = \Xendit\PayoutsNew::create($params);
var_dump($create_payouts);

$retrieve = \Xendit\PayoutsNew::retrieve($id);
var_dump($retrieve);

$retrieveByReference = \Xendit\PayoutsNew::retrieveReference($params['reference_id']);
var_dump($retrieveByReference);

$voidPayouts = \Xendit\PayoutsNew::cancel($id);
var_dump($voidPayouts);
