# # PaymentRequestParameters


```php
use Xendit\PaymentRequest\PaymentRequestParameters;
```

## Properties

| Name | Type | Required | Description | Examples |
|------------|:-------------:|:-------------:|-------------|:-------------:|
| **reference_id** | **string** |  |  | null |
| **amount** | **float** |  |  | null |
| **currency** | [**PaymentRequestCurrency**](PaymentRequestCurrency.md) | ☑️ |  | null |
| **payment_method** | [**PaymentMethodParameters**](PaymentMethodParameters.md) |  |  | null |
| **description** | **string** |  |  | null |
| **capture_method** | [**PaymentRequestCaptureMethod**](PaymentRequestCaptureMethod.md) |  |  | null |
| **initiator** | [**PaymentRequestInitiator**](PaymentRequestInitiator.md) |  |  | null |
| **payment_method_id** | **string** |  |  | null |
| **channel_properties** | [**PaymentRequestParametersChannelProperties**](PaymentRequestParametersChannelProperties.md) |  |  | null |
| **shipping_information** | [**PaymentRequestShippingInformation**](PaymentRequestShippingInformation.md) |  |  | null |
| **items** | [**array**](PaymentRequestBasketItem.md) |  |  | null |
| **customer_id** | **string** |  |  | null |
| **customer** | **object** |  |  | null |
| **metadata** | **object** |  |  | null |


[[Back to README]](../../README.md)
