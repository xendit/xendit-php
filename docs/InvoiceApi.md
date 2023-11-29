# InvoiceApi


You can use the APIs below to interface with Xendit's `InvoiceApi`.
To start using the API, you need to configure the secret key and initiate the client instance.

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

use Xendit\Configuration;
use Xendit\Invoice\InvoiceApi;

Configuration::setXenditKey("YOUR_API_KEY_HERE");

$apiInstance = new InvoiceApi();
```

All URIs are relative to https://api.xendit.co, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createInvoice()**](InvoiceApi.md#createinvoice-function) | **POST** /v2/invoices/ | Create an invoice |
| [**getInvoiceById()**](InvoiceApi.md#getinvoicebyid-function) | **GET** /v2/invoices/{invoice_id} | Get invoice by invoice id |
| [**getInvoices()**](InvoiceApi.md#getinvoices-function) | **GET** /v2/invoices | Get all Invoices |
| [**expireInvoice()**](InvoiceApi.md#expireinvoice-function) | **POST** /invoices/{invoice_id}/expire! | Manually expire an invoice |


## `createInvoice()` Function

```php
createInvoice($create_invoice_request, $for_user_id): \Invoice\Invoice
```

Create an invoice

| Name          |    Value 	     |
|--------------------|:-------------:|
| Function Name | `createInvoice` |
| Request Parameters  |  [CreateInvoiceRequestParams](#request-parameters--CreateInvoiceRequestParams)	 |
| Return Type  |  [**\Xendit\Invoice\Invoice**](Invoice/Invoice.md) |

### Request Parameters - CreateInvoiceRequestParams

|Name | Type | Required |Default |
|-------------|:-------------:|:-------------:|-------------| 
| **create_invoice_request** | [**CreateInvoiceRequest**](Invoice/CreateInvoiceRequest.md) | ☑️ |  |
| **for_user_id** | **string** |  |  |

### Usage Example
#### Create Invoice Request

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

use Xendit\Configuration;
use Xendit\Invoice\InvoiceApi;

Configuration::setXenditKey("YOUR_API_KEY_HERE");

$apiInstance = new InvoiceApi();
$create_invoice_request = new Xendit\Invoice\CreateInvoiceRequest([
  'external_id' => 'test1234',
  'description' => 'Test Invoice',
  'amount' => 10000,
  'invoice_duration' => 172800,
  'currency' => 'IDR',
  'reminder_time' => 1
]); // \Xendit\Invoice\CreateInvoiceRequest
$for_user_id = "62efe4c33e45694d63f585f0"; // string | Business ID of the sub-account merchant (XP feature)

try {
    $result = $apiInstance->createInvoice($create_invoice_request, $for_user_id);
        print_r($result);
} catch (\Xendit\XenditSdkException $e) {
    echo 'Exception when calling InvoiceApi->createInvoice: ', $e->getMessage(), PHP_EOL;
    echo 'Full Error: ', json_encode($e->getFullError()), PHP_EOL;
}
```


## `getInvoiceById()` Function

```php
getInvoiceById($invoice_id, $for_user_id): \Invoice\Invoice
```

Get invoice by invoice id

