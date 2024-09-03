# OpenAPI\Client\RealTimeFeeGroupsApi

All URIs are relative to /v3.

Method | HTTP request | Description
------------- | ------------- | -------------
[**getRealtimefeegroups()**](RealTimeFeeGroupsApi.md#getRealtimefeegroups) | **GET** /realtimefeegroups | List real-time fee groups
[**getRealtimefeegroupsToken()**](RealTimeFeeGroupsApi.md#getRealtimefeegroupsToken) | **GET** /realtimefeegroups/{token} | Retrieve real-time fee group
[**postRealtimefeegroups()**](RealTimeFeeGroupsApi.md#postRealtimefeegroups) | **POST** /realtimefeegroups | Create real-time fee group
[**putRealtimefeegroupsToken()**](RealTimeFeeGroupsApi.md#putRealtimefeegroupsToken) | **PUT** /realtimefeegroups/{token} | Update real-time fee group


## `getRealtimefeegroups()`

```php
getRealtimefeegroups($count, $start_index, $fields, $sort_by): \OpenAPI\Client\Model\RealTimeFeeGroupListResponse
```

List real-time fee groups

Use this endpoint to list existing real-time fee groups.  This endpoint supports <</core-api/field-filtering, field filtering>> and <</core-api/sorting-and-pagination, pagination>>.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: mqAppAndAccessToken
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\RealTimeFeeGroupsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$count = 5; // int | Number of real-time fee groups to retrieve.
$start_index = 0; // int | The sort order index of the first resource in the returned array.
$fields = 'fields_example'; // string | Comma-delimited list of fields to return (`field_1,field_2`, and so on).  Leave blank to return all fields.
$sort_by = '-createdTime'; // string | Field on which to sort. Use any field in the resource model, or one of the system fields `lastModifiedTime` or `createdTime`. Prefix the field name with a hyphen (`-`) to sort in descending order. Omit the hyphen to sort in ascending order.

try {
    $result = $apiInstance->getRealtimefeegroups($count, $start_index, $fields, $sort_by);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RealTimeFeeGroupsApi->getRealtimefeegroups: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **count** | **int**| Number of real-time fee groups to retrieve. | [optional] [default to 5]
 **start_index** | **int**| The sort order index of the first resource in the returned array. | [optional] [default to 0]
 **fields** | **string**| Comma-delimited list of fields to return (&#x60;field_1,field_2&#x60;, and so on).  Leave blank to return all fields. | [optional]
 **sort_by** | **string**| Field on which to sort. Use any field in the resource model, or one of the system fields &#x60;lastModifiedTime&#x60; or &#x60;createdTime&#x60;. Prefix the field name with a hyphen (&#x60;-&#x60;) to sort in descending order. Omit the hyphen to sort in ascending order. | [optional] [default to &#39;-createdTime&#39;]

### Return type

[**\OpenAPI\Client\Model\RealTimeFeeGroupListResponse**](../Model/RealTimeFeeGroupListResponse.md)

### Authorization

[mqAppAndAccessToken](../../README.md#mqAppAndAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getRealtimefeegroupsToken()`

```php
getRealtimefeegroupsToken($token): \OpenAPI\Client\Model\RealTimeFeeGroup
```

Retrieve real-time fee group

Use this endpoint to retrieve a specific real-time fee group. Include the real-time fee group `token` path parameter to specify the real-time fee group to return.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: mqAppAndAccessToken
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\RealTimeFeeGroupsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$token = 'token_example'; // string | Unique identifier of the real-time fee group.

try {
    $result = $apiInstance->getRealtimefeegroupsToken($token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RealTimeFeeGroupsApi->getRealtimefeegroupsToken: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **token** | **string**| Unique identifier of the real-time fee group. |

### Return type

[**\OpenAPI\Client\Model\RealTimeFeeGroup**](../Model/RealTimeFeeGroup.md)

### Authorization

[mqAppAndAccessToken](../../README.md#mqAppAndAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postRealtimefeegroups()`

```php
postRealtimefeegroups($real_time_fee_group_create_request): \OpenAPI\Client\Model\RealTimeFeeGroup
```

Create real-time fee group

Use this endpoint to create a real-time fee group.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: mqAppAndAccessToken
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\RealTimeFeeGroupsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$real_time_fee_group_create_request = {"fee_tokens[]":"my_fee_01 my_fee_05","name":"My Real-Time Fee Group 01","token":"my_rtfg_01"}; // \OpenAPI\Client\Model\RealTimeFeeGroupCreateRequest

try {
    $result = $apiInstance->postRealtimefeegroups($real_time_fee_group_create_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RealTimeFeeGroupsApi->postRealtimefeegroups: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **real_time_fee_group_create_request** | [**\OpenAPI\Client\Model\RealTimeFeeGroupCreateRequest**](../Model/RealTimeFeeGroupCreateRequest.md)|  | [optional]

### Return type

[**\OpenAPI\Client\Model\RealTimeFeeGroup**](../Model/RealTimeFeeGroup.md)

### Authorization

[mqAppAndAccessToken](../../README.md#mqAppAndAccessToken)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `putRealtimefeegroupsToken()`

```php
putRealtimefeegroupsToken($token, $real_time_fee_group_request): \OpenAPI\Client\Model\RealTimeFeeGroup
```

Update real-time fee group

Use this endpoint to update a real-time fee group. Include the real-time fee group `token` path parameter to specify the real-time fee group to update.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: mqAppAndAccessToken
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\RealTimeFeeGroupsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$token = 'token_example'; // string | Unique identifier of the real-time fee group.
$real_time_fee_group_request = {"active":false}; // \OpenAPI\Client\Model\RealTimeFeeGroupRequest

try {
    $result = $apiInstance->putRealtimefeegroupsToken($token, $real_time_fee_group_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RealTimeFeeGroupsApi->putRealtimefeegroupsToken: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **token** | **string**| Unique identifier of the real-time fee group. |
 **real_time_fee_group_request** | [**\OpenAPI\Client\Model\RealTimeFeeGroupRequest**](../Model/RealTimeFeeGroupRequest.md)|  | [optional]

### Return type

[**\OpenAPI\Client\Model\RealTimeFeeGroup**](../Model/RealTimeFeeGroup.md)

### Authorization

[mqAppAndAccessToken](../../README.md#mqAppAndAccessToken)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
