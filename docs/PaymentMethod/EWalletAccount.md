# # EWalletAccount


```php
use Xendit\PaymentMethod\EWalletAccount;
```

## Properties

Name | Type | Description | Examples | Notes
------------ | ------------- | ------------- | ------------- | ------------- 
**name** | **string** | Name of the eWallet account holder. The value is null if unavailableName of the eWallet account holder. The value is null if unavailable | null |  [optional]
**account_details** | **string** | Identifier from eWallet provider e.g. phone number. The value is null if unavailable | null |  [optional]
**balance** | **float** | The main balance amount on eWallet account provided from eWallet provider. The value is null if unavailable | null |  [optional]
**point_balance** | **float** | The point balance amount on eWallet account. Applicable only on some eWallet provider that has point system. The value is null if unavailabl | null |  [optional]

[[Back to README]](../../README.md)
