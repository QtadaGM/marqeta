# # CardHolderAddressUpdateModel

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**active** | **bool** | Specifies whether the address is active. | [optional] [default to true]
**address_1** | **string** | Street name and number of the address. | [optional]
**address_2** | **string** | Additional address information. | [optional]
**city** | **string** | City of the address. | [optional]
**country** | **string** | Country of the address. | [optional]
**first_name** | **string** | First name or given name of the account holder. | [optional]
**is_default_address** | **bool** | A value of &#x60;true&#x60; specifies that this address is the default address used by the account holder&#39;s funding source. If this is the account holder&#39;s only address, it is used as the default regardless of this field&#39;s setting. | [optional] [default to false]
**last_name** | **string** | Last name or family name of the account holder. | [optional]
**phone** | **string** | Telephone number of the account holder. | [optional]
**postal_code** | **string** | Postal code of the address. | [optional]
**state** | **string** | Two-character state, province, or territorial abbreviation.  For a complete list, see &lt;&lt;/core-api/kyc-verification#_valid_state_provincial_and_territorial_abbreviations, Valid state, provincial, and territorial abbreviations&gt;&gt;. | [optional]
**zip** | **string** | United States ZIP code of the address. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
