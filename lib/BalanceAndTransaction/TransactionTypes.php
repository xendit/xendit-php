<?php
/**
 * TransactionTypes
 *
 * PHP version 7.4
 *
 * @category Class
 * @package  Xendit
 */

/**
 * Transaction Service V4 API
 *
 * The version of the OpenAPI document: 3.5.2
 */

/**
 * NOTE: This class is auto generated.
 * Do not edit the class manually.
 */

namespace Xendit\BalanceAndTransaction;

use \Xendit\ObjectSerializer;
use \Xendit\Model\ModelInterface;

/**
 * TransactionTypes Class Doc Comment
 *
 * @category Class
 * @package  Xendit
 */
class TransactionTypes
{
    /**
     * Possible values of this enum
     */
    
    public const BATCH_DISBURSEMENT = 'BATCH_DISBURSEMENT';
    
    public const DISBURSEMENT = 'DISBURSEMENT';
    
    public const PAYMENT = 'PAYMENT';
    
    public const REMITTANCE = 'REMITTANCE';
    
    public const REMITTANCE_PAYOUT = 'REMITTANCE_PAYOUT';
    
    public const REMITTANCE_COLLECTION = 'REMITTANCE_COLLECTION';
    
    public const TRANSFER = 'TRANSFER';
    
    public const PLATFORM_FEE = 'PLATFORM_FEE';
    
    public const REFUND = 'REFUND';
    
    public const CASHBACK = 'CASHBACK';
    
    public const TOPUP = 'TOPUP';
    
    public const WITHDRAWAL = 'WITHDRAWAL';
    
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
            throw new \InvalidArgumentException(sprintf('Invalid value for enum TransactionTypes: %s', $value));
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
            self::BATCH_DISBURSEMENT,
            self::DISBURSEMENT,
            self::PAYMENT,
            self::REMITTANCE,
            self::REMITTANCE_PAYOUT,
            self::REMITTANCE_COLLECTION,
            self::TRANSFER,
            self::PLATFORM_FEE,
            self::REFUND,
            self::CASHBACK,
            self::TOPUP,
            self::WITHDRAWAL,
            self::OTHER,
            self::XENDIT_ENUM_DEFAULT_FALLBACK
        ];
    }
}


