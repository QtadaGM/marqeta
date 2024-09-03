# # PolicyProductResponse

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**card_products** | [**\OpenAPI\Client\Model\PolicyProductCardProductResponse[]**](PolicyProductCardProductResponse.md) | One or more card products associated with the credit product policy. | [optional]
**classification** | [**\OpenAPI\Client\Model\ProductClassification**](ProductClassification.md) |  | [optional]
**created_time** | **\DateTime** | Date and time when the credit product policy was created on Marqeta&#39;s credit platform, in UTC. | [optional]
**credit_line** | [**\OpenAPI\Client\Model\ProductCreditLine**](ProductCreditLine.md) |  | [optional]
**currency_code** | [**\OpenAPI\Client\Model\CurrencyCode**](CurrencyCode.md) |  | [optional]
**description** | **string** | Description of the credit product policy. | [optional]
**interest_calculation** | [**\OpenAPI\Client\Model\InterestCalculation**](InterestCalculation.md) |  | [optional]
**name** | **string** | Name of the credit product policy. | [optional]
**payments** | [**\OpenAPI\Client\Model\PolicyProductPaymentConfiguration**](PolicyProductPaymentConfiguration.md) |  | [optional]
**product_sub_type** | [**\OpenAPI\Client\Model\ProductSubType**](ProductSubType.md) |  | [optional]
**product_type** | [**\OpenAPI\Client\Model\ProductType**](ProductType.md) |  | [optional]
**token** | **string** | Unique identifier of the credit product policy. | [optional]
**updated_time** | **\DateTime** | Date and time when the credit product policy was last updated on Marqeta&#39;s credit platform, in UTC. | [optional]
**usage** | [**\OpenAPI\Client\Model\BalanceType[]**](BalanceType.md) | One or more usage types for the credit product policy. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
