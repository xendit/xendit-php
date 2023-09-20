# # Error


```php
use Xendit\Payout\Error;
```
## Properties

| Name | Type | Description | Examples | Notes |
| ------------ | ------------- | ------------- | ------------- | -------------|
| **error_code** | **string** | Specific error encountered when processing the request, can refer to the API documentation on proper handling of each available error code https://developers.xendit.co/api-reference/#payouts | SERVER_ERROR |  |
| **message** | **string** | Human readable error message | null |  |
| **errors** | [**array**](ErrorErrorsInner.md) |  | null |  [optional] |


[[Back to README]](../../README.md)
