# OpenAPI\Client\AuthorizationControlsApi

All URIs are relative to /v3.

Method | HTTP request | Description
------------- | ------------- | -------------
[**getAuthcontrols()**](AuthorizationControlsApi.md#getAuthcontrols) | **GET** /authcontrols | List authorization controls
[**getAuthcontrolsExemptmids()**](AuthorizationControlsApi.md#getAuthcontrolsExemptmids) | **GET** /authcontrols/exemptmids | List merchant identifier (MID) exemptions
[**getAuthcontrolsExemptmidsToken()**](AuthorizationControlsApi.md#getAuthcontrolsExemptmidsToken) | **GET** /authcontrols/exemptmids/{token} | Retrieve a merchant identifier (MID) exemption
[**getAuthcontrolsToken()**](AuthorizationControlsApi.md#getAuthcontrolsToken) | **GET** /authcontrols/{token} | Retrieve authorization control
[**postAuthcontrols()**](AuthorizationControlsApi.md#postAuthcontrols) | **POST** /authcontrols | Create authorization control
[**postAuthcontrolsExemptmids()**](AuthorizationControlsApi.md#postAuthcontrolsExemptmids) | **POST** /authcontrols/exemptmids | Create a merchant identifier (MID) exemption
[**putAuthcontrolsExemptmidsToken()**](AuthorizationControlsApi.md#putAuthcontrolsExemptmidsToken) | **PUT** /authcontrols/exemptmids/{token} | Update a merchant identifier (MID) exemption
[**putAuthcontrolsToken()**](AuthorizationControlsApi.md#putAuthcontrolsToken) | **PUT** /authcontrols/{token} | Update authorization control


## `getAuthcontrols()`

```php
getAuthcontrols($card_product, $user, $count, $start_index, $fields, $sort_by): \OpenAPI\Client\Model\AuthControlListResponse
```

List authorization controls

List all authorization controls associated with a specific user or card product, or list all authorization controls defined in your program.  Include either a `user` or a `card_product` query parameter to indicate the user or card product whose associated authorization controls you want to retrieve (do not include both).  To list all authorization controls for your program, omit the `user` and `card_product` query parameters from your request.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: mqAppAndAccessToken
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\AuthorizationControlsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$card_product = 'card_product_example'; // string | Unique identifier of the card product whose associated authorization controls you want to retrieve.  Enter the string \"null\" to list authorization controls that are not associated with a card product.
$user = 'user_example'; // string | Unique identifier of the user whose associated authorization controls you want to retrieve.  Enter the string \"null\" to list authorization controls that are not associated with a user.
$count = 5; // int | The number of resources to retrieve.
$start_index = 0; // int | Sort order index of the first resource in the returned array.
$fields = 'fields_example'; // string | Comma-delimited list of fields to return (`field_1,field_2`, and so on). Leave blank to return all fields.
$sort_by = '-lastModifiedTime'; // string | Field on which to sort. Use any field in the resource model, or one of the system fields `lastModifiedTime` or `createdTime`. Prefix the field name with a hyphen (`-`) to sort in descending order. Omit the hyphen to sort in ascending order.

try {
    $result = $apiInstance->getAuthcontrols($card_product, $user, $count, $start_index, $fields, $sort_by);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AuthorizationControlsApi->getAuthcontrols: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **card_product** | **string**| Unique identifier of the card product whose associated authorization controls you want to retrieve.  Enter the string \&quot;null\&quot; to list authorization controls that are not associated with a card product. | [optional]
 **user** | **string**| Unique identifier of the user whose associated authorization controls you want to retrieve.  Enter the string \&quot;null\&quot; to list authorization controls that are not associated with a user. | [optional]
 **count** | **int**| The number of resources to retrieve. | [optional] [default to 5]
 **start_index** | **int**| Sort order index of the first resource in the returned array. | [optional] [default to 0]
 **fields** | **string**| Comma-delimited list of fields to return (&#x60;field_1,field_2&#x60;, and so on). Leave blank to return all fields. | [optional]
 **sort_by** | **string**| Field on which to sort. Use any field in the resource model, or one of the system fields &#x60;lastModifiedTime&#x60; or &#x60;createdTime&#x60;. Prefix the field name with a hyphen (&#x60;-&#x60;) to sort in descending order. Omit the hyphen to sort in ascending order. | [optional] [default to &#39;-lastModifiedTime&#39;]

### Return type

[**\OpenAPI\Client\Model\AuthControlListResponse**](../Model/AuthControlListResponse.md)

### Authorization

[mqAppAndAccessToken](../../README.md#mqAppAndAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getAuthcontrolsExemptmids()`

```php
getAuthcontrolsExemptmids($card_product, $user, $count, $start_index, $fields, $sort_by): \OpenAPI\Client\Model\AuthControlExemptMidsListResponse
```

List merchant identifier (MID) exemptions

Retrieve a list of all merchant (MID) exemptions.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: mqAppAndAccessToken
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\AuthorizationControlsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$card_product = 'card_product_example'; // string | Unique identifier of the card product whose associated MID exemptions you want to retrieve.  Enter the string \"null\" to list MID exemptions that are not associated with a card product.
$user = 'user_example'; // string | Unique identifier of the user whose associated MID exemptions you want to retrieve.  Enter the string \"null\" to list MID exemptions that are not associated with a user.
$count = 5; // int | The number of resources to retrieve.
$start_index = 0; // int | The sort order index of the first resource in the returned array.
$fields = 'fields_example'; // string | Comma-delimited list of fields to return (`field_1,field_2`, and so on). Leave blank to return all fields.
$sort_by = '-lastModifiedTime'; // string | Field on which to sort. Use any field in the resource model, or one of the system fields `lastModifiedTime` or `createdTime`. Prefix the field name with a hyphen (`-`) to sort in descending order. Omit the hyphen to sort in ascending order.

try {
    $result = $apiInstance->getAuthcontrolsExemptmids($card_product, $user, $count, $start_index, $fields, $sort_by);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AuthorizationControlsApi->getAuthcontrolsExemptmids: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **card_product** | **string**| Unique identifier of the card product whose associated MID exemptions you want to retrieve.  Enter the string \&quot;null\&quot; to list MID exemptions that are not associated with a card product. | [optional]
 **user** | **string**| Unique identifier of the user whose associated MID exemptions you want to retrieve.  Enter the string \&quot;null\&quot; to list MID exemptions that are not associated with a user. | [optional]
 **count** | **int**| The number of resources to retrieve. | [optional] [default to 5]
 **start_index** | **int**| The sort order index of the first resource in the returned array. | [optional] [default to 0]
 **fields** | **string**| Comma-delimited list of fields to return (&#x60;field_1,field_2&#x60;, and so on). Leave blank to return all fields. | [optional]
 **sort_by** | **string**| Field on which to sort. Use any field in the resource model, or one of the system fields &#x60;lastModifiedTime&#x60; or &#x60;createdTime&#x60;. Prefix the field name with a hyphen (&#x60;-&#x60;) to sort in descending order. Omit the hyphen to sort in ascending order. | [optional] [default to &#39;-lastModifiedTime&#39;]

### Return type

[**\OpenAPI\Client\Model\AuthControlExemptMidsListResponse**](../Model/AuthControlExemptMidsListResponse.md)

### Authorization

[mqAppAndAccessToken](../../README.md#mqAppAndAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getAuthcontrolsExemptmidsToken()`

```php
getAuthcontrolsExemptmidsToken($token): \OpenAPI\Client\Model\AuthControlExemptMidsResponse
```

Retrieve a merchant identifier (MID) exemption

Retrieve a merchant (MID) exemption.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: mqAppAndAccessToken
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\AuthorizationControlsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$token = 'token_example'; // string | Unique identifier of the authorization control resource.

try {
    $result = $apiInstance->getAuthcontrolsExemptmidsToken($token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AuthorizationControlsApi->getAuthcontrolsExemptmidsToken: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **token** | **string**| Unique identifier of the authorization control resource. |

### Return type

[**\OpenAPI\Client\Model\AuthControlExemptMidsResponse**](../Model/AuthControlExemptMidsResponse.md)

### Authorization

[mqAppAndAccessToken](../../README.md#mqAppAndAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getAuthcontrolsToken()`

```php
getAuthcontrolsToken($token, $fields): \OpenAPI\Client\Model\AuthControlResponse
```

Retrieve authorization control

Retrieve a specific authorization control.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: mqAppAndAccessToken
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\AuthorizationControlsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$token = 'token_example'; // string | Existing authorization control token.  Send a `GET` request to `/authcontrols` to retrieve authorization control tokens.
$fields = 'fields_example'; // string | Comma-delimited list of fields to return (`field_1,field_2`, and so on). Leave blank to return all fields.

try {
    $result = $apiInstance->getAuthcontrolsToken($token, $fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AuthorizationControlsApi->getAuthcontrolsToken: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **token** | **string**| Existing authorization control token.  Send a &#x60;GET&#x60; request to &#x60;/authcontrols&#x60; to retrieve authorization control tokens. |
 **fields** | **string**| Comma-delimited list of fields to return (&#x60;field_1,field_2&#x60;, and so on). Leave blank to return all fields. | [optional]

### Return type

[**\OpenAPI\Client\Model\AuthControlResponse**](../Model/AuthControlResponse.md)

### Authorization

[mqAppAndAccessToken](../../README.md#mqAppAndAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postAuthcontrols()`

```php
postAuthcontrols($auth_control_request): \OpenAPI\Client\Model\AuthControlResponse
```

Create authorization control

Limit where a user can make transactions to a single merchant or group of merchants. If multiple authorization controls apply to the same user, the limits of all controls are combined.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: mqAppAndAccessToken
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\AuthorizationControlsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$auth_control_request = {"association":{"user_token":"my_user_01"},"merchant_scope":{"mid":"98765"},"name":"My Auth Control","token":"my_authcontrol"}; // \OpenAPI\Client\Model\AuthControlRequest | Auth control object

try {
    $result = $apiInstance->postAuthcontrols($auth_control_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AuthorizationControlsApi->postAuthcontrols: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **auth_control_request** | [**\OpenAPI\Client\Model\AuthControlRequest**](../Model/AuthControlRequest.md)| Auth control object |

### Return type

[**\OpenAPI\Client\Model\AuthControlResponse**](../Model/AuthControlResponse.md)

### Authorization

[mqAppAndAccessToken](../../README.md#mqAppAndAccessToken)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postAuthcontrolsExemptmids()`

```php
postAuthcontrolsExemptmids($auth_control_exempt_mids_request): \OpenAPI\Client\Model\AuthControlExemptMidsResponse
```

Create a merchant identifier (MID) exemption

Exempt an individual merchant from authorization controls by merchant identifier (MID). Transactions originating from this MID ignore any otherwise applicable authorization controls.  [NOTE] You can create MID exemptions in your user sandbox. However, you must work with your Marqeta representative to create MID exemptions in a production environment.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: mqAppAndAccessToken
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\AuthorizationControlsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$auth_control_exempt_mids_request = {"association":{"card_product_token":"my_card_product"},"mid":"12345678901","name":"my_exempt_mid","token":"my_exempt_token"}; // \OpenAPI\Client\Model\AuthControlExemptMidsRequest | Auth control exempt MID object

try {
    $result = $apiInstance->postAuthcontrolsExemptmids($auth_control_exempt_mids_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AuthorizationControlsApi->postAuthcontrolsExemptmids: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **auth_control_exempt_mids_request** | [**\OpenAPI\Client\Model\AuthControlExemptMidsRequest**](../Model/AuthControlExemptMidsRequest.md)| Auth control exempt MID object |

### Return type

[**\OpenAPI\Client\Model\AuthControlExemptMidsResponse**](../Model/AuthControlExemptMidsResponse.md)

### Authorization

[mqAppAndAccessToken](../../README.md#mqAppAndAccessToken)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `putAuthcontrolsExemptmidsToken()`

```php
putAuthcontrolsExemptmidsToken($token, $auth_control_exempt_mids_update_request)
```

Update a merchant identifier (MID) exemption

Update a merchant identifier exemption.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: mqAppAndAccessToken
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\AuthorizationControlsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$token = 'token_example'; // string | Unique identifier of the authorization control resource.
$auth_control_exempt_mids_update_request = {"active":false}; // \OpenAPI\Client\Model\AuthControlExemptMidsUpdateRequest

try {
    $apiInstance->putAuthcontrolsExemptmidsToken($token, $auth_control_exempt_mids_update_request);
} catch (Exception $e) {
    echo 'Exception when calling AuthorizationControlsApi->putAuthcontrolsExemptmidsToken: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **token** | **string**| Unique identifier of the authorization control resource. |
 **auth_control_exempt_mids_update_request** | [**\OpenAPI\Client\Model\AuthControlExemptMidsUpdateRequest**](../Model/AuthControlExemptMidsUpdateRequest.md)|  | [optional]

### Return type

void (empty response body)

### Authorization

[mqAppAndAccessToken](../../README.md#mqAppAndAccessToken)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `putAuthcontrolsToken()`

```php
putAuthcontrolsToken($token, $auth_control_update_request): \OpenAPI\Client\Model\AuthControlResponse
```

Update authorization control

Update a specific authorization control.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: mqAppAndAccessToken
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\AuthorizationControlsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$token = 'token_example'; // string | Existing authorization control token.  Send a `GET` request to `/authcontrols` to retrieve authorization control tokens.
$auth_control_update_request = {"merchant_scope":{"mcc":"5111"},"token":"my_authcontrol"}; // \OpenAPI\Client\Model\AuthControlUpdateRequest | Auth control object

try {
    $result = $apiInstance->putAuthcontrolsToken($token, $auth_control_update_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AuthorizationControlsApi->putAuthcontrolsToken: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **token** | **string**| Existing authorization control token.  Send a &#x60;GET&#x60; request to &#x60;/authcontrols&#x60; to retrieve authorization control tokens. |
 **auth_control_update_request** | [**\OpenAPI\Client\Model\AuthControlUpdateRequest**](../Model/AuthControlUpdateRequest.md)| Auth control object |

### Return type

[**\OpenAPI\Client\Model\AuthControlResponse**](../Model/AuthControlResponse.md)

### Authorization

[mqAppAndAccessToken](../../README.md#mqAppAndAccessToken)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
