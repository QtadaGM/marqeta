# # PaymentDetailResponse

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**account_token** | **string** | Unique identifier of the credit account on which the payment is made. |
**allocations** | [**\OpenAPI\Client\Model\PaymentAllocationResponse[]**](PaymentAllocationResponse.md) | List of objects which contain information on how payment is allocated. | [optional]
**amount** | **float** | Total amount of the payment. |
**created_time** | **\DateTime** | Date and time when the payment was created on Marqeta&#39;s credit platform, in UTC. |
**currency_code** | [**\OpenAPI\Client\Model\CurrencyCode**](CurrencyCode.md) |  |
**description** | **string** | Description of the payment. |
**hold_days** | **int** | After a payment completes, the number of days to hold the available credit on the account before increasing it. | [default to 0]
**hold_end_time** | **\DateTime** | Date and time when the available credit hold is released. | [optional]
**is_manually_released** | **bool** | Whether the available credit hold was manually released for this payment. | [optional] [default to false]
**metadata** | **string** | Customer-defined additional information about the payment (for example, a check number). | [optional]
**method** | **string** | Method of payment. |
**on_hold** | **bool** | Whether the available credit is on hold for this payment. | [optional] [default to false]
**payment_schedule_token** | **string** | Unique identifier of the payment schedule. | [optional]
**payment_source_token** | **string** | Unique identifier of the payment source. Required for ACH payments. | [optional]
**refund_details** | [**\OpenAPI\Client\Model\RefundDetailsResponse**](RefundDetailsResponse.md) |  | [optional]
**returned_details** | [**\OpenAPI\Client\Model\ReturnedDetails**](ReturnedDetails.md) |  | [optional]
**status** | [**\OpenAPI\Client\Model\PaymentStatus**](PaymentStatus.md) |  |
**token** | **string** | Unique identifier of the payment.  If in the &#x60;detail_object&#x60;, unique identifier of the detail object. |
**transitions** | [**\OpenAPI\Client\Model\PaymentTransitionResponse[]**](PaymentTransitionResponse.md) | Contains one or more &#x60;transitions&#x60; objects, which contain information on a payment status transition. |
**updated_time** | **\DateTime** | Date and time when the payment was last updated on Marqeta&#39;s credit platform, in UTC. |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
