# # FeeResponse


```php
use Xendit\BalanceAndTransaction\FeeResponse;
```
## Properties

| Name | Type | Description | Examples | Notes |
| ------------ | ------------- | ------------- | ------------- | -------------|
| **xendit_fee** | **float** | Amount of the Xendit fee for this transaction. | 10 |  |
| **value_added_tax** | **float** | Amount of the VAT for this transaction. | 1 |  |
| **xendit_withholding_tax** | **float** | Amount of the Xendit Withholding Tax for this transaction if applicable. See [Tax Documentation](https://docs.xendit.co/fees-and-vat#vat) for more information. | 10 |  [optional] |
| **third_party_withholding_tax** | **float** | Amount of the 3rd Party Withholding Tax for this transaction if applicable. 3rd party example: Bank | 10 |  [optional] |
| **status** | **string** |  | null |  [optional] |


[[Back to README]](../../README.md)
