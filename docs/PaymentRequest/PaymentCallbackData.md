# # PaymentCallbackData
Represents the actual funds transaction/attempt made to a payment method

```php
use Xendit\PaymentRequest\PaymentCallbackData;
```

## Properties

| Name | Type | Required | Description | Examples |
|------------|:-------------:|:-------------:|-------------|:-------------:|
| **id** | **string** | ☑️ |  | null |
| **payment_request_id** | **string** |  |  | null |
| **reference_id** | **string** | ☑️ |  | null |
| **customer_id** | **string** |  |  | null |
| **currency** | **string** | ☑️ |  | null |
| **amount** | **float** | ☑️ |  | null |
| **country** | **string** | ☑️ |  | null |
| **status** | **string** | ☑️ |  | null |
| **payment_method** | [**PaymentMethod**](PaymentMethod.md) | ☑️ |  | null |
| **channel_properties** | [**PaymentRequestChannelProperties**](PaymentRequestChannelProperties.md) |  |  | null |
| **payment_detail** | **object** |  |  | null |
| **failure_code** | **object** |  |  | null |
| **created** | **string** | ☑️ |  | null |
| **updated** | **string** | ☑️ |  | null |
| **metadata** | **object** |  |  | null |


[[Back to README]](../../README.md)
