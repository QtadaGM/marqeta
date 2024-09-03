# OpenAPI\Client\CommandoModeApi

All URIs are relative to /v3.

Method | HTTP request | Description
------------- | ------------- | -------------
[**getCommandomodes()**](CommandoModeApi.md#getCommandomodes) | **GET** /commandomodes | List Commando Mode control sets
[**getCommandomodesCommandomodetokenTransitions()**](CommandoModeApi.md#getCommandomodesCommandomodetokenTransitions) | **GET** /commandomodes/{commandomode_token}/transitions | List Commando Mode transitions set
[**getCommandomodesToken()**](CommandoModeApi.md#getCommandomodesToken) | **GET** /commandomodes/{token} | Retrieve Commando Mode control set
[**getCommandomodesTransitionsToken()**](CommandoModeApi.md#getCommandomodesTransitionsToken) | **GET** /commandomodes/transitions/{token} | Retrieve Commando Mode transition


## `getCommandomodes()`

```php
getCommandomodes($count, $start_index, $sort_by): \OpenAPI\Client\Model\CommandoModeListResponse
```

List Commando Mode control sets

Retrieve a list of Commando Mode control sets.  This endpoint supports <</core-api/field-filtering, field filtering>> and <</core-api/sorting-and-pagination, pagination>>.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: mqAppAndAccessToken
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\CommandoModeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$count = 5; // int | Number of Commando Mode control sets to retrieve.
$start_index = 0; // int | Sort order index of the first resource in the returned array.
$sort_by = '-lastModifiedTime'; // string | Field on which to sort. Use any field in the resource model, or one of the system fields `lastModifiedTime` or `createdTime`. Prefix the field name with a hyphen (`-`) to sort in descending order. Omit the hyphen to sort in ascending order.

try {
    $result = $apiInstance->getCommandomodes($count, $start_index, $sort_by);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CommandoModeApi->getCommandomodes: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **count** | **int**| Number of Commando Mode control sets to retrieve. | [optional] [default to 5]
 **start_index** | **int**| Sort order index of the first resource in the returned array. | [optional] [default to 0]
 **sort_by** | **string**| Field on which to sort. Use any field in the resource model, or one of the system fields &#x60;lastModifiedTime&#x60; or &#x60;createdTime&#x60;. Prefix the field name with a hyphen (&#x60;-&#x60;) to sort in descending order. Omit the hyphen to sort in ascending order. | [optional] [default to &#39;-lastModifiedTime&#39;]

### Return type

[**\OpenAPI\Client\Model\CommandoModeListResponse**](../Model/CommandoModeListResponse.md)

### Authorization

[mqAppAndAccessToken](../../README.md#mqAppAndAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getCommandomodesCommandomodetokenTransitions()`

```php
getCommandomodesCommandomodetokenTransitions($commandomode_token, $count, $start_index, $sort_by): \OpenAPI\Client\Model\CommandoModeTransitionListResponse
```

List Commando Mode transitions set

Retrieve a list of Commando Mode transitions for a specific control set.  This endpoint supports <</core-api/field-filtering, field filtering>> and <</core-api/sorting-and-pagination, pagination>>.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: mqAppAndAccessToken
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\CommandoModeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$commandomode_token = 'commandomode_token_example'; // string | Unique identifier of the Commando Mode control set.
$count = 5; // int | Number of Commando Mode control set transitions to retrieve.
$start_index = 0; // int | Sort order index of the first resource in the returned array.
$sort_by = '-createdTime'; // string | Field on which to sort. Use any field in the resource model, or one of the system fields `lastModifiedTime` or `createdTime`. Prefix the field name with a hyphen (`-`) to sort in descending order. Omit the hyphen to sort in ascending order.

try {
    $result = $apiInstance->getCommandomodesCommandomodetokenTransitions($commandomode_token, $count, $start_index, $sort_by);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CommandoModeApi->getCommandomodesCommandomodetokenTransitions: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **commandomode_token** | **string**| Unique identifier of the Commando Mode control set. |
 **count** | **int**| Number of Commando Mode control set transitions to retrieve. | [optional] [default to 5]
 **start_index** | **int**| Sort order index of the first resource in the returned array. | [optional] [default to 0]
 **sort_by** | **string**| Field on which to sort. Use any field in the resource model, or one of the system fields &#x60;lastModifiedTime&#x60; or &#x60;createdTime&#x60;. Prefix the field name with a hyphen (&#x60;-&#x60;) to sort in descending order. Omit the hyphen to sort in ascending order. | [optional] [default to &#39;-createdTime&#39;]

### Return type

[**\OpenAPI\Client\Model\CommandoModeTransitionListResponse**](../Model/CommandoModeTransitionListResponse.md)

### Authorization

[mqAppAndAccessToken](../../README.md#mqAppAndAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getCommandomodesToken()`

```php
getCommandomodesToken($token): \OpenAPI\Client\Model\CommandoModeResponse
```

Retrieve Commando Mode control set

Retrieve a specific Commando Mode control set.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: mqAppAndAccessToken
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\CommandoModeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$token = 'token_example'; // string | Unique identifier of the Commando Mode control set you want to retrieve.

try {
    $result = $apiInstance->getCommandomodesToken($token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CommandoModeApi->getCommandomodesToken: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **token** | **string**| Unique identifier of the Commando Mode control set you want to retrieve. |

### Return type

[**\OpenAPI\Client\Model\CommandoModeResponse**](../Model/CommandoModeResponse.md)

### Authorization

[mqAppAndAccessToken](../../README.md#mqAppAndAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getCommandomodesTransitionsToken()`

```php
getCommandomodesTransitionsToken($token): \OpenAPI\Client\Model\CommandoModeTransitionResponse
```

Retrieve Commando Mode transition

Retrieve a specific Commando Mode control set transition.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: mqAppAndAccessToken
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\CommandoModeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$token = 'token_example'; // string | Unique identifier of the Commando Mode control set transition.

try {
    $result = $apiInstance->getCommandomodesTransitionsToken($token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CommandoModeApi->getCommandomodesTransitionsToken: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **token** | **string**| Unique identifier of the Commando Mode control set transition. |

### Return type

[**\OpenAPI\Client\Model\CommandoModeTransitionResponse**](../Model/CommandoModeTransitionResponse.md)

### Authorization

[mqAppAndAccessToken](../../README.md#mqAppAndAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
