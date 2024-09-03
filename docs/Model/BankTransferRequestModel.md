# # BankTransferRequestModel

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**amount** | **float** | Amount to push or pull. |
**channel** | **string** | default &#x3D; API | [optional]
**created_by** | **string** |  | [optional]
**currency_code** | **string** | Currency of the push or pull. | [optional]
**funding_source_token** | **string** | ACH funding source token for the external account. |
**memo** | **string** | Additional text describing the ACH transfer. | [optional]
**standard_entry_class_code** | **string** | Three-letter code identifying the type of entry.  * *WEB* — An internet-initiated entry * *PPD* — Prearranged Payment and Deposit * *CCD* — Cash Concentration and Disbursement | [optional]
**statement_descriptor** | **string** | Description of the transaction, as it will appear on the receiver&#39;s bank statement. | [optional]
**token** | **string** | Unique identifier of the ACH transfer to retrieve. | [optional]
**transfer_speed** | **string** | Specifies how quickly to initiate the ACH transfer.  *NOTE:* Same-day transfers are limited to a maximum amount of $100,000. | [optional]
**type** | **string** | Specifies whether the ACH transfer is a push (credit) or pull (debit). |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
