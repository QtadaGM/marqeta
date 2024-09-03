# # BusinessCardHolderUpdate

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**account_holder_group_token** | **string** | Associates the specified account holder group with the business. | [optional]
**active** | **bool** | Specifies if the business is in the &#x60;ACTIVE&#x60; state on the Marqeta platform. | [optional] [default to true]
**attestation_consent** | **bool** | Indicates that the attester agrees that the information provided is correct and truthful.  This field is required for KYC verification (US-based accounts only). | [optional] [default to false]
**attestation_date** | **\DateTime** | Timestamp of the attestation.  This field is required for KYC verification (US-based accounts only). | [optional]
**attester_name** | **string** | Name of the attester for KYC verification.  This field is required for KYC verification (US-based accounts only). | [optional]
**attester_title** | **string** | Title of the attester for KYC verification. | [optional]
**beneficial_owner1** | [**\OpenAPI\Client\Model\BeneficialOwnerRequest**](BeneficialOwnerRequest.md) |  | [optional]
**beneficial_owner2** | [**\OpenAPI\Client\Model\BeneficialOwnerRequest**](BeneficialOwnerRequest.md) |  | [optional]
**beneficial_owner3** | [**\OpenAPI\Client\Model\BeneficialOwnerRequest**](BeneficialOwnerRequest.md) |  | [optional]
**beneficial_owner4** | [**\OpenAPI\Client\Model\BeneficialOwnerRequest**](BeneficialOwnerRequest.md) |  | [optional]
**business_name_dba** | **string** | Fictitious business name (\&quot;Doing Business As\&quot; or DBA).  This field is required for KYC verification (US-based accounts only). If your business does not use a fictitious business name, enter your legal business name again in this field. | [optional]
**business_name_legal** | **string** | Legal name of business.  This field is required for KYC verification (US-based accounts only). | [optional]
**business_type** | **string** | Indicates the type of business, for example business-to-business (B2B) or business-to-consumer (B2C). | [optional]
**date_established** | **\DateTime** | Date when the business was established. | [optional]
**duns_number** | **string** | Data Universal Numbering System (DUNS) number of the business. | [optional]
**general_business_description** | **string** | General description of the business. | [optional]
**history** | **string** | History of the business. | [optional]
**identifications** | [**\OpenAPI\Client\Model\IdentificationRequestModel[]**](IdentificationRequestModel.md) | One or more objects containing identifications associated with the business. | [optional]
**in_current_location_since** | **\DateTime** | Date on which the business office opened in its current location. | [optional]
**incorporation** | [**\OpenAPI\Client\Model\BusinessIncorporation**](BusinessIncorporation.md) |  | [optional]
**international_office_locations** | **string** | Locations of the business&#39; offices outside the United States. | [optional]
**ip_address** | **string** | IP address of the business. | [optional]
**metadata** | **array<string,string>** | Associates any additional metadata you provide with the business. | [optional]
**notes** | **string** | Any additional information pertaining to the business. | [optional]
**office_location** | [**\OpenAPI\Client\Model\AddressRequestModel**](AddressRequestModel.md) |  | [optional]
**password** | **string** | Password for the business account on the Marqeta platform. | [optional]
**phone** | **string** | 10-digit telephone number of business. | [optional]
**primary_contact** | [**\OpenAPI\Client\Model\PrimaryContactInfoModel**](PrimaryContactInfoModel.md) |  | [optional]
**proprietor_is_beneficial_owner** | **bool** | Indicates that the proprietor or officer of the business is also a beneficial owner.  This field is required for KYC verification in the United States if the business proprietor or officer is also a beneficial owner. If the proprietor or business officer is a beneficial owner, use this field to indicate their beneficial ownership. Do not include information about the proprietor or business officer in a &#x60;beneficial_owner&#x60; object. | [optional] [default to false]
**proprietor_or_officer** | [**\OpenAPI\Client\Model\BusinessProprietor**](BusinessProprietor.md) |  | [optional]
**taxpayer_id** | **string** | Taxpayer identifier of the business. | [optional]
**token** | **string** | Unique identifier of the business.  Send a &#x60;GET&#x60; request to &#x60;/businesses&#x60; to retrieve business tokens. | [optional]
**website** | **string** | URL of the business&#39; website. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
