# # ForbiddenError
An error object used to indicate a 403 Forbidden response related to invoice operations.

```php
use Xendit\Invoice\ForbiddenError;
```

## Properties

| Name | Type | Required | Description | Examples |
|------------|:-------------:|:-------------:|-------------|:-------------:|
| **error_code** | **string** | ☑️ | The specific error code indicating that access to the invoice operation is suspended. | null |
| **message** | **string** | ☑️ | A human-readable error message providing additional context about the 403 Forbidden response. | null |


[[Back to README]](../../README.md)
