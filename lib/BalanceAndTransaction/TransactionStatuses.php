<?php
/**
 * TransactionStatuses
 *
 * PHP version 7.4
 *
 * @category Class
 * @package  Xendit
 */

/**
 * Transaction Service V4 API
 *
 * The version of the OpenAPI document: 5.4.0
 */

/**
 * NOTE: This class is auto generated.
 * Do not edit the class manually.
 */

namespace Xendit\BalanceAndTransaction;

use \Xendit\ObjectSerializer;
use \Xendit\Model\ModelInterface;

/**
 * TransactionStatuses Class Doc Comment
 *
 * @category Class
 * @package  Xendit
 */
class TransactionStatuses
{
    /**
     * Possible values of this enum
     */
    
    public const SUCCESS = 'SUCCESS';
    
    public const PENDING = 'PENDING';
    
    public const FAILED = 'FAILED';
    
    public const REVERSED = 'REVERSED';
    
    public const VOIDED = 'VOIDED';
    
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
            throw new \InvalidArgumentException(sprintf('Invalid value for enum TransactionStatuses: %s', $value));
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
            self::SUCCESS,
            self::PENDING,
            self::FAILED,
            self::REVERSED,
            self::VOIDED,
            self::XENDIT_ENUM_DEFAULT_FALLBACK
        ];
    }
}


