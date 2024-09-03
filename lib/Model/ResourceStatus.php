<?php
/**
 * ResourceStatus
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
 * ResourceStatus Class Doc Comment
 *
 * @category Class
 * @description Status of the credit product.  * &#x60;DRAFT&#x60; - The credit product is in the process of being created. * &#x60;PENDING_APPROVAL&#x60; - The credit product has been created and is awaiting approval. * &#x60;SENT_FOR_REVISION&#x60; - The credit product has been returned for revision. * &#x60;ACTIVE&#x60; - The credit product is active. * &#x60;REJECTED&#x60; - The credit product has been rejected; this status cannot be changed. * &#x60;ARCHIVED&#x60; - The previously active credit product has been archived.
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class ResourceStatus
{
    /**
     * Possible values of this enum
     */
    const DRAFT = 'DRAFT';

    const PENDING_APPROVAL = 'PENDING_APPROVAL';

    const SENT_FOR_REVISION = 'SENT_FOR_REVISION';

    const ACTIVE = 'ACTIVE';

    const REJECTED = 'REJECTED';

    const ARCHIVED = 'ARCHIVED';

    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::DRAFT,
            self::PENDING_APPROVAL,
            self::SENT_FOR_REVISION,
            self::ACTIVE,
            self::REJECTED,
            self::ARCHIVED
        ];
    }
}

