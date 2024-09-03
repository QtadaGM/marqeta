# # KycRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**business_token** | **string** | Specifies the business account holder on which to perform the identity check. Do not pass this field if your request includes the &#x60;user_token&#x60; field.  Send a &#x60;GET&#x60; request to &#x60;/businesses&#x60; to retrieve business tokens. | [optional]
**manual_override** | **bool** | Set to &#x60;true&#x60; to designate a user account holder as having passed a verification check without Marqeta performing the check through one of its KYC providers.  Use this override when you perform verification through another mechanism, such as an alternative KYC provider or directly with the account holder.  You must obtain explicit, written approval from Marqeta before using the &#x60;manual_override&#x60; field for KYC verification. This feature is only available to programs that are enabled to perform their own Customer Identification Program (CIP) KYC verification. Consult your Marqeta representative for more information. | [optional] [default to false]
**notes** | **string** | Notes pertaining to a manual override. This field is returned in the response only when the &#x60;manual_override&#x60; field is set to &#x60;true&#x60;. | [optional]
**reference_id** | **string** | Can be specified only if &#x60;manual_override&#x3D;true&#x60;. If you verified a user account holder&#39;s identity by performing a KYC verification outside of the Marqeta platform, you can use the &#x60;reference_id&#x60; field to store the reference number returned by that KYC provider.  *NOTE:* When you submit a KYC verification request with &#x60;manual_override&#x3D;false&#x60;, the Marqeta platform performs the verification through one of its KYC providers. If the KYC provider responds with a reference identifier, that identifier is passed to you by way of this field in the response. | [optional]
**token** | **string** | The unique identifier of the identity check.  If you do not include a token, the system will generate one automatically. This token is necessary for use in other API calls, so we recommend that rather than let the system generate one, you use a simple string that is easy to remember. This value cannot be updated. | [optional]
**user_token** | **string** | Specifies the user account holder on which to perform the identity check. Do not pass this field if your request includes the &#x60;business_token&#x60; field.  Send a &#x60;GET&#x60; request to &#x60;/users&#x60; to retrieve user tokens. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
