# # RealTimeFeeGroupCreateRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**active** | **bool** | Indicates whether the real-time fee group is active. | [optional] [default to true]
**fee_tokens** | **string[]** | Unique identifiers of the fees in this real-time fee group. Send a &#x60;GET&#x60; request to &#x60;/fees&#x60; to retrieve fee resource tokens.  No two fees in the group can be applicable to the same transaction type (in other words, each fee must have a different value for its &#x60;real_time_assessment.transaction_type&#x60; field). | [optional]
**name** | **string** | Descriptive name for the real-time fee group. |
**token** | **string** | Unique identifier of the real-time fee group.  If you do not include a token, the system will generate one automatically. This token is necessary for use in other API calls, so we recommend that rather than let the system generate one, you use a simple string that is easy to remember. This value cannot be updated. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
