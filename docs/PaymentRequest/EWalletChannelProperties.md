# # EWalletChannelProperties
Ewallet Channel Properties

```php
use Xendit\PaymentRequest\EWalletChannelProperties;
```

## Properties

| Name | Type | Required | Description | Examples |
|------------|:-------------:|:-------------:|-------------|:-------------:|
| **success_return_url** | **string** |  | URL where the end-customer is redirected if the authorization is successful | https://webhook.site/f4b755f5-4770-4a11-8c72-cc0b3cc6b882 |
| **failure_return_url** | **string** |  | URL where the end-customer is redirected if the authorization failed | https://webhook.site/f4b755f5-4770-4a11-8c72-cc0b3cc6b882 |
| **cancel_return_url** | **string** |  | URL where the end-customer is redirected if the authorization cancelled | https://webhook.site/f4b755f5-4770-4a11-8c72-cc0b3cc6b882 |
| **redeem_points** | **string** |  | REDEEM_NONE will not use any point, REDEEM_ALL will use all available points before cash balance is used. For OVO and ShopeePay tokenized payment use only. | REDEEM_NONE |
| **mobile_number** | **string** |  |  | null |
| **cashtag** | **string** |  |  | null |


[[Back to README]](../../README.md)
