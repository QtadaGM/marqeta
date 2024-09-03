# # RewardProgramsRulesConfigsResponse

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**accrual_type** | [**\OpenAPI\Client\Model\AccrualType**](AccrualType.md) |  |
**created_time** | **\DateTime** | Date and time when the reward rules config was created on the Marqeta platform, in UTC. |
**greater_than** | **float** | Minimum amount that the balance for a billing cycle can be to apply the specified reward percentage. For example, if the &#x60;greater_than&#x60; value is &#x60;500&#x60;, the account holder earns _x_% of the account balance if they spend over $500 during a billing cycle. | [optional]
**is_active** | **bool** | A value of &#x60;true&#x60; indicates that the reward rules config is active. |
**less_than** | **float** | Maximum amount that the balance for a billing cycle can be to apply the specified reward percentage. For example, if the &#x60;less_than&#x60; value is &#x60;1500&#x60;, the account holder earns _x_% of the account balance if they spend under $1500 during a billing cycle. | [optional]
**mcc** | **string** | Merchant category code (MCC) of the related journal entry. | [optional]
**percentage** | **float** | The reward percentage applied when the balance for a billing cycle is within the range specified in the &#x60;less_than&#x60; and &#x60;greater_than&#x60; fields. For example, if the &#x60;percentage&#x60; is &#x60;1&#x60;, the account holder earns 1% of the account balance if they spend between the &#x60;less_than&#x60; and &#x60;greater_than&#x60; amounts during a billing cycle. |
**reward_program_token** | **string** | Unique identifier of the reward program on which the rules config is applied. |
**token** | **string** | Unique identifier of the reward rules config. |
**updated_time** | **\DateTime** | Date and time when the reward rules config was last updated on the Marqeta platform, in UTC. |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
