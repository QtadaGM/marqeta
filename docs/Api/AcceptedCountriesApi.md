# OpenAPI\Client\AcceptedCountriesApi

All URIs are relative to /v3.

Method | HTTP request | Description
------------- | ------------- | -------------
[**getAcceptedcountries()**](AcceptedCountriesApi.md#getAcceptedcountries) | **GET** /acceptedcountries | List accepted countries objects
[**getAcceptedcountriesToken()**](AcceptedCountriesApi.md#getAcceptedcountriesToken) | **GET** /acceptedcountries/{token} | Retrieve an accepted countries object


## `getAcceptedcountries()`

```php
getAcceptedcountries($count, $start_index, $name, $whitelist, $search_type, $fields, $sort_by): \OpenAPI\Client\Model\AcceptedCountriesListResponse
```

List accepted countries objects

Retrieve a list of `acceptedcountries` objects.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: mqAppAndAccessToken
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\AcceptedCountriesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$count = 5; // int | Number of accepted countries objects to retrieve.
$start_index = 0; // int | Sort order index of the first resource in the returned array.
$name = 'name_example'; // string | Name of the accepted countries object.
$whitelist = True; // bool | Specifies if the accepted countries object is an allow list.
$search_type = 'search_type_example'; // string | Specifies the type of search you want to perform.
$fields = 'fields_example'; // string | Comma-delimited list of fields to return (`field_1,field_2`, and so on).  Leave blank to return all fields.
$sort_by = '-lastModifiedTime'; // string | Field on which to sort.  Use any field in the resource model, or one of the system fields `lastModifiedTime` or `createdTime`.  Prefix the field name with a hyphen (`-`) to sort in descending order.  Omit the hyphen to sort in ascending order.

try {
    $result = $apiInstance->getAcceptedcountries($count, $start_index, $name, $whitelist, $search_type, $fields, $sort_by);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AcceptedCountriesApi->getAcceptedcountries: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **count** | **int**| Number of accepted countries objects to retrieve. | [optional] [default to 5]
 **start_index** | **int**| Sort order index of the first resource in the returned array. | [optional] [default to 0]
 **name** | **string**| Name of the accepted countries object. | [optional]
 **whitelist** | **bool**| Specifies if the accepted countries object is an allow list. | [optional]
 **search_type** | **string**| Specifies the type of search you want to perform. | [optional]
 **fields** | **string**| Comma-delimited list of fields to return (&#x60;field_1,field_2&#x60;, and so on).  Leave blank to return all fields. | [optional]
 **sort_by** | **string**| Field on which to sort.  Use any field in the resource model, or one of the system fields &#x60;lastModifiedTime&#x60; or &#x60;createdTime&#x60;.  Prefix the field name with a hyphen (&#x60;-&#x60;) to sort in descending order.  Omit the hyphen to sort in ascending order. | [optional] [default to &#39;-lastModifiedTime&#39;]

### Return type

[**\OpenAPI\Client\Model\AcceptedCountriesListResponse**](../Model/AcceptedCountriesListResponse.md)

### Authorization

[mqAppAndAccessToken](../../README.md#mqAppAndAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getAcceptedcountriesToken()`

```php
getAcceptedcountriesToken($token, $fields): \OpenAPI\Client\Model\AcceptedCountriesModel
```

Retrieve an accepted countries object

Retrieve a specific `acceptedcountries` object. Send a `GET` request to the `/acceptedcountries` endpoint to retrieve existing `acceptedcountries` object tokens.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: mqAppAndAccessToken
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\AcceptedCountriesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$token = 'token_example'; // string | Unique identifier of the accepted countries object.
$fields = 'fields_example'; // string | Comma-delimited list of fields to return (`field_1,field_2`, and so on). Leave blank to return all fields.

try {
    $result = $apiInstance->getAcceptedcountriesToken($token, $fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AcceptedCountriesApi->getAcceptedcountriesToken: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **token** | **string**| Unique identifier of the accepted countries object. |
 **fields** | **string**| Comma-delimited list of fields to return (&#x60;field_1,field_2&#x60;, and so on). Leave blank to return all fields. | [optional]

### Return type

[**\OpenAPI\Client\Model\AcceptedCountriesModel**](../Model/AcceptedCountriesModel.md)

### Authorization

[mqAppAndAccessToken](../../README.md#mqAppAndAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
