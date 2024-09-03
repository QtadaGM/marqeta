# # RewardProgramsEntriesResponse

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**created_time** | **\DateTime** | Date and time when the reward entry was created on the Marqeta platform, in UTC. |
**mcc** | **string** | Merchant category code (MCC) of the related journal entry. | [optional]
**mid** | **string** | Merchant identifier (MID) of the related journal entry. | [optional]
**note** | **string** | A note providing information on the reward entry. |
**related_journal_entry_token** | **string** | Unique identifier of the related journal entry to which the reward rule was applied to trigger the reward entry. |
**related_redemption_token** | **string** | Unique identifier of the related redemption token that triggered the reward entry. | [optional]
**reward_program_token** | **string** | Unique identifier of the reward program for which to return reward entries. |
**reward_rules_config_token** | **string** | Unique identifier of the reward rules config used to determine the value of the reward entry. |
**status** | [**\OpenAPI\Client\Model\RewardEntryStatus**](RewardEntryStatus.md) |  |
**token** | **string** | Unique identifier of the reward entry. |
**transaction_amount** | **float** | The transaction amount to which the reward rule was applied. Used to determine the value of the reward entry. |
**value** | **float** | Value of the reward entry. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
