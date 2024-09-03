# # AccountResponse

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**activation_time** | **\DateTime** | Date and time when the credit account was activated on Marqeta&#39;s credit platform, in UTC. | [optional]
**available_credit** | **float** | Amount of credit available for use on the credit account. |
**bundle_token** | **string** | Unique identifier of the associated bundle product. | [optional]
**business_token** | **string** | Unique identifier of the parent business program.  Either a &#x60;user_token&#x60; or &#x60;business_token&#x60; is returned, not both. | [optional]
**config** | [**\OpenAPI\Client\Model\AccountConfigResponse**](AccountConfigResponse.md) |  |
**created_time** | **\DateTime** | Date and time when the credit account was created on Marqeta&#39;s credit platform, in UTC. |
**credit_limit** | **float** | Maximum balance the credit account can carry. |
**credit_product_token** | **string** | Unique identifier of the associated credit product. | [optional]
**currency_code** | [**\OpenAPI\Client\Model\CurrencyCode**](CurrencyCode.md) |  |
**current_balance** | **float** | Current purchase balance on the credit account. |
**description** | **string** | Description for the credit account. | [optional]
**external_offer_id** | **string** | Unique identifier you provide of the associated external credit offer. | [optional]
**latest_statement_cycle_type** | [**\OpenAPI\Client\Model\CycleType**](CycleType.md) |  | [optional]
**max_apr_schedules** | [**\OpenAPI\Client\Model\MaxAPRSchedulesResponse[]**](MaxAPRSchedulesResponse.md) | Contains &#x60;max_apr_schedule&#x60; objects, which provide information about any temporary overrides of the APRs on the credit account. This could include special APR rates due to account/user sub status changes. | [optional]
**name** | **string** | Name of the credit account. | [optional]
**remaining_min_payment_due** | **float** | Amount remaining on the latest statement&#39;s minimum payment, after it&#39;s adjusted for payments, returned payments, and applicable credits that occurred after the latest statement&#39;s closing date. |
**remaining_statement_balance** | **float** | Amount remaining on the latest statement&#39;s balance, after it&#39;s adjusted for payments, returned payments, and applicable credits that occurred after the latest statement&#39;s closing date. |
**status** | [**\OpenAPI\Client\Model\AccountStatusEnum**](AccountStatusEnum.md) |  |
**substatuses** | **string[]** | Substatuses of the credit account. | [optional]
**token** | **string** | Unique identifier of the credit account. |
**type** | [**\OpenAPI\Client\Model\AccountType**](AccountType.md) |  | [optional]
**updated_time** | **\DateTime** | Date and time when the credit account was last updated on Marqeta&#39;s credit platform, in UTC. |
**usages** | [**\OpenAPI\Client\Model\AccountUsageResponse[]**](AccountUsageResponse.md) | Contains one or more &#x60;usages&#x60; objects that contain information on how a credit account is used and what types of balances are permitted on the account. |
**user_substatuses** | **string[]** | Substatuses of the users under the credit account. | [optional]
**user_token** | **string** | Unique identifier of the primary account holder.  Either a &#x60;user_token&#x60; or &#x60;business_token&#x60; is returned, not both. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
