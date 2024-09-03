<?php
/**
 * DepositDepositResponse
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
 * DepositDepositResponse Class Doc Comment
 *
 * @category Class
 * @description Contains information about a direct deposit.
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class DepositDepositResponse implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'DepositDepositResponse';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'amount' => 'float',
        'business_token' => 'string',
        'company_discretionary_data' => 'string',
        'company_entry_description' => 'string',
        'company_identification' => 'string',
        'company_name' => 'string',
        'created_time' => '\DateTime',
        'direct_deposit_account_token' => 'string',
        'individual_identification_number' => 'string',
        'individual_name' => 'string',
        'last_modified_time' => '\DateTime',
        'settlement_date' => '\DateTime',
        'standard_entry_class_code' => 'string',
        'state' => 'string',
        'state_reason' => 'string',
        'state_reason_code' => 'string',
        'token' => 'string',
        'type' => 'string',
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
        'amount' => null,
        'business_token' => null,
        'company_discretionary_data' => null,
        'company_entry_description' => null,
        'company_identification' => null,
        'company_name' => null,
        'created_time' => 'date-time',
        'direct_deposit_account_token' => null,
        'individual_identification_number' => null,
        'individual_name' => null,
        'last_modified_time' => 'date-time',
        'settlement_date' => 'date-time',
        'standard_entry_class_code' => null,
        'state' => null,
        'state_reason' => null,
        'state_reason_code' => null,
        'token' => null,
        'type' => null,
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
        'amount' => 'amount',
        'business_token' => 'business_token',
        'company_discretionary_data' => 'company_discretionary_data',
        'company_entry_description' => 'company_entry_description',
        'company_identification' => 'company_identification',
        'company_name' => 'company_name',
        'created_time' => 'created_time',
        'direct_deposit_account_token' => 'direct_deposit_account_token',
        'individual_identification_number' => 'individual_identification_number',
        'individual_name' => 'individual_name',
        'last_modified_time' => 'last_modified_time',
        'settlement_date' => 'settlement_date',
        'standard_entry_class_code' => 'standard_entry_class_code',
        'state' => 'state',
        'state_reason' => 'state_reason',
        'state_reason_code' => 'state_reason_code',
        'token' => 'token',
        'type' => 'type',
        'user_token' => 'user_token'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'amount' => 'setAmount',
        'business_token' => 'setBusinessToken',
        'company_discretionary_data' => 'setCompanyDiscretionaryData',
        'company_entry_description' => 'setCompanyEntryDescription',
        'company_identification' => 'setCompanyIdentification',
        'company_name' => 'setCompanyName',
        'created_time' => 'setCreatedTime',
        'direct_deposit_account_token' => 'setDirectDepositAccountToken',
        'individual_identification_number' => 'setIndividualIdentificationNumber',
        'individual_name' => 'setIndividualName',
        'last_modified_time' => 'setLastModifiedTime',
        'settlement_date' => 'setSettlementDate',
        'standard_entry_class_code' => 'setStandardEntryClassCode',
        'state' => 'setState',
        'state_reason' => 'setStateReason',
        'state_reason_code' => 'setStateReasonCode',
        'token' => 'setToken',
        'type' => 'setType',
        'user_token' => 'setUserToken'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'amount' => 'getAmount',
        'business_token' => 'getBusinessToken',
        'company_discretionary_data' => 'getCompanyDiscretionaryData',
        'company_entry_description' => 'getCompanyEntryDescription',
        'company_identification' => 'getCompanyIdentification',
        'company_name' => 'getCompanyName',
        'created_time' => 'getCreatedTime',
        'direct_deposit_account_token' => 'getDirectDepositAccountToken',
        'individual_identification_number' => 'getIndividualIdentificationNumber',
        'individual_name' => 'getIndividualName',
        'last_modified_time' => 'getLastModifiedTime',
        'settlement_date' => 'getSettlementDate',
        'standard_entry_class_code' => 'getStandardEntryClassCode',
        'state' => 'getState',
        'state_reason' => 'getStateReason',
        'state_reason_code' => 'getStateReasonCode',
        'token' => 'getToken',
        'type' => 'getType',
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

    const STATE_PENDING = 'PENDING';
    const STATE_APPLIED = 'APPLIED';
    const STATE_REVERSED = 'REVERSED';
    const STATE_REJECTED = 'REJECTED';
    const TYPE_CREDIT = 'CREDIT';
    const TYPE_DEBIT = 'DEBIT';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getStateAllowableValues()
    {
        return [
            self::STATE_PENDING,
            self::STATE_APPLIED,
            self::STATE_REVERSED,
            self::STATE_REJECTED,
        ];
    }

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getTypeAllowableValues()
    {
        return [
            self::TYPE_CREDIT,
            self::TYPE_DEBIT,
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
        $this->container['amount'] = $data['amount'] ?? null;
        $this->container['business_token'] = $data['business_token'] ?? null;
        $this->container['company_discretionary_data'] = $data['company_discretionary_data'] ?? null;
        $this->container['company_entry_description'] = $data['company_entry_description'] ?? null;
        $this->container['company_identification'] = $data['company_identification'] ?? null;
        $this->container['company_name'] = $data['company_name'] ?? null;
        $this->container['created_time'] = $data['created_time'] ?? null;
        $this->container['direct_deposit_account_token'] = $data['direct_deposit_account_token'] ?? null;
        $this->container['individual_identification_number'] = $data['individual_identification_number'] ?? null;
        $this->container['individual_name'] = $data['individual_name'] ?? null;
        $this->container['last_modified_time'] = $data['last_modified_time'] ?? null;
        $this->container['settlement_date'] = $data['settlement_date'] ?? null;
        $this->container['standard_entry_class_code'] = $data['standard_entry_class_code'] ?? null;
        $this->container['state'] = $data['state'] ?? null;
        $this->container['state_reason'] = $data['state_reason'] ?? null;
        $this->container['state_reason_code'] = $data['state_reason_code'] ?? null;
        $this->container['token'] = $data['token'] ?? null;
        $this->container['type'] = $data['type'] ?? null;
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

        $allowedValues = $this->getStateAllowableValues();
        if (!is_null($this->container['state']) && !in_array($this->container['state'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'state', must be one of '%s'",
                $this->container['state'],
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getTypeAllowableValues();
        if (!is_null($this->container['type']) && !in_array($this->container['type'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'type', must be one of '%s'",
                $this->container['type'],
                implode("', '", $allowedValues)
            );
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
     * Gets amount
     *
     * @return float|null
     */
    public function getAmount()
    {
        return $this->container['amount'];
    }

    /**
     * Sets amount
     *
     * @param float|null $amount Amount being debited or credited.
     *
     * @return self
     */
    public function setAmount($amount)
    {
        $this->container['amount'] = $amount;

        return $this;
    }

    /**
     * Gets business_token
     *
     * @return string|null
     */
    public function getBusinessToken()
    {
        return $this->container['business_token'];
    }

    /**
     * Sets business_token
     *
     * @param string|null $business_token The unique identifier of the business account holder.
     *
     * @return self
     */
    public function setBusinessToken($business_token)
    {
        $this->container['business_token'] = $business_token;

        return $this;
    }

    /**
     * Gets company_discretionary_data
     *
     * @return string|null
     */
    public function getCompanyDiscretionaryData()
    {
        return $this->container['company_discretionary_data'];
    }

    /**
     * Sets company_discretionary_data
     *
     * @param string|null $company_discretionary_data Company-specific data provided by the direct deposit originator.
     *
     * @return self
     */
    public function setCompanyDiscretionaryData($company_discretionary_data)
    {
        $this->container['company_discretionary_data'] = $company_discretionary_data;

        return $this;
    }

    /**
     * Gets company_entry_description
     *
     * @return string|null
     */
    public function getCompanyEntryDescription()
    {
        return $this->container['company_entry_description'];
    }

    /**
     * Sets company_entry_description
     *
     * @param string|null $company_entry_description Company-specific data provided by the direct deposit originator.
     *
     * @return self
     */
    public function setCompanyEntryDescription($company_entry_description)
    {
        $this->container['company_entry_description'] = $company_entry_description;

        return $this;
    }

    /**
     * Gets company_identification
     *
     * @return string|null
     */
    public function getCompanyIdentification()
    {
        return $this->container['company_identification'];
    }

    /**
     * Sets company_identification
     *
     * @param string|null $company_identification Alphanumeric code that identifies the direct deposit originator.
     *
     * @return self
     */
    public function setCompanyIdentification($company_identification)
    {
        $this->container['company_identification'] = $company_identification;

        return $this;
    }

    /**
     * Gets company_name
     *
     * @return string|null
     */
    public function getCompanyName()
    {
        return $this->container['company_name'];
    }

    /**
     * Sets company_name
     *
     * @param string|null $company_name Name of the direct deposit originator.
     *
     * @return self
     */
    public function setCompanyName($company_name)
    {
        $this->container['company_name'] = $company_name;

        return $this;
    }

    /**
     * Gets created_time
     *
     * @return \DateTime|null
     */
    public function getCreatedTime()
    {
        return $this->container['created_time'];
    }

    /**
     * Sets created_time
     *
     * @param \DateTime|null $created_time Date and time when the direct deposit account was created.
     *
     * @return self
     */
    public function setCreatedTime($created_time)
    {
        $this->container['created_time'] = $created_time;

        return $this;
    }

    /**
     * Gets direct_deposit_account_token
     *
     * @return string|null
     */
    public function getDirectDepositAccountToken()
    {
        return $this->container['direct_deposit_account_token'];
    }

    /**
     * Sets direct_deposit_account_token
     *
     * @param string|null $direct_deposit_account_token The unique identifier of the direct deposit account.
     *
     * @return self
     */
    public function setDirectDepositAccountToken($direct_deposit_account_token)
    {
        $this->container['direct_deposit_account_token'] = $direct_deposit_account_token;

        return $this;
    }

    /**
     * Gets individual_identification_number
     *
     * @return string|null
     */
    public function getIndividualIdentificationNumber()
    {
        return $this->container['individual_identification_number'];
    }

    /**
     * Sets individual_identification_number
     *
     * @param string|null $individual_identification_number Accounting number by which the recipient is known to the direct deposit originator.
     *
     * @return self
     */
    public function setIndividualIdentificationNumber($individual_identification_number)
    {
        $this->container['individual_identification_number'] = $individual_identification_number;

        return $this;
    }

    /**
     * Gets individual_name
     *
     * @return string|null
     */
    public function getIndividualName()
    {
        return $this->container['individual_name'];
    }

    /**
     * Sets individual_name
     *
     * @param string|null $individual_name Name of the direct deposit recipient.
     *
     * @return self
     */
    public function setIndividualName($individual_name)
    {
        $this->container['individual_name'] = $individual_name;

        return $this;
    }

    /**
     * Gets last_modified_time
     *
     * @return \DateTime|null
     */
    public function getLastModifiedTime()
    {
        return $this->container['last_modified_time'];
    }

    /**
     * Sets last_modified_time
     *
     * @param \DateTime|null $last_modified_time Date and time when the direct deposit account was last modified.
     *
     * @return self
     */
    public function setLastModifiedTime($last_modified_time)
    {
        $this->container['last_modified_time'] = $last_modified_time;

        return $this;
    }

    /**
     * Gets settlement_date
     *
     * @return \DateTime|null
     */
    public function getSettlementDate()
    {
        return $this->container['settlement_date'];
    }

    /**
     * Sets settlement_date
     *
     * @param \DateTime|null $settlement_date Date and time when the credit or debit is applied.
     *
     * @return self
     */
    public function setSettlementDate($settlement_date)
    {
        $this->container['settlement_date'] = $settlement_date;

        return $this;
    }

    /**
     * Gets standard_entry_class_code
     *
     * @return string|null
     */
    public function getStandardEntryClassCode()
    {
        return $this->container['standard_entry_class_code'];
    }

    /**
     * Sets standard_entry_class_code
     *
     * @param string|null $standard_entry_class_code Three-letter code identifying the type of entry.
     *
     * @return self
     */
    public function setStandardEntryClassCode($standard_entry_class_code)
    {
        $this->container['standard_entry_class_code'] = $standard_entry_class_code;

        return $this;
    }

    /**
     * Gets state
     *
     * @return string|null
     */
    public function getState()
    {
        return $this->container['state'];
    }

    /**
     * Sets state
     *
     * @param string|null $state Current status of the direct deposit record.
     *
     * @return self
     */
    public function setState($state)
    {
        $allowedValues = $this->getStateAllowableValues();
        if (!is_null($state) && !in_array($state, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'state', must be one of '%s'",
                    $state,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['state'] = $state;

        return $this;
    }

    /**
     * Gets state_reason
     *
     * @return string|null
     */
    public function getStateReason()
    {
        return $this->container['state_reason'];
    }

    /**
     * Sets state_reason
     *
     * @param string|null $state_reason Explanation for why the direct deposit record is in the current state.
     *
     * @return self
     */
    public function setStateReason($state_reason)
    {
        $this->container['state_reason'] = $state_reason;

        return $this;
    }

    /**
     * Gets state_reason_code
     *
     * @return string|null
     */
    public function getStateReasonCode()
    {
        return $this->container['state_reason_code'];
    }

    /**
     * Sets state_reason_code
     *
     * @param string|null $state_reason_code Standard code describing the reason for the current state.
     *
     * @return self
     */
    public function setStateReasonCode($state_reason_code)
    {
        $this->container['state_reason_code'] = $state_reason_code;

        return $this;
    }

    /**
     * Gets token
     *
     * @return string|null
     */
    public function getToken()
    {
        return $this->container['token'];
    }

    /**
     * Sets token
     *
     * @param string|null $token The unique identifier of the direct deposit record.
     *
     * @return self
     */
    public function setToken($token)
    {
        $this->container['token'] = $token;

        return $this;
    }

    /**
     * Gets type
     *
     * @return string|null
     */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
     * Sets type
     *
     * @param string|null $type Determines whether funds are being debited from or credited to the account.
     *
     * @return self
     */
    public function setType($type)
    {
        $allowedValues = $this->getTypeAllowableValues();
        if (!is_null($type) && !in_array($type, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'type', must be one of '%s'",
                    $type,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['type'] = $type;

        return $this;
    }

    /**
     * Gets user_token
     *
     * @return string|null
     */
    public function getUserToken()
    {
        return $this->container['user_token'];
    }

    /**
     * Sets user_token
     *
     * @param string|null $user_token The unique identifier of the user account holder.
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

