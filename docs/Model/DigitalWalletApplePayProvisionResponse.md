# # DigitalWalletApplePayProvisionResponse

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**activation_data** | **string** | Cryptographic one-time passcode conforming to the payment network operator or service provider specifications. |
**card_token** | **string** | Unique identifier of the card resource to use for the provisioning request. |
**created_time** | **\DateTime** | Date and time when the digital wallet provisioning request was created, in UTC. |
**encrypted_pass_data** | **string** | Payload encrypted with a shared key derived from the Apple Public Certificates and the generated ephemeral private key. |
**ephemeral_public_key** | **string** | Ephemeral public key used for the provisioning attempt. |
**last_modified_time** | **\DateTime** | Date and time when the digital wallet token provisioning request was last updated, in UTC. |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
