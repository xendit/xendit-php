# # PatchCustomer


```php
use Xendit\Customer\PatchCustomer;
```

## Properties

| Name | Type | Required | Description | Examples |
|------------|:-------------:|:-------------:|-------------|:-------------:|
| **client_name** | **string** |  | Entity&#39;s name for this client | AirAsia Indonesia |
| **reference_id** | **string** |  | Merchant&#39;s reference of this end customer, eg Merchant&#39;s user&#39;s id. Must be unique. | null |
| **individual_detail** | [**IndividualDetail**](IndividualDetail.md) |  |  | null |
| **business_detail** | [**BusinessDetail**](BusinessDetail.md) |  |  | null |
| **description** | **string** |  |  | null |
| **email** | **string** |  |  | info@xendit.co |
| **mobile_number** | **string** |  |  | +6281295412345 |
| **phone_number** | **string** |  |  | +6281295412345 |
| **metadata** | **object** |  |  | null |
| **addresses** | [**array**](AddressRequest.md) |  |  | null |
| **identity_accounts** | [**array**](IdentityAccountRequest.md) |  |  | null |
| **kyc_documents** | [**array**](KYCDocumentRequest.md) |  |  | null |
| **status** | [**EndCustomerStatus**](EndCustomerStatus.md) |  |  | null |


[[Back to README]](../../README.md)
