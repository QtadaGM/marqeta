# # AndroidPushTokenizeRequestData

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**display_name** | **string** | Name of the card as displayed in the digital wallet, typically showing the card brand and last four digits of the primary account number (PAN). &#x60;Visa 5678&#x60;, for example. | [optional]
**last_digits** | **string** | Last four digits of the primary account number of the physical or virtual card. | [optional]
**network** | **string** | Specifies the card network of the physical or virtual card. | [optional]
**opaque_payment_card** | **string** | Encrypted data field created by the issuer and passed to Google Wallet during the push provisioning process. | [optional]
**token_service_provider** | **string** | Specifies the network that provides the digital wallet token service. | [optional]
**user_address** | [**\OpenAPI\Client\Model\AndroidPushTokenRequestAddress**](AndroidPushTokenRequestAddress.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
