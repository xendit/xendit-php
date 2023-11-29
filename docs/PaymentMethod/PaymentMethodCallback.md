# # PaymentMethodCallback
Callback for active or expired E-Wallet or Direct Debit account linking, Virtual Accounts or QR strings

```php
use Xendit\PaymentMethod\PaymentMethodCallback;
```

## Properties

| Name | Type | Required | Description | Examples |
|------------|:-------------:|:-------------:|-------------|:-------------:|
| **event** | **string** | ☑️ | Identifies the event that triggered a notification to the merchant | null |
| **business_id** | **string** | ☑️ | business_id | null |
| **created** | **string** | ☑️ |  | null |
| **data** | [**PaymentMethod**](PaymentMethod.md) |  |  | null |


[[Back to README]](../../README.md)
