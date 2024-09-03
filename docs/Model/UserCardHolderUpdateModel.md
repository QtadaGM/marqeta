# # UserCardHolderUpdateModel

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**account_holder_group_token** | **string** | Associates the specified account holder group with the cardholder. Send a &#x60;GET&#x60; request to &#x60;/accountholdergroups&#x60; to retrieve account holder group tokens. | [optional]
**address1** | **string** | Cardholder address.  *NOTE:* Required for KYC verification (US-based cardholders only). Cannot perform KYC if set to a PO Box. | [optional]
**address2** | **string** | Additional address information for the cardholder.  *NOTE:* Cannot perform KYC if set to a PO Box. | [optional]
**birth_date** | **string** | Cardholder date of birth.  *NOTE:* Required for KYC verification (US-based cardholders only). | [optional]
**city** | **string** | The city that corresponds to the address.  *NOTE:* Required for KYC verification (US-based cardholders only). | [optional]
**company** | **string** | Company name. | [optional]
**corporate_card_holder** | **bool** | Specifies if the cardholder holds a corporate card. | [optional] [default to false]
**country** | **string** | Country in which the cardholder resides.  *NOTE:* Required for KYC verification (US-based cardholders only). | [optional]
**email** | **string** | Valid email address for the cardholder.  This value must be unique among cardholders. | [optional]
**first_name** | **string** | Cardholder first name.  *NOTE:* Required for KYC verification (US-based cardholders only). | [optional]
**gender** | **string** | Gender of the cardholder. | [optional]
**honorific** | **string** | Cardholder title or prefix: Ms., Mr., Miss, Mrs. | [optional]
**id_card_expiration_date** | **string** | Expiration date of the cardholder&#39;s identification card. | [optional]
**id_card_number** | **string** | Cardholder&#39;s identification card number. | [optional]
**identifications** | [**\OpenAPI\Client\Model\IdentificationRequestModel[]**](IdentificationRequestModel.md) | One or more objects containing identifications associated with the cardholder. | [optional]
**ip_address** | **string** | Cardholder IP address. | [optional]
**last_name** | **string** | Cardholder last name.  *NOTE:* Required for KYC verification (US-based cardholders only). | [optional]
**metadata** | **array<string,string>** | Associates any additional metadata you provide with the cardholder. | [optional]
**middle_name** | **string** | Cardholder middle name. | [optional]
**nationality** | **string** | Cardholder nationality. | [optional]
**notes** | **string** | Any additional information pertaining to the cardholder. | [optional]
**parent_token** | **string** | Unique identifier of an existing user or business resource.  Required if &#x60;uses_parent_account &#x3D; true&#x60;. This account holder is configured as the parent of the current cardholder.  To unlink a child account from a parent account, update this field to a null value. | [optional]
**passport_expiration_date** | **string** | Expiration date of the cardholder&#39;s passport. | [optional]
**passport_number** | **string** | Cardholder passport number. | [optional]
**password** | **string** | Cardholder&#39;s user account password on the Marqeta platform. | [optional]
**phone** | **string** | Cardholder telephone number (including area code), prepended by the &#x60;+&#x60; symbol and the 1- to 3-digit country calling code. Do not include hyphens, spaces, or parentheses. | [optional]
**postal_code** | **string** | Postal code of the cardholder&#39;s address.  *NOTE:* Required for KYC verification (US-based cardholders only). | [optional]
**ssn** | **string** | Cardholder&#39;s Social Security Number (SSN). | [optional]
**state** | **string** | State where the cardholder resides.  *NOTE:* &lt;&lt;/core-api/kyc-verification#_valid_state_provincial_and_territorial_abbreviations, Valid two-character abbreviation&gt;&gt; required for KYC verification (US-based cardholders only). | [optional]
**token** | **string** | Unique identifier of the cardholder. | [optional]
**uses_parent_account** | **bool** | Indicates whether the child shares balances with the parent (&#x60;true&#x60;), or the child&#39;s balances are independent of the parent (&#x60;false&#x60;).  If set to &#x60;true&#x60;, you must also include a &#x60;parent_token&#x60; in the request. This value cannot be updated. | [optional] [default to false]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
