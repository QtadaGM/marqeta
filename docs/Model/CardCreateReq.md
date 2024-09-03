# # CardCreateReq

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**activation_actions** | [**\OpenAPI\Client\Model\ActivationActions**](ActivationActions.md) |  | [optional]
**card_product_token** | **string** | Unique identifier of the associated card product. |
**expiration_offset** | [**\OpenAPI\Client\Model\ExpirationOffset**](ExpirationOffset.md) |  | [optional]
**new_pan_from_card_token** | **string** | Reissues the specified card (known as the \&quot;source\&quot; card) with a new primary account number (PAN).  This field reissues a card with a new PAN from the specified source card. The source card is automatically terminated when the card is reissued with the new PAN. Use this field when reissuing a lost or stolen card. | [optional]
**reissue_pan_from_card_token** | **string** | Reissues the specified card (known as the \&quot;source\&quot; card).  This field reissues a card by copying the PAN and PIN from the specified source card to the newly created card. The reissued card has the same PAN and PIN as the source card but a new expiration date and CVV2 number.  *NOTE:* By default, the source card is automatically terminated when the reissued card is activated. However, if your program is configured for multiple active cards, you can prevent the source card from being automatically terminated by setting the &#x60;activation_actions.terminate_reissued_source_card&#x60; field to &#x60;false&#x60;. | [optional]
**token** | **string** | Unique identifier of the credit card. | [optional]
**translate_pin_from_card_token** | **string** | Copies the PIN from the specified card to the newly created card.  Both cards must belong to the same user. This field is not allowed if &#x60;reissue_pan_from_card_token&#x60; is set.  Send a &#x60;GET&#x60; request to &#x60;/cards/user/{token}&#x60; to retrieve card tokens for a particular user. | [optional]
**user_token** | **string** | Unique identifier of the credit cardholder. |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
