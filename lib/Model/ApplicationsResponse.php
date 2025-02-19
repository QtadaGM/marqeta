<?php
/**
 * ApplicationsResponse
 *
 * PHP version 7.3
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Core API
 *
 * Marqeta's Core API endpoints, conveniently annotated to enable code generation (including SDKs), test cases, and documentation. Currently in beta.
 *
 * The version of the OpenAPI document: 3.0.19
 * Contact: support@marqeta.com
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 5.4.0
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace OpenAPI\Client\Model;

use \ArrayAccess;
use \OpenAPI\Client\ObjectSerializer;

/**
 * ApplicationsResponse Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class ApplicationsResponse implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'ApplicationsResponse';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'account_token' => 'string',
        'any_non_taxable_income' => 'bool',
        'application_accepted_at' => '\DateTime',
        'application_canceled_at' => '\DateTime',
        'benefits_disclosure_accepted_at' => '\DateTime',
        'bundle_token' => 'string',
        'card_membership_agreement_accepted_at' => '\DateTime',
        'created_date' => '\DateTime',
        'decision_model' => '\OpenAPI\Client\Model\DecisionsResponse',
        'decision_token' => 'string',
        'device_data' => '\OpenAPI\Client\Model\DeviceData',
        'e_disclosure_accepted_at' => '\DateTime',
        'error_details' => '\OpenAPI\Client\Model\ErrorDetailsResponse',
        'meta_data' => 'object',
        'monthly_mortgage_or_rent' => 'float',
        'offer_id' => 'string',
        'prequalified_offer_pre_terms_accepted_at' => '\DateTime',
        'primary_income_source' => 'string',
        'privacy_policy_accepted_at' => '\DateTime',
        'residence_type' => 'string',
        'rewards_disclosure_post_terms_accepted_at' => '\DateTime',
        'rewards_disclosure_pre_terms_accepted_at' => '\DateTime',
        'soct_accepted_at' => '\DateTime',
        'state' => '\OpenAPI\Client\Model\ApplicationResourceState',
        'term_schedule_information_accepted_at' => '\DateTime',
        'token' => 'string',
        'total_annual_income' => 'float',
        'type' => '\OpenAPI\Client\Model\ApplicationType',
        'updated_date' => '\DateTime',
        'user_token' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'account_token' => null,
        'any_non_taxable_income' => null,
        'application_accepted_at' => 'date-time',
        'application_canceled_at' => 'date-time',
        'benefits_disclosure_accepted_at' => 'date-time',
        'bundle_token' => null,
        'card_membership_agreement_accepted_at' => 'date-time',
        'created_date' => 'date-time',
        'decision_model' => null,
        'decision_token' => null,
        'device_data' => null,
        'e_disclosure_accepted_at' => 'date-time',
        'error_details' => null,
        'meta_data' => null,
        'monthly_mortgage_or_rent' => null,
        'offer_id' => null,
        'prequalified_offer_pre_terms_accepted_at' => 'date-time',
        'primary_income_source' => null,
        'privacy_policy_accepted_at' => 'date-time',
        'residence_type' => null,
        'rewards_disclosure_post_terms_accepted_at' => 'date-time',
        'rewards_disclosure_pre_terms_accepted_at' => 'date-time',
        'soct_accepted_at' => 'date-time',
        'state' => null,
        'term_schedule_information_accepted_at' => 'date-time',
        'token' => null,
        'total_annual_income' => null,
        'type' => null,
        'updated_date' => 'date-time',
        'user_token' => null
    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPITypes()
    {
        return self::$openAPITypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPIFormats()
    {
        return self::$openAPIFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'account_token' => 'account_token',
        'any_non_taxable_income' => 'any_non_taxable_income',
        'application_accepted_at' => 'application_accepted_at',
        'application_canceled_at' => 'application_canceled_at',
        'benefits_disclosure_accepted_at' => 'benefits_disclosure_accepted_at',
        'bundle_token' => 'bundle_token',
        'card_membership_agreement_accepted_at' => 'card_membership_agreement_accepted_at',
        'created_date' => 'created_date',
        'decision_model' => 'decision_model',
        'decision_token' => 'decision_token',
        'device_data' => 'device_data',
        'e_disclosure_accepted_at' => 'e_disclosure_accepted_at',
        'error_details' => 'error_details',
        'meta_data' => 'meta_data',
        'monthly_mortgage_or_rent' => 'monthly_mortgage_or_rent',
        'offer_id' => 'offer_id',
        'prequalified_offer_pre_terms_accepted_at' => 'prequalified_offer_pre_terms_accepted_at',
        'primary_income_source' => 'primary_income_source',
        'privacy_policy_accepted_at' => 'privacy_policy_accepted_at',
        'residence_type' => 'residence_type',
        'rewards_disclosure_post_terms_accepted_at' => 'rewards_disclosure_post_terms_accepted_at',
        'rewards_disclosure_pre_terms_accepted_at' => 'rewards_disclosure_pre_terms_accepted_at',
        'soct_accepted_at' => 'soct_accepted_at',
        'state' => 'state',
        'term_schedule_information_accepted_at' => 'term_schedule_information_accepted_at',
        'token' => 'token',
        'total_annual_income' => 'total_annual_income',
        'type' => 'type',
        'updated_date' => 'updated_date',
        'user_token' => 'user_token'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'account_token' => 'setAccountToken',
        'any_non_taxable_income' => 'setAnyNonTaxableIncome',
        'application_accepted_at' => 'setApplicationAcceptedAt',
        'application_canceled_at' => 'setApplicationCanceledAt',
        'benefits_disclosure_accepted_at' => 'setBenefitsDisclosureAcceptedAt',
        'bundle_token' => 'setBundleToken',
        'card_membership_agreement_accepted_at' => 'setCardMembershipAgreementAcceptedAt',
        'created_date' => 'setCreatedDate',
        'decision_model' => 'setDecisionModel',
        'decision_token' => 'setDecisionToken',
        'device_data' => 'setDeviceData',
        'e_disclosure_accepted_at' => 'setEDisclosureAcceptedAt',
        'error_details' => 'setErrorDetails',
        'meta_data' => 'setMetaData',
        'monthly_mortgage_or_rent' => 'setMonthlyMortgageOrRent',
        'offer_id' => 'setOfferId',
        'prequalified_offer_pre_terms_accepted_at' => 'setPrequalifiedOfferPreTermsAcceptedAt',
        'primary_income_source' => 'setPrimaryIncomeSource',
        'privacy_policy_accepted_at' => 'setPrivacyPolicyAcceptedAt',
        'residence_type' => 'setResidenceType',
        'rewards_disclosure_post_terms_accepted_at' => 'setRewardsDisclosurePostTermsAcceptedAt',
        'rewards_disclosure_pre_terms_accepted_at' => 'setRewardsDisclosurePreTermsAcceptedAt',
        'soct_accepted_at' => 'setSoctAcceptedAt',
        'state' => 'setState',
        'term_schedule_information_accepted_at' => 'setTermScheduleInformationAcceptedAt',
        'token' => 'setToken',
        'total_annual_income' => 'setTotalAnnualIncome',
        'type' => 'setType',
        'updated_date' => 'setUpdatedDate',
        'user_token' => 'setUserToken'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'account_token' => 'getAccountToken',
        'any_non_taxable_income' => 'getAnyNonTaxableIncome',
        'application_accepted_at' => 'getApplicationAcceptedAt',
        'application_canceled_at' => 'getApplicationCanceledAt',
        'benefits_disclosure_accepted_at' => 'getBenefitsDisclosureAcceptedAt',
        'bundle_token' => 'getBundleToken',
        'card_membership_agreement_accepted_at' => 'getCardMembershipAgreementAcceptedAt',
        'created_date' => 'getCreatedDate',
        'decision_model' => 'getDecisionModel',
        'decision_token' => 'getDecisionToken',
        'device_data' => 'getDeviceData',
        'e_disclosure_accepted_at' => 'getEDisclosureAcceptedAt',
        'error_details' => 'getErrorDetails',
        'meta_data' => 'getMetaData',
        'monthly_mortgage_or_rent' => 'getMonthlyMortgageOrRent',
        'offer_id' => 'getOfferId',
        'prequalified_offer_pre_terms_accepted_at' => 'getPrequalifiedOfferPreTermsAcceptedAt',
        'primary_income_source' => 'getPrimaryIncomeSource',
        'privacy_policy_accepted_at' => 'getPrivacyPolicyAcceptedAt',
        'residence_type' => 'getResidenceType',
        'rewards_disclosure_post_terms_accepted_at' => 'getRewardsDisclosurePostTermsAcceptedAt',
        'rewards_disclosure_pre_terms_accepted_at' => 'getRewardsDisclosurePreTermsAcceptedAt',
        'soct_accepted_at' => 'getSoctAcceptedAt',
        'state' => 'getState',
        'term_schedule_information_accepted_at' => 'getTermScheduleInformationAcceptedAt',
        'token' => 'getToken',
        'total_annual_income' => 'getTotalAnnualIncome',
        'type' => 'getType',
        'updated_date' => 'getUpdatedDate',
        'user_token' => 'getUserToken'
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters()
    {
        return self::$getters;
    }

    /**
     * The original name of the model.
     *
     * @return string
     */
    public function getModelName()
    {
        return self::$openAPIModelName;
    }

    const PRIMARY_INCOME_SOURCE_EMPLOYED = 'EMPLOYED';
    const PRIMARY_INCOME_SOURCE_UNEMPLOYED = 'UNEMPLOYED';
    const PRIMARY_INCOME_SOURCE_SELF_EMPLOYED = 'SELF_EMPLOYED';
    const PRIMARY_INCOME_SOURCE_OTHER = 'OTHER';
    const RESIDENCE_TYPE_OWN = 'OWN';
    const RESIDENCE_TYPE_RENT = 'RENT';
    const RESIDENCE_TYPE_OTHER = 'OTHER';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getPrimaryIncomeSourceAllowableValues()
    {
        return [
            self::PRIMARY_INCOME_SOURCE_EMPLOYED,
            self::PRIMARY_INCOME_SOURCE_UNEMPLOYED,
            self::PRIMARY_INCOME_SOURCE_SELF_EMPLOYED,
            self::PRIMARY_INCOME_SOURCE_OTHER,
        ];
    }

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getResidenceTypeAllowableValues()
    {
        return [
            self::RESIDENCE_TYPE_OWN,
            self::RESIDENCE_TYPE_RENT,
            self::RESIDENCE_TYPE_OTHER,
        ];
    }

    /**
     * Associative array for storing property values
     *
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['account_token'] = $data['account_token'] ?? null;
        $this->container['any_non_taxable_income'] = $data['any_non_taxable_income'] ?? null;
        $this->container['application_accepted_at'] = $data['application_accepted_at'] ?? null;
        $this->container['application_canceled_at'] = $data['application_canceled_at'] ?? null;
        $this->container['benefits_disclosure_accepted_at'] = $data['benefits_disclosure_accepted_at'] ?? null;
        $this->container['bundle_token'] = $data['bundle_token'] ?? null;
        $this->container['card_membership_agreement_accepted_at'] = $data['card_membership_agreement_accepted_at'] ?? null;
        $this->container['created_date'] = $data['created_date'] ?? null;
        $this->container['decision_model'] = $data['decision_model'] ?? null;
        $this->container['decision_token'] = $data['decision_token'] ?? null;
        $this->container['device_data'] = $data['device_data'] ?? null;
        $this->container['e_disclosure_accepted_at'] = $data['e_disclosure_accepted_at'] ?? null;
        $this->container['error_details'] = $data['error_details'] ?? null;
        $this->container['meta_data'] = $data['meta_data'] ?? null;
        $this->container['monthly_mortgage_or_rent'] = $data['monthly_mortgage_or_rent'] ?? null;
        $this->container['offer_id'] = $data['offer_id'] ?? null;
        $this->container['prequalified_offer_pre_terms_accepted_at'] = $data['prequalified_offer_pre_terms_accepted_at'] ?? null;
        $this->container['primary_income_source'] = $data['primary_income_source'] ?? null;
        $this->container['privacy_policy_accepted_at'] = $data['privacy_policy_accepted_at'] ?? null;
        $this->container['residence_type'] = $data['residence_type'] ?? null;
        $this->container['rewards_disclosure_post_terms_accepted_at'] = $data['rewards_disclosure_post_terms_accepted_at'] ?? null;
        $this->container['rewards_disclosure_pre_terms_accepted_at'] = $data['rewards_disclosure_pre_terms_accepted_at'] ?? null;
        $this->container['soct_accepted_at'] = $data['soct_accepted_at'] ?? null;
        $this->container['state'] = $data['state'] ?? null;
        $this->container['term_schedule_information_accepted_at'] = $data['term_schedule_information_accepted_at'] ?? null;
        $this->container['token'] = $data['token'] ?? null;
        $this->container['total_annual_income'] = $data['total_annual_income'] ?? null;
        $this->container['type'] = $data['type'] ?? null;
        $this->container['updated_date'] = $data['updated_date'] ?? null;
        $this->container['user_token'] = $data['user_token'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['bundle_token'] === null) {
            $invalidProperties[] = "'bundle_token' can't be null";
        }
        if ($this->container['created_date'] === null) {
            $invalidProperties[] = "'created_date' can't be null";
        }
        if ($this->container['e_disclosure_accepted_at'] === null) {
            $invalidProperties[] = "'e_disclosure_accepted_at' can't be null";
        }
        $allowedValues = $this->getPrimaryIncomeSourceAllowableValues();
        if (!is_null($this->container['primary_income_source']) && !in_array($this->container['primary_income_source'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'primary_income_source', must be one of '%s'",
                $this->container['primary_income_source'],
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['privacy_policy_accepted_at'] === null) {
            $invalidProperties[] = "'privacy_policy_accepted_at' can't be null";
        }
        $allowedValues = $this->getResidenceTypeAllowableValues();
        if (!is_null($this->container['residence_type']) && !in_array($this->container['residence_type'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'residence_type', must be one of '%s'",
                $this->container['residence_type'],
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['rewards_disclosure_pre_terms_accepted_at'] === null) {
            $invalidProperties[] = "'rewards_disclosure_pre_terms_accepted_at' can't be null";
        }
        if ($this->container['soct_accepted_at'] === null) {
            $invalidProperties[] = "'soct_accepted_at' can't be null";
        }
        if ($this->container['state'] === null) {
            $invalidProperties[] = "'state' can't be null";
        }
        if ($this->container['token'] === null) {
            $invalidProperties[] = "'token' can't be null";
        }
        if ($this->container['type'] === null) {
            $invalidProperties[] = "'type' can't be null";
        }
        if ($this->container['updated_date'] === null) {
            $invalidProperties[] = "'updated_date' can't be null";
        }
        if ($this->container['user_token'] === null) {
            $invalidProperties[] = "'user_token' can't be null";
        }
        return $invalidProperties;
    }

    /**
     * Validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {
        return count($this->listInvalidProperties()) === 0;
    }


    /**
     * Gets account_token
     *
     * @return string|null
     */
    public function getAccountToken()
    {
        return $this->container['account_token'];
    }

    /**
     * Sets account_token
     *
     * @param string|null $account_token Unique identifier of the credit account for which the user is applying.  Returned when retrieving an application in the `APPROVED` state.
     *
     * @return self
     */
    public function setAccountToken($account_token)
    {
        $this->container['account_token'] = $account_token;

        return $this;
    }

    /**
     * Gets any_non_taxable_income
     *
     * @return bool|null
     */
    public function getAnyNonTaxableIncome()
    {
        return $this->container['any_non_taxable_income'];
    }

    /**
     * Sets any_non_taxable_income
     *
     * @param bool|null $any_non_taxable_income A value of `true` indicates that the user has a non-taxable income source.
     *
     * @return self
     */
    public function setAnyNonTaxableIncome($any_non_taxable_income)
    {
        $this->container['any_non_taxable_income'] = $any_non_taxable_income;

        return $this;
    }

    /**
     * Gets application_accepted_at
     *
     * @return \DateTime|null
     */
    public function getApplicationAcceptedAt()
    {
        return $this->container['application_accepted_at'];
    }

    /**
     * Sets application_accepted_at
     *
     * @param \DateTime|null $application_accepted_at Date and time when the application was accepted on the Marqeta platform, in UTC.  Returned if the user accepted their approved application.
     *
     * @return self
     */
    public function setApplicationAcceptedAt($application_accepted_at)
    {
        $this->container['application_accepted_at'] = $application_accepted_at;

        return $this;
    }

    /**
     * Gets application_canceled_at
     *
     * @return \DateTime|null
     */
    public function getApplicationCanceledAt()
    {
        return $this->container['application_canceled_at'];
    }

    /**
     * Sets application_canceled_at
     *
     * @param \DateTime|null $application_canceled_at Date and time when the application was canceled on the Marqeta platform, in UTC.
     *
     * @return self
     */
    public function setApplicationCanceledAt($application_canceled_at)
    {
        $this->container['application_canceled_at'] = $application_canceled_at;

        return $this;
    }

    /**
     * Gets benefits_disclosure_accepted_at
     *
     * @return \DateTime|null
     */
    public function getBenefitsDisclosureAcceptedAt()
    {
        return $this->container['benefits_disclosure_accepted_at'];
    }

    /**
     * Sets benefits_disclosure_accepted_at
     *
     * @param \DateTime|null $benefits_disclosure_accepted_at Date and time when Marqeta accepted the Benefits Disclosure, in UTC.  Returned if the user accepted their approved application.
     *
     * @return self
     */
    public function setBenefitsDisclosureAcceptedAt($benefits_disclosure_accepted_at)
    {
        $this->container['benefits_disclosure_accepted_at'] = $benefits_disclosure_accepted_at;

        return $this;
    }

    /**
     * Gets bundle_token
     *
     * @return string
     */
    public function getBundleToken()
    {
        return $this->container['bundle_token'];
    }

    /**
     * Sets bundle_token
     *
     * @param string $bundle_token Unique identifier of the bundle associated with the application.
     *
     * @return self
     */
    public function setBundleToken($bundle_token)
    {
        $this->container['bundle_token'] = $bundle_token;

        return $this;
    }

    /**
     * Gets card_membership_agreement_accepted_at
     *
     * @return \DateTime|null
     */
    public function getCardMembershipAgreementAcceptedAt()
    {
        return $this->container['card_membership_agreement_accepted_at'];
    }

    /**
     * Sets card_membership_agreement_accepted_at
     *
     * @param \DateTime|null $card_membership_agreement_accepted_at Date and time when Marqeta accepted the Card Membership Agreement, in UTC.  Returned if the user accepted their approved application.
     *
     * @return self
     */
    public function setCardMembershipAgreementAcceptedAt($card_membership_agreement_accepted_at)
    {
        $this->container['card_membership_agreement_accepted_at'] = $card_membership_agreement_accepted_at;

        return $this;
    }

    /**
     * Gets created_date
     *
     * @return \DateTime
     */
    public function getCreatedDate()
    {
        return $this->container['created_date'];
    }

    /**
     * Sets created_date
     *
     * @param \DateTime $created_date Date and time when the application was created on the Marqeta platform, in UTC.
     *
     * @return self
     */
    public function setCreatedDate($created_date)
    {
        $this->container['created_date'] = $created_date;

        return $this;
    }

    /**
     * Gets decision_model
     *
     * @return \OpenAPI\Client\Model\DecisionsResponse|null
     */
    public function getDecisionModel()
    {
        return $this->container['decision_model'];
    }

    /**
     * Sets decision_model
     *
     * @param \OpenAPI\Client\Model\DecisionsResponse|null $decision_model decision_model
     *
     * @return self
     */
    public function setDecisionModel($decision_model)
    {
        $this->container['decision_model'] = $decision_model;

        return $this;
    }

    /**
     * Gets decision_token
     *
     * @return string|null
     */
    public function getDecisionToken()
    {
        return $this->container['decision_token'];
    }

    /**
     * Sets decision_token
     *
     * @param string|null $decision_token Unique identifier of the decision made on the application.
     *
     * @return self
     */
    public function setDecisionToken($decision_token)
    {
        $this->container['decision_token'] = $decision_token;

        return $this;
    }

    /**
     * Gets device_data
     *
     * @return \OpenAPI\Client\Model\DeviceData|null
     */
    public function getDeviceData()
    {
        return $this->container['device_data'];
    }

    /**
     * Sets device_data
     *
     * @param \OpenAPI\Client\Model\DeviceData|null $device_data device_data
     *
     * @return self
     */
    public function setDeviceData($device_data)
    {
        $this->container['device_data'] = $device_data;

        return $this;
    }

    /**
     * Gets e_disclosure_accepted_at
     *
     * @return \DateTime
     */
    public function getEDisclosureAcceptedAt()
    {
        return $this->container['e_disclosure_accepted_at'];
    }

    /**
     * Sets e_disclosure_accepted_at
     *
     * @param \DateTime $e_disclosure_accepted_at Date and time when Marqeta accepted the e-Disclosure, in UTC.  Returned if the user accepted their approved application.
     *
     * @return self
     */
    public function setEDisclosureAcceptedAt($e_disclosure_accepted_at)
    {
        $this->container['e_disclosure_accepted_at'] = $e_disclosure_accepted_at;

        return $this;
    }

    /**
     * Gets error_details
     *
     * @return \OpenAPI\Client\Model\ErrorDetailsResponse|null
     */
    public function getErrorDetails()
    {
        return $this->container['error_details'];
    }

    /**
     * Sets error_details
     *
     * @param \OpenAPI\Client\Model\ErrorDetailsResponse|null $error_details error_details
     *
     * @return self
     */
    public function setErrorDetails($error_details)
    {
        $this->container['error_details'] = $error_details;

        return $this;
    }

    /**
     * Gets meta_data
     *
     * @return object|null
     */
    public function getMetaData()
    {
        return $this->container['meta_data'];
    }

    /**
     * Sets meta_data
     *
     * @param object|null $meta_data Customer-defined additional information about the application.
     *
     * @return self
     */
    public function setMetaData($meta_data)
    {
        $this->container['meta_data'] = $meta_data;

        return $this;
    }

    /**
     * Gets monthly_mortgage_or_rent
     *
     * @return float|null
     */
    public function getMonthlyMortgageOrRent()
    {
        return $this->container['monthly_mortgage_or_rent'];
    }

    /**
     * Sets monthly_mortgage_or_rent
     *
     * @param float|null $monthly_mortgage_or_rent Monthly amount of the mortgage or rent that the user currently pays.
     *
     * @return self
     */
    public function setMonthlyMortgageOrRent($monthly_mortgage_or_rent)
    {
        $this->container['monthly_mortgage_or_rent'] = $monthly_mortgage_or_rent;

        return $this;
    }

    /**
     * Gets offer_id
     *
     * @return string|null
     */
    public function getOfferId()
    {
        return $this->container['offer_id'];
    }

    /**
     * Sets offer_id
     *
     * @param string|null $offer_id Unique identifier of the offer for a pre-screened applicant.
     *
     * @return self
     */
    public function setOfferId($offer_id)
    {
        $this->container['offer_id'] = $offer_id;

        return $this;
    }

    /**
     * Gets prequalified_offer_pre_terms_accepted_at
     *
     * @return \DateTime|null
     */
    public function getPrequalifiedOfferPreTermsAcceptedAt()
    {
        return $this->container['prequalified_offer_pre_terms_accepted_at'];
    }

    /**
     * Sets prequalified_offer_pre_terms_accepted_at
     *
     * @param \DateTime|null $prequalified_offer_pre_terms_accepted_at Date and time when Marqeta accepted the Pre-qualified Offer Pre-terms, in UTC.  Returned if the user accepted their approved application.
     *
     * @return self
     */
    public function setPrequalifiedOfferPreTermsAcceptedAt($prequalified_offer_pre_terms_accepted_at)
    {
        $this->container['prequalified_offer_pre_terms_accepted_at'] = $prequalified_offer_pre_terms_accepted_at;

        return $this;
    }

    /**
     * Gets primary_income_source
     *
     * @return string|null
     */
    public function getPrimaryIncomeSource()
    {
        return $this->container['primary_income_source'];
    }

    /**
     * Sets primary_income_source
     *
     * @param string|null $primary_income_source Whether the primary income source comes from the user being employed, unemployed, self-employment, or another situation.
     *
     * @return self
     */
    public function setPrimaryIncomeSource($primary_income_source)
    {
        $allowedValues = $this->getPrimaryIncomeSourceAllowableValues();
        if (!is_null($primary_income_source) && !in_array($primary_income_source, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'primary_income_source', must be one of '%s'",
                    $primary_income_source,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['primary_income_source'] = $primary_income_source;

        return $this;
    }

    /**
     * Gets privacy_policy_accepted_at
     *
     * @return \DateTime
     */
    public function getPrivacyPolicyAcceptedAt()
    {
        return $this->container['privacy_policy_accepted_at'];
    }

    /**
     * Sets privacy_policy_accepted_at
     *
     * @param \DateTime $privacy_policy_accepted_at Date and time when Marqeta accepted the Privacy Policy, in UTC.  Returned if the user accepted their approved application.
     *
     * @return self
     */
    public function setPrivacyPolicyAcceptedAt($privacy_policy_accepted_at)
    {
        $this->container['privacy_policy_accepted_at'] = $privacy_policy_accepted_at;

        return $this;
    }

    /**
     * Gets residence_type
     *
     * @return string|null
     */
    public function getResidenceType()
    {
        return $this->container['residence_type'];
    }

    /**
     * Sets residence_type
     *
     * @param string|null $residence_type Whether the user owns or rents their residence, or has another situation.
     *
     * @return self
     */
    public function setResidenceType($residence_type)
    {
        $allowedValues = $this->getResidenceTypeAllowableValues();
        if (!is_null($residence_type) && !in_array($residence_type, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'residence_type', must be one of '%s'",
                    $residence_type,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['residence_type'] = $residence_type;

        return $this;
    }

    /**
     * Gets rewards_disclosure_post_terms_accepted_at
     *
     * @return \DateTime|null
     */
    public function getRewardsDisclosurePostTermsAcceptedAt()
    {
        return $this->container['rewards_disclosure_post_terms_accepted_at'];
    }

    /**
     * Sets rewards_disclosure_post_terms_accepted_at
     *
     * @param \DateTime|null $rewards_disclosure_post_terms_accepted_at Date and time when Marqeta accepted the Rewards Disclosure, in UTC.  Returned if the user accepted their approved application.
     *
     * @return self
     */
    public function setRewardsDisclosurePostTermsAcceptedAt($rewards_disclosure_post_terms_accepted_at)
    {
        $this->container['rewards_disclosure_post_terms_accepted_at'] = $rewards_disclosure_post_terms_accepted_at;

        return $this;
    }

    /**
     * Gets rewards_disclosure_pre_terms_accepted_at
     *
     * @return \DateTime
     */
    public function getRewardsDisclosurePreTermsAcceptedAt()
    {
        return $this->container['rewards_disclosure_pre_terms_accepted_at'];
    }

    /**
     * Sets rewards_disclosure_pre_terms_accepted_at
     *
     * @param \DateTime $rewards_disclosure_pre_terms_accepted_at Date and time when Marqeta accepted the Rewards Disclosure, in UTC.  Returned if the user accepted their approved application.
     *
     * @return self
     */
    public function setRewardsDisclosurePreTermsAcceptedAt($rewards_disclosure_pre_terms_accepted_at)
    {
        $this->container['rewards_disclosure_pre_terms_accepted_at'] = $rewards_disclosure_pre_terms_accepted_at;

        return $this;
    }

    /**
     * Gets soct_accepted_at
     *
     * @return \DateTime
     */
    public function getSoctAcceptedAt()
    {
        return $this->container['soct_accepted_at'];
    }

    /**
     * Sets soct_accepted_at
     *
     * @param \DateTime $soct_accepted_at Date and time when Marqeta accepted the Summary of Credit Terms (SOCT), in UTC.  Returned if the user accepted their approved application.
     *
     * @return self
     */
    public function setSoctAcceptedAt($soct_accepted_at)
    {
        $this->container['soct_accepted_at'] = $soct_accepted_at;

        return $this;
    }

    /**
     * Gets state
     *
     * @return \OpenAPI\Client\Model\ApplicationResourceState
     */
    public function getState()
    {
        return $this->container['state'];
    }

    /**
     * Sets state
     *
     * @param \OpenAPI\Client\Model\ApplicationResourceState $state state
     *
     * @return self
     */
    public function setState($state)
    {
        $this->container['state'] = $state;

        return $this;
    }

    /**
     * Gets term_schedule_information_accepted_at
     *
     * @return \DateTime|null
     */
    public function getTermScheduleInformationAcceptedAt()
    {
        return $this->container['term_schedule_information_accepted_at'];
    }

    /**
     * Sets term_schedule_information_accepted_at
     *
     * @param \DateTime|null $term_schedule_information_accepted_at Date and time when Marqeta accepted the Terms Schedule, in UTC.  Returned if the user accepted their approved application.
     *
     * @return self
     */
    public function setTermScheduleInformationAcceptedAt($term_schedule_information_accepted_at)
    {
        $this->container['term_schedule_information_accepted_at'] = $term_schedule_information_accepted_at;

        return $this;
    }

    /**
     * Gets token
     *
     * @return string
     */
    public function getToken()
    {
        return $this->container['token'];
    }

    /**
     * Sets token
     *
     * @param string $token Unique identifier of the application.
     *
     * @return self
     */
    public function setToken($token)
    {
        $this->container['token'] = $token;

        return $this;
    }

    /**
     * Gets total_annual_income
     *
     * @return float|null
     */
    public function getTotalAnnualIncome()
    {
        return $this->container['total_annual_income'];
    }

    /**
     * Sets total_annual_income
     *
     * @param float|null $total_annual_income The total amount of the user's annual income.
     *
     * @return self
     */
    public function setTotalAnnualIncome($total_annual_income)
    {
        $this->container['total_annual_income'] = $total_annual_income;

        return $this;
    }

    /**
     * Gets type
     *
     * @return \OpenAPI\Client\Model\ApplicationType
     */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
     * Sets type
     *
     * @param \OpenAPI\Client\Model\ApplicationType $type type
     *
     * @return self
     */
    public function setType($type)
    {
        $this->container['type'] = $type;

        return $this;
    }

    /**
     * Gets updated_date
     *
     * @return \DateTime
     */
    public function getUpdatedDate()
    {
        return $this->container['updated_date'];
    }

    /**
     * Sets updated_date
     *
     * @param \DateTime $updated_date Date and time when the application was last updated on the Marqeta platform, in UTC.
     *
     * @return self
     */
    public function setUpdatedDate($updated_date)
    {
        $this->container['updated_date'] = $updated_date;

        return $this;
    }

    /**
     * Gets user_token
     *
     * @return string
     */
    public function getUserToken()
    {
        return $this->container['user_token'];
    }

    /**
     * Sets user_token
     *
     * @param string $user_token Unique identifier of the applicant, the user applying for a credit account.
     *
     * @return self
     */
    public function setUserToken($user_token)
    {
        $this->container['user_token'] = $user_token;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed|null
     */
    public function offsetGet($offset)
    {
        return $this->container[$offset] ?? null;
    }

    /**
     * Sets value based on offset.
     *
     * @param int|null $offset Offset
     * @param mixed    $value  Value to be set
     *
     * @return void
     */
    public function offsetSet($offset, $value)
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /**
     * Unsets offset.
     *
     * @param integer $offset Offset
     *
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Serializes the object to a value that can be serialized natively by json_encode().
     * @link https://www.php.net/manual/en/jsonserializable.jsonserialize.php
     *
     * @return mixed Returns data which can be serialized by json_encode(), which is a value
     * of any type other than a resource.
     */
    public function jsonSerialize()
    {
       return ObjectSerializer::sanitizeForSerialization($this);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        return json_encode(
            ObjectSerializer::sanitizeForSerialization($this),
            JSON_PRETTY_PRINT
        );
    }

    /**
     * Gets a header-safe presentation of the object
     *
     * @return string
     */
    public function toHeaderValue()
    {
        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}


