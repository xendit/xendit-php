# Xendit API PHP Client

This library is the abstraction of Xendit API for access from applications written with PHP.

- [Documentation](#documentation)
- [Installation](#installation)
- [Usage](#usage)
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

TBD

## Usage

Configure package with your account's secret key obtained from [Xendit Dashboard](https://dashboard.xendit.co/settings/developers#api-keys).

```php
Xendit::setApiKey('secretKey');
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