# OpenAPI\Client\GPAOrdersApi

All URIs are relative to /v3.

Method | HTTP request | Description
------------- | ------------- | -------------
[**getGpaordersToken()**](GPAOrdersApi.md#getGpaordersToken) | **GET** /gpaorders/{token} | Retrieve GPA order
[**getGpaordersUnloads()**](GPAOrdersApi.md#getGpaordersUnloads) | **GET** /gpaorders/unloads | List GPA unloads
[**getGpaordersUnloadsUnloadtoken()**](GPAOrdersApi.md#getGpaordersUnloadsUnloadtoken) | **GET** /gpaorders/unloads/{unload_token} | Retrieve GPA unload
[**postGpaorders()**](GPAOrdersApi.md#postGpaorders) | **POST** /gpaorders | Create GPA order
[**postGpaordersUnloads()**](GPAOrdersApi.md#postGpaordersUnloads) | **POST** /gpaorders/unloads | Create GPA unload


## `getGpaordersToken()`

```php
getGpaordersToken($token): \OpenAPI\Client\Model\GpaResponse
```

Retrieve GPA order

Use this endpoint to retrieve a GPA order.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: mqAppAndAccessToken
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\GPAOrdersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$token = 'token_example'; // string | Unique identifier of the GPA order.  Send a `GET` request to `/transactions?type=gpa.credit` to retrieve GPA order tokens.

try {
    $result = $apiInstance->getGpaordersToken($token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GPAOrdersApi->getGpaordersToken: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **token** | **string**| Unique identifier of the GPA order.  Send a &#x60;GET&#x60; request to &#x60;/transactions?type&#x3D;gpa.credit&#x60; to retrieve GPA order tokens. |

### Return type

[**\OpenAPI\Client\Model\GpaResponse**](../Model/GpaResponse.md)

### Authorization

[mqAppAndAccessToken](../../README.md#mqAppAndAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getGpaordersUnloads()`

```php
getGpaordersUnloads($count, $start_index, $fields, $sort_by, $user_token, $business_token, $original_order_token): \OpenAPI\Client\Model\GPAUnloadListResponse
```

List GPA unloads

Use this endpoint to list all GPA unloads or GPA unloads associated with a specific user or business.  This endpoint supports <</core-api/field-filtering, field filtering>> and <</core-api/sorting-and-pagination, pagination>>.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: mqAppAndAccessToken
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\GPAOrdersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$count = 5; // int | Number of resources to retrieve.
$start_index = 0; // int | Sort order index of the first resource in the returned array.
$fields = 'fields_example'; // string | Comma-delimited list of fields to return (`field_1,field_2`, and so on). Leave blank to return all fields.
$sort_by = '-lastModifiedTime'; // string | Field on which to sort. Use any field in the resource model, or one of the system fields `lastModifiedTime` or `createdTime`. Prefix the field name with a hyphen (`-`) to sort in descending order. Omit the hyphen to sort in ascending order.
$user_token = 'user_token_example'; // string | Unique identifier of the user resource.  Send a `GET` request to `/users` to retrieve user tokens.
$business_token = 'business_token_example'; // string | Unique identifier of the business resource.  Send a `GET` request to `/businesses` to retrieve business tokens.
$original_order_token = 'original_order_token_example'; // string | Unique identifier of the original GPA order.  Send a `GET` request to `/transactions?type=gpa.credit` to retrieve GPA order tokens.

try {
    $result = $apiInstance->getGpaordersUnloads($count, $start_index, $fields, $sort_by, $user_token, $business_token, $original_order_token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GPAOrdersApi->getGpaordersUnloads: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **count** | **int**| Number of resources to retrieve. | [optional] [default to 5]
 **start_index** | **int**| Sort order index of the first resource in the returned array. | [optional] [default to 0]
 **fields** | **string**| Comma-delimited list of fields to return (&#x60;field_1,field_2&#x60;, and so on). Leave blank to return all fields. | [optional]
 **sort_by** | **string**| Field on which to sort. Use any field in the resource model, or one of the system fields &#x60;lastModifiedTime&#x60; or &#x60;createdTime&#x60;. Prefix the field name with a hyphen (&#x60;-&#x60;) to sort in descending order. Omit the hyphen to sort in ascending order. | [optional] [default to &#39;-lastModifiedTime&#39;]
 **user_token** | **string**| Unique identifier of the user resource.  Send a &#x60;GET&#x60; request to &#x60;/users&#x60; to retrieve user tokens. | [optional]
 **business_token** | **string**| Unique identifier of the business resource.  Send a &#x60;GET&#x60; request to &#x60;/businesses&#x60; to retrieve business tokens. | [optional]
 **original_order_token** | **string**| Unique identifier of the original GPA order.  Send a &#x60;GET&#x60; request to &#x60;/transactions?type&#x3D;gpa.credit&#x60; to retrieve GPA order tokens. | [optional]

### Return type

[**\OpenAPI\Client\Model\GPAUnloadListResponse**](../Model/GPAUnloadListResponse.md)

### Authorization

[mqAppAndAccessToken](../../README.md#mqAppAndAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getGpaordersUnloadsUnloadtoken()`

```php
getGpaordersUnloadsUnloadtoken($unload_token): \OpenAPI\Client\Model\GpaReturns
```

Retrieve GPA unload

Use this endpoint to retrieve a specific GPA unload.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: mqAppAndAccessToken
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\GPAOrdersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$unload_token = 'unload_token_example'; // string | Unique identifier of the GPA unload.

try {
    $result = $apiInstance->getGpaordersUnloadsUnloadtoken($unload_token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GPAOrdersApi->getGpaordersUnloadsUnloadtoken: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **unload_token** | **string**| Unique identifier of the GPA unload. |

### Return type

[**\OpenAPI\Client\Model\GpaReturns**](../Model/GpaReturns.md)

### Authorization

[mqAppAndAccessToken](../../README.md#mqAppAndAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postGpaorders()`

```php
postGpaorders($gpa_request): \OpenAPI\Client\Model\GpaResponse
```

Create GPA order

Use this endpoint to create an order to fund an account holder's GPA.  You can assess a <</core-api/fees, fee>> while funding a GPA by using the optional `fees` array to attach one or more fee resources to the GPA order. When you create a GPA order, the GPA is first credited for the fees, then debited at funding time.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: mqAppAndAccessToken
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\GPAOrdersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$gpa_request = {"amount":1000,"currency_code":"USD","funding_source_token":"my_program_funding_source_01","token":"my_gpaorder_01","user_token":"my_user_01"}; // \OpenAPI\Client\Model\GpaRequest

try {
    $result = $apiInstance->postGpaorders($gpa_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GPAOrdersApi->postGpaorders: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **gpa_request** | [**\OpenAPI\Client\Model\GpaRequest**](../Model/GpaRequest.md)|  | [optional]

### Return type

[**\OpenAPI\Client\Model\GpaResponse**](../Model/GpaResponse.md)

### Authorization

[mqAppAndAccessToken](../../README.md#mqAppAndAccessToken)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postGpaordersUnloads()`

```php
postGpaordersUnloads($unload_request_model): \OpenAPI\Client\Model\GpaReturns
```

Create GPA unload

Use this endpoint to unload a GPA order.  Unloading a GPA order returns funds to the funding source. A GPA unload must be tied to an original GPA order and can be used to return the amount of the original order or a lesser amount.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: mqAppAndAccessToken
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\GPAOrdersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$unload_request_model = {"amount":500,"original_order_token":"my_gpaorder_01","token":"my_unload_01"}; // \OpenAPI\Client\Model\UnloadRequestModel

try {
    $result = $apiInstance->postGpaordersUnloads($unload_request_model);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GPAOrdersApi->postGpaordersUnloads: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **unload_request_model** | [**\OpenAPI\Client\Model\UnloadRequestModel**](../Model/UnloadRequestModel.md)|  | [optional]

### Return type

[**\OpenAPI\Client\Model\GpaReturns**](../Model/GpaReturns.md)

### Authorization

[mqAppAndAccessToken](../../README.md#mqAppAndAccessToken)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
