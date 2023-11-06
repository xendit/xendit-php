# # Customer


```php
use Xendit\Customer\Customer;
```

## Properties

| Name | Type | Required | Description | Examples |
|------------|:-------------:|:-------------:|-------------|:-------------:|
| **type** | **string** | ☑️ |  | null |
| **reference_id** | **string** | ☑️ | Merchant&#39;s reference of this end customer, eg Merchant&#39;s user&#39;s id. Must be unique. | null |
| **individual_detail** | [**IndividualDetail**](IndividualDetail.md) | ☑️ |  | null |
| **business_detail** | [**BusinessDetail**](BusinessDetail.md) | ☑️ |  | null |
| **description** | **string** | ☑️ |  | null |
| **email** | **string** | ☑️ |  | info@xendit.co |
| **mobile_number** | **string** | ☑️ |  | +6281295412345 |
| **phone_number** | **string** | ☑️ |  | +6281295412345 |
| **addresses** | [**array**](Address.md) | ☑️ |  | null |
| **identity_accounts** | [**array**](IdentityAccountResponse.md) | ☑️ |  | null |
| **kyc_documents** | [**array**](KYCDocumentResponse.md) | ☑️ |  | null |
| **metadata** | **object** | ☑️ |  | null |
| **status** | [**EndCustomerStatus**](EndCustomerStatus.md) |  |  | null |
| **id** | **string** | ☑️ |  | null |
| **created** | **\DateTime** | ☑️ |  | 2016-08-29T09:12:33.001Z |
| **updated** | **\DateTime** | ☑️ |  | 2016-08-29T09:12:33.001Z |


[[Back to README]](../../README.md)
