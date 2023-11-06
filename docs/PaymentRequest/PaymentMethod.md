# # PaymentMethod


```php
use Xendit\PaymentRequest\PaymentMethod;
```

## Properties

| Name | Type | Required | Description | Examples |
|------------|:-------------:|:-------------:|-------------|:-------------:|
| **id** | **string** | ☑️ |  | null |
| **type** | [**PaymentMethodType**](PaymentMethodType.md) | ☑️ |  | null |
| **created** | **string** |  |  | null |
| **updated** | **string** |  |  | null |
| **description** | **string** |  |  | null |
| **reference_id** | **string** |  |  | null |
| **card** | [**Card**](Card.md) |  |  | null |
| **direct_debit** | [**DirectDebit**](DirectDebit.md) |  |  | null |
| **ewallet** | [**EWallet**](EWallet.md) |  |  | null |
| **over_the_counter** | [**OverTheCounter**](OverTheCounter.md) |  |  | null |
| **virtual_account** | [**VirtualAccount**](VirtualAccount.md) |  |  | null |
| **qr_code** | [**QRCode**](QRCode.md) |  |  | null |
| **reusability** | [**PaymentMethodReusability**](PaymentMethodReusability.md) | ☑️ |  | null |
| **status** | [**PaymentMethodStatus**](PaymentMethodStatus.md) | ☑️ |  | null |
| **metadata** | **object** |  |  | null |


[[Back to README]](../../README.md)
