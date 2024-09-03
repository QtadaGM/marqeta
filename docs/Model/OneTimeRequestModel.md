# # OneTimeRequestModel

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**email** | **string** | Cardholder email address.  Required when neither the user token nor the admin access token is provided as the Basic Authentication password (case #3). | [optional]
**password** | **string** | Password to the cardholder&#39;s user account on the Marqeta platform.  Required when neither the user token nor the admin access token is provided as the Basic Authentication password (case #3). | [optional]
**user_token** | **string** | Identifies the cardholder whose data is accessed. Send a &#x60;GET&#x60; request to &#x60;/users&#x60; to retrieve cardholder tokens.  Required when the Basic Authentication password is set to an admin access token (case #2). | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
