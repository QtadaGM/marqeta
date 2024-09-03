# OpenAPI\Client\PaymentSchedulesApi

All URIs are relative to /v3.

Method | HTTP request | Description
------------- | ------------- | -------------
[**createPaymentSchedule()**](PaymentSchedulesApi.md#createPaymentSchedule) | **POST** /accounts/{account_token}/paymentschedules | Create payment schedule
[**createPaymentScheduleTransition()**](PaymentSchedulesApi.md#createPaymentScheduleTransition) | **POST** /accounts/{account_token}/paymentschedules/{payment_schedule_token}/transitions | Create payment schedule transition
[**retrievePaymentSchedule()**](PaymentSchedulesApi.md#retrievePaymentSchedule) | **GET** /accounts/{account_token}/paymentschedules/{payment_schedule_token} | Retrieve payment schedule
[**retrievePaymentScheduleTransition()**](PaymentSchedulesApi.md#retrievePaymentScheduleTransition) | **GET** /accounts/{account_token}/paymentschedules/{payment_schedule_token}/transitions/{token} | Retrieve payment schedule transition
[**retrievePaymentScheduleTransitions()**](PaymentSchedulesApi.md#retrievePaymentScheduleTransitions) | **GET** /accounts/{account_token}/paymentschedules/{payment_schedule_token}/transitions | Retrieve payment schedule transitions
[**retrievePaymentSchedules()**](PaymentSchedulesApi.md#retrievePaymentSchedules) | **GET** /accounts/{account_token}/paymentschedules | List payment schedules


## `createPaymentSchedule()`

```php
createPaymentSchedule($account_token, $payment_schedule_create_req): \OpenAPI\Client\Model\PaymentScheduleResponse
```

Create payment schedule

Create a new payment schedule, either one-time or recurring.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: mqAppAndAccessToken
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\PaymentSchedulesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account_token = 'account_token_example'; // string | Unique identifier of the credit account for which you want to create a payment schedule.  Send a `GET` request to `/credit/accounts` to retrieve existing credit account tokens.
$payment_schedule_create_req = {"amount":100,"amount_category":"FIXED","currency_code":"USD","description":"Account statement payment","frequency":"MONTHLY","payment_day":"PAYMENT_DUE_DAY","payment_source_token":"payment_source_token_1112","token":"payment_schedule_token_1239"}; // \OpenAPI\Client\Model\PaymentScheduleCreateReq

try {
    $result = $apiInstance->createPaymentSchedule($account_token, $payment_schedule_create_req);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PaymentSchedulesApi->createPaymentSchedule: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **account_token** | **string**| Unique identifier of the credit account for which you want to create a payment schedule.  Send a &#x60;GET&#x60; request to &#x60;/credit/accounts&#x60; to retrieve existing credit account tokens. |
 **payment_schedule_create_req** | [**\OpenAPI\Client\Model\PaymentScheduleCreateReq**](../Model/PaymentScheduleCreateReq.md)|  |

### Return type

[**\OpenAPI\Client\Model\PaymentScheduleResponse**](../Model/PaymentScheduleResponse.md)

### Authorization

[mqAppAndAccessToken](../../README.md#mqAppAndAccessToken)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createPaymentScheduleTransition()`

```php
createPaymentScheduleTransition($account_token, $payment_schedule_token, $payment_schedule_transition_create_req): \OpenAPI\Client\Model\PaymentScheduleTransitionResponse
```

Create payment schedule transition

Transition a payment schedule to a new status.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: mqAppAndAccessToken
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\PaymentSchedulesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account_token = 'account_token_example'; // string | Unique identifier of the credit account on which to transition a payment schedule.  Send a `GET` request to `/credit/accounts` to retrieve existing credit account tokens.
$payment_schedule_token = 'payment_schedule_token_example'; // string | Unique identifier of the payment schedule whose status is to transition.  Send a `GET` request to `/credit/accounts/{account_token}/paymentschedules` to retrieve existing payment schedule tokens.
$payment_schedule_transition_create_req = {"status":"TERMINATED","token":"4749ab00-fec1-471c-ac5b-b8d31d06d7e4"}; // \OpenAPI\Client\Model\PaymentScheduleTransitionCreateReq

try {
    $result = $apiInstance->createPaymentScheduleTransition($account_token, $payment_schedule_token, $payment_schedule_transition_create_req);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PaymentSchedulesApi->createPaymentScheduleTransition: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **account_token** | **string**| Unique identifier of the credit account on which to transition a payment schedule.  Send a &#x60;GET&#x60; request to &#x60;/credit/accounts&#x60; to retrieve existing credit account tokens. |
 **payment_schedule_token** | **string**| Unique identifier of the payment schedule whose status is to transition.  Send a &#x60;GET&#x60; request to &#x60;/credit/accounts/{account_token}/paymentschedules&#x60; to retrieve existing payment schedule tokens. |
 **payment_schedule_transition_create_req** | [**\OpenAPI\Client\Model\PaymentScheduleTransitionCreateReq**](../Model/PaymentScheduleTransitionCreateReq.md)|  |

### Return type

[**\OpenAPI\Client\Model\PaymentScheduleTransitionResponse**](../Model/PaymentScheduleTransitionResponse.md)

### Authorization

[mqAppAndAccessToken](../../README.md#mqAppAndAccessToken)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `retrievePaymentSchedule()`

```php
retrievePaymentSchedule($account_token, $payment_schedule_token): \OpenAPI\Client\Model\PaymentScheduleResponse
```

Retrieve payment schedule

Retrieve a single payment schedule on a specific credit account.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: mqAppAndAccessToken
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\PaymentSchedulesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account_token = 'account_token_example'; // string | Unique identifier of the credit account for which you want to retrieve a payment schedule.  Send a `GET` request to `/credit/accounts` to retrieve existing credit account tokens.
$payment_schedule_token = 'payment_schedule_token_example'; // string | Unique identifier of the payment schedule that you want to retrieve.  Send a `GET` request to `/credit/accounts/{account_token}/paymentschedules` to retrieve existing payment schedule tokens.

try {
    $result = $apiInstance->retrievePaymentSchedule($account_token, $payment_schedule_token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PaymentSchedulesApi->retrievePaymentSchedule: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **account_token** | **string**| Unique identifier of the credit account for which you want to retrieve a payment schedule.  Send a &#x60;GET&#x60; request to &#x60;/credit/accounts&#x60; to retrieve existing credit account tokens. |
 **payment_schedule_token** | **string**| Unique identifier of the payment schedule that you want to retrieve.  Send a &#x60;GET&#x60; request to &#x60;/credit/accounts/{account_token}/paymentschedules&#x60; to retrieve existing payment schedule tokens. |

### Return type

[**\OpenAPI\Client\Model\PaymentScheduleResponse**](../Model/PaymentScheduleResponse.md)

### Authorization

[mqAppAndAccessToken](../../README.md#mqAppAndAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `retrievePaymentScheduleTransition()`

```php
retrievePaymentScheduleTransition($account_token, $payment_schedule_token, $token): \OpenAPI\Client\Model\PaymentScheduleTransitionResponse
```

Retrieve payment schedule transition

Retrieve a single payment schedule transition on a specific credit account.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: mqAppAndAccessToken
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\PaymentSchedulesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account_token = 'account_token_example'; // string | Unique identifier of the credit account for which you want to retrieve a payment schedule transition.  Send a `GET` request to `/credit/accounts` to retrieve existing credit account tokens.
$payment_schedule_token = 'payment_schedule_token_example'; // string | Unique identifier of the payment schedule you want to retrieve.  Send a `GET` request to `/credit/accounts/{account_token}/paymentschedules` to retrieve existing payment schedule tokens.
$token = 'token_example'; // string | Unique identifier of the payment schedule transition you want to retrieve.  Send a `GET` request to `/credit/accounts/{account_token}/paymentschedules/{payment_schedule_token}/transitions` to retrieve existing payment schedule transition tokens.

try {
    $result = $apiInstance->retrievePaymentScheduleTransition($account_token, $payment_schedule_token, $token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PaymentSchedulesApi->retrievePaymentScheduleTransition: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **account_token** | **string**| Unique identifier of the credit account for which you want to retrieve a payment schedule transition.  Send a &#x60;GET&#x60; request to &#x60;/credit/accounts&#x60; to retrieve existing credit account tokens. |
 **payment_schedule_token** | **string**| Unique identifier of the payment schedule you want to retrieve.  Send a &#x60;GET&#x60; request to &#x60;/credit/accounts/{account_token}/paymentschedules&#x60; to retrieve existing payment schedule tokens. |
 **token** | **string**| Unique identifier of the payment schedule transition you want to retrieve.  Send a &#x60;GET&#x60; request to &#x60;/credit/accounts/{account_token}/paymentschedules/{payment_schedule_token}/transitions&#x60; to retrieve existing payment schedule transition tokens. |

### Return type

[**\OpenAPI\Client\Model\PaymentScheduleTransitionResponse**](../Model/PaymentScheduleTransitionResponse.md)

### Authorization

[mqAppAndAccessToken](../../README.md#mqAppAndAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `retrievePaymentScheduleTransitions()`

```php
retrievePaymentScheduleTransitions($account_token, $payment_schedule_token, $count, $start_index, $sort_by): \OpenAPI\Client\Model\PaymentScheduleTransitionPage
```

Retrieve payment schedule transitions

Retrieve an array of payment schedule transitions on a specific credit account.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: mqAppAndAccessToken
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\PaymentSchedulesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account_token = 'account_token_example'; // string | Unique identifier of the credit account for which you want to retrieve payment schedule transitions.  Send a `GET` request to `/credit/accounts` to retrieve existing credit account tokens.
$payment_schedule_token = 'payment_schedule_token_example'; // string | Unique identifier of the payment schedule for which you want to retrieve transitions.  Send a `GET` request to `/credit/accounts/{account_token}/paymentschedules` to retrieve existing payment schedule tokens.
$count = 5; // int | Number of payment schedule resources to retrieve.
$start_index = 0; // int | Sort order index of the first resource in the returned array.
$sort_by = '-createdTime'; // string | Field on which to sort. Prefix the field name with a hyphen (`-`) to sort in descending order. Omit the hyphen to sort in ascending order.  *NOTE:* You must sort using system field names such as `createdTime`, and not by the field names appearing in response bodies such as `created_time`.

try {
    $result = $apiInstance->retrievePaymentScheduleTransitions($account_token, $payment_schedule_token, $count, $start_index, $sort_by);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PaymentSchedulesApi->retrievePaymentScheduleTransitions: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **account_token** | **string**| Unique identifier of the credit account for which you want to retrieve payment schedule transitions.  Send a &#x60;GET&#x60; request to &#x60;/credit/accounts&#x60; to retrieve existing credit account tokens. |
 **payment_schedule_token** | **string**| Unique identifier of the payment schedule for which you want to retrieve transitions.  Send a &#x60;GET&#x60; request to &#x60;/credit/accounts/{account_token}/paymentschedules&#x60; to retrieve existing payment schedule tokens. |
 **count** | **int**| Number of payment schedule resources to retrieve. | [optional] [default to 5]
 **start_index** | **int**| Sort order index of the first resource in the returned array. | [optional] [default to 0]
 **sort_by** | **string**| Field on which to sort. Prefix the field name with a hyphen (&#x60;-&#x60;) to sort in descending order. Omit the hyphen to sort in ascending order.  *NOTE:* You must sort using system field names such as &#x60;createdTime&#x60;, and not by the field names appearing in response bodies such as &#x60;created_time&#x60;. | [optional] [default to &#39;-createdTime&#39;]

### Return type

[**\OpenAPI\Client\Model\PaymentScheduleTransitionPage**](../Model/PaymentScheduleTransitionPage.md)

### Authorization

[mqAppAndAccessToken](../../README.md#mqAppAndAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `retrievePaymentSchedules()`

```php
retrievePaymentSchedules($account_token, $statuses, $frequency, $count, $start_index, $sort_by): \OpenAPI\Client\Model\PaymentSchedulePage
```

List payment schedules

Retrieve an array of payment schedules on a specific credit account.  This endpoint supports <</core-api/sorting-and-pagination, sorting and pagination>>.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: mqAppAndAccessToken
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\PaymentSchedulesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account_token = 'account_token_example'; // string | Unique identifier of the credit account for which you want to retrieve payment schedules.  Send a `GET` request to `/credit/accounts` to retrieve existing credit account tokens.
$statuses = array(new \OpenAPI\Client\Model\\OpenAPI\Client\Model\PaymentScheduleStatus()); // \OpenAPI\Client\Model\PaymentScheduleStatus[] | Status of the payment schedules to retrieve.
$frequency = array(new \OpenAPI\Client\Model\\OpenAPI\Client\Model\PaymentScheduleFrequency()); // \OpenAPI\Client\Model\PaymentScheduleFrequency[] | Frequency of the payment schedules to retrieve.
$count = 5; // int | Number of payment schedule resources to retrieve.
$start_index = 0; // int | Sort order index of the first resource in the returned array.
$sort_by = '-lastModifiedTime'; // string | Field on which to sort. Prefix the field name with a hyphen (`-`) to sort in descending order. Omit the hyphen to sort in ascending order.  *NOTE:* You must sort using system field names such as `lastModifiedTime`, and not by the field names appearing in response bodies such as `last_modified_time`.

try {
    $result = $apiInstance->retrievePaymentSchedules($account_token, $statuses, $frequency, $count, $start_index, $sort_by);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PaymentSchedulesApi->retrievePaymentSchedules: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **account_token** | **string**| Unique identifier of the credit account for which you want to retrieve payment schedules.  Send a &#x60;GET&#x60; request to &#x60;/credit/accounts&#x60; to retrieve existing credit account tokens. |
 **statuses** | [**\OpenAPI\Client\Model\PaymentScheduleStatus[]**](../Model/\OpenAPI\Client\Model\PaymentScheduleStatus.md)| Status of the payment schedules to retrieve. | [optional]
 **frequency** | [**\OpenAPI\Client\Model\PaymentScheduleFrequency[]**](../Model/\OpenAPI\Client\Model\PaymentScheduleFrequency.md)| Frequency of the payment schedules to retrieve. | [optional]
 **count** | **int**| Number of payment schedule resources to retrieve. | [optional] [default to 5]
 **start_index** | **int**| Sort order index of the first resource in the returned array. | [optional] [default to 0]
 **sort_by** | **string**| Field on which to sort. Prefix the field name with a hyphen (&#x60;-&#x60;) to sort in descending order. Omit the hyphen to sort in ascending order.  *NOTE:* You must sort using system field names such as &#x60;lastModifiedTime&#x60;, and not by the field names appearing in response bodies such as &#x60;last_modified_time&#x60;. | [optional] [default to &#39;-lastModifiedTime&#39;]

### Return type

[**\OpenAPI\Client\Model\PaymentSchedulePage**](../Model/PaymentSchedulePage.md)

### Authorization

[mqAppAndAccessToken](../../README.md#mqAppAndAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
