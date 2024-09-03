# # BusinessIncorporationResponse

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**address_registered_under** | [**\OpenAPI\Client\Model\AddressResponseModel**](AddressResponseModel.md) |  | [optional]
**incorporation_type** | **string** | Organizational structure of the business (corporation or sole proprietorship, for example).  This field is returned if it exists in the resource. | [optional]
**is_public** | **bool** | A value of &#x60;true&#x60; indicates that the business is publicly held.  This field is returned if it exists in the resource. | [optional] [default to false]
**name_registered_under** | **string** | Name under which the business is registered.  This field is returned if it exists in the resource. | [optional]
**state_of_incorporation** | **string** | State where the business is incorporated.  This field is returned if it exists in the resource. | [optional]
**stock_symbol** | **string** | Stock symbol associated with the business.  This field is returned if it exists in the resource. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
