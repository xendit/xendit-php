# # Bank
An object representing bank details for invoices.

```php
use Xendit\Invoice\Bank;
```

## Properties

| Name | Type | Required | Description | Examples |
|------------|:-------------:|:-------------:|-------------|:-------------:|
| **bank_code** | [**BankCode**](BankCode.md) | ☑️ |  | null |
| **collection_type** | **string** | ☑️ | The collection type for the bank details. | null |
| **bank_branch** | **string** |  | The branch of the bank. | null |
| **bank_account_number** | **string** |  | The bank account number. | null |
| **account_holder_name** | **string** | ☑️ | The name of the account holder. | null |
| **transfer_amount** | **float** |  | The transfer amount. | null |
| **alternative_displays** | [**array**](AlternativeDisplayItem.md) |  |  | null |


[[Back to README]](../../README.md)
