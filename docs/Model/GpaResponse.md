# # GpaResponse

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**amount** | **float** | Amount funded. |
**business_token** | **string** | Unique identifier of the business.  This field is returned if it exists in the resource. | [optional]
**created_time** | **\DateTime** | Date and time when the GPA order was created, in UTC. |
**currency_code** | **string** | Three-digit ISO 4217 currency code. |
**fees** | [**\OpenAPI\Client\Model\FeeDetail[]**](FeeDetail.md) | List of fees associated with the funding transaction.  This array is returned if it exists in the resource. | [optional]
**funding** | [**\OpenAPI\Client\Model\Funding**](Funding.md) |  |
**funding_source_address_token** | **string** | Unique identifier of the funding source address to use for this order. | [optional]
**funding_source_token** | **string** | Unique identifier of the funding source to use for this order. |
**gateway_message** | **string** | Message about the status of the funding request. Useful for determining whether it was approved and completed successfully, declined by the gateway, or timed out.  This field is returned if it exists in the resource. | [optional]
**gateway_token** | **int** | Unique identifier of the JIT Funding request and response.  This field is returned if it exists in the resource. | [optional]
**jit_funding** | [**\OpenAPI\Client\Model\JitFundingApi**](JitFundingApi.md) |  | [optional]
**last_modified_time** | **\DateTime** | Date and time when the GPA order was last modified, in UTC. |
**memo** | **string** | Additional descriptive text.  This field is returned if it exists in the resource. | [optional]
**response** | [**\OpenAPI\Client\Model\Response**](Response.md) |  |
**state** | **string** | Current status of the funding transaction. |
**tags** | **string** | Comma-delimited list of tags describing the GPA order.  This field is returned if it exists in the resource. | [optional]
**token** | **string** | Unique identifier of the GPA order. |
**transaction_token** | **string** | Unique identifier of the transaction being funded. |
**user_token** | **string** | Unique identifier of the user resource.  This field is returned if it exists in the resource. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
