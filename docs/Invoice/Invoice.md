# # Invoice


```php
use Xendit\Invoice\Invoice;
```
## Properties

| Name | Type | Description | Examples | Notes |
| ------------ | ------------- | ------------- | ------------- | -------------|
| **id** | **string** | The unique identifier for the invoice. | null |  [optional] |
| **external_id** | **string** | The external identifier for the invoice. | null |  |
| **user_id** | **string** | The user ID associated with the invoice. | null |  |
| **payer_email** | **string** | The email address of the payer. | null |  [optional] |
| **description** | **string** | A description of the invoice. | null |  [optional] |
| **payment_method** | [**InvoicePaymentMethod**](InvoicePaymentMethod.md) |  | null |  [optional] |
| **status** | [**InvoiceStatus**](InvoiceStatus.md) |  | null |  |
| **merchant_name** | **string** | The name of the merchant. | null |  |
| **merchant_profile_picture_url** | **string** | The URL of the merchant&#39;s profile picture. | null |  |
| **locale** | **string** | The locale or language used for the invoice. | null |  [optional] |
| **amount** | **float** | The total amount of the invoice. | null |  |
| **expiry_date** | **\DateTime** | Representing a date and time in ISO 8601 format. | 2016-08-29T09:12:33.001Z |  |
| **invoice_url** | **string** | The URL to view the invoice. | null |  |
| **available_banks** | [**array**](Bank.md) | An array of available banks for payment. | null |  |
| **available_retail_outlets** | [**array**](RetailOutlet.md) | An array of available retail outlets for payment. | null |  |
| **available_ewallets** | [**array**](Ewallet.md) | An array of available e-wallets for payment. | null |  |
| **available_qr_codes** | [**array**](QrCode.md) | An array of available QR codes for payment. | null |  |
| **available_direct_debits** | [**array**](DirectDebit.md) | An array of available direct debit options for payment. | null |  |
| **available_paylaters** | [**array**](Paylater.md) | An array of available pay-later options for payment. | null |  |
| **should_exclude_credit_card** | **bool** | Indicates whether credit card payments should be excluded. | null |  [optional] |
| **should_send_email** | **bool** | Indicates whether email notifications should be sent. | null |  |
| **created** | **\DateTime** | Representing a date and time in ISO 8601 format. | 2016-08-29T09:12:33.001Z |  |
| **updated** | **\DateTime** | Representing a date and time in ISO 8601 format. | 2016-08-29T09:12:33.001Z |  |
| **success_redirect_url** | **string** | The URL to redirect to on successful payment. | null |  [optional] |
| **failure_redirect_url** | **string** | The URL to redirect to on payment failure. | null |  [optional] |
| **should_authenticate_credit_card** | **bool** | Indicates whether credit card authentication is required. | null |  [optional] |
| **currency** | [**InvoiceCurrency**](InvoiceCurrency.md) |  | null |  [optional] |
| **items** | [**array**](InvoiceItem.md) | An array of items included in the invoice. | null |  [optional] |
| **fixed_va** | **bool** | Indicates whether the virtual account is fixed. | null |  [optional] |
| **reminder_date** | **\DateTime** | Representing a date and time in ISO 8601 format. | 2016-08-29T09:12:33.001Z |  [optional] |
| **customer** | [**CustomerObject**](CustomerObject.md) |  | null |  [optional] |
| **customer_notification_preference** | [**NotificationPreference**](NotificationPreference.md) |  | null |  [optional] |
| **fees** | [**array**](InvoiceFee.md) | An array of fees associated with the invoice. | null |  [optional] |


[[Back to README]](../../README.md)
