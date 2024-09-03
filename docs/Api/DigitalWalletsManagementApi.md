# OpenAPI\Client\DigitalWalletsManagementApi

All URIs are relative to /v3.

Method | HTTP request | Description
------------- | ------------- | -------------
[**generateApplePayWPPJWT()**](DigitalWalletsManagementApi.md#generateApplePayWPPJWT) | **POST** /digitalwallets/wpp/applePayJWT | Create request for Apple Wallet web push provisioning
[**getDigitalwallettokens()**](DigitalWalletsManagementApi.md#getDigitalwallettokens) | **GET** /digitalwallettokens | List digital wallet tokens
[**getDigitalwallettokensCardCardtoken()**](DigitalWalletsManagementApi.md#getDigitalwallettokensCardCardtoken) | **GET** /digitalwallettokens/card/{card_token} | List digital wallet tokens for card
[**getDigitalwallettokensToken()**](DigitalWalletsManagementApi.md#getDigitalwallettokensToken) | **GET** /digitalwallettokens/{token} | Retrieve digital wallet token
[**getDigitalwallettokensTokenShowtokenpan()**](DigitalWalletsManagementApi.md#getDigitalwallettokensTokenShowtokenpan) | **GET** /digitalwallettokens/{token}/showtokenpan | Retrieve digital wallet token PAN
[**getDigitalwallettokentransitionsDigitalwallettokenToken()**](DigitalWalletsManagementApi.md#getDigitalwallettokentransitionsDigitalwallettokenToken) | **GET** /digitalwallettokentransitions/digitalwallettoken/{token} | List transitions for digital wallet token
[**getDigitalwallettokentransitionsToken()**](DigitalWalletsManagementApi.md#getDigitalwallettokentransitionsToken) | **GET** /digitalwallettokentransitions/{token} | Retrieve digital wallet token transition
[**postDigitalwalletprovisionrequestsAndroidpay()**](DigitalWalletsManagementApi.md#postDigitalwalletprovisionrequestsAndroidpay) | **POST** /digitalwalletprovisionrequests/androidpay | Create digital wallet token provisioning request for Google Wallet
[**postDigitalwalletprovisionrequestsApplepay()**](DigitalWalletsManagementApi.md#postDigitalwalletprovisionrequestsApplepay) | **POST** /digitalwalletprovisionrequests/applepay | Create digital wallet token provisioning request for Apple Wallet
[**postDigitalwalletprovisionrequestsSamsungpay()**](DigitalWalletsManagementApi.md#postDigitalwalletprovisionrequestsSamsungpay) | **POST** /digitalwalletprovisionrequests/samsungpay | Create digital wallet token provisioning request for Samsung Wallet
[**postDigitalwalletprovisionrequestsXPay()**](DigitalWalletsManagementApi.md#postDigitalwalletprovisionrequestsXPay) | **POST** /digitalwalletprovisionrequests/xpay | Create digital wallet token provisioning request for XPay
[**postDigitalwallettokentransitions()**](DigitalWalletsManagementApi.md#postDigitalwallettokentransitions) | **POST** /digitalwallettokentransitions | Create digital wallet token transition
[**sendOPCDataToGooglePay()**](DigitalWalletsManagementApi.md#sendOPCDataToGooglePay) | **POST** /digitalwallets/wpp/googlePayPushProvisioningNotification | Create request for Google Wallet web push provisioning


## `generateApplePayWPPJWT()`

```php
generateApplePayWPPJWT($req_sys_id, $request_for_apple_pay_wpp_jwt): \OpenAPI\Client\Model\WebPushProvisioningApplePayJWTResponse
```

Create request for Apple Wallet web push provisioning

[NOTE] This endpoint is currently in beta and subject to change. For more information, contact your Marqeta representative.  Use this endpoint to add a card to Apple Wallet via a web application.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: mqAppAndAccessToken
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\DigitalWalletsManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$req_sys_id = 123d837e-958a-4e9f-bc97-4843ec948123; // string | Random pseudo-unique value used for troubleshooting between multiple parties.
$request_for_apple_pay_wpp_jwt = new \OpenAPI\Client\Model\RequestForApplePayWppJWT(); // \OpenAPI\Client\Model\RequestForApplePayWppJWT

try {
    $result = $apiInstance->generateApplePayWPPJWT($req_sys_id, $request_for_apple_pay_wpp_jwt);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DigitalWalletsManagementApi->generateApplePayWPPJWT: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **req_sys_id** | **string**| Random pseudo-unique value used for troubleshooting between multiple parties. |
 **request_for_apple_pay_wpp_jwt** | [**\OpenAPI\Client\Model\RequestForApplePayWppJWT**](../Model/RequestForApplePayWppJWT.md)|  |

### Return type

[**\OpenAPI\Client\Model\WebPushProvisioningApplePayJWTResponse**](../Model/WebPushProvisioningApplePayJWTResponse.md)

### Authorization

[mqAppAndAccessToken](../../README.md#mqAppAndAccessToken)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getDigitalwallettokens()`

```php
getDigitalwallettokens($count, $start_index, $fields, $sort_by, $start_date, $end_date, $pan_reference_id, $token_reference_id, $correlation_id, $token_type, $token_requestor_name, $state, $embed): \OpenAPI\Client\Model\DigitalWalletTokenListResponse
```

List digital wallet tokens

Use this endpoint to retrieve a list of digital wallet tokens.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: mqAppAndAccessToken
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\DigitalWalletsManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$count = 10; // int | Number of digital wallet token resources to retrieve.
$start_index = 0; // int | Sort order index of the first digital wallet token resource in the returned array.
$fields = 'fields_example'; // string | Comma-delimited list of fields to return (`field_1,field_2`, and so on). Leave blank to return all fields.
$sort_by = '-createdTime'; // string | Field on which to sort. Use any field in the resource model, or one of the system fields `lastModifiedTime` or `createdTime`. Prefix the field name with a hyphen (`-`) to sort in descending order. Omit the hyphen to sort in ascending order.
$start_date = 'start_date_example'; // string | Date when the digital wallet token becomes active.
$end_date = 'end_date_example'; // string | Expiration date of the digital wallet token.
$pan_reference_id = 'pan_reference_id_example'; // string | Unique identifier of the digital wallet token primary account number (PAN) within the card network. This value may vary, depending on the digital wallet. For example, the `pan_reference_id` may be different in Apple Wallet and Google Wallet for the same digital wallet token.
$token_reference_id = 'token_reference_id_example'; // string | Unique identifier of the digital wallet token within the card network. The `token_reference_id` is unique at the card network level.
$correlation_id = 'correlation_id_example'; // string | Unique value representing a tokenization request (Mastercard only).
$token_type = 'token_type_example'; // string | Comma-delimited list of digital wallet token types to display.
$token_requestor_name = 'token_requestor_name_example'; // string | Name of the token requestor within the card network.  *NOTE:* The list of example values for this field is maintained by the card networks and is subject to change.
$state = 'state_example'; // string | Comma-delimited list of digital wallet token states to display.
$embed = 'embed_example'; // string | An optional embedded user object.

try {
    $result = $apiInstance->getDigitalwallettokens($count, $start_index, $fields, $sort_by, $start_date, $end_date, $pan_reference_id, $token_reference_id, $correlation_id, $token_type, $token_requestor_name, $state, $embed);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DigitalWalletsManagementApi->getDigitalwallettokens: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **count** | **int**| Number of digital wallet token resources to retrieve. | [optional] [default to 10]
 **start_index** | **int**| Sort order index of the first digital wallet token resource in the returned array. | [optional] [default to 0]
 **fields** | **string**| Comma-delimited list of fields to return (&#x60;field_1,field_2&#x60;, and so on). Leave blank to return all fields. | [optional]
 **sort_by** | **string**| Field on which to sort. Use any field in the resource model, or one of the system fields &#x60;lastModifiedTime&#x60; or &#x60;createdTime&#x60;. Prefix the field name with a hyphen (&#x60;-&#x60;) to sort in descending order. Omit the hyphen to sort in ascending order. | [optional] [default to &#39;-createdTime&#39;]
 **start_date** | **string**| Date when the digital wallet token becomes active. | [optional]
 **end_date** | **string**| Expiration date of the digital wallet token. | [optional]
 **pan_reference_id** | **string**| Unique identifier of the digital wallet token primary account number (PAN) within the card network. This value may vary, depending on the digital wallet. For example, the &#x60;pan_reference_id&#x60; may be different in Apple Wallet and Google Wallet for the same digital wallet token. | [optional]
 **token_reference_id** | **string**| Unique identifier of the digital wallet token within the card network. The &#x60;token_reference_id&#x60; is unique at the card network level. | [optional]
 **correlation_id** | **string**| Unique value representing a tokenization request (Mastercard only). | [optional]
 **token_type** | **string**| Comma-delimited list of digital wallet token types to display. | [optional]
 **token_requestor_name** | **string**| Name of the token requestor within the card network.  *NOTE:* The list of example values for this field is maintained by the card networks and is subject to change. | [optional]
 **state** | **string**| Comma-delimited list of digital wallet token states to display. | [optional]
 **embed** | **string**| An optional embedded user object. | [optional]

### Return type

[**\OpenAPI\Client\Model\DigitalWalletTokenListResponse**](../Model/DigitalWalletTokenListResponse.md)

### Authorization

[mqAppAndAccessToken](../../README.md#mqAppAndAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getDigitalwallettokensCardCardtoken()`

```php
getDigitalwallettokensCardCardtoken($card_token, $count, $start_index, $sort_by): \OpenAPI\Client\Model\DigitalWalletTokenListResponse
```

List digital wallet tokens for card

Use this endpoint to return an array of all digital wallet tokens for a particular card.  This endpoint supports <</core-api/sorting-and-pagination, pagination>>.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: mqAppAndAccessToken
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\DigitalWalletsManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$card_token = 'card_token_example'; // string | Unique identifier of the card. Used to minimize the need to exchange card details during subsequent calls, and also for troubleshooting.
$count = 5; // int | Number of digital wallet token resources to retrieve.
$start_index = 0; // int | Sort order index of the first digital wallet token resource in the returned array.
$sort_by = '-createdTime'; // string | Field on which to sort. Use any field in the resource model, or one of the system fields `lastModifiedTime` or `createdTime`. Prefix the field name with a hyphen (`-`) to sort in descending order. Omit the hyphen to sort in ascending order.

try {
    $result = $apiInstance->getDigitalwallettokensCardCardtoken($card_token, $count, $start_index, $sort_by);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DigitalWalletsManagementApi->getDigitalwallettokensCardCardtoken: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **card_token** | **string**| Unique identifier of the card. Used to minimize the need to exchange card details during subsequent calls, and also for troubleshooting. |
 **count** | **int**| Number of digital wallet token resources to retrieve. | [optional] [default to 5]
 **start_index** | **int**| Sort order index of the first digital wallet token resource in the returned array. | [optional] [default to 0]
 **sort_by** | **string**| Field on which to sort. Use any field in the resource model, or one of the system fields &#x60;lastModifiedTime&#x60; or &#x60;createdTime&#x60;. Prefix the field name with a hyphen (&#x60;-&#x60;) to sort in descending order. Omit the hyphen to sort in ascending order. | [optional] [default to &#39;-createdTime&#39;]

### Return type

[**\OpenAPI\Client\Model\DigitalWalletTokenListResponse**](../Model/DigitalWalletTokenListResponse.md)

### Authorization

[mqAppAndAccessToken](../../README.md#mqAppAndAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getDigitalwallettokensToken()`

```php
getDigitalwallettokensToken($token): \OpenAPI\Client\Model\DigitalWalletToken
```

Retrieve digital wallet token

Use this endpoint to retrieve a specific digital wallet token.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: mqAppAndAccessToken
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\DigitalWalletsManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$token = 'token_example'; // string | Unique identifier of the digital wallet token (DWT).

try {
    $result = $apiInstance->getDigitalwallettokensToken($token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DigitalWalletsManagementApi->getDigitalwallettokensToken: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **token** | **string**| Unique identifier of the digital wallet token (DWT). |

### Return type

[**\OpenAPI\Client\Model\DigitalWalletToken**](../Model/DigitalWalletToken.md)

### Authorization

[mqAppAndAccessToken](../../README.md#mqAppAndAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getDigitalwallettokensTokenShowtokenpan()`

```php
getDigitalwallettokensTokenShowtokenpan($token): \OpenAPI\Client\Model\DigitalWalletToken
```

Retrieve digital wallet token PAN

Use this endpoint to retrieve a digital wallet token with the entire primary account number (PAN) displayed. The PAN returned is of the digital wallet token and not of the card. (For security reasons, the PAN is not fully visible on the digital wallet token returned by `GET` `/digitalwallettokens/{token}`.)  [WARNING] Sending a request to this endpoint requires PCI DSS compliance. You must comply with PCI DSS data security requirements if you want to store, transmit, or process sensitive card data such as the cardholder's primary account number (PAN), personal identification number (PIN), and card expiration date.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: mqAppAndAccessToken
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\DigitalWalletsManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$token = 'token_example'; // string | Unique identifier of the digital wallet token (DWT).

try {
    $result = $apiInstance->getDigitalwallettokensTokenShowtokenpan($token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DigitalWalletsManagementApi->getDigitalwallettokensTokenShowtokenpan: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **token** | **string**| Unique identifier of the digital wallet token (DWT). |

### Return type

[**\OpenAPI\Client\Model\DigitalWalletToken**](../Model/DigitalWalletToken.md)

### Authorization

[mqAppAndAccessToken](../../README.md#mqAppAndAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getDigitalwallettokentransitionsDigitalwallettokenToken()`

```php
getDigitalwallettokentransitionsDigitalwallettokenToken($token, $count, $start_index, $fields, $sort_by): \OpenAPI\Client\Model\DigitalWalletTokenTransitionListResponse
```

List transitions for digital wallet token

Use this endpoint to return an array of all transitions for a particular digital wallet token.  This endpoint supports <</core-api/field-filtering, field filtering>>, <</core-api/sorting-and-pagination, pagination>>, and <</core-api/sorting-and-pagination, sorting>>.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: mqAppAndAccessToken
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\DigitalWalletsManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$token = 'token_example'; // string | Unique identifier of the digital wallet token (DWT).
$count = 5; // int | Number of digital wallet transitions to retrieve.
$start_index = 0; // int | The sort order index of the first digital wallet token in the returned array.
$fields = 'fields_example'; // string | Comma-delimited list of fields to return (`field_1,field_2`, and so on). Leave blank to return all fields.
$sort_by = '-id'; // string | Field on which to sort. Use any field in the resource model, or one of the system fields `lastModifiedTime` or `createdTime`. Prefix the field name with a hyphen (`-`) to sort in descending order. Omit the hyphen to sort in ascending order.

try {
    $result = $apiInstance->getDigitalwallettokentransitionsDigitalwallettokenToken($token, $count, $start_index, $fields, $sort_by);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DigitalWalletsManagementApi->getDigitalwallettokentransitionsDigitalwallettokenToken: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **token** | **string**| Unique identifier of the digital wallet token (DWT). |
 **count** | **int**| Number of digital wallet transitions to retrieve. | [optional] [default to 5]
 **start_index** | **int**| The sort order index of the first digital wallet token in the returned array. | [optional] [default to 0]
 **fields** | **string**| Comma-delimited list of fields to return (&#x60;field_1,field_2&#x60;, and so on). Leave blank to return all fields. | [optional]
 **sort_by** | **string**| Field on which to sort. Use any field in the resource model, or one of the system fields &#x60;lastModifiedTime&#x60; or &#x60;createdTime&#x60;. Prefix the field name with a hyphen (&#x60;-&#x60;) to sort in descending order. Omit the hyphen to sort in ascending order. | [optional] [default to &#39;-id&#39;]

### Return type

[**\OpenAPI\Client\Model\DigitalWalletTokenTransitionListResponse**](../Model/DigitalWalletTokenTransitionListResponse.md)

### Authorization

[mqAppAndAccessToken](../../README.md#mqAppAndAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getDigitalwallettokentransitionsToken()`

```php
getDigitalwallettokentransitionsToken($token, $fields): \OpenAPI\Client\Model\DigitalWalletTokenTransitionResponse
```

Retrieve digital wallet token transition

Use this endpoint to retrieve a specific digital wallet token transition.  This endpoint supports <</core-api/field-filtering, field filtering>>.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: mqAppAndAccessToken
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\DigitalWalletsManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$token = 'token_example'; // string | Unique identifier of the digital wallet token (DWT) transition.
$fields = 'fields_example'; // string | Comma-delimited list of fields to return (`field_1,field_2`, and so on). Leave blank to return all fields.

try {
    $result = $apiInstance->getDigitalwallettokentransitionsToken($token, $fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DigitalWalletsManagementApi->getDigitalwallettokentransitionsToken: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **token** | **string**| Unique identifier of the digital wallet token (DWT) transition. |
 **fields** | **string**| Comma-delimited list of fields to return (&#x60;field_1,field_2&#x60;, and so on). Leave blank to return all fields. | [optional]

### Return type

[**\OpenAPI\Client\Model\DigitalWalletTokenTransitionResponse**](../Model/DigitalWalletTokenTransitionResponse.md)

### Authorization

[mqAppAndAccessToken](../../README.md#mqAppAndAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postDigitalwalletprovisionrequestsAndroidpay()`

```php
postDigitalwalletprovisionrequestsAndroidpay($digital_wallet_android_pay_provision_request): \OpenAPI\Client\Model\DigitalWalletAndroidPayProvisionResponse
```

Create digital wallet token provisioning request for Google Wallet

Use this endpoint to return card data for use in provisioning a digital wallet token into Google Wallet.  The returned card data is encrypted using the digital wallet provider's encryption key, thereby reducing your PCI compliance overhead.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: mqAppAndAccessToken
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\DigitalWalletsManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$digital_wallet_android_pay_provision_request = {"card_token":"my_card_token_0987","device_id":"my_device_id_r51j","device_type":"MOBILE_PHONE","provisioning_app_version":"2.13.3","wallet_account_id":"my_wallet_account_id_sr51"}; // \OpenAPI\Client\Model\DigitalWalletAndroidPayProvisionRequest

try {
    $result = $apiInstance->postDigitalwalletprovisionrequestsAndroidpay($digital_wallet_android_pay_provision_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DigitalWalletsManagementApi->postDigitalwalletprovisionrequestsAndroidpay: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **digital_wallet_android_pay_provision_request** | [**\OpenAPI\Client\Model\DigitalWalletAndroidPayProvisionRequest**](../Model/DigitalWalletAndroidPayProvisionRequest.md)|  | [optional]

### Return type

[**\OpenAPI\Client\Model\DigitalWalletAndroidPayProvisionResponse**](../Model/DigitalWalletAndroidPayProvisionResponse.md)

### Authorization

[mqAppAndAccessToken](../../README.md#mqAppAndAccessToken)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postDigitalwalletprovisionrequestsApplepay()`

```php
postDigitalwalletprovisionrequestsApplepay($digital_wallet_apple_pay_provision_request): \OpenAPI\Client\Model\DigitalWalletApplePayProvisionResponse
```

Create digital wallet token provisioning request for Apple Wallet

Use this endpoint to return card data for use in provisioning a digital wallet token into Apple Wallet.  The returned card data is encrypted using the digital wallet provider's encryption key, thereby reducing your PCI compliance overhead.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: mqAppAndAccessToken
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\DigitalWalletsManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$digital_wallet_apple_pay_provision_request = {"card_token":"my_card_token_1234","certificates":["my_certificate_ZIzj...","my_certificate_SgMA..."],"device_type":"MOBILE_PHONE","nonce":"my_nonce_JJCF","nonce_signature":"my_nonce_signature_wbBn","provisioning_app_version":"2.13.7"}; // \OpenAPI\Client\Model\DigitalWalletApplePayProvisionRequest

try {
    $result = $apiInstance->postDigitalwalletprovisionrequestsApplepay($digital_wallet_apple_pay_provision_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DigitalWalletsManagementApi->postDigitalwalletprovisionrequestsApplepay: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **digital_wallet_apple_pay_provision_request** | [**\OpenAPI\Client\Model\DigitalWalletApplePayProvisionRequest**](../Model/DigitalWalletApplePayProvisionRequest.md)|  | [optional]

### Return type

[**\OpenAPI\Client\Model\DigitalWalletApplePayProvisionResponse**](../Model/DigitalWalletApplePayProvisionResponse.md)

### Authorization

[mqAppAndAccessToken](../../README.md#mqAppAndAccessToken)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postDigitalwalletprovisionrequestsSamsungpay()`

```php
postDigitalwalletprovisionrequestsSamsungpay($digital_wallet_samsung_pay_provision_request): \OpenAPI\Client\Model\DigitalWalletSamsungPayProvisionResponse
```

Create digital wallet token provisioning request for Samsung Wallet

[NOTE] This endpoint is limited in availability. For more information, contact your Marqeta representative.  Use this endpoint to return card data for use in provisioning a digital wallet token into Samsung Wallet.  The returned card data is encrypted using the digital wallet provider's encryption key, thereby reducing your PCI compliance overhead.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: mqAppAndAccessToken
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\DigitalWalletsManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$digital_wallet_samsung_pay_provision_request = new \OpenAPI\Client\Model\DigitalWalletSamsungPayProvisionRequest(); // \OpenAPI\Client\Model\DigitalWalletSamsungPayProvisionRequest

try {
    $result = $apiInstance->postDigitalwalletprovisionrequestsSamsungpay($digital_wallet_samsung_pay_provision_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DigitalWalletsManagementApi->postDigitalwalletprovisionrequestsSamsungpay: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **digital_wallet_samsung_pay_provision_request** | [**\OpenAPI\Client\Model\DigitalWalletSamsungPayProvisionRequest**](../Model/DigitalWalletSamsungPayProvisionRequest.md)|  | [optional]

### Return type

[**\OpenAPI\Client\Model\DigitalWalletSamsungPayProvisionResponse**](../Model/DigitalWalletSamsungPayProvisionResponse.md)

### Authorization

[mqAppAndAccessToken](../../README.md#mqAppAndAccessToken)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postDigitalwalletprovisionrequestsXPay()`

```php
postDigitalwalletprovisionrequestsXPay($digital_wallet_x_pay_provision_request): \OpenAPI\Client\Model\DigitalWalletXPayProvisionResponse
```

Create digital wallet token provisioning request for XPay

[NOTE] This endpoint is limited in availability. For more information, contact your Marqeta representative.  Use this endpoint to return card data for use in provisioning a digital wallet token into an XPay digital wallet.  The returned card data is encrypted using the digital wallet provider's encryption key, thereby reducing your PCI compliance overhead.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: mqAppAndAccessToken
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\DigitalWalletsManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$digital_wallet_x_pay_provision_request = new \OpenAPI\Client\Model\DigitalWalletXPayProvisionRequest(); // \OpenAPI\Client\Model\DigitalWalletXPayProvisionRequest

try {
    $result = $apiInstance->postDigitalwalletprovisionrequestsXPay($digital_wallet_x_pay_provision_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DigitalWalletsManagementApi->postDigitalwalletprovisionrequestsXPay: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **digital_wallet_x_pay_provision_request** | [**\OpenAPI\Client\Model\DigitalWalletXPayProvisionRequest**](../Model/DigitalWalletXPayProvisionRequest.md)|  | [optional]

### Return type

[**\OpenAPI\Client\Model\DigitalWalletXPayProvisionResponse**](../Model/DigitalWalletXPayProvisionResponse.md)

### Authorization

[mqAppAndAccessToken](../../README.md#mqAppAndAccessToken)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postDigitalwallettokentransitions()`

```php
postDigitalwallettokentransitions($digital_wallet_token_transition_request): \OpenAPI\Client\Model\DigitalWalletTokenTransitionResponse
```

Create digital wallet token transition

Use this endpoint to transition a digital wallet token from one state to another.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: mqAppAndAccessToken
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\DigitalWalletsManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$digital_wallet_token_transition_request = {"digital_wallet_token":{"token":"my_digital_wallet_token_0987"},"reason":"Passed additional identity verification","reason_code":"18","state":"ACTIVE","token":"my_transition_04"}; // \OpenAPI\Client\Model\DigitalWalletTokenTransitionRequest

try {
    $result = $apiInstance->postDigitalwallettokentransitions($digital_wallet_token_transition_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DigitalWalletsManagementApi->postDigitalwallettokentransitions: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **digital_wallet_token_transition_request** | [**\OpenAPI\Client\Model\DigitalWalletTokenTransitionRequest**](../Model/DigitalWalletTokenTransitionRequest.md)|  | [optional]

### Return type

[**\OpenAPI\Client\Model\DigitalWalletTokenTransitionResponse**](../Model/DigitalWalletTokenTransitionResponse.md)

### Authorization

[mqAppAndAccessToken](../../README.md#mqAppAndAccessToken)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `sendOPCDataToGooglePay()`

```php
sendOPCDataToGooglePay($req_sys_id, $sending_provisioning_data_to_google_pay_backend_request)
```

Create request for Google Wallet web push provisioning

[NOTE] This endpoint is currently in beta and subject to change. For more information, contact your Marqeta representative.  Use this endpoint to add a card to Google Wallet via a web application.  This endpoint does not return a payload in response to a request. Instead, a successful call will return a response code only.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: mqAppAndAccessToken
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\DigitalWalletsManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$req_sys_id = 123d837e-958a-4e9f-bc97-4843ec948123; // string | Random pseudo-unique value used for troubleshooting between multiple parties.
$sending_provisioning_data_to_google_pay_backend_request = new \OpenAPI\Client\Model\SendingProvisioningDataToGooglePayBackendRequest(); // \OpenAPI\Client\Model\SendingProvisioningDataToGooglePayBackendRequest

try {
    $apiInstance->sendOPCDataToGooglePay($req_sys_id, $sending_provisioning_data_to_google_pay_backend_request);
} catch (Exception $e) {
    echo 'Exception when calling DigitalWalletsManagementApi->sendOPCDataToGooglePay: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **req_sys_id** | **string**| Random pseudo-unique value used for troubleshooting between multiple parties. |
 **sending_provisioning_data_to_google_pay_backend_request** | [**\OpenAPI\Client\Model\SendingProvisioningDataToGooglePayBackendRequest**](../Model/SendingProvisioningDataToGooglePayBackendRequest.md)|  |

### Return type

void (empty response body)

### Authorization

[mqAppAndAccessToken](../../README.md#mqAppAndAccessToken)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
