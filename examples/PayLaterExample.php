<?php

/**
 * CardlessCreditExample.php
 * php version 7.2.0
 *
 * @category Example
 * @package  Xendit/Examples
 * @author   Asoka Wotulo <asokawotulo2@gmail.com>
 * @license  https://opensource.org/licenses/MIT MIT License
 * @link     https://api.xendit.co
 */

use Xendit\Xendit;

require 'vendor/autoload.php';

Xendit::setApiKey('SECRET_API_KEY');

$params = [
    'customer_id' => '14b4bf47-b97a-4c13-bea9-5b1734a46fd1',
    'channel_code' => 'ID_KREDIVO',
    'currency' => 'IDR',
    'amount' => 6000000,
    'order_items' => [
        [
            'type' => 'PHYSICAL_PRODUCT',
            'reference_id' => '1533',
            'name' => 'iPhone X - 64 GB - Space Gray',
            'net_unit_amount' => 6000000,
            'quantity' => 1,
            'url' => '<your-url>',
            'category' => 'Smartphone'
        ]
    ]
];

$payLaterPlan = \Xendit\PayLater::initiatePayLaterPlans($params);
var_dump($payLaterPlan);

$params = [
    'plan_id' => $payLaterPlan['id'],
    'reference_id' => 'order_id_' . time(),
    'checkout_method' => 'ONE_TIME_PAYMENT',
    'success_redirect_url' => 'https://your-site.com/redirect-success',
    'failure_redirect_url' => 'https://your-site.com/redirect-failure',
];
$payLaterCharge = \Xendit\PayLater::createPayLaterCharge($params);
var_dump($payLaterCharge);
