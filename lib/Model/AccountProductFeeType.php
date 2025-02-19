<?php
/**
 * AccountProductFeeType
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
 * AccountProductFeeType Class Doc Comment
 *
 * @category Class
 * @description Type of fee.
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class AccountProductFeeType
{
    /**
     * Possible values of this enum
     */
    const LATE_PAYMENT_FEE = 'LATE_PAYMENT_FEE';

    const RETURNED_PAYMENT_FEE = 'RETURNED_PAYMENT_FEE';

    const MONTHLY_FEE = 'MONTHLY_FEE';

    const ANNUAL_FEE = 'ANNUAL_FEE';

    const FOREIGN_TRANSACTION_FEE = 'FOREIGN_TRANSACTION_FEE';

    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::LATE_PAYMENT_FEE,
            self::RETURNED_PAYMENT_FEE,
            self::MONTHLY_FEE,
            self::ANNUAL_FEE,
            self::FOREIGN_TRANSACTION_FEE
        ];
    }
}


