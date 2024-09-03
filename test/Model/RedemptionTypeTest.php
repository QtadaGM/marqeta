<?php
/**
 * RedemptionTypeTest
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
 * Please update the test case below to test the model.
 */

namespace OpenAPI\Client\Test\Model;

use PHPUnit\Framework\TestCase;

/**
 * RedemptionTypeTest Class Doc Comment
 *
 * @category    Class
 * @description Type of redemption.  * &#x60;EXTERNAL&#x60; - You issue the redemption on your external platform; Marqeta adjusts the reward program balance on the system of record. * &#x60;STATEMENT_CREDIT&#x60; - Marqeta issues the redemption as a statement credit on the associated account. + *NOTE*: This creates a new journal entry on the account and cannot be undone. * &#x60;ACH&#x60; - The reward redemption is issued as an ACH transfer to the receiving account.
 * @package     OpenAPI\Client
 * @author      OpenAPI Generator team
 * @link        https://openapi-generator.tech
 */
class RedemptionTypeTest extends TestCase
{

    /**
     * Setup before running any test case
     */
    public static function setUpBeforeClass(): void
    {
    }

    /**
     * Setup before running each test case
     */
    public function setUp(): void
    {
    }

    /**
     * Clean up after running each test case
     */
    public function tearDown(): void
    {
    }

    /**
     * Clean up after running all test cases
     */
    public static function tearDownAfterClass(): void
    {
    }

    /**
     * Test "RedemptionType"
     */
    public function testRedemptionType()
    {
        // TODO: implement
        $this->markTestIncomplete('Not implemented');
    }
}