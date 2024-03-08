<?php
/**
 * BankCode
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
 * BankCode Class Doc Comment
 *
 * @category Class
 * @description Representing the available bank channels used for invoice-related transactions.
 * @package  Xendit
 */
class BankCode
{
    /**
     * Possible values of this enum
     */
    
    public const BCA = 'BCA';
    
    public const BNI = 'BNI';
    
    public const BRI = 'BRI';
    
    public const MANDIRI = 'MANDIRI';
    
    public const PERMATA = 'PERMATA';
    
    public const BSI = 'BSI';
    
    public const BJB = 'BJB';
    
    public const SAHABAT_SAMPOERNA = 'SAHABAT_SAMPOERNA';
    
    public const CIMB = 'CIMB';
    
    public const BNC = 'BNC';
    
    public const HANA = 'HANA';
    
    public const MUAMALAT = 'MUAMALAT';
    
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
            throw new \InvalidArgumentException(sprintf('Invalid value for enum BankCode: %s', $value));
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
            self::BCA,
            self::BNI,
            self::BRI,
            self::MANDIRI,
            self::PERMATA,
            self::BSI,
            self::BJB,
            self::SAHABAT_SAMPOERNA,
            self::CIMB,
            self::BNC,
            self::HANA,
            self::MUAMALAT,
            self::XENDIT_ENUM_DEFAULT_FALLBACK
        ];
    }
}


