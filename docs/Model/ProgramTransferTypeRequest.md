# # ProgramTransferTypeRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**memo** | **string** | Memo or note describing the program transfer type. |
**program_funding_source_token** | **string** | Unique identifier of the program funding source to which program transfers will be credited.  Send a &#x60;GET&#x60; request to &#x60;/fundingsources/program&#x60; to retrieve program funding source tokens. |
**tags** | **string** | Comma-delimited list of tags describing the program transfer type. | [optional]
**token** | **string** | Unique identifier of the program transfer type.  If you do not include a token, the system will generate one automatically. This token is necessary for use in other API calls, so we recommend that rather than let the system generate one, you use a simple string that is easy to remember. This value cannot be updated. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
