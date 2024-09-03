# OpenAPI\Client\WebhooksApi

All URIs are relative to /v3.

Method | HTTP request | Description
------------- | ------------- | -------------
[**getWebhooks()**](WebhooksApi.md#getWebhooks) | **GET** /webhooks | List webhooks
[**getWebhooksToken()**](WebhooksApi.md#getWebhooksToken) | **GET** /webhooks/{token} | Retrieve webhook
[**postWebhooks()**](WebhooksApi.md#postWebhooks) | **POST** /webhooks | Create webhook
[**postWebhooksTokenEventtypeEventtoken()**](WebhooksApi.md#postWebhooksTokenEventtypeEventtoken) | **POST** /webhooks/{token}/{event_type}/{event_token} | Resend event notification
[**postWebhooksTokenPing()**](WebhooksApi.md#postWebhooksTokenPing) | **POST** /webhooks/{token}/ping | Ping webhook
[**putWebhooksCustomHeadersToken()**](WebhooksApi.md#putWebhooksCustomHeadersToken) | **PUT** /webhooks/customheaders/{token} | Update webhook custom headers
[**putWebhooksToken()**](WebhooksApi.md#putWebhooksToken) | **PUT** /webhooks/{token} | Update webhook


## `getWebhooks()`

```php
getWebhooks($active, $count, $start_index, $fields, $sort_by): \OpenAPI\Client\Model\WebhookResponseModelListResponse
```

List webhooks

Returns an array of all webhooks.  This endpoint supports <</core-api/field-filtering, field filtering>>, <</core-api/sorting-and-pagination, sorting>>, and <</core-api/sorting-and-pagination, pagination>>.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: mqAppAndAccessToken
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\WebhooksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$active = false; // bool | Set to `true` to return only active webhook configurations.
$count = 5; // int | Number of resources to retrieve.
$start_index = 0; // int | Sort order index of the first resource in the returned array.
$fields = 'fields_example'; // string | Comma-delimited list of fields to return (`field_1,field_2`, and so on). Leave blank to return all fields.
$sort_by = '-createdTime'; // string | Field on which to sort. Use any field in the resource model, or one of the system fields `lastModifiedTime` or `createdTime`. Prefix the field name with a hyphen (`-`) to sort in descending order. Omit the hyphen to sort in ascending order.

try {
    $result = $apiInstance->getWebhooks($active, $count, $start_index, $fields, $sort_by);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WebhooksApi->getWebhooks: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **active** | **bool**| Set to &#x60;true&#x60; to return only active webhook configurations. | [optional] [default to false]
 **count** | **int**| Number of resources to retrieve. | [optional] [default to 5]
 **start_index** | **int**| Sort order index of the first resource in the returned array. | [optional] [default to 0]
 **fields** | **string**| Comma-delimited list of fields to return (&#x60;field_1,field_2&#x60;, and so on). Leave blank to return all fields. | [optional]
 **sort_by** | **string**| Field on which to sort. Use any field in the resource model, or one of the system fields &#x60;lastModifiedTime&#x60; or &#x60;createdTime&#x60;. Prefix the field name with a hyphen (&#x60;-&#x60;) to sort in descending order. Omit the hyphen to sort in ascending order. | [optional] [default to &#39;-createdTime&#39;]

### Return type

[**\OpenAPI\Client\Model\WebhookResponseModelListResponse**](../Model/WebhookResponseModelListResponse.md)

### Authorization

[mqAppAndAccessToken](../../README.md#mqAppAndAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getWebhooksToken()`

```php
getWebhooksToken($token): \OpenAPI\Client\Model\WebhookResponseModel
```

Retrieve webhook

Retrieves a webhook.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: mqAppAndAccessToken
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\WebhooksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$token = 'token_example'; // string | Unique identifier of the webhook.

try {
    $result = $apiInstance->getWebhooksToken($token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WebhooksApi->getWebhooksToken: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **token** | **string**| Unique identifier of the webhook. |

### Return type

[**\OpenAPI\Client\Model\WebhookResponseModel**](../Model/WebhookResponseModel.md)

### Authorization

[mqAppAndAccessToken](../../README.md#mqAppAndAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postWebhooks()`

```php
postWebhooks($webhook_request_model): \OpenAPI\Client\Model\WebhookResponseModel
```

Create webhook

Creates a webhook.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: mqAppAndAccessToken
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\WebhooksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$webhook_request_model = {"active":true,"config":{"basic_auth_password":"my_20-to-50-character_password","basic_auth_username":"my_username","custom_header":{"my_header_name_1":"my_value_1","my_header_name_2":"my_value_2"},"secret":"my_20-character-min_secret","url":"https://my_secure_domain.com/webhook"},"events":["*"],"name":"my_webhook_name","token":"my_webhook_token"}; // \OpenAPI\Client\Model\WebhookRequestModel

try {
    $result = $apiInstance->postWebhooks($webhook_request_model);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WebhooksApi->postWebhooks: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **webhook_request_model** | [**\OpenAPI\Client\Model\WebhookRequestModel**](../Model/WebhookRequestModel.md)|  | [optional]

### Return type

[**\OpenAPI\Client\Model\WebhookResponseModel**](../Model/WebhookResponseModel.md)

### Authorization

[mqAppAndAccessToken](../../README.md#mqAppAndAccessToken)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postWebhooksTokenEventtypeEventtoken()`

```php
postWebhooksTokenEventtypeEventtoken($token, $event_type, $event_token)
```

Resend event notification

Resends an event notification to your webhook endpoint.  Although you send this request as a `POST`, all parameters are passed in the URL and the body is empty. The event notification is resent to your webhook endpoint and is also returned in the response to this request.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: mqAppAndAccessToken
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\WebhooksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$token = 'token_example'; // string | Unique identifier of the webhook.
$event_type = 'event_type_example'; // string | Specifies the type of event you want to resend.
$event_token = 'event_token_example'; // string | Unique identifier of the event for which you want to resend a notification.

try {
    $apiInstance->postWebhooksTokenEventtypeEventtoken($token, $event_type, $event_token);
} catch (Exception $e) {
    echo 'Exception when calling WebhooksApi->postWebhooksTokenEventtypeEventtoken: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **token** | **string**| Unique identifier of the webhook. |
 **event_type** | **string**| Specifies the type of event you want to resend. |
 **event_token** | **string**| Unique identifier of the event for which you want to resend a notification. |

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

## `postWebhooksTokenPing()`

```php
postWebhooksTokenPing($token): \OpenAPI\Client\Model\WebhookPingModel
```

Ping webhook

Pings your webhook endpoint.  Send a ping request to your webhook endpoint to validate credentials and connectivity. Your webhook endpoint must be configured to respond.  === Configuring your webhook endpoint  When the Marqeta platform receives the ping request, it sends a `POST` request containing the following body to the URL of your webhook endpoint:  [#ping-webhook-sample] [source,json] ---- {   \"pings\": [     {       \"token\": \"marqeta\",       \"payload\": \"healthcheck\"     }   ] } ----  To indicate that it is functioning properly, your webhook endpoint must respond with a status code of `200` (see <</developer-guides/signature-verification, Signature Verification>> for a code example that identifies a ping request). The response can optionally include a link:http://www.json.org/[JSON, window=\"_blank\"]-formatted body, for example:  [#ping-webhook-sample-2] [source,json] ---- {\"my_endpoint_status\": \"alive\"} ----  The Marqeta platform then responds to its requestor by echoing, as-is, the response code and body received from your webhook endpoint.  === Using the ping facility  To ping a webhook endpoint, send a `POST` request to `/webhooks/{token}/ping` and use the `token` path parameter to specify which webhook you want to reach. Include an empty, link:http://www.json.org/[JSON, window=\"_blank\"]-formatted body in the request, that is:  [#ping-webhook-sample-3] [source,json] ---- {} ----  The following chain of actions occurs during the successful execution of a ping operation:  . The Marqeta platform receives the ping request (`POST` to `/webhooks/{token}/ping`). . The Marqeta platform sends a request to your webhook endpoint. . Your webhook endpoint responds with a status code of \"200\" and an optional body. . The Marqeta platform responds to its requestor by echoing, as-is, the response code and body it received from your webhook endpoint.  [NOTE] If the customer-hosted endpoint fails to respond within five seconds, the Marqeta platform times out the request and responds with the following message body (where `<optional message>` represents additional details you can choose to include in the response):  [#ping-webhook-sample-4] [source,json] ---- {   \"error_message\": \"Webhook operation failed \" + <optional message>,   \"error_code\": \"422600\" } ----  Failed pings are not automatically retried.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: mqAppAndAccessToken
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\WebhooksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$token = 'token_example'; // string | Unique identifier of the webhook.

try {
    $result = $apiInstance->postWebhooksTokenPing($token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WebhooksApi->postWebhooksTokenPing: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **token** | **string**| Unique identifier of the webhook. |

### Return type

[**\OpenAPI\Client\Model\WebhookPingModel**](../Model/WebhookPingModel.md)

### Authorization

[mqAppAndAccessToken](../../README.md#mqAppAndAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `putWebhooksCustomHeadersToken()`

```php
putWebhooksCustomHeadersToken($token, $webhook_update_custom_header_request): \OpenAPI\Client\Model\WebhookResponseModel
```

Update webhook custom headers

Adds or updates a webhook's custom HTTP headers.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: mqAppAndAccessToken
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\WebhooksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$token = 'token_example'; // string | Unique identifier of the webhook.
$webhook_update_custom_header_request = {"custom_header":{"my_header_name_1":"my_value_1","my_header_name_2":"my_value_2","my_header_name_3":"my_value_3"}}; // \OpenAPI\Client\Model\WebhookUpdateCustomHeaderRequest

try {
    $result = $apiInstance->putWebhooksCustomHeadersToken($token, $webhook_update_custom_header_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WebhooksApi->putWebhooksCustomHeadersToken: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **token** | **string**| Unique identifier of the webhook. |
 **webhook_update_custom_header_request** | [**\OpenAPI\Client\Model\WebhookUpdateCustomHeaderRequest**](../Model/WebhookUpdateCustomHeaderRequest.md)|  | [optional]

### Return type

[**\OpenAPI\Client\Model\WebhookResponseModel**](../Model/WebhookResponseModel.md)

### Authorization

[mqAppAndAccessToken](../../README.md#mqAppAndAccessToken)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `putWebhooksToken()`

```php
putWebhooksToken($token, $webhook_base_model): \OpenAPI\Client\Model\WebhookResponseModel
```

Update webhook

Updates a webhook.  You can also use this endpoint to disable webhooks you no longer want to receive—there is no `DELETE` method available to remove unneeded webhooks. To disable a webhook, use this endpoint to set its `active` field to `false`.  For instructions on managing your webhooks via the Developer Dashboard, see the <</developer-guides/developer-tools/#_to_disable_a_webhook, Developer Tools>> guide.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: mqAppAndAccessToken
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\WebhooksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$token = 'token_example'; // string | Unique identifier of the webhook.
$webhook_base_model = new \OpenAPI\Client\Model\WebhookBaseModel(); // \OpenAPI\Client\Model\WebhookBaseModel

try {
    $result = $apiInstance->putWebhooksToken($token, $webhook_base_model);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WebhooksApi->putWebhooksToken: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **token** | **string**| Unique identifier of the webhook. |
 **webhook_base_model** | [**\OpenAPI\Client\Model\WebhookBaseModel**](../Model/WebhookBaseModel.md)|  | [optional]

### Return type

[**\OpenAPI\Client\Model\WebhookResponseModel**](../Model/WebhookResponseModel.md)

### Authorization

[mqAppAndAccessToken](../../README.md#mqAppAndAccessToken)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
