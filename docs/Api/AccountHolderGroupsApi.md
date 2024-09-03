# OpenAPI\Client\AccountHolderGroupsApi

All URIs are relative to /v3.

Method | HTTP request | Description
------------- | ------------- | -------------
[**getAccountholdergroups()**](AccountHolderGroupsApi.md#getAccountholdergroups) | **GET** /accountholdergroups | List account holder groups
[**getAccountholdergroupsToken()**](AccountHolderGroupsApi.md#getAccountholdergroupsToken) | **GET** /accountholdergroups/{token} | Retrieve account holder group
[**postAccountholdergroups()**](AccountHolderGroupsApi.md#postAccountholdergroups) | **POST** /accountholdergroups | Create account holder group
[**putAccountholdergroupsToken()**](AccountHolderGroupsApi.md#putAccountholdergroupsToken) | **PUT** /accountholdergroups/{token} | Update account holder group


## `getAccountholdergroups()`

```php
getAccountholdergroups($count, $start_index, $sort_by): \OpenAPI\Client\Model\AccountHolderGroupListResponse
```

List account holder groups

Use this endpoint to return an array of all account holder groups.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: mqAppAndAccessToken
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\AccountHolderGroupsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$count = 10; // int | Number of resources to retrieve.
$start_index = 0; // int | Sort order index of the first resource in the returned array.
$sort_by = '-lastModifiedTime'; // string | Field on which to sort. Use any field in the resource model, or one of the system fields `lastModifiedTime` or `createdTime`. Prefix the field name with a hyphen (`-`) to sort in descending order. Omit the hyphen to sort in ascending order.

try {
    $result = $apiInstance->getAccountholdergroups($count, $start_index, $sort_by);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountHolderGroupsApi->getAccountholdergroups: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **count** | **int**| Number of resources to retrieve. | [optional] [default to 10]
 **start_index** | **int**| Sort order index of the first resource in the returned array. | [optional] [default to 0]
 **sort_by** | **string**| Field on which to sort. Use any field in the resource model, or one of the system fields &#x60;lastModifiedTime&#x60; or &#x60;createdTime&#x60;. Prefix the field name with a hyphen (&#x60;-&#x60;) to sort in descending order. Omit the hyphen to sort in ascending order. | [optional] [default to &#39;-lastModifiedTime&#39;]

### Return type

[**\OpenAPI\Client\Model\AccountHolderGroupListResponse**](../Model/AccountHolderGroupListResponse.md)

### Authorization

[mqAppAndAccessToken](../../README.md#mqAppAndAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getAccountholdergroupsToken()`

```php
getAccountholdergroupsToken($token): \OpenAPI\Client\Model\AccountHolderGroupResponse
```

Retrieve account holder group

Use this endpoint to retrieve a specific account holder group.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: mqAppAndAccessToken
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\AccountHolderGroupsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$token = 'token_example'; // string | Unique identifier of the account holder group.

try {
    $result = $apiInstance->getAccountholdergroupsToken($token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountHolderGroupsApi->getAccountholdergroupsToken: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **token** | **string**| Unique identifier of the account holder group. |

### Return type

[**\OpenAPI\Client\Model\AccountHolderGroupResponse**](../Model/AccountHolderGroupResponse.md)

### Authorization

[mqAppAndAccessToken](../../README.md#mqAppAndAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postAccountholdergroups()`

```php
postAccountholdergroups($account_holder_group_request): \OpenAPI\Client\Model\AccountHolderGroupResponse
```

Create account holder group

Use this endpoint to create an account holder group.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: mqAppAndAccessToken
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\AccountHolderGroupsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account_holder_group_request = {"name":"Account Holder Group 01","token":"account_holder_group_01"}; // \OpenAPI\Client\Model\AccountHolderGroupRequest | Account holder group object

try {
    $result = $apiInstance->postAccountholdergroups($account_holder_group_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountHolderGroupsApi->postAccountholdergroups: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **account_holder_group_request** | [**\OpenAPI\Client\Model\AccountHolderGroupRequest**](../Model/AccountHolderGroupRequest.md)| Account holder group object |

### Return type

[**\OpenAPI\Client\Model\AccountHolderGroupResponse**](../Model/AccountHolderGroupResponse.md)

### Authorization

[mqAppAndAccessToken](../../README.md#mqAppAndAccessToken)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `putAccountholdergroupsToken()`

```php
putAccountholdergroupsToken($token, $account_holder_group_update_request): \OpenAPI\Client\Model\AccountHolderGroupResponse
```

Update account holder group

Use this endpoint to update a specific account holder group. Only values of parameters in the request are modified; all others are left unchanged.  To update a specific account holder group, send a `PUT` request to the `/accountholdergroups/{token}` endpoint. Use the `token` path parameter to specify the account holder group to update. Include the account holder group details to update in link:http://json.org[JSON, window=\"_blank\"] format in the body of the request. [NOTE] While you can update account holder groups that you create, the default group is restricted and requires special permissions to update.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: mqAppAndAccessToken
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\AccountHolderGroupsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$token = 'token_example'; // string | Unique identifier of the account holder group.
$account_holder_group_update_request = {"config":{"pre_kyc_controls":{"balance_max":500}}}; // \OpenAPI\Client\Model\AccountHolderGroupUpdateRequest | Account holder group update object

try {
    $result = $apiInstance->putAccountholdergroupsToken($token, $account_holder_group_update_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountHolderGroupsApi->putAccountholdergroupsToken: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **token** | **string**| Unique identifier of the account holder group. |
 **account_holder_group_update_request** | [**\OpenAPI\Client\Model\AccountHolderGroupUpdateRequest**](../Model/AccountHolderGroupUpdateRequest.md)| Account holder group update object |

### Return type

[**\OpenAPI\Client\Model\AccountHolderGroupResponse**](../Model/AccountHolderGroupResponse.md)

### Authorization

[mqAppAndAccessToken](../../README.md#mqAppAndAccessToken)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
