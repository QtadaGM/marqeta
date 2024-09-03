# # MccGroupModel

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**active** | **bool** | Indicates if the group is active or inactive. | [optional] [default to false]
**config** | [**\OpenAPI\Client\Model\Config**](Config.md) |  | [optional]
**mccs** | **object[]** | The set of merchant category codes that you want to include in this group. For each element, valid characters are 0-9, and the length must be 4 digits. You can also specify a range like \&quot;9876-9880\&quot;. An MCC can belong to more than one group. |
**name** | **string** | The name of the group. |
**token** | **string** | The unique identifier of the group.  If you do not include a token, the system will generate one automatically. This token is necessary for use in other API calls, so we recommend that rather than let the system generate one, you use a simple string that is easy to remember. This value cannot be updated. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
