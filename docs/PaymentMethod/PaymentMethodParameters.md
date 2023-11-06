# # PaymentMethodParameters


```php
use Xendit\PaymentMethod\PaymentMethodParameters;
```

## Properties

| Name | Type | Required | Description | Examples |
|------------|:-------------:|:-------------:|-------------|:-------------:|
| **type** | [**PaymentMethodType**](PaymentMethodType.md) | ☑️ |  | null |
| **country** | **string** |  |  | null |
| **reusability** | [**PaymentMethodReusability**](PaymentMethodReusability.md) | ☑️ |  | null |
| **customer_id** | **string** |  |  | null |
| **reference_id** | **string** |  |  | null |
| **description** | **string** |  |  | null |
| **card** | [**CardParameters**](CardParameters.md) |  |  | null |
| **direct_debit** | [**DirectDebitParameters**](DirectDebitParameters.md) |  |  | null |
| **ewallet** | [**EWalletParameters**](EWalletParameters.md) |  |  | null |
| **over_the_counter** | [**OverTheCounterParameters**](OverTheCounterParameters.md) |  |  | null |
| **virtual_account** | [**VirtualAccountParameters**](VirtualAccountParameters.md) |  |  | null |
| **qr_code** | [**QRCodeParameters**](QRCodeParameters.md) |  |  | null |
| **metadata** | **object** |  |  | null |
| **billing_information** | [**BillingInformation**](BillingInformation.md) |  |  | null |


[[Back to README]](../../README.md)
