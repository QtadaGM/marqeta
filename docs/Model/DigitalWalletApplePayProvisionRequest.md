# # DigitalWalletApplePayProvisionRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**card_token** | **string** | Unique identifier of the card resource to use for the provisioning request. |
**certificates** | **string[]** | Base64-encoded leaf and sub-CA certificates provided by Apple.  The first element of the array should be the leaf certificate, followed by the sub-CA. |
**device_type** | **string** | Type of device into which the digital wallet token will be provisioned. |
**nonce** | **string** | One-time-use nonce provided by Apple for security purposes. |
**nonce_signature** | **string** | Apple-provided signature to the nonce. |
**provisioning_app_version** | **string** | Version of the application making the provisioning request. Used for debugging and fraud prevention. |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
