# # WebhookResponseModel

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**active** | **bool** | Indicates whether the webhook is active. This field is returned if you included it in your webhook. | [optional] [default to true]
**config** | [**\OpenAPI\Client\Model\WebhookConfigModel**](WebhookConfigModel.md) |  |
**created_time** | **\DateTime** | Date and time when the webhook event was created, in UTC. | [optional]
**events** | **string[]** | Specifies the types of events for which notifications are sent.  The wildcard character &#x60;\\*&#x60; indicates that you receive all webhook notifications, or all notifications of a specified category. For example, &#x60;*&#x60; indicates that you receive all webhook notifications; &#x60;transaction.*&#x60; indicates that you receive all &#x60;transaction&#x60; webhook notifications.  *NOTE:* You can only use the wildcard character with the _base_ type events, not subcategories. For example, you cannot subscribe to &#x60;cardtransition.fulfillment.\\*&#x60; events, but you can subscribe to &#x60;cardtransition.*&#x60;. |
**last_modified_time** | **\DateTime** | Date and time when the associated object was last modified, in UTC. | [optional]
**name** | **string** | Descriptive name of the webhook. |
**token** | **string** | Unique identifier of the webhook. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
