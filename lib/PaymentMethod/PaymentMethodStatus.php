<?php
/**
 * PaymentMethodStatus
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
 * PaymentMethodStatus Class Doc Comment
 *
 * @category Class
 * @package  Xendit
 */
class PaymentMethodStatus
{
    /**
     * Possible values of this enum
     */
    
    public const ACTIVE = 'ACTIVE';
    
    public const EXPIRED = 'EXPIRED';
    
    public const INACTIVE = 'INACTIVE';
    
    public const PENDING = 'PENDING';
    
    public const REQUIRES_ACTION = 'REQUIRES_ACTION';
    
    public const FAILED = 'FAILED';
    
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
            throw new \InvalidArgumentException(sprintf('Invalid value for enum PaymentMethodStatus: %s', $value));
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
            self::ACTIVE,
            self::EXPIRED,
            self::INACTIVE,
            self::PENDING,
            self::REQUIRES_ACTION,
            self::FAILED,
            self::XENDIT_ENUM_DEFAULT_FALLBACK
        ];
    }
}


