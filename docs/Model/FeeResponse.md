# # FeeResponse

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**active** | **bool** | Specifies whether the fee is active. | [readonly]
**amount** | **float** | Amount of the fee. |
**category** | **string** | Specifies if the fee is a standalone fee or a real-time fee. | [optional] [readonly]
**created_time** | **\DateTime** | Date and time when the &#x60;fees&#x60; object was created, in UTC. | [readonly]
**currency_code** | **string** | Three-digit ISO 4217 currency code. | [readonly]
**fee_attributes** | [**\OpenAPI\Client\Model\FeeAttributes**](FeeAttributes.md) |  | [optional]
**last_modified_time** | **\DateTime** | Date and time when the &#x60;fees&#x60; object was last modified, in UTC. | [readonly]
**name** | **string** | Name of the fee. |
**tags** | **string** | Descriptive metadata about the fee. | [optional]
**token** | **string** | Unique identifier of the &#x60;fees&#x60; object. |
**type** | **string** | Specifies if the fee is a flat fee or a percentage of the transaction amount. | [optional] [readonly]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
