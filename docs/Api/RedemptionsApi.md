# OpenAPI\Client\RedemptionsApi

All URIs are relative to /v3.

Method | HTTP request | Description
------------- | ------------- | -------------
[**retrieveRedemptionsBySettlementDate()**](RedemptionsApi.md#retrieveRedemptionsBySettlementDate) | **GET** /rewardprograms/redemptions | retrieves all completed redemptions by settlement date


## `retrieveRedemptionsBySettlementDate()`

```php
retrieveRedemptionsBySettlementDate($settlement_start_date, $settlement_end_date, $destination, $count, $start_index): \OpenAPI\Client\Model\RedemptionsBySettlementDatePage
```

retrieves all completed redemptions by settlement date

retrieves all completed redemptions by settlement date

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: mqAppAndAccessToken
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\RedemptionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$settlement_start_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Settlement start date to filter by.
$settlement_end_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Settlement end date to filter by.
$destination = new \OpenAPI\Client\Model\\OpenAPI\Client\Model\DestinationType(); // \OpenAPI\Client\Model\DestinationType | Specifies the destination for external redemptions to filter for.
$count = 5; // int | Number of resources to retrieve.
$start_index = 0; // int | Sort order index of the first resource in the returned array.

try {
    $result = $apiInstance->retrieveRedemptionsBySettlementDate($settlement_start_date, $settlement_end_date, $destination, $count, $start_index);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RedemptionsApi->retrieveRedemptionsBySettlementDate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **settlement_start_date** | **\DateTime**| Settlement start date to filter by. |
 **settlement_end_date** | **\DateTime**| Settlement end date to filter by. |
 **destination** | [**\OpenAPI\Client\Model\DestinationType**](../Model/.md)| Specifies the destination for external redemptions to filter for. | [optional]
 **count** | **int**| Number of resources to retrieve. | [optional] [default to 5]
 **start_index** | **int**| Sort order index of the first resource in the returned array. | [optional] [default to 0]

### Return type

[**\OpenAPI\Client\Model\RedemptionsBySettlementDatePage**](../Model/RedemptionsBySettlementDatePage.md)

### Authorization

[mqAppAndAccessToken](../../README.md#mqAppAndAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
