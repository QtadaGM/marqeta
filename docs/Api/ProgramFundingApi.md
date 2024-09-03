# OpenAPI\Client\ProgramFundingApi

All URIs are relative to /v3.

Method | HTTP request | Description
------------- | ------------- | -------------
[**getProgramFundings()**](ProgramFundingApi.md#getProgramFundings) | **GET** /admin/programs/funding | List program fundings
[**getProgramFundingsByShortCode()**](ProgramFundingApi.md#getProgramFundingsByShortCode) | **GET** /programs/funding | List program fundings


## `getProgramFundings()`

```php
getProgramFundings($count, $start_index, $start_date, $end_date, $short_code): \OpenAPI\Client\Model\ProgramFundingPage
```

List program fundings

Retrieve an array of program funding entries.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: mqAppAndAccessToken
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\ProgramFundingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$count = 5; // int | Number of program funding resources to retrieve.
$start_index = 0; // int | Sort order index of the first resource in the returned array.
$start_date = 2014-01-01; // string | Start date for filtering program funding entries.
$end_date = 2014-04-01; // string | End date for filtering program funding entries.
$short_code = 'short_code_example'; // string | Short code for filtering program funding entries.

try {
    $result = $apiInstance->getProgramFundings($count, $start_index, $start_date, $end_date, $short_code);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProgramFundingApi->getProgramFundings: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **count** | **int**| Number of program funding resources to retrieve. | [optional] [default to 5]
 **start_index** | **int**| Sort order index of the first resource in the returned array. | [optional] [default to 0]
 **start_date** | **string**| Start date for filtering program funding entries. | [optional]
 **end_date** | **string**| End date for filtering program funding entries. | [optional]
 **short_code** | **string**| Short code for filtering program funding entries. | [optional]

### Return type

[**\OpenAPI\Client\Model\ProgramFundingPage**](../Model/ProgramFundingPage.md)

### Authorization

[mqAppAndAccessToken](../../README.md#mqAppAndAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getProgramFundingsByShortCode()`

```php
getProgramFundingsByShortCode($count, $start_index, $start_date, $end_date): \OpenAPI\Client\Model\ProgramFundingPage
```

List program fundings

Retrieve an array of program funding entries.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: mqAppAndAccessToken
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\ProgramFundingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$count = 5; // int | Number of program funding resources to retrieve.
$start_index = 0; // int | Sort order index of the first resource in the returned array.
$start_date = 2014-01-01; // string | Start date for filtering program funding entries.
$end_date = 2014-04-01; // string | End date for filtering program funding entries.

try {
    $result = $apiInstance->getProgramFundingsByShortCode($count, $start_index, $start_date, $end_date);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProgramFundingApi->getProgramFundingsByShortCode: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **count** | **int**| Number of program funding resources to retrieve. | [optional] [default to 5]
 **start_index** | **int**| Sort order index of the first resource in the returned array. | [optional] [default to 0]
 **start_date** | **string**| Start date for filtering program funding entries. | [optional]
 **end_date** | **string**| End date for filtering program funding entries. | [optional]

### Return type

[**\OpenAPI\Client\Model\ProgramFundingPage**](../Model/ProgramFundingPage.md)

### Authorization

[mqAppAndAccessToken](../../README.md#mqAppAndAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
