# # ApplicationsResponse

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**account_token** | **string** | Unique identifier of the credit account for which the user is applying.  Returned when retrieving an application in the &#x60;APPROVED&#x60; state. | [optional]
**any_non_taxable_income** | **bool** | A value of &#x60;true&#x60; indicates that the user has a non-taxable income source. | [optional]
**application_accepted_at** | **\DateTime** | Date and time when the application was accepted on the Marqeta platform, in UTC.  Returned if the user accepted their approved application. | [optional]
**application_canceled_at** | **\DateTime** | Date and time when the application was canceled on the Marqeta platform, in UTC. | [optional]
**benefits_disclosure_accepted_at** | **\DateTime** | Date and time when Marqeta accepted the Benefits Disclosure, in UTC.  Returned if the user accepted their approved application. | [optional]
**bundle_token** | **string** | Unique identifier of the bundle associated with the application. |
**card_membership_agreement_accepted_at** | **\DateTime** | Date and time when Marqeta accepted the Card Membership Agreement, in UTC.  Returned if the user accepted their approved application. | [optional]
**created_date** | **\DateTime** | Date and time when the application was created on the Marqeta platform, in UTC. |
**decision_model** | [**\OpenAPI\Client\Model\DecisionsResponse**](DecisionsResponse.md) |  | [optional]
**decision_token** | **string** | Unique identifier of the decision made on the application. | [optional]
**device_data** | [**\OpenAPI\Client\Model\DeviceData**](DeviceData.md) |  | [optional]
**e_disclosure_accepted_at** | **\DateTime** | Date and time when Marqeta accepted the e-Disclosure, in UTC.  Returned if the user accepted their approved application. |
**error_details** | [**\OpenAPI\Client\Model\ErrorDetailsResponse**](ErrorDetailsResponse.md) |  | [optional]
**meta_data** | **object** | Customer-defined additional information about the application. | [optional]
**monthly_mortgage_or_rent** | **float** | Monthly amount of the mortgage or rent that the user currently pays. | [optional]
**offer_id** | **string** | Unique identifier of the offer for a pre-screened applicant. | [optional]
**prequalified_offer_pre_terms_accepted_at** | **\DateTime** | Date and time when Marqeta accepted the Pre-qualified Offer Pre-terms, in UTC.  Returned if the user accepted their approved application. | [optional]
**primary_income_source** | **string** | Whether the primary income source comes from the user being employed, unemployed, self-employment, or another situation. | [optional]
**privacy_policy_accepted_at** | **\DateTime** | Date and time when Marqeta accepted the Privacy Policy, in UTC.  Returned if the user accepted their approved application. |
**residence_type** | **string** | Whether the user owns or rents their residence, or has another situation. | [optional]
**rewards_disclosure_post_terms_accepted_at** | **\DateTime** | Date and time when Marqeta accepted the Rewards Disclosure, in UTC.  Returned if the user accepted their approved application. | [optional]
**rewards_disclosure_pre_terms_accepted_at** | **\DateTime** | Date and time when Marqeta accepted the Rewards Disclosure, in UTC.  Returned if the user accepted their approved application. |
**soct_accepted_at** | **\DateTime** | Date and time when Marqeta accepted the Summary of Credit Terms (SOCT), in UTC.  Returned if the user accepted their approved application. |
**state** | [**\OpenAPI\Client\Model\ApplicationResourceState**](ApplicationResourceState.md) |  |
**term_schedule_information_accepted_at** | **\DateTime** | Date and time when Marqeta accepted the Terms Schedule, in UTC.  Returned if the user accepted their approved application. | [optional]
**token** | **string** | Unique identifier of the application. |
**total_annual_income** | **float** | The total amount of the user&#39;s annual income. | [optional]
**type** | [**\OpenAPI\Client\Model\ApplicationType**](ApplicationType.md) |  |
**updated_date** | **\DateTime** | Date and time when the application was last updated on the Marqeta platform, in UTC. |
**user_token** | **string** | Unique identifier of the applicant, the user applying for a credit account. |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
