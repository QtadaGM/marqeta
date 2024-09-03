# # RewardProgramsEntriesBalanceResponse

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**created_date** | **\DateTime** | Date and time the reward entries balance was created on the Marqeta platform, in UTC. | [optional]
**end_date** | **\DateTime** | The ending date (or date-time) of a date range from which to return accrued rewards, in UTC. Reward entries created on or before this date count toward the total reward balance. |
**reward_program_token** | **string** | Unique identifier of the reward program for which to retrieve the reward entries balance. |
**start_date** | **\DateTime** | The starting date (or date-time) of a date range from which to return accrued rewards, in UTC. Reward entries created on or after this date count toward the total reward balance. |
**total_reward_balance** | **float** | The total balance of rewards accrued within a date range. |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
