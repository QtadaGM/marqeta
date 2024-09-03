# OpenAPI\Client\CardProductsApi

All URIs are relative to /v3.

Method | HTTP request | Description
------------- | ------------- | -------------
[**getCardproducts()**](CardProductsApi.md#getCardproducts) | **GET** /cardproducts | List card products
[**getCardproductsToken()**](CardProductsApi.md#getCardproductsToken) | **GET** /cardproducts/{token} | Retrieve card product
[**postCardproducts()**](CardProductsApi.md#postCardproducts) | **POST** /cardproducts | Create card product
[**putCardproductsToken()**](CardProductsApi.md#putCardproductsToken) | **PUT** /cardproducts/{token} | Update card product


## `getCardproducts()`

```php
getCardproducts($count, $start_index, $sort_by): \OpenAPI\Client\Model\CardProductListResponse
```

List card products

Use this endpoint to list existing card products.  This endpoint supports <</core-api/sorting-and-pagination, pagination>>.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: mqAppAndAccessToken
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\CardProductsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$count = 5; // int | Number of resources to retrieve. Count can be between 1 - 10 items.
$start_index = 0; // int | The sort order index of the first resource in the returned array.
$sort_by = '-createdTime'; // string | Field on which to sort. Use any field in the resource model, or one of the system fields `lastModifiedTime` or `createdTime`. Prefix the field name with a hyphen (`-`) to sort in descending order. Omit the hyphen to sort in ascending order.

try {
    $result = $apiInstance->getCardproducts($count, $start_index, $sort_by);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CardProductsApi->getCardproducts: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **count** | **int**| Number of resources to retrieve. Count can be between 1 - 10 items. | [optional] [default to 5]
 **start_index** | **int**| The sort order index of the first resource in the returned array. | [optional] [default to 0]
 **sort_by** | **string**| Field on which to sort. Use any field in the resource model, or one of the system fields &#x60;lastModifiedTime&#x60; or &#x60;createdTime&#x60;. Prefix the field name with a hyphen (&#x60;-&#x60;) to sort in descending order. Omit the hyphen to sort in ascending order. | [optional] [default to &#39;-createdTime&#39;]

### Return type

[**\OpenAPI\Client\Model\CardProductListResponse**](../Model/CardProductListResponse.md)

### Authorization

[mqAppAndAccessToken](../../README.md#mqAppAndAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getCardproductsToken()`

```php
getCardproductsToken($token): \OpenAPI\Client\Model\CardProductResponse
```

Retrieve card product

Use this endpoint to retrieve a specific card product.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: mqAppAndAccessToken
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\CardProductsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$token = 'token_example'; // string | Unique identifier of the card product to retrieve.

try {
    $result = $apiInstance->getCardproductsToken($token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CardProductsApi->getCardproductsToken: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **token** | **string**| Unique identifier of the card product to retrieve. |

### Return type

[**\OpenAPI\Client\Model\CardProductResponse**](../Model/CardProductResponse.md)

### Authorization

[mqAppAndAccessToken](../../README.md#mqAppAndAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postCardproducts()`

```php
postCardproducts($card_product_request): \OpenAPI\Client\Model\CardProductResponse
```

Create card product

Use this endpoint to create a card product.  The card product request contains a set of fields that provide basic information about the card product, such as name, active status, and start and end dates. Configuration information is contained in the `config` object, which contains sub-elements whose fields control the features and behavior of the card product. The elements are referred to collectively as the card product \"configuration,\" and as such are contained in a `config` object.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: mqAppAndAccessToken
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\CardProductsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$card_product_request = {"config":{"card_life_cycle":{"activate_upon_issue":true,"card_service_code":101,"expiration_offset":{"unit":"YEARS","value":10},"update_expiration_upon_activation":false},"fulfillment":{"all_zero_card_security_code":false,"bin_prefix":"111111","bulk_ship":false,"card_personalization":{"carrier":{"message_line":"my message","name":"my_carrier_logo.png"},"carrier_return_window":{"name":"my_return_address_image.png"},"images":{"card":{"name":"my_card_logo.png","thermal_color":"Black"}},"signature":{"name":"my_signature.png"},"text":{"name_line_1":{"value":"Saki Dogger"},"name_line_2":{"value":"Aegis Fleet Services"}}},"fulfillment_provider":"PERFECTPLASTIC","package_id":"0","pan_length":"16","payment_instrument":"PHYSICAL_MSR","shipping":{"method":"OVERNIGHT","recipient_address":{"address1":"1234 Grove Street","city":"Berkeley","country":"USA","first_name":"Jane","last_name":"Doe","phone":"5105551212","postal_code":"94702","state":"CA"},"return_address":{"address1":"123 Henry St","address2":"Suite 101","city":"Porterville","country":"USA","first_name":"Saki","last_name":"Dogger","middle_name":"R","phone":"8315551212","postal_code":"93257","state":"CA"}}},"jit_funding":{"paymentcard_funding_source":{"enabled":true}},"poi":{"atm":false,"ecommerce":false,"other":{"allow":true,"card_presence_required":false,"cardholder_presence_required":false}},"selective_auth":{"dmd_location_sensitivity":0,"enable_regex_search_chain":false,"sa_mode":1},"transaction_controls":{"accepted_countries_token":"accept_us_only","allow_gpa_auth":true,"allow_mcc_group_authorization_controls":true,"allow_network_load":false,"allow_network_load_card_activation":false,"allow_quasi_cash":false,"always_require_icc":false,"always_require_pin":false,"enable_partial_auth_approval":true,"ignore_card_suspended_state":false,"notification_language":"fra","require_card_not_present_card_security_code":false}},"name":"My Card Product 01","start_date":"2021-04-27","token":"my_cardproduct_01"}; // \OpenAPI\Client\Model\CardProductRequest | Card product object

try {
    $result = $apiInstance->postCardproducts($card_product_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CardProductsApi->postCardproducts: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **card_product_request** | [**\OpenAPI\Client\Model\CardProductRequest**](../Model/CardProductRequest.md)| Card product object |

### Return type

[**\OpenAPI\Client\Model\CardProductResponse**](../Model/CardProductResponse.md)

### Authorization

[mqAppAndAccessToken](../../README.md#mqAppAndAccessToken)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `putCardproductsToken()`

```php
putCardproductsToken($token, $card_product_update_model): \OpenAPI\Client\Model\CardProductResponse
```

Update card product

Use this endpoint to update a card product. Only values of fields in the request are modified; all others are left unchanged.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: mqAppAndAccessToken
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\CardProductsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$token = 'token_example'; // string | Unique identifier of the card product to update.
$card_product_update_model = {"active":false}; // \OpenAPI\Client\Model\CardProductUpdateModel | Card product object

try {
    $result = $apiInstance->putCardproductsToken($token, $card_product_update_model);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CardProductsApi->putCardproductsToken: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **token** | **string**| Unique identifier of the card product to update. |
 **card_product_update_model** | [**\OpenAPI\Client\Model\CardProductUpdateModel**](../Model/CardProductUpdateModel.md)| Card product object |

### Return type

[**\OpenAPI\Client\Model\CardProductResponse**](../Model/CardProductResponse.md)

### Authorization

[mqAppAndAccessToken](../../README.md#mqAppAndAccessToken)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
