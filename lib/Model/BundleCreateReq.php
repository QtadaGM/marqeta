<?php
/**
 * BundleCreateReq
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
 * BundleCreateReq Class Doc Comment
 *
 * @category Class
 * @description Contains information on a bundle.
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class BundleCreateReq implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'BundleCreateReq';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'apr_policy_token' => 'string',
        'credit_product_policy_token' => 'string',
        'description' => 'string',
        'document_policy_token' => 'string',
        'fee_policy_token' => 'string',
        'name' => 'string',
        'offer_policy_token' => 'string',
        'reward_policy_token' => 'string',
        'status' => '\OpenAPI\Client\Model\BundleResourceStatus',
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
        'apr_policy_token' => null,
        'credit_product_policy_token' => null,
        'description' => null,
        'document_policy_token' => null,
        'fee_policy_token' => null,
        'name' => null,
        'offer_policy_token' => null,
        'reward_policy_token' => null,
        'status' => null,
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
        'apr_policy_token' => 'apr_policy_token',
        'credit_product_policy_token' => 'credit_product_policy_token',
        'description' => 'description',
        'document_policy_token' => 'document_policy_token',
        'fee_policy_token' => 'fee_policy_token',
        'name' => 'name',
        'offer_policy_token' => 'offer_policy_token',
        'reward_policy_token' => 'reward_policy_token',
        'status' => 'status',
        'token' => 'token'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'apr_policy_token' => 'setAprPolicyToken',
        'credit_product_policy_token' => 'setCreditProductPolicyToken',
        'description' => 'setDescription',
        'document_policy_token' => 'setDocumentPolicyToken',
        'fee_policy_token' => 'setFeePolicyToken',
        'name' => 'setName',
        'offer_policy_token' => 'setOfferPolicyToken',
        'reward_policy_token' => 'setRewardPolicyToken',
        'status' => 'setStatus',
        'token' => 'setToken'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'apr_policy_token' => 'getAprPolicyToken',
        'credit_product_policy_token' => 'getCreditProductPolicyToken',
        'description' => 'getDescription',
        'document_policy_token' => 'getDocumentPolicyToken',
        'fee_policy_token' => 'getFeePolicyToken',
        'name' => 'getName',
        'offer_policy_token' => 'getOfferPolicyToken',
        'reward_policy_token' => 'getRewardPolicyToken',
        'status' => 'getStatus',
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
        $this->container['apr_policy_token'] = $data['apr_policy_token'] ?? null;
        $this->container['credit_product_policy_token'] = $data['credit_product_policy_token'] ?? null;
        $this->container['description'] = $data['description'] ?? null;
        $this->container['document_policy_token'] = $data['document_policy_token'] ?? null;
        $this->container['fee_policy_token'] = $data['fee_policy_token'] ?? null;
        $this->container['name'] = $data['name'] ?? null;
        $this->container['offer_policy_token'] = $data['offer_policy_token'] ?? null;
        $this->container['reward_policy_token'] = $data['reward_policy_token'] ?? null;
        $this->container['status'] = $data['status'] ?? null;
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

        if ($this->container['apr_policy_token'] === null) {
            $invalidProperties[] = "'apr_policy_token' can't be null";
        }
        if ((mb_strlen($this->container['apr_policy_token']) > 36)) {
            $invalidProperties[] = "invalid value for 'apr_policy_token', the character length must be smaller than or equal to 36.";
        }

        if (!preg_match("/(?!^ +$)^.+$/", $this->container['apr_policy_token'])) {
            $invalidProperties[] = "invalid value for 'apr_policy_token', must be conform to the pattern /(?!^ +$)^.+$/.";
        }

        if ($this->container['credit_product_policy_token'] === null) {
            $invalidProperties[] = "'credit_product_policy_token' can't be null";
        }
        if ((mb_strlen($this->container['credit_product_policy_token']) > 36)) {
            $invalidProperties[] = "invalid value for 'credit_product_policy_token', the character length must be smaller than or equal to 36.";
        }

        if (!preg_match("/(?!^ +$)^.+$/", $this->container['credit_product_policy_token'])) {
            $invalidProperties[] = "invalid value for 'credit_product_policy_token', must be conform to the pattern /(?!^ +$)^.+$/.";
        }

        if ($this->container['description'] === null) {
            $invalidProperties[] = "'description' can't be null";
        }
        if ((mb_strlen($this->container['description']) > 255)) {
            $invalidProperties[] = "invalid value for 'description', the character length must be smaller than or equal to 255.";
        }

        if ($this->container['document_policy_token'] === null) {
            $invalidProperties[] = "'document_policy_token' can't be null";
        }
        if ((mb_strlen($this->container['document_policy_token']) > 36)) {
            $invalidProperties[] = "invalid value for 'document_policy_token', the character length must be smaller than or equal to 36.";
        }

        if (!preg_match("/(?!^ +$)^.+$/", $this->container['document_policy_token'])) {
            $invalidProperties[] = "invalid value for 'document_policy_token', must be conform to the pattern /(?!^ +$)^.+$/.";
        }

        if ($this->container['fee_policy_token'] === null) {
            $invalidProperties[] = "'fee_policy_token' can't be null";
        }
        if ((mb_strlen($this->container['fee_policy_token']) > 36)) {
            $invalidProperties[] = "invalid value for 'fee_policy_token', the character length must be smaller than or equal to 36.";
        }

        if (!preg_match("/(?!^ +$)^.+$/", $this->container['fee_policy_token'])) {
            $invalidProperties[] = "invalid value for 'fee_policy_token', must be conform to the pattern /(?!^ +$)^.+$/.";
        }

        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
        }
        if ((mb_strlen($this->container['name']) > 255)) {
            $invalidProperties[] = "invalid value for 'name', the character length must be smaller than or equal to 255.";
        }

        if (!is_null($this->container['offer_policy_token']) && (mb_strlen($this->container['offer_policy_token']) > 36)) {
            $invalidProperties[] = "invalid value for 'offer_policy_token', the character length must be smaller than or equal to 36.";
        }

        if (!is_null($this->container['offer_policy_token']) && !preg_match("/(?!^ +$)^.+$/", $this->container['offer_policy_token'])) {
            $invalidProperties[] = "invalid value for 'offer_policy_token', must be conform to the pattern /(?!^ +$)^.+$/.";
        }

        if (!is_null($this->container['reward_policy_token']) && (mb_strlen($this->container['reward_policy_token']) > 36)) {
            $invalidProperties[] = "invalid value for 'reward_policy_token', the character length must be smaller than or equal to 36.";
        }

        if (!is_null($this->container['reward_policy_token']) && !preg_match("/(?!^ +$)^.+$/", $this->container['reward_policy_token'])) {
            $invalidProperties[] = "invalid value for 'reward_policy_token', must be conform to the pattern /(?!^ +$)^.+$/.";
        }

        if ($this->container['status'] === null) {
            $invalidProperties[] = "'status' can't be null";
        }
        if (!is_null($this->container['token']) && (mb_strlen($this->container['token']) > 36)) {
            $invalidProperties[] = "invalid value for 'token', the character length must be smaller than or equal to 36.";
        }

        if (!is_null($this->container['token']) && !preg_match("/(?!^ +$)^.+$/", $this->container['token'])) {
            $invalidProperties[] = "invalid value for 'token', must be conform to the pattern /(?!^ +$)^.+$/.";
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
     * Gets apr_policy_token
     *
     * @return string
     */
    public function getAprPolicyToken()
    {
        return $this->container['apr_policy_token'];
    }

    /**
     * Sets apr_policy_token
     *
     * @param string $apr_policy_token Unique identifier of the APR policy.
     *
     * @return self
     */
    public function setAprPolicyToken($apr_policy_token)
    {
        if ((mb_strlen($apr_policy_token) > 36)) {
            throw new \InvalidArgumentException('invalid length for $apr_policy_token when calling BundleCreateReq., must be smaller than or equal to 36.');
        }
        if ((!preg_match("/(?!^ +$)^.+$/", $apr_policy_token))) {
            throw new \InvalidArgumentException("invalid value for $apr_policy_token when calling BundleCreateReq., must conform to the pattern /(?!^ +$)^.+$/.");
        }

        $this->container['apr_policy_token'] = $apr_policy_token;

        return $this;
    }

    /**
     * Gets credit_product_policy_token
     *
     * @return string
     */
    public function getCreditProductPolicyToken()
    {
        return $this->container['credit_product_policy_token'];
    }

    /**
     * Sets credit_product_policy_token
     *
     * @param string $credit_product_policy_token Unique identifier of the credit product policy.
     *
     * @return self
     */
    public function setCreditProductPolicyToken($credit_product_policy_token)
    {
        if ((mb_strlen($credit_product_policy_token) > 36)) {
            throw new \InvalidArgumentException('invalid length for $credit_product_policy_token when calling BundleCreateReq., must be smaller than or equal to 36.');
        }
        if ((!preg_match("/(?!^ +$)^.+$/", $credit_product_policy_token))) {
            throw new \InvalidArgumentException("invalid value for $credit_product_policy_token when calling BundleCreateReq., must conform to the pattern /(?!^ +$)^.+$/.");
        }

        $this->container['credit_product_policy_token'] = $credit_product_policy_token;

        return $this;
    }

    /**
     * Gets description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
     * Sets description
     *
     * @param string $description Description of the bundle.
     *
     * @return self
     */
    public function setDescription($description)
    {
        if ((mb_strlen($description) > 255)) {
            throw new \InvalidArgumentException('invalid length for $description when calling BundleCreateReq., must be smaller than or equal to 255.');
        }

        $this->container['description'] = $description;

        return $this;
    }

    /**
     * Gets document_policy_token
     *
     * @return string
     */
    public function getDocumentPolicyToken()
    {
        return $this->container['document_policy_token'];
    }

    /**
     * Sets document_policy_token
     *
     * @param string $document_policy_token Unique identifier of the document policy.
     *
     * @return self
     */
    public function setDocumentPolicyToken($document_policy_token)
    {
        if ((mb_strlen($document_policy_token) > 36)) {
            throw new \InvalidArgumentException('invalid length for $document_policy_token when calling BundleCreateReq., must be smaller than or equal to 36.');
        }
        if ((!preg_match("/(?!^ +$)^.+$/", $document_policy_token))) {
            throw new \InvalidArgumentException("invalid value for $document_policy_token when calling BundleCreateReq., must conform to the pattern /(?!^ +$)^.+$/.");
        }

        $this->container['document_policy_token'] = $document_policy_token;

        return $this;
    }

    /**
     * Gets fee_policy_token
     *
     * @return string
     */
    public function getFeePolicyToken()
    {
        return $this->container['fee_policy_token'];
    }

    /**
     * Sets fee_policy_token
     *
     * @param string $fee_policy_token Unique identifier of the fee policy.
     *
     * @return self
     */
    public function setFeePolicyToken($fee_policy_token)
    {
        if ((mb_strlen($fee_policy_token) > 36)) {
            throw new \InvalidArgumentException('invalid length for $fee_policy_token when calling BundleCreateReq., must be smaller than or equal to 36.');
        }
        if ((!preg_match("/(?!^ +$)^.+$/", $fee_policy_token))) {
            throw new \InvalidArgumentException("invalid value for $fee_policy_token when calling BundleCreateReq., must conform to the pattern /(?!^ +$)^.+$/.");
        }

        $this->container['fee_policy_token'] = $fee_policy_token;

        return $this;
    }

    /**
     * Gets name
     *
     * @return string
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     *
     * @param string $name Name of the bundle.
     *
     * @return self
     */
    public function setName($name)
    {
        if ((mb_strlen($name) > 255)) {
            throw new \InvalidArgumentException('invalid length for $name when calling BundleCreateReq., must be smaller than or equal to 255.');
        }

        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets offer_policy_token
     *
     * @return string|null
     */
    public function getOfferPolicyToken()
    {
        return $this->container['offer_policy_token'];
    }

    /**
     * Sets offer_policy_token
     *
     * @param string|null $offer_policy_token Unique identifier of the offer policy.
     *
     * @return self
     */
    public function setOfferPolicyToken($offer_policy_token)
    {
        if (!is_null($offer_policy_token) && (mb_strlen($offer_policy_token) > 36)) {
            throw new \InvalidArgumentException('invalid length for $offer_policy_token when calling BundleCreateReq., must be smaller than or equal to 36.');
        }
        if (!is_null($offer_policy_token) && (!preg_match("/(?!^ +$)^.+$/", $offer_policy_token))) {
            throw new \InvalidArgumentException("invalid value for $offer_policy_token when calling BundleCreateReq., must conform to the pattern /(?!^ +$)^.+$/.");
        }

        $this->container['offer_policy_token'] = $offer_policy_token;

        return $this;
    }

    /**
     * Gets reward_policy_token
     *
     * @return string|null
     */
    public function getRewardPolicyToken()
    {
        return $this->container['reward_policy_token'];
    }

    /**
     * Sets reward_policy_token
     *
     * @param string|null $reward_policy_token Unique identifier of the reward policy.
     *
     * @return self
     */
    public function setRewardPolicyToken($reward_policy_token)
    {
        if (!is_null($reward_policy_token) && (mb_strlen($reward_policy_token) > 36)) {
            throw new \InvalidArgumentException('invalid length for $reward_policy_token when calling BundleCreateReq., must be smaller than or equal to 36.');
        }
        if (!is_null($reward_policy_token) && (!preg_match("/(?!^ +$)^.+$/", $reward_policy_token))) {
            throw new \InvalidArgumentException("invalid value for $reward_policy_token when calling BundleCreateReq., must conform to the pattern /(?!^ +$)^.+$/.");
        }

        $this->container['reward_policy_token'] = $reward_policy_token;

        return $this;
    }

    /**
     * Gets status
     *
     * @return \OpenAPI\Client\Model\BundleResourceStatus
     */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
     * Sets status
     *
     * @param \OpenAPI\Client\Model\BundleResourceStatus $status status
     *
     * @return self
     */
    public function setStatus($status)
    {
        $this->container['status'] = $status;

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
     * @param string|null $token Unique identifier of the bundle.
     *
     * @return self
     */
    public function setToken($token)
    {
        if (!is_null($token) && (mb_strlen($token) > 36)) {
            throw new \InvalidArgumentException('invalid length for $token when calling BundleCreateReq., must be smaller than or equal to 36.');
        }
        if (!is_null($token) && (!preg_match("/(?!^ +$)^.+$/", $token))) {
            throw new \InvalidArgumentException("invalid value for $token when calling BundleCreateReq., must conform to the pattern /(?!^ +$)^.+$/.");
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


