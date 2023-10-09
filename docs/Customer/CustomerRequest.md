# # CustomerRequest


```php
use Xendit\Customer\CustomerRequest;
```
## Properties

| Name | Type | Description | Examples | Notes |
| ------------ | ------------- | ------------- | ------------- | -------------|
| **client_name** | **string** | Entity&#39;s name for this client | AirAsia Indonesia |  [optional] |
| **reference_id** | **string** | Merchant&#39;s reference of this end customer, eg Merchant&#39;s user&#39;s id. Must be unique. | null |  |
| **type** | **string** |  | null |  [optional] [default to 'INDIVIDUAL'] |
| **individual_detail** | [**IndividualDetail**](IndividualDetail.md) |  | null |  [optional] |
| **business_detail** | [**BusinessDetail**](BusinessDetail.md) |  | null |  [optional] |
| **description** | **string** |  | null |  [optional] |
| **email** | **string** |  | info@xendit.co |  [optional] |
| **mobile_number** | **string** |  | +6281295412345 |  [optional] |
| **phone_number** | **string** |  | +6281295412345 |  [optional] |
| **addresses** | [**array**](AddressRequest.md) |  | null |  [optional] |
| **identity_accounts** | [**array**](IdentityAccountRequest.md) |  | null |  [optional] |
| **kyc_documents** | [**array**](KYCDocumentRequest.md) |  | null |  [optional] |
| **metadata** | **object** |  | null |  [optional] |


[[Back to README]](../../README.md)
