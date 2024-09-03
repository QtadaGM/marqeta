# # StatementPaymentInfo

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**created_time** | **\DateTime** | Date and time when the statement payment information was created on Marqeta&#39;s credit platform, in UTC. | [optional]
**minimum_payment_due** | **float** | Minimum payment amount for the current statement period, based on the associated credit product settings. | [optional]
**new_statement_balance** | **float** | Balance on the credit account when the statement period ended. | [optional]
**payment_cutoff_date** | **\DateTime** | Last day a payment can be made before interest and fees are charged to the account. | [optional]
**payment_due_date** | **\DateTime** | Payment due date, based on the credit account settings. | [optional]
**statement_summary_token** | **string** | Unique identifier of the statement summary. | [optional]
**three_year_savings** | **float** | Savings amount if the balance is paid off in three years versus only making minimum payments. | [optional]
**token** | **string** | Unique identifier of the statement payment. | [optional]
**warnings** | [**\OpenAPI\Client\Model\StatementPaymentWarning[]**](StatementPaymentWarning.md) | One or more payoff warnings. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
