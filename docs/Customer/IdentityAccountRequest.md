# # IdentityAccountRequest


```php
use Xendit\Customer\IdentityAccountRequest;
```
## Properties

| Name | Type | Description | Examples | Notes |
| ------------ | ------------- | ------------- | ------------- | -------------|
| **type** | [**IdentityAccountType**](IdentityAccountType.md) |  | null |  [optional] |
| **company** | **string** | The issuing institution associated with the account (e.g., OCBC, GOPAY, 7-11). If adding financial accounts that Xendit supports, we recommend you use the channel_name found at https://xendit.github.io/apireference/#payment-channels for this field | null |  [optional] |
| **description** | **string** | Free text description of this account | null |  [optional] |
| **country** | **string** | ISO3166-2 country code | ID |  [optional] |
| **properties** | [**IdentityAccountRequestProperties**](IdentityAccountRequestProperties.md) |  | null |  [optional] |


[[Back to README]](../../README.md)
