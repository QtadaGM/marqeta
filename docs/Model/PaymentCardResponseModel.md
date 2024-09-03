# # PaymentCardResponseModel

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**account_suffix** | **string** | Account identifier appended to the payment card number. |
**account_type** | **string** | Type of payment card account. |
**active** | **bool** | Specifies whether the account is active. | [default to false]
**business_token** | **string** | Unique identifier of the business account holder. This token is returned if a &#x60;user_token&#x60; is not specified. | [optional]
**created_time** | **\DateTime** | Date and time when the resource was created, in UTC. |
**exp_date** | **string** | Payment card expiration date. |
**is_default_account** | **bool** | If there are multiple funding sources, this field specifies which source is used by default in funding calls. If there is only one funding source, the system ignores this field and always uses that source. | [default to false]
**last_modified_time** | **\DateTime** | Date and time when the resource was last modified, in UTC. |
**token** | **string** | Unique identifier of the funding source. |
**type** | **string** | Funding source type. |
**user_token** | **string** | Unique identifier of the user account holder. This token is returned if a &#x60;business_token&#x60; is not specified. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
