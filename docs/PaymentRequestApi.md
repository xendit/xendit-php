# PaymentRequestApi


You can use the APIs below to interface with Xendit's `PaymentRequestApi`.
To start using the API, you need to configure the secret key and initiate the client instance.

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

use Xendit\Configuration;
use Xendit\PaymentRequest\PaymentRequestApi;

Configuration::setXenditKey("YOUR_API_KEY_HERE");

$apiInstance = new PaymentRequestApi();
```

All URIs are relative to https://api.xendit.co, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createPaymentRequest()**](PaymentRequestApi.md#createpaymentrequest-function) | **POST** /payment_requests | Create Payment Request |
| [**getPaymentRequestByID()**](PaymentRequestApi.md#getpaymentrequestbyid-function) | **GET** /payment_requests/{paymentRequestId} | Get payment request by ID |
| [**getPaymentRequestCaptures()**](PaymentRequestApi.md#getpaymentrequestcaptures-function) | **GET** /payment_requests/{paymentRequestId}/captures | Get Payment Request Capture |
| [**getAllPaymentRequests()**](PaymentRequestApi.md#getallpaymentrequests-function) | **GET** /payment_requests | Get all payment requests by filter |
| [**capturePaymentRequest()**](PaymentRequestApi.md#capturepaymentrequest-function) | **POST** /payment_requests/{paymentRequestId}/captures | Payment Request Capture |
| [**authorizePaymentRequest()**](PaymentRequestApi.md#authorizepaymentrequest-function) | **POST** /payment_requests/{paymentRequestId}/auth | Payment Request Authorize |
| [**resendPaymentRequestAuth()**](PaymentRequestApi.md#resendpaymentrequestauth-function) | **POST** /payment_requests/{paymentRequestId}/auth/resend | Payment Request Resend Auth |


## `createPaymentRequest()` Function

```php
createPaymentRequest($idempotency_key, $for_user_id, $payment_request_parameters): \PaymentRequest\PaymentRequest
```

Create Payment Request
    Create Payment Request

| Name          |    Value 	     |
|--------------------|:-------------:|
| Function Name | `createPaymentRequest` |
| Request Parameters  |  [CreatePaymentRequestRequestParams](#request-parameters--CreatePaymentRequestRequestParams)	 |
| Return Type  |  [**\Xendit\PaymentRequest\PaymentRequest**](PaymentRequest/PaymentRequest.md) |

### Request Parameters - CreatePaymentRequestRequestParams

|Name | Type | Required |Default |
|-------------|:-------------:|:-------------:|-------------| 
| **idempotency_key** | **string** |  |  |
| **for_user_id** | **string** |  |  |
| **payment_request_parameters** | [**PaymentRequestParameters**](PaymentRequest/PaymentRequestParameters.md) |  |  |

### Usage Example
#### E-Wallet One Time Payment via Redirect URL

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

use Xendit\Configuration;
use Xendit\PaymentRequest\PaymentRequestApi;

Configuration::setXenditKey("YOUR_API_KEY_HERE");

$apiInstance = new PaymentRequestApi();
$idempotency_key = "5f9a3fbd571a1c4068aa40ce"; // string
$for_user_id = "5f9a3fbd571a1c4068aa40cf"; // string
$payment_request_parameters = new Xendit\PaymentRequest\PaymentRequestParameters([
  'reference_id' => 'example-ref-1234',
  'amount' => 15000,
  'currency' => 'IDR',
  'country' => 'ID',
  'payment_method' => [
    'type' => 'EWALLET',
    'ewallet' => [
      'channel_code' => 'SHOPEEPAY',
      'channel_properties' => [
        'success_return_url' => 'https://redirect.me/success'
      ]
    ],
    'reusability' => 'ONE_TIME_USE'
  ]
]); // \Xendit\PaymentRequest\PaymentRequestParameters

try {
    $result = $apiInstance->createPaymentRequest($idempotency_key, $for_user_id, $payment_request_parameters);
        print_r($result);
} catch (\Xendit\XenditSdkException $e) {
    echo 'Exception when calling PaymentRequestApi->createPaymentRequest: ', $e->getMessage(), PHP_EOL;
    echo 'Full Error: ', json_encode($e->getFullError()), PHP_EOL;
}
```
#### Fixed amount dynamic QR

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

