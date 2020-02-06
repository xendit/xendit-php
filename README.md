# Xendit API PHP Client

This library is the abstraction of Xendit API for access from applications written with PHP.

- [Documentation](#documentation)
- [Installation](#installation)
- [Usage](#usage)
  - [Balance](#balance)
    - [Get Balance](#get-balance)
  - [Cards](#cards)
    - [Create Charge](#create-charge)
    - [Reverse Authentication](#reverse-authentication)
    - [Capture Charge](#capture-charge)
    - [Get Charge](#get-charge)
    - [Create Refund](#create-refund)
  - [Cardless Credit](#cardless-credit)
    - [Create Cardless Credit Payment](#create-cardless-credit-payment)
  - [Disbursements](#disbursements)
    - [Create Disbursement](#create-disbursement)
    - [Create Batch Disbursement](#create-batch-disbursement)
    - [Get Disbursement by ID](#get-disbursement-by-id)
    - [Get Disbursement by External ID](#get-disbursement-by-external-id)
    - [Get Disbursement Available Banks](#get-disbursement-available-banks)
  - [E-Wallets](#e-wallets)
    - [Create Payment](#create-payment)
    - [Get Payment Status](#get-payment-status)
  - [Invoice](#invoice)
    - [Create Invoice](#create-invoice)
    - [Get Invoice](#get-invoice)
    - [Get All Invoice](#get-all-invoice)
    - [Expire Invoice](#expire-invoice)
  - [Payouts](#payouts)
    - [Create a Payout](#create-payout)
    - [Get a Payout](#get-payout)
    - [Void a Payout](#void-payout)
  - [Recurring](#recurring-payments)
    - [Create a Recurring Payment](#create-a-recurring-payment)
    - [Get a Recurring Payment](#get-a-recurring-payment)
    - [Edit a Recurring Payment](#edit-recurring-payment)
    - [Pause a Recurring Payment](#pause-recurring-payment)
    - [Stop a Recurring Payment](#stop-recurring-payment)
    - [Resume a Recurring Payment](#resume-recurring-payment)
  - [Retail Outlets](#retail-outlets)
    - [Create Fixed Payment Code](#create-fixed-payment-code)
    - [Update Fixed Payment Code](#update-fixed-payment-code)
    - [Get Fixed Payment Code](#get-fixed-payment-code)
  - [Virtual Accounts](#virtual-accounts)
    - [Create Fixed Virtual Account](#create-fixed-virtual-account)
    - [Get Virtual Account Bank](#get-virtual-account-bank)
    - [Get Fixed Virtual Account](#get-fixed-virtual-account)
    - [Update Fixed Virtual Account](#update-fixed-virtual-account)
    - [Get Fixed Virtual Account Payment](#get-fixed-virtual-account-payment)
- [Contributing](#contributing)
  - [Test](#tests)
    - [Running test suite](#running-test-suite)
    - [Running examples](#running-examples)


---

## Documentation

For the API documentation, check [Xendit API Reference](https://xendit.github.io/apireference).

## Installation

Install xendit-php-clients with composer by following command:

```bash
composer require xendit/xendit-php-clients
```

or add it manually in your `composer.json` file.

### Update from v1.4.0 to v2.0.0

To update xendit-php-clients with composer, use the following command:

```bash
composer update xendit/xendit-php-clients
```

To migrate, see [MIGRATE.md](MIGRATE.md) for more information.

## Usage

Configure package with your account's secret key obtained from [Xendit Dashboard](https://dashboard.xendit.co/settings/developers#api-keys).

```php
Xendit::loadApiKey('secretKey');
```

If you want to use `.env`, copy `.env.example` to `.env` and insert your secret API key in variable `SECRET_API_KEY`. Then, in your application, load your API key like the example below:

```php
Xendit::loadApiKey();
```

See example codes for more details.

### Balance

#### Get Balance

```php
$getBalance = \Xendit\Balance::getBalance('CASH');
var_dump($getBalance);
```

### Cards

#### Create Charge

```php
$params = [
    'token_id' => '5e2e8231d97c174c58bcf644',
    'external_id' => 'card_' . time(),
    'authentication_id' => '5e2e8658bae82e4d54d764c0',
    'amount'=> 100000,
    'card_cvn'=>'123',
    'capture'=> false
];

$createCharge = \Xendit\Cards::create($params);
var_dump($createCharge);
```

### Reverse Authentication

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
$id = 'charge-id';
$params = ['amount' => 100000];

$captureCharge = \Xendit\Cards::capture($id, $params);
var_dump($captureParams);
```

#### Get Charge

```php
$id = 'charge-id';

$getCharge = \Xendit\Cards::retrieve($id);
var_dump($getCharge);
```

#### Create Refund

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
    'amount' => 20000
];
$headers = ['X-IDEMPOTENCY-KEY' => $params['external_id']];

$refund = \Xendit\Cards::createRefund($id, $params, $headers);
var_dump($refund);
```

### Cardless Credit

#### Create Cardless Credit Payment

```php
$params = [
    'cardless_credit_type'=> 'KREDIVO',
    'external_id'=> 'test-cardless-credit-02',
    'amount'=> 800000,
    'payment_type'=> '3_months',
    'items'=> [
        [
            'id'=> '123123',
            'name'=> 'Phone Case',
            'price'=> 200000,
            'type'=> 'Smartphone',
            'url'=> 'http=>//example.com/phone/phone_case',
            'quantity'=> 2
        ],
        [
            'id'=> '234567',
            'name'=> 'Bluetooth Headset',
            'price'=> 400000,
            'type'=> 'Audio',
            'url'=> 'http=>//example.com/phone/bluetooth_headset',
            'quantity'=> 1
        ]
    ],
    'customer_details'=> [
        'first_name'=> 'customer first name',
        'last_name'=> 'customer last name',
        'email'=> 'customer@yourwebsite.com',
        'phone'=> '081513114262'
    ],
    'shipping_address'=> [
        'first_name'=> 'first name',
        'last_name'=> 'last name',
        'address'=> 'Jalan Teknologi No. 12',
        'city'=> 'Jakarta',
        'postal_code'=> '12345',
        'phone'=> '081513114262',
        'country_code'=> 'IDN'
    ],
    'redirect_url'=> 'https://example.com',
    'callback_url'=> 'http://example.com/callback-cardless-credit'
];

$createPayment = \Xendit\CardlessCredit::create($params);
var_dump($createPayment);
```

### Disbursements

#### Create Disbursement

Without idempotency key:

```php
$params = [
    'external_id'=> 'disb-12345678',
    'amount'=> 15000,
    'bank_code'=> 'BCA',
    'account_holder_name'=> 'Joe',
    'account_number'=> '1234567890',
    'description'=>'Disbursement from Example'
];

$createDisbursements = \Xendit\Disbursements::create($params);
var_dump($createDisbursements);
```

With idempotency key:

```php
$params = [
    'external_id'=> 'disb-12345678',
    'amount'=> 15000,
    'bank_code'=> 'BCA',
    'account_holder_name'=> 'Joe',
    'account_number'=> '1234567890',
    'description'=>'Disbursement from Example'
];
$headers = ['X-IDEMPOTENCY-KEY' => $params['external_id']];


$createDisbursements = \Xendit\Disbursements::create($params, $headers);
var_dump($createDisbursements);
```

#### Create Batch Disbursement

```php
$batch_params = [
    'reference'=> 'disb_batch-12345678',
    'disbursements'=> [
        [
            'amount'=> 20000,
            'bank_code'=> 'BCA',
            'bank_account_name'=> 'Fadlan',
            'bank_account_number'=> '1234567890',
            'description'=> 'Batch Disbursement',
            'external_id'=> 'disbursement-1'
        ],
        [
            'amount'=> 30000,
            'bank_code'=> 'MANDIRI',
            'bank_account_name'=> 'Lutfi',
            'bank_account_number'=> '1234567891',
            'description'=> 'Batch Disbursement with email notifications',
            'external_id'=> 'disbursement-2',
            'email_to'=> ['test+to@xendit.co'],
            'email_cc'=> ['test+cc@xendit.co'],
            'email_bcc'=> ['test+bcc1@xendit.co', 'test+bcc2@xendit.co']
        ]
    ]
];

$createBatchDisbursements = \Xendit\Disbursements::createBatch($batch_params);
var_dump($createBatchDisbursements);
```

#### Get Disbursement by ID

```php
$id = 'disbursements-id';
$getDisbursements = \Xendit\Disbursements::retrieve($id);
var_dump($getDisbursements);
```

#### Get Disbursement by External ID

```php
$external_id = 'disbursements-ext-id';
$getDisbursementsByExt = \Xendit\Disbursements::retrieveExternal($external_id);
var_dump($getDisbursementsByExt);
```

#### Get Disbursement Available Banks

```php
$getDisbursementsBanks = \Xendit\Disbursements::getAvailableBanks();
var_dump($getDisbursementsBanks);
```

### E-Wallets

#### Create Payment

To create payment, each e-wallet has its own required params. For more information, please check [Xendit API Reference - E-Wallets](https://xendit.github.io/apireference/?bash#create-payment).

##### OVO

```php
$ovoParams = [
    'external_id' => 'demo_' . time(),
    'amount' => 32000,
    'phone' => '081298498259',
    'ewallet_type' => 'OVO'
];

$createOvo = \Xendit\EWallets::create($ovoParams);
var_dump($createOvo);
```

##### DANA

```php
$danaParams = [
    'external_id' => 'demo_' . time(),
    'amount' => 32000,
    'phone' => '081298498259',
    'expiration_date' => '2020-02-20T00:00:00.000Z',
    'callback_url' => 'https://my-shop.com/callbacks',
    'redirect_url' => 'https://my-shop.com/home',
    'ewallet_type' => 'DANA'
];

$createDana = \Xendit\EWallets::create($danaParams);
var_dump($createDana);
```

##### LinkAja

```php
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

$createLinkaja = \Xendit\EWallets::create($linkajaParams);
var_dump($createLinkaja);
```

#### Get Payment Status

```php
$external_id = 'external-ID';
$ewallet_type = 'OVO';
$getPayments = \Xendit\EWallets::getPaymentStatus($external_id, 'OVO');
```

### Invoice

#### Create Invoice

```php
$params = ['external_id' => 'demo_147580196270',
    'payer_email' => 'sample_email@xendit.co',
    'description' => 'Trip to Bali',
    'amount' => 32000
];

$createInvoice = \Xendit\Invoice::create($params);
var_dump($createInvoice);
```

#### Get Invoice

```php
$id = 'invoice-id';
$getInvoice = \Xendit\Invoice::retrieve($id);
var_dump($getInvoice);
```

#### Get All Invoice

```php
$getAllInvoice = \Xendit\Invoice::retrieveAll();
var_dump(($getAllInvoice));
```

#### Expire Invoice

```php
$id = 'invoice-id';
$expireInvoice = \Xendit\Invoice::expireInvoice($id);
var_dump($expireInvoice);
```

### Payouts

#### Create Payout

```php
$params = [
    'external_id'=> 'payouts-123456789',
    'amount'=> 50000
];

$createPayout = \Xendit\Payouts::create($params);
var_dump($createPayout);
```

#### Get Payout

```php
$id = 'payout-id';

$getPayout = \Xendit\Payouts::retrieve($id);
var_dump($getPayout);
```

#### Void Payout

```php
$id = 'payout-id';

$voidPayout = \Xendit\Payouts::void($id);
var_dump($voidPayout);
```

### Recurring Payments

#### Create a Recurring Payment

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
$id = 'recurring-payment-id';

$getRecurring = \Xendit\Recurring::retrieve($id);
var_dump($getRecurring);
```

#### Edit Recurring Payment

```php
$id = 'recurring-payment-id';
$params = ['amount' => 10000];

$editRecurring = \Xendit\Recurring::update($id, $params);
var_dump($editRecurring);
```

#### Stop Recurring Payment

```php
$id = 'recurring-payment-id';

$stopRecurring = \Xendit\Recurring::stop($id);
var_dump($stopRecurring);
```

#### Pause Recurring Payment

```php
$id = 'recurring-payment-id';

$pauseRecurring = \Xendit\Recurring::pause($id);
var_dump($pauseRecurring);
```

#### Resume Recurring Payment

```php
$id = 'recurring-payment-id';

$resumeRecurring = \Xendit\Recurring::resume($id);
var_dump($resumeRecurring);
```

### Retail Outlets

#### Create Fixed Payment Code

```php
$params = [
    'external_id'=> 'TEST-123456789',
    'retail_outlet_name'=> 'ALFAMART',
    'name'=> 'JOHN DOE',
    'expected_amount'=> 25000
];

$createFPC = \Xendit\Retail::create($params);
var_dump($createFPC);
```

#### Update Fixed Payment Code

```php
$id = 'FPC-id';
$updateParams = ['expected_amount' => 20000];

$updateFPC = \Xendit\Retail::update($id, $updateParams);
var_dump($updateFPC);
```

#### Get Fixed Payment Code

```php
$id = 'FPC-id';
$getFPC = \Xendit\Retail::retrieve($id);
var_dump($getFPC);
```

### Virtual Accounts

#### Create Fixed Virtual Account

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
$getVABanks = \Xendit\VirtualAccounts::getVABanks();
var_dump($getVABanks);
```

#### Get Fixed Virtual Account

```php
$id = 'VA-id';
$getVA = \Xendit\VirtualAccounts::retrieve($id);
var_dump($getVA);
```

#### Update Fixed Virtual Account

```php
$id = 'VA-id';
$updateParams = ["suggested_amount" => 1000];

$updateVA = \Xendit\VirtualAccounts::update($id, $updateParams);
var_dump($updateVA);
```

#### Get Fixed Virtual Account Payment
```php
$paymentID = 'payment-ID';
$getFVAPayment = \Xendit\VirtualAccounts::getFVAPayment($paymentID);
var_dump($getFVAPayment);
```

## Contributing

For any requests, bugs, or comments, please open an [issue](https://github.com/xendit/xendit-php-clients/issues) or [submit a pull request](https://github.com/xendit/xendit-php-clients/pulls).

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