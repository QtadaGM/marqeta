<?php
/**
 * CardResponse
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
 * CardResponse Class Doc Comment
 *
 * @category Class
 * @description Contains information about the card used in the transaction.
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class CardResponse implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'card_response';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'activation_actions' => '\OpenAPI\Client\Model\ActivationActions',
        'barcode' => 'string',
        'bulk_issuance_token' => 'string',
        'card_product_token' => 'string',
        'chip_cvv_number' => 'string',
        'contactless_exemption_counter' => 'int',
        'contactless_exemption_total_amount' => 'float',
        'created_time' => '\DateTime',
        'cvv_number' => 'string',
        'expedite' => 'bool',
        'expiration' => 'string',
        'expiration_time' => '\DateTime',
        'fulfillment' => '\OpenAPI\Client\Model\CardFulfillmentResponse',
        'fulfillment_status' => 'string',
        'instrument_type' => 'string',
        'last_four' => 'string',
        'last_modified_time' => '\DateTime',
        'metadata' => 'array<string,string>',
        'new_pan_from_card_token' => 'string',
        'pan' => 'string',
        'pin_is_set' => 'bool',
        'reissue_pan_from_card_token' => 'string',
        'state' => 'string',
        'state_reason' => 'string',
        'token' => 'string',
        'translate_pin_from_card_token' => 'string',
        'user_token' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'activation_actions' => null,
        'barcode' => null,
        'bulk_issuance_token' => null,
        'card_product_token' => null,
        'chip_cvv_number' => null,
        'contactless_exemption_counter' => 'int32',
        'contactless_exemption_total_amount' => null,
        'created_time' => 'date-time',
        'cvv_number' => null,
        'expedite' => null,
        'expiration' => null,
        'expiration_time' => 'date-time',
        'fulfillment' => null,
        'fulfillment_status' => null,
        'instrument_type' => null,
        'last_four' => null,
        'last_modified_time' => 'date-time',
        'metadata' => null,
        'new_pan_from_card_token' => null,
        'pan' => null,
        'pin_is_set' => null,
        'reissue_pan_from_card_token' => null,
        'state' => null,
        'state_reason' => null,
        'token' => null,
        'translate_pin_from_card_token' => null,
        'user_token' => null
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
        'activation_actions' => 'activation_actions',
        'barcode' => 'barcode',
        'bulk_issuance_token' => 'bulk_issuance_token',
        'card_product_token' => 'card_product_token',
        'chip_cvv_number' => 'chip_cvv_number',
        'contactless_exemption_counter' => 'contactless_exemption_counter',
        'contactless_exemption_total_amount' => 'contactless_exemption_total_amount',
        'created_time' => 'created_time',
        'cvv_number' => 'cvv_number',
        'expedite' => 'expedite',
        'expiration' => 'expiration',
        'expiration_time' => 'expiration_time',
        'fulfillment' => 'fulfillment',
        'fulfillment_status' => 'fulfillment_status',
        'instrument_type' => 'instrument_type',
        'last_four' => 'last_four',
        'last_modified_time' => 'last_modified_time',
        'metadata' => 'metadata',
        'new_pan_from_card_token' => 'new_pan_from_card_token',
        'pan' => 'pan',
        'pin_is_set' => 'pin_is_set',
        'reissue_pan_from_card_token' => 'reissue_pan_from_card_token',
        'state' => 'state',
        'state_reason' => 'state_reason',
        'token' => 'token',
        'translate_pin_from_card_token' => 'translate_pin_from_card_token',
        'user_token' => 'user_token'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'activation_actions' => 'setActivationActions',
        'barcode' => 'setBarcode',
        'bulk_issuance_token' => 'setBulkIssuanceToken',
        'card_product_token' => 'setCardProductToken',
        'chip_cvv_number' => 'setChipCvvNumber',
        'contactless_exemption_counter' => 'setContactlessExemptionCounter',
        'contactless_exemption_total_amount' => 'setContactlessExemptionTotalAmount',
        'created_time' => 'setCreatedTime',
        'cvv_number' => 'setCvvNumber',
        'expedite' => 'setExpedite',
        'expiration' => 'setExpiration',
        'expiration_time' => 'setExpirationTime',
        'fulfillment' => 'setFulfillment',
        'fulfillment_status' => 'setFulfillmentStatus',
        'instrument_type' => 'setInstrumentType',
        'last_four' => 'setLastFour',
        'last_modified_time' => 'setLastModifiedTime',
        'metadata' => 'setMetadata',
        'new_pan_from_card_token' => 'setNewPanFromCardToken',
        'pan' => 'setPan',
        'pin_is_set' => 'setPinIsSet',
        'reissue_pan_from_card_token' => 'setReissuePanFromCardToken',
        'state' => 'setState',
        'state_reason' => 'setStateReason',
        'token' => 'setToken',
        'translate_pin_from_card_token' => 'setTranslatePinFromCardToken',
        'user_token' => 'setUserToken'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'activation_actions' => 'getActivationActions',
        'barcode' => 'getBarcode',
        'bulk_issuance_token' => 'getBulkIssuanceToken',
        'card_product_token' => 'getCardProductToken',
        'chip_cvv_number' => 'getChipCvvNumber',
        'contactless_exemption_counter' => 'getContactlessExemptionCounter',
        'contactless_exemption_total_amount' => 'getContactlessExemptionTotalAmount',
        'created_time' => 'getCreatedTime',
        'cvv_number' => 'getCvvNumber',
        'expedite' => 'getExpedite',
        'expiration' => 'getExpiration',
        'expiration_time' => 'getExpirationTime',
        'fulfillment' => 'getFulfillment',
        'fulfillment_status' => 'getFulfillmentStatus',
        'instrument_type' => 'getInstrumentType',
        'last_four' => 'getLastFour',
        'last_modified_time' => 'getLastModifiedTime',
        'metadata' => 'getMetadata',
        'new_pan_from_card_token' => 'getNewPanFromCardToken',
        'pan' => 'getPan',
        'pin_is_set' => 'getPinIsSet',
        'reissue_pan_from_card_token' => 'getReissuePanFromCardToken',
        'state' => 'getState',
        'state_reason' => 'getStateReason',
        'token' => 'getToken',
        'translate_pin_from_card_token' => 'getTranslatePinFromCardToken',
        'user_token' => 'getUserToken'
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

    const FULFILLMENT_STATUS_ISSUED = 'ISSUED';
    const FULFILLMENT_STATUS_ORDERED = 'ORDERED';
    const FULFILLMENT_STATUS_REORDERED = 'REORDERED';
    const FULFILLMENT_STATUS_REJECTED = 'REJECTED';
    const FULFILLMENT_STATUS_SHIPPED = 'SHIPPED';
    const FULFILLMENT_STATUS_DELIVERED = 'DELIVERED';
    const FULFILLMENT_STATUS_DIGITALLY_PRESENTED = 'DIGITALLY_PRESENTED';
    const INSTRUMENT_TYPE_PHYSICAL_MSR = 'PHYSICAL_MSR';
    const INSTRUMENT_TYPE_PHYSICAL_ICC = 'PHYSICAL_ICC';
    const INSTRUMENT_TYPE_PHYSICAL_CONTACTLESS = 'PHYSICAL_CONTACTLESS';
    const INSTRUMENT_TYPE_PHYSICAL_COMBO = 'PHYSICAL_COMBO';
    const INSTRUMENT_TYPE_VIRTUAL_PAN = 'VIRTUAL_PAN';
    const STATE_ACTIVE = 'ACTIVE';
    const STATE_SUSPENDED = 'SUSPENDED';
    const STATE_TERMINATED = 'TERMINATED';
    const STATE_UNSUPPORTED = 'UNSUPPORTED';
    const STATE_UNACTIVATED = 'UNACTIVATED';
    const STATE_LIMITED = 'LIMITED';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getFulfillmentStatusAllowableValues()
    {
        return [
            self::FULFILLMENT_STATUS_ISSUED,
            self::FULFILLMENT_STATUS_ORDERED,
            self::FULFILLMENT_STATUS_REORDERED,
            self::FULFILLMENT_STATUS_REJECTED,
            self::FULFILLMENT_STATUS_SHIPPED,
            self::FULFILLMENT_STATUS_DELIVERED,
            self::FULFILLMENT_STATUS_DIGITALLY_PRESENTED,
        ];
    }

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getInstrumentTypeAllowableValues()
    {
        return [
            self::INSTRUMENT_TYPE_PHYSICAL_MSR,
            self::INSTRUMENT_TYPE_PHYSICAL_ICC,
            self::INSTRUMENT_TYPE_PHYSICAL_CONTACTLESS,
            self::INSTRUMENT_TYPE_PHYSICAL_COMBO,
            self::INSTRUMENT_TYPE_VIRTUAL_PAN,
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
            self::STATE_UNSUPPORTED,
            self::STATE_UNACTIVATED,
            self::STATE_LIMITED,
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
        $this->container['activation_actions'] = $data['activation_actions'] ?? null;
        $this->container['barcode'] = $data['barcode'] ?? null;
        $this->container['bulk_issuance_token'] = $data['bulk_issuance_token'] ?? null;
        $this->container['card_product_token'] = $data['card_product_token'] ?? null;
        $this->container['chip_cvv_number'] = $data['chip_cvv_number'] ?? null;
        $this->container['contactless_exemption_counter'] = $data['contactless_exemption_counter'] ?? null;
        $this->container['contactless_exemption_total_amount'] = $data['contactless_exemption_total_amount'] ?? null;
        $this->container['created_time'] = $data['created_time'] ?? null;
        $this->container['cvv_number'] = $data['cvv_number'] ?? null;
        $this->container['expedite'] = $data['expedite'] ?? false;
        $this->container['expiration'] = $data['expiration'] ?? null;
        $this->container['expiration_time'] = $data['expiration_time'] ?? null;
        $this->container['fulfillment'] = $data['fulfillment'] ?? null;
        $this->container['fulfillment_status'] = $data['fulfillment_status'] ?? null;
        $this->container['instrument_type'] = $data['instrument_type'] ?? null;
        $this->container['last_four'] = $data['last_four'] ?? null;
        $this->container['last_modified_time'] = $data['last_modified_time'] ?? null;
        $this->container['metadata'] = $data['metadata'] ?? null;
        $this->container['new_pan_from_card_token'] = $data['new_pan_from_card_token'] ?? null;
        $this->container['pan'] = $data['pan'] ?? null;
        $this->container['pin_is_set'] = $data['pin_is_set'] ?? false;
        $this->container['reissue_pan_from_card_token'] = $data['reissue_pan_from_card_token'] ?? null;
        $this->container['state'] = $data['state'] ?? null;
        $this->container['state_reason'] = $data['state_reason'] ?? null;
        $this->container['token'] = $data['token'] ?? null;
        $this->container['translate_pin_from_card_token'] = $data['translate_pin_from_card_token'] ?? null;
        $this->container['user_token'] = $data['user_token'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['barcode'] === null) {
            $invalidProperties[] = "'barcode' can't be null";
        }
        if ($this->container['card_product_token'] === null) {
            $invalidProperties[] = "'card_product_token' can't be null";
        }
        if ($this->container['created_time'] === null) {
            $invalidProperties[] = "'created_time' can't be null";
        }
        if ($this->container['expiration'] === null) {
            $invalidProperties[] = "'expiration' can't be null";
        }
        if ($this->container['expiration_time'] === null) {
            $invalidProperties[] = "'expiration_time' can't be null";
        }
        if ($this->container['fulfillment_status'] === null) {
            $invalidProperties[] = "'fulfillment_status' can't be null";
        }
        $allowedValues = $this->getFulfillmentStatusAllowableValues();
        if (!is_null($this->container['fulfillment_status']) && !in_array($this->container['fulfillment_status'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'fulfillment_status', must be one of '%s'",
                $this->container['fulfillment_status'],
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getInstrumentTypeAllowableValues();
        if (!is_null($this->container['instrument_type']) && !in_array($this->container['instrument_type'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'instrument_type', must be one of '%s'",
                $this->container['instrument_type'],
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['last_four'] === null) {
            $invalidProperties[] = "'last_four' can't be null";
        }
        if ($this->container['last_modified_time'] === null) {
            $invalidProperties[] = "'last_modified_time' can't be null";
        }
        if ($this->container['pan'] === null) {
            $invalidProperties[] = "'pan' can't be null";
        }
        if ($this->container['pin_is_set'] === null) {
            $invalidProperties[] = "'pin_is_set' can't be null";
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

        if ($this->container['state_reason'] === null) {
            $invalidProperties[] = "'state_reason' can't be null";
        }
        if ($this->container['token'] === null) {
            $invalidProperties[] = "'token' can't be null";
        }
        if ($this->container['user_token'] === null) {
            $invalidProperties[] = "'user_token' can't be null";
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
     * Gets activation_actions
     *
     * @return \OpenAPI\Client\Model\ActivationActions|null
     */
    public function getActivationActions()
    {
        return $this->container['activation_actions'];
    }

    /**
     * Sets activation_actions
     *
     * @param \OpenAPI\Client\Model\ActivationActions|null $activation_actions activation_actions
     *
     * @return self
     */
    public function setActivationActions($activation_actions)
    {
        $this->container['activation_actions'] = $activation_actions;

        return $this;
    }

    /**
     * Gets barcode
     *
     * @return string
     */
    public function getBarcode()
    {
        return $this->container['barcode'];
    }

    /**
     * Sets barcode
     *
     * @param string $barcode Barcode printed on the card, expressed as numerals.
     *
     * @return self
     */
    public function setBarcode($barcode)
    {
        $this->container['barcode'] = $barcode;

        return $this;
    }

    /**
     * Gets bulk_issuance_token
     *
     * @return string|null
     */
    public function getBulkIssuanceToken()
    {
        return $this->container['bulk_issuance_token'];
    }

    /**
     * Sets bulk_issuance_token
     *
     * @param string|null $bulk_issuance_token Unique identifier of the bulk card order.
     *
     * @return self
     */
    public function setBulkIssuanceToken($bulk_issuance_token)
    {
        $this->container['bulk_issuance_token'] = $bulk_issuance_token;

        return $this;
    }

    /**
     * Gets card_product_token
     *
     * @return string
     */
    public function getCardProductToken()
    {
        return $this->container['card_product_token'];
    }

    /**
     * Sets card_product_token
     *
     * @param string $card_product_token Unique identifier of the card product.
     *
     * @return self
     */
    public function setCardProductToken($card_product_token)
    {
        $this->container['card_product_token'] = $card_product_token;

        return $this;
    }

    /**
     * Gets chip_cvv_number
     *
     * @return string|null
     */
    public function getChipCvvNumber()
    {
        return $this->container['chip_cvv_number'];
    }

    /**
     * Sets chip_cvv_number
     *
     * @param string|null $chip_cvv_number Three-digit card verification value (ICVV) stored on the chip of the card.
     *
     * @return self
     */
    public function setChipCvvNumber($chip_cvv_number)
    {
        $this->container['chip_cvv_number'] = $chip_cvv_number;

        return $this;
    }

    /**
     * Gets contactless_exemption_counter
     *
     * @return int|null
     */
    public function getContactlessExemptionCounter()
    {
        return $this->container['contactless_exemption_counter'];
    }

    /**
     * Sets contactless_exemption_counter
     *
     * @param int|null $contactless_exemption_counter Running count of the contactless transactions successfully completed since the last strong customer authentication (SCA) challenge was issued. You can limit the number of contactless transactions that can be performed without issuing an SCA challenge at the card product level.  For more information about strong customer authentication, see <</core-api/card-products, Card Products>>.
     *
     * @return self
     */
    public function setContactlessExemptionCounter($contactless_exemption_counter)
    {
        $this->container['contactless_exemption_counter'] = $contactless_exemption_counter;

        return $this;
    }

    /**
     * Gets contactless_exemption_total_amount
     *
     * @return float|null
     */
    public function getContactlessExemptionTotalAmount()
    {
        return $this->container['contactless_exemption_total_amount'];
    }

    /**
     * Sets contactless_exemption_total_amount
     *
     * @param float|null $contactless_exemption_total_amount Running total of the money spent in contactless transactions successfully completed since the last strong customer authentication (SCA) challenge was issued. You can limit the total amount that can be spent in contactless transactions without issuing an SCA challenge at the card product level.  For more information about strong customer authentication, see <</core-api/card-products, Card Products>>.
     *
     * @return self
     */
    public function setContactlessExemptionTotalAmount($contactless_exemption_total_amount)
    {
        $this->container['contactless_exemption_total_amount'] = $contactless_exemption_total_amount;

        return $this;
    }

    /**
     * Gets created_time
     *
     * @return \DateTime
     */
    public function getCreatedTime()
    {
        return $this->container['created_time'];
    }

    /**
     * Sets created_time
     *
     * @param \DateTime $created_time Date and time when the resource was created, in UTC.
     *
     * @return self
     */
    public function setCreatedTime($created_time)
    {
        $this->container['created_time'] = $created_time;

        return $this;
    }

    /**
     * Gets cvv_number
     *
     * @return string|null
     */
    public function getCvvNumber()
    {
        return $this->container['cvv_number'];
    }

    /**
     * Sets cvv_number
     *
     * @param string|null $cvv_number Three-digit card verification value (CVV2 or CVC2) printed on the card.
     *
     * @return self
     */
    public function setCvvNumber($cvv_number)
    {
        $this->container['cvv_number'] = $cvv_number;

        return $this;
    }

    /**
     * Gets expedite
     *
     * @return bool|null
     */
    public function getExpedite()
    {
        return $this->container['expedite'];
    }

    /**
     * Sets expedite
     *
     * @param bool|null $expedite A value of `true` indicates that you requested expedited processing of the card from your card fulfillment provider.
     *
     * @return self
     */
    public function setExpedite($expedite)
    {
        $this->container['expedite'] = $expedite;

        return $this;
    }

    /**
     * Gets expiration
     *
     * @return string
     */
    public function getExpiration()
    {
        return $this->container['expiration'];
    }

    /**
     * Sets expiration
     *
     * @param string $expiration Expiration date in `MMyy` format.
     *
     * @return self
     */
    public function setExpiration($expiration)
    {
        $this->container['expiration'] = $expiration;

        return $this;
    }

    /**
     * Gets expiration_time
     *
     * @return \DateTime
     */
    public function getExpirationTime()
    {
        return $this->container['expiration_time'];
    }

    /**
     * Sets expiration_time
     *
     * @param \DateTime $expiration_time Expiration date and time, in UTC.
     *
     * @return self
     */
    public function setExpirationTime($expiration_time)
    {
        $this->container['expiration_time'] = $expiration_time;

        return $this;
    }

    /**
     * Gets fulfillment
     *
     * @return \OpenAPI\Client\Model\CardFulfillmentResponse|null
     */
    public function getFulfillment()
    {
        return $this->container['fulfillment'];
    }

    /**
     * Sets fulfillment
     *
     * @param \OpenAPI\Client\Model\CardFulfillmentResponse|null $fulfillment fulfillment
     *
     * @return self
     */
    public function setFulfillment($fulfillment)
    {
        $this->container['fulfillment'] = $fulfillment;

        return $this;
    }

    /**
     * Gets fulfillment_status
     *
     * @return string
     */
    public function getFulfillmentStatus()
    {
        return $this->container['fulfillment_status'];
    }

    /**
     * Sets fulfillment_status
     *
     * @param string $fulfillment_status Card fulfillment status:  * *ISSUED:* Initial state of all newly created/issued cards. * *ORDERED:* Card ordered through the card fulfillment provider. * *REORDERED:* Card reordered through the card fulfillment provider. * *REJECTED:* Card rejected by the card fulfillment provider. * *SHIPPED:* Card shipped by the card fulfillment provider. * *DELIVERED:* Card delivered by the card fulfillment provider. * *DIGITALLY_PRESENTED:* Card digitally presented using the `/cards/{token}/showpan` endpoint; does not affect the delivery of physical cards.
     *
     * @return self
     */
    public function setFulfillmentStatus($fulfillment_status)
    {
        $allowedValues = $this->getFulfillmentStatusAllowableValues();
        if (!in_array($fulfillment_status, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'fulfillment_status', must be one of '%s'",
                    $fulfillment_status,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['fulfillment_status'] = $fulfillment_status;

        return $this;
    }

    /**
     * Gets instrument_type
     *
     * @return string|null
     */
    public function getInstrumentType()
    {
        return $this->container['instrument_type'];
    }

    /**
     * Sets instrument_type
     *
     * @param string|null $instrument_type Instrument type of the card:  * *PHYSICAL_MSR:* A physical card with a magnetic stripe. This is the default physical card type. * *PHYSICAL_ICC:* A physical card with an integrated circuit, or \"chip.\" * *PHYSICAL_CONTACTLESS:* A physical card that uses radio frequency identification (RFID) or near-field communication (NFC) to enable payment over a secure radio interface. * *PHYSICAL_COMBO:* A physical card with a chip that also supports contactless payments. * *VIRTUAL_PAN:* A virtual card with a primary account number (PAN).
     *
     * @return self
     */
    public function setInstrumentType($instrument_type)
    {
        $allowedValues = $this->getInstrumentTypeAllowableValues();
        if (!is_null($instrument_type) && !in_array($instrument_type, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'instrument_type', must be one of '%s'",
                    $instrument_type,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['instrument_type'] = $instrument_type;

        return $this;
    }

    /**
     * Gets last_four
     *
     * @return string
     */
    public function getLastFour()
    {
        return $this->container['last_four'];
    }

    /**
     * Sets last_four
     *
     * @param string $last_four Last four digits of the card primary account number (PAN).
     *
     * @return self
     */
    public function setLastFour($last_four)
    {
        $this->container['last_four'] = $last_four;

        return $this;
    }

    /**
     * Gets last_modified_time
     *
     * @return \DateTime
     */
    public function getLastModifiedTime()
    {
        return $this->container['last_modified_time'];
    }

    /**
     * Sets last_modified_time
     *
     * @param \DateTime $last_modified_time Date and time when the resource was last modified, in UTC.
     *
     * @return self
     */
    public function setLastModifiedTime($last_modified_time)
    {
        $this->container['last_modified_time'] = $last_modified_time;

        return $this;
    }

    /**
     * Gets metadata
     *
     * @return array<string,string>|null
     */
    public function getMetadata()
    {
        return $this->container['metadata'];
    }

    /**
     * Sets metadata
     *
     * @param array<string,string>|null $metadata Associates customer-provided metadata with the card.
     *
     * @return self
     */
    public function setMetadata($metadata)
    {
        $this->container['metadata'] = $metadata;

        return $this;
    }

    /**
     * Gets new_pan_from_card_token
     *
     * @return string|null
     */
    public function getNewPanFromCardToken()
    {
        return $this->container['new_pan_from_card_token'];
    }

    /**
     * Sets new_pan_from_card_token
     *
     * @param string|null $new_pan_from_card_token Reissues the specified card (known as the \"source\" card) with a new primary account number (PAN).
     *
     * @return self
     */
    public function setNewPanFromCardToken($new_pan_from_card_token)
    {
        $this->container['new_pan_from_card_token'] = $new_pan_from_card_token;

        return $this;
    }

    /**
     * Gets pan
     *
     * @return string
     */
    public function getPan()
    {
        return $this->container['pan'];
    }

    /**
     * Sets pan
     *
     * @param string $pan Primary account number (PAN) of the card.
     *
     * @return self
     */
    public function setPan($pan)
    {
        $this->container['pan'] = $pan;

        return $this;
    }

    /**
     * Gets pin_is_set
     *
     * @return bool
     */
    public function getPinIsSet()
    {
        return $this->container['pin_is_set'];
    }

    /**
     * Sets pin_is_set
     *
     * @param bool $pin_is_set Specifies if the personal identification number (PIN) has been set for the card.
     *
     * @return self
     */
    public function setPinIsSet($pin_is_set)
    {
        $this->container['pin_is_set'] = $pin_is_set;

        return $this;
    }

    /**
     * Gets reissue_pan_from_card_token
     *
     * @return string|null
     */
    public function getReissuePanFromCardToken()
    {
        return $this->container['reissue_pan_from_card_token'];
    }

    /**
     * Sets reissue_pan_from_card_token
     *
     * @param string|null $reissue_pan_from_card_token Reissues the specified card (known as the \"source\" card).
     *
     * @return self
     */
    public function setReissuePanFromCardToken($reissue_pan_from_card_token)
    {
        $this->container['reissue_pan_from_card_token'] = $reissue_pan_from_card_token;

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
     * @param string $state Indicates the state of the card.
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
     * Gets state_reason
     *
     * @return string
     */
    public function getStateReason()
    {
        return $this->container['state_reason'];
    }

    /**
     * Sets state_reason
     *
     * @param string $state_reason Descriptive reason for why the card is in its current state. For example, \"Card activated by cardholder\".
     *
     * @return self
     */
    public function setStateReason($state_reason)
    {
        $this->container['state_reason'] = $state_reason;

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
     * @param string $token Unique identifier of the card.
     *
     * @return self
     */
    public function setToken($token)
    {
        $this->container['token'] = $token;

        return $this;
    }

    /**
     * Gets translate_pin_from_card_token
     *
     * @return string|null
     */
    public function getTranslatePinFromCardToken()
    {
        return $this->container['translate_pin_from_card_token'];
    }

    /**
     * Sets translate_pin_from_card_token
     *
     * @param string|null $translate_pin_from_card_token Copies the personal identification number (PIN) from the specified source card to the newly created card.
     *
     * @return self
     */
    public function setTranslatePinFromCardToken($translate_pin_from_card_token)
    {
        $this->container['translate_pin_from_card_token'] = $translate_pin_from_card_token;

        return $this;
    }

    /**
     * Gets user_token
     *
     * @return string
     */
    public function getUserToken()
    {
        return $this->container['user_token'];
    }

    /**
     * Sets user_token
     *
     * @param string $user_token Unique identifier of the cardholder.
     *
     * @return self
     */
    public function setUserToken($user_token)
    {
        $this->container['user_token'] = $user_token;

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


