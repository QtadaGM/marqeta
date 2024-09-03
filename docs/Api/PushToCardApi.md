# OpenAPI\Client\PushToCardApi

All URIs are relative to /v3.

Method | HTTP request | Description
------------- | ------------- | -------------
[**getPushtocardsDisburse()**](PushToCardApi.md#getPushtocardsDisburse) | **GET** /pushtocards/disburse | Lists all push-to-card disbursements
[**getPushtocardsDisburseToken()**](PushToCardApi.md#getPushtocardsDisburseToken) | **GET** /pushtocards/disburse/{token} | Returns a specific push-to-card disbursement
[**getPushtocardsPaymentcard()**](PushToCardApi.md#getPushtocardsPaymentcard) | **GET** /pushtocards/paymentcard | Returns all push-to-card payment card details
[**getPushtocardsPaymentcardToken()**](PushToCardApi.md#getPushtocardsPaymentcardToken) | **GET** /pushtocards/paymentcard/{token} | Returns a specific paymentcard object
[**postPushtocardsDisburse()**](PushToCardApi.md#postPushtocardsDisburse) | **POST** /pushtocards/disburse | Initiates a push-to-card money disbursement
[**postPushtocardsPaymentcard()**](PushToCardApi.md#postPushtocardsPaymentcard) | **POST** /pushtocards/paymentcard | Adds an external card to which funds will be pushed


## `getPushtocardsDisburse()`

```php
getPushtocardsDisburse($count, $fields, $start_index, $sort_by): \OpenAPI\Client\Model\PushToCardDisburseListResponse
```

Lists all push-to-card disbursements

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: mqAppAndAccessToken
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\PushToCardApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$count = 10; // int | Number of push-to-card disbursements to retrieve
$fields = 'fields_example'; // string | Comma-delimited list of fields to return (e.g. field_1,field_2,..). Leave blank to return all fields.
$start_index = 0; // int | Start index
$sort_by = '-createdTime'; // string | Sort order

try {
    $result = $apiInstance->getPushtocardsDisburse($count, $fields, $start_index, $sort_by);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PushToCardApi->getPushtocardsDisburse: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **count** | **int**| Number of push-to-card disbursements to retrieve | [optional] [default to 10]
 **fields** | **string**| Comma-delimited list of fields to return (e.g. field_1,field_2,..). Leave blank to return all fields. | [optional]
 **start_index** | **int**| Start index | [optional] [default to 0]
 **sort_by** | **string**| Sort order | [optional] [default to &#39;-createdTime&#39;]

### Return type

[**\OpenAPI\Client\Model\PushToCardDisburseListResponse**](../Model/PushToCardDisburseListResponse.md)

### Authorization

[mqAppAndAccessToken](../../README.md#mqAppAndAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getPushtocardsDisburseToken()`

```php
getPushtocardsDisburseToken($token, $fields): \OpenAPI\Client\Model\PushToCardDisbursementResponse
```

Returns a specific push-to-card disbursement

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: mqAppAndAccessToken
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\PushToCardApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$token = 'token_example'; // string | Push-to-card disbursement token
$fields = 'fields_example'; // string | Comma-delimited list of fields to return (e.g. field_1,field_2,..). Leave blank to return all fields.

try {
    $result = $apiInstance->getPushtocardsDisburseToken($token, $fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PushToCardApi->getPushtocardsDisburseToken: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **token** | **string**| Push-to-card disbursement token |
 **fields** | **string**| Comma-delimited list of fields to return (e.g. field_1,field_2,..). Leave blank to return all fields. | [optional]

### Return type

[**\OpenAPI\Client\Model\PushToCardDisbursementResponse**](../Model/PushToCardDisbursementResponse.md)

### Authorization

[mqAppAndAccessToken](../../README.md#mqAppAndAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getPushtocardsPaymentcard()`

```php
getPushtocardsPaymentcard($user_token, $count, $fields, $start_index, $sort_by): \OpenAPI\Client\Model\PushToCardListResponse
```

Returns all push-to-card payment card details

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: mqAppAndAccessToken
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\PushToCardApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$user_token = 'user_token_example'; // string | User token
$count = 10; // int | Number of push-to-card payment cards to retrieve
$fields = 'fields_example'; // string | Comma-delimited list of fields to return (e.g. field_1,field_2,..). Leave blank to return all fields.
$start_index = 0; // int | Start index
$sort_by = '-createdTime'; // string | Sort order

try {
    $result = $apiInstance->getPushtocardsPaymentcard($user_token, $count, $fields, $start_index, $sort_by);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PushToCardApi->getPushtocardsPaymentcard: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **user_token** | **string**| User token |
 **count** | **int**| Number of push-to-card payment cards to retrieve | [optional] [default to 10]
 **fields** | **string**| Comma-delimited list of fields to return (e.g. field_1,field_2,..). Leave blank to return all fields. | [optional]
 **start_index** | **int**| Start index | [optional] [default to 0]
 **sort_by** | **string**| Sort order | [optional] [default to &#39;-createdTime&#39;]

### Return type

[**\OpenAPI\Client\Model\PushToCardListResponse**](../Model/PushToCardListResponse.md)

### Authorization

[mqAppAndAccessToken](../../README.md#mqAppAndAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getPushtocardsPaymentcardToken()`

```php
getPushtocardsPaymentcardToken($token, $fields): \OpenAPI\Client\Model\PushToCardResponse
```

Returns a specific paymentcard object

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: mqAppAndAccessToken
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\PushToCardApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$token = 'token_example'; // string | Push-to-card token
$fields = 'fields_example'; // string | Comma-delimited list of fields to return (e.g. field_1,field_2,..). Leave blank to return all fields.

try {
    $result = $apiInstance->getPushtocardsPaymentcardToken($token, $fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PushToCardApi->getPushtocardsPaymentcardToken: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **token** | **string**| Push-to-card token |
 **fields** | **string**| Comma-delimited list of fields to return (e.g. field_1,field_2,..). Leave blank to return all fields. | [optional]

### Return type

[**\OpenAPI\Client\Model\PushToCardResponse**](../Model/PushToCardResponse.md)

### Authorization

[mqAppAndAccessToken](../../README.md#mqAppAndAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postPushtocardsDisburse()`

```php
postPushtocardsDisburse($push_to_card_disburse_request): \OpenAPI\Client\Model\PushToCardDisbursementResponse
```

Initiates a push-to-card money disbursement

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: mqAppAndAccessToken
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\PushToCardApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$push_to_card_disburse_request = new \OpenAPI\Client\Model\PushToCardDisburseRequest(); // \OpenAPI\Client\Model\PushToCardDisburseRequest

try {
    $result = $apiInstance->postPushtocardsDisburse($push_to_card_disburse_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PushToCardApi->postPushtocardsDisburse: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **push_to_card_disburse_request** | [**\OpenAPI\Client\Model\PushToCardDisburseRequest**](../Model/PushToCardDisburseRequest.md)|  | [optional]

### Return type

[**\OpenAPI\Client\Model\PushToCardDisbursementResponse**](../Model/PushToCardDisbursementResponse.md)

### Authorization

[mqAppAndAccessToken](../../README.md#mqAppAndAccessToken)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postPushtocardsPaymentcard()`

```php
postPushtocardsPaymentcard($push_to_card_request): \OpenAPI\Client\Model\PushToCardResponse
```

Adds an external card to which funds will be pushed

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: mqAppAndAccessToken
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\PushToCardApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$push_to_card_request = new \OpenAPI\Client\Model\PushToCardRequest(); // \OpenAPI\Client\Model\PushToCardRequest

try {
    $result = $apiInstance->postPushtocardsPaymentcard($push_to_card_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PushToCardApi->postPushtocardsPaymentcard: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **push_to_card_request** | [**\OpenAPI\Client\Model\PushToCardRequest**](../Model/PushToCardRequest.md)|  | [optional]

### Return type

[**\OpenAPI\Client\Model\PushToCardResponse**](../Model/PushToCardResponse.md)

### Authorization

[mqAppAndAccessToken](../../README.md#mqAppAndAccessToken)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
