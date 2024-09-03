# # RewardResponse

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**account_token** | **string** | Unique identifier of the account on which the reward exists. | [optional]
**amount** | **float** | Amount of the reward. |
**applied_to_amount** | **float** | Total amount to which a percentage reward method is applied (for example, if a 3% reward is applied to 100, then &#x60;100&#x60; is the &#x60;applied_to_amount&#x60; value).  This field is not applicable for a flat fee method.  Returned for auto-cash back reward types only. | [optional]
**created_time** | **\DateTime** | Date and time when the reward was created on Marqeta&#39;s credit platform, in UTC. |
**currency_code** | [**\OpenAPI\Client\Model\CurrencyCode**](CurrencyCode.md) |  |
**description** | **string** | Description of the reward. |
**method** | [**\OpenAPI\Client\Model\Method**](Method.md) |  | [optional]
**note** | **string** | Additional information about the reward. | [optional]
**token** | **string** | Unique identifier of the reward.  If in the &#x60;detail_object&#x60;, unique identifier of the detail object. |
**type** | [**\OpenAPI\Client\Model\RewardType**](RewardType.md) |  |
**updated_time** | **\DateTime** | Date and time when the reward was last updated on Marqeta&#39;s credit platform, in UTC. |
**value** | **float** | Value of the percentage or flat amount.  Returned for auto-cash back reward types only. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
