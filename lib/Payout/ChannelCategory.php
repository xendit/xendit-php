<?php
/**
 * ChannelCategory
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
 * ChannelCategory Class Doc Comment
 *
 * @category Class
 * @description Category of channel code, as some channels might require more fields during processing
 * @package  Xendit
 */
class ChannelCategory
{
    /**
     * Possible values of this enum
     */
    
    public const BANK = 'BANK';
    
    public const EWALLET = 'EWALLET';
    
    public const OTC = 'OTC';
    
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
            throw new \InvalidArgumentException(sprintf('Invalid value for enum ChannelCategory: %s', $value));
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
            self::BANK,
            self::EWALLET,
            self::OTC,
            self::XENDIT_ENUM_DEFAULT_FALLBACK
        ];
    }
}


