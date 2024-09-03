# OpenAPI\Client\TransactionsApi

All URIs are relative to /v3.

Method | HTTP request | Description
------------- | ------------- | -------------
[**getTransactions()**](TransactionsApi.md#getTransactions) | **GET** /transactions | List transactions
[**getTransactionsFundingsourceFundingsourcetoken()**](TransactionsApi.md#getTransactionsFundingsourceFundingsourcetoken) | **GET** /transactions/fundingsource/{funding_source_token} | List transactions for a funding account
[**getTransactionsToken()**](TransactionsApi.md#getTransactionsToken) | **GET** /transactions/{token} | Retrieve transaction
[**getTransactionsTokenRelated()**](TransactionsApi.md#getTransactionsTokenRelated) | **GET** /transactions/{token}/related | List related transactions


## `getTransactions()`

```php
getTransactions($count, $start_index, $fields, $sort_by, $start_date, $end_date, $type, $user_token, $business_token, $acting_user_token, $card_token, $state, $version, $verbose, $start_identifier): \OpenAPI\Client\Model\TransactionModelListResponse
```

List transactions

List all transactions.  By default, this endpoint returns transactions conducted within the last 30 days. To return transactions older than 30 days, you must include the `start_date` and `end_date` query parameters in your request.  By default, `GET /transactions` returns transactions having either `PENDING` or `COMPLETION` states.  This endpoint supports <</core-api/field-filtering, field filtering>> and <</core-api/sorting-and-pagination, pagination>>.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: mqAppAndAccessToken
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\TransactionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$count = 10; // int | The number of transactions to retrieve.
$start_index = 0; // int | The sort order index of the first resource in the returned array.
$fields = 'fields_example'; // string | Comma-delimited list of fields to return (`field_1,field_2`, and so on). Leave blank to return all fields.
$sort_by = '-user_transaction_time'; // string | Field on which to sort. Use any field in the resource model, or one of the system fields `lastModifiedTime` or `createdTime`. Prefix the field name with a hyphen (`-`) to sort in descending order. Omit the hyphen to sort in ascending order.
$start_date = 'start_date_example'; // string | The starting date (or date-time) of a date range from which to return transactions. To return transactions for a single day, enter the same date in both the `start_date` and `end_date` fields.
$end_date = 'end_date_example'; // string | The ending date (or date-time) of a date range from which to return transactions. To return transactions for a single day, enter the same date in both the `end_date` and `start_date` fields.
$type = 'type_example'; // string | Comma-delimited list of transaction types to include.
$user_token = 'user_token_example'; // string | The unique identifier of the user account holder.
$business_token = 'business_token_example'; // string | The unique identifier of the business account holder.
$acting_user_token = 'acting_user_token_example'; // string | The unique identifier of the acting user.
$card_token = 'card_token_example'; // string | The unique identifier of the card.
$state = 'PENDING,COMPLETION'; // string | Comma-delimited list of transaction states to display.
$version = 'version_example'; // string | Specifies the API version for the request.
$verbose = True; // bool | If `true`, the query returns additional information for diagnostic purposes.
$start_identifier = 56; // int | Start identifier

try {
    $result = $apiInstance->getTransactions($count, $start_index, $fields, $sort_by, $start_date, $end_date, $type, $user_token, $business_token, $acting_user_token, $card_token, $state, $version, $verbose, $start_identifier);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TransactionsApi->getTransactions: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **count** | **int**| The number of transactions to retrieve. | [optional] [default to 10]
 **start_index** | **int**| The sort order index of the first resource in the returned array. | [optional] [default to 0]
 **fields** | **string**| Comma-delimited list of fields to return (&#x60;field_1,field_2&#x60;, and so on). Leave blank to return all fields. | [optional]
 **sort_by** | **string**| Field on which to sort. Use any field in the resource model, or one of the system fields &#x60;lastModifiedTime&#x60; or &#x60;createdTime&#x60;. Prefix the field name with a hyphen (&#x60;-&#x60;) to sort in descending order. Omit the hyphen to sort in ascending order. | [optional] [default to &#39;-user_transaction_time&#39;]
 **start_date** | **string**| The starting date (or date-time) of a date range from which to return transactions. To return transactions for a single day, enter the same date in both the &#x60;start_date&#x60; and &#x60;end_date&#x60; fields. | [optional]
 **end_date** | **string**| The ending date (or date-time) of a date range from which to return transactions. To return transactions for a single day, enter the same date in both the &#x60;end_date&#x60; and &#x60;start_date&#x60; fields. | [optional]
 **type** | **string**| Comma-delimited list of transaction types to include. | [optional]
 **user_token** | **string**| The unique identifier of the user account holder. | [optional]
 **business_token** | **string**| The unique identifier of the business account holder. | [optional]
 **acting_user_token** | **string**| The unique identifier of the acting user. | [optional]
 **card_token** | **string**| The unique identifier of the card. | [optional]
 **state** | **string**| Comma-delimited list of transaction states to display. | [optional] [default to &#39;PENDING,COMPLETION&#39;]
 **version** | **string**| Specifies the API version for the request. | [optional]
 **verbose** | **bool**| If &#x60;true&#x60;, the query returns additional information for diagnostic purposes. | [optional]
 **start_identifier** | **int**| Start identifier | [optional]

### Return type

[**\OpenAPI\Client\Model\TransactionModelListResponse**](../Model/TransactionModelListResponse.md)

### Authorization

[mqAppAndAccessToken](../../README.md#mqAppAndAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getTransactionsFundingsourceFundingsourcetoken()`

```php
getTransactionsFundingsourceFundingsourcetoken($funding_source_token, $count, $start_index, $fields, $sort_by, $start_date, $end_date, $type, $polarity, $version, $verbose): \OpenAPI\Client\Model\TransactionModelListResponse
```

List transactions for a funding account

List transactions for a specific funding source.  By default, this endpoint returns transactions conducted within the last 30 days. To return transactions older than 30 days, you must include the `start_date` and `end_date` query parameters in your request.  By default, `GET /transactions/fundingsource/{funding_source_token}` returns transactions having either `PENDING` or `COMPLETION` states.  This endpoint supports <</core-api/field-filtering, field filtering>> and <</core-api/sorting-and-pagination, pagination>>.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: mqAppAndAccessToken
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\TransactionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$funding_source_token = 'funding_source_token_example'; // string | The unique identifier of the funding account.
$count = 10; // int | The number of transactions to retrieve.
$start_index = 0; // int | The sort order index of the first resource in the returned array.
$fields = 'fields_example'; // string | Comma-delimited list of fields to return (`field_1,field_2`, and so on). Leave blank to return all fields.
$sort_by = '-user_transaction_time'; // string | Field on which to sort. Use any field in the resource model, or one of the system fields `lastModifiedTime` or `createdTime`. Prefix the field name with a hyphen (`-`) to sort in descending order. Omit the hyphen to sort in ascending order.
$start_date = 'start_date_example'; // string | The starting date (or date-time) of a date range from which to return transactions. To return transactions for a single day, enter the same date in both the `start_date` and `end_date` fields.
$end_date = 'end_date_example'; // string | The ending date (or date-time) of a date range from which to return transactions. To return transactions for a single day, enter the same date in both the `end_date` and `start_date` fields.
$type = 'type_example'; // string | Comma-delimited list of transaction types to include.
$polarity = 'polarity_example'; // string | Specifies whether to return credit or debit transactions.
$version = 'version_example'; // string | Specifies the API version for the request.
$verbose = True; // bool | If `true`, the query returns additional information for diagnostic purposes.

try {
    $result = $apiInstance->getTransactionsFundingsourceFundingsourcetoken($funding_source_token, $count, $start_index, $fields, $sort_by, $start_date, $end_date, $type, $polarity, $version, $verbose);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TransactionsApi->getTransactionsFundingsourceFundingsourcetoken: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **funding_source_token** | **string**| The unique identifier of the funding account. |
 **count** | **int**| The number of transactions to retrieve. | [optional] [default to 10]
 **start_index** | **int**| The sort order index of the first resource in the returned array. | [optional] [default to 0]
 **fields** | **string**| Comma-delimited list of fields to return (&#x60;field_1,field_2&#x60;, and so on). Leave blank to return all fields. | [optional]
 **sort_by** | **string**| Field on which to sort. Use any field in the resource model, or one of the system fields &#x60;lastModifiedTime&#x60; or &#x60;createdTime&#x60;. Prefix the field name with a hyphen (&#x60;-&#x60;) to sort in descending order. Omit the hyphen to sort in ascending order. | [optional] [default to &#39;-user_transaction_time&#39;]
 **start_date** | **string**| The starting date (or date-time) of a date range from which to return transactions. To return transactions for a single day, enter the same date in both the &#x60;start_date&#x60; and &#x60;end_date&#x60; fields. | [optional]
 **end_date** | **string**| The ending date (or date-time) of a date range from which to return transactions. To return transactions for a single day, enter the same date in both the &#x60;end_date&#x60; and &#x60;start_date&#x60; fields. | [optional]
 **type** | **string**| Comma-delimited list of transaction types to include. | [optional]
 **polarity** | **string**| Specifies whether to return credit or debit transactions. | [optional]
 **version** | **string**| Specifies the API version for the request. | [optional]
 **verbose** | **bool**| If &#x60;true&#x60;, the query returns additional information for diagnostic purposes. | [optional]

### Return type

[**\OpenAPI\Client\Model\TransactionModelListResponse**](../Model/TransactionModelListResponse.md)

### Authorization

[mqAppAndAccessToken](../../README.md#mqAppAndAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getTransactionsToken()`

```php
getTransactionsToken($token, $fields, $version, $verbose): \OpenAPI\Client\Model\TransactionModel
```

Retrieve transaction

Retrieve a specific transaction. Include the `token` path parameter to identify the transaction.  [NOTE] Transactions are not available in real time via this endpoint, and typically appear after 30 seconds. On occasion, a transaction may require up to four hours to appear.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: mqAppAndAccessToken
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\TransactionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$token = 'token_example'; // string | The unique identifier of the transaction.
$fields = 'fields_example'; // string | Comma-delimited list of fields to return (`field_1,field_2`, and so on). Leave blank to return all fields.
$version = 'version_example'; // string | Specifies the API version for the request.
$verbose = True; // bool | If `true`, the query returns additional information for diagnostic purposes.

try {
    $result = $apiInstance->getTransactionsToken($token, $fields, $version, $verbose);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TransactionsApi->getTransactionsToken: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **token** | **string**| The unique identifier of the transaction. |
 **fields** | **string**| Comma-delimited list of fields to return (&#x60;field_1,field_2&#x60;, and so on). Leave blank to return all fields. | [optional]
 **version** | **string**| Specifies the API version for the request. | [optional]
 **verbose** | **bool**| If &#x60;true&#x60;, the query returns additional information for diagnostic purposes. | [optional]

### Return type

[**\OpenAPI\Client\Model\TransactionModel**](../Model/TransactionModel.md)

### Authorization

[mqAppAndAccessToken](../../README.md#mqAppAndAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getTransactionsTokenRelated()`

```php
getTransactionsTokenRelated($token, $count, $start_index, $fields, $sort_by, $start_date, $end_date, $type, $state, $version, $verbose): \OpenAPI\Client\Model\TransactionModelListResponse
```

List related transactions

List all transactions related to the specified transaction.  By default, this endpoint returns transactions conducted within the last 30 days. To return transactions older than 30 days, you must include the `start_date` and `end_date` query parameters in your request.  By default, this endpoint returns transactions of any state. To return transactions in specific states, you must include the `state` query parameter in your request.  This endpoint supports <</core-api/field-filtering, field filtering>> and <</core-api/sorting-and-pagination, pagination>>.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: mqAppAndAccessToken
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\TransactionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$token = 'token_example'; // string | The unique identifier of the transaction.
$count = 10; // int | The number of transactions to retrieve.
$start_index = 0; // int | The sort order index of the first resource in the returned array.
$fields = 'fields_example'; // string | Comma-delimited list of fields to return (`field_1,field_2`, and so on). Leave blank to return all fields.
$sort_by = '-user_transaction_time'; // string | Field on which to sort. Use any field in the resource model, or one of the system fields `lastModifiedTime` or `createdTime`. Prefix the field name with a hyphen (`-`) to sort in descending order. Omit the hyphen to sort in ascending order.
$start_date = 'start_date_example'; // string | The starting date (or date-time) of a date range from which to return transactions. To return transactions for a single day, enter the same date in both the `start_date` and `end_date` fields.
$end_date = 'end_date_example'; // string | The ending date (or date-time) of a date range from which to return transactions. To return transactions for a single day, enter the same date in both the `end_date` and `start_date` fields.
$type = 'type_example'; // string | Comma-delimited list of transaction types to include.
$state = 'ALL'; // string | Comma-delimited list of transaction states to display.
$version = 'version_example'; // string | Specifies the API version for the request.
$verbose = True; // bool | If `true`, the query returns additional information for diagnostic purposes.

try {
    $result = $apiInstance->getTransactionsTokenRelated($token, $count, $start_index, $fields, $sort_by, $start_date, $end_date, $type, $state, $version, $verbose);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TransactionsApi->getTransactionsTokenRelated: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **token** | **string**| The unique identifier of the transaction. |
 **count** | **int**| The number of transactions to retrieve. | [optional] [default to 10]
 **start_index** | **int**| The sort order index of the first resource in the returned array. | [optional] [default to 0]
 **fields** | **string**| Comma-delimited list of fields to return (&#x60;field_1,field_2&#x60;, and so on). Leave blank to return all fields. | [optional]
 **sort_by** | **string**| Field on which to sort. Use any field in the resource model, or one of the system fields &#x60;lastModifiedTime&#x60; or &#x60;createdTime&#x60;. Prefix the field name with a hyphen (&#x60;-&#x60;) to sort in descending order. Omit the hyphen to sort in ascending order. | [optional] [default to &#39;-user_transaction_time&#39;]
 **start_date** | **string**| The starting date (or date-time) of a date range from which to return transactions. To return transactions for a single day, enter the same date in both the &#x60;start_date&#x60; and &#x60;end_date&#x60; fields. | [optional]
 **end_date** | **string**| The ending date (or date-time) of a date range from which to return transactions. To return transactions for a single day, enter the same date in both the &#x60;end_date&#x60; and &#x60;start_date&#x60; fields. | [optional]
 **type** | **string**| Comma-delimited list of transaction types to include. | [optional]
 **state** | **string**| Comma-delimited list of transaction states to display. | [optional] [default to &#39;ALL&#39;]
 **version** | **string**| Specifies the API version for the request. | [optional]
 **verbose** | **bool**| If &#x60;true&#x60;, the query returns additional information for diagnostic purposes. | [optional]

### Return type

[**\OpenAPI\Client\Model\TransactionModelListResponse**](../Model/TransactionModelListResponse.md)

### Authorization

[mqAppAndAccessToken](../../README.md#mqAppAndAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
