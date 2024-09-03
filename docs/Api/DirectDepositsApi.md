# OpenAPI\Client\DirectDepositsApi

All URIs are relative to /v3.

Method | HTTP request | Description
------------- | ------------- | -------------
[**getDirectdeposits()**](DirectDepositsApi.md#getDirectdeposits) | **GET** /directdeposits | Retrieves a list of all direct deposit records for your program.
[**getDirectdepositsAccountsUserorbusinesstoken()**](DirectDepositsApi.md#getDirectdepositsAccountsUserorbusinesstoken) | **GET** /directdeposits/accounts/{user_or_business_token} | Returns an account and routing number which can be used for direct deposit
[**getDirectdepositsToken()**](DirectDepositsApi.md#getDirectdepositsToken) | **GET** /directdeposits/{token} | Returns a direct deposit entry
[**getDirectdepositsTransitions()**](DirectDepositsApi.md#getDirectdepositsTransitions) | **GET** /directdeposits/transitions | Returns a list of direct deposit transitions
[**getDirectdepositsTransitionsToken()**](DirectDepositsApi.md#getDirectdepositsTransitionsToken) | **GET** /directdeposits/transitions/{token} | Returns a direct deposit transition
[**postDirectdepositsTransitions()**](DirectDepositsApi.md#postDirectdepositsTransitions) | **POST** /directdeposits/transitions | Creates a direct deposit transition
[**putDirectdepositsAccountsUserorbusinesstoken()**](DirectDepositsApi.md#putDirectdepositsAccountsUserorbusinesstoken) | **PUT** /directdeposits/accounts/{user_or_business_token} | Updates a specific direct deposit account


## `getDirectdeposits()`

```php
getDirectdeposits($count, $start_index, $reversed_after_grace_period, $user_token, $business_token, $direct_deposit_state, $start_settlement_date, $end_settlement_date, $sort_by): \OpenAPI\Client\Model\DirectDepositListResponse
```

Retrieves a list of all direct deposit records for your program.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: mqAppAndAccessToken
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\DirectDepositsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$count = 5; // int | The number of direct deposit records to retrieve.
$start_index = 0; // int | Start index
$reversed_after_grace_period = True; // bool | Reversed after grace period
$user_token = 'user_token_example'; // string | User token
$business_token = 'business_token_example'; // string | Business token
$direct_deposit_state = 'direct_deposit_state_example'; // string | Comma-delimited list of direct deposit states to display e.g. PENDING | REVERSED | APPLIED | REJECTED
$start_settlement_date = 'start_settlement_date_example'; // string | Start Settlement Date
$end_settlement_date = 'end_settlement_date_example'; // string | End Settlement Date
$sort_by = '-lastModifiedTime'; // string | Sort order

try {
    $result = $apiInstance->getDirectdeposits($count, $start_index, $reversed_after_grace_period, $user_token, $business_token, $direct_deposit_state, $start_settlement_date, $end_settlement_date, $sort_by);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DirectDepositsApi->getDirectdeposits: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **count** | **int**| The number of direct deposit records to retrieve. | [optional] [default to 5]
 **start_index** | **int**| Start index | [optional] [default to 0]
 **reversed_after_grace_period** | **bool**| Reversed after grace period | [optional]
 **user_token** | **string**| User token | [optional]
 **business_token** | **string**| Business token | [optional]
 **direct_deposit_state** | **string**| Comma-delimited list of direct deposit states to display e.g. PENDING | REVERSED | APPLIED | REJECTED | [optional]
 **start_settlement_date** | **string**| Start Settlement Date | [optional]
 **end_settlement_date** | **string**| End Settlement Date | [optional]
 **sort_by** | **string**| Sort order | [optional] [default to &#39;-lastModifiedTime&#39;]

### Return type

[**\OpenAPI\Client\Model\DirectDepositListResponse**](../Model/DirectDepositListResponse.md)

### Authorization

[mqAppAndAccessToken](../../README.md#mqAppAndAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getDirectdepositsAccountsUserorbusinesstoken()`

```php
getDirectdepositsAccountsUserorbusinesstoken($user_or_business_token): \OpenAPI\Client\Model\DepositAccount
```

Returns an account and routing number which can be used for direct deposit

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: mqAppAndAccessToken
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\DirectDepositsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$user_or_business_token = 'user_or_business_token_example'; // string

try {
    $result = $apiInstance->getDirectdepositsAccountsUserorbusinesstoken($user_or_business_token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DirectDepositsApi->getDirectdepositsAccountsUserorbusinesstoken: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **user_or_business_token** | **string**|  |

### Return type

[**\OpenAPI\Client\Model\DepositAccount**](../Model/DepositAccount.md)

### Authorization

[mqAppAndAccessToken](../../README.md#mqAppAndAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getDirectdepositsToken()`

```php
getDirectdepositsToken($token): \OpenAPI\Client\Model\DirectDepositResponse
```

Returns a direct deposit entry

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: mqAppAndAccessToken
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\DirectDepositsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$token = 'token_example'; // string

try {
    $result = $apiInstance->getDirectdepositsToken($token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DirectDepositsApi->getDirectdepositsToken: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **token** | **string**|  |

### Return type

[**\OpenAPI\Client\Model\DirectDepositResponse**](../Model/DirectDepositResponse.md)

### Authorization

[mqAppAndAccessToken](../../README.md#mqAppAndAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getDirectdepositsTransitions()`

```php
getDirectdepositsTransitions($count, $user_token, $business_token, $direct_deposit_token, $start_index, $sort_by, $states): \OpenAPI\Client\Model\DirectDepositTransitionListResponse
```

Returns a list of direct deposit transitions

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: mqAppAndAccessToken
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\DirectDepositsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$count = 5; // int | Number of direct deposit transitions to retrieve
$user_token = 'user_token_example'; // string | User token
$business_token = 'business_token_example'; // string | Business token
$direct_deposit_token = 'direct_deposit_token_example'; // string | Direct deposit token
$start_index = 0; // int | Start index
$sort_by = '-createdTime'; // string | Sort order
$states = 'states_example'; // string | Comma-delimited list of direct deposit states to display e.g. PENDING | REVERSED | APPLIED | REJECTED

try {
    $result = $apiInstance->getDirectdepositsTransitions($count, $user_token, $business_token, $direct_deposit_token, $start_index, $sort_by, $states);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DirectDepositsApi->getDirectdepositsTransitions: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **count** | **int**| Number of direct deposit transitions to retrieve | [optional] [default to 5]
 **user_token** | **string**| User token | [optional]
 **business_token** | **string**| Business token | [optional]
 **direct_deposit_token** | **string**| Direct deposit token | [optional]
 **start_index** | **int**| Start index | [optional] [default to 0]
 **sort_by** | **string**| Sort order | [optional] [default to &#39;-createdTime&#39;]
 **states** | **string**| Comma-delimited list of direct deposit states to display e.g. PENDING | REVERSED | APPLIED | REJECTED | [optional]

### Return type

[**\OpenAPI\Client\Model\DirectDepositTransitionListResponse**](../Model/DirectDepositTransitionListResponse.md)

### Authorization

[mqAppAndAccessToken](../../README.md#mqAppAndAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getDirectdepositsTransitionsToken()`

```php
getDirectdepositsTransitionsToken($token): \OpenAPI\Client\Model\DirectDepositTransitionResponse
```

Returns a direct deposit transition

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: mqAppAndAccessToken
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\DirectDepositsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$token = 'token_example'; // string

try {
    $result = $apiInstance->getDirectdepositsTransitionsToken($token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DirectDepositsApi->getDirectdepositsTransitionsToken: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **token** | **string**|  |

### Return type

[**\OpenAPI\Client\Model\DirectDepositTransitionResponse**](../Model/DirectDepositTransitionResponse.md)

### Authorization

[mqAppAndAccessToken](../../README.md#mqAppAndAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postDirectdepositsTransitions()`

```php
postDirectdepositsTransitions($direct_deposit_transition_request): \OpenAPI\Client\Model\DirectDepositTransitionResponse
```

Creates a direct deposit transition

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: mqAppAndAccessToken
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\DirectDepositsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$direct_deposit_transition_request = new \OpenAPI\Client\Model\DirectDepositTransitionRequest(); // \OpenAPI\Client\Model\DirectDepositTransitionRequest

try {
    $result = $apiInstance->postDirectdepositsTransitions($direct_deposit_transition_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DirectDepositsApi->postDirectdepositsTransitions: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **direct_deposit_transition_request** | [**\OpenAPI\Client\Model\DirectDepositTransitionRequest**](../Model/DirectDepositTransitionRequest.md)|  | [optional]

### Return type

[**\OpenAPI\Client\Model\DirectDepositTransitionResponse**](../Model/DirectDepositTransitionResponse.md)

### Authorization

[mqAppAndAccessToken](../../README.md#mqAppAndAccessToken)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `putDirectdepositsAccountsUserorbusinesstoken()`

```php
putDirectdepositsAccountsUserorbusinesstoken($user_or_business_token, $deposit_account_update_request): \OpenAPI\Client\Model\DepositAccount
```

Updates a specific direct deposit account

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: mqAppAndAccessToken
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\DirectDepositsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$user_or_business_token = 'user_or_business_token_example'; // string | User or business token
$deposit_account_update_request = new \OpenAPI\Client\Model\DepositAccountUpdateRequest(); // \OpenAPI\Client\Model\DepositAccountUpdateRequest | Deposit account update request

try {
    $result = $apiInstance->putDirectdepositsAccountsUserorbusinesstoken($user_or_business_token, $deposit_account_update_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DirectDepositsApi->putDirectdepositsAccountsUserorbusinesstoken: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **user_or_business_token** | **string**| User or business token |
 **deposit_account_update_request** | [**\OpenAPI\Client\Model\DepositAccountUpdateRequest**](../Model/DepositAccountUpdateRequest.md)| Deposit account update request |

### Return type

[**\OpenAPI\Client\Model\DepositAccount**](../Model/DepositAccount.md)

### Authorization

[mqAppAndAccessToken](../../README.md#mqAppAndAccessToken)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
