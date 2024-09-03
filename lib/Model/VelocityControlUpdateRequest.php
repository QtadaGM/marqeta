<?php
/**
 * VelocityControlUpdateRequest
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
 * VelocityControlUpdateRequest Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class VelocityControlUpdateRequest implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'velocity_control_update_request';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'active' => 'bool',
        'amount_limit' => 'float',
        'approvals_only' => 'bool',
        'association' => '\OpenAPI\Client\Model\SpendControlAssociation',
        'currency_code' => 'string',
        'include_cashback' => 'bool',
        'include_credits' => 'bool',
        'include_purchases' => 'bool',
        'include_transfers' => 'bool',
        'include_withdrawals' => 'bool',
        'merchant_scope' => '\OpenAPI\Client\Model\MerchantScope',
        'money_in_transaction' => '\OpenAPI\Client\Model\MoneyInTransaction',
        'name' => 'string',
        'token' => 'string',
        'usage_limit' => 'int',
        'velocity_window' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'active' => null,
        'amount_limit' => null,
        'approvals_only' => null,
        'association' => null,
        'currency_code' => null,
        'include_cashback' => null,
        'include_credits' => null,
        'include_purchases' => null,
        'include_transfers' => null,
        'include_withdrawals' => null,
        'merchant_scope' => null,
        'money_in_transaction' => null,
        'name' => null,
        'token' => null,
        'usage_limit' => 'int32',
        'velocity_window' => null
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
        'active' => 'active',
        'amount_limit' => 'amount_limit',
        'approvals_only' => 'approvals_only',
        'association' => 'association',
        'currency_code' => 'currency_code',
        'include_cashback' => 'include_cashback',
        'include_credits' => 'include_credits',
        'include_purchases' => 'include_purchases',
        'include_transfers' => 'include_transfers',
        'include_withdrawals' => 'include_withdrawals',
        'merchant_scope' => 'merchant_scope',
        'money_in_transaction' => 'money_in_transaction',
        'name' => 'name',
        'token' => 'token',
        'usage_limit' => 'usage_limit',
        'velocity_window' => 'velocity_window'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'active' => 'setActive',
        'amount_limit' => 'setAmountLimit',
        'approvals_only' => 'setApprovalsOnly',
        'association' => 'setAssociation',
        'currency_code' => 'setCurrencyCode',
        'include_cashback' => 'setIncludeCashback',
        'include_credits' => 'setIncludeCredits',
        'include_purchases' => 'setIncludePurchases',
        'include_transfers' => 'setIncludeTransfers',
        'include_withdrawals' => 'setIncludeWithdrawals',
        'merchant_scope' => 'setMerchantScope',
        'money_in_transaction' => 'setMoneyInTransaction',
        'name' => 'setName',
        'token' => 'setToken',
        'usage_limit' => 'setUsageLimit',
        'velocity_window' => 'setVelocityWindow'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'active' => 'getActive',
        'amount_limit' => 'getAmountLimit',
        'approvals_only' => 'getApprovalsOnly',
        'association' => 'getAssociation',
        'currency_code' => 'getCurrencyCode',
        'include_cashback' => 'getIncludeCashback',
        'include_credits' => 'getIncludeCredits',
        'include_purchases' => 'getIncludePurchases',
        'include_transfers' => 'getIncludeTransfers',
        'include_withdrawals' => 'getIncludeWithdrawals',
        'merchant_scope' => 'getMerchantScope',
        'money_in_transaction' => 'getMoneyInTransaction',
        'name' => 'getName',
        'token' => 'getToken',
        'usage_limit' => 'getUsageLimit',
        'velocity_window' => 'getVelocityWindow'
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

    const VELOCITY_WINDOW_DAY = 'DAY';
    const VELOCITY_WINDOW_WEEK = 'WEEK';
    const VELOCITY_WINDOW_MONTH = 'MONTH';
    const VELOCITY_WINDOW_QUARTER = 'QUARTER';
    const VELOCITY_WINDOW_YEAR = 'YEAR';
    const VELOCITY_WINDOW_LIFETIME = 'LIFETIME';
    const VELOCITY_WINDOW_TRANSACTION = 'TRANSACTION';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getVelocityWindowAllowableValues()
    {
        return [
            self::VELOCITY_WINDOW_DAY,
            self::VELOCITY_WINDOW_WEEK,
            self::VELOCITY_WINDOW_MONTH,
            self::VELOCITY_WINDOW_QUARTER,
            self::VELOCITY_WINDOW_YEAR,
            self::VELOCITY_WINDOW_LIFETIME,
            self::VELOCITY_WINDOW_TRANSACTION,
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
        $this->container['active'] = $data['active'] ?? null;
        $this->container['amount_limit'] = $data['amount_limit'] ?? null;
        $this->container['approvals_only'] = $data['approvals_only'] ?? null;
        $this->container['association'] = $data['association'] ?? null;
        $this->container['currency_code'] = $data['currency_code'] ?? null;
        $this->container['include_cashback'] = $data['include_cashback'] ?? null;
        $this->container['include_credits'] = $data['include_credits'] ?? null;
        $this->container['include_purchases'] = $data['include_purchases'] ?? null;
        $this->container['include_transfers'] = $data['include_transfers'] ?? null;
        $this->container['include_withdrawals'] = $data['include_withdrawals'] ?? null;
        $this->container['merchant_scope'] = $data['merchant_scope'] ?? null;
        $this->container['money_in_transaction'] = $data['money_in_transaction'] ?? null;
        $this->container['name'] = $data['name'] ?? null;
        $this->container['token'] = $data['token'] ?? null;
        $this->container['usage_limit'] = $data['usage_limit'] ?? null;
        $this->container['velocity_window'] = $data['velocity_window'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if (!is_null($this->container['amount_limit']) && ($this->container['amount_limit'] < 0)) {
            $invalidProperties[] = "invalid value for 'amount_limit', must be bigger than or equal to 0.";
        }

        if (!is_null($this->container['name']) && (mb_strlen($this->container['name']) > 255)) {
            $invalidProperties[] = "invalid value for 'name', the character length must be smaller than or equal to 255.";
        }

        if (!is_null($this->container['name']) && (mb_strlen($this->container['name']) < 0)) {
            $invalidProperties[] = "invalid value for 'name', the character length must be bigger than or equal to 0.";
        }

        if ($this->container['token'] === null) {
            $invalidProperties[] = "'token' can't be null";
        }
        if ((mb_strlen($this->container['token']) > 36)) {
            $invalidProperties[] = "invalid value for 'token', the character length must be smaller than or equal to 36.";
        }

        if ((mb_strlen($this->container['token']) < 1)) {
            $invalidProperties[] = "invalid value for 'token', the character length must be bigger than or equal to 1.";
        }

        if (!is_null($this->container['usage_limit']) && ($this->container['usage_limit'] < -1)) {
            $invalidProperties[] = "invalid value for 'usage_limit', must be bigger than or equal to -1.";
        }

        $allowedValues = $this->getVelocityWindowAllowableValues();
        if (!is_null($this->container['velocity_window']) && !in_array($this->container['velocity_window'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'velocity_window', must be one of '%s'",
                $this->container['velocity_window'],
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
     * Gets active
     *
     * @return bool|null
     */
    public function getActive()
    {
        return $this->container['active'];
    }

    /**
     * Sets active
     *
     * @param bool|null $active Indicates whether the velocity control is active.
     *
     * @return self
     */
    public function setActive($active)
    {
        $this->container['active'] = $active;

        return $this;
    }

    /**
     * Gets amount_limit
     *
     * @return float|null
     */
    public function getAmountLimit()
    {
        return $this->container['amount_limit'];
    }

    /**
     * Sets amount_limit
     *
     * @param float|null $amount_limit Maximum monetary sum that can be cleared within the time period defined by the `velocity_window` field.
     *
     * @return self
     */
    public function setAmountLimit($amount_limit)
    {

        if (!is_null($amount_limit) && ($amount_limit < 0)) {
            throw new \InvalidArgumentException('invalid value for $amount_limit when calling VelocityControlUpdateRequest., must be bigger than or equal to 0.');
        }

        $this->container['amount_limit'] = $amount_limit;

        return $this;
    }

    /**
     * Gets approvals_only
     *
     * @return bool|null
     */
    public function getApprovalsOnly()
    {
        return $this->container['approvals_only'];
    }

    /**
     * Sets approvals_only
     *
     * @param bool|null $approvals_only If set to `true`, only approved transactions are subject to control.
     *
     * @return self
     */
    public function setApprovalsOnly($approvals_only)
    {
        $this->container['approvals_only'] = $approvals_only;

        return $this;
    }

    /**
     * Gets association
     *
     * @return \OpenAPI\Client\Model\SpendControlAssociation|null
     */
    public function getAssociation()
    {
        return $this->container['association'];
    }

    /**
     * Sets association
     *
     * @param \OpenAPI\Client\Model\SpendControlAssociation|null $association association
     *
     * @return self
     */
    public function setAssociation($association)
    {
        $this->container['association'] = $association;

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
     * @param string|null $currency_code Three-character ISO 4217 currency code.
     *
     * @return self
     */
    public function setCurrencyCode($currency_code)
    {
        $this->container['currency_code'] = $currency_code;

        return $this;
    }

    /**
     * Gets include_cashback
     *
     * @return bool|null
     */
    public function getIncludeCashback()
    {
        return $this->container['include_cashback'];
    }

    /**
     * Sets include_cashback
     *
     * @param bool|null $include_cashback If set to `true`, the cashback components of point-of-sale transactions are subject to control.
     *
     * @return self
     */
    public function setIncludeCashback($include_cashback)
    {
        $this->container['include_cashback'] = $include_cashback;

        return $this;
    }

    /**
     * Gets include_credits
     *
     * @return bool|null
     */
    public function getIncludeCredits()
    {
        return $this->container['include_credits'];
    }

    /**
     * Sets include_credits
     *
     * @param bool|null $include_credits If set to `true`, original credit transactions are subject to control. Your request can contain either a `money_in_transaction` object or the `include_credits` field, not both.
     *
     * @return self
     */
    public function setIncludeCredits($include_credits)
    {
        $this->container['include_credits'] = $include_credits;

        return $this;
    }

    /**
     * Gets include_purchases
     *
     * @return bool|null
     */
    public function getIncludePurchases()
    {
        return $this->container['include_purchases'];
    }

    /**
     * Sets include_purchases
     *
     * @param bool|null $include_purchases If set to `true`, the following transactions are subject to control:  * *Account funding:* All account funding transactions * *Cashback:* Only the purchase component of cashback transactions * *Purchase transactions:* All authorizations, PIN debit transactions, and incremental transactions * *Quasi-cash:* All quasi-cash transactions * *Refunds:* All refund transactions (see <</developer-guides/controlling-spending#_controls_to_limit_amount_and_frequency_of_spending, Controls to limit amount and frequency of spending>> for more information) * *Reversals:* All reversal transactions
     *
     * @return self
     */
    public function setIncludePurchases($include_purchases)
    {
        $this->container['include_purchases'] = $include_purchases;

        return $this;
    }

    /**
     * Gets include_transfers
     *
     * @return bool|null
     */
    public function getIncludeTransfers()
    {
        return $this->container['include_transfers'];
    }

    /**
     * Sets include_transfers
     *
     * @param bool|null $include_transfers If set to `true`, account-to-account transfers are subject to control. Account-to-account transfers are not currently supported.
     *
     * @return self
     */
    public function setIncludeTransfers($include_transfers)
    {
        $this->container['include_transfers'] = $include_transfers;

        return $this;
    }

    /**
     * Gets include_withdrawals
     *
     * @return bool|null
     */
    public function getIncludeWithdrawals()
    {
        return $this->container['include_withdrawals'];
    }

    /**
     * Sets include_withdrawals
     *
     * @param bool|null $include_withdrawals If set to `true`, ATM withdrawals are subject to control.
     *
     * @return self
     */
    public function setIncludeWithdrawals($include_withdrawals)
    {
        $this->container['include_withdrawals'] = $include_withdrawals;

        return $this;
    }

    /**
     * Gets merchant_scope
     *
     * @return \OpenAPI\Client\Model\MerchantScope|null
     */
    public function getMerchantScope()
    {
        return $this->container['merchant_scope'];
    }

    /**
     * Sets merchant_scope
     *
     * @param \OpenAPI\Client\Model\MerchantScope|null $merchant_scope merchant_scope
     *
     * @return self
     */
    public function setMerchantScope($merchant_scope)
    {
        $this->container['merchant_scope'] = $merchant_scope;

        return $this;
    }

    /**
     * Gets money_in_transaction
     *
     * @return \OpenAPI\Client\Model\MoneyInTransaction|null
     */
    public function getMoneyInTransaction()
    {
        return $this->container['money_in_transaction'];
    }

    /**
     * Sets money_in_transaction
     *
     * @param \OpenAPI\Client\Model\MoneyInTransaction|null $money_in_transaction money_in_transaction
     *
     * @return self
     */
    public function setMoneyInTransaction($money_in_transaction)
    {
        $this->container['money_in_transaction'] = $money_in_transaction;

        return $this;
    }

    /**
     * Gets name
     *
     * @return string|null
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     *
     * @param string|null $name Description of how the velocity control restricts spending. For example, \"Max spend of $500 per day\" or \"Max spend of $5000 per month for non-exempt employees\".  Ensure that the description you provide here adequately captures the kind of restriction exerted by this velocity control, because the Marqeta platform will send this information to you in a webhook in the event that the transaction authorization attempt is declined by the velocity control.  *NOTE:* This field is very important. If your program has multiple velocity controls in place, it is not always clear which one prevented the transaction from being approved. Adding specific details to this field gives you more contextual information when debugging or monitoring declined authorization attempts.
     *
     * @return self
     */
    public function setName($name)
    {
        if (!is_null($name) && (mb_strlen($name) > 255)) {
            throw new \InvalidArgumentException('invalid length for $name when calling VelocityControlUpdateRequest., must be smaller than or equal to 255.');
        }
        if (!is_null($name) && (mb_strlen($name) < 0)) {
            throw new \InvalidArgumentException('invalid length for $name when calling VelocityControlUpdateRequest., must be bigger than or equal to 0.');
        }

        $this->container['name'] = $name;

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
     * @param string $token Unique identifier of the velocity control resource.
     *
     * @return self
     */
    public function setToken($token)
    {
        if ((mb_strlen($token) > 36)) {
            throw new \InvalidArgumentException('invalid length for $token when calling VelocityControlUpdateRequest., must be smaller than or equal to 36.');
        }
        if ((mb_strlen($token) < 1)) {
            throw new \InvalidArgumentException('invalid length for $token when calling VelocityControlUpdateRequest., must be bigger than or equal to 1.');
        }

        $this->container['token'] = $token;

        return $this;
    }

    /**
     * Gets usage_limit
     *
     * @return int|null
     */
    public function getUsageLimit()
    {
        return $this->container['usage_limit'];
    }

    /**
     * Sets usage_limit
     *
     * @param int|null $usage_limit Maximum number of times a card can be used within the time period defined by the `velocity_window` field.  If `velocity_window` is set to `TRANSACTION`, do not include a `usage_limit` in your request.
     *
     * @return self
     */
    public function setUsageLimit($usage_limit)
    {

        if (!is_null($usage_limit) && ($usage_limit < -1)) {
            throw new \InvalidArgumentException('invalid value for $usage_limit when calling VelocityControlUpdateRequest., must be bigger than or equal to -1.');
        }

        $this->container['usage_limit'] = $usage_limit;

        return $this;
    }

    /**
     * Gets velocity_window
     *
     * @return string|null
     */
    public function getVelocityWindow()
    {
        return $this->container['velocity_window'];
    }

    /**
     * Sets velocity_window
     *
     * @param string|null $velocity_window Defines the time period to which the `amount_limit` and `usage_limit` fields apply:  * *DAY* – one day; days begin at 00:00:00 UTC. * *WEEK* – one week; weeks begin Sundays at 00:00:00 UTC. * *MONTH* – one month; months begin on the first day of month at 00:00:00 UTC. * *LIFETIME* – forever; time period never expires. * *TRANSACTION* – a single transaction.  // (2023-05-03): This statement was validated by Processing, as part of a customer inquiry. *NOTE:* If set to `DAY`, `WEEK`, or `MONTH`, the velocity control takes effect retroactively from the beginning of the specified period. The amount and usage data already collected within the first period is counted toward the limits.  // (2023-05-03): Commenting this note out, as it is untrue in testing as reported by customers and confirmed by transaction engine team //_*NOTE:* Editing any of the following fields on a velocity control resets its usage and amount count to 0:  //_* `merchant_scope.mcc` //_* `merchant_scope.mid` //_* `merchant_scope.mcc_group` //_* `association.user_token` //_* `association.card_product_token`
     *
     * @return self
     */
    public function setVelocityWindow($velocity_window)
    {
        $allowedValues = $this->getVelocityWindowAllowableValues();
        if (!is_null($velocity_window) && !in_array($velocity_window, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'velocity_window', must be one of '%s'",
                    $velocity_window,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['velocity_window'] = $velocity_window;

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


