# # PaymentMethodParameters


```php
use Xendit\PaymentRequest\PaymentMethodParameters;
```

## Properties

| Name | Type | Required | Description | Examples |
|------------|:-------------:|:-------------:|-------------|:-------------:|
| **type** | [**PaymentMethodType**](PaymentMethodType.md) | ☑️ |  | null |
| **reusability** | [**PaymentMethodReusability**](PaymentMethodReusability.md) | ☑️ |  | null |
| **description** | **string** |  |  | null |
| **reference_id** | **string** |  |  | null |
| **card** | [**CardParameters**](CardParameters.md) |  |  | null |
| **direct_debit** | [**DirectDebitParameters**](DirectDebitParameters.md) |  |  | null |
| **ewallet** | [**EWalletParameters**](EWalletParameters.md) |  |  | null |
| **over_the_counter** | [**OverTheCounterParameters**](OverTheCounterParameters.md) |  |  | null |
| **virtual_account** | [**VirtualAccountParameters**](VirtualAccountParameters.md) |  |  | null |
| **qr_code** | [**QRCodeParameters**](QRCodeParameters.md) |  |  | null |


[[Back to README]](../../README.md)
