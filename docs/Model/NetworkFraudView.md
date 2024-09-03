# # NetworkFraudView

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**account_risk_score** | **string** | _(Visa only)_ Account holder risk condition code evaluated by the card network. A higher score indicates a greater likelihood that the card number is compromised. | [optional]
**account_risk_score_reason_code** | **string** | _(Visa only)_ Unique code that describes the main driver of the &#x60;account_risk_score&#x60;. | [optional]
**transaction_risk_score** | **int** | Network-provided risk score for the transaction. A higher score indicates higher risk. Useful for making authorization decisions. | [optional]
**transaction_risk_score_reason_code** | **string** | _(Mastercard only)_ Unique code that describes the main driver of the &#x60;transaction_risk_score&#x60;. | [optional]
**transaction_risk_score_reason_description** | **string** | _(Mastercard only)_ Description of the &#x60;transaction_risk_score_reason_code&#x60;. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
