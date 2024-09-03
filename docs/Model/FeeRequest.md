# # FeeRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**active** | **bool** | Indicates whether the fee is active. | [optional] [default to true]
**amount** | **float** | Amount of the fee. |
**category** | **string** | Specifies if the fee is a standalone fee or a real-time fee. | [optional]
**currency_code** | **string** | Three-digit ISO 4217 currency code. |
**fee_attributes** | [**\OpenAPI\Client\Model\FeeAttributes**](FeeAttributes.md) |  | [optional]
**name** | **string** | Name of the fee request. |
**tags** | **string** | Descriptive metadata about the fee. | [optional]
**token** | **string** | Unique identifier of the fee.  If you do not include a token, the system will generate one automatically. This token is necessary for use in other API calls, so Marqeta recommends that rather than let the system generate one, you use a simple string that is easy to remember. This value cannot be updated. | [optional]
**type** | **string** | Specifies if the fee is a flat fee or a percentage of the transaction amount. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
