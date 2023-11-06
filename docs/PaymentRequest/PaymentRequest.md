# # PaymentRequest


```php
use Xendit\PaymentRequest\PaymentRequest;
```

## Properties

| Name | Type | Required | Description | Examples |
|------------|:-------------:|:-------------:|-------------|:-------------:|
| **id** | **string** | ☑️ |  | null |
| **created** | **string** | ☑️ |  | null |
| **updated** | **string** | ☑️ |  | null |
| **reference_id** | **string** | ☑️ |  | null |
| **business_id** | **string** | ☑️ |  | null |
| **customer_id** | **string** |  |  | null |
| **customer** | **object** |  |  | null |
| **amount** | **float** |  |  | null |
| **min_amount** | **float** |  |  | null |
| **max_amount** | **float** |  |  | null |
| **country** | [**PaymentRequestCountry**](PaymentRequestCountry.md) |  |  | null |
| **currency** | [**PaymentRequestCurrency**](PaymentRequestCurrency.md) | ☑️ |  | null |
| **payment_method** | [**PaymentMethod**](PaymentMethod.md) | ☑️ |  | null |
| **description** | **string** |  |  | null |
| **failure_code** | **string** |  |  | null |
| **capture_method** | [**PaymentRequestCaptureMethod**](PaymentRequestCaptureMethod.md) |  |  | null |
| **initiator** | [**PaymentRequestInitiator**](PaymentRequestInitiator.md) |  |  | null |
| **card_verification_results** | [**PaymentRequestCardVerificationResults**](PaymentRequestCardVerificationResults.md) |  |  | null |
| **status** | [**PaymentRequestStatus**](PaymentRequestStatus.md) | ☑️ |  | null |
| **actions** | [**array**](PaymentRequestAction.md) |  |  | null |
| **metadata** | **object** |  |  | null |
| **shipping_information** | [**PaymentRequestShippingInformation**](PaymentRequestShippingInformation.md) |  |  | null |
| **items** | [**array**](PaymentRequestBasketItem.md) |  |  | null |


[[Back to README]](../../README.md)
