# OpenAPI\Client\ProgramFundingSourcesApi

All URIs are relative to /v3.

Method | HTTP request | Description
------------- | ------------- | -------------
[**getAllACHFundingSources()**](ProgramFundingSourcesApi.md#getAllACHFundingSources) | **GET** /fundingsources/program/ach | List ACH program sources
[**getFundingsourcesProgramToken()**](ProgramFundingSourcesApi.md#getFundingsourcesProgramToken) | **GET** /fundingsources/program/{token} | Retrieve program source
[**postFundingsourcesProgram()**](ProgramFundingSourcesApi.md#postFundingsourcesProgram) | **POST** /fundingsources/program | Create program source
[**postFundingsourcesProgramAch()**](ProgramFundingSourcesApi.md#postFundingsourcesProgramAch) | **POST** /fundingsources/program/ach | Create ACH program source
[**putFundingsourcesProgramToken()**](ProgramFundingSourcesApi.md#putFundingsourcesProgramToken) | **PUT** /fundingsources/program/{token} | Update program source


## `getAllACHFundingSources()`

```php
getAllACHFundingSources($count, $start_index, $fields, $sort_by, $active): \OpenAPI\Client\Model\ACHListResponse
```

List ACH program sources

List ACH program funding sources.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: mqAppAndAccessToken
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\ProgramFundingSourcesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$count = 5; // int | Number of resources to retrieve.
$start_index = 0; // int | Sort order index of the first resource in the returned array.
$fields = 'fields_example'; // string | Comma-delimited list of fields to return (`field_1,field_2`, and so on). Leave blank to return all fields.
$sort_by = '-lastModifiedTime'; // string | Field on which to sort. Use any field in the resource model, or one of the system fields `lastModifiedTime` or `createdTime`. Prefix the field name with a hyphen (`-`) to sort in descending order. Omit the hyphen to sort in ascending order.
$active = True; // bool | If `true`, returns ACH funding sources from active programs only. If `false`, returns all ACH funding sources.

try {
    $result = $apiInstance->getAllACHFundingSources($count, $start_index, $fields, $sort_by, $active);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProgramFundingSourcesApi->getAllACHFundingSources: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **count** | **int**| Number of resources to retrieve. | [optional] [default to 5]
 **start_index** | **int**| Sort order index of the first resource in the returned array. | [optional] [default to 0]
 **fields** | **string**| Comma-delimited list of fields to return (&#x60;field_1,field_2&#x60;, and so on). Leave blank to return all fields. | [optional]
 **sort_by** | **string**| Field on which to sort. Use any field in the resource model, or one of the system fields &#x60;lastModifiedTime&#x60; or &#x60;createdTime&#x60;. Prefix the field name with a hyphen (&#x60;-&#x60;) to sort in descending order. Omit the hyphen to sort in ascending order. | [optional] [default to &#39;-lastModifiedTime&#39;]
 **active** | **bool**| If &#x60;true&#x60;, returns ACH funding sources from active programs only. If &#x60;false&#x60;, returns all ACH funding sources. | [optional]

### Return type

[**\OpenAPI\Client\Model\ACHListResponse**](../Model/ACHListResponse.md)

### Authorization

[mqAppAndAccessToken](../../README.md#mqAppAndAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getFundingsourcesProgramToken()`

```php
getFundingsourcesProgramToken($token): \OpenAPI\Client\Model\ProgramFundingSourceResponse
```

Retrieve program source

Retrieve a specific program funding source, whether active or inactive.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: mqAppAndAccessToken
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\ProgramFundingSourcesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$token = 'token_example'; // string | Unique identifier of the program funding source.

try {
    $result = $apiInstance->getFundingsourcesProgramToken($token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProgramFundingSourcesApi->getFundingsourcesProgramToken: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **token** | **string**| Unique identifier of the program funding source. |

### Return type

[**\OpenAPI\Client\Model\ProgramFundingSourceResponse**](../Model/ProgramFundingSourceResponse.md)

### Authorization

[mqAppAndAccessToken](../../README.md#mqAppAndAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postFundingsourcesProgram()`

```php
postFundingsourcesProgram($program_funding_source_request): \OpenAPI\Client\Model\ProgramFundingSourceResponse
```

Create program source

Create a program funding source.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: mqAppAndAccessToken
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\ProgramFundingSourcesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$program_funding_source_request = {"active":true,"name":"my_programfundingsource_name","token":"my_programfundingsource_token"}; // \OpenAPI\Client\Model\ProgramFundingSourceRequest

try {
    $result = $apiInstance->postFundingsourcesProgram($program_funding_source_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProgramFundingSourcesApi->postFundingsourcesProgram: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **program_funding_source_request** | [**\OpenAPI\Client\Model\ProgramFundingSourceRequest**](../Model/ProgramFundingSourceRequest.md)|  | [optional]

### Return type

[**\OpenAPI\Client\Model\ProgramFundingSourceResponse**](../Model/ProgramFundingSourceResponse.md)

### Authorization

[mqAppAndAccessToken](../../README.md#mqAppAndAccessToken)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postFundingsourcesProgramAch()`

```php
postFundingsourcesProgramAch($base_ach_request_model): \OpenAPI\Client\Model\BaseAchResponseModel
```

Create ACH program source

Create an ACH program funding source.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: mqAppAndAccessToken
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\ProgramFundingSourcesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$base_ach_request_model = {"account_number":"888271159","account_type":"checking","is_default_account":true,"name_on_account":"John Doe","routing_number":"121000357","verification_notes":"testing","verification_override":true}; // \OpenAPI\Client\Model\BaseAchRequestModel

try {
    $result = $apiInstance->postFundingsourcesProgramAch($base_ach_request_model);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProgramFundingSourcesApi->postFundingsourcesProgramAch: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **base_ach_request_model** | [**\OpenAPI\Client\Model\BaseAchRequestModel**](../Model/BaseAchRequestModel.md)|  | [optional]

### Return type

[**\OpenAPI\Client\Model\BaseAchResponseModel**](../Model/BaseAchResponseModel.md)

### Authorization

[mqAppAndAccessToken](../../README.md#mqAppAndAccessToken)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `putFundingsourcesProgramToken()`

```php
putFundingsourcesProgramToken($token, $program_funding_source_update_request): \OpenAPI\Client\Model\ProgramFundingSourceResponse
```

Update program source

Update a program funding source.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: mqAppAndAccessToken
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\ProgramFundingSourcesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$token = 'token_example'; // string | Unique identifier of the program funding source.
$program_funding_source_update_request = {"active":false,"name":"your_programfundingsource_name"}; // \OpenAPI\Client\Model\ProgramFundingSourceUpdateRequest

try {
    $result = $apiInstance->putFundingsourcesProgramToken($token, $program_funding_source_update_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProgramFundingSourcesApi->putFundingsourcesProgramToken: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **token** | **string**| Unique identifier of the program funding source. |
 **program_funding_source_update_request** | [**\OpenAPI\Client\Model\ProgramFundingSourceUpdateRequest**](../Model/ProgramFundingSourceUpdateRequest.md)|  | [optional]

### Return type

[**\OpenAPI\Client\Model\ProgramFundingSourceResponse**](../Model/ProgramFundingSourceResponse.md)

### Authorization

[mqAppAndAccessToken](../../README.md#mqAppAndAccessToken)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
