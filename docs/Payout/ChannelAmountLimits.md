# # ChannelAmountLimits
Supported amount ranges for payouts to this channel

```php
use Xendit\Payout\ChannelAmountLimits;
```

## Properties

| Name | Type | Required | Description | Examples |
|------------|:-------------:|:-------------:|-------------|:-------------:|
| **minimum** | **float** | ☑️ | Lowest amount supported for a payout to this channel | 1 |
| **maximum** | **float** | ☑️ | Highest amount supported for a payout to this channel | 50000000 |
| **minimum_increment** | **float** | ☑️ | Supported increments | 1 |


[[Back to README]](../../README.md)
