# # BankTransferTransitionResponseModel

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**amount** | **float** |  | [optional]
**bank_transfer_token** | **string** | Unique identifier of the ACH transfer being transitioned. |
**batch_number** | **string** | Field required in older versions of the API, but no longer used. | [optional]
**channel** | **string** | Mechanism by which the transaction was initiated. |
**created_time** | **\DateTime** | Date and time when the ACH transfer was created, in UTC. | [optional]
**effective_date** | **\DateTime** |  | [optional]
**last_modified_time** | **\DateTime** | Date and time when the ACH transfer was last modified. | [optional]
**program_reserve_token** | **string** | Not currently used. | [optional]
**reason** | **string** | Explanation of why the transition is being made, for example \&quot;Created by POST call on API\&quot;. Returned if this information was supplied when the transition was originally created. | [optional]
**return_code** | **string** | Standardized ACH return code for a returned transaction, generally sent by the RDFI.  Transactions can be returned for any of the reasons listed in the &lt;&lt;/developer-guides/ach-origination#_nacha_ach_return_codes, NACHA ACH return codes table&gt;&gt; of the ACH Origination Guide. | [optional]
**return_reason** | **string** | Human-readable description correlating to the &#x60;return_code&#x60;, such as &#x60;Insufficient funds&#x60;, if a return code is present in the response. | [optional]
**reversal_after_45_days** | **bool** |  | [optional]
**status** | **string** | New state of the ACH transfer. |
**token** | **string** | Unique identifier of the bank transfer transition. | [optional]
**transaction_jit_token** | **string** | Transaction token for JIT-related ledger entries for the ACH transfer. | [optional]
**transaction_token** | **string** | Transaction token for *non*-JIT-related ledger entries for the ACH transfer. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
