# # BaseAchRequestModel

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**account_number** | **string** | ACH account number. |
**account_type** | **string** | Type of account. |
**bank_name** | **string** | Name of the bank holding the account. | [optional]
**is_default_account** | **bool** | If there are multiple funding sources, this field specifies which source is used by default in funding calls. If there is only one funding source, the system ignores this field and always uses that source. | [optional] [default to false]
**name_on_account** | **string** | Name on the ACH account. |
**routing_number** | **string** | Routing number for the ACH account. | [readonly]
**token** | **string** | Unique identifier of the funding source. If you do not include a token, the system will generate one automatically. This token is necessary for use in other calls, so we recommend that rather than let the system generate one, you use a simple string that is easy to remember. This value cannot be updated. | [optional]
**verification_notes** | **string** | Free-form text field for holding notes about verification. This field is returned only if &#x60;verification_override &#x3D; true&#x60;. | [optional]
**verification_override** | **bool** | Allows the ACH funding source to be used, regardless of its verification status. Set this field to &#x60;true&#x60; if you can attest that you have verified the account on your own and that it will not be returned by the Federal Reserve.  *NOTE:* When using &#x60;PLAID&#x60; to validate a funding source, this field is always set to &#x60;true&#x60;. | [optional] [default to false]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
