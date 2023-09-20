# # PaymentRequestParameters


```php
use Xendit\PaymentRequest\PaymentRequestParameters;
```
## Properties

| Name | Type | Description | Examples | Notes |
| ------------ | ------------- | ------------- | ------------- | -------------|
| **reference_id** | **string** |  | null |  [optional] |
| **amount** | **float** |  | null |  [optional] |
| **currency** | [**PaymentRequestCurrency**](PaymentRequestCurrency.md) |  | null |  |
| **payment_method** | [**PaymentMethodParameters**](PaymentMethodParameters.md) |  | null |  [optional] |
| **description** | **string** |  | null |  [optional] |
| **capture_method** | [**PaymentRequestCaptureMethod**](PaymentRequestCaptureMethod.md) |  | null |  [optional] |
| **initiator** | [**PaymentRequestInitiator**](PaymentRequestInitiator.md) |  | null |  [optional] |
| **payment_method_id** | **string** |  | null |  [optional] |
| **channel_properties** | [**PaymentRequestParametersChannelProperties**](PaymentRequestParametersChannelProperties.md) |  | null |  [optional] |
| **shipping_information** | [**PaymentRequestShippingInformation**](PaymentRequestShippingInformation.md) |  | null |  [optional] |
| **items** | [**array**](PaymentRequestBasketItem.md) |  | null |  [optional] |
| **customer_id** | **string** |  | null |  [optional] |
| **customer** | **object** |  | null |  [optional] |
| **metadata** | **object** |  | null |  [optional] |


[[Back to README]](../../README.md)
