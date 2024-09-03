<?php
/**
 * FulfillmentAddressResponse
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
 * FulfillmentAddressResponse Class Doc Comment
 *
 * @category Class
 * @description Specifies a fulfillment shipping or return address.
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class FulfillmentAddressResponse implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'FulfillmentAddressResponse';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'address1' => 'string',
        'address2' => 'string',
        'city' => 'string',
        'country' => 'string',
        'first_name' => 'string',
        'last_name' => 'string',
        'middle_name' => 'string',
        'phone' => 'string',
        'postal_code' => 'string',
        'state' => 'string',
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
        'address1' => null,
        'address2' => null,
        'city' => null,
        'country' => null,
        'first_name' => null,
        'last_name' => null,
        'middle_name' => null,
        'phone' => null,
        'postal_code' => null,
        'state' => null,
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
        'address1' => 'address1',
        'address2' => 'address2',
        'city' => 'city',
        'country' => 'country',
        'first_name' => 'first_name',
        'last_name' => 'last_name',
        'middle_name' => 'middle_name',
        'phone' => 'phone',
        'postal_code' => 'postal_code',
        'state' => 'state',
        'zip' => 'zip'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'address1' => 'setAddress1',
        'address2' => 'setAddress2',
        'city' => 'setCity',
        'country' => 'setCountry',
        'first_name' => 'setFirstName',
        'last_name' => 'setLastName',
        'middle_name' => 'setMiddleName',
        'phone' => 'setPhone',
        'postal_code' => 'setPostalCode',
        'state' => 'setState',
        'zip' => 'setZip'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'address1' => 'getAddress1',
        'address2' => 'getAddress2',
        'city' => 'getCity',
        'country' => 'getCountry',
        'first_name' => 'getFirstName',
        'last_name' => 'getLastName',
        'middle_name' => 'getMiddleName',
        'phone' => 'getPhone',
        'postal_code' => 'getPostalCode',
        'state' => 'getState',
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
        $this->container['address1'] = $data['address1'] ?? null;
        $this->container['address2'] = $data['address2'] ?? null;
        $this->container['city'] = $data['city'] ?? null;
        $this->container['country'] = $data['country'] ?? null;
        $this->container['first_name'] = $data['first_name'] ?? null;
        $this->container['last_name'] = $data['last_name'] ?? null;
        $this->container['middle_name'] = $data['middle_name'] ?? null;
        $this->container['phone'] = $data['phone'] ?? null;
        $this->container['postal_code'] = $data['postal_code'] ?? null;
        $this->container['state'] = $data['state'] ?? null;
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

        if (!is_null($this->container['country']) && (mb_strlen($this->container['country']) > 40)) {
            $invalidProperties[] = "invalid value for 'country', the character length must be smaller than or equal to 40.";
        }

        if (!is_null($this->container['country']) && (mb_strlen($this->container['country']) < 0)) {
            $invalidProperties[] = "invalid value for 'country', the character length must be bigger than or equal to 0.";
        }

        if (!is_null($this->container['first_name']) && (mb_strlen($this->container['first_name']) > 40)) {
            $invalidProperties[] = "invalid value for 'first_name', the character length must be smaller than or equal to 40.";
        }

        if (!is_null($this->container['first_name']) && (mb_strlen($this->container['first_name']) < 0)) {
            $invalidProperties[] = "invalid value for 'first_name', the character length must be bigger than or equal to 0.";
        }

        if (!is_null($this->container['last_name']) && (mb_strlen($this->container['last_name']) > 40)) {
            $invalidProperties[] = "invalid value for 'last_name', the character length must be smaller than or equal to 40.";
        }

        if (!is_null($this->container['last_name']) && (mb_strlen($this->container['last_name']) < 0)) {
            $invalidProperties[] = "invalid value for 'last_name', the character length must be bigger than or equal to 0.";
        }

        if (!is_null($this->container['middle_name']) && (mb_strlen($this->container['middle_name']) > 40)) {
            $invalidProperties[] = "invalid value for 'middle_name', the character length must be smaller than or equal to 40.";
        }

        if (!is_null($this->container['middle_name']) && (mb_strlen($this->container['middle_name']) < 0)) {
            $invalidProperties[] = "invalid value for 'middle_name', the character length must be bigger than or equal to 0.";
        }

        if (!is_null($this->container['phone']) && (mb_strlen($this->container['phone']) > 20)) {
            $invalidProperties[] = "invalid value for 'phone', the character length must be smaller than or equal to 20.";
        }

        if (!is_null($this->container['phone']) && (mb_strlen($this->container['phone']) < 0)) {
            $invalidProperties[] = "invalid value for 'phone', the character length must be bigger than or equal to 0.";
        }

        if (!is_null($this->container['postal_code']) && (mb_strlen($this->container['postal_code']) > 10)) {
            $invalidProperties[] = "invalid value for 'postal_code', the character length must be smaller than or equal to 10.";
        }

        if (!is_null($this->container['postal_code']) && (mb_strlen($this->container['postal_code']) < 0)) {
            $invalidProperties[] = "invalid value for 'postal_code', the character length must be bigger than or equal to 0.";
        }

        if (!is_null($this->container['state']) && (mb_strlen($this->container['state']) > 32)) {
            $invalidProperties[] = "invalid value for 'state', the character length must be smaller than or equal to 32.";
        }

        if (!is_null($this->container['state']) && (mb_strlen($this->container['state']) < 0)) {
            $invalidProperties[] = "invalid value for 'state', the character length must be bigger than or equal to 0.";
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
     * @param string|null $address1 Number and street of the address.  This field is returned if it exists in the resource.
     *
     * @return self
     */
    public function setAddress1($address1)
    {
        if (!is_null($address1) && (mb_strlen($address1) > 255)) {
            throw new \InvalidArgumentException('invalid length for $address1 when calling FulfillmentAddressResponse., must be smaller than or equal to 255.');
        }
        if (!is_null($address1) && (mb_strlen($address1) < 0)) {
            throw new \InvalidArgumentException('invalid length for $address1 when calling FulfillmentAddressResponse., must be bigger than or equal to 0.');
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
     * @param string|null $address2 Additional address information.  This field is returned if it exists in the resource.
     *
     * @return self
     */
    public function setAddress2($address2)
    {
        if (!is_null($address2) && (mb_strlen($address2) > 255)) {
            throw new \InvalidArgumentException('invalid length for $address2 when calling FulfillmentAddressResponse., must be smaller than or equal to 255.');
        }
        if (!is_null($address2) && (mb_strlen($address2) < 0)) {
            throw new \InvalidArgumentException('invalid length for $address2 when calling FulfillmentAddressResponse., must be bigger than or equal to 0.');
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
     * @param string|null $city City of the address.  This field is returned if it exists in the resource.
     *
     * @return self
     */
    public function setCity($city)
    {
        if (!is_null($city) && (mb_strlen($city) > 40)) {
            throw new \InvalidArgumentException('invalid length for $city when calling FulfillmentAddressResponse., must be smaller than or equal to 40.');
        }
        if (!is_null($city) && (mb_strlen($city) < 0)) {
            throw new \InvalidArgumentException('invalid length for $city when calling FulfillmentAddressResponse., must be bigger than or equal to 0.');
        }

        $this->container['city'] = $city;

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
     * @param string|null $country Country of the address.  This field is returned if it exists in the resource.
     *
     * @return self
     */
    public function setCountry($country)
    {
        if (!is_null($country) && (mb_strlen($country) > 40)) {
            throw new \InvalidArgumentException('invalid length for $country when calling FulfillmentAddressResponse., must be smaller than or equal to 40.');
        }
        if (!is_null($country) && (mb_strlen($country) < 0)) {
            throw new \InvalidArgumentException('invalid length for $country when calling FulfillmentAddressResponse., must be bigger than or equal to 0.');
        }

        $this->container['country'] = $country;

        return $this;
    }

    /**
     * Gets first_name
     *
     * @return string|null
     */
    public function getFirstName()
    {
        return $this->container['first_name'];
    }

    /**
     * Sets first_name
     *
     * @param string|null $first_name First name of the addressee.  This field is returned if it exists in the resource.
     *
     * @return self
     */
    public function setFirstName($first_name)
    {
        if (!is_null($first_name) && (mb_strlen($first_name) > 40)) {
            throw new \InvalidArgumentException('invalid length for $first_name when calling FulfillmentAddressResponse., must be smaller than or equal to 40.');
        }
        if (!is_null($first_name) && (mb_strlen($first_name) < 0)) {
            throw new \InvalidArgumentException('invalid length for $first_name when calling FulfillmentAddressResponse., must be bigger than or equal to 0.');
        }

        $this->container['first_name'] = $first_name;

        return $this;
    }

    /**
     * Gets last_name
     *
     * @return string|null
     */
    public function getLastName()
    {
        return $this->container['last_name'];
    }

    /**
     * Sets last_name
     *
     * @param string|null $last_name Last name of the addressee.  This field is returned if it exists in the resource.
     *
     * @return self
     */
    public function setLastName($last_name)
    {
        if (!is_null($last_name) && (mb_strlen($last_name) > 40)) {
            throw new \InvalidArgumentException('invalid length for $last_name when calling FulfillmentAddressResponse., must be smaller than or equal to 40.');
        }
        if (!is_null($last_name) && (mb_strlen($last_name) < 0)) {
            throw new \InvalidArgumentException('invalid length for $last_name when calling FulfillmentAddressResponse., must be bigger than or equal to 0.');
        }

        $this->container['last_name'] = $last_name;

        return $this;
    }

    /**
     * Gets middle_name
     *
     * @return string|null
     */
    public function getMiddleName()
    {
        return $this->container['middle_name'];
    }

    /**
     * Sets middle_name
     *
     * @param string|null $middle_name Middle name of the addressee.  This field is returned if it exists in the resource.
     *
     * @return self
     */
    public function setMiddleName($middle_name)
    {
        if (!is_null($middle_name) && (mb_strlen($middle_name) > 40)) {
            throw new \InvalidArgumentException('invalid length for $middle_name when calling FulfillmentAddressResponse., must be smaller than or equal to 40.');
        }
        if (!is_null($middle_name) && (mb_strlen($middle_name) < 0)) {
            throw new \InvalidArgumentException('invalid length for $middle_name when calling FulfillmentAddressResponse., must be bigger than or equal to 0.');
        }

        $this->container['middle_name'] = $middle_name;

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
     * @param string|null $phone Telephone number of the addressee.  This field is returned if it exists in the resource.
     *
     * @return self
     */
    public function setPhone($phone)
    {
        if (!is_null($phone) && (mb_strlen($phone) > 20)) {
            throw new \InvalidArgumentException('invalid length for $phone when calling FulfillmentAddressResponse., must be smaller than or equal to 20.');
        }
        if (!is_null($phone) && (mb_strlen($phone) < 0)) {
            throw new \InvalidArgumentException('invalid length for $phone when calling FulfillmentAddressResponse., must be bigger than or equal to 0.');
        }

        $this->container['phone'] = $phone;

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
     * @param string|null $postal_code Postal code of the address.  This field is returned if it exists in the resource.
     *
     * @return self
     */
    public function setPostalCode($postal_code)
    {
        if (!is_null($postal_code) && (mb_strlen($postal_code) > 10)) {
            throw new \InvalidArgumentException('invalid length for $postal_code when calling FulfillmentAddressResponse., must be smaller than or equal to 10.');
        }
        if (!is_null($postal_code) && (mb_strlen($postal_code) < 0)) {
            throw new \InvalidArgumentException('invalid length for $postal_code when calling FulfillmentAddressResponse., must be bigger than or equal to 0.');
        }

        $this->container['postal_code'] = $postal_code;

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
     * @param string|null $state State or province of the address.  This field is returned if it exists in the resource.
     *
     * @return self
     */
    public function setState($state)
    {
        if (!is_null($state) && (mb_strlen($state) > 32)) {
            throw new \InvalidArgumentException('invalid length for $state when calling FulfillmentAddressResponse., must be smaller than or equal to 32.');
        }
        if (!is_null($state) && (mb_strlen($state) < 0)) {
            throw new \InvalidArgumentException('invalid length for $state when calling FulfillmentAddressResponse., must be bigger than or equal to 0.');
        }

        $this->container['state'] = $state;

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
     * @param string|null $zip United States ZIP code of the address.  This field is returned if it exists in the resource.
     *
     * @return self
     */
    public function setZip($zip)
    {
        if (!is_null($zip) && (mb_strlen($zip) > 10)) {
            throw new \InvalidArgumentException('invalid length for $zip when calling FulfillmentAddressResponse., must be smaller than or equal to 10.');
        }
        if (!is_null($zip) && (mb_strlen($zip) < 0)) {
            throw new \InvalidArgumentException('invalid length for $zip when calling FulfillmentAddressResponse., must be bigger than or equal to 0.');
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

