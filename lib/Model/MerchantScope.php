<?php
/**
 * MerchantScope
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
 * MerchantScope Class Doc Comment
 *
 * @category Class
 * @description Defines the group of merchants to which the velocity control applies.  Populate no more than one field of the &#x60;merchant_scope&#x60; object. If no fields are populated, the velocity control applies to all merchants.
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class MerchantScope implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'merchant_scope';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'mcc' => 'string',
        'mcc_group' => 'string',
        'mid' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'mcc' => null,
        'mcc_group' => null,
        'mid' => null
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
        'mcc' => 'mcc',
        'mcc_group' => 'mcc_group',
        'mid' => 'mid'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'mcc' => 'setMcc',
        'mcc_group' => 'setMccGroup',
        'mid' => 'setMid'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'mcc' => 'getMcc',
        'mcc_group' => 'getMccGroup',
        'mid' => 'getMid'
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
        $this->container['mcc'] = $data['mcc'] ?? null;
        $this->container['mcc_group'] = $data['mcc_group'] ?? null;
        $this->container['mid'] = $data['mid'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if (!is_null($this->container['mcc']) && (mb_strlen($this->container['mcc']) > 4)) {
            $invalidProperties[] = "invalid value for 'mcc', the character length must be smaller than or equal to 4.";
        }

        if (!is_null($this->container['mcc']) && (mb_strlen($this->container['mcc']) < 1)) {
            $invalidProperties[] = "invalid value for 'mcc', the character length must be bigger than or equal to 1.";
        }

        if (!is_null($this->container['mcc_group']) && (mb_strlen($this->container['mcc_group']) > 36)) {
            $invalidProperties[] = "invalid value for 'mcc_group', the character length must be smaller than or equal to 36.";
        }

        if (!is_null($this->container['mcc_group']) && (mb_strlen($this->container['mcc_group']) < 1)) {
            $invalidProperties[] = "invalid value for 'mcc_group', the character length must be bigger than or equal to 1.";
        }

        if (!is_null($this->container['mid']) && (mb_strlen($this->container['mid']) > 36)) {
            $invalidProperties[] = "invalid value for 'mid', the character length must be smaller than or equal to 36.";
        }

        if (!is_null($this->container['mid']) && (mb_strlen($this->container['mid']) < 1)) {
            $invalidProperties[] = "invalid value for 'mid', the character length must be bigger than or equal to 1.";
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
     * Gets mcc
     *
     * @return string|null
     */
    public function getMcc()
    {
        return $this->container['mcc'];
    }

    /**
     * Sets mcc
     *
     * @param string|null $mcc Merchant Category Code (MCC). Identifies the type of products or services provided by the merchant.  Enter a value to control spending on a particular type of product or service.
     *
     * @return self
     */
    public function setMcc($mcc)
    {
        if (!is_null($mcc) && (mb_strlen($mcc) > 4)) {
            throw new \InvalidArgumentException('invalid length for $mcc when calling MerchantScope., must be smaller than or equal to 4.');
        }
        if (!is_null($mcc) && (mb_strlen($mcc) < 1)) {
            throw new \InvalidArgumentException('invalid length for $mcc when calling MerchantScope., must be bigger than or equal to 1.');
        }

        $this->container['mcc'] = $mcc;

        return $this;
    }

    /**
     * Gets mcc_group
     *
     * @return string|null
     */
    public function getMccGroup()
    {
        return $this->container['mcc_group'];
    }

    /**
     * Sets mcc_group
     *
     * @param string|null $mcc_group Token identifying a group of MCCs. Enter a value to control spending on a group of product or service types.  Send a `GET` request to `/mccgroups` to retrieve MCC group tokens.
     *
     * @return self
     */
    public function setMccGroup($mcc_group)
    {
        if (!is_null($mcc_group) && (mb_strlen($mcc_group) > 36)) {
            throw new \InvalidArgumentException('invalid length for $mcc_group when calling MerchantScope., must be smaller than or equal to 36.');
        }
        if (!is_null($mcc_group) && (mb_strlen($mcc_group) < 1)) {
            throw new \InvalidArgumentException('invalid length for $mcc_group when calling MerchantScope., must be bigger than or equal to 1.');
        }

        $this->container['mcc_group'] = $mcc_group;

        return $this;
    }

    /**
     * Gets mid
     *
     * @return string|null
     */
    public function getMid()
    {
        return $this->container['mid'];
    }

    /**
     * Sets mid
     *
     * @param string|null $mid Merchant identifier (MID). Identifies a specific merchant.  Enter a value to control spending with a particular merchant.
     *
     * @return self
     */
    public function setMid($mid)
    {
        if (!is_null($mid) && (mb_strlen($mid) > 36)) {
            throw new \InvalidArgumentException('invalid length for $mid when calling MerchantScope., must be smaller than or equal to 36.');
        }
        if (!is_null($mid) && (mb_strlen($mid) < 1)) {
            throw new \InvalidArgumentException('invalid length for $mid when calling MerchantScope., must be bigger than or equal to 1.');
        }

        $this->container['mid'] = $mid;

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


