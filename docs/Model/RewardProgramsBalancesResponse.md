# # RewardProgramsBalancesResponse

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**billing_cycle_closing_date** | **\DateTime** | Closing date of the billing cycle for which rewards were accrued, in UTC. |
**billing_cycle_opening_date** | **\DateTime** | Opening date of the billing cycle for which rewards were accrued, in UTC. |
**net_balance** | **float** | The net balance for a billing cycle, which is total amount spent during a billing cycle, minus any refunds or reversals. Used to determine reward accrual. |
**pending_reward_balance** | **float** | The pending balance of the rewards accrued for the current billing cycle. Pending rewards cannot be redeemed. |
**percentage** | **float** | The reward percentage applied to the balance for the current billing cycle. Determined by the reward rules config. |
**reward_program_token** | **string** | Unique identifier of reward program for which to return balances. |
**total_reward_balance** | **float** | The total balance of the rewards accrued to date minus the rewards redeemed to date. |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
