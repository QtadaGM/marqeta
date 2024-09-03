# # Network

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**conversion_rate** | **float** | Conversion rate between the origination currency and the settlement currency.  Returned when the transaction currency is different from the origination currency. | [optional]
**dynamic_currency_conversion** | **bool** | Indicates whether currency conversion was performed dynamically at the point of sale. | [optional] [default to false]
**original_amount** | **float** | Amount of the transaction in the currency in which it originated. | [optional]
**original_currency_code** | **string** | Currency type of the origination currency. | [optional]
**settlement_data** | [**\OpenAPI\Client\Model\SettlementData**](SettlementData.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
