# # GpaRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**amount** | **float** | Amount to fund. |
**business_token** | **string** | Unique identifier of the business.  Pass either a &#x60;business_token&#x60; or a &#x60;user_token&#x60;, not both.  Send a &#x60;GET&#x60; request to &#x60;/businesses&#x60; to retrieve business tokens. | [optional]
**currency_code** | **string** | Three-digit ISO 4217 currency code. |
**fees** | [**\OpenAPI\Client\Model\FeeModel[]**](FeeModel.md) | List of fees associated with the funding transaction. | [optional]
**funding_source_address_token** | **string** | Unique identifier of the funding source address to use for this order. If your funding source is an ACH account, then a funding source address is not required. If your funding source is a payment card, you must have at least one funding source address in order to create a GPA order. Send a &#x60;GET&#x60; request to &#x60;/fundingsources/addresses/user/{token}&#x60; to retrieve addresses for a specific user. | [optional]
**funding_source_token** | **string** | Unique identifier of the funding source to use for this order.  You do not have to supply a funding source token value in this call if you have a default funding source set up (verify the funding source&#39;s &#x60;is_default_account&#x60; field). If you have only one funding source, then this source is used as the default. If you have multiple funding sources and none are configured as the default, then an error is returned.  Send a &#x60;GET&#x60; request to &#x60;/fundingsources/user/{user_token}&#x60; to retrieve funding source tokens for a user or to &#x60;/fundingsources/business/{business_token}&#x60; to retrieve funding source tokens for a business. |
**memo** | **string** | Additional descriptive text. | [optional]
**tags** | **string** | Comma-delimited list of tags describing the GPA order. | [optional]
**token** | **string** | Unique identifier of the GPA order.  If you do not include a token, the system will generate one automatically. This token is necessary for use in other calls, so we recommend that rather than let the system generate one, you use a simple string that is easy to remember. This value cannot be updated. | [optional]
**user_token** | **string** | Unique identifier of the user.  Pass either a &#x60;user_token&#x60; or a &#x60;business_token&#x60;, not both.  Send a &#x60;GET&#x60; request to &#x60;/users&#x60; to retrieve business tokens. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
