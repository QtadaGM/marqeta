# OpenAPI\Client\AdminApi

All URIs are relative to /v3.

Method | HTTP request | Description
------------- | ------------- | -------------
[**replayFailedStatements()**](AdminApi.md#replayFailedStatements) | **POST** /admin/replayfailedstatements | Replays all failed statement from statement error processing table
[**replayFailedStatementsByShortCode()**](AdminApi.md#replayFailedStatementsByShortCode) | **POST** /admin/replayfailedstatements/{short_code} | Replays all failed statements by short code from statement error processing table
[**replaySingleFailedStatement()**](AdminApi.md#replaySingleFailedStatement) | **POST** /admin/{short_code}/replayfailedstatement/{account_token} | Replays single failed statement by short code  and account token from statement error processing table
[**retryAchPayment()**](AdminApi.md#retryAchPayment) | **POST** /admin/{short_code}/retryachpayments | Create a new ACHO ACH transfer
[**scheduleStatements()**](AdminApi.md#scheduleStatements) | **POST** /admin/scheduleStatements | Schedules statements for applicable accounts


## `replayFailedStatements()`

```php
replayFailedStatements(): \OpenAPI\Client\Model\Success
```

Replays all failed statement from statement error processing table

Replays all failed statement from statement error processing table

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: mqAppAndAccessToken
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\AdminApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->replayFailedStatements();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AdminApi->replayFailedStatements: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\OpenAPI\Client\Model\Success**](../Model/Success.md)

### Authorization

[mqAppAndAccessToken](../../README.md#mqAppAndAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `replayFailedStatementsByShortCode()`

```php
replayFailedStatementsByShortCode($short_code): \OpenAPI\Client\Model\Success
```

Replays all failed statements by short code from statement error processing table

Replays all failed statements by short code from statement error processing table

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: mqAppAndAccessToken
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\AdminApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$short_code = 'short_code_example'; // string | Short code of the program

try {
    $result = $apiInstance->replayFailedStatementsByShortCode($short_code);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AdminApi->replayFailedStatementsByShortCode: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **short_code** | **string**| Short code of the program |

### Return type

[**\OpenAPI\Client\Model\Success**](../Model/Success.md)

### Authorization

[mqAppAndAccessToken](../../README.md#mqAppAndAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `replaySingleFailedStatement()`

```php
replaySingleFailedStatement($short_code, $account_token): \OpenAPI\Client\Model\Success
```

Replays single failed statement by short code  and account token from statement error processing table

Creates and enables a feature flag for a specified program short code

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: mqAppAndAccessToken
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\AdminApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$short_code = 'short_code_example'; // string | Short code of the program
$account_token = 'account_token_example'; // string | account token of the account

try {
    $result = $apiInstance->replaySingleFailedStatement($short_code, $account_token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AdminApi->replaySingleFailedStatement: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **short_code** | **string**| Short code of the program |
 **account_token** | **string**| account token of the account |

### Return type

[**\OpenAPI\Client\Model\Success**](../Model/Success.md)

### Authorization

[mqAppAndAccessToken](../../README.md#mqAppAndAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `retryAchPayment()`

```php
retryAchPayment($short_code, $retry_ach_payment_req): \OpenAPI\Client\Model\RetryAchPaymentReq
```

Create a new ACHO ACH transfer

Create a new ACHO ACH transfer for payment who's current transfer has failed and is in ERROR state.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: mqAppAndAccessToken
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\AdminApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$short_code = 'short_code_example'; // string | Short code of the program
$retry_ach_payment_req = new \OpenAPI\Client\Model\RetryAchPaymentReq(); // \OpenAPI\Client\Model\RetryAchPaymentReq | Create a new ACHO ACH transfer

try {
    $result = $apiInstance->retryAchPayment($short_code, $retry_ach_payment_req);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AdminApi->retryAchPayment: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **short_code** | **string**| Short code of the program |
 **retry_ach_payment_req** | [**\OpenAPI\Client\Model\RetryAchPaymentReq**](../Model/RetryAchPaymentReq.md)| Create a new ACHO ACH transfer |

### Return type

[**\OpenAPI\Client\Model\RetryAchPaymentReq**](../Model/RetryAchPaymentReq.md)

### Authorization

[mqAppAndAccessToken](../../README.md#mqAppAndAccessToken)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `scheduleStatements()`

```php
scheduleStatements(): \OpenAPI\Client\Model\Success
```

Schedules statements for applicable accounts

Schedules statements for applicable accounts

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: mqAppAndAccessToken
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\AdminApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->scheduleStatements();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AdminApi->scheduleStatements: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\OpenAPI\Client\Model\Success**](../Model/Success.md)

### Authorization

[mqAppAndAccessToken](../../README.md#mqAppAndAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
