# # DigitalWalletTokenization

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**card_art_id** | **string** | Specifies the digital wallet card art identifier for the card product. Digital wallets display the card art after the initial token has been provisioned and activated. Digital wallet card art is updated for all wallets automatically whenever a tokenized card is reissued or replaced.  * If your card program is Managed by Marqeta, Marqeta populates this field on your behalf. * If your card program is Powered by Marqeta, you can obtain the correct card art identifier directly from Visa or Mastercard.  If this field is left blank, your card product inherits the card art assigned to the account BIN range. | [optional]
**provisioning_controls** | [**\OpenAPI\Client\Model\ProvisioningControls**](ProvisioningControls.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
