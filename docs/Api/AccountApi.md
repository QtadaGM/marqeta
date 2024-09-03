# OpenAPI\Client\AccountApi

All URIs are relative to /v3.

Method | HTTP request | Description
------------- | ------------- | -------------
[**getPeriodicFeeSchedules()**](AccountApi.md#getPeriodicFeeSchedules) | **GET** /accounts/{account_token}/periodicfeeschedules | Get all active and upcoming periodic fee schedules of an account
[**retrieveBillingCycleForAccount()**](AccountApi.md#retrieveBillingCycleForAccount) | **GET** /accounts/{account_token}/billingcycle | Get billing cycle by account token


## `getPeriodicFeeSchedules()`

```php
getPeriodicFeeSchedules($account_token, $count, $start_index): \OpenAPI\Client\Model\PeriodicFeeSchedulePage
```

Get all active and upcoming periodic fee schedules of an account

Get all active and upcoming periodic fee schedules of an account

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: mqAppAndAccessToken
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\AccountApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account_token = 'account_token_example'; // string | account token
$count = 5; // int | Number of periodic fee schedule resources to retrieve.
$start_index = 0; // int | Sort order index of the first resource in the returned array.

try {
    $result = $apiInstance->getPeriodicFeeSchedules($account_token, $count, $start_index);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountApi->getPeriodicFeeSchedules: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **account_token** | **string**| account token |
 **count** | **int**| Number of periodic fee schedule resources to retrieve. | [optional] [default to 5]
 **start_index** | **int**| Sort order index of the first resource in the returned array. | [optional] [default to 0]

### Return type

[**\OpenAPI\Client\Model\PeriodicFeeSchedulePage**](../Model/PeriodicFeeSchedulePage.md)

### Authorization

[mqAppAndAccessToken](../../README.md#mqAppAndAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `retrieveBillingCycleForAccount()`

```php
retrieveBillingCycleForAccount($account_token): \OpenAPI\Client\Model\AccountBillingCycleResponse
```

Get billing cycle by account token

Retrieves the billing cycle details for a specific account token.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: mqAppAndAccessToken
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\AccountApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account_token = 'account_token_example'; // string | Unique identifier of the credit account for which you want to retrieve delinquency state details.  Send a `GET` request to `/credit/accounts` to retrieve existing credit account tokens.

try {
    $result = $apiInstance->retrieveBillingCycleForAccount($account_token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountApi->retrieveBillingCycleForAccount: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **account_token** | **string**| Unique identifier of the credit account for which you want to retrieve delinquency state details.  Send a &#x60;GET&#x60; request to &#x60;/credit/accounts&#x60; to retrieve existing credit account tokens. |

### Return type

[**\OpenAPI\Client\Model\AccountBillingCycleResponse**](../Model/AccountBillingCycleResponse.md)

### Authorization

[mqAppAndAccessToken](../../README.md#mqAppAndAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
