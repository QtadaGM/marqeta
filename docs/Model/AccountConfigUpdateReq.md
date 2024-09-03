# # AccountConfigUpdateReq

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**e_disclosure_active** | **bool** | A value of &#x60;true&#x60; indicates that the account holder consents to receiving disclosures and statements electronically. | [optional] [default to false]
**fees** | [**\OpenAPI\Client\Model\ConfigFeeScheduleReq[]**](ConfigFeeScheduleReq.md) | Contains one or more fees associated with the credit account. | [optional]
**min_payment** | [**\OpenAPI\Client\Model\AccountConfigMinPayment**](AccountConfigMinPayment.md) |  | [optional]
**payment_holds** | [**\OpenAPI\Client\Model\AccountConfigPaymentHolds**](AccountConfigPaymentHolds.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
