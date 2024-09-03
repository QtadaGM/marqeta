# OpenAPI\Client\MCCGroupsApi

All URIs are relative to /v3.

Method | HTTP request | Description
------------- | ------------- | -------------
[**getMccgroups()**](MCCGroupsApi.md#getMccgroups) | **GET** /mccgroups | List MCC groups
[**getMccgroupsToken()**](MCCGroupsApi.md#getMccgroupsToken) | **GET** /mccgroups/{token} | Retrieve MCC group
[**postMccgroups()**](MCCGroupsApi.md#postMccgroups) | **POST** /mccgroups | Create MCC group
[**putMccgroupsToken()**](MCCGroupsApi.md#putMccgroupsToken) | **PUT** /mccgroups/{token} | Update MCC group


## `getMccgroups()`

```php
getMccgroups($mcc, $count, $start_index, $sort_by): \OpenAPI\Client\Model\MCCGroupListResponse
```

List MCC groups

Use this endpoint to list all MCC groups defined in your program or list MCC groups that contain a specified code.  This endpoint supports <</core-api/field-filtering, field filtering>> and <</core-api/sorting-and-pagination, pagination>>.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: mqAppAndAccessToken
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\MCCGroupsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$mcc = 'mcc_example'; // string | Returns all MCC groups that contain the specified merchant category code.
$count = 10; // int | The number of resources to retrieve.
$start_index = 0; // int | The sort order index of the first resource in the returned array.
$sort_by = '-lastModifiedTime'; // string | Field on which to sort. Use any field in the resource model, or one of the system fields `lastModifiedTime` or `createdTime`. Prefix the field name with a hyphen (`-`) to sort in descending order. Omit the hyphen to sort in ascending order.

try {
    $result = $apiInstance->getMccgroups($mcc, $count, $start_index, $sort_by);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MCCGroupsApi->getMccgroups: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **mcc** | **string**| Returns all MCC groups that contain the specified merchant category code. | [optional]
 **count** | **int**| The number of resources to retrieve. | [optional] [default to 10]
 **start_index** | **int**| The sort order index of the first resource in the returned array. | [optional] [default to 0]
 **sort_by** | **string**| Field on which to sort. Use any field in the resource model, or one of the system fields &#x60;lastModifiedTime&#x60; or &#x60;createdTime&#x60;. Prefix the field name with a hyphen (&#x60;-&#x60;) to sort in descending order. Omit the hyphen to sort in ascending order. | [optional] [default to &#39;-lastModifiedTime&#39;]

### Return type

[**\OpenAPI\Client\Model\MCCGroupListResponse**](../Model/MCCGroupListResponse.md)

### Authorization

[mqAppAndAccessToken](../../README.md#mqAppAndAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getMccgroupsToken()`

```php
getMccgroupsToken($token): \OpenAPI\Client\Model\MccGroupModel
```

Retrieve MCC group

Use this endpoint to retrieve a specific MCC group.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: mqAppAndAccessToken
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\MCCGroupsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$token = 'token_example'; // string | Unique identifier of the MCC group.

try {
    $result = $apiInstance->getMccgroupsToken($token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MCCGroupsApi->getMccgroupsToken: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **token** | **string**| Unique identifier of the MCC group. |

### Return type

[**\OpenAPI\Client\Model\MccGroupModel**](../Model/MccGroupModel.md)

### Authorization

[mqAppAndAccessToken](../../README.md#mqAppAndAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postMccgroups()`

```php
postMccgroups($mcc_group_model): \OpenAPI\Client\Model\MccGroupModel
```

Create MCC group

Use this endpoint to create an MCC group.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: mqAppAndAccessToken
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\MCCGroupsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$mcc_group_model = new \OpenAPI\Client\Model\MccGroupModel(); // \OpenAPI\Client\Model\MccGroupModel | MCC group

try {
    $result = $apiInstance->postMccgroups($mcc_group_model);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MCCGroupsApi->postMccgroups: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **mcc_group_model** | [**\OpenAPI\Client\Model\MccGroupModel**](../Model/MccGroupModel.md)| MCC group |

### Return type

[**\OpenAPI\Client\Model\MccGroupModel**](../Model/MccGroupModel.md)

### Authorization

[mqAppAndAccessToken](../../README.md#mqAppAndAccessToken)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `putMccgroupsToken()`

```php
putMccgroupsToken($token, $mcc_group_update_model): \OpenAPI\Client\Model\MccGroupUpdateModel
```

Update MCC group

Use this endpoint to update an MCC group. Include the `token` path parameter to identify the MCC group to update. You must pass all the merchant category codes you want included in the group, including existing ones you want to retain.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: mqAppAndAccessToken
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\MCCGroupsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$token = 'token_example'; // string | The unique identifier of the MCC group. Send a `GET` request to `/mccgroups` to retrieve MCC group tokens.
$mcc_group_update_model = new \OpenAPI\Client\Model\MccGroupUpdateModel(); // \OpenAPI\Client\Model\MccGroupUpdateModel | MCC group

try {
    $result = $apiInstance->putMccgroupsToken($token, $mcc_group_update_model);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MCCGroupsApi->putMccgroupsToken: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **token** | **string**| The unique identifier of the MCC group. Send a &#x60;GET&#x60; request to &#x60;/mccgroups&#x60; to retrieve MCC group tokens. |
 **mcc_group_update_model** | [**\OpenAPI\Client\Model\MccGroupUpdateModel**](../Model/MccGroupUpdateModel.md)| MCC group |

### Return type

[**\OpenAPI\Client\Model\MccGroupUpdateModel**](../Model/MccGroupUpdateModel.md)

### Authorization

[mqAppAndAccessToken](../../README.md#mqAppAndAccessToken)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
