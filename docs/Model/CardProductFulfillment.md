# # CardProductFulfillment

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**all_zero_card_security_code** | **bool** | If &#x60;true&#x60;, an all zero code (000) is allowed as a valid value in an authorization request. | [optional] [default to false]
**allow_card_creation** | **bool** | Controls the ability to create cards from this card product; &#x60;true&#x60; allows and &#x60;false&#x60; disallows the creation of cards.  *NOTE:* The card product&#39;s &#x60;active&#x60; field has no effect on card creation or the behavior of this field. | [optional] [default to true]
**bin_prefix** | **string** | Prefix of the bank identification number. | [optional]
**bulk_ship** | **bool** | Enables bulk ordering of cards of this card product type using the &#x60;/bulkissuances&#x60; endpoint. | [optional] [default to false]
**card_personalization** | [**\OpenAPI\Client\Model\CardPersonalization**](CardPersonalization.md) |  |
**enable_offline_pin** | **bool** | Enables offline personal identification number (PIN) verification for Europay Mastercard and Visa (EMV, or \&quot;chip-and-PIN\&quot;) card payments. | [optional] [default to false]
**fulfillment_provider** | **string** | Specifies the fulfillment provider.  You can work with providers located in North America, Europe, South America, and the Asia-Pacific region. For more information, see &lt;&lt;/developer-guides/managing-physical-cards#_fulfillment_providers_by_location, Fulfillment providers by location&gt;&gt;.  *NOTE:* Expedited processing is available for cards that are fulfilled by link:https://www.arroweye.com/[Arroweye Solutions, window&#x3D;\&quot;_blank\&quot;], link:https://www.gi-de.com/[G+D, window&#x3D;\&quot;_blank\&quot;], link:http://www.idemia.com[IDEMIA, window&#x3D;\&quot;_blank\&quot;], and link:http://perfectplastic.com/[Perfect Plastic Printing, window&#x3D;\&quot;_blank\&quot;]. You can expedite an order&#39;s processing by using the &#x60;expedite&#x60; field of the &lt;&lt;/core-api/cards, card&gt;&gt; or &lt;&lt;/core-api/bulk-card-orders, bulkissuance&gt;&gt; object. Contact your Marqeta representative for information regarding the cost of expedited service. | [optional] [default to 'PERFECTPLASTIC']
**package_id** | **string** | Card fulfillment provider&#39;s package ID. | [optional] [default to '0']
**pan_length** | **string** | Specifies the length of the primary account number (PAN). | [optional] [default to '16']
**payment_instrument** | **string** | Specifies the physical form cards of this card product type will take. | [optional] [default to 'PHYSICAL_MSR']
**shipping** | [**\OpenAPI\Client\Model\Shipping**](Shipping.md) |  | [optional]
**uppercase_name_lines** | **bool** | A value of &#x60;true&#x60; sets the text in the &#x60;fulfillment.card_personalization.text.name_line_1&#x60; and &#x60;name_line_2&#x60; fields to all uppercase letters. A value of &#x60;false&#x60; leaves the text in its original state. | [optional] [default to true]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
