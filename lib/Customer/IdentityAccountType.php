<?php
/**
 * IdentityAccountType
 *
 * PHP version 7.4
 *
 * @category Class
 * @package  Xendit
 */

/**
 * XENDIT SDK openapi spec
 *
 * The version of the OpenAPI document: 1.0.0
 */

/**
 * NOTE: This class is auto generated.
 * Do not edit the class manually.
 */

namespace Xendit\Customer;

use \Xendit\ObjectSerializer;
use \Xendit\Model\ModelInterface;

/**
 * IdentityAccountType Class Doc Comment
 *
 * @category Class
 * @package  Xendit
 */
class IdentityAccountType
{
    /**
     * Possible values of this enum
     */
    
    public const BANK_ACCOUNT = 'BANK_ACCOUNT';
    
    public const EWALLET = 'EWALLET';
    
    public const CREDIT_CARD = 'CREDIT_CARD';
    
    public const PAY_LATER = 'PAY_LATER';
    
    public const OTC = 'OTC';
    
    public const QR_CODE = 'QR_CODE';
    
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
            throw new \InvalidArgumentException(sprintf('Invalid value for enum IdentityAccountType: %s', $value));
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
            self::BANK_ACCOUNT,
            self::EWALLET,
            self::CREDIT_CARD,
            self::PAY_LATER,
            self::OTC,
            self::QR_CODE,
            self::XENDIT_ENUM_DEFAULT_FALLBACK
        ];
    }
}


