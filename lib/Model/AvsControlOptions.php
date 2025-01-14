<?php
/**
 * AvsControlOptions
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
 * AvsControlOptions Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class AvsControlOptions implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'avs_control_options';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'decline_on_address_number_mismatch' => 'bool',
        'decline_on_postal_code_mismatch' => 'bool',
        'validate' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'decline_on_address_number_mismatch' => null,
        'decline_on_postal_code_mismatch' => null,
        'validate' => null
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
        'decline_on_address_number_mismatch' => 'decline_on_address_number_mismatch',
        'decline_on_postal_code_mismatch' => 'decline_on_postal_code_mismatch',
        'validate' => 'validate'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'decline_on_address_number_mismatch' => 'setDeclineOnAddressNumberMismatch',
        'decline_on_postal_code_mismatch' => 'setDeclineOnPostalCodeMismatch',
        'validate' => 'setValidate'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'decline_on_address_number_mismatch' => 'getDeclineOnAddressNumberMismatch',
        'decline_on_postal_code_mismatch' => 'getDeclineOnPostalCodeMismatch',
        'validate' => 'getValidate'
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
        $this->container['decline_on_address_number_mismatch'] = $data['decline_on_address_number_mismatch'] ?? false;
        $this->container['decline_on_postal_code_mismatch'] = $data['decline_on_postal_code_mismatch'] ?? true;
        $this->container['validate'] = $data['validate'] ?? true;
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
     * Gets decline_on_address_number_mismatch
     *
     * @return bool|null
     */
    public function getDeclineOnAddressNumberMismatch()
    {
        return $this->container['decline_on_address_number_mismatch'];
    }

    /**
     * Sets decline_on_address_number_mismatch
     *
     * @param bool|null $decline_on_address_number_mismatch Set to `true` to decline account verification or authorization messages whose address number does not match the address number on file.  Set to `false` to not decline account verification or authorization messages whose address number does not match the address number on file.  This field is functional only if `validate = true`.
     *
     * @return self
     */
    public function setDeclineOnAddressNumberMismatch($decline_on_address_number_mismatch)
    {
        $this->container['decline_on_address_number_mismatch'] = $decline_on_address_number_mismatch;

        return $this;
    }

    /**
     * Gets decline_on_postal_code_mismatch
     *
     * @return bool|null
     */
    public function getDeclineOnPostalCodeMismatch()
    {
        return $this->container['decline_on_postal_code_mismatch'];
    }

    /**
     * Sets decline_on_postal_code_mismatch
     *
     * @param bool|null $decline_on_postal_code_mismatch Set to `true` to decline account verification or authorization messages whose postal code does not match the postal code on file.  Set to `false` to not decline account verification or authorization messages whose postal code does not match the postal code on file.  This field is functional only if `validate = true`.
     *
     * @return self
     */
    public function setDeclineOnPostalCodeMismatch($decline_on_postal_code_mismatch)
    {
        $this->container['decline_on_postal_code_mismatch'] = $decline_on_postal_code_mismatch;

        return $this;
    }

    /**
     * Gets validate
     *
     * @return bool|null
     */
    public function getValidate()
    {
        return $this->container['validate'];
    }

    /**
     * Sets validate
     *
     * @param bool|null $validate Set to `true` to require validation of account verification or authorization messages.  Set to `false` to forgo validation and approve all account verification and authorization messages.
     *
     * @return self
     */
    public function setValidate($validate)
    {
        $this->container['validate'] = $validate;

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


