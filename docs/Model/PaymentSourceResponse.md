# # PaymentSourceResponse

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**account_suffix** | **string** | Last four digits of the payment source account number. | [optional]
**account_token** | **string** | Unique identifier of the credit account receiving the payment. | [optional]
**bank_name** | **string** | Name of the bank associated with the routing number | [optional]
**business_token** | **string** | Unique identifier of the business making the payment. | [optional]
**created_time** | **\DateTime** | Date and time when the payment source was created on Marqeta&#39;s credit platform, in UTC. | [optional]
**last_modified_time** | **\DateTime** | Date and time when the payment source was last updated on Marqeta&#39;s credit platform, in UTC. | [optional]
**name** | **string** | Name of the individual or business who owns the payment source. | [optional]
**owner** | **string** | Type of payment source owner. | [optional]
**routing_number** | **string** | Routing number of the payment source. | [optional]
**source_type** | **string** | Type of payment source. | [optional]
**status** | [**\OpenAPI\Client\Model\PaymentSourceStatusEnum**](PaymentSourceStatusEnum.md) |  | [optional]
**token** | **string** | Unique identifier of the payment source. | [optional]
**user_token** | **string** | Unique identifier of the user making the payment. | [optional]
**verification_notes** | **string** | Additional information on the verification (for example, an external verification identifier that&#39;s outside Marqeta&#39;s credit platform). | [optional]
**verification_status** | **string** | Status of the verification for the payment source. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
