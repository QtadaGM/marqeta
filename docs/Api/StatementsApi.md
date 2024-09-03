# OpenAPI\Client\StatementsApi

All URIs are relative to /v3.

Method | HTTP request | Description
------------- | ------------- | -------------
[**getPaymentReminder()**](StatementsApi.md#getPaymentReminder) | **GET** /accounts/{account_token}/statements/{statement_summary_token}/paymentreminders/{token} | Get payment reminder
[**getPaymentRemindersByStatementSummary()**](StatementsApi.md#getPaymentRemindersByStatementSummary) | **GET** /accounts/{account_token}/statements/{statement_summary_token}/paymentreminders/ | List payment reminders by statement summary
[**getStatementFilesByAccount()**](StatementsApi.md#getStatementFilesByAccount) | **GET** /accounts/{account_token}/statements/files | List files for an account
[**getStatementSummariesByAccount()**](StatementsApi.md#getStatementSummariesByAccount) | **GET** /accounts/{account_token}/statements | List account statement summaries
[**listStatementJournalEntries()**](StatementsApi.md#listStatementJournalEntries) | **GET** /accounts/{account_token}/statements/{statement_summary_token}/journalentries | List account statement journal entries
[**listStatementLedgerEntries()**](StatementsApi.md#listStatementLedgerEntries) | **GET** /accounts/{account_token}/statements/{statement_summary_token}/ledgerentries | List account statement ledger entries
[**resendWebhookEvent()**](StatementsApi.md#resendWebhookEvent) | **POST** /webhooks/{event_type}/{resource_token} | Resend credit event notification
[**retrieveStatementFiles()**](StatementsApi.md#retrieveStatementFiles) | **GET** /accounts/{account_token}/statements/{statement_summary_token}/files | List files for a statement summary
[**retrieveStatementInterestCharges()**](StatementsApi.md#retrieveStatementInterestCharges) | **GET** /accounts/{account_token}/statements/{statement_summary_token}/interestcharges | Retrieve account statement interest charges
[**retrieveStatementPaymentInfo()**](StatementsApi.md#retrieveStatementPaymentInfo) | **GET** /accounts/{account_token}/statements/{statement_summary_token}/paymentinfo | Retrieve account statement payment information
[**retrieveStatementReward()**](StatementsApi.md#retrieveStatementReward) | **GET** /accounts/{account_token}/statements/{statement_summary_token}/rewards | Retrieve account statement rewards
[**retrieveStatementSummary()**](StatementsApi.md#retrieveStatementSummary) | **GET** /accounts/{account_token}/statements/{statement_summary_token} | Retrieve account statement summary
[**retrieveYearToDateForStatementSummary()**](StatementsApi.md#retrieveYearToDateForStatementSummary) | **GET** /accounts/{account_token}/statements/{statement_summary_token}/yeartodate | Retrieve account statement year-to-date totals


## `getPaymentReminder()`

```php
getPaymentReminder($account_token, $statement_summary_token, $token): \OpenAPI\Client\Model\PaymentReminderResponse
```

Get payment reminder

Retrieve a single payment reminder on a specific statement summary

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: mqAppAndAccessToken
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\StatementsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account_token = 'account_token_example'; // string | Unique identifier of the credit account for which you want to retrieve the statement payment reminder. Send a `GET` request to `/credit/accounts` to retrieve existing credit account tokens.
$statement_summary_token = 'statement_summary_token_example'; // string | Unique identifier of the statement summary for which you want to retrieve the statement payment reminder. Send a `GET` request to `/credit/accounts/{token}/statements/` to retrieve existing statement summary tokens.
$token = 'token_example'; // string | Unique identifier of the payment reminder you want to retrieve. Send a `GET` request to `/credit/accounts/{account_token}/statements/{statement_summary_token}/paymentreminders/{token}` to retrieve existing payment reminder tokens.

try {
    $result = $apiInstance->getPaymentReminder($account_token, $statement_summary_token, $token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StatementsApi->getPaymentReminder: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **account_token** | **string**| Unique identifier of the credit account for which you want to retrieve the statement payment reminder. Send a &#x60;GET&#x60; request to &#x60;/credit/accounts&#x60; to retrieve existing credit account tokens. |
 **statement_summary_token** | **string**| Unique identifier of the statement summary for which you want to retrieve the statement payment reminder. Send a &#x60;GET&#x60; request to &#x60;/credit/accounts/{token}/statements/&#x60; to retrieve existing statement summary tokens. |
 **token** | **string**| Unique identifier of the payment reminder you want to retrieve. Send a &#x60;GET&#x60; request to &#x60;/credit/accounts/{account_token}/statements/{statement_summary_token}/paymentreminders/{token}&#x60; to retrieve existing payment reminder tokens. |

### Return type

[**\OpenAPI\Client\Model\PaymentReminderResponse**](../Model/PaymentReminderResponse.md)

### Authorization

[mqAppAndAccessToken](../../README.md#mqAppAndAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getPaymentRemindersByStatementSummary()`

```php
getPaymentRemindersByStatementSummary($account_token, $statement_summary_token, $count, $start_index, $sort_by): \OpenAPI\Client\Model\PaymentReminderPage
```

List payment reminders by statement summary

Retrieve an array of payment reminder details for a specific statement summary token.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: mqAppAndAccessToken
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\StatementsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account_token = 'account_token_example'; // string | Unique identifier of the credit account for which you want to retrieve the statement payment information. Send a `GET` request to `/credit/accounts` to retrieve existing credit account tokens.
$statement_summary_token = 'statement_summary_token_example'; // string | Unique identifier of the statement summary from which to retrieve the payment information. Send a `GET` request to `/credit/accounts/{token}/statements/` to retrieve existing statement summary tokens.
$count = 10; // int | Number of payment reminder resources to retrieve.
$start_index = 0; // int | Sort order index of the first resource in the returned array.
$sort_by = '-createdTime'; // string | Field on which to sort. Prefix the field name with a hyphen (`-`) to sort in descending order. Omit the hyphen to sort in ascending order. *NOTE:* You must sort using system field names such as `createdTime`, and not by the field names appearing in response bodies such as `created_time`.

try {
    $result = $apiInstance->getPaymentRemindersByStatementSummary($account_token, $statement_summary_token, $count, $start_index, $sort_by);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StatementsApi->getPaymentRemindersByStatementSummary: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **account_token** | **string**| Unique identifier of the credit account for which you want to retrieve the statement payment information. Send a &#x60;GET&#x60; request to &#x60;/credit/accounts&#x60; to retrieve existing credit account tokens. |
 **statement_summary_token** | **string**| Unique identifier of the statement summary from which to retrieve the payment information. Send a &#x60;GET&#x60; request to &#x60;/credit/accounts/{token}/statements/&#x60; to retrieve existing statement summary tokens. |
 **count** | **int**| Number of payment reminder resources to retrieve. | [optional] [default to 10]
 **start_index** | **int**| Sort order index of the first resource in the returned array. | [optional] [default to 0]
 **sort_by** | **string**| Field on which to sort. Prefix the field name with a hyphen (&#x60;-&#x60;) to sort in descending order. Omit the hyphen to sort in ascending order. *NOTE:* You must sort using system field names such as &#x60;createdTime&#x60;, and not by the field names appearing in response bodies such as &#x60;created_time&#x60;. | [optional] [default to &#39;-createdTime&#39;]

### Return type

[**\OpenAPI\Client\Model\PaymentReminderPage**](../Model/PaymentReminderPage.md)

### Authorization

[mqAppAndAccessToken](../../README.md#mqAppAndAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getStatementFilesByAccount()`

```php
getStatementFilesByAccount($account_token, $start_date, $end_date, $count, $start_index, $sort_by): \OpenAPI\Client\Model\StatementFilePage
```

List files for an account

Retrieve an array of statement files for a specific credit account.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: mqAppAndAccessToken
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\StatementsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account_token = 'account_token_example'; // string | Unique identifier of the credit account for which to retrieve statement files.  Send a `GET` request to `/credit/accounts` to retrieve existing credit account tokens.
$start_date = 2024-01-01T00:00Z; // \DateTime | Start date of the date range for which to return statement files.
$end_date = 2024-03-01T03:59:59Z; // \DateTime | End date of the date range for which to return statement files.
$count = 5; // int | Number of statement file resources to retrieve.
$start_index = 0; // int | Sort order index of the first resource in the returned array.
$sort_by = '-createdTime'; // string | Field on which to sort. Prefix the field name with a hyphen (`-`) to sort in descending order. Omit the hyphen to sort in ascending order.  *NOTE:* You must sort using system field names such as `createdTime`, and not by the field names appearing in response bodies such as `created_time`.

try {
    $result = $apiInstance->getStatementFilesByAccount($account_token, $start_date, $end_date, $count, $start_index, $sort_by);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StatementsApi->getStatementFilesByAccount: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **account_token** | **string**| Unique identifier of the credit account for which to retrieve statement files.  Send a &#x60;GET&#x60; request to &#x60;/credit/accounts&#x60; to retrieve existing credit account tokens. |
 **start_date** | **\DateTime**| Start date of the date range for which to return statement files. | [optional]
 **end_date** | **\DateTime**| End date of the date range for which to return statement files. | [optional]
 **count** | **int**| Number of statement file resources to retrieve. | [optional] [default to 5]
 **start_index** | **int**| Sort order index of the first resource in the returned array. | [optional] [default to 0]
 **sort_by** | **string**| Field on which to sort. Prefix the field name with a hyphen (&#x60;-&#x60;) to sort in descending order. Omit the hyphen to sort in ascending order.  *NOTE:* You must sort using system field names such as &#x60;createdTime&#x60;, and not by the field names appearing in response bodies such as &#x60;created_time&#x60;. | [optional] [default to &#39;-createdTime&#39;]

### Return type

[**\OpenAPI\Client\Model\StatementFilePage**](../Model/StatementFilePage.md)

### Authorization

[mqAppAndAccessToken](../../README.md#mqAppAndAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getStatementSummariesByAccount()`

```php
getStatementSummariesByAccount($account_token, $start_date, $end_date, $count, $start_index, $sort_by): \OpenAPI\Client\Model\StatementSummaryPage
```

List account statement summaries

Retrieve an array of statement summaries tied to a cardholder's account.  The statement summary, which is a summary of account activity on a statement, provides account holders with a synopsis of activity that occurred on the account during a specified billing cycle.  This endpoint supports <</core-api/sorting-and-pagination, sorting and pagination>>. You can use optional query parameters to return a statement based on its exact opening or closing date, or a statement whose closing date falls within a range of dates.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: mqAppAndAccessToken
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\StatementsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account_token = 'account_token_example'; // string | Unique identifier of the credit account for which you want to retrieve statement summaries.  Send a `GET` request to `/credit/accounts` to retrieve existing credit account tokens.
$start_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Returns statements with a matching opening date.  If both `start_date` and `end_date` are specified, statements whose closing date falls between the start and end dates are returned.
$end_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Returns statements with a matching closing date.  If both `start_date` and `end_date` are specified, statements whose closing date falls between the start and end dates are returned.
$count = 5; // int | Number of account statement resources to retrieve.
$start_index = 0; // int | Sort order index of the first resource in the returned array.
$sort_by = '-createdTime'; // string | Field on which to sort. Prefix the field name with a hyphen (`-`) to sort in descending order. Omit the hyphen to sort in ascending order.  *NOTE:* You must sort using system field names such as `createdTime`, and not by the field names appearing in response bodies such as `created_time`.

try {
    $result = $apiInstance->getStatementSummariesByAccount($account_token, $start_date, $end_date, $count, $start_index, $sort_by);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StatementsApi->getStatementSummariesByAccount: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **account_token** | **string**| Unique identifier of the credit account for which you want to retrieve statement summaries.  Send a &#x60;GET&#x60; request to &#x60;/credit/accounts&#x60; to retrieve existing credit account tokens. |
 **start_date** | **\DateTime**| Returns statements with a matching opening date.  If both &#x60;start_date&#x60; and &#x60;end_date&#x60; are specified, statements whose closing date falls between the start and end dates are returned. | [optional]
 **end_date** | **\DateTime**| Returns statements with a matching closing date.  If both &#x60;start_date&#x60; and &#x60;end_date&#x60; are specified, statements whose closing date falls between the start and end dates are returned. | [optional]
 **count** | **int**| Number of account statement resources to retrieve. | [optional] [default to 5]
 **start_index** | **int**| Sort order index of the first resource in the returned array. | [optional] [default to 0]
 **sort_by** | **string**| Field on which to sort. Prefix the field name with a hyphen (&#x60;-&#x60;) to sort in descending order. Omit the hyphen to sort in ascending order.  *NOTE:* You must sort using system field names such as &#x60;createdTime&#x60;, and not by the field names appearing in response bodies such as &#x60;created_time&#x60;. | [optional] [default to &#39;-createdTime&#39;]

### Return type

[**\OpenAPI\Client\Model\StatementSummaryPage**](../Model/StatementSummaryPage.md)

### Authorization

[mqAppAndAccessToken](../../README.md#mqAppAndAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listStatementJournalEntries()`

```php
listStatementJournalEntries($account_token, $statement_summary_token, $count, $start_index, $expand, $sort_by): \OpenAPI\Client\Model\JournalEntriesPage
```

List account statement journal entries

Retrieve an array of journal entries on a credit account's statement summary.  This endpoint supports <</core-api/sorting-and-pagination, sorting>>.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: mqAppAndAccessToken
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\StatementsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account_token = 'account_token_example'; // string | Unique identifier of the credit account for which to retrieve the statement journal entries.  Send a `GET` request to `/credit/accounts` to retrieve existing credit account tokens.
$statement_summary_token = 'statement_summary_token_example'; // string | Unique identifier of the statement summary from which to retrieve journal entries.  Send a `GET` request to `/credit/accounts/{token}/statements/` to retrieve existing statement summary tokens.
$count = 5; // int | Number of journal entry resources to return.
$start_index = 0; // int | Sort order index of the first resource in the returned array.
$expand = array('expand_example'); // string[] | Embeds the specified object into the response.
$sort_by = 'lastModifiedTime'; // string | Field on which to sort. Prefix the field name with a hyphen (`-`) to sort in descending order. Omit the hyphen to sort in ascending order.  *NOTE:* You must sort using system field names such as `lastModifiedTime`, and not by the field names appearing in response bodies such as `last_modified_time`.

try {
    $result = $apiInstance->listStatementJournalEntries($account_token, $statement_summary_token, $count, $start_index, $expand, $sort_by);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StatementsApi->listStatementJournalEntries: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **account_token** | **string**| Unique identifier of the credit account for which to retrieve the statement journal entries.  Send a &#x60;GET&#x60; request to &#x60;/credit/accounts&#x60; to retrieve existing credit account tokens. |
 **statement_summary_token** | **string**| Unique identifier of the statement summary from which to retrieve journal entries.  Send a &#x60;GET&#x60; request to &#x60;/credit/accounts/{token}/statements/&#x60; to retrieve existing statement summary tokens. |
 **count** | **int**| Number of journal entry resources to return. | [optional] [default to 5]
 **start_index** | **int**| Sort order index of the first resource in the returned array. | [optional] [default to 0]
 **expand** | [**string[]**](../Model/string.md)| Embeds the specified object into the response. | [optional]
 **sort_by** | **string**| Field on which to sort. Prefix the field name with a hyphen (&#x60;-&#x60;) to sort in descending order. Omit the hyphen to sort in ascending order.  *NOTE:* You must sort using system field names such as &#x60;lastModifiedTime&#x60;, and not by the field names appearing in response bodies such as &#x60;last_modified_time&#x60;. | [optional] [default to &#39;lastModifiedTime&#39;]

### Return type

[**\OpenAPI\Client\Model\JournalEntriesPage**](../Model/JournalEntriesPage.md)

### Authorization

[mqAppAndAccessToken](../../README.md#mqAppAndAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listStatementLedgerEntries()`

```php
listStatementLedgerEntries($account_token, $statement_summary_token, $expand, $sort_by): \OpenAPI\Client\Model\LedgerEntry[]
```

List account statement ledger entries

[IMPORTANT] This feature is being deprecated and replaced by statement journal entries. To list statement journal entries, see <</core-api/credit-account-journal-entries#listStatementJournalEntries, List account statement journal entries>>.  Retrieve an array of ledger entries on a credit account's statement summary.  This endpoint supports <</core-api/sorting-and-pagination, sorting>>.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: mqAppAndAccessToken
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\StatementsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account_token = 'account_token_example'; // string | Unique identifier of the credit account for which to retrieve the statement ledger entries.  Send a `GET` request to `/credit/accounts` to retrieve existing credit account tokens.
$statement_summary_token = 'statement_summary_token_example'; // string | Unique identifier of the statement summary from which to retrieve ledger entries.  Send a `GET` request to `/credit/accounts/{token}/statements/` to retrieve existing statement summary tokens.
$expand = array('expand_example'); // string[] | Embeds the specified object into the response.
$sort_by = 'lastModifiedTime'; // string | Field on which to sort. Prefix the field name with a hyphen (`-`) to sort in descending order. Omit the hyphen to sort in ascending order.  *NOTE:* You must sort using system field names such as `lastModifiedTime`, and not by the field names appearing in response bodies such as `last_modified_time`.

try {
    $result = $apiInstance->listStatementLedgerEntries($account_token, $statement_summary_token, $expand, $sort_by);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StatementsApi->listStatementLedgerEntries: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **account_token** | **string**| Unique identifier of the credit account for which to retrieve the statement ledger entries.  Send a &#x60;GET&#x60; request to &#x60;/credit/accounts&#x60; to retrieve existing credit account tokens. |
 **statement_summary_token** | **string**| Unique identifier of the statement summary from which to retrieve ledger entries.  Send a &#x60;GET&#x60; request to &#x60;/credit/accounts/{token}/statements/&#x60; to retrieve existing statement summary tokens. |
 **expand** | [**string[]**](../Model/string.md)| Embeds the specified object into the response. | [optional]
 **sort_by** | **string**| Field on which to sort. Prefix the field name with a hyphen (&#x60;-&#x60;) to sort in descending order. Omit the hyphen to sort in ascending order.  *NOTE:* You must sort using system field names such as &#x60;lastModifiedTime&#x60;, and not by the field names appearing in response bodies such as &#x60;last_modified_time&#x60;. | [optional] [default to &#39;lastModifiedTime&#39;]

### Return type

[**\OpenAPI\Client\Model\LedgerEntry[]**](../Model/LedgerEntry.md)

### Authorization

[mqAppAndAccessToken](../../README.md#mqAppAndAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `resendWebhookEvent()`

```php
resendWebhookEvent($event_type, $resource_token): \OpenAPI\Client\Model\WebhookEventResendContainerResponse
```

Resend credit event notification

Resends a credit event notification to your webhook endpoint.  Although you send this request as a `POST`, all parameters are passed in the URL and the body is empty. The event notification is resent to your webhook endpoint and also returned in the response to this request.  For details on how to configure your webhook endpoint, see the About Webhooks <</developer-guides/about-webhooks#_tutorial, tutorial>>. For the complete `/webhooks` endpoint reference, see <</core-api/webhooks, Webhooks>>.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: mqAppAndAccessToken
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\StatementsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$event_type = 'event_type_example'; // string | Specifies the type of event you want to resend.
$resource_token = 'resource_token_example'; // string | Unique identifier of the resource for which you want to resend a notification.  Send a `GET` request to `/credit/accounts/{account_token}/journalentries` to retrieve existing journal entry tokens.  Send a `GET` request to `/credit/accounts/{account_token}/ledgerentries` to retrieve existing ledger entry tokens.  Send a `GET` request to `/accounts/{account_token}/accounttransitions` to retrieve existing account transition tokens.  Send a `GET` request to `/credit/accounts/{account_token}/payments/{payment_token}` to retrieve existing payment transition tokens.  Send a `GET` request to `/accounts/{account_token}/statements` to retrieve existing statement summary tokens.  Send a `GET` request to `/accounts/{account_token}/delinquencystate/transitions` to retrieve existing delinquency state transition tokens.  Send a `GET` request to `/accounts/{account_token}/statements/{statement_summary_token}/paymentreminders/{token}` to retrieve existing payment reminder tokens.

try {
    $result = $apiInstance->resendWebhookEvent($event_type, $resource_token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StatementsApi->resendWebhookEvent: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **event_type** | **string**| Specifies the type of event you want to resend. |
 **resource_token** | **string**| Unique identifier of the resource for which you want to resend a notification.  Send a &#x60;GET&#x60; request to &#x60;/credit/accounts/{account_token}/journalentries&#x60; to retrieve existing journal entry tokens.  Send a &#x60;GET&#x60; request to &#x60;/credit/accounts/{account_token}/ledgerentries&#x60; to retrieve existing ledger entry tokens.  Send a &#x60;GET&#x60; request to &#x60;/accounts/{account_token}/accounttransitions&#x60; to retrieve existing account transition tokens.  Send a &#x60;GET&#x60; request to &#x60;/credit/accounts/{account_token}/payments/{payment_token}&#x60; to retrieve existing payment transition tokens.  Send a &#x60;GET&#x60; request to &#x60;/accounts/{account_token}/statements&#x60; to retrieve existing statement summary tokens.  Send a &#x60;GET&#x60; request to &#x60;/accounts/{account_token}/delinquencystate/transitions&#x60; to retrieve existing delinquency state transition tokens.  Send a &#x60;GET&#x60; request to &#x60;/accounts/{account_token}/statements/{statement_summary_token}/paymentreminders/{token}&#x60; to retrieve existing payment reminder tokens. |

### Return type

[**\OpenAPI\Client\Model\WebhookEventResendContainerResponse**](../Model/WebhookEventResendContainerResponse.md)

### Authorization

[mqAppAndAccessToken](../../README.md#mqAppAndAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `retrieveStatementFiles()`

```php
retrieveStatementFiles($account_token, $statement_summary_token, $count, $start_index): \OpenAPI\Client\Model\StatementFilePage
```

List files for a statement summary

Retrieve an array of statement files for a specific statement summary.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: mqAppAndAccessToken
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\StatementsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account_token = 'account_token_example'; // string | Unique identifier of the credit account for which to retrieve statement files for a statement summary.  Send a `GET` request to `/credit/accounts` to retrieve existing credit account tokens.
$statement_summary_token = 'statement_summary_token_example'; // string | Unique identifier of the statement summary whose statement files you want to retrieve.  Send a `GET` request to `/credit/accounts/{token}/statements` to retrieve existing statement summary tokens.
$count = 5; // int | Number of statement files to return.
$start_index = 0; // int | Sort order index from which to begin returning files.

try {
    $result = $apiInstance->retrieveStatementFiles($account_token, $statement_summary_token, $count, $start_index);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StatementsApi->retrieveStatementFiles: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **account_token** | **string**| Unique identifier of the credit account for which to retrieve statement files for a statement summary.  Send a &#x60;GET&#x60; request to &#x60;/credit/accounts&#x60; to retrieve existing credit account tokens. |
 **statement_summary_token** | **string**| Unique identifier of the statement summary whose statement files you want to retrieve.  Send a &#x60;GET&#x60; request to &#x60;/credit/accounts/{token}/statements&#x60; to retrieve existing statement summary tokens. |
 **count** | **int**| Number of statement files to return. | [optional] [default to 5]
 **start_index** | **int**| Sort order index from which to begin returning files. | [optional] [default to 0]

### Return type

[**\OpenAPI\Client\Model\StatementFilePage**](../Model/StatementFilePage.md)

### Authorization

[mqAppAndAccessToken](../../README.md#mqAppAndAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `retrieveStatementInterestCharges()`

```php
retrieveStatementInterestCharges($account_token, $statement_summary_token): \OpenAPI\Client\Model\StatementInterestChargesPage
```

Retrieve account statement interest charges

Retrieve the interest charges on a credit account's statement summary.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: mqAppAndAccessToken
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\StatementsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account_token = 'account_token_example'; // string | Unique identifier of the credit account for which you want to retrieve the statement interest charges.  Send a `GET` request to `/credit/accounts` to retrieve existing credit account tokens.
$statement_summary_token = 'statement_summary_token_example'; // string | Unique identifier of the statement summary from which to retrieve the interest charges.  Send a `GET` request to `/credit/accounts/{token}/statements/` to retrieve existing statement summary tokens.

try {
    $result = $apiInstance->retrieveStatementInterestCharges($account_token, $statement_summary_token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StatementsApi->retrieveStatementInterestCharges: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **account_token** | **string**| Unique identifier of the credit account for which you want to retrieve the statement interest charges.  Send a &#x60;GET&#x60; request to &#x60;/credit/accounts&#x60; to retrieve existing credit account tokens. |
 **statement_summary_token** | **string**| Unique identifier of the statement summary from which to retrieve the interest charges.  Send a &#x60;GET&#x60; request to &#x60;/credit/accounts/{token}/statements/&#x60; to retrieve existing statement summary tokens. |

### Return type

[**\OpenAPI\Client\Model\StatementInterestChargesPage**](../Model/StatementInterestChargesPage.md)

### Authorization

[mqAppAndAccessToken](../../README.md#mqAppAndAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `retrieveStatementPaymentInfo()`

```php
retrieveStatementPaymentInfo($account_token, $statement_summary_token): \OpenAPI\Client\Model\StatementPaymentInfo
```

Retrieve account statement payment information

Retrieve the payment information on a credit account's statement summary.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: mqAppAndAccessToken
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\StatementsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account_token = 'account_token_example'; // string | Unique identifier of the credit account for which you want to retrieve the statement payment information.  Send a `GET` request to `/credit/accounts` to retrieve existing credit account tokens.
$statement_summary_token = 'statement_summary_token_example'; // string | Unique identifier of the statement summary from which to retrieve the payment information.  Send a `GET` request to `/credit/accounts/{token}/statements/` to retrieve existing statement summary tokens.

try {
    $result = $apiInstance->retrieveStatementPaymentInfo($account_token, $statement_summary_token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StatementsApi->retrieveStatementPaymentInfo: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **account_token** | **string**| Unique identifier of the credit account for which you want to retrieve the statement payment information.  Send a &#x60;GET&#x60; request to &#x60;/credit/accounts&#x60; to retrieve existing credit account tokens. |
 **statement_summary_token** | **string**| Unique identifier of the statement summary from which to retrieve the payment information.  Send a &#x60;GET&#x60; request to &#x60;/credit/accounts/{token}/statements/&#x60; to retrieve existing statement summary tokens. |

### Return type

[**\OpenAPI\Client\Model\StatementPaymentInfo**](../Model/StatementPaymentInfo.md)

### Authorization

[mqAppAndAccessToken](../../README.md#mqAppAndAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `retrieveStatementReward()`

```php
retrieveStatementReward($account_token, $statement_summary_token): \OpenAPI\Client\Model\StatementReward
```

Retrieve account statement rewards

Retrieve the rewards on a credit account's statement summary.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: mqAppAndAccessToken
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\StatementsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account_token = 'account_token_example'; // string | Unique identifier of the credit account from which to retrieve statement rewards.  Send a `GET` request to `/credit/accounts` to retrieve existing credit account tokens.
$statement_summary_token = 'statement_summary_token_example'; // string | Unique identifier of the statement summary from which to retrieve rewards.  Send a `GET` request to `/credit/accounts/{token}/statements/` to retrieve existing statement summary tokens.

try {
    $result = $apiInstance->retrieveStatementReward($account_token, $statement_summary_token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StatementsApi->retrieveStatementReward: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **account_token** | **string**| Unique identifier of the credit account from which to retrieve statement rewards.  Send a &#x60;GET&#x60; request to &#x60;/credit/accounts&#x60; to retrieve existing credit account tokens. |
 **statement_summary_token** | **string**| Unique identifier of the statement summary from which to retrieve rewards.  Send a &#x60;GET&#x60; request to &#x60;/credit/accounts/{token}/statements/&#x60; to retrieve existing statement summary tokens. |

### Return type

[**\OpenAPI\Client\Model\StatementReward**](../Model/StatementReward.md)

### Authorization

[mqAppAndAccessToken](../../README.md#mqAppAndAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `retrieveStatementSummary()`

```php
retrieveStatementSummary($account_token, $statement_summary_token): \OpenAPI\Client\Model\StatementSummary
```

Retrieve account statement summary

Retrieve a statement summary for a credit account.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: mqAppAndAccessToken
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\StatementsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account_token = 'account_token_example'; // string | Unique identifier of the credit account for which you want to retrieve a statement summary.  Send a `GET` request to `/credit/accounts` to retrieve existing credit account tokens.
$statement_summary_token = 'statement_summary_token_example'; // string | Unique identifier of the statement summary to retrieve.  Send a `GET` request to `/credit/accounts/{token}/statements/` to retrieve existing statement summary tokens.

try {
    $result = $apiInstance->retrieveStatementSummary($account_token, $statement_summary_token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StatementsApi->retrieveStatementSummary: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **account_token** | **string**| Unique identifier of the credit account for which you want to retrieve a statement summary.  Send a &#x60;GET&#x60; request to &#x60;/credit/accounts&#x60; to retrieve existing credit account tokens. |
 **statement_summary_token** | **string**| Unique identifier of the statement summary to retrieve.  Send a &#x60;GET&#x60; request to &#x60;/credit/accounts/{token}/statements/&#x60; to retrieve existing statement summary tokens. |

### Return type

[**\OpenAPI\Client\Model\StatementSummary**](../Model/StatementSummary.md)

### Authorization

[mqAppAndAccessToken](../../README.md#mqAppAndAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `retrieveYearToDateForStatementSummary()`

```php
retrieveYearToDateForStatementSummary($account_token, $statement_summary_token): \OpenAPI\Client\Model\YearToDate
```

Retrieve account statement year-to-date totals

Retrieve the year-to-date fee and interest totals on a credit account's statement summary.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: mqAppAndAccessToken
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\StatementsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account_token = 'account_token_example'; // string | Unique identifier of the credit account from which to retrieve statement year-to-date totals.  Send a `GET` request to `/credit/accounts` to retrieve existing credit account tokens.
$statement_summary_token = 'statement_summary_token_example'; // string | Unique identifier of the statement summary from which to retrieve year-to-date totals.  Send a `GET` request to `/credit/accounts/{token}/statements/` to retrieve existing statement summary tokens.

try {
    $result = $apiInstance->retrieveYearToDateForStatementSummary($account_token, $statement_summary_token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StatementsApi->retrieveYearToDateForStatementSummary: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **account_token** | **string**| Unique identifier of the credit account from which to retrieve statement year-to-date totals.  Send a &#x60;GET&#x60; request to &#x60;/credit/accounts&#x60; to retrieve existing credit account tokens. |
 **statement_summary_token** | **string**| Unique identifier of the statement summary from which to retrieve year-to-date totals.  Send a &#x60;GET&#x60; request to &#x60;/credit/accounts/{token}/statements/&#x60; to retrieve existing statement summary tokens. |

### Return type

[**\OpenAPI\Client\Model\YearToDate**](../Model/YearToDate.md)

### Authorization

[mqAppAndAccessToken](../../README.md#mqAppAndAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
