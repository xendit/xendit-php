<?php
/**
 * PaymentRequestStatus
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
 * PaymentRequestStatus Class Doc Comment
 *
 * @category Class
 * @package  Xendit
 */
class PaymentRequestStatus
{
    /**
     * Possible values of this enum
     */
    
    public const PENDING = 'PENDING';
    
    public const REQUIRES_ACTION = 'REQUIRES_ACTION';
    
    public const CANCELED = 'CANCELED';
    
    public const SUCCEEDED = 'SUCCEEDED';
    
    public const FAILED = 'FAILED';
    
    public const VOIDED = 'VOIDED';
    
    public const UNKNOWN = 'UNKNOWN';
    
    public const AWAITING_CAPTURE = 'AWAITING_CAPTURE';
    
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
            throw new \InvalidArgumentException(sprintf('Invalid value for enum PaymentRequestStatus: %s', $value));
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
            self::PENDING,
            self::REQUIRES_ACTION,
            self::CANCELED,
            self::SUCCEEDED,
            self::FAILED,
            self::VOIDED,
            self::UNKNOWN,
            self::AWAITING_CAPTURE,
            self::XENDIT_ENUM_DEFAULT_FALLBACK
        ];
    }
}


