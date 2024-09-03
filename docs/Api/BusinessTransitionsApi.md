# OpenAPI\Client\BusinessTransitionsApi

All URIs are relative to /v3.

Method | HTTP request | Description
------------- | ------------- | -------------
[**getBusinesstransitionsBusinessBusinesstoken()**](BusinessTransitionsApi.md#getBusinesstransitionsBusinessBusinesstoken) | **GET** /businesstransitions/business/{business_token} | List business transitions
[**getBusinesstransitionsToken()**](BusinessTransitionsApi.md#getBusinesstransitionsToken) | **GET** /businesstransitions/{token} | Retrieve business transition
[**postBusinesstransitions()**](BusinessTransitionsApi.md#postBusinesstransitions) | **POST** /businesstransitions | Create business transition


## `getBusinesstransitionsBusinessBusinesstoken()`

```php
getBusinesstransitionsBusinessBusinesstoken($business_token, $count, $start_index, $fields, $sort_by): \OpenAPI\Client\Model\BusinessTransitionListResponse
```

List business transitions

List all transitions for a given business.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: mqAppAndAccessToken
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\BusinessTransitionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$business_token = 'business_token_example'; // string | Unique identifier of the business resource associated with the transitions to retrieve.
$count = 5; // int | Number of business transitions to retrieve.
$start_index = 0; // int | Sort order index of the first resource in the returned array.
$fields = 'fields_example'; // string | Comma-delimited list of fields to return (`field_1,field_2`, and so on). Leave blank to return all fields.
$sort_by = '-id'; // string | Field on which to sort. Use any field in the resource model, or one of the system fields `lastModifiedTime` or `createdTime`. Prefix the field name with a hyphen (`-`) to sort in descending order. Omit the hyphen to sort in ascending order.

try {
    $result = $apiInstance->getBusinesstransitionsBusinessBusinesstoken($business_token, $count, $start_index, $fields, $sort_by);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BusinessTransitionsApi->getBusinesstransitionsBusinessBusinesstoken: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **business_token** | **string**| Unique identifier of the business resource associated with the transitions to retrieve. |
 **count** | **int**| Number of business transitions to retrieve. | [optional] [default to 5]
 **start_index** | **int**| Sort order index of the first resource in the returned array. | [optional] [default to 0]
 **fields** | **string**| Comma-delimited list of fields to return (&#x60;field_1,field_2&#x60;, and so on). Leave blank to return all fields. | [optional]
 **sort_by** | **string**| Field on which to sort. Use any field in the resource model, or one of the system fields &#x60;lastModifiedTime&#x60; or &#x60;createdTime&#x60;. Prefix the field name with a hyphen (&#x60;-&#x60;) to sort in descending order. Omit the hyphen to sort in ascending order. | [optional] [default to &#39;-id&#39;]

### Return type

[**\OpenAPI\Client\Model\BusinessTransitionListResponse**](../Model/BusinessTransitionListResponse.md)

### Authorization

[mqAppAndAccessToken](../../README.md#mqAppAndAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getBusinesstransitionsToken()`

```php
getBusinesstransitionsToken($token, $fields): \OpenAPI\Client\Model\BusinessTransitionResponse
```

Retrieve business transition

Use this endpoint to retrieve a business transition.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: mqAppAndAccessToken
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\BusinessTransitionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$token = 'token_example'; // string | The unique identifier of the business transition you want to retrieve.
$fields = 'fields_example'; // string | Field on which to sort. Use any field in the resource model, or one of the system fields `lastModifiedTime` or `createdTime`. Prefix the field name with a hyphen (`-`) to sort in descending order. Omit the hyphen to sort in ascending order.

try {
    $result = $apiInstance->getBusinesstransitionsToken($token, $fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BusinessTransitionsApi->getBusinesstransitionsToken: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **token** | **string**| The unique identifier of the business transition you want to retrieve. |
 **fields** | **string**| Field on which to sort. Use any field in the resource model, or one of the system fields &#x60;lastModifiedTime&#x60; or &#x60;createdTime&#x60;. Prefix the field name with a hyphen (&#x60;-&#x60;) to sort in descending order. Omit the hyphen to sort in ascending order. | [optional]

### Return type

[**\OpenAPI\Client\Model\BusinessTransitionResponse**](../Model/BusinessTransitionResponse.md)

### Authorization

[mqAppAndAccessToken](../../README.md#mqAppAndAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postBusinesstransitions()`

```php
postBusinesstransitions($business_transition_request): \OpenAPI\Client\Model\BusinessTransitionResponse
```

Create business transition

This endpoint enables you to change a business' status, depending on your role and the previous status change. By changing a business' status, you can control the business' capabilities and the setting of the `business.active` field. The `business.active` field is `true` if your business is in the `LIMITED` or `ACTIVE` state, and `false` if your business is in the `UNVERIFIED` state. You cannot control the value of the `business.active` field directly.  [cols=\",2a,2a\"] |=== | The business.status field | Description | Business limitations  | Unverified | Initial status of a newly created business belonging to an `accountholdergroup` where KYC is always required. | Cannot load funds.  *The business.active field:*   + `false`  *Allowable transitions:*   + `ACTIVE`, `SUSPENDED`, `CLOSED`  | Limited | Initial status of a newly created business belonging to an `accountholdergroup` where KYC is conditionally required. | Restricted by rules in `accountholdergroups.pre_kyc_controls`.  *The business.active field:*   + `true`  *Allowable transitions:*   + `ACTIVE`, `SUSPENDED`, `CLOSED`  | Active | Status of a business that has passed KYC; initial status of a newly created business belonging to an `accountholdergroup` where KYC is never required. | None.  *The business.active field:*   + `true`  *Allowable transitions:*   + `SUSPENDED`, `CLOSED`  | Suspended | The business is temporarily inactive.  *NOTE:* Transitioning a suspended business to the `ACTIVE` status is restricted, based on your role and the details of the previous status change. | Cannot load funds or activate cards.  *The business.active field:*   + `false`  *Allowable transitions:*   + `ACTIVE`, `LIMITED`, `UNVERIFIED`, `CLOSED`  | Closed | The business is permanently inactive.  *NOTE:* `CLOSED` is a terminal status. In exceptional cases, you can transition a business from `CLOSED` to another status, depending on your role and the details of the previous status change. Contact your Marqeta representative for more information. | Cannot load funds.  *The business.active field:*   + `false`  *Allowable transitions:*   + `ACTIVE`, `LIMITED`, `UNVERIFIED`, `SUSPENDED` |===  [NOTE] The Marqeta platform transitions a business' status in response to certain events. For example, a business with an `UNVERIFIED` status transitions to `ACTIVE` when the business passes KYC.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: mqAppAndAccessToken
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\BusinessTransitionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$business_transition_request = {"business_token":"my_business_01","channel":"API","reason":"Activating business","reason_code":"00","status":"ACTIVE","token":"activate_05"}; // \OpenAPI\Client\Model\BusinessTransitionRequest

try {
    $result = $apiInstance->postBusinesstransitions($business_transition_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BusinessTransitionsApi->postBusinesstransitions: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **business_transition_request** | [**\OpenAPI\Client\Model\BusinessTransitionRequest**](../Model/BusinessTransitionRequest.md)|  | [optional]

### Return type

[**\OpenAPI\Client\Model\BusinessTransitionResponse**](../Model/BusinessTransitionResponse.md)

### Authorization

[mqAppAndAccessToken](../../README.md#mqAppAndAccessToken)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
