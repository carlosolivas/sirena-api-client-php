<?php
/**
 * ProspectStatus
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
 * ProspectStatus Class Doc Comment
 *
 * @category Class
 * @description Prospect status:  * unclaimed - Prospect hasn&#39;t been claimed or assigned to an agent.  * new - Prospect is assigned to an agent but no contact has happened yet.  * followUp - Prospect has been contacted and is open or scheduled.  * processing - Prospect is being transferred to a group or agent.  * archived - Prospect is archived.
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ProspectStatus
{
    /**
     * Possible values of this enum
     */
    const UNCLAIMED = 'unclaimed';
    const _NEW = 'new';
    const FOLLOW_UP = 'followUp';
    const PROCESSING = 'processing';
    const ARCHIVED = 'archived';
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::UNCLAIMED,
            self::_NEW,
            self::FOLLOW_UP,
            self::PROCESSING,
            self::ARCHIVED,
        ];
    }
}


