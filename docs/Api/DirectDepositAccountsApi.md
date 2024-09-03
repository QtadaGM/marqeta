# OpenAPI\Client\DirectDepositAccountsApi

All URIs are relative to /v3.

Method | HTTP request | Description
------------- | ------------- | -------------
[**createAccount()**](DirectDepositAccountsApi.md#createAccount) | **POST** /depositaccounts | Creates new direct deposit account for cardholder.
[**createTransition()**](DirectDepositAccountsApi.md#createTransition) | **POST** /depositaccounts/transitions | Creates new transition for a direct deposit account.
[**getCDDInfo()**](DirectDepositAccountsApi.md#getCDDInfo) | **GET** /depositaccounts/{token}/cdd | Get direct deposit account transition list for card holder.
[**getDirectDepositAccount()**](DirectDepositAccountsApi.md#getDirectDepositAccount) | **GET** /depositaccounts/{token} | Get direct deposit account.
[**getDirectDepositAccountTransition()**](DirectDepositAccountsApi.md#getDirectDepositAccountTransition) | **GET** /depositaccounts/transitions/{token} | Get direct deposit account transition.
[**getTransitionList()**](DirectDepositAccountsApi.md#getTransitionList) | **GET** /depositaccounts/{user_token}/transitions | Get direct deposit account transition list for card holder.
[**getUserDirectDepositAccounts()**](DirectDepositAccountsApi.md#getUserDirectDepositAccounts) | **GET** /depositaccounts/user/{token} | List all specific direct deposit accounts.
[**getUserForDirectDepositAccount()**](DirectDepositAccountsApi.md#getUserForDirectDepositAccount) | **GET** /depositaccounts/account/{account_number}/user | Get User for Plain Text Account Number
[**update()**](DirectDepositAccountsApi.md#update) | **PUT** /depositaccounts/{token} | Update direct deposit account.
[**updateCDDInfo()**](DirectDepositAccountsApi.md#updateCDDInfo) | **PUT** /depositaccounts/{token}/cdd/{cddtoken} | Update CDD answers for Direct Deposit Account


## `createAccount()`

```php
createAccount($direct_deposit_account_request): \OpenAPI\Client\Model\DirectDepositAccountResponse
```

Creates new direct deposit account for cardholder.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: mqAppAndAccessToken
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\DirectDepositAccountsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$direct_deposit_account_request = new \OpenAPI\Client\Model\DirectDepositAccountRequest(); // \OpenAPI\Client\Model\DirectDepositAccountRequest | Create direct deposit account for cardholder

try {
    $result = $apiInstance->createAccount($direct_deposit_account_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DirectDepositAccountsApi->createAccount: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **direct_deposit_account_request** | [**\OpenAPI\Client\Model\DirectDepositAccountRequest**](../Model/DirectDepositAccountRequest.md)| Create direct deposit account for cardholder |

### Return type

[**\OpenAPI\Client\Model\DirectDepositAccountResponse**](../Model/DirectDepositAccountResponse.md)

### Authorization

[mqAppAndAccessToken](../../README.md#mqAppAndAccessToken)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createTransition()`

```php
createTransition($direct_deposit_account_transition_request): \OpenAPI\Client\Model\DirectDepositAccountTransitionResponse
```

Creates new transition for a direct deposit account.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: mqAppAndAccessToken
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\DirectDepositAccountsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$direct_deposit_account_transition_request = new \OpenAPI\Client\Model\DirectDepositAccountTransitionRequest(); // \OpenAPI\Client\Model\DirectDepositAccountTransitionRequest | Create transition for direct deposit account

try {
    $result = $apiInstance->createTransition($direct_deposit_account_transition_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DirectDepositAccountsApi->createTransition: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **direct_deposit_account_transition_request** | [**\OpenAPI\Client\Model\DirectDepositAccountTransitionRequest**](../Model/DirectDepositAccountTransitionRequest.md)| Create transition for direct deposit account |

### Return type

[**\OpenAPI\Client\Model\DirectDepositAccountTransitionResponse**](../Model/DirectDepositAccountTransitionResponse.md)

### Authorization

[mqAppAndAccessToken](../../README.md#mqAppAndAccessToken)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getCDDInfo()`

```php
getCDDInfo($token): \OpenAPI\Client\Model\CustomerDueDiligenceResponse
```

Get direct deposit account transition list for card holder.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: mqAppAndAccessToken
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\DirectDepositAccountsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$token = 'token_example'; // string | Get CDD info for a specific DDA token

try {
    $result = $apiInstance->getCDDInfo($token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DirectDepositAccountsApi->getCDDInfo: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **token** | **string**| Get CDD info for a specific DDA token |

### Return type

[**\OpenAPI\Client\Model\CustomerDueDiligenceResponse**](../Model/CustomerDueDiligenceResponse.md)

### Authorization

[mqAppAndAccessToken](../../README.md#mqAppAndAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getDirectDepositAccount()`

```php
getDirectDepositAccount($token): \OpenAPI\Client\Model\DirectDepositAccountResponse
```

Get direct deposit account.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: mqAppAndAccessToken
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\DirectDepositAccountsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$token = 'token_example'; // string | Get specific direct deposit account

try {
    $result = $apiInstance->getDirectDepositAccount($token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DirectDepositAccountsApi->getDirectDepositAccount: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **token** | **string**| Get specific direct deposit account |

### Return type

[**\OpenAPI\Client\Model\DirectDepositAccountResponse**](../Model/DirectDepositAccountResponse.md)

### Authorization

[mqAppAndAccessToken](../../README.md#mqAppAndAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getDirectDepositAccountTransition()`

```php
getDirectDepositAccountTransition($token): \OpenAPI\Client\Model\DirectDepositAccountTransitionResponse
```

Get direct deposit account transition.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: mqAppAndAccessToken
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\DirectDepositAccountsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$token = 'token_example'; // string | Get specific direct deposit account transition

try {
    $result = $apiInstance->getDirectDepositAccountTransition($token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DirectDepositAccountsApi->getDirectDepositAccountTransition: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **token** | **string**| Get specific direct deposit account transition |

### Return type

[**\OpenAPI\Client\Model\DirectDepositAccountTransitionResponse**](../Model/DirectDepositAccountTransitionResponse.md)

### Authorization

[mqAppAndAccessToken](../../README.md#mqAppAndAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getTransitionList()`

```php
getTransitionList($user_token, $count, $start_index, $sort_by): \OpenAPI\Client\Model\DirectDepositAccountTransitionResponse
```

Get direct deposit account transition list for card holder.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: mqAppAndAccessToken
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\DirectDepositAccountsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$user_token = 'user_token_example'; // string | Get direct deposit account transition list for user
$count = 5; // int | Number of users to retrieve
$start_index = 0; // int | Start index
$sort_by = '-createdTime'; // string | Sort order

try {
    $result = $apiInstance->getTransitionList($user_token, $count, $start_index, $sort_by);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DirectDepositAccountsApi->getTransitionList: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **user_token** | **string**| Get direct deposit account transition list for user |
 **count** | **int**| Number of users to retrieve | [optional] [default to 5]
 **start_index** | **int**| Start index | [optional] [default to 0]
 **sort_by** | **string**| Sort order | [optional] [default to &#39;-createdTime&#39;]

### Return type

[**\OpenAPI\Client\Model\DirectDepositAccountTransitionResponse**](../Model/DirectDepositAccountTransitionResponse.md)

### Authorization

[mqAppAndAccessToken](../../README.md#mqAppAndAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getUserDirectDepositAccounts()`

```php
getUserDirectDepositAccounts($token, $count, $start_index, $sort_by, $state): \OpenAPI\Client\Model\DirectDepositAccountListResponse
```

List all specific direct deposit accounts.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: mqAppAndAccessToken
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\DirectDepositAccountsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$token = 'token_example'; // string | Get specific direct deposit account
$count = 5; // int | Number of users to retrieve
$start_index = 0; // int | Start index
$sort_by = '-lastModifiedTime'; // string | Sort order
$state = 'state_example'; // string | Direct deposit account status

try {
    $result = $apiInstance->getUserDirectDepositAccounts($token, $count, $start_index, $sort_by, $state);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DirectDepositAccountsApi->getUserDirectDepositAccounts: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **token** | **string**| Get specific direct deposit account |
 **count** | **int**| Number of users to retrieve | [optional] [default to 5]
 **start_index** | **int**| Start index | [optional] [default to 0]
 **sort_by** | **string**| Sort order | [optional] [default to &#39;-lastModifiedTime&#39;]
 **state** | **string**| Direct deposit account status | [optional]

### Return type

[**\OpenAPI\Client\Model\DirectDepositAccountListResponse**](../Model/DirectDepositAccountListResponse.md)

### Authorization

[mqAppAndAccessToken](../../README.md#mqAppAndAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getUserForDirectDepositAccount()`

```php
getUserForDirectDepositAccount($account_number): \OpenAPI\Client\Model\DirectDepositAccountResponse
```

Get User for Plain Text Account Number

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: mqAppAndAccessToken
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\DirectDepositAccountsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account_number = 'account_number_example'; // string | Get user associated with direct deposit account number

try {
    $result = $apiInstance->getUserForDirectDepositAccount($account_number);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DirectDepositAccountsApi->getUserForDirectDepositAccount: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **account_number** | **string**| Get user associated with direct deposit account number |

### Return type

[**\OpenAPI\Client\Model\DirectDepositAccountResponse**](../Model/DirectDepositAccountResponse.md)

### Authorization

[mqAppAndAccessToken](../../README.md#mqAppAndAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `update()`

```php
update($token, $deposit_account_update_request): \OpenAPI\Client\Model\DirectDepositAccountResponse
```

Update direct deposit account.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: mqAppAndAccessToken
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\DirectDepositAccountsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$token = 'token_example'; // string
$deposit_account_update_request = new \OpenAPI\Client\Model\DepositAccountUpdateRequest(); // \OpenAPI\Client\Model\DepositAccountUpdateRequest | Update direct deposit account

try {
    $result = $apiInstance->update($token, $deposit_account_update_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DirectDepositAccountsApi->update: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **token** | **string**|  |
 **deposit_account_update_request** | [**\OpenAPI\Client\Model\DepositAccountUpdateRequest**](../Model/DepositAccountUpdateRequest.md)| Update direct deposit account |

### Return type

[**\OpenAPI\Client\Model\DirectDepositAccountResponse**](../Model/DirectDepositAccountResponse.md)

### Authorization

[mqAppAndAccessToken](../../README.md#mqAppAndAccessToken)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateCDDInfo()`

```php
updateCDDInfo($token, $cddtoken, $customer_due_diligence_update_response): \OpenAPI\Client\Model\CustomerDueDiligenceResponse
```

Update CDD answers for Direct Deposit Account

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: mqAppAndAccessToken
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\DirectDepositAccountsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$token = 'token_example'; // string
$cddtoken = 'cddtoken_example'; // string
$customer_due_diligence_update_response = new \OpenAPI\Client\Model\CustomerDueDiligenceUpdateResponse(); // \OpenAPI\Client\Model\CustomerDueDiligenceUpdateResponse | Update CDD answers

try {
    $result = $apiInstance->updateCDDInfo($token, $cddtoken, $customer_due_diligence_update_response);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DirectDepositAccountsApi->updateCDDInfo: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **token** | **string**|  |
 **cddtoken** | **string**|  |
 **customer_due_diligence_update_response** | [**\OpenAPI\Client\Model\CustomerDueDiligenceUpdateResponse**](../Model/CustomerDueDiligenceUpdateResponse.md)| Update CDD answers |

### Return type

[**\OpenAPI\Client\Model\CustomerDueDiligenceResponse**](../Model/CustomerDueDiligenceResponse.md)

### Authorization

[mqAppAndAccessToken](../../README.md#mqAppAndAccessToken)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
