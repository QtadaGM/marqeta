# # AccountAdjustmentReq

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**amount** | **float** | Amount of the adjustment.  Value must be negative if &#x60;original_ledger_entry_token&#x60; is not passed. |
**currency_code** | [**\OpenAPI\Client\Model\CurrencyCode**](CurrencyCode.md) |  |
**description** | **string** | Description of the adjustment. |
**external_adjustment_id** | **string** | Unique identifier you provide of an associated external adjustment that exists outside Marqeta&#39;s credit platform. | [optional]
**note** | **string** | Additional information on the adjustment. | [optional]
**original_ledger_entry_token** | **string** | Unique identifier of the original journal entry needing the adjustment.  Required when adjusting an existing journal entry. | [optional]
**reason** | **string** | Reason for the adjustment.  * &#x60;DISPUTE&#x60; - The adjustment occurred because a dispute was initiated. * &#x60;DISPUTE_RESOLUTION&#x60; - The adjustment occurred because of the result of a dispute resolution. * &#x60;RETURNED_OR_CANCELED_PAYMENT&#x60; - The adjustment occurred because a payment was returned or canceled. * &#x60;OTHER&#x60; - Any other reason the adjustment occurred. For example, a waived fee or account write-off. | [optional]
**token** | **string** | Unique identifier of the adjustment. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
