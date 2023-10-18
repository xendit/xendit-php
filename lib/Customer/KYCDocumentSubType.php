<?php
/**
 * KYCDocumentSubType
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
 * KYCDocumentSubType Class Doc Comment
 *
 * @category Class
 * @package  Xendit
 */
class KYCDocumentSubType
{
    /**
     * Possible values of this enum
     */
    
    public const NATIONAL_ID = 'NATIONAL_ID';
    
    public const CONSULAR_ID = 'CONSULAR_ID';
    
    public const VOTER_ID = 'VOTER_ID';
    
    public const POSTAL_ID = 'POSTAL_ID';
    
    public const RESIDENCE_PERMIT = 'RESIDENCE_PERMIT';
    
    public const TAX_ID = 'TAX_ID';
    
    public const STUDENT_ID = 'STUDENT_ID';
    
    public const MILITARY_ID = 'MILITARY_ID';
    
    public const MEDICAL_ID = 'MEDICAL_ID';
    
    public const OTHERS = 'OTHERS';
    
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
            throw new \InvalidArgumentException(sprintf('Invalid value for enum KYCDocumentSubType: %s', $value));
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
            self::NATIONAL_ID,
            self::CONSULAR_ID,
            self::VOTER_ID,
            self::POSTAL_ID,
            self::RESIDENCE_PERMIT,
            self::TAX_ID,
            self::STUDENT_ID,
            self::MILITARY_ID,
            self::MEDICAL_ID,
            self::OTHERS,
            self::XENDIT_ENUM_DEFAULT_FALLBACK
        ];
    }
}


