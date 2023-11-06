# # EWalletAccount
EWallet Account Properties

```php
use Xendit\PaymentRequest\EWalletAccount;
```

## Properties

| Name | Type | Required | Description | Examples |
|------------|:-------------:|:-------------:|-------------|:-------------:|
| **name** | **string** |  | Name of the eWallet account holder. The value is null if unavailableName of the eWallet account holder. The value is null if unavailable | null |
| **account_details** | **string** |  | Identifier from eWallet provider e.g. phone number. The value is null if unavailable | null |
| **balance** | **float** |  | The main balance amount on eWallet account provided from eWallet provider. The value is null if unavailable | null |
| **point_balance** | **float** |  | The point balance amount on eWallet account. Applicable only on some eWallet provider that has point system. The value is null if unavailabl | null |


[[Back to README]](../../README.md)
