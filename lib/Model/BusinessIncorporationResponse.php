<?php
/**
 * BusinessIncorporationResponse
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
 * BusinessIncorporationResponse Class Doc Comment
 *
 * @category Class
 * @description Contains information about the organizational structure of the business.
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class BusinessIncorporationResponse implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'business_incorporation_response';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'address_registered_under' => '\OpenAPI\Client\Model\AddressResponseModel',
        'incorporation_type' => 'string',
        'is_public' => 'bool',
        'name_registered_under' => 'string',
        'state_of_incorporation' => 'string',
        'stock_symbol' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'address_registered_under' => null,
        'incorporation_type' => null,
        'is_public' => null,
        'name_registered_under' => null,
        'state_of_incorporation' => null,
        'stock_symbol' => null
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
        'address_registered_under' => 'address_registered_under',
        'incorporation_type' => 'incorporation_type',
        'is_public' => 'is_public',
        'name_registered_under' => 'name_registered_under',
        'state_of_incorporation' => 'state_of_incorporation',
        'stock_symbol' => 'stock_symbol'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'address_registered_under' => 'setAddressRegisteredUnder',
        'incorporation_type' => 'setIncorporationType',
        'is_public' => 'setIsPublic',
        'name_registered_under' => 'setNameRegisteredUnder',
        'state_of_incorporation' => 'setStateOfIncorporation',
        'stock_symbol' => 'setStockSymbol'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'address_registered_under' => 'getAddressRegisteredUnder',
        'incorporation_type' => 'getIncorporationType',
        'is_public' => 'getIsPublic',
        'name_registered_under' => 'getNameRegisteredUnder',
        'state_of_incorporation' => 'getStateOfIncorporation',
        'stock_symbol' => 'getStockSymbol'
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

    const INCORPORATION_TYPE_LLC = 'LLC';
    const INCORPORATION_TYPE_CORPORATION = 'CORPORATION';
    const INCORPORATION_TYPE_SOLE_PROPRIETORSHIP = 'SOLE_PROPRIETORSHIP';
    const INCORPORATION_TYPE_PARTNERSHIP = 'PARTNERSHIP';
    const INCORPORATION_TYPE_OTHER = 'OTHER';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getIncorporationTypeAllowableValues()
    {
        return [
            self::INCORPORATION_TYPE_LLC,
            self::INCORPORATION_TYPE_CORPORATION,
            self::INCORPORATION_TYPE_SOLE_PROPRIETORSHIP,
            self::INCORPORATION_TYPE_PARTNERSHIP,
            self::INCORPORATION_TYPE_OTHER,
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
        $this->container['address_registered_under'] = $data['address_registered_under'] ?? null;
        $this->container['incorporation_type'] = $data['incorporation_type'] ?? null;
        $this->container['is_public'] = $data['is_public'] ?? false;
        $this->container['name_registered_under'] = $data['name_registered_under'] ?? null;
        $this->container['state_of_incorporation'] = $data['state_of_incorporation'] ?? null;
        $this->container['stock_symbol'] = $data['stock_symbol'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        $allowedValues = $this->getIncorporationTypeAllowableValues();
        if (!is_null($this->container['incorporation_type']) && !in_array($this->container['incorporation_type'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'incorporation_type', must be one of '%s'",
                $this->container['incorporation_type'],
                implode("', '", $allowedValues)
            );
        }

        if (!is_null($this->container['incorporation_type']) && (mb_strlen($this->container['incorporation_type']) > 255)) {
            $invalidProperties[] = "invalid value for 'incorporation_type', the character length must be smaller than or equal to 255.";
        }

        if (!is_null($this->container['incorporation_type']) && (mb_strlen($this->container['incorporation_type']) < 0)) {
            $invalidProperties[] = "invalid value for 'incorporation_type', the character length must be bigger than or equal to 0.";
        }

        if (!is_null($this->container['name_registered_under']) && (mb_strlen($this->container['name_registered_under']) > 255)) {
            $invalidProperties[] = "invalid value for 'name_registered_under', the character length must be smaller than or equal to 255.";
        }

        if (!is_null($this->container['name_registered_under']) && (mb_strlen($this->container['name_registered_under']) < 0)) {
            $invalidProperties[] = "invalid value for 'name_registered_under', the character length must be bigger than or equal to 0.";
        }

        if (!is_null($this->container['state_of_incorporation']) && (mb_strlen($this->container['state_of_incorporation']) > 255)) {
            $invalidProperties[] = "invalid value for 'state_of_incorporation', the character length must be smaller than or equal to 255.";
        }

        if (!is_null($this->container['state_of_incorporation']) && (mb_strlen($this->container['state_of_incorporation']) < 0)) {
            $invalidProperties[] = "invalid value for 'state_of_incorporation', the character length must be bigger than or equal to 0.";
        }

        if (!is_null($this->container['stock_symbol']) && (mb_strlen($this->container['stock_symbol']) > 255)) {
            $invalidProperties[] = "invalid value for 'stock_symbol', the character length must be smaller than or equal to 255.";
        }

        if (!is_null($this->container['stock_symbol']) && (mb_strlen($this->container['stock_symbol']) < 0)) {
            $invalidProperties[] = "invalid value for 'stock_symbol', the character length must be bigger than or equal to 0.";
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
     * Gets address_registered_under
     *
     * @return \OpenAPI\Client\Model\AddressResponseModel|null
     */
    public function getAddressRegisteredUnder()
    {
        return $this->container['address_registered_under'];
    }

    /**
     * Sets address_registered_under
     *
     * @param \OpenAPI\Client\Model\AddressResponseModel|null $address_registered_under address_registered_under
     *
     * @return self
     */
    public function setAddressRegisteredUnder($address_registered_under)
    {
        $this->container['address_registered_under'] = $address_registered_under;

        return $this;
    }

    /**
     * Gets incorporation_type
     *
     * @return string|null
     */
    public function getIncorporationType()
    {
        return $this->container['incorporation_type'];
    }

    /**
     * Sets incorporation_type
     *
     * @param string|null $incorporation_type Organizational structure of the business (corporation or sole proprietorship, for example).  This field is returned if it exists in the resource.
     *
     * @return self
     */
    public function setIncorporationType($incorporation_type)
    {
        $allowedValues = $this->getIncorporationTypeAllowableValues();
        if (!is_null($incorporation_type) && !in_array($incorporation_type, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'incorporation_type', must be one of '%s'",
                    $incorporation_type,
                    implode("', '", $allowedValues)
                )
            );
        }
        if (!is_null($incorporation_type) && (mb_strlen($incorporation_type) > 255)) {
            throw new \InvalidArgumentException('invalid length for $incorporation_type when calling BusinessIncorporationResponse., must be smaller than or equal to 255.');
        }
        if (!is_null($incorporation_type) && (mb_strlen($incorporation_type) < 0)) {
            throw new \InvalidArgumentException('invalid length for $incorporation_type when calling BusinessIncorporationResponse., must be bigger than or equal to 0.');
        }

        $this->container['incorporation_type'] = $incorporation_type;

        return $this;
    }

    /**
     * Gets is_public
     *
     * @return bool|null
     */
    public function getIsPublic()
    {
        return $this->container['is_public'];
    }

    /**
     * Sets is_public
     *
     * @param bool|null $is_public A value of `true` indicates that the business is publicly held.  This field is returned if it exists in the resource.
     *
     * @return self
     */
    public function setIsPublic($is_public)
    {
        $this->container['is_public'] = $is_public;

        return $this;
    }

    /**
     * Gets name_registered_under
     *
     * @return string|null
     */
    public function getNameRegisteredUnder()
    {
        return $this->container['name_registered_under'];
    }

    /**
     * Sets name_registered_under
     *
     * @param string|null $name_registered_under Name under which the business is registered.  This field is returned if it exists in the resource.
     *
     * @return self
     */
    public function setNameRegisteredUnder($name_registered_under)
    {
        if (!is_null($name_registered_under) && (mb_strlen($name_registered_under) > 255)) {
            throw new \InvalidArgumentException('invalid length for $name_registered_under when calling BusinessIncorporationResponse., must be smaller than or equal to 255.');
        }
        if (!is_null($name_registered_under) && (mb_strlen($name_registered_under) < 0)) {
            throw new \InvalidArgumentException('invalid length for $name_registered_under when calling BusinessIncorporationResponse., must be bigger than or equal to 0.');
        }

        $this->container['name_registered_under'] = $name_registered_under;

        return $this;
    }

    /**
     * Gets state_of_incorporation
     *
     * @return string|null
     */
    public function getStateOfIncorporation()
    {
        return $this->container['state_of_incorporation'];
    }

    /**
     * Sets state_of_incorporation
     *
     * @param string|null $state_of_incorporation State where the business is incorporated.  This field is returned if it exists in the resource.
     *
     * @return self
     */
    public function setStateOfIncorporation($state_of_incorporation)
    {
        if (!is_null($state_of_incorporation) && (mb_strlen($state_of_incorporation) > 255)) {
            throw new \InvalidArgumentException('invalid length for $state_of_incorporation when calling BusinessIncorporationResponse., must be smaller than or equal to 255.');
        }
        if (!is_null($state_of_incorporation) && (mb_strlen($state_of_incorporation) < 0)) {
            throw new \InvalidArgumentException('invalid length for $state_of_incorporation when calling BusinessIncorporationResponse., must be bigger than or equal to 0.');
        }

        $this->container['state_of_incorporation'] = $state_of_incorporation;

        return $this;
    }

    /**
     * Gets stock_symbol
     *
     * @return string|null
     */
    public function getStockSymbol()
    {
        return $this->container['stock_symbol'];
    }

    /**
     * Sets stock_symbol
     *
     * @param string|null $stock_symbol Stock symbol associated with the business.  This field is returned if it exists in the resource.
     *
     * @return self
     */
    public function setStockSymbol($stock_symbol)
    {
        if (!is_null($stock_symbol) && (mb_strlen($stock_symbol) > 255)) {
            throw new \InvalidArgumentException('invalid length for $stock_symbol when calling BusinessIncorporationResponse., must be smaller than or equal to 255.');
        }
        if (!is_null($stock_symbol) && (mb_strlen($stock_symbol) < 0)) {
            throw new \InvalidArgumentException('invalid length for $stock_symbol when calling BusinessIncorporationResponse., must be bigger than or equal to 0.');
        }

        $this->container['stock_symbol'] = $stock_symbol;

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


