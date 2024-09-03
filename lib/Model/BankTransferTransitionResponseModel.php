<?php
/**
 * BankTransferTransitionResponseModel
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
 * BankTransferTransitionResponseModel Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class BankTransferTransitionResponseModel implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'bank_transfer_transition_response_model';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'amount' => 'float',
        'bank_transfer_token' => 'string',
        'batch_number' => 'string',
        'channel' => 'string',
        'created_time' => '\DateTime',
        'effective_date' => '\DateTime',
        'last_modified_time' => '\DateTime',
        'program_reserve_token' => 'string',
        'reason' => 'string',
        'return_code' => 'string',
        'return_reason' => 'string',
        'reversal_after_45_days' => 'bool',
        'status' => 'string',
        'token' => 'string',
        'transaction_jit_token' => 'string',
        'transaction_token' => 'string'
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
        'bank_transfer_token' => null,
        'batch_number' => null,
        'channel' => null,
        'created_time' => 'date-time',
        'effective_date' => 'date-time',
        'last_modified_time' => 'date-time',
        'program_reserve_token' => null,
        'reason' => null,
        'return_code' => null,
        'return_reason' => null,
        'reversal_after_45_days' => null,
        'status' => null,
        'token' => null,
        'transaction_jit_token' => null,
        'transaction_token' => null
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
        'bank_transfer_token' => 'bank_transfer_token',
        'batch_number' => 'batch_number',
        'channel' => 'channel',
        'created_time' => 'created_time',
        'effective_date' => 'effective_date',
        'last_modified_time' => 'last_modified_time',
        'program_reserve_token' => 'program_reserve_token',
        'reason' => 'reason',
        'return_code' => 'return_code',
        'return_reason' => 'return_reason',
        'reversal_after_45_days' => 'reversal_after_45_days',
        'status' => 'status',
        'token' => 'token',
        'transaction_jit_token' => 'transaction_jit_token',
        'transaction_token' => 'transaction_token'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'amount' => 'setAmount',
        'bank_transfer_token' => 'setBankTransferToken',
        'batch_number' => 'setBatchNumber',
        'channel' => 'setChannel',
        'created_time' => 'setCreatedTime',
        'effective_date' => 'setEffectiveDate',
        'last_modified_time' => 'setLastModifiedTime',
        'program_reserve_token' => 'setProgramReserveToken',
        'reason' => 'setReason',
        'return_code' => 'setReturnCode',
        'return_reason' => 'setReturnReason',
        'reversal_after_45_days' => 'setReversalAfter45Days',
        'status' => 'setStatus',
        'token' => 'setToken',
        'transaction_jit_token' => 'setTransactionJitToken',
        'transaction_token' => 'setTransactionToken'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'amount' => 'getAmount',
        'bank_transfer_token' => 'getBankTransferToken',
        'batch_number' => 'getBatchNumber',
        'channel' => 'getChannel',
        'created_time' => 'getCreatedTime',
        'effective_date' => 'getEffectiveDate',
        'last_modified_time' => 'getLastModifiedTime',
        'program_reserve_token' => 'getProgramReserveToken',
        'reason' => 'getReason',
        'return_code' => 'getReturnCode',
        'return_reason' => 'getReturnReason',
        'reversal_after_45_days' => 'getReversalAfter45Days',
        'status' => 'getStatus',
        'token' => 'getToken',
        'transaction_jit_token' => 'getTransactionJitToken',
        'transaction_token' => 'getTransactionToken'
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

    const CHANNEL_API = 'API';
    const CHANNEL_SYSTEM = 'SYSTEM';
    const CHANNEL_ADMIN = 'ADMIN';
    const STATUS_PENDING = 'PENDING';
    const STATUS_PROCESSING = 'PROCESSING';
    const STATUS_SUBMITTED = 'SUBMITTED';
    const STATUS_RETURNED = 'RETURNED';
    const STATUS_COMPLETED = 'COMPLETED';
    const STATUS_CANCELLED = 'CANCELLED';
    const STATUS_REVERSAL_PEND = 'REVERSAL_PEND';
    const STATUS_REVERSAL_COMP = 'REVERSAL_COMP';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getChannelAllowableValues()
    {
        return [
            self::CHANNEL_API,
            self::CHANNEL_SYSTEM,
            self::CHANNEL_ADMIN,
        ];
    }

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getStatusAllowableValues()
    {
        return [
            self::STATUS_PENDING,
            self::STATUS_PROCESSING,
            self::STATUS_SUBMITTED,
            self::STATUS_RETURNED,
            self::STATUS_COMPLETED,
            self::STATUS_CANCELLED,
            self::STATUS_REVERSAL_PEND,
            self::STATUS_REVERSAL_COMP,
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
        $this->container['bank_transfer_token'] = $data['bank_transfer_token'] ?? null;
        $this->container['batch_number'] = $data['batch_number'] ?? null;
        $this->container['channel'] = $data['channel'] ?? null;
        $this->container['created_time'] = $data['created_time'] ?? null;
        $this->container['effective_date'] = $data['effective_date'] ?? null;
        $this->container['last_modified_time'] = $data['last_modified_time'] ?? null;
        $this->container['program_reserve_token'] = $data['program_reserve_token'] ?? null;
        $this->container['reason'] = $data['reason'] ?? null;
        $this->container['return_code'] = $data['return_code'] ?? null;
        $this->container['return_reason'] = $data['return_reason'] ?? null;
        $this->container['reversal_after_45_days'] = $data['reversal_after_45_days'] ?? null;
        $this->container['status'] = $data['status'] ?? null;
        $this->container['token'] = $data['token'] ?? null;
        $this->container['transaction_jit_token'] = $data['transaction_jit_token'] ?? null;
        $this->container['transaction_token'] = $data['transaction_token'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if (!is_null($this->container['amount']) && ($this->container['amount'] < 0)) {
            $invalidProperties[] = "invalid value for 'amount', must be bigger than or equal to 0.";
        }

        if ($this->container['bank_transfer_token'] === null) {
            $invalidProperties[] = "'bank_transfer_token' can't be null";
        }
        if ((mb_strlen($this->container['bank_transfer_token']) > 36)) {
            $invalidProperties[] = "invalid value for 'bank_transfer_token', the character length must be smaller than or equal to 36.";
        }

        if ((mb_strlen($this->container['bank_transfer_token']) < 0)) {
            $invalidProperties[] = "invalid value for 'bank_transfer_token', the character length must be bigger than or equal to 0.";
        }

        if ($this->container['channel'] === null) {
            $invalidProperties[] = "'channel' can't be null";
        }
        $allowedValues = $this->getChannelAllowableValues();
        if (!is_null($this->container['channel']) && !in_array($this->container['channel'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'channel', must be one of '%s'",
                $this->container['channel'],
                implode("', '", $allowedValues)
            );
        }

        if (!is_null($this->container['program_reserve_token']) && (mb_strlen($this->container['program_reserve_token']) > 36)) {
            $invalidProperties[] = "invalid value for 'program_reserve_token', the character length must be smaller than or equal to 36.";
        }

        if (!is_null($this->container['program_reserve_token']) && (mb_strlen($this->container['program_reserve_token']) < 0)) {
            $invalidProperties[] = "invalid value for 'program_reserve_token', the character length must be bigger than or equal to 0.";
        }

        if ($this->container['status'] === null) {
            $invalidProperties[] = "'status' can't be null";
        }
        $allowedValues = $this->getStatusAllowableValues();
        if (!is_null($this->container['status']) && !in_array($this->container['status'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'status', must be one of '%s'",
                $this->container['status'],
                implode("', '", $allowedValues)
            );
        }

        if (!is_null($this->container['token']) && (mb_strlen($this->container['token']) > 36)) {
            $invalidProperties[] = "invalid value for 'token', the character length must be smaller than or equal to 36.";
        }

        if (!is_null($this->container['token']) && (mb_strlen($this->container['token']) < 0)) {
            $invalidProperties[] = "invalid value for 'token', the character length must be bigger than or equal to 0.";
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
     * @return float|null
     */
    public function getAmount()
    {
        return $this->container['amount'];
    }

    /**
     * Sets amount
     *
     * @param float|null $amount amount
     *
     * @return self
     */
    public function setAmount($amount)
    {

        if (!is_null($amount) && ($amount < 0)) {
            throw new \InvalidArgumentException('invalid value for $amount when calling BankTransferTransitionResponseModel., must be bigger than or equal to 0.');
        }

        $this->container['amount'] = $amount;

        return $this;
    }

    /**
     * Gets bank_transfer_token
     *
     * @return string
     */
    public function getBankTransferToken()
    {
        return $this->container['bank_transfer_token'];
    }

    /**
     * Sets bank_transfer_token
     *
     * @param string $bank_transfer_token Unique identifier of the ACH transfer being transitioned.
     *
     * @return self
     */
    public function setBankTransferToken($bank_transfer_token)
    {
        if ((mb_strlen($bank_transfer_token) > 36)) {
            throw new \InvalidArgumentException('invalid length for $bank_transfer_token when calling BankTransferTransitionResponseModel., must be smaller than or equal to 36.');
        }
        if ((mb_strlen($bank_transfer_token) < 0)) {
            throw new \InvalidArgumentException('invalid length for $bank_transfer_token when calling BankTransferTransitionResponseModel., must be bigger than or equal to 0.');
        }

        $this->container['bank_transfer_token'] = $bank_transfer_token;

        return $this;
    }

    /**
     * Gets batch_number
     *
     * @return string|null
     */
    public function getBatchNumber()
    {
        return $this->container['batch_number'];
    }

    /**
     * Sets batch_number
     *
     * @param string|null $batch_number Field required in older versions of the API, but no longer used.
     *
     * @return self
     */
    public function setBatchNumber($batch_number)
    {
        $this->container['batch_number'] = $batch_number;

        return $this;
    }

    /**
     * Gets channel
     *
     * @return string
     */
    public function getChannel()
    {
        return $this->container['channel'];
    }

    /**
     * Sets channel
     *
     * @param string $channel Mechanism by which the transaction was initiated.
     *
     * @return self
     */
    public function setChannel($channel)
    {
        $allowedValues = $this->getChannelAllowableValues();
        if (!in_array($channel, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'channel', must be one of '%s'",
                    $channel,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['channel'] = $channel;

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
     * @param \DateTime|null $created_time Date and time when the ACH transfer was created, in UTC.
     *
     * @return self
     */
    public function setCreatedTime($created_time)
    {
        $this->container['created_time'] = $created_time;

        return $this;
    }

    /**
     * Gets effective_date
     *
     * @return \DateTime|null
     */
    public function getEffectiveDate()
    {
        return $this->container['effective_date'];
    }

    /**
     * Sets effective_date
     *
     * @param \DateTime|null $effective_date effective_date
     *
     * @return self
     */
    public function setEffectiveDate($effective_date)
    {
        $this->container['effective_date'] = $effective_date;

        return $this;
    }

    /**
     * Gets last_modified_time
     *
     * @return \DateTime|null
     */
    public function getLastModifiedTime()
    {
        return $this->container['last_modified_time'];
    }

    /**
     * Sets last_modified_time
     *
     * @param \DateTime|null $last_modified_time Date and time when the ACH transfer was last modified.
     *
     * @return self
     */
    public function setLastModifiedTime($last_modified_time)
    {
        $this->container['last_modified_time'] = $last_modified_time;

        return $this;
    }

    /**
     * Gets program_reserve_token
     *
     * @return string|null
     */
    public function getProgramReserveToken()
    {
        return $this->container['program_reserve_token'];
    }

    /**
     * Sets program_reserve_token
     *
     * @param string|null $program_reserve_token Not currently used.
     *
     * @return self
     */
    public function setProgramReserveToken($program_reserve_token)
    {
        if (!is_null($program_reserve_token) && (mb_strlen($program_reserve_token) > 36)) {
            throw new \InvalidArgumentException('invalid length for $program_reserve_token when calling BankTransferTransitionResponseModel., must be smaller than or equal to 36.');
        }
        if (!is_null($program_reserve_token) && (mb_strlen($program_reserve_token) < 0)) {
            throw new \InvalidArgumentException('invalid length for $program_reserve_token when calling BankTransferTransitionResponseModel., must be bigger than or equal to 0.');
        }

        $this->container['program_reserve_token'] = $program_reserve_token;

        return $this;
    }

    /**
     * Gets reason
     *
     * @return string|null
     */
    public function getReason()
    {
        return $this->container['reason'];
    }

    /**
     * Sets reason
     *
     * @param string|null $reason Explanation of why the transition is being made, for example \"Created by POST call on API\". Returned if this information was supplied when the transition was originally created.
     *
     * @return self
     */
    public function setReason($reason)
    {
        $this->container['reason'] = $reason;

        return $this;
    }

    /**
     * Gets return_code
     *
     * @return string|null
     */
    public function getReturnCode()
    {
        return $this->container['return_code'];
    }

    /**
     * Sets return_code
     *
     * @param string|null $return_code Standardized ACH return code for a returned transaction, generally sent by the RDFI.  Transactions can be returned for any of the reasons listed in the <</developer-guides/ach-origination#_nacha_ach_return_codes, NACHA ACH return codes table>> of the ACH Origination Guide.
     *
     * @return self
     */
    public function setReturnCode($return_code)
    {
        $this->container['return_code'] = $return_code;

        return $this;
    }

    /**
     * Gets return_reason
     *
     * @return string|null
     */
    public function getReturnReason()
    {
        return $this->container['return_reason'];
    }

    /**
     * Sets return_reason
     *
     * @param string|null $return_reason Human-readable description correlating to the `return_code`, such as `Insufficient funds`, if a return code is present in the response.
     *
     * @return self
     */
    public function setReturnReason($return_reason)
    {
        $this->container['return_reason'] = $return_reason;

        return $this;
    }

    /**
     * Gets reversal_after_45_days
     *
     * @return bool|null
     */
    public function getReversalAfter45Days()
    {
        return $this->container['reversal_after_45_days'];
    }

    /**
     * Sets reversal_after_45_days
     *
     * @param bool|null $reversal_after_45_days reversal_after_45_days
     *
     * @return self
     */
    public function setReversalAfter45Days($reversal_after_45_days)
    {
        $this->container['reversal_after_45_days'] = $reversal_after_45_days;

        return $this;
    }

    /**
     * Gets status
     *
     * @return string
     */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
     * Sets status
     *
     * @param string $status New state of the ACH transfer.
     *
     * @return self
     */
    public function setStatus($status)
    {
        $allowedValues = $this->getStatusAllowableValues();
        if (!in_array($status, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'status', must be one of '%s'",
                    $status,
                    implode("', '", $allowedValues)
                )
            );
        }
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
     * @param string|null $token Unique identifier of the bank transfer transition.
     *
     * @return self
     */
    public function setToken($token)
    {
        if (!is_null($token) && (mb_strlen($token) > 36)) {
            throw new \InvalidArgumentException('invalid length for $token when calling BankTransferTransitionResponseModel., must be smaller than or equal to 36.');
        }
        if (!is_null($token) && (mb_strlen($token) < 0)) {
            throw new \InvalidArgumentException('invalid length for $token when calling BankTransferTransitionResponseModel., must be bigger than or equal to 0.');
        }

        $this->container['token'] = $token;

        return $this;
    }

    /**
     * Gets transaction_jit_token
     *
     * @return string|null
     */
    public function getTransactionJitToken()
    {
        return $this->container['transaction_jit_token'];
    }

    /**
     * Sets transaction_jit_token
     *
     * @param string|null $transaction_jit_token Transaction token for JIT-related ledger entries for the ACH transfer.
     *
     * @return self
     */
    public function setTransactionJitToken($transaction_jit_token)
    {
        $this->container['transaction_jit_token'] = $transaction_jit_token;

        return $this;
    }

    /**
     * Gets transaction_token
     *
     * @return string|null
     */
    public function getTransactionToken()
    {
        return $this->container['transaction_token'];
    }

    /**
     * Sets transaction_token
     *
     * @param string|null $transaction_token Transaction token for *non*-JIT-related ledger entries for the ACH transfer.
     *
     * @return self
     */
    public function setTransactionToken($transaction_token)
    {
        $this->container['transaction_token'] = $transaction_token;

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


