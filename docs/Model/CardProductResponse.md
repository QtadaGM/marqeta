# # CardProductResponse

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**active** | **bool** | Indicates whether the card product is active.  This field is returned if it exists in the resource. | [optional] [default to false]
**config** | [**\OpenAPI\Client\Model\CardProductConfig**](CardProductConfig.md) |  | [optional]
**created_time** | **\DateTime** | Date and time when the resource was created, in UTC. |
**end_date** | **\DateTime** | End date of the range over which the card product can be active.  This field is returned if it exists in the resource. | [optional]
**last_modified_time** | **\DateTime** | Date and time when the resource was last updated, in UTC. |
**name** | **string** | Name of the card product. |
**start_date** | **\DateTime** | Date when the card product becomes active. |
**token** | **string** | Unique identifier of the card product. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
