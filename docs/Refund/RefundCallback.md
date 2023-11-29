# # RefundCallback
Callback for successful or failed Refunds made via the Payments API

```php
use Xendit\Refund\RefundCallback;
```

## Properties

| Name | Type | Required | Description | Examples |
|------------|:-------------:|:-------------:|-------------|:-------------:|
| **event** | **string** | ☑️ | Identifies the event that triggered a notification to the merchant | null |
| **business_id** | **string** | ☑️ | business_id | null |
| **created** | **string** | ☑️ |  | null |
| **data** | [**RefundCallbackData**](RefundCallbackData.md) |  |  | null |


[[Back to README]](../../README.md)
