<?php
/**
 * DigitalWalletApplePayProvisionRequest
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
 * DigitalWalletApplePayProvisionRequest Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class DigitalWalletApplePayProvisionRequest implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'digital_wallet_apple_pay_provision_request';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'card_token' => 'string',
        'certificates' => 'string[]',
        'device_type' => 'string',
        'nonce' => 'string',
        'nonce_signature' => 'string',
        'provisioning_app_version' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'card_token' => null,
        'certificates' => null,
        'device_type' => null,
        'nonce' => null,
        'nonce_signature' => null,
        'provisioning_app_version' => null
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
        'card_token' => 'card_token',
        'certificates' => 'certificates',
        'device_type' => 'device_type',
        'nonce' => 'nonce',
        'nonce_signature' => 'nonce_signature',
        'provisioning_app_version' => 'provisioning_app_version'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'card_token' => 'setCardToken',
        'certificates' => 'setCertificates',
        'device_type' => 'setDeviceType',
        'nonce' => 'setNonce',
        'nonce_signature' => 'setNonceSignature',
        'provisioning_app_version' => 'setProvisioningAppVersion'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'card_token' => 'getCardToken',
        'certificates' => 'getCertificates',
        'device_type' => 'getDeviceType',
        'nonce' => 'getNonce',
        'nonce_signature' => 'getNonceSignature',
        'provisioning_app_version' => 'getProvisioningAppVersion'
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

    const DEVICE_TYPE_MOBILE_PHONE = 'MOBILE_PHONE';
    const DEVICE_TYPE_WATCH = 'WATCH';
    const DEVICE_TYPE_TABLET = 'TABLET';
    const DEVICE_TYPE_WEARABLE_DEVICE = 'WEARABLE_DEVICE';
    const DEVICE_TYPE_HOUSEHOLD_DEVICE = 'HOUSEHOLD_DEVICE';
    const DEVICE_TYPE_AUTOMOBILE_DEVICE = 'AUTOMOBILE_DEVICE';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getDeviceTypeAllowableValues()
    {
        return [
            self::DEVICE_TYPE_MOBILE_PHONE,
            self::DEVICE_TYPE_WATCH,
            self::DEVICE_TYPE_TABLET,
            self::DEVICE_TYPE_WEARABLE_DEVICE,
            self::DEVICE_TYPE_HOUSEHOLD_DEVICE,
            self::DEVICE_TYPE_AUTOMOBILE_DEVICE,
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
        $this->container['card_token'] = $data['card_token'] ?? null;
        $this->container['certificates'] = $data['certificates'] ?? null;
        $this->container['device_type'] = $data['device_type'] ?? null;
        $this->container['nonce'] = $data['nonce'] ?? null;
        $this->container['nonce_signature'] = $data['nonce_signature'] ?? null;
        $this->container['provisioning_app_version'] = $data['provisioning_app_version'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['card_token'] === null) {
            $invalidProperties[] = "'card_token' can't be null";
        }
        if ((mb_strlen($this->container['card_token']) > 36)) {
            $invalidProperties[] = "invalid value for 'card_token', the character length must be smaller than or equal to 36.";
        }

        if ((mb_strlen($this->container['card_token']) < 1)) {
            $invalidProperties[] = "invalid value for 'card_token', the character length must be bigger than or equal to 1.";
        }

        if ($this->container['certificates'] === null) {
            $invalidProperties[] = "'certificates' can't be null";
        }
        if ($this->container['device_type'] === null) {
            $invalidProperties[] = "'device_type' can't be null";
        }
        $allowedValues = $this->getDeviceTypeAllowableValues();
        if (!is_null($this->container['device_type']) && !in_array($this->container['device_type'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'device_type', must be one of '%s'",
                $this->container['device_type'],
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['nonce'] === null) {
            $invalidProperties[] = "'nonce' can't be null";
        }
        if ($this->container['nonce_signature'] === null) {
            $invalidProperties[] = "'nonce_signature' can't be null";
        }
        if ($this->container['provisioning_app_version'] === null) {
            $invalidProperties[] = "'provisioning_app_version' can't be null";
        }
        if ((mb_strlen($this->container['provisioning_app_version']) > 50)) {
            $invalidProperties[] = "invalid value for 'provisioning_app_version', the character length must be smaller than or equal to 50.";
        }

        if ((mb_strlen($this->container['provisioning_app_version']) < 1)) {
            $invalidProperties[] = "invalid value for 'provisioning_app_version', the character length must be bigger than or equal to 1.";
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
     * Gets card_token
     *
     * @return string
     */
    public function getCardToken()
    {
        return $this->container['card_token'];
    }

    /**
     * Sets card_token
     *
     * @param string $card_token Unique identifier of the card resource to use for the provisioning request.
     *
     * @return self
     */
    public function setCardToken($card_token)
    {
        if ((mb_strlen($card_token) > 36)) {
            throw new \InvalidArgumentException('invalid length for $card_token when calling DigitalWalletApplePayProvisionRequest., must be smaller than or equal to 36.');
        }
        if ((mb_strlen($card_token) < 1)) {
            throw new \InvalidArgumentException('invalid length for $card_token when calling DigitalWalletApplePayProvisionRequest., must be bigger than or equal to 1.');
        }

        $this->container['card_token'] = $card_token;

        return $this;
    }

    /**
     * Gets certificates
     *
     * @return string[]
     */
    public function getCertificates()
    {
        return $this->container['certificates'];
    }

    /**
     * Sets certificates
     *
     * @param string[] $certificates Base64-encoded leaf and sub-CA certificates provided by Apple.  The first element of the array should be the leaf certificate, followed by the sub-CA.
     *
     * @return self
     */
    public function setCertificates($certificates)
    {
        $this->container['certificates'] = $certificates;

        return $this;
    }

    /**
     * Gets device_type
     *
     * @return string
     */
    public function getDeviceType()
    {
        return $this->container['device_type'];
    }

    /**
     * Sets device_type
     *
     * @param string $device_type Type of device into which the digital wallet token will be provisioned.
     *
     * @return self
     */
    public function setDeviceType($device_type)
    {
        $allowedValues = $this->getDeviceTypeAllowableValues();
        if (!in_array($device_type, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'device_type', must be one of '%s'",
                    $device_type,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['device_type'] = $device_type;

        return $this;
    }

    /**
     * Gets nonce
     *
     * @return string
     */
    public function getNonce()
    {
        return $this->container['nonce'];
    }

    /**
     * Sets nonce
     *
     * @param string $nonce One-time-use nonce provided by Apple for security purposes.
     *
     * @return self
     */
    public function setNonce($nonce)
    {
        $this->container['nonce'] = $nonce;

        return $this;
    }

    /**
     * Gets nonce_signature
     *
     * @return string
     */
    public function getNonceSignature()
    {
        return $this->container['nonce_signature'];
    }

    /**
     * Sets nonce_signature
     *
     * @param string $nonce_signature Apple-provided signature to the nonce.
     *
     * @return self
     */
    public function setNonceSignature($nonce_signature)
    {
        $this->container['nonce_signature'] = $nonce_signature;

        return $this;
    }

    /**
     * Gets provisioning_app_version
     *
     * @return string
     */
    public function getProvisioningAppVersion()
    {
        return $this->container['provisioning_app_version'];
    }

    /**
     * Sets provisioning_app_version
     *
     * @param string $provisioning_app_version Version of the application making the provisioning request. Used for debugging and fraud prevention.
     *
     * @return self
     */
    public function setProvisioningAppVersion($provisioning_app_version)
    {
        if ((mb_strlen($provisioning_app_version) > 50)) {
            throw new \InvalidArgumentException('invalid length for $provisioning_app_version when calling DigitalWalletApplePayProvisionRequest., must be smaller than or equal to 50.');
        }
        if ((mb_strlen($provisioning_app_version) < 1)) {
            throw new \InvalidArgumentException('invalid length for $provisioning_app_version when calling DigitalWalletApplePayProvisionRequest., must be bigger than or equal to 1.');
        }

        $this->container['provisioning_app_version'] = $provisioning_app_version;

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


