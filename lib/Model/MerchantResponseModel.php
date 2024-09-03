<?php
/**
 * MerchantResponseModel
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
 * MerchantResponseModel Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class MerchantResponseModel implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'merchant_response_model';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'active' => 'bool',
        'address1' => 'string',
        'address2' => 'string',
        'city' => 'string',
        'contact' => 'string',
        'contact_email' => 'string',
        'country' => 'string',
        'created_time' => '\DateTime',
        'last_modified_time' => '\DateTime',
        'latitude' => 'float',
        'longitude' => 'float',
        'name' => 'string',
        'partial_auth_flag' => 'bool',
        'phone' => 'string',
        'province' => 'string',
        'state' => 'string',
        'token' => 'string',
        'zip' => 'string'
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
        'address1' => null,
        'address2' => null,
        'city' => null,
        'contact' => null,
        'contact_email' => null,
        'country' => null,
        'created_time' => 'date-time',
        'last_modified_time' => 'date-time',
        'latitude' => 'float',
        'longitude' => 'float',
        'name' => null,
        'partial_auth_flag' => null,
        'phone' => null,
        'province' => null,
        'state' => null,
        'token' => null,
        'zip' => null
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
        'address1' => 'address1',
        'address2' => 'address2',
        'city' => 'city',
        'contact' => 'contact',
        'contact_email' => 'contact_email',
        'country' => 'country',
        'created_time' => 'created_time',
        'last_modified_time' => 'last_modified_time',
        'latitude' => 'latitude',
        'longitude' => 'longitude',
        'name' => 'name',
        'partial_auth_flag' => 'partial_auth_flag',
        'phone' => 'phone',
        'province' => 'province',
        'state' => 'state',
        'token' => 'token',
        'zip' => 'zip'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'active' => 'setActive',
        'address1' => 'setAddress1',
        'address2' => 'setAddress2',
        'city' => 'setCity',
        'contact' => 'setContact',
        'contact_email' => 'setContactEmail',
        'country' => 'setCountry',
        'created_time' => 'setCreatedTime',
        'last_modified_time' => 'setLastModifiedTime',
        'latitude' => 'setLatitude',
        'longitude' => 'setLongitude',
        'name' => 'setName',
        'partial_auth_flag' => 'setPartialAuthFlag',
        'phone' => 'setPhone',
        'province' => 'setProvince',
        'state' => 'setState',
        'token' => 'setToken',
        'zip' => 'setZip'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'active' => 'getActive',
        'address1' => 'getAddress1',
        'address2' => 'getAddress2',
        'city' => 'getCity',
        'contact' => 'getContact',
        'contact_email' => 'getContactEmail',
        'country' => 'getCountry',
        'created_time' => 'getCreatedTime',
        'last_modified_time' => 'getLastModifiedTime',
        'latitude' => 'getLatitude',
        'longitude' => 'getLongitude',
        'name' => 'getName',
        'partial_auth_flag' => 'getPartialAuthFlag',
        'phone' => 'getPhone',
        'province' => 'getProvince',
        'state' => 'getState',
        'token' => 'getToken',
        'zip' => 'getZip'
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
        $this->container['active'] = $data['active'] ?? true;
        $this->container['address1'] = $data['address1'] ?? null;
        $this->container['address2'] = $data['address2'] ?? null;
        $this->container['city'] = $data['city'] ?? null;
        $this->container['contact'] = $data['contact'] ?? null;
        $this->container['contact_email'] = $data['contact_email'] ?? null;
        $this->container['country'] = $data['country'] ?? null;
        $this->container['created_time'] = $data['created_time'] ?? null;
        $this->container['last_modified_time'] = $data['last_modified_time'] ?? null;
        $this->container['latitude'] = $data['latitude'] ?? null;
        $this->container['longitude'] = $data['longitude'] ?? null;
        $this->container['name'] = $data['name'] ?? null;
        $this->container['partial_auth_flag'] = $data['partial_auth_flag'] ?? true;
        $this->container['phone'] = $data['phone'] ?? null;
        $this->container['province'] = $data['province'] ?? null;
        $this->container['state'] = $data['state'] ?? null;
        $this->container['token'] = $data['token'] ?? null;
        $this->container['zip'] = $data['zip'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if (!is_null($this->container['address1']) && (mb_strlen($this->container['address1']) > 255)) {
            $invalidProperties[] = "invalid value for 'address1', the character length must be smaller than or equal to 255.";
        }

        if (!is_null($this->container['address1']) && (mb_strlen($this->container['address1']) < 0)) {
            $invalidProperties[] = "invalid value for 'address1', the character length must be bigger than or equal to 0.";
        }

        if (!is_null($this->container['address2']) && (mb_strlen($this->container['address2']) > 255)) {
            $invalidProperties[] = "invalid value for 'address2', the character length must be smaller than or equal to 255.";
        }

        if (!is_null($this->container['address2']) && (mb_strlen($this->container['address2']) < 0)) {
            $invalidProperties[] = "invalid value for 'address2', the character length must be bigger than or equal to 0.";
        }

        if (!is_null($this->container['city']) && (mb_strlen($this->container['city']) > 40)) {
            $invalidProperties[] = "invalid value for 'city', the character length must be smaller than or equal to 40.";
        }

        if (!is_null($this->container['city']) && (mb_strlen($this->container['city']) < 0)) {
            $invalidProperties[] = "invalid value for 'city', the character length must be bigger than or equal to 0.";
        }

        if (!is_null($this->container['contact']) && (mb_strlen($this->container['contact']) > 40)) {
            $invalidProperties[] = "invalid value for 'contact', the character length must be smaller than or equal to 40.";
        }

        if (!is_null($this->container['contact']) && (mb_strlen($this->container['contact']) < 0)) {
            $invalidProperties[] = "invalid value for 'contact', the character length must be bigger than or equal to 0.";
        }

        if (!is_null($this->container['contact_email']) && (mb_strlen($this->container['contact_email']) > 40)) {
            $invalidProperties[] = "invalid value for 'contact_email', the character length must be smaller than or equal to 40.";
        }

        if (!is_null($this->container['contact_email']) && (mb_strlen($this->container['contact_email']) < 0)) {
            $invalidProperties[] = "invalid value for 'contact_email', the character length must be bigger than or equal to 0.";
        }

        if (!is_null($this->container['country']) && (mb_strlen($this->container['country']) > 40)) {
            $invalidProperties[] = "invalid value for 'country', the character length must be smaller than or equal to 40.";
        }

        if (!is_null($this->container['country']) && (mb_strlen($this->container['country']) < 0)) {
            $invalidProperties[] = "invalid value for 'country', the character length must be bigger than or equal to 0.";
        }

        if ($this->container['created_time'] === null) {
            $invalidProperties[] = "'created_time' can't be null";
        }
        if ($this->container['last_modified_time'] === null) {
            $invalidProperties[] = "'last_modified_time' can't be null";
        }
        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
        }
        if ((mb_strlen($this->container['name']) > 40)) {
            $invalidProperties[] = "invalid value for 'name', the character length must be smaller than or equal to 40.";
        }

        if ((mb_strlen($this->container['name']) < 0)) {
            $invalidProperties[] = "invalid value for 'name', the character length must be bigger than or equal to 0.";
        }

        if (!is_null($this->container['phone']) && (mb_strlen($this->container['phone']) > 10)) {
            $invalidProperties[] = "invalid value for 'phone', the character length must be smaller than or equal to 10.";
        }

        if (!is_null($this->container['phone']) && (mb_strlen($this->container['phone']) < 0)) {
            $invalidProperties[] = "invalid value for 'phone', the character length must be bigger than or equal to 0.";
        }

        if (!is_null($this->container['province']) && (mb_strlen($this->container['province']) > 20)) {
            $invalidProperties[] = "invalid value for 'province', the character length must be smaller than or equal to 20.";
        }

        if (!is_null($this->container['province']) && (mb_strlen($this->container['province']) < 0)) {
            $invalidProperties[] = "invalid value for 'province', the character length must be bigger than or equal to 0.";
        }

        if (!is_null($this->container['state']) && (mb_strlen($this->container['state']) > 2)) {
            $invalidProperties[] = "invalid value for 'state', the character length must be smaller than or equal to 2.";
        }

        if (!is_null($this->container['state']) && (mb_strlen($this->container['state']) < 0)) {
            $invalidProperties[] = "invalid value for 'state', the character length must be bigger than or equal to 0.";
        }

        if (!is_null($this->container['token']) && (mb_strlen($this->container['token']) > 36)) {
            $invalidProperties[] = "invalid value for 'token', the character length must be smaller than or equal to 36.";
        }

        if (!is_null($this->container['token']) && (mb_strlen($this->container['token']) < 1)) {
            $invalidProperties[] = "invalid value for 'token', the character length must be bigger than or equal to 1.";
        }

        if (!is_null($this->container['zip']) && (mb_strlen($this->container['zip']) > 10)) {
            $invalidProperties[] = "invalid value for 'zip', the character length must be smaller than or equal to 10.";
        }

        if (!is_null($this->container['zip']) && (mb_strlen($this->container['zip']) < 0)) {
            $invalidProperties[] = "invalid value for 'zip', the character length must be bigger than or equal to 0.";
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
     * @param bool|null $active active
     *
     * @return self
     */
    public function setActive($active)
    {
        $this->container['active'] = $active;

        return $this;
    }

    /**
     * Gets address1
     *
     * @return string|null
     */
    public function getAddress1()
    {
        return $this->container['address1'];
    }

    /**
     * Sets address1
     *
     * @param string|null $address1 address1
     *
     * @return self
     */
    public function setAddress1($address1)
    {
        if (!is_null($address1) && (mb_strlen($address1) > 255)) {
            throw new \InvalidArgumentException('invalid length for $address1 when calling MerchantResponseModel., must be smaller than or equal to 255.');
        }
        if (!is_null($address1) && (mb_strlen($address1) < 0)) {
            throw new \InvalidArgumentException('invalid length for $address1 when calling MerchantResponseModel., must be bigger than or equal to 0.');
        }

        $this->container['address1'] = $address1;

        return $this;
    }

    /**
     * Gets address2
     *
     * @return string|null
     */
    public function getAddress2()
    {
        return $this->container['address2'];
    }

    /**
     * Sets address2
     *
     * @param string|null $address2 address2
     *
     * @return self
     */
    public function setAddress2($address2)
    {
        if (!is_null($address2) && (mb_strlen($address2) > 255)) {
            throw new \InvalidArgumentException('invalid length for $address2 when calling MerchantResponseModel., must be smaller than or equal to 255.');
        }
        if (!is_null($address2) && (mb_strlen($address2) < 0)) {
            throw new \InvalidArgumentException('invalid length for $address2 when calling MerchantResponseModel., must be bigger than or equal to 0.');
        }

        $this->container['address2'] = $address2;

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
     * @param string|null $city city
     *
     * @return self
     */
    public function setCity($city)
    {
        if (!is_null($city) && (mb_strlen($city) > 40)) {
            throw new \InvalidArgumentException('invalid length for $city when calling MerchantResponseModel., must be smaller than or equal to 40.');
        }
        if (!is_null($city) && (mb_strlen($city) < 0)) {
            throw new \InvalidArgumentException('invalid length for $city when calling MerchantResponseModel., must be bigger than or equal to 0.');
        }

        $this->container['city'] = $city;

        return $this;
    }

    /**
     * Gets contact
     *
     * @return string|null
     */
    public function getContact()
    {
        return $this->container['contact'];
    }

    /**
     * Sets contact
     *
     * @param string|null $contact contact
     *
     * @return self
     */
    public function setContact($contact)
    {
        if (!is_null($contact) && (mb_strlen($contact) > 40)) {
            throw new \InvalidArgumentException('invalid length for $contact when calling MerchantResponseModel., must be smaller than or equal to 40.');
        }
        if (!is_null($contact) && (mb_strlen($contact) < 0)) {
            throw new \InvalidArgumentException('invalid length for $contact when calling MerchantResponseModel., must be bigger than or equal to 0.');
        }

        $this->container['contact'] = $contact;

        return $this;
    }

    /**
     * Gets contact_email
     *
     * @return string|null
     */
    public function getContactEmail()
    {
        return $this->container['contact_email'];
    }

    /**
     * Sets contact_email
     *
     * @param string|null $contact_email contact_email
     *
     * @return self
     */
    public function setContactEmail($contact_email)
    {
        if (!is_null($contact_email) && (mb_strlen($contact_email) > 40)) {
            throw new \InvalidArgumentException('invalid length for $contact_email when calling MerchantResponseModel., must be smaller than or equal to 40.');
        }
        if (!is_null($contact_email) && (mb_strlen($contact_email) < 0)) {
            throw new \InvalidArgumentException('invalid length for $contact_email when calling MerchantResponseModel., must be bigger than or equal to 0.');
        }

        $this->container['contact_email'] = $contact_email;

        return $this;
    }

    /**
     * Gets country
     *
     * @return string|null
     */
    public function getCountry()
    {
        return $this->container['country'];
    }

    /**
     * Sets country
     *
     * @param string|null $country country
     *
     * @return self
     */
    public function setCountry($country)
    {
        if (!is_null($country) && (mb_strlen($country) > 40)) {
            throw new \InvalidArgumentException('invalid length for $country when calling MerchantResponseModel., must be smaller than or equal to 40.');
        }
        if (!is_null($country) && (mb_strlen($country) < 0)) {
            throw new \InvalidArgumentException('invalid length for $country when calling MerchantResponseModel., must be bigger than or equal to 0.');
        }

        $this->container['country'] = $country;

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
     * @param \DateTime $created_time yyyy-MM-ddTHH:mm:ssZ
     *
     * @return self
     */
    public function setCreatedTime($created_time)
    {
        $this->container['created_time'] = $created_time;

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
     * @param \DateTime $last_modified_time yyyy-MM-ddTHH:mm:ssZ
     *
     * @return self
     */
    public function setLastModifiedTime($last_modified_time)
    {
        $this->container['last_modified_time'] = $last_modified_time;

        return $this;
    }

    /**
     * Gets latitude
     *
     * @return float|null
     */
    public function getLatitude()
    {
        return $this->container['latitude'];
    }

    /**
     * Sets latitude
     *
     * @param float|null $latitude latitude
     *
     * @return self
     */
    public function setLatitude($latitude)
    {
        $this->container['latitude'] = $latitude;

        return $this;
    }

    /**
     * Gets longitude
     *
     * @return float|null
     */
    public function getLongitude()
    {
        return $this->container['longitude'];
    }

    /**
     * Sets longitude
     *
     * @param float|null $longitude longitude
     *
     * @return self
     */
    public function setLongitude($longitude)
    {
        $this->container['longitude'] = $longitude;

        return $this;
    }

    /**
     * Gets name
     *
     * @return string
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     *
     * @param string $name name
     *
     * @return self
     */
    public function setName($name)
    {
        if ((mb_strlen($name) > 40)) {
            throw new \InvalidArgumentException('invalid length for $name when calling MerchantResponseModel., must be smaller than or equal to 40.');
        }
        if ((mb_strlen($name) < 0)) {
            throw new \InvalidArgumentException('invalid length for $name when calling MerchantResponseModel., must be bigger than or equal to 0.');
        }

        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets partial_auth_flag
     *
     * @return bool|null
     */
    public function getPartialAuthFlag()
    {
        return $this->container['partial_auth_flag'];
    }

    /**
     * Sets partial_auth_flag
     *
     * @param bool|null $partial_auth_flag partial_auth_flag
     *
     * @return self
     */
    public function setPartialAuthFlag($partial_auth_flag)
    {
        $this->container['partial_auth_flag'] = $partial_auth_flag;

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
        if (!is_null($phone) && (mb_strlen($phone) > 10)) {
            throw new \InvalidArgumentException('invalid length for $phone when calling MerchantResponseModel., must be smaller than or equal to 10.');
        }
        if (!is_null($phone) && (mb_strlen($phone) < 0)) {
            throw new \InvalidArgumentException('invalid length for $phone when calling MerchantResponseModel., must be bigger than or equal to 0.');
        }

        $this->container['phone'] = $phone;

        return $this;
    }

    /**
     * Gets province
     *
     * @return string|null
     */
    public function getProvince()
    {
        return $this->container['province'];
    }

    /**
     * Sets province
     *
     * @param string|null $province province
     *
     * @return self
     */
    public function setProvince($province)
    {
        if (!is_null($province) && (mb_strlen($province) > 20)) {
            throw new \InvalidArgumentException('invalid length for $province when calling MerchantResponseModel., must be smaller than or equal to 20.');
        }
        if (!is_null($province) && (mb_strlen($province) < 0)) {
            throw new \InvalidArgumentException('invalid length for $province when calling MerchantResponseModel., must be bigger than or equal to 0.');
        }

        $this->container['province'] = $province;

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
     * @param string|null $state state
     *
     * @return self
     */
    public function setState($state)
    {
        if (!is_null($state) && (mb_strlen($state) > 2)) {
            throw new \InvalidArgumentException('invalid length for $state when calling MerchantResponseModel., must be smaller than or equal to 2.');
        }
        if (!is_null($state) && (mb_strlen($state) < 0)) {
            throw new \InvalidArgumentException('invalid length for $state when calling MerchantResponseModel., must be bigger than or equal to 0.');
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
     * @param string|null $token The unique identifier of the merchant
     *
     * @return self
     */
    public function setToken($token)
    {
        if (!is_null($token) && (mb_strlen($token) > 36)) {
            throw new \InvalidArgumentException('invalid length for $token when calling MerchantResponseModel., must be smaller than or equal to 36.');
        }
        if (!is_null($token) && (mb_strlen($token) < 1)) {
            throw new \InvalidArgumentException('invalid length for $token when calling MerchantResponseModel., must be bigger than or equal to 1.');
        }

        $this->container['token'] = $token;

        return $this;
    }

    /**
     * Gets zip
     *
     * @return string|null
     */
    public function getZip()
    {
        return $this->container['zip'];
    }

    /**
     * Sets zip
     *
     * @param string|null $zip zip
     *
     * @return self
     */
    public function setZip($zip)
    {
        if (!is_null($zip) && (mb_strlen($zip) > 10)) {
            throw new \InvalidArgumentException('invalid length for $zip when calling MerchantResponseModel., must be smaller than or equal to 10.');
        }
        if (!is_null($zip) && (mb_strlen($zip) < 0)) {
            throw new \InvalidArgumentException('invalid length for $zip when calling MerchantResponseModel., must be bigger than or equal to 0.');
        }

        $this->container['zip'] = $zip;

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


