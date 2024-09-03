<?php
/**
 * PaymentReminderResponse
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
 * PaymentReminderResponse Class Doc Comment
 *
 * @category Class
 * @description Details of a payment reminder.
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class PaymentReminderResponse implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'PaymentReminderResponse';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'account_token' => 'string',
        'created_time' => '\DateTime',
        'days_until_due' => 'int',
        'payment_cutoff_date' => '\DateTime',
        'payment_due_date' => '\DateTime',
        'remaining_minimum_payment_due' => 'float',
        'statement_summary_token' => 'string',
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
        'account_token' => null,
        'created_time' => 'date-time',
        'days_until_due' => null,
        'payment_cutoff_date' => 'date-time',
        'payment_due_date' => 'date-time',
        'remaining_minimum_payment_due' => null,
        'statement_summary_token' => 'uuid',
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
        'account_token' => 'account_token',
        'created_time' => 'created_time',
        'days_until_due' => 'days_until_due',
        'payment_cutoff_date' => 'payment_cutoff_date',
        'payment_due_date' => 'payment_due_date',
        'remaining_minimum_payment_due' => 'remaining_minimum_payment_due',
        'statement_summary_token' => 'statement_summary_token',
        'token' => 'token'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'account_token' => 'setAccountToken',
        'created_time' => 'setCreatedTime',
        'days_until_due' => 'setDaysUntilDue',
        'payment_cutoff_date' => 'setPaymentCutoffDate',
        'payment_due_date' => 'setPaymentDueDate',
        'remaining_minimum_payment_due' => 'setRemainingMinimumPaymentDue',
        'statement_summary_token' => 'setStatementSummaryToken',
        'token' => 'setToken'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'account_token' => 'getAccountToken',
        'created_time' => 'getCreatedTime',
        'days_until_due' => 'getDaysUntilDue',
        'payment_cutoff_date' => 'getPaymentCutoffDate',
        'payment_due_date' => 'getPaymentDueDate',
        'remaining_minimum_payment_due' => 'getRemainingMinimumPaymentDue',
        'statement_summary_token' => 'getStatementSummaryToken',
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
        $this->container['account_token'] = $data['account_token'] ?? null;
        $this->container['created_time'] = $data['created_time'] ?? null;
        $this->container['days_until_due'] = $data['days_until_due'] ?? null;
        $this->container['payment_cutoff_date'] = $data['payment_cutoff_date'] ?? null;
        $this->container['payment_due_date'] = $data['payment_due_date'] ?? null;
        $this->container['remaining_minimum_payment_due'] = $data['remaining_minimum_payment_due'] ?? null;
        $this->container['statement_summary_token'] = $data['statement_summary_token'] ?? null;
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
     * @return string|null
     */
    public function getAccountToken()
    {
        return $this->container['account_token'];
    }

    /**
     * Sets account_token
     *
     * @param string|null $account_token Token of the associated account.
     *
     * @return self
     */
    public function setAccountToken($account_token)
    {
        $this->container['account_token'] = $account_token;

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
     * @param \DateTime|null $created_time Date and time when the Billing Cycle was created on Marqeta's credit platform
     *
     * @return self
     */
    public function setCreatedTime($created_time)
    {
        $this->container['created_time'] = $created_time;

        return $this;
    }

    /**
     * Gets days_until_due
     *
     * @return int|null
     */
    public function getDaysUntilDue()
    {
        return $this->container['days_until_due'];
    }

    /**
     * Sets days_until_due
     *
     * @param int|null $days_until_due Days until payment cutoff date
     *
     * @return self
     */
    public function setDaysUntilDue($days_until_due)
    {
        $this->container['days_until_due'] = $days_until_due;

        return $this;
    }

    /**
     * Gets payment_cutoff_date
     *
     * @return \DateTime|null
     */
    public function getPaymentCutoffDate()
    {
        return $this->container['payment_cutoff_date'];
    }

    /**
     * Sets payment_cutoff_date
     *
     * @param \DateTime|null $payment_cutoff_date Last day a payment can be made before interest and fees are charged to the account.
     *
     * @return self
     */
    public function setPaymentCutoffDate($payment_cutoff_date)
    {
        $this->container['payment_cutoff_date'] = $payment_cutoff_date;

        return $this;
    }

    /**
     * Gets payment_due_date
     *
     * @return \DateTime|null
     */
    public function getPaymentDueDate()
    {
        return $this->container['payment_due_date'];
    }

    /**
     * Sets payment_due_date
     *
     * @param \DateTime|null $payment_due_date Payment due date, based on the credit account settings.
     *
     * @return self
     */
    public function setPaymentDueDate($payment_due_date)
    {
        $this->container['payment_due_date'] = $payment_due_date;

        return $this;
    }

    /**
     * Gets remaining_minimum_payment_due
     *
     * @return float|null
     */
    public function getRemainingMinimumPaymentDue()
    {
        return $this->container['remaining_minimum_payment_due'];
    }

    /**
     * Sets remaining_minimum_payment_due
     *
     * @param float|null $remaining_minimum_payment_due Amount remaining on the latest statement's minimum payment, after it's adjusted for payments, returned payments, and applicable credits that occurred after the latest statement's closing date.
     *
     * @return self
     */
    public function setRemainingMinimumPaymentDue($remaining_minimum_payment_due)
    {
        $this->container['remaining_minimum_payment_due'] = $remaining_minimum_payment_due;

        return $this;
    }

    /**
     * Gets statement_summary_token
     *
     * @return string|null
     */
    public function getStatementSummaryToken()
    {
        return $this->container['statement_summary_token'];
    }

    /**
     * Sets statement_summary_token
     *
     * @param string|null $statement_summary_token Token of the associated statement summary
     *
     * @return self
     */
    public function setStatementSummaryToken($statement_summary_token)
    {
        $this->container['statement_summary_token'] = $statement_summary_token;

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
     * @param string|null $token Token of the payment reminder
     *
     * @return self
     */
    public function setToken($token)
    {
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

