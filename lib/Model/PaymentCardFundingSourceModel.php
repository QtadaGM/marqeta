<?php
/**
 * PaymentCardFundingSourceModel
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
use \OpenAPI\Client\ObjectSerializer;

/**
 * PaymentCardFundingSourceModel Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class PaymentCardFundingSourceModel extends FundingSourceModel
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'payment_card_funding_source_model';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'account_suffix' => 'string',
        'account_type' => 'string',
        'business_token' => 'string',
        'exp_date' => 'string',
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
        'business_token' => null,
        'exp_date' => null,
        'user_token' => null
    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPITypes()
    {
        return self::$openAPITypes + parent::openAPITypes();
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPIFormats()
    {
        return self::$openAPIFormats + parent::openAPIFormats();
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
        'business_token' => 'business_token',
        'exp_date' => 'exp_date',
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
        'business_token' => 'setBusinessToken',
        'exp_date' => 'setExpDate',
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
        'business_token' => 'getBusinessToken',
        'exp_date' => 'getExpDate',
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
        return parent::attributeMap() + self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters()
    {
        return parent::setters() + self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters()
    {
        return parent::getters() + self::$getters;
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
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        parent::__construct($data);

        $this->container['account_suffix'] = $data['account_suffix'] ?? null;
        $this->container['account_type'] = $data['account_type'] ?? null;
        $this->container['business_token'] = $data['business_token'] ?? null;
        $this->container['exp_date'] = $data['exp_date'] ?? null;
        $this->container['user_token'] = $data['user_token'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = parent::listInvalidProperties();

        if ($this->container['account_suffix'] === null) {
            $invalidProperties[] = "'account_suffix' can't be null";
        }
        if ($this->container['account_type'] === null) {
            $invalidProperties[] = "'account_type' can't be null";
        }
        if ($this->container['exp_date'] === null) {
            $invalidProperties[] = "'exp_date' can't be null";
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
     * @param string $account_suffix account_suffix
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
     * @param string $account_type account_type
     *
     * @return self
     */
    public function setAccountType($account_type)
    {
        $this->container['account_type'] = $account_type;

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
     * @param string|null $business_token Required if 'user_token' is null
     *
     * @return self
     */
    public function setBusinessToken($business_token)
    {
        $this->container['business_token'] = $business_token;

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
     * @param string $exp_date exp_date
     *
     * @return self
     */
    public function setExpDate($exp_date)
    {
        $this->container['exp_date'] = $exp_date;

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
     * @param string|null $user_token Required if 'business_token' is null
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


