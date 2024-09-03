# # AutoReloadResponseModel

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**active** | **bool** | Specifies whether the auto reload is active.  This field is returned if it exists in the resource. | [optional] [default to true]
**association** | [**\OpenAPI\Client\Model\AutoReloadAssociation**](AutoReloadAssociation.md) |  | [optional]
**created_time** | **\DateTime** | Date and time when the auto reload object was created, in UTC. |
**currency_code** | **string** | Three-digit link:https://www.iso.org/iso-4217-currency-codes.html[ISO 4217 currency code, window&#x3D;\&quot;_blank\&quot;]. |
**funding_source_address_token** | **string** | Unique identifier of the funding source address to use for this auto reload.  This field is returned if it exists in the resource. | [optional]
**funding_source_token** | **string** | Unique identifier of the funding source to use for this auto reload.  This field is returned if it exists in the resource. | [optional]
**last_modified_time** | **\DateTime** | Date and time when the auto reload object was last modified, in UTC. |
**order_scope** | [**\OpenAPI\Client\Model\OrderScope**](OrderScope.md) |  |
**token** | **string** | Unique identifier of the auto reload.  This field is always returned. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
