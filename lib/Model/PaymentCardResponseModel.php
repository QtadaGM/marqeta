<?php
/**
 * PaymentCardResponseModel
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
 * PaymentCardResponseModel Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class PaymentCardResponseModel implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'payment_card_response_model';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'account_suffix' => 'string',
        'account_type' => 'string',
        'active' => 'bool',
        'business_token' => 'string',
        'created_time' => '\DateTime',
        'exp_date' => 'string',
        'is_default_account' => 'bool',
        'last_modified_time' => '\DateTime',
        'token' => 'string',
        'type' => 'string',
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
        'account_suffix' => null,
        'account_type' => null,
        'active' => null,
        'business_token' => null,
        'created_time' => 'date-time',
        'exp_date' => null,
        'is_default_account' => null,
        'last_modified_time' => 'date-time',
        'token' => null,
        'type' => null,
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
        'account_suffix' => 'account_suffix',
        'account_type' => 'account_type',
        'active' => 'active',
        'business_token' => 'business_token',
        'created_time' => 'created_time',
        'exp_date' => 'exp_date',
        'is_default_account' => 'is_default_account',
        'last_modified_time' => 'last_modified_time',
        'token' => 'token',
        'type' => 'type',
        'user_token' => 'user_token'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'account_suffix' => 'setAccountSuffix',
        'account_type' => 'setAccountType',
        'active' => 'setActive',
        'business_token' => 'setBusinessToken',
        'created_time' => 'setCreatedTime',
        'exp_date' => 'setExpDate',
        'is_default_account' => 'setIsDefaultAccount',
        'last_modified_time' => 'setLastModifiedTime',
        'token' => 'setToken',
        'type' => 'setType',
        'user_token' => 'setUserToken'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'account_suffix' => 'getAccountSuffix',
        'account_type' => 'getAccountType',
        'active' => 'getActive',
        'business_token' => 'getBusinessToken',
        'created_time' => 'getCreatedTime',
        'exp_date' => 'getExpDate',
        'is_default_account' => 'getIsDefaultAccount',
        'last_modified_time' => 'getLastModifiedTime',
        'token' => 'getToken',
        'type' => 'getType',
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
        $this->container['account_suffix'] = $data['account_suffix'] ?? null;
        $this->container['account_type'] = $data['account_type'] ?? null;
        $this->container['active'] = $data['active'] ?? false;
        $this->container['business_token'] = $data['business_token'] ?? null;
        $this->container['created_time'] = $data['created_time'] ?? null;
        $this->container['exp_date'] = $data['exp_date'] ?? null;
        $this->container['is_default_account'] = $data['is_default_account'] ?? false;
        $this->container['last_modified_time'] = $data['last_modified_time'] ?? null;
        $this->container['token'] = $data['token'] ?? null;
        $this->container['type'] = $data['type'] ?? null;
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

        if ($this->container['account_suffix'] === null) {
            $invalidProperties[] = "'account_suffix' can't be null";
        }
        if ($this->container['account_type'] === null) {
            $invalidProperties[] = "'account_type' can't be null";
        }
        if ($this->container['active'] === null) {
            $invalidProperties[] = "'active' can't be null";
        }
        if ($this->container['created_time'] === null) {
            $invalidProperties[] = "'created_time' can't be null";
        }
        if ($this->container['exp_date'] === null) {
            $invalidProperties[] = "'exp_date' can't be null";
        }
        if ($this->container['is_default_account'] === null) {
            $invalidProperties[] = "'is_default_account' can't be null";
        }
        if ($this->container['last_modified_time'] === null) {
            $invalidProperties[] = "'last_modified_time' can't be null";
        }
        if ($this->container['token'] === null) {
            $invalidProperties[] = "'token' can't be null";
        }
        if ($this->container['type'] === null) {
            $invalidProperties[] = "'type' can't be null";
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
     * Gets account_suffix
     *
     * @return string
     */
    public function getAccountSuffix()
    {
        return $this->container['account_suffix'];
    }

    /**
     * Sets account_suffix
     *
     * @param string $account_suffix Account identifier appended to the payment card number.
     *
     * @return self
     */
    public function setAccountSuffix($account_suffix)
    {
        $this->container['account_suffix'] = $account_suffix;

        return $this;
    }

    /**
     * Gets account_type
     *
     * @return string
     */
    public function getAccountType()
    {
        return $this->container['account_type'];
    }

    /**
     * Sets account_type
     *
     * @param string $account_type Type of payment card account.
     *
     * @return self
     */
    public function setAccountType($account_type)
    {
        $this->container['account_type'] = $account_type;

        return $this;
    }

    /**
     * Gets active
     *
     * @return bool
     */
    public function getActive()
    {
        return $this->container['active'];
    }

    /**
     * Sets active
     *
     * @param bool $active Specifies whether the account is active.
     *
     * @return self
     */
    public function setActive($active)
    {
        $this->container['active'] = $active;

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
     * @param string|null $business_token Unique identifier of the business account holder. This token is returned if a `user_token` is not specified.
     *
     * @return self
     */
    public function setBusinessToken($business_token)
    {
        $this->container['business_token'] = $business_token;

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
     * @param \DateTime $created_time Date and time when the resource was created, in UTC.
     *
     * @return self
     */
    public function setCreatedTime($created_time)
    {
        $this->container['created_time'] = $created_time;

        return $this;
    }

    /**
     * Gets exp_date
     *
     * @return string
     */
    public function getExpDate()
    {
        return $this->container['exp_date'];
    }

    /**
     * Sets exp_date
     *
     * @param string $exp_date Payment card expiration date.
     *
     * @return self
     */
    public function setExpDate($exp_date)
    {
        $this->container['exp_date'] = $exp_date;

        return $this;
    }

    /**
     * Gets is_default_account
     *
     * @return bool
     */
    public function getIsDefaultAccount()
    {
        return $this->container['is_default_account'];
    }

    /**
     * Sets is_default_account
     *
     * @param bool $is_default_account If there are multiple funding sources, this field specifies which source is used by default in funding calls. If there is only one funding source, the system ignores this field and always uses that source.
     *
     * @return self
     */
    public function setIsDefaultAccount($is_default_account)
    {
        $this->container['is_default_account'] = $is_default_account;

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
     * @param \DateTime $last_modified_time Date and time when the resource was last modified, in UTC.
     *
     * @return self
     */
    public function setLastModifiedTime($last_modified_time)
    {
        $this->container['last_modified_time'] = $last_modified_time;

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
     * @param string $token Unique identifier of the funding source.
     *
     * @return self
     */
    public function setToken($token)
    {
        $this->container['token'] = $token;

        return $this;
    }

    /**
     * Gets type
     *
     * @return string
     */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
     * Sets type
     *
     * @param string $type Funding source type.
     *
     * @return self
     */
    public function setType($type)
    {
        $this->container['type'] = $type;

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
     * @param string|null $user_token Unique identifier of the user account holder. This token is returned if a `business_token` is not specified.
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


