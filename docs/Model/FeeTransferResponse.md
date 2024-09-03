# # FeeTransferResponse

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**business_token** | **string** | Specifies the business account holder to which the fee applies. |
**created_time** | **\DateTime** | Date and time when the &#x60;fee_charge&#x60; object was created, in UTC. |
**fees** | [**\OpenAPI\Client\Model\FeeDetail[]**](FeeDetail.md) | Contains attributes that define characteristics of one or more fees. |
**tags** | **string** | Metadata about the fee charge.  This field is returned if it exists in the resource. | [optional]
**token** | **string** | Unique identifier of the fee transfer. |
**user_token** | **string** | Specifies the user account holder to which the fee applies. |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
