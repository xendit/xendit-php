# # AccountBank


```php
use Xendit\Customer\AccountBank;
```
## Properties

| Name | Type | Description | Examples | Notes |
| ------------ | ------------- | ------------- | ------------- | -------------|
| **account_number** | **string** | Unique account identifier as per the bank records. | null |  [optional] |
| **account_holder_name** | **string** | Name of account holder as per the bank records. Needs to match the registered account name exactly. . | null |  [optional] |
| **swift_code** | **string** | The SWIFT code for international payments | null |  [optional] |
| **account_type** | **string** | Free text account type, e.g., Savings, Transaction, Virtual Account. | null |  [optional] |
| **account_details** | **string** | Potentially masked account detail, for display purposes only. | null |  [optional] |
| **currency** | **string** |  | null |  [optional] |


[[Back to README]](../../README.md)
