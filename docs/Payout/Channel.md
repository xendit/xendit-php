# # Channel
Channel information where you can send the money to

```php
use Xendit\Payout\Channel;
```

## Properties

| Name | Type | Required | Description | Examples |
|------------|:-------------:|:-------------:|-------------|:-------------:|
| **channel_code** | **string** | ☑️ | Destination channel to send the money to, prefixed by ISO-3166 country code | ID_MANDIRI |
| **channel_category** | [**ChannelCategory**](ChannelCategory.md) | ☑️ |  | null |
| **currency** | **string** | ☑️ | Currency of the destination channel using ISO-4217 currency code | IDR |
| **channel_name** | **string** | ☑️ | Name of the destination channel | Bank Mandiri |
| **amount_limits** | [**ChannelAmountLimits**](ChannelAmountLimits.md) | ☑️ |  | null |


[[Back to README]](../../README.md)
