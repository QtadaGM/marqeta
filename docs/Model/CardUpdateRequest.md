# # CardUpdateRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**expedite** | **bool** | Set to &#x60;true&#x60; to request expedited processing of the card by your card fulfillment provider.  This expedited service is available for cards fulfilled by link:http://perfectplastic.com/[Perfect Plastic Printing, window&#x3D;\&quot;_blank\&quot;], link:http://www.idemia.com[IDEMIA, window&#x3D;\&quot;_blank\&quot;], and link:https://www.arroweye.com/[Arroweye Solutions, window&#x3D;\&quot;_blank\&quot;].  *NOTE:* Contact your Marqeta representative for information regarding the cost of expedited service. | [optional] [default to false]
**fulfillment** | [**\OpenAPI\Client\Model\CardFulfillmentRequest**](CardFulfillmentRequest.md) |  | [optional]
**metadata** | **array<string,string>** | Associates customer-provided metadata with the card. | [optional]
**token** | **string** | Unique identifier of the card you want to update. |
**user_token** | **string** | Specifies the user you want to associate with the card. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
