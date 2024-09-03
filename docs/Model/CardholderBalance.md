# # CardholderBalance

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**available_balance** | **float** | Ledger balance minus any authorized transactions that have not yet cleared. Also known as the cardholder&#39;s purchasing power. When using JIT Funding, this balance is usually equal to $0.00. |
**balances** | [**array<string,\OpenAPI\Client\Model\CardholderBalance>**](CardholderBalance.md) | Contains GPA balance information, organized by currency code. |
**cached_balance** | **float** | Not currently in use. |
**credit_balance** | **float** | Not currently in use. |
**currency_code** | **string** | Three-digit ISO 4217 currency code. |
**impacted_amount** | **float** | Balance change based on the amount of the transaction. | [optional]
**last_updated_time** | **\DateTime** | Date and time when the resource was last updated, in UTC. |
**ledger_balance** | **float** | When using standard funding: The funds that are available to spend immediately, including funds from any authorized transactions that have not yet cleared. When using Just-in-Time (JIT) Funding: Authorized funds that are currently on hold, but not yet cleared. |
**pending_credits** | **float** | ACH loads that have been accepted, but for which the funding time has not yet elapsed. |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
