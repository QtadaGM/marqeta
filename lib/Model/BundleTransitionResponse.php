<?php
/**
 * BundleTransitionResponse
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
 * BundleTransitionResponse Class Doc Comment
 *
 * @category Class
 * @description Contains information on a bundle transition.
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class BundleTransitionResponse implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'BundleTransitionResponse';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'bundle_token' => 'string',
        'created_time' => '\DateTime',
        'original_status' => '\OpenAPI\Client\Model\BundleResourceStatus',
        'status' => '\OpenAPI\Client\Model\BundleResourceStatus',
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
        'bundle_token' => null,
        'created_time' => 'date-time',
        'original_status' => null,
        'status' => null,
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
        'bundle_token' => 'bundle_token',
        'created_time' => 'created_time',
        'original_status' => 'original_status',
        'status' => 'status',
        'token' => 'token'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'bundle_token' => 'setBundleToken',
        'created_time' => 'setCreatedTime',
        'original_status' => 'setOriginalStatus',
        'status' => 'setStatus',
        'token' => 'setToken'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'bundle_token' => 'getBundleToken',
        'created_time' => 'getCreatedTime',
        'original_status' => 'getOriginalStatus',
        'status' => 'getStatus',
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
        $this->container['bundle_token'] = $data['bundle_token'] ?? null;
        $this->container['created_time'] = $data['created_time'] ?? null;
        $this->container['original_status'] = $data['original_status'] ?? null;
        $this->container['status'] = $data['status'] ?? null;
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

        if (!is_null($this->container['bundle_token']) && (mb_strlen($this->container['bundle_token']) > 36)) {
            $invalidProperties[] = "invalid value for 'bundle_token', the character length must be smaller than or equal to 36.";
        }

        if (!is_null($this->container['token']) && (mb_strlen($this->container['token']) > 36)) {
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
     * Gets bundle_token
     *
     * @return string|null
     */
    public function getBundleToken()
    {
        return $this->container['bundle_token'];
    }

    /**
     * Sets bundle_token
     *
     * @param string|null $bundle_token Unique identifier of the bundle.
     *
     * @return self
     */
    public function setBundleToken($bundle_token)
    {
        if (!is_null($bundle_token) && (mb_strlen($bundle_token) > 36)) {
            throw new \InvalidArgumentException('invalid length for $bundle_token when calling BundleTransitionResponse., must be smaller than or equal to 36.');
        }

        $this->container['bundle_token'] = $bundle_token;

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
     * @param \DateTime|null $created_time Date and time when the bundle was changed the status on Marqeta's credit platform, in UTC.
     *
     * @return self
     */
    public function setCreatedTime($created_time)
    {
        $this->container['created_time'] = $created_time;

        return $this;
    }

    /**
     * Gets original_status
     *
     * @return \OpenAPI\Client\Model\BundleResourceStatus|null
     */
    public function getOriginalStatus()
    {
        return $this->container['original_status'];
    }

    /**
     * Sets original_status
     *
     * @param \OpenAPI\Client\Model\BundleResourceStatus|null $original_status original_status
     *
     * @return self
     */
    public function setOriginalStatus($original_status)
    {
        $this->container['original_status'] = $original_status;

        return $this;
    }

    /**
     * Gets status
     *
     * @return \OpenAPI\Client\Model\BundleResourceStatus|null
     */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
     * Sets status
     *
     * @param \OpenAPI\Client\Model\BundleResourceStatus|null $status status
     *
     * @return self
     */
    public function setStatus($status)
    {
        $this->container['status'] = $status;

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
     * @param string|null $token Unique identifier of the bundle transition.
     *
     * @return self
     */
    public function setToken($token)
    {
        if (!is_null($token) && (mb_strlen($token) > 36)) {
            throw new \InvalidArgumentException('invalid length for $token when calling BundleTransitionResponse., must be smaller than or equal to 36.');
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


