<?php
/**
 * RetailOutletName
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
 * RetailOutletName Class Doc Comment
 *
 * @category Class
 * @description Representing the available retail outlet channels used for invoice-related transactions.
 * @package  Xendit
 */
class RetailOutletName
{
    /**
     * Possible values of this enum
     */
    
    public const ALFAMART = 'ALFAMART';
    
    public const INDOMARET = 'INDOMARET';
    
    public const _7_ELEVEN = '7ELEVEN';
    
    public const CEBUANA = 'CEBUANA';
    
    public const DP_ECPAY_LOAN = 'DP_ECPAY_LOAN';
    
    public const DP_MLHUILLIER = 'DP_MLHUILLIER';
    
    public const DP_PALAWAN = 'DP_PALAWAN';
    
    public const DP_ECPAY_SCHOOL = 'DP_ECPAY_SCHOOL';
    
    public const LBC = 'LBC';
    
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
            throw new \InvalidArgumentException(sprintf('Invalid value for enum RetailOutletName: %s', $value));
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
            self::ALFAMART,
            self::INDOMARET,
            self::_7_ELEVEN,
            self::CEBUANA,
            self::DP_ECPAY_LOAN,
            self::DP_MLHUILLIER,
            self::DP_PALAWAN,
            self::DP_ECPAY_SCHOOL,
            self::LBC,
            self::XENDIT_ENUM_DEFAULT_FALLBACK
        ];
    }
}


