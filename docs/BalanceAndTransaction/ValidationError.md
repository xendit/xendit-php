# # ValidationError


```php
use Xendit\BalanceAndTransaction\ValidationError;
```

## Properties

| Name | Type | Required | Description | Examples |
|------------|:-------------:|:-------------:|-------------|:-------------:|
| **status_code** | **float** | ☑️ |  | 400 |
| **error** | **string** | ☑️ |  | API_VALIDATION_ERROR |
| **message** | **string** | ☑️ |  | \&quot;from\&quot; is required. \&quot;status\&quot; is required. \&quot;currency\&quot; is required |
| **validation** | **object** |  |  | {&quot;source&quot;:&quot;query&quot;,&quot;keys&quot;:[&quot;from&quot;,&quot;status&quot;,&quot;currency&quot;]} |


[[Back to README]](../../README.md)
