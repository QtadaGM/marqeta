<?php
/**
 * StatementInterestCharge
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
 * StatementInterestCharge Class Doc Comment
 *
 * @category Class
 * @description Contains information on statement interest charges.
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class StatementInterestCharge implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'StatementInterestCharge';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'amount' => 'float',
        'apr_type' => 'string',
        'apr_value' => 'float',
        'balance_subject_to_interest_rate' => 'float',
        'balance_type' => 'string'
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
        'apr_type' => null,
        'apr_value' => null,
        'balance_subject_to_interest_rate' => null,
        'balance_type' => null
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
        'apr_type' => 'apr_type',
        'apr_value' => 'apr_value',
        'balance_subject_to_interest_rate' => 'balance_subject_to_interest_rate',
        'balance_type' => 'balance_type'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'amount' => 'setAmount',
        'apr_type' => 'setAprType',
        'apr_value' => 'setAprValue',
        'balance_subject_to_interest_rate' => 'setBalanceSubjectToInterestRate',
        'balance_type' => 'setBalanceType'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'amount' => 'getAmount',
        'apr_type' => 'getAprType',
        'apr_value' => 'getAprValue',
        'balance_subject_to_interest_rate' => 'getBalanceSubjectToInterestRate',
        'balance_type' => 'getBalanceType'
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

    const APR_TYPE_GO_TO = 'GO_TO';
    const BALANCE_TYPE_PURCHASE = 'PURCHASE';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getAprTypeAllowableValues()
    {
        return [
            self::APR_TYPE_GO_TO,
        ];
    }

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getBalanceTypeAllowableValues()
    {
        return [
            self::BALANCE_TYPE_PURCHASE,
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
        $this->container['apr_type'] = $data['apr_type'] ?? null;
        $this->container['apr_value'] = $data['apr_value'] ?? null;
        $this->container['balance_subject_to_interest_rate'] = $data['balance_subject_to_interest_rate'] ?? null;
        $this->container['balance_type'] = $data['balance_type'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        $allowedValues = $this->getAprTypeAllowableValues();
        if (!is_null($this->container['apr_type']) && !in_array($this->container['apr_type'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'apr_type', must be one of '%s'",
                $this->container['apr_type'],
                implode("', '", $allowedValues)
            );
        }

        if (!is_null($this->container['apr_value']) && ($this->container['apr_value'] > 100)) {
            $invalidProperties[] = "invalid value for 'apr_value', must be smaller than or equal to 100.";
        }

        if (!is_null($this->container['apr_value']) && ($this->container['apr_value'] < 0)) {
            $invalidProperties[] = "invalid value for 'apr_value', must be bigger than or equal to 0.";
        }

        $allowedValues = $this->getBalanceTypeAllowableValues();
        if (!is_null($this->container['balance_type']) && !in_array($this->container['balance_type'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'balance_type', must be one of '%s'",
                $this->container['balance_type'],
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
     * @param float|null $amount Amount of interest calculated for the billing period.
     *
     * @return self
     */
    public function setAmount($amount)
    {
        $this->container['amount'] = $amount;

        return $this;
    }

    /**
     * Gets apr_type
     *
     * @return string|null
     */
    public function getAprType()
    {
        return $this->container['apr_type'];
    }

    /**
     * Sets apr_type
     *
     * @param string|null $apr_type Type of APR.
     *
     * @return self
     */
    public function setAprType($apr_type)
    {
        $allowedValues = $this->getAprTypeAllowableValues();
        if (!is_null($apr_type) && !in_array($apr_type, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'apr_type', must be one of '%s'",
                    $apr_type,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['apr_type'] = $apr_type;

        return $this;
    }

    /**
     * Gets apr_value
     *
     * @return float|null
     */
    public function getAprValue()
    {
        return $this->container['apr_value'];
    }

    /**
     * Sets apr_value
     *
     * @param float|null $apr_value Annual percentage rate.
     *
     * @return self
     */
    public function setAprValue($apr_value)
    {

        if (!is_null($apr_value) && ($apr_value > 100)) {
            throw new \InvalidArgumentException('invalid value for $apr_value when calling StatementInterestCharge., must be smaller than or equal to 100.');
        }
        if (!is_null($apr_value) && ($apr_value < 0)) {
            throw new \InvalidArgumentException('invalid value for $apr_value when calling StatementInterestCharge., must be bigger than or equal to 0.');
        }

        $this->container['apr_value'] = $apr_value;

        return $this;
    }

    /**
     * Gets balance_subject_to_interest_rate
     *
     * @return float|null
     */
    public function getBalanceSubjectToInterestRate()
    {
        return $this->container['balance_subject_to_interest_rate'];
    }

    /**
     * Sets balance_subject_to_interest_rate
     *
     * @param float|null $balance_subject_to_interest_rate Average daily balance used to calculate interest.
     *
     * @return self
     */
    public function setBalanceSubjectToInterestRate($balance_subject_to_interest_rate)
    {
        $this->container['balance_subject_to_interest_rate'] = $balance_subject_to_interest_rate;

        return $this;
    }

    /**
     * Gets balance_type
     *
     * @return string|null
     */
    public function getBalanceType()
    {
        return $this->container['balance_type'];
    }

    /**
     * Sets balance_type
     *
     * @param string|null $balance_type Type of balance.  * `PURCHASE` - The balance on purchases.
     *
     * @return self
     */
    public function setBalanceType($balance_type)
    {
        $allowedValues = $this->getBalanceTypeAllowableValues();
        if (!is_null($balance_type) && !in_array($balance_type, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'balance_type', must be one of '%s'",
                    $balance_type,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['balance_type'] = $balance_type;

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


