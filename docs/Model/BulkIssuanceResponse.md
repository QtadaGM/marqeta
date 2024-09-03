# # BulkIssuanceResponse

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**card_allocation** | **int** | Number of cards in the order. |
**card_fulfillment_time** | **\DateTime** | Date and time when the bulk card order was fulfilled, in UTC.  This field is included if your bulk card order has been processed. | [optional]
**card_product_token** | **string** | Specifies the card product from which the cards are created. |
**cards_processed** | **int** | Number of cards processed in the bulk card order.  This field is returned if it exists in the resource. | [optional]
**created_time** | **\DateTime** | Date and time when the resource was created, in UTC.  This field is returned if it exists in the resource. | [optional]
**expedite** | **bool** | Indicates if expedited processing of this bulk card order was requested.  This field is returned if it exists in the resource. | [optional] [default to false]
**expiration_offset** | [**\OpenAPI\Client\Model\ExpirationOffset**](ExpirationOffset.md) |  | [optional]
**fulfillment** | [**\OpenAPI\Client\Model\FulfillmentResponse**](FulfillmentResponse.md) |  |
**name_line1_end_index** | **int** | This field is included if your bulk card order has been processed.  You can use the &#x60;name_line1_start_index&#x60; and &#x60;name_line1_end_index&#x60; fields to identify the cards and users associated with the order. For example, if the start index is \&quot;1\&quot; and the end index is \&quot;3\&quot;, the card tokens are \&quot;card-1\&quot;, \&quot;card-2\&quot;, and \&quot;card-3\&quot;, and the user tokens are \&quot;user-1\&quot;, \&quot;user-2\&quot;, and \&quot;user-3\&quot;.  See &lt;&lt;/core-api/bulk-card-orders#create_bulk_card_order, Create bulk card order&gt;&gt; for more information about the automatic generation and naming of cards and users. | [optional]
**name_line1_start_index** | **int** | This field is included if your bulk card order has been processed.  You can use the &#x60;name_line1_start_index&#x60; and &#x60;name_line1_end_index&#x60; fields to identify the cards and users associated with the order. For example, if the start index is \&quot;1\&quot; and the end index is \&quot;3\&quot;, the card tokens are \&quot;card-1\&quot;, \&quot;card-2\&quot;, and \&quot;card-3\&quot;, and the user tokens are \&quot;user-1\&quot;, \&quot;user-2\&quot;, and \&quot;user-3\&quot;.  See &lt;&lt;/core-api/bulk-card-orders#create_bulk_card_order, Create bulk card order&gt;&gt; for more information about the automatic generation and naming of cards and users. | [optional]
**name_line_1_numeric_postfix** | **bool** | If set to &#x60;true&#x60;, the unique numeric postfix appended to each card&#39;s token field is also appended to the card&#39;s &#x60;fulfillment.card_personalization.text.name_line_1.value&#x60; field. | [optional] [default to false]
**name_line_1_random_postfix** | **bool** | If set to &#x60;true&#x60;, the unique random postfix appended to each card&#39;s token field is also appended to the card&#39;s &#x60;fulfillment.card_personalization.text.name_line_1.value&#x60; field.  This field is returned if it exists in the resource. | [optional] [default to false]
**provider_ship_date** | **\DateTime** | Date and time when the card provider shipped the bulk card order, in UTC.  This field is included if your bulk card order has shipped. | [optional]
**provider_shipping_method** | **string** | Shipping method used by the card provider. &#x60;United_Postal_Service&#x60;, for example.  This field is included if your bulk card order has shipped. | [optional]
**provider_tracking_number** | **string** | A tracking number is included only if your card provider is Arroweye Solutions.  This field is included if your bulk card order has shipped. | [optional]
**token** | **string** | Unique identifier of the bulk card order. |
**user_association** | [**\OpenAPI\Client\Model\UserAssociation**](UserAssociation.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
