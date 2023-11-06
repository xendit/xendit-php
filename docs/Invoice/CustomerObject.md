# # CustomerObject
An object representing a customer with various properties, including addresses.

```php
use Xendit\Invoice\CustomerObject;
```

## Properties

| Name | Type | Required | Description | Examples |
|------------|:-------------:|:-------------:|-------------|:-------------:|
| **id** | **string** |  | The unique identifier for the customer. | null |
| **phone_number** | **string** |  | The customer&#39;s phone number. | null |
| **given_names** | **string** |  | The customer&#39;s given names or first names. | null |
| **surname** | **string** |  | The customer&#39;s surname or last name. | null |
| **email** | **string** |  | The customer&#39;s email address. | null |
| **mobile_number** | **string** |  | The customer&#39;s mobile phone number. | null |
| **customer_id** | **string** |  | An additional identifier for the customer. | null |
| **addresses** | [**array**](AddressObject.md) |  | An array of addresses associated with the customer. | null |


[[Back to README]](../../README.md)
