<?php
/**
 * PolicyProductPaymentConfiguration
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
 * PolicyProductPaymentConfiguration Class Doc Comment
 *
 * @category Class
 * @description Contains the configurations for billing cycle day, payment due day, and fees.
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class PolicyProductPaymentConfiguration implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'PolicyProductPaymentConfiguration';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'allocation_order' => '\OpenAPI\Client\Model\PaymentAllocationOrderEnum[]',
        'billing_cycle_day' => 'int',
        'billing_cycle_day_strategy' => 'string',
        'billing_cycle_frequency' => 'string',
        'due_day' => 'int',
        'min_payment_calculation' => '\OpenAPI\Client\Model\PolicyProductMinPaymentCalculation',
        'payment_due_interval' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'allocation_order' => null,
        'billing_cycle_day' => null,
        'billing_cycle_day_strategy' => null,
        'billing_cycle_frequency' => null,
        'due_day' => null,
        'min_payment_calculation' => null,
        'payment_due_interval' => null
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
        'allocation_order' => 'allocation_order',
        'billing_cycle_day' => 'billing_cycle_day',
        'billing_cycle_day_strategy' => 'billing_cycle_day_strategy',
        'billing_cycle_frequency' => 'billing_cycle_frequency',
        'due_day' => 'due_day',
        'min_payment_calculation' => 'min_payment_calculation',
        'payment_due_interval' => 'payment_due_interval'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'allocation_order' => 'setAllocationOrder',
        'billing_cycle_day' => 'setBillingCycleDay',
        'billing_cycle_day_strategy' => 'setBillingCycleDayStrategy',
        'billing_cycle_frequency' => 'setBillingCycleFrequency',
        'due_day' => 'setDueDay',
        'min_payment_calculation' => 'setMinPaymentCalculation',
        'payment_due_interval' => 'setPaymentDueInterval'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'allocation_order' => 'getAllocationOrder',
        'billing_cycle_day' => 'getBillingCycleDay',
        'billing_cycle_day_strategy' => 'getBillingCycleDayStrategy',
        'billing_cycle_frequency' => 'getBillingCycleFrequency',
        'due_day' => 'getDueDay',
        'min_payment_calculation' => 'getMinPaymentCalculation',
        'payment_due_interval' => 'getPaymentDueInterval'
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

    const BILLING_CYCLE_DAY_STRATEGY_MANUAL = 'MANUAL';
    const BILLING_CYCLE_FREQUENCY_MONTHLY = 'MONTHLY';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getBillingCycleDayStrategyAllowableValues()
    {
        return [
            self::BILLING_CYCLE_DAY_STRATEGY_MANUAL,
        ];
    }

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getBillingCycleFrequencyAllowableValues()
    {
        return [
            self::BILLING_CYCLE_FREQUENCY_MONTHLY,
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
        $this->container['allocation_order'] = $data['allocation_order'] ?? null;
        $this->container['billing_cycle_day'] = $data['billing_cycle_day'] ?? null;
        $this->container['billing_cycle_day_strategy'] = $data['billing_cycle_day_strategy'] ?? 'MANUAL';
        $this->container['billing_cycle_frequency'] = $data['billing_cycle_frequency'] ?? 'MONTHLY';
        $this->container['due_day'] = $data['due_day'] ?? null;
        $this->container['min_payment_calculation'] = $data['min_payment_calculation'] ?? null;
        $this->container['payment_due_interval'] = $data['payment_due_interval'] ?? -1;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['allocation_order'] === null) {
            $invalidProperties[] = "'allocation_order' can't be null";
        }
        if ((count($this->container['allocation_order']) < 1)) {
            $invalidProperties[] = "invalid value for 'allocation_order', number of items must be greater than or equal to 1.";
        }

        if ($this->container['billing_cycle_day'] === null) {
            $invalidProperties[] = "'billing_cycle_day' can't be null";
        }
        if (($this->container['billing_cycle_day'] > 28)) {
            $invalidProperties[] = "invalid value for 'billing_cycle_day', must be smaller than or equal to 28.";
        }

        if (($this->container['billing_cycle_day'] < 1)) {
            $invalidProperties[] = "invalid value for 'billing_cycle_day', must be bigger than or equal to 1.";
        }

        $allowedValues = $this->getBillingCycleDayStrategyAllowableValues();
        if (!is_null($this->container['billing_cycle_day_strategy']) && !in_array($this->container['billing_cycle_day_strategy'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'billing_cycle_day_strategy', must be one of '%s'",
                $this->container['billing_cycle_day_strategy'],
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getBillingCycleFrequencyAllowableValues();
        if (!is_null($this->container['billing_cycle_frequency']) && !in_array($this->container['billing_cycle_frequency'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'billing_cycle_frequency', must be one of '%s'",
                $this->container['billing_cycle_frequency'],
                implode("', '", $allowedValues)
            );
        }

        if (!is_null($this->container['due_day']) && ($this->container['due_day'] > 31)) {
            $invalidProperties[] = "invalid value for 'due_day', must be smaller than or equal to 31.";
        }

        if (!is_null($this->container['due_day']) && ($this->container['due_day'] < 31)) {
            $invalidProperties[] = "invalid value for 'due_day', must be bigger than or equal to 31.";
        }

        if ($this->container['min_payment_calculation'] === null) {
            $invalidProperties[] = "'min_payment_calculation' can't be null";
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
     * Gets allocation_order
     *
     * @return \OpenAPI\Client\Model\PaymentAllocationOrderEnum[]
     */
    public function getAllocationOrder()
    {
        return $this->container['allocation_order'];
    }

    /**
     * Sets allocation_order
     *
     * @param \OpenAPI\Client\Model\PaymentAllocationOrderEnum[] $allocation_order Ordered list of balance types to which payments are allocated, from first to last.
     *
     * @return self
     */
    public function setAllocationOrder($allocation_order)
    {


        if ((count($allocation_order) < 1)) {
            throw new \InvalidArgumentException('invalid length for $allocation_order when calling PolicyProductPaymentConfiguration., number of items must be greater than or equal to 1.');
        }
        $this->container['allocation_order'] = $allocation_order;

        return $this;
    }

    /**
     * Gets billing_cycle_day
     *
     * @return int
     */
    public function getBillingCycleDay()
    {
        return $this->container['billing_cycle_day'];
    }

    /**
     * Sets billing_cycle_day
     *
     * @param int $billing_cycle_day Day of month the billing cycle starts.
     *
     * @return self
     */
    public function setBillingCycleDay($billing_cycle_day)
    {

        if (($billing_cycle_day > 28)) {
            throw new \InvalidArgumentException('invalid value for $billing_cycle_day when calling PolicyProductPaymentConfiguration., must be smaller than or equal to 28.');
        }
        if (($billing_cycle_day < 1)) {
            throw new \InvalidArgumentException('invalid value for $billing_cycle_day when calling PolicyProductPaymentConfiguration., must be bigger than or equal to 1.');
        }

        $this->container['billing_cycle_day'] = $billing_cycle_day;

        return $this;
    }

    /**
     * Gets billing_cycle_day_strategy
     *
     * @return string|null
     */
    public function getBillingCycleDayStrategy()
    {
        return $this->container['billing_cycle_day_strategy'];
    }

    /**
     * Sets billing_cycle_day_strategy
     *
     * @param string|null $billing_cycle_day_strategy Determines if the billing cycle day is manually set or determined dynamically during account creation based on cycling logic.
     *
     * @return self
     */
    public function setBillingCycleDayStrategy($billing_cycle_day_strategy)
    {
        $allowedValues = $this->getBillingCycleDayStrategyAllowableValues();
        if (!is_null($billing_cycle_day_strategy) && !in_array($billing_cycle_day_strategy, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'billing_cycle_day_strategy', must be one of '%s'",
                    $billing_cycle_day_strategy,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['billing_cycle_day_strategy'] = $billing_cycle_day_strategy;

        return $this;
    }

    /**
     * Gets billing_cycle_frequency
     *
     * @return string|null
     */
    public function getBillingCycleFrequency()
    {
        return $this->container['billing_cycle_frequency'];
    }

    /**
     * Sets billing_cycle_frequency
     *
     * @param string|null $billing_cycle_frequency Frequency at which your account is billed.
     *
     * @return self
     */
    public function setBillingCycleFrequency($billing_cycle_frequency)
    {
        $allowedValues = $this->getBillingCycleFrequencyAllowableValues();
        if (!is_null($billing_cycle_frequency) && !in_array($billing_cycle_frequency, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'billing_cycle_frequency', must be one of '%s'",
                    $billing_cycle_frequency,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['billing_cycle_frequency'] = $billing_cycle_frequency;

        return $this;
    }

    /**
     * Gets due_day
     *
     * @return int|null
     * @deprecated
     */
    public function getDueDay()
    {
        return $this->container['due_day'];
    }

    /**
     * Sets due_day
     *
     * @param int|null $due_day Day of month the payment for the previous billing cycle is due.  This field is being deprecated and replaced by `payment_due_interval` of a product policy. To retrieve `payment_due_interval`, see <</core-api/policies#retrieveProductPolicy, Retrieve credit product policy, payments.payment_due_interval>>.
     *
     * @return self
     * @deprecated
     */
    public function setDueDay($due_day)
    {

        if (!is_null($due_day) && ($due_day > 31)) {
            throw new \InvalidArgumentException('invalid value for $due_day when calling PolicyProductPaymentConfiguration., must be smaller than or equal to 31.');
        }
        if (!is_null($due_day) && ($due_day < 31)) {
            throw new \InvalidArgumentException('invalid value for $due_day when calling PolicyProductPaymentConfiguration., must be bigger than or equal to 31.');
        }

        $this->container['due_day'] = $due_day;

        return $this;
    }

    /**
     * Gets min_payment_calculation
     *
     * @return \OpenAPI\Client\Model\PolicyProductMinPaymentCalculation
     */
    public function getMinPaymentCalculation()
    {
        return $this->container['min_payment_calculation'];
    }

    /**
     * Sets min_payment_calculation
     *
     * @param \OpenAPI\Client\Model\PolicyProductMinPaymentCalculation $min_payment_calculation min_payment_calculation
     *
     * @return self
     */
    public function setMinPaymentCalculation($min_payment_calculation)
    {
        $this->container['min_payment_calculation'] = $min_payment_calculation;

        return $this;
    }

    /**
     * Gets payment_due_interval
     *
     * @return int|null
     */
    public function getPaymentDueInterval()
    {
        return $this->container['payment_due_interval'];
    }

    /**
     * Sets payment_due_interval
     *
     * @param int|null $payment_due_interval Specifies the payment due interval that is used to determine the payment due date for a billing cycle. The accepted values are either -1 or a value between 1 and 26. A value of -1 indicates one day prior to the next billing cycle date
     *
     * @return self
     */
    public function setPaymentDueInterval($payment_due_interval)
    {
        $this->container['payment_due_interval'] = $payment_due_interval;

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


