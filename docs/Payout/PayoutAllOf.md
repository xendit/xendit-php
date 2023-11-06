# # PayoutAllOf


```php
use Xendit\Payout\PayoutAllOf;
```

## Properties

| Name | Type | Required | Description | Examples |
|------------|:-------------:|:-------------:|-------------|:-------------:|
| **id** | **string** | ☑️ | Xendit-generated unique identifier for each payout | disb_4203234e-48f5-11eb-b378-0242ac130002 |
| **created** | **\DateTime** | ☑️ | The time payout was created on Xendit&#39;s system, in ISO 8601 format | 2019-11-01T12:34:56.007Z |
| **updated** | **\DateTime** | ☑️ | The time payout was last updated on Xendit&#39;s system, in ISO 8601 format | 2019-11-01T12:34:56.007Z |
| **business_id** | **string** | ☑️ | Xendit Business ID | 4203234e-48f5-11eb-b378-0242ac130002 |
| **status** | **string** | ☑️ | Status of payout | ACCEPTED |
| **failure_code** | **string** |  | If the Payout failed, we include a failure code for more details on the failure. | null |
| **estimated_arrival_time** | **\DateTime** |  | Our estimated time on to when your payout is reflected to the destination account | null |


[[Back to README]](../../README.md)
