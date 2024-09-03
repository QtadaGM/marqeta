# # AccountCreateReq

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**application_token** | **string** | Unique identifier of the associated credit account application. | [optional]
**bundle_token** | **string** | Unique identifier of the associated bundle.  You must pass either &#x60;bundle_token&#x60; or both &#x60;credit_product_token&#x60; and &#x60;external_offer_id&#x60;. | [optional]
**business_token** | **string** | Unique identifier of the parent business program.  Pass either a &#x60;user_token&#x60; or &#x60;business_token&#x60;. | [optional]
**config** | [**\OpenAPI\Client\Model\AccountConfigReq**](AccountConfigReq.md) |  | [optional]
**credit_limit** | **float** | Maximum balance the credit account can carry. |
**credit_product_token** | **string** | Unique identifier of the associated credit product.  This field is required if passing &#x60;external_offer_id&#x60;.  You must pass either both &#x60;credit_product_token&#x60; and &#x60;external_offer_id&#x60; or &#x60;bundle_token&#x60;. | [optional]
**description** | **string** | Description for the credit account. | [optional]
**external_offer_id** | **string** | Unique identifier you provide of the associated external credit offer.  This field is required if passing &#x60;credit_product_token&#x60;.  You must pass either both &#x60;external_offer_id&#x60; and &#x60;credit_product_token&#x60; or &#x60;bundle_token&#x60;. | [optional]
**name** | **string** | Name of the credit account. | [optional]
**token** | **string** | Unique identifier of the credit account. | [optional]
**usages** | [**\OpenAPI\Client\Model\AccountUsageCreateReq[]**](AccountUsageCreateReq.md) | Contains one or more &#x60;usages&#x60; objects that contain information on how a credit account is used and what types of balances are permitted on the account.  You can pass only one &#x60;usages&#x60; object per &#x60;usages.type&#x60;. |
**user_token** | **string** | Unique identifier of the primary account holder.  Pass either a &#x60;user_token&#x60; or &#x60;business_token&#x60;. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
