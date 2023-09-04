# # CardChannelProperties


```php
use Xendit\PaymentRequest\CardChannelProperties;
```

## Properties

Name | Type | Description | Examples | Notes
------------ | ------------- | ------------- | ------------- | ------------- 
**skip_three_d_secure** | **bool** | To indicate whether to perform 3DS during the linking phase | false |  [optional]
**success_return_url** | **string** | URL where the end-customer is redirected if the authorization is successful | https://webhook.site/f4b755f5-4770-4a11-8c72-cc0b3cc6b882 |  [optional]
**failure_return_url** | **string** | URL where the end-customer is redirected if the authorization failed | https://webhook.site/f4b755f5-4770-4a11-8c72-cc0b3cc6b882 |  [optional]
**cardonfile_type** | **string** | Type of “credential-on-file” / “card-on-file” payment being made. Indicate that this payment uses a previously linked Payment Method for charging. | RECURRING |  [optional]
**merchant_id_tag** | **string** | Tag for a Merchant ID that you want to associate this payment with. For merchants using their own MIDs to specify which MID they want to use | null |  [optional]

[[Back to README]](../../README.md)
