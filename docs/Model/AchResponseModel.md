# # AchResponseModel

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**account_suffix** | **string** | ACH account identifier appended to the bank account number. |
**account_type** | **string** | Type of account. |
**active** | **bool** | Specifies whether the account is active. | [default to false]
**bank_name** | **string** | Name of the bank holding the account. This field is returned if it exists in the resource. | [optional]
**business_token** | **string** | Unique identifier of the business account holder. This token is returned if a &#x60;user_token&#x60; is not specified. | [optional]
**created_time** | **\DateTime** | Date and time when the resource was created, in UTC. |
**date_sent_for_verification** | **\DateTime** | Date and time in UTC when either the request for account validation was sent to the third-party partner, or when the funding source was verified by microdeposits.  This field is returned if it exists in the resource. | [optional]
**date_verified** | **\DateTime** | Date and time when the account was verified, in UTC.  This field is returned if it exists in the resource. | [optional]
**is_default_account** | **bool** | If there are multiple funding sources, this field specifies which source is used by default in funding calls. If there is only one funding source, the system ignores this field and always uses that source.  This field is returned if it exists in the resource. | [optional] [default to false]
**last_modified_time** | **\DateTime** | Date and time when the resource was last modified, in UTC. |
**name_on_account** | **string** | Name on the ACH account. |
**partner** | **string** | Name of the partner who validated the account holder. Returned when a third-party partner was used for account validation. | [optional]
**partner_account_link_reference_token** | **string** | Supplied by the account validation partner, this value is a reference to the account holder&#39;s details, such as the account number and routing number. Returned when a third-party partner was used for account validation. | [optional]
**token** | **string** | Unique identifier of the funding source. |
**user_token** | **string** | Unique identifier of the user account holder. This token is returned if a &#x60;business_token&#x60; is not specified. | [optional]
**verification_notes** | **string** | Free-form text field for holding notes about verification. This field is returned only if &#x60;verification_override &#x3D; true&#x60;. | [optional]
**verification_override** | **bool** | Allows the ACH funding source to be used regardless of its verification status. This field is returned if it exists in the resource.  *NOTE:* When using &#x60;PLAID&#x60; to validate a funding source, this field is always set to &#x60;true&#x60;. | [optional] [default to false]
**verification_status** | **string** | Account verification status. This field is returned if it exists in the resource. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
