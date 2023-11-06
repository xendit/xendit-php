# # Error


```php
use Xendit\Payout\Error;
```

## Properties

| Name | Type | Required | Description | Examples |
|------------|:-------------:|:-------------:|-------------|:-------------:|
| **error_code** | **string** | ☑️ | Specific error encountered when processing the request, can refer to the API documentation on proper handling of each available error code https://developers.xendit.co/api-reference/#payouts | SERVER_ERROR |
| **message** | **string** | ☑️ | Human readable error message | null |
| **errors** | [**array**](ErrorErrorsInner.md) |  |  | null |


[[Back to README]](../../README.md)
