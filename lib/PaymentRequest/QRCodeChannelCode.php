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
 * Payment Requests
 *
 * The version of the OpenAPI document: 1.45.2
 */

/**
 * NOTE: This class is auto generated.
 * Do not edit the class manually.
 */

namespace Xendit\PaymentRequest;

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
    
    public const DANA = 'DANA';
    
    public const RCBC = 'RCBC';
    
    public const LINKAJA = 'LINKAJA';
    
    public const PROMPTPAY = 'PROMPTPAY';
    
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
            self::DANA,
            self::RCBC,
            self::LINKAJA,
            self::PROMPTPAY,
            self::XENDIT_ENUM_DEFAULT_FALLBACK
        ];
    }
}


