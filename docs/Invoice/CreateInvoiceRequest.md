# # CreateInvoiceRequest
An object representing for an invoice creation request.

```php
use Xendit\Invoice\CreateInvoiceRequest;
```

## Properties

| Name | Type | Required | Description | Examples |
|------------|:-------------:|:-------------:|-------------|:-------------:|
| **external_id** | **string** | ☑️ | The external ID of the invoice. | null |
| **amount** | **float** | ☑️ | The invoice amount. | null |
| **payer_email** | **string** |  | The email address of the payer. | null |
| **description** | **string** |  | A description of the payment. | null |
| **invoice_duration** | **float** |  | The duration of the invoice in seconds. | null |
| **callback_virtual_account_id** | **string** |  | The ID of the callback virtual account. | null |
| **should_send_email** | **bool** |  | Indicates whether email notifications should be sent. | null |
| **customer** | [**CustomerObject**](CustomerObject.md) |  |  | null |
| **customer_notification_preference** | [**NotificationPreference**](NotificationPreference.md) |  |  | null |
| **success_redirect_url** | **string** |  | The URL to redirect to on successful payment. | null |
| **failure_redirect_url** | **string** |  | The URL to redirect to on payment failure. | null |
| **payment_methods** | **string[]** |  | An array of available payment methods. | null |
| **mid_label** | **string** |  | The middle label. | null |
| **should_authenticate_credit_card** | **bool** |  | Indicates whether credit card authentication is required. | null |
| **currency** | **string** |  | The currency of the invoice. | null |
| **reminder_time** | **float** |  | The reminder time. | null |
| **locale** | **string** |  | The default language to display. | null |
| **reminder_time_unit** | **string** |  | The unit of the reminder time. | null |
| **items** | [**array**](InvoiceItem.md) |  | An array of items included in the invoice. | null |
| **fees** | [**array**](InvoiceFee.md) |  | An array of fees associated with the invoice. | null |
| **channel_properties** | [**ChannelProperties**](ChannelProperties.md) |  |  | null |
| **metadata** | **object** |  | A free-format JSON for additional information that you may use. Object can be up to 50 keys, with key names up to 40 characters long and values up to 500 characters long. | null |


[[Back to README]](../../README.md)
