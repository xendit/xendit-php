# # PaymentRequest


```php
use Xendit\PaymentRequest\PaymentRequest;
```

## Properties

Name | Type | Description | Examples | Notes
------------ | ------------- | ------------- | ------------- | ------------- 
**id** | **string** |  | null | 
**created** | **string** |  | null | 
**updated** | **string** |  | null | 
**reference_id** | **string** |  | null | 
**business_id** | **string** |  | null | 
**customer_id** | **string** |  | null |  [optional]
**customer** | **object** |  | null |  [optional]
**amount** | **float** |  | null |  [optional]
**min_amount** | **float** |  | null |  [optional]
**max_amount** | **float** |  | null |  [optional]
**country** | [**PaymentRequestCountry**](PaymentRequestCountry.md) |  | null |  [optional]
**currency** | [**PaymentRequestCurrency**](PaymentRequestCurrency.md) |  | null | 
**payment_method** | [**PaymentMethod**](PaymentMethod.md) |  | null | 
**description** | **string** |  | null |  [optional]
**failure_code** | **string** |  | null |  [optional]
**capture_method** | [**PaymentRequestCaptureMethod**](PaymentRequestCaptureMethod.md) |  | null |  [optional]
**initiator** | [**PaymentRequestInitiator**](PaymentRequestInitiator.md) |  | null |  [optional]
**card_verification_results** | [**PaymentRequestCardVerificationResults**](PaymentRequestCardVerificationResults.md) |  | null |  [optional]
**status** | [**PaymentRequestStatus**](PaymentRequestStatus.md) |  | null | 
**actions** | [**array**](PaymentRequestAction.md) |  | null |  [optional]
**metadata** | **object** |  | null |  [optional]
**shipping_information** | [**PaymentRequestShippingInformation**](PaymentRequestShippingInformation.md) |  | null |  [optional]
**items** | [**array**](PaymentRequestBasketItem.md) |  | null |  [optional]

[[Back to README]](../../README.md)
