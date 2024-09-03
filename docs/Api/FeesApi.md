# OpenAPI\Client\FeesApi

All URIs are relative to /v3.

Method | HTTP request | Description
------------- | ------------- | -------------
[**getFees()**](FeesApi.md#getFees) | **GET** /fees | List fees
[**getFeesToken()**](FeesApi.md#getFeesToken) | **GET** /fees/{token} | Retrieve fee
[**postFees()**](FeesApi.md#postFees) | **POST** /fees | Create fee
[**putFeesToken()**](FeesApi.md#putFeesToken) | **PUT** /fees/{token} | Update fee


## `getFees()`

```php
getFees($count, $start_index, $fields, $sort_by): \OpenAPI\Client\Model\FeeListResponse
```

List fees

Use this endpoint to list existing fees.  This endpoint supports <</core-api/field-filtering, field filtering>> and <</core-api/sorting-and-pagination, pagination>>.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: mqAppAndAccessToken
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\FeesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$count = 100; // int | Number of resources to retrieve.
$start_index = 0; // int | Sort order index of the first resource in the returned array.
$fields = 'fields_example'; // string | Comma-delimited list of fields to return (`field_1,field_2`, and so on). Leave blank to return all fields.
$sort_by = '-createdTime'; // string | Field on which to sort. Use any field in the resource model, or one of the system fields `lastModifiedTime` or `createdTime`. Prefix the field name with a hyphen (`-`) to sort in descending order. Omit the hyphen to sort in ascending order.

try {
    $result = $apiInstance->getFees($count, $start_index, $fields, $sort_by);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FeesApi->getFees: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **count** | **int**| Number of resources to retrieve. | [optional] [default to 100]
 **start_index** | **int**| Sort order index of the first resource in the returned array. | [optional] [default to 0]
 **fields** | **string**| Comma-delimited list of fields to return (&#x60;field_1,field_2&#x60;, and so on). Leave blank to return all fields. | [optional]
 **sort_by** | **string**| Field on which to sort. Use any field in the resource model, or one of the system fields &#x60;lastModifiedTime&#x60; or &#x60;createdTime&#x60;. Prefix the field name with a hyphen (&#x60;-&#x60;) to sort in descending order. Omit the hyphen to sort in ascending order. | [optional] [default to &#39;-createdTime&#39;]

### Return type

[**\OpenAPI\Client\Model\FeeListResponse**](../Model/FeeListResponse.md)

### Authorization

[mqAppAndAccessToken](../../README.md#mqAppAndAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getFeesToken()`

```php
getFeesToken($token): \OpenAPI\Client\Model\FeeResponse
```

Retrieve fee

Use this endpoint to retrieve a fee. Include the `token` path parameter to specify the fee to return.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: mqAppAndAccessToken
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\FeesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$token = 'token_example'; // string | Unique identifier of the fee resource.

try {
    $result = $apiInstance->getFeesToken($token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FeesApi->getFeesToken: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **token** | **string**| Unique identifier of the fee resource. |

### Return type

[**\OpenAPI\Client\Model\FeeResponse**](../Model/FeeResponse.md)

### Authorization

[mqAppAndAccessToken](../../README.md#mqAppAndAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postFees()`

```php
postFees($fee_request): \OpenAPI\Client\Model\FeeResponse
```

Create fee

Use this endpoint to create a fee. Add the source details to the body of the request in link:http://www.json.org/[JSON, window=\"_blank\"] format.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: mqAppAndAccessToken
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\FeesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$fee_request = {"amount":1.0,"currency_code":"USD","name":"My Fee 01","tags":"My Tags","token":"my_fee_01"}; // \OpenAPI\Client\Model\FeeRequest

try {
    $result = $apiInstance->postFees($fee_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FeesApi->postFees: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **fee_request** | [**\OpenAPI\Client\Model\FeeRequest**](../Model/FeeRequest.md)|  | [optional]

### Return type

[**\OpenAPI\Client\Model\FeeResponse**](../Model/FeeResponse.md)

### Authorization

[mqAppAndAccessToken](../../README.md#mqAppAndAccessToken)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `putFeesToken()`

```php
putFeesToken($token, $fee_update_request): \OpenAPI\Client\Model\FeeResponse
```

Update fee

Use this endpoint to update a fee. Include the `token` as a path parameter to indicate the fee to update.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: mqAppAndAccessToken
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\FeesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$token = 'token_example'; // string | Unique identifier of the fee resource.
$fee_update_request = {"active":false}; // \OpenAPI\Client\Model\FeeUpdateRequest

try {
    $result = $apiInstance->putFeesToken($token, $fee_update_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FeesApi->putFeesToken: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **token** | **string**| Unique identifier of the fee resource. |
 **fee_update_request** | [**\OpenAPI\Client\Model\FeeUpdateRequest**](../Model/FeeUpdateRequest.md)|  | [optional]

### Return type

[**\OpenAPI\Client\Model\FeeResponse**](../Model/FeeResponse.md)

### Authorization

[mqAppAndAccessToken](../../README.md#mqAppAndAccessToken)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
