<?php
/**
 * OverTheCounterChannelCode
 *
 * PHP version 7.4
 *
 * @category Class
 * @package  Xendit
 */

/**
 * Payment Requests
 *
 * The version of the OpenAPI document: 1.45.2
 */

/**
 * NOTE: This class is auto generated.
 * Do not edit the class manually.
 */

namespace Xendit\PaymentRequest;

use \Xendit\ObjectSerializer;
use \Xendit\Model\ModelInterface;

/**
 * OverTheCounterChannelCode Class Doc Comment
 *
 * @category Class
 * @description Over The Counter Channel Code
 * @package  Xendit
 */
class OverTheCounterChannelCode
{
    /**
     * Possible values of this enum
     */
    
    public const _7_ELEVEN = '7ELEVEN';
    
    public const _7_ELEVEN_CLIQQ = '7ELEVEN_CLIQQ';
    
    public const CEBUANA = 'CEBUANA';
    
    public const ECPAY = 'ECPAY';
    
    public const PALAWAN = 'PALAWAN';
    
    public const MLHUILLIER = 'MLHUILLIER';
    
    public const ECPAY_DRAGONLOAN = 'ECPAY_DRAGONLOAN';
    
    public const LBC = 'LBC';
    
    public const ECPAY_SCHOOL = 'ECPAY_SCHOOL';
    
    public const RD_PAWNSHOP = 'RD_PAWNSHOP';
    
    public const CVM = 'CVM';
    
    public const USSC = 'USSC';
    
    public const SM_BILLS = 'SM_BILLS';
    
    public const ROBINSONS_BILLS = 'ROBINSONS_BILLS';
    
    public const ALFAMART = 'ALFAMART';
    
    public const INDOMARET = 'INDOMARET';
    
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
            throw new \InvalidArgumentException(sprintf('Invalid value for enum OverTheCounterChannelCode: %s', $value));
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
            self::_7_ELEVEN,
            self::_7_ELEVEN_CLIQQ,
            self::CEBUANA,
            self::ECPAY,
            self::PALAWAN,
            self::MLHUILLIER,
            self::ECPAY_DRAGONLOAN,
            self::LBC,
            self::ECPAY_SCHOOL,
            self::RD_PAWNSHOP,
            self::CVM,
            self::USSC,
            self::SM_BILLS,
            self::ROBINSONS_BILLS,
            self::ALFAMART,
            self::INDOMARET,
            self::XENDIT_ENUM_DEFAULT_FALLBACK
        ];
    }
}


