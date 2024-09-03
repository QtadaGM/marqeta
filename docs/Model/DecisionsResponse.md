# # DecisionsResponse

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**adverse_action_template_code** | **string** | Indicates the version of the Notice of Adverse Action (NOAA) template used. Can have these possible values:  * &#x60;AA0&#x60; - score denial with score disclosure * &#x60;AA1&#x60; - individual reason with score disclosure * &#x60;AA2&#x60; - individual reason without score disclosure * &#x60;AA3&#x60; - locked and frozen * &#x60;AA4&#x60; - fraud related | [optional]
**card_product_level** | **string** | The tier of the card product. | [optional]
**created_date** | **\DateTime** | Date and time when the decision model was created on the Marqeta platform, in UTC. | [optional]
**credit_bureau** | [**\OpenAPI\Client\Model\CreditBureau**](CreditBureau.md) |  | [optional]
**credit_limit** | **int** | The maximum line of credit extended to the user, also the maximum balance the credit account can carry. | [optional]
**credit_score** | **int** | The user&#39;s credit score. | [optional]
**credit_score_date** | **\DateTime** | Date and time when the credit score went into effect. | [optional]
**decision_date** | **\DateTime** | Date and time when the decision on the application was rendered, in UTC. | [optional]
**denial_reasons** | **string[]** | An array of reasons that explain why the application was declined. | [optional]
**expire_date** | **\DateTime** | Date when the decision model expires. | [optional]
**margin** | **float** | Number of percentage points added to the prime rate, used to calculate the purchase APR. | [optional]
**prime_rate** | **float** | The current prime rate set by the Fed. | [optional]
**purchase_apr** | **float** | The purchase APR approved for the user. | [optional]
**received_best_rate** | **bool** | A value of &#x60;true&#x60; indicates that the user received the credit product&#39;s best APR.  If &#x60;false&#x60;, you must display to the user the following: &#x60;score_factors&#x60;, &#x60;credit_score&#x60;, &#x60;credit_score_date&#x60;, &#x60;credit_bureau&#x60;, &#x60;score_range&#x60;. | [optional]
**score_factors** | **string[]** | Factors that the bureau used to determine the user&#39;s credit score. | [optional]
**score_range** | **string** | The range in which the user&#39;s credit score falls. | [optional]
**application_token** | **string** | Unique identifier of the application. |
**decision_id** | **string** | Unique identifier of the decision made based on the decision model.  See &#x60;decision_model.status&#x60; for the current state of the application. |
**status** | **string** | Status of the decision on the application. |
**submitted_date_time** | **\DateTime** | Date and time when the decision was submitted, in UTC. |
**token** | **string** | Unique identifier of the decision model.  See &#x60;decision_model.status&#x60; for the current state of the application. |
**user_token** | **string** | Unique identifier of the applicant, the user applying for a credit account. |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
