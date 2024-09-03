# # SubstatusResponse

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**attributes** | [**\OpenAPI\Client\Model\SubstatusCreateReqAttributes[]**](SubstatusCreateReqAttributes.md) | Additional dynamic attributes related to the substatus. | [optional]
**created_time** | **\DateTime** | Date and time when the substatus was created on Marqeta&#39;s credit platform, in UTC. | [optional]
**events** | [**\OpenAPI\Client\Model\SubstatusEventResponseDetails[]**](SubstatusEventResponseDetails.md) | List of events related to the substatus. | [optional]
**is_active** | **bool** | Flag indicating whether the substatus is active (false when deactivated). |
**resource_token** | **string** | substatus resource token |
**resource_type** | **string** | substatus resource type |
**state** | **string** | state of the substatus | [optional]
**substatus** | **string** | substatus |
**token** | **string** | substatus token |
**updated_time** | **\DateTime** | Date and time when the substatus was last updated on Marqeta&#39;s credit platform, in UTC. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
