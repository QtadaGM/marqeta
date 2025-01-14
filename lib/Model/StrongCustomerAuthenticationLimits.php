<?php
/**
 * StrongCustomerAuthenticationLimits
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
 * StrongCustomerAuthenticationLimits Class Doc Comment
 *
 * @category Class
 * @description Contains information about Strong Customer Authentication (SCA) behavior for contactless point-of-sale (POS) and low-value payment (LVP) e-commerce transactions.
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class StrongCustomerAuthenticationLimits implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'strong_customer_authentication_limits';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'cavv_authentication_amount_incremental_percentage' => 'string',
        'enable_cavv_authentication_amount_validation' => 'bool',
        'sca_contactless_cumulative_amount_limit' => 'float',
        'sca_contactless_transaction_limit' => 'float',
        'sca_contactless_transactions_count_limit' => 'int',
        'sca_contactless_transactions_currency' => 'string',
        'sca_lvp_cumulative_amount_limit' => 'float',
        'sca_lvp_transaction_limit' => 'float',
        'sca_lvp_transactions_count_limit' => 'int',
        'sca_lvp_transactions_currency' => 'string',
        'sca_tra_exemption_amount_limit' => 'float'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'cavv_authentication_amount_incremental_percentage' => null,
        'enable_cavv_authentication_amount_validation' => null,
        'sca_contactless_cumulative_amount_limit' => null,
        'sca_contactless_transaction_limit' => null,
        'sca_contactless_transactions_count_limit' => 'int32',
        'sca_contactless_transactions_currency' => null,
        'sca_lvp_cumulative_amount_limit' => null,
        'sca_lvp_transaction_limit' => null,
        'sca_lvp_transactions_count_limit' => 'int32',
        'sca_lvp_transactions_currency' => null,
        'sca_tra_exemption_amount_limit' => null
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
        'cavv_authentication_amount_incremental_percentage' => 'cavv_authentication_amount_incremental_percentage',
        'enable_cavv_authentication_amount_validation' => 'enable_cavv_authentication_amount_validation',
        'sca_contactless_cumulative_amount_limit' => 'sca_contactless_cumulative_amount_limit',
        'sca_contactless_transaction_limit' => 'sca_contactless_transaction_limit',
        'sca_contactless_transactions_count_limit' => 'sca_contactless_transactions_count_limit',
        'sca_contactless_transactions_currency' => 'sca_contactless_transactions_currency',
        'sca_lvp_cumulative_amount_limit' => 'sca_lvp_cumulative_amount_limit',
        'sca_lvp_transaction_limit' => 'sca_lvp_transaction_limit',
        'sca_lvp_transactions_count_limit' => 'sca_lvp_transactions_count_limit',
        'sca_lvp_transactions_currency' => 'sca_lvp_transactions_currency',
        'sca_tra_exemption_amount_limit' => 'sca_tra_exemption_amount_limit'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'cavv_authentication_amount_incremental_percentage' => 'setCavvAuthenticationAmountIncrementalPercentage',
        'enable_cavv_authentication_amount_validation' => 'setEnableCavvAuthenticationAmountValidation',
        'sca_contactless_cumulative_amount_limit' => 'setScaContactlessCumulativeAmountLimit',
        'sca_contactless_transaction_limit' => 'setScaContactlessTransactionLimit',
        'sca_contactless_transactions_count_limit' => 'setScaContactlessTransactionsCountLimit',
        'sca_contactless_transactions_currency' => 'setScaContactlessTransactionsCurrency',
        'sca_lvp_cumulative_amount_limit' => 'setScaLvpCumulativeAmountLimit',
        'sca_lvp_transaction_limit' => 'setScaLvpTransactionLimit',
        'sca_lvp_transactions_count_limit' => 'setScaLvpTransactionsCountLimit',
        'sca_lvp_transactions_currency' => 'setScaLvpTransactionsCurrency',
        'sca_tra_exemption_amount_limit' => 'setScaTraExemptionAmountLimit'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'cavv_authentication_amount_incremental_percentage' => 'getCavvAuthenticationAmountIncrementalPercentage',
        'enable_cavv_authentication_amount_validation' => 'getEnableCavvAuthenticationAmountValidation',
        'sca_contactless_cumulative_amount_limit' => 'getScaContactlessCumulativeAmountLimit',
        'sca_contactless_transaction_limit' => 'getScaContactlessTransactionLimit',
        'sca_contactless_transactions_count_limit' => 'getScaContactlessTransactionsCountLimit',
        'sca_contactless_transactions_currency' => 'getScaContactlessTransactionsCurrency',
        'sca_lvp_cumulative_amount_limit' => 'getScaLvpCumulativeAmountLimit',
        'sca_lvp_transaction_limit' => 'getScaLvpTransactionLimit',
        'sca_lvp_transactions_count_limit' => 'getScaLvpTransactionsCountLimit',
        'sca_lvp_transactions_currency' => 'getScaLvpTransactionsCurrency',
        'sca_tra_exemption_amount_limit' => 'getScaTraExemptionAmountLimit'
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
        $this->container['cavv_authentication_amount_incremental_percentage'] = $data['cavv_authentication_amount_incremental_percentage'] ?? null;
        $this->container['enable_cavv_authentication_amount_validation'] = $data['enable_cavv_authentication_amount_validation'] ?? null;
        $this->container['sca_contactless_cumulative_amount_limit'] = $data['sca_contactless_cumulative_amount_limit'] ?? null;
        $this->container['sca_contactless_transaction_limit'] = $data['sca_contactless_transaction_limit'] ?? null;
        $this->container['sca_contactless_transactions_count_limit'] = $data['sca_contactless_transactions_count_limit'] ?? null;
        $this->container['sca_contactless_transactions_currency'] = $data['sca_contactless_transactions_currency'] ?? null;
        $this->container['sca_lvp_cumulative_amount_limit'] = $data['sca_lvp_cumulative_amount_limit'] ?? null;
        $this->container['sca_lvp_transaction_limit'] = $data['sca_lvp_transaction_limit'] ?? null;
        $this->container['sca_lvp_transactions_count_limit'] = $data['sca_lvp_transactions_count_limit'] ?? null;
        $this->container['sca_lvp_transactions_currency'] = $data['sca_lvp_transactions_currency'] ?? null;
        $this->container['sca_tra_exemption_amount_limit'] = $data['sca_tra_exemption_amount_limit'] ?? null;
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
     * Gets cavv_authentication_amount_incremental_percentage
     *
     * @return string|null
     */
    public function getCavvAuthenticationAmountIncrementalPercentage()
    {
        return $this->container['cavv_authentication_amount_incremental_percentage'];
    }

    /**
     * Sets cavv_authentication_amount_incremental_percentage
     *
     * @param string|null $cavv_authentication_amount_incremental_percentage If you have enabled CAVV authentication amount validation, the value of this field specifies the maximum allowable variance between the authorization amount and the 3D Secure authentication amount. Expressed as a percentage.
     *
     * @return self
     */
    public function setCavvAuthenticationAmountIncrementalPercentage($cavv_authentication_amount_incremental_percentage)
    {
        $this->container['cavv_authentication_amount_incremental_percentage'] = $cavv_authentication_amount_incremental_percentage;

        return $this;
    }

    /**
     * Gets enable_cavv_authentication_amount_validation
     *
     * @return bool|null
     */
    public function getEnableCavvAuthenticationAmountValidation()
    {
        return $this->container['enable_cavv_authentication_amount_validation'];
    }

    /**
     * Sets enable_cavv_authentication_amount_validation
     *
     * @param bool|null $enable_cavv_authentication_amount_validation If set to `true`, Marqeta validates the amount in the authorization transaction against the amount in the 3D Secure authentication attempt. If the authorization amount is greater than the 3D Secure authentication amount, Marqeta rejects the transaction. You can specify an allowable variance for the 3D Secure authentication amount in the `cavv_authentication_amount_incremental_percentage` field.
     *
     * @return self
     */
    public function setEnableCavvAuthenticationAmountValidation($enable_cavv_authentication_amount_validation)
    {
        $this->container['enable_cavv_authentication_amount_validation'] = $enable_cavv_authentication_amount_validation;

        return $this;
    }

    /**
     * Gets sca_contactless_cumulative_amount_limit
     *
     * @return float|null
     */
    public function getScaContactlessCumulativeAmountLimit()
    {
        return $this->container['sca_contactless_cumulative_amount_limit'];
    }

    /**
     * Sets sca_contactless_cumulative_amount_limit
     *
     * @param float|null $sca_contactless_cumulative_amount_limit Specifies the cumulative limit of transactions the cardholder can perform before receiving an SCA challenge.  A value of `0` in this field means that the cumulative amount spent in contactless POS transactions performed by the cardholder does not impact the decision of whether or not an SCA challenge is served.
     *
     * @return self
     */
    public function setScaContactlessCumulativeAmountLimit($sca_contactless_cumulative_amount_limit)
    {
        $this->container['sca_contactless_cumulative_amount_limit'] = $sca_contactless_cumulative_amount_limit;

        return $this;
    }

    /**
     * Gets sca_contactless_transaction_limit
     *
     * @return float|null
     */
    public function getScaContactlessTransactionLimit()
    {
        return $this->container['sca_contactless_transaction_limit'];
    }

    /**
     * Sets sca_contactless_transaction_limit
     *
     * @param float|null $sca_contactless_transaction_limit Specifies the maximum allowable amount for a single contactless point-of-sale (POS) transaction, above which the cardholder receives a strong customer authentication (SCA) challenge.  A value of `0` in this field means that the amount of any single contactless POS transaction performed by the cardholder does not impact the decision of whether or not an SCA challenge is served.
     *
     * @return self
     */
    public function setScaContactlessTransactionLimit($sca_contactless_transaction_limit)
    {
        $this->container['sca_contactless_transaction_limit'] = $sca_contactless_transaction_limit;

        return $this;
    }

    /**
     * Gets sca_contactless_transactions_count_limit
     *
     * @return int|null
     */
    public function getScaContactlessTransactionsCountLimit()
    {
        return $this->container['sca_contactless_transactions_count_limit'];
    }

    /**
     * Sets sca_contactless_transactions_count_limit
     *
     * @param int|null $sca_contactless_transactions_count_limit Specifies the number of contactless POS transactions the cardholder can perform before receiving an SCA challenge.  A value of `0` in this field means that the number of contactless POS transactions performed by the cardholder does not impact the decision of whether or not an SCA challenge is served.
     *
     * @return self
     */
    public function setScaContactlessTransactionsCountLimit($sca_contactless_transactions_count_limit)
    {
        $this->container['sca_contactless_transactions_count_limit'] = $sca_contactless_transactions_count_limit;

        return $this;
    }

    /**
     * Gets sca_contactless_transactions_currency
     *
     * @return string|null
     */
    public function getScaContactlessTransactionsCurrency()
    {
        return $this->container['sca_contactless_transactions_currency'];
    }

    /**
     * Sets sca_contactless_transactions_currency
     *
     * @param string|null $sca_contactless_transactions_currency Specifies the currency type for contactless POS transactions.  This field is required if either the `sca_contactless_transaction_limit` field or the `sca_contactless_cumulative_amount_limit` field in this object contains a value, even if that value is `0`.
     *
     * @return self
     */
    public function setScaContactlessTransactionsCurrency($sca_contactless_transactions_currency)
    {
        $this->container['sca_contactless_transactions_currency'] = $sca_contactless_transactions_currency;

        return $this;
    }

    /**
     * Gets sca_lvp_cumulative_amount_limit
     *
     * @return float|null
     */
    public function getScaLvpCumulativeAmountLimit()
    {
        return $this->container['sca_lvp_cumulative_amount_limit'];
    }

    /**
     * Sets sca_lvp_cumulative_amount_limit
     *
     * @param float|null $sca_lvp_cumulative_amount_limit Specifies the cumulative limit of LVP e-commerce transactions the cardholder can perform before receiving an SCA challenge.  For example, if you set the value of this field to `100.00`, your cardholder can perform two transactions for `30.00` and two transactions for `20.00` before receiving an SCA challenge.  If you leave this field blank, the cumulative amount spent in LVP e-commerce transactions performed by the cardholder does not impact the decision of whether or not an SCA challenge is served.
     *
     * @return self
     */
    public function setScaLvpCumulativeAmountLimit($sca_lvp_cumulative_amount_limit)
    {
        $this->container['sca_lvp_cumulative_amount_limit'] = $sca_lvp_cumulative_amount_limit;

        return $this;
    }

    /**
     * Gets sca_lvp_transaction_limit
     *
     * @return float|null
     */
    public function getScaLvpTransactionLimit()
    {
        return $this->container['sca_lvp_transaction_limit'];
    }

    /**
     * Sets sca_lvp_transaction_limit
     *
     * @param float|null $sca_lvp_transaction_limit Specifies the maximum allowable amount for a single low-value payment (LVP) e-commerce transaction, above which the cardholder receives a strong customer authentication (SCA) challenge.  If you leave this field blank, the amount of any single LVP e-commerce transaction performed by the cardholder does not impact the decision of whether or not an SCA challenge is served.
     *
     * @return self
     */
    public function setScaLvpTransactionLimit($sca_lvp_transaction_limit)
    {
        $this->container['sca_lvp_transaction_limit'] = $sca_lvp_transaction_limit;

        return $this;
    }

    /**
     * Gets sca_lvp_transactions_count_limit
     *
     * @return int|null
     */
    public function getScaLvpTransactionsCountLimit()
    {
        return $this->container['sca_lvp_transactions_count_limit'];
    }

    /**
     * Sets sca_lvp_transactions_count_limit
     *
     * @param int|null $sca_lvp_transactions_count_limit Specifies the number of LVP e-commerce transactions the cardholder can perform before receiving an SCA challenge.  If you leave this field blank, the total number of LVP e-commerce transactions performed by the cardholder does not impact the decision of whether or not an SCA challenge is served.
     *
     * @return self
     */
    public function setScaLvpTransactionsCountLimit($sca_lvp_transactions_count_limit)
    {
        $this->container['sca_lvp_transactions_count_limit'] = $sca_lvp_transactions_count_limit;

        return $this;
    }

    /**
     * Gets sca_lvp_transactions_currency
     *
     * @return string|null
     */
    public function getScaLvpTransactionsCurrency()
    {
        return $this->container['sca_lvp_transactions_currency'];
    }

    /**
     * Sets sca_lvp_transactions_currency
     *
     * @param string|null $sca_lvp_transactions_currency Specifies the currency type for LVP e-commerce transaction limits.  This field is required if any one of the `sca_lvp_transaction_limit`, `sca_lvp_cumulative_amount_limit`, or `sca_lvp_transactions_count_limit` fields in this object contains a value, even if that value is `0`.
     *
     * @return self
     */
    public function setScaLvpTransactionsCurrency($sca_lvp_transactions_currency)
    {
        $this->container['sca_lvp_transactions_currency'] = $sca_lvp_transactions_currency;

        return $this;
    }

    /**
     * Gets sca_tra_exemption_amount_limit
     *
     * @return float|null
     */
    public function getScaTraExemptionAmountLimit()
    {
        return $this->container['sca_tra_exemption_amount_limit'];
    }

    /**
     * Sets sca_tra_exemption_amount_limit
     *
     * @param float|null $sca_tra_exemption_amount_limit Specifies the maximum allowable amount for a single low-value payment (LVP) e-commerce transaction with transaction risk analysis (TRA) exemption sent by the merchant or acquirer. If the transaction amount exceeds the specified limit, then the transaction is either approved or it receives a strong customer authentication (SCA) challenge based on `sca_lvp_transaction_limit` and `sca_lvp_transactions_currency`.
     *
     * @return self
     */
    public function setScaTraExemptionAmountLimit($sca_tra_exemption_amount_limit)
    {
        $this->container['sca_tra_exemption_amount_limit'] = $sca_tra_exemption_amount_limit;

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


