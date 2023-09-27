# Xendit\BalanceApi

All URIs are relative to https://api.xendit.co, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getBalance()**](BalanceApi.md#getBalance) | **GET** /balance | Retrieves balances for a business, default to CASH type |


## `getBalance()`

```php
getBalance($account_type, $currency, $for_user_id): \BalanceAndTransaction\Balance
```

Retrieves balances for a business, default to CASH type

Retrieves balance for your business, defaults to CASH type

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

use Xendit\Configuration;
use Xendit\BalanceAndTransaction\BalanceApi;

Configuration::setXenditKey("YOUR_API_KEY_HERE");

$apiInstance = new BalanceApi();
$account_type = "CASH"; // string | The selected balance type
$currency = "IDR"; // string | Currency for filter for customers with multi currency accounts
$for_user_id = "5dbf20d7c8eb0c0896f811b6"; // string | The sub-account user-id that you want to make this transaction for. This header is only used if you have access to xenPlatform. See xenPlatform for more information

try {
    $result = $apiInstance->getBalance($account_type, $currency, $for_user_id);
    print_r($result);
} catch (\Xendit\XenditSdkException $e) {
    echo 'Exception when calling BalanceApi->getBalance: ', $e->getMessage(), PHP_EOL;
    echo 'Full Error: ', json_encode($e->getFullError()), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **account_type** | **string**| The selected balance type | [optional] [default to &#39;CASH&#39;] |
| **currency** | **string**| Currency for filter for customers with multi currency accounts | [optional] |
| **for_user_id** | **string**| The sub-account user-id that you want to make this transaction for. This header is only used if you have access to xenPlatform. See xenPlatform for more information | [optional] |

### Return type

[**\Xendit\BalanceAndTransaction\Balance**](Balance.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to README]](../../README.md)
