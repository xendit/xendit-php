# # DirectDebitChannelProperties
Direct Debit Channel Properties

```php
use Xendit\PaymentMethod\DirectDebitChannelProperties;
```

## Properties

| Name | Type | Required | Description | Examples |
|------------|:-------------:|:-------------:|-------------|:-------------:|
| **success_return_url** | **string** |  |  | null |
| **failure_return_url** | **string** |  |  | null |
| **mobile_number** | **string** |  | Mobile number of the customer registered to the partner channel | +62818555988 |
| **card_last_four** | **string** |  | Last four digits of the debit card | 8888 |
| **card_expiry** | **string** |  | Expiry month and year of the debit card (in MM/YY format) | 06/24 |
| **email** | **string** |  | Email address of the customer that is registered to the partner channel | test.email@xendit.co |
| **identity_document_number** | **string** |  | Identity number of the customer registered to the partner channel | 1234567891113 |
| **require_auth** | **bool** |  |  | null |
| **account_number** | **string** |  | Account number of the customer | 1234567891113 |


[[Back to README]](../../README.md)
