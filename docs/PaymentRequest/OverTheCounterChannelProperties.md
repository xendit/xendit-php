# # OverTheCounterChannelProperties
Over The Counter Channel Properties

```php
use Xendit\PaymentRequest\OverTheCounterChannelProperties;
```

## Properties

| Name | Type | Required | Description | Examples |
|------------|:-------------:|:-------------:|-------------|:-------------:|
| **payment_code** | **string** |  | The payment code that you want to assign, e.g 12345. If you do not send one, one will be picked at random. | 12345 |
| **customer_name** | **string** | ☑️ | Name of customer. | Rika Sutanto |
| **expires_at** | **\DateTime** |  | The time when the payment code will be expired. The minimum is 2 hours and the maximum is 9 days for 7ELEVEN. Default expired date will be 2 days from payment code generated. | 2022-01-01T00:00Z |


[[Back to README]](../../README.md)
