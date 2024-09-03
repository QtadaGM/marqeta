# # NetworkMetadata

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**account_identification_1** | **string** |  | [optional]
**incoming_response_code** | **string** | Visa Risk Management esponse code &#x60;59&#x60;, indicating suspected fraud. | [optional]
**product_id** | **string** | Product identification value assigned by the card network to each card product. Can be used to track card-level activity by individual account number for premium card products. | [optional]
**program_id** | **string** | Program identification number used with &#x60;product_id&#x60; that identifies the programs associated with a card within a program registered by the issuer with the card network. | [optional]
**spend_qualifier** | **string** | Indicates whether or not the base spend-assessment threshold defined by the card network has been met. | [optional]
**surcharge_free_atm_network** | **string** | Name of the surcharge-free ATM network used to complete the transaction. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
