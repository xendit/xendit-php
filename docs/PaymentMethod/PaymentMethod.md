# # PaymentMethod


```php
use Xendit\PaymentMethod\PaymentMethod;
```

## Properties

| Name | Type | Required | Description | Examples |
|------------|:-------------:|:-------------:|-------------|:-------------:|
| **id** | **string** | ☑️ |  | null |
| **business_id** | **string** |  |  | null |
| **type** | [**PaymentMethodType**](PaymentMethodType.md) |  |  | null |
| **country** | [**PaymentMethodCountry**](PaymentMethodCountry.md) |  |  | null |
| **customer_id** | **string** |  |  | null |
| **customer** | **object** |  |  | null |
| **reference_id** | **string** |  |  | null |
| **description** | **string** |  |  | null |
| **status** | [**PaymentMethodStatus**](PaymentMethodStatus.md) |  |  | null |
| **reusability** | [**PaymentMethodReusability**](PaymentMethodReusability.md) |  |  | null |
| **actions** | [**array**](PaymentMethodAction.md) |  |  | null |
| **metadata** | **object** |  |  | null |
| **billing_information** | [**BillingInformation**](BillingInformation.md) |  |  | null |
| **failure_code** | **string** |  |  | null |
| **created** | **\DateTime** |  |  | 2016-08-29T09:12:33.001Z |
| **updated** | **\DateTime** |  |  | 2016-08-29T09:12:33.001Z |
| **ewallet** | [**EWallet**](EWallet.md) |  |  | null |
| **direct_debit** | [**DirectDebit**](DirectDebit.md) |  |  | null |
| **over_the_counter** | [**OverTheCounter**](OverTheCounter.md) |  |  | null |
| **card** | [**Card**](Card.md) |  |  | null |
| **qr_code** | [**QRCode**](QRCode.md) |  |  | null |
| **virtual_account** | [**VirtualAccount**](VirtualAccount.md) |  |  | null |


[[Back to README]](../../README.md)
