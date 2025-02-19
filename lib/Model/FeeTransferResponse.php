<?php
/**
 * FeeTransferResponse
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
 * FeeTransferResponse Class Doc Comment
 *
 * @category Class
 * @description Contains information about a fee charge, including the amount, currency code, and user or business token.
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class FeeTransferResponse implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'fee_transfer_response';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'business_token' => 'string',
        'created_time' => '\DateTime',
        'fees' => '\OpenAPI\Client\Model\FeeDetail[]',
        'tags' => 'string',
        'token' => 'string',
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
        'business_token' => null,
        'created_time' => 'date-time',
        'fees' => null,
        'tags' => null,
        'token' => null,
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
        'business_token' => 'business_token',
        'created_time' => 'created_time',
        'fees' => 'fees',
        'tags' => 'tags',
        'token' => 'token',
        'user_token' => 'user_token'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'business_token' => 'setBusinessToken',
        'created_time' => 'setCreatedTime',
        'fees' => 'setFees',
        'tags' => 'setTags',
        'token' => 'setToken',
        'user_token' => 'setUserToken'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'business_token' => 'getBusinessToken',
        'created_time' => 'getCreatedTime',
        'fees' => 'getFees',
        'tags' => 'getTags',
        'token' => 'getToken',
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
        $this->container['business_token'] = $data['business_token'] ?? null;
        $this->container['created_time'] = $data['created_time'] ?? null;
        $this->container['fees'] = $data['fees'] ?? null;
        $this->container['tags'] = $data['tags'] ?? null;
        $this->container['token'] = $data['token'] ?? null;
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

        if ($this->container['business_token'] === null) {
            $invalidProperties[] = "'business_token' can't be null";
        }
        if ((mb_strlen($this->container['business_token']) > 36)) {
            $invalidProperties[] = "invalid value for 'business_token', the character length must be smaller than or equal to 36.";
        }

        if ((mb_strlen($this->container['business_token']) < 1)) {
            $invalidProperties[] = "invalid value for 'business_token', the character length must be bigger than or equal to 1.";
        }

        if ($this->container['created_time'] === null) {
            $invalidProperties[] = "'created_time' can't be null";
        }
        if ($this->container['fees'] === null) {
            $invalidProperties[] = "'fees' can't be null";
        }
        if (!is_null($this->container['tags']) && (mb_strlen($this->container['tags']) > 255)) {
            $invalidProperties[] = "invalid value for 'tags', the character length must be smaller than or equal to 255.";
        }

        if (!is_null($this->container['tags']) && (mb_strlen($this->container['tags']) < 0)) {
            $invalidProperties[] = "invalid value for 'tags', the character length must be bigger than or equal to 0.";
        }

        if ($this->container['token'] === null) {
            $invalidProperties[] = "'token' can't be null";
        }
        if ((mb_strlen($this->container['token']) > 36)) {
            $invalidProperties[] = "invalid value for 'token', the character length must be smaller than or equal to 36.";
        }

        if ((mb_strlen($this->container['token']) < 1)) {
            $invalidProperties[] = "invalid value for 'token', the character length must be bigger than or equal to 1.";
        }

        if ($this->container['user_token'] === null) {
            $invalidProperties[] = "'user_token' can't be null";
        }
        if ((mb_strlen($this->container['user_token']) > 36)) {
            $invalidProperties[] = "invalid value for 'user_token', the character length must be smaller than or equal to 36.";
        }

        if ((mb_strlen($this->container['user_token']) < 1)) {
            $invalidProperties[] = "invalid value for 'user_token', the character length must be bigger than or equal to 1.";
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
     * Gets business_token
     *
     * @return string
     */
    public function getBusinessToken()
    {
        return $this->container['business_token'];
    }

    /**
     * Sets business_token
     *
     * @param string $business_token Specifies the business account holder to which the fee applies.
     *
     * @return self
     */
    public function setBusinessToken($business_token)
    {
        if ((mb_strlen($business_token) > 36)) {
            throw new \InvalidArgumentException('invalid length for $business_token when calling FeeTransferResponse., must be smaller than or equal to 36.');
        }
        if ((mb_strlen($business_token) < 1)) {
            throw new \InvalidArgumentException('invalid length for $business_token when calling FeeTransferResponse., must be bigger than or equal to 1.');
        }

        $this->container['business_token'] = $business_token;

        return $this;
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
     * @param \DateTime $created_time Date and time when the `fee_charge` object was created, in UTC.
     *
     * @return self
     */
    public function setCreatedTime($created_time)
    {
        $this->container['created_time'] = $created_time;

        return $this;
    }

    /**
     * Gets fees
     *
     * @return \OpenAPI\Client\Model\FeeDetail[]
     */
    public function getFees()
    {
        return $this->container['fees'];
    }

    /**
     * Sets fees
     *
     * @param \OpenAPI\Client\Model\FeeDetail[] $fees Contains attributes that define characteristics of one or more fees.
     *
     * @return self
     */
    public function setFees($fees)
    {
        $this->container['fees'] = $fees;

        return $this;
    }

    /**
     * Gets tags
     *
     * @return string|null
     */
    public function getTags()
    {
        return $this->container['tags'];
    }

    /**
     * Sets tags
     *
     * @param string|null $tags Metadata about the fee charge.  This field is returned if it exists in the resource.
     *
     * @return self
     */
    public function setTags($tags)
    {
        if (!is_null($tags) && (mb_strlen($tags) > 255)) {
            throw new \InvalidArgumentException('invalid length for $tags when calling FeeTransferResponse., must be smaller than or equal to 255.');
        }
        if (!is_null($tags) && (mb_strlen($tags) < 0)) {
            throw new \InvalidArgumentException('invalid length for $tags when calling FeeTransferResponse., must be bigger than or equal to 0.');
        }

        $this->container['tags'] = $tags;

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
     * @param string $token Unique identifier of the fee transfer.
     *
     * @return self
     */
    public function setToken($token)
    {
        if ((mb_strlen($token) > 36)) {
            throw new \InvalidArgumentException('invalid length for $token when calling FeeTransferResponse., must be smaller than or equal to 36.');
        }
        if ((mb_strlen($token) < 1)) {
            throw new \InvalidArgumentException('invalid length for $token when calling FeeTransferResponse., must be bigger than or equal to 1.');
        }

        $this->container['token'] = $token;

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
     * @param string $user_token Specifies the user account holder to which the fee applies.
     *
     * @return self
     */
    public function setUserToken($user_token)
    {
        if ((mb_strlen($user_token) > 36)) {
            throw new \InvalidArgumentException('invalid length for $user_token when calling FeeTransferResponse., must be smaller than or equal to 36.');
        }
        if ((mb_strlen($user_token) < 1)) {
            throw new \InvalidArgumentException('invalid length for $user_token when calling FeeTransferResponse., must be bigger than or equal to 1.');
        }

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


