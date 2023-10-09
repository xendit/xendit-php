# # IdentityAccountRequestProperties


```php
use Xendit\Customer\IdentityAccountRequestProperties;
```
## Properties

| Name | Type | Description | Examples | Notes |
| ------------ | ------------- | ------------- | ------------- | -------------|
| **account_number** | **string** | Unique account identifier as per the bank records. | null |  [optional] |
| **account_holder_name** | **string** | Name of account holder as per the cardless credit account. | null |  [optional] |
| **swift_code** | **string** | The SWIFT code for international payments | null |  [optional] |
| **account_type** | **string** | Free text account type, e.g., Savings, Transaction, Virtual Account. | null |  [optional] |
| **account_details** | **string** | Potentially masked account detail, for display purposes only. | null |  [optional] |
| **currency** | **string** |  | null |  [optional] |
| **token_id** | **string** | The token id returned in tokenisation | null |  [optional] |
| **account_id** | **string** | Alphanumeric string identifying this account. Usually an email address or phone number. | null |  [optional] |
| **payment_code** | **string** | Complete fixed payment code (including prefix) | null |  [optional] |
| **expires_at** | **string** | YYYY-MM-DD string with expiry date for the payment code | null |  [optional] |
| **qr_string** | **string** | String representation of the QR Code image | null |  [optional] |


[[Back to README]](../../README.md)
