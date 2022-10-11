<?php

/**
 * EWalletsExample.php
 * php version 7.2.0
 *
 * @category Example
 * @package  Xendit/Examples
 * @author   Ellen <ellen@xendit.co>
 * @license  https://opensource.org/licenses/MIT MIT License
 * @link     https://api.xendit.co
 */

use Xendit\Xendit;

require 'vendor/autoload.php';

Xendit::setApiKey('SECRET_API_KEY');

$ovoParams = [
    'external_id' => 'demo-' . time(),
    'amount' => 32000,
    'phone' => '081298498259',
    'ewallet_type' => 'OVO'
];

$danaParams = [
    'external_id' => 'demo_' . time(),
    'amount' => 32000,
    'phone' => '081298498259',
    'expiration_date' => '2100-02-20T00:00:00.000Z',
    'callback_url' => 'https://my-shop.com/callbacks',
    'redirect_url' => 'https://my-shop.com/home',
    'ewallet_type' => 'DANA'
];

$linkajaParams = [
    'external_id' => 'demo_' . time(),
    'amount' => 32000,
    'phone' => '081298498259',
    'items' => [
        [
            'id' => '123123',
            'name' => 'Phone Case',
            'price' => 100000,
            'quantity' => 1
        ],
        [
            'id' => '345678',
            'name' => 'Powerbank',
            'price' => 200000,
            'quantity' => 1
        ]
    ],
    'callback_url' => 'https =>//yourwebsite.com/callback',
    'redirect_url' => 'https =>//yourwebsite.com/order/123',
    'ewallet_type' => 'LINKAJA'
];

$ewalletChargeParams = [
    'reference_id' => 'test-reference-id',
    'currency' => 'IDR',
    'amount' => 50000,
    'checkout_method' => 'ONE_TIME_PAYMENT',
    'channel_code' => 'ID_SHOPEEPAY',
    'channel_properties' => [
        'success_redirect_url' => 'https://yourwebsite.com/order/123',
    ],
    'metadata' => [
        'meta' => 'data'
    ]
];

try {
    $createOvo = \Xendit\EWallets::create($ovoParams);
    var_dump($createOvo);
} catch (\Xendit\Exceptions\ApiException $exception) {
    var_dump($exception);
}

$createDana = \Xendit\EWallets::create($danaParams);
var_dump($createDana);

$createLinkaja = \Xendit\EWallets::create($linkajaParams);
var_dump($createLinkaja);

$getOvo = \Xendit\EWallets::getPaymentStatus($ovoParams['external_id'], 'OVO');
var_dump($getOvo);

$getDana = \Xendit\EWallets::getPaymentStatus($danaParams['external_id'], 'DANA');
var_dump($getDana);

$getLinkaja = \Xendit\EWallets::getPaymentStatus(
    $linkajaParams['external_id'],
    'LINKAJA'
);
var_dump($getLinkaja);

echo "Creating E-Wallet Charge...\n";
$createEWalletCharge = \Xendit\EWallets::createEWalletCharge($ewalletChargeParams);
var_dump($createEWalletCharge);

echo "Retrieving E-Wallet Charge Status with ID: {$createEWalletCharge['id']}...\n";
$walletChargeStatusParams = [
    'for-user-id' => 'test-user-id'
];
$getEWalletChargeStatus = \Xendit\EWallets::getEWalletChargeStatus(
    $createEWalletCharge['id'],
    $walletChargeStatusParams
);
var_dump($getEWalletChargeStatus);

$eWalletChargeId = '<Ewallet Charge ID>';
$voidEwalletChargeParam = [];
$voidEwalletCharge = \Xendit\EWallets::voidEwalletCharge(
    $eWalletChargeId,
    $voidEwalletChargeParam
    );
var_dump($voidEwalletCharge);

$eWalletChargeId = '<Ewallet Charge ID>';
$refundEwalletChargeParam = [];
$refundEwalletCharge = \Xendit\EWallets::refundEwalletCharge(
    $eWalletChargeId,
    $refundEwalletChargeParam
    );
var_dump($refundEwalletCharge);

$eWalletChargeId = '<Ewallet Charge ID>';
$refundEwalletChargeId = '<EWallet Refund Charge ID>';
$getRefundEWalletParam = [];
$getRefundEWallet = \Xendit\EWallets::getRefund(
    $eWalletChargeId,
    $refundEwalletChargeId,
    $getRefundEWalletParam
    );
var_dump($getRefundEWallet);

$eWalletChargeId = '<Ewallet Charge ID>';
$listRefundParam = [];
$listRefund = \Xendit\EWallets::listRefund(
    $eWalletChargeId,
    $listRefundParam
    );
var_dump($listRefund);