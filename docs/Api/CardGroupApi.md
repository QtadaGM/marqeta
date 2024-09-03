# OpenAPI\Client\CardGroupApi

All URIs are relative to /v3.

Method | HTTP request | Description
------------- | ------------- | -------------
[**createCardGroup()**](CardGroupApi.md#createCardGroup) | **POST** /cardgroups | Create Card Group
[**listCardGroups()**](CardGroupApi.md#listCardGroups) | **GET** /cardgroups | List Card Groups
[**retrieveCardGroup()**](CardGroupApi.md#retrieveCardGroup) | **GET** /cardgroups/{token} | Retrieve Card Group


## `createCardGroup()`

```php
createCardGroup($card_group_req): \OpenAPI\Client\Model\CardGroup
```

Create Card Group

Create a new card group object

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: mqAppAndAccessToken
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\CardGroupApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$card_group_req = new \OpenAPI\Client\Model\CardGroupReq(); // \OpenAPI\Client\Model\CardGroupReq | Card group to create.

try {
    $result = $apiInstance->createCardGroup($card_group_req);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CardGroupApi->createCardGroup: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **card_group_req** | [**\OpenAPI\Client\Model\CardGroupReq**](../Model/CardGroupReq.md)| Card group to create. |

### Return type

[**\OpenAPI\Client\Model\CardGroup**](../Model/CardGroup.md)

### Authorization

[mqAppAndAccessToken](../../README.md#mqAppAndAccessToken)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listCardGroups()`

```php
listCardGroups($card_tokens, $count, $start_index): \OpenAPI\Client\Model\CardGroupPage
```

List Card Groups

Get a list of all card groups in the program

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: mqAppAndAccessToken
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\CardGroupApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$card_tokens = array('card_tokens_example'); // string[] | list of unique card identifiers to retrieve.
$count = 56; // int | Number of card group resources to retrieve.
$start_index = 56; // int | Sort order index of the first resource in the returned array.

try {
    $result = $apiInstance->listCardGroups($card_tokens, $count, $start_index);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CardGroupApi->listCardGroups: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **card_tokens** | [**string[]**](../Model/string.md)| list of unique card identifiers to retrieve. | [optional]
 **count** | **int**| Number of card group resources to retrieve. | [optional]
 **start_index** | **int**| Sort order index of the first resource in the returned array. | [optional]

### Return type

[**\OpenAPI\Client\Model\CardGroupPage**](../Model/CardGroupPage.md)

### Authorization

[mqAppAndAccessToken](../../README.md#mqAppAndAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `retrieveCardGroup()`

```php
retrieveCardGroup($token): \OpenAPI\Client\Model\CardGroup
```

Retrieve Card Group

Retrieves the Card Group with the given token

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: mqAppAndAccessToken
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\CardGroupApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$token = 'token_example'; // string | Unique identifier of the card group to retrieve

try {
    $result = $apiInstance->retrieveCardGroup($token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CardGroupApi->retrieveCardGroup: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **token** | **string**| Unique identifier of the card group to retrieve |

### Return type

[**\OpenAPI\Client\Model\CardGroup**](../Model/CardGroup.md)

### Authorization

[mqAppAndAccessToken](../../README.md#mqAppAndAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
