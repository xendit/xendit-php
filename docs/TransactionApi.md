# TransactionApi


You can use the APIs below to interface with Xendit's `TransactionApi`.
To start using the API, you need to configure the secret key and initiate the client instance.

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

use Xendit\Configuration;
use Xendit\BalanceAndTransaction\TransactionApi;

Configuration::setXenditKey("YOUR_API_KEY_HERE");

$apiInstance = new TransactionApi();
```

All URIs are relative to https://api.xendit.co, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getTransactionByID()**](TransactionApi.md#gettransactionbyid-function) | **GET** /transactions/{id} | Get a transaction based on its id |
| [**getAllTransactions()**](TransactionApi.md#getalltransactions-function) | **GET** /transactions | Get a list of transactions |


## `getTransactionByID()` Function

```php
getTransactionByID($id, $for_user_id): \BalanceAndTransaction\TransactionResponse
```

Get a transaction based on its id
    Get single specific transaction by transaction id.

| Name          |    Value 	     |
|--------------------|:-------------:|
| Function Name | `getTransactionByID` |
| Request Parameters  |  [GetTransactionByIDRequestParams](#request-parameters--GetTransactionByIDRequestParams)	 |
| Return Type  |  [**\Xendit\BalanceAndTransaction\TransactionResponse**](BalanceAndTransaction/TransactionResponse.md) |

### Request Parameters - GetTransactionByIDRequestParams

|Name | Type | Required |Default |
|-------------|:-------------:|:-------------:|-------------| 
| **id** | **string** | ☑️ |  |
| **for_user_id** | **string** |  |  |

### Usage Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

use Xendit\Configuration;
use Xendit\BalanceAndTransaction\TransactionApi;

Configuration::setXenditKey("YOUR_API_KEY_HERE");

$apiInstance = new TransactionApi();
$id = "'id_example'"; // string
$for_user_id = "5dbf20d7c8eb0c0896f811b6"; // string | The sub-account user-id that you want to make this transaction for. This header is only used if you have access to xenPlatform. See xenPlatform for more information

try {
    $result = $apiInstance->getTransactionByID($id, $for_user_id);
    print_r($result);
} catch (\Xendit\XenditSdkException $e) {
    echo 'Exception when calling TransactionApi->getTransactionByID: ', $e->getMessage(), PHP_EOL;
    echo 'Full Error: ', json_encode($e->getFullError()), PHP_EOL;
}
```


## `getAllTransactions()` Function

```php
getAllTransactions($for_user_id, $types, $statuses, $channel_categories, $reference_id, $product_id, $account_identifier, $amount, $currency, $created, $updated, $limit, $after_id, $before_id): \BalanceAndTransaction\TransactionsResponse
```

Get a list of transactions
    Get a list of all transactions based on filter and search parameters.

| Name          |    Value 	     |
|--------------------|:-------------:|
| Function Name | `getAllTransactions` |
| Request Parameters  |  [GetAllTransactionsRequestParams](#request-parameters--GetAllTransactionsRequestParams)	 |
| Return Type  |  [**\Xendit\BalanceAndTransaction\TransactionsResponse**](BalanceAndTransaction/TransactionsResponse.md) |

### Request Parameters - GetAllTransactionsRequestParams

|Name | Type | Required |Default |
|-------------|:-------------:|:-------------:|-------------| 
| **for_user_id** | **string** |  |  |
| **types** | [**TransactionTypes**](BalanceAndTransaction/TransactionTypes.md) |  |  |
| **statuses** | [**TransactionStatuses**](BalanceAndTransaction/TransactionStatuses.md) |  |  |
| **channel_categories** | [**ChannelsCategories**](BalanceAndTransaction/ChannelsCategories.md) |  |  |
| **reference_id** | **string** |  |  |
| **product_id** | **string** |  |  |
| **account_identifier** | **string** |  |  |
| **amount** | **float** |  |  |
| **currency** | [**Currency**](BalanceAndTransaction/Currency.md) |  |  |
| **created** | [**DateRangeFilter**](BalanceAndTransaction/DateRangeFilter.md) |  |  |
| **updated** | [**DateRangeFilter**](BalanceAndTransaction/DateRangeFilter.md) |  |  |
| **limit** | **float** |  | [10] |
| **after_id** | **string** |  |  |
| **before_id** | **string** |  |  |

### Usage Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

use Xendit\Configuration;
use Xendit\BalanceAndTransaction\TransactionApi;

Configuration::setXenditKey("YOUR_API_KEY_HERE");

$apiInstance = new TransactionApi();
$for_user_id = "5dbf20d7c8eb0c0896f811b6"; // string | The sub-account user-id that you want to make this transaction for. This header is only used if you have access to xenPlatform. See xenPlatform for more information
$types = ["DISBURSEMENT","PAYMENT"]; // \BalanceAndTransaction\TransactionTypes[] | Transaction types that will be included in the result. Default is to include all transaction types
$statuses = ["SUCCESS","PENDING"]; // \BalanceAndTransaction\TransactionStatuses[] | Status of the transaction. Default is to include all status.
$channel_categories = ["BANK","INVOICE"]; // \BalanceAndTransaction\ChannelsCategories[] | Payment channels in which the transaction is carried out. Default is to include all channels.
$reference_id = "ref23232"; // string | To filter the result for transactions with matching reference given (case sensitive)
$product_id = "d290f1ee-6c54-4b01-90e6-d701748f0701"; // string | To filter the result for transactions with matching product_id (a.k.a payment_id) given (case sensitive)
$account_identifier = "123123123"; // string | Account identifier of transaction. The format will be different from each channel. For example, on `BANK` channel it will be account number and on `CARD` it will be masked card number.
$amount = 100; // float | Specific transaction amount to search for
$currency = new \Xendit\BalanceAndTransaction\Currency(); // Currency
$created = array('key' => new \Xendit\BalanceAndTransaction\DateRangeFilter()); // DateRangeFilter | Filter time of transaction by created date. If not specified will list all dates.
$updated = array('key' => new \Xendit\BalanceAndTransaction\DateRangeFilter()); // DateRangeFilter | Filter time of transaction by updated date. If not specified will list all dates.
$limit = 10; // float | number of items in the result per page. Another name for \"results_per_page\"
$after_id = "'after_id_example'"; // string
$before_id = "'before_id_example'"; // string

try {
    $result = $apiInstance->getAllTransactions($for_user_id, $types, $statuses, $channel_categories, $reference_id, $product_id, $account_identifier, $amount, $currency, $created, $updated, $limit, $after_id, $before_id);
    print_r($result);
} catch (\Xendit\XenditSdkException $e) {
    echo 'Exception when calling TransactionApi->getAllTransactions: ', $e->getMessage(), PHP_EOL;
    echo 'Full Error: ', json_encode($e->getFullError()), PHP_EOL;
}
```



[[Back to README]](../README.md)