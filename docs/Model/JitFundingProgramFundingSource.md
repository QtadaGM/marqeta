# # JitFundingProgramFundingSource

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**enabled** | **bool** | Specifies whether JIT Funding is enabled or disabled for the program funding source. A value of &#x60;true&#x60; indicates that the program funding source is enabled and will be debited when swipes occur. | [optional] [default to false]
**funding_source_token** | **string** | Unique identifier of the already existing funding source. Required if JIT Funding is enabled. | [optional]
**refunds_destination** | **string** | Specifies the return destination for refunds in the case of a transaction reversal. &#x60;PROGRAM_FUNDING_SOURCE&#x60; returns funds to the program funding source. &#x60;GPA&#x60; returns the funds to the user&#39;s GPA. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
