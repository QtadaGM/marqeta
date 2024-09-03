# # PaymentScheduleResponse

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**account_token** | **string** | Unique identifier of the credit account on which the payment schedule is made. |
**amount** | **float** | Amount of the payment.  Returned if the &#x60;amount_category&#x60; is &#x60;FIXED&#x60;. | [optional]
**amount_category** | [**\OpenAPI\Client\Model\PaymentScheduleAmountCategory**](PaymentScheduleAmountCategory.md) |  |
**created_time** | **\DateTime** | Date and time when the payment schedule was created on Marqeta&#39;s credit platform, in UTC. | [optional]
**currency_code** | [**\OpenAPI\Client\Model\CurrencyCode**](CurrencyCode.md) |  |
**description** | **string** | Description of the payment schedule. | [optional]
**frequency** | [**\OpenAPI\Client\Model\PaymentScheduleFrequency**](PaymentScheduleFrequency.md) |  |
**next_payment_impact_date** | **\DateTime** | Date to make a one-time payment.  Returned if &#x60;frequency&#x60; is &#x60;ONCE&#x60;. | [optional]
**payment_day** | **string** | Day on which monthly payments are made.  Returned if the &#x60;frequency&#x60; is &#x60;MONTHLY&#x60;. | [optional]
**payment_source_token** | **string** | Unique identifier of a payment source. |
**status** | [**\OpenAPI\Client\Model\PaymentScheduleStatus**](PaymentScheduleStatus.md) |  |
**token** | **string** | Unique identifier of the payment schedule. |
**updated_time** | **\DateTime** | Date and time when the payment schedule was last updated on Marqeta&#39;s credit platform, in UTC. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
