# # AcceptedCountriesModel

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**country_codes** | **string[]** | Comma-delimited list of accepted countries by ISO 3166 three-digit country code. |
**created_time** | **\DateTime** | Date and time when the accepted countries object was created, in UTC. This field is returned when included in your query. | [optional]
**is_whitelist** | **bool** | Specifies if the list of accepted countries in this object is an allow list. If set to &#x60;true&#x60;, transactions are accepted for all countries included in the object&#39;s &#x60;country_codes&#x60; array. If set to &#x60;false&#x60;, transactions are prohibited for all countries included in the object&#39;s &#x60;country_codes&#x60; array. | [default to false]
**last_modified_time** | **\DateTime** | Date and time when the accepted countries object was last updated, in UTC. This field is returned when included in your query. | [optional]
**name** | **string** | Name of the &#x60;acceptedcountries&#x60; object. |
**token** | **string** | The unique identifier of the &#x60;acceptedcountries&#x60; object.  This field is always returned. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
