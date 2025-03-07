# # MccGroupUpdateModel

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**active** | **bool** | Indicates whether the MCC group is active or inactive. | [optional] [default to false]
**config** | [**\OpenAPI\Client\Model\Config**](Config.md) |  | [optional]
**mccs** | **string[]** | The set of merchant category codes that you want to include in this group. For each element, valid characters are 0-9, and the length must be 4 digits. You can also specify a range like \&quot;9876-9880\&quot;. An MCC can belong to more than one group.  Updating the merchant category codes for the group completely replaces the group&#39;s existing codes. For example, if the current MCC group is &#x60;[\&quot;1234\&quot;]&#x60; and you want to add the 2345 code (while retaining the existing code), you must specify &#x60;[\&quot;1234\&quot;, \&quot;2345\&quot;]&#x60; in this field. | [optional]
**name** | **string** | The name of the MCC group. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
