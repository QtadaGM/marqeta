# # CardLifeCycle

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**activate_upon_issue** | **bool** | A value of &#x60;true&#x60; indicates that cards of this card product type are active once they are issued. | [optional] [default to false]
**card_service_code** | **int** | Sequence of three digits that defines various services, differentiates card usage in international or domestic interchange, designates personal identification number (PIN) and authorization requirements, and identifies card restrictions. The following values are commonly used:  *First digit*  * *1* — International interchange OK * *2* — International interchange, use IC (chip) where feasible * *5* — National interchange only except under bilateral agreement * *6* — National interchange only except under bilateral agreement, use IC (chip) where feasible * *7* — No interchange except under bilateral agreement (closed loop) * *9* — Test  *Second digit*  * *0* — Normal * *2* — Contact issuer via online means * *4* — Contact issuer via online means except under bilateral agreement  *Third digit*  * *0* — No restrictions, PIN required * *1* — No restrictions * *2* — Goods and services only (no cash) * *3* — ATM only, PIN required * *4* — Cash only * *5* — Goods and services only (no cash), PIN required * *6* — No restrictions, use PIN where feasible * *7* — Goods and services only (no cash), use PIN where feasible | [optional] [default to 101]
**expiration_offset** | [**\OpenAPI\Client\Model\ExpirationOffsetWithMinimum**](ExpirationOffsetWithMinimum.md) |  | [optional]
**update_expiration_upon_activation** | **bool** | Normally, the &#x60;expiration_offset&#x60; is measured from the date of issue. Set this field to &#x60;true&#x60; to measure &#x60;expiration_offset&#x60; from the date of activation instead. | [optional] [default to false]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
