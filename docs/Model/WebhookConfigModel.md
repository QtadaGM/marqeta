# # WebhookConfigModel

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**basic_auth_password** | **string** | Password for accessing your webhook endpoint. |
**basic_auth_username** | **string** | Username for accessing your webhook endpoint. |
**custom_header** | **array<string,string>** | Custom headers to be passed along with the request. | [optional]
**secret** | **string** | Randomly chosen string used for implementing HMAC-SHA1.  HMAC-SHA1 provides an added layer of security by authenticating the message and validating message integrity. Using this functionality requires that your webhook endpoint verify the message signature. For information about implementing this functionality, see &lt;&lt;/developer-guides/signature-verification, Signature Verification&gt;&gt;. | [optional]
**url** | **string** | URL of your webhook endpoint. |
**use_mtls** | **bool** | Set to &#x60;true&#x60; to use MTLS for the webhook. | [optional] [default to false]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
