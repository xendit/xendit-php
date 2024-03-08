<?php
/**
 * PaylaterType
 *
 * PHP version 7.4
 *
 * @category Class
 * @package  Xendit
 */

/**
 * xendit-invoice-service
 *
 * The version of the OpenAPI document: 1.7.6
 */

/**
 * NOTE: This class is auto generated.
 * Do not edit the class manually.
 */

namespace Xendit\Invoice;

use \Xendit\ObjectSerializer;
use \Xendit\Model\ModelInterface;

/**
 * PaylaterType Class Doc Comment
 *
 * @category Class
 * @description Representing the available paylater channels used for invoice-related transactions.
 * @package  Xendit
 */
class PaylaterType
{
    /**
     * Possible values of this enum
     */
    
    public const KREDIVO = 'KREDIVO';
    
    public const AKULAKU = 'AKULAKU';
    
    public const UANGME = 'UANGME';
    
    public const BILLEASE = 'BILLEASE';
    
    public const CASHALO = 'CASHALO';
    
    public const ATOME = 'ATOME';
    
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
            throw new \InvalidArgumentException(sprintf('Invalid value for enum PaylaterType: %s', $value));
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
            self::KREDIVO,
            self::AKULAKU,
            self::UANGME,
            self::BILLEASE,
            self::CASHALO,
            self::ATOME,
            self::XENDIT_ENUM_DEFAULT_FALLBACK
        ];
    }
}


