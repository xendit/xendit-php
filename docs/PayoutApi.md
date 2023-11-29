# PayoutApi


You can use the APIs below to interface with Xendit's `PayoutApi`.
To start using the API, you need to configure the secret key and initiate the client instance.

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

use Xendit\Configuration;
use Xendit\Payout\PayoutApi;

Configuration::setXenditKey("YOUR_API_KEY_HERE");

$apiInstance = new PayoutApi();
```

All URIs are relative to https://api.xendit.co, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createPayout()**](PayoutApi.md#createpayout-function) | **POST** /v2/payouts | API to send money at scale to bank accounts &amp; eWallets |
| [**getPayoutById()**](PayoutApi.md#getpayoutbyid-function) | **GET** /v2/payouts/{id} | API to fetch the current status, or details of the payout |
| [**getPayoutChannels()**](PayoutApi.md#getpayoutchannels-function) | **GET** /payouts_channels | API providing the current list of banks and e-wallets we support for payouts for both regions |
| [**getPayouts()**](PayoutApi.md#getpayouts-function) | **GET** /v2/payouts | API to retrieve all matching payouts with reference ID |
| [**cancelPayout()**](PayoutApi.md#cancelpayout-function) | **POST** /v2/payouts/{id}/cancel | API to cancel requested payouts that have not yet been sent to partner banks and e-wallets. Cancellation is possible if the payout has not been sent out via our partner and when payout status is ACCEPTED. |


## `createPayout()` Function

```php
createPayout($idempotency_key, $for_user_id, $create_payout_request): \Payout\GetPayouts200ResponseDataInner
```

API to send money at scale to bank accounts & eWallets

| Name          |    Value 	     |
|--------------------|:-------------:|
| Function Name | `createPayout` |
| Request Parameters  |  [CreatePayoutRequestParams](#request-parameters--CreatePayoutRequestParams)	 |
| Return Type  |  [**\Xendit\Payout\GetPayouts200ResponseDataInner**](Payout/GetPayouts200ResponseDataInner.md) |

### Request Parameters - CreatePayoutRequestParams

|Name | Type | Required |Default |
|-------------|:-------------:|:-------------:|-------------| 
| **idempotency_key** | **string** | ☑️ |  |
| **for_user_id** | **string** |  |  |
| **create_payout_request** | [**CreatePayoutRequest**](Payout/CreatePayoutRequest.md) |  |  |

### Usage Example
#### Bank or EWallet Payout

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

use Xendit\Configuration;
use Xendit\Payout\PayoutApi;

Configuration::setXenditKey("YOUR_API_KEY_HERE");

$apiInstance = new PayoutApi();
$idempotency_key = "DISB-1234"; // string | A unique key to prevent duplicate requests from pushing through our system. No expiration.
$for_user_id = "5f9a3fbd571a1c4068aa40ce"; // string | The sub-account user-id that you want to make this transaction for. This header is only used if you have access to xenPlatform. See xenPlatform for more information.
$create_payout_request = new Xendit\Payout\CreatePayoutRequest([
  'reference_id' => 'DISB-001',
  'currency' => 'PHP',
  'channel_code' => 'PH_BDO',
  'channel_properties' => [
    'account_holder_name' => 'John Doe',
    'account_number' => '000000'
  ],
  'amount' => 90000,
  'description' => 'Test Bank Payout',
  'type' => 'DIRECT_DISBURSEMENT'
]); // \Xendit\Payout\CreatePayoutRequest

try {
    $result = $apiInstance->createPayout($idempotency_key, $for_user_id, $create_payout_request);
        print_r($result);
} catch (\Xendit\XenditSdkException $e) {
    echo 'Exception when calling PayoutApi->createPayout: ', $e->getMessage(), PHP_EOL;
    echo 'Full Error: ', json_encode($e->getFullError()), PHP_EOL;
}
```


## `getPayoutById()` Function

```php
getPayoutById($id, $for_user_id): \Payout\GetPayouts200ResponseDataInner
```

API to fetch the current status, or details of the payout

