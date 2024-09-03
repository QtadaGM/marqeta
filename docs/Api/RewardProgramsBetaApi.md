# OpenAPI\Client\RewardProgramsBetaApi

All URIs are relative to /v3.

Method | HTTP request | Description
------------- | ------------- | -------------
[**getRewardEntriesByJournalEntryTokens()**](RewardProgramsBetaApi.md#getRewardEntriesByJournalEntryTokens) | **GET** /rewardprograms/{token}/journalentries | Retrieve reward entries by list of journal entry tokens
[**postRewardProgramEntry()**](RewardProgramsBetaApi.md#postRewardProgramEntry) | **POST** /rewardprograms/{token}/entries | Create reward entry
[**retrieveRewardProgram()**](RewardProgramsBetaApi.md#retrieveRewardProgram) | **GET** /rewardprograms/{token} | Retrieve reward program
[**retrieveRewardProgramBalance()**](RewardProgramsBetaApi.md#retrieveRewardProgramBalance) | **GET** /rewardprograms/{token}/balances | Retrieve reward program balances
[**retrieveRewardProgramEntries()**](RewardProgramsBetaApi.md#retrieveRewardProgramEntries) | **GET** /rewardprograms/{token}/entries | List reward entries
[**retrieveRewardProgramEntriesBalance()**](RewardProgramsBetaApi.md#retrieveRewardProgramEntriesBalance) | **GET** /rewardprograms/{token}/entries/balance | Retrieve reward entries balance
[**retrieveRewardProgramEntry()**](RewardProgramsBetaApi.md#retrieveRewardProgramEntry) | **GET** /rewardprograms/{token}/entries/{entry_token} | Retrieve reward entry
[**retrieveRewardPrograms()**](RewardProgramsBetaApi.md#retrieveRewardPrograms) | **GET** /rewardprograms | List reward programs
[**retrieveRewardProgramsRulesConfig()**](RewardProgramsBetaApi.md#retrieveRewardProgramsRulesConfig) | **GET** /rewardprograms/{token}/rulesconfigs | List rules configurations
[**retrieveRewardProgramsRulesConfigApplied()**](RewardProgramsBetaApi.md#retrieveRewardProgramsRulesConfigApplied) | **GET** /rewardprograms/{token}/rulesconfigs/applied | Retrieve last rules configuration applied
[**updateRewardProgram()**](RewardProgramsBetaApi.md#updateRewardProgram) | **PUT** /rewardprograms/{token} | Activate or deactivate reward program


## `getRewardEntriesByJournalEntryTokens()`

```php
getRewardEntriesByJournalEntryTokens($token, $journal_entry_tokens, $count, $start_index, $sort_by): \OpenAPI\Client\Model\RewardEntriesJournalEntriesPageResponse
```

Retrieve reward entries by list of journal entry tokens

Retrieve an array of reward entries on a specific reward program by multiple journal entries.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: mqAppAndAccessToken
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\RewardProgramsBetaApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$token = 'token_example'; // string | Unique identifier of the reward program.
$journal_entry_tokens = array('journal_entry_tokens_example'); // string[] | List of journal entry unique identifiers.
$count = 5; // int | Number of resources to retrieve.
$start_index = 0; // int | Sort order index of the first resource in the returned array.
$sort_by = '-createdTime'; // string | Field on which to sort. Prefix the field name with a hyphen (`-`) to sort in descending order. Omit the hyphen to sort in ascending order.  *NOTE*: You must sort using system field names such as `createdTime`, and not by the field names appearing in response bodies such as `created_time`.

try {
    $result = $apiInstance->getRewardEntriesByJournalEntryTokens($token, $journal_entry_tokens, $count, $start_index, $sort_by);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RewardProgramsBetaApi->getRewardEntriesByJournalEntryTokens: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **token** | **string**| Unique identifier of the reward program. |
 **journal_entry_tokens** | [**string[]**](../Model/string.md)| List of journal entry unique identifiers. |
 **count** | **int**| Number of resources to retrieve. | [optional] [default to 5]
 **start_index** | **int**| Sort order index of the first resource in the returned array. | [optional] [default to 0]
 **sort_by** | **string**| Field on which to sort. Prefix the field name with a hyphen (&#x60;-&#x60;) to sort in descending order. Omit the hyphen to sort in ascending order.  *NOTE*: You must sort using system field names such as &#x60;createdTime&#x60;, and not by the field names appearing in response bodies such as &#x60;created_time&#x60;. | [optional] [default to &#39;-createdTime&#39;]

### Return type

[**\OpenAPI\Client\Model\RewardEntriesJournalEntriesPageResponse**](../Model/RewardEntriesJournalEntriesPageResponse.md)

### Authorization

[mqAppAndAccessToken](../../README.md#mqAppAndAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postRewardProgramEntry()`

```php
postRewardProgramEntry($token, $create_reward_programs_entries_request): \OpenAPI\Client\Model\RewardProgramsEntriesResponse
```

Create reward entry

Create a reward entry on a specific reward program. Use this endpoint to manually create a reward entry if an existing reward is being disputed.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: mqAppAndAccessToken
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\RewardProgramsBetaApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$token = 'token_example'; // string | Unique identifier of the reward program.
$create_reward_programs_entries_request = {"note":"Reward adjustment","value":2.5}; // \OpenAPI\Client\Model\CreateRewardProgramsEntriesRequest

try {
    $result = $apiInstance->postRewardProgramEntry($token, $create_reward_programs_entries_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RewardProgramsBetaApi->postRewardProgramEntry: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **token** | **string**| Unique identifier of the reward program. |
 **create_reward_programs_entries_request** | [**\OpenAPI\Client\Model\CreateRewardProgramsEntriesRequest**](../Model/CreateRewardProgramsEntriesRequest.md)|  |

### Return type

[**\OpenAPI\Client\Model\RewardProgramsEntriesResponse**](../Model/RewardProgramsEntriesResponse.md)

### Authorization

[mqAppAndAccessToken](../../README.md#mqAppAndAccessToken)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `retrieveRewardProgram()`

```php
retrieveRewardProgram($token): \OpenAPI\Client\Model\RewardProgramsResponse
```

Retrieve reward program

Retrieve a specific reward program.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: mqAppAndAccessToken
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\RewardProgramsBetaApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$token = 'token_example'; // string | Unique identifier of the reward program.

try {
    $result = $apiInstance->retrieveRewardProgram($token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RewardProgramsBetaApi->retrieveRewardProgram: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **token** | **string**| Unique identifier of the reward program. |

### Return type

[**\OpenAPI\Client\Model\RewardProgramsResponse**](../Model/RewardProgramsResponse.md)

### Authorization

[mqAppAndAccessToken](../../README.md#mqAppAndAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `retrieveRewardProgramBalance()`

```php
retrieveRewardProgramBalance($token): \OpenAPI\Client\Model\RewardProgramsBalancesResponse
```

Retrieve reward program balances

Retrieve the balances for a specific reward program.  The reward accrual service calculates values to four-decimal precision, however the `/credit/rewardprograms/{token}/entries/balance` endpoint returns pending and accrued balances to two-decimal precision.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: mqAppAndAccessToken
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\RewardProgramsBetaApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$token = 'token_example'; // string | Unique identifier of the reward program.

try {
    $result = $apiInstance->retrieveRewardProgramBalance($token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RewardProgramsBetaApi->retrieveRewardProgramBalance: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **token** | **string**| Unique identifier of the reward program. |

### Return type

[**\OpenAPI\Client\Model\RewardProgramsBalancesResponse**](../Model/RewardProgramsBalancesResponse.md)

### Authorization

[mqAppAndAccessToken](../../README.md#mqAppAndAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `retrieveRewardProgramEntries()`

```php
retrieveRewardProgramEntries($token, $start_date, $end_date, $count, $start_index, $sort_by, $status): \OpenAPI\Client\Model\RewardProgramsEntriesPage
```

List reward entries

Retrieve an array of reward entries on a specific reward program.  The reward accrual service calculates values to four-decimal precision, however the `/credit/rewardprograms/{token}/entries/balance` endpoint returns pending and accrued balances to two-decimal precision.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: mqAppAndAccessToken
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\RewardProgramsBetaApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$token = 'token_example'; // string | Unique identifier of the reward program.
$start_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | The starting date (or date-time) of a date range from which to return resources, in UTC.
$end_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | The ending date (or date-time) of a date range from which to return resources, in UTC.
$count = 5; // int | Number of resources to retrieve.
$start_index = 0; // int | Sort order index of the first resource in the returned array.
$sort_by = '-createdTime'; // string | Field on which to sort. Prefix the field name with a hyphen (`-`) to sort in descending order. Omit the hyphen to sort in ascending order.  *NOTE*: You must sort using system field names such as `createdTime`, and not by the field names appearing in response bodies such as `created_time`.
$status = array(new \OpenAPI\Client\Model\\OpenAPI\Client\Model\RewardEntryStatus()); // \OpenAPI\Client\Model\RewardEntryStatus[] | Status of the reward entries in the returned array.

try {
    $result = $apiInstance->retrieveRewardProgramEntries($token, $start_date, $end_date, $count, $start_index, $sort_by, $status);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RewardProgramsBetaApi->retrieveRewardProgramEntries: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **token** | **string**| Unique identifier of the reward program. |
 **start_date** | **\DateTime**| The starting date (or date-time) of a date range from which to return resources, in UTC. | [optional]
 **end_date** | **\DateTime**| The ending date (or date-time) of a date range from which to return resources, in UTC. | [optional]
 **count** | **int**| Number of resources to retrieve. | [optional] [default to 5]
 **start_index** | **int**| Sort order index of the first resource in the returned array. | [optional] [default to 0]
 **sort_by** | **string**| Field on which to sort. Prefix the field name with a hyphen (&#x60;-&#x60;) to sort in descending order. Omit the hyphen to sort in ascending order.  *NOTE*: You must sort using system field names such as &#x60;createdTime&#x60;, and not by the field names appearing in response bodies such as &#x60;created_time&#x60;. | [optional] [default to &#39;-createdTime&#39;]
 **status** | [**\OpenAPI\Client\Model\RewardEntryStatus[]**](../Model/\OpenAPI\Client\Model\RewardEntryStatus.md)| Status of the reward entries in the returned array. | [optional]

### Return type

[**\OpenAPI\Client\Model\RewardProgramsEntriesPage**](../Model/RewardProgramsEntriesPage.md)

### Authorization

[mqAppAndAccessToken](../../README.md#mqAppAndAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `retrieveRewardProgramEntriesBalance()`

```php
retrieveRewardProgramEntriesBalance($token, $start_date, $end_date): \OpenAPI\Client\Model\RewardProgramsEntriesBalanceResponse
```

Retrieve reward entries balance

Retrieve the balance of reward entries, which is the accrued rewards amount, within a specified date range.  The reward accrual service calculates values to four-decimal precision, however the `/credit/rewardprograms/{token}/entries/balance` endpoint returns pending and accrued balances to two-decimal precision.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: mqAppAndAccessToken
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\RewardProgramsBetaApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$token = 'token_example'; // string | Unique identifier of the reward program.
$start_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | The starting date (or date-time) of a date range from which to return resources, in UTC.
$end_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | The ending date (or date-time) of a date range from which to return resources, in UTC.

try {
    $result = $apiInstance->retrieveRewardProgramEntriesBalance($token, $start_date, $end_date);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RewardProgramsBetaApi->retrieveRewardProgramEntriesBalance: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **token** | **string**| Unique identifier of the reward program. |
 **start_date** | **\DateTime**| The starting date (or date-time) of a date range from which to return resources, in UTC. |
 **end_date** | **\DateTime**| The ending date (or date-time) of a date range from which to return resources, in UTC. |

### Return type

[**\OpenAPI\Client\Model\RewardProgramsEntriesBalanceResponse**](../Model/RewardProgramsEntriesBalanceResponse.md)

### Authorization

[mqAppAndAccessToken](../../README.md#mqAppAndAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `retrieveRewardProgramEntry()`

```php
retrieveRewardProgramEntry($token, $entry_token): \OpenAPI\Client\Model\RewardProgramsEntriesResponse
```

Retrieve reward entry

Retrieve a specific reward entry on a reward program.  The reward accrual service calculates values to four-decimal precision, however the `/credit/rewardprograms/{token}/entries/balance` endpoint returns pending and accrued balances to two-decimal precision.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: mqAppAndAccessToken
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\RewardProgramsBetaApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$token = 'token_example'; // string | Unique identifier of the reward program.
$entry_token = 'entry_token_example'; // string | Unique identifier of the reward entry to retrieve.

try {
    $result = $apiInstance->retrieveRewardProgramEntry($token, $entry_token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RewardProgramsBetaApi->retrieveRewardProgramEntry: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **token** | **string**| Unique identifier of the reward program. |
 **entry_token** | **string**| Unique identifier of the reward entry to retrieve. |

### Return type

[**\OpenAPI\Client\Model\RewardProgramsEntriesResponse**](../Model/RewardProgramsEntriesResponse.md)

### Authorization

[mqAppAndAccessToken](../../README.md#mqAppAndAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `retrieveRewardPrograms()`

```php
retrieveRewardPrograms($account_token, $is_active, $count, $start_index, $sort_by): \OpenAPI\Client\Model\RewardProgramsPageResponse
```

List reward programs

Retrieve an array of reward programs.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: mqAppAndAccessToken
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\RewardProgramsBetaApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account_token = 'account_token_example'; // string | The unique identifier of the credit account for which you want to retrieve reward programs.
$is_active = True; // bool | A value of `true` returns active resources; `false` returns inactive resources.
$count = 5; // int | Number of resources to retrieve.
$start_index = 0; // int | Sort order index of the first resource in the returned array.
$sort_by = '-updatedTime'; // string | Field on which to sort. Prefix the field name with a hyphen (`-`) to sort in descending order. Omit the hyphen to sort in ascending order.  *NOTE*: You must sort using system field names such as `updatedTime`, and not by the field names appearing in response bodies such as `updated_time`.

try {
    $result = $apiInstance->retrieveRewardPrograms($account_token, $is_active, $count, $start_index, $sort_by);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RewardProgramsBetaApi->retrieveRewardPrograms: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **account_token** | **string**| The unique identifier of the credit account for which you want to retrieve reward programs. | [optional]
 **is_active** | **bool**| A value of &#x60;true&#x60; returns active resources; &#x60;false&#x60; returns inactive resources. | [optional]
 **count** | **int**| Number of resources to retrieve. | [optional] [default to 5]
 **start_index** | **int**| Sort order index of the first resource in the returned array. | [optional] [default to 0]
 **sort_by** | **string**| Field on which to sort. Prefix the field name with a hyphen (&#x60;-&#x60;) to sort in descending order. Omit the hyphen to sort in ascending order.  *NOTE*: You must sort using system field names such as &#x60;updatedTime&#x60;, and not by the field names appearing in response bodies such as &#x60;updated_time&#x60;. | [optional] [default to &#39;-updatedTime&#39;]

### Return type

[**\OpenAPI\Client\Model\RewardProgramsPageResponse**](../Model/RewardProgramsPageResponse.md)

### Authorization

[mqAppAndAccessToken](../../README.md#mqAppAndAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `retrieveRewardProgramsRulesConfig()`

```php
retrieveRewardProgramsRulesConfig($token, $is_active, $count, $start_index, $sort_by): \OpenAPI\Client\Model\RewardProgramsRulesConfigsPage
```

List rules configurations

Retrieve an array of rules configs for a specific reward program.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: mqAppAndAccessToken
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\RewardProgramsBetaApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$token = 'token_example'; // string | Unique identifier of the reward program.
$is_active = True; // bool | A value of `true` returns active resources; `false` returns inactive resources.
$count = 5; // int | Number of resources to retrieve.
$start_index = 0; // int | Sort order index of the first resource in the returned array.
$sort_by = '-updatedTime'; // string | Field on which to sort. Prefix the field name with a hyphen (`-`) to sort in descending order. Omit the hyphen to sort in ascending order.  *NOTE*: You must sort using system field names such as `updatedTime`, and not by the field names appearing in response bodies such as `updated_time`.

try {
    $result = $apiInstance->retrieveRewardProgramsRulesConfig($token, $is_active, $count, $start_index, $sort_by);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RewardProgramsBetaApi->retrieveRewardProgramsRulesConfig: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **token** | **string**| Unique identifier of the reward program. |
 **is_active** | **bool**| A value of &#x60;true&#x60; returns active resources; &#x60;false&#x60; returns inactive resources. | [optional]
 **count** | **int**| Number of resources to retrieve. | [optional] [default to 5]
 **start_index** | **int**| Sort order index of the first resource in the returned array. | [optional] [default to 0]
 **sort_by** | **string**| Field on which to sort. Prefix the field name with a hyphen (&#x60;-&#x60;) to sort in descending order. Omit the hyphen to sort in ascending order.  *NOTE*: You must sort using system field names such as &#x60;updatedTime&#x60;, and not by the field names appearing in response bodies such as &#x60;updated_time&#x60;. | [optional] [default to &#39;-updatedTime&#39;]

### Return type

[**\OpenAPI\Client\Model\RewardProgramsRulesConfigsPage**](../Model/RewardProgramsRulesConfigsPage.md)

### Authorization

[mqAppAndAccessToken](../../README.md#mqAppAndAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `retrieveRewardProgramsRulesConfigApplied()`

```php
retrieveRewardProgramsRulesConfigApplied($token): \OpenAPI\Client\Model\RewardProgramsRulesConfigsResponse
```

Retrieve last rules configuration applied

Retrieve the most recently applied rules config on a specific reward program.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: mqAppAndAccessToken
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\RewardProgramsBetaApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$token = 'token_example'; // string | Unique identifier of the reward program.

try {
    $result = $apiInstance->retrieveRewardProgramsRulesConfigApplied($token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RewardProgramsBetaApi->retrieveRewardProgramsRulesConfigApplied: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **token** | **string**| Unique identifier of the reward program. |

### Return type

[**\OpenAPI\Client\Model\RewardProgramsRulesConfigsResponse**](../Model/RewardProgramsRulesConfigsResponse.md)

### Authorization

[mqAppAndAccessToken](../../README.md#mqAppAndAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateRewardProgram()`

```php
updateRewardProgram($token, $put_reward_programs_request): \OpenAPI\Client\Model\RewardProgramsResponse
```

Activate or deactivate reward program

Activate or deactivate a specific reward program.  [CAUTION] This endpoint is available for banks only. Do not use this endpoint if you are a brand contributor.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: mqAppAndAccessToken
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\RewardProgramsBetaApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$token = 'token_example'; // string | Unique identifier of the reward program.
$put_reward_programs_request = {"is_active":false,"note":"Bundle was updated for this account"}; // \OpenAPI\Client\Model\PutRewardProgramsRequest

try {
    $result = $apiInstance->updateRewardProgram($token, $put_reward_programs_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RewardProgramsBetaApi->updateRewardProgram: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **token** | **string**| Unique identifier of the reward program. |
 **put_reward_programs_request** | [**\OpenAPI\Client\Model\PutRewardProgramsRequest**](../Model/PutRewardProgramsRequest.md)|  |

### Return type

[**\OpenAPI\Client\Model\RewardProgramsResponse**](../Model/RewardProgramsResponse.md)

### Authorization

[mqAppAndAccessToken](../../README.md#mqAppAndAccessToken)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
