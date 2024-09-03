# # BankTransferResponseModel

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**amount** | **float** | Amount to push or pull. |
**batch_number** | **string** | Field required in older versions of the API, but no longer used. | [optional]
**channel** | **string** | default &#x3D; API | [optional]
**created_by** | **string** |  | [optional]
**created_time** | **\DateTime** | Date and time when the ACH transfer was created, in UTC. | [optional]
**currency_code** | **string** | Valid alpha-3 link:https://www.iso.org/iso-4217-currency-codes.html[ISO 4217 currency code, window&#x3D;\&quot;_blank\&quot;] | [optional]
**funding_source_token** | **string** | ACH funding source token for the external account. |
**last_modified_time** | **\DateTime** | Date and time when the ACH transfer was last modified, in UTC. | [optional]
**memo** | **string** | Additional text describing the ACH transfer. | [optional]
**return_code** | **string** | Standardized ACH return code for a returned transaction, generally sent by the RDFI.  Transactions can be returned for any of the reasons listed in the &lt;&lt;/developer-guides/ach-origination#_nacha_ach_return_codes, NACHA ACH return codes table&gt;&gt; of the ACH Origination Guide. | [optional]
**return_reason** | **string** | Human-readable description correlating to the &#x60;return_code&#x60;, such as &#x60;Insufficient funds&#x60;, if a return code is present in the response. | [optional]
**standard_entry_class_code** | **string** | Three-letter code identifying the type of entry.  * *WEB* — An internet-initiated entry * *PPD* — Prearranged Payment and Deposit * *CCD* — Cash Concentration and Disbursement | [optional]
**statement_descriptor** | **string** | Description of the transaction, as it will appear on the receiver&#39;s bank statement. | [optional]
**status** | **string** | New state of the ACH transfer. | [optional]
**token** | **string** | Unique identifier of the ACH transfer to retrieve. | [optional]
**transfer_speed** | **string** | Specifies how quickly to initiate the ACH transfer.  *NOTE:* Same-day transfers are limited to a maximum amount of $100,000. | [optional]
**transitions** | [**\OpenAPI\Client\Model\BankTransferTransitionResponseModel[]**](BankTransferTransitionResponseModel.md) | Array of ACH transfer transition objects. | [optional]
**type** | **string** | Specifies whether the ACH transfer is a push (credit) or pull (debit). |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
