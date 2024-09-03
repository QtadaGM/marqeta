# OpenAPI\Client\VelocityControlsApi

All URIs are relative to /v3.

Method | HTTP request | Description
------------- | ------------- | -------------
[**getVelocitycontrols()**](VelocityControlsApi.md#getVelocitycontrols) | **GET** /velocitycontrols | List velocity controls
[**getVelocitycontrolsToken()**](VelocityControlsApi.md#getVelocitycontrolsToken) | **GET** /velocitycontrols/{token} | Returns a specific velocity control
[**getVelocitycontrolsUserUsertokenAvailable()**](VelocityControlsApi.md#getVelocitycontrolsUserUsertokenAvailable) | **GET** /velocitycontrols/user/{user_token}/available | List user velocity control balances
[**postVelocitycontrols()**](VelocityControlsApi.md#postVelocitycontrols) | **POST** /velocitycontrols | Create velocity control
[**putVelocitycontrolsToken()**](VelocityControlsApi.md#putVelocitycontrolsToken) | **PUT** /velocitycontrols/{token} | Update velocity control


## `getVelocitycontrols()`

```php
getVelocitycontrols($card_product, $user, $count, $start_index, $fields, $sort_by): \OpenAPI\Client\Model\VelocityControlListResponse
```

List velocity controls

Retrieves a list of all the velocity controls associated with a specific user or card product, or lists all the velocity controls defined for your program.  Include either a `user` or a `card_product` query parameter to indicate the user or card product whose associated velocity controls you want to retrieve (do not include both).  To list all velocity controls for your program, omit the `user` and `card_product` query parameters from your request.  This endpoint supports <</core-api/field-filtering, field filtering>> and <</core-api/sorting-and-pagination, pagination>>.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: mqAppAndAccessToken
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\VelocityControlsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$card_product = 'card_product_example'; // string | Unique identifier of the card product. Enter the string `null` to retrieve velocity controls that are not associated with any card product.
$user = 'user_example'; // string | Unique identifier of the user. Enter the string `null` to retrieve velocity controls that are not associated with any user.
$count = 5; // int | Number of velocity control resources to retrieve.
$start_index = 0; // int | Sort order index of the first resource in the returned array.
$fields = 'fields_example'; // string | Comma-delimited list of fields to return (`field_1,field_2`, and so on). Leave blank to return all fields.
$sort_by = '-lastModifiedTime'; // string | Field on which to sort. Use any field in the resource model, or one of the system fields `lastModifiedTime` or `createdTime`. Prefix the field name with a hyphen (`-`) to sort in descending order. Omit the hyphen to sort in ascending order.

try {
    $result = $apiInstance->getVelocitycontrols($card_product, $user, $count, $start_index, $fields, $sort_by);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VelocityControlsApi->getVelocitycontrols: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **card_product** | **string**| Unique identifier of the card product. Enter the string &#x60;null&#x60; to retrieve velocity controls that are not associated with any card product. | [optional]
 **user** | **string**| Unique identifier of the user. Enter the string &#x60;null&#x60; to retrieve velocity controls that are not associated with any user. | [optional]
 **count** | **int**| Number of velocity control resources to retrieve. | [optional] [default to 5]
 **start_index** | **int**| Sort order index of the first resource in the returned array. | [optional] [default to 0]
 **fields** | **string**| Comma-delimited list of fields to return (&#x60;field_1,field_2&#x60;, and so on). Leave blank to return all fields. | [optional]
 **sort_by** | **string**| Field on which to sort. Use any field in the resource model, or one of the system fields &#x60;lastModifiedTime&#x60; or &#x60;createdTime&#x60;. Prefix the field name with a hyphen (&#x60;-&#x60;) to sort in descending order. Omit the hyphen to sort in ascending order. | [optional] [default to &#39;-lastModifiedTime&#39;]

### Return type

[**\OpenAPI\Client\Model\VelocityControlListResponse**](../Model/VelocityControlListResponse.md)

### Authorization

[mqAppAndAccessToken](../../README.md#mqAppAndAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getVelocitycontrolsToken()`

```php
getVelocitycontrolsToken($token, $fields): \OpenAPI\Client\Model\VelocityControlResponse
```

Returns a specific velocity control

Retrieves a specific velocity control.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: mqAppAndAccessToken
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\VelocityControlsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$token = 'token_example'; // string | Unique identifier of the velocity control resource.
$fields = 'fields_example'; // string | Comma-delimited list of fields to return (`field_1,field_2`, and so on). Leave blank to return all fields.

try {
    $result = $apiInstance->getVelocitycontrolsToken($token, $fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VelocityControlsApi->getVelocitycontrolsToken: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **token** | **string**| Unique identifier of the velocity control resource. |
 **fields** | **string**| Comma-delimited list of fields to return (&#x60;field_1,field_2&#x60;, and so on). Leave blank to return all fields. | [optional]

### Return type

[**\OpenAPI\Client\Model\VelocityControlResponse**](../Model/VelocityControlResponse.md)

### Authorization

[mqAppAndAccessToken](../../README.md#mqAppAndAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getVelocitycontrolsUserUsertokenAvailable()`

```php
getVelocitycontrolsUserUsertokenAvailable($user_token, $count, $start_index, $fields, $sort_by): \OpenAPI\Client\Model\VelocityControlBalanceListResponse
```

List user velocity control balances

Retrieves a list of the available balances of the velocity controls associated with a user. This operation is unavailable for velocity controls with a window of `TRANSACTION`, because available balances do not apply to single-transaction velocity windows.  Depending on the control, the balance can include an available monetary amount, the number of transactions remaining, and the number of days remaining in the time window.  This endpoint supports <</core-api/field-filtering, field filtering>> and <</core-api/sorting-and-pagination, pagination>>.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: mqAppAndAccessToken
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\VelocityControlsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$user_token = 'user_token_example'; // string | Unique identifier of the cardholder.
$count = 5; // int | Number of available balance resources to retrieve.
$start_index = 0; // int | The sort order index of the first resource in the returned array.
$fields = 'fields_example'; // string | Comma-delimited list of fields to return (`field_1,field_2`, and so on). Leave blank to return all fields.
$sort_by = '-lastModifiedTime'; // string | Field on which to sort. Use any field in the resource model, or one of the system fields `lastModifiedTime` or `createdTime`. Prefix the field name with a hyphen (`-`) to sort in descending order. Omit the hyphen to sort in ascending order.

try {
    $result = $apiInstance->getVelocitycontrolsUserUsertokenAvailable($user_token, $count, $start_index, $fields, $sort_by);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VelocityControlsApi->getVelocitycontrolsUserUsertokenAvailable: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **user_token** | **string**| Unique identifier of the cardholder. |
 **count** | **int**| Number of available balance resources to retrieve. | [optional] [default to 5]
 **start_index** | **int**| The sort order index of the first resource in the returned array. | [optional] [default to 0]
 **fields** | **string**| Comma-delimited list of fields to return (&#x60;field_1,field_2&#x60;, and so on). Leave blank to return all fields. | [optional]
 **sort_by** | **string**| Field on which to sort. Use any field in the resource model, or one of the system fields &#x60;lastModifiedTime&#x60; or &#x60;createdTime&#x60;. Prefix the field name with a hyphen (&#x60;-&#x60;) to sort in descending order. Omit the hyphen to sort in ascending order. | [optional] [default to &#39;-lastModifiedTime&#39;]

### Return type

[**\OpenAPI\Client\Model\VelocityControlBalanceListResponse**](../Model/VelocityControlBalanceListResponse.md)

### Authorization

[mqAppAndAccessToken](../../README.md#mqAppAndAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postVelocitycontrols()`

```php
postVelocitycontrols($velocity_control_request): \OpenAPI\Client\Model\VelocityControlResponse
```

Create velocity control

Limits how much and how frequently a user can spend funds. If multiple velocity controls apply to the same user, the user cannot exceed any of the defined spending limits.  [TIP] You can create program-level controls in the sandbox environment. However, you must work with your Marqeta representative to create program-level controls in a production environment.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: mqAppAndAccessToken
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\VelocityControlsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$velocity_control_request = {"amount_limit":500.0,"association":{"user_token":"my_user_04"},"currency_code":"USD","token":"my_velocitycontrol_01","usage_limit":10,"velocity_window":"DAY"}; // \OpenAPI\Client\Model\VelocityControlRequest | Velocity control object

try {
    $result = $apiInstance->postVelocitycontrols($velocity_control_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VelocityControlsApi->postVelocitycontrols: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **velocity_control_request** | [**\OpenAPI\Client\Model\VelocityControlRequest**](../Model/VelocityControlRequest.md)| Velocity control object |

### Return type

[**\OpenAPI\Client\Model\VelocityControlResponse**](../Model/VelocityControlResponse.md)

### Authorization

[mqAppAndAccessToken](../../README.md#mqAppAndAccessToken)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `putVelocitycontrolsToken()`

```php
putVelocitycontrolsToken($token, $velocity_control_update_request): \OpenAPI\Client\Model\VelocityControlResponse
```

Update velocity control

Updates a specific velocity control.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: mqAppAndAccessToken
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\VelocityControlsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$token = 'token_example'; // string | Unique identifier of the velocity control resource.
$velocity_control_update_request = {"amount_limit":1000.0,"token":"my_velocitycontrol_01","usage_limit":20}; // \OpenAPI\Client\Model\VelocityControlUpdateRequest | Velocity control object

try {
    $result = $apiInstance->putVelocitycontrolsToken($token, $velocity_control_update_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VelocityControlsApi->putVelocitycontrolsToken: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **token** | **string**| Unique identifier of the velocity control resource. |
 **velocity_control_update_request** | [**\OpenAPI\Client\Model\VelocityControlUpdateRequest**](../Model/VelocityControlUpdateRequest.md)| Velocity control object |

### Return type

[**\OpenAPI\Client\Model\VelocityControlResponse**](../Model/VelocityControlResponse.md)

### Authorization

[mqAppAndAccessToken](../../README.md#mqAppAndAccessToken)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
