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
            'name' => 'Mobile Phone',
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


$params = []; // Optional
$id = 'plc_8cb12305-9bcf-4441-a087-ee0d446e297b';
$payLaterCharge = \Xendit\PayLater::getPayLaterChargeStatus($id, $params);
var_dump($payLaterCharge);


$params = []; // Optional
$id = 'plc_8cb12305-9bcf-4441-a087-ee0d446e297b';
$payLaterChargeRefundCreate = \Xendit\PayLater::createPayLaterRefund($id, $params);
var_dump($payLaterChargeRefundCreate);

$params = []; // Optional
$charge_id = 'plc_8cb12305-9bcf-4441-a087-ee0d446e297b';
$refund_id = 'plr_2f2aa47f-2764-4b42-8712-c3fb1270b09e';
$payLaterChargeRefund = \Xendit\PayLater::getPayLaterRefund($charge_id, $refund_id, $params);
var_dump($payLaterChargeRefund);

$params = []; // Optional
$charge_id = 'plc_8cb12305-9bcf-4441-a087-ee0d446e297b';
$payLaterChargeRefundList = \Xendit\PayLater::listPayLaterRefund($charge_id, $params);
var_dump($payLaterChargeRefundList);
