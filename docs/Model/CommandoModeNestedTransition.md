# # CommandoModeNestedTransition

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**channel** | **string** | Mechanism that changed the Commando Mode control set&#39;s state. |
**commando_enabled** | **bool** | Indicates whether Commando Mode is enabled.  * If &#x60;commando_enabled&#x60; is &#x60;true&#x60; and &#x60;COMMANDO_MANUAL&#x60; is configured, all transactions are processed via Commando Mode. * If &#x60;commando_enabled&#x60; is &#x60;true&#x60; and &#x60;COMMANDO_AUTO&#x60; is configured, Commando Mode is ready to intervene only when a transaction times out or encounters an error. | [default to false]
**reason** | **string** | Describes the reason why the current state of the Commando Mode control set was last changed. | [optional]
**username** | **string** | Identifies the user who last changed the Commando Mode control set&#39;s state. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
