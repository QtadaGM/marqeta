# # AchPartnerRequestModel

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**business_token** | **string** | Required if &#39;user_token&#39; is null | [optional]
**idempotent_hash** | **string** |  | [optional]
**is_default_account** | **bool** | If there are multiple funding sources, this field specifies which source is used by default in funding calls. If there is only one funding source, the system ignores this field and always uses that source. | [optional] [default to false]
**partner** | **string** | Name of the partner who validated the account holder. Returned when a third-party partner was used for account validation. |
**partner_account_link_reference_token** | **string** | Supplied by the account validation partner, this value is a reference to the account holder&#39;s details, such as the account number and routing number. Returned when a third-party partner was used for account validation. |
**token** | **string** | Unique identifier of the funding source. If you do not include a token, the system will generate one automatically. This token is necessary for use in other calls, so we recommend that rather than let the system generate one, you use a simple string that is easy to remember. This value cannot be updated. | [optional]
**user_token** | **string** | Supplied by the account validation partner, this value is a reference to the account holder&#39;s details, such as the account number and routing number. This token is required if a &#x60;business_token&#x60; is not specified.  Send a &#x60;GET&#x60; request to &#x60;/users&#x60; to retrieve user tokens. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
