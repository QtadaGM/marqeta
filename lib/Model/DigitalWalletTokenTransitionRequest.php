<?php
/**
 * DigitalWalletTokenTransitionRequest
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
 * DigitalWalletTokenTransitionRequest Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class DigitalWalletTokenTransitionRequest implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'digital_wallet_token_transition_request';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'channel' => 'string',
        'digital_wallet_token' => '\OpenAPI\Client\Model\DigitalWalletTokenHash',
        'reason' => 'string',
        'reason_code' => 'string',
        'state' => 'string',
        'token' => 'string',
        'token_reference_id' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'channel' => null,
        'digital_wallet_token' => null,
        'reason' => null,
        'reason_code' => null,
        'state' => null,
        'token' => null,
        'token_reference_id' => null
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
        'channel' => 'channel',
        'digital_wallet_token' => 'digital_wallet_token',
        'reason' => 'reason',
        'reason_code' => 'reason_code',
        'state' => 'state',
        'token' => 'token',
        'token_reference_id' => 'token_reference_id'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'channel' => 'setChannel',
        'digital_wallet_token' => 'setDigitalWalletToken',
        'reason' => 'setReason',
        'reason_code' => 'setReasonCode',
        'state' => 'setState',
        'token' => 'setToken',
        'token_reference_id' => 'setTokenReferenceId'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'channel' => 'getChannel',
        'digital_wallet_token' => 'getDigitalWalletToken',
        'reason' => 'getReason',
        'reason_code' => 'getReasonCode',
        'state' => 'getState',
        'token' => 'getToken',
        'token_reference_id' => 'getTokenReferenceId'
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

    const CHANNEL_TOKEN_SERVICE_PROVIDER = 'TOKEN_SERVICE_PROVIDER';
    const CHANNEL_TOKEN_SERVICE_PROVIDER_API = 'TOKEN_SERVICE_PROVIDER_API';
    const CHANNEL_DIGITAL_WALLET = 'DIGITAL_WALLET';
    const CHANNEL_API = 'API';
    const CHANNEL_IVR = 'IVR';
    const CHANNEL_FRAUD = 'FRAUD';
    const CHANNEL_ADMIN = 'ADMIN';
    const CHANNEL_SYSTEM = 'SYSTEM';
    const REASON_CODE__00 = '00';
    const REASON_CODE__01 = '01';
    const REASON_CODE__02 = '02';
    const REASON_CODE__03 = '03';
    const REASON_CODE__04 = '04';
    const REASON_CODE__05 = '05';
    const REASON_CODE__06 = '06';
    const REASON_CODE__07 = '07';
    const REASON_CODE__08 = '08';
    const REASON_CODE__09 = '09';
    const REASON_CODE__10 = '10';
    const REASON_CODE__11 = '11';
    const REASON_CODE__12 = '12';
    const REASON_CODE__13 = '13';
    const REASON_CODE__14 = '14';
    const REASON_CODE__15 = '15';
    const REASON_CODE__16 = '16';
    const REASON_CODE__17 = '17';
    const REASON_CODE__18 = '18';
    const REASON_CODE__19 = '19';
    const REASON_CODE__20 = '20';
    const REASON_CODE__21 = '21';
    const REASON_CODE__22 = '22';
    const REASON_CODE__23 = '23';
    const REASON_CODE__24 = '24';
    const REASON_CODE__25 = '25';
    const REASON_CODE__26 = '26';
    const REASON_CODE__27 = '27';
    const REASON_CODE__28 = '28';
    const REASON_CODE__29 = '29';
    const REASON_CODE__30 = '30';
    const REASON_CODE__31 = '31';
    const REASON_CODE__32 = '32';
    const STATE_ACTIVE = 'ACTIVE';
    const STATE_SUSPENDED = 'SUSPENDED';
    const STATE_TERMINATED = 'TERMINATED';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getChannelAllowableValues()
    {
        return [
            self::CHANNEL_TOKEN_SERVICE_PROVIDER,
            self::CHANNEL_TOKEN_SERVICE_PROVIDER_API,
            self::CHANNEL_DIGITAL_WALLET,
            self::CHANNEL_API,
            self::CHANNEL_IVR,
            self::CHANNEL_FRAUD,
            self::CHANNEL_ADMIN,
            self::CHANNEL_SYSTEM,
        ];
    }

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getReasonCodeAllowableValues()
    {
        return [
            self::REASON_CODE__00,
            self::REASON_CODE__01,
            self::REASON_CODE__02,
            self::REASON_CODE__03,
            self::REASON_CODE__04,
            self::REASON_CODE__05,
            self::REASON_CODE__06,
            self::REASON_CODE__07,
            self::REASON_CODE__08,
            self::REASON_CODE__09,
            self::REASON_CODE__10,
            self::REASON_CODE__11,
            self::REASON_CODE__12,
            self::REASON_CODE__13,
            self::REASON_CODE__14,
            self::REASON_CODE__15,
            self::REASON_CODE__16,
            self::REASON_CODE__17,
            self::REASON_CODE__18,
            self::REASON_CODE__19,
            self::REASON_CODE__20,
            self::REASON_CODE__21,
            self::REASON_CODE__22,
            self::REASON_CODE__23,
            self::REASON_CODE__24,
            self::REASON_CODE__25,
            self::REASON_CODE__26,
            self::REASON_CODE__27,
            self::REASON_CODE__28,
            self::REASON_CODE__29,
            self::REASON_CODE__30,
            self::REASON_CODE__31,
            self::REASON_CODE__32,
        ];
    }

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getStateAllowableValues()
    {
        return [
            self::STATE_ACTIVE,
            self::STATE_SUSPENDED,
            self::STATE_TERMINATED,
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
        $this->container['channel'] = $data['channel'] ?? null;
        $this->container['digital_wallet_token'] = $data['digital_wallet_token'] ?? null;
        $this->container['reason'] = $data['reason'] ?? null;
        $this->container['reason_code'] = $data['reason_code'] ?? null;
        $this->container['state'] = $data['state'] ?? null;
        $this->container['token'] = $data['token'] ?? null;
        $this->container['token_reference_id'] = $data['token_reference_id'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        $allowedValues = $this->getChannelAllowableValues();
        if (!is_null($this->container['channel']) && !in_array($this->container['channel'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'channel', must be one of '%s'",
                $this->container['channel'],
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['digital_wallet_token'] === null) {
            $invalidProperties[] = "'digital_wallet_token' can't be null";
        }
        if (!is_null($this->container['reason']) && (mb_strlen($this->container['reason']) > 255)) {
            $invalidProperties[] = "invalid value for 'reason', the character length must be smaller than or equal to 255.";
        }

        if (!is_null($this->container['reason']) && (mb_strlen($this->container['reason']) < 0)) {
            $invalidProperties[] = "invalid value for 'reason', the character length must be bigger than or equal to 0.";
        }

        $allowedValues = $this->getReasonCodeAllowableValues();
        if (!is_null($this->container['reason_code']) && !in_array($this->container['reason_code'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'reason_code', must be one of '%s'",
                $this->container['reason_code'],
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['state'] === null) {
            $invalidProperties[] = "'state' can't be null";
        }
        $allowedValues = $this->getStateAllowableValues();
        if (!is_null($this->container['state']) && !in_array($this->container['state'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'state', must be one of '%s'",
                $this->container['state'],
                implode("', '", $allowedValues)
            );
        }

        if (!is_null($this->container['token']) && (mb_strlen($this->container['token']) > 36)) {
            $invalidProperties[] = "invalid value for 'token', the character length must be smaller than or equal to 36.";
        }

        if (!is_null($this->container['token']) && (mb_strlen($this->container['token']) < 1)) {
            $invalidProperties[] = "invalid value for 'token', the character length must be bigger than or equal to 1.";
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
     * @param string|null $channel Mechanism by which the transition was initiated.
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
     * Gets digital_wallet_token
     *
     * @return \OpenAPI\Client\Model\DigitalWalletTokenHash
     */
    public function getDigitalWalletToken()
    {
        return $this->container['digital_wallet_token'];
    }

    /**
     * Sets digital_wallet_token
     *
     * @param \OpenAPI\Client\Model\DigitalWalletTokenHash $digital_wallet_token digital_wallet_token
     *
     * @return self
     */
    public function setDigitalWalletToken($digital_wallet_token)
    {
        $this->container['digital_wallet_token'] = $digital_wallet_token;

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
     * @param string|null $reason The reason for the transition.
     *
     * @return self
     */
    public function setReason($reason)
    {
        if (!is_null($reason) && (mb_strlen($reason) > 255)) {
            throw new \InvalidArgumentException('invalid length for $reason when calling DigitalWalletTokenTransitionRequest., must be smaller than or equal to 255.');
        }
        if (!is_null($reason) && (mb_strlen($reason) < 0)) {
            throw new \InvalidArgumentException('invalid length for $reason when calling DigitalWalletTokenTransitionRequest., must be bigger than or equal to 0.');
        }

        $this->container['reason'] = $reason;

        return $this;
    }

    /**
     * Gets reason_code
     *
     * @return string|null
     */
    public function getReasonCode()
    {
        return $this->container['reason_code'];
    }

    /**
     * Sets reason_code
     *
     * @param string|null $reason_code Standard code describing the reason for the transition.  *NOTE:* This field is required if your program uses v2 of the `user_card_state_version`, which is a program-specific configuration value that is managed by Marqeta and cannot be accessed via the API. To learn more about the `user_card_state_version` program configuration, contact your Marqeta representative.  * *00:* Object activated for the first time * *01:* Requested by you * *02:* Inactivity over time * *03:* This address cannot accept mail or the addressee is unknown * *04:* Negative account balance * *05:* Account under review * *06:* Suspicious activity was identified * *07:* Activity outside the program parameters was identified * *08:* Confirmed fraud was identified * *09:* Matched with an Office of Foreign Assets Control list * *10:* Card was reported lost * *11:* Card information was cloned * *12:* Account or card information was compromised * *13:* Temporary status change while on hold/leave * *14:* Initiated by Marqeta * *15:* Initiated by issuer * *16:* Card expired * *17:* Failed KYC * *18:* Changed to `ACTIVE` because information was properly validated * *19:* Changed to `ACTIVE` because account activity was properly validated * *20:* Change occurred prior to the normalization of reason codes * *21:* Initiated by a third party, often a digital wallet provider * *22:* PIN retry limit reached * *23:* Card was reported stolen * *24:* Address issue * *25:* Name issue * *26:* SSN issue * *27:* DOB issue * *28:* Email issue * *29:* Phone issue * *30:* Account/fulfillment mismatch * *31:* Other reason
     *
     * @return self
     */
    public function setReasonCode($reason_code)
    {
        $allowedValues = $this->getReasonCodeAllowableValues();
        if (!is_null($reason_code) && !in_array($reason_code, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'reason_code', must be one of '%s'",
                    $reason_code,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['reason_code'] = $reason_code;

        return $this;
    }

    /**
     * Gets state
     *
     * @return string
     */
    public function getState()
    {
        return $this->container['state'];
    }

    /**
     * Sets state
     *
     * @param string $state Specifies the state to which the digital wallet token will transition.  The original state is `REQUESTED`. You cannot modify the state if its current value is either `REQUEST_DECLINED` or `TERMINATED`.
     *
     * @return self
     */
    public function setState($state)
    {
        $allowedValues = $this->getStateAllowableValues();
        if (!in_array($state, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'state', must be one of '%s'",
                    $state,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['state'] = $state;

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
     * @param string|null $token The unique identifier of the digital wallet token transition (not the identifier of the digital wallet token itself).  If you do not include a value for the `token` field, the system will generate one automatically. This value is necessary for use in other API calls, so we recommend that rather than let the system generate one, you use a simple string that is easy to remember. This value cannot be updated.
     *
     * @return self
     */
    public function setToken($token)
    {
        if (!is_null($token) && (mb_strlen($token) > 36)) {
            throw new \InvalidArgumentException('invalid length for $token when calling DigitalWalletTokenTransitionRequest., must be smaller than or equal to 36.');
        }
        if (!is_null($token) && (mb_strlen($token) < 1)) {
            throw new \InvalidArgumentException('invalid length for $token when calling DigitalWalletTokenTransitionRequest., must be bigger than or equal to 1.');
        }

        $this->container['token'] = $token;

        return $this;
    }

    /**
     * Gets token_reference_id
     *
     * @return string|null
     */
    public function getTokenReferenceId()
    {
        return $this->container['token_reference_id'];
    }

    /**
     * Sets token_reference_id
     *
     * @param string|null $token_reference_id The unique identifier of the digital wallet token within the card network. The `token_reference_id` is unique at the card network level.
     *
     * @return self
     */
    public function setTokenReferenceId($token_reference_id)
    {
        $this->container['token_reference_id'] = $token_reference_id;

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


