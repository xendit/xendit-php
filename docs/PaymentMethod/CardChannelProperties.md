# # CardChannelProperties


```php
use Xendit\PaymentMethod\CardChannelProperties;
```

## Properties

Name | Type | Description | Examples | Notes
------------ | ------------- | ------------- | ------------- | ------------- 
**skip_three_d_secure** | **bool** | This field value is only being used for reusability &#x3D; MULTIPLE_USE. To indicate whether to perform 3DS during the linking phase. Defaults to false. | false |  [optional]
**success_return_url** | **string** | URL where the end-customer is redirected if the authorization is successful | https://webhook.site/f4b755f5-4770-4a11-8c72-cc0b3cc6b882 |  [optional]
**failure_return_url** | **string** | URL where the end-customer is redirected if the authorization failed | https://webhook.site/f4b755f5-4770-4a11-8c72-cc0b3cc6b882 |  [optional]
**cardonfile_type** | **string** | Type of “credential-on-file” / “card-on-file” payment being made. Indicate that this payment uses a previously linked Payment Method for charging. | RECURRING |  [optional]

[[Back to README]](../../README.md)
