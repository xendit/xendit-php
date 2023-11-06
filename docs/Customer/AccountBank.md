# # AccountBank


```php
use Xendit\Customer\AccountBank;
```

## Properties

| Name | Type | Required | Description | Examples |
|------------|:-------------:|:-------------:|-------------|:-------------:|
| **account_number** | **string** |  | Unique account identifier as per the bank records. | null |
| **account_holder_name** | **string** |  | Name of account holder as per the bank records. Needs to match the registered account name exactly. . | null |
| **swift_code** | **string** |  | The SWIFT code for international payments | null |
| **account_type** | **string** |  | Free text account type, e.g., Savings, Transaction, Virtual Account. | null |
| **account_details** | **string** |  | Potentially masked account detail, for display purposes only. | null |
| **currency** | **string** |  |  | null |


[[Back to README]](../../README.md)
