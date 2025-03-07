<?php
/**
 * PaymentCreateReq
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
 * PaymentCreateReq Class Doc Comment
 *
 * @category Class
 * @description Created when a user pays a portion or all of their statement balance. This is for immediate payments only; Once set to &#x60;ACTIVE&#x60;, cannot be edited or deleted.
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class PaymentCreateReq implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'PaymentCreateReq';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'amount' => 'float',
        'currency_code' => '\OpenAPI\Client\Model\CurrencyCode',
        'description' => 'string',
        'impact_time' => '\DateTime',
        'metadata' => 'string',
        'method' => 'string',
        'payment_source_token' => 'string',
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
        'description' => null,
        'impact_time' => 'date-time',
        'metadata' => null,
        'method' => null,
        'payment_source_token' => null,
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
        'description' => 'description',
        'impact_time' => 'impact_time',
        'metadata' => 'metadata',
        'method' => 'method',
        'payment_source_token' => 'payment_source_token',
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
        'description' => 'setDescription',
        'impact_time' => 'setImpactTime',
        'metadata' => 'setMetadata',
        'method' => 'setMethod',
        'payment_source_token' => 'setPaymentSourceToken',
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
        'description' => 'getDescription',
        'impact_time' => 'getImpactTime',
        'metadata' => 'getMetadata',
        'method' => 'getMethod',
        'payment_source_token' => 'getPaymentSourceToken',
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

    const METHOD_ACH = 'ACH';
    const METHOD_CHECK = 'CHECK';
    const METHOD_DEBIT = 'DEBIT';
    const METHOD_CASH = 'CASH';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getMethodAllowableValues()
    {
        return [
            self::METHOD_ACH,
            self::METHOD_CHECK,
            self::METHOD_DEBIT,
            self::METHOD_CASH,
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
        $this->container['amount'] = $data['amount'] ?? null;
        $this->container['currency_code'] = $data['currency_code'] ?? null;
        $this->container['description'] = $data['description'] ?? null;
        $this->container['impact_time'] = $data['impact_time'] ?? null;
        $this->container['metadata'] = $data['metadata'] ?? null;
        $this->container['method'] = $data['method'] ?? null;
        $this->container['payment_source_token'] = $data['payment_source_token'] ?? null;
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
        if (($this->container['amount'] < 0)) {
            $invalidProperties[] = "invalid value for 'amount', must be bigger than or equal to 0.";
        }

        if ($this->container['currency_code'] === null) {
            $invalidProperties[] = "'currency_code' can't be null";
        }
        if ($this->container['description'] === null) {
            $invalidProperties[] = "'description' can't be null";
        }
        if ((mb_strlen($this->container['description']) > 255)) {
            $invalidProperties[] = "invalid value for 'description', the character length must be smaller than or equal to 255.";
        }

        if (!is_null($this->container['metadata']) && (mb_strlen($this->container['metadata']) > 255)) {
            $invalidProperties[] = "invalid value for 'metadata', the character length must be smaller than or equal to 255.";
        }

        if ($this->container['method'] === null) {
            $invalidProperties[] = "'method' can't be null";
        }
        $allowedValues = $this->getMethodAllowableValues();
        if (!is_null($this->container['method']) && !in_array($this->container['method'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'method', must be one of '%s'",
                $this->container['method'],
                implode("', '", $allowedValues)
            );
        }

        if (!is_null($this->container['payment_source_token']) && (mb_strlen($this->container['payment_source_token']) > 36)) {
            $invalidProperties[] = "invalid value for 'payment_source_token', the character length must be smaller than or equal to 36.";
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
     * @param float $amount Amount of the payment.
     *
     * @return self
     */
    public function setAmount($amount)
    {

        if (($amount < 0)) {
            throw new \InvalidArgumentException('invalid value for $amount when calling PaymentCreateReq., must be bigger than or equal to 0.');
        }

        $this->container['amount'] = $amount;

        return $this;
    }

    /**
     * Gets currency_code
     *
     * @return \OpenAPI\Client\Model\CurrencyCode
     */
    public function getCurrencyCode()
    {
        return $this->container['currency_code'];
    }

    /**
     * Sets currency_code
     *
     * @param \OpenAPI\Client\Model\CurrencyCode $currency_code currency_code
     *
     * @return self
     */
    public function setCurrencyCode($currency_code)
    {
        $this->container['currency_code'] = $currency_code;

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
     * @param string $description Description of the payment.
     *
     * @return self
     */
    public function setDescription($description)
    {
        if ((mb_strlen($description) > 255)) {
            throw new \InvalidArgumentException('invalid length for $description when calling PaymentCreateReq., must be smaller than or equal to 255.');
        }

        $this->container['description'] = $description;

        return $this;
    }

    /**
     * Gets impact_time
     *
     * @return \DateTime|null
     */
    public function getImpactTime()
    {
        return $this->container['impact_time'];
    }

    /**
     * Sets impact_time
     *
     * @param \DateTime|null $impact_time Date and time when the payment impacts the account balance and fee calculations.
     *
     * @return self
     */
    public function setImpactTime($impact_time)
    {
        $this->container['impact_time'] = $impact_time;

        return $this;
    }

    /**
     * Gets metadata
     *
     * @return string|null
     */
    public function getMetadata()
    {
        return $this->container['metadata'];
    }

    /**
     * Sets metadata
     *
     * @param string|null $metadata Customer-defined additional information about the payment (for example, a check number).
     *
     * @return self
     */
    public function setMetadata($metadata)
    {
        if (!is_null($metadata) && (mb_strlen($metadata) > 255)) {
            throw new \InvalidArgumentException('invalid length for $metadata when calling PaymentCreateReq., must be smaller than or equal to 255.');
        }

        $this->container['metadata'] = $metadata;

        return $this;
    }

    /**
     * Gets method
     *
     * @return string
     */
    public function getMethod()
    {
        return $this->container['method'];
    }

    /**
     * Sets method
     *
     * @param string $method Method of payment.
     *
     * @return self
     */
    public function setMethod($method)
    {
        $allowedValues = $this->getMethodAllowableValues();
        if (!in_array($method, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'method', must be one of '%s'",
                    $method,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['method'] = $method;

        return $this;
    }

    /**
     * Gets payment_source_token
     *
     * @return string|null
     */
    public function getPaymentSourceToken()
    {
        return $this->container['payment_source_token'];
    }

    /**
     * Sets payment_source_token
     *
     * @param string|null $payment_source_token Unique identifier of the payment source. Required for ACH payments.
     *
     * @return self
     */
    public function setPaymentSourceToken($payment_source_token)
    {
        if (!is_null($payment_source_token) && (mb_strlen($payment_source_token) > 36)) {
            throw new \InvalidArgumentException('invalid length for $payment_source_token when calling PaymentCreateReq., must be smaller than or equal to 36.');
        }

        $this->container['payment_source_token'] = $payment_source_token;

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
     * @param string|null $token Unique identifier of the payment.
     *
     * @return self
     */
    public function setToken($token)
    {
        if (!is_null($token) && (mb_strlen($token) > 36)) {
            throw new \InvalidArgumentException('invalid length for $token when calling PaymentCreateReq., must be smaller than or equal to 36.');
        }
        if (!is_null($token) && (!preg_match("/(?!^ +$)^.+$/", $token))) {
            throw new \InvalidArgumentException("invalid value for $token when calling PaymentCreateReq., must conform to the pattern /(?!^ +$)^.+$/.");
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


