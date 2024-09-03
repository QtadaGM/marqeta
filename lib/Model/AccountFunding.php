<?php
/**
 * AccountFunding
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
 * AccountFunding Class Doc Comment
 *
 * @category Class
 * @description Contains details about account funding transactions. Account funding transactions move money into a cardholder&#39;s general purpose account (GPA).
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class AccountFunding implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'account_funding';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'funding_source' => 'string',
        'receiver_account_type' => 'string',
        'receiver_name' => 'string',
        'screening_score' => 'string',
        'transaction_purpose' => 'string',
        'transaction_type' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'funding_source' => null,
        'receiver_account_type' => null,
        'receiver_name' => null,
        'screening_score' => null,
        'transaction_purpose' => null,
        'transaction_type' => null
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
        'funding_source' => 'funding_source',
        'receiver_account_type' => 'receiver_account_type',
        'receiver_name' => 'receiver_name',
        'screening_score' => 'screening_score',
        'transaction_purpose' => 'transaction_purpose',
        'transaction_type' => 'transaction_type'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'funding_source' => 'setFundingSource',
        'receiver_account_type' => 'setReceiverAccountType',
        'receiver_name' => 'setReceiverName',
        'screening_score' => 'setScreeningScore',
        'transaction_purpose' => 'setTransactionPurpose',
        'transaction_type' => 'setTransactionType'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'funding_source' => 'getFundingSource',
        'receiver_account_type' => 'getReceiverAccountType',
        'receiver_name' => 'getReceiverName',
        'screening_score' => 'getScreeningScore',
        'transaction_purpose' => 'getTransactionPurpose',
        'transaction_type' => 'getTransactionType'
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

    const FUNDING_SOURCE_CREDIT = 'CREDIT';
    const FUNDING_SOURCE_DEBIT = 'DEBIT';
    const FUNDING_SOURCE_PREPAID = 'PREPAID';
    const FUNDING_SOURCE_DEPOSIT_ACCOUNT = 'DEPOSIT_ACCOUNT';
    const FUNDING_SOURCE_CASH = 'CASH';
    const FUNDING_SOURCE_MOBILE_MONEY_ACCOUNT = 'MOBILE_MONEY_ACCOUNT';
    const FUNDING_SOURCE_NON_VISA_CREDIT = 'NON_VISA_CREDIT';
    const FUNDING_SOURCE_CHECK = 'CHECK';
    const FUNDING_SOURCE_ACH = 'ACH';
    const RECEIVER_ACCOUNT_TYPE_OTHER = 'OTHER';
    const RECEIVER_ACCOUNT_TYPE_RTN_BANK_ACCOUNT = 'RTN_BANK_ACCOUNT';
    const RECEIVER_ACCOUNT_TYPE_IBAN = 'IBAN';
    const RECEIVER_ACCOUNT_TYPE_CARD_ACCOUNT = 'CARD_ACCOUNT';
    const RECEIVER_ACCOUNT_TYPE_EMAIL = 'EMAIL';
    const RECEIVER_ACCOUNT_TYPE_PHONE_NUMBER = 'PHONE_NUMBER';
    const RECEIVER_ACCOUNT_TYPE_BANK_ACCOUNT_NUMBER_AND_BANK_IDENTIFICATION_CODE = 'BANK_ACCOUNT_NUMBER_AND_BANK_IDENTIFICATION_CODE';
    const RECEIVER_ACCOUNT_TYPE_WALLET_ID = 'WALLET_ID';
    const RECEIVER_ACCOUNT_TYPE_SOCIAL_NETWORK_ID = 'SOCIAL_NETWORK_ID';
    const TRANSACTION_TYPE_ACCOUNT_TO_ACCOUNT = 'ACCOUNT_TO_ACCOUNT';
    const TRANSACTION_TYPE_PERSON_TO_PERSON = 'PERSON_TO_PERSON';
    const TRANSACTION_TYPE_WALLET_TRANSFER = 'WALLET_TRANSFER';
    const TRANSACTION_TYPE_MONEY_TRANSFER_BY_BANK = 'MONEY_TRANSFER_BY_BANK';
    const TRANSACTION_TYPE_BUSINESS_TO_BUSINESS = 'BUSINESS_TO_BUSINESS';
    const TRANSACTION_TYPE_DISBURSEMENT = 'DISBURSEMENT';
    const TRANSACTION_TYPE_GOVERNMENT_DISBURSEMENT = 'GOVERNMENT_DISBURSEMENT';
    const TRANSACTION_TYPE_GAMBLING_PAYOUT = 'GAMBLING_PAYOUT';
    const TRANSACTION_TYPE_LOYALTY = 'LOYALTY';
    const TRANSACTION_TYPE_MERCHANT_DISBURSEMENT = 'MERCHANT_DISBURSEMENT';
    const TRANSACTION_TYPE_ONLINE_GAMBLING_PAYOUT = 'ONLINE_GAMBLING_PAYOUT';
    const TRANSACTION_TYPE_PENSION_DISBURSEMENT = 'PENSION_DISBURSEMENT';
    const TRANSACTION_TYPE_PREPAID_LOADS = 'PREPAID_LOADS';
    const TRANSACTION_TYPE_CARD_BILL_PAYMENT = 'CARD_BILL_PAYMENT';
    const TRANSACTION_TYPE_BILL_PAYMENT = 'BILL_PAYMENT';
    const TRANSACTION_TYPE_CASH_CLAIM = 'CASH_CLAIM';
    const TRANSACTION_TYPE_CASH_IN = 'CASH_IN';
    const TRANSACTION_TYPE_CASH_OUT = 'CASH_OUT';
    const TRANSACTION_TYPE_MOBILE_AIR_TIME_PAYMENT = 'MOBILE_AIR_TIME_PAYMENT';
    const TRANSACTION_TYPE_MONEY_TRANSFER_BY_MERCHANT = 'MONEY_TRANSFER_BY_MERCHANT';
    const TRANSACTION_TYPE_FACE_TO_FACE_MERCHANT_PAYMENT = 'FACE_TO_FACE_MERCHANT_PAYMENT';
    const TRANSACTION_TYPE_GOVERNMENT_PAYMENT = 'GOVERNMENT_PAYMENT';
    const TRANSACTION_TYPE_PAYMENTS_GOODS_SERVICES = 'PAYMENTS_GOODS_SERVICES';
    const TRANSACTION_TYPE_FUNDS_TRANSFER = 'FUNDS_TRANSFER';
    const TRANSACTION_TYPE_GENERAL_BUSINESS_TO_BUSINESS_TRANSFER = 'GENERAL_BUSINESS_TO_BUSINESS_TRANSFER';
    const TRANSACTION_TYPE_BUSINESS_TO_BUSINESS_TRANSFER = 'BUSINESS_TO_BUSINESS_TRANSFER';
    const TRANSACTION_TYPE_CASH_DEPOSIT = 'CASH_DEPOSIT';
    const TRANSACTION_TYPE_PURCHASE_REPAYMENT = 'PURCHASE_REPAYMENT';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getFundingSourceAllowableValues()
    {
        return [
            self::FUNDING_SOURCE_CREDIT,
            self::FUNDING_SOURCE_DEBIT,
            self::FUNDING_SOURCE_PREPAID,
            self::FUNDING_SOURCE_DEPOSIT_ACCOUNT,
            self::FUNDING_SOURCE_CASH,
            self::FUNDING_SOURCE_MOBILE_MONEY_ACCOUNT,
            self::FUNDING_SOURCE_NON_VISA_CREDIT,
            self::FUNDING_SOURCE_CHECK,
            self::FUNDING_SOURCE_ACH,
        ];
    }

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getReceiverAccountTypeAllowableValues()
    {
        return [
            self::RECEIVER_ACCOUNT_TYPE_OTHER,
            self::RECEIVER_ACCOUNT_TYPE_RTN_BANK_ACCOUNT,
            self::RECEIVER_ACCOUNT_TYPE_IBAN,
            self::RECEIVER_ACCOUNT_TYPE_CARD_ACCOUNT,
            self::RECEIVER_ACCOUNT_TYPE_EMAIL,
            self::RECEIVER_ACCOUNT_TYPE_PHONE_NUMBER,
            self::RECEIVER_ACCOUNT_TYPE_BANK_ACCOUNT_NUMBER_AND_BANK_IDENTIFICATION_CODE,
            self::RECEIVER_ACCOUNT_TYPE_WALLET_ID,
            self::RECEIVER_ACCOUNT_TYPE_SOCIAL_NETWORK_ID,
        ];
    }

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getTransactionTypeAllowableValues()
    {
        return [
            self::TRANSACTION_TYPE_ACCOUNT_TO_ACCOUNT,
            self::TRANSACTION_TYPE_PERSON_TO_PERSON,
            self::TRANSACTION_TYPE_WALLET_TRANSFER,
            self::TRANSACTION_TYPE_MONEY_TRANSFER_BY_BANK,
            self::TRANSACTION_TYPE_BUSINESS_TO_BUSINESS,
            self::TRANSACTION_TYPE_DISBURSEMENT,
            self::TRANSACTION_TYPE_GOVERNMENT_DISBURSEMENT,
            self::TRANSACTION_TYPE_GAMBLING_PAYOUT,
            self::TRANSACTION_TYPE_LOYALTY,
            self::TRANSACTION_TYPE_MERCHANT_DISBURSEMENT,
            self::TRANSACTION_TYPE_ONLINE_GAMBLING_PAYOUT,
            self::TRANSACTION_TYPE_PENSION_DISBURSEMENT,
            self::TRANSACTION_TYPE_PREPAID_LOADS,
            self::TRANSACTION_TYPE_CARD_BILL_PAYMENT,
            self::TRANSACTION_TYPE_BILL_PAYMENT,
            self::TRANSACTION_TYPE_CASH_CLAIM,
            self::TRANSACTION_TYPE_CASH_IN,
            self::TRANSACTION_TYPE_CASH_OUT,
            self::TRANSACTION_TYPE_MOBILE_AIR_TIME_PAYMENT,
            self::TRANSACTION_TYPE_MONEY_TRANSFER_BY_MERCHANT,
            self::TRANSACTION_TYPE_FACE_TO_FACE_MERCHANT_PAYMENT,
            self::TRANSACTION_TYPE_GOVERNMENT_PAYMENT,
            self::TRANSACTION_TYPE_PAYMENTS_GOODS_SERVICES,
            self::TRANSACTION_TYPE_FUNDS_TRANSFER,
            self::TRANSACTION_TYPE_GENERAL_BUSINESS_TO_BUSINESS_TRANSFER,
            self::TRANSACTION_TYPE_BUSINESS_TO_BUSINESS_TRANSFER,
            self::TRANSACTION_TYPE_CASH_DEPOSIT,
            self::TRANSACTION_TYPE_PURCHASE_REPAYMENT,
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
        $this->container['funding_source'] = $data['funding_source'] ?? null;
        $this->container['receiver_account_type'] = $data['receiver_account_type'] ?? null;
        $this->container['receiver_name'] = $data['receiver_name'] ?? null;
        $this->container['screening_score'] = $data['screening_score'] ?? null;
        $this->container['transaction_purpose'] = $data['transaction_purpose'] ?? null;
        $this->container['transaction_type'] = $data['transaction_type'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        $allowedValues = $this->getFundingSourceAllowableValues();
        if (!is_null($this->container['funding_source']) && !in_array($this->container['funding_source'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'funding_source', must be one of '%s'",
                $this->container['funding_source'],
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getReceiverAccountTypeAllowableValues();
        if (!is_null($this->container['receiver_account_type']) && !in_array($this->container['receiver_account_type'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'receiver_account_type', must be one of '%s'",
                $this->container['receiver_account_type'],
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getTransactionTypeAllowableValues();
        if (!is_null($this->container['transaction_type']) && !in_array($this->container['transaction_type'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'transaction_type', must be one of '%s'",
                $this->container['transaction_type'],
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
     * Gets funding_source
     *
     * @return string|null
     */
    public function getFundingSource()
    {
        return $this->container['funding_source'];
    }

    /**
     * Sets funding_source
     *
     * @param string|null $funding_source Specifies the type of account from which the transaction was funded.
     *
     * @return self
     */
    public function setFundingSource($funding_source)
    {
        $allowedValues = $this->getFundingSourceAllowableValues();
        if (!is_null($funding_source) && !in_array($funding_source, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'funding_source', must be one of '%s'",
                    $funding_source,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['funding_source'] = $funding_source;

        return $this;
    }

    /**
     * Gets receiver_account_type
     *
     * @return string|null
     */
    public function getReceiverAccountType()
    {
        return $this->container['receiver_account_type'];
    }

    /**
     * Sets receiver_account_type
     *
     * @param string|null $receiver_account_type Specifies the type of account receiving the funding.
     *
     * @return self
     */
    public function setReceiverAccountType($receiver_account_type)
    {
        $allowedValues = $this->getReceiverAccountTypeAllowableValues();
        if (!is_null($receiver_account_type) && !in_array($receiver_account_type, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'receiver_account_type', must be one of '%s'",
                    $receiver_account_type,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['receiver_account_type'] = $receiver_account_type;

        return $this;
    }

    /**
     * Gets receiver_name
     *
     * @return string|null
     */
    public function getReceiverName()
    {
        return $this->container['receiver_name'];
    }

    /**
     * Sets receiver_name
     *
     * @param string|null $receiver_name Specifies the name of the account holder receiving the funding.
     *
     * @return self
     */
    public function setReceiverName($receiver_name)
    {
        $this->container['receiver_name'] = $receiver_name;

        return $this;
    }

    /**
     * Gets screening_score
     *
     * @return string|null
     */
    public function getScreeningScore()
    {
        return $this->container['screening_score'];
    }

    /**
     * Sets screening_score
     *
     * @param string|null $screening_score Sanctions screening score to assist with meeting Anti-Money Laundering (AML) obligations.  Higher scores indicate that the sender's data more closely resembles an entry on the regulatory watchlist.  A value of 999 means no score was available.
     *
     * @return self
     */
    public function setScreeningScore($screening_score)
    {
        $this->container['screening_score'] = $screening_score;

        return $this;
    }

    /**
     * Gets transaction_purpose
     *
     * @return string|null
     */
    public function getTransactionPurpose()
    {
        return $this->container['transaction_purpose'];
    }

    /**
     * Sets transaction_purpose
     *
     * @param string|null $transaction_purpose Describes the purpose of the account funding transaction.
     *
     * @return self
     */
    public function setTransactionPurpose($transaction_purpose)
    {
        $this->container['transaction_purpose'] = $transaction_purpose;

        return $this;
    }

    /**
     * Gets transaction_type
     *
     * @return string|null
     */
    public function getTransactionType()
    {
        return $this->container['transaction_type'];
    }

    /**
     * Sets transaction_type
     *
     * @param string|null $transaction_type Specifies the account funding transaction type.
     *
     * @return self
     */
    public function setTransactionType($transaction_type)
    {
        $allowedValues = $this->getTransactionTypeAllowableValues();
        if (!is_null($transaction_type) && !in_array($transaction_type, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'transaction_type', must be one of '%s'",
                    $transaction_type,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['transaction_type'] = $transaction_type;

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

