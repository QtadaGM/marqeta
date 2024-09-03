# OpenAPIClient-php

Marqeta's Core API endpoints, conveniently annotated to enable code generation (including SDKs), test cases, and documentation. Currently in beta.


## Installation & Usage

### Requirements

PHP 7.3 and later.
Should also work with PHP 8.0 but has not been tested.

### Composer

To install the bindings via [Composer](https://getcomposer.org/), add the following to `composer.json`:

```json
{
  "repositories": [
    {
      "type": "vcs",
      "url": "https://github.com/GIT_USER_ID/GIT_REPO_ID.git"
    }
  ],
  "require": {
    "GIT_USER_ID/GIT_REPO_ID": "*@dev"
  }
}
```

Then run `composer install`

### Manual Installation

Download the files and include `autoload.php`:

```php
<?php
require_once('/path/to/OpenAPIClient-php/vendor/autoload.php');
```

## Getting Started

Please follow the [installation procedure](#installation--usage) and then run the following:

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



// Configure HTTP basic authorization: mqAppAndAccessToken
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\AcceptedCountriesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$count = 5; // int | Number of accepted countries objects to retrieve.
$start_index = 0; // int | Sort order index of the first resource in the returned array.
$name = 'name_example'; // string | Name of the accepted countries object.
$whitelist = True; // bool | Specifies if the accepted countries object is an allow list.
$search_type = 'search_type_example'; // string | Specifies the type of search you want to perform.
$fields = 'fields_example'; // string | Comma-delimited list of fields to return (`field_1,field_2`, and so on).  Leave blank to return all fields.
$sort_by = '-lastModifiedTime'; // string | Field on which to sort.  Use any field in the resource model, or one of the system fields `lastModifiedTime` or `createdTime`.  Prefix the field name with a hyphen (`-`) to sort in descending order.  Omit the hyphen to sort in ascending order.

try {
    $result = $apiInstance->getAcceptedcountries($count, $start_index, $name, $whitelist, $search_type, $fields, $sort_by);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AcceptedCountriesApi->getAcceptedcountries: ', $e->getMessage(), PHP_EOL;
}

```

## API Endpoints

All URIs are relative to */v3*

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*AcceptedCountriesApi* | [**getAcceptedcountries**](docs/Api/AcceptedCountriesApi.md#getacceptedcountries) | **GET** /acceptedcountries | List accepted countries objects
*AcceptedCountriesApi* | [**getAcceptedcountriesToken**](docs/Api/AcceptedCountriesApi.md#getacceptedcountriestoken) | **GET** /acceptedcountries/{token} | Retrieve an accepted countries object
*AccountApi* | [**getPeriodicFeeSchedules**](docs/Api/AccountApi.md#getperiodicfeeschedules) | **GET** /accounts/{account_token}/periodicfeeschedules | Get all active and upcoming periodic fee schedules of an account
*AccountApi* | [**retrieveBillingCycleForAccount**](docs/Api/AccountApi.md#retrievebillingcycleforaccount) | **GET** /accounts/{account_token}/billingcycle | Get billing cycle by account token
*AccountCardsApi* | [**createCardForAccount**](docs/Api/AccountCardsApi.md#createcardforaccount) | **POST** /accounts/{account_token}/cards | Create account card
*AccountCardsApi* | [**getCardByAccount**](docs/Api/AccountCardsApi.md#getcardbyaccount) | **GET** /accounts/{account_token}/cards/{card_token} | Retrieve account card
*AccountCardsApi* | [**getCardsByAccount**](docs/Api/AccountCardsApi.md#getcardsbyaccount) | **GET** /accounts/{account_token}/cards | List account cards
*AccountDocumentsApi* | [**getAccountDocuments**](docs/Api/AccountDocumentsApi.md#getaccountdocuments) | **GET** /accounts/{account_token}/documents | List documents
*AccountDocumentsApi* | [**getDocumentByAccountAndType**](docs/Api/AccountDocumentsApi.md#getdocumentbyaccountandtype) | **GET** /accounts/{account_token}/documents/{document_type} | Retrieve document
*AccountDocumentsApi* | [**getDocumentHistoryByAccountAndType**](docs/Api/AccountDocumentsApi.md#getdocumenthistorybyaccountandtype) | **GET** /accounts/{account_token}/documents/{document_type}/history | Retrieve document history
*AccountHolderFundingSourcesApi* | [**getFundingsourcesAchFundingsourcetoken**](docs/Api/AccountHolderFundingSourcesApi.md#getfundingsourcesachfundingsourcetoken) | **GET** /fundingsources/ach/{funding_source_token} | Retrieve ACH source
*AccountHolderFundingSourcesApi* | [**getFundingsourcesAchFundingsourcetokenVerificationamounts**](docs/Api/AccountHolderFundingSourcesApi.md#getfundingsourcesachfundingsourcetokenverificationamounts) | **GET** /fundingsources/ach/{funding_source_token}/verificationamounts | Retrieve ACH verification amounts
*AccountHolderFundingSourcesApi* | [**getFundingsourcesBusinessBusinesstoken**](docs/Api/AccountHolderFundingSourcesApi.md#getfundingsourcesbusinessbusinesstoken) | **GET** /fundingsources/business/{business_token} | List sources for business
*AccountHolderFundingSourcesApi* | [**getFundingsourcesPaymentcardFundingsourcetoken**](docs/Api/AccountHolderFundingSourcesApi.md#getfundingsourcespaymentcardfundingsourcetoken) | **GET** /fundingsources/paymentcard/{funding_source_token} | Retrieve payment card source
*AccountHolderFundingSourcesApi* | [**getFundingsourcesUserUsertoken**](docs/Api/AccountHolderFundingSourcesApi.md#getfundingsourcesuserusertoken) | **GET** /fundingsources/user/{user_token} | List sources for user
*AccountHolderFundingSourcesApi* | [**postFundingsourcesAch**](docs/Api/AccountHolderFundingSourcesApi.md#postfundingsourcesach) | **POST** /fundingsources/ach | Create ACH source
*AccountHolderFundingSourcesApi* | [**postFundingsourcesAchPartner**](docs/Api/AccountHolderFundingSourcesApi.md#postfundingsourcesachpartner) | **POST** /fundingsources/ach/partner | Create ACH source via a partner integration
*AccountHolderFundingSourcesApi* | [**postFundingsourcesPaymentcard**](docs/Api/AccountHolderFundingSourcesApi.md#postfundingsourcespaymentcard) | **POST** /fundingsources/paymentcard | Create payment card source
*AccountHolderFundingSourcesApi* | [**putFundingsourcesAchFundingsourcetoken**](docs/Api/AccountHolderFundingSourcesApi.md#putfundingsourcesachfundingsourcetoken) | **PUT** /fundingsources/ach/{funding_source_token} | Verify or update ACH source
*AccountHolderFundingSourcesApi* | [**putFundingsourcesFundingsourcetoken**](docs/Api/AccountHolderFundingSourcesApi.md#putfundingsourcesfundingsourcetoken) | **PUT** /fundingsources/paymentcard/{funding_source_token} | Update payment card source
*AccountHolderFundingSourcesApi* | [**putFundingsourcesFundingsourcetokenDefault**](docs/Api/AccountHolderFundingSourcesApi.md#putfundingsourcesfundingsourcetokendefault) | **PUT** /fundingsources/{funding_source_token}/default | Set default source
*AccountHolderGroupsApi* | [**getAccountholdergroups**](docs/Api/AccountHolderGroupsApi.md#getaccountholdergroups) | **GET** /accountholdergroups | List account holder groups
*AccountHolderGroupsApi* | [**getAccountholdergroupsToken**](docs/Api/AccountHolderGroupsApi.md#getaccountholdergroupstoken) | **GET** /accountholdergroups/{token} | Retrieve account holder group
*AccountHolderGroupsApi* | [**postAccountholdergroups**](docs/Api/AccountHolderGroupsApi.md#postaccountholdergroups) | **POST** /accountholdergroups | Create account holder group
*AccountHolderGroupsApi* | [**putAccountholdergroupsToken**](docs/Api/AccountHolderGroupsApi.md#putaccountholdergroupstoken) | **PUT** /accountholdergroups/{token} | Update account holder group
*AccountRewardsApi* | [**createReward**](docs/Api/AccountRewardsApi.md#createreward) | **POST** /accounts/{account_token}/rewards | Create account reward
*AccountTransitionsApi* | [**getAccountTransition**](docs/Api/AccountTransitionsApi.md#getaccounttransition) | **GET** /accounts/{account_token}/accounttransitions/{token} | Retrieve account transition
*AccountTransitionsApi* | [**listAccountTransitions**](docs/Api/AccountTransitionsApi.md#listaccounttransitions) | **GET** /accounts/{account_token}/accounttransitions | List account transitions
*AccountTransitionsApi* | [**resendWebhookEvent**](docs/Api/AccountTransitionsApi.md#resendwebhookevent) | **POST** /webhooks/{event_type}/{resource_token} | Resend credit event notification
*AccountTransitionsApi* | [**transitionAccount**](docs/Api/AccountTransitionsApi.md#transitionaccount) | **POST** /accounts/{account_token}/accounttransitions | Transition account status
*AddressesApi* | [**getFundingsourcesAddressesBusinessBusinesstoken**](docs/Api/AddressesApi.md#getfundingsourcesaddressesbusinessbusinesstoken) | **GET** /fundingsources/addresses/business/{business_token} | List business addresses
*AddressesApi* | [**getFundingsourcesAddressesFundingsourceaddresstoken**](docs/Api/AddressesApi.md#getfundingsourcesaddressesfundingsourceaddresstoken) | **GET** /fundingsources/addresses/{funding_source_address_token} | Retrieve address
*AddressesApi* | [**getFundingsourcesAddressesUserUsertoken**](docs/Api/AddressesApi.md#getfundingsourcesaddressesuserusertoken) | **GET** /fundingsources/addresses/user/{user_token} | Lists all addresses for a user
*AddressesApi* | [**postFundingsourcesAddresses**](docs/Api/AddressesApi.md#postfundingsourcesaddresses) | **POST** /fundingsources/addresses | Create address
*AddressesApi* | [**putFundingsourcesAddressesFundingsourceaddresstoken**](docs/Api/AddressesApi.md#putfundingsourcesaddressesfundingsourceaddresstoken) | **PUT** /fundingsources/addresses/{funding_source_address_token} | Update address
*AdjustmentsApi* | [**createAdjustmentForAccount**](docs/Api/AdjustmentsApi.md#createadjustmentforaccount) | **POST** /accounts/{account_token}/adjustments | Create account adjustment
*AdjustmentsApi* | [**getAdjustmentsByAccount**](docs/Api/AdjustmentsApi.md#getadjustmentsbyaccount) | **GET** /accounts/{account_token}/adjustments | List account adjustments
*AdjustmentsApi* | [**retrieveAdjustment**](docs/Api/AdjustmentsApi.md#retrieveadjustment) | **GET** /accounts/{account_token}/adjustments/{adjustment_token} | Retrieve account adjustment
*AdminApi* | [**replayFailedStatements**](docs/Api/AdminApi.md#replayfailedstatements) | **POST** /admin/replayfailedstatements | Replays all failed statement from statement error processing table
*AdminApi* | [**replayFailedStatementsByShortCode**](docs/Api/AdminApi.md#replayfailedstatementsbyshortcode) | **POST** /admin/replayfailedstatements/{short_code} | Replays all failed statements by short code from statement error processing table
*AdminApi* | [**replaySingleFailedStatement**](docs/Api/AdminApi.md#replaysinglefailedstatement) | **POST** /admin/{short_code}/replayfailedstatement/{account_token} | Replays single failed statement by short code  and account token from statement error processing table
*AdminApi* | [**retryAchPayment**](docs/Api/AdminApi.md#retryachpayment) | **POST** /admin/{short_code}/retryachpayments | Create a new ACHO ACH transfer
*AdminApi* | [**scheduleStatements**](docs/Api/AdminApi.md#schedulestatements) | **POST** /admin/scheduleStatements | Schedules statements for applicable accounts
*ApplicationsApi* | [**creditApplicationsPost**](docs/Api/ApplicationsApi.md#creditapplicationspost) | **POST** /credit/applications | Create application
*ApplicationsApi* | [**getFileByType**](docs/Api/ApplicationsApi.md#getfilebytype) | **GET** /credit/applications/files/{type} | Retrieve file on a bundle or application
*ApplicationsApi* | [**pageApplicationTransitions**](docs/Api/ApplicationsApi.md#pageapplicationtransitions) | **GET** /credit/applications/{token}/transitions | List application transitions
*ApplicationsApi* | [**retrieveApplication**](docs/Api/ApplicationsApi.md#retrieveapplication) | **GET** /credit/applications/{token} | Retrieve application
*ApplicationsApi* | [**retrieveFiles**](docs/Api/ApplicationsApi.md#retrievefiles) | **GET** /credit/applications/files | List files on a bundle or application
*ApplicationsApi* | [**transitionApplication**](docs/Api/ApplicationsApi.md#transitionapplication) | **POST** /credit/applications/{token}/transitions | Transition application state
*AuthorizationControlsApi* | [**getAuthcontrols**](docs/Api/AuthorizationControlsApi.md#getauthcontrols) | **GET** /authcontrols | List authorization controls
*AuthorizationControlsApi* | [**getAuthcontrolsExemptmids**](docs/Api/AuthorizationControlsApi.md#getauthcontrolsexemptmids) | **GET** /authcontrols/exemptmids | List merchant identifier (MID) exemptions
*AuthorizationControlsApi* | [**getAuthcontrolsExemptmidsToken**](docs/Api/AuthorizationControlsApi.md#getauthcontrolsexemptmidstoken) | **GET** /authcontrols/exemptmids/{token} | Retrieve a merchant identifier (MID) exemption
*AuthorizationControlsApi* | [**getAuthcontrolsToken**](docs/Api/AuthorizationControlsApi.md#getauthcontrolstoken) | **GET** /authcontrols/{token} | Retrieve authorization control
*AuthorizationControlsApi* | [**postAuthcontrols**](docs/Api/AuthorizationControlsApi.md#postauthcontrols) | **POST** /authcontrols | Create authorization control
*AuthorizationControlsApi* | [**postAuthcontrolsExemptmids**](docs/Api/AuthorizationControlsApi.md#postauthcontrolsexemptmids) | **POST** /authcontrols/exemptmids | Create a merchant identifier (MID) exemption
*AuthorizationControlsApi* | [**putAuthcontrolsExemptmidsToken**](docs/Api/AuthorizationControlsApi.md#putauthcontrolsexemptmidstoken) | **PUT** /authcontrols/exemptmids/{token} | Update a merchant identifier (MID) exemption
*AuthorizationControlsApi* | [**putAuthcontrolsToken**](docs/Api/AuthorizationControlsApi.md#putauthcontrolstoken) | **PUT** /authcontrols/{token} | Update authorization control
*AutoReloadApi* | [**getAutoreloads**](docs/Api/AutoReloadApi.md#getautoreloads) | **GET** /autoreloads | List auto reloads
*AutoReloadApi* | [**getAutoreloadsToken**](docs/Api/AutoReloadApi.md#getautoreloadstoken) | **GET** /autoreloads/{token} | Retrieve auto reload
*AutoReloadApi* | [**postAutoreloads**](docs/Api/AutoReloadApi.md#postautoreloads) | **POST** /autoreloads | Create auto reload
*AutoReloadApi* | [**putAutoreloadsToken**](docs/Api/AutoReloadApi.md#putautoreloadstoken) | **PUT** /autoreloads/{token} | Update auto reload
*BalanceRefundsApi* | [**createBalanceRefund**](docs/Api/BalanceRefundsApi.md#createbalancerefund) | **POST** /accounts/{account_token}/creditbalancerefunds | Create balance refund
*BalancesApi* | [**getBalancesToken**](docs/Api/BalancesApi.md#getbalancestoken) | **GET** /balances/{token} | Retrieve GPA balances
*BulkCardOrdersApi* | [**getBulkissuances**](docs/Api/BulkCardOrdersApi.md#getbulkissuances) | **GET** /bulkissuances | List bulk card orders
*BulkCardOrdersApi* | [**getBulkissuancesToken**](docs/Api/BulkCardOrdersApi.md#getbulkissuancestoken) | **GET** /bulkissuances/{token} | Retrieve bulk card order
*BulkCardOrdersApi* | [**postBulkissuances**](docs/Api/BulkCardOrdersApi.md#postbulkissuances) | **POST** /bulkissuances | Create bulk card order
*BundlesBetaApi* | [**cloneBundle**](docs/Api/BundlesBetaApi.md#clonebundle) | **POST** /bundles/{token}/clone | Clone bundle
*BundlesBetaApi* | [**createBundle**](docs/Api/BundlesBetaApi.md#createbundle) | **POST** /bundles | Create bundle
*BundlesBetaApi* | [**listBundles**](docs/Api/BundlesBetaApi.md#listbundles) | **GET** /bundles | List bundles
*BundlesBetaApi* | [**listRelatedBundles**](docs/Api/BundlesBetaApi.md#listrelatedbundles) | **GET** /bundles/{token}/lineage | List related bundles
*BundlesBetaApi* | [**promoteBundle**](docs/Api/BundlesBetaApi.md#promotebundle) | **PUT** /bundles/{token}/promote | Promote bundle
*BundlesBetaApi* | [**retrieveBundle**](docs/Api/BundlesBetaApi.md#retrievebundle) | **GET** /bundles/{token} | Retrieve bundle
*BundlesBetaApi* | [**transitionBundle**](docs/Api/BundlesBetaApi.md#transitionbundle) | **POST** /bundles/{token}/transitions | Transition a bundle
*BundlesBetaApi* | [**updateBundle**](docs/Api/BundlesBetaApi.md#updatebundle) | **PUT** /bundles/{token} | Update bundle
*BusinessTransitionsApi* | [**getBusinesstransitionsBusinessBusinesstoken**](docs/Api/BusinessTransitionsApi.md#getbusinesstransitionsbusinessbusinesstoken) | **GET** /businesstransitions/business/{business_token} | List business transitions
*BusinessTransitionsApi* | [**getBusinesstransitionsToken**](docs/Api/BusinessTransitionsApi.md#getbusinesstransitionstoken) | **GET** /businesstransitions/{token} | Retrieve business transition
*BusinessTransitionsApi* | [**postBusinesstransitions**](docs/Api/BusinessTransitionsApi.md#postbusinesstransitions) | **POST** /businesstransitions | Create business transition
*BusinessesApi* | [**getBusinesses**](docs/Api/BusinessesApi.md#getbusinesses) | **GET** /businesses | List businesses
*BusinessesApi* | [**getBusinessesParenttokenChildren**](docs/Api/BusinessesApi.md#getbusinessesparenttokenchildren) | **GET** /businesses/{parent_token}/children | List business children
*BusinessesApi* | [**getBusinessesToken**](docs/Api/BusinessesApi.md#getbusinessestoken) | **GET** /businesses/{token} | Retrieve business
*BusinessesApi* | [**getBusinessesTokenSsn**](docs/Api/BusinessesApi.md#getbusinessestokenssn) | **GET** /businesses/{token}/ssn | Retrieve business identification number
*BusinessesApi* | [**postBusinesses**](docs/Api/BusinessesApi.md#postbusinesses) | **POST** /businesses | Create business
*BusinessesApi* | [**postBusinessesLookup**](docs/Api/BusinessesApi.md#postbusinesseslookup) | **POST** /businesses/lookup | Search businesses
*BusinessesApi* | [**putBusinessesToken**](docs/Api/BusinessesApi.md#putbusinessestoken) | **PUT** /businesses/{token} | Update business
*CardGroupApi* | [**createCardGroup**](docs/Api/CardGroupApi.md#createcardgroup) | **POST** /cardgroups | Create Card Group
*CardGroupApi* | [**listCardGroups**](docs/Api/CardGroupApi.md#listcardgroups) | **GET** /cardgroups | List Card Groups
*CardGroupApi* | [**retrieveCardGroup**](docs/Api/CardGroupApi.md#retrievecardgroup) | **GET** /cardgroups/{token} | Retrieve Card Group
*CardProductsApi* | [**getCardproducts**](docs/Api/CardProductsApi.md#getcardproducts) | **GET** /cardproducts | List card products
*CardProductsApi* | [**getCardproductsToken**](docs/Api/CardProductsApi.md#getcardproductstoken) | **GET** /cardproducts/{token} | Retrieve card product
*CardProductsApi* | [**postCardproducts**](docs/Api/CardProductsApi.md#postcardproducts) | **POST** /cardproducts | Create card product
*CardProductsApi* | [**putCardproductsToken**](docs/Api/CardProductsApi.md#putcardproductstoken) | **PUT** /cardproducts/{token} | Update card product
*CardTransitionsApi* | [**getCardtransitionsCardToken**](docs/Api/CardTransitionsApi.md#getcardtransitionscardtoken) | **GET** /cardtransitions/card/{token} | List transitions for card
*CardTransitionsApi* | [**getCardtransitionsToken**](docs/Api/CardTransitionsApi.md#getcardtransitionstoken) | **GET** /cardtransitions/{token} | Retrieve card transition
*CardTransitionsApi* | [**postCardtransitions**](docs/Api/CardTransitionsApi.md#postcardtransitions) | **POST** /cardtransitions | Create card transition
*CardsApi* | [**getCards**](docs/Api/CardsApi.md#getcards) | **GET** /cards | List cards by last 4 digits of PAN
*CardsApi* | [**getCardsBarcodeBarcode**](docs/Api/CardsApi.md#getcardsbarcodebarcode) | **GET** /cards/barcode/{barcode} | Retrieve card by barcode
*CardsApi* | [**getCardsToken**](docs/Api/CardsApi.md#getcardstoken) | **GET** /cards/{token} | Retrieve card
*CardsApi* | [**getCardsTokenShowpan**](docs/Api/CardsApi.md#getcardstokenshowpan) | **GET** /cards/{token}/showpan | Show card PAN
*CardsApi* | [**getCardsUserToken**](docs/Api/CardsApi.md#getcardsusertoken) | **GET** /cards/user/{token} | List cards for user
*CardsApi* | [**postCards**](docs/Api/CardsApi.md#postcards) | **POST** /cards | Create card
*CardsApi* | [**postCardsGetbypan**](docs/Api/CardsApi.md#postcardsgetbypan) | **POST** /cards/getbypan | Retrieve card by PAN
*CardsApi* | [**putCardsToken**](docs/Api/CardsApi.md#putcardstoken) | **PUT** /cards/{token} | Update card
*CommandoModeApi* | [**getCommandomodes**](docs/Api/CommandoModeApi.md#getcommandomodes) | **GET** /commandomodes | List Commando Mode control sets
*CommandoModeApi* | [**getCommandomodesCommandomodetokenTransitions**](docs/Api/CommandoModeApi.md#getcommandomodescommandomodetokentransitions) | **GET** /commandomodes/{commandomode_token}/transitions | List Commando Mode transitions set
*CommandoModeApi* | [**getCommandomodesToken**](docs/Api/CommandoModeApi.md#getcommandomodestoken) | **GET** /commandomodes/{token} | Retrieve Commando Mode control set
*CommandoModeApi* | [**getCommandomodesTransitionsToken**](docs/Api/CommandoModeApi.md#getcommandomodestransitionstoken) | **GET** /commandomodes/transitions/{token} | Retrieve Commando Mode transition
*CreditAccountDisputesApi* | [**createDisputeForAccount**](docs/Api/CreditAccountDisputesApi.md#createdisputeforaccount) | **POST** /accounts/{account_token}/disputes | Create account dispute
*CreditAccountDisputesApi* | [**getDisputesByAccount**](docs/Api/CreditAccountDisputesApi.md#getdisputesbyaccount) | **GET** /accounts/{account_token}/disputes | List account disputes
*CreditAccountDisputesApi* | [**retrieveDispute**](docs/Api/CreditAccountDisputesApi.md#retrievedispute) | **GET** /accounts/{account_token}/disputes/{dispute_token} | Retrieve account dispute
*CreditAccountDisputesApi* | [**transitionDispute**](docs/Api/CreditAccountDisputesApi.md#transitiondispute) | **POST** /accounts/{account_token}/disputes/{dispute_token}/transitions | Update account dispute
*CreditAccountsApi* | [**createCreditAccount**](docs/Api/CreditAccountsApi.md#createcreditaccount) | **POST** /accounts | Create account
*CreditAccountsApi* | [**listAccounts**](docs/Api/CreditAccountsApi.md#listaccounts) | **GET** /accounts | List accounts
*CreditAccountsApi* | [**retrieveAccount**](docs/Api/CreditAccountsApi.md#retrieveaccount) | **GET** /accounts/{account_token} | Retrieve account
*CreditAccountsApi* | [**updateAccount**](docs/Api/CreditAccountsApi.md#updateaccount) | **PUT** /accounts/{account_token} | Update account
*CreditProductsApi* | [**createProduct**](docs/Api/CreditProductsApi.md#createproduct) | **POST** /products | Create credit product
*CreditProductsApi* | [**lineageProducts**](docs/Api/CreditProductsApi.md#lineageproducts) | **GET** /products/{token}/lineage | Retrieve credit product lineage
*CreditProductsApi* | [**listProducts**](docs/Api/CreditProductsApi.md#listproducts) | **GET** /products | List credit products
*CreditProductsApi* | [**retrieveProduct**](docs/Api/CreditProductsApi.md#retrieveproduct) | **GET** /products/{token} | Retrieve credit product
*DefaultApi* | [**feedbackFraudPost**](docs/Api/DefaultApi.md#feedbackfraudpost) | **POST** /feedback/fraud | Creates a fraud feedback
*DelinquencyApi* | [**resendWebhookEvent**](docs/Api/DelinquencyApi.md#resendwebhookevent) | **POST** /webhooks/{event_type}/{resource_token} | Resend credit event notification
*DelinquencyApi* | [**retrieveDelinquencyState**](docs/Api/DelinquencyApi.md#retrievedelinquencystate) | **GET** /accounts/{account_token}/delinquencystate | Retrieve delinquency state
*DelinquencyApi* | [**retrieveDelinquencyTransition**](docs/Api/DelinquencyApi.md#retrievedelinquencytransition) | **GET** /accounts/{account_token}/delinquencystate/transitions/{delinquency_transition_token} | Retrieve delinquency state transition
*DelinquencyApi* | [**retrieveDelinquencyTransitions**](docs/Api/DelinquencyApi.md#retrievedelinquencytransitions) | **GET** /accounts/{account_token}/delinquencystate/transitions | List delinquency state transitions
*DigitalWalletsManagementApi* | [**generateApplePayWPPJWT**](docs/Api/DigitalWalletsManagementApi.md#generateapplepaywppjwt) | **POST** /digitalwallets/wpp/applePayJWT | Create request for Apple Wallet web push provisioning
*DigitalWalletsManagementApi* | [**getDigitalwallettokens**](docs/Api/DigitalWalletsManagementApi.md#getdigitalwallettokens) | **GET** /digitalwallettokens | List digital wallet tokens
*DigitalWalletsManagementApi* | [**getDigitalwallettokensCardCardtoken**](docs/Api/DigitalWalletsManagementApi.md#getdigitalwallettokenscardcardtoken) | **GET** /digitalwallettokens/card/{card_token} | List digital wallet tokens for card
*DigitalWalletsManagementApi* | [**getDigitalwallettokensToken**](docs/Api/DigitalWalletsManagementApi.md#getdigitalwallettokenstoken) | **GET** /digitalwallettokens/{token} | Retrieve digital wallet token
*DigitalWalletsManagementApi* | [**getDigitalwallettokensTokenShowtokenpan**](docs/Api/DigitalWalletsManagementApi.md#getdigitalwallettokenstokenshowtokenpan) | **GET** /digitalwallettokens/{token}/showtokenpan | Retrieve digital wallet token PAN
*DigitalWalletsManagementApi* | [**getDigitalwallettokentransitionsDigitalwallettokenToken**](docs/Api/DigitalWalletsManagementApi.md#getdigitalwallettokentransitionsdigitalwallettokentoken) | **GET** /digitalwallettokentransitions/digitalwallettoken/{token} | List transitions for digital wallet token
*DigitalWalletsManagementApi* | [**getDigitalwallettokentransitionsToken**](docs/Api/DigitalWalletsManagementApi.md#getdigitalwallettokentransitionstoken) | **GET** /digitalwallettokentransitions/{token} | Retrieve digital wallet token transition
*DigitalWalletsManagementApi* | [**postDigitalwalletprovisionrequestsAndroidpay**](docs/Api/DigitalWalletsManagementApi.md#postdigitalwalletprovisionrequestsandroidpay) | **POST** /digitalwalletprovisionrequests/androidpay | Create digital wallet token provisioning request for Google Wallet
*DigitalWalletsManagementApi* | [**postDigitalwalletprovisionrequestsApplepay**](docs/Api/DigitalWalletsManagementApi.md#postdigitalwalletprovisionrequestsapplepay) | **POST** /digitalwalletprovisionrequests/applepay | Create digital wallet token provisioning request for Apple Wallet
*DigitalWalletsManagementApi* | [**postDigitalwalletprovisionrequestsSamsungpay**](docs/Api/DigitalWalletsManagementApi.md#postdigitalwalletprovisionrequestssamsungpay) | **POST** /digitalwalletprovisionrequests/samsungpay | Create digital wallet token provisioning request for Samsung Wallet
*DigitalWalletsManagementApi* | [**postDigitalwalletprovisionrequestsXPay**](docs/Api/DigitalWalletsManagementApi.md#postdigitalwalletprovisionrequestsxpay) | **POST** /digitalwalletprovisionrequests/xpay | Create digital wallet token provisioning request for XPay
*DigitalWalletsManagementApi* | [**postDigitalwallettokentransitions**](docs/Api/DigitalWalletsManagementApi.md#postdigitalwallettokentransitions) | **POST** /digitalwallettokentransitions | Create digital wallet token transition
*DigitalWalletsManagementApi* | [**sendOPCDataToGooglePay**](docs/Api/DigitalWalletsManagementApi.md#sendopcdatatogooglepay) | **POST** /digitalwallets/wpp/googlePayPushProvisioningNotification | Create request for Google Wallet web push provisioning
*DirectDepositAccountsApi* | [**createAccount**](docs/Api/DirectDepositAccountsApi.md#createaccount) | **POST** /depositaccounts | Creates new direct deposit account for cardholder.
*DirectDepositAccountsApi* | [**createTransition**](docs/Api/DirectDepositAccountsApi.md#createtransition) | **POST** /depositaccounts/transitions | Creates new transition for a direct deposit account.
*DirectDepositAccountsApi* | [**getCDDInfo**](docs/Api/DirectDepositAccountsApi.md#getcddinfo) | **GET** /depositaccounts/{token}/cdd | Get direct deposit account transition list for card holder.
*DirectDepositAccountsApi* | [**getDirectDepositAccount**](docs/Api/DirectDepositAccountsApi.md#getdirectdepositaccount) | **GET** /depositaccounts/{token} | Get direct deposit account.
*DirectDepositAccountsApi* | [**getDirectDepositAccountTransition**](docs/Api/DirectDepositAccountsApi.md#getdirectdepositaccounttransition) | **GET** /depositaccounts/transitions/{token} | Get direct deposit account transition.
*DirectDepositAccountsApi* | [**getTransitionList**](docs/Api/DirectDepositAccountsApi.md#gettransitionlist) | **GET** /depositaccounts/{user_token}/transitions | Get direct deposit account transition list for card holder.
*DirectDepositAccountsApi* | [**getUserDirectDepositAccounts**](docs/Api/DirectDepositAccountsApi.md#getuserdirectdepositaccounts) | **GET** /depositaccounts/user/{token} | List all specific direct deposit accounts.
*DirectDepositAccountsApi* | [**getUserForDirectDepositAccount**](docs/Api/DirectDepositAccountsApi.md#getuserfordirectdepositaccount) | **GET** /depositaccounts/account/{account_number}/user | Get User for Plain Text Account Number
*DirectDepositAccountsApi* | [**update**](docs/Api/DirectDepositAccountsApi.md#update) | **PUT** /depositaccounts/{token} | Update direct deposit account.
*DirectDepositAccountsApi* | [**updateCDDInfo**](docs/Api/DirectDepositAccountsApi.md#updatecddinfo) | **PUT** /depositaccounts/{token}/cdd/{cddtoken} | Update CDD answers for Direct Deposit Account
*DirectDepositsApi* | [**getDirectdeposits**](docs/Api/DirectDepositsApi.md#getdirectdeposits) | **GET** /directdeposits | Retrieves a list of all direct deposit records for your program.
*DirectDepositsApi* | [**getDirectdepositsAccountsUserorbusinesstoken**](docs/Api/DirectDepositsApi.md#getdirectdepositsaccountsuserorbusinesstoken) | **GET** /directdeposits/accounts/{user_or_business_token} | Returns an account and routing number which can be used for direct deposit
*DirectDepositsApi* | [**getDirectdepositsToken**](docs/Api/DirectDepositsApi.md#getdirectdepositstoken) | **GET** /directdeposits/{token} | Returns a direct deposit entry
*DirectDepositsApi* | [**getDirectdepositsTransitions**](docs/Api/DirectDepositsApi.md#getdirectdepositstransitions) | **GET** /directdeposits/transitions | Returns a list of direct deposit transitions
*DirectDepositsApi* | [**getDirectdepositsTransitionsToken**](docs/Api/DirectDepositsApi.md#getdirectdepositstransitionstoken) | **GET** /directdeposits/transitions/{token} | Returns a direct deposit transition
*DirectDepositsApi* | [**postDirectdepositsTransitions**](docs/Api/DirectDepositsApi.md#postdirectdepositstransitions) | **POST** /directdeposits/transitions | Creates a direct deposit transition
*DirectDepositsApi* | [**putDirectdepositsAccountsUserorbusinesstoken**](docs/Api/DirectDepositsApi.md#putdirectdepositsaccountsuserorbusinesstoken) | **PUT** /directdeposits/accounts/{user_or_business_token} | Updates a specific direct deposit account
*FeeChargesApi* | [**getFeeChargeToken**](docs/Api/FeeChargesApi.md#getfeechargetoken) | **GET** /feecharges/{token} | Retrieve fee charge
*FeeChargesApi* | [**postFeeCharge**](docs/Api/FeeChargesApi.md#postfeecharge) | **POST** /feecharges | Create fee charge
*FeeRefundsApi* | [**postFeeRefunds**](docs/Api/FeeRefundsApi.md#postfeerefunds) | **POST** /feerefunds | Create fee refund
*FeesApi* | [**getFees**](docs/Api/FeesApi.md#getfees) | **GET** /fees | List fees
*FeesApi* | [**getFeesToken**](docs/Api/FeesApi.md#getfeestoken) | **GET** /fees/{token} | Retrieve fee
*FeesApi* | [**postFees**](docs/Api/FeesApi.md#postfees) | **POST** /fees | Create fee
*FeesApi* | [**putFeesToken**](docs/Api/FeesApi.md#putfeestoken) | **PUT** /fees/{token} | Update fee
*FundingViaACHBetaApi* | [**getBanktransfersAch**](docs/Api/FundingViaACHBetaApi.md#getbanktransfersach) | **GET** /banktransfers/ach | List ACH transfers
*FundingViaACHBetaApi* | [**getBanktransfersAchToken**](docs/Api/FundingViaACHBetaApi.md#getbanktransfersachtoken) | **GET** /banktransfers/ach/{token} | Retrieve ACH transfer
*FundingViaACHBetaApi* | [**getBanktransfersAchTransitions**](docs/Api/FundingViaACHBetaApi.md#getbanktransfersachtransitions) | **GET** /banktransfers/ach/transitions | List ACH transfer transitions
*FundingViaACHBetaApi* | [**postApplyProvisionalCreditToBankTransfer**](docs/Api/FundingViaACHBetaApi.md#postapplyprovisionalcredittobanktransfer) | **POST** /banktransfers/ach/earlyfunds | Apply a provisional credit to ACH transfer
*FundingViaACHBetaApi* | [**postBanktransfersAch**](docs/Api/FundingViaACHBetaApi.md#postbanktransfersach) | **POST** /banktransfers/ach | Create ACH transfer
*FundingViaACHBetaApi* | [**postBanktransfersAchTransitions**](docs/Api/FundingViaACHBetaApi.md#postbanktransfersachtransitions) | **POST** /banktransfers/ach/transitions | Create ACH transfer transition
*GPAOrdersApi* | [**getGpaordersToken**](docs/Api/GPAOrdersApi.md#getgpaorderstoken) | **GET** /gpaorders/{token} | Retrieve GPA order
*GPAOrdersApi* | [**getGpaordersUnloads**](docs/Api/GPAOrdersApi.md#getgpaordersunloads) | **GET** /gpaorders/unloads | List GPA unloads
*GPAOrdersApi* | [**getGpaordersUnloadsUnloadtoken**](docs/Api/GPAOrdersApi.md#getgpaordersunloadsunloadtoken) | **GET** /gpaorders/unloads/{unload_token} | Retrieve GPA unload
*GPAOrdersApi* | [**postGpaorders**](docs/Api/GPAOrdersApi.md#postgpaorders) | **POST** /gpaorders | Create GPA order
*GPAOrdersApi* | [**postGpaordersUnloads**](docs/Api/GPAOrdersApi.md#postgpaordersunloads) | **POST** /gpaorders/unloads | Create GPA unload
*JournalEntriesApi* | [**getAccountJournalEntry**](docs/Api/JournalEntriesApi.md#getaccountjournalentry) | **GET** /accounts/{account_token}/journalentries/{journal_entry_token} | Retrieve account journal entry
*JournalEntriesApi* | [**listAccountJournalEntries**](docs/Api/JournalEntriesApi.md#listaccountjournalentries) | **GET** /accounts/{account_token}/journalentries | List account journal entries
*JournalEntriesApi* | [**resendWebhookEvent**](docs/Api/JournalEntriesApi.md#resendwebhookevent) | **POST** /webhooks/{event_type}/{resource_token} | Resend credit event notification
*KYCVerificationApi* | [**getKycBusinessBusinesstoken**](docs/Api/KYCVerificationApi.md#getkycbusinessbusinesstoken) | **GET** /kyc/business/{business_token} | List KYC results for a business
*KYCVerificationApi* | [**getKycToken**](docs/Api/KYCVerificationApi.md#getkyctoken) | **GET** /kyc/{token} | Retrieve KYC result
*KYCVerificationApi* | [**getKycUserUsertoken**](docs/Api/KYCVerificationApi.md#getkycuserusertoken) | **GET** /kyc/user/{user_token} | List KYC results for a user
*KYCVerificationApi* | [**postKyc**](docs/Api/KYCVerificationApi.md#postkyc) | **POST** /kyc | Perform KYC verification
*LedgerEntriesApi* | [**getAccountLedgerEntry**](docs/Api/LedgerEntriesApi.md#getaccountledgerentry) | **GET** /accounts/{account_token}/ledgerentries/{ledger_entry_token} | Retrieve account ledger entry
*LedgerEntriesApi* | [**listAccountLedgerEntries**](docs/Api/LedgerEntriesApi.md#listaccountledgerentries) | **GET** /accounts/{account_token}/ledgerentries | List account ledger entries
*LedgerEntriesApi* | [**resendWebhookEvent**](docs/Api/LedgerEntriesApi.md#resendwebhookevent) | **POST** /webhooks/{event_type}/{resource_token} | Resend credit event notification
*MCCGroupsApi* | [**getMccgroups**](docs/Api/MCCGroupsApi.md#getmccgroups) | **GET** /mccgroups | List MCC groups
*MCCGroupsApi* | [**getMccgroupsToken**](docs/Api/MCCGroupsApi.md#getmccgroupstoken) | **GET** /mccgroups/{token} | Retrieve MCC group
*MCCGroupsApi* | [**postMccgroups**](docs/Api/MCCGroupsApi.md#postmccgroups) | **POST** /mccgroups | Create MCC group
*MCCGroupsApi* | [**putMccgroupsToken**](docs/Api/MCCGroupsApi.md#putmccgroupstoken) | **PUT** /mccgroups/{token} | Update MCC group
*MerchantGroupsApi* | [**getMerchantGroup**](docs/Api/MerchantGroupsApi.md#getmerchantgroup) | **GET** /merchantgroups/{token} | Retrieve merchant group
*MerchantGroupsApi* | [**getMerchantGroups**](docs/Api/MerchantGroupsApi.md#getmerchantgroups) | **GET** /merchantgroups | List merchant groups
*MerchantGroupsApi* | [**postMerchantGroup**](docs/Api/MerchantGroupsApi.md#postmerchantgroup) | **POST** /merchantgroups | Create merchant group
*MerchantGroupsApi* | [**putMerchantGroupsToken**](docs/Api/MerchantGroupsApi.md#putmerchantgroupstoken) | **PUT** /merchantgroups/{token} | Update merchant group
*PINsApi* | [**postPinsControltoken**](docs/Api/PINsApi.md#postpinscontroltoken) | **POST** /pins/controltoken | Create PIN control token
*PINsApi* | [**putPins**](docs/Api/PINsApi.md#putpins) | **PUT** /pins | Create or update PIN
*PINsApi* | [**revealPins**](docs/Api/PINsApi.md#revealpins) | **POST** /pins/reveal | Reveal PIN
*PaymentSchedulesApi* | [**createPaymentSchedule**](docs/Api/PaymentSchedulesApi.md#createpaymentschedule) | **POST** /accounts/{account_token}/paymentschedules | Create payment schedule
*PaymentSchedulesApi* | [**createPaymentScheduleTransition**](docs/Api/PaymentSchedulesApi.md#createpaymentscheduletransition) | **POST** /accounts/{account_token}/paymentschedules/{payment_schedule_token}/transitions | Create payment schedule transition
*PaymentSchedulesApi* | [**retrievePaymentSchedule**](docs/Api/PaymentSchedulesApi.md#retrievepaymentschedule) | **GET** /accounts/{account_token}/paymentschedules/{payment_schedule_token} | Retrieve payment schedule
*PaymentSchedulesApi* | [**retrievePaymentScheduleTransition**](docs/Api/PaymentSchedulesApi.md#retrievepaymentscheduletransition) | **GET** /accounts/{account_token}/paymentschedules/{payment_schedule_token}/transitions/{token} | Retrieve payment schedule transition
*PaymentSchedulesApi* | [**retrievePaymentScheduleTransitions**](docs/Api/PaymentSchedulesApi.md#retrievepaymentscheduletransitions) | **GET** /accounts/{account_token}/paymentschedules/{payment_schedule_token}/transitions | Retrieve payment schedule transitions
*PaymentSchedulesApi* | [**retrievePaymentSchedules**](docs/Api/PaymentSchedulesApi.md#retrievepaymentschedules) | **GET** /accounts/{account_token}/paymentschedules | List payment schedules
*PaymentSourcesApi* | [**createPaymentSource**](docs/Api/PaymentSourcesApi.md#createpaymentsource) | **POST** /paymentsources | Create payment source
*PaymentSourcesApi* | [**listPaymentSources**](docs/Api/PaymentSourcesApi.md#listpaymentsources) | **GET** /paymentsources | List payment sources
*PaymentSourcesApi* | [**retrievePaymentSource**](docs/Api/PaymentSourcesApi.md#retrievepaymentsource) | **GET** /paymentsources/{token} | Retrieve payment source
*PaymentSourcesApi* | [**updatePaymentSource**](docs/Api/PaymentSourcesApi.md#updatepaymentsource) | **PUT** /paymentsources/{token} | Update payment source
*PaymentsApi* | [**createPayment**](docs/Api/PaymentsApi.md#createpayment) | **POST** /accounts/{account_token}/payments | Create account payment
*PaymentsApi* | [**listPayments**](docs/Api/PaymentsApi.md#listpayments) | **GET** /accounts/{account_token}/payments | List account payments
*PaymentsApi* | [**releasePaymentHold**](docs/Api/PaymentsApi.md#releasepaymenthold) | **POST** /accounts/{account_token}/payments/{payment_token}/releasehold | Release payment hold
*PaymentsApi* | [**resendWebhookEvent**](docs/Api/PaymentsApi.md#resendwebhookevent) | **POST** /webhooks/{event_type}/{resource_token} | Resend credit event notification
*PaymentsApi* | [**retrievePayment**](docs/Api/PaymentsApi.md#retrievepayment) | **GET** /accounts/{account_token}/payments/{payment_token} | Retrieve account payment
*PaymentsApi* | [**transitionPayment**](docs/Api/PaymentsApi.md#transitionpayment) | **POST** /accounts/{account_token}/payments/{payment_token}/transitions | Transition account payment status
*PeerTransfersApi* | [**getPeertransfersToken**](docs/Api/PeerTransfersApi.md#getpeertransferstoken) | **GET** /peertransfers/{token} | Retrieve peer transfer
*PeerTransfersApi* | [**getPeertransfersUserUserorbusinesstoken**](docs/Api/PeerTransfersApi.md#getpeertransfersuseruserorbusinesstoken) | **GET** /peertransfers/user/{user_or_business_token} | List peer transfers by account holder
*PeerTransfersApi* | [**getPeertransfersUserUserorbusinesstokenRecipient**](docs/Api/PeerTransfersApi.md#getpeertransfersuseruserorbusinesstokenrecipient) | **GET** /peertransfers/user/{user_or_business_token}/recipient | List received peer transfers
*PeerTransfersApi* | [**getPeertransfersUserUserorbusinesstokenSender**](docs/Api/PeerTransfersApi.md#getpeertransfersuseruserorbusinesstokensender) | **GET** /peertransfers/user/{user_or_business_token}/sender | List sent peer transfers
*PeerTransfersApi* | [**postPeertransfers**](docs/Api/PeerTransfersApi.md#postpeertransfers) | **POST** /peertransfers | Create peer transfer
*PingApi* | [**getPing**](docs/Api/PingApi.md#getping) | **GET** /ping | Returns a heartbeat to the consumer
*PingApi* | [**postPing**](docs/Api/PingApi.md#postping) | **POST** /ping | Echo test for sending payload to server
*PoliciesBetaApi* | [**cloneAprPolicy**](docs/Api/PoliciesBetaApi.md#cloneaprpolicy) | **POST** /policies/aprs/{token}/clone | Clone APR policy
*PoliciesBetaApi* | [**cloneDocumentPolicy**](docs/Api/PoliciesBetaApi.md#clonedocumentpolicy) | **POST** /policies/documents/{token}/clone | Clone document policy
*PoliciesBetaApi* | [**cloneFeePolicy**](docs/Api/PoliciesBetaApi.md#clonefeepolicy) | **POST** /policies/fees/{token}/clone | Clone fee policy
*PoliciesBetaApi* | [**cloneProductPolicy**](docs/Api/PoliciesBetaApi.md#cloneproductpolicy) | **POST** /policies/products/{token}/clone | Clone credit product policy
*PoliciesBetaApi* | [**cloneRewardPolicy**](docs/Api/PoliciesBetaApi.md#clonerewardpolicy) | **POST** /policies/rewards/{token}/clone | Clone reward policy
*PoliciesBetaApi* | [**createAprPolicy**](docs/Api/PoliciesBetaApi.md#createaprpolicy) | **POST** /policies/aprs | Create APR policy
*PoliciesBetaApi* | [**createDocumentPolicy**](docs/Api/PoliciesBetaApi.md#createdocumentpolicy) | **POST** /policies/documents | Create document policy
*PoliciesBetaApi* | [**createFeePolicy**](docs/Api/PoliciesBetaApi.md#createfeepolicy) | **POST** /policies/fees | Create fee policy
*PoliciesBetaApi* | [**createProductPolicy**](docs/Api/PoliciesBetaApi.md#createproductpolicy) | **POST** /policies/products | Create credit product policy
*PoliciesBetaApi* | [**createRewardPolicy**](docs/Api/PoliciesBetaApi.md#createrewardpolicy) | **POST** /policies/rewards | Create reward policy
*PoliciesBetaApi* | [**getAprPolicies**](docs/Api/PoliciesBetaApi.md#getaprpolicies) | **GET** /policies/aprs | List APR policies
*PoliciesBetaApi* | [**getAprPolicyByToken**](docs/Api/PoliciesBetaApi.md#getaprpolicybytoken) | **GET** /policies/aprs/{token} | Retrieve APR policy
*PoliciesBetaApi* | [**getAprPolicySchedulesWithToken**](docs/Api/PoliciesBetaApi.md#getaprpolicyscheduleswithtoken) | **GET** /policies/aprs/{token}/schedule | List APR schedules
*PoliciesBetaApi* | [**getFeePolicies**](docs/Api/PoliciesBetaApi.md#getfeepolicies) | **GET** /policies/fees | List fee policies
*PoliciesBetaApi* | [**getFeePolicyByToken**](docs/Api/PoliciesBetaApi.md#getfeepolicybytoken) | **GET** /policies/fees/{token} | Retrieve fee policy
*PoliciesBetaApi* | [**listDocumentPolicies**](docs/Api/PoliciesBetaApi.md#listdocumentpolicies) | **GET** /policies/documents | List document policies
*PoliciesBetaApi* | [**listProductPolicies**](docs/Api/PoliciesBetaApi.md#listproductpolicies) | **GET** /policies/products | List credit product policies
*PoliciesBetaApi* | [**listRewardPolicies**](docs/Api/PoliciesBetaApi.md#listrewardpolicies) | **GET** /policies/rewards | List reward policies
*PoliciesBetaApi* | [**retrieveDocumentPolicy**](docs/Api/PoliciesBetaApi.md#retrievedocumentpolicy) | **GET** /policies/documents/{token} | Retrieve document policy
*PoliciesBetaApi* | [**retrieveProductPolicy**](docs/Api/PoliciesBetaApi.md#retrieveproductpolicy) | **GET** /policies/products/{token} | Retrieve credit product policy
*PoliciesBetaApi* | [**retrieveRewardPolicy**](docs/Api/PoliciesBetaApi.md#retrieverewardpolicy) | **GET** /policies/rewards/{token} | Retrieve reward policy
*PoliciesBetaApi* | [**updateAprPolicyWithToken**](docs/Api/PoliciesBetaApi.md#updateaprpolicywithtoken) | **PUT** /policies/aprs/{token} | Update APR policy
*PoliciesBetaApi* | [**updateDocumentPolicy**](docs/Api/PoliciesBetaApi.md#updatedocumentpolicy) | **PUT** /policies/documents/{token} | Update document policy
*PoliciesBetaApi* | [**updateFeePolicyWithToken**](docs/Api/PoliciesBetaApi.md#updatefeepolicywithtoken) | **PUT** /policies/fees/{token} | Update fee policy
*PoliciesBetaApi* | [**updateProductPolicy**](docs/Api/PoliciesBetaApi.md#updateproductpolicy) | **PUT** /policies/products/{token} | Update credit product policy
*PoliciesBetaApi* | [**updateRewardPolicy**](docs/Api/PoliciesBetaApi.md#updaterewardpolicy) | **PUT** /policies/rewards/{token} | Update reward policy
*ProgramFundingApi* | [**getProgramFundings**](docs/Api/ProgramFundingApi.md#getprogramfundings) | **GET** /admin/programs/funding | List program fundings
*ProgramFundingApi* | [**getProgramFundingsByShortCode**](docs/Api/ProgramFundingApi.md#getprogramfundingsbyshortcode) | **GET** /programs/funding | List program fundings
*ProgramFundingSourcesApi* | [**getAllACHFundingSources**](docs/Api/ProgramFundingSourcesApi.md#getallachfundingsources) | **GET** /fundingsources/program/ach | List ACH program sources
*ProgramFundingSourcesApi* | [**getFundingsourcesProgramToken**](docs/Api/ProgramFundingSourcesApi.md#getfundingsourcesprogramtoken) | **GET** /fundingsources/program/{token} | Retrieve program source
*ProgramFundingSourcesApi* | [**postFundingsourcesProgram**](docs/Api/ProgramFundingSourcesApi.md#postfundingsourcesprogram) | **POST** /fundingsources/program | Create program source
*ProgramFundingSourcesApi* | [**postFundingsourcesProgramAch**](docs/Api/ProgramFundingSourcesApi.md#postfundingsourcesprogramach) | **POST** /fundingsources/program/ach | Create ACH program source
*ProgramFundingSourcesApi* | [**putFundingsourcesProgramToken**](docs/Api/ProgramFundingSourcesApi.md#putfundingsourcesprogramtoken) | **PUT** /fundingsources/program/{token} | Update program source
*ProgramGatewayFundingSourcesApi* | [**getFundingsourcesProgramgatewayToken**](docs/Api/ProgramGatewayFundingSourcesApi.md#getfundingsourcesprogramgatewaytoken) | **GET** /fundingsources/programgateway/{token} | Retrieve program gateway source
*ProgramGatewayFundingSourcesApi* | [**postFundingsourcesProgramgateway**](docs/Api/ProgramGatewayFundingSourcesApi.md#postfundingsourcesprogramgateway) | **POST** /fundingsources/programgateway | Create program gateway source
*ProgramGatewayFundingSourcesApi* | [**putFundingsourcesProgramgatewayCustomHeaderToken**](docs/Api/ProgramGatewayFundingSourcesApi.md#putfundingsourcesprogramgatewaycustomheadertoken) | **PUT** /fundingsources/programgateway/customheaders/{token} | Update program gateway source custom headers
*ProgramGatewayFundingSourcesApi* | [**putFundingsourcesProgramgatewayToken**](docs/Api/ProgramGatewayFundingSourcesApi.md#putfundingsourcesprogramgatewaytoken) | **PUT** /fundingsources/programgateway/{token} | Update program gateway source
*ProgramGatewaysApi* | [**createProgramGateway**](docs/Api/ProgramGatewaysApi.md#createprogramgateway) | **POST** /programgateways | Create Program Gateway
*ProgramGatewaysApi* | [**listProgramGateways**](docs/Api/ProgramGatewaysApi.md#listprogramgateways) | **GET** /programgateways | List Program Gateways
*ProgramGatewaysApi* | [**retrieveProgramGateway**](docs/Api/ProgramGatewaysApi.md#retrieveprogramgateway) | **GET** /programgateways/{token} | Retrieve Program Gateway
*ProgramGatewaysApi* | [**updateProgramGateway**](docs/Api/ProgramGatewaysApi.md#updateprogramgateway) | **PUT** /programgateways/{token} | Update Program Gateway
*ProgramReserveApi* | [**getProgramreserveBalances**](docs/Api/ProgramReserveApi.md#getprogramreservebalances) | **GET** /programreserve/balances | Retrieve reserve account balances
*ProgramReserveApi* | [**getProgramreserveTransactions**](docs/Api/ProgramReserveApi.md#getprogramreservetransactions) | **GET** /programreserve/transactions | List program reserve transactions
*ProgramTransfersApi* | [**getProgramtransfers**](docs/Api/ProgramTransfersApi.md#getprogramtransfers) | **GET** /programtransfers | List program transfers
*ProgramTransfersApi* | [**getProgramtransfersToken**](docs/Api/ProgramTransfersApi.md#getprogramtransferstoken) | **GET** /programtransfers/{token} | Retrieve program transfer
*ProgramTransfersApi* | [**getProgramtransfersTypes**](docs/Api/ProgramTransfersApi.md#getprogramtransferstypes) | **GET** /programtransfers/types | List program transfer types
*ProgramTransfersApi* | [**getProgramtransfersTypesTypetoken**](docs/Api/ProgramTransfersApi.md#getprogramtransferstypestypetoken) | **GET** /programtransfers/types/{type_token} | Retrieve program transfer type
*ProgramTransfersApi* | [**postProgramtransfers**](docs/Api/ProgramTransfersApi.md#postprogramtransfers) | **POST** /programtransfers | Create program transfer
*ProgramTransfersApi* | [**postProgramtransfersTypes**](docs/Api/ProgramTransfersApi.md#postprogramtransferstypes) | **POST** /programtransfers/types | Create program transfer type
*ProgramTransfersApi* | [**putProgramtransfersTypesTypetoken**](docs/Api/ProgramTransfersApi.md#putprogramtransferstypestypetoken) | **PUT** /programtransfers/types/{type_token} | Update program transfer type
*PushToCardApi* | [**getPushtocardsDisburse**](docs/Api/PushToCardApi.md#getpushtocardsdisburse) | **GET** /pushtocards/disburse | Lists all push-to-card disbursements
*PushToCardApi* | [**getPushtocardsDisburseToken**](docs/Api/PushToCardApi.md#getpushtocardsdisbursetoken) | **GET** /pushtocards/disburse/{token} | Returns a specific push-to-card disbursement
*PushToCardApi* | [**getPushtocardsPaymentcard**](docs/Api/PushToCardApi.md#getpushtocardspaymentcard) | **GET** /pushtocards/paymentcard | Returns all push-to-card payment card details
*PushToCardApi* | [**getPushtocardsPaymentcardToken**](docs/Api/PushToCardApi.md#getpushtocardspaymentcardtoken) | **GET** /pushtocards/paymentcard/{token} | Returns a specific paymentcard object
*PushToCardApi* | [**postPushtocardsDisburse**](docs/Api/PushToCardApi.md#postpushtocardsdisburse) | **POST** /pushtocards/disburse | Initiates a push-to-card money disbursement
*PushToCardApi* | [**postPushtocardsPaymentcard**](docs/Api/PushToCardApi.md#postpushtocardspaymentcard) | **POST** /pushtocards/paymentcard | Adds an external card to which funds will be pushed
*RealTimeFeeGroupsApi* | [**getRealtimefeegroups**](docs/Api/RealTimeFeeGroupsApi.md#getrealtimefeegroups) | **GET** /realtimefeegroups | List real-time fee groups
*RealTimeFeeGroupsApi* | [**getRealtimefeegroupsToken**](docs/Api/RealTimeFeeGroupsApi.md#getrealtimefeegroupstoken) | **GET** /realtimefeegroups/{token} | Retrieve real-time fee group
*RealTimeFeeGroupsApi* | [**postRealtimefeegroups**](docs/Api/RealTimeFeeGroupsApi.md#postrealtimefeegroups) | **POST** /realtimefeegroups | Create real-time fee group
*RealTimeFeeGroupsApi* | [**putRealtimefeegroupsToken**](docs/Api/RealTimeFeeGroupsApi.md#putrealtimefeegroupstoken) | **PUT** /realtimefeegroups/{token} | Update real-time fee group
*RedemptionsApi* | [**retrieveRedemptionsBySettlementDate**](docs/Api/RedemptionsApi.md#retrieveredemptionsbysettlementdate) | **GET** /rewardprograms/redemptions | retrieves all completed redemptions by settlement date
*RewardProgramsApi* | [**retrieveRedemptionsBySettlementDate**](docs/Api/RewardProgramsApi.md#retrieveredemptionsbysettlementdate) | **GET** /rewardprograms/redemptions | retrieves all completed redemptions by settlement date
*RewardProgramsBetaApi* | [**getRewardEntriesByJournalEntryTokens**](docs/Api/RewardProgramsBetaApi.md#getrewardentriesbyjournalentrytokens) | **GET** /rewardprograms/{token}/journalentries | Retrieve reward entries by list of journal entry tokens
*RewardProgramsBetaApi* | [**postRewardProgramEntry**](docs/Api/RewardProgramsBetaApi.md#postrewardprogramentry) | **POST** /rewardprograms/{token}/entries | Create reward entry
*RewardProgramsBetaApi* | [**retrieveRewardProgram**](docs/Api/RewardProgramsBetaApi.md#retrieverewardprogram) | **GET** /rewardprograms/{token} | Retrieve reward program
*RewardProgramsBetaApi* | [**retrieveRewardProgramBalance**](docs/Api/RewardProgramsBetaApi.md#retrieverewardprogrambalance) | **GET** /rewardprograms/{token}/balances | Retrieve reward program balances
*RewardProgramsBetaApi* | [**retrieveRewardProgramEntries**](docs/Api/RewardProgramsBetaApi.md#retrieverewardprogramentries) | **GET** /rewardprograms/{token}/entries | List reward entries
*RewardProgramsBetaApi* | [**retrieveRewardProgramEntriesBalance**](docs/Api/RewardProgramsBetaApi.md#retrieverewardprogramentriesbalance) | **GET** /rewardprograms/{token}/entries/balance | Retrieve reward entries balance
*RewardProgramsBetaApi* | [**retrieveRewardProgramEntry**](docs/Api/RewardProgramsBetaApi.md#retrieverewardprogramentry) | **GET** /rewardprograms/{token}/entries/{entry_token} | Retrieve reward entry
*RewardProgramsBetaApi* | [**retrieveRewardPrograms**](docs/Api/RewardProgramsBetaApi.md#retrieverewardprograms) | **GET** /rewardprograms | List reward programs
*RewardProgramsBetaApi* | [**retrieveRewardProgramsRulesConfig**](docs/Api/RewardProgramsBetaApi.md#retrieverewardprogramsrulesconfig) | **GET** /rewardprograms/{token}/rulesconfigs | List rules configurations
*RewardProgramsBetaApi* | [**retrieveRewardProgramsRulesConfigApplied**](docs/Api/RewardProgramsBetaApi.md#retrieverewardprogramsrulesconfigapplied) | **GET** /rewardprograms/{token}/rulesconfigs/applied | Retrieve last rules configuration applied
*RewardProgramsBetaApi* | [**updateRewardProgram**](docs/Api/RewardProgramsBetaApi.md#updaterewardprogram) | **PUT** /rewardprograms/{token} | Activate or deactivate reward program
*RewardRedemptionsBetaApi* | [**getRedemption**](docs/Api/RewardRedemptionsBetaApi.md#getredemption) | **GET** /rewardprograms/{token}/redemptions/{redemption_token} | Retrieve reward redemption
*RewardRedemptionsBetaApi* | [**postRedemptionTransition**](docs/Api/RewardRedemptionsBetaApi.md#postredemptiontransition) | **POST** /rewardprograms/{token}/redemptions/{redemption_token}/transitions | Transition reward redemption status
*RewardRedemptionsBetaApi* | [**postRewardProgramRedemption**](docs/Api/RewardRedemptionsBetaApi.md#postrewardprogramredemption) | **POST** /rewardprograms/{token}/redemptions | Create reward redemption
*RewardRedemptionsBetaApi* | [**retrieveRedemptions**](docs/Api/RewardRedemptionsBetaApi.md#retrieveredemptions) | **GET** /rewardprograms/{token}/redemptions | List reward redemptions
*RewardRedemptionsBetaApi* | [**retrieveRedemptionsBalance**](docs/Api/RewardRedemptionsBetaApi.md#retrieveredemptionsbalance) | **GET** /rewardprograms/{token}/redemptions/balance | Retrieve reward redemption balance
*SimulateApi* | [**postSimulateAuthorization**](docs/Api/SimulateApi.md#postsimulateauthorization) | **POST** /simulate/authorization | Simulates an authorization
*SimulateApi* | [**postSimulateAuthorizationAdvice**](docs/Api/SimulateApi.md#postsimulateauthorizationadvice) | **POST** /simulate/authorization/advice | Simulates an authorization advice transaction
*SimulateApi* | [**postSimulateClearing**](docs/Api/SimulateApi.md#postsimulateclearing) | **POST** /simulate/clearing | Simulates a clearing/settlement transaction
*SimulateApi* | [**postSimulateDirectdeposits**](docs/Api/SimulateApi.md#postsimulatedirectdeposits) | **POST** /simulate/directdeposits | Simulates the creation of direct deposit
*SimulateApi* | [**postSimulateFinancial**](docs/Api/SimulateApi.md#postsimulatefinancial) | **POST** /simulate/financial | Simulates a financial request (PIN debit) transaction with optional cash back
*SimulateApi* | [**postSimulateFinancialAdvice**](docs/Api/SimulateApi.md#postsimulatefinancialadvice) | **POST** /simulate/financial/advice | Simulates a financial advice transaction
*SimulateApi* | [**postSimulateFinancialBalanceinquiry**](docs/Api/SimulateApi.md#postsimulatefinancialbalanceinquiry) | **POST** /simulate/financial/balanceinquiry | Simulates a balance inquiry
*SimulateApi* | [**postSimulateFinancialOriginalcredit**](docs/Api/SimulateApi.md#postsimulatefinancialoriginalcredit) | **POST** /simulate/financial/originalcredit | Simulates an orignal credit transaction
*SimulateApi* | [**postSimulateFinancialWithdrawal**](docs/Api/SimulateApi.md#postsimulatefinancialwithdrawal) | **POST** /simulate/financial/withdrawal | Simulates an ATM withdrawal transaction
*SimulateApi* | [**postSimulateReversal**](docs/Api/SimulateApi.md#postsimulatereversal) | **POST** /simulate/reversal | Simulates a reversal transaction
*StatementsApi* | [**getPaymentReminder**](docs/Api/StatementsApi.md#getpaymentreminder) | **GET** /accounts/{account_token}/statements/{statement_summary_token}/paymentreminders/{token} | Get payment reminder
*StatementsApi* | [**getPaymentRemindersByStatementSummary**](docs/Api/StatementsApi.md#getpaymentremindersbystatementsummary) | **GET** /accounts/{account_token}/statements/{statement_summary_token}/paymentreminders/ | List payment reminders by statement summary
*StatementsApi* | [**getStatementFilesByAccount**](docs/Api/StatementsApi.md#getstatementfilesbyaccount) | **GET** /accounts/{account_token}/statements/files | List files for an account
*StatementsApi* | [**getStatementSummariesByAccount**](docs/Api/StatementsApi.md#getstatementsummariesbyaccount) | **GET** /accounts/{account_token}/statements | List account statement summaries
*StatementsApi* | [**listStatementJournalEntries**](docs/Api/StatementsApi.md#liststatementjournalentries) | **GET** /accounts/{account_token}/statements/{statement_summary_token}/journalentries | List account statement journal entries
*StatementsApi* | [**listStatementLedgerEntries**](docs/Api/StatementsApi.md#liststatementledgerentries) | **GET** /accounts/{account_token}/statements/{statement_summary_token}/ledgerentries | List account statement ledger entries
*StatementsApi* | [**resendWebhookEvent**](docs/Api/StatementsApi.md#resendwebhookevent) | **POST** /webhooks/{event_type}/{resource_token} | Resend credit event notification
*StatementsApi* | [**retrieveStatementFiles**](docs/Api/StatementsApi.md#retrievestatementfiles) | **GET** /accounts/{account_token}/statements/{statement_summary_token}/files | List files for a statement summary
*StatementsApi* | [**retrieveStatementInterestCharges**](docs/Api/StatementsApi.md#retrievestatementinterestcharges) | **GET** /accounts/{account_token}/statements/{statement_summary_token}/interestcharges | Retrieve account statement interest charges
*StatementsApi* | [**retrieveStatementPaymentInfo**](docs/Api/StatementsApi.md#retrievestatementpaymentinfo) | **GET** /accounts/{account_token}/statements/{statement_summary_token}/paymentinfo | Retrieve account statement payment information
*StatementsApi* | [**retrieveStatementReward**](docs/Api/StatementsApi.md#retrievestatementreward) | **GET** /accounts/{account_token}/statements/{statement_summary_token}/rewards | Retrieve account statement rewards
*StatementsApi* | [**retrieveStatementSummary**](docs/Api/StatementsApi.md#retrievestatementsummary) | **GET** /accounts/{account_token}/statements/{statement_summary_token} | Retrieve account statement summary
*StatementsApi* | [**retrieveYearToDateForStatementSummary**](docs/Api/StatementsApi.md#retrieveyeartodateforstatementsummary) | **GET** /accounts/{account_token}/statements/{statement_summary_token}/yeartodate | Retrieve account statement year-to-date totals
*SubstatusApi* | [**createSubStatus**](docs/Api/SubstatusApi.md#createsubstatus) | **POST** /substatuses | Create substatus
*SubstatusApi* | [**listSubStatuses**](docs/Api/SubstatusApi.md#listsubstatuses) | **GET** /substatuses | List substatuses
*SubstatusApi* | [**retrieveSubStatus**](docs/Api/SubstatusApi.md#retrievesubstatus) | **GET** /substatuses/{substatus_token} | Retrieve Substatus
*SubstatusApi* | [**updateSubStatus**](docs/Api/SubstatusApi.md#updatesubstatus) | **PUT** /substatuses/{substatus_token} | Update substatus
*TransactionsApi* | [**getTransactions**](docs/Api/TransactionsApi.md#gettransactions) | **GET** /transactions | List transactions
*TransactionsApi* | [**getTransactionsFundingsourceFundingsourcetoken**](docs/Api/TransactionsApi.md#gettransactionsfundingsourcefundingsourcetoken) | **GET** /transactions/fundingsource/{funding_source_token} | List transactions for a funding account
*TransactionsApi* | [**getTransactionsToken**](docs/Api/TransactionsApi.md#gettransactionstoken) | **GET** /transactions/{token} | Retrieve transaction
*TransactionsApi* | [**getTransactionsTokenRelated**](docs/Api/TransactionsApi.md#gettransactionstokenrelated) | **GET** /transactions/{token}/related | List related transactions
*UserTransitionsApi* | [**getUsertransitionsToken**](docs/Api/UserTransitionsApi.md#getusertransitionstoken) | **GET** /usertransitions/{token} | Retrieve user transition
*UserTransitionsApi* | [**getUsertransitionsUserUsertoken**](docs/Api/UserTransitionsApi.md#getusertransitionsuserusertoken) | **GET** /usertransitions/user/{user_token} | List transitions for user
*UserTransitionsApi* | [**postUsertransitions**](docs/Api/UserTransitionsApi.md#postusertransitions) | **POST** /usertransitions | Create user transition
*UsersApi* | [**getUsers**](docs/Api/UsersApi.md#getusers) | **GET** /users | List users
*UsersApi* | [**getUsersAuthClientaccesstokenToken**](docs/Api/UsersApi.md#getusersauthclientaccesstokentoken) | **GET** /users/auth/clientaccesstoken/{token} | Retrieve client access token
*UsersApi* | [**getUsersParenttokenChildren**](docs/Api/UsersApi.md#getusersparenttokenchildren) | **GET** /users/{parent_token}/children | List user child accounts
*UsersApi* | [**getUsersToken**](docs/Api/UsersApi.md#getuserstoken) | **GET** /users/{token} | Retrieve user
*UsersApi* | [**getUsersTokenSsn**](docs/Api/UsersApi.md#getuserstokenssn) | **GET** /users/{token}/ssn | Retrieve user identification number
*UsersApi* | [**postUsers**](docs/Api/UsersApi.md#postusers) | **POST** /users | Create user
*UsersApi* | [**postUsersAuthChangepassword**](docs/Api/UsersApi.md#postusersauthchangepassword) | **POST** /users/auth/changepassword | Update user password
*UsersApi* | [**postUsersAuthClientaccesstoken**](docs/Api/UsersApi.md#postusersauthclientaccesstoken) | **POST** /users/auth/clientaccesstoken | Create client access token
*UsersApi* | [**postUsersAuthLogin**](docs/Api/UsersApi.md#postusersauthlogin) | **POST** /users/auth/login | Log in user
*UsersApi* | [**postUsersAuthLogout**](docs/Api/UsersApi.md#postusersauthlogout) | **POST** /users/auth/logout | Log out user
*UsersApi* | [**postUsersAuthOnetime**](docs/Api/UsersApi.md#postusersauthonetime) | **POST** /users/auth/onetime | Create single-use token
*UsersApi* | [**postUsersAuthResetpassword**](docs/Api/UsersApi.md#postusersauthresetpassword) | **POST** /users/auth/resetpassword | Request user password reset token
*UsersApi* | [**postUsersAuthResetpasswordToken**](docs/Api/UsersApi.md#postusersauthresetpasswordtoken) | **POST** /users/auth/resetpassword/{token} | Reset user password
*UsersApi* | [**postUsersAuthVerifyemail**](docs/Api/UsersApi.md#postusersauthverifyemail) | **POST** /users/auth/verifyemail | Request email verification token
*UsersApi* | [**postUsersAuthVerifyemailToken**](docs/Api/UsersApi.md#postusersauthverifyemailtoken) | **POST** /users/auth/verifyemail/{token} | Verify email address
*UsersApi* | [**postUsersLookup**](docs/Api/UsersApi.md#postuserslookup) | **POST** /users/lookup | Search users
*UsersApi* | [**putUsersToken**](docs/Api/UsersApi.md#putuserstoken) | **PUT** /users/{token} | Update user
*VelocityControlsApi* | [**getVelocitycontrols**](docs/Api/VelocityControlsApi.md#getvelocitycontrols) | **GET** /velocitycontrols | List velocity controls
*VelocityControlsApi* | [**getVelocitycontrolsToken**](docs/Api/VelocityControlsApi.md#getvelocitycontrolstoken) | **GET** /velocitycontrols/{token} | Returns a specific velocity control
*VelocityControlsApi* | [**getVelocitycontrolsUserUsertokenAvailable**](docs/Api/VelocityControlsApi.md#getvelocitycontrolsuserusertokenavailable) | **GET** /velocitycontrols/user/{user_token}/available | List user velocity control balances
*VelocityControlsApi* | [**postVelocitycontrols**](docs/Api/VelocityControlsApi.md#postvelocitycontrols) | **POST** /velocitycontrols | Create velocity control
*VelocityControlsApi* | [**putVelocitycontrolsToken**](docs/Api/VelocityControlsApi.md#putvelocitycontrolstoken) | **PUT** /velocitycontrols/{token} | Update velocity control
*VelocityControlsCardGroupBalanceApi* | [**listVelocityControlsCardGroupBalances**](docs/Api/VelocityControlsCardGroupBalanceApi.md#listvelocitycontrolscardgroupbalances) | **GET** /velocitycontrols/cardgroup/{card_group_token}/available | List Velocity Controls Card Group Balances
*WebhooksApi* | [**getWebhooks**](docs/Api/WebhooksApi.md#getwebhooks) | **GET** /webhooks | List webhooks
*WebhooksApi* | [**getWebhooksToken**](docs/Api/WebhooksApi.md#getwebhookstoken) | **GET** /webhooks/{token} | Retrieve webhook
*WebhooksApi* | [**postWebhooks**](docs/Api/WebhooksApi.md#postwebhooks) | **POST** /webhooks | Create webhook
*WebhooksApi* | [**postWebhooksTokenEventtypeEventtoken**](docs/Api/WebhooksApi.md#postwebhookstokeneventtypeeventtoken) | **POST** /webhooks/{token}/{event_type}/{event_token} | Resend event notification
*WebhooksApi* | [**postWebhooksTokenPing**](docs/Api/WebhooksApi.md#postwebhookstokenping) | **POST** /webhooks/{token}/ping | Ping webhook
*WebhooksApi* | [**putWebhooksCustomHeadersToken**](docs/Api/WebhooksApi.md#putwebhookscustomheaderstoken) | **PUT** /webhooks/customheaders/{token} | Update webhook custom headers
*WebhooksApi* | [**putWebhooksToken**](docs/Api/WebhooksApi.md#putwebhookstoken) | **PUT** /webhooks/{token} | Update webhook

## Models

- [ACHListResponse](docs/Model/ACHListResponse.md)
- [AbstractPage](docs/Model/AbstractPage.md)
- [AcceptedCountriesListResponse](docs/Model/AcceptedCountriesListResponse.md)
- [AcceptedCountriesModel](docs/Model/AcceptedCountriesModel.md)
- [AccessTokenResponse](docs/Model/AccessTokenResponse.md)
- [Account](docs/Model/Account.md)
- [AccountAdjustmentPage](docs/Model/AccountAdjustmentPage.md)
- [AccountAdjustmentReq](docs/Model/AccountAdjustmentReq.md)
- [AccountAdjustmentResponse](docs/Model/AccountAdjustmentResponse.md)
- [AccountAndDocumentAssetType](docs/Model/AccountAndDocumentAssetType.md)
- [AccountAprType](docs/Model/AccountAprType.md)
- [AccountBillingCycleResponse](docs/Model/AccountBillingCycleResponse.md)
- [AccountCardsPage](docs/Model/AccountCardsPage.md)
- [AccountConfigMinPayment](docs/Model/AccountConfigMinPayment.md)
- [AccountConfigPaymentHolds](docs/Model/AccountConfigPaymentHolds.md)
- [AccountConfigReq](docs/Model/AccountConfigReq.md)
- [AccountConfigResponse](docs/Model/AccountConfigResponse.md)
- [AccountConfigUpdateReq](docs/Model/AccountConfigUpdateReq.md)
- [AccountCreateReq](docs/Model/AccountCreateReq.md)
- [AccountCreditBalanceRefundReq](docs/Model/AccountCreditBalanceRefundReq.md)
- [AccountCreditBalanceRefundResponse](docs/Model/AccountCreditBalanceRefundResponse.md)
- [AccountDocumentResponse](docs/Model/AccountDocumentResponse.md)
- [AccountDocumentsPage](docs/Model/AccountDocumentsPage.md)
- [AccountDocumentsResponse](docs/Model/AccountDocumentsResponse.md)
- [AccountFee](docs/Model/AccountFee.md)
- [AccountFunding](docs/Model/AccountFunding.md)
- [AccountHolderGroupConfig](docs/Model/AccountHolderGroupConfig.md)
- [AccountHolderGroupListResponse](docs/Model/AccountHolderGroupListResponse.md)
- [AccountHolderGroupRequest](docs/Model/AccountHolderGroupRequest.md)
- [AccountHolderGroupResponse](docs/Model/AccountHolderGroupResponse.md)
- [AccountHolderGroupUpdateRequest](docs/Model/AccountHolderGroupUpdateRequest.md)
- [AccountNameVerificationModel](docs/Model/AccountNameVerificationModel.md)
- [AccountNameVerificationSource](docs/Model/AccountNameVerificationSource.md)
- [AccountProductFeeType](docs/Model/AccountProductFeeType.md)
- [AccountResponse](docs/Model/AccountResponse.md)
- [AccountReward](docs/Model/AccountReward.md)
- [AccountStatusEnum](docs/Model/AccountStatusEnum.md)
- [AccountTransitionReq](docs/Model/AccountTransitionReq.md)
- [AccountTransitionResponse](docs/Model/AccountTransitionResponse.md)
- [AccountTransitionsPage](docs/Model/AccountTransitionsPage.md)
- [AccountType](docs/Model/AccountType.md)
- [AccountUpdateReq](docs/Model/AccountUpdateReq.md)
- [AccountUpdateReqCreditLimit](docs/Model/AccountUpdateReqCreditLimit.md)
- [AccountUsageCreateReq](docs/Model/AccountUsageCreateReq.md)
- [AccountUsageResponse](docs/Model/AccountUsageResponse.md)
- [AccountUsageUpdateReq](docs/Model/AccountUsageUpdateReq.md)
- [AccountsPage](docs/Model/AccountsPage.md)
- [AccrualType](docs/Model/AccrualType.md)
- [AchModel](docs/Model/AchModel.md)
- [AchPartnerRequestModel](docs/Model/AchPartnerRequestModel.md)
- [AchResponseModel](docs/Model/AchResponseModel.md)
- [AchVerificationModel](docs/Model/AchVerificationModel.md)
- [Acquirer](docs/Model/Acquirer.md)
- [ActivationActions](docs/Model/ActivationActions.md)
- [AddressRequestModel](docs/Model/AddressRequestModel.md)
- [AddressResponseModel](docs/Model/AddressResponseModel.md)
- [AddressVerification](docs/Model/AddressVerification.md)
- [AddressVerificationModel](docs/Model/AddressVerificationModel.md)
- [AddressVerificationSource](docs/Model/AddressVerificationSource.md)
- [Airline](docs/Model/Airline.md)
- [AmountFilter](docs/Model/AmountFilter.md)
- [AndroidPushTokenRequestAddress](docs/Model/AndroidPushTokenRequestAddress.md)
- [AndroidPushTokenizeRequestData](docs/Model/AndroidPushTokenizeRequestData.md)
- [AniInformation](docs/Model/AniInformation.md)
- [AniInformation1](docs/Model/AniInformation1.md)
- [Application](docs/Model/Application.md)
- [ApplicationOfCredits](docs/Model/ApplicationOfCredits.md)
- [ApplicationResourceState](docs/Model/ApplicationResourceState.md)
- [ApplicationTransitionRequest](docs/Model/ApplicationTransitionRequest.md)
- [ApplicationTransitionResponse](docs/Model/ApplicationTransitionResponse.md)
- [ApplicationType](docs/Model/ApplicationType.md)
- [ApplicationsResponse](docs/Model/ApplicationsResponse.md)
- [ApplicationsTransitionPage](docs/Model/ApplicationsTransitionPage.md)
- [AprScheduleCreateReq](docs/Model/AprScheduleCreateReq.md)
- [AprScheduleEntryCreateReq](docs/Model/AprScheduleEntryCreateReq.md)
- [AprScheduleEntryResponse](docs/Model/AprScheduleEntryResponse.md)
- [AprScheduleEntryUpdateReq](docs/Model/AprScheduleEntryUpdateReq.md)
- [AprScheduleResponse](docs/Model/AprScheduleResponse.md)
- [AprScheduleUpdateReq](docs/Model/AprScheduleUpdateReq.md)
- [Association](docs/Model/Association.md)
- [AtcInformation](docs/Model/AtcInformation.md)
- [AuthControlExemptMidsListResponse](docs/Model/AuthControlExemptMidsListResponse.md)
- [AuthControlExemptMidsRequest](docs/Model/AuthControlExemptMidsRequest.md)
- [AuthControlExemptMidsResponse](docs/Model/AuthControlExemptMidsResponse.md)
- [AuthControlExemptMidsUpdateRequest](docs/Model/AuthControlExemptMidsUpdateRequest.md)
- [AuthControlListResponse](docs/Model/AuthControlListResponse.md)
- [AuthControlMerchantScope](docs/Model/AuthControlMerchantScope.md)
- [AuthControlRequest](docs/Model/AuthControlRequest.md)
- [AuthControlResponse](docs/Model/AuthControlResponse.md)
- [AuthControlUpdateRequest](docs/Model/AuthControlUpdateRequest.md)
- [AuthRequestModel](docs/Model/AuthRequestModel.md)
- [Authentication](docs/Model/Authentication.md)
- [AuthorizationAdviceModel](docs/Model/AuthorizationAdviceModel.md)
- [AuthorizationControls](docs/Model/AuthorizationControls.md)
- [AutoReloadAssociation](docs/Model/AutoReloadAssociation.md)
- [AutoReloadListResponse](docs/Model/AutoReloadListResponse.md)
- [AutoReloadModel](docs/Model/AutoReloadModel.md)
- [AutoReloadResponseModel](docs/Model/AutoReloadResponseModel.md)
- [AutoReloadUpdateModel](docs/Model/AutoReloadUpdateModel.md)
- [Available](docs/Model/Available.md)
- [AvsControlOptions](docs/Model/AvsControlOptions.md)
- [AvsControls](docs/Model/AvsControls.md)
- [AvsInformation](docs/Model/AvsInformation.md)
- [BadRequestError](docs/Model/BadRequestError.md)
- [BalanceInquiryRequestModel](docs/Model/BalanceInquiryRequestModel.md)
- [BalanceType](docs/Model/BalanceType.md)
- [BankAccountFundingSourceModel](docs/Model/BankAccountFundingSourceModel.md)
- [BankAccountFundingSourceModelAllOf](docs/Model/BankAccountFundingSourceModelAllOf.md)
- [BankTransferListResponse](docs/Model/BankTransferListResponse.md)
- [BankTransferRequestModel](docs/Model/BankTransferRequestModel.md)
- [BankTransferResponseModel](docs/Model/BankTransferResponseModel.md)
- [BankTransferTransitionListResponse](docs/Model/BankTransferTransitionListResponse.md)
- [BankTransferTransitionRequestModel](docs/Model/BankTransferTransitionRequestModel.md)
- [BankTransferTransitionResponseModel](docs/Model/BankTransferTransitionResponseModel.md)
- [BaseAchRequestModel](docs/Model/BaseAchRequestModel.md)
- [BaseAchResponseModel](docs/Model/BaseAchResponseModel.md)
- [BeneficialOwnerRequest](docs/Model/BeneficialOwnerRequest.md)
- [BeneficialOwnerResponse](docs/Model/BeneficialOwnerResponse.md)
- [BillPayResponse](docs/Model/BillPayResponse.md)
- [BillingAddress](docs/Model/BillingAddress.md)
- [BulkCardOrderListResponse](docs/Model/BulkCardOrderListResponse.md)
- [BulkIssuanceRequest](docs/Model/BulkIssuanceRequest.md)
- [BulkIssuanceResponse](docs/Model/BulkIssuanceResponse.md)
- [BundleCreateReq](docs/Model/BundleCreateReq.md)
- [BundleResourceStatus](docs/Model/BundleResourceStatus.md)
- [BundleResponse](docs/Model/BundleResponse.md)
- [BundleResponsePage](docs/Model/BundleResponsePage.md)
- [BundleTransitionReq](docs/Model/BundleTransitionReq.md)
- [BundleTransitionResponse](docs/Model/BundleTransitionResponse.md)
- [BundleUpdateReq](docs/Model/BundleUpdateReq.md)
- [BusinessCardHolderListResponse](docs/Model/BusinessCardHolderListResponse.md)
- [BusinessCardHolderResponse](docs/Model/BusinessCardHolderResponse.md)
- [BusinessCardHolderUpdate](docs/Model/BusinessCardHolderUpdate.md)
- [BusinessCardholder](docs/Model/BusinessCardholder.md)
- [BusinessIncorporation](docs/Model/BusinessIncorporation.md)
- [BusinessIncorporationResponse](docs/Model/BusinessIncorporationResponse.md)
- [BusinessMetadata](docs/Model/BusinessMetadata.md)
- [BusinessProprietor](docs/Model/BusinessProprietor.md)
- [BusinessProprietorResponse](docs/Model/BusinessProprietorResponse.md)
- [BusinessTransitionListResponse](docs/Model/BusinessTransitionListResponse.md)
- [BusinessTransitionRequest](docs/Model/BusinessTransitionRequest.md)
- [BusinessTransitionResponse](docs/Model/BusinessTransitionResponse.md)
- [BusinessUserCardHolderListResponse](docs/Model/BusinessUserCardHolderListResponse.md)
- [CalculationType](docs/Model/CalculationType.md)
- [CardAcceptorModel](docs/Model/CardAcceptorModel.md)
- [CardCreateReq](docs/Model/CardCreateReq.md)
- [CardFulfillmentRequest](docs/Model/CardFulfillmentRequest.md)
- [CardFulfillmentResponse](docs/Model/CardFulfillmentResponse.md)
- [CardGroup](docs/Model/CardGroup.md)
- [CardGroupPage](docs/Model/CardGroupPage.md)
- [CardGroupReq](docs/Model/CardGroupReq.md)
- [CardHolderAddressModel](docs/Model/CardHolderAddressModel.md)
- [CardHolderAddressUpdateModel](docs/Model/CardHolderAddressUpdateModel.md)
- [CardHolderModel](docs/Model/CardHolderModel.md)
- [CardLifeCycle](docs/Model/CardLifeCycle.md)
- [CardListResponse](docs/Model/CardListResponse.md)
- [CardMetadata](docs/Model/CardMetadata.md)
- [CardOptions](docs/Model/CardOptions.md)
- [CardPersonalization](docs/Model/CardPersonalization.md)
- [CardProductConfig](docs/Model/CardProductConfig.md)
- [CardProductFulfillment](docs/Model/CardProductFulfillment.md)
- [CardProductListResponse](docs/Model/CardProductListResponse.md)
- [CardProductRequest](docs/Model/CardProductRequest.md)
- [CardProductResponse](docs/Model/CardProductResponse.md)
- [CardProductUpdateModel](docs/Model/CardProductUpdateModel.md)
- [CardRequest](docs/Model/CardRequest.md)
- [CardResponse](docs/Model/CardResponse.md)
- [CardSecurityCodeVerification](docs/Model/CardSecurityCodeVerification.md)
- [CardSwapHash](docs/Model/CardSwapHash.md)
- [CardTransitionListResponse](docs/Model/CardTransitionListResponse.md)
- [CardTransitionRequest](docs/Model/CardTransitionRequest.md)
- [CardTransitionResponse](docs/Model/CardTransitionResponse.md)
- [CardUpdateRequest](docs/Model/CardUpdateRequest.md)
- [CardholderAddressListResponse](docs/Model/CardholderAddressListResponse.md)
- [CardholderAddressResponse](docs/Model/CardholderAddressResponse.md)
- [CardholderAuthenticationData](docs/Model/CardholderAuthenticationData.md)
- [CardholderBalance](docs/Model/CardholderBalance.md)
- [CardholderBalances](docs/Model/CardholderBalances.md)
- [CardholderMetadata](docs/Model/CardholderMetadata.md)
- [Carrier](docs/Model/Carrier.md)
- [ChargebackFundingSourceModel](docs/Model/ChargebackFundingSourceModel.md)
- [ChargebackFundingSourceModelAllOf](docs/Model/ChargebackFundingSourceModelAllOf.md)
- [ChargebackResponse](docs/Model/ChargebackResponse.md)
- [ClearingAndSettlement](docs/Model/ClearingAndSettlement.md)
- [ClearingModel](docs/Model/ClearingModel.md)
- [ClientAccessTokenRequest](docs/Model/ClientAccessTokenRequest.md)
- [ClientAccessTokenResponse](docs/Model/ClientAccessTokenResponse.md)
- [CommandoModeEnables](docs/Model/CommandoModeEnables.md)
- [CommandoModeListResponse](docs/Model/CommandoModeListResponse.md)
- [CommandoModeNestedTransition](docs/Model/CommandoModeNestedTransition.md)
- [CommandoModeResponse](docs/Model/CommandoModeResponse.md)
- [CommandoModeTransitionListResponse](docs/Model/CommandoModeTransitionListResponse.md)
- [CommandoModeTransitionResponse](docs/Model/CommandoModeTransitionResponse.md)
- [Config](docs/Model/Config.md)
- [ConfigFeeScheduleEntry](docs/Model/ConfigFeeScheduleEntry.md)
- [ConfigFeeScheduleReq](docs/Model/ConfigFeeScheduleReq.md)
- [ConfigFeeScheduleResponse](docs/Model/ConfigFeeScheduleResponse.md)
- [ControlTokenRequest](docs/Model/ControlTokenRequest.md)
- [ControlTokenResponse](docs/Model/ControlTokenResponse.md)
- [CreateApplicationsRequest](docs/Model/CreateApplicationsRequest.md)
- [CreateRedemptionTransitionsRequest](docs/Model/CreateRedemptionTransitionsRequest.md)
- [CreateRedemptionsRequest](docs/Model/CreateRedemptionsRequest.md)
- [CreateRewardProgramsEntriesRequest](docs/Model/CreateRewardProgramsEntriesRequest.md)
- [CreditBureau](docs/Model/CreditBureau.md)
- [CreditBureauAddress](docs/Model/CreditBureauAddress.md)
- [CurrencyCode](docs/Model/CurrencyCode.md)
- [CurrencyConversion](docs/Model/CurrencyConversion.md)
- [CustomerDueDiligenceRequest](docs/Model/CustomerDueDiligenceRequest.md)
- [CustomerDueDiligenceResponse](docs/Model/CustomerDueDiligenceResponse.md)
- [CustomerDueDiligenceUpdateResponse](docs/Model/CustomerDueDiligenceUpdateResponse.md)
- [CycleType](docs/Model/CycleType.md)
- [DDARequest](docs/Model/DDARequest.md)
- [DecisionsResponse](docs/Model/DecisionsResponse.md)
- [DelinquencyBucketResponse](docs/Model/DelinquencyBucketResponse.md)
- [DelinquencyStateResponse](docs/Model/DelinquencyStateResponse.md)
- [DelinquencyStatus](docs/Model/DelinquencyStatus.md)
- [DelinquencyTransitionResponse](docs/Model/DelinquencyTransitionResponse.md)
- [DelinquencyTransitionTriggerReason](docs/Model/DelinquencyTransitionTriggerReason.md)
- [DelinquencyTransitionsResponsePage](docs/Model/DelinquencyTransitionsResponsePage.md)
- [DepositAccount](docs/Model/DepositAccount.md)
- [DepositAccountUpdateRequest](docs/Model/DepositAccountUpdateRequest.md)
- [DepositDepositResponse](docs/Model/DepositDepositResponse.md)
- [DestinationType](docs/Model/DestinationType.md)
- [Device](docs/Model/Device.md)
- [DeviceData](docs/Model/DeviceData.md)
- [DigitalServiceProvider](docs/Model/DigitalServiceProvider.md)
- [DigitalWalletAndroidPayProvisionRequest](docs/Model/DigitalWalletAndroidPayProvisionRequest.md)
- [DigitalWalletAndroidPayProvisionResponse](docs/Model/DigitalWalletAndroidPayProvisionResponse.md)
- [DigitalWalletApplePayProvisionRequest](docs/Model/DigitalWalletApplePayProvisionRequest.md)
- [DigitalWalletApplePayProvisionResponse](docs/Model/DigitalWalletApplePayProvisionResponse.md)
- [DigitalWalletSamsungPayProvisionRequest](docs/Model/DigitalWalletSamsungPayProvisionRequest.md)
- [DigitalWalletSamsungPayProvisionResponse](docs/Model/DigitalWalletSamsungPayProvisionResponse.md)
- [DigitalWalletToken](docs/Model/DigitalWalletToken.md)
- [DigitalWalletTokenAddressVerification](docs/Model/DigitalWalletTokenAddressVerification.md)
- [DigitalWalletTokenHash](docs/Model/DigitalWalletTokenHash.md)
- [DigitalWalletTokenListResponse](docs/Model/DigitalWalletTokenListResponse.md)
- [DigitalWalletTokenMetadata](docs/Model/DigitalWalletTokenMetadata.md)
- [DigitalWalletTokenTransitionListResponse](docs/Model/DigitalWalletTokenTransitionListResponse.md)
- [DigitalWalletTokenTransitionRequest](docs/Model/DigitalWalletTokenTransitionRequest.md)
- [DigitalWalletTokenTransitionResponse](docs/Model/DigitalWalletTokenTransitionResponse.md)
- [DigitalWalletTokenization](docs/Model/DigitalWalletTokenization.md)
- [DigitalWalletXPayProvisionRequest](docs/Model/DigitalWalletXPayProvisionRequest.md)
- [DigitalWalletXPayProvisionResponse](docs/Model/DigitalWalletXPayProvisionResponse.md)
- [DirectDepositAccountListResponse](docs/Model/DirectDepositAccountListResponse.md)
- [DirectDepositAccountRequest](docs/Model/DirectDepositAccountRequest.md)
- [DirectDepositAccountResponse](docs/Model/DirectDepositAccountResponse.md)
- [DirectDepositAccountTransitionRequest](docs/Model/DirectDepositAccountTransitionRequest.md)
- [DirectDepositAccountTransitionResponse](docs/Model/DirectDepositAccountTransitionResponse.md)
- [DirectDepositFundingSourceModel](docs/Model/DirectDepositFundingSourceModel.md)
- [DirectDepositFundingSourceModelAllOf](docs/Model/DirectDepositFundingSourceModelAllOf.md)
- [DirectDepositListResponse](docs/Model/DirectDepositListResponse.md)
- [DirectDepositRequest](docs/Model/DirectDepositRequest.md)
- [DirectDepositResponse](docs/Model/DirectDepositResponse.md)
- [DirectDepositTransitionListResponse](docs/Model/DirectDepositTransitionListResponse.md)
- [DirectDepositTransitionRequest](docs/Model/DirectDepositTransitionRequest.md)
- [DirectDepositTransitionResponse](docs/Model/DirectDepositTransitionResponse.md)
- [DisputeCategory](docs/Model/DisputeCategory.md)
- [DisputeCreateReq](docs/Model/DisputeCreateReq.md)
- [DisputeModel](docs/Model/DisputeModel.md)
- [DisputeResponse](docs/Model/DisputeResponse.md)
- [DisputeResponsePage](docs/Model/DisputeResponsePage.md)
- [DisputeStatus](docs/Model/DisputeStatus.md)
- [DisputeTransitionReq](docs/Model/DisputeTransitionReq.md)
- [DisputeTransitionResponse](docs/Model/DisputeTransitionResponse.md)
- [DynamicMccType](docs/Model/DynamicMccType.md)
- [EarlyFundsRequestModel](docs/Model/EarlyFundsRequestModel.md)
- [EchoPingRequest](docs/Model/EchoPingRequest.md)
- [EchoPingResponse](docs/Model/EchoPingResponse.md)
- [Error](docs/Model/Error.md)
- [ErrorDetailsResponse](docs/Model/ErrorDetailsResponse.md)
- [ErrorMessageFromWebPushProvisioningRequest](docs/Model/ErrorMessageFromWebPushProvisioningRequest.md)
- [ExpandObjects](docs/Model/ExpandObjects.md)
- [ExpirationOffset](docs/Model/ExpirationOffset.md)
- [ExpirationOffsetWithMinimum](docs/Model/ExpirationOffsetWithMinimum.md)
- [Fee](docs/Model/Fee.md)
- [FeeAttributes](docs/Model/FeeAttributes.md)
- [FeeDetail](docs/Model/FeeDetail.md)
- [FeeListResponse](docs/Model/FeeListResponse.md)
- [FeeMethod](docs/Model/FeeMethod.md)
- [FeeModel](docs/Model/FeeModel.md)
- [FeeRefundRequest](docs/Model/FeeRefundRequest.md)
- [FeeRequest](docs/Model/FeeRequest.md)
- [FeeResponse](docs/Model/FeeResponse.md)
- [FeeTransferRequest](docs/Model/FeeTransferRequest.md)
- [FeeTransferResponse](docs/Model/FeeTransferResponse.md)
- [FeeType](docs/Model/FeeType.md)
- [FeeUpdateRequest](docs/Model/FeeUpdateRequest.md)
- [FileLinks](docs/Model/FileLinks.md)
- [FileResponse](docs/Model/FileResponse.md)
- [FileType](docs/Model/FileType.md)
- [FinancialRequestModel](docs/Model/FinancialRequestModel.md)
- [ForbiddenError](docs/Model/ForbiddenError.md)
- [FraudFeedbackRequest](docs/Model/FraudFeedbackRequest.md)
- [FraudFeedbackResponse](docs/Model/FraudFeedbackResponse.md)
- [FraudView](docs/Model/FraudView.md)
- [FulfillmentAddressRequest](docs/Model/FulfillmentAddressRequest.md)
- [FulfillmentAddressResponse](docs/Model/FulfillmentAddressResponse.md)
- [FulfillmentRequest](docs/Model/FulfillmentRequest.md)
- [FulfillmentResponse](docs/Model/FulfillmentResponse.md)
- [Funding](docs/Model/Funding.md)
- [FundingAccountListResponse](docs/Model/FundingAccountListResponse.md)
- [FundingAccountResponseModel](docs/Model/FundingAccountResponseModel.md)
- [FundingSourceModel](docs/Model/FundingSourceModel.md)
- [GPAUnloadListResponse](docs/Model/GPAUnloadListResponse.md)
- [GatewayLogModel](docs/Model/GatewayLogModel.md)
- [GatewayProgramCustomHeaderUpdateRequest](docs/Model/GatewayProgramCustomHeaderUpdateRequest.md)
- [GatewayProgramFundingSourceRequest](docs/Model/GatewayProgramFundingSourceRequest.md)
- [GatewayProgramFundingSourceResponse](docs/Model/GatewayProgramFundingSourceResponse.md)
- [GatewayProgramFundingSourceUpdateRequest](docs/Model/GatewayProgramFundingSourceUpdateRequest.md)
- [GatewayResponse](docs/Model/GatewayResponse.md)
- [Gpa](docs/Model/Gpa.md)
- [GpaRequest](docs/Model/GpaRequest.md)
- [GpaResponse](docs/Model/GpaResponse.md)
- [GpaReturns](docs/Model/GpaReturns.md)
- [HoldIncrease](docs/Model/HoldIncrease.md)
- [IdentificationRequestModel](docs/Model/IdentificationRequestModel.md)
- [IdentificationResponseModel](docs/Model/IdentificationResponseModel.md)
- [Images](docs/Model/Images.md)
- [ImagesCard](docs/Model/ImagesCard.md)
- [ImagesCarrier](docs/Model/ImagesCarrier.md)
- [ImagesCarrierReturnWindow](docs/Model/ImagesCarrierReturnWindow.md)
- [ImagesSignature](docs/Model/ImagesSignature.md)
- [InAppProvisioning](docs/Model/InAppProvisioning.md)
- [InterestCalculation](docs/Model/InterestCalculation.md)
- [InterestOnGraceReactivationEnum](docs/Model/InterestOnGraceReactivationEnum.md)
- [InternalServerError](docs/Model/InternalServerError.md)
- [IssuerFraudView](docs/Model/IssuerFraudView.md)
- [JitAccountNameVerification](docs/Model/JitAccountNameVerification.md)
- [JitAddressVerification](docs/Model/JitAddressVerification.md)
- [JitFunding](docs/Model/JitFunding.md)
- [JitFundingApi](docs/Model/JitFundingApi.md)
- [JitFundingPaymentcardFundingSource](docs/Model/JitFundingPaymentcardFundingSource.md)
- [JitFundingProgramFundingSource](docs/Model/JitFundingProgramFundingSource.md)
- [JitFundingProgramgatewayFundingSource](docs/Model/JitFundingProgramgatewayFundingSource.md)
- [JitProgramResponse](docs/Model/JitProgramResponse.md)
- [JournalEntriesPage](docs/Model/JournalEntriesPage.md)
- [JournalEntry](docs/Model/JournalEntry.md)
- [KYCListResponse](docs/Model/KYCListResponse.md)
- [KycRequest](docs/Model/KycRequest.md)
- [KycResponse](docs/Model/KycResponse.md)
- [LedgerEntriesPage](docs/Model/LedgerEntriesPage.md)
- [LedgerEntry](docs/Model/LedgerEntry.md)
- [Link](docs/Model/Link.md)
- [LoginRequestModel](docs/Model/LoginRequestModel.md)
- [LoginResponseModel](docs/Model/LoginResponseModel.md)
- [MCCGroupListResponse](docs/Model/MCCGroupListResponse.md)
- [ManualEntry](docs/Model/ManualEntry.md)
- [MaxAPRSchedulesResponse](docs/Model/MaxAPRSchedulesResponse.md)
- [MccDynamicFilter](docs/Model/MccDynamicFilter.md)
- [MccGroupModel](docs/Model/MccGroupModel.md)
- [MccGroupUpdateModel](docs/Model/MccGroupUpdateModel.md)
- [MerchantGroupListResponse](docs/Model/MerchantGroupListResponse.md)
- [MerchantGroupRequest](docs/Model/MerchantGroupRequest.md)
- [MerchantGroupResponse](docs/Model/MerchantGroupResponse.md)
- [MerchantGroupUpdateRequest](docs/Model/MerchantGroupUpdateRequest.md)
- [MerchantResponseModel](docs/Model/MerchantResponseModel.md)
- [MerchantScope](docs/Model/MerchantScope.md)
- [Method](docs/Model/Method.md)
- [MinOffset](docs/Model/MinOffset.md)
- [MoneyInTransaction](docs/Model/MoneyInTransaction.md)
- [Msa](docs/Model/Msa.md)
- [MsaAggregatedBalances](docs/Model/MsaAggregatedBalances.md)
- [MsaBalances](docs/Model/MsaBalances.md)
- [MsaReturns](docs/Model/MsaReturns.md)
- [Network](docs/Model/Network.md)
- [NetworkAccountIntelligenceScore](docs/Model/NetworkAccountIntelligenceScore.md)
- [NetworkFeeModel](docs/Model/NetworkFeeModel.md)
- [NetworkFraudView](docs/Model/NetworkFraudView.md)
- [NetworkMetadata](docs/Model/NetworkMetadata.md)
- [OneTimeRequestModel](docs/Model/OneTimeRequestModel.md)
- [OrderScope](docs/Model/OrderScope.md)
- [OriginalCredit](docs/Model/OriginalCredit.md)
- [OriginalCreditSenderData](docs/Model/OriginalCreditSenderData.md)
- [OriginalCurrency](docs/Model/OriginalCurrency.md)
- [OrignalcreditRequestModel](docs/Model/OrignalcreditRequestModel.md)
- [OtherPoi](docs/Model/OtherPoi.md)
- [PTCAddress](docs/Model/PTCAddress.md)
- [PTCPhone](docs/Model/PTCPhone.md)
- [PTCSoftDescriptor](docs/Model/PTCSoftDescriptor.md)
- [PanRequest](docs/Model/PanRequest.md)
- [PanResponse](docs/Model/PanResponse.md)
- [PasswordUpdateModel](docs/Model/PasswordUpdateModel.md)
- [PaymentAllocationOrderEnum](docs/Model/PaymentAllocationOrderEnum.md)
- [PaymentAllocationResponse](docs/Model/PaymentAllocationResponse.md)
- [PaymentCardFundingSourceModel](docs/Model/PaymentCardFundingSourceModel.md)
- [PaymentCardFundingSourceModelAllOf](docs/Model/PaymentCardFundingSourceModelAllOf.md)
- [PaymentCardResponseModel](docs/Model/PaymentCardResponseModel.md)
- [PaymentCreateReq](docs/Model/PaymentCreateReq.md)
- [PaymentDetailResponse](docs/Model/PaymentDetailResponse.md)
- [PaymentReminderPage](docs/Model/PaymentReminderPage.md)
- [PaymentReminderResponse](docs/Model/PaymentReminderResponse.md)
- [PaymentScheduleAmountCategory](docs/Model/PaymentScheduleAmountCategory.md)
- [PaymentScheduleCreateReq](docs/Model/PaymentScheduleCreateReq.md)
- [PaymentScheduleFrequency](docs/Model/PaymentScheduleFrequency.md)
- [PaymentSchedulePage](docs/Model/PaymentSchedulePage.md)
- [PaymentScheduleResponse](docs/Model/PaymentScheduleResponse.md)
- [PaymentScheduleStatus](docs/Model/PaymentScheduleStatus.md)
- [PaymentScheduleTransitionCreateReq](docs/Model/PaymentScheduleTransitionCreateReq.md)
- [PaymentScheduleTransitionPage](docs/Model/PaymentScheduleTransitionPage.md)
- [PaymentScheduleTransitionResponse](docs/Model/PaymentScheduleTransitionResponse.md)
- [PaymentSourceCreateReq](docs/Model/PaymentSourceCreateReq.md)
- [PaymentSourcePage](docs/Model/PaymentSourcePage.md)
- [PaymentSourceResponse](docs/Model/PaymentSourceResponse.md)
- [PaymentSourceStatusEnum](docs/Model/PaymentSourceStatusEnum.md)
- [PaymentSourceUpdateReq](docs/Model/PaymentSourceUpdateReq.md)
- [PaymentStatus](docs/Model/PaymentStatus.md)
- [PaymentTransitionReq](docs/Model/PaymentTransitionReq.md)
- [PaymentTransitionResponse](docs/Model/PaymentTransitionResponse.md)
- [PaymentsPage](docs/Model/PaymentsPage.md)
- [PeerTransferRequest](docs/Model/PeerTransferRequest.md)
- [PeerTransferResponse](docs/Model/PeerTransferResponse.md)
- [PeriodicFeeSchedule](docs/Model/PeriodicFeeSchedule.md)
- [PeriodicFeeSchedulePage](docs/Model/PeriodicFeeSchedulePage.md)
- [PinRequest](docs/Model/PinRequest.md)
- [PinRevealRequest](docs/Model/PinRevealRequest.md)
- [PingResponse](docs/Model/PingResponse.md)
- [Poi](docs/Model/Poi.md)
- [PoliciesDocumentPage](docs/Model/PoliciesDocumentPage.md)
- [PoliciesProductPage](docs/Model/PoliciesProductPage.md)
- [PolicyAprCreateReq](docs/Model/PolicyAprCreateReq.md)
- [PolicyAprPurchaseReq](docs/Model/PolicyAprPurchaseReq.md)
- [PolicyAprPurchaseResponse](docs/Model/PolicyAprPurchaseResponse.md)
- [PolicyAprResponse](docs/Model/PolicyAprResponse.md)
- [PolicyAprTierReq](docs/Model/PolicyAprTierReq.md)
- [PolicyAprTierResponse](docs/Model/PolicyAprTierResponse.md)
- [PolicyAprUpdateReq](docs/Model/PolicyAprUpdateReq.md)
- [PolicyAprsPage](docs/Model/PolicyAprsPage.md)
- [PolicyDocumentAssetAndTemplateReq](docs/Model/PolicyDocumentAssetAndTemplateReq.md)
- [PolicyDocumentAssetAndTemplateResponse](docs/Model/PolicyDocumentAssetAndTemplateResponse.md)
- [PolicyDocumentAssetReq](docs/Model/PolicyDocumentAssetReq.md)
- [PolicyDocumentAssetResponse](docs/Model/PolicyDocumentAssetResponse.md)
- [PolicyDocumentAssetURLs](docs/Model/PolicyDocumentAssetURLs.md)
- [PolicyDocumentCreateReq](docs/Model/PolicyDocumentCreateReq.md)
- [PolicyDocumentResponse](docs/Model/PolicyDocumentResponse.md)
- [PolicyDocumentTemplateReq](docs/Model/PolicyDocumentTemplateReq.md)
- [PolicyDocumentTemplateResponse](docs/Model/PolicyDocumentTemplateResponse.md)
- [PolicyDocumentTemplateURLs](docs/Model/PolicyDocumentTemplateURLs.md)
- [PolicyDocumentUpdateReq](docs/Model/PolicyDocumentUpdateReq.md)
- [PolicyFeeAccount](docs/Model/PolicyFeeAccount.md)
- [PolicyFeeCreateReq](docs/Model/PolicyFeeCreateReq.md)
- [PolicyFeeForeignTransaction](docs/Model/PolicyFeeForeignTransaction.md)
- [PolicyFeePayment](docs/Model/PolicyFeePayment.md)
- [PolicyFeePeriodic](docs/Model/PolicyFeePeriodic.md)
- [PolicyFeeResponse](docs/Model/PolicyFeeResponse.md)
- [PolicyFeeUpdateReq](docs/Model/PolicyFeeUpdateReq.md)
- [PolicyFeesPage](docs/Model/PolicyFeesPage.md)
- [PolicyOfferResponse](docs/Model/PolicyOfferResponse.md)
- [PolicyProductCardProductLevel](docs/Model/PolicyProductCardProductLevel.md)
- [PolicyProductCardProductReq](docs/Model/PolicyProductCardProductReq.md)
- [PolicyProductCardProductResponse](docs/Model/PolicyProductCardProductResponse.md)
- [PolicyProductCreateReq](docs/Model/PolicyProductCreateReq.md)
- [PolicyProductMinPaymentCalculation](docs/Model/PolicyProductMinPaymentCalculation.md)
- [PolicyProductMinPaymentPercentage](docs/Model/PolicyProductMinPaymentPercentage.md)
- [PolicyProductPaymentConfiguration](docs/Model/PolicyProductPaymentConfiguration.md)
- [PolicyProductResponse](docs/Model/PolicyProductResponse.md)
- [PolicyProductUpdateReq](docs/Model/PolicyProductUpdateReq.md)
- [PolicyRewardPage](docs/Model/PolicyRewardPage.md)
- [PolicyRewardReq](docs/Model/PolicyRewardReq.md)
- [PolicyRewardResponse](docs/Model/PolicyRewardResponse.md)
- [PolicyRewardRule](docs/Model/PolicyRewardRule.md)
- [PolicyRewardRuleFilters](docs/Model/PolicyRewardRuleFilters.md)
- [PolicyRewardRuleOutcome](docs/Model/PolicyRewardRuleOutcome.md)
- [PolicyRewardRuleType](docs/Model/PolicyRewardRuleType.md)
- [PolicyType](docs/Model/PolicyType.md)
- [Pos](docs/Model/Pos.md)
- [PostDecisionsResponse](docs/Model/PostDecisionsResponse.md)
- [PreKycControls](docs/Model/PreKycControls.md)
- [PrecedingTransaction](docs/Model/PrecedingTransaction.md)
- [PrimaryContactInfoModel](docs/Model/PrimaryContactInfoModel.md)
- [ProductClassification](docs/Model/ProductClassification.md)
- [ProductConfig](docs/Model/ProductConfig.md)
- [ProductConfigPeriodicFees](docs/Model/ProductConfigPeriodicFees.md)
- [ProductCreateReq](docs/Model/ProductCreateReq.md)
- [ProductCreditLine](docs/Model/ProductCreditLine.md)
- [ProductFeeType](docs/Model/ProductFeeType.md)
- [ProductMinPaymentCalculation](docs/Model/ProductMinPaymentCalculation.md)
- [ProductMinPaymentPercentage](docs/Model/ProductMinPaymentPercentage.md)
- [ProductResponse](docs/Model/ProductResponse.md)
- [ProductSubType](docs/Model/ProductSubType.md)
- [ProductType](docs/Model/ProductType.md)
- [ProductsPage](docs/Model/ProductsPage.md)
- [Program](docs/Model/Program.md)
- [ProgramFundingPage](docs/Model/ProgramFundingPage.md)
- [ProgramFundingResponse](docs/Model/ProgramFundingResponse.md)
- [ProgramFundingSourceModel](docs/Model/ProgramFundingSourceModel.md)
- [ProgramFundingSourceRequest](docs/Model/ProgramFundingSourceRequest.md)
- [ProgramFundingSourceResponse](docs/Model/ProgramFundingSourceResponse.md)
- [ProgramFundingSourceUpdateRequest](docs/Model/ProgramFundingSourceUpdateRequest.md)
- [ProgramGatewayCreateReq](docs/Model/ProgramGatewayCreateReq.md)
- [ProgramGatewayFundingSourceModel](docs/Model/ProgramGatewayFundingSourceModel.md)
- [ProgramGatewayPage](docs/Model/ProgramGatewayPage.md)
- [ProgramGatewayResponse](docs/Model/ProgramGatewayResponse.md)
- [ProgramGatewayUpdateReq](docs/Model/ProgramGatewayUpdateReq.md)
- [ProgramReserveAccountBalance](docs/Model/ProgramReserveAccountBalance.md)
- [ProgramReserveTransactionListResponse](docs/Model/ProgramReserveTransactionListResponse.md)
- [ProgramReserveTransactionResponse](docs/Model/ProgramReserveTransactionResponse.md)
- [ProgramTransfer](docs/Model/ProgramTransfer.md)
- [ProgramTransferListResponse](docs/Model/ProgramTransferListResponse.md)
- [ProgramTransferResponse](docs/Model/ProgramTransferResponse.md)
- [ProgramTransferTypeListResponse](docs/Model/ProgramTransferTypeListResponse.md)
- [ProgramTransferTypeRequest](docs/Model/ProgramTransferTypeRequest.md)
- [ProgramTransferTypeResponse](docs/Model/ProgramTransferTypeResponse.md)
- [ProvisioningControls](docs/Model/ProvisioningControls.md)
- [PushToCardDisburseListResponse](docs/Model/PushToCardDisburseListResponse.md)
- [PushToCardDisburseRequest](docs/Model/PushToCardDisburseRequest.md)
- [PushToCardDisbursementResponse](docs/Model/PushToCardDisbursementResponse.md)
- [PushToCardListResponse](docs/Model/PushToCardListResponse.md)
- [PushToCardRequest](docs/Model/PushToCardRequest.md)
- [PushToCardResponse](docs/Model/PushToCardResponse.md)
- [PutRewardProgramsRequest](docs/Model/PutRewardProgramsRequest.md)
- [RealTimeFeeGroup](docs/Model/RealTimeFeeGroup.md)
- [RealTimeFeeGroupCreateRequest](docs/Model/RealTimeFeeGroupCreateRequest.md)
- [RealTimeFeeGroupListResponse](docs/Model/RealTimeFeeGroupListResponse.md)
- [RealTimeFeeGroupRequest](docs/Model/RealTimeFeeGroupRequest.md)
- [RealTimeStandinCriteria](docs/Model/RealTimeStandinCriteria.md)
- [RedemptionStatus](docs/Model/RedemptionStatus.md)
- [RedemptionTransitionsResponse](docs/Model/RedemptionTransitionsResponse.md)
- [RedemptionType](docs/Model/RedemptionType.md)
- [RedemptionsBalanceResponse](docs/Model/RedemptionsBalanceResponse.md)
- [RedemptionsBySettlementDatePage](docs/Model/RedemptionsBySettlementDatePage.md)
- [RedemptionsBySettlementDateResponse](docs/Model/RedemptionsBySettlementDateResponse.md)
- [RedemptionsPage](docs/Model/RedemptionsPage.md)
- [RedemptionsResponse](docs/Model/RedemptionsResponse.md)
- [RefundDetails](docs/Model/RefundDetails.md)
- [RefundDetailsResponse](docs/Model/RefundDetailsResponse.md)
- [RefundMethod](docs/Model/RefundMethod.md)
- [RefundStatus](docs/Model/RefundStatus.md)
- [RequestForApplePayWppJWT](docs/Model/RequestForApplePayWppJWT.md)
- [ResetUserPasswordEmailModel](docs/Model/ResetUserPasswordEmailModel.md)
- [ResetUserPasswordModel](docs/Model/ResetUserPasswordModel.md)
- [ResourceStatus](docs/Model/ResourceStatus.md)
- [Response](docs/Model/Response.md)
- [Result](docs/Model/Result.md)
- [ResultCode](docs/Model/ResultCode.md)
- [RetryAchPaymentReq](docs/Model/RetryAchPaymentReq.md)
- [ReturnedDetails](docs/Model/ReturnedDetails.md)
- [ReversalModel](docs/Model/ReversalModel.md)
- [RewardCreateReq](docs/Model/RewardCreateReq.md)
- [RewardEntriesJournalEntriesPageResponse](docs/Model/RewardEntriesJournalEntriesPageResponse.md)
- [RewardEntriesJournalEntriesResponse](docs/Model/RewardEntriesJournalEntriesResponse.md)
- [RewardEntryStatus](docs/Model/RewardEntryStatus.md)
- [RewardProgramsBalancesResponse](docs/Model/RewardProgramsBalancesResponse.md)
- [RewardProgramsEntriesBalanceResponse](docs/Model/RewardProgramsEntriesBalanceResponse.md)
- [RewardProgramsEntriesPage](docs/Model/RewardProgramsEntriesPage.md)
- [RewardProgramsEntriesResponse](docs/Model/RewardProgramsEntriesResponse.md)
- [RewardProgramsPageResponse](docs/Model/RewardProgramsPageResponse.md)
- [RewardProgramsResponse](docs/Model/RewardProgramsResponse.md)
- [RewardProgramsRulesConfigsPage](docs/Model/RewardProgramsRulesConfigsPage.md)
- [RewardProgramsRulesConfigsResponse](docs/Model/RewardProgramsRulesConfigsResponse.md)
- [RewardResponse](docs/Model/RewardResponse.md)
- [RewardType](docs/Model/RewardType.md)
- [RiskAssessment](docs/Model/RiskAssessment.md)
- [RiskcontrolTags](docs/Model/RiskcontrolTags.md)
- [SamsungPushTokenizeRequestData](docs/Model/SamsungPushTokenizeRequestData.md)
- [SelectiveAuth](docs/Model/SelectiveAuth.md)
- [SendingProvisioningDataToGooglePayBackendRequest](docs/Model/SendingProvisioningDataToGooglePayBackendRequest.md)
- [SettlementData](docs/Model/SettlementData.md)
- [Shipping](docs/Model/Shipping.md)
- [ShippingInformationResponse](docs/Model/ShippingInformationResponse.md)
- [SimulationResponseModel](docs/Model/SimulationResponseModel.md)
- [Special](docs/Model/Special.md)
- [SpendControlAssociation](docs/Model/SpendControlAssociation.md)
- [SsnResponseModel](docs/Model/SsnResponseModel.md)
- [StatementFile](docs/Model/StatementFile.md)
- [StatementFilePage](docs/Model/StatementFilePage.md)
- [StatementInterestCharge](docs/Model/StatementInterestCharge.md)
- [StatementInterestChargesPage](docs/Model/StatementInterestChargesPage.md)
- [StatementPaymentInfo](docs/Model/StatementPaymentInfo.md)
- [StatementPaymentWarning](docs/Model/StatementPaymentWarning.md)
- [StatementReward](docs/Model/StatementReward.md)
- [StatementSummary](docs/Model/StatementSummary.md)
- [StatementSummaryPage](docs/Model/StatementSummaryPage.md)
- [StoreResponseModel](docs/Model/StoreResponseModel.md)
- [StrongCustomerAuthenticationLimits](docs/Model/StrongCustomerAuthenticationLimits.md)
- [SubstatusCreateReq](docs/Model/SubstatusCreateReq.md)
- [SubstatusCreateReqAttributes](docs/Model/SubstatusCreateReqAttributes.md)
- [SubstatusEvent](docs/Model/SubstatusEvent.md)
- [SubstatusEventResponseDetails](docs/Model/SubstatusEventResponseDetails.md)
- [SubstatusPage](docs/Model/SubstatusPage.md)
- [SubstatusResponse](docs/Model/SubstatusResponse.md)
- [SubstatusUpdateReq](docs/Model/SubstatusUpdateReq.md)
- [Success](docs/Model/Success.md)
- [Tag](docs/Model/Tag.md)
- [TerminalModel](docs/Model/TerminalModel.md)
- [Text](docs/Model/Text.md)
- [TextValue](docs/Model/TextValue.md)
- [TokenRequest](docs/Model/TokenRequest.md)
- [TokenServiceProvider](docs/Model/TokenServiceProvider.md)
- [TokenUpdateRequest](docs/Model/TokenUpdateRequest.md)
- [TransactionCardAcceptor](docs/Model/TransactionCardAcceptor.md)
- [TransactionControls](docs/Model/TransactionControls.md)
- [TransactionDevice](docs/Model/TransactionDevice.md)
- [TransactionMetadata](docs/Model/TransactionMetadata.md)
- [TransactionModel](docs/Model/TransactionModel.md)
- [TransactionModelListResponse](docs/Model/TransactionModelListResponse.md)
- [TransactionOptions](docs/Model/TransactionOptions.md)
- [Transit](docs/Model/Transit.md)
- [TriggeredRule](docs/Model/TriggeredRule.md)
- [UnauthorizedError](docs/Model/UnauthorizedError.md)
- [UnloadRequestModel](docs/Model/UnloadRequestModel.md)
- [UserAssociation](docs/Model/UserAssociation.md)
- [UserCardHolderListResponse](docs/Model/UserCardHolderListResponse.md)
- [UserCardHolderResponse](docs/Model/UserCardHolderResponse.md)
- [UserCardHolderSearchModel](docs/Model/UserCardHolderSearchModel.md)
- [UserCardHolderUpdateModel](docs/Model/UserCardHolderUpdateModel.md)
- [UserTransitionListResponse](docs/Model/UserTransitionListResponse.md)
- [UserTransitionRequest](docs/Model/UserTransitionRequest.md)
- [UserTransitionResponse](docs/Model/UserTransitionResponse.md)
- [UserValidationRequest](docs/Model/UserValidationRequest.md)
- [UserValidationResponse](docs/Model/UserValidationResponse.md)
- [ValidationsRequest](docs/Model/ValidationsRequest.md)
- [ValidationsResponse](docs/Model/ValidationsResponse.md)
- [VelocityControlBalance](docs/Model/VelocityControlBalance.md)
- [VelocityControlBalanceAllOf](docs/Model/VelocityControlBalanceAllOf.md)
- [VelocityControlBalanceAllOfAvailable](docs/Model/VelocityControlBalanceAllOfAvailable.md)
- [VelocityControlBalanceListResponse](docs/Model/VelocityControlBalanceListResponse.md)
- [VelocityControlBalancePage](docs/Model/VelocityControlBalancePage.md)
- [VelocityControlBalanceResponse](docs/Model/VelocityControlBalanceResponse.md)
- [VelocityControlListResponse](docs/Model/VelocityControlListResponse.md)
- [VelocityControlRequest](docs/Model/VelocityControlRequest.md)
- [VelocityControlResponse](docs/Model/VelocityControlResponse.md)
- [VelocityControlUpdateRequest](docs/Model/VelocityControlUpdateRequest.md)
- [VelocityWindow](docs/Model/VelocityWindow.md)
- [WalletProviderCardOnFile](docs/Model/WalletProviderCardOnFile.md)
- [WalletProviderProfile](docs/Model/WalletProviderProfile.md)
- [WebPushProvisioning](docs/Model/WebPushProvisioning.md)
- [WebPushProvisioningApplePayJWSHeader](docs/Model/WebPushProvisioningApplePayJWSHeader.md)
- [WebPushProvisioningApplePayJWSModel](docs/Model/WebPushProvisioningApplePayJWSModel.md)
- [WebPushProvisioningApplePayJWTResponse](docs/Model/WebPushProvisioningApplePayJWTResponse.md)
- [Webhook](docs/Model/Webhook.md)
- [WebhookBaseModel](docs/Model/WebhookBaseModel.md)
- [WebhookConfigModel](docs/Model/WebhookConfigModel.md)
- [WebhookEventResendContainerResponse](docs/Model/WebhookEventResendContainerResponse.md)
- [WebhookPingModel](docs/Model/WebhookPingModel.md)
- [WebhookRequestModel](docs/Model/WebhookRequestModel.md)
- [WebhookResponseModel](docs/Model/WebhookResponseModel.md)
- [WebhookResponseModelListResponse](docs/Model/WebhookResponseModelListResponse.md)
- [WebhookUpdateCustomHeaderRequest](docs/Model/WebhookUpdateCustomHeaderRequest.md)
- [WithdrawalRequestModel](docs/Model/WithdrawalRequestModel.md)
- [XpayPushTokenizeRequestData](docs/Model/XpayPushTokenizeRequestData.md)
- [YearToDate](docs/Model/YearToDate.md)

## Authorization

### mqAppAndAccessToken

- **Type**: HTTP basic authentication

## Tests

To run the tests, use:

```bash
composer install
vendor/bin/phpunit
```

## Author

support@marqeta.com

## About this package

This PHP package is automatically generated by the [OpenAPI Generator](https://openapi-generator.tech) project:

- API version: `3.0.19`
- Build package: `org.openapitools.codegen.languages.PhpClientCodegen`
