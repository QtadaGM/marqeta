# OpenAPI\Client\DefaultApi

All URIs are relative to /v3.

Method | HTTP request | Description
------------- | ------------- | -------------
[**feedbackFraudPost()**](DefaultApi.md#feedbackFraudPost) | **POST** /feedback/fraud | Creates a fraud feedback


## `feedbackFraudPost()`

```php
feedbackFraudPost($fraud_feedback_request): \OpenAPI\Client\Model\FraudFeedbackResponse
```

Creates a fraud feedback

This endpoint is to get a fraud feedback from the customer.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: mqAppAndAccessToken
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$fraud_feedback_request = new \OpenAPI\Client\Model\FraudFeedbackRequest(); // \OpenAPI\Client\Model\FraudFeedbackRequest

try {
    $result = $apiInstance->feedbackFraudPost($fraud_feedback_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->feedbackFraudPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **fraud_feedback_request** | [**\OpenAPI\Client\Model\FraudFeedbackRequest**](../Model/FraudFeedbackRequest.md)|  |

### Return type

[**\OpenAPI\Client\Model\FraudFeedbackResponse**](../Model/FraudFeedbackResponse.md)

### Authorization

[mqAppAndAccessToken](../../README.md#mqAppAndAccessToken)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
