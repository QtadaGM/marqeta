# # PaymentCreateReq

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**amount** | **float** | Amount of the payment. |
**currency_code** | [**\OpenAPI\Client\Model\CurrencyCode**](CurrencyCode.md) |  |
**description** | **string** | Description of the payment. |
**impact_time** | **\DateTime** | Date and time when the payment impacts the account balance and fee calculations. | [optional]
**metadata** | **string** | Customer-defined additional information about the payment (for example, a check number). | [optional]
**method** | **string** | Method of payment. |
**payment_source_token** | **string** | Unique identifier of the payment source. Required for ACH payments. | [optional]
**token** | **string** | Unique identifier of the payment. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
