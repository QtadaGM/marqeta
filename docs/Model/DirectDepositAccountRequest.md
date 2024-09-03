# # DirectDepositAccountRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**allow_immediate_credit** | **bool** |  | [optional] [default to false]
**business_token** | **string** | Required if &#39;user_token&#39; is null | [optional]
**customer_due_diligence** | [**\OpenAPI\Client\Model\CustomerDueDiligenceRequest[]**](CustomerDueDiligenceRequest.md) | Required if account type &#x3D; Checking | [optional]
**token** | **string** |  | [optional]
**type** | **string** |  | [optional]
**user_token** | **string** | Required if &#39;business_token&#39; is null | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
