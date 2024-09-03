# # BusinessIncorporation

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**address_registered_under** | [**\OpenAPI\Client\Model\AddressRequestModel**](AddressRequestModel.md) |  | [optional]
**incorporation_type** | **string** | Organizational structure of the business, such as corporation or sole proprietorship.  This field is required for KYC verification (US-based accounts only). | [optional]
**is_public** | **bool** | A value of &#x60;true&#x60; indicates that the business is publicly held. | [optional] [default to false]
**name_registered_under** | **string** | Name under which the business is registered. | [optional]
**state_of_incorporation** | **string** | State where the business is incorporated.  This field is required for KYC verification (US-based accounts only). | [optional]
**stock_symbol** | **string** | Business stock symbol. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
