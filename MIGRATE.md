# Migrations

## v1.4.0 to v2.0.0

### New package name

For standardization purpose, package `xendit-php-clients` will be renamed to `xendit-php`.

To install this package with `composer`, run command:

```bash
composer require xendit/xendit-php
```

To update with `composer`, run command:

```bash
composer update xendit/xendit-php
```

### Instantiate API Key

In the v1.4.0, secret API key is instantiated inside the config file. However in v2.0.0, secret API key is instantiated
with:

```php
Xendit::setApiKey('secretKey');
```

### Calling methods

In v2.0.0, we restructured classes based on product, so it will impact on how the method is called.

#### Create Invoice

In v1.4.0, we used the following command to create an invoice:

```php
$external_id = 'demo_147580196270';
$payer_email = 'sample_email@xendit.co';
$description = 'Trip to Bali';
$amount = 32000;

$response = $xenditPHPClient->createInvoice($external_id, $amount, $payer_email, $description);
```

In v2.0.0, we will use this command to create an invoice:

```php
$params = ['external_id' => 'demo_147580196270',
    'payer_email' => 'sample_email@xendit.co',
    'description' => 'Trip to Bali',
    'amount' => 32000
];

$response = \Xendit\Invoice::create($params);
```

#### Get Invoice

In v1.4.0, to get an invoice:

```php
$response = $xenditPHPClient->getInvoice($invoice_id);
```

In v2.0.0, to get an invoice:

```php
$response = \Xendit\Invoice::retrieve($id);
```

#### Create Disbursement

In v1.4.0, to create a disbursement:

```php
$external_id = 'disb-12345678';
$amount = 15000;
$bank_code = 'BCA';
$account_holder_name = 'Joe';
$account_number = '1234567890';

$response = $xenditPHPClient->createDisbursement($external_id, $amount, $bank_code, $account_holder_name, $account_number);
```

In v2.0.0, to create a disbursement:

```php
$params = [
    'external_id'=> 'disb-12345678',
    'amount'=> 15000,
    'bank_code'=> 'BCA',
    'account_holder_name'=> 'Joe',
    'account_number'=> '1234567890',
    'description'=>'Disbursement from Example'
];

$response = \Xendit\Disbursements::create($params);
```

#### Get Balance

In v1.4.0, to get current balance:

```php
$response = $xenditPHPClient->getBalance();
```

In v2.0.0, to get current balance:

```php
$response = \Xendit\Balance::getBalance('CASH');
```

#### Capture Credit Card Payment

In v1.4.0, to capture a credit card payment:

```php
$external_id = 'ext-id';
$token_id = 'token-id';
$amount = 100000;

$response = $xenditPHPClient->captureCreditCardPayment($external_id, $token_id, $amount);
```

In v2.0.0, to capture a credit card payment:

```php
$captureParams = ['amount' => 100000];

$response = \Xendit\Cards::capture($id, $captureParams);
```

#### Refund Credit Card Payment

In v1.4.0, to refund credit card payment:

```php
$id = 'id';
$amount = 20000;
$external_id = 'ext-id';

$response = $xenditPHPClient->issueCreditCardRefund($id, $amount, $external_id);
```

In v2.0.0, to refund credit card payment:

```php
$refundParams = [
    'external_id' => 'ext-id',
    'amount' => 20000
];

$response = \Xendit\Cards::createRefund($id, $refundParams);
```