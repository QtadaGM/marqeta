# # OriginalCredit

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**deferred_hold_by** | **string** |  | [optional]
**fast_funds_enabled** | **bool** | Indicates that Fast Funds are enabled for dual-message original credit transactions. If the value of this field is &#x60;true&#x60;, you must make the funds available to your cardholder within 30 minutes of the transaction. | [optional]
**funding_source** | **string** | Sender&#39;s account from which the OCT draws funds. | [optional]
**screening_score** | **string** | Sanctions screening score to assist with meeting Anti-Money Laundering (AML) obligations.  Higher scores indicate that the sender&#39;s data more closely resembles an entry on the regulatory watchlist.  A value of 999 means that no screening score is available. | [optional]
**sender_account_type** | **string** | The type of account from which the OCT draws funds. | [optional]
**sender_address** | **string** | Sender&#39;s street address. | [optional]
**sender_city** | **string** | Sender&#39;s city. | [optional]
**sender_country** | **string** | Sender&#39;s country. | [optional]
**sender_name** | **string** | Full name of the sender. | [optional]
**sender_state** | **string** | Sender&#39;s state. | [optional]
**transaction_purpose** | **string** | The purpose of the original credit transaction. | [optional]
**transaction_type** | **string** | Type of original credit transaction. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
