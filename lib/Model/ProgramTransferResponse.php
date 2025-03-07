<?php
/**
 * ProgramTransferResponse
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
 * ProgramTransferResponse Class Doc Comment
 *
 * @category Class
 * @description Contains information about a program transfer, which moves funds from an account holder&#39;s GPA to a program funding source.
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class ProgramTransferResponse implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'program_transfer_response';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'amount' => 'float',
        'business_token' => 'string',
        'created_time' => '\DateTime',
        'currency_code' => 'string',
        'fees' => '\OpenAPI\Client\Model\FeeDetail[]',
        'jit_funding' => '\OpenAPI\Client\Model\JitFundingApi',
        'memo' => 'string',
        'tags' => 'string',
        'token' => 'string',
        'transaction_token' => 'string',
        'type_token' => 'string',
        'user_token' => 'string'
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
        'business_token' => null,
        'created_time' => 'date-time',
        'currency_code' => null,
        'fees' => null,
        'jit_funding' => null,
        'memo' => null,
        'tags' => null,
        'token' => null,
        'transaction_token' => null,
        'type_token' => null,
        'user_token' => null
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
        'business_token' => 'business_token',
        'created_time' => 'created_time',
        'currency_code' => 'currency_code',
        'fees' => 'fees',
        'jit_funding' => 'jit_funding',
        'memo' => 'memo',
        'tags' => 'tags',
        'token' => 'token',
        'transaction_token' => 'transaction_token',
        'type_token' => 'type_token',
        'user_token' => 'user_token'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'amount' => 'setAmount',
        'business_token' => 'setBusinessToken',
        'created_time' => 'setCreatedTime',
        'currency_code' => 'setCurrencyCode',
        'fees' => 'setFees',
        'jit_funding' => 'setJitFunding',
        'memo' => 'setMemo',
        'tags' => 'setTags',
        'token' => 'setToken',
        'transaction_token' => 'setTransactionToken',
        'type_token' => 'setTypeToken',
        'user_token' => 'setUserToken'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'amount' => 'getAmount',
        'business_token' => 'getBusinessToken',
        'created_time' => 'getCreatedTime',
        'currency_code' => 'getCurrencyCode',
        'fees' => 'getFees',
        'jit_funding' => 'getJitFunding',
        'memo' => 'getMemo',
        'tags' => 'getTags',
        'token' => 'getToken',
        'transaction_token' => 'getTransactionToken',
        'type_token' => 'getTypeToken',
        'user_token' => 'getUserToken'
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
        $this->container['business_token'] = $data['business_token'] ?? null;
        $this->container['created_time'] = $data['created_time'] ?? null;
        $this->container['currency_code'] = $data['currency_code'] ?? null;
        $this->container['fees'] = $data['fees'] ?? null;
        $this->container['jit_funding'] = $data['jit_funding'] ?? null;
        $this->container['memo'] = $data['memo'] ?? null;
        $this->container['tags'] = $data['tags'] ?? null;
        $this->container['token'] = $data['token'] ?? null;
        $this->container['transaction_token'] = $data['transaction_token'] ?? null;
        $this->container['type_token'] = $data['type_token'] ?? null;
        $this->container['user_token'] = $data['user_token'] ?? null;
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
        if (!is_null($this->container['business_token']) && (mb_strlen($this->container['business_token']) > 36)) {
            $invalidProperties[] = "invalid value for 'business_token', the character length must be smaller than or equal to 36.";
        }

        if (!is_null($this->container['business_token']) && (mb_strlen($this->container['business_token']) < 1)) {
            $invalidProperties[] = "invalid value for 'business_token', the character length must be bigger than or equal to 1.";
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

        if ($this->container['transaction_token'] === null) {
            $invalidProperties[] = "'transaction_token' can't be null";
        }
        if ($this->container['type_token'] === null) {
            $invalidProperties[] = "'type_token' can't be null";
        }
        if ((mb_strlen($this->container['type_token']) > 36)) {
            $invalidProperties[] = "invalid value for 'type_token', the character length must be smaller than or equal to 36.";
        }

        if ((mb_strlen($this->container['type_token']) < 1)) {
            $invalidProperties[] = "invalid value for 'type_token', the character length must be bigger than or equal to 1.";
        }

        if (!is_null($this->container['user_token']) && (mb_strlen($this->container['user_token']) > 36)) {
            $invalidProperties[] = "invalid value for 'user_token', the character length must be smaller than or equal to 36.";
        }

        if (!is_null($this->container['user_token']) && (mb_strlen($this->container['user_token']) < 1)) {
            $invalidProperties[] = "invalid value for 'user_token', the character length must be bigger than or equal to 1.";
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
     * @param float $amount Amount of program transfer.
     *
     * @return self
     */
    public function setAmount($amount)
    {
        $this->container['amount'] = $amount;

        return $this;
    }

    /**
     * Gets business_token
     *
     * @return string|null
     */
    public function getBusinessToken()
    {
        return $this->container['business_token'];
    }

    /**
     * Sets business_token
     *
     * @param string|null $business_token Unique identifier of the business account holder. Returned if `user_token` is not specified.
     *
     * @return self
     */
    public function setBusinessToken($business_token)
    {
        if (!is_null($business_token) && (mb_strlen($business_token) > 36)) {
            throw new \InvalidArgumentException('invalid length for $business_token when calling ProgramTransferResponse., must be smaller than or equal to 36.');
        }
        if (!is_null($business_token) && (mb_strlen($business_token) < 1)) {
            throw new \InvalidArgumentException('invalid length for $business_token when calling ProgramTransferResponse., must be bigger than or equal to 1.');
        }

        $this->container['business_token'] = $business_token;

        return $this;
    }

    /**
     * Gets created_time
     *
     * @return \DateTime|null
     */
    public function getCreatedTime()
    {
        return $this->container['created_time'];
    }

    /**
     * Sets created_time
     *
     * @param \DateTime|null $created_time Date and time when the program transfer object was created, in UTC.
     *
     * @return self
     */
    public function setCreatedTime($created_time)
    {
        $this->container['created_time'] = $created_time;

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
     * Gets fees
     *
     * @return \OpenAPI\Client\Model\FeeDetail[]|null
     */
    public function getFees()
    {
        return $this->container['fees'];
    }

    /**
     * Sets fees
     *
     * @param \OpenAPI\Client\Model\FeeDetail[]|null $fees Contains attributes that define characteristics of one or more fees.
     *
     * @return self
     */
    public function setFees($fees)
    {
        $this->container['fees'] = $fees;

        return $this;
    }

    /**
     * Gets jit_funding
     *
     * @return \OpenAPI\Client\Model\JitFundingApi|null
     */
    public function getJitFunding()
    {
        return $this->container['jit_funding'];
    }

    /**
     * Sets jit_funding
     *
     * @param \OpenAPI\Client\Model\JitFundingApi|null $jit_funding jit_funding
     *
     * @return self
     */
    public function setJitFunding($jit_funding)
    {
        $this->container['jit_funding'] = $jit_funding;

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
     * @param string|null $memo Additional description of the program transfer.
     *
     * @return self
     */
    public function setMemo($memo)
    {
        if (!is_null($memo) && (mb_strlen($memo) > 99)) {
            throw new \InvalidArgumentException('invalid length for $memo when calling ProgramTransferResponse., must be smaller than or equal to 99.');
        }
        if (!is_null($memo) && (mb_strlen($memo) < 1)) {
            throw new \InvalidArgumentException('invalid length for $memo when calling ProgramTransferResponse., must be bigger than or equal to 1.');
        }

        $this->container['memo'] = $memo;

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
     * @param string|null $tags Comma-delimited list of tags describing the program transfer.
     *
     * @return self
     */
    public function setTags($tags)
    {
        if (!is_null($tags) && (mb_strlen($tags) > 255)) {
            throw new \InvalidArgumentException('invalid length for $tags when calling ProgramTransferResponse., must be smaller than or equal to 255.');
        }
        if (!is_null($tags) && (mb_strlen($tags) < 1)) {
            throw new \InvalidArgumentException('invalid length for $tags when calling ProgramTransferResponse., must be bigger than or equal to 1.');
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
     * @param string|null $token Unique identifier of the program transfer.
     *
     * @return self
     */
    public function setToken($token)
    {
        if (!is_null($token) && (mb_strlen($token) > 36)) {
            throw new \InvalidArgumentException('invalid length for $token when calling ProgramTransferResponse., must be smaller than or equal to 36.');
        }
        if (!is_null($token) && (mb_strlen($token) < 1)) {
            throw new \InvalidArgumentException('invalid length for $token when calling ProgramTransferResponse., must be bigger than or equal to 1.');
        }

        $this->container['token'] = $token;

        return $this;
    }

    /**
     * Gets transaction_token
     *
     * @return string
     */
    public function getTransactionToken()
    {
        return $this->container['transaction_token'];
    }

    /**
     * Sets transaction_token
     *
     * @param string $transaction_token Unique identifier of the transaction.
     *
     * @return self
     */
    public function setTransactionToken($transaction_token)
    {
        $this->container['transaction_token'] = $transaction_token;

        return $this;
    }

    /**
     * Gets type_token
     *
     * @return string
     */
    public function getTypeToken()
    {
        return $this->container['type_token'];
    }

    /**
     * Sets type_token
     *
     * @param string $type_token Unique identifier of the program transfer type.
     *
     * @return self
     */
    public function setTypeToken($type_token)
    {
        if ((mb_strlen($type_token) > 36)) {
            throw new \InvalidArgumentException('invalid length for $type_token when calling ProgramTransferResponse., must be smaller than or equal to 36.');
        }
        if ((mb_strlen($type_token) < 1)) {
            throw new \InvalidArgumentException('invalid length for $type_token when calling ProgramTransferResponse., must be bigger than or equal to 1.');
        }

        $this->container['type_token'] = $type_token;

        return $this;
    }

    /**
     * Gets user_token
     *
     * @return string|null
     */
    public function getUserToken()
    {
        return $this->container['user_token'];
    }

    /**
     * Sets user_token
     *
     * @param string|null $user_token Unique identifier of the user account holder. Returned if `business_token` is not specified.
     *
     * @return self
     */
    public function setUserToken($user_token)
    {
        if (!is_null($user_token) && (mb_strlen($user_token) > 36)) {
            throw new \InvalidArgumentException('invalid length for $user_token when calling ProgramTransferResponse., must be smaller than or equal to 36.');
        }
        if (!is_null($user_token) && (mb_strlen($user_token) < 1)) {
            throw new \InvalidArgumentException('invalid length for $user_token when calling ProgramTransferResponse., must be bigger than or equal to 1.');
        }

        $this->container['user_token'] = $user_token;

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


