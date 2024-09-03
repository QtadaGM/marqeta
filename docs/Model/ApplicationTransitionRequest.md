# # ApplicationTransitionRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**application_state** | [**\OpenAPI\Client\Model\ApplicationResourceState**](ApplicationResourceState.md) |  |
**benefits_disclosure_tracking_token** | **string** | The tracking token of the Benefits Disclosure.  This is the &#x60;tracking_token&#x60; returned in the &#x60;BENEFITS_DISCLOSURE&#x60; object when sending a &#x60;GET&#x60; request to the &#x60;/credit/applications/files&#x60; endpoint before the user makes a decision on their approved application.  Required if transitioning application state to &#x60;ACCEPTED&#x60; | [optional]
**card_member_agreement_tracking_token** | **string** | The tracking token of the Card Member Agreement.  This is the &#x60;tracking_token&#x60; returned in the &#x60;CARD_MEMBER_AGREEMENT&#x60; object when sending a &#x60;GET&#x60; request to the &#x60;/credit/applications/files&#x60; endpoint before the user makes a decision on their approved application.  Required if transitioning application state to &#x60;ACCEPTED&#x60; | [optional]
**rewards_disclosure_post_terms_tracking_token** | **string** | The tracking token of the Rewards Disclosure Post-terms.  This is the &#x60;tracking_token&#x60; returned in the &#x60;REWARDS_DISCLOSURE_POST_TERMS&#x60; object when sending a &#x60;GET&#x60; request to the &#x60;/credit/applications/files&#x60; endpoint before the user makes a decision on their approved application.  Required if transitioning application state to &#x60;ACCEPTED&#x60; | [optional]
**terms_schedule_tracking_token** | **string** | The tracking token of the Terms Schedule.  This is the &#x60;tracking_token&#x60; returned in the &#x60;TERMS_SCHEDULE&#x60; object when sending a &#x60;GET&#x60; request to the &#x60;/credit/applications/files&#x60; endpoint before the user makes a decision on their approved application.  Required if transitioning application state to &#x60;ACCEPTED&#x60; | [optional]
**token** | **string** | Main identifier of the resource, also used as the idempotency key on the request. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
