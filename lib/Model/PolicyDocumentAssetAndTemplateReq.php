<?php
/**
 * PolicyDocumentAssetAndTemplateReq
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
 * PolicyDocumentAssetAndTemplateReq Class Doc Comment
 *
 * @category Class
 * @description Request details for a specific asset and the template on which it was based.
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class PolicyDocumentAssetAndTemplateReq implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'PolicyDocumentAssetAndTemplateReq';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'asset_token' => 'string',
        'template_token' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'asset_token' => null,
        'template_token' => null
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
        'asset_token' => 'asset_token',
        'template_token' => 'template_token'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'asset_token' => 'setAssetToken',
        'template_token' => 'setTemplateToken'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'asset_token' => 'getAssetToken',
        'template_token' => 'getTemplateToken'
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
        $this->container['asset_token'] = $data['asset_token'] ?? null;
        $this->container['template_token'] = $data['template_token'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['asset_token'] === null) {
            $invalidProperties[] = "'asset_token' can't be null";
        }
        if (!preg_match("/(?!^ +$)^.+$/", $this->container['asset_token'])) {
            $invalidProperties[] = "invalid value for 'asset_token', must be conform to the pattern /(?!^ +$)^.+$/.";
        }

        if ($this->container['template_token'] === null) {
            $invalidProperties[] = "'template_token' can't be null";
        }
        if (!preg_match("/(?!^ +$)^.+$/", $this->container['template_token'])) {
            $invalidProperties[] = "invalid value for 'template_token', must be conform to the pattern /(?!^ +$)^.+$/.";
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
     * Gets asset_token
     *
     * @return string
     */
    public function getAssetToken()
    {
        return $this->container['asset_token'];
    }

    /**
     * Sets asset_token
     *
     * @param string $asset_token Unique identifier of the asset, which is the version of a document that is based on the template and contains finalized values. The values are finalized when the bundle containing the document is created.
     *
     * @return self
     */
    public function setAssetToken($asset_token)
    {

        if ((!preg_match("/(?!^ +$)^.+$/", $asset_token))) {
            throw new \InvalidArgumentException("invalid value for $asset_token when calling PolicyDocumentAssetAndTemplateReq., must conform to the pattern /(?!^ +$)^.+$/.");
        }

        $this->container['asset_token'] = $asset_token;

        return $this;
    }

    /**
     * Gets template_token
     *
     * @return string
     */
    public function getTemplateToken()
    {
        return $this->container['template_token'];
    }

    /**
     * Sets template_token
     *
     * @param string $template_token Unique identifier of the template, which is the version of a document that serves as an initial disclosure but does not contain finalized values. The values are finalized in the asset version of the document.
     *
     * @return self
     */
    public function setTemplateToken($template_token)
    {

        if ((!preg_match("/(?!^ +$)^.+$/", $template_token))) {
            throw new \InvalidArgumentException("invalid value for $template_token when calling PolicyDocumentAssetAndTemplateReq., must conform to the pattern /(?!^ +$)^.+$/.");
        }

        $this->container['template_token'] = $template_token;

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

