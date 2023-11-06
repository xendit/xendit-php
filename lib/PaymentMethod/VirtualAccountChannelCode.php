<?php
/**
 * VirtualAccountChannelCode
 *
 * PHP version 7.4
 *
 * @category Class
 * @package  Xendit
 */

/**
 * Payment Method Service v2
 *
 * The version of the OpenAPI document: 2.91.2
 */

/**
 * NOTE: This class is auto generated.
 * Do not edit the class manually.
 */

namespace Xendit\PaymentMethod;

use \Xendit\ObjectSerializer;
use \Xendit\Model\ModelInterface;

/**
 * VirtualAccountChannelCode Class Doc Comment
 *
 * @category Class
 * @description Virtual Account Channel Code
 * @package  Xendit
 */
class VirtualAccountChannelCode
{
    /**
     * Possible values of this enum
     */
    
    public const BCA = 'BCA';
    
    public const BJB = 'BJB';
    
    public const BNI = 'BNI';
    
    public const BRI = 'BRI';
    
    public const MANDIRI = 'MANDIRI';
    
    public const PERMATA = 'PERMATA';
    
    public const BSI = 'BSI';
    
    public const CIMB = 'CIMB';
    
    public const SAHABAT_SAMPOERNA = 'SAHABAT_SAMPOERNA';
    
    public const ARTAJASA = 'ARTAJASA';
    
    public const PV = 'PV';
    
    public const VIETCAPITAL = 'VIETCAPITAL';
    
    public const WOORI = 'WOORI';
    
    public const MSB = 'MSB';
    
    public const STANDARD_CHARTERED = 'STANDARD_CHARTERED';
    
    public const AMBANK = 'AMBANK';
    
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
            throw new \InvalidArgumentException(sprintf('Invalid value for enum VirtualAccountChannelCode: %s', $value));
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
            self::BJB,
            self::BNI,
            self::BRI,
            self::MANDIRI,
            self::PERMATA,
            self::BSI,
            self::CIMB,
            self::SAHABAT_SAMPOERNA,
            self::ARTAJASA,
            self::PV,
            self::VIETCAPITAL,
            self::WOORI,
            self::MSB,
            self::STANDARD_CHARTERED,
            self::AMBANK,
            self::XENDIT_ENUM_DEFAULT_FALLBACK
        ];
    }
}


