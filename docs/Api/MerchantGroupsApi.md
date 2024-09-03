# OpenAPI\Client\MerchantGroupsApi

All URIs are relative to /v3.

Method | HTTP request | Description
------------- | ------------- | -------------
[**getMerchantGroup()**](MerchantGroupsApi.md#getMerchantGroup) | **GET** /merchantgroups/{token} | Retrieve merchant group
[**getMerchantGroups()**](MerchantGroupsApi.md#getMerchantGroups) | **GET** /merchantgroups | List merchant groups
[**postMerchantGroup()**](MerchantGroupsApi.md#postMerchantGroup) | **POST** /merchantgroups | Create merchant group
[**putMerchantGroupsToken()**](MerchantGroupsApi.md#putMerchantGroupsToken) | **PUT** /merchantgroups/{token} | Update merchant group


## `getMerchantGroup()`

```php
getMerchantGroup($token): \OpenAPI\Client\Model\MerchantGroupResponse
```

Retrieve merchant group

To retrieve a specific merchant group, send a `GET` request to the `/merchantgroups/{token}` endpoint. Include the merchant group `token` path parameter to specify the merchant group to return.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: mqAppAndAccessToken
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\MerchantGroupsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$token = 'token_example'; // string | Unique identifier of the merchant group.

try {
    $result = $apiInstance->getMerchantGroup($token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MerchantGroupsApi->getMerchantGroup: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **token** | **string**| Unique identifier of the merchant group. |

### Return type

[**\OpenAPI\Client\Model\MerchantGroupResponse**](../Model/MerchantGroupResponse.md)

### Authorization

[mqAppAndAccessToken](../../README.md#mqAppAndAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getMerchantGroups()`

```php
getMerchantGroups($mid, $count, $start_index, $sort_by): \OpenAPI\Client\Model\MerchantGroupListResponse
```

List merchant groups

To return an array of all merchant groups, send a `GET` request to the `/merchantgroups` endpoint.  To return an array of all merchant groups that include a specific merchant identifier, send a `GET` request to the `/merchantgroups` endpoint that includes the merchant identifier in the query parameters.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: mqAppAndAccessToken
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\MerchantGroupsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$mid = 'mid_example'; // string | Returns all merchant groups that contain the specified merchant identifier.
$count = 10; // int | Number of resources to retrieve.
$start_index = 0; // int | Sort order index of the first resource in the returned array.
$sort_by = '-lastModifiedTime'; // string | Field on which to sort. Use any field in the resource model, or one of the system fields `lastModifiedTime` or `createdTime`. Prefix the field name with a hyphen (`-`) to sort in descending order. Omit the hyphen to sort in ascending order.

try {
    $result = $apiInstance->getMerchantGroups($mid, $count, $start_index, $sort_by);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MerchantGroupsApi->getMerchantGroups: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **mid** | **string**| Returns all merchant groups that contain the specified merchant identifier. | [optional]
 **count** | **int**| Number of resources to retrieve. | [optional] [default to 10]
 **start_index** | **int**| Sort order index of the first resource in the returned array. | [optional] [default to 0]
 **sort_by** | **string**| Field on which to sort. Use any field in the resource model, or one of the system fields &#x60;lastModifiedTime&#x60; or &#x60;createdTime&#x60;. Prefix the field name with a hyphen (&#x60;-&#x60;) to sort in descending order. Omit the hyphen to sort in ascending order. | [optional] [default to &#39;-lastModifiedTime&#39;]

### Return type

[**\OpenAPI\Client\Model\MerchantGroupListResponse**](../Model/MerchantGroupListResponse.md)

### Authorization

[mqAppAndAccessToken](../../README.md#mqAppAndAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postMerchantGroup()`

```php
postMerchantGroup($merchant_group_request): \OpenAPI\Client\Model\MerchantGroupResponse
```

Create merchant group

To create a merchant group, send a `POST` request to the `/merchantgroups` endpoint.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: mqAppAndAccessToken
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\MerchantGroupsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$merchant_group_request = {"active":true,"mids":["123456789012345","345123456789012","123456789012"],"name":"My Merchant Group","token":"my_merchantgroup"}; // \OpenAPI\Client\Model\MerchantGroupRequest

try {
    $result = $apiInstance->postMerchantGroup($merchant_group_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MerchantGroupsApi->postMerchantGroup: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **merchant_group_request** | [**\OpenAPI\Client\Model\MerchantGroupRequest**](../Model/MerchantGroupRequest.md)|  | [optional]

### Return type

[**\OpenAPI\Client\Model\MerchantGroupResponse**](../Model/MerchantGroupResponse.md)

### Authorization

[mqAppAndAccessToken](../../README.md#mqAppAndAccessToken)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `putMerchantGroupsToken()`

```php
putMerchantGroupsToken($token, $merchant_group_update_request): \OpenAPI\Client\Model\MerchantGroupResponse
```

Update merchant group

To update a merchant group, send a `PUT` request to the `/merchantgroups/{token}` endpoint. Include the merchant group `token` path parameter to specify the merchant group to update.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: mqAppAndAccessToken
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\MerchantGroupsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$token = 'token_example'; // string | Unique identifier of the merchant group.
$merchant_group_update_request = {"active":true,"mids":["234567890123"],"name":"My Merchant Group"}; // \OpenAPI\Client\Model\MerchantGroupUpdateRequest | Merchant Group

try {
    $result = $apiInstance->putMerchantGroupsToken($token, $merchant_group_update_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MerchantGroupsApi->putMerchantGroupsToken: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **token** | **string**| Unique identifier of the merchant group. |
 **merchant_group_update_request** | [**\OpenAPI\Client\Model\MerchantGroupUpdateRequest**](../Model/MerchantGroupUpdateRequest.md)| Merchant Group |

### Return type

[**\OpenAPI\Client\Model\MerchantGroupResponse**](../Model/MerchantGroupResponse.md)

### Authorization

[mqAppAndAccessToken](../../README.md#mqAppAndAccessToken)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
