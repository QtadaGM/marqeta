# OpenAPI\Client\SubstatusApi

All URIs are relative to /v3.

Method | HTTP request | Description
------------- | ------------- | -------------
[**createSubStatus()**](SubstatusApi.md#createSubStatus) | **POST** /substatuses | Create substatus
[**listSubStatuses()**](SubstatusApi.md#listSubStatuses) | **GET** /substatuses | List substatuses
[**retrieveSubStatus()**](SubstatusApi.md#retrieveSubStatus) | **GET** /substatuses/{substatus_token} | Retrieve Substatus
[**updateSubStatus()**](SubstatusApi.md#updateSubStatus) | **PUT** /substatuses/{substatus_token} | Update substatus


## `createSubStatus()`

```php
createSubStatus($substatus_create_req): \OpenAPI\Client\Model\SubstatusResponse
```

Create substatus

Create a sub status for an existing user or account.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: mqAppAndAccessToken
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\SubstatusApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$substatus_create_req = {"attributes":[],"events":[{"effective_date":"2024-05-06T15:26:58.817Z","reason":"DECEASED reported","state":"ACTIVE"}],"resource_token":"BZB8tn4ZeW","resource_type":"USER","substatus":"DECEASED"}; // \OpenAPI\Client\Model\SubstatusCreateReq

try {
    $result = $apiInstance->createSubStatus($substatus_create_req);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SubstatusApi->createSubStatus: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **substatus_create_req** | [**\OpenAPI\Client\Model\SubstatusCreateReq**](../Model/SubstatusCreateReq.md)|  |

### Return type

[**\OpenAPI\Client\Model\SubstatusResponse**](../Model/SubstatusResponse.md)

### Authorization

[mqAppAndAccessToken](../../README.md#mqAppAndAccessToken)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listSubStatuses()`

```php
listSubStatuses($account_token, $user_token, $is_active, $substatuses, $count, $start_index, $sort_by): \OpenAPI\Client\Model\SubstatusPage
```

List substatuses

Get list of substatuses

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: mqAppAndAccessToken
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\SubstatusApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account_token = 'account_token_example'; // string | The account token to filter by.
$user_token = 'user_token_example'; // string | The user token to filter by.
$is_active = True; // bool
$substatuses = array('substatuses_example'); // string[] | comma-deliminited list of substatuses types to include Allowable values: HARDSHIP,FRAUD,MLA,SCRA,DECEASED,BANKRUPTCY
$count = 5; // int | The number of resources to retrieve.
$start_index = 0; // int | Show n-th paginated page
$sort_by = '-createdTime'; // string | Field on which to sort. Prefix the field name with a hyphen (`-`) to sort in descending order. Omit the hyphen to sort in ascending order.

try {
    $result = $apiInstance->listSubStatuses($account_token, $user_token, $is_active, $substatuses, $count, $start_index, $sort_by);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SubstatusApi->listSubStatuses: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **account_token** | **string**| The account token to filter by. | [optional]
 **user_token** | **string**| The user token to filter by. | [optional]
 **is_active** | **bool**|  | [optional]
 **substatuses** | [**string[]**](../Model/string.md)| comma-deliminited list of substatuses types to include Allowable values: HARDSHIP,FRAUD,MLA,SCRA,DECEASED,BANKRUPTCY | [optional]
 **count** | **int**| The number of resources to retrieve. | [optional] [default to 5]
 **start_index** | **int**| Show n-th paginated page | [optional] [default to 0]
 **sort_by** | **string**| Field on which to sort. Prefix the field name with a hyphen (&#x60;-&#x60;) to sort in descending order. Omit the hyphen to sort in ascending order. | [optional] [default to &#39;-createdTime&#39;]

### Return type

[**\OpenAPI\Client\Model\SubstatusPage**](../Model/SubstatusPage.md)

### Authorization

[mqAppAndAccessToken](../../README.md#mqAppAndAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `retrieveSubStatus()`

```php
retrieveSubStatus($substatus_token): \OpenAPI\Client\Model\SubstatusResponse
```

Retrieve Substatus

Retrieve a user or account substatus.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: mqAppAndAccessToken
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\SubstatusApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$substatus_token = 'substatus_token_example'; // string | The unique identifier of the substatus to retrieve.  Send a `GET` request to `/credit/substatuses` to retrieve existing substatus tokens.

try {
    $result = $apiInstance->retrieveSubStatus($substatus_token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SubstatusApi->retrieveSubStatus: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **substatus_token** | **string**| The unique identifier of the substatus to retrieve.  Send a &#x60;GET&#x60; request to &#x60;/credit/substatuses&#x60; to retrieve existing substatus tokens. |

### Return type

[**\OpenAPI\Client\Model\SubstatusResponse**](../Model/SubstatusResponse.md)

### Authorization

[mqAppAndAccessToken](../../README.md#mqAppAndAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateSubStatus()`

```php
updateSubStatus($substatus_token, $substatus_update_req): \OpenAPI\Client\Model\SubstatusResponse
```

Update substatus

Update substatus for an user or account.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: mqAppAndAccessToken
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\SubstatusApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$substatus_token = 'substatus_token_example'; // string | The unique identifier of the substatus to update.
$substatus_update_req = {"channel":"API","effective_date":"2024-04-09T11:23:23Z","reason":"Deceased substatus updated","state":"INACTIVE"}; // \OpenAPI\Client\Model\SubstatusUpdateReq

try {
    $result = $apiInstance->updateSubStatus($substatus_token, $substatus_update_req);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SubstatusApi->updateSubStatus: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **substatus_token** | **string**| The unique identifier of the substatus to update. |
 **substatus_update_req** | [**\OpenAPI\Client\Model\SubstatusUpdateReq**](../Model/SubstatusUpdateReq.md)|  |

### Return type

[**\OpenAPI\Client\Model\SubstatusResponse**](../Model/SubstatusResponse.md)

### Authorization

[mqAppAndAccessToken](../../README.md#mqAppAndAccessToken)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
