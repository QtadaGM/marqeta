# # SelectiveAuth

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**dmd_location_sensitivity** | **int** | Determines what type of merchant information is required for a match (authorization). Not relevant if &#x60;enable_regex_search_chain &#x3D; false&#x60;.  * *0* – Requires exact match on card acceptor name and postal code to existing entry in Marqeta Merchant database (most restrictive). * *1* – Partial match on card acceptor name (least restrictive). * *2* – Partial match on card acceptor name; exact match on card acceptor city. * *3* – Partial match on card acceptor name; exact match on card acceptor postal code. * *4* – Partial match on card acceptor name; exact match on street address 1 and postal code. | [optional] [default to self::DMD_LOCATION_SENSITIVITY_0]
**enable_regex_search_chain** | **bool** | Set to &#x60;true&#x60; to perform regular expression checking on the description received in the authorization. | [optional] [default to false]
**sa_mode** | **int** | Specifies the selective authorization mode.  * *0* — Inactive * *1* — Active (attempts to authorize a merchant that does not have a recognized MID by matching other pieces of information) * *2* — Logging and notification (checks the transaction and logs results, but does not authorize)  Selective authorization applies to transactions that are limited to specific merchants. Matching requirements for authorization are set by the &#x60;dmd_location_sensitivity&#x60; field. | [optional] [default to self::SA_MODE_1]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
