# # RealTimeStandinCriteria

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**enabled** | **bool** | If set to &#x60;true&#x60;, Commando Mode is automatically enabled by events defined in the &#x60;real_time_standin_criteria&#x60; object. If set to &#x60;false&#x60;, Auto Commando Mode is not enabled. | [optional] [default to false]
**include_application_errors** | **bool** | If set to &#x60;true&#x60;, an application error (any non-connection, non-timeout error) automatically enables Commando Mode when &#x60;real_time_standin_criteria.enabled&#x60; is also &#x60;true&#x60;. | [optional] [default to false]
**include_connection_errors** | **bool** | If set to &#x60;true&#x60;, a non-timeout connection error automatically enables Commando Mode when &#x60;real_time_standin_criteria.enabled&#x60; is also &#x60;true&#x60;. | [optional] [default to false]
**include_response_timeouts** | **bool** | If set to &#x60;true&#x60;, a gateway response slower than 3000ms automatically enables Commando Mode when &#x60;real_time_standin_criteria.enabled&#x60; is also &#x60;true&#x60;. | [optional] [default to false]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
