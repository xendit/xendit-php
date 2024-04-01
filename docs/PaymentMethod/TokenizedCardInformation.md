# # TokenizedCardInformation
Tokenized Card Information

```php
use Xendit\PaymentMethod\TokenizedCardInformation;
```

## Properties

| Name | Type | Required | Description | Examples |
|------------|:-------------:|:-------------:|-------------|:-------------:|
| **token_id** | **string** |  |  | null |
| **masked_card_number** | **string** |  | 1st 6 and last 4 digits of the card | null |
| **cardholder_name** | **string** |  | Cardholder name is optional but recommended for 3DS 2 / AVS verification | null |
| **expiry_month** | **string** |  | Card expiry month in MM format | null |
| **expiry_year** | **string** |  | Card expiry month in YY format | null |
| **fingerprint** | **string** |  | Xendit-generated identifier for the unique card number. Multiple payment method objects can be created for the same account - e.g. if the user first creates a one-time payment request, and then later on creates a multiple-use payment method using the same account.   The fingerprint helps to identify the unique account being used. | null |
| **type** | **string** |  | Whether the card is a credit or debit card | null |
| **network** | **string** |  | Card network - VISA, MASTERCARD, JCB, AMEX, DISCOVER, BCA | null |
| **country** | **string** |  | Country where the card was issued ISO 3166-1 Alpha-2 | null |
| **issuer** | **string** |  | Issuer of the card, most often an issuing bank For example, “BCA”, “MANDIRI” | null |
| **card_number** | **string** |  |  | null |
| **one_time_token** | **string** |  |  | null |


[[Back to README]](../../README.md)
