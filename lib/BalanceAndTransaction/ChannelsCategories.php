<?php
/**
 * ChannelsCategories
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
 * ChannelsCategories Class Doc Comment
 *
 * @category Class
 * @package  Xendit
 */
class ChannelsCategories
{
    /**
     * Possible values of this enum
     */
    
    public const BANK = 'BANK';
    
    public const CARDLESS_CREDIT = 'CARDLESS_CREDIT';
    
    public const PAYLATER = 'PAYLATER';
    
    public const CARDS = 'CARDS';
    
    public const CASH = 'CASH';
    
    public const DIRECT_DEBIT = 'DIRECT_DEBIT';
    
    public const EWALLET = 'EWALLET';
    
    public const INVOICE = 'INVOICE';
    
    public const QR_CODE = 'QR_CODE';
    
    public const RETAIL_OUTLET = 'RETAIL_OUTLET';
    
    public const VIRTUAL_ACCOUNT = 'VIRTUAL_ACCOUNT';
    
    public const XENPLATFORM = 'XENPLATFORM';
    
    public const DIRECT_BANK_TRANSFER = 'DIRECT_BANK_TRANSFER';
    
    public const OTHER = 'OTHER';
    
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
            throw new \InvalidArgumentException(sprintf('Invalid value for enum ChannelsCategories: %s', $value));
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
            self::CARDLESS_CREDIT,
            self::PAYLATER,
            self::CARDS,
            self::CASH,
            self::DIRECT_DEBIT,
            self::EWALLET,
            self::INVOICE,
            self::QR_CODE,
            self::RETAIL_OUTLET,
            self::VIRTUAL_ACCOUNT,
            self::XENPLATFORM,
            self::DIRECT_BANK_TRANSFER,
            self::OTHER,
            self::XENDIT_ENUM_DEFAULT_FALLBACK
        ];
    }
}