| Name          |    Value 	     |
|--------------------|:-------------:|
| Function Name | `getPayoutById` |
| Request Parameters  |  [GetPayoutByIdRequestParams](#request-parameters--GetPayoutByIdRequestParams)	 |
| Return Type  |  [**\Xendit\Payout\GetPayouts200ResponseDataInner**](Payout/GetPayouts200ResponseDataInner.md) |

### Request Parameters - GetPayoutByIdRequestParams

|Name | Type | Required |Default |
|-------------|:-------------:|:-------------:|-------------| 
| **id** | **string** | ☑️ |  |
| **for_user_id** | **string** |  |  |

### Usage Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

use Xendit\Configuration;
use Xendit\Payout\PayoutApi;

Configuration::setXenditKey("YOUR_API_KEY_HERE");

$apiInstance = new PayoutApi();
$id = "disb-7baa7335-a0b2-4678-bb8c-318c0167f332"; // string | Payout id returned from the response of /v2/payouts
$for_user_id = "5f9a3fbd571a1c4068aa40ce"; // string | The sub-account user-id that you want to make this transaction for. This header is only used if you have access to xenPlatform. See xenPlatform for more information.

try {
    $result = $apiInstance->getPayoutById($id, $for_user_id);
    print_r($result);
} catch (\Xendit\XenditSdkException $e) {
    echo 'Exception when calling PayoutApi->getPayoutById: ', $e->getMessage(), PHP_EOL;
    echo 'Full Error: ', json_encode($e->getFullError()), PHP_EOL;
}
```


## `getPayoutChannels()` Function

```php
getPayoutChannels($currency, $channel_category, $channel_code, $for_user_id): \Payout\Channel[]
```

API providing the current list of banks and e-wallets we support for payouts for both regions

| Name          |    Value 	     |
|--------------------|:-------------:|
| Function Name | `getPayoutChannels` |
| Request Parameters  |  [GetPayoutChannelsRequestParams](#request-parameters--GetPayoutChannelsRequestParams)	 |
| Return Type  |  [**\Xendit\Payout\Channel[]**](Payout/Channel.md) |

### Request Parameters - GetPayoutChannelsRequestParams

|Name | Type | Required |Default |
|-------------|:-------------:|:-------------:|-------------| 
| **currency** | **string** |  |  |
| **channel_category** | [**ChannelCategory**](Payout/ChannelCategory.md) |  |  |
| **channel_code** | **string** |  |  |
| **for_user_id** | **string** |  |  |

### Usage Example
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
$for_user_id = "5f9a3fbd571a1c4068aa40ce"; // string | The sub-account user-id that you want to make this transaction for. This header is only used if you have access to xenPlatform. See xenPlatform for more information.

try {
    $result = $apiInstance->getPayoutChannels($currency, $channel_category, $channel_code, $for_user_id);
    print_r($result);
} catch (\Xendit\XenditSdkException $e) {
    echo 'Exception when calling PayoutApi->getPayoutChannels: ', $e->getMessage(), PHP_EOL;
    echo 'Full Error: ', json_encode($e->getFullError()), PHP_EOL;
}
```


## `getPayouts()` Function

```php
getPayouts($reference_id, $limit, $after_id, $before_id, $for_user_id): \Payout\GetPayouts200Response
```

API to retrieve all matching payouts with reference ID

| Name          |    Value 	     |
|--------------------|:-------------:|
| Function Name | `getPayouts` |
| Request Parameters  |  [GetPayoutsRequestParams](#request-parameters--GetPayoutsRequestParams)	 |
| Return Type  |  [**\Xendit\Payout\GetPayouts200Response**](Payout/GetPayouts200Response.md) |

### Request Parameters - GetPayoutsRequestParams

|Name | Type | Required |Default |
|-------------|:-------------:|:-------------:|-------------| 
| **reference_id** | **string** | ☑️ |  |
| **limit** | **float** |  |  |
| **after_id** | **string** |  |  |
| **before_id** | **string** |  |  |
| **for_user_id** | **string** |  |  |

### Usage Example
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
$for_user_id = "5f9a3fbd571a1c4068aa40ce"; // string | The sub-account user-id that you want to make this transaction for. This header is only used if you have access to xenPlatform. See xenPlatform for more information.

try {
    $result = $apiInstance->getPayouts($reference_id, $limit, $after_id, $before_id, $for_user_id);
    print_r($result);
} catch (\Xendit\XenditSdkException $e) {
    echo 'Exception when calling PayoutApi->getPayouts: ', $e->getMessage(), PHP_EOL;
    echo 'Full Error: ', json_encode($e->getFullError()), PHP_EOL;
}
```


## `cancelPayout()` Function

```php
cancelPayout($id, $for_user_id): \Payout\GetPayouts200ResponseDataInner
```

API to cancel requested payouts that have not yet been sent to partner banks and e-wallets. Cancellation is possible if the payout has not been sent out via our partner and when payout status is ACCEPTED.

| Name          |    Value 	     |
|--------------------|:-------------:|
| Function Name | `cancelPayout` |
| Request Parameters  |  [CancelPayoutRequestParams](#request-parameters--CancelPayoutRequestParams)	 |
| Return Type  |  [**\Xendit\Payout\GetPayouts200ResponseDataInner**](Payout/GetPayouts200ResponseDataInner.md) |

### Request Parameters - CancelPayoutRequestParams

|Name | Type | Required |Default |
|-------------|:-------------:|:-------------:|-------------| 
| **id** | **string** | ☑️ |  |
| **for_user_id** | **string** |  |  |

### Usage Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

use Xendit\Configuration;
use Xendit\Payout\PayoutApi;

Configuration::setXenditKey("YOUR_API_KEY_HERE");

$apiInstance = new PayoutApi();
$id = "disb-7baa7335-a0b2-4678-bb8c-318c0167f332"; // string | Payout id returned from the response of /v2/payouts
$for_user_id = "5f9a3fbd571a1c4068aa40ce"; // string | The sub-account user-id that you want to make this transaction for. This header is only used if you have access to xenPlatform. See xenPlatform for more information.

try {
    $result = $apiInstance->cancelPayout($id, $for_user_id);
    print_r($result);
} catch (\Xendit\XenditSdkException $e) {
    echo 'Exception when calling PayoutApi->cancelPayout: ', $e->getMessage(), PHP_EOL;
    echo 'Full Error: ', json_encode($e->getFullError()), PHP_EOL;
}
```



[[Back to README]](../README.md)