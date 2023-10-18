<?php
/**
 * ChannelAccountType
 *
 * PHP version 7.4
 *
 * @category Class
 * @package  Xendit
 */

/**
 * Payout Service
 *
 * The version of the OpenAPI document: 1.0.0
 */

/**
 * NOTE: This class is auto generated.
 * Do not edit the class manually.
 */

namespace Xendit\Payout;

use \Xendit\ObjectSerializer;
use \Xendit\Model\ModelInterface;

/**
 * ChannelAccountType Class Doc Comment
 *
 * @category Class
 * @description Available account types (applicable for MY_DUITNOW)
 * @package  Xendit
 */
class ChannelAccountType
{
    /**
     * Possible values of this enum
     */
    
    public const NATIONAL_ID = 'NATIONAL_ID';
    
    public const MOBILE_NO = 'MOBILE_NO';
    
    public const PASSPORT = 'PASSPORT';
    
    public const BUSINESS_REGISTRATION = 'BUSINESS_REGISTRATION';
    
    public const BANK_ACCOUNT = 'BANK_ACCOUNT';
    
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
            throw new \InvalidArgumentException(sprintf('Invalid value for enum ChannelAccountType: %s', $value));
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
            self::MOBILE_NO,
            self::PASSPORT,
            self::BUSINESS_REGISTRATION,
            self::BANK_ACCOUNT,
            self::XENDIT_ENUM_DEFAULT_FALLBACK
        ];
    }
}


