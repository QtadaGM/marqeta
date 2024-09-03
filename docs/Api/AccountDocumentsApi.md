# OpenAPI\Client\AccountDocumentsApi

All URIs are relative to /v3.

Method | HTTP request | Description
------------- | ------------- | -------------
[**getAccountDocuments()**](AccountDocumentsApi.md#getAccountDocuments) | **GET** /accounts/{account_token}/documents | List documents
[**getDocumentByAccountAndType()**](AccountDocumentsApi.md#getDocumentByAccountAndType) | **GET** /accounts/{account_token}/documents/{document_type} | Retrieve document
[**getDocumentHistoryByAccountAndType()**](AccountDocumentsApi.md#getDocumentHistoryByAccountAndType) | **GET** /accounts/{account_token}/documents/{document_type}/history | Retrieve document history


## `getAccountDocuments()`

```php
getAccountDocuments($account_token): \OpenAPI\Client\Model\AccountDocumentsResponse
```

List documents

Retrieve an array of documents on a credit account.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: mqAppAndAccessToken
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\AccountDocumentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account_token = 'account_token_example'; // string | Unique identifier of the credit account for which you want to get documents.  Send a `GET` request to `/credit/accounts` to retrieve existing credit account tokens.

try {
    $result = $apiInstance->getAccountDocuments($account_token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountDocumentsApi->getAccountDocuments: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **account_token** | **string**| Unique identifier of the credit account for which you want to get documents.  Send a &#x60;GET&#x60; request to &#x60;/credit/accounts&#x60; to retrieve existing credit account tokens. |

### Return type

[**\OpenAPI\Client\Model\AccountDocumentsResponse**](../Model/AccountDocumentsResponse.md)

### Authorization

[mqAppAndAccessToken](../../README.md#mqAppAndAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getDocumentByAccountAndType()`

```php
getDocumentByAccountAndType($account_token, $document_type): \OpenAPI\Client\Model\AccountDocumentResponse
```

Retrieve document

Retrieve a specific type of document on a credit account.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: mqAppAndAccessToken
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\AccountDocumentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account_token = 'account_token_example'; // string | Unique identifier of the credit account for which to retrieve a specific type of document.  Send a `GET` request to `/credit/accounts` to retrieve existing credit account tokens.
$document_type = new \OpenAPI\Client\Model\\OpenAPI\Client\Model\AccountAndDocumentAssetType(); // \OpenAPI\Client\Model\AccountAndDocumentAssetType

try {
    $result = $apiInstance->getDocumentByAccountAndType($account_token, $document_type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountDocumentsApi->getDocumentByAccountAndType: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **account_token** | **string**| Unique identifier of the credit account for which to retrieve a specific type of document.  Send a &#x60;GET&#x60; request to &#x60;/credit/accounts&#x60; to retrieve existing credit account tokens. |
 **document_type** | [**\OpenAPI\Client\Model\AccountAndDocumentAssetType**](../Model/.md)|  |

### Return type

[**\OpenAPI\Client\Model\AccountDocumentResponse**](../Model/AccountDocumentResponse.md)

### Authorization

[mqAppAndAccessToken](../../README.md#mqAppAndAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getDocumentHistoryByAccountAndType()`

```php
getDocumentHistoryByAccountAndType($account_token, $document_type, $count, $start_index, $sort_by): \OpenAPI\Client\Model\AccountDocumentsPage
```

Retrieve document history

Retrieve the history of a specific type of document on a credit account.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: mqAppAndAccessToken
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\AccountDocumentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account_token = 'account_token_example'; // string | Unique identifier of the credit account for which to get document history.  Send a `GET` request to `/credit/accounts` to retrieve existing credit account tokens.
$document_type = new \OpenAPI\Client\Model\\OpenAPI\Client\Model\AccountAndDocumentAssetType(); // \OpenAPI\Client\Model\AccountAndDocumentAssetType
$count = 5; // int | Number of account document resources to retrieve.
$start_index = 0; // int | Sort order index of the first resource in the returned array.
$sort_by = '-effectiveDate'; // string | Field on which to sort. Prefix the field name with a hyphen (`-`) to sort in descending order. Omit the hyphen to sort in ascending order.  *NOTE:* You must sort using system field names such as `effectiveDate`, and not by the field names appearing in response bodies such as `effective_date`.

try {
    $result = $apiInstance->getDocumentHistoryByAccountAndType($account_token, $document_type, $count, $start_index, $sort_by);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountDocumentsApi->getDocumentHistoryByAccountAndType: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **account_token** | **string**| Unique identifier of the credit account for which to get document history.  Send a &#x60;GET&#x60; request to &#x60;/credit/accounts&#x60; to retrieve existing credit account tokens. |
 **document_type** | [**\OpenAPI\Client\Model\AccountAndDocumentAssetType**](../Model/.md)|  |
 **count** | **int**| Number of account document resources to retrieve. | [optional] [default to 5]
 **start_index** | **int**| Sort order index of the first resource in the returned array. | [optional] [default to 0]
 **sort_by** | **string**| Field on which to sort. Prefix the field name with a hyphen (&#x60;-&#x60;) to sort in descending order. Omit the hyphen to sort in ascending order.  *NOTE:* You must sort using system field names such as &#x60;effectiveDate&#x60;, and not by the field names appearing in response bodies such as &#x60;effective_date&#x60;. | [optional] [default to &#39;-effectiveDate&#39;]

### Return type

[**\OpenAPI\Client\Model\AccountDocumentsPage**](../Model/AccountDocumentsPage.md)

### Authorization

[mqAppAndAccessToken](../../README.md#mqAppAndAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
