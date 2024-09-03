# # GatewayLogModel

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**duration** | **int** | Length of time in milliseconds that the gateway took to respond to a funding request. | [optional]
**message** | **string** | Message about the status of the funding request. Useful for determining whether it was approved and completed successfully, declined by the gateway, or timed out. |
**order_number** | **string** | Customer order number, same value as &#x60;transaction.token&#x60;. |
**response** | [**\OpenAPI\Client\Model\GatewayResponse**](GatewayResponse.md) |  | [optional]
**timed_out** | **bool** | Whether the gateway sent a response (&#x60;true&#x60;) or timed out (&#x60;false&#x60;). | [optional] [default to false]
**transaction_id** | **string** | Customer-defined identifier for the transaction. |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
