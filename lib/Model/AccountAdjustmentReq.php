<?php
/**
 * AccountAdjustmentReq
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
 * AccountAdjustmentReq Class Doc Comment
 *
 * @category Class
 * @description Contains information relevant to creating an account adjustment.
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class AccountAdjustmentReq implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'AccountAdjustmentReq';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'amount' => 'float',
        'currency_code' => '\OpenAPI\Client\Model\CurrencyCode',
        'description' => 'string',
        'external_adjustment_id' => 'string',
        'note' => 'string',
        'original_ledger_entry_token' => 'string',
        'reason' => 'string',
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
        'external_adjustment_id' => 'uuid',
        'note' => null,
        'original_ledger_entry_token' => 'uuid',
        'reason' => null,
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
        'external_adjustment_id' => 'external_adjustment_id',
        'note' => 'note',
        'original_ledger_entry_token' => 'original_ledger_entry_token',
        'reason' => 'reason',
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
        'external_adjustment_id' => 'setExternalAdjustmentId',
        'note' => 'setNote',
        'original_ledger_entry_token' => 'setOriginalLedgerEntryToken',
        'reason' => 'setReason',
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
        'external_adjustment_id' => 'getExternalAdjustmentId',
        'note' => 'getNote',
        'original_ledger_entry_token' => 'getOriginalLedgerEntryToken',
        'reason' => 'getReason',
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

    const REASON_DISPUTE = 'DISPUTE';
    const REASON_DISPUTE_RESOLUTION = 'DISPUTE_RESOLUTION';
    const REASON_RETURNED_OR_CANCELED_PAYMENT = 'RETURNED_OR_CANCELED_PAYMENT';
    const REASON_OTHER = 'OTHER';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getReasonAllowableValues()
    {
        return [
            self::REASON_DISPUTE,
            self::REASON_DISPUTE_RESOLUTION,
            self::REASON_RETURNED_OR_CANCELED_PAYMENT,
            self::REASON_OTHER,
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
        $this->container['external_adjustment_id'] = $data['external_adjustment_id'] ?? null;
        $this->container['note'] = $data['note'] ?? null;
        $this->container['original_ledger_entry_token'] = $data['original_ledger_entry_token'] ?? null;
        $this->container['reason'] = $data['reason'] ?? null;
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
        if (($this->container['amount'] > 1000000)) {
            $invalidProperties[] = "invalid value for 'amount', must be smaller than or equal to 1000000.";
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

        if ((mb_strlen($this->container['description']) < 1)) {
            $invalidProperties[] = "invalid value for 'description', the character length must be bigger than or equal to 1.";
        }

        if (!is_null($this->container['note']) && (mb_strlen($this->container['note']) > 255)) {
            $invalidProperties[] = "invalid value for 'note', the character length must be smaller than or equal to 255.";
        }

        $allowedValues = $this->getReasonAllowableValues();
        if (!is_null($this->container['reason']) && !in_array($this->container['reason'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'reason', must be one of '%s'",
                $this->container['reason'],
                implode("', '", $allowedValues)
            );
        }

        if (!is_null($this->container['token']) && (mb_strlen($this->container['token']) > 36)) {
            $invalidProperties[] = "invalid value for 'token', the character length must be smaller than or equal to 36.";
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
     * @param float $amount Amount of the adjustment.  Value must be negative if `original_ledger_entry_token` is not passed.
     *
     * @return self
     */
    public function setAmount($amount)
    {

        if (($amount > 1000000)) {
            throw new \InvalidArgumentException('invalid value for $amount when calling AccountAdjustmentReq., must be smaller than or equal to 1000000.');
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
     * @param string $description Description of the adjustment.
     *
     * @return self
     */
    public function setDescription($description)
    {
        if ((mb_strlen($description) > 255)) {
            throw new \InvalidArgumentException('invalid length for $description when calling AccountAdjustmentReq., must be smaller than or equal to 255.');
        }
        if ((mb_strlen($description) < 1)) {
            throw new \InvalidArgumentException('invalid length for $description when calling AccountAdjustmentReq., must be bigger than or equal to 1.');
        }

        $this->container['description'] = $description;

        return $this;
    }

    /**
     * Gets external_adjustment_id
     *
     * @return string|null
     */
    public function getExternalAdjustmentId()
    {
        return $this->container['external_adjustment_id'];
    }

    /**
     * Sets external_adjustment_id
     *
     * @param string|null $external_adjustment_id Unique identifier you provide of an associated external adjustment that exists outside Marqeta's credit platform.
     *
     * @return self
     */
    public function setExternalAdjustmentId($external_adjustment_id)
    {
        $this->container['external_adjustment_id'] = $external_adjustment_id;

        return $this;
    }

    /**
     * Gets note
     *
     * @return string|null
     */
    public function getNote()
    {
        return $this->container['note'];
    }

    /**
     * Sets note
     *
     * @param string|null $note Additional information on the adjustment.
     *
     * @return self
     */
    public function setNote($note)
    {
        if (!is_null($note) && (mb_strlen($note) > 255)) {
            throw new \InvalidArgumentException('invalid length for $note when calling AccountAdjustmentReq., must be smaller than or equal to 255.');
        }

        $this->container['note'] = $note;

        return $this;
    }

    /**
     * Gets original_ledger_entry_token
     *
     * @return string|null
     */
    public function getOriginalLedgerEntryToken()
    {
        return $this->container['original_ledger_entry_token'];
    }

    /**
     * Sets original_ledger_entry_token
     *
     * @param string|null $original_ledger_entry_token Unique identifier of the original journal entry needing the adjustment.  Required when adjusting an existing journal entry.
     *
     * @return self
     */
    public function setOriginalLedgerEntryToken($original_ledger_entry_token)
    {
        $this->container['original_ledger_entry_token'] = $original_ledger_entry_token;

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
     * @param string|null $reason Reason for the adjustment.  * `DISPUTE` - The adjustment occurred because a dispute was initiated. * `DISPUTE_RESOLUTION` - The adjustment occurred because of the result of a dispute resolution. * `RETURNED_OR_CANCELED_PAYMENT` - The adjustment occurred because a payment was returned or canceled. * `OTHER` - Any other reason the adjustment occurred. For example, a waived fee or account write-off.
     *
     * @return self
     */
    public function setReason($reason)
    {
        $allowedValues = $this->getReasonAllowableValues();
        if (!is_null($reason) && !in_array($reason, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'reason', must be one of '%s'",
                    $reason,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['reason'] = $reason;

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
     * @param string|null $token Unique identifier of the adjustment.
     *
     * @return self
     */
    public function setToken($token)
    {
        if (!is_null($token) && (mb_strlen($token) > 36)) {
            throw new \InvalidArgumentException('invalid length for $token when calling AccountAdjustmentReq., must be smaller than or equal to 36.');
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

