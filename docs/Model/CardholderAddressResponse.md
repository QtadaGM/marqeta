# # CardholderAddressResponse

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**active** | **bool** | Whether the address is active. | [optional] [default to false]
**address_1** | **string** | Street address of the funding source. |
**address_2** | **string** | Additional address information for the funding source.  This field is returned if it exists in the resource. | [optional]
**business_token** | **string** | Unique identifier of the business account holder associated with the address.  This field is returned if it exists in the resource. | [optional]
**city** | **string** | City of the funding source. |
**country** | **string** | Country of the funding source. |
**created_time** | **\DateTime** | Date and time when the address was created, in UTC. |
**first_name** | **string** | First name of the account holder associated with the funding source. |
**is_default_address** | **bool** | Whether this address is the default address used by the funding source. | [optional] [default to false]
**last_modified_time** | **\DateTime** | Date and time when the address was last modified, in UTC.  This field is returned if it exists in the resource. |
**last_name** | **string** | Last name of the account holder associated with the funding source. |
**phone** | **string** | Phone number of the funding source.  This field is returned if it exists in the resource. | [optional]
**postal_code** | **string** | Postal code of the funding source. |
**state** | **string** | Two-character state, province, or territorial abbreviation.  For the complete list, see &lt;&lt;/core-api/kyc-verification#_valid_state_provincial_and_territorial_abbreviations, Valid state, provincial, and territorial abbreviations&gt;&gt;. |
**token** | **string** | Unique identifier of the &#x60;funding_source_address&#x60; object. |
**user_token** | **string** | Unique identifier of the user account holder associated with the address.  This field is returned if it exists in the resource. | [optional]
**zip** | **string** | United States ZIP code of the funding source. |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
