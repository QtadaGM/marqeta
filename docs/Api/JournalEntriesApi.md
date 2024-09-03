# OpenAPI\Client\JournalEntriesApi

All URIs are relative to /v3.

Method | HTTP request | Description
------------- | ------------- | -------------
[**getAccountJournalEntry()**](JournalEntriesApi.md#getAccountJournalEntry) | **GET** /accounts/{account_token}/journalentries/{journal_entry_token} | Retrieve account journal entry
[**listAccountJournalEntries()**](JournalEntriesApi.md#listAccountJournalEntries) | **GET** /accounts/{account_token}/journalentries | List account journal entries
[**resendWebhookEvent()**](JournalEntriesApi.md#resendWebhookEvent) | **POST** /webhooks/{event_type}/{resource_token} | Resend credit event notification


## `getAccountJournalEntry()`

```php
getAccountJournalEntry($account_token, $journal_entry_token): \OpenAPI\Client\Model\JournalEntry
```

Retrieve account journal entry

Retrieve a journal entry for a credit account.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: mqAppAndAccessToken
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\JournalEntriesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account_token = 'account_token_example'; // string | Unique identifier of the credit account for which you want to retrieve journal entries.  Send a `GET` request to `/credit/accounts` to retrieve existing credit account tokens.
$journal_entry_token = 'journal_entry_token_example'; // string | Unique identifier of the journal entry you want to retrieve.  Send a `GET` request to `/credit/accounts/{account_token}/journalentries` to retrieve existing journal entry tokens.

try {
    $result = $apiInstance->getAccountJournalEntry($account_token, $journal_entry_token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling JournalEntriesApi->getAccountJournalEntry: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **account_token** | **string**| Unique identifier of the credit account for which you want to retrieve journal entries.  Send a &#x60;GET&#x60; request to &#x60;/credit/accounts&#x60; to retrieve existing credit account tokens. |
 **journal_entry_token** | **string**| Unique identifier of the journal entry you want to retrieve.  Send a &#x60;GET&#x60; request to &#x60;/credit/accounts/{account_token}/journalentries&#x60; to retrieve existing journal entry tokens. |

### Return type

[**\OpenAPI\Client\Model\JournalEntry**](../Model/JournalEntry.md)

### Authorization

[mqAppAndAccessToken](../../README.md#mqAppAndAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listAccountJournalEntries()`

```php
listAccountJournalEntries($account_token, $count, $start_index, $start_date, $end_date, $start_impact_time, $end_impact_time, $start_created_time, $end_created_time, $statuses, $groups, $expand, $sort_by, $card_tokens, $user_tokens, $types): \OpenAPI\Client\Model\JournalEntriesPage
```

List account journal entries

Retrieve an array of journal entries on a credit account.  This endpoint supports <</core-api/sorting-and-pagination, sorting and pagination>> and <</core-api/object-expansion, object expansion>>.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: mqAppAndAccessToken
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\JournalEntriesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account_token = 'account_token_example'; // string | Unique identifier of the credit account for which you want to retrieve journal entries.  Send a `GET` request to `/credit/accounts` to retrieve existing credit account tokens.
$count = 5; // int | Number of journal entry resources to retrieve.
$start_index = 0; // int | Sort order index of the first resource in the returned array.
$start_date = 'start_date_example'; // string | Starting date of the date range from which to return journal entries.
$end_date = 'end_date_example'; // string | Ending date of the date range from which to return journal entries.
$start_impact_time = 'start_impact_time_example'; // string | Starting `impact_time` of the date range from which to return journal entries.
$end_impact_time = 'end_impact_time_example'; // string | Ending `impact_time` of the date range from which to return journal entries.
$start_created_time = 'start_created_time_example'; // string | Starting `created_date` of the date range from which to return journal entries.
$end_created_time = 'end_created_time_example'; // string | Ending `created_date` of the date range from which to return journal entries.
$statuses = array('statuses_example'); // string[] | Array of statuses by which to filter journal entries.
$groups = array('groups_example'); // string[] | Array of groups by which to filter journal entries.  To return all journal entry groups, do not include this query parameter.
$expand = array('expand_example'); // string[] | Embeds the specified object into the response.
$sort_by = '-createdTime'; // string | Field on which to sort. Prefix the field name with a hyphen (`-`) to sort in descending order. Omit the hyphen to sort in ascending order.  *NOTE:* You must sort using system field names such as `createdTime`, and not by the field names appearing in response bodies such as `created_time`.
$card_tokens = array('card_tokens_example'); // string[] | Array of card tokens by which to filter journal entries. Returns journal entries associated with the specified card tokens.  Send a `GET` request to `/credit/accounts/{account_token}/cards/` to retrieve existing card tokens.
$user_tokens = array('user_tokens_example'); // string[] | Array of user tokens by which to filter journal entries. Returns journal entries associated with the specified user tokens.  Send a `GET` request to `/users` to retrieve existing user tokens.
$types = array('types_example'); // string[] | Array of <</core-api/event-types#_credit_journal_entry_events, event types>> by which to filter journal entries.  To return all event types, do not include this query parameter.

try {
    $result = $apiInstance->listAccountJournalEntries($account_token, $count, $start_index, $start_date, $end_date, $start_impact_time, $end_impact_time, $start_created_time, $end_created_time, $statuses, $groups, $expand, $sort_by, $card_tokens, $user_tokens, $types);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling JournalEntriesApi->listAccountJournalEntries: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **account_token** | **string**| Unique identifier of the credit account for which you want to retrieve journal entries.  Send a &#x60;GET&#x60; request to &#x60;/credit/accounts&#x60; to retrieve existing credit account tokens. |
 **count** | **int**| Number of journal entry resources to retrieve. | [optional] [default to 5]
 **start_index** | **int**| Sort order index of the first resource in the returned array. | [optional] [default to 0]
 **start_date** | **string**| Starting date of the date range from which to return journal entries. | [optional]
 **end_date** | **string**| Ending date of the date range from which to return journal entries. | [optional]
 **start_impact_time** | **string**| Starting &#x60;impact_time&#x60; of the date range from which to return journal entries. | [optional]
 **end_impact_time** | **string**| Ending &#x60;impact_time&#x60; of the date range from which to return journal entries. | [optional]
 **start_created_time** | **string**| Starting &#x60;created_date&#x60; of the date range from which to return journal entries. | [optional]
 **end_created_time** | **string**| Ending &#x60;created_date&#x60; of the date range from which to return journal entries. | [optional]
 **statuses** | [**string[]**](../Model/string.md)| Array of statuses by which to filter journal entries. | [optional]
 **groups** | [**string[]**](../Model/string.md)| Array of groups by which to filter journal entries.  To return all journal entry groups, do not include this query parameter. | [optional]
 **expand** | [**string[]**](../Model/string.md)| Embeds the specified object into the response. | [optional]
 **sort_by** | **string**| Field on which to sort. Prefix the field name with a hyphen (&#x60;-&#x60;) to sort in descending order. Omit the hyphen to sort in ascending order.  *NOTE:* You must sort using system field names such as &#x60;createdTime&#x60;, and not by the field names appearing in response bodies such as &#x60;created_time&#x60;. | [optional] [default to &#39;-createdTime&#39;]
 **card_tokens** | [**string[]**](../Model/string.md)| Array of card tokens by which to filter journal entries. Returns journal entries associated with the specified card tokens.  Send a &#x60;GET&#x60; request to &#x60;/credit/accounts/{account_token}/cards/&#x60; to retrieve existing card tokens. | [optional]
 **user_tokens** | [**string[]**](../Model/string.md)| Array of user tokens by which to filter journal entries. Returns journal entries associated with the specified user tokens.  Send a &#x60;GET&#x60; request to &#x60;/users&#x60; to retrieve existing user tokens. | [optional]
 **types** | [**string[]**](../Model/string.md)| Array of &lt;&lt;/core-api/event-types#_credit_journal_entry_events, event types&gt;&gt; by which to filter journal entries.  To return all event types, do not include this query parameter. | [optional]

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


$apiInstance = new OpenAPI\Client\Api\JournalEntriesApi(
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
    echo 'Exception when calling JournalEntriesApi->resendWebhookEvent: ', $e->getMessage(), PHP_EOL;
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
