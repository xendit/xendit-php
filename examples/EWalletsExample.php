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

use Dotenv\Dotenv;
use Xendit\Xendit;

require 'vendor/autoload.php';

$dotenv = Dotenv::createImmutable(__DIR__ . '/..');
$dotenv->load();
Xendit::setApiKey(getenv('SECRET_API_KEY'));

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
    'expiration_date' => '2020-02-20T00:00:00.000Z',
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
