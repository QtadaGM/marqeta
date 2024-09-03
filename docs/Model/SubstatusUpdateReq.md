# # SubstatusUpdateReq

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**channel** | **string** | The channel through which deactivation is occurring: - **ADMIN**: Added through the Marqeta Dashboard. - **API**: Initiated through the Core API. - **FRAUD**: Determined by Marqeta or the card network. - **SYSTEM**: Initiated by Marqeta | [optional]
**effective_date** | **\DateTime** | Effective date of the deactivation, in UTC. | [optional]
**reason** | **string** | Reason for deactivating the substatus. | [optional]
**state** | **string** | The state of the substatus. |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
