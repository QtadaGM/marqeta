# # PanRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**cvv_number** | **string** | Three-digit card verification value (CVV2) included on the back of the card.  This value cannot be updated. | [optional]
**expiration** | **string** | Card expiration date. | [optional]
**pan** | **string** | Primary account number (PAN) of the card whose information you want to retrieve.  Send a &#x60;GET&#x60; request to &#x60;/cards/{token}/showpan&#x60; to retrieve the PAN for a specific card. |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
