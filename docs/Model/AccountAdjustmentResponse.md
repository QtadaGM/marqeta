# # AccountAdjustmentResponse

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**account_token** | **string** | Unique identifier of the credit account on which the adjustment was made. |
**adjustment_detail_object** | **object** | Contains the adjustment&#39;s full details.  The fields returned in this object depend on the adjustment type.  Interest returns interest details. For the specific fields returned, see the &#x60;detail_object&#x60; fields marked \&quot;Returned for interest journal entries\&quot; in the &lt;&lt;/core-api/credit-account-journal-entries#getAccountJournalEntry, account journal entry response fields&gt;&gt;.  Disputes return dispute details. For the specific fields returned, see the &lt;&lt;/core-api/credit-disputes#retrieveDispute, dispute response fields&gt;&gt;. | [optional]
**amount** | **float** | Amount of the adjustment. |
**created_time** | **\DateTime** | Date and time when the account adjustment was applied, in UTC. | [optional]
**currency_code** | [**\OpenAPI\Client\Model\CurrencyCode**](CurrencyCode.md) |  |
**description** | **string** | Description of the adjustment. |
**detail_token** | **string** | Unique identifier of the adjustment detail. For example, the token of the dispute, the interest charge, or the returned payment that prompted the adjustment.  Returned when the system automatically applies an adjustment. | [optional]
**external_adjustment_id** | **string** | Unique identifier you provide of an associated external adjustment that exists outside Marqeta&#39;s credit platform. | [optional]
**note** | **string** | Additional information on the adjustment. | [optional]
**original_ledger_entry_token** | **string** | Unique identifier of the original journal entry needing the adjustment. | [optional]
**reason** | **string** | Reason for the adjustment.  * &#x60;DISPUTE&#x60; - The adjustment occurred because a dispute was initiated. * &#x60;DISPUTE_RESOLUTION&#x60; - The adjustment occurred because of the result of a dispute resolution. * &#x60;RETURNED_OR_CANCELED_PAYMENT&#x60; - The adjustment occurred because a payment was returned or canceled. * &#x60;OTHER&#x60; - Any other reason the adjustment occurred. For example, a waived fee. |
**related_detail_object** | **object** | Contains full details of the related dispute or returned payment.  The fields returned in this object depend on whether a dispute or returned payment led to the interest adjustment. A dispute returns dispute details; a returned payment returns payment details.  For more on the dispute details returned, see the &lt;&lt;/core-api/credit-disputes#retrieveDispute, dispute response fields&gt;&gt;.  For more on the returned payment details returned, see the &lt;&lt;/core-api/credit-account-payments#retrievePayment, payment response fields&gt;&gt;.  This field is returned for interest adjustments only. | [optional]
**related_detail_token** | **string** | Unique identifier of the dispute or returned payment that prompted the interest adjustment.  This field is returned for interest adjustments only. | [optional]
**token** | **string** | Unique identifier of the adjustment.  If in the &#x60;detail_object&#x60;, unique identifier of the detail object. |
**type** | **string** | Type of adjustment.  The adjustment is made on its correlating amount (for example, purchase adjustments are made on purchase amounts). You can use general adjustments for standalone adjustments made on the credit account balance itself, which includes account write-offs, credits, and more. |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
