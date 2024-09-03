# # ProgramTransferResponse

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**amount** | **float** | Amount of program transfer. |
**business_token** | **string** | Unique identifier of the business account holder. Returned if &#x60;user_token&#x60; is not specified. | [optional]
**created_time** | **\DateTime** | Date and time when the program transfer object was created, in UTC. | [optional]
**currency_code** | **string** | Three-digit ISO 4217 currency code. |
**fees** | [**\OpenAPI\Client\Model\FeeDetail[]**](FeeDetail.md) | Contains attributes that define characteristics of one or more fees. | [optional]
**jit_funding** | [**\OpenAPI\Client\Model\JitFundingApi**](JitFundingApi.md) |  | [optional]
**memo** | **string** | Additional description of the program transfer. | [optional]
**tags** | **string** | Comma-delimited list of tags describing the program transfer. | [optional]
**token** | **string** | Unique identifier of the program transfer. | [optional]
**transaction_token** | **string** | Unique identifier of the transaction. |
**type_token** | **string** | Unique identifier of the program transfer type. |
**user_token** | **string** | Unique identifier of the user account holder. Returned if &#x60;business_token&#x60; is not specified. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
