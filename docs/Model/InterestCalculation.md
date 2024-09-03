# # InterestCalculation

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**application_of_credits** | [**\OpenAPI\Client\Model\ApplicationOfCredits**](ApplicationOfCredits.md) |  |
**day_count** | **string** | Day-count convention. |
**exclude_tran_types** | **string[]** | One or more transactions that are excluded from current billing period&#39;s interest charge, but included in next. | [optional]
**grace_days_application** | **string** | Determines the last day of grace period based on which interest charges are calculated. |
**interest_application** | **string[]** | One or more balance types on which interest is applied. |
**interest_on_grace_reactivation** | [**\OpenAPI\Client\Model\InterestOnGraceReactivationEnum**](InterestOnGraceReactivationEnum.md) |  |
**method** | **string** | Method of interest calculation. |
**minimum_interest** | **float** | When interest is applied, this value determines the minimum amount of interest that can be charged. |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
