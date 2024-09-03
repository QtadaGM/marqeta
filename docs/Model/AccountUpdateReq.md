# # AccountUpdateReq

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**config** | [**\OpenAPI\Client\Model\AccountConfigUpdateReq**](AccountConfigUpdateReq.md) |  | [optional]
**credit_limit** | [**\OpenAPI\Client\Model\AccountUpdateReqCreditLimit**](AccountUpdateReqCreditLimit.md) |  | [optional]
**latest_statement_cycle_type** | [**\OpenAPI\Client\Model\CycleType**](CycleType.md) |  | [optional]
**usages** | [**\OpenAPI\Client\Model\AccountUsageUpdateReq[]**](AccountUsageUpdateReq.md) | Contains one or more &#x60;usages&#x60; objects that contain information on how a credit account is used and what types of balances are permitted on the account.  You can pass only one &#x60;usages&#x60; object per &#x60;usages.type&#x60;. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
