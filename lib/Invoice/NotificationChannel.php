<?php
/**
 * NotificationChannel
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
 * NotificationChannel Class Doc Comment
 *
 * @category Class
 * @description Representing a notification channel for sending messages.
 * @package  Xendit
 */
class NotificationChannel
{
    /**
     * Possible values of this enum
     */
    
    public const EMAIL = 'email';
    
    public const SMS = 'sms';
    
    public const WHATSAPP = 'whatsapp';
    
    public const VIBER = 'viber';
    
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
            throw new \InvalidArgumentException(sprintf('Invalid value for enum NotificationChannel: %s', $value));
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
            self::EMAIL,
            self::SMS,
            self::WHATSAPP,
            self::VIBER,
            self::XENDIT_ENUM_DEFAULT_FALLBACK
        ];
    }
}


