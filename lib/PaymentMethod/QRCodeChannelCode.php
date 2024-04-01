<?php
/**
 * QRCodeChannelCode
 *
 * PHP version 7.4
 *
 * @category Class
 * @package  Xendit
 */

/**
 * Payment Method Service v2
 *
 * The version of the OpenAPI document: 2.99.0
 */

/**
 * NOTE: This class is auto generated.
 * Do not edit the class manually.
 */

namespace Xendit\PaymentMethod;

use \Xendit\ObjectSerializer;
use \Xendit\Model\ModelInterface;

/**
 * QRCodeChannelCode Class Doc Comment
 *
 * @category Class
 * @description QR Code Channel Code
 * @package  Xendit
 */
class QRCodeChannelCode
{
    /**
     * Possible values of this enum
     */
    
    public const QRIS = 'QRIS';
    
    public const DANA = 'DANA';
    
    public const RCBC = 'RCBC';
    
    public const PROMPTPAY = 'PROMPTPAY';
    
    public const LINKAJA = 'LINKAJA';
    
    public const XENDIT = 'XENDIT';
    
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
            throw new \InvalidArgumentException(sprintf('Invalid value for enum QRCodeChannelCode: %s', $value));
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
            self::QRIS,
            self::DANA,
            self::RCBC,
            self::PROMPTPAY,
            self::LINKAJA,
            self::XENDIT,
            self::XENDIT_ENUM_DEFAULT_FALLBACK
        ];
    }
}


