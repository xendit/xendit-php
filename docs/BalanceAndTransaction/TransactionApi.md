# Xendit\TransactionApi

All URIs are relative to https://api.xendit.co, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getAllTransactions()**](TransactionApi.md#getAllTransactions) | **GET** /transactions | Get a list of transactions |
| [**getTransactionByID()**](TransactionApi.md#getTransactionByID) | **GET** /transactions/{id} | Get a transaction based on its id |


## `getAllTransactions()`

```php
getAllTransactions($for_user_id, $types, $statuses, $channel_categories, $reference_id, $product_id, $account_identifier, $amount, $currency, $created, $updated, $limit, $after_id, $before_id): \BalanceAndTransaction\TransactionsResponse
```

Get a list of transactions

Get a list of all transactions based on filter and search parameters.

### Example

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
} catch (Exception $e) {
    echo 'Exception when calling TransactionApi->getAllTransactions: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **for_user_id** | **string**| The sub-account user-id that you want to make this transaction for. This header is only used if you have access to xenPlatform. See xenPlatform for more information | [optional] |
| **types** | [**TransactionTypes**](TransactionTypes.md)| Transaction types that will be included in the result. Default is to include all transaction types | [optional] |
| **statuses** | [**TransactionStatuses**](TransactionStatuses.md)| Status of the transaction. Default is to include all status. | [optional] |
| **channel_categories** | [**ChannelsCategories**](ChannelsCategories.md)| Payment channels in which the transaction is carried out. Default is to include all channels. | [optional] |
| **reference_id** | **string**| To filter the result for transactions with matching reference given (case sensitive) | [optional] |
| **product_id** | **string**| To filter the result for transactions with matching product_id (a.k.a payment_id) given (case sensitive) | [optional] |
| **account_identifier** | **string**| Account identifier of transaction. The format will be different from each channel. For example, on &#x60;BANK&#x60; channel it will be account number and on &#x60;CARD&#x60; it will be masked card number. | [optional] |
| **amount** | **float**| Specific transaction amount to search for | [optional] |
| **currency** | [**Currency**](Currency.md)|  | [optional] |
| **created** | [**DateRangeFilter**](DateRangeFilter.md)| Filter time of transaction by created date. If not specified will list all dates. | [optional] |
| **updated** | [**DateRangeFilter**](DateRangeFilter.md)| Filter time of transaction by updated date. If not specified will list all dates. | [optional] |
| **limit** | **float**| number of items in the result per page. Another name for \&quot;results_per_page\&quot; | [optional] [default to 10] |
| **after_id** | **string**|  | [optional] |
| **before_id** | **string**|  | [optional] |

### Return type

[**\Xendit\BalanceAndTransaction\TransactionsResponse**](TransactionsResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to README]](../../README.md)

## `getTransactionByID()`

```php
getTransactionByID($id, $for_user_id): \BalanceAndTransaction\TransactionResponse
```

Get a transaction based on its id

Get single specific transaction by transaction id.

### Example

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
} catch (Exception $e) {
    echo 'Exception when calling TransactionApi->getTransactionByID: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**|  | |
| **for_user_id** | **string**| The sub-account user-id that you want to make this transaction for. This header is only used if you have access to xenPlatform. See xenPlatform for more information | [optional] |

### Return type

[**\Xendit\BalanceAndTransaction\TransactionResponse**](TransactionResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to README]](../../README.md)
