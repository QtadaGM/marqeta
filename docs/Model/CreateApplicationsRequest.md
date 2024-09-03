# # CreateApplicationsRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**any_non_taxable_income** | **bool** | A value of &#x60;true&#x60; indicates that the user has a non-taxable income source.  Required when retrieving an application. |
**bundle_token** | **string** | Unique identifier of the bundle associated with the application. |
**device_data** | [**\OpenAPI\Client\Model\DeviceData**](DeviceData.md) |  | [optional]
**e_disclosure_tracking_token** | **string** | The tracking token of the eDisclosure.  This is the &#x60;tracking_token&#x60; returned in the &#x60;E_DISCLOSURE&#x60; object when sending a &#x60;GET&#x60; request to the &#x60;/credit/applications/files&#x60; endpoint before a decision on the application is made. |
**meta_data** | **object** | Customer-defined additional information about the application. | [optional]
**monthly_mortgage_or_rent** | **float** | Monthly amount of the mortgage or rent that the user currently pays.  Required when retrieving an application. |
**offer_id** | **string** | Unique identifier of the offer for a pre-screened applicant. | [optional]
**prequalified_offer_pre_terms_tracking_token** | **string** | The tracking token of the Pre-qualified Offer Pre-Terms.  This is the &#x60;tracking_token&#x60; returned in the &#x60;PREQUALIFICATION_PRE_TERMS&#x60; object when sending a &#x60;GET&#x60; request to the &#x60;/credit/applications/files&#x60; endpoint before a decision on the application is made. | [optional]
**primary_income_source** | **string** | Whether the primary income source comes from the user being employed, unemployed, self-employment, or another situation.  Required when retrieving an application. |
**privacy_policy_tracking_token** | **string** | The tracking token of the Privacy Policy.  This is the &#x60;tracking_token&#x60; returned in the &#x60;PRIVACY_POLICY&#x60; object when sending a &#x60;GET&#x60; request to the &#x60;/credit/applications/files&#x60; endpoint before a decision on the application is made. |
**residence_type** | **string** | Whether the user owns or rents their residence, or has another situation.  Required when retrieving an application. |
**rewards_disclosure_pre_terms_tracking_token** | **string** | The tracking token of the Rewards Disclosure Pre-terms.  This is the &#x60;tracking_token&#x60; returned in the &#x60;REWARDS_DISCLOSURE_PRE_TERMS&#x60; object when sending a &#x60;GET&#x60; request to the &#x60;/credit/applications/files&#x60; endpoint before a decision on the application is made. | [optional]
**soct_tracking_token** | **string** | The tracking token of the Summary of Credit Terms (SOCT).  This is the &#x60;tracking_token&#x60; returned in the &#x60;SOCT&#x60; object when sending a &#x60;GET&#x60; request to the &#x60;/credit/applications/files&#x60; endpoint before a decision on the application is made. |
**token** | **string** | Unique identifier of the application. | [optional]
**total_annual_income** | **float** | The total amount of the user&#39;s annual income.  Required when retrieving an application. |
**type** | [**\OpenAPI\Client\Model\ApplicationType**](ApplicationType.md) |  | [optional]
**user_token** | **string** | Unique identifier of the applicant, the user applying for a credit account. |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
