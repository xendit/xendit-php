<?php
/**
 * CardChannelCode
 *
 * PHP version 7.4
 *
 * @category Class
 * @package  Xendit
 */

/**
 * Payment Requests
 *
 * The version of the OpenAPI document: 1.70.0
 */

/**
 * NOTE: This class is auto generated.
 * Do not edit the class manually.
 */

namespace Xendit\PaymentRequest;

use \Xendit\ObjectSerializer;
use \Xendit\Model\ModelInterface;

/**
 * CardChannelCode Class Doc Comment
 *
 * @category Class
 * @description Card Channel Code
 * @package  Xendit
 */
class CardChannelCode
{
    /**
     * Possible values of this enum
     */
    
    public const BAY_CARD_INSTALLMENT = 'BAY_CARD_INSTALLMENT';
    
    public const BBL_CARD_INSTALLMENT = 'BBL_CARD_INSTALLMENT';
    
    public const GPN = 'GPN';
    
    public const KBANK_CARD_INSTALLMENT = 'KBANK_CARD_INSTALLMENT';
    
    public const KTB_CARD_INSTALLMENT = 'KTB_CARD_INSTALLMENT';
    
    public const SCB_CARD_INSTALLMENT = 'SCB_CARD_INSTALLMENT';
    
    public const TTB_CARD_INSTALLMENT = 'TTB_CARD_INSTALLMENT';
    
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
            throw new \InvalidArgumentException(sprintf('Invalid value for enum CardChannelCode: %s', $value));
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
            self::BAY_CARD_INSTALLMENT,
            self::BBL_CARD_INSTALLMENT,
            self::GPN,
            self::KBANK_CARD_INSTALLMENT,
            self::KTB_CARD_INSTALLMENT,
            self::SCB_CARD_INSTALLMENT,
            self::TTB_CARD_INSTALLMENT,
            self::XENDIT_ENUM_DEFAULT_FALLBACK
        ];
    }
}


