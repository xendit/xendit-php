# # Payout


```php
use Xendit\Payout\Payout;
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
| **id** | **string** | ☑️ | Xendit-generated unique identifier for each payout | disb_4203234e-48f5-11eb-b378-0242ac130002 |
| **created** | **\DateTime** | ☑️ | The time payout was created on Xendit&#39;s system, in ISO 8601 format | 2019-11-01T12:34:56.007Z |
| **updated** | **\DateTime** | ☑️ | The time payout was last updated on Xendit&#39;s system, in ISO 8601 format | 2019-11-01T12:34:56.007Z |
| **business_id** | **string** | ☑️ | Xendit Business ID | 4203234e-48f5-11eb-b378-0242ac130002 |
| **status** | **string** | ☑️ | Status of payout | ACCEPTED |
| **failure_code** | **string** |  | If the Payout failed, we include a failure code for more details on the failure. | null |
| **estimated_arrival_time** | **\DateTime** |  | Our estimated time on to when your payout is reflected to the destination account | null |


[[Back to README]](../../README.md)
