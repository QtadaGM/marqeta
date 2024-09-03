# # ProgramGatewayResponse

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**active** | **bool** | Indicates whether the Program Gateway is active. | [optional] [default to true]
**basic_auth_password** | **string** | Basic Authentication password for authenticating your environment. | [optional]
**basic_auth_username** | **string** | Basic Authentication username for authenticating your environment. | [optional]
**created_time** | **\DateTime** | Date and time when the Program Gateway was created on Marqeta&#39;s credit platform, in UTC. | [optional]
**custom_header** | **object** | Additional custom information included in the HTTP header. | [optional]
**mtls** | **bool** | Indicates whether the Program Gateway uses mutual Transport Layer Security (mTLS). | [optional]
**name** | **string** | Name of the Program Gateway. | [optional]
**timeout_millis** | **int** | Total timeout for Program Gateway calls, in milliseconds. | [optional]
**token** | **string** | Unique identifier of the Program Gateway. | [optional]
**updated_time** | **\DateTime** | Date and time when the Program Gateway was last updated on Marqeta&#39;s credit platform, in UTC. | [optional]
**url** | **string** | URL of the Program Gateway endpoint hosted in your environment and configured to receive authorization requests made by the Marqeta platform. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
