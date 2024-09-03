# # CommandoModeEnables

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**auth_controls** | **string[]** | Unique identifiers of the authorization controls enabled while in Commando Mode. | [optional]
**ignore_card_suspended_state** | **bool** | If set to &#x60;true&#x60;, transactions conducted while Commando Mode is enabled proceed even when the card is suspended. If set to &#x60;false&#x60;, transactions conducted while Commando Mode is enabled are declined if the card is suspended. | [optional] [default to false]
**program_funding_source** | **string** | Unique identifier of the program funding source that substitutes for the program gateway funding source upon Commando Mode enablement. |
**use_cache_balance** | **bool** | This field is not currently in use. | [optional] [default to false]
**velocity_controls** | **string[]** | Unique identifiers of the velocity controls enabled while in Commando Mode.  Velocity controls that are enabled in Commando Mode are inactive until a Commando Mode event occurs. When Commando Mode velocity controls are activated, they conform to the &#x60;velocity_window&#x60; specified in that velocity control. For example, a &#x60;velocity_window&#x60; of &#x60;DAY&#x60; is one calendar day starting at 00:00:00 UTC. If a Commando Mode event occurs at 11:59:59 UTC, the &#x60;DAY&#x60; window includes all transactions that occurred between 00:00:00 and 11:59:59 on that calendar day. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
