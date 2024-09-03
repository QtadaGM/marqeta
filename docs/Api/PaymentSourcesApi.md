# OpenAPI\Client\PaymentSourcesApi

All URIs are relative to /v3.

Method | HTTP request | Description
------------- | ------------- | -------------
[**createPaymentSource()**](PaymentSourcesApi.md#createPaymentSource) | **POST** /paymentsources | Create payment source
[**listPaymentSources()**](PaymentSourcesApi.md#listPaymentSources) | **GET** /paymentsources | List payment sources
[**retrievePaymentSource()**](PaymentSourcesApi.md#retrievePaymentSource) | **GET** /paymentsources/{token} | Retrieve payment source
[**updatePaymentSource()**](PaymentSourcesApi.md#updatePaymentSource) | **PUT** /paymentsources/{token} | Update payment source


## `createPaymentSource()`

```php
createPaymentSource($payment_source_create_req): \OpenAPI\Client\Model\PaymentSourceResponse
```

Create payment source

Create a payment source from which to make payments.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: mqAppAndAccessToken
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\PaymentSourcesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$payment_source_create_req = {"account_number":"4567_payment_source_account_number","account_token":"my_account_token_12","name":"John Jacob","owner":"INDIVIDUAL","routing_number":"56789_payment_source_routing_number","source_type":"CHECKING","token":"my_payment_source_token_6789","user_token":"user5678","verification_override":true}; // \OpenAPI\Client\Model\PaymentSourceCreateReq

try {
    $result = $apiInstance->createPaymentSource($payment_source_create_req);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PaymentSourcesApi->createPaymentSource: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **payment_source_create_req** | [**\OpenAPI\Client\Model\PaymentSourceCreateReq**](../Model/PaymentSourceCreateReq.md)|  |

### Return type

[**\OpenAPI\Client\Model\PaymentSourceResponse**](../Model/PaymentSourceResponse.md)

### Authorization

[mqAppAndAccessToken](../../README.md#mqAppAndAccessToken)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listPaymentSources()`

```php
listPaymentSources($account_token, $user_token, $business_token, $count, $start_index, $sort_by): \OpenAPI\Client\Model\PaymentSourcePage
```

List payment sources

Retrieve an array of payment sources.  This endpoint supports <</core-api/sorting-and-pagination, sorting and pagination>>.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: mqAppAndAccessToken
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\PaymentSourcesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account_token = 'account_token_example'; // string | Unique identifier of the credit account associated with the payment source.
$user_token = 'user_token_example'; // string | Unique identifier of the user associated with the payment source.
$business_token = 'business_token_example'; // string | Unique identifier of the business associated with the payment source.
$count = 5; // int | Number of payment source resources to retrieve.
$start_index = 0; // int | Sort order index of the first resource in the returned array.
$sort_by = '-lastModifiedTime'; // string | Field on which to sort. Prefix the field name with a hyphen (`-`) to sort in descending order. Omit the hyphen to sort in ascending order.  *NOTE:* You must sort using system field names such as `lastModifiedTime`, and not by the field names appearing in response bodies such as `last_modified_time`.

try {
    $result = $apiInstance->listPaymentSources($account_token, $user_token, $business_token, $count, $start_index, $sort_by);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PaymentSourcesApi->listPaymentSources: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **account_token** | **string**| Unique identifier of the credit account associated with the payment source. | [optional]
 **user_token** | **string**| Unique identifier of the user associated with the payment source. | [optional]
 **business_token** | **string**| Unique identifier of the business associated with the payment source. | [optional]
 **count** | **int**| Number of payment source resources to retrieve. | [optional] [default to 5]
 **start_index** | **int**| Sort order index of the first resource in the returned array. | [optional] [default to 0]
 **sort_by** | **string**| Field on which to sort. Prefix the field name with a hyphen (&#x60;-&#x60;) to sort in descending order. Omit the hyphen to sort in ascending order.  *NOTE:* You must sort using system field names such as &#x60;lastModifiedTime&#x60;, and not by the field names appearing in response bodies such as &#x60;last_modified_time&#x60;. | [optional] [default to &#39;-lastModifiedTime&#39;]

### Return type

[**\OpenAPI\Client\Model\PaymentSourcePage**](../Model/PaymentSourcePage.md)

### Authorization

[mqAppAndAccessToken](../../README.md#mqAppAndAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `retrievePaymentSource()`

```php
retrievePaymentSource($token): \OpenAPI\Client\Model\PaymentSourceResponse
```

Retrieve payment source

Retrieve a payment source.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: mqAppAndAccessToken
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\PaymentSourcesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$token = 'token_example'; // string | Unique identifier of the payment source to retrieve.  Send a `GET` request to `/credit/paymentsources` to retrieve existing payment source tokens.

try {
    $result = $apiInstance->retrievePaymentSource($token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PaymentSourcesApi->retrievePaymentSource: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **token** | **string**| Unique identifier of the payment source to retrieve.  Send a &#x60;GET&#x60; request to &#x60;/credit/paymentsources&#x60; to retrieve existing payment source tokens. |

### Return type

[**\OpenAPI\Client\Model\PaymentSourceResponse**](../Model/PaymentSourceResponse.md)

### Authorization

[mqAppAndAccessToken](../../README.md#mqAppAndAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updatePaymentSource()`

```php
updatePaymentSource($token, $payment_source_update_req): \OpenAPI\Client\Model\PaymentSourceResponse
```

Update payment source

Update details of a payment source.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: mqAppAndAccessToken
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\PaymentSourcesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$token = 'token_example'; // string | Unique identifier of the payment source to retrieve.  Send a `GET` request to `/credit/paymentsources` to retrieve existing payment source tokens.
$payment_source_update_req = {"status":"ACTIVE"}; // \OpenAPI\Client\Model\PaymentSourceUpdateReq

try {
    $result = $apiInstance->updatePaymentSource($token, $payment_source_update_req);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PaymentSourcesApi->updatePaymentSource: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **token** | **string**| Unique identifier of the payment source to retrieve.  Send a &#x60;GET&#x60; request to &#x60;/credit/paymentsources&#x60; to retrieve existing payment source tokens. |
 **payment_source_update_req** | [**\OpenAPI\Client\Model\PaymentSourceUpdateReq**](../Model/PaymentSourceUpdateReq.md)|  |

### Return type

[**\OpenAPI\Client\Model\PaymentSourceResponse**](../Model/PaymentSourceResponse.md)

### Authorization

[mqAppAndAccessToken](../../README.md#mqAppAndAccessToken)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
