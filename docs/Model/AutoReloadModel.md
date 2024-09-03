# # AutoReloadModel

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**active** | **bool** | Specifies whether the auto reload is active.  Only one auto reload per level, per object, can be active. | [optional] [default to true]
**association** | [**\OpenAPI\Client\Model\AutoReloadAssociation**](AutoReloadAssociation.md) |  | [optional]
**currency_code** | **string** | Three-digit link:https://www.iso.org/iso-4217-currency-codes.html[ISO 4217 currency code, window&#x3D;\&quot;_blank\&quot;]. |
**funding_source_address_token** | **string** | Unique identifier of the funding source address to use for this auto reload.  If your funding source is an ACH account, then a &#x60;funding_source_address_token&#x60; is not required. If your funding source is a payment card, you must have at least one funding source address in order to create a GPA order.  Send a &#x60;GET&#x60; request to &#x60;/fundingsources/addresses/user/{user_token}&#x60; to retrieve address tokens for a user.  Send a &#x60;GET&#x60; request to &#x60;/fundingsources/addresses/business/{business_token}&#x60; to retrieve address tokens for a business. | [optional]
**funding_source_token** | **string** | Unique identifier of the funding source to use for this auto reload.  Send a &#x60;GET&#x60; request to &#x60;/fundingsources/user/{user_token}&#x60; to retrieve funding source tokens for a user.  Send a &#x60;GET&#x60; request to &#x60;/fundingsources/business/{business_token}&#x60; to retrieve funding source tokens for a business. | [optional]
**order_scope** | [**\OpenAPI\Client\Model\OrderScope**](OrderScope.md) |  |
**token** | **string** | Unique identifier of the auto reload.  If you do not include a token, the system will generate one automatically. This token is necessary for use in other API calls, so we recommend that rather than let the system generate one, you use a simple string that is easy to remember. This value cannot be updated. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
