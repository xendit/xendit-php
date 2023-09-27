# Xendit\RefundApi

All URIs are relative to https://api.xendit.co, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**cancelRefund()**](RefundApi.md#cancelRefund) | **POST** /refunds/{refundID}/cancel |  |
| [**createRefund()**](RefundApi.md#createRefund) | **POST** /refunds |  |
| [**getAllRefunds()**](RefundApi.md#getAllRefunds) | **GET** /refunds/ |  |
| [**getRefund()**](RefundApi.md#getRefund) | **GET** /refunds/{refundID} |  |


## `cancelRefund()`

```php
cancelRefund($refund_id, $idempotency_key): \Refund\Refund
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

try {
    $result = $apiInstance->cancelRefund($refund_id, $idempotency_key);
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

### Return type

[**\Xendit\Refund\Refund**](Refund.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to README]](../../README.md)

## `createRefund()`

```php
createRefund($idempotency_key, $create_refund): \Refund\Refund
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
$create_refund = new \Xendit\Refund\CreateRefund(); // \Xendit\Refund\CreateRefund

try {
    $result = $apiInstance->createRefund($idempotency_key, $create_refund);
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
| **create_refund** | [**CreateRefund**](CreateRefund.md)|  | [optional] |

### Return type

[**\Xendit\Refund\Refund**](Refund.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to README]](../../README.md)

## `getAllRefunds()`

```php
getAllRefunds(): \Refund\RefundList
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

use Xendit\Configuration;
use Xendit\Refund\RefundApi;

Configuration::setXenditKey("YOUR_API_KEY_HERE");

$apiInstance = new RefundApi();

try {
    $result = $apiInstance->getAllRefunds();
    print_r($result);
} catch (\Xendit\XenditSdkException $e) {
    echo 'Exception when calling RefundApi->getAllRefunds: ', $e->getMessage(), PHP_EOL;
    echo 'Full Error: ', json_encode($e->getFullError()), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\Xendit\Refund\RefundList**](RefundList.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to README]](../../README.md)

## `getRefund()`

```php
getRefund($refund_id, $idempotency_key): \Refund\Refund
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

try {
    $result = $apiInstance->getRefund($refund_id, $idempotency_key);
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

### Return type

[**\Xendit\Refund\Refund**](Refund.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to README]](../../README.md)
