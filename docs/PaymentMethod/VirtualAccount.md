# # VirtualAccount
Virtual Account Payment Method Details

```php
use Xendit\PaymentMethod\VirtualAccount;
```

## Properties

| Name | Type | Required | Description | Examples |
|------------|:-------------:|:-------------:|-------------|:-------------:|
| **amount** | **float** |  |  | null |
| **min_amount** | **float** |  |  | null |
| **max_amount** | **float** |  |  | null |
| **currency** | **string** |  |  | null |
| **channel_code** | [**VirtualAccountChannelCode**](VirtualAccountChannelCode.md) | ☑️ |  | null |
| **channel_properties** | [**VirtualAccountChannelProperties**](VirtualAccountChannelProperties.md) | ☑️ |  | null |
| **alternative_display_types** | **string[]** |  | For payments in Vietnam only, alternative display requested for the virtual account | null |
| **alternative_displays** | [**array**](VirtualAccountAlternativeDisplay.md) |  |  | null |


[[Back to README]](../../README.md)
