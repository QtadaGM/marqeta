<?php
/**
 * RedemptionTransitionsResponse
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
 * RedemptionTransitionsResponse Class Doc Comment
 *
 * @category Class
 * @description Return redemptions transition.
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class RedemptionTransitionsResponse implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'RedemptionTransitionsResponse';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'created_time' => '\DateTime',
        'external_settlement_date_time' => '\DateTime',
        'initial_status' => '\OpenAPI\Client\Model\RedemptionStatus',
        'new_status' => '\OpenAPI\Client\Model\RedemptionStatus',
        'redemption_token' => 'string',
        'token' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'created_time' => 'date-time',
        'external_settlement_date_time' => 'date-time',
        'initial_status' => null,
        'new_status' => null,
        'redemption_token' => null,
        'token' => null
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
        'created_time' => 'created_time',
        'external_settlement_date_time' => 'external_settlement_date_time',
        'initial_status' => 'initial_status',
        'new_status' => 'new_status',
        'redemption_token' => 'redemption_token',
        'token' => 'token'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'created_time' => 'setCreatedTime',
        'external_settlement_date_time' => 'setExternalSettlementDateTime',
        'initial_status' => 'setInitialStatus',
        'new_status' => 'setNewStatus',
        'redemption_token' => 'setRedemptionToken',
        'token' => 'setToken'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'created_time' => 'getCreatedTime',
        'external_settlement_date_time' => 'getExternalSettlementDateTime',
        'initial_status' => 'getInitialStatus',
        'new_status' => 'getNewStatus',
        'redemption_token' => 'getRedemptionToken',
        'token' => 'getToken'
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
        $this->container['created_time'] = $data['created_time'] ?? null;
        $this->container['external_settlement_date_time'] = $data['external_settlement_date_time'] ?? null;
        $this->container['initial_status'] = $data['initial_status'] ?? null;
        $this->container['new_status'] = $data['new_status'] ?? null;
        $this->container['redemption_token'] = $data['redemption_token'] ?? null;
        $this->container['token'] = $data['token'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['created_time'] === null) {
            $invalidProperties[] = "'created_time' can't be null";
        }
        if ($this->container['initial_status'] === null) {
            $invalidProperties[] = "'initial_status' can't be null";
        }
        if ($this->container['new_status'] === null) {
            $invalidProperties[] = "'new_status' can't be null";
        }
        if ($this->container['redemption_token'] === null) {
            $invalidProperties[] = "'redemption_token' can't be null";
        }
        if ((mb_strlen($this->container['redemption_token']) > 36)) {
            $invalidProperties[] = "invalid value for 'redemption_token', the character length must be smaller than or equal to 36.";
        }

        if ($this->container['token'] === null) {
            $invalidProperties[] = "'token' can't be null";
        }
        if ((mb_strlen($this->container['token']) > 36)) {
            $invalidProperties[] = "invalid value for 'token', the character length must be smaller than or equal to 36.";
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
     * Gets created_time
     *
     * @return \DateTime
     */
    public function getCreatedTime()
    {
        return $this->container['created_time'];
    }

    /**
     * Sets created_time
     *
     * @param \DateTime $created_time Date and time when the reward redemption transition was created on Marqeta's credit platform.
     *
     * @return self
     */
    public function setCreatedTime($created_time)
    {
        $this->container['created_time'] = $created_time;

        return $this;
    }

    /**
     * Gets external_settlement_date_time
     *
     * @return \DateTime|null
     */
    public function getExternalSettlementDateTime()
    {
        return $this->container['external_settlement_date_time'];
    }

    /**
     * Sets external_settlement_date_time
     *
     * @param \DateTime|null $external_settlement_date_time Date and time when the reward redemption was settled on your external platform.  This field is returned if you handled the reward redemption outside of Marqeta's credit platform.
     *
     * @return self
     */
    public function setExternalSettlementDateTime($external_settlement_date_time)
    {
        $this->container['external_settlement_date_time'] = $external_settlement_date_time;

        return $this;
    }

    /**
     * Gets initial_status
     *
     * @return \OpenAPI\Client\Model\RedemptionStatus
     */
    public function getInitialStatus()
    {
        return $this->container['initial_status'];
    }

    /**
     * Sets initial_status
     *
     * @param \OpenAPI\Client\Model\RedemptionStatus $initial_status initial_status
     *
     * @return self
     */
    public function setInitialStatus($initial_status)
    {
        $this->container['initial_status'] = $initial_status;

        return $this;
    }

    /**
     * Gets new_status
     *
     * @return \OpenAPI\Client\Model\RedemptionStatus
     */
    public function getNewStatus()
    {
        return $this->container['new_status'];
    }

    /**
     * Sets new_status
     *
     * @param \OpenAPI\Client\Model\RedemptionStatus $new_status new_status
     *
     * @return self
     */
    public function setNewStatus($new_status)
    {
        $this->container['new_status'] = $new_status;

        return $this;
    }

    /**
     * Gets redemption_token
     *
     * @return string
     */
    public function getRedemptionToken()
    {
        return $this->container['redemption_token'];
    }

    /**
     * Sets redemption_token
     *
     * @param string $redemption_token Unique identifier of the redemption whose status was transitioned.
     *
     * @return self
     */
    public function setRedemptionToken($redemption_token)
    {
        if ((mb_strlen($redemption_token) > 36)) {
            throw new \InvalidArgumentException('invalid length for $redemption_token when calling RedemptionTransitionsResponse., must be smaller than or equal to 36.');
        }

        $this->container['redemption_token'] = $redemption_token;

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
     * @param string $token Unique identifier of the reward redemption transition.
     *
     * @return self
     */
    public function setToken($token)
    {
        if ((mb_strlen($token) > 36)) {
            throw new \InvalidArgumentException('invalid length for $token when calling RedemptionTransitionsResponse., must be smaller than or equal to 36.');
        }

        $this->container['token'] = $token;

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


