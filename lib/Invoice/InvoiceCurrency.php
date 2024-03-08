<?php
/**
 * InvoiceCurrency
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
 * InvoiceCurrency Class Doc Comment
 *
 * @category Class
 * @description Representing the currency used for an invoice.
 * @package  Xendit
 */
class InvoiceCurrency
{
    /**
     * Possible values of this enum
     */
    
    public const IDR = 'IDR';
    
    public const USD = 'USD';
    
    public const THB = 'THB';
    
    public const VND = 'VND';
    
    public const PHP = 'PHP';
    
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
            throw new \InvalidArgumentException(sprintf('Invalid value for enum InvoiceCurrency: %s', $value));
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
            self::IDR,
            self::USD,
            self::THB,
            self::VND,
            self::PHP,
            self::XENDIT_ENUM_DEFAULT_FALLBACK
        ];
    }
}


