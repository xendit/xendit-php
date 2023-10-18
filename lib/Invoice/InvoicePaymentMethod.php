<?php
/**
 * InvoicePaymentMethod
 *
 * PHP version 7.4
 *
 * @category Class
 * @package  Xendit
 */

/**
 * xendit-invoice-service
 *
 * The version of the OpenAPI document: 1.5.0
 */

/**
 * NOTE: This class is auto generated.
 * Do not edit the class manually.
 */

namespace Xendit\Invoice;

use \Xendit\ObjectSerializer;
use \Xendit\Model\ModelInterface;

/**
 * InvoicePaymentMethod Class Doc Comment
 *
 * @category Class
 * @description Representing the payment method used for an invoice.
 * @package  Xendit
 */
class InvoicePaymentMethod
{
    /**
     * Possible values of this enum
     */
    
    public const POOL = 'POOL';
    
    public const CALLBACK_VIRTUAL_ACCOUNT = 'CALLBACK_VIRTUAL_ACCOUNT';
    
    public const CREDIT_CARD = 'CREDIT_CARD';
    
    public const RETAIL_OUTLET = 'RETAIL_OUTLET';
    
    public const QR_CODE = 'QR_CODE';
    
    public const QRIS = 'QRIS';
    
    public const EWALLET = 'EWALLET';
    
    public const DIRECT_DEBIT = 'DIRECT_DEBIT';
    
    public const BANK_TRANSFER = 'BANK_TRANSFER';
    
    public const PAYLATER = 'PAYLATER';
    
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
            throw new \InvalidArgumentException(sprintf('Invalid value for enum InvoicePaymentMethod: %s', $value));
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
            self::POOL,
            self::CALLBACK_VIRTUAL_ACCOUNT,
            self::CREDIT_CARD,
            self::RETAIL_OUTLET,
            self::QR_CODE,
            self::QRIS,
            self::EWALLET,
            self::DIRECT_DEBIT,
            self::BANK_TRANSFER,
            self::PAYLATER,
            self::XENDIT_ENUM_DEFAULT_FALLBACK
        ];
    }
}


