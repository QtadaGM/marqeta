# OpenAPI\Client\BalanceRefundsApi

All URIs are relative to /v3.

Method | HTTP request | Description
------------- | ------------- | -------------
[**createBalanceRefund()**](BalanceRefundsApi.md#createBalanceRefund) | **POST** /accounts/{account_token}/creditbalancerefunds | Create balance refund


## `createBalanceRefund()`

```php
createBalanceRefund($account_token, $account_credit_balance_refund_req): \OpenAPI\Client\Model\AccountCreditBalanceRefundResponse
```

Create balance refund

Create a new balance refund, which can be issued to the account holder if their credit account balance is negative.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: mqAppAndAccessToken
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\BalanceRefundsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account_token = 'account_token_example'; // string | Unique identifier of the credit account for which you want to create a balance refund.  Send a `GET` request to `/credit/accounts` to retrieve existing credit account tokens.
$account_credit_balance_refund_req = {"amount":500,"currency_code":"USD","description":"credit balance refund","method":"CHECK"}; // \OpenAPI\Client\Model\AccountCreditBalanceRefundReq

try {
    $result = $apiInstance->createBalanceRefund($account_token, $account_credit_balance_refund_req);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BalanceRefundsApi->createBalanceRefund: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **account_token** | **string**| Unique identifier of the credit account for which you want to create a balance refund.  Send a &#x60;GET&#x60; request to &#x60;/credit/accounts&#x60; to retrieve existing credit account tokens. |
 **account_credit_balance_refund_req** | [**\OpenAPI\Client\Model\AccountCreditBalanceRefundReq**](../Model/AccountCreditBalanceRefundReq.md)|  |

### Return type

[**\OpenAPI\Client\Model\AccountCreditBalanceRefundResponse**](../Model/AccountCreditBalanceRefundResponse.md)

### Authorization

[mqAppAndAccessToken](../../README.md#mqAppAndAccessToken)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
