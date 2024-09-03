# OpenAPI\Client\AccountRewardsApi

All URIs are relative to /v3.

Method | HTTP request | Description
------------- | ------------- | -------------
[**createReward()**](AccountRewardsApi.md#createReward) | **POST** /accounts/{account_token}/rewards | Create account reward


## `createReward()`

```php
createReward($account_token, $reward_create_req): \OpenAPI\Client\Model\RewardResponse
```

Create account reward

Create a reward for an existing credit account.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: mqAppAndAccessToken
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\AccountRewardsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account_token = 'account_token_example'; // string | Unique identifier of the credit account for which you want to create a reward.  Send a `GET` request to `/credit/accounts` to retrieve existing credit account tokens.
$reward_create_req = {"account_token":"my_account_token_12","amount":20,"created_time":"2023-09-03T22:53:57.895Z","currency_code":"USD","description":"$20 reward","token":"my_rewards_token1234","type":"CASH_BACK","updated_time":"2023-09-03T22:53:57.895Z"}; // \OpenAPI\Client\Model\RewardCreateReq

try {
    $result = $apiInstance->createReward($account_token, $reward_create_req);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountRewardsApi->createReward: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **account_token** | **string**| Unique identifier of the credit account for which you want to create a reward.  Send a &#x60;GET&#x60; request to &#x60;/credit/accounts&#x60; to retrieve existing credit account tokens. |
 **reward_create_req** | [**\OpenAPI\Client\Model\RewardCreateReq**](../Model/RewardCreateReq.md)|  |

### Return type

[**\OpenAPI\Client\Model\RewardResponse**](../Model/RewardResponse.md)

### Authorization

[mqAppAndAccessToken](../../README.md#mqAppAndAccessToken)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
