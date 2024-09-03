# OpenAPI\Client\VelocityControlsCardGroupBalanceApi

All URIs are relative to /v3.

Method | HTTP request | Description
------------- | ------------- | -------------
[**listVelocityControlsCardGroupBalances()**](VelocityControlsCardGroupBalanceApi.md#listVelocityControlsCardGroupBalances) | **GET** /velocitycontrols/cardgroup/{card_group_token}/available | List Velocity Controls Card Group Balances


## `listVelocityControlsCardGroupBalances()`

```php
listVelocityControlsCardGroupBalances($card_group_token): \OpenAPI\Client\Model\VelocityControlBalancePage
```

List Velocity Controls Card Group Balances

Get a list of all Velocity Controls Card Group Balances in the program

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: mqAppAndAccessToken
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\VelocityControlsCardGroupBalanceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$card_group_token = 'card_group_token_example'; // string | Unique identifier of the card group for which to retrieve balances.

try {
    $result = $apiInstance->listVelocityControlsCardGroupBalances($card_group_token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VelocityControlsCardGroupBalanceApi->listVelocityControlsCardGroupBalances: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **card_group_token** | **string**| Unique identifier of the card group for which to retrieve balances. |

### Return type

[**\OpenAPI\Client\Model\VelocityControlBalancePage**](../Model/VelocityControlBalancePage.md)

### Authorization

[mqAppAndAccessToken](../../README.md#mqAppAndAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
