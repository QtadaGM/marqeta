<?php
/**
 * DisputeCategory
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
use \OpenAPI\Client\ObjectSerializer;

/**
 * DisputeCategory Class Doc Comment
 *
 * @category Class
 * @description Category to which the dispute belongs.
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class DisputeCategory
{
    /**
     * Possible values of this enum
     */
    const FRAUD = 'FRAUD';

    const AUTH = 'AUTH';

    const PROCESSING_ERROR = 'PROCESSING_ERROR';

    const CONSUMER_DISPUTE = 'CONSUMER_DISPUTE';

    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::FRAUD,
            self::AUTH,
            self::PROCESSING_ERROR,
            self::CONSUMER_DISPUTE
        ];
    }
}


