# # BulkIssuanceRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**card_allocation** | **int** | Number of cards in the order. |
**card_product_token** | **string** | Specifies the card product from which to create your cards. |
**expedite** | **bool** | Set to &#x60;true&#x60; to request expedited processing of the order by your card fulfillment provider.  This expedited service is available for cards fulfilled by link:http://perfectplastic.com/[Perfect Plastic Printing, window&#x3D;\&quot;_blank\&quot;], link:http://www.idemia.com[IDEMIA, window&#x3D;\&quot;_blank\&quot;], and link:https://www.arroweye.com/[Arroweye Solutions, window&#x3D;\&quot;_blank\&quot;].  *NOTE:* Contact your Marqeta representative for information regarding the cost of expedited service. | [optional] [default to false]
**expiration_offset** | [**\OpenAPI\Client\Model\ExpirationOffset**](ExpirationOffset.md) |  | [optional]
**fulfillment** | [**\OpenAPI\Client\Model\FulfillmentRequest**](FulfillmentRequest.md) |  |
**name_line_1_numeric_postfix** | **bool** | If set to &#x60;true&#x60;, the unique numeric postfix appended to each card&#39;s token field is also appended to the card&#39;s &#x60;fulfillment.card_personalization.text.name_line_1.value&#x60; field. | [optional] [default to false]
**name_line_1_random_postfix** | **bool** | If set to &#x60;true&#x60;, the unique random postfix appended to each card&#39;s token field is also appended to the card&#39;s &#x60;fulfillment.card_personalization.text.name_line_1.value&#x60; field. | [optional] [default to false]
**token** | **string** | If you do not include a token, the system will generate one automatically. This token is necessary for use in other API calls, so we recommend that rather than let the system generate one, you use a simple string that is easy to remember. This value cannot be updated. |
**user_association** | [**\OpenAPI\Client\Model\UserAssociation**](UserAssociation.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
