# # CardRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**activation_actions** | [**\OpenAPI\Client\Model\ActivationActions**](ActivationActions.md) |  | [optional]
**bulk_issuance_token** | **string** | Associates the card with the specified bulk card order. This field cannot be updated. | [optional]
**card_product_token** | **string** | Unique identifier of the card product. |
**expedite** | **bool** | Set to &#x60;true&#x60; to request expedited processing of the card by your card fulfillment provider.  This expedited service is available for cards fulfilled by link:http://perfectplastic.com/[Perfect Plastic Printing, window&#x3D;\&quot;_blank\&quot;], link:http://www.idemia.com[IDEMIA, window&#x3D;\&quot;_blank\&quot;], and link:https://www.arroweye.com/[Arroweye Solutions, window&#x3D;\&quot;_blank\&quot;].  *NOTE:* Contact your Marqeta representative for information regarding the cost of expedited service. | [optional] [default to false]
**expiration_offset** | [**\OpenAPI\Client\Model\ExpirationOffset**](ExpirationOffset.md) |  | [optional]
**fulfillment** | [**\OpenAPI\Client\Model\CardFulfillmentRequest**](CardFulfillmentRequest.md) |  | [optional]
**metadata** | **array<string,string>** | Associates customer-provided metadata with the card. | [optional]
**new_pan_from_card_token** | **string** | Reissues the specified card (known as the \&quot;source\&quot; card) with a new primary account number (PAN).  This field reissues a card with a new PAN from the specified source card. The source card is automatically terminated when the card is reissued with the new PAN. Use this field when reissuing a lost or stolen card.  Send a &#x60;GET&#x60; request to &#x60;/cards/user/{token}&#x60; to retrieve card tokens for a particular user. | [optional]
**reissue_pan_from_card_token** | **string** | Reissues the specified card (known as the \&quot;source\&quot; card).  This field reissues a card by copying the primary account number (PAN) and personal identification number (PIN) from the specified source card to the newly created card. The reissued card has the same PAN and PIN as the source card but a new expiration date and CVV2 number.  Send a &#x60;GET&#x60; request to &#x60;/cards/user/{token}&#x60; to retrieve card tokens for a particular user.  *NOTE:* By default, the source card is automatically terminated when the reissued card is activated. However, if your program is configured for multiple active cards, you can prevent the source card from being automatically terminated by setting the &#x60;activation_actions.terminate_reissued_source_card&#x60; field to &#x60;false&#x60;. | [optional]
**token** | **string** | Unique identifier of the card.  If you do not include a token, the system will generate one automatically. Other API calls will require this token, so we recommend creating a token that is easy to remember rather than letting the system generate one. This value cannot be updated. | [optional]
**translate_pin_from_card_token** | **string** | Copies the PIN from the specified card to the newly created card.  Both cards must belong to the same user. Populating this field will raise an error if &#x60;reissue_pan_from_card_token&#x60; is also set.  Send a &#x60;GET&#x60; request to &#x60;/cards/user/{token}&#x60; to retrieve card tokens for a particular user. | [optional]
**user_token** | **string** | Unique identifier of the authorized user of the card. |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
