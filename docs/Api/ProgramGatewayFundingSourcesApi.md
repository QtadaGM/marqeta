# OpenAPI\Client\ProgramGatewayFundingSourcesApi

All URIs are relative to /v3.

Method | HTTP request | Description
------------- | ------------- | -------------
[**getFundingsourcesProgramgatewayToken()**](ProgramGatewayFundingSourcesApi.md#getFundingsourcesProgramgatewayToken) | **GET** /fundingsources/programgateway/{token} | Retrieve program gateway source
[**postFundingsourcesProgramgateway()**](ProgramGatewayFundingSourcesApi.md#postFundingsourcesProgramgateway) | **POST** /fundingsources/programgateway | Create program gateway source
[**putFundingsourcesProgramgatewayCustomHeaderToken()**](ProgramGatewayFundingSourcesApi.md#putFundingsourcesProgramgatewayCustomHeaderToken) | **PUT** /fundingsources/programgateway/customheaders/{token} | Update program gateway source custom headers
[**putFundingsourcesProgramgatewayToken()**](ProgramGatewayFundingSourcesApi.md#putFundingsourcesProgramgatewayToken) | **PUT** /fundingsources/programgateway/{token} | Update program gateway source


## `getFundingsourcesProgramgatewayToken()`

```php
getFundingsourcesProgramgatewayToken($token): \OpenAPI\Client\Model\GatewayProgramFundingSourceResponse
```

Retrieve program gateway source

Retrieves a specific program gateway funding source.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: mqAppAndAccessToken
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\ProgramGatewayFundingSourcesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$token = 'token_example'; // string | Unique identifier of the program gateway funding source.

try {
    $result = $apiInstance->getFundingsourcesProgramgatewayToken($token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProgramGatewayFundingSourcesApi->getFundingsourcesProgramgatewayToken: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **token** | **string**| Unique identifier of the program gateway funding source. |

### Return type

[**\OpenAPI\Client\Model\GatewayProgramFundingSourceResponse**](../Model/GatewayProgramFundingSourceResponse.md)

### Authorization

[mqAppAndAccessToken](../../README.md#mqAppAndAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postFundingsourcesProgramgateway()`

```php
postFundingsourcesProgramgateway($gateway_program_funding_source_request): \OpenAPI\Client\Model\GatewayProgramFundingSourceResponse
```

Create program gateway source

Creates a program gateway funding source. A program gateway funding source is a transaction relay that allows you to approve or decline transactions in real time.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: mqAppAndAccessToken
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\ProgramGatewayFundingSourcesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$gateway_program_funding_source_request = {"basic_auth_password":"my_20-to-100-character_password","basic_auth_username":"my_username","name":"my_pgfs_name","token":"my_pgfs_token","url":"https://my_secure_domain.com/my_gateway"}; // \OpenAPI\Client\Model\GatewayProgramFundingSourceRequest

try {
    $result = $apiInstance->postFundingsourcesProgramgateway($gateway_program_funding_source_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProgramGatewayFundingSourcesApi->postFundingsourcesProgramgateway: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **gateway_program_funding_source_request** | [**\OpenAPI\Client\Model\GatewayProgramFundingSourceRequest**](../Model/GatewayProgramFundingSourceRequest.md)|  | [optional]

### Return type

[**\OpenAPI\Client\Model\GatewayProgramFundingSourceResponse**](../Model/GatewayProgramFundingSourceResponse.md)

### Authorization

[mqAppAndAccessToken](../../README.md#mqAppAndAccessToken)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `putFundingsourcesProgramgatewayCustomHeaderToken()`

```php
putFundingsourcesProgramgatewayCustomHeaderToken($token, $gateway_program_custom_header_update_request): \OpenAPI\Client\Model\GatewayProgramFundingSourceResponse
```

Update program gateway source custom headers

Adds or updates custom HTTP headers for a specific program gateway funding source.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: mqAppAndAccessToken
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\ProgramGatewayFundingSourcesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$token = 'token_example'; // string | Unique identifier of the program gateway funding source.
$gateway_program_custom_header_update_request = {"custom_header":{"my_header_name_1":"my_value_1","my_header_name_2":"my_value_2","my_header_name_3":"my_value_3"}}; // \OpenAPI\Client\Model\GatewayProgramCustomHeaderUpdateRequest

try {
    $result = $apiInstance->putFundingsourcesProgramgatewayCustomHeaderToken($token, $gateway_program_custom_header_update_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProgramGatewayFundingSourcesApi->putFundingsourcesProgramgatewayCustomHeaderToken: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **token** | **string**| Unique identifier of the program gateway funding source. |
 **gateway_program_custom_header_update_request** | [**\OpenAPI\Client\Model\GatewayProgramCustomHeaderUpdateRequest**](../Model/GatewayProgramCustomHeaderUpdateRequest.md)|  | [optional]

### Return type

[**\OpenAPI\Client\Model\GatewayProgramFundingSourceResponse**](../Model/GatewayProgramFundingSourceResponse.md)

### Authorization

[mqAppAndAccessToken](../../README.md#mqAppAndAccessToken)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `putFundingsourcesProgramgatewayToken()`

```php
putFundingsourcesProgramgatewayToken($token, $gateway_program_funding_source_update_request): \OpenAPI\Client\Model\GatewayProgramFundingSourceResponse
```

Update program gateway source

Update a program gateway funding source.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: mqAppAndAccessToken
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\ProgramGatewayFundingSourcesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$token = 'token_example'; // string | Unique identifier of the program gateway funding source.
$gateway_program_funding_source_update_request = {"active":false,"basic_auth_password":"my_20-to-100-character_password","basic_auth_username":"my_username","url":"https://my_secure_domain.com/my_gateway"}; // \OpenAPI\Client\Model\GatewayProgramFundingSourceUpdateRequest

try {
    $result = $apiInstance->putFundingsourcesProgramgatewayToken($token, $gateway_program_funding_source_update_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProgramGatewayFundingSourcesApi->putFundingsourcesProgramgatewayToken: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **token** | **string**| Unique identifier of the program gateway funding source. |
 **gateway_program_funding_source_update_request** | [**\OpenAPI\Client\Model\GatewayProgramFundingSourceUpdateRequest**](../Model/GatewayProgramFundingSourceUpdateRequest.md)|  | [optional]

### Return type

[**\OpenAPI\Client\Model\GatewayProgramFundingSourceResponse**](../Model/GatewayProgramFundingSourceResponse.md)

### Authorization

[mqAppAndAccessToken](../../README.md#mqAppAndAccessToken)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
