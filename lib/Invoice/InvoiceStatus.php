<?php
/**
 * InvoiceStatus
 *
 * PHP version 7.4
 *
 * @category Class
 * @package  Xendit
 */

/**
 * xendit-invoice-service
 *
 * The version of the OpenAPI document: 1.5.0
 */

/**
 * NOTE: This class is auto generated.
 * Do not edit the class manually.
 */

namespace Xendit\Invoice;

use \Xendit\ObjectSerializer;
use \Xendit\Model\ModelInterface;

/**
 * InvoiceStatus Class Doc Comment
 *
 * @category Class
 * @description Representing the status of an invoice.
 * @package  Xendit
 */
class InvoiceStatus
{
    /**
     * Possible values of this enum
     */
    
    public const PENDING = 'PENDING';
    
    public const PAID = 'PAID';
    
    public const SETTLED = 'SETTLED';
    
    public const EXPIRED = 'EXPIRED';
    
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
            throw new \InvalidArgumentException(sprintf('Invalid value for enum InvoiceStatus: %s', $value));
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
            self::PENDING,
            self::PAID,
            self::SETTLED,
            self::EXPIRED,
            self::XENDIT_ENUM_DEFAULT_FALLBACK
        ];
    }
}


