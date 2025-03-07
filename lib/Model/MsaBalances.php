<?php
/**
 * MsaBalances
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
 * MsaBalances Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class MsaBalances implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'msa_balances';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'available_balance' => 'float',
        'balances' => 'array<string,\OpenAPI\Client\Model\MsaBalances>',
        'cached_balance' => 'float',
        'credit_balance' => 'float',
        'currency_code' => 'string',
        'impacted_amount' => 'float',
        'last_updated_time' => '\DateTime',
        'ledger_balance' => 'float',
        'pending_credits' => 'float'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'available_balance' => null,
        'balances' => null,
        'cached_balance' => null,
        'credit_balance' => null,
        'currency_code' => null,
        'impacted_amount' => null,
        'last_updated_time' => 'date-time',
        'ledger_balance' => null,
        'pending_credits' => null
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
        'available_balance' => 'available_balance',
        'balances' => 'balances',
        'cached_balance' => 'cached_balance',
        'credit_balance' => 'credit_balance',
        'currency_code' => 'currency_code',
        'impacted_amount' => 'impacted_amount',
        'last_updated_time' => 'last_updated_time',
        'ledger_balance' => 'ledger_balance',
        'pending_credits' => 'pending_credits'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'available_balance' => 'setAvailableBalance',
        'balances' => 'setBalances',
        'cached_balance' => 'setCachedBalance',
        'credit_balance' => 'setCreditBalance',
        'currency_code' => 'setCurrencyCode',
        'impacted_amount' => 'setImpactedAmount',
        'last_updated_time' => 'setLastUpdatedTime',
        'ledger_balance' => 'setLedgerBalance',
        'pending_credits' => 'setPendingCredits'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'available_balance' => 'getAvailableBalance',
        'balances' => 'getBalances',
        'cached_balance' => 'getCachedBalance',
        'credit_balance' => 'getCreditBalance',
        'currency_code' => 'getCurrencyCode',
        'impacted_amount' => 'getImpactedAmount',
        'last_updated_time' => 'getLastUpdatedTime',
        'ledger_balance' => 'getLedgerBalance',
        'pending_credits' => 'getPendingCredits'
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
        $this->container['available_balance'] = $data['available_balance'] ?? null;
        $this->container['balances'] = $data['balances'] ?? null;
        $this->container['cached_balance'] = $data['cached_balance'] ?? null;
        $this->container['credit_balance'] = $data['credit_balance'] ?? null;
        $this->container['currency_code'] = $data['currency_code'] ?? null;
        $this->container['impacted_amount'] = $data['impacted_amount'] ?? null;
        $this->container['last_updated_time'] = $data['last_updated_time'] ?? null;
        $this->container['ledger_balance'] = $data['ledger_balance'] ?? null;
        $this->container['pending_credits'] = $data['pending_credits'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['available_balance'] === null) {
            $invalidProperties[] = "'available_balance' can't be null";
        }
        if ($this->container['balances'] === null) {
            $invalidProperties[] = "'balances' can't be null";
        }
        if ($this->container['cached_balance'] === null) {
            $invalidProperties[] = "'cached_balance' can't be null";
        }
        if ($this->container['credit_balance'] === null) {
            $invalidProperties[] = "'credit_balance' can't be null";
        }
        if ($this->container['currency_code'] === null) {
            $invalidProperties[] = "'currency_code' can't be null";
        }
        if ($this->container['last_updated_time'] === null) {
            $invalidProperties[] = "'last_updated_time' can't be null";
        }
        if ($this->container['ledger_balance'] === null) {
            $invalidProperties[] = "'ledger_balance' can't be null";
        }
        if ($this->container['pending_credits'] === null) {
            $invalidProperties[] = "'pending_credits' can't be null";
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
     * Gets available_balance
     *
     * @return float
     */
    public function getAvailableBalance()
    {
        return $this->container['available_balance'];
    }

    /**
     * Sets available_balance
     *
     * @param float $available_balance available_balance
     *
     * @return self
     */
    public function setAvailableBalance($available_balance)
    {
        $this->container['available_balance'] = $available_balance;

        return $this;
    }

    /**
     * Gets balances
     *
     * @return array<string,\OpenAPI\Client\Model\MsaBalances>
     */
    public function getBalances()
    {
        return $this->container['balances'];
    }

    /**
     * Sets balances
     *
     * @param array<string,\OpenAPI\Client\Model\MsaBalances> $balances balances
     *
     * @return self
     */
    public function setBalances($balances)
    {
        $this->container['balances'] = $balances;

        return $this;
    }

    /**
     * Gets cached_balance
     *
     * @return float
     */
    public function getCachedBalance()
    {
        return $this->container['cached_balance'];
    }

    /**
     * Sets cached_balance
     *
     * @param float $cached_balance cached_balance
     *
     * @return self
     */
    public function setCachedBalance($cached_balance)
    {
        $this->container['cached_balance'] = $cached_balance;

        return $this;
    }

    /**
     * Gets credit_balance
     *
     * @return float
     */
    public function getCreditBalance()
    {
        return $this->container['credit_balance'];
    }

    /**
     * Sets credit_balance
     *
     * @param float $credit_balance credit_balance
     *
     * @return self
     */
    public function setCreditBalance($credit_balance)
    {
        $this->container['credit_balance'] = $credit_balance;

        return $this;
    }

    /**
     * Gets currency_code
     *
     * @return string
     */
    public function getCurrencyCode()
    {
        return $this->container['currency_code'];
    }

    /**
     * Sets currency_code
     *
     * @param string $currency_code currency_code
     *
     * @return self
     */
    public function setCurrencyCode($currency_code)
    {
        $this->container['currency_code'] = $currency_code;

        return $this;
    }

    /**
     * Gets impacted_amount
     *
     * @return float|null
     */
    public function getImpactedAmount()
    {
        return $this->container['impacted_amount'];
    }

    /**
     * Sets impacted_amount
     *
     * @param float|null $impacted_amount impacted_amount
     *
     * @return self
     */
    public function setImpactedAmount($impacted_amount)
    {
        $this->container['impacted_amount'] = $impacted_amount;

        return $this;
    }

    /**
     * Gets last_updated_time
     *
     * @return \DateTime
     */
    public function getLastUpdatedTime()
    {
        return $this->container['last_updated_time'];
    }

    /**
     * Sets last_updated_time
     *
     * @param \DateTime $last_updated_time last_updated_time
     *
     * @return self
     */
    public function setLastUpdatedTime($last_updated_time)
    {
        $this->container['last_updated_time'] = $last_updated_time;

        return $this;
    }

    /**
     * Gets ledger_balance
     *
     * @return float
     */
    public function getLedgerBalance()
    {
        return $this->container['ledger_balance'];
    }

    /**
     * Sets ledger_balance
     *
     * @param float $ledger_balance ledger_balance
     *
     * @return self
     */
    public function setLedgerBalance($ledger_balance)
    {
        $this->container['ledger_balance'] = $ledger_balance;

        return $this;
    }

    /**
     * Gets pending_credits
     *
     * @return float
     */
    public function getPendingCredits()
    {
        return $this->container['pending_credits'];
    }

    /**
     * Sets pending_credits
     *
     * @param float $pending_credits pending_credits
     *
     * @return self
     */
    public function setPendingCredits($pending_credits)
    {
        $this->container['pending_credits'] = $pending_credits;

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


