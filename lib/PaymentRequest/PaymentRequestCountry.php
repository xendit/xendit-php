<?php
/**
 * PaymentRequestCountry
 *
 * PHP version 7.4
 *
 * @category Class
 * @package  Xendit
 */

/**
 * Payment Requests
 *
 * The version of the OpenAPI document: 1.59.0
 */

/**
 * NOTE: This class is auto generated.
 * Do not edit the class manually.
 */

namespace Xendit\PaymentRequest;

use \Xendit\ObjectSerializer;
use \Xendit\Model\ModelInterface;

/**
 * PaymentRequestCountry Class Doc Comment
 *
 * @category Class
 * @package  Xendit
 */
class PaymentRequestCountry
{
    /**
     * Possible values of this enum
     */
    
    public const ID = 'ID';
    
    public const PH = 'PH';
    
    public const VN = 'VN';
    
    public const TH = 'TH';
    
    public const MY = 'MY';
    
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
            throw new \InvalidArgumentException(sprintf('Invalid value for enum PaymentRequestCountry: %s', $value));
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
            self::ID,
            self::PH,
            self::VN,
            self::TH,
            self::MY,
            self::XENDIT_ENUM_DEFAULT_FALLBACK
        ];
    }
}


