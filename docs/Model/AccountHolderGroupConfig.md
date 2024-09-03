# # AccountHolderGroupConfig

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**is_reloadable** | **bool** | If set to &#x60;false&#x60;, this control prohibits an account holder&#39;s account from being reloaded with funds after the initial load.  This restriction applies to GPA orders, peer transfers, and direct deposits, but does not apply to operator adjustments. | [optional] [default to false]
**kyc_required** | **string** | If set to &#x60;ALWAYS&#x60;, new account holders are created in an &#x60;UNVERIFIED&#x60; status and must pass identity verification (KYC) before they can be active; if set to &#x60;CONDITIONAL&#x60;, new account holders begin in a &#x60;LIMITED&#x60; status and have limited actions available before passing identity verification; if set to &#x60;NEVER&#x60;, new account holders are created in an active state. | [optional]
**pre_kyc_controls** | [**\OpenAPI\Client\Model\PreKycControls**](PreKycControls.md) |  | [optional]
**real_time_fee_group_token** | **string** | Associates the specified real-time fee group with the members of the account holder group. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
