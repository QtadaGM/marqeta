# # ControlTokenRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**card_token** | **string** | The unique identifier of the card for which you want to generate a control token. |
**controltoken_type** | **string** | Specifies the type of action completed by this request.  *WARNING:* Sending a request to this endpoint with a &#x60;REVEAL_PIN&#x60; control token requires PCI DSS compliance.  The lifespan of the control token depends on the token type:  * *SET_PIN:* 60 minutes * *REVEAL_PIN:* 5 minutes | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
