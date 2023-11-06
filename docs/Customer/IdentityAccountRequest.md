# # IdentityAccountRequest


```php
use Xendit\Customer\IdentityAccountRequest;
```

## Properties

| Name | Type | Required | Description | Examples |
|------------|:-------------:|:-------------:|-------------|:-------------:|
| **type** | [**IdentityAccountType**](IdentityAccountType.md) |  |  | null |
| **company** | **string** |  | The issuing institution associated with the account (e.g., OCBC, GOPAY, 7-11). If adding financial accounts that Xendit supports, we recommend you use the channel_name found at https://xendit.github.io/apireference/#payment-channels for this field | null |
| **description** | **string** |  | Free text description of this account | null |
| **country** | **string** |  | ISO3166-2 country code | ID |
| **properties** | [**IdentityAccountRequestProperties**](IdentityAccountRequestProperties.md) |  |  | null |


[[Back to README]](../../README.md)
