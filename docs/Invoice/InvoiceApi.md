# Xendit\InvoiceApi

All URIs are relative to https://api.xendit.co, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createInvoice()**](InvoiceApi.md#createInvoice) | **POST** /v2/invoices/ | Create an invoice |
| [**expireInvoice()**](InvoiceApi.md#expireInvoice) | **POST** /invoices/{invoice_id}/expire! | Manually expire an invoice |
| [**getInvoiceById()**](InvoiceApi.md#getInvoiceById) | **GET** /v2/invoices/{invoice_id} | Get invoice by invoice id |
| [**getInvoices()**](InvoiceApi.md#getInvoices) | **GET** /v2/invoices | Get all Invoices |


## `createInvoice()`

```php
createInvoice($create_invoice_request): \Invoice\Invoice
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

try {
    $result = $apiInstance->createInvoice($create_invoice_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InvoiceApi->createInvoice: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **create_invoice_request** | [**CreateInvoiceRequest**](CreateInvoiceRequest.md)|  | |

### Return type

[**\Xendit\Invoice\Invoice**](Invoice.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to README]](../../README.md)

## `expireInvoice()`

```php
expireInvoice($invoice_id): \Invoice\Invoice
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

try {
    $result = $apiInstance->expireInvoice($invoice_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InvoiceApi->expireInvoice: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **invoice_id** | **string**| Invoice ID to be expired | |

### Return type

[**\Xendit\Invoice\Invoice**](Invoice.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to README]](../../README.md)

## `getInvoiceById()`

```php
getInvoiceById($invoice_id): \Invoice\Invoice
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

try {
    $result = $apiInstance->getInvoiceById($invoice_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InvoiceApi->getInvoiceById: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **invoice_id** | **string**| Invoice ID | |

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
getInvoices($external_id, $statuses, $limit, $created_after, $created_before, $paid_after, $paid_before, $expired_after, $expired_before, $last_invoice, $client_types, $payment_channels, $on_demand_link, $recurring_payment_id): \Invoice\Invoice[]
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
$external_id = "test-external"; // string
$statuses = ["PENDING","SETTLED"]; // string[]
$limit = 10; // float
$created_after = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime
$created_before = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime
$paid_after = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime
$paid_before = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime
$expired_after = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime
$expired_before = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime
$last_invoice = "62efe4c33e45294d63f585f2"; // string
$client_types = ["API_GATEWAY","DASHBOARD"]; // string[]
$payment_channels = ["BNI","BRI"]; // string[]
$on_demand_link = "test-link"; // string
$recurring_payment_id = "62efe4c33e45294d63f585f2"; // string

try {
    $result = $apiInstance->getInvoices($external_id, $statuses, $limit, $created_after, $created_before, $paid_after, $paid_before, $expired_after, $expired_before, $last_invoice, $client_types, $payment_channels, $on_demand_link, $recurring_payment_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InvoiceApi->getInvoices: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **external_id** | **string**|  | [optional] |
| **statuses** | **string[]**|  | [optional] |
| **limit** | **float**|  | [optional] |
| **created_after** | **\DateTime**|  | [optional] |
| **created_before** | **\DateTime**|  | [optional] |
| **paid_after** | **\DateTime**|  | [optional] |
| **paid_before** | **\DateTime**|  | [optional] |
| **expired_after** | **\DateTime**|  | [optional] |
| **expired_before** | **\DateTime**|  | [optional] |
| **last_invoice** | **string**|  | [optional] |
| **client_types** | **string[]**|  | [optional] |
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
