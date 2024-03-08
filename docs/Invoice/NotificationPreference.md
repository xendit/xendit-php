# # NotificationPreference
An object representing notification preferences for different invoice events.

```php
use Xendit\Invoice\NotificationPreference;
```

## Properties

| Name | Type | Required | Description | Examples |
|------------|:-------------:|:-------------:|-------------|:-------------:|
| **invoice_created** | [**array**](NotificationChannel.md) |  | Notification channels for when an invoice is created. | null |
| **invoice_reminder** | [**array**](NotificationChannel.md) |  | Notification channels for invoice reminders. | null |
| **invoice_paid** | [**array**](NotificationChannel.md) |  | Notification channels for when an invoice is paid. | null |


[[Back to README]](../../README.md)
