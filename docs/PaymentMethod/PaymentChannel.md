# # PaymentChannel


```php
use Xendit\PaymentMethod\PaymentChannel;
```
## Properties

| Name | Type | Description | Examples | Notes |
| ------------ | ------------- | ------------- | ------------- | -------------|
| **channel_code** | **string** | The specific Xendit code used to identify the partner channel | BPI |  [optional] |
| **type** | **string** | The payment method type | DIRECT_DEBIT |  [optional] |
| **country** | **string** | The country where the channel operates  in ISO 3166-2 country code | PH |  [optional] |
| **channel_name** | **string** | Official parter name of the payment channel | Bank of the Philippine Islands |  [optional] |
| **channel_properties** | [**array**](ChannelProperty.md) |  | null |  [optional] |
| **logo_url** | **string** | If available, this contains a URL to the logo of the partner channel | null |  [optional] |
| **amount_limits** | [**array**](ChannelAmountLimits.md) |  | null |  [optional] |


[[Back to README]](../../README.md)
