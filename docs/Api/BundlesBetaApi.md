# OpenAPI\Client\BundlesBetaApi

All URIs are relative to /v3.

Method | HTTP request | Description
------------- | ------------- | -------------
[**cloneBundle()**](BundlesBetaApi.md#cloneBundle) | **POST** /bundles/{token}/clone | Clone bundle
[**createBundle()**](BundlesBetaApi.md#createBundle) | **POST** /bundles | Create bundle
[**listBundles()**](BundlesBetaApi.md#listBundles) | **GET** /bundles | List bundles
[**listRelatedBundles()**](BundlesBetaApi.md#listRelatedBundles) | **GET** /bundles/{token}/lineage | List related bundles
[**promoteBundle()**](BundlesBetaApi.md#promoteBundle) | **PUT** /bundles/{token}/promote | Promote bundle
[**retrieveBundle()**](BundlesBetaApi.md#retrieveBundle) | **GET** /bundles/{token} | Retrieve bundle
[**transitionBundle()**](BundlesBetaApi.md#transitionBundle) | **POST** /bundles/{token}/transitions | Transition a bundle
[**updateBundle()**](BundlesBetaApi.md#updateBundle) | **PUT** /bundles/{token} | Update bundle


## `cloneBundle()`

```php
cloneBundle($token): \OpenAPI\Client\Model\BundleResponse
```

Clone bundle

Create a new bundle based on an existing bundle.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: mqAppAndAccessToken
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\BundlesBetaApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$token = 'token_example'; // string | Unique identifier of the bundle to clone.  Send a `GET` request to `/bundles` to retrieve existing bundle tokens.

try {
    $result = $apiInstance->cloneBundle($token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BundlesBetaApi->cloneBundle: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **token** | **string**| Unique identifier of the bundle to clone.  Send a &#x60;GET&#x60; request to &#x60;/bundles&#x60; to retrieve existing bundle tokens. |

### Return type

[**\OpenAPI\Client\Model\BundleResponse**](../Model/BundleResponse.md)

### Authorization

[mqAppAndAccessToken](../../README.md#mqAppAndAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createBundle()`

```php
createBundle($bundle_create_req): \OpenAPI\Client\Model\BundleResponse
```

Create bundle

Create a bundle.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: mqAppAndAccessToken
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\BundlesBetaApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$bundle_create_req = {"apr_policy_token":"my_apr_policy_token_1234","credit_product_policy_token":"my_credit_product_policy_token_1234","description":"A golden","document_policy_token":"my_document_policy_token_1234","fee_policy_token":"my_fee_policy_token_1234","name":"Gold Credit Bundle","offer_policy_token":"my_offer_policy_token_1234","reward_policy_token":"my_reward_policy_token_1234","status":"DRAFT","token":"my_bundle_token_1234"}; // \OpenAPI\Client\Model\BundleCreateReq

try {
    $result = $apiInstance->createBundle($bundle_create_req);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BundlesBetaApi->createBundle: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **bundle_create_req** | [**\OpenAPI\Client\Model\BundleCreateReq**](../Model/BundleCreateReq.md)|  |

### Return type

[**\OpenAPI\Client\Model\BundleResponse**](../Model/BundleResponse.md)

### Authorization

[mqAppAndAccessToken](../../README.md#mqAppAndAccessToken)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listBundles()`

```php
listBundles($count, $start_index, $sort_by, $status): \OpenAPI\Client\Model\BundleResponsePage
```

List bundles

Retrieve an array of bundles.  This endpoint supports <</core-api/sorting-and-pagination, sorting and pagination>>.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: mqAppAndAccessToken
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\BundlesBetaApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$count = 5; // int | Number of bundles resources to retrieve.
$start_index = 0; // int | Sort order index of the first resource in the returned array.
$sort_by = '-lastModifiedTime'; // string | Field on which to sort. Prefix the field name with a hyphen (`-`) to sort in descending order. Omit the hyphen to sort in ascending order.  *NOTE:* You must sort using system field names such as `lastModifiedTime`, and not by the field names appearing in response bodies such as `last_modified_time`.
$status = array(new \OpenAPI\Client\Model\\OpenAPI\Client\Model\BundleResourceStatus()); // \OpenAPI\Client\Model\BundleResourceStatus[] | An array of statuses by which to filter bundles.

try {
    $result = $apiInstance->listBundles($count, $start_index, $sort_by, $status);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BundlesBetaApi->listBundles: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **count** | **int**| Number of bundles resources to retrieve. | [optional] [default to 5]
 **start_index** | **int**| Sort order index of the first resource in the returned array. | [optional] [default to 0]
 **sort_by** | **string**| Field on which to sort. Prefix the field name with a hyphen (&#x60;-&#x60;) to sort in descending order. Omit the hyphen to sort in ascending order.  *NOTE:* You must sort using system field names such as &#x60;lastModifiedTime&#x60;, and not by the field names appearing in response bodies such as &#x60;last_modified_time&#x60;. | [optional] [default to &#39;-lastModifiedTime&#39;]
 **status** | [**\OpenAPI\Client\Model\BundleResourceStatus[]**](../Model/\OpenAPI\Client\Model\BundleResourceStatus.md)| An array of statuses by which to filter bundles. | [optional]

### Return type

[**\OpenAPI\Client\Model\BundleResponsePage**](../Model/BundleResponsePage.md)

### Authorization

[mqAppAndAccessToken](../../README.md#mqAppAndAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listRelatedBundles()`

```php
listRelatedBundles($token, $count, $start_index, $sort_by, $status): \OpenAPI\Client\Model\BundleResponsePage
```

List related bundles

Retrieve an array of related product bundles.  This endpoint supports <</core-api/sorting-and-pagination, sorting and pagination>>.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: mqAppAndAccessToken
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\BundlesBetaApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$token = 'token_example'; // string | Unique identifier of the parent product bundle.  Send a `GET` request to `/bundles` to retrieve existing product bundles tokens.
$count = 5; // int | Number of related bundle product resources to retrieve.
$start_index = 0; // int | Sort order index of the first resource in the returned array.
$sort_by = '-lastModifiedTime'; // string | Field on which to sort. Prefix the field name with a hyphen (`-`) to sort in descending order. Omit the hyphen to sort in ascending order.  *NOTE:* You must sort using system field names such as `lastModifiedTime`, and not by the field names appearing in response bodies such as `last_modified_time`.
$status = array(new \OpenAPI\Client\Model\\OpenAPI\Client\Model\BundleResourceStatus()); // \OpenAPI\Client\Model\BundleResourceStatus[] | Array of statuses by which to filter bundles.

try {
    $result = $apiInstance->listRelatedBundles($token, $count, $start_index, $sort_by, $status);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BundlesBetaApi->listRelatedBundles: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **token** | **string**| Unique identifier of the parent product bundle.  Send a &#x60;GET&#x60; request to &#x60;/bundles&#x60; to retrieve existing product bundles tokens. |
 **count** | **int**| Number of related bundle product resources to retrieve. | [optional] [default to 5]
 **start_index** | **int**| Sort order index of the first resource in the returned array. | [optional] [default to 0]
 **sort_by** | **string**| Field on which to sort. Prefix the field name with a hyphen (&#x60;-&#x60;) to sort in descending order. Omit the hyphen to sort in ascending order.  *NOTE:* You must sort using system field names such as &#x60;lastModifiedTime&#x60;, and not by the field names appearing in response bodies such as &#x60;last_modified_time&#x60;. | [optional] [default to &#39;-lastModifiedTime&#39;]
 **status** | [**\OpenAPI\Client\Model\BundleResourceStatus[]**](../Model/\OpenAPI\Client\Model\BundleResourceStatus.md)| Array of statuses by which to filter bundles. | [optional]

### Return type

[**\OpenAPI\Client\Model\BundleResponsePage**](../Model/BundleResponsePage.md)

### Authorization

[mqAppAndAccessToken](../../README.md#mqAppAndAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `promoteBundle()`

```php
promoteBundle($token): \OpenAPI\Client\Model\BundleResponse
```

Promote bundle

Promote a specific bundle, which replaces the current active bundle and activates the promoted bundle.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: mqAppAndAccessToken
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\BundlesBetaApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$token = 'token_example'; // string | Unique identifier of the bundle to promote.  Send a `GET` request to `/bundles` to retrieve existing bundle tokens.

try {
    $result = $apiInstance->promoteBundle($token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BundlesBetaApi->promoteBundle: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **token** | **string**| Unique identifier of the bundle to promote.  Send a &#x60;GET&#x60; request to &#x60;/bundles&#x60; to retrieve existing bundle tokens. |

### Return type

[**\OpenAPI\Client\Model\BundleResponse**](../Model/BundleResponse.md)

### Authorization

[mqAppAndAccessToken](../../README.md#mqAppAndAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `retrieveBundle()`

```php
retrieveBundle($token, $expand_objects): \OpenAPI\Client\Model\BundleResponse
```

Retrieve bundle

Retrieve a specific bundle.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: mqAppAndAccessToken
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\BundlesBetaApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$token = 'token_example'; // string | Unique identifier of the bundle to retrieve.  Send a `GET` request to `/credit/bundles` to retrieve existing  tokens.
$expand_objects = array(new \OpenAPI\Client\Model\\OpenAPI\Client\Model\PolicyType()); // \OpenAPI\Client\Model\PolicyType[] | Embeds the associated object of the specified type into the response. For more, see <</core-api/object-expansion, object expansion>>.

try {
    $result = $apiInstance->retrieveBundle($token, $expand_objects);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BundlesBetaApi->retrieveBundle: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **token** | **string**| Unique identifier of the bundle to retrieve.  Send a &#x60;GET&#x60; request to &#x60;/credit/bundles&#x60; to retrieve existing  tokens. |
 **expand_objects** | [**\OpenAPI\Client\Model\PolicyType[]**](../Model/\OpenAPI\Client\Model\PolicyType.md)| Embeds the associated object of the specified type into the response. For more, see &lt;&lt;/core-api/object-expansion, object expansion&gt;&gt;. | [optional]

### Return type

[**\OpenAPI\Client\Model\BundleResponse**](../Model/BundleResponse.md)

### Authorization

[mqAppAndAccessToken](../../README.md#mqAppAndAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `transitionBundle()`

```php
transitionBundle($token, $bundle_transition_req): \OpenAPI\Client\Model\BundleTransitionResponse
```

Transition a bundle

Transition the status of a specific bundle.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: mqAppAndAccessToken
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\BundlesBetaApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$token = 'token_example'; // string | Token of the bundle whose status you want to transition.  Send a `GET` request to `/credit/bundles` to retrieve existing  tokens.
$bundle_transition_req = {"status":"PENDING_APPROVAL"}; // \OpenAPI\Client\Model\BundleTransitionReq

try {
    $result = $apiInstance->transitionBundle($token, $bundle_transition_req);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BundlesBetaApi->transitionBundle: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **token** | **string**| Token of the bundle whose status you want to transition.  Send a &#x60;GET&#x60; request to &#x60;/credit/bundles&#x60; to retrieve existing  tokens. |
 **bundle_transition_req** | [**\OpenAPI\Client\Model\BundleTransitionReq**](../Model/BundleTransitionReq.md)|  |

### Return type

[**\OpenAPI\Client\Model\BundleTransitionResponse**](../Model/BundleTransitionResponse.md)

### Authorization

[mqAppAndAccessToken](../../README.md#mqAppAndAccessToken)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateBundle()`

```php
updateBundle($token, $bundle_update_req): \OpenAPI\Client\Model\BundleResponse
```

Update bundle

Update a specific bundle that is not `ACTIVE` or `ARCHIVED`. Bundles are created in a `DRAFT` state, and are still modifiable at this point. Using the transitions endpoint a bundle can be transitioned from `DRAFT`, to `ACTIVE`. Once a bundle is active, it is immutable, and cannot be modified.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: mqAppAndAccessToken
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\BundlesBetaApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$token = 'token_example'; // string | Token of the bundle to update.  Send a `GET` request to `/credit/bundles` to retrieve existing  tokens.
$bundle_update_req = {"apr_policy_token":"my_apr_policy_token_1234","credit_product_policy_token":"my_credit_product_policy_token_1234","description":"Description of the renamed bundle","document_policy_token":"my_document_policy_token_1234","fee_policy_token":"my_fee_policy_token_1234","name":"Renamed Bundle","offer_policy_token":"my_offer_policy_token_1234","reward_policy_token":"my_reward_policy_token_1234","token":"my_bundle_token_1234"}; // \OpenAPI\Client\Model\BundleUpdateReq

try {
    $result = $apiInstance->updateBundle($token, $bundle_update_req);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BundlesBetaApi->updateBundle: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **token** | **string**| Token of the bundle to update.  Send a &#x60;GET&#x60; request to &#x60;/credit/bundles&#x60; to retrieve existing  tokens. |
 **bundle_update_req** | [**\OpenAPI\Client\Model\BundleUpdateReq**](../Model/BundleUpdateReq.md)|  |

### Return type

[**\OpenAPI\Client\Model\BundleResponse**](../Model/BundleResponse.md)

### Authorization

[mqAppAndAccessToken](../../README.md#mqAppAndAccessToken)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
