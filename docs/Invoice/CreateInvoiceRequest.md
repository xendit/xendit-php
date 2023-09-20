# # CreateInvoiceRequest


```php
use Xendit\Invoice\CreateInvoiceRequest;
```
## Properties

| Name | Type | Description | Examples | Notes |
| ------------ | ------------- | ------------- | ------------- | -------------|
| **external_id** | **string** | The external ID of the invoice. | null |  |
| **amount** | **float** | The invoice amount. | null |  |
| **payer_email** | **string** | The email address of the payer. | null |  [optional] |
| **description** | **string** | A description of the payment. | null |  [optional] |
| **invoice_duration** | **string** | The duration of the invoice. | null |  [optional] |
| **callback_virtual_account_id** | **string** | The ID of the callback virtual account. | null |  [optional] |
| **should_send_email** | **bool** | Indicates whether email notifications should be sent. | null |  [optional] |
| **customer** | [**CustomerObject**](CustomerObject.md) |  | null |  [optional] |
| **customer_notification_preference** | [**NotificationPreference**](NotificationPreference.md) |  | null |  [optional] |
| **success_redirect_url** | **string** | The URL to redirect to on successful payment. | null |  [optional] |
| **failure_redirect_url** | **string** | The URL to redirect to on payment failure. | null |  [optional] |
| **payment_methods** | **string[]** | An array of available payment methods. | null |  [optional] |
| **mid_label** | **string** | The middle label. | null |  [optional] |
| **should_authenticate_credit_card** | **bool** | Indicates whether credit card authentication is required. | null |  [optional] |
| **currency** | **string** | The currency of the invoice. | null |  [optional] |
| **reminder_time** | **float** | The reminder time. | null |  [optional] |
| **local** | **string** | The local. | null |  [optional] |
| **reminder_time_unit** | **string** | The unit of the reminder time. | null |  [optional] |
| **items** | [**array**](InvoiceItem.md) | An array of items included in the invoice. | null |  [optional] |
| **fees** | [**array**](InvoiceFee.md) | An array of fees associated with the invoice. | null |  [optional] |


[[Back to README]](../../README.md)
