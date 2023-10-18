# Xendit\PaymentRequestApi

All URIs are relative to https://api.xendit.co, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createPaymentRequest()**](PaymentRequestApi.md#createPaymentRequest) | **POST** /payment_requests | Create Payment Request |
| [**getPaymentRequestByID()**](PaymentRequestApi.md#getPaymentRequestByID) | **GET** /payment_requests/{paymentRequestId} | Get payment request by ID |
| [**getPaymentRequestCaptures()**](PaymentRequestApi.md#getPaymentRequestCaptures) | **GET** /payment_requests/{paymentRequestId}/captures | Get Payment Request Capture |
| [**getAllPaymentRequests()**](PaymentRequestApi.md#getAllPaymentRequests) | **GET** /payment_requests | Get all payment requests by filter |
| [**capturePaymentRequest()**](PaymentRequestApi.md#capturePaymentRequest) | **POST** /payment_requests/{paymentRequestId}/captures | Payment Request Capture |
| [**authorizePaymentRequest()**](PaymentRequestApi.md#authorizePaymentRequest) | **POST** /payment_requests/{paymentRequestId}/auth | Payment Request Authorize |
| [**resendPaymentRequestAuth()**](PaymentRequestApi.md#resendPaymentRequestAuth) | **POST** /payment_requests/{paymentRequestId}/auth/resend | Payment Request Resend Auth |


## `createPaymentRequest()`

```php
createPaymentRequest($idempotency_key, $for_user_id, $payment_request_parameters): \PaymentRequest\PaymentRequest
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
$for_user_id = "5f9a3fbd571a1c4068aa40ce"; // string
$payment_request_parameters = {"reference_id":"example-ref-1234","amount":15000,"currency":"IDR","country":"ID","payment_method":{"type":"EWALLET","ewallet":{"channel_code":"SHOPEEPAY","channel_properties":{"success_return_url":"https://redirect.me/success"}},"reusability":"ONE_TIME_USE"}}; // \Xendit\PaymentRequest\PaymentRequestParameters

try {
    $result = $apiInstance->createPaymentRequest($idempotency_key, $for_user_id, $payment_request_parameters);
    print_r($result);
} catch (\Xendit\XenditSdkException $e) {
    echo 'Exception when calling PaymentRequestApi->createPaymentRequest: ', $e->getMessage(), PHP_EOL;
    echo 'Full Error: ', json_encode($e->getFullError()), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **idempotency_key** | **string**|  | [optional] |
| **for_user_id** | **string**|  | [optional] |
| **payment_request_parameters** | [**PaymentRequestParameters**](PaymentRequestParameters.md)|  | [optional] |

### Return type

[**\Xendit\PaymentRequest\PaymentRequest**](PaymentRequest.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to README]](../../README.md)

## `getPaymentRequestByID()`

```php
getPaymentRequestByID($payment_request_id, $for_user_id): \PaymentRequest\PaymentRequest
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
$for_user_id = "5f9a3fbd571a1c4068aa40ce"; // string

try {
    $result = $apiInstance->getPaymentRequestByID($payment_request_id, $for_user_id);
    print_r($result);
} catch (\Xendit\XenditSdkException $e) {
    echo 'Exception when calling PaymentRequestApi->getPaymentRequestByID: ', $e->getMessage(), PHP_EOL;
    echo 'Full Error: ', json_encode($e->getFullError()), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **payment_request_id** | **string**|  | |
| **for_user_id** | **string**|  | [optional] |

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
getPaymentRequestCaptures($payment_request_id, $for_user_id, $limit): \PaymentRequest\CaptureListResponse
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
$for_user_id = "5f9a3fbd571a1c4068aa40ce"; // string
$limit = 56; // int

try {
    $result = $apiInstance->getPaymentRequestCaptures($payment_request_id, $for_user_id, $limit);
    print_r($result);
} catch (\Xendit\XenditSdkException $e) {
    echo 'Exception when calling PaymentRequestApi->getPaymentRequestCaptures: ', $e->getMessage(), PHP_EOL;
    echo 'Full Error: ', json_encode($e->getFullError()), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **payment_request_id** | **string**|  | |
| **for_user_id** | **string**|  | [optional] |
| **limit** | **int**|  | [optional] |

### Return type

[**\Xendit\PaymentRequest\CaptureListResponse**](CaptureListResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to README]](../../README.md)

## `getAllPaymentRequests()`

```php
getAllPaymentRequests($for_user_id, $reference_id, $id, $customer_id, $limit, $before_id, $after_id): \PaymentRequest\PaymentRequestListResponse
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
$for_user_id = "5f9a3fbd571a1c4068aa40ce"; // string
$reference_id = array('reference_id_example'); // string[]
$id = array('id_example'); // string[]
$customer_id = array('customer_id_example'); // string[]
$limit = 56; // int
$before_id = "'before_id_example'"; // string
$after_id = "'after_id_example'"; // string

try {
    $result = $apiInstance->getAllPaymentRequests($for_user_id, $reference_id, $id, $customer_id, $limit, $before_id, $after_id);
    print_r($result);
} catch (\Xendit\XenditSdkException $e) {
    echo 'Exception when calling PaymentRequestApi->getAllPaymentRequests: ', $e->getMessage(), PHP_EOL;
    echo 'Full Error: ', json_encode($e->getFullError()), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **for_user_id** | **string**|  | [optional] |
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

## `capturePaymentRequest()`

```php
capturePaymentRequest($payment_request_id, $for_user_id, $capture_parameters): \PaymentRequest\Capture
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
$for_user_id = "5f9a3fbd571a1c4068aa40ce"; // string
$capture_parameters = new \Xendit\PaymentRequest\CaptureParameters(); // \Xendit\PaymentRequest\CaptureParameters

try {
    $result = $apiInstance->capturePaymentRequest($payment_request_id, $for_user_id, $capture_parameters);
    print_r($result);
} catch (\Xendit\XenditSdkException $e) {
    echo 'Exception when calling PaymentRequestApi->capturePaymentRequest: ', $e->getMessage(), PHP_EOL;
    echo 'Full Error: ', json_encode($e->getFullError()), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **payment_request_id** | **string**|  | |
| **for_user_id** | **string**|  | [optional] |
| **capture_parameters** | [**CaptureParameters**](CaptureParameters.md)|  | [optional] |

### Return type

[**\Xendit\PaymentRequest\Capture**](Capture.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to README]](../../README.md)

## `authorizePaymentRequest()`

```php
authorizePaymentRequest($payment_request_id, $for_user_id, $payment_request_auth_parameters): \PaymentRequest\PaymentRequest
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
$for_user_id = "5f9a3fbd571a1c4068aa40ce"; // string
$payment_request_auth_parameters = new \Xendit\PaymentRequest\PaymentRequestAuthParameters(); // \Xendit\PaymentRequest\PaymentRequestAuthParameters

try {
    $result = $apiInstance->authorizePaymentRequest($payment_request_id, $for_user_id, $payment_request_auth_parameters);
    print_r($result);
} catch (\Xendit\XenditSdkException $e) {
    echo 'Exception when calling PaymentRequestApi->authorizePaymentRequest: ', $e->getMessage(), PHP_EOL;
    echo 'Full Error: ', json_encode($e->getFullError()), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **payment_request_id** | **string**|  | |
| **for_user_id** | **string**|  | [optional] |
| **payment_request_auth_parameters** | [**PaymentRequestAuthParameters**](PaymentRequestAuthParameters.md)|  | [optional] |

### Return type

[**\Xendit\PaymentRequest\PaymentRequest**](PaymentRequest.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to README]](../../README.md)

## `resendPaymentRequestAuth()`

```php
resendPaymentRequestAuth($payment_request_id, $for_user_id): \PaymentRequest\PaymentRequest
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
$for_user_id = "5f9a3fbd571a1c4068aa40ce"; // string

try {
    $result = $apiInstance->resendPaymentRequestAuth($payment_request_id, $for_user_id);
    print_r($result);
} catch (\Xendit\XenditSdkException $e) {
    echo 'Exception when calling PaymentRequestApi->resendPaymentRequestAuth: ', $e->getMessage(), PHP_EOL;
    echo 'Full Error: ', json_encode($e->getFullError()), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **payment_request_id** | **string**|  | |
| **for_user_id** | **string**|  | [optional] |

### Return type

[**\Xendit\PaymentRequest\PaymentRequest**](PaymentRequest.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to README]](../../README.md)
