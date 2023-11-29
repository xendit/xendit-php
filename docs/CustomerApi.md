# CustomerApi


You can use the APIs below to interface with Xendit's `CustomerApi`.
To start using the API, you need to configure the secret key and initiate the client instance.

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

use Xendit\Configuration;
use Xendit\Customer\CustomerApi;

Configuration::setXenditKey("YOUR_API_KEY_HERE");

$apiInstance = new CustomerApi();
```

All URIs are relative to https://api.xendit.co, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createCustomer()**](CustomerApi.md#createcustomer-function) | **POST** /customers | Create Customer |
| [**getCustomer()**](CustomerApi.md#getcustomer-function) | **GET** /customers/{id} | Get Customer By ID |
| [**getCustomerByReferenceID()**](CustomerApi.md#getcustomerbyreferenceid-function) | **GET** /customers | GET customers by reference id |
| [**updateCustomer()**](CustomerApi.md#updatecustomer-function) | **PATCH** /customers/{id} | Update End Customer Resource |


## `createCustomer()` Function

```php
createCustomer($idempotency_key, $for_user_id, $customer_request): \Customer\Customer
```

Create Customer
    Function to create a customer that you may use in your Invoice or Payment Requests. For detail explanations, see this link: https://developers.xendit.co/api-reference/#create-customer

| Name          |    Value 	     |
|--------------------|:-------------:|
| Function Name | `createCustomer` |
| Request Parameters  |  [CreateCustomerRequestParams](#request-parameters--CreateCustomerRequestParams)	 |
| Return Type  |  [**\Xendit\Customer\Customer**](Customer/Customer.md) |

### Request Parameters - CreateCustomerRequestParams

|Name | Type | Required |Default |
|-------------|:-------------:|:-------------:|-------------| 
| **idempotency_key** | **string** |  |  |
| **for_user_id** | **string** |  |  |
| **customer_request** | [**CustomerRequest**](Customer/CustomerRequest.md) |  |  |

### Usage Example
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


## `getCustomer()` Function

```php
getCustomer($id, $for_user_id): \Customer\Customer
```

Get Customer By ID
    Retrieves a single customer object For detail explanations, see this link: https://developers.xendit.co/api-reference/#get-customer

| Name          |    Value 	     |
|--------------------|:-------------:|
| Function Name | `getCustomer` |
| Request Parameters  |  [GetCustomerRequestParams](#request-parameters--GetCustomerRequestParams)	 |
| Return Type  |  [**\Xendit\Customer\Customer**](Customer/Customer.md) |

### Request Parameters - GetCustomerRequestParams

|Name | Type | Required |Default |
|-------------|:-------------:|:-------------:|-------------| 
| **id** | **string** | ☑️ |  |
| **for_user_id** | **string** |  |  |

### Usage Example
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


## `getCustomerByReferenceID()` Function

```php
getCustomerByReferenceID($reference_id, $for_user_id): \Customer\GetCustomerByReferenceID200Response
```

GET customers by reference id
    Retrieves an array with a customer object that matches the provided reference_id - the identifier provided by you For detail explanations, see this link: https://developers.xendit.co/api-reference/#get-customer-by-reference-id

| Name          |    Value 	     |
|--------------------|:-------------:|
| Function Name | `getCustomerByReferenceID` |
| Request Parameters  |  [GetCustomerByReferenceIDRequestParams](#request-parameters--GetCustomerByReferenceIDRequestParams)	 |
| Return Type  |  [**\Xendit\Customer\GetCustomerByReferenceID200Response**](Customer/GetCustomerByReferenceID200Response.md) |

### Request Parameters - GetCustomerByReferenceIDRequestParams

|Name | Type | Required |Default |
|-------------|:-------------:|:-------------:|-------------| 
| **reference_id** | **string** | ☑️ |  |
| **for_user_id** | **string** |  |  |

### Usage Example
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


## `updateCustomer()` Function

```php
updateCustomer($id, $for_user_id, $patch_customer): \Customer\Customer
```

Update End Customer Resource
    Function to update an existing customer. For a detailed explanation For detail explanations, see this link: https://developers.xendit.co/api-reference/#update-customer

| Name          |    Value 	     |
|--------------------|:-------------:|
| Function Name | `updateCustomer` |
| Request Parameters  |  [UpdateCustomerRequestParams](#request-parameters--UpdateCustomerRequestParams)	 |
| Return Type  |  [**\Xendit\Customer\Customer**](Customer/Customer.md) |

### Request Parameters - UpdateCustomerRequestParams

|Name | Type | Required |Default |
|-------------|:-------------:|:-------------:|-------------| 
| **id** | **string** | ☑️ |  |
| **for_user_id** | **string** |  |  |
| **patch_customer** | [**PatchCustomer**](Customer/PatchCustomer.md) |  |  |

### Usage Example
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



[[Back to README]](../README.md)