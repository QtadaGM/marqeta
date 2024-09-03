# # AccountConfigReq

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**billing_cycle_day** | **int** | Day of month the billing cycle starts.  If an override value is not provided, the default value is derived from the bundle. | [optional]
**card_level** | **string** | Level of the credit card. | [optional] [default to 'NA']
**e_disclosure_active** | **bool** | A value of &#x60;true&#x60; indicates that the account holder consents to receiving disclosures and statements electronically. | [optional] [default to false]
**fees** | [**\OpenAPI\Client\Model\ConfigFeeScheduleReq[]**](ConfigFeeScheduleReq.md) | Contains one or more fees associated with the credit account. | [optional]
**payment_due_day** | **int** | Day of month the payment for the previous billing cycle is due.  This field is deprecated. Use the &#x60;account.payment_due_interval&#x60; field instead. To retrieve &#x60;payment_due_interval&#x60;, see &lt;&lt;/core-api/policies#retrieveProductPolicy, Retrieve credit product policy, payments.payment_due_interval&gt;&gt;. | [optional]
**payment_holds** | [**\OpenAPI\Client\Model\AccountConfigPaymentHolds**](AccountConfigPaymentHolds.md) |  | [optional]
**rewards** | [**\OpenAPI\Client\Model\AccountReward[]**](AccountReward.md) | Contains one or more rewards associated with the credit account. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
