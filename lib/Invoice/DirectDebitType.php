<?php
/**
 * DirectDebitType
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
 * DirectDebitType Class Doc Comment
 *
 * @category Class
 * @description Representing the available Direct Debit channels used for invoice-related transactions.
 * @package  Xendit
 */
class DirectDebitType
{
    /**
     * Possible values of this enum
     */
    
    public const BA_BRI = 'BA_BRI';
    
    public const DC_BRI = 'DC_BRI';
    
    public const DD_BRI = 'DD_BRI';
    
    public const DD_MANDIRI = 'DD_MANDIRI';
    
    public const BA_BPI = 'BA_BPI';
    
    public const DC_BPI = 'DC_BPI';
    
    public const DD_BPI = 'DD_BPI';
    
    public const BA_UBP = 'BA_UBP';
    
    public const DC_UBP = 'DC_UBP';
    
    public const DD_UBP = 'DD_UBP';
    
    public const BCA_KLIKPAY = 'BCA_KLIKPAY';
    
    public const BA_BCA_KLIKPAY = 'BA_BCA_KLIKPAY';
    
    public const DC_BCA_KLIKPAY = 'DC_BCA_KLIKPAY';
    
    public const DD_BCA_KLIKPAY = 'DD_BCA_KLIKPAY';
    
    public const DD_BDO_EPAY = 'DD_BDO_EPAY';
    
    public const DD_RCBC = 'DD_RCBC';
    
    public const DD_CHINABANK = 'DD_CHINABANK';
    
    public const BA_CHINABANK = 'BA_CHINABANK';
    
    public const DC_CHINABANK = 'DC_CHINABANK';
    
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
            throw new \InvalidArgumentException(sprintf('Invalid value for enum DirectDebitType: %s', $value));
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
            self::BA_BRI,
            self::DC_BRI,
            self::DD_BRI,
            self::DD_MANDIRI,
            self::BA_BPI,
            self::DC_BPI,
            self::DD_BPI,
            self::BA_UBP,
            self::DC_UBP,
            self::DD_UBP,
            self::BCA_KLIKPAY,
            self::BA_BCA_KLIKPAY,
            self::DC_BCA_KLIKPAY,
            self::DD_BCA_KLIKPAY,
            self::DD_BDO_EPAY,
            self::DD_RCBC,
            self::DD_CHINABANK,
            self::BA_CHINABANK,
            self::DC_CHINABANK,
            self::XENDIT_ENUM_DEFAULT_FALLBACK
        ];
    }
}


