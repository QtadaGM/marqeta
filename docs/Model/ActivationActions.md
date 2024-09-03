# # ActivationActions

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**swap_digital_wallet_tokens_from_card_token** | **string** | Moves all digital wallet tokens from the specified card to the new card.  Not relevant when &#x60;reissue_pan_from_card_token&#x60; is set.  Send a &#x60;GET&#x60; request to &#x60;/cards/user/{token}&#x60; to retrieve card tokens for a particular user. | [optional]
**terminate_reissued_source_card** | **bool** | If you are reissuing a card, the source card is terminated by default. To prevent the source card from being terminated, set this field to &#x60;false&#x60;.  Only relevant when &#x60;reissue_pan_from_card_token&#x60; is set. | [optional] [default to true]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
