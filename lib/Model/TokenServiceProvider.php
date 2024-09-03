<?php
/**
 * TokenServiceProvider
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
 * TokenServiceProvider Class Doc Comment
 *
 * @category Class
 * @description Contains information held and provided by the token service provider (card network).
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class TokenServiceProvider implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'token_service_provider';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'correlation_id' => 'string',
        'pan_reference_id' => 'string',
        'token_assurance_level' => 'string',
        'token_eligibility_decision' => 'string',
        'token_expiration' => 'string',
        'token_pan' => 'string',
        'token_reference_id' => 'string',
        'token_requestor_id' => 'string',
        'token_requestor_name' => 'string',
        'token_score' => 'string',
        'token_type' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'correlation_id' => null,
        'pan_reference_id' => null,
        'token_assurance_level' => null,
        'token_eligibility_decision' => null,
        'token_expiration' => null,
        'token_pan' => null,
        'token_reference_id' => null,
        'token_requestor_id' => null,
        'token_requestor_name' => null,
        'token_score' => null,
        'token_type' => null
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
        'correlation_id' => 'correlation_id',
        'pan_reference_id' => 'pan_reference_id',
        'token_assurance_level' => 'token_assurance_level',
        'token_eligibility_decision' => 'token_eligibility_decision',
        'token_expiration' => 'token_expiration',
        'token_pan' => 'token_pan',
        'token_reference_id' => 'token_reference_id',
        'token_requestor_id' => 'token_requestor_id',
        'token_requestor_name' => 'token_requestor_name',
        'token_score' => 'token_score',
        'token_type' => 'token_type'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'correlation_id' => 'setCorrelationId',
        'pan_reference_id' => 'setPanReferenceId',
        'token_assurance_level' => 'setTokenAssuranceLevel',
        'token_eligibility_decision' => 'setTokenEligibilityDecision',
        'token_expiration' => 'setTokenExpiration',
        'token_pan' => 'setTokenPan',
        'token_reference_id' => 'setTokenReferenceId',
        'token_requestor_id' => 'setTokenRequestorId',
        'token_requestor_name' => 'setTokenRequestorName',
        'token_score' => 'setTokenScore',
        'token_type' => 'setTokenType'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'correlation_id' => 'getCorrelationId',
        'pan_reference_id' => 'getPanReferenceId',
        'token_assurance_level' => 'getTokenAssuranceLevel',
        'token_eligibility_decision' => 'getTokenEligibilityDecision',
        'token_expiration' => 'getTokenExpiration',
        'token_pan' => 'getTokenPan',
        'token_reference_id' => 'getTokenReferenceId',
        'token_requestor_id' => 'getTokenRequestorId',
        'token_requestor_name' => 'getTokenRequestorName',
        'token_score' => 'getTokenScore',
        'token_type' => 'getTokenType'
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
        $this->container['correlation_id'] = $data['correlation_id'] ?? null;
        $this->container['pan_reference_id'] = $data['pan_reference_id'] ?? null;
        $this->container['token_assurance_level'] = $data['token_assurance_level'] ?? null;
        $this->container['token_eligibility_decision'] = $data['token_eligibility_decision'] ?? null;
        $this->container['token_expiration'] = $data['token_expiration'] ?? null;
        $this->container['token_pan'] = $data['token_pan'] ?? null;
        $this->container['token_reference_id'] = $data['token_reference_id'] ?? null;
        $this->container['token_requestor_id'] = $data['token_requestor_id'] ?? null;
        $this->container['token_requestor_name'] = $data['token_requestor_name'] ?? null;
        $this->container['token_score'] = $data['token_score'] ?? null;
        $this->container['token_type'] = $data['token_type'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['pan_reference_id'] === null) {
            $invalidProperties[] = "'pan_reference_id' can't be null";
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
     * Gets correlation_id
     *
     * @return string|null
     */
    public function getCorrelationId()
    {
        return $this->container['correlation_id'];
    }

    /**
     * Sets correlation_id
     *
     * @param string|null $correlation_id Unique value representing a tokenization request (Mastercard only).
     *
     * @return self
     */
    public function setCorrelationId($correlation_id)
    {
        $this->container['correlation_id'] = $correlation_id;

        return $this;
    }

    /**
     * Gets pan_reference_id
     *
     * @return string
     */
    public function getPanReferenceId()
    {
        return $this->container['pan_reference_id'];
    }

    /**
     * Sets pan_reference_id
     *
     * @param string $pan_reference_id Unique identifier of the digital wallet token primary account number (PAN) within the card network.
     *
     * @return self
     */
    public function setPanReferenceId($pan_reference_id)
    {
        $this->container['pan_reference_id'] = $pan_reference_id;

        return $this;
    }

    /**
     * Gets token_assurance_level
     *
     * @return string|null
     */
    public function getTokenAssuranceLevel()
    {
        return $this->container['token_assurance_level'];
    }

    /**
     * Sets token_assurance_level
     *
     * @param string|null $token_assurance_level _(Mastercard only)_ Represents the confidence level in the digital wallet token.
     *
     * @return self
     */
    public function setTokenAssuranceLevel($token_assurance_level)
    {
        $this->container['token_assurance_level'] = $token_assurance_level;

        return $this;
    }

    /**
     * Gets token_eligibility_decision
     *
     * @return string|null
     */
    public function getTokenEligibilityDecision()
    {
        return $this->container['token_eligibility_decision'];
    }

    /**
     * Sets token_eligibility_decision
     *
     * @param string|null $token_eligibility_decision Digital wallet's decision as to whether the digital wallet token should be provisioned.
     *
     * @return self
     */
    public function setTokenEligibilityDecision($token_eligibility_decision)
    {
        $this->container['token_eligibility_decision'] = $token_eligibility_decision;

        return $this;
    }

    /**
     * Gets token_expiration
     *
     * @return string|null
     */
    public function getTokenExpiration()
    {
        return $this->container['token_expiration'];
    }

    /**
     * Sets token_expiration
     *
     * @param string|null $token_expiration Expiration date of the digital wallet token.
     *
     * @return self
     */
    public function setTokenExpiration($token_expiration)
    {
        $this->container['token_expiration'] = $token_expiration;

        return $this;
    }

    /**
     * Gets token_pan
     *
     * @return string|null
     */
    public function getTokenPan()
    {
        return $this->container['token_pan'];
    }

    /**
     * Sets token_pan
     *
     * @param string|null $token_pan Primary account number (PAN) of the digital wallet token.
     *
     * @return self
     */
    public function setTokenPan($token_pan)
    {
        $this->container['token_pan'] = $token_pan;

        return $this;
    }

    /**
     * Gets token_reference_id
     *
     * @return string|null
     */
    public function getTokenReferenceId()
    {
        return $this->container['token_reference_id'];
    }

    /**
     * Sets token_reference_id
     *
     * @param string|null $token_reference_id Unique identifier of the digital wallet token within the card network.
     *
     * @return self
     */
    public function setTokenReferenceId($token_reference_id)
    {
        $this->container['token_reference_id'] = $token_reference_id;

        return $this;
    }

    /**
     * Gets token_requestor_id
     *
     * @return string|null
     */
    public function getTokenRequestorId()
    {
        return $this->container['token_requestor_id'];
    }

    /**
     * Sets token_requestor_id
     *
     * @param string|null $token_requestor_id Unique numerical identifier of the token requestor within the card network. These ID numbers map to `token_requestor_name` field values as follows:  *Mastercard*  * 50110030273 – `APPLE_PAY` * 50120834693 – `ANDROID_PAY` * 50139059239 – `SAMSUNG_PAY`  *Visa*  * 40010030273 – `APPLE_PAY` * 40010075001 – `ANDROID_PAY` * 40010043095 – `SAMSUNG_PAY` * 40010075196 – `MICROSOFT_PAY` * 40010075338 – `VISA_CHECKOUT` * 40010075449 – `FACEBOOK` * 40010075839 – `NETFLIX` * 40010077056 – `FITBIT_PAY` * 40010069887 – `GARMIN_PAY`
     *
     * @return self
     */
    public function setTokenRequestorId($token_requestor_id)
    {
        $this->container['token_requestor_id'] = $token_requestor_id;

        return $this;
    }

    /**
     * Gets token_requestor_name
     *
     * @return string|null
     */
    public function getTokenRequestorName()
    {
        return $this->container['token_requestor_name'];
    }

    /**
     * Sets token_requestor_name
     *
     * @param string|null $token_requestor_name Name of the token requestor within the card network.  *NOTE:* The list of example values for this field is maintained by the card networks and is subject to change.
     *
     * @return self
     */
    public function setTokenRequestorName($token_requestor_name)
    {
        $this->container['token_requestor_name'] = $token_requestor_name;

        return $this;
    }

    /**
     * Gets token_score
     *
     * @return string|null
     */
    public function getTokenScore()
    {
        return $this->container['token_score'];
    }

    /**
     * Sets token_score
     *
     * @param string|null $token_score Token score assigned by the digital wallet.
     *
     * @return self
     */
    public function setTokenScore($token_score)
    {
        $this->container['token_score'] = $token_score;

        return $this;
    }

    /**
     * Gets token_type
     *
     * @return string|null
     */
    public function getTokenType()
    {
        return $this->container['token_type'];
    }

    /**
     * Sets token_type
     *
     * @param string|null $token_type Type of the digital wallet token.
     *
     * @return self
     */
    public function setTokenType($token_type)
    {
        $this->container['token_type'] = $token_type;

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


