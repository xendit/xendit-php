# # DirectDebitChannelProperties


```php
use Xendit\PaymentRequest\DirectDebitChannelProperties;
```
## Properties

| Name | Type | Description | Examples | Notes |
| ------------ | ------------- | ------------- | ------------- | -------------|
| **mobile_number** | **string** | Mobile number of the customer registered to the partner channel | +62818555988 |  [optional] |
| **success_return_url** | **string** |  | null |  [optional] |
| **failure_return_url** | **string** |  | null |  [optional] |
| **identity_document_number** | **string** |  | null |  [optional] |
| **account_number** | **string** |  | 1234567890 |  [optional] |
| **card_last_four** | **string** | Last four digits of the debit card | 8888 |  [optional] |
| **card_expiry** | **string** | Expiry month and year of the debit card (in MM/YY format) | 06/24 |  [optional] |
| **email** | **string** | Email address of the customer that is registered to the partner channel | test.email@xendit.co |  [optional] |


[[Back to README]](../../README.md)
