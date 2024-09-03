<?php
/**
 * DigitalWalletApplePayProvisionResponse
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
 * DigitalWalletApplePayProvisionResponse Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class DigitalWalletApplePayProvisionResponse implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'digital_wallet_apple_pay_provision_response';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'activation_data' => 'string',
        'card_token' => 'string',
        'created_time' => '\DateTime',
        'encrypted_pass_data' => 'string',
        'ephemeral_public_key' => 'string',
        'last_modified_time' => '\DateTime'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'activation_data' => null,
        'card_token' => null,
        'created_time' => 'date-time',
        'encrypted_pass_data' => null,
        'ephemeral_public_key' => null,
        'last_modified_time' => 'date-time'
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
        'activation_data' => 'activation_data',
        'card_token' => 'card_token',
        'created_time' => 'created_time',
        'encrypted_pass_data' => 'encrypted_pass_data',
        'ephemeral_public_key' => 'ephemeral_public_key',
        'last_modified_time' => 'last_modified_time'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'activation_data' => 'setActivationData',
        'card_token' => 'setCardToken',
        'created_time' => 'setCreatedTime',
        'encrypted_pass_data' => 'setEncryptedPassData',
        'ephemeral_public_key' => 'setEphemeralPublicKey',
        'last_modified_time' => 'setLastModifiedTime'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'activation_data' => 'getActivationData',
        'card_token' => 'getCardToken',
        'created_time' => 'getCreatedTime',
        'encrypted_pass_data' => 'getEncryptedPassData',
        'ephemeral_public_key' => 'getEphemeralPublicKey',
        'last_modified_time' => 'getLastModifiedTime'
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
        $this->container['activation_data'] = $data['activation_data'] ?? null;
        $this->container['card_token'] = $data['card_token'] ?? null;
        $this->container['created_time'] = $data['created_time'] ?? null;
        $this->container['encrypted_pass_data'] = $data['encrypted_pass_data'] ?? null;
        $this->container['ephemeral_public_key'] = $data['ephemeral_public_key'] ?? null;
        $this->container['last_modified_time'] = $data['last_modified_time'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['activation_data'] === null) {
            $invalidProperties[] = "'activation_data' can't be null";
        }
        if ($this->container['card_token'] === null) {
            $invalidProperties[] = "'card_token' can't be null";
        }
        if ($this->container['created_time'] === null) {
            $invalidProperties[] = "'created_time' can't be null";
        }
        if ($this->container['encrypted_pass_data'] === null) {
            $invalidProperties[] = "'encrypted_pass_data' can't be null";
        }
        if ($this->container['ephemeral_public_key'] === null) {
            $invalidProperties[] = "'ephemeral_public_key' can't be null";
        }
        if ($this->container['last_modified_time'] === null) {
            $invalidProperties[] = "'last_modified_time' can't be null";
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
     * Gets activation_data
     *
     * @return string
     */
    public function getActivationData()
    {
        return $this->container['activation_data'];
    }

    /**
     * Sets activation_data
     *
     * @param string $activation_data Cryptographic one-time passcode conforming to the payment network operator or service provider specifications.
     *
     * @return self
     */
    public function setActivationData($activation_data)
    {
        $this->container['activation_data'] = $activation_data;

        return $this;
    }

    /**
     * Gets card_token
     *
     * @return string
     */
    public function getCardToken()
    {
        return $this->container['card_token'];
    }

    /**
     * Sets card_token
     *
     * @param string $card_token Unique identifier of the card resource to use for the provisioning request.
     *
     * @return self
     */
    public function setCardToken($card_token)
    {
        $this->container['card_token'] = $card_token;

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
     * @param \DateTime $created_time Date and time when the digital wallet provisioning request was created, in UTC.
     *
     * @return self
     */
    public function setCreatedTime($created_time)
    {
        $this->container['created_time'] = $created_time;

        return $this;
    }

    /**
     * Gets encrypted_pass_data
     *
     * @return string
     */
    public function getEncryptedPassData()
    {
        return $this->container['encrypted_pass_data'];
    }

    /**
     * Sets encrypted_pass_data
     *
     * @param string $encrypted_pass_data Payload encrypted with a shared key derived from the Apple Public Certificates and the generated ephemeral private key.
     *
     * @return self
     */
    public function setEncryptedPassData($encrypted_pass_data)
    {
        $this->container['encrypted_pass_data'] = $encrypted_pass_data;

        return $this;
    }

    /**
     * Gets ephemeral_public_key
     *
     * @return string
     */
    public function getEphemeralPublicKey()
    {
        return $this->container['ephemeral_public_key'];
    }

    /**
     * Sets ephemeral_public_key
     *
     * @param string $ephemeral_public_key Ephemeral public key used for the provisioning attempt.
     *
     * @return self
     */
    public function setEphemeralPublicKey($ephemeral_public_key)
    {
        $this->container['ephemeral_public_key'] = $ephemeral_public_key;

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
     * @param \DateTime $last_modified_time Date and time when the digital wallet token provisioning request was last updated, in UTC.
     *
     * @return self
     */
    public function setLastModifiedTime($last_modified_time)
    {
        $this->container['last_modified_time'] = $last_modified_time;

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


