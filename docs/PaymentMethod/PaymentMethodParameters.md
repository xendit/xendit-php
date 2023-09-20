# # PaymentMethodParameters


```php
use Xendit\PaymentMethod\PaymentMethodParameters;
```
## Properties

| Name | Type | Description | Examples | Notes |
| ------------ | ------------- | ------------- | ------------- | -------------|
| **type** | [**PaymentMethodType**](PaymentMethodType.md) |  | null |  |
| **country** | **string** |  | null |  [optional] |
| **reusability** | [**PaymentMethodReusability**](PaymentMethodReusability.md) |  | null |  |
| **customer_id** | **string** |  | null |  [optional] |
| **reference_id** | **string** |  | null |  [optional] |
| **description** | **string** |  | null |  [optional] |
| **card** | [**CardParameters**](CardParameters.md) |  | null |  [optional] |
| **direct_debit** | [**DirectDebitParameters**](DirectDebitParameters.md) |  | null |  [optional] |
| **ewallet** | [**EWalletParameters**](EWalletParameters.md) |  | null |  [optional] |
| **over_the_counter** | [**OverTheCounterParameters**](OverTheCounterParameters.md) |  | null |  [optional] |
| **virtual_account** | [**VirtualAccountParameters**](VirtualAccountParameters.md) |  | null |  [optional] |
| **qr_code** | [**QRCodeParameters**](QRCodeParameters.md) |  | null |  [optional] |
| **metadata** | **object** |  | null |  [optional] |
| **billing_information** | [**BillingInformation**](BillingInformation.md) |  | null |  [optional] |


[[Back to README]](../../README.md)
