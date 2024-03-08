<?php
/**
 * InvoiceClientType
 *
 * PHP version 7.4
 *
 * @category Class
 * @package  Xendit
 */

/**
 * xendit-invoice-service
 *
 * The version of the OpenAPI document: 1.7.6
 */

/**
 * NOTE: This class is auto generated.
 * Do not edit the class manually.
 */

namespace Xendit\Invoice;

use \Xendit\ObjectSerializer;
use \Xendit\Model\ModelInterface;

/**
 * InvoiceClientType Class Doc Comment
 *
 * @category Class
 * @description Representing the client type or source of an invoice.
 * @package  Xendit
 */
class InvoiceClientType
{
    /**
     * Possible values of this enum
     */
    
    public const DASHBOARD = 'DASHBOARD';
    
    public const API_GATEWAY = 'API_GATEWAY';
    
    public const INTEGRATION = 'INTEGRATION';
    
    public const ON_DEMAND = 'ON_DEMAND';
    
    public const RECURRING = 'RECURRING';
    
    public const MOBILE = 'MOBILE';
    
    public const XENDIT_ENUM_DEFAULT_FALLBACK = 'UNKNOWN_ENUM_VALUE';

    private $value;

    public function __construct($value = null) {
        $this->value = $value;
    }

    public function getValue() {
        return $this->value;
    }

    public function setValue($value) {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value for enum InvoiceClientType: %s', $value));
        }
        $this->value = $value;
    }

    public function __toString() {
        return (string)$this->value;
    }

    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::DASHBOARD,
            self::API_GATEWAY,
            self::INTEGRATION,
            self::ON_DEMAND,
            self::RECURRING,
            self::MOBILE,
            self::XENDIT_ENUM_DEFAULT_FALLBACK
        ];
    }
}


