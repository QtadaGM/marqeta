<?php
/**
 * CardProductFulfillment
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
 * CardProductFulfillment Class Doc Comment
 *
 * @category Class
 * @description Determines physical characteristics of a card, along with its bulk shipment information.
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class CardProductFulfillment implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'card_product_fulfillment';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'all_zero_card_security_code' => 'bool',
        'allow_card_creation' => 'bool',
        'bin_prefix' => 'string',
        'bulk_ship' => 'bool',
        'card_personalization' => '\OpenAPI\Client\Model\CardPersonalization',
        'enable_offline_pin' => 'bool',
        'fulfillment_provider' => 'string',
        'package_id' => 'string',
        'pan_length' => 'string',
        'payment_instrument' => 'string',
        'shipping' => '\OpenAPI\Client\Model\Shipping',
        'uppercase_name_lines' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'all_zero_card_security_code' => null,
        'allow_card_creation' => null,
        'bin_prefix' => null,
        'bulk_ship' => null,
        'card_personalization' => null,
        'enable_offline_pin' => null,
        'fulfillment_provider' => null,
        'package_id' => null,
        'pan_length' => null,
        'payment_instrument' => null,
        'shipping' => null,
        'uppercase_name_lines' => null
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
        'all_zero_card_security_code' => 'all_zero_card_security_code',
        'allow_card_creation' => 'allow_card_creation',
        'bin_prefix' => 'bin_prefix',
        'bulk_ship' => 'bulk_ship',
        'card_personalization' => 'card_personalization',
        'enable_offline_pin' => 'enable_offline_pin',
        'fulfillment_provider' => 'fulfillment_provider',
        'package_id' => 'package_id',
        'pan_length' => 'pan_length',
        'payment_instrument' => 'payment_instrument',
        'shipping' => 'shipping',
        'uppercase_name_lines' => 'uppercase_name_lines'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'all_zero_card_security_code' => 'setAllZeroCardSecurityCode',
        'allow_card_creation' => 'setAllowCardCreation',
        'bin_prefix' => 'setBinPrefix',
        'bulk_ship' => 'setBulkShip',
        'card_personalization' => 'setCardPersonalization',
        'enable_offline_pin' => 'setEnableOfflinePin',
        'fulfillment_provider' => 'setFulfillmentProvider',
        'package_id' => 'setPackageId',
        'pan_length' => 'setPanLength',
        'payment_instrument' => 'setPaymentInstrument',
        'shipping' => 'setShipping',
        'uppercase_name_lines' => 'setUppercaseNameLines'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'all_zero_card_security_code' => 'getAllZeroCardSecurityCode',
        'allow_card_creation' => 'getAllowCardCreation',
        'bin_prefix' => 'getBinPrefix',
        'bulk_ship' => 'getBulkShip',
        'card_personalization' => 'getCardPersonalization',
        'enable_offline_pin' => 'getEnableOfflinePin',
        'fulfillment_provider' => 'getFulfillmentProvider',
        'package_id' => 'getPackageId',
        'pan_length' => 'getPanLength',
        'payment_instrument' => 'getPaymentInstrument',
        'shipping' => 'getShipping',
        'uppercase_name_lines' => 'getUppercaseNameLines'
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

    const FULFILLMENT_PROVIDER_PERFECTPLASTIC = 'PERFECTPLASTIC';
    const FULFILLMENT_PROVIDER_ARROWEYE = 'ARROWEYE';
    const FULFILLMENT_PROVIDER_IDEMIA = 'IDEMIA';
    const FULFILLMENT_PROVIDER_IDEMIA_UK = 'IDEMIA_UK';
    const FULFILLMENT_PROVIDER_IDEMIA_FR = 'IDEMIA_FR';
    const FULFILLMENT_PROVIDER_IDEMIA_CZ = 'IDEMIA_CZ';
    const FULFILLMENT_PROVIDER_IDEMIA_APAC = 'IDEMIA_APAC';
    const FULFILLMENT_PROVIDER_IDEMIA_PL = 'IDEMIA_PL';
    const FULFILLMENT_PROVIDER_IDEMIA_AU = 'IDEMIA_AU';
    const FULFILLMENT_PROVIDER_IDEMIA_LA = 'IDEMIA_LA';
    const FULFILLMENT_PROVIDER_GEMALTO = 'GEMALTO';
    const FULFILLMENT_PROVIDER_NITECREST = 'NITECREST';
    const FULFILLMENT_PROVIDER_OBERTHUR = 'OBERTHUR';
    const FULFILLMENT_PROVIDER_ALLPAY = 'ALLPAY';
    const PAYMENT_INSTRUMENT_PHYSICAL_MSR = 'PHYSICAL_MSR';
    const PAYMENT_INSTRUMENT_PHYSICAL_ICC = 'PHYSICAL_ICC';
    const PAYMENT_INSTRUMENT_PHYSICAL_CONTACTLESS = 'PHYSICAL_CONTACTLESS';
    const PAYMENT_INSTRUMENT_PHYSICAL_COMBO = 'PHYSICAL_COMBO';
    const PAYMENT_INSTRUMENT_VIRTUAL_PAN = 'VIRTUAL_PAN';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getFulfillmentProviderAllowableValues()
    {
        return [
            self::FULFILLMENT_PROVIDER_PERFECTPLASTIC,
            self::FULFILLMENT_PROVIDER_ARROWEYE,
            self::FULFILLMENT_PROVIDER_IDEMIA,
            self::FULFILLMENT_PROVIDER_IDEMIA_UK,
            self::FULFILLMENT_PROVIDER_IDEMIA_FR,
            self::FULFILLMENT_PROVIDER_IDEMIA_CZ,
            self::FULFILLMENT_PROVIDER_IDEMIA_APAC,
            self::FULFILLMENT_PROVIDER_IDEMIA_PL,
            self::FULFILLMENT_PROVIDER_IDEMIA_AU,
            self::FULFILLMENT_PROVIDER_IDEMIA_LA,
            self::FULFILLMENT_PROVIDER_GEMALTO,
            self::FULFILLMENT_PROVIDER_NITECREST,
            self::FULFILLMENT_PROVIDER_OBERTHUR,
            self::FULFILLMENT_PROVIDER_ALLPAY,
        ];
    }

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getPaymentInstrumentAllowableValues()
    {
        return [
            self::PAYMENT_INSTRUMENT_PHYSICAL_MSR,
            self::PAYMENT_INSTRUMENT_PHYSICAL_ICC,
            self::PAYMENT_INSTRUMENT_PHYSICAL_CONTACTLESS,
            self::PAYMENT_INSTRUMENT_PHYSICAL_COMBO,
            self::PAYMENT_INSTRUMENT_VIRTUAL_PAN,
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
        $this->container['all_zero_card_security_code'] = $data['all_zero_card_security_code'] ?? false;
        $this->container['allow_card_creation'] = $data['allow_card_creation'] ?? true;
        $this->container['bin_prefix'] = $data['bin_prefix'] ?? null;
        $this->container['bulk_ship'] = $data['bulk_ship'] ?? false;
        $this->container['card_personalization'] = $data['card_personalization'] ?? null;
        $this->container['enable_offline_pin'] = $data['enable_offline_pin'] ?? false;
        $this->container['fulfillment_provider'] = $data['fulfillment_provider'] ?? 'PERFECTPLASTIC';
        $this->container['package_id'] = $data['package_id'] ?? '0';
        $this->container['pan_length'] = $data['pan_length'] ?? '16';
        $this->container['payment_instrument'] = $data['payment_instrument'] ?? 'PHYSICAL_MSR';
        $this->container['shipping'] = $data['shipping'] ?? null;
        $this->container['uppercase_name_lines'] = $data['uppercase_name_lines'] ?? true;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['card_personalization'] === null) {
            $invalidProperties[] = "'card_personalization' can't be null";
        }
        $allowedValues = $this->getFulfillmentProviderAllowableValues();
        if (!is_null($this->container['fulfillment_provider']) && !in_array($this->container['fulfillment_provider'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'fulfillment_provider', must be one of '%s'",
                $this->container['fulfillment_provider'],
                implode("', '", $allowedValues)
            );
        }

        if (!is_null($this->container['package_id']) && (mb_strlen($this->container['package_id']) > 50)) {
            $invalidProperties[] = "invalid value for 'package_id', the character length must be smaller than or equal to 50.";
        }

        if (!is_null($this->container['package_id']) && (mb_strlen($this->container['package_id']) < 1)) {
            $invalidProperties[] = "invalid value for 'package_id', the character length must be bigger than or equal to 1.";
        }

        $allowedValues = $this->getPaymentInstrumentAllowableValues();
        if (!is_null($this->container['payment_instrument']) && !in_array($this->container['payment_instrument'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'payment_instrument', must be one of '%s'",
                $this->container['payment_instrument'],
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
     * Gets all_zero_card_security_code
     *
     * @return bool|null
     */
    public function getAllZeroCardSecurityCode()
    {
        return $this->container['all_zero_card_security_code'];
    }

    /**
     * Sets all_zero_card_security_code
     *
     * @param bool|null $all_zero_card_security_code If `true`, an all zero code (000) is allowed as a valid value in an authorization request.
     *
     * @return self
     */
    public function setAllZeroCardSecurityCode($all_zero_card_security_code)
    {
        $this->container['all_zero_card_security_code'] = $all_zero_card_security_code;

        return $this;
    }

    /**
     * Gets allow_card_creation
     *
     * @return bool|null
     */
    public function getAllowCardCreation()
    {
        return $this->container['allow_card_creation'];
    }

    /**
     * Sets allow_card_creation
     *
     * @param bool|null $allow_card_creation Controls the ability to create cards from this card product; `true` allows and `false` disallows the creation of cards.  *NOTE:* The card product's `active` field has no effect on card creation or the behavior of this field.
     *
     * @return self
     */
    public function setAllowCardCreation($allow_card_creation)
    {
        $this->container['allow_card_creation'] = $allow_card_creation;

        return $this;
    }

    /**
     * Gets bin_prefix
     *
     * @return string|null
     */
    public function getBinPrefix()
    {
        return $this->container['bin_prefix'];
    }

    /**
     * Sets bin_prefix
     *
     * @param string|null $bin_prefix Prefix of the bank identification number.
     *
     * @return self
     */
    public function setBinPrefix($bin_prefix)
    {
        $this->container['bin_prefix'] = $bin_prefix;

        return $this;
    }

    /**
     * Gets bulk_ship
     *
     * @return bool|null
     */
    public function getBulkShip()
    {
        return $this->container['bulk_ship'];
    }

    /**
     * Sets bulk_ship
     *
     * @param bool|null $bulk_ship Enables bulk ordering of cards of this card product type using the `/bulkissuances` endpoint.
     *
     * @return self
     */
    public function setBulkShip($bulk_ship)
    {
        $this->container['bulk_ship'] = $bulk_ship;

        return $this;
    }

    /**
     * Gets card_personalization
     *
     * @return \OpenAPI\Client\Model\CardPersonalization
     */
    public function getCardPersonalization()
    {
        return $this->container['card_personalization'];
    }

    /**
     * Sets card_personalization
     *
     * @param \OpenAPI\Client\Model\CardPersonalization $card_personalization card_personalization
     *
     * @return self
     */
    public function setCardPersonalization($card_personalization)
    {
        $this->container['card_personalization'] = $card_personalization;

        return $this;
    }

    /**
     * Gets enable_offline_pin
     *
     * @return bool|null
     */
    public function getEnableOfflinePin()
    {
        return $this->container['enable_offline_pin'];
    }

    /**
     * Sets enable_offline_pin
     *
     * @param bool|null $enable_offline_pin Enables offline personal identification number (PIN) verification for Europay Mastercard and Visa (EMV, or \"chip-and-PIN\") card payments.
     *
     * @return self
     */
    public function setEnableOfflinePin($enable_offline_pin)
    {
        $this->container['enable_offline_pin'] = $enable_offline_pin;

        return $this;
    }

    /**
     * Gets fulfillment_provider
     *
     * @return string|null
     */
    public function getFulfillmentProvider()
    {
        return $this->container['fulfillment_provider'];
    }

    /**
     * Sets fulfillment_provider
     *
     * @param string|null $fulfillment_provider Specifies the fulfillment provider.  You can work with providers located in North America, Europe, South America, and the Asia-Pacific region. For more information, see <</developer-guides/managing-physical-cards#_fulfillment_providers_by_location, Fulfillment providers by location>>.  *NOTE:* Expedited processing is available for cards that are fulfilled by link:https://www.arroweye.com/[Arroweye Solutions, window=\"_blank\"], link:https://www.gi-de.com/[G+D, window=\"_blank\"], link:http://www.idemia.com[IDEMIA, window=\"_blank\"], and link:http://perfectplastic.com/[Perfect Plastic Printing, window=\"_blank\"]. You can expedite an order's processing by using the `expedite` field of the <</core-api/cards, card>> or <</core-api/bulk-card-orders, bulkissuance>> object. Contact your Marqeta representative for information regarding the cost of expedited service.
     *
     * @return self
     */
    public function setFulfillmentProvider($fulfillment_provider)
    {
        $allowedValues = $this->getFulfillmentProviderAllowableValues();
        if (!is_null($fulfillment_provider) && !in_array($fulfillment_provider, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'fulfillment_provider', must be one of '%s'",
                    $fulfillment_provider,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['fulfillment_provider'] = $fulfillment_provider;

        return $this;
    }

    /**
     * Gets package_id
     *
     * @return string|null
     */
    public function getPackageId()
    {
        return $this->container['package_id'];
    }

    /**
     * Sets package_id
     *
     * @param string|null $package_id Card fulfillment provider's package ID.
     *
     * @return self
     */
    public function setPackageId($package_id)
    {
        if (!is_null($package_id) && (mb_strlen($package_id) > 50)) {
            throw new \InvalidArgumentException('invalid length for $package_id when calling CardProductFulfillment., must be smaller than or equal to 50.');
        }
        if (!is_null($package_id) && (mb_strlen($package_id) < 1)) {
            throw new \InvalidArgumentException('invalid length for $package_id when calling CardProductFulfillment., must be bigger than or equal to 1.');
        }

        $this->container['package_id'] = $package_id;

        return $this;
    }

    /**
     * Gets pan_length
     *
     * @return string|null
     */
    public function getPanLength()
    {
        return $this->container['pan_length'];
    }

    /**
     * Sets pan_length
     *
     * @param string|null $pan_length Specifies the length of the primary account number (PAN).
     *
     * @return self
     */
    public function setPanLength($pan_length)
    {
        $this->container['pan_length'] = $pan_length;

        return $this;
    }

    /**
     * Gets payment_instrument
     *
     * @return string|null
     */
    public function getPaymentInstrument()
    {
        return $this->container['payment_instrument'];
    }

    /**
     * Sets payment_instrument
     *
     * @param string|null $payment_instrument Specifies the physical form cards of this card product type will take.
     *
     * @return self
     */
    public function setPaymentInstrument($payment_instrument)
    {
        $allowedValues = $this->getPaymentInstrumentAllowableValues();
        if (!is_null($payment_instrument) && !in_array($payment_instrument, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'payment_instrument', must be one of '%s'",
                    $payment_instrument,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['payment_instrument'] = $payment_instrument;

        return $this;
    }

    /**
     * Gets shipping
     *
     * @return \OpenAPI\Client\Model\Shipping|null
     */
    public function getShipping()
    {
        return $this->container['shipping'];
    }

    /**
     * Sets shipping
     *
     * @param \OpenAPI\Client\Model\Shipping|null $shipping shipping
     *
     * @return self
     */
    public function setShipping($shipping)
    {
        $this->container['shipping'] = $shipping;

        return $this;
    }

    /**
     * Gets uppercase_name_lines
     *
     * @return bool|null
     */
    public function getUppercaseNameLines()
    {
        return $this->container['uppercase_name_lines'];
    }

    /**
     * Sets uppercase_name_lines
     *
     * @param bool|null $uppercase_name_lines A value of `true` sets the text in the `fulfillment.card_personalization.text.name_line_1` and `name_line_2` fields to all uppercase letters. A value of `false` leaves the text in its original state.
     *
     * @return self
     */
    public function setUppercaseNameLines($uppercase_name_lines)
    {
        $this->container['uppercase_name_lines'] = $uppercase_name_lines;

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


