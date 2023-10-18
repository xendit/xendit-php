<?php
/**
 * EwalletType
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
 * EwalletType Class Doc Comment
 *
 * @category Class
 * @description Representing the available eWallet channels used for invoice-related transactions.
 * @package  Xendit
 */
class EwalletType
{
    /**
     * Possible values of this enum
     */
    
    public const OVO = 'OVO';
    
    public const DANA = 'DANA';
    
    public const LINKAJA = 'LINKAJA';
    
    public const PAYMAYA = 'PAYMAYA';
    
    public const SHOPEEPAY = 'SHOPEEPAY';
    
    public const GCASH = 'GCASH';
    
    public const GRABPAY = 'GRABPAY';
    
    public const ASTRAPAY = 'ASTRAPAY';
    
    public const NEXCASH = 'NEXCASH';
    
    public const JENIUSPAY = 'JENIUSPAY';
    
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
            throw new \InvalidArgumentException(sprintf('Invalid value for enum EwalletType: %s', $value));
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
            self::OVO,
            self::DANA,
            self::LINKAJA,
            self::PAYMAYA,
            self::SHOPEEPAY,
            self::GCASH,
            self::GRABPAY,
            self::ASTRAPAY,
            self::NEXCASH,
            self::JENIUSPAY,
            self::XENDIT_ENUM_DEFAULT_FALLBACK
        ];
    }
}


