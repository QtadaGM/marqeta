# # FeeRefundRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**original_fee_transaction_token** | **string** | Unique identifier of the fee to be refunded.   You can find this token in the response of the original &#x60;/feecharges&#x60; or &#x60;/gpaorders&#x60; request used to assess the standalone fee or from the webhook corresponding to the original request. You can also send a &#x60;GET&#x60; request to &#x60;/transactions?type&#x3D;fee.charges&#x60; to retrieve a list of fee transactions. | [optional]
**tags** | **string** | Descriptive metadata about the fee. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
