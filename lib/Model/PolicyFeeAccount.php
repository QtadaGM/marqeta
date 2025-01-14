<?php
/**
 * PolicyFeeAccount
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
 * PolicyFeeAccount Class Doc Comment
 *
 * @category Class
 * @description Contains information on the fees in an account&#39;s fee policy.
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class PolicyFeeAccount implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'PolicyFeeAccount';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'annual_fee' => '\OpenAPI\Client\Model\PolicyFeePeriodic',
        'foreign_transaction_fee' => '\OpenAPI\Client\Model\PolicyFeeForeignTransaction',
        'late_payment' => '\OpenAPI\Client\Model\PolicyFeePayment',
        'monthly_fee' => '\OpenAPI\Client\Model\PolicyFeePeriodic',
        'returned_payment' => '\OpenAPI\Client\Model\PolicyFeePayment'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'annual_fee' => null,
        'foreign_transaction_fee' => null,
        'late_payment' => null,
        'monthly_fee' => null,
        'returned_payment' => null
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
        'annual_fee' => 'annual_fee',
        'foreign_transaction_fee' => 'foreign_transaction_fee',
        'late_payment' => 'late_payment',
        'monthly_fee' => 'monthly_fee',
        'returned_payment' => 'returned_payment'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'annual_fee' => 'setAnnualFee',
        'foreign_transaction_fee' => 'setForeignTransactionFee',
        'late_payment' => 'setLatePayment',
        'monthly_fee' => 'setMonthlyFee',
        'returned_payment' => 'setReturnedPayment'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'annual_fee' => 'getAnnualFee',
        'foreign_transaction_fee' => 'getForeignTransactionFee',
        'late_payment' => 'getLatePayment',
        'monthly_fee' => 'getMonthlyFee',
        'returned_payment' => 'getReturnedPayment'
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
        $this->container['annual_fee'] = $data['annual_fee'] ?? null;
        $this->container['foreign_transaction_fee'] = $data['foreign_transaction_fee'] ?? null;
        $this->container['late_payment'] = $data['late_payment'] ?? null;
        $this->container['monthly_fee'] = $data['monthly_fee'] ?? null;
        $this->container['returned_payment'] = $data['returned_payment'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

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
     * Gets annual_fee
     *
     * @return \OpenAPI\Client\Model\PolicyFeePeriodic|null
     */
    public function getAnnualFee()
    {
        return $this->container['annual_fee'];
    }

    /**
     * Sets annual_fee
     *
     * @param \OpenAPI\Client\Model\PolicyFeePeriodic|null $annual_fee annual_fee
     *
     * @return self
     */
    public function setAnnualFee($annual_fee)
    {
        $this->container['annual_fee'] = $annual_fee;

        return $this;
    }

    /**
     * Gets foreign_transaction_fee
     *
     * @return \OpenAPI\Client\Model\PolicyFeeForeignTransaction|null
     */
    public function getForeignTransactionFee()
    {
        return $this->container['foreign_transaction_fee'];
    }

    /**
     * Sets foreign_transaction_fee
     *
     * @param \OpenAPI\Client\Model\PolicyFeeForeignTransaction|null $foreign_transaction_fee foreign_transaction_fee
     *
     * @return self
     */
    public function setForeignTransactionFee($foreign_transaction_fee)
    {
        $this->container['foreign_transaction_fee'] = $foreign_transaction_fee;

        return $this;
    }

    /**
     * Gets late_payment
     *
     * @return \OpenAPI\Client\Model\PolicyFeePayment|null
     */
    public function getLatePayment()
    {
        return $this->container['late_payment'];
    }

    /**
     * Sets late_payment
     *
     * @param \OpenAPI\Client\Model\PolicyFeePayment|null $late_payment late_payment
     *
     * @return self
     */
    public function setLatePayment($late_payment)
    {
        $this->container['late_payment'] = $late_payment;

        return $this;
    }

    /**
     * Gets monthly_fee
     *
     * @return \OpenAPI\Client\Model\PolicyFeePeriodic|null
     */
    public function getMonthlyFee()
    {
        return $this->container['monthly_fee'];
    }

    /**
     * Sets monthly_fee
     *
     * @param \OpenAPI\Client\Model\PolicyFeePeriodic|null $monthly_fee monthly_fee
     *
     * @return self
     */
    public function setMonthlyFee($monthly_fee)
    {
        $this->container['monthly_fee'] = $monthly_fee;

        return $this;
    }

    /**
     * Gets returned_payment
     *
     * @return \OpenAPI\Client\Model\PolicyFeePayment|null
     */
    public function getReturnedPayment()
    {
        return $this->container['returned_payment'];
    }

    /**
     * Sets returned_payment
     *
     * @param \OpenAPI\Client\Model\PolicyFeePayment|null $returned_payment returned_payment
     *
     * @return self
     */
    public function setReturnedPayment($returned_payment)
    {
        $this->container['returned_payment'] = $returned_payment;

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


