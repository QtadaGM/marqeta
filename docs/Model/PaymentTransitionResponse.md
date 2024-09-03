# # PaymentTransitionResponse

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**account_token** | **string** | Unique identifier of the credit account on which you want to transition a payment status. |
**created_time** | **\DateTime** | Date and time when the payment transition was created on Marqeta&#39;s credit platform, in UTC. | [optional]
**payment_token** | **string** | Unique identifier of the payment whose status you want to transition. |
**status** | [**\OpenAPI\Client\Model\PaymentStatus**](PaymentStatus.md) |  |
**token** | **string** | Unique identifier of the payment status transition. |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
