# Xendit\PaymentMethodApi

All URIs are relative to https://api.xendit.co, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createPaymentMethod()**](PaymentMethodApi.md#createPaymentMethod) | **POST** /v2/payment_methods | Creates payment method |
| [**getPaymentMethodByID()**](PaymentMethodApi.md#getPaymentMethodByID) | **GET** /v2/payment_methods/{paymentMethodId} | Get payment method by ID |
| [**getPaymentsByPaymentMethodId()**](PaymentMethodApi.md#getPaymentsByPaymentMethodId) | **GET** /v2/payment_methods/{paymentMethodId}/payments | Returns payments with matching PaymentMethodID. |
| [**patchPaymentMethod()**](PaymentMethodApi.md#patchPaymentMethod) | **PATCH** /v2/payment_methods/{paymentMethodId} | Patch payment methods |
| [**getAllPaymentMethods()**](PaymentMethodApi.md#getAllPaymentMethods) | **GET** /v2/payment_methods | Get all payment methods by filters |
| [**expirePaymentMethod()**](PaymentMethodApi.md#expirePaymentMethod) | **POST** /v2/payment_methods/{paymentMethodId}/expire | Expires a payment method |
| [**authPaymentMethod()**](PaymentMethodApi.md#authPaymentMethod) | **POST** /v2/payment_methods/{paymentMethodId}/auth | Validate a payment method&#39;s linking OTP |
| [**simulatePayment()**](PaymentMethodApi.md#simulatePayment) | **POST** /v2/payment_methods/{paymentMethodId}/payments/simulate | Makes payment with matching PaymentMethodID. |


## `createPaymentMethod()`

```php
createPaymentMethod($for_user_id, $payment_method_parameters): \PaymentMethod\PaymentMethod
```

Creates payment method

This endpoint initiates creation of payment method

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

use Xendit\Configuration;
use Xendit\PaymentMethod\PaymentMethodApi;

Configuration::setXenditKey("YOUR_API_KEY_HERE");

$apiInstance = new PaymentMethodApi();
$for_user_id = "5f9a3fbd571a1c4068aa40ce"; // string
$payment_method_parameters = {"type":"EWALLET","reusability":"MULTIPLE_USE","customer":{"reference_id":"customer-123","type":"INDIVIDUAL","individual_detail":{"given_names":"John","surname":"Doe"}},"ewallet":{"channel_code":"OVO","channel_properties":{"success_return_url":"https://redirect.me/success","failure_return_url":"https://redirect.me/failure","cancel_return_url":"https://redirect.me/cancel"}},"metadata":{"sku":"example-1234"}}; // \Xendit\PaymentMethod\PaymentMethodParameters

try {
    $result = $apiInstance->createPaymentMethod($for_user_id, $payment_method_parameters);
    print_r($result);
} catch (\Xendit\XenditSdkException $e) {
    echo 'Exception when calling PaymentMethodApi->createPaymentMethod: ', $e->getMessage(), PHP_EOL;
    echo 'Full Error: ', json_encode($e->getFullError()), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **for_user_id** | **string**|  | [optional] |
| **payment_method_parameters** | [**PaymentMethodParameters**](PaymentMethodParameters.md)|  | [optional] |

### Return type

[**\Xendit\PaymentMethod\PaymentMethod**](PaymentMethod.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to README]](../../README.md)

## `getPaymentMethodByID()`

```php
getPaymentMethodByID($payment_method_id, $for_user_id): \PaymentMethod\PaymentMethod
```

Get payment method by ID

Get payment method by ID

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

use Xendit\Configuration;
use Xendit\PaymentMethod\PaymentMethodApi;

Configuration::setXenditKey("YOUR_API_KEY_HERE");

$apiInstance = new PaymentMethodApi();
$payment_method_id = "pm-1fdaf346-dd2e-4b6c-b938-124c7167a822"; // string
$for_user_id = "5f9a3fbd571a1c4068aa40ce"; // string

try {
    $result = $apiInstance->getPaymentMethodByID($payment_method_id, $for_user_id);
    print_r($result);
} catch (\Xendit\XenditSdkException $e) {
    echo 'Exception when calling PaymentMethodApi->getPaymentMethodByID: ', $e->getMessage(), PHP_EOL;
    echo 'Full Error: ', json_encode($e->getFullError()), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **payment_method_id** | **string**|  | |
| **for_user_id** | **string**|  | [optional] |

### Return type

[**\Xendit\PaymentMethod\PaymentMethod**](PaymentMethod.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to README]](../../README.md)

## `getPaymentsByPaymentMethodId()`

```php
getPaymentsByPaymentMethodId($payment_method_id, $for_user_id, $payment_request_id, $payment_method_id2, $reference_id, $payment_method_type, $channel_code, $status, $currency, $created_gte, $created_lte, $updated_gte, $updated_lte, $limit): object
```

Returns payments with matching PaymentMethodID.

Returns payments with matching PaymentMethodID.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

use Xendit\Configuration;
use Xendit\PaymentMethod\PaymentMethodApi;

Configuration::setXenditKey("YOUR_API_KEY_HERE");

$apiInstance = new PaymentMethodApi();
$payment_method_id = "pm-1fdaf346-dd2e-4b6c-b938-124c7167a822"; // string
$for_user_id = "5f9a3fbd571a1c4068aa40ce"; // string
$payment_request_id = array('payment_request_id_example'); // string[]
$payment_method_id2 = array('payment_method_id_example'); // string[]
$reference_id = array('reference_id_example'); // string[]
$payment_method_type = array(new \Xendit\PaymentMethod\PaymentMethodType()); // \PaymentMethod\PaymentMethodType[]
$channel_code = array('channel_code_example'); // string[]
$status = array('status_example'); // string[]
$currency = array('currency_example'); // string[]
$created_gte = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime
$created_lte = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime
$updated_gte = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime
$updated_lte = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime
$limit = 56; // int

try {
    $result = $apiInstance->getPaymentsByPaymentMethodId($payment_method_id, $for_user_id, $payment_request_id, $payment_method_id2, $reference_id, $payment_method_type, $channel_code, $status, $currency, $created_gte, $created_lte, $updated_gte, $updated_lte, $limit);
    print_r($result);
} catch (\Xendit\XenditSdkException $e) {
    echo 'Exception when calling PaymentMethodApi->getPaymentsByPaymentMethodId: ', $e->getMessage(), PHP_EOL;
    echo 'Full Error: ', json_encode($e->getFullError()), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **payment_method_id** | **string**|  | |
| **for_user_id** | **string**|  | [optional] |
| **payment_request_id** | **string[]**|  | [optional] |
| **payment_method_id2** | **string[]**|  | [optional] |
| **reference_id** | **string[]**|  | [optional] |
| **payment_method_type** | [**PaymentMethodType**](PaymentMethodType.md)|  | [optional] |
| **channel_code** | **string[]**|  | [optional] |
| **status** | **string[]**|  | [optional] |
| **currency** | **string[]**|  | [optional] |
| **created_gte** | **\DateTime**|  | [optional] |
| **created_lte** | **\DateTime**|  | [optional] |
| **updated_gte** | **\DateTime**|  | [optional] |
| **updated_lte** | **\DateTime**|  | [optional] |
| **limit** | **int**|  | [optional] |

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to README]](../../README.md)

## `patchPaymentMethod()`

```php
patchPaymentMethod($payment_method_id, $for_user_id, $payment_method_update_parameters): \PaymentMethod\PaymentMethod
```

Patch payment methods

This endpoint is used to toggle the ```status``` of an e-Wallet or a Direct Debit payment method to ```ACTIVE``` or ```INACTIVE```. This is also used to update the details of an Over-the-Counter or a Virtual Account payment method.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

use Xendit\Configuration;
use Xendit\PaymentMethod\PaymentMethodApi;

Configuration::setXenditKey("YOUR_API_KEY_HERE");

$apiInstance = new PaymentMethodApi();
$payment_method_id = "pm-1fdaf346-dd2e-4b6c-b938-124c7167a822"; // string
$for_user_id = "5f9a3fbd571a1c4068aa40ce"; // string
$payment_method_update_parameters = new \Xendit\PaymentMethod\PaymentMethodUpdateParameters(); // \Xendit\PaymentMethod\PaymentMethodUpdateParameters

try {
    $result = $apiInstance->patchPaymentMethod($payment_method_id, $for_user_id, $payment_method_update_parameters);
    print_r($result);
} catch (\Xendit\XenditSdkException $e) {
    echo 'Exception when calling PaymentMethodApi->patchPaymentMethod: ', $e->getMessage(), PHP_EOL;
    echo 'Full Error: ', json_encode($e->getFullError()), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **payment_method_id** | **string**|  | |
| **for_user_id** | **string**|  | [optional] |
| **payment_method_update_parameters** | [**PaymentMethodUpdateParameters**](PaymentMethodUpdateParameters.md)|  | [optional] |

### Return type

[**\Xendit\PaymentMethod\PaymentMethod**](PaymentMethod.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to README]](../../README.md)

## `getAllPaymentMethods()`

```php
getAllPaymentMethods($for_user_id, $id, $type, $status, $reusability, $customer_id, $reference_id, $after_id, $before_id, $limit): \PaymentMethod\PaymentMethodList
```

Get all payment methods by filters

Get all payment methods by filters

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

use Xendit\Configuration;
use Xendit\PaymentMethod\PaymentMethodApi;

Configuration::setXenditKey("YOUR_API_KEY_HERE");

$apiInstance = new PaymentMethodApi();
$for_user_id = "5f9a3fbd571a1c4068aa40ce"; // string
$id = array('id_example'); // string[]
$type = array('type_example'); // string[]
$status = array(new \Xendit\PaymentMethod\PaymentMethodStatus()); // \PaymentMethod\PaymentMethodStatus[]
$reusability = new \Xendit\PaymentMethod\PaymentMethodReusability(); // PaymentMethodReusability
$customer_id = "'customer_id_example'"; // string
$reference_id = "'reference_id_example'"; // string
$after_id = "'after_id_example'"; // string
$before_id = "'before_id_example'"; // string
$limit = 56; // int

try {
    $result = $apiInstance->getAllPaymentMethods($for_user_id, $id, $type, $status, $reusability, $customer_id, $reference_id, $after_id, $before_id, $limit);
    print_r($result);
} catch (\Xendit\XenditSdkException $e) {
    echo 'Exception when calling PaymentMethodApi->getAllPaymentMethods: ', $e->getMessage(), PHP_EOL;
    echo 'Full Error: ', json_encode($e->getFullError()), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **for_user_id** | **string**|  | [optional] |
| **id** | **string[]**|  | [optional] |
| **type** | **string[]**|  | [optional] |
| **status** | [**PaymentMethodStatus**](PaymentMethodStatus.md)|  | [optional] |
| **reusability** | [**PaymentMethodReusability**](PaymentMethodReusability.md)|  | [optional] |
| **customer_id** | **string**|  | [optional] |
| **reference_id** | **string**|  | [optional] |
| **after_id** | **string**|  | [optional] |
| **before_id** | **string**|  | [optional] |
| **limit** | **int**|  | [optional] |

### Return type

[**\Xendit\PaymentMethod\PaymentMethodList**](PaymentMethodList.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to README]](../../README.md)

## `expirePaymentMethod()`

```php
expirePaymentMethod($payment_method_id, $for_user_id, $payment_method_expire_parameters): \PaymentMethod\PaymentMethod
```

Expires a payment method

This endpoint expires a payment method and performs unlinking if necessary

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

use Xendit\Configuration;
use Xendit\PaymentMethod\PaymentMethodApi;

Configuration::setXenditKey("YOUR_API_KEY_HERE");

$apiInstance = new PaymentMethodApi();
$payment_method_id = "pm-1fdaf346-dd2e-4b6c-b938-124c7167a822"; // string
$for_user_id = "5f9a3fbd571a1c4068aa40ce"; // string
$payment_method_expire_parameters = new \Xendit\PaymentMethod\PaymentMethodExpireParameters(); // \Xendit\PaymentMethod\PaymentMethodExpireParameters

try {
    $result = $apiInstance->expirePaymentMethod($payment_method_id, $for_user_id, $payment_method_expire_parameters);
    print_r($result);
} catch (\Xendit\XenditSdkException $e) {
    echo 'Exception when calling PaymentMethodApi->expirePaymentMethod: ', $e->getMessage(), PHP_EOL;
    echo 'Full Error: ', json_encode($e->getFullError()), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **payment_method_id** | **string**|  | |
| **for_user_id** | **string**|  | [optional] |
| **payment_method_expire_parameters** | [**PaymentMethodExpireParameters**](PaymentMethodExpireParameters.md)|  | [optional] |

### Return type

[**\Xendit\PaymentMethod\PaymentMethod**](PaymentMethod.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to README]](../../README.md)

## `authPaymentMethod()`

```php
authPaymentMethod($payment_method_id, $for_user_id, $payment_method_auth_parameters): \PaymentMethod\PaymentMethod
```

Validate a payment method's linking OTP

This endpoint validates a payment method linking OTP

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

use Xendit\Configuration;
use Xendit\PaymentMethod\PaymentMethodApi;

Configuration::setXenditKey("YOUR_API_KEY_HERE");

$apiInstance = new PaymentMethodApi();
$payment_method_id = "pm-1fdaf346-dd2e-4b6c-b938-124c7167a822"; // string
$for_user_id = "5f9a3fbd571a1c4068aa40ce"; // string
$payment_method_auth_parameters = new \Xendit\PaymentMethod\PaymentMethodAuthParameters(); // \Xendit\PaymentMethod\PaymentMethodAuthParameters

try {
    $result = $apiInstance->authPaymentMethod($payment_method_id, $for_user_id, $payment_method_auth_parameters);
    print_r($result);
} catch (\Xendit\XenditSdkException $e) {
    echo 'Exception when calling PaymentMethodApi->authPaymentMethod: ', $e->getMessage(), PHP_EOL;
    echo 'Full Error: ', json_encode($e->getFullError()), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **payment_method_id** | **string**|  | |
| **for_user_id** | **string**|  | [optional] |
| **payment_method_auth_parameters** | [**PaymentMethodAuthParameters**](PaymentMethodAuthParameters.md)|  | [optional] |

### Return type

[**\Xendit\PaymentMethod\PaymentMethod**](PaymentMethod.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to README]](../../README.md)

## `simulatePayment()`

```php
simulatePayment($payment_method_id, $simulate_payment_request)
```

Makes payment with matching PaymentMethodID.

Makes payment with matching PaymentMethodID.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

use Xendit\Configuration;
use Xendit\PaymentMethod\PaymentMethodApi;

Configuration::setXenditKey("YOUR_API_KEY_HERE");

$apiInstance = new PaymentMethodApi();
$payment_method_id = "pm-1fdaf346-dd2e-4b6c-b938-124c7167a822"; // string
$simulate_payment_request = new \Xendit\PaymentMethod\SimulatePaymentRequest(); // \Xendit\PaymentMethod\SimulatePaymentRequest

try {
    $apiInstance->simulatePayment($payment_method_id, $simulate_payment_request);
} catch (\Xendit\XenditSdkException $e) {
    echo 'Exception when calling PaymentMethodApi->simulatePayment: ', $e->getMessage(), PHP_EOL;
    echo 'Full Error: ', json_encode($e->getFullError()), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **payment_method_id** | **string**|  | |
| **simulate_payment_request** | [**SimulatePaymentRequest**](SimulatePaymentRequest.md)|  | [optional] |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to README]](../../README.md)
