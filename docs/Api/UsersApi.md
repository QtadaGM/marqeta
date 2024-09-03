# OpenAPI\Client\UsersApi

All URIs are relative to /v3.

Method | HTTP request | Description
------------- | ------------- | -------------
[**getUsers()**](UsersApi.md#getUsers) | **GET** /users | List users
[**getUsersAuthClientaccesstokenToken()**](UsersApi.md#getUsersAuthClientaccesstokenToken) | **GET** /users/auth/clientaccesstoken/{token} | Retrieve client access token
[**getUsersParenttokenChildren()**](UsersApi.md#getUsersParenttokenChildren) | **GET** /users/{parent_token}/children | List user child accounts
[**getUsersToken()**](UsersApi.md#getUsersToken) | **GET** /users/{token} | Retrieve user
[**getUsersTokenSsn()**](UsersApi.md#getUsersTokenSsn) | **GET** /users/{token}/ssn | Retrieve user identification number
[**postUsers()**](UsersApi.md#postUsers) | **POST** /users | Create user
[**postUsersAuthChangepassword()**](UsersApi.md#postUsersAuthChangepassword) | **POST** /users/auth/changepassword | Update user password
[**postUsersAuthClientaccesstoken()**](UsersApi.md#postUsersAuthClientaccesstoken) | **POST** /users/auth/clientaccesstoken | Create client access token
[**postUsersAuthLogin()**](UsersApi.md#postUsersAuthLogin) | **POST** /users/auth/login | Log in user
[**postUsersAuthLogout()**](UsersApi.md#postUsersAuthLogout) | **POST** /users/auth/logout | Log out user
[**postUsersAuthOnetime()**](UsersApi.md#postUsersAuthOnetime) | **POST** /users/auth/onetime | Create single-use token
[**postUsersAuthResetpassword()**](UsersApi.md#postUsersAuthResetpassword) | **POST** /users/auth/resetpassword | Request user password reset token
[**postUsersAuthResetpasswordToken()**](UsersApi.md#postUsersAuthResetpasswordToken) | **POST** /users/auth/resetpassword/{token} | Reset user password
[**postUsersAuthVerifyemail()**](UsersApi.md#postUsersAuthVerifyemail) | **POST** /users/auth/verifyemail | Request email verification token
[**postUsersAuthVerifyemailToken()**](UsersApi.md#postUsersAuthVerifyemailToken) | **POST** /users/auth/verifyemail/{token} | Verify email address
[**postUsersLookup()**](UsersApi.md#postUsersLookup) | **POST** /users/lookup | Search users
[**putUsersToken()**](UsersApi.md#putUsersToken) | **PUT** /users/{token} | Update user


## `getUsers()`

```php
getUsers($count, $start_index, $search_type, $fields, $sort_by): \OpenAPI\Client\Model\UserCardHolderListResponse
```

List users

To return an array of all of a program's users, send a `GET` request to the `/users` endpoint. This endpoint supports <</core-api/field-filtering, field filtering>> and <</core-api/sorting-and-pagination, pagination>>. To narrow your result set to users that match certain criteria, see the <<search_users,Search users>> endpoint.  The `business_token` field is conditionally returned in the response (it cannot be set through the API). You can use this field in conjunction with the `parent_token` field to determine whether the user has a parent or grandparent that is a business:  [cols=\"1,1,1\"] |=== | parent_token | business_token | Description  | Not populated | Not populated | User does not have a parent.  | Populated | Not populated | User's parent is a user.  | Populated; matches `business_token` | Populated; matches `parent_token` | User's parent is a business.  | Populated; does not match `business_token` | Populated; does not match `parent_token` | User's parent is a user and their grandparent is a business. |===

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: mqAppAndAccessToken
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\UsersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$count = 5; // int | Number of user resources to retrieve.
$start_index = 0; // int | Sort order index of the first resource in the returned array.
$search_type = 'search_type_example'; // string | Search type.
$fields = 'fields_example'; // string | Comma-delimited list of fields to return (`field_1,field_2`, and so on). Leave blank to return all fields.
$sort_by = '-lastModifiedTime'; // string | Field on which to sort. Use any field in the resource model, or one of the system fields `lastModifiedTime` or `createdTime`. Prefix the field name with a hyphen (`-`) to sort in descending order. Omit the hyphen to sort in ascending order.

try {
    $result = $apiInstance->getUsers($count, $start_index, $search_type, $fields, $sort_by);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->getUsers: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **count** | **int**| Number of user resources to retrieve. | [optional] [default to 5]
 **start_index** | **int**| Sort order index of the first resource in the returned array. | [optional] [default to 0]
 **search_type** | **string**| Search type. | [optional]
 **fields** | **string**| Comma-delimited list of fields to return (&#x60;field_1,field_2&#x60;, and so on). Leave blank to return all fields. | [optional]
 **sort_by** | **string**| Field on which to sort. Use any field in the resource model, or one of the system fields &#x60;lastModifiedTime&#x60; or &#x60;createdTime&#x60;. Prefix the field name with a hyphen (&#x60;-&#x60;) to sort in descending order. Omit the hyphen to sort in ascending order. | [optional] [default to &#39;-lastModifiedTime&#39;]

### Return type

[**\OpenAPI\Client\Model\UserCardHolderListResponse**](../Model/UserCardHolderListResponse.md)

### Authorization

[mqAppAndAccessToken](../../README.md#mqAppAndAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getUsersAuthClientaccesstokenToken()`

```php
getUsersAuthClientaccesstokenToken($token, $application_token): \OpenAPI\Client\Model\ClientAccessTokenResponse
```

Retrieve client access token

To retrieve application and card information using a client access token, send a `GET` request to the `/users/auth/clientaccesstoken/{token}` endpoint.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: mqAppAndAccessToken
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\UsersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$token = 'token_example'; // string | Client access token.
$application_token = 'application_token_example'; // string | Unique identifier of the `application` object.

try {
    $result = $apiInstance->getUsersAuthClientaccesstokenToken($token, $application_token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->getUsersAuthClientaccesstokenToken: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **token** | **string**| Client access token. |
 **application_token** | **string**| Unique identifier of the &#x60;application&#x60; object. | [optional]

### Return type

[**\OpenAPI\Client\Model\ClientAccessTokenResponse**](../Model/ClientAccessTokenResponse.md)

### Authorization

[mqAppAndAccessToken](../../README.md#mqAppAndAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getUsersParenttokenChildren()`

```php
getUsersParenttokenChildren($parent_token, $count, $start_index, $fields, $sort_by): \OpenAPI\Client\Model\UserCardHolderListResponse
```

List user child accounts

To retrieve users who are children of a parent user or business, send a `GET` request to the `/users/{parent_token}/children` endpoint. Include the parent's user or business token as a URL path parameter.  The `business_token` field is conditionally returned in the response (it cannot be set through the API). You can use this field in conjunction with the `parent_token` field to determine whether the user has a parent or grandparent that is a business:  [cols=\"1,1,1\"] |=== | parent_token | business_token | Description  | Not populated | Not populated | User does not have a parent.  | Populated | Not populated | User's parent is a user.  | Populated; matches `business_token` | Populated; matches `parent_token` | User's parent is a business.  | Populated; does not match `business_token` | Populated; does not match `parent_token` | User's parent is a user and their grandparent is a business. |===  This endpoint supports <</core-api/field-filtering, field filtering>>.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: mqAppAndAccessToken
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\UsersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$parent_token = 'parent_token_example'; // string | Unique identifier of the parent account holder.
$count = 5; // int | Number of user resources to retrieve.
$start_index = 0; // int | Sort order index of the first resource in the returned array.
$fields = 'fields_example'; // string | Comma-delimited list of fields to return (`field_1,field_2`, and so on). Leave blank to return all fields.
$sort_by = '-lastModifiedTime'; // string | Field on which to sort. Use any field in the resource model, or one of the system fields `lastModifiedTime` or `createdTime`. Prefix the field name with a hyphen (`-`) to sort in descending order. Omit the hyphen to sort in ascending order.

try {
    $result = $apiInstance->getUsersParenttokenChildren($parent_token, $count, $start_index, $fields, $sort_by);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->getUsersParenttokenChildren: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **parent_token** | **string**| Unique identifier of the parent account holder. |
 **count** | **int**| Number of user resources to retrieve. | [optional] [default to 5]
 **start_index** | **int**| Sort order index of the first resource in the returned array. | [optional] [default to 0]
 **fields** | **string**| Comma-delimited list of fields to return (&#x60;field_1,field_2&#x60;, and so on). Leave blank to return all fields. | [optional]
 **sort_by** | **string**| Field on which to sort. Use any field in the resource model, or one of the system fields &#x60;lastModifiedTime&#x60; or &#x60;createdTime&#x60;. Prefix the field name with a hyphen (&#x60;-&#x60;) to sort in descending order. Omit the hyphen to sort in ascending order. | [optional] [default to &#39;-lastModifiedTime&#39;]

### Return type

[**\OpenAPI\Client\Model\UserCardHolderListResponse**](../Model/UserCardHolderListResponse.md)

### Authorization

[mqAppAndAccessToken](../../README.md#mqAppAndAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getUsersToken()`

```php
getUsersToken($token, $fields): \OpenAPI\Client\Model\UserCardHolderResponse
```

Retrieve user

To retrieve a specific user, send a `GET` request to the `/users/{token}` endpoint. Include the user `token` path parameter to specify the user to return.  The `business_token` field is conditionally returned in the response (it cannot be set through the API). You can use this field in conjunction with the `parent_token` field to determine whether the user has a parent or grandparent that is a business:  [cols=\"1,1,1\"] |=== | parent_token | business_token | Description  | Not populated | Not populated | User does not have a parent.  | Populated | Not populated | User's parent is a user.  | Populated; matches `business_token` | Populated; matches `parent_token` | User's parent is a business.  | Populated; does not match `business_token` | Populated; does not match `parent_token` | User's parent is a user and their grandparent is a business. |===  This endpoint supports <</core-api/field-filtering, field filtering>>.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: mqAppAndAccessToken
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\UsersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$token = 'token_example'; // string | Unique identifier of the user resource.
$fields = 'fields_example'; // string | Comma-delimited list of fields to return (`field_1,field_2`, and so on). Leave blank to return all fields.

try {
    $result = $apiInstance->getUsersToken($token, $fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->getUsersToken: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **token** | **string**| Unique identifier of the user resource. |
 **fields** | **string**| Comma-delimited list of fields to return (&#x60;field_1,field_2&#x60;, and so on). Leave blank to return all fields. | [optional]

### Return type

[**\OpenAPI\Client\Model\UserCardHolderResponse**](../Model/UserCardHolderResponse.md)

### Authorization

[mqAppAndAccessToken](../../README.md#mqAppAndAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getUsersTokenSsn()`

```php
getUsersTokenSsn($token, $full_ssn): \OpenAPI\Client\Model\SsnResponseModel
```

Retrieve user identification number

To retrieve the government-issued identification number for a user, send a `GET` request to the `/users/{token}/ssn` endpoint. Include the `token` path parameter to specify the user whose identification number (SSN, TIN, NIN, SIN) you wish to return. You can indicate whether to return the full number or the last four digits only.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: mqAppAndAccessToken
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\UsersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$token = 'token_example'; // string | Unique identifier of the user resource.
$full_ssn = True; // bool | To return the full identification number, set to `true`. To return only the last four digits, set to `false`.  If the identifications array contains only the last four digits of the identification number, the `/users/{token}/ssn` endpoint will return only the last four digits, regardless of the `full_ssn` parameter.

try {
    $result = $apiInstance->getUsersTokenSsn($token, $full_ssn);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->getUsersTokenSsn: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **token** | **string**| Unique identifier of the user resource. |
 **full_ssn** | **bool**| To return the full identification number, set to &#x60;true&#x60;. To return only the last four digits, set to &#x60;false&#x60;.  If the identifications array contains only the last four digits of the identification number, the &#x60;/users/{token}/ssn&#x60; endpoint will return only the last four digits, regardless of the &#x60;full_ssn&#x60; parameter. | [optional]

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

## `postUsers()`

```php
postUsers($card_holder_model): \OpenAPI\Client\Model\UserCardHolderResponse
```

Create user

This endpoint enables you to create a user. A new user's initial status depends on the <</core-api/kyc-verification, Know Your Customer (KYC) requirements>> of the program or associated <</core-api/account-holder-groups, account holder group>>.  [cols=\"1,1,1,1\"] |=== | KYC Required | Initial User Status | User Active on Creation | User Limitations  | Always | `UNVERIFIED` | Optional | Cannot load funds; cannot activate cards.  | Conditionally | `LIMITED` | Optional | Restricted by rules in `accountholdergroups.pre_kyc_controls`.  | Never | `ACTIVE` | Required | None. |===  [NOTE] Use the `/usertransitions` endpoints to transition user resources between statuses and to view the history of a user's status. Do not set the value of the `user.active` field directly. For more information on status changes, see <</core-api/user-transitions#postUsertransitions, Create User Transition>>.  To perform KYC verification on users, the user object must have the following fields configured:  * `first_name` (legal first name only, no prefixes) * `last_name` (legal last name only, no suffixes) * `address1` (cannot be a PO Box) * `city` * `state` * `postal_code` * `country` * `birth_date` * `identifications` * `phone` (required in some cases) * `email` (required in some cases)  [NOTE] The `identifications` requirement depends on your program's configuration. To determine if you should provide a full or abbreviated identification number, contact your Marqeta representative. KYC verification requires the full Social Security Number (SSN) of the user.  To create a child user, you must identify the parent user or business and determine whether the child user shares an account with the parent.  The parent must be an existing user or business. On the child user, set the `parent_token` field to the value of the parent's `token` field. If either the parent or the grandparent is a business, a `business_token` field is added to the user. This field's value is set to the token of either the parent or grandparent (whichever is the business).  The `uses_parent_account` field determines whether the child shares balances with the parent (`true`) or whether the child balances are independent of the parent (`false`). If you do not specify a value for `uses_parent_account`, it is set to `false` by default (the user does not share the parent's balance) and returned in the response body. This field cannot be updated, so you must decide upon creation whether the child user shares the parent balance.  Sharing an account with a parent user affects how the child user interacts with cards as follows:  * A child user cannot spend funds if its parent is not active. * An active child user can activate cards, whether the parent is active or not.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: mqAppAndAccessToken
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\UsersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$card_holder_model = {"address1":"1234 Grove Street","birth_date":"1991-01-01","city":"Berkeley","country":"USA","email":"jane.doe@company.com","first_name":"Jane","gender":"F","identifications":[{"type":"SSN","value":"111234444"}],"last_name":"Doe","metadata":{"authentication_answer1":"Cashier","authentication_answer2":"Trabant","authentication_answer3":"Blue","authentication_question1":"What was your first job?","authentication_question2":"What make was your first car?","authentication_question3":"What is your favorite color?","notification_email":"jane.doe@home.com","notification_language":"spa"},"password":"P@ssw0rd","phone":"15105551212","postal_code":"94702","state":"CA","token":"my_user_01","uses_parent_account":false}; // \OpenAPI\Client\Model\CardHolderModel

try {
    $result = $apiInstance->postUsers($card_holder_model);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->postUsers: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **card_holder_model** | [**\OpenAPI\Client\Model\CardHolderModel**](../Model/CardHolderModel.md)|  | [optional]

### Return type

[**\OpenAPI\Client\Model\UserCardHolderResponse**](../Model/UserCardHolderResponse.md)

### Authorization

[mqAppAndAccessToken](../../README.md#mqAppAndAccessToken)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postUsersAuthChangepassword()`

```php
postUsersAuthChangepassword($password_update_model)
```

Update user password

To change a user password, send a `POST` request to the `/users/auth/changepassword` endpoint and include the `current_password` and `new_password` in link:http://www.json.org/[JSON, window=\"_blank\"] format in the body of the request. This endpoint operates in the context of a currently logged-in user.  A successful password change returns an empty response body with a response code of `204 No Content`.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: mqAppAndAccessToken
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\UsersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$password_update_model = {"current_password":"my_old_password","new_password":"my_new_password"}; // \OpenAPI\Client\Model\PasswordUpdateModel | Password update object

try {
    $apiInstance->postUsersAuthChangepassword($password_update_model);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->postUsersAuthChangepassword: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **password_update_model** | [**\OpenAPI\Client\Model\PasswordUpdateModel**](../Model/PasswordUpdateModel.md)| Password update object |

### Return type

void (empty response body)

### Authorization

[mqAppAndAccessToken](../../README.md#mqAppAndAccessToken)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postUsersAuthClientaccesstoken()`

```php
postUsersAuthClientaccesstoken($client_access_token_request): \OpenAPI\Client\Model\ClientAccessTokenResponse
```

Create client access token

Each time you want to display a virtual card's sensitive data (for example, when using `marqeta.js`), you must first request a new, single-use client access token from the Marqeta platform by sending a `POST` request to the `/users/auth/clientaccesstoken` endpoint. Unredeemed client access tokens expire after five minutes.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: mqAppAndAccessToken
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\UsersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$client_access_token_request = {"card_token":"my_card_01"}; // \OpenAPI\Client\Model\ClientAccessTokenRequest

try {
    $result = $apiInstance->postUsersAuthClientaccesstoken($client_access_token_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->postUsersAuthClientaccesstoken: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **client_access_token_request** | [**\OpenAPI\Client\Model\ClientAccessTokenRequest**](../Model/ClientAccessTokenRequest.md)|  | [optional]

### Return type

[**\OpenAPI\Client\Model\ClientAccessTokenResponse**](../Model/ClientAccessTokenResponse.md)

### Authorization

[mqAppAndAccessToken](../../README.md#mqAppAndAccessToken)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postUsersAuthLogin()`

```php
postUsersAuthLogin($login_request_model): \OpenAPI\Client\Model\LoginResponseModel
```

Log in user

To log in a user and return a user access token, send a `POST` request to the `/users/auth/login` endpoint and include the user details in link:http://www.json.org/[JSON, window=\"_blank\"] format in the body of the request.  [TIP] To check a user's credentials without logging out the user, call the `/users/auth/onetime` endpoint.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: mqAppAndAccessToken
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\UsersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$login_request_model = {"email":"jane.doe@company.com","password":"P@ssw0rd","user_token":"my_user_01"}; // \OpenAPI\Client\Model\LoginRequestModel | User login object

try {
    $result = $apiInstance->postUsersAuthLogin($login_request_model);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->postUsersAuthLogin: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **login_request_model** | [**\OpenAPI\Client\Model\LoginRequestModel**](../Model/LoginRequestModel.md)| User login object | [optional]

### Return type

[**\OpenAPI\Client\Model\LoginResponseModel**](../Model/LoginResponseModel.md)

### Authorization

[mqAppAndAccessToken](../../README.md#mqAppAndAccessToken)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postUsersAuthLogout()`

```php
postUsersAuthLogout()
```

Log out user

To log out a user, send a `POST` request to the `/users/auth/logout` endpoint.  A successful logout returns an empty response body with a response code of `204 No Content`.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: mqAppAndAccessToken
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\UsersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $apiInstance->postUsersAuthLogout();
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->postUsersAuthLogout: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

void (empty response body)

### Authorization

[mqAppAndAccessToken](../../README.md#mqAppAndAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postUsersAuthOnetime()`

```php
postUsersAuthOnetime($one_time_request_model): \OpenAPI\Client\Model\AccessTokenResponse
```

Create single-use token

This endpoint returns a single-use access token. This type of token authorizes a single request to access API endpoints and data associated with a particular user. A single-use access token differs from a user access token (as returned by `POST` `/users/auth/login`) only in the number of times it can be used.  To return a single-use access token, send a `POST` request to the `/users/auth/onetime` endpoint. Provide one of these sets of input data:  * *Case #1* – Application token and user access token * *Case #2* – Application token, admin access token, and user token * *Case #3* – Application token, user's Marqeta password, and user's email address  In each case, provide the application token as the HTTP Basic Authentication username in the request header's Authorization field. When applicable, provide the user access token or admin access token as the HTTP Basic Authentication password. When applicable, provide the user token or user's Marqeta password and email address in link:http://www.json.org/[JSON, window=\"_blank\"] format in the request body.  Before instantiating an embedded Marqeta widget, call this endpoint to obtain the single-use access token required as input (cases #1 and #2).  This endpoint is also useful when you want to check a user's credentials before performing a sensitive operation without having to log out the user (case #3).  [NOTE] Calling this endpoint and returning a single-use access token does not invalidate the user's current user access token.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: mqAppAndAccessToken
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\UsersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$one_time_request_model = {}; // \OpenAPI\Client\Model\OneTimeRequestModel | One-time object

try {
    $result = $apiInstance->postUsersAuthOnetime($one_time_request_model);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->postUsersAuthOnetime: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **one_time_request_model** | [**\OpenAPI\Client\Model\OneTimeRequestModel**](../Model/OneTimeRequestModel.md)| One-time object | [optional]

### Return type

[**\OpenAPI\Client\Model\AccessTokenResponse**](../Model/AccessTokenResponse.md)

### Authorization

[mqAppAndAccessToken](../../README.md#mqAppAndAccessToken)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postUsersAuthResetpassword()`

```php
postUsersAuthResetpassword($reset_user_password_email_model)
```

Request user password reset token

Use this endpoint to generate a password reset token for a user. Send a `POST` request to the `/users/auth/resetpassword` endpoint and include the user's email address in link:http://www.json.org/[JSON, window=\"_blank\"] format in the body of the request. This request generates and sends an email message containing the `user_token` and `password_reset_token` to the user's email address. You must customize the email message with a link that passes the `user_token` and `password_reset_token` to a web page where a subsequent request updates the password.  A successful request returns an empty response body with a response code of `204 No Content`.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: mqAppAndAccessToken
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\UsersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$reset_user_password_email_model = {"email":"jane.doe@company.com"}; // \OpenAPI\Client\Model\ResetUserPasswordEmailModel

try {
    $apiInstance->postUsersAuthResetpassword($reset_user_password_email_model);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->postUsersAuthResetpassword: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **reset_user_password_email_model** | [**\OpenAPI\Client\Model\ResetUserPasswordEmailModel**](../Model/ResetUserPasswordEmailModel.md)|  | [optional]

### Return type

void (empty response body)

### Authorization

[mqAppAndAccessToken](../../README.md#mqAppAndAccessToken)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postUsersAuthResetpasswordToken()`

```php
postUsersAuthResetpasswordToken($token, $reset_user_password_model)
```

Reset user password

To reset the user's password, send a `POST` request to the `/users/auth/resetpassword/{token}` endpoint that includes a password reset token generated using the `POST /users/auth/resetpassword` operation. Include the `user_token` and `new_password` in link:http://www.json.org/[JSON, window=\"_blank\"] format in the body of the request. Include the `password_reset_token` as a path parameter.  A successful password reset returns an empty response body with a response code of `204 No Content`.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: mqAppAndAccessToken
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\UsersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$token = 'token_example'; // string | Password reset token generated using the `POST /users/auth/resetpassword` operation.
$reset_user_password_model = {"new_password":"newPassword123@","user_token":"my_user_01"}; // \OpenAPI\Client\Model\ResetUserPasswordModel

try {
    $apiInstance->postUsersAuthResetpasswordToken($token, $reset_user_password_model);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->postUsersAuthResetpasswordToken: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **token** | **string**| Password reset token generated using the &#x60;POST /users/auth/resetpassword&#x60; operation. |
 **reset_user_password_model** | [**\OpenAPI\Client\Model\ResetUserPasswordModel**](../Model/ResetUserPasswordModel.md)|  | [optional]

### Return type

void (empty response body)

### Authorization

[mqAppAndAccessToken](../../README.md#mqAppAndAccessToken)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postUsersAuthVerifyemail()`

```php
postUsersAuthVerifyemail()
```

Request email verification token

Send a `POST` request to the `/users/auth/verifyemail` endpoint to request an email verification token. No input parameters are required because this operation is performed in the context of an authenticated user.  This initial request generates and sends an email message containing the email verification token to the cardholder's email address. This email message must include a link that passes the email verification token to a web page where a subsequent request verifies the email address.  A successful request returns an empty response body with a response code of `204 No Content`.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: mqAppAndAccessToken
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\UsersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $apiInstance->postUsersAuthVerifyemail();
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->postUsersAuthVerifyemail: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

void (empty response body)

### Authorization

[mqAppAndAccessToken](../../README.md#mqAppAndAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postUsersAuthVerifyemailToken()`

```php
postUsersAuthVerifyemailToken($token)
```

Verify email address

To verify a user's email address, send a `POST` request to the `/users/auth/verifyemail/{email_verification_token}` endpoint that includes an `email_verification_token` generated using the `POST /users/auth/verifyemail` operation. Include the `email_verification_token` as a path parameter.  A successful email verification returns an empty response body with a response code of `204 No Content`.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: mqAppAndAccessToken
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\UsersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$token = 'token_example'; // string | Email verification token generated using the `POST /users/auth/verifyemail` operation.

try {
    $apiInstance->postUsersAuthVerifyemailToken($token);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->postUsersAuthVerifyemailToken: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **token** | **string**| Email verification token generated using the &#x60;POST /users/auth/verifyemail&#x60; operation. |

### Return type

void (empty response body)

### Authorization

[mqAppAndAccessToken](../../README.md#mqAppAndAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postUsersLookup()`

```php
postUsersLookup($count, $start_index, $search_type, $fields, $sort_by, $user_card_holder_search_model): \OpenAPI\Client\Model\UserCardHolderListResponse
```

Search users

To search for one or more users, send a `POST` request to the `/users/lookup` endpoint. Include in the message body any parameters by which you want to query. This endpoint supports <</core-api/field-filtering, field filtering>> and <</core-api/sorting-and-pagination, pagination>>.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: mqAppAndAccessToken
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\UsersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$count = 5; // int | Number of user resources to retrieve.
$start_index = 0; // int | Sort order index of the first resource in the returned array.
$search_type = 'search_type_example'; // string | Search type.
$fields = 'fields_example'; // string | Comma-delimited list of fields to return (`field_1,field_2`, and so on). Leave blank to return all fields.
$sort_by = '-lastModifiedTime'; // string | Field on which to sort. Use any field in the resource model, or one of the system fields `lastModifiedTime` or `createdTime`. Prefix the field name with a hyphen (`-`) to sort in descending order. Omit the hyphen to sort in ascending order.
$user_card_holder_search_model = {"first_name":"Jane"}; // \OpenAPI\Client\Model\UserCardHolderSearchModel

try {
    $result = $apiInstance->postUsersLookup($count, $start_index, $search_type, $fields, $sort_by, $user_card_holder_search_model);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->postUsersLookup: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **count** | **int**| Number of user resources to retrieve. | [optional] [default to 5]
 **start_index** | **int**| Sort order index of the first resource in the returned array. | [optional] [default to 0]
 **search_type** | **string**| Search type. | [optional]
 **fields** | **string**| Comma-delimited list of fields to return (&#x60;field_1,field_2&#x60;, and so on). Leave blank to return all fields. | [optional]
 **sort_by** | **string**| Field on which to sort. Use any field in the resource model, or one of the system fields &#x60;lastModifiedTime&#x60; or &#x60;createdTime&#x60;. Prefix the field name with a hyphen (&#x60;-&#x60;) to sort in descending order. Omit the hyphen to sort in ascending order. | [optional] [default to &#39;-lastModifiedTime&#39;]
 **user_card_holder_search_model** | [**\OpenAPI\Client\Model\UserCardHolderSearchModel**](../Model/UserCardHolderSearchModel.md)|  | [optional]

### Return type

[**\OpenAPI\Client\Model\UserCardHolderListResponse**](../Model/UserCardHolderListResponse.md)

### Authorization

[mqAppAndAccessToken](../../README.md#mqAppAndAccessToken)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `putUsersToken()`

```php
putUsersToken($token, $user_card_holder_update_model): \OpenAPI\Client\Model\CardHolderModel
```

Update user

To update a specific user resource, send a `PUT` request to the `/users/{token}` endpoint. Include the user `token` path parameter to specify the user to update.  To unlink a child user account from a parent account, pass a null value to the `parent_token` field of the child user resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: mqAppAndAccessToken
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\UsersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$token = 'token_example'; // string | Unique identifier of the user resource you want to update.
$user_card_holder_update_model = {"address1":"4321 Grove Street"}; // \OpenAPI\Client\Model\UserCardHolderUpdateModel | User object

try {
    $result = $apiInstance->putUsersToken($token, $user_card_holder_update_model);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->putUsersToken: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **token** | **string**| Unique identifier of the user resource you want to update. |
 **user_card_holder_update_model** | [**\OpenAPI\Client\Model\UserCardHolderUpdateModel**](../Model/UserCardHolderUpdateModel.md)| User object |

### Return type

[**\OpenAPI\Client\Model\CardHolderModel**](../Model/CardHolderModel.md)

### Authorization

[mqAppAndAccessToken](../../README.md#mqAppAndAccessToken)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
