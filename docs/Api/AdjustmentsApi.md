# OpenAPI\Client\AdjustmentsApi

All URIs are relative to /v3.

Method | HTTP request | Description
------------- | ------------- | -------------
[**createAdjustmentForAccount()**](AdjustmentsApi.md#createAdjustmentForAccount) | **POST** /accounts/{account_token}/adjustments | Create account adjustment
[**getAdjustmentsByAccount()**](AdjustmentsApi.md#getAdjustmentsByAccount) | **GET** /accounts/{account_token}/adjustments | List account adjustments
[**retrieveAdjustment()**](AdjustmentsApi.md#retrieveAdjustment) | **GET** /accounts/{account_token}/adjustments/{adjustment_token} | Retrieve account adjustment


## `createAdjustmentForAccount()`

```php
createAdjustmentForAccount($account_token, $account_adjustment_req): \OpenAPI\Client\Model\AccountAdjustmentResponse
```

Create account adjustment

Create an adjustment for an existing credit account.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: mqAppAndAccessToken
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\AdjustmentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account_token = 'account_token_example'; // string | Unique identifier of the credit account for which you want to create an adjustment.  Send a `GET` request to `/credit/accounts` to retrieve existing credit account tokens.
$account_adjustment_req = {"amount":-25,"currency_code":"USD","description":"Waived late payment fee","original_ledger_entry_token":"2384f927-e4fe-47af-8ff6-0712ee41a2eb"}; // \OpenAPI\Client\Model\AccountAdjustmentReq

try {
    $result = $apiInstance->createAdjustmentForAccount($account_token, $account_adjustment_req);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AdjustmentsApi->createAdjustmentForAccount: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **account_token** | **string**| Unique identifier of the credit account for which you want to create an adjustment.  Send a &#x60;GET&#x60; request to &#x60;/credit/accounts&#x60; to retrieve existing credit account tokens. |
 **account_adjustment_req** | [**\OpenAPI\Client\Model\AccountAdjustmentReq**](../Model/AccountAdjustmentReq.md)|  |

### Return type

[**\OpenAPI\Client\Model\AccountAdjustmentResponse**](../Model/AccountAdjustmentResponse.md)

### Authorization

[mqAppAndAccessToken](../../README.md#mqAppAndAccessToken)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getAdjustmentsByAccount()`

```php
getAdjustmentsByAccount($account_token, $count, $start_index): \OpenAPI\Client\Model\AccountAdjustmentPage
```

List account adjustments

Retrieve an array of adjustments for a credit account.  This endpoint supports <</core-api/sorting-and-pagination, pagination>>.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: mqAppAndAccessToken
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\AdjustmentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account_token = 'account_token_example'; // string | Unique identifier of the credit account for which you want to retrieve adjustments.  Send a `GET` request to `/credit/accounts` to retrieve existing credit account tokens.
$count = 5; // int | Number of account adjustment resources to retrieve.
$start_index = 0; // int | Sort order index of the first resource in the returned array.

try {
    $result = $apiInstance->getAdjustmentsByAccount($account_token, $count, $start_index);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AdjustmentsApi->getAdjustmentsByAccount: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **account_token** | **string**| Unique identifier of the credit account for which you want to retrieve adjustments.  Send a &#x60;GET&#x60; request to &#x60;/credit/accounts&#x60; to retrieve existing credit account tokens. |
 **count** | **int**| Number of account adjustment resources to retrieve. | [optional] [default to 5]
 **start_index** | **int**| Sort order index of the first resource in the returned array. | [optional] [default to 0]

### Return type

[**\OpenAPI\Client\Model\AccountAdjustmentPage**](../Model/AccountAdjustmentPage.md)

### Authorization

[mqAppAndAccessToken](../../README.md#mqAppAndAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `retrieveAdjustment()`

```php
retrieveAdjustment($account_token, $adjustment_token): \OpenAPI\Client\Model\AccountAdjustmentResponse
```

Retrieve account adjustment

Retrieve an adjustment for a credit account.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: mqAppAndAccessToken
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\AdjustmentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account_token = 'account_token_example'; // string | Unique identifier of the credit account for which you want to retrieve an adjustment.  Send a `GET` request to `/credit/accounts` to retrieve existing credit account tokens.
$adjustment_token = 'adjustment_token_example'; // string | Unique identifier of the adjustment to retrieve.  Send a `GET` request to `/credit/accounts/{account_token}/adjustments` to retrieve existing account adjustment tokens.

try {
    $result = $apiInstance->retrieveAdjustment($account_token, $adjustment_token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AdjustmentsApi->retrieveAdjustment: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **account_token** | **string**| Unique identifier of the credit account for which you want to retrieve an adjustment.  Send a &#x60;GET&#x60; request to &#x60;/credit/accounts&#x60; to retrieve existing credit account tokens. |
 **adjustment_token** | **string**| Unique identifier of the adjustment to retrieve.  Send a &#x60;GET&#x60; request to &#x60;/credit/accounts/{account_token}/adjustments&#x60; to retrieve existing account adjustment tokens. |

### Return type

[**\OpenAPI\Client\Model\AccountAdjustmentResponse**](../Model/AccountAdjustmentResponse.md)

### Authorization

[mqAppAndAccessToken](../../README.md#mqAppAndAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
