<?php
/**
 * KycRequest
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
 * KycRequest Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class KycRequest implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'kyc_request';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'business_token' => 'string',
        'manual_override' => 'bool',
        'notes' => 'string',
        'reference_id' => 'string',
        'token' => 'string',
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
        'business_token' => null,
        'manual_override' => null,
        'notes' => null,
        'reference_id' => null,
        'token' => null,
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
        'business_token' => 'business_token',
        'manual_override' => 'manual_override',
        'notes' => 'notes',
        'reference_id' => 'reference_id',
        'token' => 'token',
        'user_token' => 'user_token'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'business_token' => 'setBusinessToken',
        'manual_override' => 'setManualOverride',
        'notes' => 'setNotes',
        'reference_id' => 'setReferenceId',
        'token' => 'setToken',
        'user_token' => 'setUserToken'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'business_token' => 'getBusinessToken',
        'manual_override' => 'getManualOverride',
        'notes' => 'getNotes',
        'reference_id' => 'getReferenceId',
        'token' => 'getToken',
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
        $this->container['business_token'] = $data['business_token'] ?? null;
        $this->container['manual_override'] = $data['manual_override'] ?? false;
        $this->container['notes'] = $data['notes'] ?? null;
        $this->container['reference_id'] = $data['reference_id'] ?? null;
        $this->container['token'] = $data['token'] ?? null;
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

        if (!is_null($this->container['business_token']) && (mb_strlen($this->container['business_token']) > 36)) {
            $invalidProperties[] = "invalid value for 'business_token', the character length must be smaller than or equal to 36.";
        }

        if (!is_null($this->container['business_token']) && (mb_strlen($this->container['business_token']) < 1)) {
            $invalidProperties[] = "invalid value for 'business_token', the character length must be bigger than or equal to 1.";
        }

        if (!is_null($this->container['notes']) && (mb_strlen($this->container['notes']) > 255)) {
            $invalidProperties[] = "invalid value for 'notes', the character length must be smaller than or equal to 255.";
        }

        if (!is_null($this->container['notes']) && (mb_strlen($this->container['notes']) < 0)) {
            $invalidProperties[] = "invalid value for 'notes', the character length must be bigger than or equal to 0.";
        }

        if (!is_null($this->container['reference_id']) && (mb_strlen($this->container['reference_id']) > 32)) {
            $invalidProperties[] = "invalid value for 'reference_id', the character length must be smaller than or equal to 32.";
        }

        if (!is_null($this->container['reference_id']) && (mb_strlen($this->container['reference_id']) < 0)) {
            $invalidProperties[] = "invalid value for 'reference_id', the character length must be bigger than or equal to 0.";
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
     * @param string|null $business_token Specifies the business account holder on which to perform the identity check. Do not pass this field if your request includes the `user_token` field.  Send a `GET` request to `/businesses` to retrieve business tokens.
     *
     * @return self
     */
    public function setBusinessToken($business_token)
    {
        if (!is_null($business_token) && (mb_strlen($business_token) > 36)) {
            throw new \InvalidArgumentException('invalid length for $business_token when calling KycRequest., must be smaller than or equal to 36.');
        }
        if (!is_null($business_token) && (mb_strlen($business_token) < 1)) {
            throw new \InvalidArgumentException('invalid length for $business_token when calling KycRequest., must be bigger than or equal to 1.');
        }

        $this->container['business_token'] = $business_token;

        return $this;
    }

    /**
     * Gets manual_override
     *
     * @return bool|null
     */
    public function getManualOverride()
    {
        return $this->container['manual_override'];
    }

    /**
     * Sets manual_override
     *
     * @param bool|null $manual_override Set to `true` to designate a user account holder as having passed a verification check without Marqeta performing the check through one of its KYC providers.  Use this override when you perform verification through another mechanism, such as an alternative KYC provider or directly with the account holder.  You must obtain explicit, written approval from Marqeta before using the `manual_override` field for KYC verification. This feature is only available to programs that are enabled to perform their own Customer Identification Program (CIP) KYC verification. Consult your Marqeta representative for more information.
     *
     * @return self
     */
    public function setManualOverride($manual_override)
    {
        $this->container['manual_override'] = $manual_override;

        return $this;
    }

    /**
     * Gets notes
     *
     * @return string|null
     */
    public function getNotes()
    {
        return $this->container['notes'];
    }

    /**
     * Sets notes
     *
     * @param string|null $notes Notes pertaining to a manual override. This field is returned in the response only when the `manual_override` field is set to `true`.
     *
     * @return self
     */
    public function setNotes($notes)
    {
        if (!is_null($notes) && (mb_strlen($notes) > 255)) {
            throw new \InvalidArgumentException('invalid length for $notes when calling KycRequest., must be smaller than or equal to 255.');
        }
        if (!is_null($notes) && (mb_strlen($notes) < 0)) {
            throw new \InvalidArgumentException('invalid length for $notes when calling KycRequest., must be bigger than or equal to 0.');
        }

        $this->container['notes'] = $notes;

        return $this;
    }

    /**
     * Gets reference_id
     *
     * @return string|null
     */
    public function getReferenceId()
    {
        return $this->container['reference_id'];
    }

    /**
     * Sets reference_id
     *
     * @param string|null $reference_id Can be specified only if `manual_override=true`. If you verified a user account holder's identity by performing a KYC verification outside of the Marqeta platform, you can use the `reference_id` field to store the reference number returned by that KYC provider.  *NOTE:* When you submit a KYC verification request with `manual_override=false`, the Marqeta platform performs the verification through one of its KYC providers. If the KYC provider responds with a reference identifier, that identifier is passed to you by way of this field in the response.
     *
     * @return self
     */
    public function setReferenceId($reference_id)
    {
        if (!is_null($reference_id) && (mb_strlen($reference_id) > 32)) {
            throw new \InvalidArgumentException('invalid length for $reference_id when calling KycRequest., must be smaller than or equal to 32.');
        }
        if (!is_null($reference_id) && (mb_strlen($reference_id) < 0)) {
            throw new \InvalidArgumentException('invalid length for $reference_id when calling KycRequest., must be bigger than or equal to 0.');
        }

        $this->container['reference_id'] = $reference_id;

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
     * @param string|null $token The unique identifier of the identity check.  If you do not include a token, the system will generate one automatically. This token is necessary for use in other API calls, so we recommend that rather than let the system generate one, you use a simple string that is easy to remember. This value cannot be updated.
     *
     * @return self
     */
    public function setToken($token)
    {
        if (!is_null($token) && (mb_strlen($token) > 36)) {
            throw new \InvalidArgumentException('invalid length for $token when calling KycRequest., must be smaller than or equal to 36.');
        }
        if (!is_null($token) && (mb_strlen($token) < 1)) {
            throw new \InvalidArgumentException('invalid length for $token when calling KycRequest., must be bigger than or equal to 1.');
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
     * @param string|null $user_token Specifies the user account holder on which to perform the identity check. Do not pass this field if your request includes the `business_token` field.  Send a `GET` request to `/users` to retrieve user tokens.
     *
     * @return self
     */
    public function setUserToken($user_token)
    {
        if (!is_null($user_token) && (mb_strlen($user_token) > 36)) {
            throw new \InvalidArgumentException('invalid length for $user_token when calling KycRequest., must be smaller than or equal to 36.');
        }
        if (!is_null($user_token) && (mb_strlen($user_token) < 1)) {
            throw new \InvalidArgumentException('invalid length for $user_token when calling KycRequest., must be bigger than or equal to 1.');
        }

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


