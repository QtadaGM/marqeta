# OpenAPI\Client\ProgramGatewaysApi

All URIs are relative to /v3.

Method | HTTP request | Description
------------- | ------------- | -------------
[**createProgramGateway()**](ProgramGatewaysApi.md#createProgramGateway) | **POST** /programgateways | Create Program Gateway
[**listProgramGateways()**](ProgramGatewaysApi.md#listProgramGateways) | **GET** /programgateways | List Program Gateways
[**retrieveProgramGateway()**](ProgramGatewaysApi.md#retrieveProgramGateway) | **GET** /programgateways/{token} | Retrieve Program Gateway
[**updateProgramGateway()**](ProgramGatewaysApi.md#updateProgramGateway) | **PUT** /programgateways/{token} | Update Program Gateway


## `createProgramGateway()`

```php
createProgramGateway($program_gateway_create_req): \OpenAPI\Client\Model\ProgramGatewayResponse
```

Create Program Gateway

Create a new Credit Program Gateway.  Use this endpoint to configure your Program Gateway to receive gateway requests from Marqeta's credit platform. You can create multiple Program Gateways, but only one can be active per credit program.  [NOTE] To create a Program Gateway, you must have consumer or admin credentials.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: mqAppAndAccessToken
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\ProgramGatewaysApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$program_gateway_create_req = {"basic_auth_password":"my_20-50_character_password","basic_auth_username":"my_username","custom_header":{"my_header_name_1":"my_value_1"},"name":"My Program Gateway","url":"https://my-url"}; // \OpenAPI\Client\Model\ProgramGatewayCreateReq

try {
    $result = $apiInstance->createProgramGateway($program_gateway_create_req);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProgramGatewaysApi->createProgramGateway: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **program_gateway_create_req** | [**\OpenAPI\Client\Model\ProgramGatewayCreateReq**](../Model/ProgramGatewayCreateReq.md)|  |

### Return type

[**\OpenAPI\Client\Model\ProgramGatewayResponse**](../Model/ProgramGatewayResponse.md)

### Authorization

[mqAppAndAccessToken](../../README.md#mqAppAndAccessToken)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listProgramGateways()`

```php
listProgramGateways($count, $start_index, $sort_by): \OpenAPI\Client\Model\ProgramGatewayPage
```

List Program Gateways

Retrieve an array of existing Credit Program Gateways.  This endpoint supports <</core-api/sorting-and-pagination, sorting and pagination>>.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: mqAppAndAccessToken
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\ProgramGatewaysApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$count = 5; // int | Number of program gateway resources to retrieve.
$start_index = 0; // int | Sort order index of the first resource in the returned array.
$sort_by = '-lastModifiedTime'; // string | Field on which to sort. Prefix the field name with a hyphen (`-`) to sort in descending order. Omit the hyphen to sort in ascending order.  *NOTE:* You must sort using system field names such as `lastModifiedTime`, and not by the field names appearing in response bodies such as `last_modified_time`.

try {
    $result = $apiInstance->listProgramGateways($count, $start_index, $sort_by);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProgramGatewaysApi->listProgramGateways: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **count** | **int**| Number of program gateway resources to retrieve. | [optional] [default to 5]
 **start_index** | **int**| Sort order index of the first resource in the returned array. | [optional] [default to 0]
 **sort_by** | **string**| Field on which to sort. Prefix the field name with a hyphen (&#x60;-&#x60;) to sort in descending order. Omit the hyphen to sort in ascending order.  *NOTE:* You must sort using system field names such as &#x60;lastModifiedTime&#x60;, and not by the field names appearing in response bodies such as &#x60;last_modified_time&#x60;. | [optional] [default to &#39;-lastModifiedTime&#39;]

### Return type

[**\OpenAPI\Client\Model\ProgramGatewayPage**](../Model/ProgramGatewayPage.md)

### Authorization

[mqAppAndAccessToken](../../README.md#mqAppAndAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `retrieveProgramGateway()`

```php
retrieveProgramGateway($token): \OpenAPI\Client\Model\ProgramGatewayResponse
```

Retrieve Program Gateway

Retrieve an existing Credit Program Gateway.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: mqAppAndAccessToken
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\ProgramGatewaysApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$token = 'token_example'; // string | Unique identifier of the Program Gateway to retrieve.  Send a `GET` request to `/credit/programgateways` to retrieve existing Program Gateway tokens.

try {
    $result = $apiInstance->retrieveProgramGateway($token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProgramGatewaysApi->retrieveProgramGateway: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **token** | **string**| Unique identifier of the Program Gateway to retrieve.  Send a &#x60;GET&#x60; request to &#x60;/credit/programgateways&#x60; to retrieve existing Program Gateway tokens. |

### Return type

[**\OpenAPI\Client\Model\ProgramGatewayResponse**](../Model/ProgramGatewayResponse.md)

### Authorization

[mqAppAndAccessToken](../../README.md#mqAppAndAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateProgramGateway()`

```php
updateProgramGateway($token, $program_gateway_update_req): \OpenAPI\Client\Model\ProgramGatewayResponse
```

Update Program Gateway

Update an existing Credit Program Gateway.  You may want to update a Program Gateway if you are switching it to active or inactive, updating the URL, username, or password, and more.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: mqAppAndAccessToken
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\ProgramGatewaysApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$token = 'token_example'; // string | Unique identifier of the Program Gateway to update.
$program_gateway_update_req = new \OpenAPI\Client\Model\ProgramGatewayUpdateReq(); // \OpenAPI\Client\Model\ProgramGatewayUpdateReq

try {
    $result = $apiInstance->updateProgramGateway($token, $program_gateway_update_req);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProgramGatewaysApi->updateProgramGateway: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **token** | **string**| Unique identifier of the Program Gateway to update. |
 **program_gateway_update_req** | [**\OpenAPI\Client\Model\ProgramGatewayUpdateReq**](../Model/ProgramGatewayUpdateReq.md)|  |

### Return type

[**\OpenAPI\Client\Model\ProgramGatewayResponse**](../Model/ProgramGatewayResponse.md)

### Authorization

[mqAppAndAccessToken](../../README.md#mqAppAndAccessToken)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
