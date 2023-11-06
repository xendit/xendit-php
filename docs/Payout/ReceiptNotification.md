# # ReceiptNotification
Additional notification for completed payout

```php
use Xendit\Payout\ReceiptNotification;
```

## Properties

| Name | Type | Required | Description | Examples |
|------------|:-------------:|:-------------:|-------------|:-------------:|
| **email_to** | **string[]** |  | Valid email address to send the payout receipt | [&quot;user_to@example.com&quot;,&quot;user_to2@example.com&quot;,&quot;user_to3@example.com&quot;] |
| **email_cc** | **string[]** |  | Valid email address to cc the payout receipt | [&quot;user_cc@example.com&quot;,&quot;user_cc2@example.com&quot;] |
| **email_bcc** | **string[]** |  | Valid email address to bcc the payout receipt | [&quot;user_bcc@example.com&quot;] |


[[Back to README]](../../README.md)
