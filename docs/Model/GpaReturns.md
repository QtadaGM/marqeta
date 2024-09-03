# # GpaReturns

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**amount** | **float** | Amount of funds returned to the funding source. |
**created_time** | **\DateTime** | Date and time when the GPA unload order was created, in UTC. |
**funding** | [**\OpenAPI\Client\Model\Funding**](Funding.md) |  |
**funding_source_address_token** | **string** | Identifies the funding source used for this order. | [optional]
**funding_source_token** | **string** | Identifies the funding source used for this order. |
**jit_funding** | [**\OpenAPI\Client\Model\JitFundingApi**](JitFundingApi.md) |  | [optional]
**last_modified_time** | **\DateTime** | Date and time when the GPA unload order was last modified, in UTC. |
**memo** | **string** | Additional descriptive text. | [optional]
**original_order_token** | **string** | Identifies the original GPA order. | [optional]
**response** | [**\OpenAPI\Client\Model\Response**](Response.md) |  |
**state** | **string** | Current status of the GPA unload order. |
**tags** | **string** | Comma-delimited list of tags describing the GPA order. | [optional]
**token** | **string** | Unique identifier of the GPA unload order. |
**transaction_token** | **string** | Unique identifier of the transaction. |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
