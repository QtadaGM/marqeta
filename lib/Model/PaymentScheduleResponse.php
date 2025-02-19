<?php
/**
 * PaymentScheduleResponse
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
 * PaymentScheduleResponse Class Doc Comment
 *
 * @category Class
 * @description A future one-time or recurring payment schedule.
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class PaymentScheduleResponse implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'PaymentScheduleResponse';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'account_token' => 'string',
        'amount' => 'float',
        'amount_category' => '\OpenAPI\Client\Model\PaymentScheduleAmountCategory',
        'created_time' => '\DateTime',
        'currency_code' => '\OpenAPI\Client\Model\CurrencyCode',
        'description' => 'string',
        'frequency' => '\OpenAPI\Client\Model\PaymentScheduleFrequency',
        'next_payment_impact_date' => '\DateTime',
        'payment_day' => 'string',
        'payment_source_token' => 'string',
        'status' => '\OpenAPI\Client\Model\PaymentScheduleStatus',
        'token' => 'string',
        'updated_time' => '\DateTime'
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
        'amount' => null,
        'amount_category' => null,
        'created_time' => 'date-time',
        'currency_code' => null,
        'description' => null,
        'frequency' => null,
        'next_payment_impact_date' => 'date',
        'payment_day' => null,
        'payment_source_token' => null,
        'status' => null,
        'token' => null,
        'updated_time' => 'date-time'
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
        'amount' => 'amount',
        'amount_category' => 'amount_category',
        'created_time' => 'created_time',
        'currency_code' => 'currency_code',
        'description' => 'description',
        'frequency' => 'frequency',
        'next_payment_impact_date' => 'next_payment_impact_date',
        'payment_day' => 'payment_day',
        'payment_source_token' => 'payment_source_token',
        'status' => 'status',
        'token' => 'token',
        'updated_time' => 'updated_time'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'account_token' => 'setAccountToken',
        'amount' => 'setAmount',
        'amount_category' => 'setAmountCategory',
        'created_time' => 'setCreatedTime',
        'currency_code' => 'setCurrencyCode',
        'description' => 'setDescription',
        'frequency' => 'setFrequency',
        'next_payment_impact_date' => 'setNextPaymentImpactDate',
        'payment_day' => 'setPaymentDay',
        'payment_source_token' => 'setPaymentSourceToken',
        'status' => 'setStatus',
        'token' => 'setToken',
        'updated_time' => 'setUpdatedTime'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'account_token' => 'getAccountToken',
        'amount' => 'getAmount',
        'amount_category' => 'getAmountCategory',
        'created_time' => 'getCreatedTime',
        'currency_code' => 'getCurrencyCode',
        'description' => 'getDescription',
        'frequency' => 'getFrequency',
        'next_payment_impact_date' => 'getNextPaymentImpactDate',
        'payment_day' => 'getPaymentDay',
        'payment_source_token' => 'getPaymentSourceToken',
        'status' => 'getStatus',
        'token' => 'getToken',
        'updated_time' => 'getUpdatedTime'
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

    const PAYMENT_DAY_PAYMENT_DUE_DAY = 'PAYMENT_DUE_DAY';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getPaymentDayAllowableValues()
    {
        return [
            self::PAYMENT_DAY_PAYMENT_DUE_DAY,
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
        $this->container['amount'] = $data['amount'] ?? null;
        $this->container['amount_category'] = $data['amount_category'] ?? null;
        $this->container['created_time'] = $data['created_time'] ?? null;
        $this->container['currency_code'] = $data['currency_code'] ?? null;
        $this->container['description'] = $data['description'] ?? null;
        $this->container['frequency'] = $data['frequency'] ?? null;
        $this->container['next_payment_impact_date'] = $data['next_payment_impact_date'] ?? null;
        $this->container['payment_day'] = $data['payment_day'] ?? null;
        $this->container['payment_source_token'] = $data['payment_source_token'] ?? null;
        $this->container['status'] = $data['status'] ?? null;
        $this->container['token'] = $data['token'] ?? null;
        $this->container['updated_time'] = $data['updated_time'] ?? null;
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
        if ($this->container['amount_category'] === null) {
            $invalidProperties[] = "'amount_category' can't be null";
        }
        if ($this->container['currency_code'] === null) {
            $invalidProperties[] = "'currency_code' can't be null";
        }
        if ($this->container['frequency'] === null) {
            $invalidProperties[] = "'frequency' can't be null";
        }
        $allowedValues = $this->getPaymentDayAllowableValues();
        if (!is_null($this->container['payment_day']) && !in_array($this->container['payment_day'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'payment_day', must be one of '%s'",
                $this->container['payment_day'],
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['payment_source_token'] === null) {
            $invalidProperties[] = "'payment_source_token' can't be null";
        }
        if ($this->container['status'] === null) {
            $invalidProperties[] = "'status' can't be null";
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
     * @param string $account_token Unique identifier of the credit account on which the payment schedule is made.
     *
     * @return self
     */
    public function setAccountToken($account_token)
    {
        $this->container['account_token'] = $account_token;

        return $this;
    }

    /**
     * Gets amount
     *
     * @return float|null
     */
    public function getAmount()
    {
        return $this->container['amount'];
    }

    /**
     * Sets amount
     *
     * @param float|null $amount Amount of the payment.  Returned if the `amount_category` is `FIXED`.
     *
     * @return self
     */
    public function setAmount($amount)
    {
        $this->container['amount'] = $amount;

        return $this;
    }

    /**
     * Gets amount_category
     *
     * @return \OpenAPI\Client\Model\PaymentScheduleAmountCategory
     */
    public function getAmountCategory()
    {
        return $this->container['amount_category'];
    }

    /**
     * Sets amount_category
     *
     * @param \OpenAPI\Client\Model\PaymentScheduleAmountCategory $amount_category amount_category
     *
     * @return self
     */
    public function setAmountCategory($amount_category)
    {
        $this->container['amount_category'] = $amount_category;

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
     * @param \DateTime|null $created_time Date and time when the payment schedule was created on Marqeta's credit platform, in UTC.
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
     * @return string|null
     */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
     * Sets description
     *
     * @param string|null $description Description of the payment schedule.
     *
     * @return self
     */
    public function setDescription($description)
    {
        $this->container['description'] = $description;

        return $this;
    }

    /**
     * Gets frequency
     *
     * @return \OpenAPI\Client\Model\PaymentScheduleFrequency
     */
    public function getFrequency()
    {
        return $this->container['frequency'];
    }

    /**
     * Sets frequency
     *
     * @param \OpenAPI\Client\Model\PaymentScheduleFrequency $frequency frequency
     *
     * @return self
     */
    public function setFrequency($frequency)
    {
        $this->container['frequency'] = $frequency;

        return $this;
    }

    /**
     * Gets next_payment_impact_date
     *
     * @return \DateTime|null
     */
    public function getNextPaymentImpactDate()
    {
        return $this->container['next_payment_impact_date'];
    }

    /**
     * Sets next_payment_impact_date
     *
     * @param \DateTime|null $next_payment_impact_date Date to make a one-time payment.  Returned if `frequency` is `ONCE`.
     *
     * @return self
     */
    public function setNextPaymentImpactDate($next_payment_impact_date)
    {
        $this->container['next_payment_impact_date'] = $next_payment_impact_date;

        return $this;
    }

    /**
     * Gets payment_day
     *
     * @return string|null
     */
    public function getPaymentDay()
    {
        return $this->container['payment_day'];
    }

    /**
     * Sets payment_day
     *
     * @param string|null $payment_day Day on which monthly payments are made.  Returned if the `frequency` is `MONTHLY`.
     *
     * @return self
     */
    public function setPaymentDay($payment_day)
    {
        $allowedValues = $this->getPaymentDayAllowableValues();
        if (!is_null($payment_day) && !in_array($payment_day, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'payment_day', must be one of '%s'",
                    $payment_day,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['payment_day'] = $payment_day;

        return $this;
    }

    /**
     * Gets payment_source_token
     *
     * @return string
     */
    public function getPaymentSourceToken()
    {
        return $this->container['payment_source_token'];
    }

    /**
     * Sets payment_source_token
     *
     * @param string $payment_source_token Unique identifier of a payment source.
     *
     * @return self
     */
    public function setPaymentSourceToken($payment_source_token)
    {
        $this->container['payment_source_token'] = $payment_source_token;

        return $this;
    }

    /**
     * Gets status
     *
     * @return \OpenAPI\Client\Model\PaymentScheduleStatus
     */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
     * Sets status
     *
     * @param \OpenAPI\Client\Model\PaymentScheduleStatus $status status
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
     * @return string
     */
    public function getToken()
    {
        return $this->container['token'];
    }

    /**
     * Sets token
     *
     * @param string $token Unique identifier of the payment schedule.
     *
     * @return self
     */
    public function setToken($token)
    {
        $this->container['token'] = $token;

        return $this;
    }

    /**
     * Gets updated_time
     *
     * @return \DateTime|null
     */
    public function getUpdatedTime()
    {
        return $this->container['updated_time'];
    }

    /**
     * Sets updated_time
     *
     * @param \DateTime|null $updated_time Date and time when the payment schedule was last updated on Marqeta's credit platform, in UTC.
     *
     * @return self
     */
    public function setUpdatedTime($updated_time)
    {
        $this->container['updated_time'] = $updated_time;

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


