# # DisputeCreateReq

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**amount** | **float** | Amount of the dispute. Max value is equal to the value of the original transaction. |
**category** | [**\OpenAPI\Client\Model\DisputeCategory**](DisputeCategory.md) |  |
**ledger_entry_token** | **string** | Unique identifier of the journal entry (&#x60;authorization.clearing&#x60; type only) in dispute. |
**notes** | **string** | Additional information on the dispute (for example, a reason for the dispute). | [optional]
**token** | **string** | Unique identifier of the dispute. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
