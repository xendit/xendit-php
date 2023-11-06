# # LinkItem


```php
use Xendit\BalanceAndTransaction\LinkItem;
```

## Properties

| Name | Type | Required | Description | Examples |
|------------|:-------------:|:-------------:|-------------|:-------------:|
| **href** | **string** | ☑️ | URI of target, this will be to the next link. | /transactions?types&#x3D;PAYMENT&amp;statuses&#x3D;SUCCESS&amp;channel_categories&#x3D;EWALLET&amp;channel_categories&#x3D;RETAIL_OUTLET&amp;limit&#x3D;2&amp;after_id&#x3D;txn_a765a3f0-34c0-41ee-8686-bca11835ebdc |
| **rel** | **string** | ☑️ | The relationship between source and target. The value will be &#x60;next&#x60;. | next |
| **method** | **string** | ☑️ | The HTTP method, the value will be &#x60;GET&#x60;. | GET |


[[Back to README]](../../README.md)
