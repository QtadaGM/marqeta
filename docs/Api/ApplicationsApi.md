# OpenAPI\Client\ApplicationsApi

All URIs are relative to /v3.

Method | HTTP request | Description
------------- | ------------- | -------------
[**creditApplicationsPost()**](ApplicationsApi.md#creditApplicationsPost) | **POST** /credit/applications | Create application
[**getFileByType()**](ApplicationsApi.md#getFileByType) | **GET** /credit/applications/files/{type} | Retrieve file on a bundle or application
[**pageApplicationTransitions()**](ApplicationsApi.md#pageApplicationTransitions) | **GET** /credit/applications/{token}/transitions | List application transitions
[**retrieveApplication()**](ApplicationsApi.md#retrieveApplication) | **GET** /credit/applications/{token} | Retrieve application
[**retrieveFiles()**](ApplicationsApi.md#retrieveFiles) | **GET** /credit/applications/files | List files on a bundle or application
[**transitionApplication()**](ApplicationsApi.md#transitionApplication) | **POST** /credit/applications/{token}/transitions | Transition application state


## `creditApplicationsPost()`

```php
creditApplicationsPost($create_applications_request): \OpenAPI\Client\Model\ApplicationsResponse
```

Create application

Create a new application.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: mqAppAndAccessToken
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\ApplicationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$create_applications_request = {"any_non_taxable_income":false,"bundle_token":"bundle_token_1111","e_disclosure_tracking_token":"tracking_token_X3NoybmxsEtQ0mZ","monthly_mortgage_or_rent":1200,"prequalified_offer_pre_terms_tracking_token":"tracking_token_D0VufJpbGZhdC","primary_income_source":"SELF_EMPLOYED","privacy_policy_tracking_token":"tracking_token_ImlzcyI6ImxJQ1k","residence_type":"OWN","rewards_disclosure_pre_terms_tracking_token":"tracking_token_ZjNmZ0MzIyNDYs","soct_tracking_token":"tracking_token_HAiOjE2Y1Nri3fPDg","token":"application_token_1111","total_annual_income":95000,"user_token":"user_token_1111"}; // \OpenAPI\Client\Model\CreateApplicationsRequest

try {
    $result = $apiInstance->creditApplicationsPost($create_applications_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ApplicationsApi->creditApplicationsPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **create_applications_request** | [**\OpenAPI\Client\Model\CreateApplicationsRequest**](../Model/CreateApplicationsRequest.md)|  | [optional]

### Return type

[**\OpenAPI\Client\Model\ApplicationsResponse**](../Model/ApplicationsResponse.md)

### Authorization

[mqAppAndAccessToken](../../README.md#mqAppAndAccessToken)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getFileByType()`

```php
getFileByType($type, $bundle_token, $application_token): \OpenAPI\Client\Model\FileResponse
```

Retrieve file on a bundle or application

Retrieve a specific type of file on a bundle or application.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: mqAppAndAccessToken
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\ApplicationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$type = new \OpenAPI\Client\Model\\OpenAPI\Client\Model\FileType(); // \OpenAPI\Client\Model\FileType | The type of file to retrieve.  * `SOCT` - The Summary of Credit Terms (SOCT), which outlines the interest rates, interest charges, and fees associated with the credit account being offered to the user. * `REWARDS_DISCLOSURE_PRE_TERMS` - The Rewards Disclosure Pre-terms, which discloses detailed information about the rewards program on the credit account being offered to the user before a decision is rendered on their application. * `REWARDS_DISCLOSURE_POST_TERMS` - The Rewards Disclosure Post-terms, which discloses detailed information about the rewards program on the user's credit account if their application is approved. * `BENEFITS_DISCLOSURE` - The Benefits Disclosure, which which is given to a user if their application is approved and discloses detailed information about the benefits on the user's credit account. * `CARD_MEMBER_AGREEMENT` - The Card Member Agreement, which specifies the terms and conditions of the user's credit account, including the interest rates, interest charges, fees, minimum payment calculations, and more. * `PRIVACY_POLICY` - The Privacy Policy, which explains how the information on the user's application is collected, handled, and processed. * `E_DISCLOSURE` - The eDisclosure, which states that the user has agreed to receive disclosures electronically. * `TERMS_SCHEDULE` - The Terms Schedule, which is given to a user if their application is approved and specifies the interest rate details on the user's credit account. * `NOAA` - The Notice of Adverse Action (NOAA), which is given to a user if their application is declined and informs them of the specific reasons why they were denied a credit account.
$bundle_token = 'bundle_token_example'; // string | Unique identifier of the bundle on which you want to retrieve a file.  Required if retrieving one of the following file types:  * `CARD_MEMBER_AGREEMENT` * `E_DISCLOSURE` * `PRIVACY_POLICY` * `REWARDS_DISCLOSURE_PRE_TERMS` * `REWARDS_DISCLOSURE_POST_TERMS` * `SOCT`
$application_token = 'application_token_example'; // string | Unique identifier of the application on which you want to retrieve a file.  Required if retrieving one of the following files:  * `BENEFITS_DISCLOSURE` * `NOAA` * `TERMS_SCHEDULE`

try {
    $result = $apiInstance->getFileByType($type, $bundle_token, $application_token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ApplicationsApi->getFileByType: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **type** | [**\OpenAPI\Client\Model\FileType**](../Model/.md)| The type of file to retrieve.  * &#x60;SOCT&#x60; - The Summary of Credit Terms (SOCT), which outlines the interest rates, interest charges, and fees associated with the credit account being offered to the user. * &#x60;REWARDS_DISCLOSURE_PRE_TERMS&#x60; - The Rewards Disclosure Pre-terms, which discloses detailed information about the rewards program on the credit account being offered to the user before a decision is rendered on their application. * &#x60;REWARDS_DISCLOSURE_POST_TERMS&#x60; - The Rewards Disclosure Post-terms, which discloses detailed information about the rewards program on the user&#39;s credit account if their application is approved. * &#x60;BENEFITS_DISCLOSURE&#x60; - The Benefits Disclosure, which which is given to a user if their application is approved and discloses detailed information about the benefits on the user&#39;s credit account. * &#x60;CARD_MEMBER_AGREEMENT&#x60; - The Card Member Agreement, which specifies the terms and conditions of the user&#39;s credit account, including the interest rates, interest charges, fees, minimum payment calculations, and more. * &#x60;PRIVACY_POLICY&#x60; - The Privacy Policy, which explains how the information on the user&#39;s application is collected, handled, and processed. * &#x60;E_DISCLOSURE&#x60; - The eDisclosure, which states that the user has agreed to receive disclosures electronically. * &#x60;TERMS_SCHEDULE&#x60; - The Terms Schedule, which is given to a user if their application is approved and specifies the interest rate details on the user&#39;s credit account. * &#x60;NOAA&#x60; - The Notice of Adverse Action (NOAA), which is given to a user if their application is declined and informs them of the specific reasons why they were denied a credit account. |
 **bundle_token** | **string**| Unique identifier of the bundle on which you want to retrieve a file.  Required if retrieving one of the following file types:  * &#x60;CARD_MEMBER_AGREEMENT&#x60; * &#x60;E_DISCLOSURE&#x60; * &#x60;PRIVACY_POLICY&#x60; * &#x60;REWARDS_DISCLOSURE_PRE_TERMS&#x60; * &#x60;REWARDS_DISCLOSURE_POST_TERMS&#x60; * &#x60;SOCT&#x60; | [optional]
 **application_token** | **string**| Unique identifier of the application on which you want to retrieve a file.  Required if retrieving one of the following files:  * &#x60;BENEFITS_DISCLOSURE&#x60; * &#x60;NOAA&#x60; * &#x60;TERMS_SCHEDULE&#x60; | [optional]

### Return type

[**\OpenAPI\Client\Model\FileResponse**](../Model/FileResponse.md)

### Authorization

[mqAppAndAccessToken](../../README.md#mqAppAndAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `pageApplicationTransitions()`

```php
pageApplicationTransitions($token): \OpenAPI\Client\Model\ApplicationsTransitionPage
```

List application transitions

Retrieve an array of transitions on a specific application.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: mqAppAndAccessToken
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\ApplicationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$token = 'token_example'; // string | The unique identifier of the application for which you want to retrieve transitions.

try {
    $result = $apiInstance->pageApplicationTransitions($token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ApplicationsApi->pageApplicationTransitions: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **token** | **string**| The unique identifier of the application for which you want to retrieve transitions. |

### Return type

[**\OpenAPI\Client\Model\ApplicationsTransitionPage**](../Model/ApplicationsTransitionPage.md)

### Authorization

[mqAppAndAccessToken](../../README.md#mqAppAndAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `retrieveApplication()`

```php
retrieveApplication($token, $expand): \OpenAPI\Client\Model\ApplicationsResponse
```

Retrieve application

Retrieve a specific application.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: mqAppAndAccessToken
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\ApplicationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$token = 'token_example'; // string | Unique identifier of the application to retrieve.
$expand = array(new \OpenAPI\Client\Model\\OpenAPI\Client\Model\ExpandObjects()); // \OpenAPI\Client\Model\ExpandObjects[] | Embeds the specified object into the response.

try {
    $result = $apiInstance->retrieveApplication($token, $expand);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ApplicationsApi->retrieveApplication: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **token** | **string**| Unique identifier of the application to retrieve. |
 **expand** | [**\OpenAPI\Client\Model\ExpandObjects[]**](../Model/\OpenAPI\Client\Model\ExpandObjects.md)| Embeds the specified object into the response. | [optional]

### Return type

[**\OpenAPI\Client\Model\ApplicationsResponse**](../Model/ApplicationsResponse.md)

### Authorization

[mqAppAndAccessToken](../../README.md#mqAppAndAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `retrieveFiles()`

```php
retrieveFiles($bundle_token, $application_token): array<string,\OpenAPI\Client\Model\FileResponse>
```

List files on a bundle or application

Retrieve an array of files on a bundle or application  Each top-level object returned in the array contains the fields documented in the <</core-api/credit-applications#_response_body_4, response body>>. The name of each object is its corresponding file type:  * `BENEFITS_DISCLOSURE` * `CARD_MEMBER_AGREEMENT` * `E_DISCLOSURE` * `NOAA` * `PRIVACY_POLICY` * `REWARDS_DISCLOSURE_PRE_TERMS` * `REWARDS_DISCLOSURE_POST_TERMS` * `SOCT` * `TERMS_SCHEDULE`

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: mqAppAndAccessToken
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\ApplicationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$bundle_token = 'bundle_token_example'; // string | Unique identifier of the bundle whose files you want to retrieve.  The following file types are returned with the `bundle_token`:  * `CARD_MEMBER_AGREEMENT` * `E_DISCLOSURE` * `PRIVACY_POLICY` * `REWARDS_DISCLOSURE_PRE_TERMS` * `REWARDS_DISCLOSURE_POST_TERMS` * `SOCT`
$application_token = 'application_token_example'; // string | Unique identifier of the application whose files you want to retrieve.  The following file types are returned with the `application_token`:  * `BENEFITS_DISCLOSURE` * `CARD_MEMBER_AGREEMENT` * `E_DISCLOSURE` * `NOAA` * `PRIVACY_POLICY` * `REWARDS_DISCLOSURE_PRE_TERMS` * `REWARDS_DISCLOSURE_POST_TERMS` * `SOCT` * `TERMS_SCHEDULE`

try {
    $result = $apiInstance->retrieveFiles($bundle_token, $application_token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ApplicationsApi->retrieveFiles: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **bundle_token** | **string**| Unique identifier of the bundle whose files you want to retrieve.  The following file types are returned with the &#x60;bundle_token&#x60;:  * &#x60;CARD_MEMBER_AGREEMENT&#x60; * &#x60;E_DISCLOSURE&#x60; * &#x60;PRIVACY_POLICY&#x60; * &#x60;REWARDS_DISCLOSURE_PRE_TERMS&#x60; * &#x60;REWARDS_DISCLOSURE_POST_TERMS&#x60; * &#x60;SOCT&#x60; | [optional]
 **application_token** | **string**| Unique identifier of the application whose files you want to retrieve.  The following file types are returned with the &#x60;application_token&#x60;:  * &#x60;BENEFITS_DISCLOSURE&#x60; * &#x60;CARD_MEMBER_AGREEMENT&#x60; * &#x60;E_DISCLOSURE&#x60; * &#x60;NOAA&#x60; * &#x60;PRIVACY_POLICY&#x60; * &#x60;REWARDS_DISCLOSURE_PRE_TERMS&#x60; * &#x60;REWARDS_DISCLOSURE_POST_TERMS&#x60; * &#x60;SOCT&#x60; * &#x60;TERMS_SCHEDULE&#x60; | [optional]

### Return type

[**array<string,\OpenAPI\Client\Model\FileResponse>**](../Model/FileResponse.md)

### Authorization

[mqAppAndAccessToken](../../README.md#mqAppAndAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `transitionApplication()`

```php
transitionApplication($token, $application_transition_request): \OpenAPI\Client\Model\ApplicationTransitionResponse
```

Transition application state

Transition the current state of an application to a new state.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: mqAppAndAccessToken
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\ApplicationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$token = 'token_example'; // string | Unique identifier of the application whose state you want to transition.
$application_transition_request = {"application_state":"ACCEPTED","benefits_disclosure_tracking_token":"tracking_token_JXRapWJL2BI4EwdNqjBBvpI5","card_member_agreement_tracking_token":"tracking_token_c1YjY2NjBlOGEiLCJzdGF0Z","rewards_disclosure_post_terms_tracking_token":"tracking_token_ZjNmZ0MzIyNDYsImlhdCI","terms_schedule_tracking_token":"tracking_token_CpkwJCoqzucVnJNwj5BsKC9e5"}; // \OpenAPI\Client\Model\ApplicationTransitionRequest

try {
    $result = $apiInstance->transitionApplication($token, $application_transition_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ApplicationsApi->transitionApplication: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **token** | **string**| Unique identifier of the application whose state you want to transition. |
 **application_transition_request** | [**\OpenAPI\Client\Model\ApplicationTransitionRequest**](../Model/ApplicationTransitionRequest.md)|  |

### Return type

[**\OpenAPI\Client\Model\ApplicationTransitionResponse**](../Model/ApplicationTransitionResponse.md)

### Authorization

[mqAppAndAccessToken](../../README.md#mqAppAndAccessToken)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
