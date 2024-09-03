# # PaymentScheduleCreateReq

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**amount** | **float** | Amount of the payment.  Required if &#x60;amount_category&#x60; is &#x60;FIXED&#x60;. | [optional]
**amount_category** | [**\OpenAPI\Client\Model\PaymentScheduleAmountCategory**](PaymentScheduleAmountCategory.md) |  |
**currency_code** | [**\OpenAPI\Client\Model\CurrencyCode**](CurrencyCode.md) |  |
**description** | **string** | Description of the payment schedule. | [optional]
**frequency** | [**\OpenAPI\Client\Model\PaymentScheduleFrequency**](PaymentScheduleFrequency.md) |  |
**next_payment_impact_date** | **\DateTime** | Date to make a one-time payment.  Required if frequency is &#x60;ONCE&#x60;. | [optional]
**payment_day** | **string** | Day on which monthly payments are made.  Required if &#x60;frequency&#x60; is &#x60;MONTHLY&#x60;. | [optional]
**payment_source_token** | **string** | Unique identifier of the payment source. |
**token** | **string** | Unique identifier of the payment schedule. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
