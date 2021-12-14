# Xendit API PHP Client

This library is the abstraction of Xendit API for access from applications written with PHP.

-   [Documentation](#documentation)
-   [Installation](#installation)
-   [Usage](#usage)
-   [Methods' Signature and Examples](#methods-signature-and-examples)
    -   [Balance](#balance)
        -   [Get Balance](#get-balance)
    -   [Payment Channels](#payment-channels)
        -   [Get Payment Channels](#get-payment-channels)
    -   [Cards](#cards)
        -   [Create Charge](#create-charge)
        -   [Reverse Authorization](#reverse-authorization)
        -   [Capture Charge](#capture-charge)
        -   [Get Charge](#get-charge)
        -   [Create Refund](#create-refund)
    -   [Cardless Credit](#cardless-credit)
        -   [Create Cardless Credit Payment](#create-cardless-credit-payment)
        -   [Calculate Payment Types](#calculate-payment-types)
    -   [Customers](#customers)
        -   [Create Customer](#create-customer)
        -   [Get Customer by Reference ID](#get-customer-by-reference-id)
    -   [Direct Debit](#direct-debit)
        -   [Initialize linked account tokenization](#initialize-linked-account-tokenization)
        -   [Validate OTP for Linked Account Token](#validate-otp-for-linked-account-token)
        -   [Retrieve accessible accounts by linked account token](#retrieve-accessible-accounts-by-linked-account-token)
        -   [Unbind linked account token](#unbind-linked-account-token)
        -   [Create payment method](#create-payment-method)
        -   [Get payment methods by customer ID](#get-payment-methods-by-customer-id)
        -   [Create direct debit payment](#create-direct-debit-payment)
        -   [Validate OTP for direct debit payment](#validate-otp-for-direct-debit-payment)
        -   [Get direct debit payment by ID](#get-direct-debit-payment-by-id)
        -   [Get direct debit payment by reference ID](#get-direct-debit-payment-by-reference-id)
    -   [Disbursements](#disbursements)
        -   [Create Disbursement](#create-disbursement)
        -   [Create Batch Disbursement](#create-batch-disbursement)
        -   [Get Disbursement by ID](#get-disbursement-by-id)
        -   [Get Disbursement by External ID](#get-disbursement-by-external-id)
        -   [Get Disbursement Available Banks](#get-disbursement-available-banks)
    -   [E-Wallets](#e-wallets)
        -   [Create E-Wallet Charge](#create-e-wallet-charge)
        -   [Get E-Wallet Charge Status](#get-e-wallet-charge-status)
        -   [Void E-Wallet Charge](#void-e-wallet-charge)
        -   [Refund E-Wallet Charge](#refund-e-wallet-charge)
        -   [Get Refund By ID](#get-refund-by-id)
        -   [List Refunds](#list-refunds)
    -   [Invoice](#invoice)
        -   [Create Invoice](#create-invoice)
        -   [Get Invoice](#get-invoice)
        -   [Get All Invoice](#get-all-invoice)
        -   [Expire Invoice](#expire-invoice)
    -   [Paylater](#paylater)
        -   [Initiate PayLater Plans](#initiate-paylater-plans)
        -   [Create PayLater Charges](#create-paylater-charges)
        -   [Get PayLater Charge by ID](#get-paylater-charge-by-id)
        -   [Refund PayLater Charge](#refund-paylater-charge)
        -   [Get PayLater Refund by ID](#get-paylater-refund-by-id)
        -   [List PayLater Refunds](#list-paylater-refunds)
    -   [Payouts](#payouts)
        -   [Create a Payout](#create-payout)
        -   [Get a Payout](#get-payout)
        -   [Void a Payout](#void-payout)
    -   [QR Code](#qr-code)
        -   [Create a QR Code](#create-a-qr-code)
        -   [Get QR Code](#get-qr-code)
    -   [Recurring](#recurring-payments)
        -   [Create a Recurring Payment](#create-a-recurring-payment)
        -   [Get a Recurring Payment](#get-a-recurring-payment)
        -   [Edit a Recurring Payment](#edit-recurring-payment)
        -   [Pause a Recurring Payment](#pause-recurring-payment)
        -   [Stop a Recurring Payment](#stop-recurring-payment)
        -   [Resume a Recurring Payment](#resume-recurring-payment)
    -   [Retail Outlets](#retail-outlets)
        -   [Create Fixed Payment Code](#create-fixed-payment-code)
        -   [Update Fixed Payment Code](#update-fixed-payment-code)
        -   [Get Fixed Payment Code](#get-fixed-payment-code)
    -   [Virtual Accounts](#virtual-accounts)
        -   [Create Fixed Virtual Account](#create-fixed-virtual-account)
        -   [Get Virtual Account Bank](#get-virtual-account-bank)
        -   [Get Fixed Virtual Account](#get-fixed-virtual-account)
        -   [Update Fixed Virtual Account](#update-fixed-virtual-account)
        -   [Get Fixed Virtual Account Payment](#get-fixed-virtual-account-payment)
    -   [xenPlatform](#xenplatform)
        -   [Create Account](#create-account)
        -   [Get Account](#get-account)
        -   [Update Account](#update-account)
        -   [Create Transfers](#create-transfers)
        -   [Create Fee Rule](#create-fee-rule)
        -   [Set Callback URLs](#set-callback-urls)
    -   [Transaction](#transaction)
        -   [List of transactions](#list-of-transactions)
        -   [Detail of transaction](#detail-of-transaction)
    -   [Report](#report)
        -   [Generate Report](#generate-report)
        -   [Detail of Report](#detail-of-report)
-   [Exceptions](#exceptions)
    -   [InvalidArgumentException](#invalidargumentexception)
    -   [ApiException](#apiexception)
-   [Contributing](#contributing)
    -   [Test](#tests)
        -   [Running test suite](#running-test-suite)
        -   [Running examples](#running-examples)

---

## Documentation

For the API documentation, check [Xendit API Reference](https://xendit.github.io/apireference).

## Installation

Install xendit-php-clients with composer by following command:

```bash
composer require xendit/xendit-php
```

or add it manually in your `composer.json` file.

### Update from v1.4.0 to v2.0.0

To update xendit-php-clients with composer, use the following command:

```bash
composer update xendit/xendit-php
```

To migrate, see [MIGRATE.md](MIGRATE.md) for more information.

## Usage

Configure package with your account's secret key obtained from [Xendit Dashboard](https://dashboard.xendit.co/settings/developers#api-keys).

```php
Xendit::setApiKey('secretKey');
```

See [example codes](./examples) for more details.

### Use Custom HTTP Client

A custom HTTP Client that implements [HttpClientInterface](./src/HttpClientInterface.php) can be injected like so

```php
Xendit::setHttpClient($client);
```

Checkout [custom http client example](./examples/CustomHttpClient.php) for implementation reference.

## Methods' Signature and Examples

### Balance

#### Get Balance

```php
$params = array(
    'for-user-id' => '<sub account user id>' //The sub-account user-id that you want to make this transaction for (Optional).
);
\Xendit\Balance::getBalance(string $account_type, array $params);
```

Usage example:

```php
$getBalance = \Xendit\Balance::getBalance('CASH');
var_dump($getBalance);
```

### Payment Channels

#### Get Payment Channels

```php
\Xendit\PaymentChannels::list();
```

Usage example:

```php
$getPaymentChannels = \Xendit\PaymentChannels::list();
var_dump($getPaymentChannels);
```

### Cards

#### Create Charge

```php
\Xendit\Cards::create(array $params);
```

Usage example:

```php
$params = [
    'token_id' => '5e2e8231d97c174c58bcf644',
    'external_id' => 'card_' . time(),
    'authentication_id' => '5e2e8658bae82e4d54d764c0',
    'amount' => 100000,
    'card_cvn' => '123',
    'capture' => false
];

$createCharge = \Xendit\Cards::create($params);
var_dump($createCharge);
```

#### Reverse Authorization

```php
\Xendit\Cards::reverseAuthorization(string $id, array $params);
```

Usage example:

```php
$id = 'charge-id';
$params = ['external_id' => 'ext-id'];

$reverseAuth = \Xendit\Cards::reverseAuthorization(
    $id,
    $params
);
var_dump($reverseAuth);
```

#### Capture Charge

```php
\Xendit\Cards::capture(string $id, array $params);
```

Usage example:

```php
$id = 'charge-id';
$params = ['amount' => 100000];

$captureCharge = \Xendit\Cards::capture($id, $params);
var_dump($captureCharge);
```

#### Get Charge

```php
\Xendit\Cards::retrieve(string $id);
```

Usage example:

```php
$id = 'charge-id';

$getCharge = \Xendit\Cards::retrieve($id);
var_dump($getCharge);
```

#### Create Refund

```php
\Xendit\Cards::createRefund(string $id, array $params);
```

Usage examples

Without idempotency key:

```php
$params = [
    'external_id' => 'ext-id',
    'amount' => 20000
];

$refund = \Xendit\Cards::createRefund($id, $params);
var_dump($refund);
```

With idempotency key:

```php
$params = [
    'external_id' => 'ext-id',
    'amount' => 20000,
    'X-IDEMPOTENCY-KEY' => 'unique-id'
];

$refund = \Xendit\Cards::createRefund($id, $params);
var_dump($refund);
```

#### Create Promotion

```php
\Xendit\Promotion::create(array $params);
```

usage examples:

```php
$params = [
    'reference_id' => 'reference_123',
    'description' => 'test promotion',
    'currency' => 'IDR',
    'start_time' => '2021-01-01T00:00:00.000Z',
    'end_time' => '2021-01-02T00:00:00.000Z',
    'promo_code' => 'testpromo',
    'discount_amount' => 5000
];

$createPromotion = \Xendit\Promotion::create($params);
var_dump($createPromotion);
```

### Cardless Credit

#### Create Cardless Credit Payment

```php
\Xendit\CardlessCredit::create(array $params);
```

Usage example:

```php
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
```

#### Calculate Payment Types

```php
\Xendit\CardlessCredit::calculatePaymentTypes(array $params);
```

Usage example:

```php
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
```

### Customers

#### Create Customer

```php
\Xendit\Customers::createCustomer(array $params);
```

Usage example:

```php
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

$createCustomer = \Xendit\Customers::createCustomer($customerParams);
var_dump($createCustomer);
```

#### Get Customer by Reference ID

```php
\Xendit\Customers::getCustomerByReferenceID(string $reference_id);
```

Usage example:

```php
$reference_id = 'ref_id';
$getCustomer = \Xendit\Customers::getCustomerByReferenceID($reference_id);
var_dump($getCustomer);
```

### Direct Debit

#### Initialize linked account tokenization

```php
\Xendit\DirectDebit::initializeLinkedAccountTokenization(array $params);
```

Usage example:

```php
$params = [
    'customer_id' => '4b7b6050-0830-440a-903b-37d527dbbaa9',
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

$initializeTokenization = \Xendit\DirectDebit::initializeLinkedAccountTokenization($params);
var_dump($initializeTokenization);
```

#### Validate OTP for Linked Account Token

```php
\Xendit\DirectDebit::validateOTPForLinkedAccount(string $linked_account_token_id, array $params);
```

Usage example:

```php
$params = [
    'otp_code' => '333000'
];

$validateOTPForLinkedAccount = \Xendit\DirectDebit::validateOTPForLinkedAccount(
    'lat-a08fba1b-100c-445b-b788-aaeaf8215e8f',
    $params
);
var_dump($validateOTPForLinkedAccount);
```

#### Retrieve accessible accounts by linked account token

```php
\Xendit\DirectDebit::retrieveAccessibleLinkedAccounts(string $linked_account_token_id);
```

Usage example:

```php
$retrieveAccessibleLinkedAccounts = \Xendit\DirectDebit::retrieveAccessibleLinkedAccounts(
    'lat-a08fba1b-100c-445b-b788-aaeaf8215e8f'
);
var_dump($retrieveAccessibleLinkedAccounts);
```

#### Unbind linked account token

```php
\Xendit\DirectDebit::unbindLinkedAccountToken(string $linked_account_token_id);
```

Usage example:

```php
$unbindLinkedAccountToken = \Xendit\DirectDebit::unbindLinkedAccountToken(
    'lat-a08fba1b-100c-445b-b788-aaeaf8215e8f'
);
var_dump($unbindLinkedAccountToken);
```

#### Create payment method

```php
\Xendit\DirectDebit::createPaymentMethod(array $params);
```

Usage example:

```php
$params = [
    'customer_id' => '4b7b6050-0830-440a-903b-37d527dbbaa9',
    'type' => 'DEBIT_CARD',
    'properties' => [
        'id' => 'la-052d3e2d-bc4d-4c98-8072-8d232a552299'
    ],
    'metadata' => [
        'meta' => 'data'
    ]
];

$createPaymentMethod = \Xendit\DirectDebit::createPaymentMethod($params);
var_dump($createPaymentMethod);
```

#### Get payment methods by customer ID

```php
\Xendit\DirectDebit::getPaymentMethodsByCustomerID(string $customer_id);
```

Usage example:

```php
$getPaymentMethods = \Xendit\DirectDebit::getPaymentMethodsByCustomerID('4b7b6050-0830-440a-903b-37d527dbbaa9');
var_dump($getPaymentMethods);
```

#### Create direct debit payment

```php
\Xendit\DirectDebit::createDirectDebitPayment(array $params);
```

Usage example:

```php
$params = [
    'reference_id' => 'test-direct-debit-ref',
    'payment_method_id' => 'pm-ebb1c863-c7b5-4f20-b116-b3071b1d3aef',
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

$createDirectDebitPayment = \Xendit\DirectDebit::createDirectDebitPayment(
    $params
);
var_dump($createDirectDebitPayment);
```

#### Validate OTP for direct debit payment

```php
\Xendit\DirectDebit::validateOTPForDirectDebitPayment(
    string $direct_debit_payment_id,
    array $params
);
```

Usage example:

```php
$params = [
    'otp_code' => '222000'
];

$validateOTPForDirectDebitPayment = \Xendit\DirectDebit::validateOTPForDirectDebitPayment(
    'ddpy-7e61b0a7-92f9-4762-a994-c2936306f44c',
    $params
);
var_dump($validateOTPForDirectDebitPayment);
```

#### Get direct debit payment by ID

```php
\Xendit\DirectDebit::getDirectDebitPaymentByID(
    string $direct_debit_payment_id
);
```

Usage example:

```php
$getDirectDebitPaymentByID = \Xendit\DirectDebit::getDirectDebitPaymentByID(
    'ddpy-7e61b0a7-92f9-4762-a994-c2936306f44c'
);
var_dump($getDirectDebitPaymentByID);
```

#### Get direct debit payment by reference ID

```php
\Xendit\DirectDebit::getDirectDebitPaymentByReferenceID(
    string $reference_id
);
```

Usage example:

```php
$getDirectDebitPaymentByReferenceID = \Xendit\DirectDebit::getDirectDebitPaymentByReferenceID(
    'test-direct-debit-ref'
);
var_dump($getDirectDebitPaymentByReferenceID);
```

### Disbursements

#### Create Disbursement

```php
\Xendit\Disbursements::create(array $params);
```

Usage examples

Without idempotency key:

```php
$params = [
    'external_id' => 'disb-12345678',
    'amount' => 15000,
    'bank_code' => 'BCA',
    'account_holder_name' => 'Joe',
    'account_number' => '1234567890',
    'description' => 'Disbursement from Example'
];

$createDisbursements = \Xendit\Disbursements::create($params);
var_dump($createDisbursements);
```

With idempotency key:

```php
$params = [
    'external_id' => 'disb-12345678',
    'amount' => 15000,
    'bank_code' => 'BCA',
    'account_holder_name' => 'Joe',
    'account_number' => '1234567890',
    'description' => 'Disbursement from Example',
    'X-IDEMPOTENCY-KEY' => 'unique-id'
];

$createDisbursements = \Xendit\Disbursements::create($params);
var_dump($createDisbursements);
```

#### Create Batch Disbursement

```php
\Xendit\Disbursements::createBatch(array $params);
```

Usage example:

```php
$batch_params = [
    'reference' => 'disb_batch-12345678',
    'disbursements' => [
        [
            'amount' => 20000,
            'bank_code' => 'BCA',
            'bank_account_name' => 'Fadlan',
            'bank_account_number' => '1234567890',
            'description' => 'Batch Disbursement',
            'external_id' => 'disbursement-1'
        ],
        [
            'amount' => 30000,
            'bank_code' => 'MANDIRI',
            'bank_account_name' => 'Lutfi',
            'bank_account_number' => '1234567891',
            'description' => 'Batch Disbursement with email notifications',
            'external_id' => 'disbursement-2',
            'email_to' => ['test+to@xendit.co'],
            'email_cc' => ['test+cc@xendit.co'],
            'email_bcc' => ['test+bcc1@xendit.co', 'test+bcc2@xendit.co']
        ]
    ]
];

$createBatchDisbursements = \Xendit\Disbursements::createBatch($batch_params);
var_dump($createBatchDisbursements);
```

#### Get Disbursement by ID

```php
\Xendit\Disbursements::retrieve(string $id, array $params);
```

Usage example:

```php
$id = 'disbursements-id';
$retrieveParams = [
	'for-user-id' => 'test-reference-user-id'
]
$getDisbursements = \Xendit\Disbursements::retrieve($id, $retrieveParams);
var_dump($getDisbursements);
```

#### Get Disbursement by External ID

```php
\Xendit\Disbursements::retrieveExternal(string $external_id);
```

Usage example:

```php
$external_id = 'disbursements-ext-id';
$getDisbursementsByExt = \Xendit\Disbursements::retrieveExternal($external_id);
var_dump($getDisbursementsByExt);
```

#### Get Disbursement Available Banks

```php
\Xendit\Disbursements::getAvailableBanks();
```

Usage example:

```php
$getDisbursementsBanks = \Xendit\Disbursements::getAvailableBanks();
var_dump($getDisbursementsBanks);
```

### E-Wallets

#### Create E-Wallet Charge

```php
\Xendit\EWallets::createEWalletCharge(array $params);
```

For more information about the params, please check [Xendit API Reference - E-Wallets](https://developers.xendit.co/api-reference/#create-ewallet-charge).

Usage example:

```php
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

$createEWalletCharge = \Xendit\EWallets::createEWalletCharge($ewalletChargeParams);
var_dump($createEWalletCharge);
```

#### Get E-Wallet Charge Status

```php
\Xendit\EWallets::getEWalletChargeStatus(string $charge_id, array $params);
```

Usage example:

```php
$charge_id = 'ewc_f3925450-5c54-4777-98c1-fcf22b0d1e1c';
$eWalletStatusParam = [
	'for-user-id' => 'test-reference-user-id'
]
$getEWalletChargeStatus = \Xendit\EWallets::getEWalletChargeStatus($charge_id, $eWalletStatusParam);
var_dump($getEWalletChargeStatus);
```
#### Void E-Wallet Charge

```php
\Xendit\EWallets::voidEwalletCharge(string $charge_id,array $params);
```

Usage example:

```php
$charge_id = 'ewc_f3925450-5c54-4777-98c1-fcf22b0d1e1c';
$voidEwalletChargeParam = [
    'for-user-id' => 'test-reference-user-id' // OPTIONAL
]
$voidEwalletCharge = \Xendit\EWallets::voidEwalletCharge($charge_id, $voidEwalletChargeParam);
var_dump($voidEwalletCharge);
```
#### Refund E-Wallet Charge

```php
\Xendit\EWallets::refundEwalletCharge(string $charge_id,array $params);
```

Usage example:

```php
$charge_id = 'ewc_f3925450-5c54-4777-98c1-fcf22b0d1e1c';
$refundEwalletChargeParam = [
    'for-user-id' => 'test-reference-user-id' // OPTIONAL
]
$refundEwalletCharge = \Xendit\EWallets::refundEwalletCharge($charge_id, $refundEwalletChargeParam);
var_dump($refundEwalletCharge);
```
#### Get Refund By ID

```php
\Xendit\EWallets::getRefund(string $charge_id,string $refund_id, array $params);
```

Usage example:

```php
$charge_id = 'ewc_f3925450-5c54-4777-98c1-fcf22b0d1e1c';
$refund_id = 'ewr_532as23lew2321id';
$getRefundEwalletChargeParam = [
    'for-user-id' => 'test-reference-user-id' // OPTIONAL
]
$getRefundEwalletCharge = \Xendit\EWallets::getRefund($charge_id, $refund_id, $getRefundEwalletChargeParam);
var_dump($getRefundEwalletCharge);
```
#### List Refunds

```php
\Xendit\EWallets::listRefund(string $charge_id, array $params);
```

Usage example:

```php
$charge_id = 'ewc_f3925450-5c54-4777-98c1-fcf22b0d1e1c';
$listRefundEwalletChargeParam = [
    'for-user-id' => 'test-reference-user-id' // OPTIONAL
]
$listRefundEwalletCharge = \Xendit\EWallets::listRefund($charge_id, $getRefundEwalletChargeParam);
var_dump($listRefundEwalletCharge);
```
### Invoice

#### Create Invoice

```php
\Xendit\Invoice::create(array $params);
```

Usage example:

```php
$params = ['external_id' => 'demo_147580196270',
    'payer_email' => 'sample_email@xendit.co',
    'description' => 'Trip to Bali',
    'amount' => 32000,
    'for-user-id' => '5c2323c67d6d305ac433ba20'
];

$createInvoice = \Xendit\Invoice::create($params);
var_dump($createInvoice);
```

#### Get Invoice

```php
\Xendit\Invoice::retrieve(string $id, array $params);
```

Usage example:

```php
$id = 'invoice-id';
$retrieveParam = [
	'for-user-id' => 'test-reference-user-id' // OPTIONAL
];
$getInvoice = \Xendit\Invoice::retrieve($id, $retrieveParam);
var_dump($getInvoice);
```

#### Get All Invoice

```php
\Xendit\Invoice::retrieveAll(array $params);
```

Usage example:

```php
$retrieveAllParam = [
	'for-user-id' => 'test-reference-user-id' // OPTIONAL
];
$getAllInvoice = \Xendit\Invoice::retrieveAll($retrieveAllParam);
var_dump(($getAllInvoice));
```

#### Expire Invoice

```php
\Xendit\Invoice::expireInvoice(string $id, array $params);
```

Usage example:

```php
$id = 'invoice-id';
$params = [
	'for-user-id' => 'test-reference-user-id' // OPTIONAL
];
$expireInvoice = \Xendit\Invoice::expireInvoice($id, $params);
var_dump($expireInvoice);
```
### Paylater

#### Initiate PayLater Plans

```php

\Xendit\PayLater::initiatePayLaterPlans(array $params);
```

Usage example:

```php
$params = [
    'customer_id' => '<your-customer-id>',
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
```

#### Create Paylater Charges

```php
\Xendit\PayLater::createPayLaterCharge(array $params);
```

Usage example:

```php
$params = [
    'plan_id' => $payLaterPlan['id'],
    'reference_id' => 'order_id_' . time(),
    'checkout_method' => 'ONE_TIME_PAYMENT',
    'success_redirect_url' => '<your-success-redirect-url>',
    'failure_redirect_url' => '<your-failure-redirect-url>',
];
$payLaterCharge = \Xendit\PayLater::createPayLaterCharge($params);
var_dump($payLaterCharge);

```
#### Get PayLater Charge by ID

```php
\Xendit\PayLater::getPayLaterChargeStatus($id, array $params);
```

Usage example:

```php
$params = []; // Optional (You can put for-user-id if needed)
$id = '<pay-later-charge-id>';
$payLaterCharge = \Xendit\PayLater::getPayLaterChargeStatus($id, $params);
var_dump($payLaterCharge);
```
#### Refund Paylater Charge

```php
\Xendit\PayLater::createPayLaterRefund($id, array $params);
```

Usage example:

```php
$params = []; // Optional (You can put for-user-id if needed)
$id = '<pay-later-charge-id>';
$payLaterCharge = \Xendit\PayLater::createPayLaterRefund($id, $params);
var_dump($payLaterCharge);
```
#### Create Paylater Refund

```php
\Xendit\PayLater::createPayLaterRefund($id, array $params);
```

Usage example:

```php
$params = []; // Optional (You can put for-user-id if needed)
$id = '<pay-later-charge-id>';
$payLaterChargeRefundCreate = \Xendit\PayLater::createPayLaterRefund($id, $params);
var_dump($payLaterChargeRefundCreate);

```
#### Get PayLater Refund by ID

```php
\Xendit\PayLater::getPayLaterRefund($charge_id, $refund_id, array $params);
```

Usage example:

```php
$params = []; // Optional (You can put for-user-id if needed)
$charge_id = '<pay-later-charge-id>';
$refund_id = '<pay-later-refund-id>';
$payLaterChargeRefund = \Xendit\PayLater::getPayLaterRefund($charge_id, $refund_id, $params);
var_dump($payLaterChargeRefund);

```
#### List PayLater Refunds

```php
\Xendit\PayLater::listPayLaterRefund($charge_id, array $params);
```

Usage example:

```php
$params = []; // Optional (You can put for-user-id if needed)
$charge_id = '<pay-later-charge-id>';
$payLaterChargeRefundList = \Xendit\PayLater::listPayLaterRefund($charge_id, $params);
var_dump($payLaterChargeRefundList);

```
#### Void Payout

```php
\Xendit\Payouts::void(string $id);
```

Usage example:

```php
$id = 'payout-id';

$voidPayout = \Xendit\Payouts::void($id);
var_dump($voidPayout);
```
### Payouts

#### Create Payout

```php
\Xendit\Payouts::create(array $params);
```

Usage example:

```php
$params = [
    'external_id' => 'payouts-123456789',
    'amount' => 50000
];

$createPayout = \Xendit\Payouts::create($params);
var_dump($createPayout);
```

#### Get Payout

```php
\Xendit\Payouts::retrieve(string $id, array $params);
```

Usage example:

```php
$id = 'payout-id';
$params = [
	'for-user-id' => 'test-reference-user-id' // OPTIONAL
]
$getPayout = \Xendit\Payouts::retrieve($id, $params);
var_dump($getPayout);
```

#### Void Payout

```php
\Xendit\Payouts::void(string $id);
```

Usage example:

```php
$id = 'payout-id';

$voidPayout = \Xendit\Payouts::void($id);
var_dump($voidPayout);
```

### QR Code

#### Create a QR Code

```php
\Xendit\QRCode::create(array $params);
```

Usage example:

```php
$params = [
    'external_id' => 'demo_123456',
    'type' => 'STATIC',
    'callback_url' => 'https://webhook.site',
    'amount' => 10000,
];

$qr_code = \Xendit\QRCode::create($params);
var_dump($qr_code)
```

#### Get QR Code

```php
\Xendit\QRCode::get(string $external_id);
```

Usage example:

```php
$qr_code = \Xendit\QRCode::get('external_123');
var_dump($qr_code);
```

### Recurring Payments

#### Create a Recurring Payment

```php
\Xendit\Recurring::create(array $params);
```

Usage example:

```php
$params = [
    'external_id' => 'demo_147580196270',
    'payer_email' => 'sample_email@xendit.co',
    'description' => 'Trip to Bali',
    'amount' => 32000,
    'interval' => 'MONTH',
    'interval_count' => 1
];

$createRecurring = \Xendit\Recurring::create($params);
var_dump($createRecurring);
```

#### Get a Recurring Payment

```php
\Xendit\Recurring::retrieve(string $id, array $params);
```

Usage example:

```php
$id = 'recurring-payment-id';
$params = [
	'for-user-id' => 'test-reference-user-id' // OPTIONAL
]
$getRecurring = \Xendit\Recurring::retrieve($id, $params);
var_dump($getRecurring);
```

#### Edit Recurring Payment

```php
\Xendit\Recurring::update(string $id, array $params);
```

Usage example:

```php
$id = 'recurring-payment-id';
$params = ['amount' => 10000];

$editRecurring = \Xendit\Recurring::update($id, $params);
var_dump($editRecurring);
```

#### Stop Recurring Payment

```php
\Xendit\Recurring::stop(string $id);
```

Usage example:

```php
$id = 'recurring-payment-id';

$stopRecurring = \Xendit\Recurring::stop($id);
var_dump($stopRecurring);
```

#### Pause Recurring Payment

```php
\Xendit\Recurring::pause(string $id);
```

Usage example:

```php
$id = 'recurring-payment-id';

$pauseRecurring = \Xendit\Recurring::pause($id);
var_dump($pauseRecurring);
```

#### Resume Recurring Payment

```php
\Xendit\Recurring::resume(string $id);
```

Usage example:

```php
$id = 'recurring-payment-id';

$resumeRecurring = \Xendit\Recurring::resume($id);
var_dump($resumeRecurring);
```

### Retail Outlets

#### Create Fixed Payment Code

```php
\Xendit\Retail::create(array $params);
```

Usage example:

```php
$params = [
    'external_id' => 'TEST-123456789',
    'retail_outlet_name' => 'ALFAMART',
    'name' => 'JOHN DOE',
    'expected_amount' => 25000
];

$createFPC = \Xendit\Retail::create($params);
var_dump($createFPC);
```

#### Update Fixed Payment Code

```php
\Xendit\Retail::update(string $id, array $params);
```

Usage example:

```php
$id = 'FPC-id';
$updateParams = ['expected_amount' => 20000];

$updateFPC = \Xendit\Retail::update($id, $updateParams);
var_dump($updateFPC);
```

#### Get Fixed Payment Code

```php
\Xendit\Retail::retrieve(string $id);
```

Usage example:

```php
$id = 'FPC-id';
$getFPC = \Xendit\Retail::retrieve($id);
var_dump($getFPC);
```

### Virtual Accounts

#### Create Fixed Virtual Account

```php
\Xendit\VirtualAccounts::create(array $params);
```

Usage example:

```php
$params = ["external_id" => "VA_fixed-12341234",
   "bank_code" => "MANDIRI",
   "name" => "Steve Wozniak"
];

$createVA = \Xendit\VirtualAccounts::create($params);
var_dump($createVA);
```

#### Get Virtual Account Bank

```php
\Xendit\VirtualAccounts::getVABanks();
```

Usage example:

```php
$getVABanks = \Xendit\VirtualAccounts::getVABanks();
var_dump($getVABanks);
```

#### Get Fixed Virtual Account

```php
\Xendit\VirtualAccounts::retrieve(string $id, array $params);
```

Usage example:

```php
$id = 'VA-id';
$params = [
	'for-user-id' => 'test-reference-user-id' //OPTIONAL
]
$getVA = \Xendit\VirtualAccounts::retrieve($id, $params);
var_dump($getVA);
```

#### Update Fixed Virtual Account

```php
\Xendit\VirtualAccounts::update(string $id, array $params);
```

Usage example:

```php
$id = 'VA-id';
$updateParams = ["suggested_amount" => 1000];

$updateVA = \Xendit\VirtualAccounts::update($id, $updateParams);
var_dump($updateVA);
```

#### Get Fixed Virtual Account Payment

```php
\Xendit\VirtualAccounts::getFVAPayment(string $paymentID);
```

Usage example:

```php
$paymentID = 'payment-ID';
$getFVAPayment = \Xendit\VirtualAccounts::getFVAPayment($paymentID);
var_dump($getFVAPayment);
```

### xenPlatform

#### Create Account

```php
\Xendit\Platform::createAccount(array $params);
```

Usage example:

```php
$params = [
    'email' => 'customer@website.com',
    'type' => 'OWNED',
    'public_profile' => ['business_name' => 'customer company']
];

$createAccount = \Xendit\Platform::createAccount(array $params);
var_dump($createAccount);
```

#### Get Account

```php
\Xendit\Platform::getAccount(string $account_id);
```

Usage example:

```php
$getAccount = \Xendit\Platform::getAccount($accountId);
var_dump($getAccount);
```

#### Update Account

```php
$updateAccount = \Xendit\Platform::updateAccount(string $account_id, array $params);
```

Usage example:

```php
$updateParams = [
    'email' => 'customer@website.com',
    'public_profile' => ['business_name' => 'customer company updated']
];
$updateAccount = \Xendit\Platform::updateAccount($accountId, $updateParams);
var_dump($updateAccount);
```

#### Create Transfers

```php
$createTransfer = \Xendit\Platform::createTransfer(array $transferParams);
```

Usage example:

```php
$transferParams = [
    'reference' => ''.time(),
    'amount' => 50000,
    'source_user_id' => '54afeb170a2b18519b1b8768',
    'destination_user_id' => '5cafeb170a2b1851246b8768',
];
$createTransfer = \Xendit\Platform::createTransfer($transferParams);
var_dump($createTransfer);
```

#### Create Fee Rule

```php
$createFeeRule = \Xendit\Platform::createFeeRule(array $feeRuleParams);
```

Usage example:

```php
$feeRuleParams = [
    'name' => 'standard_platform_fee',
    'description' => 'Fee charged to insurance agents based in Java',
    'unit' => 'flat',
    'amount' => 6500,
    'currency' => 'IDR'
];
$createFeeRule = \Xendit\Platform::createFeeRule($feeRuleParams);
var_dump($createFeeRule);
```

#### Set Callback URLs

```php
$setCallbackUrl = \Xendit\Platform::setCallbackUrl(string $callbackType, array $callbackUrlParams);
```

Usage example:

```php
$callbackUrlParams = [
    'url' => 'https://webhook.site/c9c9140b-96b8-434c-9c59-7440eeae4d7f'
];
$callbackType = 'invoice';
$setCallbackUrl = \Xendit\Platform::setCallbackUrl($callbackType, $callbackUrlParams);
var_dump($setCallbackUrl);
```

### Transaction

#### List of Transactions

```php
\Xendit\Transaction::list(array $params);
```

Usage example:

```php
$params = [
    'types' => 'DISBURSEMENT'
    'for-user-id' => 'Your User Id', //Optional
    'query-param'=> 'true' //This is to enable parameters as query strings
];

$transactions = \Xendit\Transaction::list(array $params);
var_dump($transactions);
```

#### Detail of Transaction

```php
\Xendit\Transaction::detail(string $transaction_id);
```

Usage example:

```php
$detailTransaction = \Xendit\Transaction::detail(string $transaction_id);
var_dump($detailTransaction);
```

### Report

#### Generate Report

```php
\Xendit\Report::generate(array $params);
```

Usage example:

```php
$params = [
    'type' => 'TRANSACTIONS'
];
$generate = \Xendit\Report::generate($params);
var_dump($generate);
```

#### Detail of Report

```php
\Xendit\Report::detail(string $report_id);
```

Usage example:

```php
$detailReport = \Xendit\Report::detail('report_5c1b34a2-6ceb-4c24-aba9-c836bac82b28');
var_dump($detailReport);
```

## Exceptions

### InvalidArgumentException

`InvalidArgumentException` will be thrown if the argument provided by user is not sufficient to create the request.

For example, there are required arguments such as `external_id`, `payer_email`, `description`, and `amount` to create an invoice. If user lacks one or more arguments when attempting to create one, `InvalidArgumentException` will be thrown.

`InvalidArgumentException` is derived from PHP's `InvalidArgumentException`. For more information about this Exception methods and properties, please check [PHP Documentation](https://www.php.net/manual/en/class.invalidargumentexception.php).

### ApiException

`ApiException` wraps up Xendit API error. This exception will be thrown if there are errors from Xendit API side, e.g. get fixed virtual account with invalid `id`.

To get exception message:

```php
try {
    $getInvoice = \Xendit\Invoice::retrieve('123');
} catch (\Xendit\Exceptions\ApiException $e) {
    var_dump($e->getMessage());
}
```

To get exception HTTP error code:

```php
try {
    $getInvoice = \Xendit\Invoice::retrieve('123');
} catch (\Xendit\Exceptions\ApiException $e) {
    var_dump($e->getCode());
}
```

To get exception Xendit API error code:

```php
try {
    $getInvoice = \Xendit\Invoice::retrieve('123');
} catch (\Xendit\Exceptions\ApiException $e) {
    var_dump($e->getErrorCode());
}
```

## Contributing

For any requests, bugs, or comments, please open an [issue](https://github.com/xendit/xendit-php-clients/issues) or [submit a pull request](https://github.com/xendit/xendit-php-clients/pulls).

### Installing Packages

Before you start to code, run this command to install all of the required packages. Make sure you have `composer` installed in your computer

```bash
composer install
```

### Tests

#### Running test suite:

```bash
vendor\bin\phpunit tests
```

#### Running examples:

```bash
php examples\InvoiceExample.php
```

There is a pre-commit hook to run phpcs and phpcbf. Please make sure they passed before making commits/pushes.
