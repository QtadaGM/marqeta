# # TokenServiceProvider

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**correlation_id** | **string** | Unique value representing a tokenization request (Mastercard only). | [optional]
**pan_reference_id** | **string** | Unique identifier of the digital wallet token primary account number (PAN) within the card network. |
**token_assurance_level** | **string** | _(Mastercard only)_ Represents the confidence level in the digital wallet token. | [optional]
**token_eligibility_decision** | **string** | Digital wallet&#39;s decision as to whether the digital wallet token should be provisioned. | [optional]
**token_expiration** | **string** | Expiration date of the digital wallet token. | [optional]
**token_pan** | **string** | Primary account number (PAN) of the digital wallet token. | [optional]
**token_reference_id** | **string** | Unique identifier of the digital wallet token within the card network. | [optional]
**token_requestor_id** | **string** | Unique numerical identifier of the token requestor within the card network. These ID numbers map to &#x60;token_requestor_name&#x60; field values as follows:  *Mastercard*  * 50110030273 – &#x60;APPLE_PAY&#x60; * 50120834693 – &#x60;ANDROID_PAY&#x60; * 50139059239 – &#x60;SAMSUNG_PAY&#x60;  *Visa*  * 40010030273 – &#x60;APPLE_PAY&#x60; * 40010075001 – &#x60;ANDROID_PAY&#x60; * 40010043095 – &#x60;SAMSUNG_PAY&#x60; * 40010075196 – &#x60;MICROSOFT_PAY&#x60; * 40010075338 – &#x60;VISA_CHECKOUT&#x60; * 40010075449 – &#x60;FACEBOOK&#x60; * 40010075839 – &#x60;NETFLIX&#x60; * 40010077056 – &#x60;FITBIT_PAY&#x60; * 40010069887 – &#x60;GARMIN_PAY&#x60; | [optional]
**token_requestor_name** | **string** | Name of the token requestor within the card network.  *NOTE:* The list of example values for this field is maintained by the card networks and is subject to change. | [optional]
**token_score** | **string** | Token score assigned by the digital wallet. | [optional]
**token_type** | **string** | Type of the digital wallet token. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
