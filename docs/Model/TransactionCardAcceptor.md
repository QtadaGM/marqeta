# # TransactionCardAcceptor

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**address** | **string** | Card acceptor&#39;s address. May be returned if the request uses Transaction Model v1 of the Marqeta Core API. Not returned for Transaction Model v2 requests. | [optional]
**city** | **string** | Card acceptor&#39;s city. | [optional]
**country_code** | **string** | Card acceptor&#39;s country code. May be returned if the request uses Transaction Model v2 of the Marqeta Core API. Not returned for Transaction Model v1 requests. | [optional]
**country_of_origin** | **string** | The merchant&#39;s country of origin.  A merchant&#39;s country of origin can be different from the country in which the merchant is located. For example, embassies are physically located in countries that are not their country of origin: a Mexican embassy might be physically located in Singapore, but the country of origin is Mexico.  This field is included when the cardholder conducts a transaction with a government-controlled merchant using a Marqeta-issued card. | [optional]
**customer_service_phone** | **string** |  | [optional]
**independent_sales_organization_id** | **string** |  | [optional]
**mcc** | **string** | Merchant category code (MCC). | [optional]
**mcc_groups** | **string[]** | An array of &#x60;mcc_groups&#x60;. | [optional]
**merchant_tax_id** | **string** |  | [optional]
**mid** | **string** | The merchant identifier. | [optional]
**name** | **string** | Card acceptor&#39;s name. | [optional]
**network_assigned_id** | **string** | Identifier assigned by the card network. | [optional]
**network_mid** | **string** | The merchant identifier on the card network. | [optional]
**payment_facilitator_id** | **string** |  | [optional]
**payment_facilitator_name** | **string** | The name of the payment facilitator, including the sub-merchant identifier, of an original credit transaction. This field is returned when a payment facilitator participates in the transaction. | [optional]
**phone** | **string** |  | [optional]
**poi** | [**\OpenAPI\Client\Model\TerminalModel**](TerminalModel.md) |  | [optional]
**postal_code** | **string** | Card acceptor&#39;s postal code. | [optional]
**special_merchant_id** | **string** |  | [optional]
**state** | **string** | Two-character state, province, or territorial abbreviation.  For a complete list of valid state and province abbreviations, see &lt;&lt;/core-api/kyc-verification#_valid_state_provincial_and_territorial_abbreviations, Valid state, provincial, and territorial abbreviations&gt;&gt;.  *Note*: Non-US merchants may return more than 2 char for this field. | [optional]
**sub_merchant_id** | **string** |  | [optional]
**transfer_service_provider_name** | **string** | The name of the transfer service provider of a money transfer original credit transaction. This field is included when a transfer service provider participates in the transaction. | [optional]
**url** | **string** |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
