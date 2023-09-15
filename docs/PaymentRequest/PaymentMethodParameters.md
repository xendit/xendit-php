# # PaymentMethodParameters


```php
use Xendit\PaymentRequest\PaymentMethodParameters;
```
## Properties

| Name | Type | Description | Examples | Notes |
| ------------ | ------------- | ------------- | ------------- | -------------|
| **type** | [**PaymentMethodType**](PaymentMethodType.md) |  | null |  |
| **reusability** | [**PaymentMethodReusability**](PaymentMethodReusability.md) |  | null |  |
| **description** | **string** |  | null |  [optional] |
| **reference_id** | **string** |  | null |  [optional] |
| **direct_debit** | [**DirectDebitParameters**](DirectDebitParameters.md) |  | null |  [optional] |
| **ewallet** | [**EWalletParameters**](EWalletParameters.md) |  | null |  [optional] |
| **over_the_counter** | [**OverTheCounterParameters**](OverTheCounterParameters.md) |  | null |  [optional] |
| **virtual_account** | [**VirtualAccountParameters**](VirtualAccountParameters.md) |  | null |  [optional] |
| **qr_code** | [**QRCodeParameters**](QRCodeParameters.md) |  | null |  [optional] |


[[Back to README]](../../README.md)
