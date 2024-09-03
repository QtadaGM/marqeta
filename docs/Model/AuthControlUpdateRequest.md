# # AuthControlUpdateRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**active** | **bool** | Indicates whether the authorization control is active. | [optional] [default to true]
**association** | [**\OpenAPI\Client\Model\SpendControlAssociation**](SpendControlAssociation.md) |  | [optional]
**end_time** | **\DateTime** | Date and time when the exception ends, in UTC. | [optional]
**merchant_scope** | [**\OpenAPI\Client\Model\MerchantScope**](MerchantScope.md) |  | [optional]
**name** | **string** | Name of the authorization control. | [optional]
**start_time** | **\DateTime** | Date and time when the exception goes into effect, in UTC. | [optional]
**token** | **string** | Unique identifier of the authorization control. |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
