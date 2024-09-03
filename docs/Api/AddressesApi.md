# OpenAPI\Client\AddressesApi

All URIs are relative to /v3.

Method | HTTP request | Description
------------- | ------------- | -------------
[**getFundingsourcesAddressesBusinessBusinesstoken()**](AddressesApi.md#getFundingsourcesAddressesBusinessBusinesstoken) | **GET** /fundingsources/addresses/business/{business_token} | List business addresses
[**getFundingsourcesAddressesFundingsourceaddresstoken()**](AddressesApi.md#getFundingsourcesAddressesFundingsourceaddresstoken) | **GET** /fundingsources/addresses/{funding_source_address_token} | Retrieve address
[**getFundingsourcesAddressesUserUsertoken()**](AddressesApi.md#getFundingsourcesAddressesUserUsertoken) | **GET** /fundingsources/addresses/user/{user_token} | Lists all addresses for a user
[**postFundingsourcesAddresses()**](AddressesApi.md#postFundingsourcesAddresses) | **POST** /fundingsources/addresses | Create address
[**putFundingsourcesAddressesFundingsourceaddresstoken()**](AddressesApi.md#putFundingsourcesAddressesFundingsourceaddresstoken) | **PUT** /fundingsources/addresses/{funding_source_address_token} | Update address


## `getFundingsourcesAddressesBusinessBusinesstoken()`

```php
getFundingsourcesAddressesBusinessBusinesstoken($business_token, $fields): \OpenAPI\Client\Model\CardholderAddressListResponse
```

List business addresses

Use this endpoint to list existing addresses for a business. This endpoint supports <</core-api/field-filtering, field filtering>>.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: mqAppAndAccessToken
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\AddressesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$business_token = 'business_token_example'; // string | Unique identifier of the business account holder.  Send a `GET` request to `/businesses` to retrieve business tokens.
$fields = 'fields_example'; // string | Comma-delimited list of fields to return (`field_1,field_2`, and so on). Leave blank to return all fields.

try {
    $result = $apiInstance->getFundingsourcesAddressesBusinessBusinesstoken($business_token, $fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AddressesApi->getFundingsourcesAddressesBusinessBusinesstoken: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **business_token** | **string**| Unique identifier of the business account holder.  Send a &#x60;GET&#x60; request to &#x60;/businesses&#x60; to retrieve business tokens. |
 **fields** | **string**| Comma-delimited list of fields to return (&#x60;field_1,field_2&#x60;, and so on). Leave blank to return all fields. | [optional]

### Return type

[**\OpenAPI\Client\Model\CardholderAddressListResponse**](../Model/CardholderAddressListResponse.md)

### Authorization

[mqAppAndAccessToken](../../README.md#mqAppAndAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getFundingsourcesAddressesFundingsourceaddresstoken()`

```php
getFundingsourcesAddressesFundingsourceaddresstoken($funding_source_address_token): \OpenAPI\Client\Model\CardholderAddressResponse
```

Retrieve address

Use this endpoint to retrieve a funding source address.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: mqAppAndAccessToken
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\AddressesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$funding_source_address_token = 'funding_source_address_token_example'; // string | Unique identifier of the funding source address.

try {
    $result = $apiInstance->getFundingsourcesAddressesFundingsourceaddresstoken($funding_source_address_token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AddressesApi->getFundingsourcesAddressesFundingsourceaddresstoken: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **funding_source_address_token** | **string**| Unique identifier of the funding source address. |

### Return type

[**\OpenAPI\Client\Model\CardholderAddressResponse**](../Model/CardholderAddressResponse.md)

### Authorization

[mqAppAndAccessToken](../../README.md#mqAppAndAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getFundingsourcesAddressesUserUsertoken()`

```php
getFundingsourcesAddressesUserUsertoken($user_token, $fields): \OpenAPI\Client\Model\CardholderAddressListResponse
```

Lists all addresses for a user

Use this endpoint to list existing addresses for a user. This endpoint supports <</core-api/field-filtering, field filtering>>.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: mqAppAndAccessToken
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\AddressesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$user_token = 'user_token_example'; // string | Unique identifier of the user account holder.
$fields = 'fields_example'; // string | Comma-delimited list of fields to return (`field_1,field_2`, and so on). Leave blank to return all fields.

try {
    $result = $apiInstance->getFundingsourcesAddressesUserUsertoken($user_token, $fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AddressesApi->getFundingsourcesAddressesUserUsertoken: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **user_token** | **string**| Unique identifier of the user account holder. |
 **fields** | **string**| Comma-delimited list of fields to return (&#x60;field_1,field_2&#x60;, and so on). Leave blank to return all fields. | [optional]

### Return type

[**\OpenAPI\Client\Model\CardholderAddressListResponse**](../Model/CardholderAddressListResponse.md)

### Authorization

[mqAppAndAccessToken](../../README.md#mqAppAndAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postFundingsourcesAddresses()`

```php
postFundingsourcesAddresses($card_holder_address_model): \OpenAPI\Client\Model\CardholderAddressResponse
```

Create address

Use this endpoint to create an address resource.  When creating the address, you must pass the token of either an existing user in the `user_token` field or an existing business in the `business_token` field. Do not pass both.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: mqAppAndAccessToken
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\AddressesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$card_holder_address_model = {"address_1":"1234 Grove Street","business_token":"my_business_01","city":"Berkeley","country":"USA","first_name":"Jane","last_name":"Doe","phone":"5104444444","postal_code":"94705","state":"CA","token":"my_funding_source_address_biz_01","zip":"94705"}; // \OpenAPI\Client\Model\CardHolderAddressModel

try {
    $result = $apiInstance->postFundingsourcesAddresses($card_holder_address_model);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AddressesApi->postFundingsourcesAddresses: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **card_holder_address_model** | [**\OpenAPI\Client\Model\CardHolderAddressModel**](../Model/CardHolderAddressModel.md)|  | [optional]

### Return type

[**\OpenAPI\Client\Model\CardholderAddressResponse**](../Model/CardholderAddressResponse.md)

### Authorization

[mqAppAndAccessToken](../../README.md#mqAppAndAccessToken)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `putFundingsourcesAddressesFundingsourceaddresstoken()`

```php
putFundingsourcesAddressesFundingsourceaddresstoken($funding_source_address_token, $card_holder_address_update_model): \OpenAPI\Client\Model\CardholderAddressResponse
```

Update address

Use this endpoint to update an address.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: mqAppAndAccessToken
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\AddressesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$funding_source_address_token = 'funding_source_address_token_example'; // string | Unique identifier of the funding source address.
$card_holder_address_update_model = {"address_1":"333 Elm Street"}; // \OpenAPI\Client\Model\CardHolderAddressUpdateModel

try {
    $result = $apiInstance->putFundingsourcesAddressesFundingsourceaddresstoken($funding_source_address_token, $card_holder_address_update_model);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AddressesApi->putFundingsourcesAddressesFundingsourceaddresstoken: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **funding_source_address_token** | **string**| Unique identifier of the funding source address. |
 **card_holder_address_update_model** | [**\OpenAPI\Client\Model\CardHolderAddressUpdateModel**](../Model/CardHolderAddressUpdateModel.md)|  | [optional]

### Return type

[**\OpenAPI\Client\Model\CardholderAddressResponse**](../Model/CardholderAddressResponse.md)

### Authorization

[mqAppAndAccessToken](../../README.md#mqAppAndAccessToken)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
