# # DelinquencyStateResponse

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**account_token** | **string** | Unique identifier of the credit account. |
**buckets** | [**\OpenAPI\Client\Model\DelinquencyBucketResponse[]**](DelinquencyBucketResponse.md) | One or more delinquency buckets for an account. Each delinquency bucket represents a billing cycle during which the account was delinquent. | [optional]
**current_due** | **float** | Amount that is due for the current billing cycle. |
**date_account_current** | **\DateTime** | Date and time when the account was last made current on the Marqeta platform, in UTC.  If the account was never delinquent, this field returns the date and time the account was created on the Marqeta platform, in UTC.  If &#x60;is_delinquent&#x60; is &#x60;true&#x60;, a null value is returned. | [optional]
**date_account_delinquent** | **\DateTime** | Date and time when the account last fell delinquent on the Marqeta platform, in UTC.  If &#x60;is_delinquent&#x60; is &#x60;false&#x60;, a null value is returned. | [optional]
**is_delinquent** | **bool** | A value of &#x60;true&#x60; indicates that the account is currently delinquent. |
**total_days_past_due** | **int** | Total number of days that the account is past due. |
**total_due** | **float** | Total amount that is due for the current billing cycle; the sum of &#x60;total_past_due_amount&#x60; and &#x60;current_due_amount&#x60;. |
**total_past_due** | **float** | Total amount that is past due. |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
