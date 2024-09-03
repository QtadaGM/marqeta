# # AuthControlRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**active** | **bool** | Indicates whether the authorization control is active. | [optional] [default to true]
**association** | [**\OpenAPI\Client\Model\SpendControlAssociation**](SpendControlAssociation.md) |  | [optional]
**end_time** | **\DateTime** | Date and time when the exception ends, in UTC. | [optional]
**merchant_scope** | [**\OpenAPI\Client\Model\AuthControlMerchantScope**](AuthControlMerchantScope.md) |  | [optional]
**name** | **string** | Name of the authorization control. |
**start_time** | **\DateTime** | Date and time when the exception goes into effect, in UTC. | [optional]
**token** | **string** | Unique identifier of the authorization control.  If you do not include a token, the system will generate one automatically. This token is necessary for use in other API calls, so we recommend that rather than let the system generate one, you use a simple string that is easy to remember. This value cannot be updated. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
