# # BankTransferTransitionRequestModel

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**amount** | **float** |  | [optional]
**bank_transfer_token** | **string** | Token of the ACH transfer you want to transition. |
**batch_number** | **string** | Field required in older versions of the API, but no longer used. | [optional]
**channel** | **string** | Mechanism by which the transaction was initiated. |
**effective_date** | **\DateTime** |  | [optional]
**program_reserve_token** | **string** | Not currently used. | [optional]
**reason** | **string** | Description of why the ACH transfer status was updated. | [optional]
**return_code** | **string** | Standardized ACH return code for a returned transaction, generally sent by the RDFI.  Transactions can be returned for any of the reasons listed in the &lt;&lt;/developer-guides/ach-origination#_nacha_ach_return_codes, NACHA ACH return codes table&gt;&gt; of the ACH Origination Guide. | [optional]
**reversal_after_45_days** | **bool** |  | [optional]
**status** | **string** | New state of the ACH transfer.  *NOTE:* In production environments, the only value to which you are allowed to transition an ACH transfer is &#x60;CANCELLED&#x60;. |
**token** | **string** | Unique identifier of the bank transfer transition request. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
