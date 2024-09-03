# OpenAPI\Client\UserTransitionsApi

All URIs are relative to /v3.

Method | HTTP request | Description
------------- | ------------- | -------------
[**getUsertransitionsToken()**](UserTransitionsApi.md#getUsertransitionsToken) | **GET** /usertransitions/{token} | Retrieve user transition
[**getUsertransitionsUserUsertoken()**](UserTransitionsApi.md#getUsertransitionsUserUsertoken) | **GET** /usertransitions/user/{user_token} | List transitions for user
[**postUsertransitions()**](UserTransitionsApi.md#postUsertransitions) | **POST** /usertransitions | Create user transition


## `getUsertransitionsToken()`

```php
getUsertransitionsToken($token, $fields): \OpenAPI\Client\Model\UserTransitionResponse
```

Retrieve user transition

Retrieve a user transition.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: mqAppAndAccessToken
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\UserTransitionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$token = 'token_example'; // string | Unique identifier of the user transition you want to retrieve.
$fields = 'fields_example'; // string | Comma-delimited list of fields to return (`field_1,field_2`, and so on). Leave blank to return all fields.

try {
    $result = $apiInstance->getUsertransitionsToken($token, $fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserTransitionsApi->getUsertransitionsToken: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **token** | **string**| Unique identifier of the user transition you want to retrieve. |
 **fields** | **string**| Comma-delimited list of fields to return (&#x60;field_1,field_2&#x60;, and so on). Leave blank to return all fields. | [optional]

### Return type

[**\OpenAPI\Client\Model\UserTransitionResponse**](../Model/UserTransitionResponse.md)

### Authorization

[mqAppAndAccessToken](../../README.md#mqAppAndAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getUsertransitionsUserUsertoken()`

```php
getUsertransitionsUserUsertoken($user_token, $count, $start_index, $fields, $sort_by): \OpenAPI\Client\Model\UserTransitionListResponse
```

List transitions for user

List all transitions for a given user.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: mqAppAndAccessToken
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\UserTransitionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$user_token = 'user_token_example'; // string | Unique identifier of the user resource.
$count = 5; // int | Number of user transitions to retrieve.
$start_index = 0; // int | Sort order index of the first resource in the returned array.
$fields = 'fields_example'; // string | Comma-delimited list of fields to return (`field_1,field_2`, and so on). Leave blank to return all fields.
$sort_by = '-id'; // string | Field on which to sort. Use any field in the resource model, or one of the system fields `lastModifiedTime` or `createdTime`. Prefix the field name with a hyphen (`-`) to sort in descending order. Omit the hyphen to sort in ascending order.

try {
    $result = $apiInstance->getUsertransitionsUserUsertoken($user_token, $count, $start_index, $fields, $sort_by);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserTransitionsApi->getUsertransitionsUserUsertoken: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **user_token** | **string**| Unique identifier of the user resource. |
 **count** | **int**| Number of user transitions to retrieve. | [optional] [default to 5]
 **start_index** | **int**| Sort order index of the first resource in the returned array. | [optional] [default to 0]
 **fields** | **string**| Comma-delimited list of fields to return (&#x60;field_1,field_2&#x60;, and so on). Leave blank to return all fields. | [optional]
 **sort_by** | **string**| Field on which to sort. Use any field in the resource model, or one of the system fields &#x60;lastModifiedTime&#x60; or &#x60;createdTime&#x60;. Prefix the field name with a hyphen (&#x60;-&#x60;) to sort in descending order. Omit the hyphen to sort in ascending order. | [optional] [default to &#39;-id&#39;]

### Return type

[**\OpenAPI\Client\Model\UserTransitionListResponse**](../Model/UserTransitionListResponse.md)

### Authorization

[mqAppAndAccessToken](../../README.md#mqAppAndAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postUsertransitions()`

```php
postUsertransitions($user_transition_request): \OpenAPI\Client\Model\UserTransitionResponse
```

Create user transition

This endpoint enables you to change a user's status, depending on your role and the previous status change. By changing a user's status, you can control the user's capabilities and the setting of the `user.active` field. Do not set the value of the `user.active` field directly.  [cols=\"2,4a,4a\"] |=== | user.status Field | Description | User Limitations  | `UNVERIFIED` | Initial status of a new user belonging to an account holder group where KYC is always required.  *Allowable transitions:*  + `ACTIVE`, `CLOSED` | Cannot activate cards or load funds.  *user.active Field:*  + `false`  | `LIMITED` | Initial status of a new user belonging to an account holder group where KYC is conditionally required.  *Allowable transitions:*  + `ACTIVE`, `SUSPENDED`, `CLOSED` | Restricted by rules in `accountholdergroups.pre_kyc_controls`.  *user.active Field:*  + `true`  | `ACTIVE` | Status of a user who has passed KYC, or initial status of a new user belonging to an account holder group where KYC is never required.  *Allowable transitions:*  + `SUSPENDED`, `CLOSED`, `UNVERIFIED` | None.  *user.active Field:*  + `true`  | `SUSPENDED` | The user is temporarily inactive.  Transitioning a suspended user to the `ACTIVE` status is restricted, based on your role and the details of the previous status change.  *Allowable transitions:*  + `ACTIVE`, `LIMITED`, `UNVERIFIED`, `CLOSED` | Cannot activate cards, load funds, or transact.  *user.active Field:*  + `false`  | `CLOSED` | The user is permanently inactive.  In general, the `CLOSED` status should be terminal. For exceptional cases, you can transition a user to other statuses, depending on your role and the details of the previous status change. Contact your Marqeta representative for more information.  *Allowable transitions:*  + `ACTIVE`, `LIMITED`, `UNVERIFIED`, `SUSPENDED` | Cannot activate cards, load funds, or transact.  *user.active Field:*  + `false`  |===  [NOTE] The Marqeta platform transitions a user's status in response to certain events. For example, a user in the `UNVERIFIED` status is transitioned to `ACTIVE` when the user passes KYC verification.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: mqAppAndAccessToken
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\UserTransitionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$user_transition_request = {"channel":"API","reason":"Activating user","reason_code":"00","status":"ACTIVE","token":"activate_05","user_token":"my_user_01"}; // \OpenAPI\Client\Model\UserTransitionRequest

try {
    $result = $apiInstance->postUsertransitions($user_transition_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserTransitionsApi->postUsertransitions: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **user_transition_request** | [**\OpenAPI\Client\Model\UserTransitionRequest**](../Model/UserTransitionRequest.md)|  | [optional]

### Return type

[**\OpenAPI\Client\Model\UserTransitionResponse**](../Model/UserTransitionResponse.md)

### Authorization

[mqAppAndAccessToken](../../README.md#mqAppAndAccessToken)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
