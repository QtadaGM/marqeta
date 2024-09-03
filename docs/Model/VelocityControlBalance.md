# # VelocityControlBalance

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**active** | **bool** | Indicates whether the velocity control is active. | [optional] [default to false]
**amount_limit** | **float** | Maximum monetary sum that can be cleared within the time period defined by velocity period. |
**association** | [**\OpenAPI\Client\Model\Association**](Association.md) |  | [optional]
**currency_code** | **string** | Three-character ISO 4217 currency code. |
**merchant_scope** | [**\OpenAPI\Client\Model\MerchantScope**](MerchantScope.md) |  | [optional]
**name** | **string** | Description of how the velocity control restricts spending. For example, \&quot;Max spend of $500 per day\&quot; or \&quot;Max spend of $5000 per month for non-exempt employees\&quot;. | [optional]
**token** | **string** | Unique identifier of the velocity control. | [optional]
**usage_limit** | **int** | Maximum number of times a card can be used within the time period defined by the &#x60;velocity_window&#x60; field.  Leave &#x60;null&#x60; to indicate that the card can be used an unlimited number of times. | [optional]
**velocity_window** | [**\OpenAPI\Client\Model\VelocityWindow**](VelocityWindow.md) |  | [optional]
**velocity_window_start_day** | **int** | Start day of the velocity window defined by the &#x60;velocity_window&#x60; field. Default value is &#x60;1&#x60; | [optional]
**available** | [**\OpenAPI\Client\Model\VelocityControlBalanceAllOfAvailable**](VelocityControlBalanceAllOfAvailable.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
