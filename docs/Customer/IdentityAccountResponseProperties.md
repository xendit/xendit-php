# # IdentityAccountResponseProperties


```php
use Xendit\Customer\IdentityAccountResponseProperties;
```

## Properties

| Name | Type | Required | Description | Examples |
|------------|:-------------:|:-------------:|-------------|:-------------:|
| **account_number** | **string** |  | Unique account identifier as per the bank records. | null |
| **account_holder_name** | **string** |  | Name of account holder as per the cardless credit account. | null |
| **swift_code** | **string** |  | The SWIFT code for international payments | null |
| **account_type** | **string** |  | Free text account type, e.g., Savings, Transaction, Virtual Account. | null |
| **account_details** | **string** |  | Potentially masked account detail, for display purposes only. | null |
| **currency** | **string** |  |  | null |
| **token_id** | **string** |  | The token id returned in tokenisation | null |
| **payment_code** | **string** |  | Complete fixed payment code (including prefix) | null |
| **expires_at** | **string** |  | YYYY-MM-DD string with expiry date for the payment code | null |
| **qr_string** | **string** |  | String representation of the QR Code image | null |
| **account_id** | **string** |  | Alphanumeric string identifying this account. Usually an email address or phone number. | null |


[[Back to README]](../../README.md)
