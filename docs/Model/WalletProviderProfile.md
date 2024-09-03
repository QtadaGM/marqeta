# # WalletProviderProfile

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**account** | [**\OpenAPI\Client\Model\Account**](Account.md) |  | [optional]
**device_score** | **string** | Score from the device. | [optional]
**pan_source** | **string** | Source from which the digital wallet provider obtained the card primary account number (PAN). | [optional]
**reason_code** | **string** | Reason for the wallet provider&#39;s provisioning decision.  * *01* – Cardholder&#39;s wallet account is too new relative to launch. * *02* – Cardholder&#39;s wallet account is too new relative to provisioning request. * *03* – Cardholder&#39;s wallet account/card pair is newer than date threshold. * *04* – Changes made to account data within the account threshold. * *05* – Suspicious transactions linked to this account. * *06* – Account has not had activity in the last year. * *07* – Suspended cards in the secure element. * *08* – Device was put in lost mode in the last seven days for longer than the duration threshold. * *09* – The number of provisioning attempts on this device in 24 hours exceeds threshold. * *0A* – There have been more than the threshold number of different cards attempted at provisioning to this phone in 24 hours. * *0B* – The card provisioning attempt contains a distinct name in excess of the threshold. * *0C* – The device score is less than 3. * *0D* – The account score is less than 4. * *0E* – Device provisioning location outside of the cardholder&#39;s wallet account home country. * *0G* – Suspect fraud. | [optional]
**recommendation_reasons** | **string[]** | Array of recommendation reasons from the digital wallet provider. | [optional]
**risk_assessment** | [**\OpenAPI\Client\Model\RiskAssessment**](RiskAssessment.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
