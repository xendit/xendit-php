# # CreatePayoutRequest
Information needed by Xendit to send money to the destination channel provided

```php
use Xendit\Payout\CreatePayoutRequest;
```

## Properties

| Name | Type | Required | Description | Examples |
|------------|:-------------:|:-------------:|-------------|:-------------:|
| **reference_id** | **string** | ☑️ | A client defined payout identifier | DISB-001 |
| **channel_code** | **string** | ☑️ | Channel code of selected destination bank or e-wallet | PH_BDO |
| **channel_properties** | [**DigitalPayoutChannelProperties**](DigitalPayoutChannelProperties.md) | ☑️ |  | null |
| **amount** | **float** | ☑️ | Amount to be sent to the destination account and should be a multiple of the minimum increment for the selected channel | 15000.05 |
| **description** | **string** |  | Description to send with the payout, the recipient may see this e.g., in their bank statement (if supported) or in email receipts we send on your behalf | Cashback 2020 |
| **currency** | **string** | ☑️ | Currency of the destination channel using ISO-4217 currency code | PHP |
| **receipt_notification** | [**ReceiptNotification**](ReceiptNotification.md) |  |  | null |
| **metadata** | **object** |  | Object of additional information you may use | {&quot;external_party&quot;:&quot;xendit&quot;} |


[[Back to README]](../../README.md)
