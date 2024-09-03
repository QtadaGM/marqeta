# # StatementSummary

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**account_token** | **string** | Unique identifier of the credit account on which the statement summary is generated. |
**available_credit** | **float** | Amount available to spend on the credit account, as of the statement closing date. |
**closing_balance** | **float** | Balance of the credit account when the statement period ended. |
**closing_date** | **\DateTime** | Date and time when the statement period ended. |
**created_time** | **\DateTime** | Date and time when the statement summary was created on Marqeta&#39;s credit platform, in UTC. |
**credit_limit** | **float** | Maximum balance the credit account can carry, as of the statement closing date. | [optional]
**credits** | **float** | Total amount of credits received during the statement period. |
**cycle_type** | [**\OpenAPI\Client\Model\CycleType**](CycleType.md) |  |
**days_in_billing_cycle** | **int** | Number of days in the billing cycle, also known as the statement period. |
**fees** | **float** | Total amount of fees charged during the statement period. Does not include periodic fees. |
**interest** | **float** | Total amount of interest charged during the statement period. |
**opening_balance** | **float** | Balance of the credit account when the statement period began. |
**opening_date** | **\DateTime** | Date and time when the statement period began. |
**past_due_amount** | **float** | Total payment amount, required to make the account current. |
**payments** | **float** | Total amount of payments made during the statement period. |
**purchases** | **float** | Total amount of purchases made during the statement period. |
**token** | **string** | Unique identifier of the statement summary. |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
