# # PaymentRequestParametersChannelProperties


```php
use Xendit\PaymentRequest\PaymentRequestParametersChannelProperties;
```
## Properties

| Name | Type | Description | Examples | Notes |
| ------------ | ------------- | ------------- | ------------- | -------------|
| **success_return_url** | **string** | URL where the end-customer is redirected if the authorization is successful | https://webhook.site/f4b755f5-4770-4a11-8c72-cc0b3cc6b882 |  [optional] |
| **failure_return_url** | **string** | URL where the end-customer is redirected if the authorization failed | https://webhook.site/f4b755f5-4770-4a11-8c72-cc0b3cc6b882 |  [optional] |
| **cancel_return_url** | **string** | URL where the end-customer is redirected if the authorization cancelled | https://webhook.site/f4b755f5-4770-4a11-8c72-cc0b3cc6b882 |  [optional] |
| **redeem_points** | **string** | REDEEM_NONE will not use any point, REDEEM_ALL will use all available points before cash balance is used. For OVO and ShopeePay tokenized payment use only. | REDEEM_NONE |  [optional] |
| **require_auth** | **bool** | Toggle used to require end-customer to input undergo OTP validation before completing a payment. OTP will always be required for transactions greater than 1,000,000 IDR. For BRI tokenized payment use only. | false |  [optional] |
| **merchant_id_tag** | **string** | Tag for a Merchant ID that you want to associate this payment with. For merchants using their own MIDs to specify which MID they want to use | null |  [optional] |
| **cardonfile_type** | **string** | Type of “credential-on-file” / “card-on-file” payment being made. Indicate that this payment uses a previously linked Payment Method for charging. | RECURRING |  [optional] |
| **cvv** | **string** | Three digit code written on the back of the card (usually called CVV/CVN). | 123 |  [optional] |


[[Back to README]](../../README.md)
