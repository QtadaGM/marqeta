# OpenAPI\Client\PoliciesBetaApi

All URIs are relative to /v3.

Method | HTTP request | Description
------------- | ------------- | -------------
[**cloneAprPolicy()**](PoliciesBetaApi.md#cloneAprPolicy) | **POST** /policies/aprs/{token}/clone | Clone APR policy
[**cloneDocumentPolicy()**](PoliciesBetaApi.md#cloneDocumentPolicy) | **POST** /policies/documents/{token}/clone | Clone document policy
[**cloneFeePolicy()**](PoliciesBetaApi.md#cloneFeePolicy) | **POST** /policies/fees/{token}/clone | Clone fee policy
[**cloneProductPolicy()**](PoliciesBetaApi.md#cloneProductPolicy) | **POST** /policies/products/{token}/clone | Clone credit product policy
[**cloneRewardPolicy()**](PoliciesBetaApi.md#cloneRewardPolicy) | **POST** /policies/rewards/{token}/clone | Clone reward policy
[**createAprPolicy()**](PoliciesBetaApi.md#createAprPolicy) | **POST** /policies/aprs | Create APR policy
[**createDocumentPolicy()**](PoliciesBetaApi.md#createDocumentPolicy) | **POST** /policies/documents | Create document policy
[**createFeePolicy()**](PoliciesBetaApi.md#createFeePolicy) | **POST** /policies/fees | Create fee policy
[**createProductPolicy()**](PoliciesBetaApi.md#createProductPolicy) | **POST** /policies/products | Create credit product policy
[**createRewardPolicy()**](PoliciesBetaApi.md#createRewardPolicy) | **POST** /policies/rewards | Create reward policy
[**getAprPolicies()**](PoliciesBetaApi.md#getAprPolicies) | **GET** /policies/aprs | List APR policies
[**getAprPolicyByToken()**](PoliciesBetaApi.md#getAprPolicyByToken) | **GET** /policies/aprs/{token} | Retrieve APR policy
[**getAprPolicySchedulesWithToken()**](PoliciesBetaApi.md#getAprPolicySchedulesWithToken) | **GET** /policies/aprs/{token}/schedule | List APR schedules
[**getFeePolicies()**](PoliciesBetaApi.md#getFeePolicies) | **GET** /policies/fees | List fee policies
[**getFeePolicyByToken()**](PoliciesBetaApi.md#getFeePolicyByToken) | **GET** /policies/fees/{token} | Retrieve fee policy
[**listDocumentPolicies()**](PoliciesBetaApi.md#listDocumentPolicies) | **GET** /policies/documents | List document policies
[**listProductPolicies()**](PoliciesBetaApi.md#listProductPolicies) | **GET** /policies/products | List credit product policies
[**listRewardPolicies()**](PoliciesBetaApi.md#listRewardPolicies) | **GET** /policies/rewards | List reward policies
[**retrieveDocumentPolicy()**](PoliciesBetaApi.md#retrieveDocumentPolicy) | **GET** /policies/documents/{token} | Retrieve document policy
[**retrieveProductPolicy()**](PoliciesBetaApi.md#retrieveProductPolicy) | **GET** /policies/products/{token} | Retrieve credit product policy
[**retrieveRewardPolicy()**](PoliciesBetaApi.md#retrieveRewardPolicy) | **GET** /policies/rewards/{token} | Retrieve reward policy
[**updateAprPolicyWithToken()**](PoliciesBetaApi.md#updateAprPolicyWithToken) | **PUT** /policies/aprs/{token} | Update APR policy
[**updateDocumentPolicy()**](PoliciesBetaApi.md#updateDocumentPolicy) | **PUT** /policies/documents/{token} | Update document policy
[**updateFeePolicyWithToken()**](PoliciesBetaApi.md#updateFeePolicyWithToken) | **PUT** /policies/fees/{token} | Update fee policy
[**updateProductPolicy()**](PoliciesBetaApi.md#updateProductPolicy) | **PUT** /policies/products/{token} | Update credit product policy
[**updateRewardPolicy()**](PoliciesBetaApi.md#updateRewardPolicy) | **PUT** /policies/rewards/{token} | Update reward policy


## `cloneAprPolicy()`

```php
cloneAprPolicy($token): \OpenAPI\Client\Model\PolicyAprResponse
```

Clone APR policy

Create a new annual percentage rate (APR) policy based on an existing APR policy.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: mqAppAndAccessToken
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\PoliciesBetaApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$token = 'token_example'; // string | Unique identifier of the APR policy to clone.  Send a `GET` request to `/policies/aprs` to retrieve existing APR policy tokens.

try {
    $result = $apiInstance->cloneAprPolicy($token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PoliciesBetaApi->cloneAprPolicy: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **token** | **string**| Unique identifier of the APR policy to clone.  Send a &#x60;GET&#x60; request to &#x60;/policies/aprs&#x60; to retrieve existing APR policy tokens. |

### Return type

[**\OpenAPI\Client\Model\PolicyAprResponse**](../Model/PolicyAprResponse.md)

### Authorization

[mqAppAndAccessToken](../../README.md#mqAppAndAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `cloneDocumentPolicy()`

```php
cloneDocumentPolicy($token): \OpenAPI\Client\Model\PolicyDocumentResponse
```

Clone document policy

Create a new document policy based on an existing document policy. A document policy consists of all the pre- and post-application disclosures and credit program documents known as assets and templates. Assets contain finalized values after a bundle is created; templates do not contain finalized values.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: mqAppAndAccessToken
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\PoliciesBetaApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$token = 'token_example'; // string | Unique identifier of the document policy to clone.  Send a `GET` request to `/policies/documents` to retrieve existing document policy tokens.

try {
    $result = $apiInstance->cloneDocumentPolicy($token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PoliciesBetaApi->cloneDocumentPolicy: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **token** | **string**| Unique identifier of the document policy to clone.  Send a &#x60;GET&#x60; request to &#x60;/policies/documents&#x60; to retrieve existing document policy tokens. |

### Return type

[**\OpenAPI\Client\Model\PolicyDocumentResponse**](../Model/PolicyDocumentResponse.md)

### Authorization

[mqAppAndAccessToken](../../README.md#mqAppAndAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `cloneFeePolicy()`

```php
cloneFeePolicy($token): \OpenAPI\Client\Model\PolicyFeeResponse
```

Clone fee policy

Create a new fee policy based on an existing fee policy.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: mqAppAndAccessToken
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\PoliciesBetaApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$token = 'token_example'; // string | Unique identifier of the fee policy to clone.  Send a `GET` request to `/policies/fee` to retrieve existing fee policy tokens.

try {
    $result = $apiInstance->cloneFeePolicy($token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PoliciesBetaApi->cloneFeePolicy: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **token** | **string**| Unique identifier of the fee policy to clone.  Send a &#x60;GET&#x60; request to &#x60;/policies/fee&#x60; to retrieve existing fee policy tokens. |

### Return type

[**\OpenAPI\Client\Model\PolicyFeeResponse**](../Model/PolicyFeeResponse.md)

### Authorization

[mqAppAndAccessToken](../../README.md#mqAppAndAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `cloneProductPolicy()`

```php
cloneProductPolicy($token): \OpenAPI\Client\Model\PolicyProductResponse
```

Clone credit product policy

Create a new credit product policy based on an existing credit product policy.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: mqAppAndAccessToken
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\PoliciesBetaApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$token = 'token_example'; // string | Unique identifier of the credit product policy to clone.  Send a `GET` request to `/policies/products` to retrieve existing credit product policy tokens.

try {
    $result = $apiInstance->cloneProductPolicy($token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PoliciesBetaApi->cloneProductPolicy: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **token** | **string**| Unique identifier of the credit product policy to clone.  Send a &#x60;GET&#x60; request to &#x60;/policies/products&#x60; to retrieve existing credit product policy tokens. |

### Return type

[**\OpenAPI\Client\Model\PolicyProductResponse**](../Model/PolicyProductResponse.md)

### Authorization

[mqAppAndAccessToken](../../README.md#mqAppAndAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `cloneRewardPolicy()`

```php
cloneRewardPolicy($token): \OpenAPI\Client\Model\PolicyRewardResponse
```

Clone reward policy

Create a new reward policy based on existing reward policy.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: mqAppAndAccessToken
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\PoliciesBetaApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$token = 'token_example'; // string | Unique identifier of the reward policy to clone.  Send a `GET` request to `/policies/rewards` to retrieve existing reward policy tokens.

try {
    $result = $apiInstance->cloneRewardPolicy($token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PoliciesBetaApi->cloneRewardPolicy: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **token** | **string**| Unique identifier of the reward policy to clone.  Send a &#x60;GET&#x60; request to &#x60;/policies/rewards&#x60; to retrieve existing reward policy tokens. |

### Return type

[**\OpenAPI\Client\Model\PolicyRewardResponse**](../Model/PolicyRewardResponse.md)

### Authorization

[mqAppAndAccessToken](../../README.md#mqAppAndAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createAprPolicy()`

```php
createAprPolicy($policy_apr_create_req): \OpenAPI\Client\Model\PolicyAprResponse
```

Create APR policy

Create a new annual percentage rate (APR) policy.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: mqAppAndAccessToken
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\PoliciesBetaApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$policy_apr_create_req = {"description":"A golden APR policy","name":"Gold APR Policy","purchases":{"external_token":"my_external_purchase_token1234","name":"A purchase at a merchant","tiers":[{"apr":0,"margin_rate":1},{"apr":0,"margin_rate":5}]},"token":"my_apr_policy_token_1234"}; // \OpenAPI\Client\Model\PolicyAprCreateReq

try {
    $result = $apiInstance->createAprPolicy($policy_apr_create_req);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PoliciesBetaApi->createAprPolicy: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **policy_apr_create_req** | [**\OpenAPI\Client\Model\PolicyAprCreateReq**](../Model/PolicyAprCreateReq.md)|  |

### Return type

[**\OpenAPI\Client\Model\PolicyAprResponse**](../Model/PolicyAprResponse.md)

### Authorization

[mqAppAndAccessToken](../../README.md#mqAppAndAccessToken)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createDocumentPolicy()`

```php
createDocumentPolicy($policy_document_create_req): \OpenAPI\Client\Model\PolicyDocumentResponse
```

Create document policy

Create a new document policy, which consists of all the pre- and post-application disclosures and credit program documents known as assets and templates. Assets contain finalized values after a bundle is created; templates do not contain finalized values.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: mqAppAndAccessToken
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\PoliciesBetaApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$policy_document_create_req = {"account_statement":{"template_token":"an_account_statement_template_token1234"},"benefits_disclosure_premium":{"asset_token":"a_benefits_disclosure_premium_asset_token1234"},"benefits_disclosure_traditional":{"asset_token":"a_benefits_disclosure_traditional_asset_token1234"},"card_member_agreement":{"asset_token":"a_card_member_agreement_asset_token1234"},"e_disclosure":{"asset_token":"a_e_disclosure_asset_token1234"},"name":"My Document Policy","noaa_multiple_reason_with_dodd_frank":{"template_token":"an_noaa_multiple_reason_with_dodd_frank_template_token1234"},"noaa_single_reason":{"template_token":"an_noaa_single_reason_template_token1234"},"noaa_single_reason_with_dodd_frank":{"template_token":"an_noaa_single_reason_with_dodd_frank_template_token1234"},"pre_qualification_disclosure":{"asset_token":"a_pre_qualification_disclosure_asset_token1234","template_token":"a_pre_qualification_disclosure_template_token1234"},"privacy_policy":{"asset_token":"a_privacy_policy_asset_token1234"},"rewards_disclosure":{"asset_token":"a_rewards_disclosure_asset_token1234","template_token":"a_rewards_disclosure_template_token1234"},"summary_of_credit_terms":{"asset_token":"a_summary_of_credit_terms_asset_token1234","template_token":"a_summary_of_credit_terms_template_token1234"},"terms_schedule":{"template_token":"a_terms_schedule_template_token1234"},"token":"my_document_policy_token_1234"}; // \OpenAPI\Client\Model\PolicyDocumentCreateReq

try {
    $result = $apiInstance->createDocumentPolicy($policy_document_create_req);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PoliciesBetaApi->createDocumentPolicy: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **policy_document_create_req** | [**\OpenAPI\Client\Model\PolicyDocumentCreateReq**](../Model/PolicyDocumentCreateReq.md)|  |

### Return type

[**\OpenAPI\Client\Model\PolicyDocumentResponse**](../Model/PolicyDocumentResponse.md)

### Authorization

[mqAppAndAccessToken](../../README.md#mqAppAndAccessToken)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createFeePolicy()`

```php
createFeePolicy($policy_fee_create_req): \OpenAPI\Client\Model\PolicyFeeResponse
```

Create fee policy

Create a new fee policy.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: mqAppAndAccessToken
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\PoliciesBetaApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$policy_fee_create_req = {"account":{"foreign_transaction_fee":{"default_method":"PERCENTAGE","default_value":12.5},"late_payment":{"default_method":"FLAT","default_value":10},"returned_payment":{"default_method":"FLAT","default_value":10}},"description":"A golden fee policy","name":"Gold Fee Policy","token":"my_fee_policy_token_1234"}; // \OpenAPI\Client\Model\PolicyFeeCreateReq

try {
    $result = $apiInstance->createFeePolicy($policy_fee_create_req);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PoliciesBetaApi->createFeePolicy: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **policy_fee_create_req** | [**\OpenAPI\Client\Model\PolicyFeeCreateReq**](../Model/PolicyFeeCreateReq.md)|  |

### Return type

[**\OpenAPI\Client\Model\PolicyFeeResponse**](../Model/PolicyFeeResponse.md)

### Authorization

[mqAppAndAccessToken](../../README.md#mqAppAndAccessToken)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createProductPolicy()`

```php
createProductPolicy($policy_product_create_req): \OpenAPI\Client\Model\PolicyProductResponse
```

Create credit product policy

Create a new credit product policy.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: mqAppAndAccessToken
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\PoliciesBetaApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$policy_product_create_req = {"card_products":[{"level":"TRADITIONAL","network":"VISA","token":"my_card_product_token1234"}],"classification":"CONSUMER","credit_line":{"max":3500,"min":50},"currency_code":"USD","description":"A golden credit product policy","interest_calculation":{"application_of_credits":{"cycle_type":"END_REVOLVING","day":15},"day_count":"ACTUAL","exclude_tran_types":["ANNUAL_FEE","LATE_PAYMENT_FEE","CASH_BACK_STATEMENT_CREDIT","FOREIGN_TRANSACTION_FEE"],"grace_days_application":"NEXT_CYCLE_DATE","interest_application":["PRINCIPAL","FEES"],"interest_on_grace_reactivation":"ACCRUE_PAYMENT_DATE","method":"AVG_DAILY_BALANCE_WITH_NEW_TRANSACTIONS","minimum_interest":1},"name":"Gold Credit Product Policy","payments":{"allocation_order":["INTEREST","FEES","PRINCIPAL"],"billing_cycle_day":1,"min_payment_calculation":{"include_overlimit_amount":true,"include_past_due_amount":false,"min_payment_flat_amount":20,"min_payment_percentage":{"include_fees_charged":["LATE_PAYMENT_FEE","FOREIGN_TRANSACTION_FEE"],"include_interest_charged":false,"percentage_of_balance":1}}},"product_sub_type":"CREDIT_CARD","product_type":"REVOLVING","token":"my_credit_product_policy_token_1234","usage":["PURCHASE"]}; // \OpenAPI\Client\Model\PolicyProductCreateReq

try {
    $result = $apiInstance->createProductPolicy($policy_product_create_req);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PoliciesBetaApi->createProductPolicy: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **policy_product_create_req** | [**\OpenAPI\Client\Model\PolicyProductCreateReq**](../Model/PolicyProductCreateReq.md)|  |

### Return type

[**\OpenAPI\Client\Model\PolicyProductResponse**](../Model/PolicyProductResponse.md)

### Authorization

[mqAppAndAccessToken](../../README.md#mqAppAndAccessToken)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createRewardPolicy()`

```php
createRewardPolicy($policy_reward_req): \OpenAPI\Client\Model\PolicyRewardResponse
```

Create reward policy

Create a new reward policy.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: mqAppAndAccessToken
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\PoliciesBetaApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$policy_reward_req = {"description":"A golden reward policy","name":"Gold Reward Policy","rules":[{"filters":{"amount":{"greater_than":1,"less_than":10},"mcc_dynamic":{"includes":["HIGHEST_SPEND"]}},"outcome":{"max_amount":100,"percentage":20},"type":"CASHBACK"}],"token":"my_reward_policy_token_1234"}; // \OpenAPI\Client\Model\PolicyRewardReq

try {
    $result = $apiInstance->createRewardPolicy($policy_reward_req);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PoliciesBetaApi->createRewardPolicy: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **policy_reward_req** | [**\OpenAPI\Client\Model\PolicyRewardReq**](../Model/PolicyRewardReq.md)|  |

### Return type

[**\OpenAPI\Client\Model\PolicyRewardResponse**](../Model/PolicyRewardResponse.md)

### Authorization

[mqAppAndAccessToken](../../README.md#mqAppAndAccessToken)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getAprPolicies()`

```php
getAprPolicies($count, $start_index, $sort_by): \OpenAPI\Client\Model\PolicyAprsPage
```

List APR policies

Retrieve an array of existing APR policies.  This endpoint supports <</core-api/sorting-and-pagination, sorting and pagination>>.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: mqAppAndAccessToken
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\PoliciesBetaApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$count = 5; // int | Number of APR policy resources to retrieve.
$start_index = 0; // int | Sort order index of the first resource in the returned array.
$sort_by = '-effectiveDate'; // string | Field on which to sort. Prefix the field name with a hyphen (`-`) to sort in descending order. Omit the hyphen to sort in ascending order.  *NOTE:* You must sort using system field names such as `effectiveDate`, and not by the field names appearing in response bodies such as `effective_date`.

try {
    $result = $apiInstance->getAprPolicies($count, $start_index, $sort_by);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PoliciesBetaApi->getAprPolicies: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **count** | **int**| Number of APR policy resources to retrieve. | [optional] [default to 5]
 **start_index** | **int**| Sort order index of the first resource in the returned array. | [optional] [default to 0]
 **sort_by** | **string**| Field on which to sort. Prefix the field name with a hyphen (&#x60;-&#x60;) to sort in descending order. Omit the hyphen to sort in ascending order.  *NOTE:* You must sort using system field names such as &#x60;effectiveDate&#x60;, and not by the field names appearing in response bodies such as &#x60;effective_date&#x60;. | [optional] [default to &#39;-effectiveDate&#39;]

### Return type

[**\OpenAPI\Client\Model\PolicyAprsPage**](../Model/PolicyAprsPage.md)

### Authorization

[mqAppAndAccessToken](../../README.md#mqAppAndAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getAprPolicyByToken()`

```php
getAprPolicyByToken($token): \OpenAPI\Client\Model\PolicyAprResponse
```

Retrieve APR policy

Retrieve a specific annual percentage rate (APR) policy.  This endpoint supports <</core-api/sorting-and-pagination, sorting and pagination>>.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: mqAppAndAccessToken
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\PoliciesBetaApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$token = 'token_example'; // string | Unique identifier of the APR policy to retrieve.  Send a `GET` request to `/policies/aprs` to retrieve existing APR policy tokens.

try {
    $result = $apiInstance->getAprPolicyByToken($token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PoliciesBetaApi->getAprPolicyByToken: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **token** | **string**| Unique identifier of the APR policy to retrieve.  Send a &#x60;GET&#x60; request to &#x60;/policies/aprs&#x60; to retrieve existing APR policy tokens. |

### Return type

[**\OpenAPI\Client\Model\PolicyAprResponse**](../Model/PolicyAprResponse.md)

### Authorization

[mqAppAndAccessToken](../../README.md#mqAppAndAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getAprPolicySchedulesWithToken()`

```php
getAprPolicySchedulesWithToken($token, $count, $start_index, $sort_by): \OpenAPI\Client\Model\PolicyAprsPage
```

List APR schedules

Retrieve an array of the historic annual percentage rate (APR) schedules on a specific APR policy.  This endpoint supports <</core-api/sorting-and-pagination, sorting and pagination>>.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: mqAppAndAccessToken
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\PoliciesBetaApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$token = 'token_example'; // string | Unique identifier of the APR policy on which to retrieve APR schedules.  Send a `GET` request to `/policies/aprs` to retrieve existing product policy tokens.
$count = 5; // int | Number of APR schedule resources to retrieve.
$start_index = 0; // int | Sort order index of the first resource in the returned array.
$sort_by = '-lastModifiedTime'; // string | Field on which to sort. Prefix the field name with a hyphen (`-`) to sort in descending order. Omit the hyphen to sort in ascending order.  *NOTE:* You must sort using system field names such as `lastModifiedTime`, and not by the field names appearing in response bodies such as `last_modified_time`.

try {
    $result = $apiInstance->getAprPolicySchedulesWithToken($token, $count, $start_index, $sort_by);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PoliciesBetaApi->getAprPolicySchedulesWithToken: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **token** | **string**| Unique identifier of the APR policy on which to retrieve APR schedules.  Send a &#x60;GET&#x60; request to &#x60;/policies/aprs&#x60; to retrieve existing product policy tokens. |
 **count** | **int**| Number of APR schedule resources to retrieve. | [optional] [default to 5]
 **start_index** | **int**| Sort order index of the first resource in the returned array. | [optional] [default to 0]
 **sort_by** | **string**| Field on which to sort. Prefix the field name with a hyphen (&#x60;-&#x60;) to sort in descending order. Omit the hyphen to sort in ascending order.  *NOTE:* You must sort using system field names such as &#x60;lastModifiedTime&#x60;, and not by the field names appearing in response bodies such as &#x60;last_modified_time&#x60;. | [optional] [default to &#39;-lastModifiedTime&#39;]

### Return type

[**\OpenAPI\Client\Model\PolicyAprsPage**](../Model/PolicyAprsPage.md)

### Authorization

[mqAppAndAccessToken](../../README.md#mqAppAndAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getFeePolicies()`

```php
getFeePolicies($count, $start_index, $sort_by): \OpenAPI\Client\Model\PolicyFeesPage
```

List fee policies

Retrieve an array of existing fee policies.  This endpoint supports <</core-api/sorting-and-pagination, sorting and pagination>>.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: mqAppAndAccessToken
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\PoliciesBetaApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$count = 5; // int | Number of fee policy resources to retrieve.
$start_index = 0; // int | Sort order index of the first resource in the returned array.
$sort_by = '-lastModifiedTime'; // string | Field on which to sort. Prefix the field name with a hyphen (`-`) to sort in descending order. Omit the hyphen to sort in ascending order.  *NOTE:* You must sort using system field names such as `lastModifiedTime`, and not by the field names appearing in response bodies such as `last_modified_time`.

try {
    $result = $apiInstance->getFeePolicies($count, $start_index, $sort_by);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PoliciesBetaApi->getFeePolicies: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **count** | **int**| Number of fee policy resources to retrieve. | [optional] [default to 5]
 **start_index** | **int**| Sort order index of the first resource in the returned array. | [optional] [default to 0]
 **sort_by** | **string**| Field on which to sort. Prefix the field name with a hyphen (&#x60;-&#x60;) to sort in descending order. Omit the hyphen to sort in ascending order.  *NOTE:* You must sort using system field names such as &#x60;lastModifiedTime&#x60;, and not by the field names appearing in response bodies such as &#x60;last_modified_time&#x60;. | [optional] [default to &#39;-lastModifiedTime&#39;]

### Return type

[**\OpenAPI\Client\Model\PolicyFeesPage**](../Model/PolicyFeesPage.md)

### Authorization

[mqAppAndAccessToken](../../README.md#mqAppAndAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getFeePolicyByToken()`

```php
getFeePolicyByToken($token): \OpenAPI\Client\Model\PolicyFeeResponse
```

Retrieve fee policy

Retrieve a specific fee policy.  This endpoint supports <</core-api/sorting-and-pagination, sorting and pagination>>.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: mqAppAndAccessToken
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\PoliciesBetaApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$token = 'token_example'; // string | Unique identifier of the fee policy to retrieve.  Send a `GET` request to `/policies/fee` to retrieve existing fee policy tokens.

try {
    $result = $apiInstance->getFeePolicyByToken($token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PoliciesBetaApi->getFeePolicyByToken: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **token** | **string**| Unique identifier of the fee policy to retrieve.  Send a &#x60;GET&#x60; request to &#x60;/policies/fee&#x60; to retrieve existing fee policy tokens. |

### Return type

[**\OpenAPI\Client\Model\PolicyFeeResponse**](../Model/PolicyFeeResponse.md)

### Authorization

[mqAppAndAccessToken](../../README.md#mqAppAndAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listDocumentPolicies()`

```php
listDocumentPolicies($count, $start_index, $sort_by): \OpenAPI\Client\Model\PoliciesDocumentPage
```

List document policies

Retrieve an array of existing document policies. A document policy consists of all the pre- and post-application disclosures and credit program documents known as assets and templates. Assets contain finalized values after a bundle is created; templates do not contain finalized values.  This endpoint supports <</core-api/sorting-and-pagination, sorting and pagination>>.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: mqAppAndAccessToken
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\PoliciesBetaApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$count = 5; // int | Number of document policy resources to retrieve.
$start_index = 0; // int | Sort order index of the first resource in the returned array.
$sort_by = '-lastModifiedTime'; // string | Field on which to sort. Prefix the field name with a hyphen (`-`) to sort in descending order. Omit the hyphen to sort in ascending order.  *NOTE:* You must sort using system field names such as `lastModifiedTime`, and not by the field names appearing in response bodies such as `last_modified_time`.

try {
    $result = $apiInstance->listDocumentPolicies($count, $start_index, $sort_by);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PoliciesBetaApi->listDocumentPolicies: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **count** | **int**| Number of document policy resources to retrieve. | [optional] [default to 5]
 **start_index** | **int**| Sort order index of the first resource in the returned array. | [optional] [default to 0]
 **sort_by** | **string**| Field on which to sort. Prefix the field name with a hyphen (&#x60;-&#x60;) to sort in descending order. Omit the hyphen to sort in ascending order.  *NOTE:* You must sort using system field names such as &#x60;lastModifiedTime&#x60;, and not by the field names appearing in response bodies such as &#x60;last_modified_time&#x60;. | [optional] [default to &#39;-lastModifiedTime&#39;]

### Return type

[**\OpenAPI\Client\Model\PoliciesDocumentPage**](../Model/PoliciesDocumentPage.md)

### Authorization

[mqAppAndAccessToken](../../README.md#mqAppAndAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listProductPolicies()`

```php
listProductPolicies($count, $start_index, $sort_by): \OpenAPI\Client\Model\PoliciesProductPage
```

List credit product policies

Retrieve an array of existing credit product policies.  This endpoint supports <</core-api/sorting-and-pagination, sorting and pagination>>.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: mqAppAndAccessToken
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\PoliciesBetaApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$count = 5; // int | Number of product policy resources to retrieve.
$start_index = 0; // int | Sort order index of the first resource in the returned array.
$sort_by = '-lastModifiedTime'; // string | Field on which to sort. Prefix the field name with a hyphen (`-`) to sort in descending order. Omit the hyphen to sort in ascending order.  *NOTE:* You must sort using system field names such as `lastModifiedTime`, and not by the field names appearing in response bodies such as `last_modified_time`.

try {
    $result = $apiInstance->listProductPolicies($count, $start_index, $sort_by);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PoliciesBetaApi->listProductPolicies: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **count** | **int**| Number of product policy resources to retrieve. | [optional] [default to 5]
 **start_index** | **int**| Sort order index of the first resource in the returned array. | [optional] [default to 0]
 **sort_by** | **string**| Field on which to sort. Prefix the field name with a hyphen (&#x60;-&#x60;) to sort in descending order. Omit the hyphen to sort in ascending order.  *NOTE:* You must sort using system field names such as &#x60;lastModifiedTime&#x60;, and not by the field names appearing in response bodies such as &#x60;last_modified_time&#x60;. | [optional] [default to &#39;-lastModifiedTime&#39;]

### Return type

[**\OpenAPI\Client\Model\PoliciesProductPage**](../Model/PoliciesProductPage.md)

### Authorization

[mqAppAndAccessToken](../../README.md#mqAppAndAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listRewardPolicies()`

```php
listRewardPolicies($count, $start_index, $sort_by): \OpenAPI\Client\Model\PolicyRewardPage
```

List reward policies

Retrieve an array of reward policies.  This endpoint supports <</core-api/sorting-and-pagination, sorting and pagination>>.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: mqAppAndAccessToken
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\PoliciesBetaApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$count = 5; // int | Number of reward policy resources to retrieve.
$start_index = 0; // int | Sort order index of the first resource in the returned array.
$sort_by = '-lastModifiedTime'; // string | Field on which to sort. Prefix the field name with a hyphen (`-`) to sort in descending order. Omit the hyphen to sort in ascending order.  *NOTE:* You must sort using system field names such as `lastModifiedTime`, and not by the field names appearing in response bodies such as `last_modified_time`.

try {
    $result = $apiInstance->listRewardPolicies($count, $start_index, $sort_by);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PoliciesBetaApi->listRewardPolicies: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **count** | **int**| Number of reward policy resources to retrieve. | [optional] [default to 5]
 **start_index** | **int**| Sort order index of the first resource in the returned array. | [optional] [default to 0]
 **sort_by** | **string**| Field on which to sort. Prefix the field name with a hyphen (&#x60;-&#x60;) to sort in descending order. Omit the hyphen to sort in ascending order.  *NOTE:* You must sort using system field names such as &#x60;lastModifiedTime&#x60;, and not by the field names appearing in response bodies such as &#x60;last_modified_time&#x60;. | [optional] [default to &#39;-lastModifiedTime&#39;]

### Return type

[**\OpenAPI\Client\Model\PolicyRewardPage**](../Model/PolicyRewardPage.md)

### Authorization

[mqAppAndAccessToken](../../README.md#mqAppAndAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `retrieveDocumentPolicy()`

```php
retrieveDocumentPolicy($token): \OpenAPI\Client\Model\PolicyDocumentResponse
```

Retrieve document policy

Retrieve a specific document policy, which consists of all the pre- and post-application disclosures and credit program documents known as assets and templates. Assets contain finalized values after a bundle is created; templates do not contain finalized values.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: mqAppAndAccessToken
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\PoliciesBetaApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$token = 'token_example'; // string | Unique identifier of the document policy to retrieve.  Send a `GET` request to `/policies/documents` to retrieve existing document policy tokens.

try {
    $result = $apiInstance->retrieveDocumentPolicy($token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PoliciesBetaApi->retrieveDocumentPolicy: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **token** | **string**| Unique identifier of the document policy to retrieve.  Send a &#x60;GET&#x60; request to &#x60;/policies/documents&#x60; to retrieve existing document policy tokens. |

### Return type

[**\OpenAPI\Client\Model\PolicyDocumentResponse**](../Model/PolicyDocumentResponse.md)

### Authorization

[mqAppAndAccessToken](../../README.md#mqAppAndAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `retrieveProductPolicy()`

```php
retrieveProductPolicy($token): \OpenAPI\Client\Model\PolicyProductResponse
```

Retrieve credit product policy

Retrieve a specific credit product policy.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: mqAppAndAccessToken
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\PoliciesBetaApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$token = 'token_example'; // string | Unique identifier of the credit product policy to retrieve.  Send a `GET` request to `/policies/products` to retrieve existing credit product policy tokens.

try {
    $result = $apiInstance->retrieveProductPolicy($token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PoliciesBetaApi->retrieveProductPolicy: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **token** | **string**| Unique identifier of the credit product policy to retrieve.  Send a &#x60;GET&#x60; request to &#x60;/policies/products&#x60; to retrieve existing credit product policy tokens. |

### Return type

[**\OpenAPI\Client\Model\PolicyProductResponse**](../Model/PolicyProductResponse.md)

### Authorization

[mqAppAndAccessToken](../../README.md#mqAppAndAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `retrieveRewardPolicy()`

```php
retrieveRewardPolicy($token): \OpenAPI\Client\Model\PolicyRewardResponse
```

Retrieve reward policy

Retrieve a reward policy.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: mqAppAndAccessToken
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\PoliciesBetaApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$token = 'token_example'; // string | Unique identifier of the reward policy to retrieve.  Send a `GET` request to `/policies/rewards` to retrieve existing reward policy tokens.

try {
    $result = $apiInstance->retrieveRewardPolicy($token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PoliciesBetaApi->retrieveRewardPolicy: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **token** | **string**| Unique identifier of the reward policy to retrieve.  Send a &#x60;GET&#x60; request to &#x60;/policies/rewards&#x60; to retrieve existing reward policy tokens. |

### Return type

[**\OpenAPI\Client\Model\PolicyRewardResponse**](../Model/PolicyRewardResponse.md)

### Authorization

[mqAppAndAccessToken](../../README.md#mqAppAndAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateAprPolicyWithToken()`

```php
updateAprPolicyWithToken($token, $policy_apr_update_req): \OpenAPI\Client\Model\PolicyAprResponse
```

Update APR policy

Update a specific APR policy.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: mqAppAndAccessToken
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\PoliciesBetaApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$token = 'token_example'; // string | Unique identifier of the APR policy to update.  Send a `GET` request to `/policies/aprs` to retrieve existing APR policy tokens.
$policy_apr_update_req = {"description":"Description of the renamed APR Policy","name":"Renamed APR Policy","purchases":{"external_token":"my_external_purchase_token1234","name":"A purchase at a merchant","tiers":[{"apr":0,"margin_rate":1},{"apr":0,"margin_rate":5}]},"token":"my_apr_policy_token_1234"}; // \OpenAPI\Client\Model\PolicyAprUpdateReq

try {
    $result = $apiInstance->updateAprPolicyWithToken($token, $policy_apr_update_req);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PoliciesBetaApi->updateAprPolicyWithToken: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **token** | **string**| Unique identifier of the APR policy to update.  Send a &#x60;GET&#x60; request to &#x60;/policies/aprs&#x60; to retrieve existing APR policy tokens. |
 **policy_apr_update_req** | [**\OpenAPI\Client\Model\PolicyAprUpdateReq**](../Model/PolicyAprUpdateReq.md)|  |

### Return type

[**\OpenAPI\Client\Model\PolicyAprResponse**](../Model/PolicyAprResponse.md)

### Authorization

[mqAppAndAccessToken](../../README.md#mqAppAndAccessToken)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateDocumentPolicy()`

```php
updateDocumentPolicy($token, $policy_document_update_req): \OpenAPI\Client\Model\PolicyDocumentResponse
```

Update document policy

Update a specific document policy, which consists of all the pre- and post-application disclosures and credit program documents known as assets and templates. Assets contain finalized values after a bundle is created; templates do not contain finalized values.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: mqAppAndAccessToken
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\PoliciesBetaApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$token = 'token_example'; // string | Unique identifier of the document policy to update.  Send a `GET` request to `/policies/documents` to retrieve existing document policy tokens.
$policy_document_update_req = {"account_statement":{"template_token":"an_account_statement_template_token321"},"benefits_disclosure_premium":{"asset_token":"a_benefits_disclosure_asset_token321"},"benefits_disclosure_traditional":{"asset_token":"a_benefits_disclosure_traditional_asset_token321"},"card_member_agreement":{"asset_token":"a_card_member_agreement_asset_token321"},"e_disclosure":{"asset_token":"a_e_disclosure_asset_token321"},"name":"My Changed Document Policy","noaa_multiple_reason_with_dodd_frank":{"template_token":"an_noaa_multiple_reason_with_dodd_frank_template_token321"},"noaa_single_reason":{"template_token":"an_noaa_single_reason_template_token321"},"noaa_single_reason_with_dodd_frank":{"template_token":"an_noaa_single_reason_with_dodd_frank_template_token321"},"pre_qualification_disclosure":{"asset_token":"a_pre_qualification_disclosure_asset_token321","template_token":"a_pre_qualification_disclosure_template_token321"},"privacy_policy":{"asset_token":"a_privacy_policy_asset_token321"},"rewards_disclosure":{"asset_token":"a_rewards_disclosure_asset_token321","template_token":"a_rewards_disclosure_template_token321"},"summary_of_credit_terms":{"asset_token":"a_summary_of_credit_terms_asset_token321","template_token":"a_summary_of_credit_terms_template_token321"},"terms_schedule":{"template_token":"a_terms_schedule_template_token321"},"token":"my_document_policy_token_1234"}; // \OpenAPI\Client\Model\PolicyDocumentUpdateReq

try {
    $result = $apiInstance->updateDocumentPolicy($token, $policy_document_update_req);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PoliciesBetaApi->updateDocumentPolicy: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **token** | **string**| Unique identifier of the document policy to update.  Send a &#x60;GET&#x60; request to &#x60;/policies/documents&#x60; to retrieve existing document policy tokens. |
 **policy_document_update_req** | [**\OpenAPI\Client\Model\PolicyDocumentUpdateReq**](../Model/PolicyDocumentUpdateReq.md)|  |

### Return type

[**\OpenAPI\Client\Model\PolicyDocumentResponse**](../Model/PolicyDocumentResponse.md)

### Authorization

[mqAppAndAccessToken](../../README.md#mqAppAndAccessToken)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateFeePolicyWithToken()`

```php
updateFeePolicyWithToken($token, $policy_fee_update_req): \OpenAPI\Client\Model\PolicyFeeResponse
```

Update fee policy

Update a specific fee policy.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: mqAppAndAccessToken
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\PoliciesBetaApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$token = 'token_example'; // string | Unique identifier of the fee policy to retrieve.  Send a `GET` request to `/policies/fee` to retrieve existing fee policy tokens.
$policy_fee_update_req = {"account":{"foreign_transaction_fee":{"default_method":"PERCENTAGE","default_value":3},"late_payment":{"default_method":"FLAT","default_value":5},"returned_payment":{"default_method":"FLAT","default_value":5}},"description":"Description for changed fee policy","name":"My Changed Fee Policy","token":"my_fee_policy_token_1234"}; // \OpenAPI\Client\Model\PolicyFeeUpdateReq

try {
    $result = $apiInstance->updateFeePolicyWithToken($token, $policy_fee_update_req);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PoliciesBetaApi->updateFeePolicyWithToken: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **token** | **string**| Unique identifier of the fee policy to retrieve.  Send a &#x60;GET&#x60; request to &#x60;/policies/fee&#x60; to retrieve existing fee policy tokens. |
 **policy_fee_update_req** | [**\OpenAPI\Client\Model\PolicyFeeUpdateReq**](../Model/PolicyFeeUpdateReq.md)|  |

### Return type

[**\OpenAPI\Client\Model\PolicyFeeResponse**](../Model/PolicyFeeResponse.md)

### Authorization

[mqAppAndAccessToken](../../README.md#mqAppAndAccessToken)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateProductPolicy()`

```php
updateProductPolicy($token, $policy_product_update_req): \OpenAPI\Client\Model\PolicyProductResponse
```

Update credit product policy

Update a specific credit product policy.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: mqAppAndAccessToken
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\PoliciesBetaApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$token = 'token_example'; // string | Unique identifier of the credit product policy to retrieve.  Send a `GET` request to `/policies/products` to retrieve existing credit product policy tokens.
$policy_product_update_req = {"card_products":[{"level":"TRADITIONAL","network":"VISA","token":"my_card_product_token1234"}],"classification":"CONSUMER","credit_line":{"max":3500,"min":50},"currency_code":"USD","description":"Description of the renamed credit product policy","interest_calculation":{"application_of_credits":{"cycle_type":"END_REVOLVING","day":15},"day_count":"ACTUAL","exclude_tran_types":["ANNUAL_FEE","LATE_PAYMENT_FEE","CASH_BACK_STATEMENT_CREDIT","FOREIGN_TRANSACTION_FEE"],"grace_days_application":"NEXT_CYCLE_DATE","interest_application":["PRINCIPAL","FEES"],"interest_on_grace_reactivation":"ACCRUE_PAYMENT_DATE","method":"AVG_DAILY_BALANCE_WITH_NEW_TRANSACTIONS","minimum_interest":1},"name":"Renamed Credit Product Policy","payments":{"allocation_order":["INTEREST","FEES","PRINCIPAL"],"billing_cycle_day":1,"due_day":31,"min_payment_calculation":{"include_overlimit_amount":true,"include_past_due_amount":false,"min_payment_flat_amount":20,"min_payment_percentage":{"include_fees_charged":["LATE_PAYMENT_FEE","FOREIGN_TRANSACTION_FEE"],"include_interest_charged":false,"percentage_of_balance":1}}},"product_sub_type":"CREDIT_CARD","product_type":"REVOLVING","token":"my_credit_product_policy_token_1234","usage":["PURCHASE"]}; // \OpenAPI\Client\Model\PolicyProductUpdateReq

try {
    $result = $apiInstance->updateProductPolicy($token, $policy_product_update_req);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PoliciesBetaApi->updateProductPolicy: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **token** | **string**| Unique identifier of the credit product policy to retrieve.  Send a &#x60;GET&#x60; request to &#x60;/policies/products&#x60; to retrieve existing credit product policy tokens. |
 **policy_product_update_req** | [**\OpenAPI\Client\Model\PolicyProductUpdateReq**](../Model/PolicyProductUpdateReq.md)|  |

### Return type

[**\OpenAPI\Client\Model\PolicyProductResponse**](../Model/PolicyProductResponse.md)

### Authorization

[mqAppAndAccessToken](../../README.md#mqAppAndAccessToken)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateRewardPolicy()`

```php
updateRewardPolicy($token, $policy_reward_req): \OpenAPI\Client\Model\PolicyRewardResponse
```

Update reward policy

Update a reward policy.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: mqAppAndAccessToken
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\PoliciesBetaApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$token = 'token_example'; // string | Unique identifier of the reward policy to update.  Send a `GET` request to `/policies/rewards` to retrieve existing reward policy tokens.
$policy_reward_req = new \OpenAPI\Client\Model\PolicyRewardReq(); // \OpenAPI\Client\Model\PolicyRewardReq

try {
    $result = $apiInstance->updateRewardPolicy($token, $policy_reward_req);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PoliciesBetaApi->updateRewardPolicy: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **token** | **string**| Unique identifier of the reward policy to update.  Send a &#x60;GET&#x60; request to &#x60;/policies/rewards&#x60; to retrieve existing reward policy tokens. |
 **policy_reward_req** | [**\OpenAPI\Client\Model\PolicyRewardReq**](../Model/PolicyRewardReq.md)|  |

### Return type

[**\OpenAPI\Client\Model\PolicyRewardResponse**](../Model/PolicyRewardResponse.md)

### Authorization

[mqAppAndAccessToken](../../README.md#mqAppAndAccessToken)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
