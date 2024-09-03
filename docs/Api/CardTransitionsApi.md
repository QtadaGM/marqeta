# OpenAPI\Client\CardTransitionsApi

All URIs are relative to /v3.

Method | HTTP request | Description
------------- | ------------- | -------------
[**getCardtransitionsCardToken()**](CardTransitionsApi.md#getCardtransitionsCardToken) | **GET** /cardtransitions/card/{token} | List transitions for card
[**getCardtransitionsToken()**](CardTransitionsApi.md#getCardtransitionsToken) | **GET** /cardtransitions/{token} | Retrieve card transition
[**postCardtransitions()**](CardTransitionsApi.md#postCardtransitions) | **POST** /cardtransitions | Create card transition


## `getCardtransitionsCardToken()`

```php
getCardtransitionsCardToken($token, $count, $start_index, $fields, $sort_by): \OpenAPI\Client\Model\CardTransitionListResponse
```

List transitions for card

Retrieves a list of the transitions for a specific card.  This endpoint supports <</core-api/field-filtering, field filtering>> and <</core-api/sorting-and-pagination, pagination>>.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: mqAppAndAccessToken
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\CardTransitionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$token = 'token_example'; // string | Unique identifier of the card.
$count = 5; // int | Number of card transitions to retrieve.
$start_index = 0; // int | Sort order index of the first resource in the returned array.
$fields = 'fields_example'; // string | Comma-delimited list of fields to return (`field_1,field_2`, and so on). Leave blank to return all fields.
$sort_by = '-createdTime'; // string | Field on which to sort. Use any field in the resource model, or one of the system fields `lastModifiedTime` or `createdTime`. Prefix the field name with a hyphen (`-`) to sort in descending order. Omit the hyphen to sort in ascending order.

try {
    $result = $apiInstance->getCardtransitionsCardToken($token, $count, $start_index, $fields, $sort_by);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CardTransitionsApi->getCardtransitionsCardToken: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **token** | **string**| Unique identifier of the card. |
 **count** | **int**| Number of card transitions to retrieve. | [optional] [default to 5]
 **start_index** | **int**| Sort order index of the first resource in the returned array. | [optional] [default to 0]
 **fields** | **string**| Comma-delimited list of fields to return (&#x60;field_1,field_2&#x60;, and so on). Leave blank to return all fields. | [optional]
 **sort_by** | **string**| Field on which to sort. Use any field in the resource model, or one of the system fields &#x60;lastModifiedTime&#x60; or &#x60;createdTime&#x60;. Prefix the field name with a hyphen (&#x60;-&#x60;) to sort in descending order. Omit the hyphen to sort in ascending order. | [optional] [default to &#39;-createdTime&#39;]

### Return type

[**\OpenAPI\Client\Model\CardTransitionListResponse**](../Model/CardTransitionListResponse.md)

### Authorization

[mqAppAndAccessToken](../../README.md#mqAppAndAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getCardtransitionsToken()`

```php
getCardtransitionsToken($token, $fields): \OpenAPI\Client\Model\CardTransitionResponse
```

Retrieve card transition

Retrieves a specific card transition. This endpoint supports <</core-api/field-filtering, field filtering>>.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: mqAppAndAccessToken
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\CardTransitionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$token = 'token_example'; // string | Unique identifier of the card transition. Send a `GET` request to `/cardtransitions/card/{token}` to retrieve card transition tokens for a specific card.
$fields = 'fields_example'; // string | Comma-delimited list of fields to return (`field_1,field_2`, and so on). Leave blank to return all fields.

try {
    $result = $apiInstance->getCardtransitionsToken($token, $fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CardTransitionsApi->getCardtransitionsToken: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **token** | **string**| Unique identifier of the card transition. Send a &#x60;GET&#x60; request to &#x60;/cardtransitions/card/{token}&#x60; to retrieve card transition tokens for a specific card. |
 **fields** | **string**| Comma-delimited list of fields to return (&#x60;field_1,field_2&#x60;, and so on). Leave blank to return all fields. | [optional]

### Return type

[**\OpenAPI\Client\Model\CardTransitionResponse**](../Model/CardTransitionResponse.md)

### Authorization

[mqAppAndAccessToken](../../README.md#mqAppAndAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postCardtransitions()`

```php
postCardtransitions($card_transition_request): \OpenAPI\Client\Model\CardTransitionResponse
```

Create card transition

Creates a card state transition to set the state of an existing card.  If your system uses IVR, you can send a `POST` request to `/cards/getbypan` to retrieve a card token, which you can then use in your `POST` request to `/cardtransitions`.  It may not be possible to move a card from one user to another once the card has been activated.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: mqAppAndAccessToken
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\CardTransitionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$card_transition_request = {"card_token":"my_user_01_card_01","channel":"API","reason":"I want to use this card, so activate it.","reason_code":"00","state":"ACTIVE","token":"activate_05","validations":{"user":{"birth_date":"1990-01-31T00:00:00Z"}}}; // \OpenAPI\Client\Model\CardTransitionRequest

try {
    $result = $apiInstance->postCardtransitions($card_transition_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CardTransitionsApi->postCardtransitions: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **card_transition_request** | [**\OpenAPI\Client\Model\CardTransitionRequest**](../Model/CardTransitionRequest.md)|  | [optional]

### Return type

[**\OpenAPI\Client\Model\CardTransitionResponse**](../Model/CardTransitionResponse.md)

### Authorization

[mqAppAndAccessToken](../../README.md#mqAppAndAccessToken)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
