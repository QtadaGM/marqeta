<?php
/**
 * Carrier
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
 * Carrier Class Doc Comment
 *
 * @category Class
 * @description Specifies attributes of the card carrier.
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class Carrier implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'carrier';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'logo_file' => 'string',
        'logo_thumbnail_file' => 'string',
        'message_file' => 'string',
        'message_line' => 'string',
        'template_id' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'logo_file' => null,
        'logo_thumbnail_file' => null,
        'message_file' => null,
        'message_line' => null,
        'template_id' => null
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
        'logo_file' => 'logo_file',
        'logo_thumbnail_file' => 'logo_thumbnail_file',
        'message_file' => 'message_file',
        'message_line' => 'message_line',
        'template_id' => 'template_id'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'logo_file' => 'setLogoFile',
        'logo_thumbnail_file' => 'setLogoThumbnailFile',
        'message_file' => 'setMessageFile',
        'message_line' => 'setMessageLine',
        'template_id' => 'setTemplateId'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'logo_file' => 'getLogoFile',
        'logo_thumbnail_file' => 'getLogoThumbnailFile',
        'message_file' => 'getMessageFile',
        'message_line' => 'getMessageLine',
        'template_id' => 'getTemplateId'
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
        $this->container['logo_file'] = $data['logo_file'] ?? null;
        $this->container['logo_thumbnail_file'] = $data['logo_thumbnail_file'] ?? null;
        $this->container['message_file'] = $data['message_file'] ?? null;
        $this->container['message_line'] = $data['message_line'] ?? null;
        $this->container['template_id'] = $data['template_id'] ?? null;
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
     * Gets logo_file
     *
     * @return string|null
     */
    public function getLogoFile()
    {
        return $this->container['logo_file'];
    }

    /**
     * Sets logo_file
     *
     * @param string|null $logo_file Specifies an image to display on the card carrier.
     *
     * @return self
     */
    public function setLogoFile($logo_file)
    {
        $this->container['logo_file'] = $logo_file;

        return $this;
    }

    /**
     * Gets logo_thumbnail_file
     *
     * @return string|null
     */
    public function getLogoThumbnailFile()
    {
        return $this->container['logo_thumbnail_file'];
    }

    /**
     * Sets logo_thumbnail_file
     *
     * @param string|null $logo_thumbnail_file Specifies a thumbnail-sized rendering of the image specified in the `logo_file` field.
     *
     * @return self
     */
    public function setLogoThumbnailFile($logo_thumbnail_file)
    {
        $this->container['logo_thumbnail_file'] = $logo_thumbnail_file;

        return $this;
    }

    /**
     * Gets message_file
     *
     * @return string|null
     */
    public function getMessageFile()
    {
        return $this->container['message_file'];
    }

    /**
     * Sets message_file
     *
     * @param string|null $message_file Specifies a text file containing a custom message to print on the card carrier.
     *
     * @return self
     */
    public function setMessageFile($message_file)
    {
        $this->container['message_file'] = $message_file;

        return $this;
    }

    /**
     * Gets message_line
     *
     * @return string|null
     */
    public function getMessageLine()
    {
        return $this->container['message_line'];
    }

    /**
     * Sets message_line
     *
     * @param string|null $message_line Specifies a custom message that appears on the card carrier.
     *
     * @return self
     */
    public function setMessageLine($message_line)
    {
        $this->container['message_line'] = $message_line;

        return $this;
    }

    /**
     * Gets template_id
     *
     * @return string|null
     */
    public function getTemplateId()
    {
        return $this->container['template_id'];
    }

    /**
     * Sets template_id
     *
     * @param string|null $template_id Specifies the card carrier template to use.
     *
     * @return self
     */
    public function setTemplateId($template_id)
    {
        $this->container['template_id'] = $template_id;

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

