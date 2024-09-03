<?php
/**
 * AchModel
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
 * AchModel Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class AchModel implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'ach_model';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'account_number' => 'string',
        'account_type' => 'string',
        'bank_name' => 'string',
        'business_token' => 'string',
        'is_default_account' => 'bool',
        'name_on_account' => 'string',
        'routing_number' => 'string',
        'token' => 'string',
        'user_token' => 'string',
        'verification_notes' => 'string',
        'verification_override' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'account_number' => null,
        'account_type' => null,
        'bank_name' => null,
        'business_token' => null,
        'is_default_account' => null,
        'name_on_account' => null,
        'routing_number' => null,
        'token' => null,
        'user_token' => null,
        'verification_notes' => null,
        'verification_override' => null
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
        'account_number' => 'account_number',
        'account_type' => 'account_type',
        'bank_name' => 'bank_name',
        'business_token' => 'business_token',
        'is_default_account' => 'is_default_account',
        'name_on_account' => 'name_on_account',
        'routing_number' => 'routing_number',
        'token' => 'token',
        'user_token' => 'user_token',
        'verification_notes' => 'verification_notes',
        'verification_override' => 'verification_override'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'account_number' => 'setAccountNumber',
        'account_type' => 'setAccountType',
        'bank_name' => 'setBankName',
        'business_token' => 'setBusinessToken',
        'is_default_account' => 'setIsDefaultAccount',
        'name_on_account' => 'setNameOnAccount',
        'routing_number' => 'setRoutingNumber',
        'token' => 'setToken',
        'user_token' => 'setUserToken',
        'verification_notes' => 'setVerificationNotes',
        'verification_override' => 'setVerificationOverride'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'account_number' => 'getAccountNumber',
        'account_type' => 'getAccountType',
        'bank_name' => 'getBankName',
        'business_token' => 'getBusinessToken',
        'is_default_account' => 'getIsDefaultAccount',
        'name_on_account' => 'getNameOnAccount',
        'routing_number' => 'getRoutingNumber',
        'token' => 'getToken',
        'user_token' => 'getUserToken',
        'verification_notes' => 'getVerificationNotes',
        'verification_override' => 'getVerificationOverride'
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

    const ACCOUNT_TYPE_CHECKING = 'checking';
    const ACCOUNT_TYPE_SAVINGS = 'savings';
    const ACCOUNT_TYPE_CORPORATE = 'corporate';
    const ACCOUNT_TYPE_LOAN = 'loan';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getAccountTypeAllowableValues()
    {
        return [
            self::ACCOUNT_TYPE_CHECKING,
            self::ACCOUNT_TYPE_SAVINGS,
            self::ACCOUNT_TYPE_CORPORATE,
            self::ACCOUNT_TYPE_LOAN,
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
        $this->container['account_number'] = $data['account_number'] ?? null;
        $this->container['account_type'] = $data['account_type'] ?? null;
        $this->container['bank_name'] = $data['bank_name'] ?? null;
        $this->container['business_token'] = $data['business_token'] ?? null;
        $this->container['is_default_account'] = $data['is_default_account'] ?? false;
        $this->container['name_on_account'] = $data['name_on_account'] ?? null;
        $this->container['routing_number'] = $data['routing_number'] ?? null;
        $this->container['token'] = $data['token'] ?? null;
        $this->container['user_token'] = $data['user_token'] ?? null;
        $this->container['verification_notes'] = $data['verification_notes'] ?? null;
        $this->container['verification_override'] = $data['verification_override'] ?? false;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['account_number'] === null) {
            $invalidProperties[] = "'account_number' can't be null";
        }
        if ($this->container['account_type'] === null) {
            $invalidProperties[] = "'account_type' can't be null";
        }
        $allowedValues = $this->getAccountTypeAllowableValues();
        if (!is_null($this->container['account_type']) && !in_array($this->container['account_type'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'account_type', must be one of '%s'",
                $this->container['account_type'],
                implode("', '", $allowedValues)
            );
        }

        if (!is_null($this->container['business_token']) && (mb_strlen($this->container['business_token']) > 36)) {
            $invalidProperties[] = "invalid value for 'business_token', the character length must be smaller than or equal to 36.";
        }

        if (!is_null($this->container['business_token']) && (mb_strlen($this->container['business_token']) < 1)) {
            $invalidProperties[] = "invalid value for 'business_token', the character length must be bigger than or equal to 1.";
        }

        if ($this->container['name_on_account'] === null) {
            $invalidProperties[] = "'name_on_account' can't be null";
        }
        if ((mb_strlen($this->container['name_on_account']) > 50)) {
            $invalidProperties[] = "invalid value for 'name_on_account', the character length must be smaller than or equal to 50.";
        }

        if ((mb_strlen($this->container['name_on_account']) < 1)) {
            $invalidProperties[] = "invalid value for 'name_on_account', the character length must be bigger than or equal to 1.";
        }

        if ($this->container['routing_number'] === null) {
            $invalidProperties[] = "'routing_number' can't be null";
        }
        if (!is_null($this->container['token']) && (mb_strlen($this->container['token']) > 36)) {
            $invalidProperties[] = "invalid value for 'token', the character length must be smaller than or equal to 36.";
        }

        if (!is_null($this->container['token']) && (mb_strlen($this->container['token']) < 1)) {
            $invalidProperties[] = "invalid value for 'token', the character length must be bigger than or equal to 1.";
        }

        if (!is_null($this->container['user_token']) && (mb_strlen($this->container['user_token']) > 36)) {
            $invalidProperties[] = "invalid value for 'user_token', the character length must be smaller than or equal to 36.";
        }

        if (!is_null($this->container['user_token']) && (mb_strlen($this->container['user_token']) < 1)) {
            $invalidProperties[] = "invalid value for 'user_token', the character length must be bigger than or equal to 1.";
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
     * Gets account_number
     *
     * @return string
     */
    public function getAccountNumber()
    {
        return $this->container['account_number'];
    }

    /**
     * Sets account_number
     *
     * @param string $account_number ACH account number.
     *
     * @return self
     */
    public function setAccountNumber($account_number)
    {
        $this->container['account_number'] = $account_number;

        return $this;
    }

    /**
     * Gets account_type
     *
     * @return string
     */
    public function getAccountType()
    {
        return $this->container['account_type'];
    }

    /**
     * Sets account_type
     *
     * @param string $account_type Type of account.
     *
     * @return self
     */
    public function setAccountType($account_type)
    {
        $allowedValues = $this->getAccountTypeAllowableValues();
        if (!in_array($account_type, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'account_type', must be one of '%s'",
                    $account_type,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['account_type'] = $account_type;

        return $this;
    }

    /**
     * Gets bank_name
     *
     * @return string|null
     */
    public function getBankName()
    {
        return $this->container['bank_name'];
    }

    /**
     * Sets bank_name
     *
     * @param string|null $bank_name Name of the financial institution where the ACH account is held.
     *
     * @return self
     */
    public function setBankName($bank_name)
    {
        $this->container['bank_name'] = $bank_name;

        return $this;
    }

    /**
     * Gets business_token
     *
     * @return string|null
     */
    public function getBusinessToken()
    {
        return $this->container['business_token'];
    }

    /**
     * Sets business_token
     *
     * @param string|null $business_token Unique identifier of the business account holder. This token is required if a `user_token` is not specified.
     *
     * @return self
     */
    public function setBusinessToken($business_token)
    {
        if (!is_null($business_token) && (mb_strlen($business_token) > 36)) {
            throw new \InvalidArgumentException('invalid length for $business_token when calling AchModel., must be smaller than or equal to 36.');
        }
        if (!is_null($business_token) && (mb_strlen($business_token) < 1)) {
            throw new \InvalidArgumentException('invalid length for $business_token when calling AchModel., must be bigger than or equal to 1.');
        }

        $this->container['business_token'] = $business_token;

        return $this;
    }

    /**
     * Gets is_default_account
     *
     * @return bool|null
     */
    public function getIsDefaultAccount()
    {
        return $this->container['is_default_account'];
    }

    /**
     * Sets is_default_account
     *
     * @param bool|null $is_default_account If there are multiple funding sources, this field specifies which source is used by default in funding calls. If there is only one funding source, the system ignores this field and always uses that source.
     *
     * @return self
     */
    public function setIsDefaultAccount($is_default_account)
    {
        $this->container['is_default_account'] = $is_default_account;

        return $this;
    }

    /**
     * Gets name_on_account
     *
     * @return string
     */
    public function getNameOnAccount()
    {
        return $this->container['name_on_account'];
    }

    /**
     * Sets name_on_account
     *
     * @param string $name_on_account Name on the ACH account.
     *
     * @return self
     */
    public function setNameOnAccount($name_on_account)
    {
        if ((mb_strlen($name_on_account) > 50)) {
            throw new \InvalidArgumentException('invalid length for $name_on_account when calling AchModel., must be smaller than or equal to 50.');
        }
        if ((mb_strlen($name_on_account) < 1)) {
            throw new \InvalidArgumentException('invalid length for $name_on_account when calling AchModel., must be bigger than or equal to 1.');
        }

        $this->container['name_on_account'] = $name_on_account;

        return $this;
    }

    /**
     * Gets routing_number
     *
     * @return string
     */
    public function getRoutingNumber()
    {
        return $this->container['routing_number'];
    }

    /**
     * Sets routing_number
     *
     * @param string $routing_number Routing number for the ACH account.
     *
     * @return self
     */
    public function setRoutingNumber($routing_number)
    {
        $this->container['routing_number'] = $routing_number;

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
     * @param string|null $token Unique identifier of the funding source. If you do not include a token, the system will generate one automatically. This token is necessary for use in other calls, so we recommend that rather than let the system generate one, you use a simple string that is easy to remember. This value cannot be updated.
     *
     * @return self
     */
    public function setToken($token)
    {
        if (!is_null($token) && (mb_strlen($token) > 36)) {
            throw new \InvalidArgumentException('invalid length for $token when calling AchModel., must be smaller than or equal to 36.');
        }
        if (!is_null($token) && (mb_strlen($token) < 1)) {
            throw new \InvalidArgumentException('invalid length for $token when calling AchModel., must be bigger than or equal to 1.');
        }

        $this->container['token'] = $token;

        return $this;
    }

    /**
     * Gets user_token
     *
     * @return string|null
     */
    public function getUserToken()
    {
        return $this->container['user_token'];
    }

    /**
     * Sets user_token
     *
     * @param string|null $user_token Unique identifier of the user account holder. This token is required if a `business_token` is not specified.
     *
     * @return self
     */
    public function setUserToken($user_token)
    {
        if (!is_null($user_token) && (mb_strlen($user_token) > 36)) {
            throw new \InvalidArgumentException('invalid length for $user_token when calling AchModel., must be smaller than or equal to 36.');
        }
        if (!is_null($user_token) && (mb_strlen($user_token) < 1)) {
            throw new \InvalidArgumentException('invalid length for $user_token when calling AchModel., must be bigger than or equal to 1.');
        }

        $this->container['user_token'] = $user_token;

        return $this;
    }

    /**
     * Gets verification_notes
     *
     * @return string|null
     */
    public function getVerificationNotes()
    {
        return $this->container['verification_notes'];
    }

    /**
     * Sets verification_notes
     *
     * @param string|null $verification_notes Free-form text field for holding notes about verification. This field is returned only if `verification_override = true`.
     *
     * @return self
     */
    public function setVerificationNotes($verification_notes)
    {
        $this->container['verification_notes'] = $verification_notes;

        return $this;
    }

    /**
     * Gets verification_override
     *
     * @return bool|null
     */
    public function getVerificationOverride()
    {
        return $this->container['verification_override'];
    }

    /**
     * Sets verification_override
     *
     * @param bool|null $verification_override Allows the ACH funding source to be used, regardless of its verification status. Set this field to `true` if you can attest that you have verified the account on your own and that it will not be returned by the Federal Reserve.  *NOTE:* When using `PLAID` to validate a funding source, this field is always set to `true`.
     *
     * @return self
     */
    public function setVerificationOverride($verification_override)
    {
        $this->container['verification_override'] = $verification_override;

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


