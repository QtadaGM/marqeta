# # PaymentReminderResponse

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**account_token** | **string** | Token of the associated account. | [optional]
**created_time** | **\DateTime** | Date and time when the Billing Cycle was created on Marqeta&#39;s credit platform | [optional]
**days_until_due** | **int** | Days until payment cutoff date | [optional]
**payment_cutoff_date** | **\DateTime** | Last day a payment can be made before interest and fees are charged to the account. | [optional]
**payment_due_date** | **\DateTime** | Payment due date, based on the credit account settings. | [optional]
**remaining_minimum_payment_due** | **float** | Amount remaining on the latest statement&#39;s minimum payment, after it&#39;s adjusted for payments, returned payments, and applicable credits that occurred after the latest statement&#39;s closing date. | [optional]
**statement_summary_token** | **string** | Token of the associated statement summary | [optional]
**token** | **string** | Token of the payment reminder | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
