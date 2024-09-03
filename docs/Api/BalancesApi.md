# OpenAPI\Client\BalancesApi

All URIs are relative to /v3.

Method | HTTP request | Description
------------- | ------------- | -------------
[**getBalancesToken()**](BalancesApi.md#getBalancesToken) | **GET** /balances/{token} | Retrieve GPA balances


## `getBalancesToken()`

```php
getBalancesToken($token): \OpenAPI\Client\Model\CardholderBalances
```

Retrieve GPA balances

Use this endpoint to return general purpose account (GPA) balances for a user or a business. The response object includes a link to balances of related user GPAs.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: mqAppAndAccessToken
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\BalancesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$token = 'token_example'; // string | Unique identifier of the user or business for which you want to return GPA balances.

try {
    $result = $apiInstance->getBalancesToken($token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BalancesApi->getBalancesToken: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **token** | **string**| Unique identifier of the user or business for which you want to return GPA balances. |

### Return type

[**\OpenAPI\Client\Model\CardholderBalances**](../Model/CardholderBalances.md)

### Authorization

[mqAppAndAccessToken](../../README.md#mqAppAndAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
