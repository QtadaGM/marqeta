# # GatewayProgramFundingSourceResponse

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**account** | **string** | Bank account number. |
**active** | **bool** | Indicates whether the program gateway funding source is active. This field is returned if it exists in the resource. | [optional]
**basic_auth_password** | **string** | Password for authenticating your environment. |
**basic_auth_username** | **string** | Username for authenticating your environment. |
**created_time** | **\DateTime** | Date and time when the resource was created, in UTC. |
**custom_header** | **array<string,string>** | Additional custom information included in the HTTP header. |
**last_modified_time** | **\DateTime** | Date and time when the resource was last modified, in UTC. |
**name** | **string** | Name of the program gateway funding source. |
**timeout_millis** | **int** | Total timeout in milliseconds for gateway processing. |
**token** | **string** | Unique identifier of the program gateway funding source. |
**url** | **string** | URL of the gateway endpoint hosted in your environment, to which &#x60;POST&#x60; requests are submitted by the Marqeta platform. |
**use_mtls** | **bool** | Specifies whether or not to use mutual transport layer security (mTLS) authentication for the funding request. | [default to false]
**version** | **string** | Program gateway funding source object version. |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
