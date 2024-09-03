# OpenAPI\Client\BulkCardOrdersApi

All URIs are relative to /v3.

Method | HTTP request | Description
------------- | ------------- | -------------
[**getBulkissuances()**](BulkCardOrdersApi.md#getBulkissuances) | **GET** /bulkissuances | List bulk card orders
[**getBulkissuancesToken()**](BulkCardOrdersApi.md#getBulkissuancesToken) | **GET** /bulkissuances/{token} | Retrieve bulk card order
[**postBulkissuances()**](BulkCardOrdersApi.md#postBulkissuances) | **POST** /bulkissuances | Create bulk card order


## `getBulkissuances()`

```php
getBulkissuances($count, $start_index, $sort_by): \OpenAPI\Client\Model\BulkCardOrderListResponse
```

List bulk card orders

Use this endpoint to list existing bulk card orders.  This endpoint supports <</core-api/sorting-and-pagination, pagination and sorting>>.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: mqAppAndAccessToken
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\BulkCardOrdersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$count = 5; // int | Number of bulk card orders to retrieve.
$start_index = 0; // int | Sort order index of the first resource in the returned array.
$sort_by = '-createdTime'; // string | Field on which to sort. Use any field in the resource model, or one of the system fields `lastModifiedTime` or `createdTime`. Prefix the field name with a hyphen (`-`) to sort in descending order. Omit the hyphen to sort in ascending order.

try {
    $result = $apiInstance->getBulkissuances($count, $start_index, $sort_by);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BulkCardOrdersApi->getBulkissuances: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **count** | **int**| Number of bulk card orders to retrieve. | [optional] [default to 5]
 **start_index** | **int**| Sort order index of the first resource in the returned array. | [optional] [default to 0]
 **sort_by** | **string**| Field on which to sort. Use any field in the resource model, or one of the system fields &#x60;lastModifiedTime&#x60; or &#x60;createdTime&#x60;. Prefix the field name with a hyphen (&#x60;-&#x60;) to sort in descending order. Omit the hyphen to sort in ascending order. | [optional] [default to &#39;-createdTime&#39;]

### Return type

[**\OpenAPI\Client\Model\BulkCardOrderListResponse**](../Model/BulkCardOrderListResponse.md)

### Authorization

[mqAppAndAccessToken](../../README.md#mqAppAndAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getBulkissuancesToken()`

```php
getBulkissuancesToken($token): \OpenAPI\Client\Model\BulkIssuanceResponse
```

Retrieve bulk card order

Use this endpoint to retrieve a specific bulk card order.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: mqAppAndAccessToken
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\BulkCardOrdersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$token = 'token_example'; // string | The unique identifier of the bulk card order to retrieve.

try {
    $result = $apiInstance->getBulkissuancesToken($token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BulkCardOrdersApi->getBulkissuancesToken: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **token** | **string**| The unique identifier of the bulk card order to retrieve. |

### Return type

[**\OpenAPI\Client\Model\BulkIssuanceResponse**](../Model/BulkIssuanceResponse.md)

### Authorization

[mqAppAndAccessToken](../../README.md#mqAppAndAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postBulkissuances()`

```php
postBulkissuances($bulk_issuance_request): \OpenAPI\Client\Model\BulkIssuanceResponse
```

Create bulk card order

Use this endpoint to order physical cards in bulk. A new bulk card order creates new cards or users, generally within about a day.  Before creating a bulk card order, set the `config.fulfillment.bulk_ship` field of the associated card product to `true`.  *To associate all cards with the same user:*  * Set `user_association.single_inventory_user=true` * Set `user_association.single_inventory_user_token` equal to the token of an existing user.  The bulk card order automatically populates the database with the specified card objects. Values for the card `token` fields are generated in the format `card-numericPostfix`, where `numericPostfix` is a randomly generated number that is added for each new card that is generated.  *To associate each card with a unique user:*  Set `user_association.single_inventory_user=false`. Both the cards and their associated users are automatically generated. Values for the user `token` fields are generated in the format `user-numericPostfix`. The `numericPostfix` values for cards and their associated users match. This value is also printed on the physical cards if the `name_line_1_numeric_postfix` field is set to `true`.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: mqAppAndAccessToken
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\BulkCardOrdersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$bulk_issuance_request = {"card_allocation":3,"card_product_token":"my_card_product_02","fulfillment":{"card_personalization":{"carrier":{"message_line":"my message","name":"my_carrier_logo.png"},"images":{"card":{"name":"my_card_logo.png","thermal_color":"Black"},"carrier_return_window":{"name":"my_return_address_image.png"},"signature":{"name":"my_signature.png"}},"text":{"name_line_1":{"value":"Saki Dogger"},"name_line_2":{"value":"Aegis Fleet Services"}}},"shipping":{"method":"UPS_REGULAR","recipient_address":{"address1":"1255 Lake Street","city":"Oakland","country":"USA","first_name":"Saki","last_name":"Dogger","phone":"5103333333","postal_code":"94611","state":"CA"},"return_address":{"address1":"1222 Blake Street","city":"Berkeley","country":"USA","first_name":"Shipping","last_name":"R_US","phone":"5102222222","postal_code":"94702","state":"CA"}}},"name_line_1_numeric_postfix":true,"token":"bulk_06_token","user_association":{"single_inventory_user":false}}; // \OpenAPI\Client\Model\BulkIssuanceRequest

try {
    $result = $apiInstance->postBulkissuances($bulk_issuance_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BulkCardOrdersApi->postBulkissuances: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **bulk_issuance_request** | [**\OpenAPI\Client\Model\BulkIssuanceRequest**](../Model/BulkIssuanceRequest.md)|  | [optional]

### Return type

[**\OpenAPI\Client\Model\BulkIssuanceResponse**](../Model/BulkIssuanceResponse.md)

### Authorization

[mqAppAndAccessToken](../../README.md#mqAppAndAccessToken)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
