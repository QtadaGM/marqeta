# # CardHolderAddressModel

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**active** | **bool** | Specifies whether the address is active. | [optional] [default to true]
**address_1** | **string** | Street name and number of the address. |
**address_2** | **string** | Additional address information. | [optional]
**business_token** | **string** | Unique identifier of the business account holder. This token is required if a &#x60;user_token&#x60; is not specified. | [optional]
**city** | **string** | City of the address. |
**country** | **string** | Country of the address. |
**first_name** | **string** | First name or given name of the account holder. |
**is_default_address** | **bool** | A value of &#x60;true&#x60; specifies that this address is the default address used by the account holder&#39;s funding source. If this is the account holder&#39;s only address, it is used as the default regardless of this field&#39;s setting. | [optional] [default to false]
**last_name** | **string** | Last name or family name of the account holder. |
**phone** | **string** | Telephone number of the account holder. | [optional]
**postal_code** | **string** | Postal code of the address. | [optional]
**state** | **string** | Two-character state, province, or territorial abbreviation.  For a complete list of valid state and province abbreviations, see &lt;&lt;/core-api/kyc-verification#_valid_state_provincial_and_territorial_abbreviations, Valid state, provincial, and territorial abbreviations&gt;&gt;. |
**token** | **string** | Unique identifier of the address. If you do not include a token, the system will generate one automatically. This token is necessary for use in other API calls, so we recommend that rather than let the system generate one, you use a simple string that is easy to remember. This value cannot be updated. | [optional]
**user_token** | **string** | Unique identifier of the user account holder. This token is required if a &#x60;business_token&#x60; is not specified. | [optional]
**zip** | **string** | United States ZIP code. This field is required if &#x60;postal_code&#x60; is not specified. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
