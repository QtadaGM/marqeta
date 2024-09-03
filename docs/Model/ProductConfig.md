# # ProductConfig

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**billing_cycle_day** | **int** | Day of month the billing cycle starts. |
**billing_cycle_day_strategy** | **string** | Determines if the billing cycle day is manually set or determined dynamically during account creation based on cycling logic. | [optional] [default to 'MANUAL']
**billing_cycle_frequency** | **string** | Frequency at which your account is billed. | [optional] [default to 'MONTHLY']
**fees** | [**\OpenAPI\Client\Model\ProductFeeType[]**](ProductFeeType.md) | One or more fee types. | [optional]
**payment_due_day** | **int** | Day of month the payment for the previous billing cycle is due.  This field is deprecated. Use the &#x60;product.payment_due_interval&#x60; field instead. To retrieve &#x60;payment_due_interval&#x60;, see &lt;&lt;/core-api/credit-products#retrieveProduct, Retrieve credit product, config.payment_due_interval&gt;&gt;. | [optional]
**payment_due_interval** | **int** | Specifies the payment due interval that is used to determine the payment due date for a billing cycle. The accepted values are either -1 or a value between 1 and 26. A value of -1 indicates one day prior to the next billing cycle date. | [optional] [default to -1]
**periodic_fees** | [**\OpenAPI\Client\Model\ProductConfigPeriodicFees[]**](ProductConfigPeriodicFees.md) | Contains one or more periodic fees. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
