# # CardProductRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**active** | **bool** | Indicates whether the card product is active.  *NOTE:* This field has no effect on the ability to create cards from this card product. Use the &#x60;config.fulfillment.allow_card_creation&#x60; field to allow/disallow card creation. | [optional] [default to false]
**config** | [**\OpenAPI\Client\Model\CardProductConfig**](CardProductConfig.md) |  | [optional]
**end_date** | **\DateTime** | End date of the range over which the card product can be active. | [optional]
**name** | **string** | Name of the card product. Marqeta recommends that you use a unique string. |
**start_date** | **\DateTime** | Date when the card product becomes active. If the start date has passed and the card is set to &#x60;active &#x3D; false&#x60;, then the card will not be activated. |
**token** | **string** | Unique identifier of the card product.  If you do not include a token, the system will generate one automatically. This token is required in other API calls, so we recommend that rather than let the system generate one, you use a simple string that is easy to remember. This value cannot be updated. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
