# OpenAPI\Client\CardsApi

All URIs are relative to /v3.

Method | HTTP request | Description
------------- | ------------- | -------------
[**getCards()**](CardsApi.md#getCards) | **GET** /cards | List cards by last 4 digits of PAN
[**getCardsBarcodeBarcode()**](CardsApi.md#getCardsBarcodeBarcode) | **GET** /cards/barcode/{barcode} | Retrieve card by barcode
[**getCardsToken()**](CardsApi.md#getCardsToken) | **GET** /cards/{token} | Retrieve card
[**getCardsTokenShowpan()**](CardsApi.md#getCardsTokenShowpan) | **GET** /cards/{token}/showpan | Show card PAN
[**getCardsUserToken()**](CardsApi.md#getCardsUserToken) | **GET** /cards/user/{token} | List cards for user
[**postCards()**](CardsApi.md#postCards) | **POST** /cards | Create card
[**postCardsGetbypan()**](CardsApi.md#postCardsGetbypan) | **POST** /cards/getbypan | Retrieve card by PAN
[**putCardsToken()**](CardsApi.md#putCardsToken) | **PUT** /cards/{token} | Update card


## `getCards()`

```php
getCards($last_four, $count, $start_index, $fields, $sort_by): \OpenAPI\Client\Model\CardListResponse
```

List cards by last 4 digits of PAN

Retrieves an array of cards whose primary account numbers (PANs) end in the four digits specified by the `last_four` query parameter.  This endpoint supports <</core-api/field-filtering, field filtering>>, <</core-api/object-expansion, object expansion>>, <</core-api/sorting-and-pagination, sorting, and pagination>>.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: mqAppAndAccessToken
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\CardsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$last_four = 'last_four_example'; // string | Last four digits of the primary account number (PAN) of the card you want to locate.
$count = 5; // int | Number of resources to retrieve.
$start_index = 0; // int | Sort order index of the first resource in the returned array.
$fields = 'fields_example'; // string | Comma-delimited list of fields to return (`field_1,field_2`, and so on). Leave blank to return all fields.
$sort_by = '-lastModifiedTime'; // string | Use any field in the resource model, or one of the system fields `lastModifiedTime` or `createdTime`. Prefix the field name with a hyphen (`-`) to sort in descending order. Omit the hyphen to sort in ascending order.

try {
    $result = $apiInstance->getCards($last_four, $count, $start_index, $fields, $sort_by);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CardsApi->getCards: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **last_four** | **string**| Last four digits of the primary account number (PAN) of the card you want to locate. |
 **count** | **int**| Number of resources to retrieve. | [optional] [default to 5]
 **start_index** | **int**| Sort order index of the first resource in the returned array. | [optional] [default to 0]
 **fields** | **string**| Comma-delimited list of fields to return (&#x60;field_1,field_2&#x60;, and so on). Leave blank to return all fields. | [optional]
 **sort_by** | **string**| Use any field in the resource model, or one of the system fields &#x60;lastModifiedTime&#x60; or &#x60;createdTime&#x60;. Prefix the field name with a hyphen (&#x60;-&#x60;) to sort in descending order. Omit the hyphen to sort in ascending order. | [optional] [default to &#39;-lastModifiedTime&#39;]

### Return type

[**\OpenAPI\Client\Model\CardListResponse**](../Model/CardListResponse.md)

### Authorization

[mqAppAndAccessToken](../../README.md#mqAppAndAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getCardsBarcodeBarcode()`

```php
getCardsBarcodeBarcode($barcode, $fields): \OpenAPI\Client\Model\CardResponse
```

Retrieve card by barcode

Retrieves a card by its barcode.  This endpoint supports <</core-api/field-filtering, field filtering>> and <</core-api/object-expansion, object expansion>>.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: mqAppAndAccessToken
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\CardsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$barcode = 'barcode_example'; // string | Barcode of the card to retrieve.
$fields = 'fields_example'; // string | Comma-delimited list of fields to return (`field_1,field_2`, and so on). Leave blank to return all fields.

try {
    $result = $apiInstance->getCardsBarcodeBarcode($barcode, $fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CardsApi->getCardsBarcodeBarcode: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **barcode** | **string**| Barcode of the card to retrieve. |
 **fields** | **string**| Comma-delimited list of fields to return (&#x60;field_1,field_2&#x60;, and so on). Leave blank to return all fields. | [optional]

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

## `getCardsToken()`

```php
getCardsToken($token, $fields, $expand): \OpenAPI\Client\Model\CardResponse
```

Retrieve card

Retrieves a specific card.  This endpoint supports <</core-api/field-filtering, field filtering>> and <</core-api/object-expansion, object expansion>>.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: mqAppAndAccessToken
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\CardsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$token = 'token_example'; // string | Unique identifier of the card you want to retrieve.
$fields = 'fields_example'; // string | Comma-delimited list of fields to return (`field_1,field_2`, and so on). Leave blank to return all fields.
$expand = 'expand_example'; // string | Embeds the associated object of the specified type into the response, for all `GET /cards` endpoints.

try {
    $result = $apiInstance->getCardsToken($token, $fields, $expand);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CardsApi->getCardsToken: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **token** | **string**| Unique identifier of the card you want to retrieve. |
 **fields** | **string**| Comma-delimited list of fields to return (&#x60;field_1,field_2&#x60;, and so on). Leave blank to return all fields. | [optional]
 **expand** | **string**| Embeds the associated object of the specified type into the response, for all &#x60;GET /cards&#x60; endpoints. | [optional]

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

## `getCardsTokenShowpan()`

```php
getCardsTokenShowpan($token, $fields, $show_cvv_number): \OpenAPI\Client\Model\CardResponse
```

Show card PAN

Retrieves a primary account number (PAN). For security reasons, the PAN is not fully visible on the card resource returned by `GET` `/cards/{token}`.  This endpoint supports <</core-api/field-filtering, field filtering>> and <</core-api/object-expansion, object expansion>>.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: mqAppAndAccessToken
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\CardsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$token = 'token_example'; // string | Unique identifier of the card whose primary account number (PAN) you want to retrieve. Send a `GET` request to `/cards` to retrieve card tokens.
$fields = 'fields_example'; // string | Comma-delimited list of fields to return (`field_1,field_2`, and so on). Leave blank to return all fields.
$show_cvv_number = True; // bool | Set to `true` to show the CVV2 number in the response.

try {
    $result = $apiInstance->getCardsTokenShowpan($token, $fields, $show_cvv_number);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CardsApi->getCardsTokenShowpan: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **token** | **string**| Unique identifier of the card whose primary account number (PAN) you want to retrieve. Send a &#x60;GET&#x60; request to &#x60;/cards&#x60; to retrieve card tokens. |
 **fields** | **string**| Comma-delimited list of fields to return (&#x60;field_1,field_2&#x60;, and so on). Leave blank to return all fields. | [optional]
 **show_cvv_number** | **bool**| Set to &#x60;true&#x60; to show the CVV2 number in the response. | [optional]

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

## `getCardsUserToken()`

```php
getCardsUserToken($token, $count, $start_index, $fields, $sort_by): \OpenAPI\Client\Model\CardListResponse
```

List cards for user

Retrieves a list of the cards associated with a specific user.  This endpoint supports <</core-api/field-filtering, field filtering,>> <</core-api/sorting-and-pagination, pagination>>, and <</core-api/object-expansion, object expansion>>.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: mqAppAndAccessToken
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\CardsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$token = 'token_example'; // string | Unique identifier of the user whose cards you want to list. Send a `GET` request to `/users` to retrieve user tokens.
$count = 5; // int | Number of resources to retrieve.
$start_index = 0; // int | Sort order index of the first resource in the returned array.
$fields = 'fields_example'; // string | Comma-delimited list of fields to return (`field_1,field_2`, and so on). Leave blank to return all fields.
$sort_by = '-lastModifiedTime'; // string | Use any field in the resource model, or one of the system fields `lastModifiedTime` or `createdTime`. Prefix the field name with a hyphen (`-`) to sort in descending order. Omit the hyphen to sort in ascending order.

try {
    $result = $apiInstance->getCardsUserToken($token, $count, $start_index, $fields, $sort_by);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CardsApi->getCardsUserToken: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **token** | **string**| Unique identifier of the user whose cards you want to list. Send a &#x60;GET&#x60; request to &#x60;/users&#x60; to retrieve user tokens. |
 **count** | **int**| Number of resources to retrieve. | [optional] [default to 5]
 **start_index** | **int**| Sort order index of the first resource in the returned array. | [optional] [default to 0]
 **fields** | **string**| Comma-delimited list of fields to return (&#x60;field_1,field_2&#x60;, and so on). Leave blank to return all fields. | [optional]
 **sort_by** | **string**| Use any field in the resource model, or one of the system fields &#x60;lastModifiedTime&#x60; or &#x60;createdTime&#x60;. Prefix the field name with a hyphen (&#x60;-&#x60;) to sort in descending order. Omit the hyphen to sort in ascending order. | [optional] [default to &#39;-lastModifiedTime&#39;]

### Return type

[**\OpenAPI\Client\Model\CardListResponse**](../Model/CardListResponse.md)

### Authorization

[mqAppAndAccessToken](../../README.md#mqAppAndAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postCards()`

```php
postCards($show_cvv_number, $show_pan, $card_request): \OpenAPI\Client\Model\CardResponse
```

Create card

Creates a card.  Create the user and card product before you create the card. You create a card using the `user_token` of the user who will own the card and the `card_product_token` of the card product that will control the card.  [TIP] By default, newly created cards are inactive and must be explicitly activated (see <</core-api/cards#_create_card_transition, Create Card Transition>> for information on activating cards). To create cards that are activated upon issue, configure your card product's `config.card_life_cycle.activate_upon_issue` field (see <</core-api/card-products, Card Products>>).  Send a `POST` request to `/pins/controltoken` to set the card's personal identification number (PIN) if your program requires PIN numbers (for example, for Europay Mastercard and Visa cards); this action updates the `pin_is_set` field to `true`. See <</core-api/pins#_create_or_update_pin, Create or Update PIN>> for details.  You can use optional query parameters to show the primary account number (PAN) and card verification value (CVV2) number in the response. If `show_pan` and `show_cvv_number` are set to `true`, the fulfillment state of the card is `DIGITALLY_PRESENTED` instead of the typical initial state of `ISSUED`. This fulfillment state does not affect the delivery of physical cards.  This endpoint requires PCI DSS compliance if `show_pan` and `show_cvv_number` are set to `true`. You must comply with PCI DSS data security requirements if you store, transmit, or process sensitive card data.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: mqAppAndAccessToken
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\CardsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$show_cvv_number = false; // bool | Set to `true` to show the CVV2 number in the response.
$show_pan = false; // bool | Set to `true` to show the full primary account number (PAN) in the response.
$card_request = {"card_product_token":"my_cardproduct_01","fulfillment":{"card_personalization":{"images":{"card":{"name":"my_card_logo.png","thermal_color":"Black"},"carrier_return_window":{"name":"my_return_address_image.png"},"signature":{"name":"my_signature.png"}},"text":{"name_line_1":{"value":"Jane Doe"},"name_line_2":{"value":"My card personalization line 2"}}}},"metadata":{"my_name_1":"my_value_1","my_name_2":"my_value_2"},"token":"my_test_card_01","user_token":"my_user_01"}; // \OpenAPI\Client\Model\CardRequest

try {
    $result = $apiInstance->postCards($show_cvv_number, $show_pan, $card_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CardsApi->postCards: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **show_cvv_number** | **bool**| Set to &#x60;true&#x60; to show the CVV2 number in the response. | [optional] [default to false]
 **show_pan** | **bool**| Set to &#x60;true&#x60; to show the full primary account number (PAN) in the response. | [optional] [default to false]
 **card_request** | [**\OpenAPI\Client\Model\CardRequest**](../Model/CardRequest.md)|  | [optional]

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

## `postCardsGetbypan()`

```php
postCardsGetbypan($pan_request): \OpenAPI\Client\Model\PanResponse
```

Retrieve card by PAN

Retrieves the `user_token` and `card_token` for a primary account number (PAN). In the case of a reissued card, where multiple cards share the same PAN, the information for the most recently issued card is returned.  This request is useful in IVR scenarios where a user has telephoned and identifies the card by the PAN. The retrieval of these tokens is implemented as a `POST` request because supplying the PAN in the request body is more secure than supplying it in the URL (as would be required with a `GET`).  [WARNING] Sending a request to this endpoint requires PCI DSS compliance. You must comply with PCI DSS data security requirements if you want to store, transmit, or process sensitive card data such as the cardholder's primary account number (PAN), personal identification number (PIN), and card expiration date.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: mqAppAndAccessToken
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\CardsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$pan_request = {"pan":"5454545454545454"}; // \OpenAPI\Client\Model\PanRequest

try {
    $result = $apiInstance->postCardsGetbypan($pan_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CardsApi->postCardsGetbypan: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **pan_request** | [**\OpenAPI\Client\Model\PanRequest**](../Model/PanRequest.md)|  | [optional]

### Return type

[**\OpenAPI\Client\Model\PanResponse**](../Model/PanResponse.md)

### Authorization

[mqAppAndAccessToken](../../README.md#mqAppAndAccessToken)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `putCardsToken()`

```php
putCardsToken($token, $card_update_request): \OpenAPI\Client\Model\CardResponse
```

Update card

Updates the details of an existing card.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: mqAppAndAccessToken
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\CardsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$token = 'token_example'; // string | Unique identifier of the card you want to update.
$card_update_request = {"token":"my_card_token_03","user_token":"my_user_03"}; // \OpenAPI\Client\Model\CardUpdateRequest

try {
    $result = $apiInstance->putCardsToken($token, $card_update_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CardsApi->putCardsToken: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **token** | **string**| Unique identifier of the card you want to update. |
 **card_update_request** | [**\OpenAPI\Client\Model\CardUpdateRequest**](../Model/CardUpdateRequest.md)|  | [optional]

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
