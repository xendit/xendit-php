# # VirtualAccount
Virtual Account Payment Method Details

```php
use Xendit\PaymentRequest\VirtualAccount;
```

## Properties

| Name | Type | Required | Description | Examples |
|------------|:-------------:|:-------------:|-------------|:-------------:|
| **min_amount** | **float** |  |  | null |
| **max_amount** | **float** |  |  | null |
| **amount** | **float** |  |  | null |
| **currency** | [**PaymentRequestCurrency**](PaymentRequestCurrency.md) |  |  | null |
| **channel_code** | [**VirtualAccountChannelCode**](VirtualAccountChannelCode.md) | ☑️ |  | null |
| **channel_properties** | [**VirtualAccountChannelProperties**](VirtualAccountChannelProperties.md) | ☑️ |  | null |
| **alternative_display_types** | **string[]** |  | Alternative display requested for the virtual account | null |
| **alternative_displays** | [**array**](VirtualAccountAlternativeDisplay.md) |  |  | null |


[[Back to README]](../../README.md)
