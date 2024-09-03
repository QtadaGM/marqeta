# # RedemptionsResponse

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**amount** | **float** | Amount to redeem. |
**created_time** | **\DateTime** | Date and time when the reward redemption was created on the Marqeta platform, in UTC. |
**destination** | [**\OpenAPI\Client\Model\DestinationType**](DestinationType.md) |  | [optional]
**external_settlement_date_time** | **\DateTime** | Date and time when the reward redemption was settled on your external platform.  This field is returned if you handled the reward redemption outside of Marqeta&#39;s credit platform. | [optional]
**note** | **string** | A note providing information on the reward redemption. |
**receiving_account_token** | **string** | Unique identifier of the external account receiving the reward redemption. This token is equivalent to the &lt;&lt;/core-api/payment-sources, payment source&gt;&gt; token. | [optional]
**related_reward_entries** | [**\OpenAPI\Client\Model\RewardProgramsEntriesResponse[]**](RewardProgramsEntriesResponse.md) | Contains one or more reward entries related to the redemption. | [optional]
**reward_program_token** | **string** | Unique identifier of the reward program for which to redeem rewards. |
**sor_reward_token** | **string** | Unique identifier of the system of reward (SOR) reward that was created to represent the reward redemption as a &#x60;STATEMENT_CREDIT&#x60; on a credit account. The SOR entry is a positive amount that is added to the account balance. | [optional]
**status** | [**\OpenAPI\Client\Model\RedemptionStatus**](RedemptionStatus.md) |  |
**token** | **string** | Unique identifier of the reward redemption. |
**type** | [**\OpenAPI\Client\Model\RedemptionType**](RedemptionType.md) |  |
**updated_time** | **\DateTime** | Date and time when the reward redemption was last updated on the Marqeta platform, in UTC. |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
