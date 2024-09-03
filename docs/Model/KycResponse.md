# # KycResponse

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**business_token** | **string** | The business account holder on which the identity check was performed. | [optional]
**created_time** | **\DateTime** | Time when the KYC verification was performed. |
**last_modified_time** | **\DateTime** | Time when the KYC verification was last updated. |
**manual_override** | **bool** | If &#x60;true&#x60;, the user account holder is designated as having passed a verification check without Marqeta performing the check.  This override is used when verification is performed through another mechanism, such as an alternative KYC provider or directly with the account holder. | [optional] [readonly] [default to false]
**notes** | **string** | Notes pertaining to a manual override. This field is included in the response only when the &#x60;manual_override&#x60; field is set to &#x60;true&#x60;. | [optional] [readonly]
**reference_id** | **string** | If you verified the account holder&#39;s identity by performing a KYC verification outside of the Marqeta platform, you can use the &#x60;reference_id&#x60; field to store the reference number returned by that KYC provider. This field is included in the response only when the &#x60;manual_override&#x60; field is set to &#x60;true&#x60;.  *NOTE:* When you submit a KYC verification request with &#x60;manual_override&#x3D;false&#x60;, the Marqeta platform performs the verification through one of its KYC providers. If the KYC provider responds with a reference identifier, that identifier is passed to you by way of this field in the response. | [optional]
**result** | [**\OpenAPI\Client\Model\Result**](Result.md) |  | [optional]
**token** | **string** | The unique identifier of the identity check. | [optional]
**user_token** | **string** | The user account holder on which the identity check was performed. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
