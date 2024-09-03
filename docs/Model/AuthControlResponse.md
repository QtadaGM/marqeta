# # AuthControlResponse

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**active** | **bool** | Indicates whether the authorization control is active.  This field is returned if it exists in the resource. | [optional] [default to true]
**association** | [**\OpenAPI\Client\Model\SpendControlAssociation**](SpendControlAssociation.md) |  | [optional]
**end_time** | **\DateTime** | Date and time when the exception ends, in UTC.  This field is returned if it exists in the resource. | [optional]
**merchant_scope** | [**\OpenAPI\Client\Model\AuthControlMerchantScope**](AuthControlMerchantScope.md) |  | [optional]
**name** | **string** | Name of the authorization control. |
**start_time** | **\DateTime** | Date and time when the exception goes into effect, in UTC.  This field is returned if it exists in the resource. | [optional]
**token** | **string** | Unique identifier of the authorization control.  This field is returned if it exists in the resource. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
