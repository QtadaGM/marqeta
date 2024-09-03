# # CardHolderModel

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**account_holder_group_token** | **string** | Associates the specified account holder group with the cardholder.  Send a &#x60;GET&#x60; request to &#x60;/accountholdergroups&#x60; to retrieve account holder group tokens. | [optional]
**active** | **bool** | Specifies if the cardholder is in the &#x60;ACTIVE&#x60; state on the Marqeta platform.  *NOTE:* Do not set the value of the &#x60;user.active&#x60; field directly. Instead, use the &#x60;/usertransitions&#x60; endpoints to transition user resources between statuses. For more information on status changes, see &lt;&lt;/core-api/user-transitions#postUsertransitions, Create User Transition&gt;&gt;. | [optional] [default to true]
**address1** | **string** | Cardholder&#39;s address.  *NOTE:* Required for KYC verification (US-based cardholders only). Cannot perform KYC if set to a PO Box. | [optional]
**address2** | **string** | Additional address information for the cardholder.  *NOTE:* Cannot perform KYC if set to a PO Box. | [optional]
**birth_date** | **string** | Cardholder&#39;s date of birth.  *NOTE:* Required for KYC verification (US-based cardholders only). | [optional]
**city** | **string** | City where the cardholder resides.  *NOTE:* Required for KYC verification (US-based cardholders only). | [optional]
**company** | **string** | Company name. | [optional]
**corporate_card_holder** | **bool** | Specifies if the cardholder holds a corporate card. | [optional] [default to false]
**country** | **string** | Country where the cardholder resides.  *NOTE:* Required for KYC verification (US-based cardholders only). | [optional]
**email** | **string** | Valid email address of the cardholder.  This value must be unique among users.  *NOTE:* Required for KYC verification by certain banks (US-based cardholders only). To determine if you must provide an email address, contact your Marqeta representative. | [optional]
**first_name** | **string** | Cardholder&#39;s first name.  *NOTE:* Required for KYC verification (US-based cardholders only). | [optional]
**gender** | **string** | Gender of the cardholder. | [optional]
**honorific** | **string** | Cardholder&#39;s title or prefix: Dr., Miss, Mr., Ms., and so on. | [optional]
**id_card_expiration_date** | **string** | Expiration date of the cardholder&#39;s identification card. | [optional]
**id_card_number** | **string** | Cardholder&#39;s identification card number. | [optional]
**identifications** | [**\OpenAPI\Client\Model\IdentificationRequestModel[]**](IdentificationRequestModel.md) | One or more objects containing identifications associated with the cardholder. | [optional]
**ip_address** | **string** | Cardholder&#39;s IP address. | [optional]
**last_name** | **string** | Cardholder&#39;s last name.  *NOTE:* Required for KYC verification (US-based cardholders only). | [optional]
**metadata** | **array<string,string>** | Associates any additional metadata you provide with the cardholder. | [optional]
**middle_name** | **string** | Cardholder&#39;s middle name. | [optional]
**nationality** | **string** | Cardholder&#39;s nationality. | [optional]
**notes** | **string** | Any additional information pertaining to the cardholder. | [optional]
**parent_token** | **string** | Unique identifier of the parent user or business resource. Send a &#x60;GET&#x60; request to &#x60;/users&#x60; to retrieve user resource tokens or to &#x60;/businesses&#x60; to retrieve business resource tokens.  Required if &#x60;uses_parent_account &#x3D; true&#x60;. This user or business is configured as the parent of the current user. | [optional]
**passport_expiration_date** | **string** | Expiration date of the cardholder&#39;s passport. | [optional]
**passport_number** | **string** | Cardholder&#39;s passport number. | [optional]
**password** | **string** | Password to the cardholder&#39;s user account on the Marqeta platform.  * Must contain at least one numeral + * Must contain at least one lowercase letter + * Must contain at least one uppercase letter + * Must contain at least one of these symbols: &#x60;@ # $ % ! ^ &amp; * ( ) \\ _ + ~ &#x60; - &#x3D; [ ] { } , ; : &#39; \&quot; , . / &lt; &gt; ?&#x60; | [optional]
**phone** | **string** | Telephone number of the cardholder (including area code), prepended by the &#x60;+&#x60; symbol and the 1- to 3-digit country calling code. Do not include hyphens, spaces, or parentheses.  *NOTE:* Required for KYC verification by certain banks (US-based cardholders only). To determine if you must provide a phone number, contact your Marqeta representative. | [optional]
**postal_code** | **string** | Postal code of the cardholder&#39;s address.  *NOTE:* Required for KYC verification (US-based cardholders only). | [optional]
**ssn** | **string** | Cardholder&#39;s Social Security Number (SSN). | [optional]
**state** | **string** | State or province where the cardholder resides.  *NOTE:* &lt;&lt;/core-api/kyc-verification#_valid_state_provincial_and_territorial_abbreviations, Valid two-character abbreviation&gt;&gt; required for KYC verification (US-based cardholders only). | [optional]
**token** | **string** | Unique identifier of the cardholder. If you do not include a token, the system generates one automatically. This token is necessary for use in other API calls, so we recommend that rather than let the system generate one, you use a simple string that is easy to remember. This value cannot be updated. | [optional]
**uses_parent_account** | **bool** | Indicates whether the child shares balances with the parent (&#x60;true&#x60;), or the child&#39;s balances are independent of the parent (&#x60;false&#x60;).  If set to &#x60;true&#x60;, you must also include a &#x60;parent_token&#x60; in the request. This value cannot be updated. | [optional] [default to false]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
