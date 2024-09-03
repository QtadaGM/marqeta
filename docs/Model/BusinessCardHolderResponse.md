# # BusinessCardHolderResponse

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**account_holder_group_token** | **string** | Associates the specified account holder group with the business.  This field is returned if it exists in the resource. | [optional]
**active** | **bool** | Specifies if the business is in the &#x60;ACTIVE&#x60; state on the Marqeta platform.  This field is returned if it exists in the resource. | [optional] [default to false]
**attestation_consent** | **bool** | Indicates that the attester agrees that the information provided is correct and truthful.  This field is returned if it exists in the resource. | [optional] [default to false]
**attestation_date** | **\DateTime** | Timestamp of the attestation.  This field is returned if it exists in the resource. | [optional]
**attester_name** | **string** | Name of the attester for KYC verification.  This field is returned if it exists in the resource. | [optional]
**attester_title** | **string** | Title of the attester for KYC verification.  This field is returned if it exists in the resource. | [optional]
**authentication** | [**\OpenAPI\Client\Model\Authentication**](Authentication.md) |  | [optional]
**beneficial_owner1** | [**\OpenAPI\Client\Model\BeneficialOwnerResponse**](BeneficialOwnerResponse.md) |  | [optional]
**beneficial_owner2** | [**\OpenAPI\Client\Model\BeneficialOwnerResponse**](BeneficialOwnerResponse.md) |  | [optional]
**beneficial_owner3** | [**\OpenAPI\Client\Model\BeneficialOwnerResponse**](BeneficialOwnerResponse.md) |  | [optional]
**beneficial_owner4** | [**\OpenAPI\Client\Model\BeneficialOwnerResponse**](BeneficialOwnerResponse.md) |  | [optional]
**business_name_dba** | **string** | Fictitious business name (\&quot;Doing Business As\&quot; or DBA).  This field is returned if it exists in the resource. | [optional]
**business_name_legal** | **string** | Legal name of the business.  This field is returned if it exists in the resource. | [optional]
**business_type** | **string** | Indicates the type of business, for example B2B (business-to-business) or B2C (business-to-consumer).  This field is returned if it exists in the resource. | [optional]
**created_time** | **\DateTime** | Date and time when the business was created, in UTC. |
**date_established** | **\DateTime** | Date and time when the business was established.  This field is returned if it exists in the resource. | [optional]
**duns_number** | **string** | Data Universal Numbering System (DUNS) number of the business.  This field is returned if it exists in the resource. | [optional]
**general_business_description** | **string** | General description of the business.  This field is returned if it exists in the resource. | [optional]
**history** | **string** | History of the business.  This field is returned if it exists in the resource. | [optional]
**identifications** | [**\OpenAPI\Client\Model\IdentificationResponseModel[]**](IdentificationResponseModel.md) | One or more objects containing identifications associated with the business.  Objects are returned if they exist in the resource. | [optional]
**in_current_location_since** | **\DateTime** | Date on which the business office opened in its current location.  This field is returned if it exists in the resource. | [optional]
**incorporation** | [**\OpenAPI\Client\Model\BusinessIncorporationResponse**](BusinessIncorporationResponse.md) |  | [optional]
**international_office_locations** | **string** | Locations of the business&#39; offices outside the US.  This field is returned if it exists in the resource. | [optional]
**ip_address** | **string** | IP address of the business.  This field is returned if it exists in the resource. | [optional]
**last_modified_time** | **\DateTime** | Date and time when the business was last modified, in UTC. |
**metadata** | **array<string,string>** | Associates any additional metadata you provide with the business.  Metadata is returned if it exists in the resource. | [optional]
**notes** | **string** | Any additional information pertaining to the business.  This field is returned if it exists in the resource. | [optional]
**office_location** | [**\OpenAPI\Client\Model\AddressResponseModel**](AddressResponseModel.md) |  | [optional]
**password** | **string** | Password for the business account on the Marqeta platform.  This field is returned if it exists in the resource. | [optional]
**phone** | **string** | 10-digit telephone number of the business.  This field is returned if it exists in the resource. | [optional]
**primary_contact** | [**\OpenAPI\Client\Model\PrimaryContactInfoModel**](PrimaryContactInfoModel.md) |  | [optional]
**proprietor_is_beneficial_owner** | **bool** | Indicates that the proprietor or officer of the business is also a beneficial owner.  This field is returned if it exists in the resource. | [optional] [default to false]
**proprietor_or_officer** | [**\OpenAPI\Client\Model\BusinessProprietorResponse**](BusinessProprietorResponse.md) |  | [optional]
**status** | **string** | Specifies the state of the business on the Marqeta platform.  This field is returned if it exists in the resource. | [optional]
**taxpayer_id** | **string** | Taxpayer identifier of the business.  This field is returned if it exists in the resource. | [optional]
**token** | **string** | Unique identifier of the business resource.  This field is always returned. | [optional]
**website** | **string** | URL of the business&#39; website.  This field is returned if it exists in the resource. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
