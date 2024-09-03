# # RedemptionTransitionsResponse

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**created_time** | **\DateTime** | Date and time when the reward redemption transition was created on Marqeta&#39;s credit platform. |
**external_settlement_date_time** | **\DateTime** | Date and time when the reward redemption was settled on your external platform.  This field is returned if you handled the reward redemption outside of Marqeta&#39;s credit platform. | [optional]
**initial_status** | [**\OpenAPI\Client\Model\RedemptionStatus**](RedemptionStatus.md) |  |
**new_status** | [**\OpenAPI\Client\Model\RedemptionStatus**](RedemptionStatus.md) |  |
**redemption_token** | **string** | Unique identifier of the redemption whose status was transitioned. |
**token** | **string** | Unique identifier of the reward redemption transition. |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
