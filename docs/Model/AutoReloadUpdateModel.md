# # AutoReloadUpdateModel

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**active** | **bool** | Specifies whether the auto reload is active.  Only one auto reload per level, per object, can be active. | [optional] [default to true]
**association** | [**\OpenAPI\Client\Model\AutoReloadAssociation**](AutoReloadAssociation.md) |  | [optional]
**currency_code** | **string** | Three-digit link:https://www.iso.org/iso-4217-currency-codes.html[ISO 4217 currency code, window&#x3D;\&quot;_blank\&quot;]. | [optional]
**funding_source_address_token** | **string** | Unique identifier of the funding source address to use for this auto reload.  If your funding source is an ACH account, then a &#x60;funding_source_address_token&#x60; is not required. If your funding source is a payment card, you must have at least one funding source address in order to create a GPA order. | [optional]
**funding_source_token** | **string** | Unique identifier of the funding source to use for this auto reload. | [optional]
**order_scope** | [**\OpenAPI\Client\Model\OrderScope**](OrderScope.md) |  | [optional]
**token** | **string** | The token in the path parameter takes precedence over the &#x60;token&#x60; body field. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
