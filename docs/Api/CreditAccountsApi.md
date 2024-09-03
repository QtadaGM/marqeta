# OpenAPI\Client\CreditAccountsApi

All URIs are relative to /v3.

Method | HTTP request | Description
------------- | ------------- | -------------
[**createCreditAccount()**](CreditAccountsApi.md#createCreditAccount) | **POST** /accounts | Create account
[**listAccounts()**](CreditAccountsApi.md#listAccounts) | **GET** /accounts | List accounts
[**retrieveAccount()**](CreditAccountsApi.md#retrieveAccount) | **GET** /accounts/{account_token} | Retrieve account
[**updateAccount()**](CreditAccountsApi.md#updateAccount) | **PUT** /accounts/{account_token} | Update account


## `createCreditAccount()`

```php
createCreditAccount($account_create_req): \OpenAPI\Client\Model\AccountResponse
```

Create account

Create a new credit account.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: mqAppAndAccessToken
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\CreditAccountsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account_create_req = {"config":{"billing_cycle_day":1,"fees":[{"schedule":[{"method":"FLAT","value":6}],"type":"LATE_PAYMENT_FEE"},{"schedule":[{"method":"FLAT","value":10}],"type":"RETURNED_PAYMENT_FEE"},{"schedule":[{"method":"PERCENTAGE","value":12.5}],"type":"FOREIGN_TRANSACTION_FEE"}]},"credit_limit":1500,"credit_product_token":"my_credit_product1234","description":"Consumer credit account for Jack Smith","external_offer_id":"my_ext_offer_12","name":"Jack Smith's account","token":"my_account_token_12","usages":[{"aprs":[{"schedule":[{"value":12}],"type":"GO_TO"}],"type":"PURCHASE"}],"user_token":"user1234"}; // \OpenAPI\Client\Model\AccountCreateReq

try {
    $result = $apiInstance->createCreditAccount($account_create_req);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CreditAccountsApi->createCreditAccount: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **account_create_req** | [**\OpenAPI\Client\Model\AccountCreateReq**](../Model/AccountCreateReq.md)|  |

### Return type

[**\OpenAPI\Client\Model\AccountResponse**](../Model/AccountResponse.md)

### Authorization

[mqAppAndAccessToken](../../README.md#mqAppAndAccessToken)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listAccounts()`

```php
listAccounts($card_token, $count, $start_index, $sort_by): \OpenAPI\Client\Model\AccountsPage
```

List accounts

Retrieve an array of credit accounts.  This endpoint supports <</core-api/sorting-and-pagination, sorting and pagination>>.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: mqAppAndAccessToken
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\CreditAccountsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$card_token = 'card_token_example'; // string | Unique identifier of the credit card associated with the account.
$count = 5; // int | Number of credit account resources to retrieve.
$start_index = 0; // int | Sort order index of the first resource in the returned array.
$sort_by = '-lastModifiedTime'; // string | Field on which to sort. Prefix the field name with a hyphen (`-`) to sort in descending order. Omit the hyphen to sort in ascending order.  *NOTE:* You must sort using system field names such as `lastModifiedTime`, and not by the field names appearing in response bodies such as `last_modified_time`.

try {
    $result = $apiInstance->listAccounts($card_token, $count, $start_index, $sort_by);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CreditAccountsApi->listAccounts: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **card_token** | **string**| Unique identifier of the credit card associated with the account. | [optional]
 **count** | **int**| Number of credit account resources to retrieve. | [optional] [default to 5]
 **start_index** | **int**| Sort order index of the first resource in the returned array. | [optional] [default to 0]
 **sort_by** | **string**| Field on which to sort. Prefix the field name with a hyphen (&#x60;-&#x60;) to sort in descending order. Omit the hyphen to sort in ascending order.  *NOTE:* You must sort using system field names such as &#x60;lastModifiedTime&#x60;, and not by the field names appearing in response bodies such as &#x60;last_modified_time&#x60;. | [optional] [default to &#39;-lastModifiedTime&#39;]

### Return type

[**\OpenAPI\Client\Model\AccountsPage**](../Model/AccountsPage.md)

### Authorization

[mqAppAndAccessToken](../../README.md#mqAppAndAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `retrieveAccount()`

```php
retrieveAccount($account_token, $effective_fee_schedule_only): \OpenAPI\Client\Model\AccountResponse
```

Retrieve account

Retrieve a credit account.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: mqAppAndAccessToken
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\CreditAccountsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account_token = 'account_token_example'; // string | Unique identifier of the credit account to retrieve.  Send a `GET` request to `/credit/accounts` to retrieve existing credit account tokens.
$effective_fee_schedule_only = True; // bool | Display the effective fee schedule only.

try {
    $result = $apiInstance->retrieveAccount($account_token, $effective_fee_schedule_only);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CreditAccountsApi->retrieveAccount: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **account_token** | **string**| Unique identifier of the credit account to retrieve.  Send a &#x60;GET&#x60; request to &#x60;/credit/accounts&#x60; to retrieve existing credit account tokens. |
 **effective_fee_schedule_only** | **bool**| Display the effective fee schedule only. | [optional]

### Return type

[**\OpenAPI\Client\Model\AccountResponse**](../Model/AccountResponse.md)

### Authorization

[mqAppAndAccessToken](../../README.md#mqAppAndAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateAccount()`

```php
updateAccount($account_token, $account_update_req): \OpenAPI\Client\Model\AccountResponse
```

Update account

Update a credit account.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: mqAppAndAccessToken
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\CreditAccountsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account_token = 'account_token_example'; // string | Unique identifier of the credit account to update.  Send a `GET` request to `/credit/accounts` to retrieve existing credit account tokens.
$account_update_req = {"config":{"payment_holds":{"ach_hold_days":3,"check_hold_days":5}},"credit_limit":{"value":6000},"latest_statement_cycle_type":"TRANSACTING"}; // \OpenAPI\Client\Model\AccountUpdateReq

try {
    $result = $apiInstance->updateAccount($account_token, $account_update_req);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CreditAccountsApi->updateAccount: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **account_token** | **string**| Unique identifier of the credit account to update.  Send a &#x60;GET&#x60; request to &#x60;/credit/accounts&#x60; to retrieve existing credit account tokens. |
 **account_update_req** | [**\OpenAPI\Client\Model\AccountUpdateReq**](../Model/AccountUpdateReq.md)|  |

### Return type

[**\OpenAPI\Client\Model\AccountResponse**](../Model/AccountResponse.md)

### Authorization

[mqAppAndAccessToken](../../README.md#mqAppAndAccessToken)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
