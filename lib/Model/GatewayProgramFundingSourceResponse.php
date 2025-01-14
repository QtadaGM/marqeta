<?php
/**
 * GatewayProgramFundingSourceResponse
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
 * GatewayProgramFundingSourceResponse Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class GatewayProgramFundingSourceResponse implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'gateway_program_funding_source_response';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'account' => 'string',
        'active' => 'bool',
        'basic_auth_password' => 'string',
        'basic_auth_username' => 'string',
        'created_time' => '\DateTime',
        'custom_header' => 'array<string,string>',
        'last_modified_time' => '\DateTime',
        'name' => 'string',
        'timeout_millis' => 'int',
        'token' => 'string',
        'url' => 'string',
        'use_mtls' => 'bool',
        'version' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'account' => null,
        'active' => null,
        'basic_auth_password' => null,
        'basic_auth_username' => null,
        'created_time' => 'date-time',
        'custom_header' => null,
        'last_modified_time' => 'date-time',
        'name' => null,
        'timeout_millis' => 'int64',
        'token' => null,
        'url' => null,
        'use_mtls' => null,
        'version' => null
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
        'account' => 'account',
        'active' => 'active',
        'basic_auth_password' => 'basic_auth_password',
        'basic_auth_username' => 'basic_auth_username',
        'created_time' => 'created_time',
        'custom_header' => 'custom_header',
        'last_modified_time' => 'last_modified_time',
        'name' => 'name',
        'timeout_millis' => 'timeout_millis',
        'token' => 'token',
        'url' => 'url',
        'use_mtls' => 'use_mtls',
        'version' => 'version'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'account' => 'setAccount',
        'active' => 'setActive',
        'basic_auth_password' => 'setBasicAuthPassword',
        'basic_auth_username' => 'setBasicAuthUsername',
        'created_time' => 'setCreatedTime',
        'custom_header' => 'setCustomHeader',
        'last_modified_time' => 'setLastModifiedTime',
        'name' => 'setName',
        'timeout_millis' => 'setTimeoutMillis',
        'token' => 'setToken',
        'url' => 'setUrl',
        'use_mtls' => 'setUseMtls',
        'version' => 'setVersion'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'account' => 'getAccount',
        'active' => 'getActive',
        'basic_auth_password' => 'getBasicAuthPassword',
        'basic_auth_username' => 'getBasicAuthUsername',
        'created_time' => 'getCreatedTime',
        'custom_header' => 'getCustomHeader',
        'last_modified_time' => 'getLastModifiedTime',
        'name' => 'getName',
        'timeout_millis' => 'getTimeoutMillis',
        'token' => 'getToken',
        'url' => 'getUrl',
        'use_mtls' => 'getUseMtls',
        'version' => 'getVersion'
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
        $this->container['account'] = $data['account'] ?? null;
        $this->container['active'] = $data['active'] ?? null;
        $this->container['basic_auth_password'] = $data['basic_auth_password'] ?? null;
        $this->container['basic_auth_username'] = $data['basic_auth_username'] ?? null;
        $this->container['created_time'] = $data['created_time'] ?? null;
        $this->container['custom_header'] = $data['custom_header'] ?? null;
        $this->container['last_modified_time'] = $data['last_modified_time'] ?? null;
        $this->container['name'] = $data['name'] ?? null;
        $this->container['timeout_millis'] = $data['timeout_millis'] ?? null;
        $this->container['token'] = $data['token'] ?? null;
        $this->container['url'] = $data['url'] ?? null;
        $this->container['use_mtls'] = $data['use_mtls'] ?? false;
        $this->container['version'] = $data['version'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['account'] === null) {
            $invalidProperties[] = "'account' can't be null";
        }
        if ($this->container['basic_auth_password'] === null) {
            $invalidProperties[] = "'basic_auth_password' can't be null";
        }
        if ($this->container['basic_auth_username'] === null) {
            $invalidProperties[] = "'basic_auth_username' can't be null";
        }
        if ($this->container['created_time'] === null) {
            $invalidProperties[] = "'created_time' can't be null";
        }
        if ($this->container['custom_header'] === null) {
            $invalidProperties[] = "'custom_header' can't be null";
        }
        if ($this->container['last_modified_time'] === null) {
            $invalidProperties[] = "'last_modified_time' can't be null";
        }
        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
        }
        if ((mb_strlen($this->container['name']) > 50)) {
            $invalidProperties[] = "invalid value for 'name', the character length must be smaller than or equal to 50.";
        }

        if ((mb_strlen($this->container['name']) < 1)) {
            $invalidProperties[] = "invalid value for 'name', the character length must be bigger than or equal to 1.";
        }

        if ($this->container['timeout_millis'] === null) {
            $invalidProperties[] = "'timeout_millis' can't be null";
        }
        if ($this->container['token'] === null) {
            $invalidProperties[] = "'token' can't be null";
        }
        if ((mb_strlen($this->container['token']) > 36)) {
            $invalidProperties[] = "invalid value for 'token', the character length must be smaller than or equal to 36.";
        }

        if ((mb_strlen($this->container['token']) < 1)) {
            $invalidProperties[] = "invalid value for 'token', the character length must be bigger than or equal to 1.";
        }

        if ($this->container['url'] === null) {
            $invalidProperties[] = "'url' can't be null";
        }
        if ($this->container['use_mtls'] === null) {
            $invalidProperties[] = "'use_mtls' can't be null";
        }
        if ($this->container['version'] === null) {
            $invalidProperties[] = "'version' can't be null";
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
     * Gets account
     *
     * @return string
     */
    public function getAccount()
    {
        return $this->container['account'];
    }

    /**
     * Sets account
     *
     * @param string $account Bank account number.
     *
     * @return self
     */
    public function setAccount($account)
    {
        $this->container['account'] = $account;

        return $this;
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
     * @param bool|null $active Indicates whether the program gateway funding source is active. This field is returned if it exists in the resource.
     *
     * @return self
     */
    public function setActive($active)
    {
        $this->container['active'] = $active;

        return $this;
    }

    /**
     * Gets basic_auth_password
     *
     * @return string
     */
    public function getBasicAuthPassword()
    {
        return $this->container['basic_auth_password'];
    }

    /**
     * Sets basic_auth_password
     *
     * @param string $basic_auth_password Password for authenticating your environment.
     *
     * @return self
     */
    public function setBasicAuthPassword($basic_auth_password)
    {
        $this->container['basic_auth_password'] = $basic_auth_password;

        return $this;
    }

    /**
     * Gets basic_auth_username
     *
     * @return string
     */
    public function getBasicAuthUsername()
    {
        return $this->container['basic_auth_username'];
    }

    /**
     * Sets basic_auth_username
     *
     * @param string $basic_auth_username Username for authenticating your environment.
     *
     * @return self
     */
    public function setBasicAuthUsername($basic_auth_username)
    {
        $this->container['basic_auth_username'] = $basic_auth_username;

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
     * Gets custom_header
     *
     * @return array<string,string>
     */
    public function getCustomHeader()
    {
        return $this->container['custom_header'];
    }

    /**
     * Sets custom_header
     *
     * @param array<string,string> $custom_header Additional custom information included in the HTTP header.
     *
     * @return self
     */
    public function setCustomHeader($custom_header)
    {
        $this->container['custom_header'] = $custom_header;

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
     * @param string $name Name of the program gateway funding source.
     *
     * @return self
     */
    public function setName($name)
    {
        if ((mb_strlen($name) > 50)) {
            throw new \InvalidArgumentException('invalid length for $name when calling GatewayProgramFundingSourceResponse., must be smaller than or equal to 50.');
        }
        if ((mb_strlen($name) < 1)) {
            throw new \InvalidArgumentException('invalid length for $name when calling GatewayProgramFundingSourceResponse., must be bigger than or equal to 1.');
        }

        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets timeout_millis
     *
     * @return int
     */
    public function getTimeoutMillis()
    {
        return $this->container['timeout_millis'];
    }

    /**
     * Sets timeout_millis
     *
     * @param int $timeout_millis Total timeout in milliseconds for gateway processing.
     *
     * @return self
     */
    public function setTimeoutMillis($timeout_millis)
    {
        $this->container['timeout_millis'] = $timeout_millis;

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
     * @param string $token Unique identifier of the program gateway funding source.
     *
     * @return self
     */
    public function setToken($token)
    {
        if ((mb_strlen($token) > 36)) {
            throw new \InvalidArgumentException('invalid length for $token when calling GatewayProgramFundingSourceResponse., must be smaller than or equal to 36.');
        }
        if ((mb_strlen($token) < 1)) {
            throw new \InvalidArgumentException('invalid length for $token when calling GatewayProgramFundingSourceResponse., must be bigger than or equal to 1.');
        }

        $this->container['token'] = $token;

        return $this;
    }

    /**
     * Gets url
     *
     * @return string
     */
    public function getUrl()
    {
        return $this->container['url'];
    }

    /**
     * Sets url
     *
     * @param string $url URL of the gateway endpoint hosted in your environment, to which `POST` requests are submitted by the Marqeta platform.
     *
     * @return self
     */
    public function setUrl($url)
    {
        $this->container['url'] = $url;

        return $this;
    }

    /**
     * Gets use_mtls
     *
     * @return bool
     */
    public function getUseMtls()
    {
        return $this->container['use_mtls'];
    }

    /**
     * Sets use_mtls
     *
     * @param bool $use_mtls Specifies whether or not to use mutual transport layer security (mTLS) authentication for the funding request.
     *
     * @return self
     */
    public function setUseMtls($use_mtls)
    {
        $this->container['use_mtls'] = $use_mtls;

        return $this;
    }

    /**
     * Gets version
     *
     * @return string
     */
    public function getVersion()
    {
        return $this->container['version'];
    }

    /**
     * Sets version
     *
     * @param string $version Program gateway funding source object version.
     *
     * @return self
     */
    public function setVersion($version)
    {
        $this->container['version'] = $version;

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


