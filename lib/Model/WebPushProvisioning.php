<?php
/**
 * WebPushProvisioning
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
 * WebPushProvisioning Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class WebPushProvisioning implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'web_push_provisioning';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'wpp_apple_card_template_id' => 'string',
        'wpp_apple_partner_id' => 'string',
        'wpp_google_piaid' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'wpp_apple_card_template_id' => null,
        'wpp_apple_partner_id' => null,
        'wpp_google_piaid' => null
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
        'wpp_apple_card_template_id' => 'wpp_apple_card_template_id',
        'wpp_apple_partner_id' => 'wpp_apple_partner_id',
        'wpp_google_piaid' => 'wpp_google_piaid'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'wpp_apple_card_template_id' => 'setWppAppleCardTemplateId',
        'wpp_apple_partner_id' => 'setWppApplePartnerId',
        'wpp_google_piaid' => 'setWppGooglePiaid'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'wpp_apple_card_template_id' => 'getWppAppleCardTemplateId',
        'wpp_apple_partner_id' => 'getWppApplePartnerId',
        'wpp_google_piaid' => 'getWppGooglePiaid'
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
        $this->container['wpp_apple_card_template_id'] = $data['wpp_apple_card_template_id'] ?? null;
        $this->container['wpp_apple_partner_id'] = $data['wpp_apple_partner_id'] ?? null;
        $this->container['wpp_google_piaid'] = $data['wpp_google_piaid'] ?? null;
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
     * Gets wpp_apple_card_template_id
     *
     * @return string|null
     */
    public function getWppAppleCardTemplateId()
    {
        return $this->container['wpp_apple_card_template_id'];
    }

    /**
     * Sets wpp_apple_card_template_id
     *
     * @param string|null $wpp_apple_card_template_id Identifier that Apple uses to identify the program to process the request for.
     *
     * @return self
     */
    public function setWppAppleCardTemplateId($wpp_apple_card_template_id)
    {
        $this->container['wpp_apple_card_template_id'] = $wpp_apple_card_template_id;

        return $this;
    }

    /**
     * Gets wpp_apple_partner_id
     *
     * @return string|null
     */
    public function getWppApplePartnerId()
    {
        return $this->container['wpp_apple_partner_id'];
    }

    /**
     * Sets wpp_apple_partner_id
     *
     * @param string|null $wpp_apple_partner_id Identifier that Apple uses to identify the program to provide the correct card art for.
     *
     * @return self
     */
    public function setWppApplePartnerId($wpp_apple_partner_id)
    {
        $this->container['wpp_apple_partner_id'] = $wpp_apple_partner_id;

        return $this;
    }

    /**
     * Gets wpp_google_piaid
     *
     * @return string|null
     */
    public function getWppGooglePiaid()
    {
        return $this->container['wpp_google_piaid'];
    }

    /**
     * Sets wpp_google_piaid
     *
     * @param string|null $wpp_google_piaid Identifier that Google uses to identify the program to process the request for and to provide the correct card art for.
     *
     * @return self
     */
    public function setWppGooglePiaid($wpp_google_piaid)
    {
        $this->container['wpp_google_piaid'] = $wpp_google_piaid;

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

