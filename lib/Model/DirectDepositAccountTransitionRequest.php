<?php
/**
 * DirectDepositAccountTransitionRequest
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
 * DirectDepositAccountTransitionRequest Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class DirectDepositAccountTransitionRequest implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'direct_deposit_account_transition_request';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'account_token' => 'string',
        'channel' => 'string',
        'reason' => 'string',
        'state' => 'string',
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
        'account_token' => null,
        'channel' => null,
        'reason' => null,
        'state' => null,
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
        'account_token' => 'account_token',
        'channel' => 'channel',
        'reason' => 'reason',
        'state' => 'state',
        'token' => 'token'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'account_token' => 'setAccountToken',
        'channel' => 'setChannel',
        'reason' => 'setReason',
        'state' => 'setState',
        'token' => 'setToken'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'account_token' => 'getAccountToken',
        'channel' => 'getChannel',
        'reason' => 'getReason',
        'state' => 'getState',
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

    const CHANNEL_API = 'API';
    const CHANNEL_IVR = 'IVR';
    const CHANNEL_FRAUD = 'FRAUD';
    const CHANNEL_ADMIN = 'ADMIN';
    const CHANNEL_SYSTEM = 'SYSTEM';
    const CHANNEL_NETWORK = 'NETWORK';
    const CHANNEL_PROD_SUPPORT = 'PROD_SUPPORT';
    const CHANNEL_UNSUPPORTED = 'UNSUPPORTED';
    const STATE_ACTIVE = 'ACTIVE';
    const STATE_SUSPENDED = 'SUSPENDED';
    const STATE_TERMINATED = 'TERMINATED';
    const STATE_UNSUPPORTED = 'UNSUPPORTED';
    const STATE_UNACTIVATED = 'UNACTIVATED';
    const STATE_LIMITED = 'LIMITED';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getChannelAllowableValues()
    {
        return [
            self::CHANNEL_API,
            self::CHANNEL_IVR,
            self::CHANNEL_FRAUD,
            self::CHANNEL_ADMIN,
            self::CHANNEL_SYSTEM,
            self::CHANNEL_NETWORK,
            self::CHANNEL_PROD_SUPPORT,
            self::CHANNEL_UNSUPPORTED,
        ];
    }

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getStateAllowableValues()
    {
        return [
            self::STATE_ACTIVE,
            self::STATE_SUSPENDED,
            self::STATE_TERMINATED,
            self::STATE_UNSUPPORTED,
            self::STATE_UNACTIVATED,
            self::STATE_LIMITED,
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
        $this->container['account_token'] = $data['account_token'] ?? null;
        $this->container['channel'] = $data['channel'] ?? null;
        $this->container['reason'] = $data['reason'] ?? null;
        $this->container['state'] = $data['state'] ?? null;
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

        if ($this->container['account_token'] === null) {
            $invalidProperties[] = "'account_token' can't be null";
        }
        if ((mb_strlen($this->container['account_token']) > 36)) {
            $invalidProperties[] = "invalid value for 'account_token', the character length must be smaller than or equal to 36.";
        }

        if ((mb_strlen($this->container['account_token']) < 1)) {
            $invalidProperties[] = "invalid value for 'account_token', the character length must be bigger than or equal to 1.";
        }

        if ($this->container['channel'] === null) {
            $invalidProperties[] = "'channel' can't be null";
        }
        $allowedValues = $this->getChannelAllowableValues();
        if (!is_null($this->container['channel']) && !in_array($this->container['channel'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'channel', must be one of '%s'",
                $this->container['channel'],
                implode("', '", $allowedValues)
            );
        }

        if (!is_null($this->container['reason']) && (mb_strlen($this->container['reason']) > 255)) {
            $invalidProperties[] = "invalid value for 'reason', the character length must be smaller than or equal to 255.";
        }

        if (!is_null($this->container['reason']) && (mb_strlen($this->container['reason']) < 1)) {
            $invalidProperties[] = "invalid value for 'reason', the character length must be bigger than or equal to 1.";
        }

        $allowedValues = $this->getStateAllowableValues();
        if (!is_null($this->container['state']) && !in_array($this->container['state'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'state', must be one of '%s'",
                $this->container['state'],
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
     * Gets account_token
     *
     * @return string
     */
    public function getAccountToken()
    {
        return $this->container['account_token'];
    }

    /**
     * Sets account_token
     *
     * @param string $account_token account_token
     *
     * @return self
     */
    public function setAccountToken($account_token)
    {
        if ((mb_strlen($account_token) > 36)) {
            throw new \InvalidArgumentException('invalid length for $account_token when calling DirectDepositAccountTransitionRequest., must be smaller than or equal to 36.');
        }
        if ((mb_strlen($account_token) < 1)) {
            throw new \InvalidArgumentException('invalid length for $account_token when calling DirectDepositAccountTransitionRequest., must be bigger than or equal to 1.');
        }

        $this->container['account_token'] = $account_token;

        return $this;
    }

    /**
     * Gets channel
     *
     * @return string
     */
    public function getChannel()
    {
        return $this->container['channel'];
    }

    /**
     * Sets channel
     *
     * @param string $channel channel
     *
     * @return self
     */
    public function setChannel($channel)
    {
        $allowedValues = $this->getChannelAllowableValues();
        if (!in_array($channel, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'channel', must be one of '%s'",
                    $channel,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['channel'] = $channel;

        return $this;
    }

    /**
     * Gets reason
     *
     * @return string|null
     */
    public function getReason()
    {
        return $this->container['reason'];
    }

    /**
     * Sets reason
     *
     * @param string|null $reason reason
     *
     * @return self
     */
    public function setReason($reason)
    {
        if (!is_null($reason) && (mb_strlen($reason) > 255)) {
            throw new \InvalidArgumentException('invalid length for $reason when calling DirectDepositAccountTransitionRequest., must be smaller than or equal to 255.');
        }
        if (!is_null($reason) && (mb_strlen($reason) < 1)) {
            throw new \InvalidArgumentException('invalid length for $reason when calling DirectDepositAccountTransitionRequest., must be bigger than or equal to 1.');
        }

        $this->container['reason'] = $reason;

        return $this;
    }

    /**
     * Gets state
     *
     * @return string|null
     */
    public function getState()
    {
        return $this->container['state'];
    }

    /**
     * Sets state
     *
     * @param string|null $state state
     *
     * @return self
     */
    public function setState($state)
    {
        $allowedValues = $this->getStateAllowableValues();
        if (!is_null($state) && !in_array($state, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'state', must be one of '%s'",
                    $state,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['state'] = $state;

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
     * @param string|null $token token
     *
     * @return self
     */
    public function setToken($token)
    {
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

