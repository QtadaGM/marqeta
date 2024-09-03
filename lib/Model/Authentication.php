<?php
/**
 * Authentication
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
 * Authentication Class Doc Comment
 *
 * @category Class
 * @description Contains the cardholder&#39;s email address and password information.
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class Authentication implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'Authentication';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'email_verified' => 'bool',
        'email_verified_time' => '\DateTime',
        'last_password_update_channel' => 'string',
        'last_password_update_time' => '\DateTime'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'email_verified' => null,
        'email_verified_time' => 'date-time',
        'last_password_update_channel' => null,
        'last_password_update_time' => 'date-time'
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
        'email_verified' => 'email_verified',
        'email_verified_time' => 'email_verified_time',
        'last_password_update_channel' => 'last_password_update_channel',
        'last_password_update_time' => 'last_password_update_time'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'email_verified' => 'setEmailVerified',
        'email_verified_time' => 'setEmailVerifiedTime',
        'last_password_update_channel' => 'setLastPasswordUpdateChannel',
        'last_password_update_time' => 'setLastPasswordUpdateTime'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'email_verified' => 'getEmailVerified',
        'email_verified_time' => 'getEmailVerifiedTime',
        'last_password_update_channel' => 'getLastPasswordUpdateChannel',
        'last_password_update_time' => 'getLastPasswordUpdateTime'
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

    const LAST_PASSWORD_UPDATE_CHANNEL_CHANGE = 'USER_CHANGE';
    const LAST_PASSWORD_UPDATE_CHANNEL_RESET = 'USER_RESET';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getLastPasswordUpdateChannelAllowableValues()
    {
        return [
            self::LAST_PASSWORD_UPDATE_CHANNEL_CHANGE,
            self::LAST_PASSWORD_UPDATE_CHANNEL_RESET,
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
        $this->container['email_verified'] = $data['email_verified'] ?? false;
        $this->container['email_verified_time'] = $data['email_verified_time'] ?? null;
        $this->container['last_password_update_channel'] = $data['last_password_update_channel'] ?? null;
        $this->container['last_password_update_time'] = $data['last_password_update_time'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        $allowedValues = $this->getLastPasswordUpdateChannelAllowableValues();
        if (!is_null($this->container['last_password_update_channel']) && !in_array($this->container['last_password_update_channel'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'last_password_update_channel', must be one of '%s'",
                $this->container['last_password_update_channel'],
                implode("', '", $allowedValues)
            );
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
     * Gets email_verified
     *
     * @return bool|null
     */
    public function getEmailVerified()
    {
        return $this->container['email_verified'];
    }

    /**
     * Sets email_verified
     *
     * @param bool|null $email_verified Specifies whether the email address has been verified.
     *
     * @return self
     */
    public function setEmailVerified($email_verified)
    {
        $this->container['email_verified'] = $email_verified;

        return $this;
    }

    /**
     * Gets email_verified_time
     *
     * @return \DateTime|null
     */
    public function getEmailVerifiedTime()
    {
        return $this->container['email_verified_time'];
    }

    /**
     * Sets email_verified_time
     *
     * @param \DateTime|null $email_verified_time Date and time when the email address was verified.
     *
     * @return self
     */
    public function setEmailVerifiedTime($email_verified_time)
    {
        $this->container['email_verified_time'] = $email_verified_time;

        return $this;
    }

    /**
     * Gets last_password_update_channel
     *
     * @return string|null
     */
    public function getLastPasswordUpdateChannel()
    {
        return $this->container['last_password_update_channel'];
    }

    /**
     * Sets last_password_update_channel
     *
     * @param string|null $last_password_update_channel Specifies the channel through which the password was last changed.
     *
     * @return self
     */
    public function setLastPasswordUpdateChannel($last_password_update_channel)
    {
        $allowedValues = $this->getLastPasswordUpdateChannelAllowableValues();
        if (!is_null($last_password_update_channel) && !in_array($last_password_update_channel, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'last_password_update_channel', must be one of '%s'",
                    $last_password_update_channel,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['last_password_update_channel'] = $last_password_update_channel;

        return $this;
    }

    /**
     * Gets last_password_update_time
     *
     * @return \DateTime|null
     */
    public function getLastPasswordUpdateTime()
    {
        return $this->container['last_password_update_time'];
    }

    /**
     * Sets last_password_update_time
     *
     * @param \DateTime|null $last_password_update_time Date and time when the password was last changed.
     *
     * @return self
     */
    public function setLastPasswordUpdateTime($last_password_update_time)
    {
        $this->container['last_password_update_time'] = $last_password_update_time;

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

