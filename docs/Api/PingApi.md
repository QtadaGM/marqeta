# OpenAPI\Client\PingApi

All URIs are relative to /v3.

Method | HTTP request | Description
------------- | ------------- | -------------
[**getPing()**](PingApi.md#getPing) | **GET** /ping | Returns a heartbeat to the consumer
[**postPing()**](PingApi.md#postPing) | **POST** /ping | Echo test for sending payload to server


## `getPing()`

```php
getPing(): \OpenAPI\Client\Model\PingResponse
```

Returns a heartbeat to the consumer

Tests if the Marqeta server is available and responsive.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: mqAppAndAccessToken
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\PingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getPing();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PingApi->getPing: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\OpenAPI\Client\Model\PingResponse**](../Model/PingResponse.md)

### Authorization

[mqAppAndAccessToken](../../README.md#mqAppAndAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postPing()`

```php
postPing($echo_ping_request): \OpenAPI\Client\Model\EchoPingResponse
```

Echo test for sending payload to server

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: mqAppAndAccessToken
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\PingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$echo_ping_request = new \OpenAPI\Client\Model\EchoPingRequest(); // \OpenAPI\Client\Model\EchoPingRequest

try {
    $result = $apiInstance->postPing($echo_ping_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PingApi->postPing: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **echo_ping_request** | [**\OpenAPI\Client\Model\EchoPingRequest**](../Model/EchoPingRequest.md)|  | [optional]

### Return type

[**\OpenAPI\Client\Model\EchoPingResponse**](../Model/EchoPingResponse.md)

### Authorization

[mqAppAndAccessToken](../../README.md#mqAppAndAccessToken)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
