<?php
/**
 * KYCDocumentType
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
 * KYCDocumentType Class Doc Comment
 *
 * @category Class
 * @package  Xendit
 */
class KYCDocumentType
{
    /**
     * Possible values of this enum
     */
    
    public const BIRTH_CERTIFICATE = 'BIRTH_CERTIFICATE';
    
    public const BANK_STATEMENT = 'BANK_STATEMENT';
    
    public const DRIVING_LICENSE = 'DRIVING_LICENSE';
    
    public const IDENTITY_CARD = 'IDENTITY_CARD';
    
    public const PASSPORT = 'PASSPORT';
    
    public const VISA = 'VISA';
    
    public const BUSINESS_REGISTRATION = 'BUSINESS_REGISTRATION';
    
    public const BUSINESS_LICENSE = 'BUSINESS_LICENSE';
    
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
            throw new \InvalidArgumentException(sprintf('Invalid value for enum KYCDocumentType: %s', $value));
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
            self::BIRTH_CERTIFICATE,
            self::BANK_STATEMENT,
            self::DRIVING_LICENSE,
            self::IDENTITY_CARD,
            self::PASSPORT,
            self::VISA,
            self::BUSINESS_REGISTRATION,
            self::BUSINESS_LICENSE,
            self::XENDIT_ENUM_DEFAULT_FALLBACK
        ];
    }
}


