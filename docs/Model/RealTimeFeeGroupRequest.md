# # RealTimeFeeGroupRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**active** | **bool** | Indicates whether the real-time fee group is active. | [optional] [default to true]
**fee_tokens** | **string[]** | Specifies the fees in this real-time fee group. Send a &#x60;GET&#x60; request to &#x60;/fees&#x60; to retrieve fee resources tokens.  No two fees in the group can be applicable to the same transaction type (in other words, each fee must have a different value for its &#x60;real_time_assessment.transaction_type&#x60; field). | [optional]
**name** | **string** | Descriptive name for the real-time fee group. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
