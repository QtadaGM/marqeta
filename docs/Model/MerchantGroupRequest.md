# # MerchantGroupRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**active** | **bool** | Indicates if the merchant group is active or not. | [optional] [default to false]
**mids** | **string[]** | Comma-separated list of alphanumeric merchant identifiers. You can include merchant identifiers in multiple merchant groups. | [optional]
**name** | **string** | Name of the merchant group. |
**token** | **string** | Unique identifier of the group.  If you do not include a token, the system will generate one automatically. This token is necessary for use in other API calls, so we recommend that rather than let the system generate one, you use a simple string that is easy to remember. This value cannot be updated. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
