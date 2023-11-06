# # EWalletChannelProperties
EWallet Channel Properties

```php
use Xendit\PaymentMethod\EWalletChannelProperties;
```

## Properties

| Name | Type | Required | Description | Examples |
|------------|:-------------:|:-------------:|-------------|:-------------:|
| **success_return_url** | **string** |  | URL where the end-customer is redirected if the authorization is successful | https://webhook.site/f4b755f5-4770-4a11-8c72-cc0b3cc6b882 |
| **failure_return_url** | **string** |  | URL where the end-customer is redirected if the authorization failed | https://webhook.site/f4b755f5-4770-4a11-8c72-cc0b3cc6b882 |
| **cancel_return_url** | **string** |  | URL where the end-customer is redirected if the authorization cancelled | https://webhook.site/f4b755f5-4770-4a11-8c72-cc0b3cc6b882 |
| **mobile_number** | **string** |  | Mobile number of customer in E.164 format (e.g. +628123123123). For OVO one time payment use only. | +628123123123 |
| **redeem_points** | **string** |  | REDEEM_NONE will not use any point, REDEEM_ALL will use all available points before cash balance is used. For OVO and ShopeePay tokenized payment use only. | REDEEM_NONE |
| **cashtag** | **string** |  | Available for JENIUSPAY only | $abc1234 |


[[Back to README]](../../README.md)
