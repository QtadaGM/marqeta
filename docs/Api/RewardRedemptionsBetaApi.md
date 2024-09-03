# OpenAPI\Client\RewardRedemptionsBetaApi

All URIs are relative to /v3.

Method | HTTP request | Description
------------- | ------------- | -------------
[**getRedemption()**](RewardRedemptionsBetaApi.md#getRedemption) | **GET** /rewardprograms/{token}/redemptions/{redemption_token} | Retrieve reward redemption
[**postRedemptionTransition()**](RewardRedemptionsBetaApi.md#postRedemptionTransition) | **POST** /rewardprograms/{token}/redemptions/{redemption_token}/transitions | Transition reward redemption status
[**postRewardProgramRedemption()**](RewardRedemptionsBetaApi.md#postRewardProgramRedemption) | **POST** /rewardprograms/{token}/redemptions | Create reward redemption
[**retrieveRedemptions()**](RewardRedemptionsBetaApi.md#retrieveRedemptions) | **GET** /rewardprograms/{token}/redemptions | List reward redemptions
[**retrieveRedemptionsBalance()**](RewardRedemptionsBetaApi.md#retrieveRedemptionsBalance) | **GET** /rewardprograms/{token}/redemptions/balance | Retrieve reward redemption balance


## `getRedemption()`

```php
getRedemption($token, $redemption_token): \OpenAPI\Client\Model\RedemptionsResponse
```

Retrieve reward redemption

Retrieve a specific redemption for a specific reward program.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: mqAppAndAccessToken
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\RewardRedemptionsBetaApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$token = 'token_example'; // string | Unique identifier of the reward program.
$redemption_token = 'redemption_token_example'; // string | Unique identifier of the reward redemption.

try {
    $result = $apiInstance->getRedemption($token, $redemption_token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RewardRedemptionsBetaApi->getRedemption: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **token** | **string**| Unique identifier of the reward program. |
 **redemption_token** | **string**| Unique identifier of the reward redemption. |

### Return type

[**\OpenAPI\Client\Model\RedemptionsResponse**](../Model/RedemptionsResponse.md)

### Authorization

[mqAppAndAccessToken](../../README.md#mqAppAndAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postRedemptionTransition()`

```php
postRedemptionTransition($token, $redemption_token, $create_redemption_transitions_request): \OpenAPI\Client\Model\RedemptionTransitionsResponse
```

Transition reward redemption status

Transition the current status of a reward redemption to a new status.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: mqAppAndAccessToken
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\RewardRedemptionsBetaApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$token = 'token_example'; // string | Unique identifier of the reward program.
$redemption_token = 'redemption_token_example'; // string | Unique identifier of the reward redemption.
$create_redemption_transitions_request = {"new_state":"COMPLETED"}; // \OpenAPI\Client\Model\CreateRedemptionTransitionsRequest

try {
    $result = $apiInstance->postRedemptionTransition($token, $redemption_token, $create_redemption_transitions_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RewardRedemptionsBetaApi->postRedemptionTransition: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **token** | **string**| Unique identifier of the reward program. |
 **redemption_token** | **string**| Unique identifier of the reward redemption. |
 **create_redemption_transitions_request** | [**\OpenAPI\Client\Model\CreateRedemptionTransitionsRequest**](../Model/CreateRedemptionTransitionsRequest.md)|  |

### Return type

[**\OpenAPI\Client\Model\RedemptionTransitionsResponse**](../Model/RedemptionTransitionsResponse.md)

### Authorization

[mqAppAndAccessToken](../../README.md#mqAppAndAccessToken)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postRewardProgramRedemption()`

```php
postRewardProgramRedemption($token, $create_redemptions_request): \OpenAPI\Client\Model\RedemptionsResponse
```

Create reward redemption

Create a redemption to redeem rewards on a specific reward program.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: mqAppAndAccessToken
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\RewardRedemptionsBetaApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$token = 'token_example'; // string | Unique identifier of the reward program.
$create_redemptions_request = {"amount":0.03,"destination":"WALLET","note":"reward redemption","type":"EXTERNAL"}; // \OpenAPI\Client\Model\CreateRedemptionsRequest

try {
    $result = $apiInstance->postRewardProgramRedemption($token, $create_redemptions_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RewardRedemptionsBetaApi->postRewardProgramRedemption: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **token** | **string**| Unique identifier of the reward program. |
 **create_redemptions_request** | [**\OpenAPI\Client\Model\CreateRedemptionsRequest**](../Model/CreateRedemptionsRequest.md)|  |

### Return type

[**\OpenAPI\Client\Model\RedemptionsResponse**](../Model/RedemptionsResponse.md)

### Authorization

[mqAppAndAccessToken](../../README.md#mqAppAndAccessToken)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `retrieveRedemptions()`

```php
retrieveRedemptions($token, $start_date, $end_date, $count, $start_index, $sort_by, $type): \OpenAPI\Client\Model\RedemptionsPage
```

List reward redemptions

Retrieve an array of reward redemptions for a specific reward program.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: mqAppAndAccessToken
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\RewardRedemptionsBetaApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$token = 'token_example'; // string | Unique identifier of the reward program.
$start_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | The starting date (or date-time) of a date range from which to return resources, in UTC.
$end_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | The ending date (or date-time) of a date range from which to return resources, in UTC.
$count = 5; // int | Number of resources to retrieve.
$start_index = 0; // int | Sort order index of the first resource in the returned array.
$sort_by = '-createdTime'; // string | Field on which to sort. Prefix the field name with a hyphen (`-`) to sort in descending order. Omit the hyphen to sort in ascending order.  *NOTE*: You must sort using system field names such as `createdTime`, and not by the field names appearing in response bodies such as `created_time`.
$type = new \OpenAPI\Client\Model\\OpenAPI\Client\Model\RedemptionType(); // \OpenAPI\Client\Model\RedemptionType | Type of reward redemptions in the returned array.

try {
    $result = $apiInstance->retrieveRedemptions($token, $start_date, $end_date, $count, $start_index, $sort_by, $type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RewardRedemptionsBetaApi->retrieveRedemptions: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **token** | **string**| Unique identifier of the reward program. |
 **start_date** | **\DateTime**| The starting date (or date-time) of a date range from which to return resources, in UTC. | [optional]
 **end_date** | **\DateTime**| The ending date (or date-time) of a date range from which to return resources, in UTC. | [optional]
 **count** | **int**| Number of resources to retrieve. | [optional] [default to 5]
 **start_index** | **int**| Sort order index of the first resource in the returned array. | [optional] [default to 0]
 **sort_by** | **string**| Field on which to sort. Prefix the field name with a hyphen (&#x60;-&#x60;) to sort in descending order. Omit the hyphen to sort in ascending order.  *NOTE*: You must sort using system field names such as &#x60;createdTime&#x60;, and not by the field names appearing in response bodies such as &#x60;created_time&#x60;. | [optional] [default to &#39;-createdTime&#39;]
 **type** | [**\OpenAPI\Client\Model\RedemptionType**](../Model/.md)| Type of reward redemptions in the returned array. | [optional]

### Return type

[**\OpenAPI\Client\Model\RedemptionsPage**](../Model/RedemptionsPage.md)

### Authorization

[mqAppAndAccessToken](../../README.md#mqAppAndAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `retrieveRedemptionsBalance()`

```php
retrieveRedemptionsBalance($token, $start_date, $end_date, $type): \OpenAPI\Client\Model\RedemptionsBalanceResponse
```

Retrieve reward redemption balance

Retrieve the balance for reward redemptions within a specified date range.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: mqAppAndAccessToken
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\RewardRedemptionsBetaApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$token = 'token_example'; // string | Unique identifier of the reward program.
$start_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | The starting date (or date-time) of a date range from which to return resources, in UTC.
$end_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | The ending date (or date-time) of a date range from which to return resources, in UTC.
$type = array(new \OpenAPI\Client\Model\\OpenAPI\Client\Model\RedemptionType()); // \OpenAPI\Client\Model\RedemptionType[] | Type of reward redemptions in the returned array.

try {
    $result = $apiInstance->retrieveRedemptionsBalance($token, $start_date, $end_date, $type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RewardRedemptionsBetaApi->retrieveRedemptionsBalance: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **token** | **string**| Unique identifier of the reward program. |
 **start_date** | **\DateTime**| The starting date (or date-time) of a date range from which to return resources, in UTC. | [optional]
 **end_date** | **\DateTime**| The ending date (or date-time) of a date range from which to return resources, in UTC. | [optional]
 **type** | [**\OpenAPI\Client\Model\RedemptionType[]**](../Model/\OpenAPI\Client\Model\RedemptionType.md)| Type of reward redemptions in the returned array. | [optional]

### Return type

[**\OpenAPI\Client\Model\RedemptionsBalanceResponse**](../Model/RedemptionsBalanceResponse.md)

### Authorization

[mqAppAndAccessToken](../../README.md#mqAppAndAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
