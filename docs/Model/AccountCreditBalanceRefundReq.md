# # AccountCreditBalanceRefundReq

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**amount** | **float** | Amount of the credit balance refund.  The maximum refund amount is the amount that brings the account balance to $0. For example, $4000 is the maximum refund amount for a -$4000 account balance. |
**currency_code** | [**\OpenAPI\Client\Model\CurrencyCode**](CurrencyCode.md) |  |
**description** | **string** | Description for the credit balance refund. |
**method** | [**\OpenAPI\Client\Model\RefundMethod**](RefundMethod.md) |  |
**token** | **string** | Unique identifier of the credit balance refund. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
