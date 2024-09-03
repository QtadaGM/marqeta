<?php
/**
 * DelinquencyBucketResponse
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
 * DelinquencyBucketResponse Class Doc Comment
 *
 * @category Class
 * @description One or more delinquency buckets for an account. Each delinquency bucket represents a billing cycle during which the account was delinquent.
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class DelinquencyBucketResponse implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'DelinquencyBucketResponse';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'bucket_number' => 'int',
        'current_due' => 'float',
        'days_past_due' => 'int',
        'past_due_carried_forward' => 'float',
        'payment_due_date' => '\DateTime',
        'total_due' => 'float'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'bucket_number' => null,
        'current_due' => null,
        'days_past_due' => null,
        'past_due_carried_forward' => null,
        'payment_due_date' => 'date-time',
        'total_due' => null
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
        'bucket_number' => 'bucket_number',
        'current_due' => 'current_due',
        'days_past_due' => 'days_past_due',
        'past_due_carried_forward' => 'past_due_carried_forward',
        'payment_due_date' => 'payment_due_date',
        'total_due' => 'total_due'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'bucket_number' => 'setBucketNumber',
        'current_due' => 'setCurrentDue',
        'days_past_due' => 'setDaysPastDue',
        'past_due_carried_forward' => 'setPastDueCarriedForward',
        'payment_due_date' => 'setPaymentDueDate',
        'total_due' => 'setTotalDue'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'bucket_number' => 'getBucketNumber',
        'current_due' => 'getCurrentDue',
        'days_past_due' => 'getDaysPastDue',
        'past_due_carried_forward' => 'getPastDueCarriedForward',
        'payment_due_date' => 'getPaymentDueDate',
        'total_due' => 'getTotalDue'
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
        $this->container['bucket_number'] = $data['bucket_number'] ?? null;
        $this->container['current_due'] = $data['current_due'] ?? null;
        $this->container['days_past_due'] = $data['days_past_due'] ?? null;
        $this->container['past_due_carried_forward'] = $data['past_due_carried_forward'] ?? null;
        $this->container['payment_due_date'] = $data['payment_due_date'] ?? null;
        $this->container['total_due'] = $data['total_due'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['bucket_number'] === null) {
            $invalidProperties[] = "'bucket_number' can't be null";
        }
        if ($this->container['current_due'] === null) {
            $invalidProperties[] = "'current_due' can't be null";
        }
        if ($this->container['days_past_due'] === null) {
            $invalidProperties[] = "'days_past_due' can't be null";
        }
        if ($this->container['past_due_carried_forward'] === null) {
            $invalidProperties[] = "'past_due_carried_forward' can't be null";
        }
        if ($this->container['payment_due_date'] === null) {
            $invalidProperties[] = "'payment_due_date' can't be null";
        }
        if ($this->container['total_due'] === null) {
            $invalidProperties[] = "'total_due' can't be null";
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
     * Gets bucket_number
     *
     * @return int
     */
    public function getBucketNumber()
    {
        return $this->container['bucket_number'];
    }

    /**
     * Sets bucket_number
     *
     * @param int $bucket_number Delinquency bucket number in the returned array. Delinquency buckets are returned from most recent to least; the most recent delinquency bucket is `1`.
     *
     * @return self
     */
    public function setBucketNumber($bucket_number)
    {
        $this->container['bucket_number'] = $bucket_number;

        return $this;
    }

    /**
     * Gets current_due
     *
     * @return float
     */
    public function getCurrentDue()
    {
        return $this->container['current_due'];
    }

    /**
     * Sets current_due
     *
     * @param float $current_due Current amount that is due for this delinquency bucket.
     *
     * @return self
     */
    public function setCurrentDue($current_due)
    {
        $this->container['current_due'] = $current_due;

        return $this;
    }

    /**
     * Gets days_past_due
     *
     * @return int
     */
    public function getDaysPastDue()
    {
        return $this->container['days_past_due'];
    }

    /**
     * Sets days_past_due
     *
     * @param int $days_past_due Total number of days that the payment is past due for this delinquency bucket.
     *
     * @return self
     */
    public function setDaysPastDue($days_past_due)
    {
        $this->container['days_past_due'] = $days_past_due;

        return $this;
    }

    /**
     * Gets past_due_carried_forward
     *
     * @return float
     */
    public function getPastDueCarriedForward()
    {
        return $this->container['past_due_carried_forward'];
    }

    /**
     * Sets past_due_carried_forward
     *
     * @param float $past_due_carried_forward Amount that is past due and carried forward from previous delinquency buckets.
     *
     * @return self
     */
    public function setPastDueCarriedForward($past_due_carried_forward)
    {
        $this->container['past_due_carried_forward'] = $past_due_carried_forward;

        return $this;
    }

    /**
     * Gets payment_due_date
     *
     * @return \DateTime
     */
    public function getPaymentDueDate()
    {
        return $this->container['payment_due_date'];
    }

    /**
     * Sets payment_due_date
     *
     * @param \DateTime $payment_due_date Date that the payment was due for this delinquency bucket.
     *
     * @return self
     */
    public function setPaymentDueDate($payment_due_date)
    {
        $this->container['payment_due_date'] = $payment_due_date;

        return $this;
    }

    /**
     * Gets total_due
     *
     * @return float
     */
    public function getTotalDue()
    {
        return $this->container['total_due'];
    }

    /**
     * Sets total_due
     *
     * @param float $total_due Total amount that is due for this delinquency bucket; the sum of `past_due_carried_forward` and `current_due`.
     *
     * @return self
     */
    public function setTotalDue($total_due)
    {
        $this->container['total_due'] = $total_due;

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

