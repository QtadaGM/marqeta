# # GatewayProgramFundingSourceUpdateRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**active** | **bool** | Indicates whether the program gateway funding source is active. | [optional]
**basic_auth_password** | **string** | Password for authenticating your environment. |
**basic_auth_username** | **string** | Username for authenticating your environment. |
**custom_header** | **array<string,string>** | Additional custom information included in the HTTP header. For example, this might contain security information, along with Basic Authentication, when making a JIT Funding request. Custom headers also appear in the associated webhook&#39;s notifications. | [optional]
**name** | **string** | Name of the program gateway funding source. | [optional]
**timeout_millis** | **int** | Total timeout in milliseconds for gateway processing. | [optional]
**url** | **string** | URL of the gateway endpoint hosted in your environment, to which &#x60;POST&#x60; requests are submitted by the Marqeta platform. |
**use_mtls** | **bool** | Specifies whether or not to use mutual transport layer security (mTLS) authentication for the funding request. | [optional] [default to false]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
