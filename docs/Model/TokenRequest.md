# # TokenRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**account_number** | **string** | Payment card account number. |
**business_token** | **string** | Unique identifier of the business account holder. This token is required if the &#x60;user_token&#x60; is not included.  Send a &#x60;GET&#x60; request to &#x60;/businesses&#x60; to retrieve business tokens. | [optional]
**cvv_number** | **string** | Payment card CVV2 number. |
**exp_date** | **string** | Payment card expiration date. |
**is_default_account** | **bool** | If there are multiple funding sources, this field specifies which source is used by default in funding calls. If there is only one funding source, the system ignores this field and always uses that source. | [optional] [default to false]
**postal_code** | **string** | Postal code of the account holder (user or business). | [optional]
**token** | **string** | Unique identifier of the funding account. If you do not include a token, the system will generate one automatically. As this token is necessary for use in other calls, we recommend that you define a simple and easy to remember string rather than letting the system generate a token for you. This value cannot be updated. | [optional]
**user_token** | **string** | Unique identifier of the user account holder. This token is required if the &#x60;business_token&#x60; is not included.  Send a &#x60;GET&#x60; request to &#x60;/users&#x60; to retrieve user tokens. | [optional]
**zip** | **string** | United States ZIP code of the account holder (user or business). | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
