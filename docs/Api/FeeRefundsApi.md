# OpenAPI\Client\FeeRefundsApi

All URIs are relative to /v3.

Method | HTTP request | Description
------------- | ------------- | -------------
[**postFeeRefunds()**](FeeRefundsApi.md#postFeeRefunds) | **POST** /feerefunds | Create fee refund


## `postFeeRefunds()`

```php
postFeeRefunds($fee_refund_request): \OpenAPI\Client\Model\FeeTransferResponse
```

Create fee refund

Use this endpoint to create a fee refund. Include the fee charge `token` path parameter to specify the fee to return.  If there are insufficient funds in your fee account to refund the fee, funds are drawn from your program reserve account.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: mqAppAndAccessToken
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\FeeRefundsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$fee_refund_request = new \OpenAPI\Client\Model\FeeRefundRequest(); // \OpenAPI\Client\Model\FeeRefundRequest

try {
    $result = $apiInstance->postFeeRefunds($fee_refund_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FeeRefundsApi->postFeeRefunds: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **fee_refund_request** | [**\OpenAPI\Client\Model\FeeRefundRequest**](../Model/FeeRefundRequest.md)|  | [optional]

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
