<?php
/**
 * PaymentMethodType
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
 * PaymentMethodType Class Doc Comment
 *
 * @category Class
 * @package  Xendit
 */
class PaymentMethodType
{
    /**
     * Possible values of this enum
     */
    
    public const CARD = 'CARD';
    
    public const DIRECT_DEBIT = 'DIRECT_DEBIT';
    
    public const EWALLET = 'EWALLET';
    
    public const OVER_THE_COUNTER = 'OVER_THE_COUNTER';
    
    public const QR_CODE = 'QR_CODE';
    
    public const VIRTUAL_ACCOUNT = 'VIRTUAL_ACCOUNT';
    
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
            throw new \InvalidArgumentException(sprintf('Invalid value for enum PaymentMethodType: %s', $value));
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
            self::CARD,
            self::DIRECT_DEBIT,
            self::EWALLET,
            self::OVER_THE_COUNTER,
            self::QR_CODE,
            self::VIRTUAL_ACCOUNT,
            self::XENDIT_ENUM_DEFAULT_FALLBACK
        ];
    }
}


