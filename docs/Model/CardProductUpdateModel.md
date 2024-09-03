# # CardProductUpdateModel

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**active** | **bool** | Indicates whether the card product is active.  *NOTE:* This field has no effect on the ability to create cards from this card product. Use the &#x60;config.fulfillment.allow_card_creation&#x60; field to allow/disallow card creation. | [optional] [default to false]
**config** | [**\OpenAPI\Client\Model\CardProductConfig**](CardProductConfig.md) |  | [optional]
**end_date** | **\DateTime** | End date of the range over which the card product can be active. | [optional]
**name** | **string** | Name of the card product. Marqeta recommends that you use a unique string. | [optional]
**start_date** | **\DateTime** | Date the card product becomes active. If the start date has passed and the card is set to &#x60;active &#x3D; false&#x60;, then the card will not be activated. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
