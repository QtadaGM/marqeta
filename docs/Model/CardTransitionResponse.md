# # CardTransitionResponse

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**barcode** | **string** | The barcode printed on the card, expressed as digits. |
**bulk_issuance_token** | **string** | The unique identifier of the bulk card order. | [optional]
**card** | [**\OpenAPI\Client\Model\CardMetadata**](CardMetadata.md) |  | [optional]
**card_product_token** | **string** | Unique identifier of the card product. |
**card_token** | **string** | Unique identifier of the card. |
**channel** | **string** | The mechanism by which the transition was initiated.  * *ADMIN* - Indicates that the card transition was initiated through the Marqeta Dashboard. * *API* - Indicates that the card transition was initiated by you through the Core API. Use this value when creating a card transition with an API &#x60;POST&#x60; request. * *FRAUD* - Indicates that either Marqeta or the card network has determined that the card is fraudulent. * *IVR* - Indicates that the card transition was initiated through your Interactive Voice Response system. * *SYSTEM* - Indicates that the card transition was initiated by Marqeta. For example, Marqeta suspended the card due to excessive failed personal identification number (PIN) entries. |
**created_time** | **\DateTime** | Date and time when the resource was created, in UTC. | [optional]
**expedite** | **bool** | A value of &#x60;true&#x60; indicates that you requested expedited processing of the card from your card fulfillment provider. | [optional] [default to false]
**expiration** | **string** | Expiration date in &#x60;MMyy&#x60; format. |
**expiration_time** | **string** | Expiration date and time in UTC format. |
**fulfillment** | [**\OpenAPI\Client\Model\CardFulfillmentRequest**](CardFulfillmentRequest.md) |  | [optional]
**fulfillment_status** | **string** | Provides status information about the card related to order and delivery.  The possible fulfillment states are:  * *ISSUED:* Initial state of all newly created/issued cards * *ORDERED:* Card ordered through card fulfillment provider * *REJECTED:* Card rejected by card fulfillment provider * *SHIPPED:* Card shipped by card fulfillment provider * *DELIVERED:* Card delivered by the card fulfillment provider. * *DIGITALLY_PRESENTED:* Card digitally presented using the &#x60;/cards/{token}/showpan&#x60; endpoint; does not affect the delivery of physical cards |
**last_four** | **string** | Last four digits of the card primary account number (PAN). |
**new_pan_from_card_token** | **string** | Reissues the specified (\&quot;source\&quot;) card with a new primary account number (PAN). | [optional]
**pan** | **string** | Primary account number (PAN) of the card. |
**pin_is_set** | **bool** | Specifies if the personal identification number (PIN) has been set for the card. | [default to false]
**reason** | **string** | Additional information about the state change. | [optional]
**reason_code** | **string** | A standard code describing the reason for the transition:  * *00:* Object activated for the first time * *01:* Requested by you * *02:* Inactivity over time * *03:* This address cannot accept mail or the addressee is unknown * *04:* Negative account balance * *05:* Account under review * *06:* Suspicious activity was identified * *07:* Activity outside the program parameters was identified * *08:* Confirmed fraud was identified * *09:* Matched with an Office of Foreign Assets Control list * *10:* Card was reported lost * *11:* Card information was cloned * *12:* Account or card information was compromised * *13:* Temporary status change while on hold/leave * *14:* Initiated by Marqeta * *15:* Initiated by issuer * *16:* Card expired * *17:* Failed KYC * *18:* Changed to &#x60;ACTIVE&#x60; because information was properly validated * *19:* Changed to &#x60;ACTIVE&#x60; because account activity was properly validated * *20:* Change occurred prior to the normalization of reason codes * *21:* Initiated by a third party, often a digital wallet provider * *22:* PIN retry limit reached * *23:* Card was reported stolen * *24:* Address issue * *25:* Name issue * *26:* SSN issue * *27:* DOB issue * *28:* Email issue * *29:* Phone issue * *30:* Account/fulfillment mismatch * *31:* Other reason | [optional]
**reissue_pan_from_card_token** | **string** | Reissues the specified (\&quot;source\&quot;) card. | [optional]
**state** | **string** | Indicates the state of the card. |
**token** | **string** | Unique identifier of the card transition. |
**type** | **string** | This field cannot be set directly using the &#x60;/cardtransitions&#x60; endpoint. A card transition&#39;s &#x60;type&#x60; is managed by the Marqeta platform, based on the before and after state of the transition, as specified in the request&#39;s &#x60;state&#x60; field.  This field appears only when populated by the card fulfillment provider. The &#x60;type&#x60; field&#39;s possible values are:  * *fulfillment.delivered:* Card was delivered by the card fulfillment provider * *fulfillment.digitally_presented:* Card was digitally presented using the &#x60;/cards/{token}/showpan&#x60; endpoint; does not affect the delivery of physical cards * *fulfillment.issued:* Card was created/issued * *fulfillment.ordered:* Card was ordered from the card fulfillment provider * *fulfillment.rejected:* Card was rejected by the card fulfillment provider * *fulfillment.shipped:* Card was shipped by the card fulfillment provider * *state.activated:* Card was activated * *state.limited:* Card was limited * *state.reinstated:* Card was reinstated from a suspended state * *state.suspended:* Card was suspended * *state.terminated:* Card was terminated  //Also appears in /core-api/event-types#_card_transition_events | [readonly]
**user** | [**\OpenAPI\Client\Model\CardholderMetadata**](CardholderMetadata.md) |  | [optional]
**user_token** | **string** | Unique identifier of the cardholder. |
**validations** | [**\OpenAPI\Client\Model\ValidationsResponse**](ValidationsResponse.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
