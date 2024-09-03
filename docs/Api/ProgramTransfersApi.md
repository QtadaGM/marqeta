# OpenAPI\Client\ProgramTransfersApi

All URIs are relative to /v3.

Method | HTTP request | Description
------------- | ------------- | -------------
[**getProgramtransfers()**](ProgramTransfersApi.md#getProgramtransfers) | **GET** /programtransfers | List program transfers
[**getProgramtransfersToken()**](ProgramTransfersApi.md#getProgramtransfersToken) | **GET** /programtransfers/{token} | Retrieve program transfer
[**getProgramtransfersTypes()**](ProgramTransfersApi.md#getProgramtransfersTypes) | **GET** /programtransfers/types | List program transfer types
[**getProgramtransfersTypesTypetoken()**](ProgramTransfersApi.md#getProgramtransfersTypesTypetoken) | **GET** /programtransfers/types/{type_token} | Retrieve program transfer type
[**postProgramtransfers()**](ProgramTransfersApi.md#postProgramtransfers) | **POST** /programtransfers | Create program transfer
[**postProgramtransfersTypes()**](ProgramTransfersApi.md#postProgramtransfersTypes) | **POST** /programtransfers/types | Create program transfer type
[**putProgramtransfersTypesTypetoken()**](ProgramTransfersApi.md#putProgramtransfersTypesTypetoken) | **PUT** /programtransfers/types/{type_token} | Update program transfer type


## `getProgramtransfers()`

```php
getProgramtransfers($count, $start_index, $fields, $sort_by, $user_token, $business_token, $type_token): \OpenAPI\Client\Model\ProgramTransferListResponse
```

List program transfers

Use this endpoint to list all program transfers.  To narrow your result set to program transfers of a particular type or that are associated with a particular account holder, include the appropriate parameters from the following URL Query Parameters table. This endpoint also supports <</core-api/field-filtering, field filtering>>, <</core-api/sorting-and-pagination, pagination>>, and <</core-api/sorting-and-pagination, sorting>>.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: mqAppAndAccessToken
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\ProgramTransfersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$count = 5; // int | Number of program transfers to retrieve.
$start_index = 0; // int | Sort order index of the first resource in the returned array.
$fields = 'fields_example'; // string | Comma-delimited list of fields to return (`field_1,field_2`, and so on). Leave blank to return all fields.
$sort_by = '-lastModifiedTime'; // string | Field on which to sort. Use any field in the resource model, or one of the system fields `lastModifiedTime` or `createdTime`. Prefix the field name with a hyphen (`-`) to sort in descending order. Omit the hyphen to sort in ascending order.
$user_token = 'user_token_example'; // string | Unique identifier of the user account holder whose program transfers you want to retrieve.  Send a `GET` request to `/users` to retrieve user tokens.
$business_token = 'business_token_example'; // string | Unique identifier of the business account holder whose program transfers you want to retrieve.  Send a `GET` request to `/businesses` to retrieve business tokens.
$type_token = 'type_token_example'; // string | Unique identifier of the program transfer type to retrieve.

try {
    $result = $apiInstance->getProgramtransfers($count, $start_index, $fields, $sort_by, $user_token, $business_token, $type_token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProgramTransfersApi->getProgramtransfers: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **count** | **int**| Number of program transfers to retrieve. | [optional] [default to 5]
 **start_index** | **int**| Sort order index of the first resource in the returned array. | [optional] [default to 0]
 **fields** | **string**| Comma-delimited list of fields to return (&#x60;field_1,field_2&#x60;, and so on). Leave blank to return all fields. | [optional]
 **sort_by** | **string**| Field on which to sort. Use any field in the resource model, or one of the system fields &#x60;lastModifiedTime&#x60; or &#x60;createdTime&#x60;. Prefix the field name with a hyphen (&#x60;-&#x60;) to sort in descending order. Omit the hyphen to sort in ascending order. | [optional] [default to &#39;-lastModifiedTime&#39;]
 **user_token** | **string**| Unique identifier of the user account holder whose program transfers you want to retrieve.  Send a &#x60;GET&#x60; request to &#x60;/users&#x60; to retrieve user tokens. | [optional]
 **business_token** | **string**| Unique identifier of the business account holder whose program transfers you want to retrieve.  Send a &#x60;GET&#x60; request to &#x60;/businesses&#x60; to retrieve business tokens. | [optional]
 **type_token** | **string**| Unique identifier of the program transfer type to retrieve. | [optional]

### Return type

[**\OpenAPI\Client\Model\ProgramTransferListResponse**](../Model/ProgramTransferListResponse.md)

### Authorization

[mqAppAndAccessToken](../../README.md#mqAppAndAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getProgramtransfersToken()`

```php
getProgramtransfersToken($token): \OpenAPI\Client\Model\ProgramTransferResponse
```

Retrieve program transfer

Use this endpoint to retrieve a specific program transfer. Include the program transfer `token` path parameter to specify the program transfer to retrieve.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: mqAppAndAccessToken
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\ProgramTransfersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$token = 'token_example'; // string | Unique identifier of the program transfer.

try {
    $result = $apiInstance->getProgramtransfersToken($token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProgramTransfersApi->getProgramtransfersToken: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **token** | **string**| Unique identifier of the program transfer. |

### Return type

[**\OpenAPI\Client\Model\ProgramTransferResponse**](../Model/ProgramTransferResponse.md)

### Authorization

[mqAppAndAccessToken](../../README.md#mqAppAndAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getProgramtransfersTypes()`

```php
getProgramtransfersTypes($count, $start_index, $fields, $sort_by): \OpenAPI\Client\Model\ProgramTransferTypeListResponse
```

List program transfer types

Use this endpoint to list all program transfer types.  This endpoint supports <</core-api/field-filtering, field filtering>>, <</core-api/sorting-and-pagination, pagination>>, and <</core-api/sorting-and-pagination, sorting>>.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: mqAppAndAccessToken
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\ProgramTransfersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$count = 5; // int | Number of program transfer types to retrieve.
$start_index = 0; // int | Sort order index of the first resource in the returned array.
$fields = 'fields_example'; // string | Comma-delimited list of fields to return (`field_1,field_2`, and so on). Leave blank to return all fields.
$sort_by = '-lastModifiedTime'; // string | Field on which to sort. Use any field in the resource model, or one of the system fields `lastModifiedTime` or `createdTime`. Prefix the field name with a hyphen (`-`) to sort in descending order. Omit the hyphen to sort in ascending order.

try {
    $result = $apiInstance->getProgramtransfersTypes($count, $start_index, $fields, $sort_by);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProgramTransfersApi->getProgramtransfersTypes: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **count** | **int**| Number of program transfer types to retrieve. | [optional] [default to 5]
 **start_index** | **int**| Sort order index of the first resource in the returned array. | [optional] [default to 0]
 **fields** | **string**| Comma-delimited list of fields to return (&#x60;field_1,field_2&#x60;, and so on). Leave blank to return all fields. | [optional]
 **sort_by** | **string**| Field on which to sort. Use any field in the resource model, or one of the system fields &#x60;lastModifiedTime&#x60; or &#x60;createdTime&#x60;. Prefix the field name with a hyphen (&#x60;-&#x60;) to sort in descending order. Omit the hyphen to sort in ascending order. | [optional] [default to &#39;-lastModifiedTime&#39;]

### Return type

[**\OpenAPI\Client\Model\ProgramTransferTypeListResponse**](../Model/ProgramTransferTypeListResponse.md)

### Authorization

[mqAppAndAccessToken](../../README.md#mqAppAndAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getProgramtransfersTypesTypetoken()`

```php
getProgramtransfersTypesTypetoken($type_token): \OpenAPI\Client\Model\ProgramTransferTypeResponse
```

Retrieve program transfer type

Use this endpoint to retrieve a specific program transfer. Include the `type_token` path parameter to indicate the program transfer type to return.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: mqAppAndAccessToken
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\ProgramTransfersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$type_token = 'type_token_example'; // string | Unique identifier of the program transfer type.

try {
    $result = $apiInstance->getProgramtransfersTypesTypetoken($type_token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProgramTransfersApi->getProgramtransfersTypesTypetoken: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **type_token** | **string**| Unique identifier of the program transfer type. |

### Return type

[**\OpenAPI\Client\Model\ProgramTransferTypeResponse**](../Model/ProgramTransferTypeResponse.md)

### Authorization

[mqAppAndAccessToken](../../README.md#mqAppAndAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postProgramtransfers()`

```php
postProgramtransfers($program_transfer): \OpenAPI\Client\Model\ProgramTransferResponse
```

Create program transfer

Use this endpoint to create a program transfer. Add the program transfer details to the body of the request in link:http://www.json.org/[JSON, window=\"_blank\"] format.  Include either `user_token` or `business_token` in the message body to specify the account holder whose general purpose account (GPA) will be debited by the program transfer. The user or business must already exist.  [NOTE] If the GPA has insufficient funds to cover both the amount of the program transfer and all attached fees, then no funds are transferred.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: mqAppAndAccessToken
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\ProgramTransfersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$program_transfer = {"amount":1.0,"currency_code":"USD","memo":"This is my program transfer","tags":"tag1, tag2, tag3","token":"my_program_transfer_01","type_token":"my_program_transfer_type_01","user_token":"my_user_01"}; // \OpenAPI\Client\Model\ProgramTransfer

try {
    $result = $apiInstance->postProgramtransfers($program_transfer);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProgramTransfersApi->postProgramtransfers: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **program_transfer** | [**\OpenAPI\Client\Model\ProgramTransfer**](../Model/ProgramTransfer.md)|  | [optional]

### Return type

[**\OpenAPI\Client\Model\ProgramTransferResponse**](../Model/ProgramTransferResponse.md)

### Authorization

[mqAppAndAccessToken](../../README.md#mqAppAndAccessToken)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postProgramtransfersTypes()`

```php
postProgramtransfersTypes($program_transfer_type_request): \OpenAPI\Client\Model\ProgramTransferTypeResponse
```

Create program transfer type

Use this endpoint to create a program transfer type. Add the program transfer details to the body of the request in link:http://www.json.org/[JSON, window=\"_blank\"] format.  You are required to pass in a `program_funding_source_token` to associate a program funding source with the program transfer type. You must therefore create a program funding source before creating a program transfer type.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: mqAppAndAccessToken
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\ProgramTransfersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$program_transfer_type_request = {"memo":"This is my program transfer type.","program_funding_source_token":"my_pfs_01","tags":"tag1, tag2, tag3","token":"my_program_transfer_type_01"}; // \OpenAPI\Client\Model\ProgramTransferTypeRequest

try {
    $result = $apiInstance->postProgramtransfersTypes($program_transfer_type_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProgramTransfersApi->postProgramtransfersTypes: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **program_transfer_type_request** | [**\OpenAPI\Client\Model\ProgramTransferTypeRequest**](../Model/ProgramTransferTypeRequest.md)|  | [optional]

### Return type

[**\OpenAPI\Client\Model\ProgramTransferTypeResponse**](../Model/ProgramTransferTypeResponse.md)

### Authorization

[mqAppAndAccessToken](../../README.md#mqAppAndAccessToken)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `putProgramtransfersTypesTypetoken()`

```php
putProgramtransfersTypesTypetoken($type_token, $program_transfer_type_request): \OpenAPI\Client\Model\ProgramTransferTypeResponse
```

Update program transfer type

Use this endpoint to update a program transfer type. Include the `type_token` path parameter to indicate the program transfer type to update. Add the modified detail parameters to the body of the request in link:http://www.json.org/[JSON, window=\"_blank\"] format. Only values of parameters in the request are modified; all others are left unchanged.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: mqAppAndAccessToken
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\ProgramTransfersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$type_token = 'type_token_example'; // string | Unique identifier of the program transfer type.
$program_transfer_type_request = {"memo":"Update program funding source.","program_funding_source_token":"pfs_test_02"}; // \OpenAPI\Client\Model\ProgramTransferTypeRequest

try {
    $result = $apiInstance->putProgramtransfersTypesTypetoken($type_token, $program_transfer_type_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProgramTransfersApi->putProgramtransfersTypesTypetoken: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **type_token** | **string**| Unique identifier of the program transfer type. |
 **program_transfer_type_request** | [**\OpenAPI\Client\Model\ProgramTransferTypeRequest**](../Model/ProgramTransferTypeRequest.md)|  | [optional]

### Return type

[**\OpenAPI\Client\Model\ProgramTransferTypeResponse**](../Model/ProgramTransferTypeResponse.md)

### Authorization

[mqAppAndAccessToken](../../README.md#mqAppAndAccessToken)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
