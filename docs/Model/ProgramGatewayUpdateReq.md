# # ProgramGatewayUpdateReq

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**active** | **bool** | Indicates whether the Program Gateway is active. | [optional] [default to true]
**basic_auth_password** | **string** | Basic Authentication password for authenticating your environment. | [optional]
**basic_auth_username** | **string** | Basic Authentication username for authenticating your environment. | [optional]
**custom_header** | **array<string,string>** | Additional custom information included in the HTTP header. For example, this might contain security information, along with Basic Authentication, when making a Program Gateway request. Custom headers also appear in the associated webhook&#39;s notifications. | [optional]
**mtls** | **bool** | Indicates whether the Program Gateway uses mutual Transport Layer Security (mTLS). | [optional] [default to false]
**name** | **string** | Name of the Program Gateway. | [optional]
**timeout_millis** | **int** | Total timeout for Program Gateway calls, in milliseconds. | [optional]
**token** | **string** | Unique identifier of the Program Gateway. | [optional]
**url** | **string** | URL of the Program Gateway endpoint hosted in your environment and configured to receive authorization requests made by the Marqeta platform. Must be HTTPS. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
