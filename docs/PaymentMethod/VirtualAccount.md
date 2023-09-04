# # VirtualAccount


```php
use Xendit\PaymentMethod\VirtualAccount;
```

## Properties

Name | Type | Description | Examples | Notes
------------ | ------------- | ------------- | ------------- | ------------- 
**amount** | **float** |  | null |  [optional]
**min_amount** | **float** |  | null |  [optional]
**max_amount** | **float** |  | null |  [optional]
**currency** | **string** |  | null |  [optional]
**channel_code** | [**VirtualAccountChannelCode**](VirtualAccountChannelCode.md) |  | null | 
**channel_properties** | [**VirtualAccountChannelProperties**](VirtualAccountChannelProperties.md) |  | null | 
**alternative_display_types** | **string[]** | For payments in Vietnam only, alternative display requested for the virtual account | null |  [optional]
**alternative_displays** | [**array**](VirtualAccountAlternativeDisplay.md) |  | null |  [optional]

[[Back to README]](../../README.md)
