# Xendit\InvoiceApi

All URIs are relative to https://api.xendit.co, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createInvoice()**](InvoiceApi.md#createInvoice) | **POST** /v2/invoices/ | Create an invoice |
| [**getInvoiceById()**](InvoiceApi.md#getInvoiceById) | **GET** /v2/invoices/{invoice_id} | Get invoice by invoice id |
| [**getInvoices()**](InvoiceApi.md#getInvoices) | **GET** /v2/invoices | Get all Invoices |
| [**expireInvoice()**](InvoiceApi.md#expireInvoice) | **POST** /invoices/{invoice_id}/expire! | Manually expire an invoice |


## `createInvoice()`

```php
createInvoice($create_invoice_request, $for_user_id): \Invoice\Invoice
```

Create an invoice

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

use Xendit\Configuration;
use Xendit\Invoice\InvoiceApi;

Configuration::setXenditKey("YOUR_API_KEY_HERE");

$apiInstance = new InvoiceApi();
$create_invoice_request = {"external_id":"test1234","description":"Test Invoice","amount":10000,"invoice_duration":172800,"currency":"IDR","reminder_time":1}; // \Xendit\Invoice\CreateInvoiceRequest
$for_user_id = "62efe4c33e45694d63f585f8"; // string | Business ID of the sub-account merchant (XP feature)

try {
    $result = $apiInstance->createInvoice($create_invoice_request, $for_user_id);
    print_r($result);
} catch (\Xendit\XenditSdkException $e) {
    echo 'Exception when calling InvoiceApi->createInvoice: ', $e->getMessage(), PHP_EOL;
    echo 'Full Error: ', json_encode($e->getFullError()), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **create_invoice_request** | [**CreateInvoiceRequest**](CreateInvoiceRequest.md)|  | |
| **for_user_id** | **string**| Business ID of the sub-account merchant (XP feature) | [optional] |

### Return type

[**\Xendit\Invoice\Invoice**](Invoice.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to README]](../../README.md)

## `getInvoiceById()`

```php
getInvoiceById($invoice_id, $for_user_id): \Invoice\Invoice
```

Get invoice by invoice id

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

use Xendit\Configuration;
use Xendit\Invoice\InvoiceApi;

Configuration::setXenditKey("YOUR_API_KEY_HERE");

$apiInstance = new InvoiceApi();
$invoice_id = "62efe4c33e45294d63f585f2"; // string | Invoice ID
$for_user_id = "62efe4c33e45694d63f585f8"; // string | Business ID of the sub-account merchant (XP feature)

try {
    $result = $apiInstance->getInvoiceById($invoice_id, $for_user_id);
    print_r($result);
} catch (\Xendit\XenditSdkException $e) {
    echo 'Exception when calling InvoiceApi->getInvoiceById: ', $e->getMessage(), PHP_EOL;
    echo 'Full Error: ', json_encode($e->getFullError()), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **invoice_id** | **string**| Invoice ID | |
| **for_user_id** | **string**| Business ID of the sub-account merchant (XP feature) | [optional] |

### Return type

[**\Xendit\Invoice\Invoice**](Invoice.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to README]](../../README.md)

## `getInvoices()`

```php
getInvoices($for_user_id, $external_id, $statuses, $limit, $created_after, $created_before, $paid_after, $paid_before, $expired_after, $expired_before, $last_invoice, $client_types, $payment_channels, $on_demand_link, $recurring_payment_id): \Invoice\Invoice[]
```

Get all Invoices

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

use Xendit\Configuration;
use Xendit\Invoice\InvoiceApi;

Configuration::setXenditKey("YOUR_API_KEY_HERE");

$apiInstance = new InvoiceApi();
$for_user_id = "62efe4c33e45694d63f585f8"; // string | Business ID of the sub-account merchant (XP feature)
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

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **for_user_id** | **string**| Business ID of the sub-account merchant (XP feature) | [optional] |
| **external_id** | **string**|  | [optional] |
| **statuses** | [**InvoiceStatus**](InvoiceStatus.md)|  | [optional] |
| **limit** | **float**|  | [optional] |
| **created_after** | **\DateTime**|  | [optional] |
| **created_before** | **\DateTime**|  | [optional] |
| **paid_after** | **\DateTime**|  | [optional] |
| **paid_before** | **\DateTime**|  | [optional] |
| **expired_after** | **\DateTime**|  | [optional] |
| **expired_before** | **\DateTime**|  | [optional] |
| **last_invoice** | **string**|  | [optional] |
| **client_types** | [**InvoiceClientType**](InvoiceClientType.md)|  | [optional] |
| **payment_channels** | **string[]**|  | [optional] |
| **on_demand_link** | **string**|  | [optional] |
| **recurring_payment_id** | **string**|  | [optional] |

### Return type

[**\Xendit\Invoice\Invoice[]**](Invoice.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to README]](../../README.md)

## `expireInvoice()`

```php
expireInvoice($invoice_id, $for_user_id): \Invoice\Invoice
```

Manually expire an invoice

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

use Xendit\Configuration;
use Xendit\Invoice\InvoiceApi;

Configuration::setXenditKey("YOUR_API_KEY_HERE");

$apiInstance = new InvoiceApi();
$invoice_id = "5f4708b7bd394b0400b96276"; // string | Invoice ID to be expired
$for_user_id = "62efe4c33e45694d63f585f8"; // string | Business ID of the sub-account merchant (XP feature)

try {
    $result = $apiInstance->expireInvoice($invoice_id, $for_user_id);
    print_r($result);
} catch (\Xendit\XenditSdkException $e) {
    echo 'Exception when calling InvoiceApi->expireInvoice: ', $e->getMessage(), PHP_EOL;
    echo 'Full Error: ', json_encode($e->getFullError()), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **invoice_id** | **string**| Invoice ID to be expired | |
| **for_user_id** | **string**| Business ID of the sub-account merchant (XP feature) | [optional] |

### Return type

[**\Xendit\Invoice\Invoice**](Invoice.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to README]](../../README.md)
