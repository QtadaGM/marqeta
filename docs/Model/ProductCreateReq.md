# # ProductCreateReq

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**card_product_tokens** | **string[]** | One or more associated card product tokens. |
**classification** | [**\OpenAPI\Client\Model\ProductClassification**](ProductClassification.md) |  |
**config** | [**\OpenAPI\Client\Model\ProductConfig**](ProductConfig.md) |  |
**credit_line** | [**\OpenAPI\Client\Model\ProductCreditLine**](ProductCreditLine.md) |  |
**currency_code** | [**\OpenAPI\Client\Model\CurrencyCode**](CurrencyCode.md) |  |
**description** | **string** | Description of the credit product. | [optional]
**interest_calculation** | [**\OpenAPI\Client\Model\InterestCalculation**](InterestCalculation.md) |  |
**min_payment_calculation** | [**\OpenAPI\Client\Model\ProductMinPaymentCalculation**](ProductMinPaymentCalculation.md) |  | [optional]
**min_payment_flat_amount** | **float** | Minimum payment, expressed as a flat amount, due on the payment due day. |
**min_payment_percentage** | **float** | Minimum payment, expressed as a percentage of the total statement balance, due on the payment due day. |
**name** | **string** | Name of the credit product. |
**payment_allocation_order** | [**\OpenAPI\Client\Model\PaymentAllocationOrderEnum[]**](PaymentAllocationOrderEnum.md) | Ordered list of balance types to which payments are allocated, from first to last. |
**product_sub_type** | [**\OpenAPI\Client\Model\ProductSubType**](ProductSubType.md) |  |
**product_type** | [**\OpenAPI\Client\Model\ProductType**](ProductType.md) |  |
**status** | [**\OpenAPI\Client\Model\ResourceStatus**](ResourceStatus.md) |  | [optional]
**token** | **string** | Unique identifier of the credit product. | [optional]
**usage** | [**\OpenAPI\Client\Model\BalanceType[]**](BalanceType.md) | One or more usage types for the credit product. |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
