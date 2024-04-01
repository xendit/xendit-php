<?php
/**
 * EWalletChannelCode
 *
 * PHP version 7.4
 *
 * @category Class
 * @package  Xendit
 */

/**
 * Payment Method Service v2
 *
 * The version of the OpenAPI document: 2.99.0
 */

/**
 * NOTE: This class is auto generated.
 * Do not edit the class manually.
 */

namespace Xendit\PaymentMethod;

use \Xendit\ObjectSerializer;
use \Xendit\Model\ModelInterface;

/**
 * EWalletChannelCode Class Doc Comment
 *
 * @category Class
 * @description EWallet Channel Code
 * @package  Xendit
 */
class EWalletChannelCode
{
    /**
     * Possible values of this enum
     */
    
    public const GCASH = 'GCASH';
    
    public const GRABPAY = 'GRABPAY';
    
    public const PAYMAYA = 'PAYMAYA';
    
    public const OVO = 'OVO';
    
    public const DANA = 'DANA';
    
    public const LINKAJA = 'LINKAJA';
    
    public const SHOPEEPAY = 'SHOPEEPAY';
    
    public const SAKUKU = 'SAKUKU';
    
    public const NEXCASH = 'NEXCASH';
    
    public const ASTRAPAY = 'ASTRAPAY';
    
    public const JENIUSPAY = 'JENIUSPAY';
    
    public const APPOTA = 'APPOTA';
    
    public const MOMO = 'MOMO';
    
    public const VNPTWALLET = 'VNPTWALLET';
    
    public const VIETTELPAY = 'VIETTELPAY';
    
    public const ZALOPAY = 'ZALOPAY';
    
    public const WECHATPAY = 'WECHATPAY';
    
    public const LINEPAY = 'LINEPAY';
    
    public const TRUEMONEY = 'TRUEMONEY';
    
    public const ALIPAY = 'ALIPAY';
    
    public const TOUCHNGO = 'TOUCHNGO';
    
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
            throw new \InvalidArgumentException(sprintf('Invalid value for enum EWalletChannelCode: %s', $value));
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
            self::GCASH,
            self::GRABPAY,
            self::PAYMAYA,
            self::OVO,
            self::DANA,
            self::LINKAJA,
            self::SHOPEEPAY,
            self::SAKUKU,
            self::NEXCASH,
            self::ASTRAPAY,
            self::JENIUSPAY,
            self::APPOTA,
            self::MOMO,
            self::VNPTWALLET,
            self::VIETTELPAY,
            self::ZALOPAY,
            self::WECHATPAY,
            self::LINEPAY,
            self::TRUEMONEY,
            self::ALIPAY,
            self::TOUCHNGO,
            self::XENDIT_ENUM_DEFAULT_FALLBACK
        ];
    }
}


