<?php
/**
 * QrCodeType
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
 * QrCodeType Class Doc Comment
 *
 * @category Class
 * @description Representing the available QR Code channels used for invoice-related transactions.
 * @package  Xendit
 */
class QrCodeType
{
    /**
     * Possible values of this enum
     */
    
    public const QRIS = 'QRIS';
    
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
            throw new \InvalidArgumentException(sprintf('Invalid value for enum QrCodeType: %s', $value));
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
            self::PROMPTPAY,
            self::XENDIT_ENUM_DEFAULT_FALLBACK
        ];
    }
}


