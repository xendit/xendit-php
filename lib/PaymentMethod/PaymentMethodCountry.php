<?php
/**
 * PaymentMethodCountry
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
 * PaymentMethodCountry Class Doc Comment
 *
 * @category Class
 * @package  Xendit
 */
class PaymentMethodCountry
{
    /**
     * Possible values of this enum
     */
    
    public const PH = 'PH';
    
    public const ID = 'ID';
    
    public const VN = 'VN';
    
    public const TH = 'TH';
    
    public const MY = 'MY';
    
    public const US = 'US';
    
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
            throw new \InvalidArgumentException(sprintf('Invalid value for enum PaymentMethodCountry: %s', $value));
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
            self::PH,
            self::ID,
            self::VN,
            self::TH,
            self::MY,
            self::US,
            self::XENDIT_ENUM_DEFAULT_FALLBACK
        ];
    }
}


