<?php

/**
 * CardlessCreditExample.php
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

$params = [
    'cardless_credit_type' => 'KREDIVO',
    'external_id' => 'test-cardless-credit-02',
    'amount' => 800000,
    'payment_type' => '3_months',
    'items' => [
        [
            'id' => '123123',
            'name' => 'Phone Case',
            'price' => 200000,
            'type' => 'Smartphone',
            'url' => 'http=>//example.com/phone/phone_case',
            'quantity' => 2
        ],
        [
            'id' => '234567',
            'name' => 'Bluetooth Headset',
            'price' => 400000,
            'type' => 'Audio',
            'url' => 'http=>//example.com/phone/bluetooth_headset',
            'quantity' => 1
        ]
    ],
    'customer_details' => [
        'first_name' => 'customer first name',
        'last_name' => 'customer last name',
        'email' => 'customer@yourwebsite.com',
        'phone' => '081513114262'
    ],
    'shipping_address' => [
        'first_name' => 'first name',
        'last_name' => 'last name',
        'address' => 'Jalan Teknologi No. 12',
        'city' => 'Jakarta',
        'postal_code' => '12345',
        'phone' => '081513114262',
        'country_code' => 'IDN'
    ],
    'redirect_url' => 'https://example.com',
    'callback_url' => 'http://example.com/callback-cardless-credit'
];

$createPayment = \Xendit\CardlessCredit::create($params);
var_dump($createPayment);

$params = [
    'cardless_credit_type' => 'KREDIVO',
    'amount' => 2000000,
    'items' => [
        [
            'id' => '123123',
            'name' => 'Phone Case',
            'price' => 1000000,
            'type' => 'Smartphone',
            'url' => 'http://example.com/phone/phone_case',
            'quantity' => 2
        ]
    ]
];

$calculatePaymentTypes = \Xendit\CardlessCredit::calculatePaymentTypes($params);
var_dump($calculatePaymentTypes);
