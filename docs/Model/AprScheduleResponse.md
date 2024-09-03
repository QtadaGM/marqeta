# # AprScheduleResponse

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**active** | **bool** | Whether the APR is active. | [optional]
**created_date** | **\DateTime** | Date and time when the APR was created on Marqeta&#39;s credit platform, in UTC. | [optional]
**schedule** | [**\OpenAPI\Client\Model\AprScheduleEntryResponse[]**](AprScheduleEntryResponse.md) | Contains one or more &#x60;schedule&#x60; objects, which contain information about the annual percentage rates (APRs) associated with the type of balance on the credit account and when they are effective. |
**type** | [**\OpenAPI\Client\Model\AccountAprType**](AccountAprType.md) |  |
**updated_date** | **\DateTime** | Date and time when the APR was last updated on Marqeta&#39;s credit platform, in UTC. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
