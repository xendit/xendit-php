# # DirectDebitChannelProperties


```php
use Xendit\PaymentMethod\DirectDebitChannelProperties;
```

## Properties

Name | Type | Description | Examples | Notes
------------ | ------------- | ------------- | ------------- | ------------- 
**success_return_url** | **string** |  | null |  [optional]
**failure_return_url** | **string** |  | null |  [optional]
**mobile_number** | **string** | Mobile number of the customer registered to the partner channel | +62818555988 |  [optional]
**card_last_four** | **string** | Last four digits of the debit card | 8888 |  [optional]
**card_expiry** | **string** | Expiry month and year of the debit card (in MM/YY format) | 06/24 |  [optional]
**email** | **string** | Email address of the customer that is registered to the partner channel | test.email@xendit.co |  [optional]
**identity_document_number** | **string** | Identity number of the customer registered to the partner channel | 1234567891113 |  [optional]
**require_auth** | **bool** |  | null |  [optional]

[[Back to README]](../../README.md)
