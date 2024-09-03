# # PeerTransferRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**amount** | **float** | Amount of the transfer. |
**currency_code** | **string** | Three-digit ISO 4217 currency code. |
**memo** | **string** | Additional descriptive text about the transfer. | [optional]
**recipient_business_token** | **string** | Specifies the business account holder that receives funds.  Send a &#x60;GET&#x60; request to &#x60;/businesses&#x60; to retrieve business tokens. | [optional]
**recipient_user_token** | **string** | Specifies the user account holder that receives funds.  Send a &#x60;GET&#x60; request to &#x60;/users&#x60; to retrieve user tokens. | [optional]
**sender_business_token** | **string** | Specifies the business account holder that sends funds.  Send a &#x60;GET&#x60; request to &#x60;/businesses&#x60; to retrieve business tokens. | [optional]
**sender_user_token** | **string** | Specifies the user account holder that sends funds.  Send a &#x60;GET&#x60; request to &#x60;/users&#x60; to retrieve user tokens. | [optional]
**tags** | **string** | Metadata about the peer transfer. | [optional]
**token** | **string** | Unique identifier of the peer transfer request.  If you do not include a token, the system will generate one automatically. This token is necessary for use in other API calls, so we recommend that rather than let the system generate one, you use a simple string that is easy to remember. This value cannot be updated. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
