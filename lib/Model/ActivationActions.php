<?php
/**
 * ActivationActions
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
 * ActivationActions Class Doc Comment
 *
 * @category Class
 * @description Defines actions to execute when the card is activated. The fields in this object are mutually exclusive.
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class ActivationActions implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'activation_actions';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'swap_digital_wallet_tokens_from_card_token' => 'string',
        'terminate_reissued_source_card' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'swap_digital_wallet_tokens_from_card_token' => null,
        'terminate_reissued_source_card' => null
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
        'swap_digital_wallet_tokens_from_card_token' => 'swap_digital_wallet_tokens_from_card_token',
        'terminate_reissued_source_card' => 'terminate_reissued_source_card'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'swap_digital_wallet_tokens_from_card_token' => 'setSwapDigitalWalletTokensFromCardToken',
        'terminate_reissued_source_card' => 'setTerminateReissuedSourceCard'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'swap_digital_wallet_tokens_from_card_token' => 'getSwapDigitalWalletTokensFromCardToken',
        'terminate_reissued_source_card' => 'getTerminateReissuedSourceCard'
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
        $this->container['swap_digital_wallet_tokens_from_card_token'] = $data['swap_digital_wallet_tokens_from_card_token'] ?? null;
        $this->container['terminate_reissued_source_card'] = $data['terminate_reissued_source_card'] ?? true;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if (!is_null($this->container['swap_digital_wallet_tokens_from_card_token']) && (mb_strlen($this->container['swap_digital_wallet_tokens_from_card_token']) > 36)) {
            $invalidProperties[] = "invalid value for 'swap_digital_wallet_tokens_from_card_token', the character length must be smaller than or equal to 36.";
        }

        if (!is_null($this->container['swap_digital_wallet_tokens_from_card_token']) && (mb_strlen($this->container['swap_digital_wallet_tokens_from_card_token']) < 1)) {
            $invalidProperties[] = "invalid value for 'swap_digital_wallet_tokens_from_card_token', the character length must be bigger than or equal to 1.";
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
     * Gets swap_digital_wallet_tokens_from_card_token
     *
     * @return string|null
     */
    public function getSwapDigitalWalletTokensFromCardToken()
    {
        return $this->container['swap_digital_wallet_tokens_from_card_token'];
    }

    /**
     * Sets swap_digital_wallet_tokens_from_card_token
     *
     * @param string|null $swap_digital_wallet_tokens_from_card_token Moves all digital wallet tokens from the specified card to the new card.  Not relevant when `reissue_pan_from_card_token` is set.  Send a `GET` request to `/cards/user/{token}` to retrieve card tokens for a particular user.
     *
     * @return self
     */
    public function setSwapDigitalWalletTokensFromCardToken($swap_digital_wallet_tokens_from_card_token)
    {
        if (!is_null($swap_digital_wallet_tokens_from_card_token) && (mb_strlen($swap_digital_wallet_tokens_from_card_token) > 36)) {
            throw new \InvalidArgumentException('invalid length for $swap_digital_wallet_tokens_from_card_token when calling ActivationActions., must be smaller than or equal to 36.');
        }
        if (!is_null($swap_digital_wallet_tokens_from_card_token) && (mb_strlen($swap_digital_wallet_tokens_from_card_token) < 1)) {
            throw new \InvalidArgumentException('invalid length for $swap_digital_wallet_tokens_from_card_token when calling ActivationActions., must be bigger than or equal to 1.');
        }

        $this->container['swap_digital_wallet_tokens_from_card_token'] = $swap_digital_wallet_tokens_from_card_token;

        return $this;
    }

    /**
     * Gets terminate_reissued_source_card
     *
     * @return bool|null
     */
    public function getTerminateReissuedSourceCard()
    {
        return $this->container['terminate_reissued_source_card'];
    }

    /**
     * Sets terminate_reissued_source_card
     *
     * @param bool|null $terminate_reissued_source_card If you are reissuing a card, the source card is terminated by default. To prevent the source card from being terminated, set this field to `false`.  Only relevant when `reissue_pan_from_card_token` is set.
     *
     * @return self
     */
    public function setTerminateReissuedSourceCard($terminate_reissued_source_card)
    {
        $this->container['terminate_reissued_source_card'] = $terminate_reissued_source_card;

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

