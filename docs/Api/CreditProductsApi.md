# OpenAPI\Client\CreditProductsApi

All URIs are relative to /v3.

Method | HTTP request | Description
------------- | ------------- | -------------
[**createProduct()**](CreditProductsApi.md#createProduct) | **POST** /products | Create credit product
[**lineageProducts()**](CreditProductsApi.md#lineageProducts) | **GET** /products/{token}/lineage | Retrieve credit product lineage
[**listProducts()**](CreditProductsApi.md#listProducts) | **GET** /products | List credit products
[**retrieveProduct()**](CreditProductsApi.md#retrieveProduct) | **GET** /products/{token} | Retrieve credit product


## `createProduct()`

```php
createProduct($product_create_req): \OpenAPI\Client\Model\ProductResponse
```

Create credit product

Create a credit product.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: mqAppAndAccessToken
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\CreditProductsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$product_create_req = {"card_product_tokens":["my_card_product1234"],"classification":"CONSUMER","config":{"billing_cycle_day":1,"fees":["LATE_PAYMENT_FEE"],"payment_due_day":31,"periodic_fees":[]},"credit_line":{"max":200000,"min":25},"currency_code":"USD","interest_calculation":{"application_of_credits":{"cycle_type":"BEGINNING_REVOLVING","day":1},"day_count":"ACTUAL","exclude_tran_types":["ANNUAL_FEE","LATE_PAYMENT_FEE","CASH_BACK_STATEMENT_CREDIT"],"grace_days_application":"NEXT_CYCLE_DATE","interest_application":["PRINCIPAL","FEES"],"interest_on_grace_reactivation":"ACCRUE_FULL_CYCLE","method":"AVG_DAILY_BALANCE_WITH_NEW_TRANSACTIONS","minimum_interest":1},"min_payment_calculation":{"include_overlimit_amount":true,"include_past_due_amount":true,"min_payment_flat_amount":25,"min_payment_percentage":{"include_fees_charged":["LATE_PAYMENT_FEE"],"include_interest_charged":false,"percentage_of_balance":1}},"min_payment_flat_amount":25,"min_payment_percentage":1,"name":"my_credit_product1234","payment_allocation_order":["INTEREST","FEES","PRINCIPAL"],"product_sub_type":"CREDIT_CARD","product_type":"REVOLVING","status":"ACTIVE","usage":["PURCHASE"]}; // \OpenAPI\Client\Model\ProductCreateReq

try {
    $result = $apiInstance->createProduct($product_create_req);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CreditProductsApi->createProduct: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **product_create_req** | [**\OpenAPI\Client\Model\ProductCreateReq**](../Model/ProductCreateReq.md)|  |

### Return type

[**\OpenAPI\Client\Model\ProductResponse**](../Model/ProductResponse.md)

### Authorization

[mqAppAndAccessToken](../../README.md#mqAppAndAccessToken)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `lineageProducts()`

```php
lineageProducts($token, $status, $count, $start_index, $sort_by): \OpenAPI\Client\Model\ProductsPage
```

Retrieve credit product lineage

Retrieve the lineage of a credit product, which is an array of related credit products whose lineage can be traced back to the same original credit product.  This endpoint supports <</core-api/sorting-and-pagination, sorting and pagination>>.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: mqAppAndAccessToken
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\CreditProductsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$token = 'token_example'; // string | Unique identifier of the credit product whose lineage you want to retrieve.  Send a `GET` request to `/credit/products` to retrieve existing credit product tokens.
$status = array(new \OpenAPI\Client\Model\\OpenAPI\Client\Model\ResourceStatus()); // \OpenAPI\Client\Model\ResourceStatus[] | An array of statuses by which to filter credit products.
$count = 5; // int | Number of credit product resources to retrieve.
$start_index = 0; // int | Sort order index of the first resource in the returned array.
$sort_by = '-lastModifiedTime'; // string | Field on which to sort. Prefix the field name with a hyphen (`-`) to sort in descending order. Omit the hyphen to sort in ascending order.  *NOTE:* You must sort using system field names such as `lastModifiedTime`, and not by the field names appearing in response bodies such as `last_modified_time`.

try {
    $result = $apiInstance->lineageProducts($token, $status, $count, $start_index, $sort_by);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CreditProductsApi->lineageProducts: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **token** | **string**| Unique identifier of the credit product whose lineage you want to retrieve.  Send a &#x60;GET&#x60; request to &#x60;/credit/products&#x60; to retrieve existing credit product tokens. |
 **status** | [**\OpenAPI\Client\Model\ResourceStatus[]**](../Model/\OpenAPI\Client\Model\ResourceStatus.md)| An array of statuses by which to filter credit products. | [optional]
 **count** | **int**| Number of credit product resources to retrieve. | [optional] [default to 5]
 **start_index** | **int**| Sort order index of the first resource in the returned array. | [optional] [default to 0]
 **sort_by** | **string**| Field on which to sort. Prefix the field name with a hyphen (&#x60;-&#x60;) to sort in descending order. Omit the hyphen to sort in ascending order.  *NOTE:* You must sort using system field names such as &#x60;lastModifiedTime&#x60;, and not by the field names appearing in response bodies such as &#x60;last_modified_time&#x60;. | [optional] [default to &#39;-lastModifiedTime&#39;]

### Return type

[**\OpenAPI\Client\Model\ProductsPage**](../Model/ProductsPage.md)

### Authorization

[mqAppAndAccessToken](../../README.md#mqAppAndAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listProducts()`

```php
listProducts($status, $count, $start_index, $sort_by): \OpenAPI\Client\Model\ProductsPage
```

List credit products

Retrieve an array of credit products.  This endpoint supports <</core-api/sorting-and-pagination, sorting and pagination>>.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: mqAppAndAccessToken
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\CreditProductsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$status = array(new \OpenAPI\Client\Model\\OpenAPI\Client\Model\ResourceStatus()); // \OpenAPI\Client\Model\ResourceStatus[] | An array of statuses by which to filter credit products.
$count = 5; // int | Number of credit product resources to retrieve.
$start_index = 0; // int | Sort order index of the first resource in the returned array.
$sort_by = '-lastModifiedTime'; // string | Field on which to sort. Prefix the field name with a hyphen (`-`) to sort in descending order. Omit the hyphen to sort in ascending order.  *NOTE:* You must sort using system field names such as `lastModifiedTime`, and not by the field names appearing in response bodies such as `last_modified_time`.

try {
    $result = $apiInstance->listProducts($status, $count, $start_index, $sort_by);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CreditProductsApi->listProducts: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **status** | [**\OpenAPI\Client\Model\ResourceStatus[]**](../Model/\OpenAPI\Client\Model\ResourceStatus.md)| An array of statuses by which to filter credit products. | [optional]
 **count** | **int**| Number of credit product resources to retrieve. | [optional] [default to 5]
 **start_index** | **int**| Sort order index of the first resource in the returned array. | [optional] [default to 0]
 **sort_by** | **string**| Field on which to sort. Prefix the field name with a hyphen (&#x60;-&#x60;) to sort in descending order. Omit the hyphen to sort in ascending order.  *NOTE:* You must sort using system field names such as &#x60;lastModifiedTime&#x60;, and not by the field names appearing in response bodies such as &#x60;last_modified_time&#x60;. | [optional] [default to &#39;-lastModifiedTime&#39;]

### Return type

[**\OpenAPI\Client\Model\ProductsPage**](../Model/ProductsPage.md)

### Authorization

[mqAppAndAccessToken](../../README.md#mqAppAndAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `retrieveProduct()`

```php
retrieveProduct($token): \OpenAPI\Client\Model\ProductResponse
```

Retrieve credit product

Retrieve a credit product.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: mqAppAndAccessToken
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\CreditProductsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$token = 'token_example'; // string | Unique identifier of the credit product to retrieve.  Send a `GET` request to `/credit/products` to retrieve existing credit product tokens.

try {
    $result = $apiInstance->retrieveProduct($token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CreditProductsApi->retrieveProduct: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **token** | **string**| Unique identifier of the credit product to retrieve.  Send a &#x60;GET&#x60; request to &#x60;/credit/products&#x60; to retrieve existing credit product tokens. |

### Return type

[**\OpenAPI\Client\Model\ProductResponse**](../Model/ProductResponse.md)

### Authorization

[mqAppAndAccessToken](../../README.md#mqAppAndAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
