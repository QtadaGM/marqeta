# # AuthControlExemptMidsResponse

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**active** | **bool** | Indicates whether the merchant identifier authorization control exception is active.  This field is returned if it exists in the resource. | [optional] [default to false]
**association** | [**\OpenAPI\Client\Model\SpendControlAssociation**](SpendControlAssociation.md) |  | [optional]
**created** | **\DateTime** | Date and time when the resource was created, in UTC.  This field is returned if it exists in the resource. | [optional]
**end_time** | **\DateTime** | Date and time when the exception ends, in UTC.  This field is returned if it exists in the resource. | [optional]
**last_updated** | **\DateTime** | Date and time when the resource was last updated, in UTC.  This field is returned if it exists in the resource. | [optional]
**merchant_group_token** | **string** | Unique identifier of the merchant group to be exempted.  This field is returned if it exists in the resource. | [optional]
**mid** | **string** | Merchant to be exempted.  This field is returned if it exists in the resource. | [optional]
**name** | **string** | Name of the merchant identifier authorization control exemption. |
**start_time** | **\DateTime** | Date and time when the exception starts, in UTC.  This field is returned if it exists in the resource. | [optional]
**token** | **string** | Unique identifier of the merchant identifier authorization control exemption.  This field is always returned. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
