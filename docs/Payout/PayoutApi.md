# Xendit\PayoutApi

All URIs are relative to https://api.xendit.co, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**cancelPayout()**](PayoutApi.md#cancelPayout) | **POST** /v2/payouts/{id}/cancel | API to cancel requested payouts that have not yet been sent to partner banks and e-wallets. Cancellation is possible if the payout has not been sent out via our partner and when payout status is ACCEPTED. |
| [**createPayout()**](PayoutApi.md#createPayout) | **POST** /v2/payouts | API to send money at scale to bank accounts &amp; eWallets |
| [**getPayoutById()**](PayoutApi.md#getPayoutById) | **GET** /v2/payouts/{id} | API to fetch the current status, or details of the payout |
| [**getPayoutChannels()**](PayoutApi.md#getPayoutChannels) | **GET** /payouts_channels | API providing the current list of banks and e-wallets we support for payouts for both regions |
| [**getPayouts()**](PayoutApi.md#getPayouts) | **GET** /v2/payouts | API to retrieve all matching payouts with reference ID |


## `cancelPayout()`

```php
cancelPayout($id): \Payout\GetPayouts200ResponseDataInner
```

API to cancel requested payouts that have not yet been sent to partner banks and e-wallets. Cancellation is possible if the payout has not been sent out via our partner and when payout status is ACCEPTED.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

use Xendit\Configuration;
use Xendit\Payout\PayoutApi;

Configuration::setXenditKey("YOUR_API_KEY_HERE");

$apiInstance = new PayoutApi();
$id = "disb-7baa7335-a0b2-4678-bb8c-318c0167f332"; // string | Payout id returned from the response of /v2/payouts

try {
    $result = $apiInstance->cancelPayout($id);
    print_r($result);
} catch (\Xendit\XenditSdkException $e) {
    echo 'Exception when calling PayoutApi->cancelPayout: ', $e->getMessage(), PHP_EOL;
    echo 'Full Error: ', json_encode($e->getFullError()), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| Payout id returned from the response of /v2/payouts | |

### Return type

[**\Xendit\Payout\GetPayouts200ResponseDataInner**](GetPayouts200ResponseDataInner.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to README]](../../README.md)

## `createPayout()`

```php
createPayout($idempotency_key, $for_user_id, $create_payout_request): \Payout\GetPayouts200ResponseDataInner
```

API to send money at scale to bank accounts & eWallets

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

use Xendit\Configuration;
use Xendit\Payout\PayoutApi;

Configuration::setXenditKey("YOUR_API_KEY_HERE");

$apiInstance = new PayoutApi();
$idempotency_key = "DISB-1234"; // string | A unique key to prevent duplicate requests from pushing through our system. No expiration.
$for_user_id = "5dbf20d7c8eb0c0896f811b6"; // string | The sub-account user-id that you want to make this transaction for. This header is only used if you have access to xenPlatform. See xenPlatform for more information.
$create_payout_request = {"reference_id":"DISB-001","currency":"PHP","channel_code":"PH_BDO","channel_properties":{"account_holder_name":"John Doe","account_number":"000000"},"amount":90000,"description":"Test Bank Payout","type":"DIRECT_DISBURSEMENT"}; // \Xendit\Payout\CreatePayoutRequest

try {
    $result = $apiInstance->createPayout($idempotency_key, $for_user_id, $create_payout_request);
    print_r($result);
} catch (\Xendit\XenditSdkException $e) {
    echo 'Exception when calling PayoutApi->createPayout: ', $e->getMessage(), PHP_EOL;
    echo 'Full Error: ', json_encode($e->getFullError()), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **idempotency_key** | **string**| A unique key to prevent duplicate requests from pushing through our system. No expiration. | |
| **for_user_id** | **string**| The sub-account user-id that you want to make this transaction for. This header is only used if you have access to xenPlatform. See xenPlatform for more information. | [optional] |
| **create_payout_request** | [**CreatePayoutRequest**](CreatePayoutRequest.md)|  | [optional] |

### Return type

[**\Xendit\Payout\GetPayouts200ResponseDataInner**](GetPayouts200ResponseDataInner.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to README]](../../README.md)

## `getPayoutById()`

```php
getPayoutById($id): \Payout\GetPayouts200ResponseDataInner
```

API to fetch the current status, or details of the payout

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

use Xendit\Configuration;
use Xendit\Payout\PayoutApi;

Configuration::setXenditKey("YOUR_API_KEY_HERE");

$apiInstance = new PayoutApi();
$id = "disb-7baa7335-a0b2-4678-bb8c-318c0167f332"; // string | Payout id returned from the response of /v2/payouts

try {
    $result = $apiInstance->getPayoutById($id);
    print_r($result);
} catch (\Xendit\XenditSdkException $e) {
    echo 'Exception when calling PayoutApi->getPayoutById: ', $e->getMessage(), PHP_EOL;
    echo 'Full Error: ', json_encode($e->getFullError()), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| Payout id returned from the response of /v2/payouts | |

### Return type

[**\Xendit\Payout\GetPayouts200ResponseDataInner**](GetPayouts200ResponseDataInner.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to README]](../../README.md)

## `getPayoutChannels()`

```php
getPayoutChannels($currency, $channel_category, $channel_code): \Payout\Channel[]
```

API providing the current list of banks and e-wallets we support for payouts for both regions

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

use Xendit\Configuration;
use Xendit\Payout\PayoutApi;

Configuration::setXenditKey("YOUR_API_KEY_HERE");

$apiInstance = new PayoutApi();
$currency = "IDR, PHP"; // string | Filter channels by currency from ISO-4217 values
$channel_category = array(new \Xendit\Payout\ChannelCategory()); // \Payout\ChannelCategory[] | Filter channels by category
$channel_code = "ID_MANDIRI, PH_GCASH"; // string | Filter channels by channel code, prefixed by ISO-3166 country code

try {
    $result = $apiInstance->getPayoutChannels($currency, $channel_category, $channel_code);
    print_r($result);
} catch (\Xendit\XenditSdkException $e) {
    echo 'Exception when calling PayoutApi->getPayoutChannels: ', $e->getMessage(), PHP_EOL;
    echo 'Full Error: ', json_encode($e->getFullError()), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **currency** | **string**| Filter channels by currency from ISO-4217 values | [optional] |
| **channel_category** | [**ChannelCategory**](ChannelCategory.md)| Filter channels by category | [optional] |
| **channel_code** | **string**| Filter channels by channel code, prefixed by ISO-3166 country code | [optional] |

### Return type

[**\Xendit\Payout\Channel[]**](Channel.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to README]](../../README.md)

## `getPayouts()`

```php
getPayouts($reference_id, $limit, $after_id, $before_id): \Payout\GetPayouts200Response
```

API to retrieve all matching payouts with reference ID

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

use Xendit\Configuration;
use Xendit\Payout\PayoutApi;

Configuration::setXenditKey("YOUR_API_KEY_HERE");

$apiInstance = new PayoutApi();
$reference_id = "DISB-123"; // string | Reference_id provided when creating the payout
$limit = 10; // float | Number of records to fetch per API call
$after_id = "disb-7baa7335-a0b2-4678-bb8c-318c0167f332"; // string | Used to fetch record after this payout unique id
$before_id = "disb-7baa7335-a0b2-4678-bb8c-318c0167f332"; // string | Used to fetch record before this payout unique id

try {
    $result = $apiInstance->getPayouts($reference_id, $limit, $after_id, $before_id);
    print_r($result);
} catch (\Xendit\XenditSdkException $e) {
    echo 'Exception when calling PayoutApi->getPayouts: ', $e->getMessage(), PHP_EOL;
    echo 'Full Error: ', json_encode($e->getFullError()), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **reference_id** | **string**| Reference_id provided when creating the payout | |
| **limit** | **float**| Number of records to fetch per API call | [optional] |
| **after_id** | **string**| Used to fetch record after this payout unique id | [optional] |
| **before_id** | **string**| Used to fetch record before this payout unique id | [optional] |

### Return type

[**\Xendit\Payout\GetPayouts200Response**](GetPayouts200Response.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to README]](../../README.md)
