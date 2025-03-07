# # DigitalWalletTokenTransitionResponse

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**card_swap** | [**\OpenAPI\Client\Model\CardSwapHash**](CardSwapHash.md) |  | [optional]
**channel** | **string** | Mechanism by which the transition was initiated. |
**created_time** | **\DateTime** | Date and time when the transition was created, in UTC. | [optional]
**digital_wallet_token** | [**\OpenAPI\Client\Model\DigitalWalletTokenHash**](DigitalWalletTokenHash.md) |  |
**fulfillment_status** | **string** | Provisioning status of the digital wallet token. |
**reason** | **string** | Reason for the transition. | [optional]
**reason_code** | **string** | Standard code describing the reason for the transition:  * *00:* Object activated for the first time * *01:* Requested by you * *02:* Inactivity over time * *03:* This address cannot accept mail or the addressee is unknown * *04:* Negative account balance * *05:* Account under review * *06:* Suspicious activity was identified * *07:* Activity outside the program parameters was identified * *08:* Confirmed fraud was identified * *09:* Matched with an Office of Foreign Assets Control list * *10:* Card was reported lost * *11:* Card information was cloned * *12:* Account or card information was compromised * *13:* Temporary status change while on hold/leave * *14:* Initiated by Marqeta * *15:* Initiated by issuer * *16:* Card expired * *17:* Failed KYC * *18:* Changed to &#x60;ACTIVE&#x60; because information was properly validated * *19:* Changed to &#x60;ACTIVE&#x60; because account activity was properly validated * *20:* Change occurred prior to the normalization of reason codes * *21:* Initiated by a third party, often a digital wallet provider * *22:* PIN retry limit reached * *23:* Card was reported stolen * *24:* Address issue * *25:* Name issue * *26:* SSN issue * *27:* DOB issue * *28:* Email issue * *29:* Phone issue * *30:* Account/fulfillment mismatch * *31:* Other reason | [optional]
**state** | **string** | Specifies the state to which the digital wallet token is transitioning. |
**token** | **string** | Unique identifier of the digital wallet token transition, and not the identifier of the digital wallet token itself. |
**type** | **string** | Type of digital wallet token transition. &#x60;state.activated&#x60;, for example. | [readonly]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