| Name          |    Value 	     |
|--------------------|:-------------:|
| Function Name | `getInvoiceById` |
| Request Parameters  |  [GetInvoiceByIdRequestParams](#request-parameters--GetInvoiceByIdRequestParams)	 |
| Return Type  |  [**\Xendit\Invoice\Invoice**](Invoice/Invoice.md) |

### Request Parameters - GetInvoiceByIdRequestParams

|Name | Type | Required |Default |
|-------------|:-------------:|:-------------:|-------------| 
| **invoice_id** | **string** | ☑️ |  |
| **for_user_id** | **string** |  |  |

### Usage Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

use Xendit\Configuration;
use Xendit\Invoice\InvoiceApi;

Configuration::setXenditKey("YOUR_API_KEY_HERE");

$apiInstance = new InvoiceApi();
$invoice_id = "62efe4c33e45294d63f585f2"; // string | Invoice ID
$for_user_id = "62efe4c33e45694d63f585f0"; // string | Business ID of the sub-account merchant (XP feature)

try {
    $result = $apiInstance->getInvoiceById($invoice_id, $for_user_id);
    print_r($result);
} catch (\Xendit\XenditSdkException $e) {
    echo 'Exception when calling InvoiceApi->getInvoiceById: ', $e->getMessage(), PHP_EOL;
    echo 'Full Error: ', json_encode($e->getFullError()), PHP_EOL;
}
```


## `getInvoices()` Function

```php
getInvoices($for_user_id, $external_id, $statuses, $limit, $created_after, $created_before, $paid_after, $paid_before, $expired_after, $expired_before, $last_invoice, $client_types, $payment_channels, $on_demand_link, $recurring_payment_id): \Invoice\Invoice[]
```

Get all Invoices

| Name          |    Value 	     |
|--------------------|:-------------:|
| Function Name | `getInvoices` |
| Request Parameters  |  [GetInvoicesRequestParams](#request-parameters--GetInvoicesRequestParams)	 |
| Return Type  |  [**\Xendit\Invoice\Invoice[]**](Invoice/Invoice.md) |

### Request Parameters - GetInvoicesRequestParams

|Name | Type | Required |Default |
|-------------|:-------------:|:-------------:|-------------| 
| **for_user_id** | **string** |  |  |
| **external_id** | **string** |  |  |
| **statuses** | [**InvoiceStatus**](Invoice/InvoiceStatus.md) |  |  |
| **limit** | **float** |  |  |
| **created_after** | **\DateTime** |  |  |
| **created_before** | **\DateTime** |  |  |
| **paid_after** | **\DateTime** |  |  |
| **paid_before** | **\DateTime** |  |  |
| **expired_after** | **\DateTime** |  |  |
| **expired_before** | **\DateTime** |  |  |
| **last_invoice** | **string** |  |  |
| **client_types** | [**InvoiceClientType**](Invoice/InvoiceClientType.md) |  |  |
| **payment_channels** | **string[]** |  |  |
| **on_demand_link** | **string** |  |  |
| **recurring_payment_id** | **string** |  |  |

### Usage Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

use Xendit\Configuration;
use Xendit\Invoice\InvoiceApi;

Configuration::setXenditKey("YOUR_API_KEY_HERE");

$apiInstance = new InvoiceApi();
$for_user_id = "62efe4c33e45694d63f585f0"; // string | Business ID of the sub-account merchant (XP feature)
$external_id = "test-external"; // string
$statuses = ["PENDING","SETTLED"]; // \Invoice\InvoiceStatus[]
$limit = 10; // float
$created_after = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime
$created_before = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime
$paid_after = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime
$paid_before = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime
$expired_after = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime
$expired_before = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime
$last_invoice = "62efe4c33e45294d63f585f2"; // string
$client_types = ["API_GATEWAY","DASHBOARD"]; // \Invoice\InvoiceClientType[]
$payment_channels = ["BNI","BRI"]; // string[]
$on_demand_link = "test-link"; // string
$recurring_payment_id = "62efe4c33e45294d63f585f2"; // string

try {
    $result = $apiInstance->getInvoices($for_user_id, $external_id, $statuses, $limit, $created_after, $created_before, $paid_after, $paid_before, $expired_after, $expired_before, $last_invoice, $client_types, $payment_channels, $on_demand_link, $recurring_payment_id);
    print_r($result);
} catch (\Xendit\XenditSdkException $e) {
    echo 'Exception when calling InvoiceApi->getInvoices: ', $e->getMessage(), PHP_EOL;
    echo 'Full Error: ', json_encode($e->getFullError()), PHP_EOL;
}
```


## `expireInvoice()` Function

```php
expireInvoice($invoice_id, $for_user_id): \Invoice\Invoice
```

Manually expire an invoice

| Name          |    Value 	     |
|--------------------|:-------------:|
| Function Name | `expireInvoice` |
| Request Parameters  |  [ExpireInvoiceRequestParams](#request-parameters--ExpireInvoiceRequestParams)	 |
| Return Type  |  [**\Xendit\Invoice\Invoice**](Invoice/Invoice.md) |

### Request Parameters - ExpireInvoiceRequestParams

|Name | Type | Required |Default |
|-------------|:-------------:|:-------------:|-------------| 
| **invoice_id** | **string** | ☑️ |  |
| **for_user_id** | **string** |  |  |

### Usage Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

use Xendit\Configuration;
use Xendit\Invoice\InvoiceApi;

Configuration::setXenditKey("YOUR_API_KEY_HERE");

$apiInstance = new InvoiceApi();
$invoice_id = "5f4708b7bd394b0400b96276"; // string | Invoice ID to be expired
$for_user_id = "62efe4c33e45694d63f585f0"; // string | Business ID of the sub-account merchant (XP feature)

try {
    $result = $apiInstance->expireInvoice($invoice_id, $for_user_id);
    print_r($result);
} catch (\Xendit\XenditSdkException $e) {
    echo 'Exception when calling InvoiceApi->expireInvoice: ', $e->getMessage(), PHP_EOL;
    echo 'Full Error: ', json_encode($e->getFullError()), PHP_EOL;
}
```


## Callback Objects
Use the following callback objects provided by Xendit to receive callbacks (also known as webhooks) that Xendit sends you on events, such as successful payments. Note that the example is meant to illustrate the contents of the callback object -- you will not need to instantiate these objects in practice
### InvoiceCallback Object
>Invoice Callback Object

Model Documentation: [InvoiceCallback](/InvoiceCallback.md)
#### Usage Example
Note that the example is meant to illustrate the contents of the callback object -- you will not need to instantiate these objects in practice
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

use Xendit\Invoice\InvoiceCallback;

$invoice_callback = new InvoiceCallback([
  'id' => '593f4ed1c3d3bb7f39733d83',
  'external_id' => 'testing-invoice',
  'user_id' => '5848fdf860053555135587e7',
  'payment_method' => 'RETAIL_OUTLET',
  'status' => 'PAID',
  'merchant_name' => 'Xendit',
  'amount' => 2000000,
  'paid_amount' => 2000000,
  'paid_at' => '2020-01-14T02=>32=>50.912Z',
  'payer_email' => 'test@xendit.co',
  'description' => 'Invoice webhook test',
  'created' => '2020-01-13T02=>32=>49.827Z',
  'updated' => '2020-01-13T02=>32=>50.912Z',
  'currency' => 'IDR',
  'payment_channel' => 'ALFAMART',
  'payment_destination' => 'TEST815'
]);
```

You may then use the callback object in your webhook or callback handler like so,
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

function simulateInvoiceCallback(InvoiceCallback $invoice_callback) {
    echo $invoice_callback->getId();
    // do things here with the callback
}
```

[[Back to README]](../README.md)