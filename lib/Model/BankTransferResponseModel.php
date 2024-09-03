<?php
/**
 * BankTransferResponseModel
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
 * BankTransferResponseModel Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class BankTransferResponseModel implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'bank_transfer_response_model';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'amount' => 'float',
        'batch_number' => 'string',
        'channel' => 'string',
        'created_by' => 'string',
        'created_time' => '\DateTime',
        'currency_code' => 'string',
        'funding_source_token' => 'string',
        'last_modified_time' => '\DateTime',
        'memo' => 'string',
        'return_code' => 'string',
        'return_reason' => 'string',
        'standard_entry_class_code' => 'string',
        'statement_descriptor' => 'string',
        'status' => 'string',
        'token' => 'string',
        'transfer_speed' => 'string',
        'transitions' => '\OpenAPI\Client\Model\BankTransferTransitionResponseModel[]',
        'type' => 'string'
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
        'batch_number' => null,
        'channel' => null,
        'created_by' => null,
        'created_time' => 'date-time',
        'currency_code' => null,
        'funding_source_token' => null,
        'last_modified_time' => 'date-time',
        'memo' => null,
        'return_code' => null,
        'return_reason' => null,
        'standard_entry_class_code' => null,
        'statement_descriptor' => null,
        'status' => null,
        'token' => null,
        'transfer_speed' => null,
        'transitions' => null,
        'type' => null
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
        'batch_number' => 'batch_number',
        'channel' => 'channel',
        'created_by' => 'created_by',
        'created_time' => 'created_time',
        'currency_code' => 'currency_code',
        'funding_source_token' => 'funding_source_token',
        'last_modified_time' => 'last_modified_time',
        'memo' => 'memo',
        'return_code' => 'return_code',
        'return_reason' => 'return_reason',
        'standard_entry_class_code' => 'standard_entry_class_code',
        'statement_descriptor' => 'statement_descriptor',
        'status' => 'status',
        'token' => 'token',
        'transfer_speed' => 'transfer_speed',
        'transitions' => 'transitions',
        'type' => 'type'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'amount' => 'setAmount',
        'batch_number' => 'setBatchNumber',
        'channel' => 'setChannel',
        'created_by' => 'setCreatedBy',
        'created_time' => 'setCreatedTime',
        'currency_code' => 'setCurrencyCode',
        'funding_source_token' => 'setFundingSourceToken',
        'last_modified_time' => 'setLastModifiedTime',
        'memo' => 'setMemo',
        'return_code' => 'setReturnCode',
        'return_reason' => 'setReturnReason',
        'standard_entry_class_code' => 'setStandardEntryClassCode',
        'statement_descriptor' => 'setStatementDescriptor',
        'status' => 'setStatus',
        'token' => 'setToken',
        'transfer_speed' => 'setTransferSpeed',
        'transitions' => 'setTransitions',
        'type' => 'setType'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'amount' => 'getAmount',
        'batch_number' => 'getBatchNumber',
        'channel' => 'getChannel',
        'created_by' => 'getCreatedBy',
        'created_time' => 'getCreatedTime',
        'currency_code' => 'getCurrencyCode',
        'funding_source_token' => 'getFundingSourceToken',
        'last_modified_time' => 'getLastModifiedTime',
        'memo' => 'getMemo',
        'return_code' => 'getReturnCode',
        'return_reason' => 'getReturnReason',
        'standard_entry_class_code' => 'getStandardEntryClassCode',
        'statement_descriptor' => 'getStatementDescriptor',
        'status' => 'getStatus',
        'token' => 'getToken',
        'transfer_speed' => 'getTransferSpeed',
        'transitions' => 'getTransitions',
        'type' => 'getType'
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
    const STANDARD_ENTRY_CLASS_CODE_WEB = 'WEB';
    const STANDARD_ENTRY_CLASS_CODE_PPD = 'PPD';
    const STANDARD_ENTRY_CLASS_CODE_CCD = 'CCD';
    const STATUS_INITIATED = 'INITIATED';
    const STATUS_PENDING = 'PENDING';
    const STATUS_PROCESSING = 'PROCESSING';
    const STATUS_SUBMITTED = 'SUBMITTED';
    const STATUS_RETURNED = 'RETURNED';
    const STATUS_COMPLETED = 'COMPLETED';
    const STATUS_ERROR = 'ERROR';
    const STATUS_CANCELLED = 'CANCELLED';
    const STATUS_REVERSAL_PEND = 'REVERSAL_PEND';
    const STATUS_REVERSAL_COMP = 'REVERSAL_COMP';
    const STATUS_REVERSAL_DECL = 'REVERSAL_DECL';
    const TRANSFER_SPEED_STANDARD = 'STANDARD';
    const TRANSFER_SPEED_SAME_DAY = 'SAME_DAY';
    const TYPE_PUSH = 'PUSH';
    const TYPE_PULL = 'PULL';

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
    public function getStandardEntryClassCodeAllowableValues()
    {
        return [
            self::STANDARD_ENTRY_CLASS_CODE_WEB,
            self::STANDARD_ENTRY_CLASS_CODE_PPD,
            self::STANDARD_ENTRY_CLASS_CODE_CCD,
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
            self::STATUS_INITIATED,
            self::STATUS_PENDING,
            self::STATUS_PROCESSING,
            self::STATUS_SUBMITTED,
            self::STATUS_RETURNED,
            self::STATUS_COMPLETED,
            self::STATUS_ERROR,
            self::STATUS_CANCELLED,
            self::STATUS_REVERSAL_PEND,
            self::STATUS_REVERSAL_COMP,
            self::STATUS_REVERSAL_DECL,
        ];
    }

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getTransferSpeedAllowableValues()
    {
        return [
            self::TRANSFER_SPEED_STANDARD,
            self::TRANSFER_SPEED_SAME_DAY,
        ];
    }

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getTypeAllowableValues()
    {
        return [
            self::TYPE_PUSH,
            self::TYPE_PULL,
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
        $this->container['batch_number'] = $data['batch_number'] ?? null;
        $this->container['channel'] = $data['channel'] ?? null;
        $this->container['created_by'] = $data['created_by'] ?? null;
        $this->container['created_time'] = $data['created_time'] ?? null;
        $this->container['currency_code'] = $data['currency_code'] ?? null;
        $this->container['funding_source_token'] = $data['funding_source_token'] ?? null;
        $this->container['last_modified_time'] = $data['last_modified_time'] ?? null;
        $this->container['memo'] = $data['memo'] ?? null;
        $this->container['return_code'] = $data['return_code'] ?? null;
        $this->container['return_reason'] = $data['return_reason'] ?? null;
        $this->container['standard_entry_class_code'] = $data['standard_entry_class_code'] ?? null;
        $this->container['statement_descriptor'] = $data['statement_descriptor'] ?? null;
        $this->container['status'] = $data['status'] ?? null;
        $this->container['token'] = $data['token'] ?? null;
        $this->container['transfer_speed'] = $data['transfer_speed'] ?? null;
        $this->container['transitions'] = $data['transitions'] ?? null;
        $this->container['type'] = $data['type'] ?? null;
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
        if (($this->container['amount'] < 0.01)) {
            $invalidProperties[] = "invalid value for 'amount', must be bigger than or equal to 0.01.";
        }

        $allowedValues = $this->getChannelAllowableValues();
        if (!is_null($this->container['channel']) && !in_array($this->container['channel'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'channel', must be one of '%s'",
                $this->container['channel'],
                implode("', '", $allowedValues)
            );
        }

        if (!is_null($this->container['created_by']) && (mb_strlen($this->container['created_by']) > 255)) {
            $invalidProperties[] = "invalid value for 'created_by', the character length must be smaller than or equal to 255.";
        }

        if (!is_null($this->container['created_by']) && (mb_strlen($this->container['created_by']) < 0)) {
            $invalidProperties[] = "invalid value for 'created_by', the character length must be bigger than or equal to 0.";
        }

        if ($this->container['funding_source_token'] === null) {
            $invalidProperties[] = "'funding_source_token' can't be null";
        }
        if ((mb_strlen($this->container['funding_source_token']) > 36)) {
            $invalidProperties[] = "invalid value for 'funding_source_token', the character length must be smaller than or equal to 36.";
        }

        if ((mb_strlen($this->container['funding_source_token']) < 0)) {
            $invalidProperties[] = "invalid value for 'funding_source_token', the character length must be bigger than or equal to 0.";
        }

        $allowedValues = $this->getStandardEntryClassCodeAllowableValues();
        if (!is_null($this->container['standard_entry_class_code']) && !in_array($this->container['standard_entry_class_code'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'standard_entry_class_code', must be one of '%s'",
                $this->container['standard_entry_class_code'],
                implode("', '", $allowedValues)
            );
        }

        if (!is_null($this->container['statement_descriptor']) && (mb_strlen($this->container['statement_descriptor']) > 10)) {
            $invalidProperties[] = "invalid value for 'statement_descriptor', the character length must be smaller than or equal to 10.";
        }

        if (!is_null($this->container['statement_descriptor']) && (mb_strlen($this->container['statement_descriptor']) < 0)) {
            $invalidProperties[] = "invalid value for 'statement_descriptor', the character length must be bigger than or equal to 0.";
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

        $allowedValues = $this->getTransferSpeedAllowableValues();
        if (!is_null($this->container['transfer_speed']) && !in_array($this->container['transfer_speed'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'transfer_speed', must be one of '%s'",
                $this->container['transfer_speed'],
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['type'] === null) {
            $invalidProperties[] = "'type' can't be null";
        }
        $allowedValues = $this->getTypeAllowableValues();
        if (!is_null($this->container['type']) && !in_array($this->container['type'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'type', must be one of '%s'",
                $this->container['type'],
                implode("', '", $allowedValues)
            );
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
     * @param float $amount Amount to push or pull.
     *
     * @return self
     */
    public function setAmount($amount)
    {

        if (($amount < 0.01)) {
            throw new \InvalidArgumentException('invalid value for $amount when calling BankTransferResponseModel., must be bigger than or equal to 0.01.');
        }

        $this->container['amount'] = $amount;

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
     * @return string|null
     */
    public function getChannel()
    {
        return $this->container['channel'];
    }

    /**
     * Sets channel
     *
     * @param string|null $channel default = API
     *
     * @return self
     */
    public function setChannel($channel)
    {
        $allowedValues = $this->getChannelAllowableValues();
        if (!is_null($channel) && !in_array($channel, $allowedValues, true)) {
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
     * Gets created_by
     *
     * @return string|null
     */
    public function getCreatedBy()
    {
        return $this->container['created_by'];
    }

    /**
     * Sets created_by
     *
     * @param string|null $created_by created_by
     *
     * @return self
     */
    public function setCreatedBy($created_by)
    {
        if (!is_null($created_by) && (mb_strlen($created_by) > 255)) {
            throw new \InvalidArgumentException('invalid length for $created_by when calling BankTransferResponseModel., must be smaller than or equal to 255.');
        }
        if (!is_null($created_by) && (mb_strlen($created_by) < 0)) {
            throw new \InvalidArgumentException('invalid length for $created_by when calling BankTransferResponseModel., must be bigger than or equal to 0.');
        }

        $this->container['created_by'] = $created_by;

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
     * Gets currency_code
     *
     * @return string|null
     */
    public function getCurrencyCode()
    {
        return $this->container['currency_code'];
    }

    /**
     * Sets currency_code
     *
     * @param string|null $currency_code Valid alpha-3 link:https://www.iso.org/iso-4217-currency-codes.html[ISO 4217 currency code, window=\"_blank\"]
     *
     * @return self
     */
    public function setCurrencyCode($currency_code)
    {
        $this->container['currency_code'] = $currency_code;

        return $this;
    }

    /**
     * Gets funding_source_token
     *
     * @return string
     */
    public function getFundingSourceToken()
    {
        return $this->container['funding_source_token'];
    }

    /**
     * Sets funding_source_token
     *
     * @param string $funding_source_token ACH funding source token for the external account.
     *
     * @return self
     */
    public function setFundingSourceToken($funding_source_token)
    {
        if ((mb_strlen($funding_source_token) > 36)) {
            throw new \InvalidArgumentException('invalid length for $funding_source_token when calling BankTransferResponseModel., must be smaller than or equal to 36.');
        }
        if ((mb_strlen($funding_source_token) < 0)) {
            throw new \InvalidArgumentException('invalid length for $funding_source_token when calling BankTransferResponseModel., must be bigger than or equal to 0.');
        }

        $this->container['funding_source_token'] = $funding_source_token;

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
     * @param \DateTime|null $last_modified_time Date and time when the ACH transfer was last modified, in UTC.
     *
     * @return self
     */
    public function setLastModifiedTime($last_modified_time)
    {
        $this->container['last_modified_time'] = $last_modified_time;

        return $this;
    }

    /**
     * Gets memo
     *
     * @return string|null
     */
    public function getMemo()
    {
        return $this->container['memo'];
    }

    /**
     * Sets memo
     *
     * @param string|null $memo Additional text describing the ACH transfer.
     *
     * @return self
     */
    public function setMemo($memo)
    {
        $this->container['memo'] = $memo;

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
     * Gets standard_entry_class_code
     *
     * @return string|null
     */
    public function getStandardEntryClassCode()
    {
        return $this->container['standard_entry_class_code'];
    }

    /**
     * Sets standard_entry_class_code
     *
     * @param string|null $standard_entry_class_code Three-letter code identifying the type of entry.  * *WEB* — An internet-initiated entry * *PPD* — Prearranged Payment and Deposit * *CCD* — Cash Concentration and Disbursement
     *
     * @return self
     */
    public function setStandardEntryClassCode($standard_entry_class_code)
    {
        $allowedValues = $this->getStandardEntryClassCodeAllowableValues();
        if (!is_null($standard_entry_class_code) && !in_array($standard_entry_class_code, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'standard_entry_class_code', must be one of '%s'",
                    $standard_entry_class_code,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['standard_entry_class_code'] = $standard_entry_class_code;

        return $this;
    }

    /**
     * Gets statement_descriptor
     *
     * @return string|null
     */
    public function getStatementDescriptor()
    {
        return $this->container['statement_descriptor'];
    }

    /**
     * Sets statement_descriptor
     *
     * @param string|null $statement_descriptor Description of the transaction, as it will appear on the receiver's bank statement.
     *
     * @return self
     */
    public function setStatementDescriptor($statement_descriptor)
    {
        if (!is_null($statement_descriptor) && (mb_strlen($statement_descriptor) > 10)) {
            throw new \InvalidArgumentException('invalid length for $statement_descriptor when calling BankTransferResponseModel., must be smaller than or equal to 10.');
        }
        if (!is_null($statement_descriptor) && (mb_strlen($statement_descriptor) < 0)) {
            throw new \InvalidArgumentException('invalid length for $statement_descriptor when calling BankTransferResponseModel., must be bigger than or equal to 0.');
        }

        $this->container['statement_descriptor'] = $statement_descriptor;

        return $this;
    }

    /**
     * Gets status
     *
     * @return string|null
     */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
     * Sets status
     *
     * @param string|null $status New state of the ACH transfer.
     *
     * @return self
     */
    public function setStatus($status)
    {
        $allowedValues = $this->getStatusAllowableValues();
        if (!is_null($status) && !in_array($status, $allowedValues, true)) {
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
     * @param string|null $token Unique identifier of the ACH transfer to retrieve.
     *
     * @return self
     */
    public function setToken($token)
    {
        if (!is_null($token) && (mb_strlen($token) > 36)) {
            throw new \InvalidArgumentException('invalid length for $token when calling BankTransferResponseModel., must be smaller than or equal to 36.');
        }
        if (!is_null($token) && (mb_strlen($token) < 0)) {
            throw new \InvalidArgumentException('invalid length for $token when calling BankTransferResponseModel., must be bigger than or equal to 0.');
        }

        $this->container['token'] = $token;

        return $this;
    }

    /**
     * Gets transfer_speed
     *
     * @return string|null
     */
    public function getTransferSpeed()
    {
        return $this->container['transfer_speed'];
    }

    /**
     * Sets transfer_speed
     *
     * @param string|null $transfer_speed Specifies how quickly to initiate the ACH transfer.  *NOTE:* Same-day transfers are limited to a maximum amount of $100,000.
     *
     * @return self
     */
    public function setTransferSpeed($transfer_speed)
    {
        $allowedValues = $this->getTransferSpeedAllowableValues();
        if (!is_null($transfer_speed) && !in_array($transfer_speed, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'transfer_speed', must be one of '%s'",
                    $transfer_speed,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['transfer_speed'] = $transfer_speed;

        return $this;
    }

    /**
     * Gets transitions
     *
     * @return \OpenAPI\Client\Model\BankTransferTransitionResponseModel[]|null
     */
    public function getTransitions()
    {
        return $this->container['transitions'];
    }

    /**
     * Sets transitions
     *
     * @param \OpenAPI\Client\Model\BankTransferTransitionResponseModel[]|null $transitions Array of ACH transfer transition objects.
     *
     * @return self
     */
    public function setTransitions($transitions)
    {
        $this->container['transitions'] = $transitions;

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
     * @param string $type Specifies whether the ACH transfer is a push (credit) or pull (debit).
     *
     * @return self
     */
    public function setType($type)
    {
        $allowedValues = $this->getTypeAllowableValues();
        if (!in_array($type, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'type', must be one of '%s'",
                    $type,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['type'] = $type;

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

