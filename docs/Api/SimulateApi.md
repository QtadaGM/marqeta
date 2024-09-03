# OpenAPI\Client\SimulateApi

All URIs are relative to /v3.

Method | HTTP request | Description
------------- | ------------- | -------------
[**postSimulateAuthorization()**](SimulateApi.md#postSimulateAuthorization) | **POST** /simulate/authorization | Simulates an authorization
[**postSimulateAuthorizationAdvice()**](SimulateApi.md#postSimulateAuthorizationAdvice) | **POST** /simulate/authorization/advice | Simulates an authorization advice transaction
[**postSimulateClearing()**](SimulateApi.md#postSimulateClearing) | **POST** /simulate/clearing | Simulates a clearing/settlement transaction
[**postSimulateDirectdeposits()**](SimulateApi.md#postSimulateDirectdeposits) | **POST** /simulate/directdeposits | Simulates the creation of direct deposit
[**postSimulateFinancial()**](SimulateApi.md#postSimulateFinancial) | **POST** /simulate/financial | Simulates a financial request (PIN debit) transaction with optional cash back
[**postSimulateFinancialAdvice()**](SimulateApi.md#postSimulateFinancialAdvice) | **POST** /simulate/financial/advice | Simulates a financial advice transaction
[**postSimulateFinancialBalanceinquiry()**](SimulateApi.md#postSimulateFinancialBalanceinquiry) | **POST** /simulate/financial/balanceinquiry | Simulates a balance inquiry
[**postSimulateFinancialOriginalcredit()**](SimulateApi.md#postSimulateFinancialOriginalcredit) | **POST** /simulate/financial/originalcredit | Simulates an orignal credit transaction
[**postSimulateFinancialWithdrawal()**](SimulateApi.md#postSimulateFinancialWithdrawal) | **POST** /simulate/financial/withdrawal | Simulates an ATM withdrawal transaction
[**postSimulateReversal()**](SimulateApi.md#postSimulateReversal) | **POST** /simulate/reversal | Simulates a reversal transaction


## `postSimulateAuthorization()`

```php
postSimulateAuthorization($auth_request_model): \OpenAPI\Client\Model\SimulationResponseModel
```

Simulates an authorization

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: mqAppAndAccessToken
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\SimulateApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$auth_request_model = new \OpenAPI\Client\Model\AuthRequestModel(); // \OpenAPI\Client\Model\AuthRequestModel

try {
    $result = $apiInstance->postSimulateAuthorization($auth_request_model);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SimulateApi->postSimulateAuthorization: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **auth_request_model** | [**\OpenAPI\Client\Model\AuthRequestModel**](../Model/AuthRequestModel.md)|  | [optional]

### Return type

[**\OpenAPI\Client\Model\SimulationResponseModel**](../Model/SimulationResponseModel.md)

### Authorization

[mqAppAndAccessToken](../../README.md#mqAppAndAccessToken)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postSimulateAuthorizationAdvice()`

```php
postSimulateAuthorizationAdvice($authorization_advice_model): \OpenAPI\Client\Model\SimulationResponseModel
```

Simulates an authorization advice transaction

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: mqAppAndAccessToken
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\SimulateApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$authorization_advice_model = new \OpenAPI\Client\Model\AuthorizationAdviceModel(); // \OpenAPI\Client\Model\AuthorizationAdviceModel

try {
    $result = $apiInstance->postSimulateAuthorizationAdvice($authorization_advice_model);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SimulateApi->postSimulateAuthorizationAdvice: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **authorization_advice_model** | [**\OpenAPI\Client\Model\AuthorizationAdviceModel**](../Model/AuthorizationAdviceModel.md)|  | [optional]

### Return type

[**\OpenAPI\Client\Model\SimulationResponseModel**](../Model/SimulationResponseModel.md)

### Authorization

[mqAppAndAccessToken](../../README.md#mqAppAndAccessToken)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postSimulateClearing()`

```php
postSimulateClearing($clearing_model): \OpenAPI\Client\Model\SimulationResponseModel
```

Simulates a clearing/settlement transaction

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: mqAppAndAccessToken
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\SimulateApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$clearing_model = new \OpenAPI\Client\Model\ClearingModel(); // \OpenAPI\Client\Model\ClearingModel

try {
    $result = $apiInstance->postSimulateClearing($clearing_model);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SimulateApi->postSimulateClearing: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **clearing_model** | [**\OpenAPI\Client\Model\ClearingModel**](../Model/ClearingModel.md)|  | [optional]

### Return type

[**\OpenAPI\Client\Model\SimulationResponseModel**](../Model/SimulationResponseModel.md)

### Authorization

[mqAppAndAccessToken](../../README.md#mqAppAndAccessToken)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postSimulateDirectdeposits()`

```php
postSimulateDirectdeposits($direct_deposit_request): \OpenAPI\Client\Model\DepositDepositResponse
```

Simulates the creation of direct deposit

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: mqAppAndAccessToken
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\SimulateApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$direct_deposit_request = new \OpenAPI\Client\Model\DirectDepositRequest(); // \OpenAPI\Client\Model\DirectDepositRequest | Direct deposit simulate request model

try {
    $result = $apiInstance->postSimulateDirectdeposits($direct_deposit_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SimulateApi->postSimulateDirectdeposits: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **direct_deposit_request** | [**\OpenAPI\Client\Model\DirectDepositRequest**](../Model/DirectDepositRequest.md)| Direct deposit simulate request model |

### Return type

[**\OpenAPI\Client\Model\DepositDepositResponse**](../Model/DepositDepositResponse.md)

### Authorization

[mqAppAndAccessToken](../../README.md#mqAppAndAccessToken)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postSimulateFinancial()`

```php
postSimulateFinancial($financial_request_model): \OpenAPI\Client\Model\SimulationResponseModel
```

Simulates a financial request (PIN debit) transaction with optional cash back

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: mqAppAndAccessToken
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\SimulateApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$financial_request_model = new \OpenAPI\Client\Model\FinancialRequestModel(); // \OpenAPI\Client\Model\FinancialRequestModel | Financial request model

try {
    $result = $apiInstance->postSimulateFinancial($financial_request_model);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SimulateApi->postSimulateFinancial: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **financial_request_model** | [**\OpenAPI\Client\Model\FinancialRequestModel**](../Model/FinancialRequestModel.md)| Financial request model |

### Return type

[**\OpenAPI\Client\Model\SimulationResponseModel**](../Model/SimulationResponseModel.md)

### Authorization

[mqAppAndAccessToken](../../README.md#mqAppAndAccessToken)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postSimulateFinancialAdvice()`

```php
postSimulateFinancialAdvice($authorization_advice_model): \OpenAPI\Client\Model\SimulationResponseModel
```

Simulates a financial advice transaction

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: mqAppAndAccessToken
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\SimulateApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$authorization_advice_model = new \OpenAPI\Client\Model\AuthorizationAdviceModel(); // \OpenAPI\Client\Model\AuthorizationAdviceModel | Financial advice request model

try {
    $result = $apiInstance->postSimulateFinancialAdvice($authorization_advice_model);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SimulateApi->postSimulateFinancialAdvice: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **authorization_advice_model** | [**\OpenAPI\Client\Model\AuthorizationAdviceModel**](../Model/AuthorizationAdviceModel.md)| Financial advice request model |

### Return type

[**\OpenAPI\Client\Model\SimulationResponseModel**](../Model/SimulationResponseModel.md)

### Authorization

[mqAppAndAccessToken](../../README.md#mqAppAndAccessToken)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postSimulateFinancialBalanceinquiry()`

```php
postSimulateFinancialBalanceinquiry($balance_inquiry_request_model): \OpenAPI\Client\Model\SimulationResponseModel
```

Simulates a balance inquiry

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: mqAppAndAccessToken
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\SimulateApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$balance_inquiry_request_model = new \OpenAPI\Client\Model\BalanceInquiryRequestModel(); // \OpenAPI\Client\Model\BalanceInquiryRequestModel | Balance inquiry request model

try {
    $result = $apiInstance->postSimulateFinancialBalanceinquiry($balance_inquiry_request_model);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SimulateApi->postSimulateFinancialBalanceinquiry: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **balance_inquiry_request_model** | [**\OpenAPI\Client\Model\BalanceInquiryRequestModel**](../Model/BalanceInquiryRequestModel.md)| Balance inquiry request model |

### Return type

[**\OpenAPI\Client\Model\SimulationResponseModel**](../Model/SimulationResponseModel.md)

### Authorization

[mqAppAndAccessToken](../../README.md#mqAppAndAccessToken)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postSimulateFinancialOriginalcredit()`

```php
postSimulateFinancialOriginalcredit($orignalcredit_request_model): \OpenAPI\Client\Model\SimulationResponseModel
```

Simulates an orignal credit transaction

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: mqAppAndAccessToken
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\SimulateApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$orignalcredit_request_model = new \OpenAPI\Client\Model\OrignalcreditRequestModel(); // \OpenAPI\Client\Model\OrignalcreditRequestModel | Orignal Credit request model

try {
    $result = $apiInstance->postSimulateFinancialOriginalcredit($orignalcredit_request_model);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SimulateApi->postSimulateFinancialOriginalcredit: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **orignalcredit_request_model** | [**\OpenAPI\Client\Model\OrignalcreditRequestModel**](../Model/OrignalcreditRequestModel.md)| Orignal Credit request model |

### Return type

[**\OpenAPI\Client\Model\SimulationResponseModel**](../Model/SimulationResponseModel.md)

### Authorization

[mqAppAndAccessToken](../../README.md#mqAppAndAccessToken)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postSimulateFinancialWithdrawal()`

```php
postSimulateFinancialWithdrawal($withdrawal_request_model): \OpenAPI\Client\Model\SimulationResponseModel
```

Simulates an ATM withdrawal transaction

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: mqAppAndAccessToken
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\SimulateApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$withdrawal_request_model = new \OpenAPI\Client\Model\WithdrawalRequestModel(); // \OpenAPI\Client\Model\WithdrawalRequestModel | ATM withdrawal request model

try {
    $result = $apiInstance->postSimulateFinancialWithdrawal($withdrawal_request_model);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SimulateApi->postSimulateFinancialWithdrawal: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **withdrawal_request_model** | [**\OpenAPI\Client\Model\WithdrawalRequestModel**](../Model/WithdrawalRequestModel.md)| ATM withdrawal request model |

### Return type

[**\OpenAPI\Client\Model\SimulationResponseModel**](../Model/SimulationResponseModel.md)

### Authorization

[mqAppAndAccessToken](../../README.md#mqAppAndAccessToken)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postSimulateReversal()`

```php
postSimulateReversal($reversal_model): \OpenAPI\Client\Model\SimulationResponseModel
```

Simulates a reversal transaction

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: mqAppAndAccessToken
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\SimulateApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$reversal_model = new \OpenAPI\Client\Model\ReversalModel(); // \OpenAPI\Client\Model\ReversalModel

try {
    $result = $apiInstance->postSimulateReversal($reversal_model);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SimulateApi->postSimulateReversal: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **reversal_model** | [**\OpenAPI\Client\Model\ReversalModel**](../Model/ReversalModel.md)|  | [optional]

### Return type

[**\OpenAPI\Client\Model\SimulationResponseModel**](../Model/SimulationResponseModel.md)

### Authorization

[mqAppAndAccessToken](../../README.md#mqAppAndAccessToken)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
