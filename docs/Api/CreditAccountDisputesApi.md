# OpenAPI\Client\CreditAccountDisputesApi

All URIs are relative to /v3.

Method | HTTP request | Description
------------- | ------------- | -------------
[**createDisputeForAccount()**](CreditAccountDisputesApi.md#createDisputeForAccount) | **POST** /accounts/{account_token}/disputes | Create account dispute
[**getDisputesByAccount()**](CreditAccountDisputesApi.md#getDisputesByAccount) | **GET** /accounts/{account_token}/disputes | List account disputes
[**retrieveDispute()**](CreditAccountDisputesApi.md#retrieveDispute) | **GET** /accounts/{account_token}/disputes/{dispute_token} | Retrieve account dispute
[**transitionDispute()**](CreditAccountDisputesApi.md#transitionDispute) | **POST** /accounts/{account_token}/disputes/{dispute_token}/transitions | Update account dispute


## `createDisputeForAccount()`

```php
createDisputeForAccount($account_token, $dispute_create_req): \OpenAPI\Client\Model\DisputeResponse
```

Create account dispute

Create a dispute of a journal entry on a credit account.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: mqAppAndAccessToken
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\CreditAccountDisputesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account_token = 'account_token_example'; // string | Unique identifier of the credit account for which to create a dispute.  Send a `GET` request to `/credit/accounts` to retrieve existing credit account tokens.
$dispute_create_req = {"amount":500,"category":"FRAUD","ledger_entry_token":"journal_entry_token1222","token":"dispute_token_1234"}; // \OpenAPI\Client\Model\DisputeCreateReq

try {
    $result = $apiInstance->createDisputeForAccount($account_token, $dispute_create_req);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CreditAccountDisputesApi->createDisputeForAccount: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **account_token** | **string**| Unique identifier of the credit account for which to create a dispute.  Send a &#x60;GET&#x60; request to &#x60;/credit/accounts&#x60; to retrieve existing credit account tokens. |
 **dispute_create_req** | [**\OpenAPI\Client\Model\DisputeCreateReq**](../Model/DisputeCreateReq.md)|  |

### Return type

[**\OpenAPI\Client\Model\DisputeResponse**](../Model/DisputeResponse.md)

### Authorization

[mqAppAndAccessToken](../../README.md#mqAppAndAccessToken)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getDisputesByAccount()`

```php
getDisputesByAccount($account_token, $count, $start_index, $sort_by): \OpenAPI\Client\Model\DisputeResponsePage
```

List account disputes

Retrieve an array of disputes on a credit account.  This endpoint supports <</core-api/sorting-and-pagination, sorting and pagination>>.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: mqAppAndAccessToken
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\CreditAccountDisputesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account_token = 'account_token_example'; // string | Unique identifier of the credit account for which to retrieve the disputes.  Send a `GET` request to `/credit/accounts` to retrieve existing credit account tokens.
$count = 5; // int | Number of disputes resources to retrieve.
$start_index = 0; // int | Sort order index of the first resource in the returned array.
$sort_by = '-lastModifiedTime'; // string | Field on which to sort. Prefix the field name with a hyphen (`-`) to sort in descending order. Omit the hyphen to sort in ascending order.  *NOTE:* You must sort using system field names such as `lastModifiedTime`, and not by the field names appearing in response bodies such as `last_modified_time`.

try {
    $result = $apiInstance->getDisputesByAccount($account_token, $count, $start_index, $sort_by);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CreditAccountDisputesApi->getDisputesByAccount: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **account_token** | **string**| Unique identifier of the credit account for which to retrieve the disputes.  Send a &#x60;GET&#x60; request to &#x60;/credit/accounts&#x60; to retrieve existing credit account tokens. |
 **count** | **int**| Number of disputes resources to retrieve. | [optional] [default to 5]
 **start_index** | **int**| Sort order index of the first resource in the returned array. | [optional] [default to 0]
 **sort_by** | **string**| Field on which to sort. Prefix the field name with a hyphen (&#x60;-&#x60;) to sort in descending order. Omit the hyphen to sort in ascending order.  *NOTE:* You must sort using system field names such as &#x60;lastModifiedTime&#x60;, and not by the field names appearing in response bodies such as &#x60;last_modified_time&#x60;. | [optional] [default to &#39;-lastModifiedTime&#39;]

### Return type

[**\OpenAPI\Client\Model\DisputeResponsePage**](../Model/DisputeResponsePage.md)

### Authorization

[mqAppAndAccessToken](../../README.md#mqAppAndAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `retrieveDispute()`

```php
retrieveDispute($account_token, $dispute_token): \OpenAPI\Client\Model\DisputeResponse
```

Retrieve account dispute

Retrieve a dispute from a credit account.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: mqAppAndAccessToken
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\CreditAccountDisputesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account_token = 'account_token_example'; // string | Unique identifier of the credit account from which to retrieve a dispute.  Send a `GET` request to `/credit/accounts` to retrieve existing credit account tokens.
$dispute_token = 'dispute_token_example'; // string | Unique identifier of the dispute to retrieve.  Send a `GET` request to `/credit/accounts/{account_token}/disputes` to retrieve existing dispute tokens.

try {
    $result = $apiInstance->retrieveDispute($account_token, $dispute_token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CreditAccountDisputesApi->retrieveDispute: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **account_token** | **string**| Unique identifier of the credit account from which to retrieve a dispute.  Send a &#x60;GET&#x60; request to &#x60;/credit/accounts&#x60; to retrieve existing credit account tokens. |
 **dispute_token** | **string**| Unique identifier of the dispute to retrieve.  Send a &#x60;GET&#x60; request to &#x60;/credit/accounts/{account_token}/disputes&#x60; to retrieve existing dispute tokens. |

### Return type

[**\OpenAPI\Client\Model\DisputeResponse**](../Model/DisputeResponse.md)

### Authorization

[mqAppAndAccessToken](../../README.md#mqAppAndAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `transitionDispute()`

```php
transitionDispute($account_token, $dispute_token, $dispute_transition_req): \OpenAPI\Client\Model\DisputeTransitionResponse
```

Update account dispute

Update the amount or status of a dispute on a credit account.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: mqAppAndAccessToken
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\CreditAccountDisputesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account_token = 'account_token_example'; // string | Unique identifier of the credit account from which to update a dispute.  Send a `GET` request to `/credit/accounts` to retrieve existing credit account tokens.
$dispute_token = 'dispute_token_example'; // string | Unique identifier of the dispute to update.  Send a `GET` request to `/credit/accounts/{account_token}/disputes` to retrieve existing credit account tokens.
$dispute_transition_req = {"amount":500,"status":"AH_WON"}; // \OpenAPI\Client\Model\DisputeTransitionReq

try {
    $result = $apiInstance->transitionDispute($account_token, $dispute_token, $dispute_transition_req);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CreditAccountDisputesApi->transitionDispute: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **account_token** | **string**| Unique identifier of the credit account from which to update a dispute.  Send a &#x60;GET&#x60; request to &#x60;/credit/accounts&#x60; to retrieve existing credit account tokens. |
 **dispute_token** | **string**| Unique identifier of the dispute to update.  Send a &#x60;GET&#x60; request to &#x60;/credit/accounts/{account_token}/disputes&#x60; to retrieve existing credit account tokens. |
 **dispute_transition_req** | [**\OpenAPI\Client\Model\DisputeTransitionReq**](../Model/DisputeTransitionReq.md)|  |

### Return type

[**\OpenAPI\Client\Model\DisputeTransitionResponse**](../Model/DisputeTransitionResponse.md)

### Authorization

[mqAppAndAccessToken](../../README.md#mqAppAndAccessToken)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
