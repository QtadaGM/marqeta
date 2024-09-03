# OpenAPI\Client\DelinquencyApi

All URIs are relative to /v3.

Method | HTTP request | Description
------------- | ------------- | -------------
[**resendWebhookEvent()**](DelinquencyApi.md#resendWebhookEvent) | **POST** /webhooks/{event_type}/{resource_token} | Resend credit event notification
[**retrieveDelinquencyState()**](DelinquencyApi.md#retrieveDelinquencyState) | **GET** /accounts/{account_token}/delinquencystate | Retrieve delinquency state
[**retrieveDelinquencyTransition()**](DelinquencyApi.md#retrieveDelinquencyTransition) | **GET** /accounts/{account_token}/delinquencystate/transitions/{delinquency_transition_token} | Retrieve delinquency state transition
[**retrieveDelinquencyTransitions()**](DelinquencyApi.md#retrieveDelinquencyTransitions) | **GET** /accounts/{account_token}/delinquencystate/transitions | List delinquency state transitions


## `resendWebhookEvent()`

```php
resendWebhookEvent($event_type, $resource_token): \OpenAPI\Client\Model\WebhookEventResendContainerResponse
```

Resend credit event notification

Resends a credit event notification to your webhook endpoint.  Although you send this request as a `POST`, all parameters are passed in the URL and the body is empty. The event notification is resent to your webhook endpoint and also returned in the response to this request.  For details on how to configure your webhook endpoint, see the About Webhooks <</developer-guides/about-webhooks#_tutorial, tutorial>>. For the complete `/webhooks` endpoint reference, see <</core-api/webhooks, Webhooks>>.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: mqAppAndAccessToken
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\DelinquencyApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$event_type = 'event_type_example'; // string | Specifies the type of event you want to resend.
$resource_token = 'resource_token_example'; // string | Unique identifier of the resource for which you want to resend a notification.  Send a `GET` request to `/credit/accounts/{account_token}/journalentries` to retrieve existing journal entry tokens.  Send a `GET` request to `/credit/accounts/{account_token}/ledgerentries` to retrieve existing ledger entry tokens.  Send a `GET` request to `/accounts/{account_token}/accounttransitions` to retrieve existing account transition tokens.  Send a `GET` request to `/credit/accounts/{account_token}/payments/{payment_token}` to retrieve existing payment transition tokens.  Send a `GET` request to `/accounts/{account_token}/statements` to retrieve existing statement summary tokens.  Send a `GET` request to `/accounts/{account_token}/delinquencystate/transitions` to retrieve existing delinquency state transition tokens.  Send a `GET` request to `/accounts/{account_token}/statements/{statement_summary_token}/paymentreminders/{token}` to retrieve existing payment reminder tokens.

try {
    $result = $apiInstance->resendWebhookEvent($event_type, $resource_token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DelinquencyApi->resendWebhookEvent: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **event_type** | **string**| Specifies the type of event you want to resend. |
 **resource_token** | **string**| Unique identifier of the resource for which you want to resend a notification.  Send a &#x60;GET&#x60; request to &#x60;/credit/accounts/{account_token}/journalentries&#x60; to retrieve existing journal entry tokens.  Send a &#x60;GET&#x60; request to &#x60;/credit/accounts/{account_token}/ledgerentries&#x60; to retrieve existing ledger entry tokens.  Send a &#x60;GET&#x60; request to &#x60;/accounts/{account_token}/accounttransitions&#x60; to retrieve existing account transition tokens.  Send a &#x60;GET&#x60; request to &#x60;/credit/accounts/{account_token}/payments/{payment_token}&#x60; to retrieve existing payment transition tokens.  Send a &#x60;GET&#x60; request to &#x60;/accounts/{account_token}/statements&#x60; to retrieve existing statement summary tokens.  Send a &#x60;GET&#x60; request to &#x60;/accounts/{account_token}/delinquencystate/transitions&#x60; to retrieve existing delinquency state transition tokens.  Send a &#x60;GET&#x60; request to &#x60;/accounts/{account_token}/statements/{statement_summary_token}/paymentreminders/{token}&#x60; to retrieve existing payment reminder tokens. |

### Return type

[**\OpenAPI\Client\Model\WebhookEventResendContainerResponse**](../Model/WebhookEventResendContainerResponse.md)

### Authorization

[mqAppAndAccessToken](../../README.md#mqAppAndAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `retrieveDelinquencyState()`

```php
retrieveDelinquencyState($account_token): \OpenAPI\Client\Model\DelinquencyStateResponse
```

Retrieve delinquency state

Retrieve details of the current delinquency state of a credit account.  An account is delinquent when it is past due on payments and current when it is up to date on payments.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: mqAppAndAccessToken
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\DelinquencyApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account_token = 'account_token_example'; // string | Unique identifier of the credit account for which you want to retrieve delinquency state details.  Send a `GET` request to `/credit/accounts` to retrieve existing credit account tokens.

try {
    $result = $apiInstance->retrieveDelinquencyState($account_token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DelinquencyApi->retrieveDelinquencyState: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **account_token** | **string**| Unique identifier of the credit account for which you want to retrieve delinquency state details.  Send a &#x60;GET&#x60; request to &#x60;/credit/accounts&#x60; to retrieve existing credit account tokens. |

### Return type

[**\OpenAPI\Client\Model\DelinquencyStateResponse**](../Model/DelinquencyStateResponse.md)

### Authorization

[mqAppAndAccessToken](../../README.md#mqAppAndAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `retrieveDelinquencyTransition()`

```php
retrieveDelinquencyTransition($account_token, $delinquency_transition_token): \OpenAPI\Client\Model\DelinquencyTransitionResponse
```

Retrieve delinquency state transition

Retrieve a specific delinquency state transition on a credit account.  A delinquency state transition occurs when an account's delinquency state transitions between delinquent and current. An account becomes delinquent when it falls behind on payments and becomes current when payments are made up to date.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: mqAppAndAccessToken
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\DelinquencyApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account_token = 'account_token_example'; // string | Unique identifier of the credit account whose delinquency state transition you want to retrieve.  Send a `GET` request to `/credit/accounts` to retrieve existing credit account tokens.
$delinquency_transition_token = 'delinquency_transition_token_example'; // string | Unique identifier of the delinquency state transition.

try {
    $result = $apiInstance->retrieveDelinquencyTransition($account_token, $delinquency_transition_token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DelinquencyApi->retrieveDelinquencyTransition: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **account_token** | **string**| Unique identifier of the credit account whose delinquency state transition you want to retrieve.  Send a &#x60;GET&#x60; request to &#x60;/credit/accounts&#x60; to retrieve existing credit account tokens. |
 **delinquency_transition_token** | **string**| Unique identifier of the delinquency state transition. |

### Return type

[**\OpenAPI\Client\Model\DelinquencyTransitionResponse**](../Model/DelinquencyTransitionResponse.md)

### Authorization

[mqAppAndAccessToken](../../README.md#mqAppAndAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `retrieveDelinquencyTransitions()`

```php
retrieveDelinquencyTransitions($account_token, $count, $start_index, $sort_by): \OpenAPI\Client\Model\DelinquencyTransitionsResponsePage
```

List delinquency state transitions

Retrieve an array of delinquency state transitions for a credit account.  A delinquency state transition occurs when an account's delinquency state transitions between delinquent and current. An account becomes delinquent when it falls behind on payments and becomes current when payments are made up to date.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: mqAppAndAccessToken
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\DelinquencyApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account_token = 'account_token_example'; // string | Unique identifier of the credit account whose delinquency state transitions you want to retrieve.  Send a `GET` request to `/credit/accounts` to retrieve existing credit account tokens.
$count = 5; // int | Number of resources to retrieve.
$start_index = 0; // int | Sort order index of the first resource in the returned array.
$sort_by = '-impactTime'; // string | Field on which to sort. Prefix the field name with a hyphen (`-`) to sort in descending order. Omit the hyphen to sort in ascending order.  *NOTE:* You must sort using system field names such as `impactTime`, and not by the field names appearing in response bodies such as `impact_time`.

try {
    $result = $apiInstance->retrieveDelinquencyTransitions($account_token, $count, $start_index, $sort_by);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DelinquencyApi->retrieveDelinquencyTransitions: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **account_token** | **string**| Unique identifier of the credit account whose delinquency state transitions you want to retrieve.  Send a &#x60;GET&#x60; request to &#x60;/credit/accounts&#x60; to retrieve existing credit account tokens. |
 **count** | **int**| Number of resources to retrieve. | [optional] [default to 5]
 **start_index** | **int**| Sort order index of the first resource in the returned array. | [optional] [default to 0]
 **sort_by** | **string**| Field on which to sort. Prefix the field name with a hyphen (&#x60;-&#x60;) to sort in descending order. Omit the hyphen to sort in ascending order.  *NOTE:* You must sort using system field names such as &#x60;impactTime&#x60;, and not by the field names appearing in response bodies such as &#x60;impact_time&#x60;. | [optional] [default to &#39;-impactTime&#39;]

### Return type

[**\OpenAPI\Client\Model\DelinquencyTransitionsResponsePage**](../Model/DelinquencyTransitionsResponsePage.md)

### Authorization

[mqAppAndAccessToken](../../README.md#mqAppAndAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
