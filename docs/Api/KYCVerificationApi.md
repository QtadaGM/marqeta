# OpenAPI\Client\KYCVerificationApi

All URIs are relative to /v3.

Method | HTTP request | Description
------------- | ------------- | -------------
[**getKycBusinessBusinesstoken()**](KYCVerificationApi.md#getKycBusinessBusinesstoken) | **GET** /kyc/business/{business_token} | List KYC results for a business
[**getKycToken()**](KYCVerificationApi.md#getKycToken) | **GET** /kyc/{token} | Retrieve KYC result
[**getKycUserUsertoken()**](KYCVerificationApi.md#getKycUserUsertoken) | **GET** /kyc/user/{user_token} | List KYC results for a user
[**postKyc()**](KYCVerificationApi.md#postKyc) | **POST** /kyc | Perform KYC verification


## `getKycBusinessBusinesstoken()`

```php
getKycBusinessBusinesstoken($business_token, $count, $start_index, $fields, $sort_by): \OpenAPI\Client\Model\KYCListResponse
```

List KYC results for a business

Use this endpoint to retrieve all KYC verification results for a business.  This endpoint supports <</core-api/sorting-and-pagination, pagination>>.  === Business KYC outcome reasons (business response)  The following tables describe KYC outcome reasons potentially returned in the `outcome_reasons` field of the business `result` response object when a business is in a `PENDING` or `FAILURE` state. Where possible, they also describe acceptable documents that your customers can submit to resolve `PENDING` outcomes.  ==== Outcome reasons for the business  These outcome reasons pertain to the business organization itself.  [cols=\",,2a\"] |=== | Outcome Reason and State | Description | Accepted Documents  | AddressIssue   + `PENDING` | Missing, invalid, mismatched, or PO Box address. | One of the following documents. Document must show the full business name and address:  * Bank statement * Utility bill * Current lease or rental agreement * Insurance policy  | BusinessNameIssue   + `PENDING` | Invalid or mismatched name. | Articles or certificate of incorporation.  | OFACIssue   + `FAILURE` | Business appears on an OFAC list. | This outcome requires a manual review by Marqeta to determine the next appropriate step. Contact your Marqeta representative.  | RegistrationIssue   + `PENDING` | Business is inactive, not registered, or not in good standing with the Secretary of State; recently reported or not recently updated. | This outcome requires a manual review by Marqeta to determine the next appropriate step. Contact your Marqeta representative.  | Sanctions List Non-OFAC   + `PENDING` | Business appears on a non-OFAC screening list, bankruptcy, or alert list. | This outcome requires a manual review by Marqeta to determine the next appropriate step. Contact your Marqeta representative.  | TINIssue   + `PENDING` | Missing, invalid, or mismatched Tax Identification Number (TIN). | IRS Notice Letter 147C or CP575, or most recent tax return.  |===  ===== Outcome reasons for individuals associated with a business  These outcome reasons pertain to individuals associated with a business: proprietors, business officers, and beneficial owners.  [cols=\",,2a\"] |=== | Outcome Reason and State | Description | Accepted Documents  | AddressIssue   + `PENDING` | Missing, invalid, mismatched, or PO Box address. | One of the following documents. Document must show the full name and address:  * Unexpired state-issued driver's license or identification card * US Military Identification Card * Utility bill * Bank statement * Current rental or lease agreement * Mortgage statement  | DateOfBirthIssue   + `PENDING` | Invalid or mismatched date of birth. | Unexpired government-issued photo identification that shows name and date of birth:  * Driver's license or state-issued identification card * Passport  | NameIssue   + `PENDING` | Invalid or mismatched name. | Unexpired government-issued photo identification that has name and date of birth:  * Driver's license or state-issued identification card * Passport or US passport card  | NoRecordFound   + `FAILURE` | No records were found for this individual. | As no record was found for this individual, supporting documentation must be provided for each attribute (name, date of birth, address, and SSN):  * To verify an individual's address, provide one of these documents: ** Unexpired state-issued driver's license or identification card ** US Military Identification Card ** Utility bill ** Bank statement ** Current rental or lease agreement ** Mortgage statement * To verify an individual's name and date of birth, provide one of these documents: ** Driver's license or state-issued identification card ** Passport * To verify an individual's Social Security Number, provide one of these documents: ** Social Security card ** Recent W-2 or 1099 showing nine-digit SSN, full name, and address. ** ITIN card or document showing ITIN approval  | OFAC   + `FAILURE` | Appears on an Office of Foreign Assets Control (OFAC) list. | This outcome requires a manual review by Marqeta to determine the next appropriate step. Contact your Marqeta representative.  | RiskIssue   + `FAILURE` | Appears on a non-OFAC screening list, bankruptcy, or alert list, or has an insufficient record. | This outcome requires a manual review by Marqeta to determine the next appropriate step. Contact your Marqeta representative.  //| SSNFail   + `FAILURE` //| Social Security Number (SSN) appears on Network Alert List, is of a deceased person, or was issued before the individual's date of birth. //| This outcome requires a manual review by Marqeta to determine the next appropriate step. //Contact your Marqeta representative. //Code removed per https://marqeta.atlassian.net/browse/ID-3574, commenting out in case we ever add it back.  | SSNIssue   + `PENDING` | Missing, invalid, or mismatched SSN. | * Social Security card * Recent W-2 or 1099 showing nine-digit SSN, full name, and address. * ITIN card or document showing ITIN approval  | warmaddress   + `FAILURE` | Address is a PO box or other post office address, virtual address, UPS store, mail forward, or mail drop. Such addresses are not valid for KYC verification. | One of the following documents. Document must show the full name and valid street address:  * Unexpired state-issued driver's license or identification card * US Military Identification Card * Utility bill * Bank statement * Current rental or lease agreement * Mortgage statement |===

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: mqAppAndAccessToken
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\KYCVerificationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$business_token = 'business_token_example'; // string | The unique identifier of the business resource for which you want to retrieve KYC verification results.
$count = 5; // int | The number of resources to retrieve.
$start_index = 0; // int | The sort order index of the first resource in the returned array.
$fields = 'fields_example'; // string | Comma-delimited list of fields to return (`field_1,field_2`, and so on). Leave blank to return all fields.
$sort_by = '-createdTime'; // string | Field on which to sort. Use any field in the resource model, or one of the system fields `lastModifiedTime` or `createdTime`. Prefix the field name with a hyphen (`-`) to sort in descending order. Omit the hyphen to sort in ascending order.

try {
    $result = $apiInstance->getKycBusinessBusinesstoken($business_token, $count, $start_index, $fields, $sort_by);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling KYCVerificationApi->getKycBusinessBusinesstoken: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **business_token** | **string**| The unique identifier of the business resource for which you want to retrieve KYC verification results. |
 **count** | **int**| The number of resources to retrieve. | [optional] [default to 5]
 **start_index** | **int**| The sort order index of the first resource in the returned array. | [optional] [default to 0]
 **fields** | **string**| Comma-delimited list of fields to return (&#x60;field_1,field_2&#x60;, and so on). Leave blank to return all fields. | [optional]
 **sort_by** | **string**| Field on which to sort. Use any field in the resource model, or one of the system fields &#x60;lastModifiedTime&#x60; or &#x60;createdTime&#x60;. Prefix the field name with a hyphen (&#x60;-&#x60;) to sort in descending order. Omit the hyphen to sort in ascending order. | [optional] [default to &#39;-createdTime&#39;]

### Return type

[**\OpenAPI\Client\Model\KYCListResponse**](../Model/KYCListResponse.md)

### Authorization

[mqAppAndAccessToken](../../README.md#mqAppAndAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getKycToken()`

```php
getKycToken($token): \OpenAPI\Client\Model\KycResponse
```

Retrieve KYC result

Use this endpoint to retrieve a specific KYC result.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: mqAppAndAccessToken
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\KYCVerificationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$token = 'token_example'; // string | Unique identifier of the KYC verification for which you want to retrieve the result.

try {
    $result = $apiInstance->getKycToken($token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling KYCVerificationApi->getKycToken: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **token** | **string**| Unique identifier of the KYC verification for which you want to retrieve the result. |

### Return type

[**\OpenAPI\Client\Model\KycResponse**](../Model/KycResponse.md)

### Authorization

[mqAppAndAccessToken](../../README.md#mqAppAndAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getKycUserUsertoken()`

```php
getKycUserUsertoken($user_token, $count, $start_index, $fields, $sort_by): \OpenAPI\Client\Model\KYCListResponse
```

List KYC results for a user

Use this endpoint to retrieve all KYC results for a user.  This endpoint supports <</core-api/sorting-and-pagination, pagination>>.  === User KYC failure codes  The following table lists KYC failure codes potentially returned in the response when a user does not pass verification. It also includes a list of acceptable documents that your customers can submit to resolve failures.  [cols=\",,2a\"] |=== | Failure Code and State | Description | Accepted Documents  | AddressIssue   + `FAILURE` | Missing, invalid, mismatched, or PO Box address. | One of the following documents. Document must show the full name and address:  * Unexpired state-issued driver's license or identification card * US Military Identification Card * Utility bill * Bank statement * Current rental or lease agreement * Mortgage statement  | DateOfBirthIssue   + `FAILURE` | Invalid or mismatched date of birth. | Unexpired government-issued photo identification that shows name and date of birth:  * Driver's license or state-issued identification card * Passport  | EmailIssue   + `FAILURE` | Invalid, insufficient, mismatched, or other risk signal on provided email address. | Unexpired government-issued photo identification that shows name and date of birth:  * Driver's license or state-issued identification card * US Passport * US Military identification Card * Native American tribal identification card * Government employee identification card * Permanent Resident Alien Card  | NameIssue   + `FAILURE` | Invalid or mismatched name. | Unexpired government-issued photo identification that has name and date of birth:  * Driver's license or state-issued identification card * Passport or US passport card  | NoRecordFound   + `FAILURE` | No records were found for this individual. | As no record was found for this individual, supporting documentation must be provided for each attribute (name, date of birth, address, and SSN):  * To verify an individual's address, provide one of these documents: ** Unexpired state-issued driver's license or identification card ** US Military Identification Card ** Utility bill ** Bank statement ** Current rental or lease agreement ** Mortgage statement * To verify an individual's name and date of birth, provide one of these documents: ** Driver's license or state-issued identification card ** Passport * To verify an individual's Social Security Number, provide one of these documents: ** Social Security card ** Recent W-2 or 1099 showing nine-digit SSN, full name, and address. ** ITIN card or document showing ITIN approval  | OFAC   + `FAILURE` | Appears on an Office of Foreign Assets Control (OFAC) list. | This outcome requires a manual review by Marqeta to determine the next appropriate step. Contact your Marqeta representative.  | PhoneIssue   + `FAILURE` | Invalid, insufficient, mismatched, or other risk signal on provided phone number. | Unexpired government-issued photo identification that shows name and date of birth:  * Driver's license or state-issued identification card * US Passport * US Military identification Card * Native American tribal identification card * Government employee identification card * Permanent Resident Alien Card  | RiskIssue   + `FAILURE` | Appears on a non-OFAC screening list, bankruptcy, or alert list, or has an insufficient record. | This outcome requires a manual review by Marqeta to determine the next appropriate step. Contact your Marqeta representative.  //| SSNFail   + //`FAILURE` //| Social Security Number (SSN) appears on Network Alert List, is of a deceased person, or was issued before the individual's date of birth. //| This outcome requires a manual review by Marqeta to determine the next appropriate step. //Contact your Marqeta representative. //Code removed per https://marqeta.atlassian.net/browse/ID-3574, commenting out in case we ever add it back.  | SSNIssue   + `FAILURE` | Missing, invalid, or mismatched SSN. | * Social Security card * Recent W-2 or 1099 showing nine-digit SSN, full name, and address. * ITIN card or document showing ITIN approval  | warmaddress   + `FAILURE` | Address is a PO box or other post office address, virtual address, UPS store, mail forward, or mail drop. Such addresses are not valid for KYC verification. | One of the following documents. Document must show the full name and valid street address:  * Unexpired state-issued driver's license or identification card * US Military Identification Card * Utility bill * Bank statement * Current rental or lease agreement * Mortgage statement |===

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: mqAppAndAccessToken
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\KYCVerificationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$user_token = 'user_token_example'; // string | Unique identifier of the user resource for which you want to retrieve KYC verification results.
$count = 5; // int | Number of resources to retrieve.
$start_index = 0; // int | Sort order index of the first resource in the returned array.
$fields = 'fields_example'; // string | Comma-delimited list of fields to return (`field_1,field_2`, and so on). Leave blank to return all fields.
$sort_by = '-createdTime'; // string | Field on which to sort. Use any field in the resource model, or one of the system fields `lastModifiedTime` or `createdTime`. Prefix the field name with a hyphen (`-`) to sort in descending order. Omit the hyphen to sort in ascending order.

try {
    $result = $apiInstance->getKycUserUsertoken($user_token, $count, $start_index, $fields, $sort_by);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling KYCVerificationApi->getKycUserUsertoken: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **user_token** | **string**| Unique identifier of the user resource for which you want to retrieve KYC verification results. |
 **count** | **int**| Number of resources to retrieve. | [optional] [default to 5]
 **start_index** | **int**| Sort order index of the first resource in the returned array. | [optional] [default to 0]
 **fields** | **string**| Comma-delimited list of fields to return (&#x60;field_1,field_2&#x60;, and so on). Leave blank to return all fields. | [optional]
 **sort_by** | **string**| Field on which to sort. Use any field in the resource model, or one of the system fields &#x60;lastModifiedTime&#x60; or &#x60;createdTime&#x60;. Prefix the field name with a hyphen (&#x60;-&#x60;) to sort in descending order. Omit the hyphen to sort in ascending order. | [optional] [default to &#39;-createdTime&#39;]

### Return type

[**\OpenAPI\Client\Model\KYCListResponse**](../Model/KYCListResponse.md)

### Authorization

[mqAppAndAccessToken](../../README.md#mqAppAndAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postKyc()`

```php
postKyc($kyc_request): \OpenAPI\Client\Model\KycResponse
```

Perform KYC verification

Use this endpoint to verify the identity of an account holder in the United States, either a user or a business. You can perform KYC verification on an account holder, provided the following are true:  * The KYC status of the account holder is `UNVERIFIED` or `LIMITED` * The account holder has not been submitted for KYC verification twice  === Required fields  In order to perform KYC verification, the user or business resource on which you perform the check must have the following fields configured with valid values:  [cols=\"1a,1a\"] |=== | User Fields Required for KYC | Business Fields Required for KYC  | * `first_name` (legal first name only, no prefixes) * `last_name` (legal last name only, no suffixes) * `address1` (cannot be a PO Box) * `city` * `state` * `postal_code` * `country` * `birth_date` * `ssn` (nine digits, no delimiters) * `email` (required in some cases) * `phone` (required in some cases)  | * `business_name_legal` (128 char max) * `business_name_dba` (\"Doing Business As\" or fictitious business name; enter the legal business name in this field if your business does not use a fictitious business name) * `office_location` (cannot be a PO Box; `state` field must use a <<valid_state_provincial_and_territorial_abbreviations, valid two-letter state, provincial, or territorial abbreviation>>) * `identifications` (nine digits, no delimiters) * `incorporation.incorporation_type` * `incorporation.state_of_incorporation` * `date_established` * `proprietor_or_officer` * `beneficial_owner` (maximum of four beneficial owners) * `proprietor_is_beneficial_owner` (required if the business proprietor or officer is also a beneficial owner) * `attestation_consent` * `attester_name` * `attestation_date` |===  ==== Valid state, provincial, and territorial abbreviations The following list includes all valid two-letter abbreviations for US states, territories, and military (APO/FPO/DPO) addresses. It also includes abbreviations for Canadian provinces and territories. State, provincial, and territorial abbreviations are case sensitive, and must be in uppercase as they appear in this list:  * `AL`: Alabama * `AK`: Alaska * `AB`: Alberta * `AS`: American Samoa * `AZ`: Arizona * `AR`: Arkansas * `AE`: Armed Forces * `AA`: Armed Forces Americas * `AP`: Armed Forces Pacific * `BC`: British Columbia * `CA`: California * `CO`: Colorado * `CT`: Connecticut * `DE`: Delaware * `DC`: District of Columbia * `FL`: Florida * `GA`: Georgia * `GU`: Guam * `HI`: Hawaii * `ID`: Idaho * `IL`: Illinois * `IN`: Indiana * `IA`: Iowa * `KS`: Kansas * `KY`: Kentucky * `LA`: Louisiana * `ME`: Maine * `MB`: Manitoba * `MD`: Maryland * `MA`: Massachusetts * `MI`: Michigan * `MN`: Minnesota * `MS`: Mississippi * `MO`: Missouri * `MT`: Montana * `NE`: Nebraska * `NV`: Nevada * `NB`: New Brunswick * `NH`: New Hampshire * `NJ`: New Jersey * `NM`: New Mexico * `NY`: New York * `NF`: Newfoundland * `NC`: North Carolina * `ND`: North Dakota * `NT`: Northwest Territories * `NS`: Nova Scotia * `NU`: Nunavut * `OH`: Ohio * `OK`: Oklahoma * `ON`: Ontario * `OR`: Oregon * `PA`: Pennsylvania * `PE`: Prince Edward Island * `PR`: Puerto Rico * `QC`: Quebec * `RI`: Rhode Island * `SK`: Saskatchewan * `SC`: South Carolina * `SD`: South Dakota * `TN`: Tennessee * `TX`: Texas * `UT`: Utah * `VT`: Vermont * `VI`: Virgin Islands * `VA`: Virginia * `WA`: Washington * `WV`: West Virginia * `WI`: Wisconsin * `WY`: Wyoming * `YT`: Yukon Territory

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: mqAppAndAccessToken
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\KYCVerificationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$kyc_request = {"business_token":"my_biz01","token":"my_bizkyc01"}; // \OpenAPI\Client\Model\KycRequest

try {
    $result = $apiInstance->postKyc($kyc_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling KYCVerificationApi->postKyc: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **kyc_request** | [**\OpenAPI\Client\Model\KycRequest**](../Model/KycRequest.md)|  | [optional]

### Return type

[**\OpenAPI\Client\Model\KycResponse**](../Model/KycResponse.md)

### Authorization

[mqAppAndAccessToken](../../README.md#mqAppAndAccessToken)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
