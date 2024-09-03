# OpenAPI\Client\BusinessesApi

All URIs are relative to /v3.

Method | HTTP request | Description
------------- | ------------- | -------------
[**getBusinesses()**](BusinessesApi.md#getBusinesses) | **GET** /businesses | List businesses
[**getBusinessesParenttokenChildren()**](BusinessesApi.md#getBusinessesParenttokenChildren) | **GET** /businesses/{parent_token}/children | List business children
[**getBusinessesToken()**](BusinessesApi.md#getBusinessesToken) | **GET** /businesses/{token} | Retrieve business
[**getBusinessesTokenSsn()**](BusinessesApi.md#getBusinessesTokenSsn) | **GET** /businesses/{token}/ssn | Retrieve business identification number
[**postBusinesses()**](BusinessesApi.md#postBusinesses) | **POST** /businesses | Create business
[**postBusinessesLookup()**](BusinessesApi.md#postBusinessesLookup) | **POST** /businesses/lookup | Search businesses
[**putBusinessesToken()**](BusinessesApi.md#putBusinessesToken) | **PUT** /businesses/{token} | Update business


## `getBusinesses()`

```php
getBusinesses($count, $start_index, $business_name_dba, $business_name_legal, $search_type, $fields, $sort_by): \OpenAPI\Client\Model\BusinessCardHolderListResponse
```

List businesses

To return an array of all businesses, send a `GET` request to the `/businesses` endpoint.  To narrow your result set to businesses that match a particular legal or fictitious name, include the appropriate parameters from the following query parameters table. This endpoint also supports <</core-api/field-filtering, field filtering>> and <</core-api/sorting-and-pagination, sorting and pagination>>.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: mqAppAndAccessToken
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\BusinessesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$count = 5; // int | Number of business resources to retrieve.
$start_index = 0; // int | Sort order index of the first resource in the returned array.
$business_name_dba = 'business_name_dba_example'; // string | Fictitious or \"doing business as (DBA)\" name of the business.
$business_name_legal = 'business_name_legal_example'; // string | Legal name of the business.
$search_type = 'search_type_example'; // string | Specifies the search type for the query.
$fields = 'fields_example'; // string | Comma-delimited list of fields to return (`field_1,field_2`, and so on). Leave blank to return all fields.
$sort_by = '-lastModifiedTime'; // string | Field on which to sort. Use any field in the resource model, or one of the system fields `lastModifiedTime` or `createdTime`. Prefix the field name with a hyphen (`-`) to sort in descending order. Omit the hyphen to sort in ascending order.

try {
    $result = $apiInstance->getBusinesses($count, $start_index, $business_name_dba, $business_name_legal, $search_type, $fields, $sort_by);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BusinessesApi->getBusinesses: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **count** | **int**| Number of business resources to retrieve. | [optional] [default to 5]
 **start_index** | **int**| Sort order index of the first resource in the returned array. | [optional] [default to 0]
 **business_name_dba** | **string**| Fictitious or \&quot;doing business as (DBA)\&quot; name of the business. | [optional]
 **business_name_legal** | **string**| Legal name of the business. | [optional]
 **search_type** | **string**| Specifies the search type for the query. | [optional]
 **fields** | **string**| Comma-delimited list of fields to return (&#x60;field_1,field_2&#x60;, and so on). Leave blank to return all fields. | [optional]
 **sort_by** | **string**| Field on which to sort. Use any field in the resource model, or one of the system fields &#x60;lastModifiedTime&#x60; or &#x60;createdTime&#x60;. Prefix the field name with a hyphen (&#x60;-&#x60;) to sort in descending order. Omit the hyphen to sort in ascending order. | [optional] [default to &#39;-lastModifiedTime&#39;]

### Return type

[**\OpenAPI\Client\Model\BusinessCardHolderListResponse**](../Model/BusinessCardHolderListResponse.md)

### Authorization

[mqAppAndAccessToken](../../README.md#mqAppAndAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getBusinessesParenttokenChildren()`

```php
getBusinessesParenttokenChildren($parent_token, $count, $start_index, $fields, $sort_by): \OpenAPI\Client\Model\BusinessUserCardHolderListResponse
```

List business children

To return an array of all child cardholders of a particular business, send a `GET` request to the `/businesses/{parent_token}/children` endpoint. Include the `parent_token` as a URL path parameter.  This endpoint supports <</core-api/field-filtering, field filtering>>.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: mqAppAndAccessToken
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\BusinessesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$parent_token = 'parent_token_example'; // string | Unique identifier of the parent business.
$count = 5; // int | Number of child cardholders to retrieve.
$start_index = 0; // int | Sort order index of the first resource in the returned array.
$fields = 'fields_example'; // string | Comma-delimited list of fields to return (`field_1,field_2`, and so on). Leave blank to return all fields.
$sort_by = '-lastModifiedTime'; // string | Field on which to sort. Use any field in the resource model, or one of the system fields `lastModifiedTime` or `createdTime`. Prefix the field name with a hyphen (`-`) to sort in descending order. Omit the hyphen to sort in ascending order.

try {
    $result = $apiInstance->getBusinessesParenttokenChildren($parent_token, $count, $start_index, $fields, $sort_by);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BusinessesApi->getBusinessesParenttokenChildren: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **parent_token** | **string**| Unique identifier of the parent business. |
 **count** | **int**| Number of child cardholders to retrieve. | [optional] [default to 5]
 **start_index** | **int**| Sort order index of the first resource in the returned array. | [optional] [default to 0]
 **fields** | **string**| Comma-delimited list of fields to return (&#x60;field_1,field_2&#x60;, and so on). Leave blank to return all fields. | [optional]
 **sort_by** | **string**| Field on which to sort. Use any field in the resource model, or one of the system fields &#x60;lastModifiedTime&#x60; or &#x60;createdTime&#x60;. Prefix the field name with a hyphen (&#x60;-&#x60;) to sort in descending order. Omit the hyphen to sort in ascending order. | [optional] [default to &#39;-lastModifiedTime&#39;]

### Return type

[**\OpenAPI\Client\Model\BusinessUserCardHolderListResponse**](../Model/BusinessUserCardHolderListResponse.md)

### Authorization

[mqAppAndAccessToken](../../README.md#mqAppAndAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getBusinessesToken()`

```php
getBusinessesToken($token, $fields): \OpenAPI\Client\Model\BusinessCardHolderResponse
```

Retrieve business

To retrieve a specific business, send a `GET` request to the `/businesses/{token}` endpoint. Include the business `token` path parameter to specify the business to return.  This endpoint supports <</core-api/field-filtering, field filtering>> and <</core-api/sorting-and-pagination, sorting and pagination>>.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: mqAppAndAccessToken
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\BusinessesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$token = 'token_example'; // string | Unique identifier of the business resource.
$fields = 'fields_example'; // string | Comma-delimited list of fields to return (`field_1,field_2`, and so on). Leave blank to return all fields.

try {
    $result = $apiInstance->getBusinessesToken($token, $fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BusinessesApi->getBusinessesToken: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **token** | **string**| Unique identifier of the business resource. |
 **fields** | **string**| Comma-delimited list of fields to return (&#x60;field_1,field_2&#x60;, and so on). Leave blank to return all fields. | [optional]

### Return type

[**\OpenAPI\Client\Model\BusinessCardHolderResponse**](../Model/BusinessCardHolderResponse.md)

### Authorization

[mqAppAndAccessToken](../../README.md#mqAppAndAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getBusinessesTokenSsn()`

```php
getBusinessesTokenSsn($token, $full_ssn): \OpenAPI\Client\Model\SsnResponseModel
```

Retrieve business identification number

To retrieve the government-issued identification number of a business' proprietor, send a `GET` request to the `/businesses/{token}/ssn` endpoint. Include the `token` path parameter to specify the business whose identification number (SSN, TIN, NIN, SIN) you want to return. You can indicate whether to return the full number or the last four digits only.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: mqAppAndAccessToken
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\BusinessesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$token = 'token_example'; // string | Unique identifier of the business resource.
$full_ssn = True; // bool | To return the full identification number, set to `true`. To return only the last four digits, set to `false`. If the `proprietor_or_officer.identifications` array contains only the last four digits of the identification number, the `/businesses/{token}/ssn` endpoint will return only the last four digits regardless of the `full_ssn` parameter.

try {
    $result = $apiInstance->getBusinessesTokenSsn($token, $full_ssn);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BusinessesApi->getBusinessesTokenSsn: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **token** | **string**| Unique identifier of the business resource. |
 **full_ssn** | **bool**| To return the full identification number, set to &#x60;true&#x60;. To return only the last four digits, set to &#x60;false&#x60;. If the &#x60;proprietor_or_officer.identifications&#x60; array contains only the last four digits of the identification number, the &#x60;/businesses/{token}/ssn&#x60; endpoint will return only the last four digits regardless of the &#x60;full_ssn&#x60; parameter. | [optional]

### Return type

[**\OpenAPI\Client\Model\SsnResponseModel**](../Model/SsnResponseModel.md)

### Authorization

[mqAppAndAccessToken](../../README.md#mqAppAndAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postBusinesses()`

```php
postBusinesses($business_cardholder): \OpenAPI\Client\Model\BusinessCardHolderResponse
```

Create business

Create a business. The initial status of a newly created business depends on the <</core-api/kyc-verification, Know Your Customer (KYC) requirements>> of the program or associated <</core-api/account-holder-groups, account holder group>>.  [cols=\"1,1,1,2\"] |=== | KYC Required | Initial Business State | Business Active on Creation | Business Limitations  | Always | `UNVERIFIED` | No | Cannot load funds.  | Conditionally | `LIMITED` | No | Restricted by rules in `accountholdergroups.pre_kyc_controls`.  | Never | `ACTIVE` | Required | None. |===  To change or track the history of a business' status, use the `/businesstransitions` endpoint. For more information on status changes, see <<create_business_transition, Create Business Transition>>.  For information about configuring the required fields for KYC verification, see <</core-api/kyc-verification#_perform_kyc, Perform KYC>>.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: mqAppAndAccessToken
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\BusinessesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$business_cardholder = {"attestation_date":"2022-03-03T00:01:00Z","attester_name":"Jane Smith","attester_title":"Chief Executive Officer","beneficial_owner1":{"dob":"1982-07-23T05:36:00Z","first_name":"First","home":{"address1":"123 B Street","address2":"Apt A","city":"Oakland","country":"US","postal_code":"94610","state":"CA"},"last_name":"Last","middle_name":"Middle","phone":"5105551212","ssn":"123456789","title":"Ms"},"beneficial_owner2":{"dob":"1973-11-11T11:11:11Z","first_name":"First","home":{"address1":"4321 Grove Street","address2":"Suite 123","city":"Oakland","country":"US","postal_code":"94610","state":"CA"},"last_name":"Last","middle_name":"Middle","phone":"5105551213","ssn":"234567891","title":"Ms"},"beneficial_owner3":{"dob":"1981-02-14T15:16:17Z","first_name":"First","home":{"address1":"789 Pulgas Ave","city":"Oakland","country":"US","postal_code":"94610","state":"CA"},"last_name":"Last","middle_name":"Middle","phone":"5105551214","ssn":"345678912","title":"Ms"},"beneficial_owner4":{"dob":"1954-03-07T15:16:17Z","first_name":"First","home":{"address1":"16 Poplar Street","city":"Oakland","country":"US","postal_code":"94610","state":"CA"},"last_name":"Last","middle_name":"Middle","phone":"5105551215","ssn":"456789123","title":"Dr"},"business_name_dba":"My_fictitious_business_name","business_name_legal":"My_legal_business_name","business_type":"My_business_type","date_established":"2010-04-15T00:01:00Z","duns_number":"987654321","general_business_description":"My_business_description","history":"My_business_history","identifications":[{"type":"BUSINESS_TAX_ID","value":"123456789"}],"in_current_location_since":"2010-04-15T00:01:00Z","incorporation":{"address_registered_under":{"address1":"123 B Street","city":"Oakland","country":"US","postal_code":"94610","state":"CA"},"incorporation_type":"LLC","is_public":true,"name_registered_under":"First Middle Last","state_of_incorporation":"CA","stock_symbol":"MB"},"international_office_locations":"Athens, Greece; Buenos Aires, Argentina,","ip_address":"67.120.28.118,","metadata":{"my_name_1":"my_value_1","my_name_2":"my_value_2"},"notes":"My notes","office_location":{"address1":"123 A street","address2":"Suite 123","city":"Oakland","country":"US","postal_code":"94610","state":"CA"},"password":"My_passw0rd","phone":"5105551212","primary_contact":{"department":"My_department","email":"dr.me@my.business.com","extension":"11","fax":"5105551222","full_name":"First Middle Last","mobile":"5105551213","phone":"5105551212","title":"Dr"},"proprietor_or_officer":{"alternative_names":"My Alternative Name","dob":"1985-01-08T00:00:00Z","email":"mr.myself@my.business.com","first_name":"First","home":{"address1":"123 B Street","address2":"Apt A","city":"Oakland","country":"US","postal_code":"94610","state":"CA"},"last_name":"Last","middle_name":"Middle","phone":"5105551211","ssn":"5555","title":"Mr"},"token":"my_business_02","website":"https://my_business_02.com"}; // \OpenAPI\Client\Model\BusinessCardholder

try {
    $result = $apiInstance->postBusinesses($business_cardholder);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BusinessesApi->postBusinesses: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **business_cardholder** | [**\OpenAPI\Client\Model\BusinessCardholder**](../Model/BusinessCardholder.md)|  | [optional]

### Return type

[**\OpenAPI\Client\Model\BusinessCardHolderResponse**](../Model/BusinessCardHolderResponse.md)

### Authorization

[mqAppAndAccessToken](../../README.md#mqAppAndAccessToken)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postBusinessesLookup()`

```php
postBusinessesLookup($dda_request): \OpenAPI\Client\Model\BusinessCardholder
```

Search businesses

To search for one or more businesses, send a `POST` request to the `/businesses/lookup` endpoint. Include in the message body any parameters by which you want to query. This endpoint supports <</core-api/field-filtering, field filtering>> and <</core-api/sorting-and-pagination, pagination>>.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: mqAppAndAccessToken
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\BusinessesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$dda_request = {"dda":"2129923205648"}; // \OpenAPI\Client\Model\DDARequest

try {
    $result = $apiInstance->postBusinessesLookup($dda_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BusinessesApi->postBusinessesLookup: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **dda_request** | [**\OpenAPI\Client\Model\DDARequest**](../Model/DDARequest.md)|  | [optional]

### Return type

[**\OpenAPI\Client\Model\BusinessCardholder**](../Model/BusinessCardholder.md)

### Authorization

[mqAppAndAccessToken](../../README.md#mqAppAndAccessToken)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `putBusinessesToken()`

```php
putBusinessesToken($token, $business_card_holder_update): \OpenAPI\Client\Model\BusinessCardholder
```

Update business

To update a business, send a `PUT` request to `/businesses/{token}`. Use the `token` path parameter to specify the business to update. Include the business details to update in link:http://www.json.org/[JSON, window=\"_blank\"] format in the body of the request. Only values of parameters in the request are modified; all others are left unchanged.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: mqAppAndAccessToken
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\BusinessesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$token = 'token_example'; // string | Unique identifier of the business resource
$business_card_holder_update = new \OpenAPI\Client\Model\BusinessCardHolderUpdate(); // \OpenAPI\Client\Model\BusinessCardHolderUpdate | Business object

try {
    $result = $apiInstance->putBusinessesToken($token, $business_card_holder_update);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BusinessesApi->putBusinessesToken: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **token** | **string**| Unique identifier of the business resource |
 **business_card_holder_update** | [**\OpenAPI\Client\Model\BusinessCardHolderUpdate**](../Model/BusinessCardHolderUpdate.md)| Business object |

### Return type

[**\OpenAPI\Client\Model\BusinessCardholder**](../Model/BusinessCardholder.md)

### Authorization

[mqAppAndAccessToken](../../README.md#mqAppAndAccessToken)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
