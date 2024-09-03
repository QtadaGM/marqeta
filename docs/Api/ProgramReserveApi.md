# OpenAPI\Client\ProgramReserveApi

All URIs are relative to /v3.

Method | HTTP request | Description
------------- | ------------- | -------------
[**getProgramreserveBalances()**](ProgramReserveApi.md#getProgramreserveBalances) | **GET** /programreserve/balances | Retrieve reserve account balances
[**getProgramreserveTransactions()**](ProgramReserveApi.md#getProgramreserveTransactions) | **GET** /programreserve/transactions | List program reserve transactions


## `getProgramreserveBalances()`

```php
getProgramreserveBalances(): \OpenAPI\Client\Model\ProgramReserveAccountBalance
```

Retrieve reserve account balances

Use this endpoint to return balances for your program reserve account (sometimes referred to as a _program funding account_).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: mqAppAndAccessToken
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\ProgramReserveApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getProgramreserveBalances();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProgramReserveApi->getProgramreserveBalances: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\OpenAPI\Client\Model\ProgramReserveAccountBalance**](../Model/ProgramReserveAccountBalance.md)

### Authorization

[mqAppAndAccessToken](../../README.md#mqAppAndAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getProgramreserveTransactions()`

```php
getProgramreserveTransactions($count, $start_index, $sort_by): \OpenAPI\Client\Model\ProgramReserveTransactionListResponse
```

List program reserve transactions

Use this endpoint to return a list of credits and debits made to your program reserve account.  This endpoint supports <</core-api/sorting-and-pagination, sorting and pagination>>.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: mqAppAndAccessToken
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\ProgramReserveApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$count = 5; // int | Number of resources to retrieve.
$start_index = 0; // int | Sort order index of the first resource in the returned array.
$sort_by = '-createdTime'; // string | Field on which to sort. Use any field in the resource model, or one of the system fields `lastModifiedTime` or `createdTime`. Prefix the field name with a hyphen (`-`) to sort in descending order. Omit the hyphen to sort in ascending order.

try {
    $result = $apiInstance->getProgramreserveTransactions($count, $start_index, $sort_by);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProgramReserveApi->getProgramreserveTransactions: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **count** | **int**| Number of resources to retrieve. | [optional] [default to 5]
 **start_index** | **int**| Sort order index of the first resource in the returned array. | [optional] [default to 0]
 **sort_by** | **string**| Field on which to sort. Use any field in the resource model, or one of the system fields &#x60;lastModifiedTime&#x60; or &#x60;createdTime&#x60;. Prefix the field name with a hyphen (&#x60;-&#x60;) to sort in descending order. Omit the hyphen to sort in ascending order. | [optional] [default to &#39;-createdTime&#39;]

### Return type

[**\OpenAPI\Client\Model\ProgramReserveTransactionListResponse**](../Model/ProgramReserveTransactionListResponse.md)

### Authorization

[mqAppAndAccessToken](../../README.md#mqAppAndAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
