# # CardGroup

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**card_tokens** | **string[]** | Array of card tokens associated with group. There will be at least one card token in the array. | [optional]
**created_time** | **\DateTime** | Date and time the card group was created in the system. The date and time is provided in ISO 8601 format. | [optional]
**last_issued_card_token** | **string** | Unique identifier of the last reissued card token associated with group. It may be empty if there is no reissued card. | [optional]
**source_card_token** | **string** | Unique identifier of the card token associated with group. This is the card that will be used to create the card group. The Card Group Service will send a request to JCard to verify that this card is not a reissue or replacement. |
**token** | **string** | Unique identifier of the card group.  If you do not include a token, the system will generate one automatically. This token is necessary for use in other API calls, so we recommend that rather than let the system generate one, you use a simple string that is easy to remember. This value cannot be updated. |
**updated_time** | **\DateTime** | Date and time the card group was last updated in the system. The date and time is provided in ISO 8601 format. | [optional]
**user_token** | **string** | Unique identifier of the user this card group belongs to. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
