# # TransactionMetadata

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**airline** | [**\OpenAPI\Client\Model\Airline**](Airline.md) |  | [optional]
**authorization_life_cycle** | **int** | Number of days the pre-authorization is in effect. | [optional]
**cross_border_transaction** | **bool** | Whether the transaction is cross-border, i.e., when the merchant and the cardholder are located in two different countries. | [optional] [default to false]
**is_deferred_authorization** | **bool** | Indicates an offline authorization made during an interruption of card network connectivity, such as a purchase on a flight. | [optional]
**is_lodging_auto_rental** | **bool** | Whether the transaction is a lodging or vehicle rental. | [optional] [default to false]
**lodging_auto_rental_start_date** | **\DateTime** | Date and time when the lodging check-in or vehicle rental began. | [optional]
**moto_indicator** | **string** | Indicates the type of mail or telephone order transaction. | [optional]
**one_leg_out** | **bool** |  | [optional]
**payment_channel** | **string** | Channel from which the transaction was originated. | [optional]
**special_purchase_id** | **string** |  | [optional]
**transaction_category** | **string** | Type of product or service being purchased, if provided by the merchant. | [optional]
**transit** | [**\OpenAPI\Client\Model\Transit**](Transit.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
