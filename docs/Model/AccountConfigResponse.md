# # AccountConfigResponse

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**billing_cycle_day** | **int** | Day of month the billing cycle starts.  If an override value is not provided, the default value is derived from the bundle. |
**card_level** | **string** | Level of the credit card. | [default to 'NA']
**e_disclosure_active** | **bool** | A value of &#x60;true&#x60; indicates that the account holder consents to receiving disclosures and statements electronically. | [default to false]
**fees** | [**\OpenAPI\Client\Model\ConfigFeeScheduleResponse[]**](ConfigFeeScheduleResponse.md) | Contains one or more fees associated with the credit account. | [optional]
**min_payment** | [**\OpenAPI\Client\Model\AccountConfigMinPayment**](AccountConfigMinPayment.md) |  | [optional]
**payment_due_day** | **int** | Day of month the payment for the previous billing cycle is due. | [optional]
**payment_holds** | [**\OpenAPI\Client\Model\AccountConfigPaymentHolds**](AccountConfigPaymentHolds.md) |  |
**rewards** | [**\OpenAPI\Client\Model\AccountReward[]**](AccountReward.md) | Contains one or more rewards associated with the credit account. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
