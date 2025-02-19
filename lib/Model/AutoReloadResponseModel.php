<?php
/**
 * AutoReloadResponseModel
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
 * AutoReloadResponseModel Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class AutoReloadResponseModel implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'auto_reload_response_model';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'active' => 'bool',
        'association' => '\OpenAPI\Client\Model\AutoReloadAssociation',
        'created_time' => '\DateTime',
        'currency_code' => 'string',
        'funding_source_address_token' => 'string',
        'funding_source_token' => 'string',
        'last_modified_time' => '\DateTime',
        'order_scope' => '\OpenAPI\Client\Model\OrderScope',
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
        'active' => null,
        'association' => null,
        'created_time' => 'date-time',
        'currency_code' => null,
        'funding_source_address_token' => null,
        'funding_source_token' => null,
        'last_modified_time' => 'date-time',
        'order_scope' => null,
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
        'active' => 'active',
        'association' => 'association',
        'created_time' => 'created_time',
        'currency_code' => 'currency_code',
        'funding_source_address_token' => 'funding_source_address_token',
        'funding_source_token' => 'funding_source_token',
        'last_modified_time' => 'last_modified_time',
        'order_scope' => 'order_scope',
        'token' => 'token'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'active' => 'setActive',
        'association' => 'setAssociation',
        'created_time' => 'setCreatedTime',
        'currency_code' => 'setCurrencyCode',
        'funding_source_address_token' => 'setFundingSourceAddressToken',
        'funding_source_token' => 'setFundingSourceToken',
        'last_modified_time' => 'setLastModifiedTime',
        'order_scope' => 'setOrderScope',
        'token' => 'setToken'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'active' => 'getActive',
        'association' => 'getAssociation',
        'created_time' => 'getCreatedTime',
        'currency_code' => 'getCurrencyCode',
        'funding_source_address_token' => 'getFundingSourceAddressToken',
        'funding_source_token' => 'getFundingSourceToken',
        'last_modified_time' => 'getLastModifiedTime',
        'order_scope' => 'getOrderScope',
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
        $this->container['active'] = $data['active'] ?? true;
        $this->container['association'] = $data['association'] ?? null;
        $this->container['created_time'] = $data['created_time'] ?? null;
        $this->container['currency_code'] = $data['currency_code'] ?? null;
        $this->container['funding_source_address_token'] = $data['funding_source_address_token'] ?? null;
        $this->container['funding_source_token'] = $data['funding_source_token'] ?? null;
        $this->container['last_modified_time'] = $data['last_modified_time'] ?? null;
        $this->container['order_scope'] = $data['order_scope'] ?? null;
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
        if ($this->container['currency_code'] === null) {
            $invalidProperties[] = "'currency_code' can't be null";
        }
        if (!is_null($this->container['funding_source_address_token']) && (mb_strlen($this->container['funding_source_address_token']) > 36)) {
            $invalidProperties[] = "invalid value for 'funding_source_address_token', the character length must be smaller than or equal to 36.";
        }

        if (!is_null($this->container['funding_source_address_token']) && (mb_strlen($this->container['funding_source_address_token']) < 1)) {
            $invalidProperties[] = "invalid value for 'funding_source_address_token', the character length must be bigger than or equal to 1.";
        }

        if (!is_null($this->container['funding_source_token']) && (mb_strlen($this->container['funding_source_token']) > 36)) {
            $invalidProperties[] = "invalid value for 'funding_source_token', the character length must be smaller than or equal to 36.";
        }

        if (!is_null($this->container['funding_source_token']) && (mb_strlen($this->container['funding_source_token']) < 1)) {
            $invalidProperties[] = "invalid value for 'funding_source_token', the character length must be bigger than or equal to 1.";
        }

        if ($this->container['last_modified_time'] === null) {
            $invalidProperties[] = "'last_modified_time' can't be null";
        }
        if ($this->container['order_scope'] === null) {
            $invalidProperties[] = "'order_scope' can't be null";
        }
        if (!is_null($this->container['token']) && (mb_strlen($this->container['token']) > 36)) {
            $invalidProperties[] = "invalid value for 'token', the character length must be smaller than or equal to 36.";
        }

        if (!is_null($this->container['token']) && (mb_strlen($this->container['token']) < 1)) {
            $invalidProperties[] = "invalid value for 'token', the character length must be bigger than or equal to 1.";
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
     * Gets active
     *
     * @return bool|null
     */
    public function getActive()
    {
        return $this->container['active'];
    }

    /**
     * Sets active
     *
     * @param bool|null $active Specifies whether the auto reload is active.  This field is returned if it exists in the resource.
     *
     * @return self
     */
    public function setActive($active)
    {
        $this->container['active'] = $active;

        return $this;
    }

    /**
     * Gets association
     *
     * @return \OpenAPI\Client\Model\AutoReloadAssociation|null
     */
    public function getAssociation()
    {
        return $this->container['association'];
    }

    /**
     * Sets association
     *
     * @param \OpenAPI\Client\Model\AutoReloadAssociation|null $association association
     *
     * @return self
     */
    public function setAssociation($association)
    {
        $this->container['association'] = $association;

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
     * @param \DateTime $created_time Date and time when the auto reload object was created, in UTC.
     *
     * @return self
     */
    public function setCreatedTime($created_time)
    {
        $this->container['created_time'] = $created_time;

        return $this;
    }

    /**
     * Gets currency_code
     *
     * @return string
     */
    public function getCurrencyCode()
    {
        return $this->container['currency_code'];
    }

    /**
     * Sets currency_code
     *
     * @param string $currency_code Three-digit link:https://www.iso.org/iso-4217-currency-codes.html[ISO 4217 currency code, window=\"_blank\"].
     *
     * @return self
     */
    public function setCurrencyCode($currency_code)
    {
        $this->container['currency_code'] = $currency_code;

        return $this;
    }

    /**
     * Gets funding_source_address_token
     *
     * @return string|null
     */
    public function getFundingSourceAddressToken()
    {
        return $this->container['funding_source_address_token'];
    }

    /**
     * Sets funding_source_address_token
     *
     * @param string|null $funding_source_address_token Unique identifier of the funding source address to use for this auto reload.  This field is returned if it exists in the resource.
     *
     * @return self
     */
    public function setFundingSourceAddressToken($funding_source_address_token)
    {
        if (!is_null($funding_source_address_token) && (mb_strlen($funding_source_address_token) > 36)) {
            throw new \InvalidArgumentException('invalid length for $funding_source_address_token when calling AutoReloadResponseModel., must be smaller than or equal to 36.');
        }
        if (!is_null($funding_source_address_token) && (mb_strlen($funding_source_address_token) < 1)) {
            throw new \InvalidArgumentException('invalid length for $funding_source_address_token when calling AutoReloadResponseModel., must be bigger than or equal to 1.');
        }

        $this->container['funding_source_address_token'] = $funding_source_address_token;

        return $this;
    }

    /**
     * Gets funding_source_token
     *
     * @return string|null
     */
    public function getFundingSourceToken()
    {
        return $this->container['funding_source_token'];
    }

    /**
     * Sets funding_source_token
     *
     * @param string|null $funding_source_token Unique identifier of the funding source to use for this auto reload.  This field is returned if it exists in the resource.
     *
     * @return self
     */
    public function setFundingSourceToken($funding_source_token)
    {
        if (!is_null($funding_source_token) && (mb_strlen($funding_source_token) > 36)) {
            throw new \InvalidArgumentException('invalid length for $funding_source_token when calling AutoReloadResponseModel., must be smaller than or equal to 36.');
        }
        if (!is_null($funding_source_token) && (mb_strlen($funding_source_token) < 1)) {
            throw new \InvalidArgumentException('invalid length for $funding_source_token when calling AutoReloadResponseModel., must be bigger than or equal to 1.');
        }

        $this->container['funding_source_token'] = $funding_source_token;

        return $this;
    }

    /**
     * Gets last_modified_time
     *
     * @return \DateTime
     */
    public function getLastModifiedTime()
    {
        return $this->container['last_modified_time'];
    }

    /**
     * Sets last_modified_time
     *
     * @param \DateTime $last_modified_time Date and time when the auto reload object was last modified, in UTC.
     *
     * @return self
     */
    public function setLastModifiedTime($last_modified_time)
    {
        $this->container['last_modified_time'] = $last_modified_time;

        return $this;
    }

    /**
     * Gets order_scope
     *
     * @return \OpenAPI\Client\Model\OrderScope
     */
    public function getOrderScope()
    {
        return $this->container['order_scope'];
    }

    /**
     * Sets order_scope
     *
     * @param \OpenAPI\Client\Model\OrderScope $order_scope order_scope
     *
     * @return self
     */
    public function setOrderScope($order_scope)
    {
        $this->container['order_scope'] = $order_scope;

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
     * @param string|null $token Unique identifier of the auto reload.  This field is always returned.
     *
     * @return self
     */
    public function setToken($token)
    {
        if (!is_null($token) && (mb_strlen($token) > 36)) {
            throw new \InvalidArgumentException('invalid length for $token when calling AutoReloadResponseModel., must be smaller than or equal to 36.');
        }
        if (!is_null($token) && (mb_strlen($token) < 1)) {
            throw new \InvalidArgumentException('invalid length for $token when calling AutoReloadResponseModel., must be bigger than or equal to 1.');
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


