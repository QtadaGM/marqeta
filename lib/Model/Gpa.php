<?php
/**
 * Gpa
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
 * Gpa Class Doc Comment
 *
 * @category Class
 * @description Defines the type of order.
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class Gpa implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'gpa';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'reload_amount' => 'float',
        'trigger_amount' => 'float'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'reload_amount' => null,
        'trigger_amount' => null
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
        'reload_amount' => 'reload_amount',
        'trigger_amount' => 'trigger_amount'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'reload_amount' => 'setReloadAmount',
        'trigger_amount' => 'setTriggerAmount'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'reload_amount' => 'getReloadAmount',
        'trigger_amount' => 'getTriggerAmount'
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
        $this->container['reload_amount'] = $data['reload_amount'] ?? null;
        $this->container['trigger_amount'] = $data['trigger_amount'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['reload_amount'] === null) {
            $invalidProperties[] = "'reload_amount' can't be null";
        }
        if (($this->container['reload_amount'] < 0.01)) {
            $invalidProperties[] = "invalid value for 'reload_amount', must be bigger than or equal to 0.01.";
        }

        if ($this->container['trigger_amount'] === null) {
            $invalidProperties[] = "'trigger_amount' can't be null";
        }
        if (($this->container['trigger_amount'] < 0.01)) {
            $invalidProperties[] = "invalid value for 'trigger_amount', must be bigger than or equal to 0.01.";
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
     * Gets reload_amount
     *
     * @return float
     */
    public function getReloadAmount()
    {
        return $this->container['reload_amount'];
    }

    /**
     * Sets reload_amount
     *
     * @param float $reload_amount Available balance on the card after the reload has completed.  This value must be greater than or equal to the value of `trigger_amount`. Note that this is not the same as the amount added to the card, which will vary from reload to reload.
     *
     * @return self
     */
    public function setReloadAmount($reload_amount)
    {

        if (($reload_amount < 0.01)) {
            throw new \InvalidArgumentException('invalid value for $reload_amount when calling Gpa., must be bigger than or equal to 0.01.');
        }

        $this->container['reload_amount'] = $reload_amount;

        return $this;
    }

    /**
     * Gets trigger_amount
     *
     * @return float
     */
    public function getTriggerAmount()
    {
        return $this->container['trigger_amount'];
    }

    /**
     * Sets trigger_amount
     *
     * @param float $trigger_amount Threshold that determines when the reload happens.  The reload is triggered when the card balance falls below this amount.
     *
     * @return self
     */
    public function setTriggerAmount($trigger_amount)
    {

        if (($trigger_amount < 0.01)) {
            throw new \InvalidArgumentException('invalid value for $trigger_amount when calling Gpa., must be bigger than or equal to 0.01.');
        }

        $this->container['trigger_amount'] = $trigger_amount;

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

