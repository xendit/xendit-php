![Xendit PHP SDK](docs/header.jpg "Xendit PHP SDK")

# Xendit PHP SDK

The official Xendit PHP SDK provides a simple and convenient way to call Xendit's REST API
in applications written in PHP.

* Package version: 3.1.0

# Getting Started

## Installation

### Requirements

PHP 7.4 and later.

### Composer

To install the bindings via [Composer](https://getcomposer.org/), add the following to `composer.json`:

```json
{
  "repositories": [
    {
      "type": "vcs",
      "url": "https://github.com/xendit/xendit-php.git"
    }
  ],
  "require": {
    "xendit/xendit-php": "3.1.0"
  }
}
```

Then run `composer install`

### Manual Installation

Download the files and include `autoload.php`:

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
```

## Authorization

The SDK needs to be instantiated using your secret API key obtained from the [Xendit Dashboard](https://dashboard.xendit.co/settings/developers#api-keys).
You can sign up for a free Dashboard account [here](https://dashboard.xendit.co/register).

```php
use Xendit\Configuration;

Configuration::setXenditKey('XENDIT_API_KEY');
```

# Documentation

Find detailed API information and examples for each of our product’s by clicking the links below,

* [Balance](docs/BalanceAndTransaction/BalanceApi.md)
* [Invoice](docs/Invoice/InvoiceApi.md)
* [PaymentMethod](docs/PaymentMethod/PaymentMethodApi.md)
* [PaymentRequest](docs/PaymentRequest/PaymentRequestApi.md)
* [Payout](docs/Payout/PayoutApi.md)
* [Refund](docs/Refund/RefundApi.md)
* [Transaction](docs/BalanceAndTransaction/TransactionApi.md)

All URIs are relative to *https://api.xendit.co*.  For more information about our API, please refer to *https://developers.xendit.co/*.

Further Reading

* [Xendit Docs](https://docs.xendit.co/)
* [Xendit API Reference](https://developers.xendit.co/)
