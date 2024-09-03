# # MinOffset

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**unit** | **string** | Specifies the time unit of the &#x60;value&#x60; field. | [optional]
**value** | **int** | Specifies the number of time units (as defined by the &#x60;unit&#x60; field) for which cards of this card product type are valid. Cards expire &#x60;value&#x60; x &#x60;unit&#x60; after the date of issue.  This number is rounded as follows:  * *YEARS* – Rounds up to the last second of the last day of the month of expiration. For example, if the issue date is 1 Jan 2021 and &#x60;value &#x3D; 1&#x60;, the cards expire on the last day of Jan 2022.  * *MONTHS* – Rounds up to the last second of the last day of the month of expiration. For example, if the issue date is 1 May 2022 and &#x60;value &#x3D; 1&#x60;, the cards expire on the last day of June 2022.  * *DAYS* – Rounds up to the last second of the day of expiration.  * *HOURS*, *MINUTES*, *SECONDS* – No rounding. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
