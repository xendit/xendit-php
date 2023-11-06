# # TransactionResponse


```php
use Xendit\BalanceAndTransaction\TransactionResponse;
```

## Properties

| Name | Type | Required | Description | Examples |
|------------|:-------------:|:-------------:|-------------|:-------------:|
| **id** | **string** | ☑️ | The unique id of a transaction. It will have &#x60;txn_&#x60; as prefix | txn_438e4b61-7c4c-4dbb-bbba-94a896bff333 |
| **product_id** | **string** | ☑️ | The product_id of the transaction. Product id will have a different prefix for each product. You can use this id to match the transaction from this API to each product API. | d290f1ee-6c54-4b01-90e6-d701748f0851 |
| **type** | [**TransactionResponseType**](TransactionResponseType.md) | ☑️ |  | null |
| **status** | [**TransactionStatuses**](TransactionStatuses.md) | ☑️ |  | null |
| **channel_category** | [**ChannelsCategories**](ChannelsCategories.md) | ☑️ |  | null |
| **channel_code** | **string** | ☑️ | The channel of the transaction that is used. See [channel codes](https://docs.xendit.co/xendisburse/channel-codes) for the list of available per channel categories. | BCA |
| **account_identifier** | **string** | ☑️ | Account identifier of transaction. The format will be different from each channel. | 123123123 |
| **reference_id** | **string** | ☑️ | customer supplied reference/external_id | My custom reference |
| **currency** | [**Currency**](Currency.md) | ☑️ |  | null |
| **amount** | **float** | ☑️ | The transaction amount. The number of decimal places will be different for each currency according to ISO 4217. | 150.21 |
| **cashflow** | **string** | ☑️ | Representing whether the transaction is money in or money out For transfer, the transfer out side it will shows up as money out and on transfer in side in will shows up as money-in. Available values are &#x60;MONEY_IN&#x60; for money in and &#x60;MONEY_OUT&#x60; for money out. | null |
| **settlement_status** | **string** |  | The settlement status of the transaction. &#x60;PENDING&#x60; - Transaction amount has not been settled to merchant&#39;s balance. &#x60;SETTLED&#x60; - Transaction has been settled to merchant&#39;s balance | null |
| **estimated_settlement_time** | **\DateTime** |  | Estimated settlement time will only apply to money-in transactions. For money-out transaction, the value will be &#x60;NULL&#x60;. Estimated settlement time in which transaction amount will be settled to merchant&#39;s balance. | 2016-08-29T09:12:33.001Z |
| **business_id** | **string** | ☑️ | The id of business where this transaction belong to | 5fc9f5b246f820517e38c84d |
| **fee** | [**FeeResponse**](FeeResponse.md) | ☑️ |  | null |
| **created** | **\DateTime** | ☑️ | Transaction created timestamp (UTC+0) | 2016-08-29T09:12:33.001Z |
| **updated** | **\DateTime** | ☑️ | Transaction updated timestamp (UTC+0) | 2016-08-29T09:12:33.001Z |


[[Back to README]](../../README.md)
