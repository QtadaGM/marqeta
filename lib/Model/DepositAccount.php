<?php
/**
 * DepositAccount
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
 * DepositAccount Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class DepositAccount implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'deposit_account';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'account_number' => 'string',
        'allow_immediate_credit' => 'bool',
        'business_token' => 'string',
        'routing_number' => 'string',
        'token' => 'string',
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
        'account_number' => null,
        'allow_immediate_credit' => null,
        'business_token' => null,
        'routing_number' => null,
        'token' => null,
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
        'account_number' => 'account_number',
        'allow_immediate_credit' => 'allow_immediate_credit',
        'business_token' => 'business_token',
        'routing_number' => 'routing_number',
        'token' => 'token',
        'user_token' => 'user_token'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'account_number' => 'setAccountNumber',
        'allow_immediate_credit' => 'setAllowImmediateCredit',
        'business_token' => 'setBusinessToken',
        'routing_number' => 'setRoutingNumber',
        'token' => 'setToken',
        'user_token' => 'setUserToken'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'account_number' => 'getAccountNumber',
        'allow_immediate_credit' => 'getAllowImmediateCredit',
        'business_token' => 'getBusinessToken',
        'routing_number' => 'getRoutingNumber',
        'token' => 'getToken',
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
        $this->container['account_number'] = $data['account_number'] ?? null;
        $this->container['allow_immediate_credit'] = $data['allow_immediate_credit'] ?? false;
        $this->container['business_token'] = $data['business_token'] ?? null;
        $this->container['routing_number'] = $data['routing_number'] ?? null;
        $this->container['token'] = $data['token'] ?? null;
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

        if ($this->container['account_number'] === null) {
            $invalidProperties[] = "'account_number' can't be null";
        }
        if ($this->container['routing_number'] === null) {
            $invalidProperties[] = "'routing_number' can't be null";
        }
        if ($this->container['token'] === null) {
            $invalidProperties[] = "'token' can't be null";
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
     * Gets account_number
     *
     * @return string
     */
    public function getAccountNumber()
    {
        return $this->container['account_number'];
    }

    /**
     * Sets account_number
     *
     * @param string $account_number account_number
     *
     * @return self
     */
    public function setAccountNumber($account_number)
    {
        $this->container['account_number'] = $account_number;

        return $this;
    }

    /**
     * Gets allow_immediate_credit
     *
     * @return bool|null
     */
    public function getAllowImmediateCredit()
    {
        return $this->container['allow_immediate_credit'];
    }

    /**
     * Sets allow_immediate_credit
     *
     * @param bool|null $allow_immediate_credit allow_immediate_credit
     *
     * @return self
     */
    public function setAllowImmediateCredit($allow_immediate_credit)
    {
        $this->container['allow_immediate_credit'] = $allow_immediate_credit;

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
     * @param string|null $business_token business_token
     *
     * @return self
     */
    public function setBusinessToken($business_token)
    {
        $this->container['business_token'] = $business_token;

        return $this;
    }

    /**
     * Gets routing_number
     *
     * @return string
     */
    public function getRoutingNumber()
    {
        return $this->container['routing_number'];
    }

    /**
     * Sets routing_number
     *
     * @param string $routing_number routing_number
     *
     * @return self
     */
    public function setRoutingNumber($routing_number)
    {
        $this->container['routing_number'] = $routing_number;

        return $this;
    }

    /**
     * Gets token
     *
     * @return string
     */
    public function getToken()
    {
        return $this->container['token'];
    }

    /**
     * Sets token
     *
     * @param string $token token
     *
     * @return self
     */
    public function setToken($token)
    {
        $this->container['token'] = $token;

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
     * @param string|null $user_token user_token
     *
     * @return self
     */
    public function setUserToken($user_token)
    {
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

