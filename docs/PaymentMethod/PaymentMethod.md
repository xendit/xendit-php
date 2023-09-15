# # PaymentMethod


```php
use Xendit\PaymentMethod\PaymentMethod;
```
## Properties

| Name | Type | Description | Examples | Notes |
| ------------ | ------------- | ------------- | ------------- | -------------|
| **id** | **string** |  | null |  |
| **business_id** | **string** |  | null |  [optional] |
| **type** | [**PaymentMethodType**](PaymentMethodType.md) |  | null |  [optional] |
| **country** | [**PaymentMethodCountry**](PaymentMethodCountry.md) |  | null |  [optional] |
| **customer_id** | **string** |  | null |  [optional] |
| **customer** | **object** |  | null |  [optional] |
| **reference_id** | **string** |  | null |  [optional] |
| **description** | **string** |  | null |  [optional] |
| **status** | [**PaymentMethodStatus**](PaymentMethodStatus.md) |  | null |  [optional] |
| **reusability** | [**PaymentMethodReusability**](PaymentMethodReusability.md) |  | null |  [optional] |
| **actions** | [**array**](PaymentMethodAction.md) |  | null |  [optional] |
| **metadata** | **object** |  | null |  [optional] |
| **billing_information** | [**BillingInformation**](BillingInformation.md) |  | null |  [optional] |
| **failure_code** | **string** |  | null |  [optional] |
| **created** | **\DateTime** |  | 2016-08-29T09:12:33.001Z |  [optional] |
| **updated** | **\DateTime** |  | 2016-08-29T09:12:33.001Z |  [optional] |
| **ewallet** | [**EWallet**](EWallet.md) |  | null |  [optional] |
| **direct_debit** | [**DirectDebit**](DirectDebit.md) |  | null |  [optional] |
| **over_the_counter** | [**OverTheCounter**](OverTheCounter.md) |  | null |  [optional] |
| **card** | [**Card**](Card.md) |  | null |  [optional] |
| **qr_code** | [**QRCode**](QRCode.md) |  | null |  [optional] |
| **virtual_account** | [**VirtualAccount**](VirtualAccount.md) |  | null |  [optional] |


[[Back to README]](../../README.md)
