<?php
/**
 * TransactionCardAcceptor
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
 * TransactionCardAcceptor Class Doc Comment
 *
 * @category Class
 * @description Contains information about the merchant.
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class TransactionCardAcceptor implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'transaction_card_acceptor';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'address' => 'string',
        'city' => 'string',
        'country_code' => 'string',
        'country_of_origin' => 'string',
        'customer_service_phone' => 'string',
        'independent_sales_organization_id' => 'string',
        'mcc' => 'string',
        'mcc_groups' => 'string[]',
        'merchant_tax_id' => 'string',
        'mid' => 'string',
        'name' => 'string',
        'network_assigned_id' => 'string',
        'network_mid' => 'string',
        'payment_facilitator_id' => 'string',
        'payment_facilitator_name' => 'string',
        'phone' => 'string',
        'poi' => '\OpenAPI\Client\Model\TerminalModel',
        'postal_code' => 'string',
        'special_merchant_id' => 'string',
        'state' => 'string',
        'sub_merchant_id' => 'string',
        'transfer_service_provider_name' => 'string',
        'url' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'address' => null,
        'city' => null,
        'country_code' => null,
        'country_of_origin' => null,
        'customer_service_phone' => null,
        'independent_sales_organization_id' => null,
        'mcc' => null,
        'mcc_groups' => null,
        'merchant_tax_id' => null,
        'mid' => null,
        'name' => null,
        'network_assigned_id' => null,
        'network_mid' => null,
        'payment_facilitator_id' => null,
        'payment_facilitator_name' => null,
        'phone' => null,
        'poi' => null,
        'postal_code' => null,
        'special_merchant_id' => null,
        'state' => null,
        'sub_merchant_id' => null,
        'transfer_service_provider_name' => null,
        'url' => null
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
        'address' => 'address',
        'city' => 'city',
        'country_code' => 'country_code',
        'country_of_origin' => 'country_of_origin',
        'customer_service_phone' => 'customer_service_phone',
        'independent_sales_organization_id' => 'independent_sales_organization_id',
        'mcc' => 'mcc',
        'mcc_groups' => 'mcc_groups',
        'merchant_tax_id' => 'merchant_tax_id',
        'mid' => 'mid',
        'name' => 'name',
        'network_assigned_id' => 'network_assigned_id',
        'network_mid' => 'network_mid',
        'payment_facilitator_id' => 'payment_facilitator_id',
        'payment_facilitator_name' => 'payment_facilitator_name',
        'phone' => 'phone',
        'poi' => 'poi',
        'postal_code' => 'postal_code',
        'special_merchant_id' => 'special_merchant_id',
        'state' => 'state',
        'sub_merchant_id' => 'sub_merchant_id',
        'transfer_service_provider_name' => 'transfer_service_provider_name',
        'url' => 'url'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'address' => 'setAddress',
        'city' => 'setCity',
        'country_code' => 'setCountryCode',
        'country_of_origin' => 'setCountryOfOrigin',
        'customer_service_phone' => 'setCustomerServicePhone',
        'independent_sales_organization_id' => 'setIndependentSalesOrganizationId',
        'mcc' => 'setMcc',
        'mcc_groups' => 'setMccGroups',
        'merchant_tax_id' => 'setMerchantTaxId',
        'mid' => 'setMid',
        'name' => 'setName',
        'network_assigned_id' => 'setNetworkAssignedId',
        'network_mid' => 'setNetworkMid',
        'payment_facilitator_id' => 'setPaymentFacilitatorId',
        'payment_facilitator_name' => 'setPaymentFacilitatorName',
        'phone' => 'setPhone',
        'poi' => 'setPoi',
        'postal_code' => 'setPostalCode',
        'special_merchant_id' => 'setSpecialMerchantId',
        'state' => 'setState',
        'sub_merchant_id' => 'setSubMerchantId',
        'transfer_service_provider_name' => 'setTransferServiceProviderName',
        'url' => 'setUrl'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'address' => 'getAddress',
        'city' => 'getCity',
        'country_code' => 'getCountryCode',
        'country_of_origin' => 'getCountryOfOrigin',
        'customer_service_phone' => 'getCustomerServicePhone',
        'independent_sales_organization_id' => 'getIndependentSalesOrganizationId',
        'mcc' => 'getMcc',
        'mcc_groups' => 'getMccGroups',
        'merchant_tax_id' => 'getMerchantTaxId',
        'mid' => 'getMid',
        'name' => 'getName',
        'network_assigned_id' => 'getNetworkAssignedId',
        'network_mid' => 'getNetworkMid',
        'payment_facilitator_id' => 'getPaymentFacilitatorId',
        'payment_facilitator_name' => 'getPaymentFacilitatorName',
        'phone' => 'getPhone',
        'poi' => 'getPoi',
        'postal_code' => 'getPostalCode',
        'special_merchant_id' => 'getSpecialMerchantId',
        'state' => 'getState',
        'sub_merchant_id' => 'getSubMerchantId',
        'transfer_service_provider_name' => 'getTransferServiceProviderName',
        'url' => 'getUrl'
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
        $this->container['address'] = $data['address'] ?? null;
        $this->container['city'] = $data['city'] ?? null;
        $this->container['country_code'] = $data['country_code'] ?? null;
        $this->container['country_of_origin'] = $data['country_of_origin'] ?? null;
        $this->container['customer_service_phone'] = $data['customer_service_phone'] ?? null;
        $this->container['independent_sales_organization_id'] = $data['independent_sales_organization_id'] ?? null;
        $this->container['mcc'] = $data['mcc'] ?? null;
        $this->container['mcc_groups'] = $data['mcc_groups'] ?? null;
        $this->container['merchant_tax_id'] = $data['merchant_tax_id'] ?? null;
        $this->container['mid'] = $data['mid'] ?? null;
        $this->container['name'] = $data['name'] ?? null;
        $this->container['network_assigned_id'] = $data['network_assigned_id'] ?? null;
        $this->container['network_mid'] = $data['network_mid'] ?? null;
        $this->container['payment_facilitator_id'] = $data['payment_facilitator_id'] ?? null;
        $this->container['payment_facilitator_name'] = $data['payment_facilitator_name'] ?? null;
        $this->container['phone'] = $data['phone'] ?? null;
        $this->container['poi'] = $data['poi'] ?? null;
        $this->container['postal_code'] = $data['postal_code'] ?? null;
        $this->container['special_merchant_id'] = $data['special_merchant_id'] ?? null;
        $this->container['state'] = $data['state'] ?? null;
        $this->container['sub_merchant_id'] = $data['sub_merchant_id'] ?? null;
        $this->container['transfer_service_provider_name'] = $data['transfer_service_provider_name'] ?? null;
        $this->container['url'] = $data['url'] ?? null;
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
     * Gets address
     *
     * @return string|null
     */
    public function getAddress()
    {
        return $this->container['address'];
    }

    /**
     * Sets address
     *
     * @param string|null $address Card acceptor's address. May be returned if the request uses Transaction Model v1 of the Marqeta Core API. Not returned for Transaction Model v2 requests.
     *
     * @return self
     */
    public function setAddress($address)
    {
        $this->container['address'] = $address;

        return $this;
    }

    /**
     * Gets city
     *
     * @return string|null
     */
    public function getCity()
    {
        return $this->container['city'];
    }

    /**
     * Sets city
     *
     * @param string|null $city Card acceptor's city.
     *
     * @return self
     */
    public function setCity($city)
    {
        $this->container['city'] = $city;

        return $this;
    }

    /**
     * Gets country_code
     *
     * @return string|null
     */
    public function getCountryCode()
    {
        return $this->container['country_code'];
    }

    /**
     * Sets country_code
     *
     * @param string|null $country_code Card acceptor's country code. May be returned if the request uses Transaction Model v2 of the Marqeta Core API. Not returned for Transaction Model v1 requests.
     *
     * @return self
     */
    public function setCountryCode($country_code)
    {
        $this->container['country_code'] = $country_code;

        return $this;
    }

    /**
     * Gets country_of_origin
     *
     * @return string|null
     */
    public function getCountryOfOrigin()
    {
        return $this->container['country_of_origin'];
    }

    /**
     * Sets country_of_origin
     *
     * @param string|null $country_of_origin The merchant's country of origin.  A merchant's country of origin can be different from the country in which the merchant is located. For example, embassies are physically located in countries that are not their country of origin: a Mexican embassy might be physically located in Singapore, but the country of origin is Mexico.  This field is included when the cardholder conducts a transaction with a government-controlled merchant using a Marqeta-issued card.
     *
     * @return self
     */
    public function setCountryOfOrigin($country_of_origin)
    {
        $this->container['country_of_origin'] = $country_of_origin;

        return $this;
    }

    /**
     * Gets customer_service_phone
     *
     * @return string|null
     */
    public function getCustomerServicePhone()
    {
        return $this->container['customer_service_phone'];
    }

    /**
     * Sets customer_service_phone
     *
     * @param string|null $customer_service_phone customer_service_phone
     *
     * @return self
     */
    public function setCustomerServicePhone($customer_service_phone)
    {
        $this->container['customer_service_phone'] = $customer_service_phone;

        return $this;
    }

    /**
     * Gets independent_sales_organization_id
     *
     * @return string|null
     */
    public function getIndependentSalesOrganizationId()
    {
        return $this->container['independent_sales_organization_id'];
    }

    /**
     * Sets independent_sales_organization_id
     *
     * @param string|null $independent_sales_organization_id independent_sales_organization_id
     *
     * @return self
     */
    public function setIndependentSalesOrganizationId($independent_sales_organization_id)
    {
        $this->container['independent_sales_organization_id'] = $independent_sales_organization_id;

        return $this;
    }

    /**
     * Gets mcc
     *
     * @return string|null
     */
    public function getMcc()
    {
        return $this->container['mcc'];
    }

    /**
     * Sets mcc
     *
     * @param string|null $mcc Merchant category code (MCC).
     *
     * @return self
     */
    public function setMcc($mcc)
    {
        $this->container['mcc'] = $mcc;

        return $this;
    }

    /**
     * Gets mcc_groups
     *
     * @return string[]|null
     */
    public function getMccGroups()
    {
        return $this->container['mcc_groups'];
    }

    /**
     * Sets mcc_groups
     *
     * @param string[]|null $mcc_groups An array of `mcc_groups`.
     *
     * @return self
     */
    public function setMccGroups($mcc_groups)
    {
        $this->container['mcc_groups'] = $mcc_groups;

        return $this;
    }

    /**
     * Gets merchant_tax_id
     *
     * @return string|null
     */
    public function getMerchantTaxId()
    {
        return $this->container['merchant_tax_id'];
    }

    /**
     * Sets merchant_tax_id
     *
     * @param string|null $merchant_tax_id merchant_tax_id
     *
     * @return self
     */
    public function setMerchantTaxId($merchant_tax_id)
    {
        $this->container['merchant_tax_id'] = $merchant_tax_id;

        return $this;
    }

    /**
     * Gets mid
     *
     * @return string|null
     */
    public function getMid()
    {
        return $this->container['mid'];
    }

    /**
     * Sets mid
     *
     * @param string|null $mid The merchant identifier.
     *
     * @return self
     */
    public function setMid($mid)
    {
        $this->container['mid'] = $mid;

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
     * @param string|null $name Card acceptor's name.
     *
     * @return self
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets network_assigned_id
     *
     * @return string|null
     */
    public function getNetworkAssignedId()
    {
        return $this->container['network_assigned_id'];
    }

    /**
     * Sets network_assigned_id
     *
     * @param string|null $network_assigned_id Identifier assigned by the card network.
     *
     * @return self
     */
    public function setNetworkAssignedId($network_assigned_id)
    {
        $this->container['network_assigned_id'] = $network_assigned_id;

        return $this;
    }

    /**
     * Gets network_mid
     *
     * @return string|null
     */
    public function getNetworkMid()
    {
        return $this->container['network_mid'];
    }

    /**
     * Sets network_mid
     *
     * @param string|null $network_mid The merchant identifier on the card network.
     *
     * @return self
     */
    public function setNetworkMid($network_mid)
    {
        $this->container['network_mid'] = $network_mid;

        return $this;
    }

    /**
     * Gets payment_facilitator_id
     *
     * @return string|null
     */
    public function getPaymentFacilitatorId()
    {
        return $this->container['payment_facilitator_id'];
    }

    /**
     * Sets payment_facilitator_id
     *
     * @param string|null $payment_facilitator_id payment_facilitator_id
     *
     * @return self
     */
    public function setPaymentFacilitatorId($payment_facilitator_id)
    {
        $this->container['payment_facilitator_id'] = $payment_facilitator_id;

        return $this;
    }

    /**
     * Gets payment_facilitator_name
     *
     * @return string|null
     */
    public function getPaymentFacilitatorName()
    {
        return $this->container['payment_facilitator_name'];
    }

    /**
     * Sets payment_facilitator_name
     *
     * @param string|null $payment_facilitator_name The name of the payment facilitator, including the sub-merchant identifier, of an original credit transaction. This field is returned when a payment facilitator participates in the transaction.
     *
     * @return self
     */
    public function setPaymentFacilitatorName($payment_facilitator_name)
    {
        $this->container['payment_facilitator_name'] = $payment_facilitator_name;

        return $this;
    }

    /**
     * Gets phone
     *
     * @return string|null
     */
    public function getPhone()
    {
        return $this->container['phone'];
    }

    /**
     * Sets phone
     *
     * @param string|null $phone phone
     *
     * @return self
     */
    public function setPhone($phone)
    {
        $this->container['phone'] = $phone;

        return $this;
    }

    /**
     * Gets poi
     *
     * @return \OpenAPI\Client\Model\TerminalModel|null
     */
    public function getPoi()
    {
        return $this->container['poi'];
    }

    /**
     * Sets poi
     *
     * @param \OpenAPI\Client\Model\TerminalModel|null $poi poi
     *
     * @return self
     */
    public function setPoi($poi)
    {
        $this->container['poi'] = $poi;

        return $this;
    }

    /**
     * Gets postal_code
     *
     * @return string|null
     */
    public function getPostalCode()
    {
        return $this->container['postal_code'];
    }

    /**
     * Sets postal_code
     *
     * @param string|null $postal_code Card acceptor's postal code.
     *
     * @return self
     */
    public function setPostalCode($postal_code)
    {
        $this->container['postal_code'] = $postal_code;

        return $this;
    }

    /**
     * Gets special_merchant_id
     *
     * @return string|null
     */
    public function getSpecialMerchantId()
    {
        return $this->container['special_merchant_id'];
    }

    /**
     * Sets special_merchant_id
     *
     * @param string|null $special_merchant_id special_merchant_id
     *
     * @return self
     */
    public function setSpecialMerchantId($special_merchant_id)
    {
        $this->container['special_merchant_id'] = $special_merchant_id;

        return $this;
    }

    /**
     * Gets state
     *
     * @return string|null
     */
    public function getState()
    {
        return $this->container['state'];
    }

    /**
     * Sets state
     *
     * @param string|null $state Two-character state, province, or territorial abbreviation.  For a complete list of valid state and province abbreviations, see <</core-api/kyc-verification#_valid_state_provincial_and_territorial_abbreviations, Valid state, provincial, and territorial abbreviations>>.  *Note*: Non-US merchants may return more than 2 char for this field.
     *
     * @return self
     */
    public function setState($state)
    {
        $this->container['state'] = $state;

        return $this;
    }

    /**
     * Gets sub_merchant_id
     *
     * @return string|null
     */
    public function getSubMerchantId()
    {
        return $this->container['sub_merchant_id'];
    }

    /**
     * Sets sub_merchant_id
     *
     * @param string|null $sub_merchant_id sub_merchant_id
     *
     * @return self
     */
    public function setSubMerchantId($sub_merchant_id)
    {
        $this->container['sub_merchant_id'] = $sub_merchant_id;

        return $this;
    }

    /**
     * Gets transfer_service_provider_name
     *
     * @return string|null
     */
    public function getTransferServiceProviderName()
    {
        return $this->container['transfer_service_provider_name'];
    }

    /**
     * Sets transfer_service_provider_name
     *
     * @param string|null $transfer_service_provider_name The name of the transfer service provider of a money transfer original credit transaction. This field is included when a transfer service provider participates in the transaction.
     *
     * @return self
     */
    public function setTransferServiceProviderName($transfer_service_provider_name)
    {
        $this->container['transfer_service_provider_name'] = $transfer_service_provider_name;

        return $this;
    }

    /**
     * Gets url
     *
     * @return string|null
     */
    public function getUrl()
    {
        return $this->container['url'];
    }

    /**
     * Sets url
     *
     * @param string|null $url url
     *
     * @return self
     */
    public function setUrl($url)
    {
        $this->container['url'] = $url;

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


