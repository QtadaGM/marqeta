# OpenAPI\Client\PaymentsApi

All URIs are relative to /v3.

Method | HTTP request | Description
------------- | ------------- | -------------
[**createPayment()**](PaymentsApi.md#createPayment) | **POST** /accounts/{account_token}/payments | Create account payment
[**listPayments()**](PaymentsApi.md#listPayments) | **GET** /accounts/{account_token}/payments | List account payments
[**releasePaymentHold()**](PaymentsApi.md#releasePaymentHold) | **POST** /accounts/{account_token}/payments/{payment_token}/releasehold | Release payment hold
[**resendWebhookEvent()**](PaymentsApi.md#resendWebhookEvent) | **POST** /webhooks/{event_type}/{resource_token} | Resend credit event notification
[**retrievePayment()**](PaymentsApi.md#retrievePayment) | **GET** /accounts/{account_token}/payments/{payment_token} | Retrieve account payment
[**transitionPayment()**](PaymentsApi.md#transitionPayment) | **POST** /accounts/{account_token}/payments/{payment_token}/transitions | Transition account payment status


## `createPayment()`

```php
createPayment($account_token, $payment_create_req): \OpenAPI\Client\Model\PaymentDetailResponse
```

Create account payment

Create a new payment to apply toward a credit account's balance.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: mqAppAndAccessToken
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\PaymentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account_token = 'account_token_example'; // string | Unique identifier of the credit account for which to create a payment.  Send a `GET` request to `/credit/accounts` to retrieve existing credit account tokens.
$payment_create_req = {"amount":2500,"currency_code":"USD","description":"Account statement payment","method":"ACH","payment_source_token":"payment_source_token_1112","token":"payment_token_1239"}; // \OpenAPI\Client\Model\PaymentCreateReq

try {
    $result = $apiInstance->createPayment($account_token, $payment_create_req);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PaymentsApi->createPayment: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **account_token** | **string**| Unique identifier of the credit account for which to create a payment.  Send a &#x60;GET&#x60; request to &#x60;/credit/accounts&#x60; to retrieve existing credit account tokens. |
 **payment_create_req** | [**\OpenAPI\Client\Model\PaymentCreateReq**](../Model/PaymentCreateReq.md)|  |

### Return type

[**\OpenAPI\Client\Model\PaymentDetailResponse**](../Model/PaymentDetailResponse.md)

### Authorization

[mqAppAndAccessToken](../../README.md#mqAppAndAccessToken)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listPayments()`

```php
listPayments($account_token, $start_date, $end_date, $count, $start_index, $sort_by, $statuses): \OpenAPI\Client\Model\PaymentsPage
```

List account payments

Retrieve an array of payments on a credit account.  This endpoint supports <</core-api/sorting-and-pagination, sorting and pagination>>.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: mqAppAndAccessToken
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\PaymentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account_token = 'account_token_example'; // string | Unique identifier of the credit account for which to retrieve payments.  Send a `GET` request to `/credit/accounts` to retrieve existing credit account tokens.
$start_date = Mon Jan 01 00:00:00 GMT 2024; // \DateTime | Beginning of the date range of the payments to return.
$end_date = Thu Feb 01 00:00:00 GMT 2024; // \DateTime | End of the date range of the payments to return.
$count = 5; // int | Number of account payments resources to retrieve.
$start_index = 0; // int | Sort order index of the first resource in the returned array.
$sort_by = '-lastModifiedTime'; // string | Field on which to sort. Prefix the field name with a hyphen (`-`) to sort in descending order. Omit the hyphen to sort in ascending order.  *NOTE:* You must sort using system field names such as `lastModifiedTime`, and not by the field names appearing in response bodies such as `last_modified_time`.
$statuses = array(new \OpenAPI\Client\Model\\OpenAPI\Client\Model\PaymentStatus()); // \OpenAPI\Client\Model\PaymentStatus[] | Array of statuses by which to filter payments.

try {
    $result = $apiInstance->listPayments($account_token, $start_date, $end_date, $count, $start_index, $sort_by, $statuses);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PaymentsApi->listPayments: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **account_token** | **string**| Unique identifier of the credit account for which to retrieve payments.  Send a &#x60;GET&#x60; request to &#x60;/credit/accounts&#x60; to retrieve existing credit account tokens. |
 **start_date** | **\DateTime**| Beginning of the date range of the payments to return. | [optional]
 **end_date** | **\DateTime**| End of the date range of the payments to return. | [optional]
 **count** | **int**| Number of account payments resources to retrieve. | [optional] [default to 5]
 **start_index** | **int**| Sort order index of the first resource in the returned array. | [optional] [default to 0]
 **sort_by** | **string**| Field on which to sort. Prefix the field name with a hyphen (&#x60;-&#x60;) to sort in descending order. Omit the hyphen to sort in ascending order.  *NOTE:* You must sort using system field names such as &#x60;lastModifiedTime&#x60;, and not by the field names appearing in response bodies such as &#x60;last_modified_time&#x60;. | [optional] [default to &#39;-lastModifiedTime&#39;]
 **statuses** | [**\OpenAPI\Client\Model\PaymentStatus[]**](../Model/\OpenAPI\Client\Model\PaymentStatus.md)| Array of statuses by which to filter payments. | [optional]

### Return type

[**\OpenAPI\Client\Model\PaymentsPage**](../Model/PaymentsPage.md)

### Authorization

[mqAppAndAccessToken](../../README.md#mqAppAndAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `releasePaymentHold()`

```php
releasePaymentHold($account_token, $payment_token): \OpenAPI\Client\Model\PaymentDetailResponse
```

Release payment hold

Manually release a payment hold on a credit account.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: mqAppAndAccessToken
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\PaymentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account_token = 'account_token_example'; // string | Unique identifier of the credit account on which a payment hold is being released.  Send a `GET` request to `/credit/accounts` to retrieve existing credit account tokens.
$payment_token = 'payment_token_example'; // string | Unique identifier of the payment currently on hold.  Send a `GET` request to `/credit/accounts/{account_token}/payments` to retrieve existing payment tokens.

try {
    $result = $apiInstance->releasePaymentHold($account_token, $payment_token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PaymentsApi->releasePaymentHold: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **account_token** | **string**| Unique identifier of the credit account on which a payment hold is being released.  Send a &#x60;GET&#x60; request to &#x60;/credit/accounts&#x60; to retrieve existing credit account tokens. |
 **payment_token** | **string**| Unique identifier of the payment currently on hold.  Send a &#x60;GET&#x60; request to &#x60;/credit/accounts/{account_token}/payments&#x60; to retrieve existing payment tokens. |

### Return type

[**\OpenAPI\Client\Model\PaymentDetailResponse**](../Model/PaymentDetailResponse.md)

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


$apiInstance = new OpenAPI\Client\Api\PaymentsApi(
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
    echo 'Exception when calling PaymentsApi->resendWebhookEvent: ', $e->getMessage(), PHP_EOL;
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

## `retrievePayment()`

```php
retrievePayment($account_token, $payment_token): \OpenAPI\Client\Model\PaymentDetailResponse
```

Retrieve account payment

Retrieve a payment for a credit account.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: mqAppAndAccessToken
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\PaymentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account_token = 'account_token_example'; // string | Unique identifier of the credit account for which to retrieve a payment.  Send a `GET` request to `/credit/accounts` to retrieve existing credit account tokens.
$payment_token = 'payment_token_example'; // string | Unique identifier of the payment to retrieve.  Send a `GET` request to `/credit/accounts/{token}/payments` to retrieve existing payment tokens.

try {
    $result = $apiInstance->retrievePayment($account_token, $payment_token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PaymentsApi->retrievePayment: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **account_token** | **string**| Unique identifier of the credit account for which to retrieve a payment.  Send a &#x60;GET&#x60; request to &#x60;/credit/accounts&#x60; to retrieve existing credit account tokens. |
 **payment_token** | **string**| Unique identifier of the payment to retrieve.  Send a &#x60;GET&#x60; request to &#x60;/credit/accounts/{token}/payments&#x60; to retrieve existing payment tokens. |

### Return type

[**\OpenAPI\Client\Model\PaymentDetailResponse**](../Model/PaymentDetailResponse.md)

### Authorization

[mqAppAndAccessToken](../../README.md#mqAppAndAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `transitionPayment()`

```php
transitionPayment($account_token, $payment_token, $payment_transition_req): \OpenAPI\Client\Model\PaymentTransitionResponse
```

Transition account payment status

Transition a credit account payment's status to a new status.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: mqAppAndAccessToken
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\PaymentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account_token = 'account_token_example'; // string | Unique identifier of the credit account for which you want to transition a payment status.  Send a `GET` request to `/credit/accounts` to retrieve existing credit account tokens.
$payment_token = 'payment_token_example'; // string | Unique identifier of the payment whose status you want to transition.  Send a `GET` request to `/credit/accounts/{account_token}/payments` endpoint to retrieve existing payment tokens for a given account.
$payment_transition_req = {"status":"RETURNED"}; // \OpenAPI\Client\Model\PaymentTransitionReq

try {
    $result = $apiInstance->transitionPayment($account_token, $payment_token, $payment_transition_req);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PaymentsApi->transitionPayment: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **account_token** | **string**| Unique identifier of the credit account for which you want to transition a payment status.  Send a &#x60;GET&#x60; request to &#x60;/credit/accounts&#x60; to retrieve existing credit account tokens. |
 **payment_token** | **string**| Unique identifier of the payment whose status you want to transition.  Send a &#x60;GET&#x60; request to &#x60;/credit/accounts/{account_token}/payments&#x60; endpoint to retrieve existing payment tokens for a given account. |
 **payment_transition_req** | [**\OpenAPI\Client\Model\PaymentTransitionReq**](../Model/PaymentTransitionReq.md)|  |

### Return type

[**\OpenAPI\Client\Model\PaymentTransitionResponse**](../Model/PaymentTransitionResponse.md)

### Authorization

[mqAppAndAccessToken](../../README.md#mqAppAndAccessToken)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
