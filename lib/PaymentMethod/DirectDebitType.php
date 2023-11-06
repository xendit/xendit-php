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
 * DirectDebitType Class Doc Comment
 *
 * @category Class
 * @package  Xendit
 */
class DirectDebitType
{
    /**
     * Possible values of this enum
     */
    
    public const DEBIT_CARD = 'DEBIT_CARD';
    
    public const BANK_ACCOUNT = 'BANK_ACCOUNT';
    
    public const BANK_REDIRECT = 'BANK_REDIRECT';
    
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
            self::DEBIT_CARD,
            self::BANK_ACCOUNT,
            self::BANK_REDIRECT,
            self::XENDIT_ENUM_DEFAULT_FALLBACK
        ];
    }
}


