# RefundApi


You can use the APIs below to interface with Xendit's `RefundApi`.
To start using the API, you need to configure the secret key and initiate the client instance.

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

use Xendit\Configuration;
use Xendit\Refund\RefundApi;

Configuration::setXenditKey("YOUR_API_KEY_HERE");

$apiInstance = new RefundApi();
```

All URIs are relative to https://api.xendit.co, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createRefund()**](RefundApi.md#createrefund-function) | **POST** /refunds |  |
| [**getRefund()**](RefundApi.md#getrefund-function) | **GET** /refunds/{refundID} |  |
| [**getAllRefunds()**](RefundApi.md#getallrefunds-function) | **GET** /refunds |  |
| [**cancelRefund()**](RefundApi.md#cancelrefund-function) | **POST** /refunds/{refundID}/cancel |  |


## `createRefund()` Function

```php
createRefund($idempotency_key, $for_user_id, $create_refund): \Refund\Refund
```



| Name          |    Value 	     |
|--------------------|:-------------:|
| Function Name | `createRefund` |
| Request Parameters  |  [CreateRefundRequestParams](#request-parameters--CreateRefundRequestParams)	 |
| Return Type  |  [**\Xendit\Refund\Refund**](Refund/Refund.md) |

### Request Parameters - CreateRefundRequestParams

|Name | Type | Required |Default |
|-------------|:-------------:|:-------------:|-------------| 
| **idempotency_key** | **string** |  |  |
| **for_user_id** | **string** |  |  |
| **create_refund** | [**CreateRefund**](Refund/CreateRefund.md) |  |  |

### Usage Example
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


## `getRefund()` Function

```php
getRefund($refund_id, $idempotency_key, $for_user_id): \Refund\Refund
```



| Name          |    Value 	     |
|--------------------|:-------------:|
| Function Name | `getRefund` |
| Request Parameters  |  [GetRefundRequestParams](#request-parameters--GetRefundRequestParams)	 |
| Return Type  |  [**\Xendit\Refund\Refund**](Refund/Refund.md) |

### Request Parameters - GetRefundRequestParams

|Name | Type | Required |Default |
|-------------|:-------------:|:-------------:|-------------| 
| **refund_id** | **string** | ☑️ |  |
| **idempotency_key** | **string** |  |  |
| **for_user_id** | **string** |  |  |

### Usage Example
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


## `getAllRefunds()` Function

```php
getAllRefunds($for_user_id, $payment_request_id, $invoice_id, $payment_method_type, $channel_code, $limit, $after_id, $before_id): \Refund\RefundList
```



| Name          |    Value 	     |
|--------------------|:-------------:|
| Function Name | `getAllRefunds` |
| Request Parameters  |  [GetAllRefundsRequestParams](#request-parameters--GetAllRefundsRequestParams)	 |
| Return Type  |  [**\Xendit\Refund\RefundList**](Refund/RefundList.md) |

### Request Parameters - GetAllRefundsRequestParams

|Name | Type | Required |Default |
|-------------|:-------------:|:-------------:|-------------| 
| **for_user_id** | **string** |  |  |
| **payment_request_id** | **string** |  |  |
| **invoice_id** | **string** |  |  |
| **payment_method_type** | **string** |  |  |
| **channel_code** | **string** |  |  |
| **limit** | **float** |  |  |
| **after_id** | **string** |  |  |
| **before_id** | **string** |  |  |

### Usage Example
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


## `cancelRefund()` Function

```php
cancelRefund($refund_id, $idempotency_key, $for_user_id): \Refund\Refund
```



| Name          |    Value 	     |
|--------------------|:-------------:|
| Function Name | `cancelRefund` |
| Request Parameters  |  [CancelRefundRequestParams](#request-parameters--CancelRefundRequestParams)	 |
| Return Type  |  [**\Xendit\Refund\Refund**](Refund/Refund.md) |

### Request Parameters - CancelRefundRequestParams

|Name | Type | Required |Default |
|-------------|:-------------:|:-------------:|-------------| 
| **refund_id** | **string** | ☑️ |  |
| **idempotency_key** | **string** |  |  |
| **for_user_id** | **string** |  |  |

### Usage Example
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


[[Back to README]](../README.md)
