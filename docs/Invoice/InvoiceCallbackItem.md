# # InvoiceCallbackItem
An object representing an item within an invoice.

```php
use Xendit\Invoice\InvoiceCallbackItem;
```

## Properties

| Name | Type | Required | Description | Examples |
|------------|:-------------:|:-------------:|-------------|:-------------:|
| **name** | **string** | ☑️ | The name of the item. | null |
| **price** | **float** | ☑️ | The price of the item. | null |
| **quantity** | **float** | ☑️ | The quantity of the item. Must be greater than or equal to 0. | null |
| **url** | **string** |  | The URL associated with the item. | null |
| **category** | **string** |  | The category of the item. | null |


[[Back to README]](../../README.md)
