# # AvsControlOptions

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**decline_on_address_number_mismatch** | **bool** | Set to &#x60;true&#x60; to decline account verification or authorization messages whose address number does not match the address number on file.  Set to &#x60;false&#x60; to not decline account verification or authorization messages whose address number does not match the address number on file.  This field is functional only if &#x60;validate &#x3D; true&#x60;. | [optional] [default to false]
**decline_on_postal_code_mismatch** | **bool** | Set to &#x60;true&#x60; to decline account verification or authorization messages whose postal code does not match the postal code on file.  Set to &#x60;false&#x60; to not decline account verification or authorization messages whose postal code does not match the postal code on file.  This field is functional only if &#x60;validate &#x3D; true&#x60;. | [optional] [default to true]
**validate** | **bool** | Set to &#x60;true&#x60; to require validation of account verification or authorization messages.  Set to &#x60;false&#x60; to forgo validation and approve all account verification and authorization messages. | [optional] [default to true]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
