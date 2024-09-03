# # ChargebackResponse

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**amount** | **float** | Amount of the chargeback. |
**channel** | **string** | Channel the chargeback came through. |
**created_time** | **\DateTime** | Date and time when the chargeback was created. Not returned for transactions when the associated chargeback is in the &#x60;INITIATED&#x60; state. |
**credit_user** | **bool** | Whether to credit the user for the chargeback amount. | [default to false]
**last_modified_time** | **\DateTime** | Date and time when the chargeback was last modified. Not returned for transactions when the associated chargeback is in the &#x60;INITIATED&#x60; state. |
**memo** | **string** | Additional comments about the chargeback. | [optional]
**network** | **string** | Network handling the chargeback. |
**network_case_id** | **string** | Network-assigned identifier of the chargeback. | [optional]
**reason_code** | **string** | Identifies the standardized reason for the chargeback. | [optional]
**state** | **string** | State of the case. |
**token** | **string** | Unique identifier of the chargeback. |
**transaction_token** | **string** | Unique identifier of the transaction being charged back. |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
