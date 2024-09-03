# OpenAPI\Client\AccountTransitionsApi

All URIs are relative to /v3.

Method | HTTP request | Description
------------- | ------------- | -------------
[**getAccountTransition()**](AccountTransitionsApi.md#getAccountTransition) | **GET** /accounts/{account_token}/accounttransitions/{token} | Retrieve account transition
[**listAccountTransitions()**](AccountTransitionsApi.md#listAccountTransitions) | **GET** /accounts/{account_token}/accounttransitions | List account transitions
[**resendWebhookEvent()**](AccountTransitionsApi.md#resendWebhookEvent) | **POST** /webhooks/{event_type}/{resource_token} | Resend credit event notification
[**transitionAccount()**](AccountTransitionsApi.md#transitionAccount) | **POST** /accounts/{account_token}/accounttransitions | Transition account status


## `getAccountTransition()`

```php
getAccountTransition($account_token, $token): \OpenAPI\Client\Model\AccountTransitionResponse
```

Retrieve account transition

Retrieve a transition for a credit account.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: mqAppAndAccessToken
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\AccountTransitionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account_token = 'account_token_example'; // string | Unique identifier of the credit account for which you want to retrieve a transition.  Send a `GET` request to `/credit/accounts` to retrieve existing credit account tokens.
$token = 'token_example'; // string | Unique identifier of the account transition you want to retrieve.  Send a `GET` request to `/credit/accounts/{account_token}/accounttransitions` to retrieve existing account transition tokens.

try {
    $result = $apiInstance->getAccountTransition($account_token, $token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountTransitionsApi->getAccountTransition: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **account_token** | **string**| Unique identifier of the credit account for which you want to retrieve a transition.  Send a &#x60;GET&#x60; request to &#x60;/credit/accounts&#x60; to retrieve existing credit account tokens. |
 **token** | **string**| Unique identifier of the account transition you want to retrieve.  Send a &#x60;GET&#x60; request to &#x60;/credit/accounts/{account_token}/accounttransitions&#x60; to retrieve existing account transition tokens. |

### Return type

[**\OpenAPI\Client\Model\AccountTransitionResponse**](../Model/AccountTransitionResponse.md)

### Authorization

[mqAppAndAccessToken](../../README.md#mqAppAndAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listAccountTransitions()`

```php
listAccountTransitions($account_token, $count, $start_index, $sort_by): \OpenAPI\Client\Model\AccountTransitionsPage
```

List account transitions

Retrieve an array of transitions on a credit account.  This endpoint supports <</core-api/sorting-and-pagination, sorting and pagination>>.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: mqAppAndAccessToken
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\AccountTransitionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account_token = 'account_token_example'; // string | Unique identifier of the credit account for which you want to retrieve transitions.  Send a `GET` request to `/credit/accounts` to retrieve existing credit account tokens.
$count = 5; // int | Number of account transition resources to retrieve.
$start_index = 0; // int | Sort order index of the first resource in the returned array.
$sort_by = '-createdTime'; // string | Field on which to sort. Prefix the field name with a hyphen (`-`) to sort in descending order. Omit the hyphen to sort in ascending order.  *NOTE:* You must sort using system field names such as `createdTime`, and not by the field names appearing in response bodies such as `created_time`.

try {
    $result = $apiInstance->listAccountTransitions($account_token, $count, $start_index, $sort_by);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountTransitionsApi->listAccountTransitions: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **account_token** | **string**| Unique identifier of the credit account for which you want to retrieve transitions.  Send a &#x60;GET&#x60; request to &#x60;/credit/accounts&#x60; to retrieve existing credit account tokens. |
 **count** | **int**| Number of account transition resources to retrieve. | [optional] [default to 5]
 **start_index** | **int**| Sort order index of the first resource in the returned array. | [optional] [default to 0]
 **sort_by** | **string**| Field on which to sort. Prefix the field name with a hyphen (&#x60;-&#x60;) to sort in descending order. Omit the hyphen to sort in ascending order.  *NOTE:* You must sort using system field names such as &#x60;createdTime&#x60;, and not by the field names appearing in response bodies such as &#x60;created_time&#x60;. | [optional] [default to &#39;-createdTime&#39;]

### Return type

[**\OpenAPI\Client\Model\AccountTransitionsPage**](../Model/AccountTransitionsPage.md)

### Authorization

[mqAppAndAccessToken](../../README.md#mqAppAndAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

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


$apiInstance = new OpenAPI\Client\Api\AccountTransitionsApi(
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
    echo 'Exception when calling AccountTransitionsApi->resendWebhookEvent: ', $e->getMessage(), PHP_EOL;
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

## `transitionAccount()`

```php
transitionAccount($account_token, $account_transition_req): \OpenAPI\Client\Model\AccountTransitionResponse
```

Transition account status

Transition a credit account to a new status.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: mqAppAndAccessToken
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\AccountTransitionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account_token = 'account_token_example'; // string | Unique identifier of the credit account for which to transition a status.  Send a `GET` request to `/credit/accounts` to retrieve existing credit account tokens.
$account_transition_req = {"status":"ACTIVE"}; // \OpenAPI\Client\Model\AccountTransitionReq

try {
    $result = $apiInstance->transitionAccount($account_token, $account_transition_req);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountTransitionsApi->transitionAccount: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **account_token** | **string**| Unique identifier of the credit account for which to transition a status.  Send a &#x60;GET&#x60; request to &#x60;/credit/accounts&#x60; to retrieve existing credit account tokens. |
 **account_transition_req** | [**\OpenAPI\Client\Model\AccountTransitionReq**](../Model/AccountTransitionReq.md)|  |

### Return type

[**\OpenAPI\Client\Model\AccountTransitionResponse**](../Model/AccountTransitionResponse.md)

### Authorization

[mqAppAndAccessToken](../../README.md#mqAppAndAccessToken)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
