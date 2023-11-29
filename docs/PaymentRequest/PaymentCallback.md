# # PaymentCallback
Callback for successful or failed payments made via the Payments API

```php
use Xendit\PaymentRequest\PaymentCallback;
```

## Properties

| Name | Type | Required | Description | Examples |
|------------|:-------------:|:-------------:|-------------|:-------------:|
| **event** | **string** | ☑️ | Identifies the event that triggered a notification to the merchant | null |
| **business_id** | **string** | ☑️ | business_id | null |
| **created** | **string** | ☑️ |  | null |
| **data** | [**PaymentCallbackData**](PaymentCallbackData.md) |  |  | null |


[[Back to README]](../../README.md)
