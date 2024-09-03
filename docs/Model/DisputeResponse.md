# # DisputeResponse

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**account_token** | **string** | Unique identifier of the credit account on which the dispute was created. |
**amount** | **float** | Amount of the dispute. |
**category** | [**\OpenAPI\Client\Model\DisputeCategory**](DisputeCategory.md) |  |
**created_time** | **\DateTime** | Date and time when the dispute was created on Marqeta&#39;s credit platform, in UTC. |
**ledger_entry_token** | **string** | Unique identifier of the journal entry (&#x60;authorization.clearing&#x60; type only) in dispute. |
**notes** | **string** | Additional information on the dispute (for example, a reason for the dispute). | [optional]
**resolved_at** | **\DateTime** | Date and time when the dispute was resolved and no longer in &#x60;ACTIVE&#x60; status. | [optional]
**status** | [**\OpenAPI\Client\Model\DisputeStatus**](DisputeStatus.md) |  |
**token** | **string** | Unique identifier of the dispute. |
**updated_time** | **\DateTime** | Date and time when the dispute was last updated on Marqeta&#39;s credit platform, in UTC. |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
