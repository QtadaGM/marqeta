# OpenAPI\Client\AutoReloadApi

All URIs are relative to /v3.

Method | HTTP request | Description
------------- | ------------- | -------------
[**getAutoreloads()**](AutoReloadApi.md#getAutoreloads) | **GET** /autoreloads | List auto reloads
[**getAutoreloadsToken()**](AutoReloadApi.md#getAutoreloadsToken) | **GET** /autoreloads/{token} | Retrieve auto reload
[**postAutoreloads()**](AutoReloadApi.md#postAutoreloads) | **POST** /autoreloads | Create auto reload
[**putAutoreloadsToken()**](AutoReloadApi.md#putAutoreloadsToken) | **PUT** /autoreloads/{token} | Update auto reload


## `getAutoreloads()`

```php
getAutoreloads($card_product, $user_token, $business_token, $count, $start_index, $fields, $sort_by): \OpenAPI\Client\Model\AutoReloadListResponse
```

List auto reloads

Use this endpoint to list auto reloads configured for the program or for a specific card product, user, or business.  This endpoint supports <</core-api/field-filtering, field filtering>> and <</core-api/sorting-and-pagination, pagination>>.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: mqAppAndAccessToken
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\AutoReloadApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$card_product = 'card_product_example'; // string | Unique identifier of the card product whose auto reloads you want to retrieve.
$user_token = 'user_token_example'; // string | Unique identifier of the user whose auto reloads you want to retrieve.
$business_token = 'business_token_example'; // string | Unique identifier of the business whose auto reloads you want to retrieve.
$count = 10; // int | Number of resources to retrieve.
$start_index = 0; // int | Sort order index of the first resource in the returned array.
$fields = 'fields_example'; // string | Comma-delimited list of fields to return (`field_1,field_2`, and so on). Leave blank to return all fields.
$sort_by = '-lastModifiedTime'; // string | Field on which to sort. Use any field in the resource model, or one of the system fields `lastModifiedTime` or `createdTime`. Prefix the field name with a hyphen (`-`) to sort in descending order. Omit the hyphen to sort in ascending order.

try {
    $result = $apiInstance->getAutoreloads($card_product, $user_token, $business_token, $count, $start_index, $fields, $sort_by);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AutoReloadApi->getAutoreloads: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **card_product** | **string**| Unique identifier of the card product whose auto reloads you want to retrieve. | [optional]
 **user_token** | **string**| Unique identifier of the user whose auto reloads you want to retrieve. | [optional]
 **business_token** | **string**| Unique identifier of the business whose auto reloads you want to retrieve. | [optional]
 **count** | **int**| Number of resources to retrieve. | [optional] [default to 10]
 **start_index** | **int**| Sort order index of the first resource in the returned array. | [optional] [default to 0]
 **fields** | **string**| Comma-delimited list of fields to return (&#x60;field_1,field_2&#x60;, and so on). Leave blank to return all fields. | [optional]
 **sort_by** | **string**| Field on which to sort. Use any field in the resource model, or one of the system fields &#x60;lastModifiedTime&#x60; or &#x60;createdTime&#x60;. Prefix the field name with a hyphen (&#x60;-&#x60;) to sort in descending order. Omit the hyphen to sort in ascending order. | [optional] [default to &#39;-lastModifiedTime&#39;]

### Return type

[**\OpenAPI\Client\Model\AutoReloadListResponse**](../Model/AutoReloadListResponse.md)

### Authorization

[mqAppAndAccessToken](../../README.md#mqAppAndAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getAutoreloadsToken()`

```php
getAutoreloadsToken($token, $fields): \OpenAPI\Client\Model\AutoReloadResponseModel
```

Retrieve auto reload

Use this endpoint to retrieve a specific auto reload object.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: mqAppAndAccessToken
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\AutoReloadApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$token = 'token_example'; // string | Unique identifier of the auto reload.
$fields = 'fields_example'; // string | Comma-delimited list of fields to return (`field_1,field_2`, and so on). Leave blank to return all fields.

try {
    $result = $apiInstance->getAutoreloadsToken($token, $fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AutoReloadApi->getAutoreloadsToken: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **token** | **string**| Unique identifier of the auto reload. |
 **fields** | **string**| Comma-delimited list of fields to return (&#x60;field_1,field_2&#x60;, and so on). Leave blank to return all fields. | [optional]

### Return type

[**\OpenAPI\Client\Model\AutoReloadResponseModel**](../Model/AutoReloadResponseModel.md)

### Authorization

[mqAppAndAccessToken](../../README.md#mqAppAndAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postAutoreloads()`

```php
postAutoreloads($auto_reload_model): \OpenAPI\Client\Model\AutoReloadResponseModel
```

Create auto reload

Use this endpoint to create an auto reload.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: mqAppAndAccessToken
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\AutoReloadApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$auto_reload_model = {"active":false,"association":{"user_token":"my_user_01"},"currency_code":"USD","funding_source_token":"my_program_funding_source_01","order_scope":{"gpa":{"reload_amount":200.0,"trigger_amount":100.0}},"token":"my_user_01_autoreload_01"}; // \OpenAPI\Client\Model\AutoReloadModel | Auto reload object

try {
    $result = $apiInstance->postAutoreloads($auto_reload_model);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AutoReloadApi->postAutoreloads: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **auto_reload_model** | [**\OpenAPI\Client\Model\AutoReloadModel**](../Model/AutoReloadModel.md)| Auto reload object |

### Return type

[**\OpenAPI\Client\Model\AutoReloadResponseModel**](../Model/AutoReloadResponseModel.md)

### Authorization

[mqAppAndAccessToken](../../README.md#mqAppAndAccessToken)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `putAutoreloadsToken()`

```php
putAutoreloadsToken($token, $auto_reload_update_model): \OpenAPI\Client\Model\AutoReloadResponseModel
```

Update auto reload

Use this endpoint to update an auto reload. Only values of parameters in the request are modified; all others are left unchanged.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: mqAppAndAccessToken
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\AutoReloadApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$token = 'token_example'; // string | Unique identifier of the auto reload.
$auto_reload_update_model = {"order_scope":{"gpa":{"reload_amount":500.0,"trigger_amount":250.0}}}; // \OpenAPI\Client\Model\AutoReloadUpdateModel | Auto reload object

try {
    $result = $apiInstance->putAutoreloadsToken($token, $auto_reload_update_model);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AutoReloadApi->putAutoreloadsToken: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **token** | **string**| Unique identifier of the auto reload. |
 **auto_reload_update_model** | [**\OpenAPI\Client\Model\AutoReloadUpdateModel**](../Model/AutoReloadUpdateModel.md)| Auto reload object |

### Return type

[**\OpenAPI\Client\Model\AutoReloadResponseModel**](../Model/AutoReloadResponseModel.md)

### Authorization

[mqAppAndAccessToken](../../README.md#mqAppAndAccessToken)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