use Xendit\Configuration;
use Xendit\PaymentRequest\PaymentRequestApi;

Configuration::setXenditKey("YOUR_API_KEY_HERE");

$apiInstance = new PaymentRequestApi();
$idempotency_key = "5f9a3fbd571a1c4068aa40ce"; // string
$for_user_id = "5f9a3fbd571a1c4068aa40cf"; // string
$payment_request_parameters = new Xendit\PaymentRequest\PaymentRequestParameters([
  'reference_id' => 'example-ref-1234',
  'amount' => 15000,
  'currency' => 'IDR',
  'payment_method' => [
    'type' => 'QR_CODE',
    'reusability' => 'ONE_TIME_USE',
    'qr_code' => [
      'channel_code' => '“QRIS”'
    ]
  ],
  'metadata' => [
    'sku' => 'example-sku-1234'
  ]
]); // \Xendit\PaymentRequest\PaymentRequestParameters

try {
    $result = $apiInstance->createPaymentRequest($idempotency_key, $for_user_id, $payment_request_parameters);
        print_r($result);
} catch (\Xendit\XenditSdkException $e) {
    echo 'Exception when calling PaymentRequestApi->createPaymentRequest: ', $e->getMessage(), PHP_EOL;
    echo 'Full Error: ', json_encode($e->getFullError()), PHP_EOL;
}
```
#### Fixed amount single use Virtual Account

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

use Xendit\Configuration;
use Xendit\PaymentRequest\PaymentRequestApi;

Configuration::setXenditKey("YOUR_API_KEY_HERE");

$apiInstance = new PaymentRequestApi();
$idempotency_key = "5f9a3fbd571a1c4068aa40ce"; // string
$for_user_id = "5f9a3fbd571a1c4068aa40cf"; // string
$payment_request_parameters = new Xendit\PaymentRequest\PaymentRequestParameters([
  'reference_id' => 'example-ref-1234',
  'currency' => 'IDR',
  'amount' => 15000,
  'country' => 'ID',
  'payment_method' => [
    'type' => 'VIRTUAL_ACCOUNT',
    'reusability' => 'ONE_TIME_USE',
    'reference_id' => 'example-1234',
    'virtual_account' => [
      'channel_code' => 'BNI',
      'channel_properties' => [
        'customer_name' => 'Ahmad Gunawan',
        'expires_at' => '2023-01-03T17=>00=>00Z'
      ]
    ]
  ],
  'metadata' => [
    'sku' => 'example-sku-1234'
  ]
]); // \Xendit\PaymentRequest\PaymentRequestParameters

try {
    $result = $apiInstance->createPaymentRequest($idempotency_key, $for_user_id, $payment_request_parameters);
        print_r($result);
} catch (\Xendit\XenditSdkException $e) {
    echo 'Exception when calling PaymentRequestApi->createPaymentRequest: ', $e->getMessage(), PHP_EOL;
    echo 'Full Error: ', json_encode($e->getFullError()), PHP_EOL;
}
```
#### Subsequent PH Direct Debit payments after account linking

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

use Xendit\Configuration;
use Xendit\PaymentRequest\PaymentRequestApi;

Configuration::setXenditKey("YOUR_API_KEY_HERE");

$apiInstance = new PaymentRequestApi();
$idempotency_key = "5f9a3fbd571a1c4068aa40ce"; // string
$for_user_id = "5f9a3fbd571a1c4068aa40cf"; // string
$payment_request_parameters = new Xendit\PaymentRequest\PaymentRequestParameters([
  'reference_id' => 'example-ref-1234',
  'amount' => 1500,
  'currency' => 'PHP',
  'payment_method_id' => 'pm-9685a196-81e9-4c73-8d62-97df5aab2762',
  'metadata' => [
    'sku' => 'example-sku-1234'
  ]
]); // \Xendit\PaymentRequest\PaymentRequestParameters

