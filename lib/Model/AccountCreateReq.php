<?php
/**
 * AccountCreateReq
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
 * AccountCreateReq Class Doc Comment
 *
 * @category Class
 * @description Contains information relevant to creating a credit account.
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class AccountCreateReq implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'AccountCreateReq';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'application_token' => 'string',
        'bundle_token' => 'string',
        'business_token' => 'string',
        'config' => '\OpenAPI\Client\Model\AccountConfigReq',
        'credit_limit' => 'float',
        'credit_product_token' => 'string',
        'description' => 'string',
        'external_offer_id' => 'string',
        'name' => 'string',
        'token' => 'string',
        'usages' => '\OpenAPI\Client\Model\AccountUsageCreateReq[]',
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
        'application_token' => null,
        'bundle_token' => null,
        'business_token' => null,
        'config' => null,
        'credit_limit' => null,
        'credit_product_token' => null,
        'description' => null,
        'external_offer_id' => null,
        'name' => null,
        'token' => null,
        'usages' => null,
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
        'application_token' => 'application_token',
        'bundle_token' => 'bundle_token',
        'business_token' => 'business_token',
        'config' => 'config',
        'credit_limit' => 'credit_limit',
        'credit_product_token' => 'credit_product_token',
        'description' => 'description',
        'external_offer_id' => 'external_offer_id',
        'name' => 'name',
        'token' => 'token',
        'usages' => 'usages',
        'user_token' => 'user_token'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'application_token' => 'setApplicationToken',
        'bundle_token' => 'setBundleToken',
        'business_token' => 'setBusinessToken',
        'config' => 'setConfig',
        'credit_limit' => 'setCreditLimit',
        'credit_product_token' => 'setCreditProductToken',
        'description' => 'setDescription',
        'external_offer_id' => 'setExternalOfferId',
        'name' => 'setName',
        'token' => 'setToken',
        'usages' => 'setUsages',
        'user_token' => 'setUserToken'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'application_token' => 'getApplicationToken',
        'bundle_token' => 'getBundleToken',
        'business_token' => 'getBusinessToken',
        'config' => 'getConfig',
        'credit_limit' => 'getCreditLimit',
        'credit_product_token' => 'getCreditProductToken',
        'description' => 'getDescription',
        'external_offer_id' => 'getExternalOfferId',
        'name' => 'getName',
        'token' => 'getToken',
        'usages' => 'getUsages',
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
        $this->container['application_token'] = $data['application_token'] ?? null;
        $this->container['bundle_token'] = $data['bundle_token'] ?? null;
        $this->container['business_token'] = $data['business_token'] ?? null;
        $this->container['config'] = $data['config'] ?? null;
        $this->container['credit_limit'] = $data['credit_limit'] ?? null;
        $this->container['credit_product_token'] = $data['credit_product_token'] ?? null;
        $this->container['description'] = $data['description'] ?? null;
        $this->container['external_offer_id'] = $data['external_offer_id'] ?? null;
        $this->container['name'] = $data['name'] ?? null;
        $this->container['token'] = $data['token'] ?? null;
        $this->container['usages'] = $data['usages'] ?? null;
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

        if (!is_null($this->container['application_token']) && (mb_strlen($this->container['application_token']) > 36)) {
            $invalidProperties[] = "invalid value for 'application_token', the character length must be smaller than or equal to 36.";
        }

        if ($this->container['credit_limit'] === null) {
            $invalidProperties[] = "'credit_limit' can't be null";
        }
        if (($this->container['credit_limit'] > 1000000)) {
            $invalidProperties[] = "invalid value for 'credit_limit', must be smaller than or equal to 1000000.";
        }

        if (($this->container['credit_limit'] <= 0)) {
            $invalidProperties[] = "invalid value for 'credit_limit', must be bigger than 0.";
        }

        if (!is_null($this->container['description']) && (mb_strlen($this->container['description']) > 255)) {
            $invalidProperties[] = "invalid value for 'description', the character length must be smaller than or equal to 255.";
        }

        if (!is_null($this->container['name']) && (mb_strlen($this->container['name']) > 255)) {
            $invalidProperties[] = "invalid value for 'name', the character length must be smaller than or equal to 255.";
        }

        if (!is_null($this->container['token']) && (mb_strlen($this->container['token']) > 36)) {
            $invalidProperties[] = "invalid value for 'token', the character length must be smaller than or equal to 36.";
        }

        if (!is_null($this->container['token']) && !preg_match("/(?!^ +$)^.+$/", $this->container['token'])) {
            $invalidProperties[] = "invalid value for 'token', must be conform to the pattern /(?!^ +$)^.+$/.";
        }

        if ($this->container['usages'] === null) {
            $invalidProperties[] = "'usages' can't be null";
        }
        if ((count($this->container['usages']) < 1)) {
            $invalidProperties[] = "invalid value for 'usages', number of items must be greater than or equal to 1.";
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
     * Gets application_token
     *
     * @return string|null
     */
    public function getApplicationToken()
    {
        return $this->container['application_token'];
    }

    /**
     * Sets application_token
     *
     * @param string|null $application_token Unique identifier of the associated credit account application.
     *
     * @return self
     */
    public function setApplicationToken($application_token)
    {
        if (!is_null($application_token) && (mb_strlen($application_token) > 36)) {
            throw new \InvalidArgumentException('invalid length for $application_token when calling AccountCreateReq., must be smaller than or equal to 36.');
        }

        $this->container['application_token'] = $application_token;

        return $this;
    }

    /**
     * Gets bundle_token
     *
     * @return string|null
     */
    public function getBundleToken()
    {
        return $this->container['bundle_token'];
    }

    /**
     * Sets bundle_token
     *
     * @param string|null $bundle_token Unique identifier of the associated bundle.  You must pass either `bundle_token` or both `credit_product_token` and `external_offer_id`.
     *
     * @return self
     */
    public function setBundleToken($bundle_token)
    {
        $this->container['bundle_token'] = $bundle_token;

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
     * @param string|null $business_token Unique identifier of the parent business program.  Pass either a `user_token` or `business_token`.
     *
     * @return self
     */
    public function setBusinessToken($business_token)
    {
        $this->container['business_token'] = $business_token;

        return $this;
    }

    /**
     * Gets config
     *
     * @return \OpenAPI\Client\Model\AccountConfigReq|null
     */
    public function getConfig()
    {
        return $this->container['config'];
    }

    /**
     * Sets config
     *
     * @param \OpenAPI\Client\Model\AccountConfigReq|null $config config
     *
     * @return self
     */
    public function setConfig($config)
    {
        $this->container['config'] = $config;

        return $this;
    }

    /**
     * Gets credit_limit
     *
     * @return float
     */
    public function getCreditLimit()
    {
        return $this->container['credit_limit'];
    }

    /**
     * Sets credit_limit
     *
     * @param float $credit_limit Maximum balance the credit account can carry.
     *
     * @return self
     */
    public function setCreditLimit($credit_limit)
    {

        if (($credit_limit > 1000000)) {
            throw new \InvalidArgumentException('invalid value for $credit_limit when calling AccountCreateReq., must be smaller than or equal to 1000000.');
        }
        if (($credit_limit <= 0)) {
            throw new \InvalidArgumentException('invalid value for $credit_limit when calling AccountCreateReq., must be bigger than 0.');
        }

        $this->container['credit_limit'] = $credit_limit;

        return $this;
    }

    /**
     * Gets credit_product_token
     *
     * @return string|null
     */
    public function getCreditProductToken()
    {
        return $this->container['credit_product_token'];
    }

    /**
     * Sets credit_product_token
     *
     * @param string|null $credit_product_token Unique identifier of the associated credit product.  This field is required if passing `external_offer_id`.  You must pass either both `credit_product_token` and `external_offer_id` or `bundle_token`.
     *
     * @return self
     */
    public function setCreditProductToken($credit_product_token)
    {
        $this->container['credit_product_token'] = $credit_product_token;

        return $this;
    }

    /**
     * Gets description
     *
     * @return string|null
     */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
     * Sets description
     *
     * @param string|null $description Description for the credit account.
     *
     * @return self
     */
    public function setDescription($description)
    {
        if (!is_null($description) && (mb_strlen($description) > 255)) {
            throw new \InvalidArgumentException('invalid length for $description when calling AccountCreateReq., must be smaller than or equal to 255.');
        }

        $this->container['description'] = $description;

        return $this;
    }

    /**
     * Gets external_offer_id
     *
     * @return string|null
     */
    public function getExternalOfferId()
    {
        return $this->container['external_offer_id'];
    }

    /**
     * Sets external_offer_id
     *
     * @param string|null $external_offer_id Unique identifier you provide of the associated external credit offer.  This field is required if passing `credit_product_token`.  You must pass either both `external_offer_id` and `credit_product_token` or `bundle_token`.
     *
     * @return self
     */
    public function setExternalOfferId($external_offer_id)
    {
        $this->container['external_offer_id'] = $external_offer_id;

        return $this;
    }

    /**
     * Gets name
     *
     * @return string|null
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     *
     * @param string|null $name Name of the credit account.
     *
     * @return self
     */
    public function setName($name)
    {
        if (!is_null($name) && (mb_strlen($name) > 255)) {
            throw new \InvalidArgumentException('invalid length for $name when calling AccountCreateReq., must be smaller than or equal to 255.');
        }

        $this->container['name'] = $name;

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
     * @param string|null $token Unique identifier of the credit account.
     *
     * @return self
     */
    public function setToken($token)
    {
        if (!is_null($token) && (mb_strlen($token) > 36)) {
            throw new \InvalidArgumentException('invalid length for $token when calling AccountCreateReq., must be smaller than or equal to 36.');
        }
        if (!is_null($token) && (!preg_match("/(?!^ +$)^.+$/", $token))) {
            throw new \InvalidArgumentException("invalid value for $token when calling AccountCreateReq., must conform to the pattern /(?!^ +$)^.+$/.");
        }

        $this->container['token'] = $token;

        return $this;
    }

    /**
     * Gets usages
     *
     * @return \OpenAPI\Client\Model\AccountUsageCreateReq[]
     */
    public function getUsages()
    {
        return $this->container['usages'];
    }

    /**
     * Sets usages
     *
     * @param \OpenAPI\Client\Model\AccountUsageCreateReq[] $usages Contains one or more `usages` objects that contain information on how a credit account is used and what types of balances are permitted on the account.  You can pass only one `usages` object per `usages.type`.
     *
     * @return self
     */
    public function setUsages($usages)
    {


        if ((count($usages) < 1)) {
            throw new \InvalidArgumentException('invalid length for $usages when calling AccountCreateReq., number of items must be greater than or equal to 1.');
        }
        $this->container['usages'] = $usages;

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
     * @param string|null $user_token Unique identifier of the primary account holder.  Pass either a `user_token` or `business_token`.
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

