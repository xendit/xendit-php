# Xendit\CustomerApi

All URIs are relative to https://api.xendit.co, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createCustomer()**](CustomerApi.md#createCustomer) | **POST** /customers | Create Customer |
| [**getCustomer()**](CustomerApi.md#getCustomer) | **GET** /customers/{id} | Get Customer By ID |
| [**getCustomerByReferenceID()**](CustomerApi.md#getCustomerByReferenceID) | **GET** /customers | GET customers by reference id |
| [**updateCustomer()**](CustomerApi.md#updateCustomer) | **PATCH** /customers/{id} | Update End Customer Resource |


## `createCustomer()`

```php
createCustomer($idempotency_key, $for_user_id, $customer_request): \Customer\Customer
```

Create Customer

Function to create a customer that you may use in your Invoice or Payment Requests. For detail explanations, see this link: https://developers.xendit.co/api-reference/#create-customer

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

use Xendit\Configuration;
use Xendit\Customer\CustomerApi;

Configuration::setXenditKey("YOUR_API_KEY_HERE");

$apiInstance = new CustomerApi();
$idempotency_key = "idempotency-123"; // string | A unique key to prevent processing duplicate requests.
$for_user_id = "user-1"; // string | The sub-account user-id that you want to make this transaction for.
$customer_request = new \Xendit\Customer\CustomerRequest(); // \Xendit\Customer\CustomerRequest | Request object for end customer object

try {
    $result = $apiInstance->createCustomer($idempotency_key, $for_user_id, $customer_request);
    print_r($result);
} catch (\Xendit\XenditSdkException $e) {
    echo 'Exception when calling CustomerApi->createCustomer: ', $e->getMessage(), PHP_EOL;
    echo 'Full Error: ', json_encode($e->getFullError()), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **idempotency_key** | **string**| A unique key to prevent processing duplicate requests. | [optional] |
| **for_user_id** | **string**| The sub-account user-id that you want to make this transaction for. | [optional] |
| **customer_request** | [**CustomerRequest**](CustomerRequest.md)| Request object for end customer object | [optional] |

### Return type

[**\Xendit\Customer\Customer**](Customer.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to README]](../../README.md)

## `getCustomer()`

```php
getCustomer($id, $for_user_id): \Customer\Customer
```

Get Customer By ID

Retrieves a single customer object For detail explanations, see this link: https://developers.xendit.co/api-reference/#get-customer

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

use Xendit\Configuration;
use Xendit\Customer\CustomerApi;

Configuration::setXenditKey("YOUR_API_KEY_HERE");

$apiInstance = new CustomerApi();
$id = "d290f1ee-6c54-4b01-90e6-d701748f0851"; // string | End customer resource id
$for_user_id = "user-1"; // string | The sub-account user-id that you want to make this transaction for.

try {
    $result = $apiInstance->getCustomer($id, $for_user_id);
    print_r($result);
} catch (\Xendit\XenditSdkException $e) {
    echo 'Exception when calling CustomerApi->getCustomer: ', $e->getMessage(), PHP_EOL;
    echo 'Full Error: ', json_encode($e->getFullError()), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| End customer resource id | |
| **for_user_id** | **string**| The sub-account user-id that you want to make this transaction for. | [optional] |

### Return type

[**\Xendit\Customer\Customer**](Customer.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to README]](../../README.md)

## `getCustomerByReferenceID()`

```php
getCustomerByReferenceID($reference_id, $for_user_id): \Customer\GetCustomerByReferenceID200Response
```

GET customers by reference id

Retrieves an array with a customer object that matches the provided reference_id - the identifier provided by you For detail explanations, see this link: https://developers.xendit.co/api-reference/#get-customer-by-reference-id

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

use Xendit\Configuration;
use Xendit\Customer\CustomerApi;

Configuration::setXenditKey("YOUR_API_KEY_HERE");

$apiInstance = new CustomerApi();
$reference_id = "'reference_id_example'"; // string | Merchant's reference of end customer
$for_user_id = "user-1"; // string | The sub-account user-id that you want to make this transaction for.

try {
    $result = $apiInstance->getCustomerByReferenceID($reference_id, $for_user_id);
    print_r($result);
} catch (\Xendit\XenditSdkException $e) {
    echo 'Exception when calling CustomerApi->getCustomerByReferenceID: ', $e->getMessage(), PHP_EOL;
    echo 'Full Error: ', json_encode($e->getFullError()), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **reference_id** | **string**| Merchant&#39;s reference of end customer | |
| **for_user_id** | **string**| The sub-account user-id that you want to make this transaction for. | [optional] |

### Return type

[**\Xendit\Customer\GetCustomerByReferenceID200Response**](GetCustomerByReferenceID200Response.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to README]](../../README.md)

## `updateCustomer()`

```php
updateCustomer($id, $for_user_id, $patch_customer): \Customer\Customer
```

Update End Customer Resource

Function to update an existing customer. For a detailed explanation For detail explanations, see this link: https://developers.xendit.co/api-reference/#update-customer

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

use Xendit\Configuration;
use Xendit\Customer\CustomerApi;

Configuration::setXenditKey("YOUR_API_KEY_HERE");

$apiInstance = new CustomerApi();
$id = "d290f1ee-6c54-4b01-90e6-d701748f0851"; // string | End customer resource id
$for_user_id = "user-1"; // string | The sub-account user-id that you want to make this transaction for.
$patch_customer = new \Xendit\Customer\PatchCustomer(); // \Xendit\Customer\PatchCustomer | Update Request for end customer object

try {
    $result = $apiInstance->updateCustomer($id, $for_user_id, $patch_customer);
    print_r($result);
} catch (\Xendit\XenditSdkException $e) {
    echo 'Exception when calling CustomerApi->updateCustomer: ', $e->getMessage(), PHP_EOL;
    echo 'Full Error: ', json_encode($e->getFullError()), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| End customer resource id | |
| **for_user_id** | **string**| The sub-account user-id that you want to make this transaction for. | [optional] |
| **patch_customer** | [**PatchCustomer**](PatchCustomer.md)| Update Request for end customer object | [optional] |

### Return type

[**\Xendit\Customer\Customer**](Customer.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to README]](../../README.md)