try {
    $result = $apiInstance->createPaymentRequest($idempotency_key, $for_user_id, $payment_request_parameters);
        print_r($result);
} catch (\Xendit\XenditSdkException $e) {
    echo 'Exception when calling PaymentRequestApi->createPaymentRequest: ', $e->getMessage(), PHP_EOL;
    echo 'Full Error: ', json_encode($e->getFullError()), PHP_EOL;
}
```
#### Subsequent tokenized E-Wallet payments after account linking

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

use Xendit\Configuration;
use Xendit\PaymentRequest\PaymentRequestApi;

Configuration::setXenditKey("YOUR_API_KEY_HERE");

$apiInstance = new PaymentRequestApi();
$idempotency_key = "5f9a3fbd571a1c4068aa40ce"; // string
$for_user_id = "5f9a3fbd571a1c4068aa40cf"; // string
$payment_request_parameters = new Xendit\PaymentRequest\PaymentRequestParameters([
  'reference_id' => 'example-ref-1234',
  'amount' => 15000,
  'currency' => 'IDR',
  'payment_method_id' => 'pm-2b2c6092-2100-4843-a7fc-f5c7edac7efd',
  'metadata' => [
    'sku' => 'example-sku-1234'
  ]
]); // \Xendit\PaymentRequest\PaymentRequestParameters

try {
    $result = $apiInstance->createPaymentRequest($idempotency_key, $for_user_id, $payment_request_parameters);
        print_r($result);
} catch (\Xendit\XenditSdkException $e) {
    echo 'Exception when calling PaymentRequestApi->createPaymentRequest: ', $e->getMessage(), PHP_EOL;
    echo 'Full Error: ', json_encode($e->getFullError()), PHP_EOL;
}
```


## `getPaymentRequestByID()` Function

```php
getPaymentRequestByID($payment_request_id, $for_user_id): \PaymentRequest\PaymentRequest
```

Get payment request by ID
    Get payment request by ID

