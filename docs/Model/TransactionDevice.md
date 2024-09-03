# # TransactionDevice

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**binding_id** | **string** | Unique identifier of the data component bound to the credential. | [optional]
**ip_address** | **string** | IP address of the device. The presence of the IP address helps determine if the transaction was initiated from an unusual network, helping establish a pattern of safe device usage that further confirms the authenticity of the consumer who initiated the transaction. | [optional]
**location** | **string** | Geographic coordinates of the device. Contains the latitude and longitude of the device used when the cardholder was authenticated during checkout. This field helps to determine if the transaction was initiated from an unexpected location. | [optional]
**phone_number** | **string** | Telephone number of the device. Contains the phone number that was used to authenticate the consumer during checkout, or the consumer&#39;s preferred phone number. The presence of the phone number helps establish the consumer&#39;s authenticity when matching the phone number provided during checkout to a list of known phone numbers for the consumer. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
