# Xendit\RefundApi

All URIs are relative to https://api.xendit.co, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createRefund()**](RefundApi.md#createRefund) | **POST** /refunds |  |
| [**getRefund()**](RefundApi.md#getRefund) | **GET** /refunds/{refundID} |  |
| [**getAllRefunds()**](RefundApi.md#getAllRefunds) | **GET** /refunds |  |
| [**cancelRefund()**](RefundApi.md#cancelRefund) | **POST** /refunds/{refundID}/cancel |  |


## `createRefund()`

```php
createRefund($idempotency_key, $for_user_id, $create_refund): \Refund\Refund
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

use Xendit\Configuration;
use Xendit\Refund\RefundApi;

Configuration::setXenditKey("YOUR_API_KEY_HERE");

$apiInstance = new RefundApi();
$idempotency_key = "9797b5a6-54ad-4511-80a4-ec451346808b"; // string
$for_user_id = "5f9a3fbd571a1c4068aa40ce"; // string
$create_refund = new \Xendit\Refund\CreateRefund(); // \Xendit\Refund\CreateRefund

try {
    $result = $apiInstance->createRefund($idempotency_key, $for_user_id, $create_refund);
    print_r($result);
} catch (\Xendit\XenditSdkException $e) {
    echo 'Exception when calling RefundApi->createRefund: ', $e->getMessage(), PHP_EOL;
    echo 'Full Error: ', json_encode($e->getFullError()), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **idempotency_key** | **string**|  | [optional] |
| **for_user_id** | **string**|  | [optional] |
| **create_refund** | [**CreateRefund**](CreateRefund.md)|  | [optional] |

### Return type

[**\Xendit\Refund\Refund**](Refund.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to README]](../../README.md)

## `getRefund()`

```php
getRefund($refund_id, $idempotency_key, $for_user_id): \Refund\Refund
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

use Xendit\Configuration;
use Xendit\Refund\RefundApi;

Configuration::setXenditKey("YOUR_API_KEY_HERE");

$apiInstance = new RefundApi();
$refund_id = "rfd-1fdaf346-dd2e-4b6c-b938-124c7167a822"; // string
$idempotency_key = "9797b5a6-54ad-4511-80a4-ec451346808b"; // string
$for_user_id = "5f9a3fbd571a1c4068aa40ce"; // string

try {
    $result = $apiInstance->getRefund($refund_id, $idempotency_key, $for_user_id);
    print_r($result);
} catch (\Xendit\XenditSdkException $e) {
    echo 'Exception when calling RefundApi->getRefund: ', $e->getMessage(), PHP_EOL;
    echo 'Full Error: ', json_encode($e->getFullError()), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **refund_id** | **string**|  | |
| **idempotency_key** | **string**|  | [optional] |
| **for_user_id** | **string**|  | [optional] |

### Return type

[**\Xendit\Refund\Refund**](Refund.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to README]](../../README.md)

## `getAllRefunds()`

```php
getAllRefunds($for_user_id, $payment_request_id, $invoice_id, $payment_method_type, $channel_code, $limit, $after_id, $before_id): \Refund\RefundList
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

use Xendit\Configuration;
use Xendit\Refund\RefundApi;

Configuration::setXenditKey("YOUR_API_KEY_HERE");

$apiInstance = new RefundApi();
$for_user_id = "5f9a3fbd571a1c4068aa40ce"; // string
$payment_request_id = "'payment_request_id_example'"; // string
$invoice_id = "'invoice_id_example'"; // string
$payment_method_type = "'payment_method_type_example'"; // string
$channel_code = "'channel_code_example'"; // string
$limit = 3.4; // float
$after_id = "'after_id_example'"; // string
$before_id = "'before_id_example'"; // string

try {
    $result = $apiInstance->getAllRefunds($for_user_id, $payment_request_id, $invoice_id, $payment_method_type, $channel_code, $limit, $after_id, $before_id);
    print_r($result);
} catch (\Xendit\XenditSdkException $e) {
    echo 'Exception when calling RefundApi->getAllRefunds: ', $e->getMessage(), PHP_EOL;
    echo 'Full Error: ', json_encode($e->getFullError()), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **for_user_id** | **string**|  | [optional] |
| **payment_request_id** | **string**|  | [optional] |
| **invoice_id** | **string**|  | [optional] |
| **payment_method_type** | **string**|  | [optional] |
| **channel_code** | **string**|  | [optional] |
| **limit** | **float**|  | [optional] |
| **after_id** | **string**|  | [optional] |
| **before_id** | **string**|  | [optional] |

### Return type

[**\Xendit\Refund\RefundList**](RefundList.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to README]](../../README.md)

## `cancelRefund()`

```php
cancelRefund($refund_id, $idempotency_key, $for_user_id): \Refund\Refund
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

use Xendit\Configuration;
use Xendit\Refund\RefundApi;

Configuration::setXenditKey("YOUR_API_KEY_HERE");

$apiInstance = new RefundApi();
$refund_id = "rfd-1fdaf346-dd2e-4b6c-b938-124c7167a822"; // string
$idempotency_key = "9797b5a6-54ad-4511-80a4-ec451346808b"; // string
$for_user_id = "5f9a3fbd571a1c4068aa40ce"; // string

try {
    $result = $apiInstance->cancelRefund($refund_id, $idempotency_key, $for_user_id);
    print_r($result);
} catch (\Xendit\XenditSdkException $e) {
    echo 'Exception when calling RefundApi->cancelRefund: ', $e->getMessage(), PHP_EOL;
    echo 'Full Error: ', json_encode($e->getFullError()), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **refund_id** | **string**|  | |
| **idempotency_key** | **string**|  | [optional] |
| **for_user_id** | **string**|  | [optional] |

### Return type

[**\Xendit\Refund\Refund**](Refund.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to README]](../../README.md)
