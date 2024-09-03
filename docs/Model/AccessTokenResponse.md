# # AccessTokenResponse

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**accesstoken_id** | **string** |  | [optional]
**application** | [**\OpenAPI\Client\Model\Application**](Application.md) |  | [optional]
**expires** | **\DateTime** | Date and time when the access token expires. |
**master_roles** | **string[]** | Array of master roles. | [optional]
**one_time** | **bool** | Indicates whether the access token is a single-use token. | [optional]
**token** | **string** | Unique identifier of the access token. | [optional]
**token_type** | **string** | Specifies the type of access token. | [optional]
**user_token** | **string** | Unique identifier of the user resource. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