| Name          |    Value 	     |
|--------------------|:-------------:|
| Function Name | `getPaymentRequestByID` |
| Request Parameters  |  [GetPaymentRequestByIDRequestParams](#request-parameters--GetPaymentRequestByIDRequestParams)	 |
| Return Type  |  [**\Xendit\PaymentRequest\PaymentRequest**](PaymentRequest/PaymentRequest.md) |

### Request Parameters - GetPaymentRequestByIDRequestParams

|Name | Type | Required |Default |
|-------------|:-------------:|:-------------:|-------------| 
| **payment_request_id** | **string** | ☑️ |  |
| **for_user_id** | **string** |  |  |

### Usage Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

use Xendit\Configuration;
use Xendit\PaymentRequest\PaymentRequestApi;

Configuration::setXenditKey("YOUR_API_KEY_HERE");

$apiInstance = new PaymentRequestApi();
$payment_request_id = "pr-1fdaf346-dd2e-4b6c-b938-124c7167a822"; // string
$for_user_id = "5f9a3fbd571a1c4068aa40cf"; // string

try {
    $result = $apiInstance->getPaymentRequestByID($payment_request_id, $for_user_id);
    print_r($result);
} catch (\Xendit\XenditSdkException $e) {
    echo 'Exception when calling PaymentRequestApi->getPaymentRequestByID: ', $e->getMessage(), PHP_EOL;
    echo 'Full Error: ', json_encode($e->getFullError()), PHP_EOL;
}
```


## `getPaymentRequestCaptures()` Function

```php
getPaymentRequestCaptures($payment_request_id, $for_user_id, $limit): \PaymentRequest\CaptureListResponse
```

Get Payment Request Capture
    Get Payment Request Capture

| Name          |    Value 	     |
|--------------------|:-------------:|
| Function Name | `getPaymentRequestCaptures` |
| Request Parameters  |  [GetPaymentRequestCapturesRequestParams](#request-parameters--GetPaymentRequestCapturesRequestParams)	 |
| Return Type  |  [**\Xendit\PaymentRequest\CaptureListResponse**](PaymentRequest/CaptureListResponse.md) |

### Request Parameters - GetPaymentRequestCapturesRequestParams

|Name | Type | Required |Default |
|-------------|:-------------:|:-------------:|-------------| 
| **payment_request_id** | **string** | ☑️ |  |
| **for_user_id** | **string** |  |  |
| **limit** | **int** |  |  |

### Usage Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

use Xendit\Configuration;
use Xendit\PaymentRequest\PaymentRequestApi;

Configuration::setXenditKey("YOUR_API_KEY_HERE");

$apiInstance = new PaymentRequestApi();
$payment_request_id = "pr-1fdaf346-dd2e-4b6c-b938-124c7167a822"; // string
$for_user_id = "5f9a3fbd571a1c4068aa40cf"; // string
$limit = 56; // int

try {
    $result = $apiInstance->getPaymentRequestCaptures($payment_request_id, $for_user_id, $limit);
    print_r($result);
} catch (\Xendit\XenditSdkException $e) {
    echo 'Exception when calling PaymentRequestApi->getPaymentRequestCaptures: ', $e->getMessage(), PHP_EOL;
    echo 'Full Error: ', json_encode($e->getFullError()), PHP_EOL;
}
```


## `getAllPaymentRequests()` Function

```php
getAllPaymentRequests($for_user_id, $reference_id, $id, $customer_id, $limit, $before_id, $after_id): \PaymentRequest\PaymentRequestListResponse
```

Get all payment requests by filter
    Get all payment requests by filter

| Name          |    Value 	     |
|--------------------|:-------------:|
| Function Name | `getAllPaymentRequests` |
| Request Parameters  |  [GetAllPaymentRequestsRequestParams](#request-parameters--GetAllPaymentRequestsRequestParams)	 |
| Return Type  |  [**\Xendit\PaymentRequest\PaymentRequestListResponse**](PaymentRequest/PaymentRequestListResponse.md) |

### Request Parameters - GetAllPaymentRequestsRequestParams

|Name | Type | Required |Default |
|-------------|:-------------:|:-------------:|-------------| 
| **for_user_id** | **string** |  |  |
| **reference_id** | **string[]** |  |  |
| **id** | **string[]** |  |  |
| **customer_id** | **string[]** |  |  |
| **limit** | **int** |  |  |
| **before_id** | **string** |  |  |
| **after_id** | **string** |  |  |

### Usage Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

use Xendit\Configuration;
use Xendit\PaymentRequest\PaymentRequestApi;

Configuration::setXenditKey("YOUR_API_KEY_HERE");

$apiInstance = new PaymentRequestApi();
$for_user_id = "5f9a3fbd571a1c4068aa40cf"; // string
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


## `capturePaymentRequest()` Function

```php
capturePaymentRequest($payment_request_id, $for_user_id, $capture_parameters): \PaymentRequest\Capture
```

Payment Request Capture
    Payment Request Capture

| Name          |    Value 	     |
|--------------------|:-------------:|
| Function Name | `capturePaymentRequest` |
| Request Parameters  |  [CapturePaymentRequestRequestParams](#request-parameters--CapturePaymentRequestRequestParams)	 |
| Return Type  |  [**\Xendit\PaymentRequest\Capture**](PaymentRequest/Capture.md) |

### Request Parameters - CapturePaymentRequestRequestParams

|Name | Type | Required |Default |
|-------------|:-------------:|:-------------:|-------------| 
| **payment_request_id** | **string** | ☑️ |  |
| **for_user_id** | **string** |  |  |
| **capture_parameters** | [**CaptureParameters**](PaymentRequest/CaptureParameters.md) |  |  |

### Usage Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

use Xendit\Configuration;
use Xendit\PaymentRequest\PaymentRequestApi;

Configuration::setXenditKey("YOUR_API_KEY_HERE");

$apiInstance = new PaymentRequestApi();
$payment_request_id = "pr-1fdaf346-dd2e-4b6c-b938-124c7167a822"; // string
$for_user_id = "5f9a3fbd571a1c4068aa40cf"; // string
$capture_parameters = new \Xendit\PaymentRequest\CaptureParameters(); // \Xendit\PaymentRequest\CaptureParameters

try {
    $result = $apiInstance->capturePaymentRequest($payment_request_id, $for_user_id, $capture_parameters);
    print_r($result);
} catch (\Xendit\XenditSdkException $e) {
    echo 'Exception when calling PaymentRequestApi->capturePaymentRequest: ', $e->getMessage(), PHP_EOL;
    echo 'Full Error: ', json_encode($e->getFullError()), PHP_EOL;
}
```


## `authorizePaymentRequest()` Function

```php
authorizePaymentRequest($payment_request_id, $for_user_id, $payment_request_auth_parameters): \PaymentRequest\PaymentRequest
```

Payment Request Authorize
    Payment Request Authorize

| Name          |    Value 	     |
|--------------------|:-------------:|
| Function Name | `authorizePaymentRequest` |
| Request Parameters  |  [AuthorizePaymentRequestRequestParams](#request-parameters--AuthorizePaymentRequestRequestParams)	 |
| Return Type  |  [**\Xendit\PaymentRequest\PaymentRequest**](PaymentRequest/PaymentRequest.md) |

### Request Parameters - AuthorizePaymentRequestRequestParams

|Name | Type | Required |Default |
|-------------|:-------------:|:-------------:|-------------| 
| **payment_request_id** | **string** | ☑️ |  |
| **for_user_id** | **string** |  |  |
| **payment_request_auth_parameters** | [**PaymentRequestAuthParameters**](PaymentRequest/PaymentRequestAuthParameters.md) |  |  |

### Usage Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

use Xendit\Configuration;
use Xendit\PaymentRequest\PaymentRequestApi;

Configuration::setXenditKey("YOUR_API_KEY_HERE");

$apiInstance = new PaymentRequestApi();
$payment_request_id = "pr-1fdaf346-dd2e-4b6c-b938-124c7167a822"; // string
$for_user_id = "5f9a3fbd571a1c4068aa40cf"; // string
$payment_request_auth_parameters = new \Xendit\PaymentRequest\PaymentRequestAuthParameters(); // \Xendit\PaymentRequest\PaymentRequestAuthParameters

try {
    $result = $apiInstance->authorizePaymentRequest($payment_request_id, $for_user_id, $payment_request_auth_parameters);
    print_r($result);
} catch (\Xendit\XenditSdkException $e) {
    echo 'Exception when calling PaymentRequestApi->authorizePaymentRequest: ', $e->getMessage(), PHP_EOL;
    echo 'Full Error: ', json_encode($e->getFullError()), PHP_EOL;
}
```


## `resendPaymentRequestAuth()` Function

```php
resendPaymentRequestAuth($payment_request_id, $for_user_id): \PaymentRequest\PaymentRequest
```

Payment Request Resend Auth
    Payment Request Resend Auth

| Name          |    Value 	     |
|--------------------|:-------------:|
| Function Name | `resendPaymentRequestAuth` |
| Request Parameters  |  [ResendPaymentRequestAuthRequestParams](#request-parameters--ResendPaymentRequestAuthRequestParams)	 |
| Return Type  |  [**\Xendit\PaymentRequest\PaymentRequest**](PaymentRequest/PaymentRequest.md) |

### Request Parameters - ResendPaymentRequestAuthRequestParams

|Name | Type | Required |Default |
|-------------|:-------------:|:-------------:|-------------| 
| **payment_request_id** | **string** | ☑️ |  |
| **for_user_id** | **string** |  |  |

### Usage Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

use Xendit\Configuration;
use Xendit\PaymentRequest\PaymentRequestApi;

Configuration::setXenditKey("YOUR_API_KEY_HERE");

$apiInstance = new PaymentRequestApi();
$payment_request_id = "pr-1fdaf346-dd2e-4b6c-b938-124c7167a822"; // string
$for_user_id = "5f9a3fbd571a1c4068aa40cf"; // string

try {
    $result = $apiInstance->resendPaymentRequestAuth($payment_request_id, $for_user_id);
    print_r($result);
} catch (\Xendit\XenditSdkException $e) {
    echo 'Exception when calling PaymentRequestApi->resendPaymentRequestAuth: ', $e->getMessage(), PHP_EOL;
    echo 'Full Error: ', json_encode($e->getFullError()), PHP_EOL;
}
```


[[Back to README]](../README.md)
