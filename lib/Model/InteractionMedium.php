<?php
/**
 * InteractionMedium
 *
 * PHP version 5
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Sirena API
 *
 * Sirena API for lead providers, messaging and prospect data manipulation.
 *
 * OpenAPI spec version: 1.10.0
 * Contact: it@sirena.app
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 2.4.22
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Swagger\Client\Model;
use \Swagger\Client\ObjectSerializer;

/**
 * InteractionMedium Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class InteractionMedium
{
    /**
     * Possible values of this enum
     */
    const INBOUND_CALL = 'inboundCall';
    const OUTBOUND_CALL = 'outboundCall';
    const WHATS_APP = 'whatsApp';
    const SMS = 'sms';
    const EMAIL = 'email';
    const WALK_IN = 'walkIn';
    const VISIT = 'visit';
    const OTHER = 'other';
    const TEST_DRIVE = 'testDrive';
    const PHONE_CALL = 'phoneCall';
    const FACEBOOK = 'facebook';
    const INSTAGRAM = 'instagram';
    const WEB_ACTION = 'webAction';
    const CUSTOM_APP = 'customApp';
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::INBOUND_CALL,
            self::OUTBOUND_CALL,
            self::WHATS_APP,
            self::SMS,
            self::EMAIL,
            self::WALK_IN,
            self::VISIT,
            self::OTHER,
            self::TEST_DRIVE,
            self::PHONE_CALL,
            self::FACEBOOK,
            self::INSTAGRAM,
            self::WEB_ACTION,
            self::CUSTOM_APP,
        ];
    }
}


