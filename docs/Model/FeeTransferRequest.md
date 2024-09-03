# # FeeTransferRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**business_token** | **string** | Specifies the business account holder to which the fee applies.  Pass either &#x60;business_token&#x60; or &#x60;user_token&#x60;, not both. |
**fees** | [**\OpenAPI\Client\Model\FeeModel[]**](FeeModel.md) | Contains attributes that define characteristics of one or more fees. |
**tags** | **string** | Metadata about the transfer. | [optional]
**token** | **string** | Unique identifier of the fee transfer.  If you do not include a token, the system will generate one automatically. This token is necessary for use in other API calls, so we recommend that rather than let the system generate one, you use a simple string that is easy to remember. This value cannot be updated. | [optional]
**user_token** | **string** | Specifies the user account holder to which the fee applies.  Pass either &#x60;user_token&#x60; or &#x60;business_token&#x60;, not both. |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
