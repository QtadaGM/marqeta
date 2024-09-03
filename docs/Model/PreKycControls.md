# # PreKycControls

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**balance_max** | **float** | Specifies the maximum ledger balance allowed for members of the account holder group. | [optional]
**cash_access_enabled** | **bool** | If set to &#x60;false&#x60;, this control prohibits an account holder&#39;s cards from being used at an ATM.  *NOTE:* If a card product&#39;s &#x60;config.poi.atm&#x60; field is set to &#x60;false&#x60;, associated cards are prohibited from being used at an ATM regardless of this control&#39;s setting. | [optional] [default to false]
**enable_non_program_loads** | **bool** | If set to &#x60;true&#x60;, funds can only be loaded from a program funding source.  This restriction applies to GPA orders, peer transfers, and direct deposits, but does not apply to operator adjustments. | [optional] [default to false]
**international_enabled** | **bool** | If set to &#x60;false&#x60;, this control prohibits an account holder from conducting transactions with a non-domestic country code.  *NOTE:* If a card product is configured to prohibit non-domestic transactions, its associated cards are prohibited from such transactions regardless of this control&#39;s setting. | [optional] [default to false]
**is_reloadable_pre_kyc** | **bool** | If set to &#x60;false&#x60;, this control prohibits an account holder&#39;s account from being reloaded with funds after an initial load.  This restriction applies to GPA orders, peer transfers, and direct deposits, but does not apply to operator adjustments. | [optional] [default to false]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
