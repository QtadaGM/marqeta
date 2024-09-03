# OpenAPI\Client\AccountHolderFundingSourcesApi

All URIs are relative to /v3.

Method | HTTP request | Description
------------- | ------------- | -------------
[**getFundingsourcesAchFundingsourcetoken()**](AccountHolderFundingSourcesApi.md#getFundingsourcesAchFundingsourcetoken) | **GET** /fundingsources/ach/{funding_source_token} | Retrieve ACH source
[**getFundingsourcesAchFundingsourcetokenVerificationamounts()**](AccountHolderFundingSourcesApi.md#getFundingsourcesAchFundingsourcetokenVerificationamounts) | **GET** /fundingsources/ach/{funding_source_token}/verificationamounts | Retrieve ACH verification amounts
[**getFundingsourcesBusinessBusinesstoken()**](AccountHolderFundingSourcesApi.md#getFundingsourcesBusinessBusinesstoken) | **GET** /fundingsources/business/{business_token} | List sources for business
[**getFundingsourcesPaymentcardFundingsourcetoken()**](AccountHolderFundingSourcesApi.md#getFundingsourcesPaymentcardFundingsourcetoken) | **GET** /fundingsources/paymentcard/{funding_source_token} | Retrieve payment card source
[**getFundingsourcesUserUsertoken()**](AccountHolderFundingSourcesApi.md#getFundingsourcesUserUsertoken) | **GET** /fundingsources/user/{user_token} | List sources for user
[**postFundingsourcesAch()**](AccountHolderFundingSourcesApi.md#postFundingsourcesAch) | **POST** /fundingsources/ach | Create ACH source
[**postFundingsourcesAchPartner()**](AccountHolderFundingSourcesApi.md#postFundingsourcesAchPartner) | **POST** /fundingsources/ach/partner | Create ACH source via a partner integration
[**postFundingsourcesPaymentcard()**](AccountHolderFundingSourcesApi.md#postFundingsourcesPaymentcard) | **POST** /fundingsources/paymentcard | Create payment card source
[**putFundingsourcesAchFundingsourcetoken()**](AccountHolderFundingSourcesApi.md#putFundingsourcesAchFundingsourcetoken) | **PUT** /fundingsources/ach/{funding_source_token} | Verify or update ACH source
[**putFundingsourcesFundingsourcetoken()**](AccountHolderFundingSourcesApi.md#putFundingsourcesFundingsourcetoken) | **PUT** /fundingsources/paymentcard/{funding_source_token} | Update payment card source
[**putFundingsourcesFundingsourcetokenDefault()**](AccountHolderFundingSourcesApi.md#putFundingsourcesFundingsourcetokenDefault) | **PUT** /fundingsources/{funding_source_token}/default | Set default source


## `getFundingsourcesAchFundingsourcetoken()`

```php
getFundingsourcesAchFundingsourcetoken($funding_source_token): \OpenAPI\Client\Model\AchResponseModel
```

Retrieve ACH source

Retrieve a specific ACH funding source.  The response body returns details about the account, including the verification status. Possible ACH verification status values are: `ACH_FAILED`, `ACH_VERIFIED`, and `VERIFICATION_PENDING`.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: mqAppAndAccessToken
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\AccountHolderFundingSourcesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$funding_source_token = 'funding_source_token_example'; // string | Unique identifier of the funding source.  Send a `GET` request to `/fundingsources/user/{user_token}` to retrieve existing funding source tokens for a user or to `/fundingsources/business/{business_token}` to retrieve existing funding source tokens for a business.

try {
    $result = $apiInstance->getFundingsourcesAchFundingsourcetoken($funding_source_token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountHolderFundingSourcesApi->getFundingsourcesAchFundingsourcetoken: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **funding_source_token** | **string**| Unique identifier of the funding source.  Send a &#x60;GET&#x60; request to &#x60;/fundingsources/user/{user_token}&#x60; to retrieve existing funding source tokens for a user or to &#x60;/fundingsources/business/{business_token}&#x60; to retrieve existing funding source tokens for a business. |

### Return type

[**\OpenAPI\Client\Model\AchResponseModel**](../Model/AchResponseModel.md)

### Authorization

[mqAppAndAccessToken](../../README.md#mqAppAndAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getFundingsourcesAchFundingsourcetokenVerificationamounts()`

```php
getFundingsourcesAchFundingsourcetokenVerificationamounts($funding_source_token): \OpenAPI\Client\Model\AchVerificationModel
```

Retrieve ACH verification amounts

In your sandbox environment, retrieve the amounts used to verify the association with your ACH account.  Use this endpoint for testing purposes only. In production, verification amounts are retrieved from the bank statement of the account holder.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: mqAppAndAccessToken
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\AccountHolderFundingSourcesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$funding_source_token = 'funding_source_token_example'; // string | Unique identifier of the funding source.  Send a `GET` request to `/fundingsources/user/{user_token}` to retrieve existing funding source tokens for a user or to `/fundingsources/business/{business_token}` to retrieve existing funding source tokens for a business.

try {
    $result = $apiInstance->getFundingsourcesAchFundingsourcetokenVerificationamounts($funding_source_token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountHolderFundingSourcesApi->getFundingsourcesAchFundingsourcetokenVerificationamounts: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **funding_source_token** | **string**| Unique identifier of the funding source.  Send a &#x60;GET&#x60; request to &#x60;/fundingsources/user/{user_token}&#x60; to retrieve existing funding source tokens for a user or to &#x60;/fundingsources/business/{business_token}&#x60; to retrieve existing funding source tokens for a business. |

### Return type

[**\OpenAPI\Client\Model\AchVerificationModel**](../Model/AchVerificationModel.md)

### Authorization

[mqAppAndAccessToken](../../README.md#mqAppAndAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getFundingsourcesBusinessBusinesstoken()`

```php
getFundingsourcesBusinessBusinesstoken($business_token, $type, $fields): \OpenAPI\Client\Model\FundingAccountListResponse
```

List sources for business

List funding sources associated with a specific business.  This endpoint supports <</core-api/field-filtering, field filtering>>.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: mqAppAndAccessToken
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\AccountHolderFundingSourcesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$business_token = 'business_token_example'; // string | Unique identifier of the business account holder.  Send a `GET` request to `/businesses` to retrieve business tokens.
$type = 'type_example'; // string | Type of funding source to return: ACH or payment card. Leave unspecified to return both types.
$fields = 'fields_example'; // string | Comma-delimited list of fields to return (`field_1,field_2`, and so on). Leave blank to return all fields.

try {
    $result = $apiInstance->getFundingsourcesBusinessBusinesstoken($business_token, $type, $fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountHolderFundingSourcesApi->getFundingsourcesBusinessBusinesstoken: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **business_token** | **string**| Unique identifier of the business account holder.  Send a &#x60;GET&#x60; request to &#x60;/businesses&#x60; to retrieve business tokens. |
 **type** | **string**| Type of funding source to return: ACH or payment card. Leave unspecified to return both types. | [optional]
 **fields** | **string**| Comma-delimited list of fields to return (&#x60;field_1,field_2&#x60;, and so on). Leave blank to return all fields. | [optional]

### Return type

[**\OpenAPI\Client\Model\FundingAccountListResponse**](../Model/FundingAccountListResponse.md)

### Authorization

[mqAppAndAccessToken](../../README.md#mqAppAndAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getFundingsourcesPaymentcardFundingsourcetoken()`

```php
getFundingsourcesPaymentcardFundingsourcetoken($funding_source_token): \OpenAPI\Client\Model\PaymentCardResponseModel
```

Retrieve payment card source

Retrieve a specific payment card funding source.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: mqAppAndAccessToken
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\AccountHolderFundingSourcesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$funding_source_token = 'funding_source_token_example'; // string | Unique identifier of the funding source.  Send a `GET` request to `/fundingsources/user/{user_token}` to retrieve existing funding source tokens for a user or to `/fundingsources/business/{business_token}` to retrieve existing funding source tokens for a business.

try {
    $result = $apiInstance->getFundingsourcesPaymentcardFundingsourcetoken($funding_source_token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountHolderFundingSourcesApi->getFundingsourcesPaymentcardFundingsourcetoken: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **funding_source_token** | **string**| Unique identifier of the funding source.  Send a &#x60;GET&#x60; request to &#x60;/fundingsources/user/{user_token}&#x60; to retrieve existing funding source tokens for a user or to &#x60;/fundingsources/business/{business_token}&#x60; to retrieve existing funding source tokens for a business. |

### Return type

[**\OpenAPI\Client\Model\PaymentCardResponseModel**](../Model/PaymentCardResponseModel.md)

### Authorization

[mqAppAndAccessToken](../../README.md#mqAppAndAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getFundingsourcesUserUsertoken()`

```php
getFundingsourcesUserUsertoken($user_token, $type, $fields): \OpenAPI\Client\Model\FundingAccountListResponse
```

List sources for user

List funding sources associated with a specific user.  This endpoint supports <</core-api/field-filtering, field filtering>>.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: mqAppAndAccessToken
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\AccountHolderFundingSourcesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$user_token = 'user_token_example'; // string | Unique identifier of the user account holder.
$type = 'type_example'; // string | Type of funding source to retrieve: ACH or payment card. Leave unspecified to return both types.
$fields = 'fields_example'; // string | Comma-delimited list of fields to return (`field_1,field_2`, and so on). Leave blank to return all fields.

try {
    $result = $apiInstance->getFundingsourcesUserUsertoken($user_token, $type, $fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountHolderFundingSourcesApi->getFundingsourcesUserUsertoken: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **user_token** | **string**| Unique identifier of the user account holder. |
 **type** | **string**| Type of funding source to retrieve: ACH or payment card. Leave unspecified to return both types. | [optional]
 **fields** | **string**| Comma-delimited list of fields to return (&#x60;field_1,field_2&#x60;, and so on). Leave blank to return all fields. | [optional]

### Return type

[**\OpenAPI\Client\Model\FundingAccountListResponse**](../Model/FundingAccountListResponse.md)

### Authorization

[mqAppAndAccessToken](../../README.md#mqAppAndAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postFundingsourcesAch()`

```php
postFundingsourcesAch($ach_model): \OpenAPI\Client\Model\AchResponseModel
```

Create ACH source

Create an ACH funding source for an existing account holder. Specify the account holder of the funding source by passing a user or business token.  When adding an ACH funding source, a small amount is deposited in the bank account as a test. The test deposit should be reflected in the account after two to three business days. You must then make an API call to verify the deposit amount in order to activate the ACH account. See <</core-api/account-holder-funding-sources#putFundingsourcesAchFundingsourcetoken, Verify or Update ACH Funding Source>> on this page for more information.  The response body returns details about the account, including the verification status. Possible ACH verification status values include `ACH_VERIFIED`, `ACH_FAILED`, and `VERIFICATION_PENDING`.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: mqAppAndAccessToken
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\AccountHolderFundingSourcesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$ach_model = {"account_number":"987654321","account_type":"savings","is_default_account":false,"name_on_account":"Jane Doe","routing_number":"121000358","token":"my_user_01_fundingsource_token_01","user_token":"my_user_01","verification_notes":"These are my verification notes.","verification_override":true}; // \OpenAPI\Client\Model\AchModel

try {
    $result = $apiInstance->postFundingsourcesAch($ach_model);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountHolderFundingSourcesApi->postFundingsourcesAch: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **ach_model** | [**\OpenAPI\Client\Model\AchModel**](../Model/AchModel.md)|  | [optional]

### Return type

[**\OpenAPI\Client\Model\AchResponseModel**](../Model/AchResponseModel.md)

### Authorization

[mqAppAndAccessToken](../../README.md#mqAppAndAccessToken)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postFundingsourcesAchPartner()`

```php
postFundingsourcesAchPartner($ach_partner_request_model): \OpenAPI\Client\Model\AchResponseModel
```

Create ACH source via a partner integration

Create an ACH funding source for an existing account holder by using a third-party partner to handle account validation and provide PII account data. Because you don't handle any personally identifiable information (PII) yourself, using a third party when creating the funding source enables you to bypass the regulatory and compliance measures related to capturing, storing, and transmitting PII.  With this endpoint, you can create a US-based funding source—either a checking account or a savings account—for a program or user without passing bank account details such as the account number or routing number to Marqeta. Instead, validating account data and account verification is handled by the third-party partner you specify, and a secure token (i.e., a Plaid `processor_token`) is shared across partners. By using a secure account verification platform to provide immediate verification, you shorten the wait time until the ACH funding source is ready and avoid managing the microdeposit-based account verification process.  To create an ACH funding source for an existing account holder without validating through a third party, see <</core-api/account-holder-funding-sources#postFundingsourcesAch, Create ACH source>>.  [NOTE] This endpoint assumes that you already have established a relationship with both Marqeta and the third-party account validation partner you want to use. In addition, you must explicitly authorize the sharing of information with the third-party partner, and enable Marqeta as a processor for your integration. For more information, contact your Marqeta representative.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: mqAppAndAccessToken
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\AccountHolderFundingSourcesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$ach_partner_request_model = {"is_default_account":false,"partner":"PLAID","partner_account_link_reference_token":"processor-sandbox-reference-token","token":"my_user_01_fundingsource_token_01","user_token":"my_user_01"}; // \OpenAPI\Client\Model\AchPartnerRequestModel

try {
    $result = $apiInstance->postFundingsourcesAchPartner($ach_partner_request_model);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountHolderFundingSourcesApi->postFundingsourcesAchPartner: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **ach_partner_request_model** | [**\OpenAPI\Client\Model\AchPartnerRequestModel**](../Model/AchPartnerRequestModel.md)|  | [optional]

### Return type

[**\OpenAPI\Client\Model\AchResponseModel**](../Model/AchResponseModel.md)

### Authorization

[mqAppAndAccessToken](../../README.md#mqAppAndAccessToken)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postFundingsourcesPaymentcard()`

```php
postFundingsourcesPaymentcard($token_request): \OpenAPI\Client\Model\PaymentCardResponseModel
```

Create payment card source

Create a payment card funding source for an existing account holder. This endpoint returns the card type and the last four digits of the card, and then sets the `active_ field` to `true`.  Marqeta retains only a tokenized representation of the card number.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: mqAppAndAccessToken
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\AccountHolderFundingSourcesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$token_request = {"account_number":"6559906559906557","cvv_number":"123","exp_date":"1227","is_default_account":true,"postal_code":"94608","token":"my_paymentcard_01","user_token":"my_user_01"}; // \OpenAPI\Client\Model\TokenRequest

try {
    $result = $apiInstance->postFundingsourcesPaymentcard($token_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountHolderFundingSourcesApi->postFundingsourcesPaymentcard: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **token_request** | [**\OpenAPI\Client\Model\TokenRequest**](../Model/TokenRequest.md)|  | [optional]

### Return type

[**\OpenAPI\Client\Model\PaymentCardResponseModel**](../Model/PaymentCardResponseModel.md)

### Authorization

[mqAppAndAccessToken](../../README.md#mqAppAndAccessToken)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `putFundingsourcesAchFundingsourcetoken()`

```php
putFundingsourcesAchFundingsourcetoken($funding_source_token, $ach_verification_model): \OpenAPI\Client\Model\AchResponseModel
```

Verify or update ACH source

Verify or update an ACH funding source.  If you are verifying the ACH source, include the verification amounts in the body of the request. ACH verification will fail if the verification amounts are not entered in the correct order. `verify_amount1` must match the first deposit amount, and `verify_amount2` must match the second.  If you are updating the ACH source, include the `active` field instead. The `active` field is the only field you can update.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: mqAppAndAccessToken
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\AccountHolderFundingSourcesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$funding_source_token = 'funding_source_token_example'; // string | Unique identifier of the funding source.  Send a `GET` request to `/fundingsources/user/{user_token}` to retrieve existing funding source tokens for a user or to `/fundingsources/business/{business_token}` to retrieve existing funding source tokens for a business.
$ach_verification_model = {"active":false,"verify_amount1":0.43,"verify_amount2":0.11}; // \OpenAPI\Client\Model\AchVerificationModel

try {
    $result = $apiInstance->putFundingsourcesAchFundingsourcetoken($funding_source_token, $ach_verification_model);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountHolderFundingSourcesApi->putFundingsourcesAchFundingsourcetoken: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **funding_source_token** | **string**| Unique identifier of the funding source.  Send a &#x60;GET&#x60; request to &#x60;/fundingsources/user/{user_token}&#x60; to retrieve existing funding source tokens for a user or to &#x60;/fundingsources/business/{business_token}&#x60; to retrieve existing funding source tokens for a business. |
 **ach_verification_model** | [**\OpenAPI\Client\Model\AchVerificationModel**](../Model/AchVerificationModel.md)|  | [optional]

### Return type

[**\OpenAPI\Client\Model\AchResponseModel**](../Model/AchResponseModel.md)

### Authorization

[mqAppAndAccessToken](../../README.md#mqAppAndAccessToken)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `putFundingsourcesFundingsourcetoken()`

```php
putFundingsourcesFundingsourcetoken($funding_source_token, $token_update_request): \OpenAPI\Client\Model\PaymentCardResponseModel
```

Update payment card source

Update a payment card funding source.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: mqAppAndAccessToken
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\AccountHolderFundingSourcesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$funding_source_token = 'funding_source_token_example'; // string | Unique identifier of the funding source.  Send a `GET` request to `/fundingsources/user/{user_token}` to retrieve existing funding source tokens for a user or to `/fundingsources/business/{business_token}` to retrieve existing funding source tokens for a business.
$token_update_request = {"exp_date":"1227","is_default_account":false}; // \OpenAPI\Client\Model\TokenUpdateRequest | Payment card

try {
    $result = $apiInstance->putFundingsourcesFundingsourcetoken($funding_source_token, $token_update_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountHolderFundingSourcesApi->putFundingsourcesFundingsourcetoken: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **funding_source_token** | **string**| Unique identifier of the funding source.  Send a &#x60;GET&#x60; request to &#x60;/fundingsources/user/{user_token}&#x60; to retrieve existing funding source tokens for a user or to &#x60;/fundingsources/business/{business_token}&#x60; to retrieve existing funding source tokens for a business. |
 **token_update_request** | [**\OpenAPI\Client\Model\TokenUpdateRequest**](../Model/TokenUpdateRequest.md)| Payment card |

### Return type

[**\OpenAPI\Client\Model\PaymentCardResponseModel**](../Model/PaymentCardResponseModel.md)

### Authorization

[mqAppAndAccessToken](../../README.md#mqAppAndAccessToken)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `putFundingsourcesFundingsourcetokenDefault()`

```php
putFundingsourcesFundingsourcetokenDefault($funding_source_token): \OpenAPI\Client\Model\PaymentCardResponseModel
```

Set default source

Configure either an ACH funding source or a payment card funding source as the default funding source.  A default funding source is used when you omit the `funding_source_token` field from funding requests, such as a `POST` request to `/gpaorders`. Note that the first funding source you create is automatically set as the default (`is_default_source=true`).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: mqAppAndAccessToken
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\AccountHolderFundingSourcesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$funding_source_token = 'funding_source_token_example'; // string | Unique identifier of the funding source.  Send a `GET` request to `/fundingsources/user/{user_token}` to retrieve existing funding source tokens for a user or to `/fundingsources/business/{business_token}` to retrieve existing funding source tokens for a business.

try {
    $result = $apiInstance->putFundingsourcesFundingsourcetokenDefault($funding_source_token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountHolderFundingSourcesApi->putFundingsourcesFundingsourcetokenDefault: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **funding_source_token** | **string**| Unique identifier of the funding source.  Send a &#x60;GET&#x60; request to &#x60;/fundingsources/user/{user_token}&#x60; to retrieve existing funding source tokens for a user or to &#x60;/fundingsources/business/{business_token}&#x60; to retrieve existing funding source tokens for a business. |

### Return type

[**\OpenAPI\Client\Model\PaymentCardResponseModel**](../Model/PaymentCardResponseModel.md)

### Authorization

[mqAppAndAccessToken](../../README.md#mqAppAndAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
