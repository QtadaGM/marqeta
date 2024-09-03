# OpenAPI\Client\PINsApi

All URIs are relative to /v3.

Method | HTTP request | Description
------------- | ------------- | -------------
[**postPinsControltoken()**](PINsApi.md#postPinsControltoken) | **POST** /pins/controltoken | Create PIN control token
[**putPins()**](PINsApi.md#putPins) | **PUT** /pins | Create or update PIN
[**revealPins()**](PINsApi.md#revealPins) | **POST** /pins/reveal | Reveal PIN


## `postPinsControltoken()`

```php
postPinsControltoken($control_token_request): \OpenAPI\Client\Model\ControlTokenResponse
```

Create PIN control token

Creates a control token necessary when creating or updating a card's personal identification number (PIN).  Creating, updating, or revealing a card's PIN is a two-step process. You must first create the control token that is required to create the PIN, and then you create, update, or reveal the PIN itself.  The lifespan of the control token in a production environment is either five minutes or one hour from creation, depending on the token type. If multiple tokens are requested for a single card, only the most recent one is valid. Once redeemed, a token cannot be reused.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: mqAppAndAccessToken
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\PINsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$control_token_request = {"card_token":"my_card_01","controltoken_type":"SET_PIN"}; // \OpenAPI\Client\Model\ControlTokenRequest

try {
    $result = $apiInstance->postPinsControltoken($control_token_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PINsApi->postPinsControltoken: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **control_token_request** | [**\OpenAPI\Client\Model\ControlTokenRequest**](../Model/ControlTokenRequest.md)|  | [optional]

### Return type

[**\OpenAPI\Client\Model\ControlTokenResponse**](../Model/ControlTokenResponse.md)

### Authorization

[mqAppAndAccessToken](../../README.md#mqAppAndAccessToken)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `putPins()`

```php
putPins($pin_request)
```

Create or update PIN

Creates or updates a personal identification number (PIN) for an existing card.  If you want to manage a card's PIN, first create a new control token for the card by sending a `POST` request to `/pins/controltoken`, and then use that token to update the PIN. You must create a card before you can manage a PIN.  Unless PIN reveal functionality has been enabled for your program, you cannot retrieve a PIN that has previously been created. If the PIN has been forgotten, you must either update the card's PIN or create a new card and PIN.  If you have enabled PIN reveal functionality for your program, you can send a `POST` request to the `/pins/reveal` endpoint to retrieve an existing PIN. See <</core-api/pins#revealPins, Reveal PIN>> on this page for details.  [WARNING] Sending a request to this endpoint requires PCI DSS compliance. You must comply with PCI DSS data security requirements if you want to store, transmit, or process sensitive card data such as the cardholder's primary account number (PAN), personal identification number (PIN), and card expiration date.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: mqAppAndAccessToken
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\PINsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$pin_request = {"control_token":"b4647c9a-d4b8-4091-a5ff-dd67a7bb9ffc","pin":"5678"}; // \OpenAPI\Client\Model\PinRequest

try {
    $apiInstance->putPins($pin_request);
} catch (Exception $e) {
    echo 'Exception when calling PINsApi->putPins: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **pin_request** | [**\OpenAPI\Client\Model\PinRequest**](../Model/PinRequest.md)|  | [optional]

### Return type

void (empty response body)

### Authorization

[mqAppAndAccessToken](../../README.md#mqAppAndAccessToken)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `revealPins()`

```php
revealPins($pin_reveal_request)
```

Reveal PIN

Reveals the personal identification number (PIN) of an existing, active card.  *WARNING:* Only use this endpoint to access a PIN in order to reveal it to its cardholder. Do not use this endpoint for the purpose of storing a PIN at any location.  Sending a request to this endpoint requires PCI DSS compliance. You must comply with PCI DSS data security requirements if you want to store, transmit, or process sensitive card data such as the cardholder's primary account number (PAN), personal identification number (PIN), and card expiration date.  If you want instead to update a card's PIN, send a `PUT` request to the `/pins` endpoint. See <</core-api/pins#putPins, Create or Update PIN>> on this page for details.  Revealing a card's PIN is a two-step process. You must first create a new control token for the card by sending a `POST` request to `/pins/controltoken`, and then use that token to reveal the PIN.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: mqAppAndAccessToken
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\PINsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$pin_reveal_request = {"cardholder_verification_method":"BIOMETRIC_FINGERPRINT","control_token":"b4647c9a-d4b8-4091-a5ff-dd67a7bb9ffc"}; // \OpenAPI\Client\Model\PinRevealRequest

try {
    $apiInstance->revealPins($pin_reveal_request);
} catch (Exception $e) {
    echo 'Exception when calling PINsApi->revealPins: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **pin_reveal_request** | [**\OpenAPI\Client\Model\PinRevealRequest**](../Model/PinRevealRequest.md)|  | [optional]

### Return type

void (empty response body)

### Authorization

[mqAppAndAccessToken](../../README.md#mqAppAndAccessToken)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
