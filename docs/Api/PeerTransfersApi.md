# OpenAPI\Client\PeerTransfersApi

All URIs are relative to /v3.

Method | HTTP request | Description
------------- | ------------- | -------------
[**getPeertransfersToken()**](PeerTransfersApi.md#getPeertransfersToken) | **GET** /peertransfers/{token} | Retrieve peer transfer
[**getPeertransfersUserUserorbusinesstoken()**](PeerTransfersApi.md#getPeertransfersUserUserorbusinesstoken) | **GET** /peertransfers/user/{user_or_business_token} | List peer transfers by account holder
[**getPeertransfersUserUserorbusinesstokenRecipient()**](PeerTransfersApi.md#getPeertransfersUserUserorbusinesstokenRecipient) | **GET** /peertransfers/user/{user_or_business_token}/recipient | List received peer transfers
[**getPeertransfersUserUserorbusinesstokenSender()**](PeerTransfersApi.md#getPeertransfersUserUserorbusinesstokenSender) | **GET** /peertransfers/user/{user_or_business_token}/sender | List sent peer transfers
[**postPeertransfers()**](PeerTransfersApi.md#postPeertransfers) | **POST** /peertransfers | Create peer transfer


## `getPeertransfersToken()`

```php
getPeertransfersToken($token): \OpenAPI\Client\Model\PeerTransferResponse
```

Retrieve peer transfer

Use this endpoint to retrieve a peer transfer request. Include the peer transfer `token` as a path parameter in the URL to identify the peer transfer to return.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: mqAppAndAccessToken
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\PeerTransfersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$token = 'token_example'; // string | Unique identifier of the peer transfer.

try {
    $result = $apiInstance->getPeertransfersToken($token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PeerTransfersApi->getPeertransfersToken: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **token** | **string**| Unique identifier of the peer transfer. |

### Return type

[**\OpenAPI\Client\Model\PeerTransferResponse**](../Model/PeerTransferResponse.md)

### Authorization

[mqAppAndAccessToken](../../README.md#mqAppAndAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getPeertransfersUserUserorbusinesstoken()`

```php
getPeertransfersUserUserorbusinesstoken($user_or_business_token, $count, $start_index, $fields): \OpenAPI\Client\Model\PeerTransferResponse
```

List peer transfers by account holder

Use this endpoint to list peer transfers sent or received by a particular account holder. Include a user or business token as a path parameter to identify the account holder whose transfers you want to list.  This endpoint supports <</core-api/field-filtering, field filtering>> and <</core-api/sorting-and-pagination, pagination>>.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: mqAppAndAccessToken
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\PeerTransfersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$user_or_business_token = 'user_or_business_token_example'; // string | Existing user or business token.  Send a `GET` request to `/users` to retrieve user tokens or to `/businesses` to retrieve business tokens.
$count = 25; // int | Number of peer transfer resources to retrieve.
$start_index = 0; // int | Sort order index of the first resource in the returned array.
$fields = 'fields_example'; // string | Comma-delimited list of fields to return (`field_1,field_2`, and so on). Leave blank to return all fields.

try {
    $result = $apiInstance->getPeertransfersUserUserorbusinesstoken($user_or_business_token, $count, $start_index, $fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PeerTransfersApi->getPeertransfersUserUserorbusinesstoken: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **user_or_business_token** | **string**| Existing user or business token.  Send a &#x60;GET&#x60; request to &#x60;/users&#x60; to retrieve user tokens or to &#x60;/businesses&#x60; to retrieve business tokens. |
 **count** | **int**| Number of peer transfer resources to retrieve. | [optional] [default to 25]
 **start_index** | **int**| Sort order index of the first resource in the returned array. | [optional] [default to 0]
 **fields** | **string**| Comma-delimited list of fields to return (&#x60;field_1,field_2&#x60;, and so on). Leave blank to return all fields. | [optional]

### Return type

[**\OpenAPI\Client\Model\PeerTransferResponse**](../Model/PeerTransferResponse.md)

### Authorization

[mqAppAndAccessToken](../../README.md#mqAppAndAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getPeertransfersUserUserorbusinesstokenRecipient()`

```php
getPeertransfersUserUserorbusinesstokenRecipient($user_or_business_token, $count, $start_index, $fields): \OpenAPI\Client\Model\PeerTransferResponse
```

List received peer transfers

Use this endpoint to list peer transfers sent by an account holder. Include a user or business token as a path parameter to identify the recipient.  This endpoint supports <</core-api/field-filtering, field filtering>> and <</core-api/sorting-and-pagination, pagination>>.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: mqAppAndAccessToken
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\PeerTransfersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$user_or_business_token = 'user_or_business_token_example'; // string | Existing user or business token.  Send a `GET` request to `/users` to retrieve user tokens or to `/businesses` to retrieve business tokens.
$count = 25; // int | Number of peer transfer resources to retrieve.
$start_index = 0; // int | Sort order index of the first resource in the returned array.
$fields = 'fields_example'; // string | Comma-delimited list of fields to return (`field_1,field_2`, and so on). Leave blank to return all fields.

try {
    $result = $apiInstance->getPeertransfersUserUserorbusinesstokenRecipient($user_or_business_token, $count, $start_index, $fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PeerTransfersApi->getPeertransfersUserUserorbusinesstokenRecipient: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **user_or_business_token** | **string**| Existing user or business token.  Send a &#x60;GET&#x60; request to &#x60;/users&#x60; to retrieve user tokens or to &#x60;/businesses&#x60; to retrieve business tokens. |
 **count** | **int**| Number of peer transfer resources to retrieve. | [optional] [default to 25]
 **start_index** | **int**| Sort order index of the first resource in the returned array. | [optional] [default to 0]
 **fields** | **string**| Comma-delimited list of fields to return (&#x60;field_1,field_2&#x60;, and so on). Leave blank to return all fields. | [optional]

### Return type

[**\OpenAPI\Client\Model\PeerTransferResponse**](../Model/PeerTransferResponse.md)

### Authorization

[mqAppAndAccessToken](../../README.md#mqAppAndAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getPeertransfersUserUserorbusinesstokenSender()`

```php
getPeertransfersUserUserorbusinesstokenSender($user_or_business_token, $count, $start_index, $fields): \OpenAPI\Client\Model\PeerTransferResponse
```

List sent peer transfers

Use this endpoint to list peer transfers sent by an account holder. Include a user or business token as a path parameter to identify the sender.  This endpoint supports <</core-api/field-filtering, field filtering>> and <</core-api/sorting-and-pagination, pagination>>.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: mqAppAndAccessToken
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\PeerTransfersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$user_or_business_token = 'user_or_business_token_example'; // string | Existing user or business token.  Send a `GET` request to `/users` to retrieve user tokens or to `/businesses` to retrieve business tokens.
$count = 25; // int | Number of peer transfer resources to retrieve.
$start_index = 0; // int | Sort order index of the first resource in the returned array.
$fields = 'fields_example'; // string | Comma-delimited list of fields to return (`field_1,field_2`, and so on). Leave blank to return all fields.

try {
    $result = $apiInstance->getPeertransfersUserUserorbusinesstokenSender($user_or_business_token, $count, $start_index, $fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PeerTransfersApi->getPeertransfersUserUserorbusinesstokenSender: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **user_or_business_token** | **string**| Existing user or business token.  Send a &#x60;GET&#x60; request to &#x60;/users&#x60; to retrieve user tokens or to &#x60;/businesses&#x60; to retrieve business tokens. |
 **count** | **int**| Number of peer transfer resources to retrieve. | [optional] [default to 25]
 **start_index** | **int**| Sort order index of the first resource in the returned array. | [optional] [default to 0]
 **fields** | **string**| Comma-delimited list of fields to return (&#x60;field_1,field_2&#x60;, and so on). Leave blank to return all fields. | [optional]

### Return type

[**\OpenAPI\Client\Model\PeerTransferResponse**](../Model/PeerTransferResponse.md)

### Authorization

[mqAppAndAccessToken](../../README.md#mqAppAndAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postPeertransfers()`

```php
postPeertransfers($peer_transfer_request): \OpenAPI\Client\Model\PeerTransferResponse
```

Create peer transfer

Use this endpoint to request a peer transfer. Add the source details to the body of the request in link:http://www.json.org/[JSON, window=\"_blank\"] format.  When creating a peer transfer request, you must pass in both a token to identify the transfer sender (either `sender_user_token` or `sender_business_token`) and a token to identify the transfer recipient (either `recipient_user_token` or `recipient_business_token`). The sender and recipient objects must already exist.  [NOTE] This feature is disabled by default and requires activation by Marqeta.   +   + This feature enables you to transfer or reallocate funds where the `sender_*\\_token` and the `recipient_*_token` belong to the same program. It does not allow you to transfer or reallocate funds between different programs. Contact your Marqeta representative for more information.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: mqAppAndAccessToken
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\PeerTransfersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$peer_transfer_request = {"amount":50.0,"currency_code":"USD","recipient_user_token":"my_user_01_account_2","sender_user_token":"my_user_01","token":"my_peertransfer_01"}; // \OpenAPI\Client\Model\PeerTransferRequest

try {
    $result = $apiInstance->postPeertransfers($peer_transfer_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PeerTransfersApi->postPeertransfers: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **peer_transfer_request** | [**\OpenAPI\Client\Model\PeerTransferRequest**](../Model/PeerTransferRequest.md)|  | [optional]

### Return type

[**\OpenAPI\Client\Model\PeerTransferResponse**](../Model/PeerTransferResponse.md)

### Authorization

[mqAppAndAccessToken](../../README.md#mqAppAndAccessToken)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
