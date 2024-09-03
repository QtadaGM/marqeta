# OpenAPI\Client\FundingViaACHBetaApi

All URIs are relative to /v3.

Method | HTTP request | Description
------------- | ------------- | -------------
[**getBanktransfersAch()**](FundingViaACHBetaApi.md#getBanktransfersAch) | **GET** /banktransfers/ach | List ACH transfers
[**getBanktransfersAchToken()**](FundingViaACHBetaApi.md#getBanktransfersAchToken) | **GET** /banktransfers/ach/{token} | Retrieve ACH transfer
[**getBanktransfersAchTransitions()**](FundingViaACHBetaApi.md#getBanktransfersAchTransitions) | **GET** /banktransfers/ach/transitions | List ACH transfer transitions
[**postApplyProvisionalCreditToBankTransfer()**](FundingViaACHBetaApi.md#postApplyProvisionalCreditToBankTransfer) | **POST** /banktransfers/ach/earlyfunds | Apply a provisional credit to ACH transfer
[**postBanktransfersAch()**](FundingViaACHBetaApi.md#postBanktransfersAch) | **POST** /banktransfers/ach | Create ACH transfer
[**postBanktransfersAchTransitions()**](FundingViaACHBetaApi.md#postBanktransfersAchTransitions) | **POST** /banktransfers/ach/transitions | Create ACH transfer transition


## `getBanktransfersAch()`

```php
getBanktransfersAch($count, $start_index, $user_token, $business_token, $funding_source_token, $statuses, $sort_by, $expand, $funding_source_type): \OpenAPI\Client\Model\BankTransferListResponse
```

List ACH transfers

Retrieve a list of all ACH transfers.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: mqAppAndAccessToken
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\FundingViaACHBetaApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$count = 5; // int | Number of resources to retrieve.
$start_index = 0; // int | Sort order index of the first resource in the returned array.
$user_token = 'user_token_example'; // string | Unique identifier of the user resource.
$business_token = 'business_token_example'; // string | Unique identifier of the business resource.
$funding_source_token = 'funding_source_token_example'; // string | Unique identifier of the funding source.
$statuses = 'statuses_example'; // string | Comma-delimited list of bank transfer statuses.
$sort_by = '-lastModifiedTime'; // string | Field on which to sort. Use any field in the resource model, or one of the system fields `lastModifiedTime` or `createdTime`. Prefix the field name with a hyphen (`-`) to sort in descending order. Omit the hyphen to sort in ascending order.
$expand = 'expand_example'; // string | Returns the full funding source object when `fundingsource` is passed. Otherwise, returns the funding source token.
$funding_source_type = 'funding_source_type_example'; // string | Funding source type to filter.

try {
    $result = $apiInstance->getBanktransfersAch($count, $start_index, $user_token, $business_token, $funding_source_token, $statuses, $sort_by, $expand, $funding_source_type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FundingViaACHBetaApi->getBanktransfersAch: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **count** | **int**| Number of resources to retrieve. | [optional] [default to 5]
 **start_index** | **int**| Sort order index of the first resource in the returned array. | [optional] [default to 0]
 **user_token** | **string**| Unique identifier of the user resource. | [optional]
 **business_token** | **string**| Unique identifier of the business resource. | [optional]
 **funding_source_token** | **string**| Unique identifier of the funding source. | [optional]
 **statuses** | **string**| Comma-delimited list of bank transfer statuses. | [optional]
 **sort_by** | **string**| Field on which to sort. Use any field in the resource model, or one of the system fields &#x60;lastModifiedTime&#x60; or &#x60;createdTime&#x60;. Prefix the field name with a hyphen (&#x60;-&#x60;) to sort in descending order. Omit the hyphen to sort in ascending order. | [optional] [default to &#39;-lastModifiedTime&#39;]
 **expand** | **string**| Returns the full funding source object when &#x60;fundingsource&#x60; is passed. Otherwise, returns the funding source token. | [optional]
 **funding_source_type** | **string**| Funding source type to filter. | [optional]

### Return type

[**\OpenAPI\Client\Model\BankTransferListResponse**](../Model/BankTransferListResponse.md)

### Authorization

[mqAppAndAccessToken](../../README.md#mqAppAndAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getBanktransfersAchToken()`

```php
getBanktransfersAchToken($token): \OpenAPI\Client\Model\BankTransferResponseModel
```

Retrieve ACH transfer

Retrieve a specific ACH transfer.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: mqAppAndAccessToken
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\FundingViaACHBetaApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$token = 'token_example'; // string | Unique identifier of the bank transfer.

try {
    $result = $apiInstance->getBanktransfersAchToken($token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FundingViaACHBetaApi->getBanktransfersAchToken: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **token** | **string**| Unique identifier of the bank transfer. |

### Return type

[**\OpenAPI\Client\Model\BankTransferResponseModel**](../Model/BankTransferResponseModel.md)

### Authorization

[mqAppAndAccessToken](../../README.md#mqAppAndAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getBanktransfersAchTransitions()`

```php
getBanktransfersAchTransitions($count, $token, $bank_transfer_token, $start_index, $sort_by, $statuses): \OpenAPI\Client\Model\BankTransferTransitionListResponse
```

List ACH transfer transitions

Retrieve a list of all ACH transfer transitions for a given ACH transfer.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: mqAppAndAccessToken
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\FundingViaACHBetaApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$count = 5; // int | Number of bank transfer transitions to retrieve.
$token = 'token_example'; // string | Unique identifier of the bank transfer transition.
$bank_transfer_token = 'bank_transfer_token_example'; // string | Unique identifier of the bank transfer.
$start_index = 0; // int | Sort order index of the first resource in the returned array.
$sort_by = '-createdTime'; // string | Field on which to sort. Use any field in the resource model, or one of the system fields lastModifiedTime or createdTime. Prefix the field name with a hyphen (-) to sort in descending order. Omit the hyphen to sort in ascending order.
$statuses = 'statuses_example'; // string | Comma-delimited list of bank transfer states to display.

try {
    $result = $apiInstance->getBanktransfersAchTransitions($count, $token, $bank_transfer_token, $start_index, $sort_by, $statuses);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FundingViaACHBetaApi->getBanktransfersAchTransitions: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **count** | **int**| Number of bank transfer transitions to retrieve. | [optional] [default to 5]
 **token** | **string**| Unique identifier of the bank transfer transition. | [optional]
 **bank_transfer_token** | **string**| Unique identifier of the bank transfer. | [optional]
 **start_index** | **int**| Sort order index of the first resource in the returned array. | [optional] [default to 0]
 **sort_by** | **string**| Field on which to sort. Use any field in the resource model, or one of the system fields lastModifiedTime or createdTime. Prefix the field name with a hyphen (-) to sort in descending order. Omit the hyphen to sort in ascending order. | [optional] [default to &#39;-createdTime&#39;]
 **statuses** | **string**| Comma-delimited list of bank transfer states to display. | [optional]

### Return type

[**\OpenAPI\Client\Model\BankTransferTransitionListResponse**](../Model/BankTransferTransitionListResponse.md)

### Authorization

[mqAppAndAccessToken](../../README.md#mqAppAndAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postApplyProvisionalCreditToBankTransfer()`

```php
postApplyProvisionalCreditToBankTransfer($early_funds_request_model): \OpenAPI\Client\Model\BankTransferResponseModel
```

Apply a provisional credit to ACH transfer

Applies a provisional credit to an ACH transfer.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: mqAppAndAccessToken
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\FundingViaACHBetaApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$early_funds_request_model = {"bank_transfer_token":"cf3b49d8-bd68-4fb1-8da5-c170cff3d788"}; // \OpenAPI\Client\Model\EarlyFundsRequestModel | ACH early funds request model

try {
    $result = $apiInstance->postApplyProvisionalCreditToBankTransfer($early_funds_request_model);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FundingViaACHBetaApi->postApplyProvisionalCreditToBankTransfer: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **early_funds_request_model** | [**\OpenAPI\Client\Model\EarlyFundsRequestModel**](../Model/EarlyFundsRequestModel.md)| ACH early funds request model |

### Return type

[**\OpenAPI\Client\Model\BankTransferResponseModel**](../Model/BankTransferResponseModel.md)

### Authorization

[mqAppAndAccessToken](../../README.md#mqAppAndAccessToken)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postBanktransfersAch()`

```php
postBanktransfersAch($bank_transfer_request_model): \OpenAPI\Client\Model\BankTransferResponseModel
```

Create ACH transfer

Create an ACH transfer that pushes funds to an external account or pulls funds into your program funding account.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: mqAppAndAccessToken
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\FundingViaACHBetaApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$bank_transfer_request_model = {"amount":10.49,"currency_code":"USD","funding_source_token":"d331b4b2-cef5-49a3-9c41-75d8f4e15cfz","memo":"Bank transfer","standard_entry_class_code":"WEB","statement_descriptor":"ACHTRNSFR","transfer_speed":"STANDARD","type":"PUSH"}; // \OpenAPI\Client\Model\BankTransferRequestModel | Create bank transfer request model

try {
    $result = $apiInstance->postBanktransfersAch($bank_transfer_request_model);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FundingViaACHBetaApi->postBanktransfersAch: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **bank_transfer_request_model** | [**\OpenAPI\Client\Model\BankTransferRequestModel**](../Model/BankTransferRequestModel.md)| Create bank transfer request model |

### Return type

[**\OpenAPI\Client\Model\BankTransferResponseModel**](../Model/BankTransferResponseModel.md)

### Authorization

[mqAppAndAccessToken](../../README.md#mqAppAndAccessToken)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postBanktransfersAchTransitions()`

```php
postBanktransfersAchTransitions($bank_transfer_transition_request_model): \OpenAPI\Client\Model\BankTransferTransitionResponseModel
```

Create ACH transfer transition

Create an ACH transfer transition that updates the `status` of an ACH transfer.  Each ACH transfer has a lifecycle of statuses, as shown in the following diagram:  [#banktransfers-1-image] image::achtransfers1[alt='ACH transfer lifecycle', width=575]  [NOTE] You can create ACH transfer transitions in the sandbox environment. However, Marqeta transitions ACH transfers through their lifecycle in the production environment.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: mqAppAndAccessToken
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\FundingViaACHBetaApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$bank_transfer_transition_request_model = {"bank_transfer_token":"f8b8245f-fc36-49f3-9f9f-f63b159501b7","channel":"API","status":"CANCELLED"}; // \OpenAPI\Client\Model\BankTransferTransitionRequestModel | Create bank transfer transition request model

try {
    $result = $apiInstance->postBanktransfersAchTransitions($bank_transfer_transition_request_model);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FundingViaACHBetaApi->postBanktransfersAchTransitions: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **bank_transfer_transition_request_model** | [**\OpenAPI\Client\Model\BankTransferTransitionRequestModel**](../Model/BankTransferTransitionRequestModel.md)| Create bank transfer transition request model |

### Return type

[**\OpenAPI\Client\Model\BankTransferTransitionResponseModel**](../Model/BankTransferTransitionResponseModel.md)

### Authorization

[mqAppAndAccessToken](../../README.md#mqAppAndAccessToken)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
