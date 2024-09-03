# # ProductResponse

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**card_product_tokens** | **string[]** | One or more associated card product tokens. | [optional]
**classification** | [**\OpenAPI\Client\Model\ProductClassification**](ProductClassification.md) |  | [optional]
**config** | [**\OpenAPI\Client\Model\ProductConfig**](ProductConfig.md) |  | [optional]
**created_time** | **\DateTime** | Date and time when the credit product was created on Marqeta&#39;s credit platform, in UTC. | [optional]
**credit_line** | [**\OpenAPI\Client\Model\ProductCreditLine**](ProductCreditLine.md) |  | [optional]
**currency_code** | [**\OpenAPI\Client\Model\CurrencyCode**](CurrencyCode.md) |  | [optional]
**description** | **string** | Description of the credit product. | [optional]
**interest_calculation** | [**\OpenAPI\Client\Model\InterestCalculation**](InterestCalculation.md) |  | [optional]
**min_payment_calculation** | [**\OpenAPI\Client\Model\ProductMinPaymentCalculation**](ProductMinPaymentCalculation.md) |  | [optional]
**min_payment_flat_amount** | **float** | Minimum payment, expressed as a flat amount, due on the payment due day. | [optional]
**min_payment_percentage** | **float** | Minimum payment, expressed as a percentage of the total statement balance, due on the payment due day. | [optional]
**name** | **string** | Name of the credit product. | [optional]
**parent_product_token** | **string** | Unique identifier of the parent credit product. | [optional]
**payment_allocation_order** | [**\OpenAPI\Client\Model\PaymentAllocationOrderEnum[]**](PaymentAllocationOrderEnum.md) | Ordered list of balance types to which payments are allocated, from first to last. | [optional]
**product_sub_type** | [**\OpenAPI\Client\Model\ProductSubType**](ProductSubType.md) |  | [optional]
**product_type** | [**\OpenAPI\Client\Model\ProductType**](ProductType.md) |  | [optional]
**status** | [**\OpenAPI\Client\Model\ResourceStatus**](ResourceStatus.md) |  | [optional]
**token** | **string** | Unique identifier of the credit product. | [optional]
**updated_time** | **\DateTime** | Date and time when the credit product was last updated on Marqeta&#39;s credit platform, in UTC. | [optional]
**usage** | [**\OpenAPI\Client\Model\BalanceType[]**](BalanceType.md) | One or more usage types for the credit product. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
