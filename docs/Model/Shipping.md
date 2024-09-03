# # Shipping

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**care_of_line** | **string** | Adds the specified value as a care of (C/O) line to the mailing carrier.  *NOTE:* This field can be specified on cards, card products, and bulk card orders. If you specify this field at multiple levels, the order of precedence is: card, bulk card order, card product. | [optional]
**method** | **string** | Specifies the shipping service. | [optional]
**recipient_address** | [**\OpenAPI\Client\Model\FulfillmentAddressRequest**](FulfillmentAddressRequest.md) |  | [optional]
**return_address** | [**\OpenAPI\Client\Model\FulfillmentAddressRequest**](FulfillmentAddressRequest.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
