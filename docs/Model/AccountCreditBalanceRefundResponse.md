# # AccountCreditBalanceRefundResponse

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**account_token** | **string** | Unique identifier of the credit account that needs the credit balance refund. |
**amount** | **float** | Amount of the credit balance refund.  The maximum refund amount is the amount that brings the account balance to $0. For example, $4000 is the maximum refund amount for a -$4000 account balance. |
**created_time** | **\DateTime** | Date and time when the credit balance refund was created. |
**description** | **string** | Description for the credit credit balance refund. |
**method** | [**\OpenAPI\Client\Model\RefundMethod**](RefundMethod.md) |  |
**status** | [**\OpenAPI\Client\Model\PaymentStatus**](PaymentStatus.md) |  |
**token** | **string** | Unique identifier of the credit balance refund.  If in the &#x60;detail_object&#x60;, unique identifier of the detail object. |
**updated_time** | **\DateTime** | Date and time when the credit balance refund was last updated. |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
