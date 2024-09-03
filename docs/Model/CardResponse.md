# # CardResponse

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**activation_actions** | [**\OpenAPI\Client\Model\ActivationActions**](ActivationActions.md) |  | [optional]
**barcode** | **string** | Barcode printed on the card, expressed as numerals. |
**bulk_issuance_token** | **string** | Unique identifier of the bulk card order. | [optional]
**card_product_token** | **string** | Unique identifier of the card product. |
**chip_cvv_number** | **string** | Three-digit card verification value (ICVV) stored on the chip of the card. | [optional]
**contactless_exemption_counter** | **int** | Running count of the contactless transactions successfully completed since the last strong customer authentication (SCA) challenge was issued. You can limit the number of contactless transactions that can be performed without issuing an SCA challenge at the card product level.  For more information about strong customer authentication, see &lt;&lt;/core-api/card-products, Card Products&gt;&gt;. | [optional]
**contactless_exemption_total_amount** | **float** | Running total of the money spent in contactless transactions successfully completed since the last strong customer authentication (SCA) challenge was issued. You can limit the total amount that can be spent in contactless transactions without issuing an SCA challenge at the card product level.  For more information about strong customer authentication, see &lt;&lt;/core-api/card-products, Card Products&gt;&gt;. | [optional]
**created_time** | **\DateTime** | Date and time when the resource was created, in UTC. |
**cvv_number** | **string** | Three-digit card verification value (CVV2 or CVC2) printed on the card. | [optional]
**expedite** | **bool** | A value of &#x60;true&#x60; indicates that you requested expedited processing of the card from your card fulfillment provider. | [optional] [default to false]
**expiration** | **string** | Expiration date in &#x60;MMyy&#x60; format. |
**expiration_time** | **\DateTime** | Expiration date and time, in UTC. |
**fulfillment** | [**\OpenAPI\Client\Model\CardFulfillmentResponse**](CardFulfillmentResponse.md) |  | [optional]
**fulfillment_status** | **string** | Card fulfillment status:  * *ISSUED:* Initial state of all newly created/issued cards. * *ORDERED:* Card ordered through the card fulfillment provider. * *REORDERED:* Card reordered through the card fulfillment provider. * *REJECTED:* Card rejected by the card fulfillment provider. * *SHIPPED:* Card shipped by the card fulfillment provider. * *DELIVERED:* Card delivered by the card fulfillment provider. * *DIGITALLY_PRESENTED:* Card digitally presented using the &#x60;/cards/{token}/showpan&#x60; endpoint; does not affect the delivery of physical cards. |
**instrument_type** | **string** | Instrument type of the card:  * *PHYSICAL_MSR:* A physical card with a magnetic stripe. This is the default physical card type. * *PHYSICAL_ICC:* A physical card with an integrated circuit, or \&quot;chip.\&quot; * *PHYSICAL_CONTACTLESS:* A physical card that uses radio frequency identification (RFID) or near-field communication (NFC) to enable payment over a secure radio interface. * *PHYSICAL_COMBO:* A physical card with a chip that also supports contactless payments. * *VIRTUAL_PAN:* A virtual card with a primary account number (PAN). | [optional]
**last_four** | **string** | Last four digits of the card primary account number (PAN). |
**last_modified_time** | **\DateTime** | Date and time when the resource was last modified, in UTC. |
**metadata** | **array<string,string>** | Associates customer-provided metadata with the card. | [optional]
**new_pan_from_card_token** | **string** | Reissues the specified card (known as the \&quot;source\&quot; card) with a new primary account number (PAN). | [optional]
**pan** | **string** | Primary account number (PAN) of the card. |
**pin_is_set** | **bool** | Specifies if the personal identification number (PIN) has been set for the card. | [default to false]
**reissue_pan_from_card_token** | **string** | Reissues the specified card (known as the \&quot;source\&quot; card). | [optional]
**state** | **string** | Indicates the state of the card. |
**state_reason** | **string** | Descriptive reason for why the card is in its current state. For example, \&quot;Card activated by cardholder\&quot;. |
**token** | **string** | Unique identifier of the card. |
**translate_pin_from_card_token** | **string** | Copies the personal identification number (PIN) from the specified source card to the newly created card. | [optional]
**user_token** | **string** | Unique identifier of the cardholder. |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
