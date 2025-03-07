<?php
/**
 * PeerTransferRequest
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
 * PeerTransferRequest Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class PeerTransferRequest implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'peer_transfer_request';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'amount' => 'float',
        'currency_code' => 'string',
        'memo' => 'string',
        'recipient_business_token' => 'string',
        'recipient_user_token' => 'string',
        'sender_business_token' => 'string',
        'sender_user_token' => 'string',
        'tags' => 'string',
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
        'amount' => null,
        'currency_code' => null,
        'memo' => null,
        'recipient_business_token' => null,
        'recipient_user_token' => null,
        'sender_business_token' => null,
        'sender_user_token' => null,
        'tags' => null,
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
        'amount' => 'amount',
        'currency_code' => 'currency_code',
        'memo' => 'memo',
        'recipient_business_token' => 'recipient_business_token',
        'recipient_user_token' => 'recipient_user_token',
        'sender_business_token' => 'sender_business_token',
        'sender_user_token' => 'sender_user_token',
        'tags' => 'tags',
        'token' => 'token'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'amount' => 'setAmount',
        'currency_code' => 'setCurrencyCode',
        'memo' => 'setMemo',
        'recipient_business_token' => 'setRecipientBusinessToken',
        'recipient_user_token' => 'setRecipientUserToken',
        'sender_business_token' => 'setSenderBusinessToken',
        'sender_user_token' => 'setSenderUserToken',
        'tags' => 'setTags',
        'token' => 'setToken'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'amount' => 'getAmount',
        'currency_code' => 'getCurrencyCode',
        'memo' => 'getMemo',
        'recipient_business_token' => 'getRecipientBusinessToken',
        'recipient_user_token' => 'getRecipientUserToken',
        'sender_business_token' => 'getSenderBusinessToken',
        'sender_user_token' => 'getSenderUserToken',
        'tags' => 'getTags',
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
        $this->container['amount'] = $data['amount'] ?? null;
        $this->container['currency_code'] = $data['currency_code'] ?? null;
        $this->container['memo'] = $data['memo'] ?? null;
        $this->container['recipient_business_token'] = $data['recipient_business_token'] ?? null;
        $this->container['recipient_user_token'] = $data['recipient_user_token'] ?? null;
        $this->container['sender_business_token'] = $data['sender_business_token'] ?? null;
        $this->container['sender_user_token'] = $data['sender_user_token'] ?? null;
        $this->container['tags'] = $data['tags'] ?? null;
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

        if ($this->container['amount'] === null) {
            $invalidProperties[] = "'amount' can't be null";
        }
        if ($this->container['currency_code'] === null) {
            $invalidProperties[] = "'currency_code' can't be null";
        }
        if (!is_null($this->container['memo']) && (mb_strlen($this->container['memo']) > 99)) {
            $invalidProperties[] = "invalid value for 'memo', the character length must be smaller than or equal to 99.";
        }

        if (!is_null($this->container['memo']) && (mb_strlen($this->container['memo']) < 1)) {
            $invalidProperties[] = "invalid value for 'memo', the character length must be bigger than or equal to 1.";
        }

        if (!is_null($this->container['recipient_business_token']) && (mb_strlen($this->container['recipient_business_token']) > 36)) {
            $invalidProperties[] = "invalid value for 'recipient_business_token', the character length must be smaller than or equal to 36.";
        }

        if (!is_null($this->container['recipient_business_token']) && (mb_strlen($this->container['recipient_business_token']) < 1)) {
            $invalidProperties[] = "invalid value for 'recipient_business_token', the character length must be bigger than or equal to 1.";
        }

        if (!is_null($this->container['recipient_user_token']) && (mb_strlen($this->container['recipient_user_token']) > 36)) {
            $invalidProperties[] = "invalid value for 'recipient_user_token', the character length must be smaller than or equal to 36.";
        }

        if (!is_null($this->container['recipient_user_token']) && (mb_strlen($this->container['recipient_user_token']) < 1)) {
            $invalidProperties[] = "invalid value for 'recipient_user_token', the character length must be bigger than or equal to 1.";
        }

        if (!is_null($this->container['sender_business_token']) && (mb_strlen($this->container['sender_business_token']) > 36)) {
            $invalidProperties[] = "invalid value for 'sender_business_token', the character length must be smaller than or equal to 36.";
        }

        if (!is_null($this->container['sender_business_token']) && (mb_strlen($this->container['sender_business_token']) < 1)) {
            $invalidProperties[] = "invalid value for 'sender_business_token', the character length must be bigger than or equal to 1.";
        }

        if (!is_null($this->container['sender_user_token']) && (mb_strlen($this->container['sender_user_token']) > 36)) {
            $invalidProperties[] = "invalid value for 'sender_user_token', the character length must be smaller than or equal to 36.";
        }

        if (!is_null($this->container['sender_user_token']) && (mb_strlen($this->container['sender_user_token']) < 1)) {
            $invalidProperties[] = "invalid value for 'sender_user_token', the character length must be bigger than or equal to 1.";
        }

        if (!is_null($this->container['tags']) && (mb_strlen($this->container['tags']) > 255)) {
            $invalidProperties[] = "invalid value for 'tags', the character length must be smaller than or equal to 255.";
        }

        if (!is_null($this->container['tags']) && (mb_strlen($this->container['tags']) < 1)) {
            $invalidProperties[] = "invalid value for 'tags', the character length must be bigger than or equal to 1.";
        }

        if (!is_null($this->container['token']) && (mb_strlen($this->container['token']) > 36)) {
            $invalidProperties[] = "invalid value for 'token', the character length must be smaller than or equal to 36.";
        }

        if (!is_null($this->container['token']) && (mb_strlen($this->container['token']) < 1)) {
            $invalidProperties[] = "invalid value for 'token', the character length must be bigger than or equal to 1.";
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
     * Gets amount
     *
     * @return float
     */
    public function getAmount()
    {
        return $this->container['amount'];
    }

    /**
     * Sets amount
     *
     * @param float $amount Amount of the transfer.
     *
     * @return self
     */
    public function setAmount($amount)
    {
        $this->container['amount'] = $amount;

        return $this;
    }

    /**
     * Gets currency_code
     *
     * @return string
     */
    public function getCurrencyCode()
    {
        return $this->container['currency_code'];
    }

    /**
     * Sets currency_code
     *
     * @param string $currency_code Three-digit ISO 4217 currency code.
     *
     * @return self
     */
    public function setCurrencyCode($currency_code)
    {
        $this->container['currency_code'] = $currency_code;

        return $this;
    }

    /**
     * Gets memo
     *
     * @return string|null
     */
    public function getMemo()
    {
        return $this->container['memo'];
    }

    /**
     * Sets memo
     *
     * @param string|null $memo Additional descriptive text about the transfer.
     *
     * @return self
     */
    public function setMemo($memo)
    {
        if (!is_null($memo) && (mb_strlen($memo) > 99)) {
            throw new \InvalidArgumentException('invalid length for $memo when calling PeerTransferRequest., must be smaller than or equal to 99.');
        }
        if (!is_null($memo) && (mb_strlen($memo) < 1)) {
            throw new \InvalidArgumentException('invalid length for $memo when calling PeerTransferRequest., must be bigger than or equal to 1.');
        }

        $this->container['memo'] = $memo;

        return $this;
    }

    /**
     * Gets recipient_business_token
     *
     * @return string|null
     */
    public function getRecipientBusinessToken()
    {
        return $this->container['recipient_business_token'];
    }

    /**
     * Sets recipient_business_token
     *
     * @param string|null $recipient_business_token Specifies the business account holder that receives funds.  Send a `GET` request to `/businesses` to retrieve business tokens.
     *
     * @return self
     */
    public function setRecipientBusinessToken($recipient_business_token)
    {
        if (!is_null($recipient_business_token) && (mb_strlen($recipient_business_token) > 36)) {
            throw new \InvalidArgumentException('invalid length for $recipient_business_token when calling PeerTransferRequest., must be smaller than or equal to 36.');
        }
        if (!is_null($recipient_business_token) && (mb_strlen($recipient_business_token) < 1)) {
            throw new \InvalidArgumentException('invalid length for $recipient_business_token when calling PeerTransferRequest., must be bigger than or equal to 1.');
        }

        $this->container['recipient_business_token'] = $recipient_business_token;

        return $this;
    }

    /**
     * Gets recipient_user_token
     *
     * @return string|null
     */
    public function getRecipientUserToken()
    {
        return $this->container['recipient_user_token'];
    }

    /**
     * Sets recipient_user_token
     *
     * @param string|null $recipient_user_token Specifies the user account holder that receives funds.  Send a `GET` request to `/users` to retrieve user tokens.
     *
     * @return self
     */
    public function setRecipientUserToken($recipient_user_token)
    {
        if (!is_null($recipient_user_token) && (mb_strlen($recipient_user_token) > 36)) {
            throw new \InvalidArgumentException('invalid length for $recipient_user_token when calling PeerTransferRequest., must be smaller than or equal to 36.');
        }
        if (!is_null($recipient_user_token) && (mb_strlen($recipient_user_token) < 1)) {
            throw new \InvalidArgumentException('invalid length for $recipient_user_token when calling PeerTransferRequest., must be bigger than or equal to 1.');
        }

        $this->container['recipient_user_token'] = $recipient_user_token;

        return $this;
    }

    /**
     * Gets sender_business_token
     *
     * @return string|null
     */
    public function getSenderBusinessToken()
    {
        return $this->container['sender_business_token'];
    }

    /**
     * Sets sender_business_token
     *
     * @param string|null $sender_business_token Specifies the business account holder that sends funds.  Send a `GET` request to `/businesses` to retrieve business tokens.
     *
     * @return self
     */
    public function setSenderBusinessToken($sender_business_token)
    {
        if (!is_null($sender_business_token) && (mb_strlen($sender_business_token) > 36)) {
            throw new \InvalidArgumentException('invalid length for $sender_business_token when calling PeerTransferRequest., must be smaller than or equal to 36.');
        }
        if (!is_null($sender_business_token) && (mb_strlen($sender_business_token) < 1)) {
            throw new \InvalidArgumentException('invalid length for $sender_business_token when calling PeerTransferRequest., must be bigger than or equal to 1.');
        }

        $this->container['sender_business_token'] = $sender_business_token;

        return $this;
    }

    /**
     * Gets sender_user_token
     *
     * @return string|null
     */
    public function getSenderUserToken()
    {
        return $this->container['sender_user_token'];
    }

    /**
     * Sets sender_user_token
     *
     * @param string|null $sender_user_token Specifies the user account holder that sends funds.  Send a `GET` request to `/users` to retrieve user tokens.
     *
     * @return self
     */
    public function setSenderUserToken($sender_user_token)
    {
        if (!is_null($sender_user_token) && (mb_strlen($sender_user_token) > 36)) {
            throw new \InvalidArgumentException('invalid length for $sender_user_token when calling PeerTransferRequest., must be smaller than or equal to 36.');
        }
        if (!is_null($sender_user_token) && (mb_strlen($sender_user_token) < 1)) {
            throw new \InvalidArgumentException('invalid length for $sender_user_token when calling PeerTransferRequest., must be bigger than or equal to 1.');
        }

        $this->container['sender_user_token'] = $sender_user_token;

        return $this;
    }

    /**
     * Gets tags
     *
     * @return string|null
     */
    public function getTags()
    {
        return $this->container['tags'];
    }

    /**
     * Sets tags
     *
     * @param string|null $tags Metadata about the peer transfer.
     *
     * @return self
     */
    public function setTags($tags)
    {
        if (!is_null($tags) && (mb_strlen($tags) > 255)) {
            throw new \InvalidArgumentException('invalid length for $tags when calling PeerTransferRequest., must be smaller than or equal to 255.');
        }
        if (!is_null($tags) && (mb_strlen($tags) < 1)) {
            throw new \InvalidArgumentException('invalid length for $tags when calling PeerTransferRequest., must be bigger than or equal to 1.');
        }

        $this->container['tags'] = $tags;

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
     * @param string|null $token Unique identifier of the peer transfer request.  If you do not include a token, the system will generate one automatically. This token is necessary for use in other API calls, so we recommend that rather than let the system generate one, you use a simple string that is easy to remember. This value cannot be updated.
     *
     * @return self
     */
    public function setToken($token)
    {
        if (!is_null($token) && (mb_strlen($token) > 36)) {
            throw new \InvalidArgumentException('invalid length for $token when calling PeerTransferRequest., must be smaller than or equal to 36.');
        }
        if (!is_null($token) && (mb_strlen($token) < 1)) {
            throw new \InvalidArgumentException('invalid length for $token when calling PeerTransferRequest., must be bigger than or equal to 1.');
        }

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


