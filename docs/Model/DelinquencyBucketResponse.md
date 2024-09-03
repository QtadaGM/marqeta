# # DelinquencyBucketResponse

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**bucket_number** | **int** | Delinquency bucket number in the returned array. Delinquency buckets are returned from most recent to least; the most recent delinquency bucket is &#x60;1&#x60;. |
**current_due** | **float** | Current amount that is due for this delinquency bucket. |
**days_past_due** | **int** | Total number of days that the payment is past due for this delinquency bucket. |
**past_due_carried_forward** | **float** | Amount that is past due and carried forward from previous delinquency buckets. |
**payment_due_date** | **\DateTime** | Date that the payment was due for this delinquency bucket. |
**total_due** | **float** | Total amount that is due for this delinquency bucket; the sum of &#x60;past_due_carried_forward&#x60; and &#x60;current_due&#x60;. |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
