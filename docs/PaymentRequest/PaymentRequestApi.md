# Xendit\PaymentRequestApi

All URIs are relative to https://api.xendit.co, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**authorizePaymentRequest()**](PaymentRequestApi.md#authorizePaymentRequest) | **POST** /payment_requests/{paymentRequestId}/auth | Payment Request Authorize |
| [**capturePaymentRequest()**](PaymentRequestApi.md#capturePaymentRequest) | **POST** /payment_requests/{paymentRequestId}/captures | Payment Request Capture |
| [**createPaymentRequest()**](PaymentRequestApi.md#createPaymentRequest) | **POST** /payment_requests | Create Payment Request |
| [**getAllPaymentRequests()**](PaymentRequestApi.md#getAllPaymentRequests) | **GET** /payment_requests | Get all payment requests by filter |
| [**getPaymentRequestByID()**](PaymentRequestApi.md#getPaymentRequestByID) | **GET** /payment_requests/{paymentRequestId} | Get payment request by ID |
| [**getPaymentRequestCaptures()**](PaymentRequestApi.md#getPaymentRequestCaptures) | **GET** /payment_requests/{paymentRequestId}/captures | Get Payment Request Capture |
| [**resendPaymentRequestAuth()**](PaymentRequestApi.md#resendPaymentRequestAuth) | **POST** /payment_requests/{paymentRequestId}/auth/resend | Payment Request Resend Auth |


## `authorizePaymentRequest()`

```php
authorizePaymentRequest($payment_request_id, $payment_request_auth_parameters): \PaymentRequest\PaymentRequest
```

Payment Request Authorize

Payment Request Authorize

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

use Xendit\Configuration;
use Xendit\PaymentRequest\PaymentRequestApi;

Configuration::setXenditKey("YOUR_API_KEY_HERE");

$apiInstance = new PaymentRequestApi();
$payment_request_id = "pr-1fdaf346-dd2e-4b6c-b938-124c7167a822"; // string
$payment_request_auth_parameters = new \Xendit\PaymentRequest\PaymentRequestAuthParameters(); // \Xendit\PaymentRequest\PaymentRequestAuthParameters

try {
    $result = $apiInstance->authorizePaymentRequest($payment_request_id, $payment_request_auth_parameters);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PaymentRequestApi->authorizePaymentRequest: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **payment_request_id** | **string**|  | |
| **payment_request_auth_parameters** | [**PaymentRequestAuthParameters**](PaymentRequestAuthParameters.md)|  | [optional] |

### Return type

[**\Xendit\PaymentRequest\PaymentRequest**](PaymentRequest.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to README]](../../README.md)

## `capturePaymentRequest()`

```php
capturePaymentRequest($payment_request_id, $capture_parameters): \PaymentRequest\Capture
```

Payment Request Capture

Payment Request Capture

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

use Xendit\Configuration;
use Xendit\PaymentRequest\PaymentRequestApi;

Configuration::setXenditKey("YOUR_API_KEY_HERE");

$apiInstance = new PaymentRequestApi();
$payment_request_id = "pr-1fdaf346-dd2e-4b6c-b938-124c7167a822"; // string
$capture_parameters = new \Xendit\PaymentRequest\CaptureParameters(); // \Xendit\PaymentRequest\CaptureParameters

try {
    $result = $apiInstance->capturePaymentRequest($payment_request_id, $capture_parameters);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PaymentRequestApi->capturePaymentRequest: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **payment_request_id** | **string**|  | |
| **capture_parameters** | [**CaptureParameters**](CaptureParameters.md)|  | [optional] |

### Return type

[**\Xendit\PaymentRequest\Capture**](Capture.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to README]](../../README.md)

## `createPaymentRequest()`

```php
createPaymentRequest($idempotency_key, $payment_request_parameters): \PaymentRequest\PaymentRequest
```

Create Payment Request

Create Payment Request

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

use Xendit\Configuration;
use Xendit\PaymentRequest\PaymentRequestApi;

Configuration::setXenditKey("YOUR_API_KEY_HERE");

$apiInstance = new PaymentRequestApi();
$idempotency_key = "5f9a3fbd571a1c4068aa40ce"; // string
$payment_request_parameters = new \Xendit\PaymentRequest\PaymentRequestParameters(); // \Xendit\PaymentRequest\PaymentRequestParameters

try {
    $result = $apiInstance->createPaymentRequest($idempotency_key, $payment_request_parameters);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PaymentRequestApi->createPaymentRequest: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **idempotency_key** | **string**|  | [optional] |
| **payment_request_parameters** | [**PaymentRequestParameters**](PaymentRequestParameters.md)|  | [optional] |

### Return type

[**\Xendit\PaymentRequest\PaymentRequest**](PaymentRequest.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to README]](../../README.md)

## `getAllPaymentRequests()`

```php
getAllPaymentRequests($reference_id, $id, $customer_id, $limit, $before_id, $after_id): \PaymentRequest\PaymentRequestListResponse
```

Get all payment requests by filter

Get all payment requests by filter

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

use Xendit\Configuration;
use Xendit\PaymentRequest\PaymentRequestApi;

Configuration::setXenditKey("YOUR_API_KEY_HERE");

$apiInstance = new PaymentRequestApi();
$reference_id = array('reference_id_example'); // string[]
$id = array('id_example'); // string[]
$customer_id = array('customer_id_example'); // string[]
$limit = 56; // int
$before_id = "'before_id_example'"; // string
$after_id = "'after_id_example'"; // string

try {
    $result = $apiInstance->getAllPaymentRequests($reference_id, $id, $customer_id, $limit, $before_id, $after_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PaymentRequestApi->getAllPaymentRequests: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **reference_id** | **string[]**|  | [optional] |
| **id** | **string[]**|  | [optional] |
| **customer_id** | **string[]**|  | [optional] |
| **limit** | **int**|  | [optional] |
| **before_id** | **string**|  | [optional] |
| **after_id** | **string**|  | [optional] |

### Return type

[**\Xendit\PaymentRequest\PaymentRequestListResponse**](PaymentRequestListResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to README]](../../README.md)

## `getPaymentRequestByID()`

```php
getPaymentRequestByID($payment_request_id): \PaymentRequest\PaymentRequest
```

Get payment request by ID

Get payment request by ID

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

use Xendit\Configuration;
use Xendit\PaymentRequest\PaymentRequestApi;

Configuration::setXenditKey("YOUR_API_KEY_HERE");

$apiInstance = new PaymentRequestApi();
$payment_request_id = "pr-1fdaf346-dd2e-4b6c-b938-124c7167a822"; // string

try {
    $result = $apiInstance->getPaymentRequestByID($payment_request_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PaymentRequestApi->getPaymentRequestByID: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **payment_request_id** | **string**|  | |

### Return type

[**\Xendit\PaymentRequest\PaymentRequest**](PaymentRequest.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to README]](../../README.md)

## `getPaymentRequestCaptures()`

```php
getPaymentRequestCaptures($payment_request_id, $limit, $after_id, $before_id): \PaymentRequest\CaptureListResponse
```

Get Payment Request Capture

Get Payment Request Capture

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

use Xendit\Configuration;
use Xendit\PaymentRequest\PaymentRequestApi;

Configuration::setXenditKey("YOUR_API_KEY_HERE");

$apiInstance = new PaymentRequestApi();
$payment_request_id = "pr-1fdaf346-dd2e-4b6c-b938-124c7167a822"; // string
$limit = 56; // int
$after_id = "'after_id_example'"; // string
$before_id = "'before_id_example'"; // string

try {
    $result = $apiInstance->getPaymentRequestCaptures($payment_request_id, $limit, $after_id, $before_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PaymentRequestApi->getPaymentRequestCaptures: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **payment_request_id** | **string**|  | |
| **limit** | **int**|  | [optional] |
| **after_id** | **string**|  | [optional] |
| **before_id** | **string**|  | [optional] |

### Return type

[**\Xendit\PaymentRequest\CaptureListResponse**](CaptureListResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to README]](../../README.md)

## `resendPaymentRequestAuth()`

```php
resendPaymentRequestAuth($payment_request_id): \PaymentRequest\PaymentRequest
```

Payment Request Resend Auth

Payment Request Resend Auth

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

use Xendit\Configuration;
use Xendit\PaymentRequest\PaymentRequestApi;

Configuration::setXenditKey("YOUR_API_KEY_HERE");

$apiInstance = new PaymentRequestApi();
$payment_request_id = "pr-1fdaf346-dd2e-4b6c-b938-124c7167a822"; // string

try {
    $result = $apiInstance->resendPaymentRequestAuth($payment_request_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PaymentRequestApi->resendPaymentRequestAuth: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **payment_request_id** | **string**|  | |

### Return type

[**\Xendit\PaymentRequest\PaymentRequest**](PaymentRequest.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to README]](../../README.md)
