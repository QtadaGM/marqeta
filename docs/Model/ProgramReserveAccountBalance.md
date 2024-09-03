# # ProgramReserveAccountBalance

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**available_balance** | **float** | Ledger balance, minus any authorized transactions that have not yet cleared. When using JIT Funding, this balance is usually equal to $0.00. | [optional] [readonly]
**balances** | [**array<string,\OpenAPI\Client\Model\ProgramReserveAccountBalance>**](ProgramReserveAccountBalance.md) | Contains program reserve account balance information, organized by currency code. Sometimes referred to as a _program funding account_. | [optional]
**credit_balance** | **float** | Not currently in use. | [optional] [readonly]
**currency_code** | **string** | Three-digit ISO 4217 currency code. | [optional]
**ledger_balance** | **float** | When using standard funding: The funds that are available to spend immediately, including funds from any authorized transactions that have not yet cleared. When using Just-in-Time (JIT) Funding: Authorized funds that are currently on hold, but not yet cleared. | [optional] [readonly]
**pending_credits** | **float** | ACH loads that have been accepted, but for which the funding time has not yet elapsed. | [optional] [readonly]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
