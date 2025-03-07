<?php
/**
 * OtherPoi
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
 * OtherPoi Class Doc Comment
 *
 * @category Class
 * @description Allows for configuration of points of interaction other than ecommerce or ATMs, such as points of sale (POS).
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class OtherPoi implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'other_poi';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'allow' => 'bool',
        'card_presence_required' => 'bool',
        'cardholder_presence_required' => 'bool',
        'track1_discretionary_data' => 'string',
        'track2_discretionary_data' => 'string',
        'use_static_pin' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'allow' => null,
        'card_presence_required' => null,
        'cardholder_presence_required' => null,
        'track1_discretionary_data' => null,
        'track2_discretionary_data' => null,
        'use_static_pin' => null
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
        'allow' => 'allow',
        'card_presence_required' => 'card_presence_required',
        'cardholder_presence_required' => 'cardholder_presence_required',
        'track1_discretionary_data' => 'track1_discretionary_data',
        'track2_discretionary_data' => 'track2_discretionary_data',
        'use_static_pin' => 'use_static_pin'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'allow' => 'setAllow',
        'card_presence_required' => 'setCardPresenceRequired',
        'cardholder_presence_required' => 'setCardholderPresenceRequired',
        'track1_discretionary_data' => 'setTrack1DiscretionaryData',
        'track2_discretionary_data' => 'setTrack2DiscretionaryData',
        'use_static_pin' => 'setUseStaticPin'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'allow' => 'getAllow',
        'card_presence_required' => 'getCardPresenceRequired',
        'cardholder_presence_required' => 'getCardholderPresenceRequired',
        'track1_discretionary_data' => 'getTrack1DiscretionaryData',
        'track2_discretionary_data' => 'getTrack2DiscretionaryData',
        'use_static_pin' => 'getUseStaticPin'
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
        $this->container['allow'] = $data['allow'] ?? true;
        $this->container['card_presence_required'] = $data['card_presence_required'] ?? false;
        $this->container['cardholder_presence_required'] = $data['cardholder_presence_required'] ?? false;
        $this->container['track1_discretionary_data'] = $data['track1_discretionary_data'] ?? null;
        $this->container['track2_discretionary_data'] = $data['track2_discretionary_data'] ?? null;
        $this->container['use_static_pin'] = $data['use_static_pin'] ?? false;
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
     * Gets allow
     *
     * @return bool|null
     */
    public function getAllow()
    {
        return $this->container['allow'];
    }

    /**
     * Sets allow
     *
     * @param bool|null $allow If set to `true`, card transactions at points of interaction other than e-commerce or ATMs are allowed. This group includes points of sale (POS).
     *
     * @return self
     */
    public function setAllow($allow)
    {
        $this->container['allow'] = $allow;

        return $this;
    }

    /**
     * Gets card_presence_required
     *
     * @return bool|null
     */
    public function getCardPresenceRequired()
    {
        return $this->container['card_presence_required'];
    }

    /**
     * Sets card_presence_required
     *
     * @param bool|null $card_presence_required If set to `true`, cards of this card product type are required to be present during the transaction, such as in IVR scenarios.
     *
     * @return self
     */
    public function setCardPresenceRequired($card_presence_required)
    {
        $this->container['card_presence_required'] = $card_presence_required;

        return $this;
    }

    /**
     * Gets cardholder_presence_required
     *
     * @return bool|null
     */
    public function getCardholderPresenceRequired()
    {
        return $this->container['cardholder_presence_required'];
    }

    /**
     * Sets cardholder_presence_required
     *
     * @param bool|null $cardholder_presence_required If set to `true`, the cardholder is required to be present during the transaction, such as in a restaurant where the card is present but the cardholder might not be present when the card is swiped.
     *
     * @return self
     */
    public function setCardholderPresenceRequired($cardholder_presence_required)
    {
        $this->container['cardholder_presence_required'] = $cardholder_presence_required;

        return $this;
    }

    /**
     * Gets track1_discretionary_data
     *
     * @return string|null
     */
    public function getTrack1DiscretionaryData()
    {
        return $this->container['track1_discretionary_data'];
    }

    /**
     * Sets track1_discretionary_data
     *
     * @param string|null $track1_discretionary_data track1_discretionary_data
     *
     * @return self
     */
    public function setTrack1DiscretionaryData($track1_discretionary_data)
    {
        $this->container['track1_discretionary_data'] = $track1_discretionary_data;

        return $this;
    }

    /**
     * Gets track2_discretionary_data
     *
     * @return string|null
     */
    public function getTrack2DiscretionaryData()
    {
        return $this->container['track2_discretionary_data'];
    }

    /**
     * Sets track2_discretionary_data
     *
     * @param string|null $track2_discretionary_data track2_discretionary_data
     *
     * @return self
     */
    public function setTrack2DiscretionaryData($track2_discretionary_data)
    {
        $this->container['track2_discretionary_data'] = $track2_discretionary_data;

        return $this;
    }

    /**
     * Gets use_static_pin
     *
     * @return bool|null
     */
    public function getUseStaticPin()
    {
        return $this->container['use_static_pin'];
    }

    /**
     * Sets use_static_pin
     *
     * @param bool|null $use_static_pin use_static_pin
     *
     * @return self
     */
    public function setUseStaticPin($use_static_pin)
    {
        $this->container['use_static_pin'] = $use_static_pin;

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


