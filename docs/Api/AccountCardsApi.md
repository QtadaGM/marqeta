# OpenAPI\Client\AccountCardsApi

All URIs are relative to /v3.

Method | HTTP request | Description
------------- | ------------- | -------------
[**createCardForAccount()**](AccountCardsApi.md#createCardForAccount) | **POST** /accounts/{account_token}/cards | Create account card
[**getCardByAccount()**](AccountCardsApi.md#getCardByAccount) | **GET** /accounts/{account_token}/cards/{card_token} | Retrieve account card
[**getCardsByAccount()**](AccountCardsApi.md#getCardsByAccount) | **GET** /accounts/{account_token}/cards | List account cards


## `createCardForAccount()`

```php
createCardForAccount($account_token, $card_create_req): \OpenAPI\Client\Model\CardResponse
```

Create account card

Create a credit card for an existing credit account.  [NOTE] You can ship cards to an address different from the <</core-api/users, user>> address. After creating a card, send a `PUT` request to the `/cards` endpoint with the new address in the `fulfillment.shipping` object. For more, see <</core-api/cards#putCardsToken, Update card>>.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: mqAppAndAccessToken
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\AccountCardsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account_token = 'account_token_example'; // string | Unique identifier of the credit account for which to create a credit card.  Send a `GET` request to `/credit/accounts` to retrieve existing credit account tokens.
$card_create_req = {"card_product_token":"my-card-product1234","user_token":"user1234"}; // \OpenAPI\Client\Model\CardCreateReq

try {
    $result = $apiInstance->createCardForAccount($account_token, $card_create_req);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountCardsApi->createCardForAccount: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **account_token** | **string**| Unique identifier of the credit account for which to create a credit card.  Send a &#x60;GET&#x60; request to &#x60;/credit/accounts&#x60; to retrieve existing credit account tokens. |
 **card_create_req** | [**\OpenAPI\Client\Model\CardCreateReq**](../Model/CardCreateReq.md)|  |

### Return type

[**\OpenAPI\Client\Model\CardResponse**](../Model/CardResponse.md)

### Authorization

[mqAppAndAccessToken](../../README.md#mqAppAndAccessToken)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getCardByAccount()`

```php
getCardByAccount($account_token, $card_token): \OpenAPI\Client\Model\CardResponse
```

Retrieve account card

Retrieve a credit card for a credit account.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: mqAppAndAccessToken
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\AccountCardsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account_token = 'account_token_example'; // string | Unique identifier of the credit account for which to retrieve a credit card.  Send a `GET` request to `/credit/accounts` to retrieve existing credit account tokens.
$card_token = 'card_token_example'; // string | Unique identifier of the credit card to retrieve.  Send a `GET` request to `/credit/accounts/{account_token}/cards` to retrieve existing credit card tokens.

try {
    $result = $apiInstance->getCardByAccount($account_token, $card_token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountCardsApi->getCardByAccount: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **account_token** | **string**| Unique identifier of the credit account for which to retrieve a credit card.  Send a &#x60;GET&#x60; request to &#x60;/credit/accounts&#x60; to retrieve existing credit account tokens. |
 **card_token** | **string**| Unique identifier of the credit card to retrieve.  Send a &#x60;GET&#x60; request to &#x60;/credit/accounts/{account_token}/cards&#x60; to retrieve existing credit card tokens. |

### Return type

[**\OpenAPI\Client\Model\CardResponse**](../Model/CardResponse.md)

### Authorization

[mqAppAndAccessToken](../../README.md#mqAppAndAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getCardsByAccount()`

```php
getCardsByAccount($account_token, $status, $count, $start_index, $sort_by): \OpenAPI\Client\Model\AccountCardsPage
```

List account cards

Retrieve an array of cards for a credit account.  This endpoint supports <</core-api/sorting-and-pagination, sorting and pagination>>.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: mqAppAndAccessToken
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\AccountCardsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account_token = 'account_token_example'; // string | Unique identifier of the credit account for which to retrieve credit cards.  Send a `GET` request to `/credit/accounts` to retrieve existing credit account tokens.
$status = 'status_example'; // string | Status of the credit cards to retreive.
$count = 5; // int | Number of credit card resources to retrieve.
$start_index = 0; // int | Sort order index of the first resource in the returned array.
$sort_by = '-lastModifiedTime'; // string | Field on which to sort. Prefix the field name with a hyphen (`-`) to sort in descending order. Omit the hyphen to sort in ascending order.  *NOTE:* You must sort using system field names such as `lastModifiedTime`, and not by the field names appearing in response bodies such as `last_modified_time`.

try {
    $result = $apiInstance->getCardsByAccount($account_token, $status, $count, $start_index, $sort_by);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountCardsApi->getCardsByAccount: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **account_token** | **string**| Unique identifier of the credit account for which to retrieve credit cards.  Send a &#x60;GET&#x60; request to &#x60;/credit/accounts&#x60; to retrieve existing credit account tokens. |
 **status** | **string**| Status of the credit cards to retreive. | [optional]
 **count** | **int**| Number of credit card resources to retrieve. | [optional] [default to 5]
 **start_index** | **int**| Sort order index of the first resource in the returned array. | [optional] [default to 0]
 **sort_by** | **string**| Field on which to sort. Prefix the field name with a hyphen (&#x60;-&#x60;) to sort in descending order. Omit the hyphen to sort in ascending order.  *NOTE:* You must sort using system field names such as &#x60;lastModifiedTime&#x60;, and not by the field names appearing in response bodies such as &#x60;last_modified_time&#x60;. | [optional] [default to &#39;-lastModifiedTime&#39;]

### Return type

[**\OpenAPI\Client\Model\AccountCardsPage**](../Model/AccountCardsPage.md)

### Authorization

[mqAppAndAccessToken](../../README.md#mqAppAndAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
