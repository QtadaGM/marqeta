<?php
/**
 * AccountNameVerificationModel
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
 * AccountNameVerificationModel Class Doc Comment
 *
 * @category Class
 * @description Contains name verification data: the full name entered by the cardholder, name data held by the Marqeta platform, and an assertion by the Marqeta platform as to whether the two sets of data match.
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class AccountNameVerificationModel implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'account_name_verification_model';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'on_file' => '\OpenAPI\Client\Model\AniInformation',
        'request' => '\OpenAPI\Client\Model\AniInformation',
        'request_type' => 'string',
        'response' => '\OpenAPI\Client\Model\Response'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'on_file' => null,
        'request' => null,
        'request_type' => null,
        'response' => null
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
        'on_file' => 'on_file',
        'request' => 'request',
        'request_type' => 'request_type',
        'response' => 'response'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'on_file' => 'setOnFile',
        'request' => 'setRequest',
        'request_type' => 'setRequestType',
        'response' => 'setResponse'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'on_file' => 'getOnFile',
        'request' => 'getRequest',
        'request_type' => 'getRequestType',
        'response' => 'getResponse'
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

    const REQUEST_TYPE_SENDER = 'SENDER';
    const REQUEST_TYPE_RECEIVER = 'RECEIVER';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getRequestTypeAllowableValues()
    {
        return [
            self::REQUEST_TYPE_SENDER,
            self::REQUEST_TYPE_RECEIVER,
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
        $this->container['on_file'] = $data['on_file'] ?? null;
        $this->container['request'] = $data['request'] ?? null;
        $this->container['request_type'] = $data['request_type'] ?? null;
        $this->container['response'] = $data['response'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        $allowedValues = $this->getRequestTypeAllowableValues();
        if (!is_null($this->container['request_type']) && !in_array($this->container['request_type'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'request_type', must be one of '%s'",
                $this->container['request_type'],
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
     * Gets on_file
     *
     * @return \OpenAPI\Client\Model\AniInformation|null
     */
    public function getOnFile()
    {
        return $this->container['on_file'];
    }

    /**
     * Sets on_file
     *
     * @param \OpenAPI\Client\Model\AniInformation|null $on_file on_file
     *
     * @return self
     */
    public function setOnFile($on_file)
    {
        $this->container['on_file'] = $on_file;

        return $this;
    }

    /**
     * Gets request
     *
     * @return \OpenAPI\Client\Model\AniInformation|null
     */
    public function getRequest()
    {
        return $this->container['request'];
    }

    /**
     * Sets request
     *
     * @param \OpenAPI\Client\Model\AniInformation|null $request request
     *
     * @return self
     */
    public function setRequest($request)
    {
        $this->container['request'] = $request;

        return $this;
    }

    /**
     * Gets request_type
     *
     * @return string|null
     */
    public function getRequestType()
    {
        return $this->container['request_type'];
    }

    /**
     * Sets request_type
     *
     * @param string|null $request_type request_type
     *
     * @return self
     */
    public function setRequestType($request_type)
    {
        $allowedValues = $this->getRequestTypeAllowableValues();
        if (!is_null($request_type) && !in_array($request_type, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'request_type', must be one of '%s'",
                    $request_type,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['request_type'] = $request_type;

        return $this;
    }

    /**
     * Gets response
     *
     * @return \OpenAPI\Client\Model\Response|null
     */
    public function getResponse()
    {
        return $this->container['response'];
    }

    /**
     * Sets response
     *
     * @param \OpenAPI\Client\Model\Response|null $response response
     *
     * @return self
     */
    public function setResponse($response)
    {
        $this->container['response'] = $response;

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


