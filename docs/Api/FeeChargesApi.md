# OpenAPI\Client\FeeChargesApi

All URIs are relative to /v3.

Method | HTTP request | Description
------------- | ------------- | -------------
[**getFeeChargeToken()**](FeeChargesApi.md#getFeeChargeToken) | **GET** /feecharges/{token} | Retrieve fee charge
[**postFeeCharge()**](FeeChargesApi.md#postFeeCharge) | **POST** /feecharges | Create fee charge


## `getFeeChargeToken()`

```php
getFeeChargeToken($token): \OpenAPI\Client\Model\FeeTransferResponse
```

Retrieve fee charge

Use this endpoint to retrieve a specific fee charge. Include the fee transfer `token` path parameter to specify the fee charge to return.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: mqAppAndAccessToken
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\FeeChargesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$token = 'token_example'; // string | Unique identifier of the fee charge to retrieve.

try {
    $result = $apiInstance->getFeeChargeToken($token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FeeChargesApi->getFeeChargeToken: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **token** | **string**| Unique identifier of the fee charge to retrieve. |

### Return type

[**\OpenAPI\Client\Model\FeeTransferResponse**](../Model/FeeTransferResponse.md)

### Authorization

[mqAppAndAccessToken](../../README.md#mqAppAndAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postFeeCharge()`

```php
postFeeCharge($fee_transfer_request): \OpenAPI\Client\Model\FeeTransferResponse
```

Create fee charge

Use this endpoint to create a fee charge. You must pass in either `user_token` or `business_token` to associate a user or business with the fee charge.  This is an all-or-nothing operation. When more than one fee is present, you must assess either all fees, or no fees.  [NOTE] This feature is currently in beta and subject to change. It also requires additional activation steps. To learn more about the Beta program for this feature and about activating it for your program, contact your Marqeta representative.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: mqAppAndAccessToken
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\FeeChargesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$fee_transfer_request = {"business_token":"my_business_01","fees":[{"memo":"Initiation fee","token":"my_fee_01"}],"token":"my_feecharge_01","user_token":"my_user_01"}; // \OpenAPI\Client\Model\FeeTransferRequest

try {
    $result = $apiInstance->postFeeCharge($fee_transfer_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FeeChargesApi->postFeeCharge: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **fee_transfer_request** | [**\OpenAPI\Client\Model\FeeTransferRequest**](../Model/FeeTransferRequest.md)|  | [optional]

### Return type

[**\OpenAPI\Client\Model\FeeTransferResponse**](../Model/FeeTransferResponse.md)

### Authorization

[mqAppAndAccessToken](../../README.md#mqAppAndAccessToken)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
