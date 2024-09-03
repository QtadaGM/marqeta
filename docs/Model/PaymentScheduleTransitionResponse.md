# # PaymentScheduleTransitionResponse

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**account_token** | **string** | Unique identifier of the credit account on which to transition a payment schedule.  Send a &#x60;GET&#x60; request to &#x60;/credit/accounts&#x60; to retrieve existing credit account tokens. | [optional]
**created_time** | **\DateTime** | Date and time when the payment schedule transition was created on Marqeta&#39;s credit platform, in UTC. | [optional]
**payment_schedule_token** | **string** | Unique identifier of the payment schedule whose status is to transition.  Send a &#x60;GET&#x60; request to &#x60;/credit/accounts/{account_token}/paymentschedules&#x60; to retrieve existing payment schedule tokens. | [optional]
**status** | [**\OpenAPI\Client\Model\PaymentScheduleStatus**](PaymentScheduleStatus.md) |  | [optional]
**token** | **string** | Unique identifier of the payment schedule transition. | [optional]
**updated_time** | **\DateTime** | Date and time when the payment schedule transition was last updated on Marqeta&#39;s credit platform, in UTC. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
