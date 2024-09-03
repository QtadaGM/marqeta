# # UnloadRequestModel

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**amount** | **float** | Amount of funds to return to the funding source. |
**funding_source_address_token** | **string** | Unique identifier of the funding source to use for this GPA unload order.  Send a &#x60;GET&#x60; request to &#x60;/fundingsources/addresses/user/{token}&#x60; to retrieve addresses for a specific user. | [optional]
**memo** | **string** | Additional descriptive text about the GPA unload. | [optional]
**original_order_token** | **string** | Unique identifier of the original GPA order. |
**tags** | **string** | Comma-delimited list of tags describing the GPA unload order. | [optional]
**token** | **string** | Unique identifier of the GPA unload order.  If you do not include a token, the system will generate one automatically. This token is necessary for use in other calls, so we recommend that rather than let the system generate one, you use a simple string that is easy to remember. This value cannot be updated. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
