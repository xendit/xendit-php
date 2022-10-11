<?php

/**
 * DirectDebitExample.php
 * php version 7.4.3
 *
 * @category Example
 * @package  Xendit/Examples
 * @author   Glenda <glenda@xendit.co>
 * @license  https://opensource.org/licenses/MIT MIT License
 * @link     https://api.xendit.co
 */

use Xendit\Xendit;

require 'vendor/autoload.php';

Xendit::setApiKey('SECRET_API_KEY');

$customerParams = [
    'reference_id' => '' . time(),
    'given_names' => 'customer 1',
    'email' => 'customer@website.com',
    'mobile_number' => '+6281212345678',
    'description' => 'dummy customer',
    'middle_name' => 'middle',
    'surname' => 'surname',
    'addresses' => [
        [
            'country' => 'ID',
            'street_line1' => 'Jl. 123',
            'street_line2' => 'Jl. 456',
            'city' => 'Jakarta Selatan',
            'province' => 'DKI Jakarta',
            'state' => '-',
            'postal_code' => '12345'
        ]
    ],
    'metadata' => [
        'meta' => 'data'
    ]
];

$customer = \Xendit\Customers::createCustomer($customerParams);

$linkedAccountTokenizationParams = [
    'customer_id' => $customer['id'],
    'channel_code' => 'DC_BRI',
    'properties' => [
        'account_mobile_number' => '+62818555988',
        'card_last_four' => '8888',
        'card_expiry' => '06/24',
        'account_email' => 'test.email@xendit.co'
    ],
    'metadata' => [
        'meta' => 'data'
    ]
];

echo "Initializing linked account tokenization...\n";
$initializeTokenization = \Xendit\DirectDebit::initializeLinkedAccountTokenization(
    $linkedAccountTokenizationParams
);
var_dump($initializeTokenization);

$validateOTPForLinkedAccountParams = [
    'otp_code' => '333000'
];

echo "Validating OTP for linked account token...\n";
$validateOTPForLinkedAccount = \Xendit\DirectDebit::validateOTPForLinkedAccount(
    $initializeTokenization['id'],
    $validateOTPForLinkedAccountParams
);
var_dump($validateOTPForLinkedAccount);

echo "Retrieving accessible linked accounts...\n";
$retrieveLinkedAccounts = \Xendit\DirectDebit::retrieveAccessibleLinkedAccounts(
    $initializeTokenization['id']
);
var_dump($retrieveLinkedAccounts);

echo "Unbinding linked account token...\n";
$unbindLinkedAccountToken = \Xendit\DirectDebit::unbindLinkedAccountToken(
    $initializeTokenization['id']
);
var_dump($unbindLinkedAccountToken);

$createPaymentMethodParams = [
    'customer_id' => $customer['id'],
    'type' => 'DEBIT_CARD',
    'properties' => [
        'id' => $retrieveLinkedAccounts[0]['id']
    ],
    'metadata' => [
        'meta' => 'data'
    ]
    ];

echo "Creating payment method...\n";
$createPaymentMethod = \Xendit\DirectDebit::createPaymentMethod(
    $createPaymentMethodParams
);
var_dump($createPaymentMethod);

echo "Retrieving payment methods by customer ID...\n";
$getPaymentMethods = \Xendit\DirectDebit::getPaymentMethodsByCustomerID(
    $customer['id']
);
var_dump($getPaymentMethods);

$createDirectDebitPaymentParams = [
    'reference_id' => 'test-direct-debit-ref-0101',
    'payment_method_id' => $createPaymentMethod['id'],
    'currency' => 'IDR',
    'amount' => 15000,
    'callback_url' => 'http://webhook.site/',
    'enable_otp' => true,
    'description' => 'test description',
    'basket' => [
        [
            'reference_id' => 'basket-product-ref-id',
            'name' => 'product name',
            'category' => 'mechanics',
            'market' => 'ID',
            'price' => 50000,
            'quantity' => 5,
            'type' => 'product type',
            'sub_category' => 'product sub category',
            'description' => 'product description',
            'url' => 'https://product.url'
        ]
    ],
    'device' => [
        'id' => 'device_id',
        'ip_address' => '0.0.0.0',
        'ad_id' => 'ad-id',
        'imei' => '123a456b789c'
    ],
    'success_redirect_url' => 'https://success-redirect.url',
    'failure_redirect_url' => 'https://failure-redirect.url',
    'metadata' => [
        'meta' => 'data'
    ],
    'Idempotency-key' => '' . time()
];

echo "Creating direct debit payment...\n";
$createDDP = \Xendit\DirectDebit::createDirectDebitPayment(
    $createDirectDebitPaymentParams
);
var_dump($createDDP);

$validateOTPForDirectDebitPaymentParams = [
    'otp_code' => '222000'
];

echo "Validating OTP for direct debit payment...\n";
$validateOTPForDDP = \Xendit\DirectDebit::validateOTPForDirectDebitPayment(
    $createDDP['id'],
    $validateOTPForDirectDebitPaymentParams
);
var_dump($validateOTPForDDP);

echo "Retrieving direct debit payment by ID...\n";
$getDDPByID = \Xendit\DirectDebit::getDirectDebitPaymentByID(
    $createDDP['id']
);
var_dump($getDDPByID);

echo "Retrieving direct debit payment by reference ID...\n";
$getDDPByReferenceID = \Xendit\DirectDebit::getDirectDebitPaymentByReferenceID(
    $createDDP['reference_id']
);
var_dump($getDDPByReferenceID);
