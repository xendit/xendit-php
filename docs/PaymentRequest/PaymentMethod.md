# # PaymentMethod


```php
use Xendit\PaymentRequest\PaymentMethod;
```

## Properties

Name | Type | Description | Examples | Notes
------------ | ------------- | ------------- | ------------- | ------------- 
**id** | **string** |  | null | 
**type** | [**PaymentMethodType**](PaymentMethodType.md) |  | null | 
**created** | **string** |  | null |  [optional]
**updated** | **string** |  | null |  [optional]
**description** | **string** |  | null |  [optional]
**reference_id** | **string** |  | null |  [optional]
**card** | [**Card**](Card.md) |  | null |  [optional]
**direct_debit** | [**DirectDebit**](DirectDebit.md) |  | null |  [optional]
**ewallet** | [**EWallet**](EWallet.md) |  | null |  [optional]
**over_the_counter** | [**OverTheCounter**](OverTheCounter.md) |  | null |  [optional]
**virtual_account** | [**VirtualAccount**](VirtualAccount.md) |  | null |  [optional]
**qr_code** | [**QRCode**](QRCode.md) |  | null |  [optional]
**reusability** | [**PaymentMethodReusability**](PaymentMethodReusability.md) |  | null | 
**status** | [**PaymentMethodStatus**](PaymentMethodStatus.md) |  | null | 
**metadata** | **object** |  | null |  [optional]

[[Back to README]](../../README.md)
