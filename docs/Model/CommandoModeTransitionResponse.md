# # CommandoModeTransitionResponse

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**commando_mode_token** | **string** | Unique identifier of the Commando Mode control set. | [optional]
**created_time** | **\DateTime** | Date and time when the resource was created, in UTC. |
**name** | **string** | Identifies the user who changed the Commando Mode control set&#39;s state. | [optional]
**token** | **string** | Unique identifier of the Command Mode control set transition object. | [optional]
**transition** | [**\OpenAPI\Client\Model\CommandoModeNestedTransition**](CommandoModeNestedTransition.md) |  | [optional]
**type** | **string** | Specifies the type of event that triggered the Commando Mode transition, such as a &#x60;connection_error&#x60; or &#x60;response_timeout&#x60;. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
