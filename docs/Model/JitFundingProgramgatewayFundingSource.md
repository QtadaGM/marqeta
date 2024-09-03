# # JitFundingProgramgatewayFundingSource

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**always_fund** | **bool** | If set to &#x60;true&#x60;, this card product is always funded from this program gateway funding source. | [optional] [default to false]
**enabled** | **bool** | Specifies whether JIT Funding is enabled or disabled for the program gateway funding source. A value of &#x60;true&#x60; indicates that the program gateway funding source is enabled and will be debited when swipes occur. | [optional] [default to false]
**funding_source_token** | **string** | Unique identifier of the already existing funding source. Required if JIT Funding is enabled. | [optional]
**refunds_destination** | **string** | Specifies the return destination for refunds in the case of a transaction reversal. In most cases, you should set the value to &#x60;GATEWAY&#x60;, which returns funds to the program gateway funding source. Setting to &#x60;GPA&#x60; returns the funds to the user&#39;s GPA, which creates a positive account balance and introduces the potential of a transaction being authorized without a JIT Funding request being sent to the gateway. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
