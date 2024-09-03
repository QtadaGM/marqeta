# # UserCardHolderResponse

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**account_holder_group_token** | **string** | Associates the specified account holder group with the cardholder. | [optional]
**active** | **bool** | Specifies if the cardholder is in the &#x60;ACTIVE&#x60; state on the Marqeta platform. | [optional] [default to false]
**address1** | **string** | Cardholder&#39;s address. | [optional]
**address2** | **string** | Additional address information for the cardholder. | [optional]
**authentication** | [**\OpenAPI\Client\Model\Authentication**](Authentication.md) |  | [optional]
**birth_date** | **string** | Cardholder&#39;s date of birth. | [optional]
**business_token** | **string** | Unique identifier of the business resource. | [optional]
**city** | **string** | City where the cardholder resides. | [optional]
**company** | **string** | Company name. | [optional]
**corporate_card_holder** | **bool** | Specifies if the cardholder holds a corporate card. | [optional] [default to false]
**country** | **string** | Country where the cardholder resides. | [optional]
**created_time** | **\DateTime** | Date and time when the resource was created, in UTC. |
**email** | **string** | Valid email address of the cardholder. | [optional]
**first_name** | **string** | Cardholder&#39;s first name. | [optional]
**gender** | **string** | Gender of the cardholder. | [optional]
**honorific** | **string** | Cardholder&#39;s title or prefix: Dr., Miss, Mr., Ms., and so on. | [optional]
**id_card_expiration_date** | **string** | Expiration date of the cardholder&#39;s identification. | [optional] [readonly]
**id_card_number** | **string** | Cardholder&#39;s identification card number. | [optional]
**identifications** | [**\OpenAPI\Client\Model\IdentificationResponseModel[]**](IdentificationResponseModel.md) | One or more objects containing identifications associated with the cardholder. | [optional]
**ip_address** | **string** | Cardholder&#39;s IP address. | [optional]
**last_modified_time** | **\DateTime** | Date and time when the resource was last updated, in UTC. |
**last_name** | **string** | Cardholder&#39;s last name. | [optional]
**metadata** | **array<string,string>** | Associates any additional metadata you provide with the cardholder. | [optional]
**middle_name** | **string** | Cardholder&#39;s middle name. | [optional]
**nationality** | **string** | Cardholder&#39;s nationality. | [optional]
**notes** | **string** | Any additional information pertaining to the cardholder. | [optional]
**parent_token** | **string** | Unique identifier of the parent user or business resource. | [optional]
**passport_expiration_date** | **string** | Expiration date of the cardholder&#39;s passport. | [optional] [readonly]
**passport_number** | **string** | Cardholder&#39;s passport number. | [optional]
**password** | **string** | Password to the cardholder&#39;s user account on the Marqeta platform. | [optional]
**phone** | **string** | Cardholder&#39;s telephone number. | [optional]
**postal_code** | **string** | Postal code of the cardholder&#39;s address. | [optional]
**ssn** | **string** | Cardholder&#39;s Social Security Number (SSN). | [optional]
**state** | **string** | State or province where the cardholder resides. | [optional]
**status** | **string** | Specifies the status of the cardholder on the Marqeta platform. | [optional]
**token** | **string** | Unique identifier of the cardholder. | [optional]
**uses_parent_account** | **bool** | Indicates whether the child shares balances with the parent (&#x60;true&#x60;), or the child&#39;s balances are independent of the parent (&#x60;false&#x60;). | [optional] [default to false]
**zip** | **string** | United States ZIP code of the cardholder&#39;s address. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
