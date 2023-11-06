<?php
/**
 * DirectDebitChannelCode
 *
 * PHP version 7.4
 *
 * @category Class
 * @package  Xendit
 */

/**
 * Payment Method Service v2
 *
 * The version of the OpenAPI document: 2.91.2
 */

/**
 * NOTE: This class is auto generated.
 * Do not edit the class manually.
 */

namespace Xendit\PaymentMethod;

use \Xendit\ObjectSerializer;
use \Xendit\Model\ModelInterface;

/**
 * DirectDebitChannelCode Class Doc Comment
 *
 * @category Class
 * @description Direct Debit Channel Code
 * @package  Xendit
 */
class DirectDebitChannelCode
{
    /**
     * Possible values of this enum
     */
    
    public const BCA_KLIKPAY = 'BCA_KLIKPAY';
    
    public const BCA_ONEKLIK = 'BCA_ONEKLIK';
    
    public const BDO = 'BDO';
    
    public const BPI = 'BPI';
    
    public const BRI = 'BRI';
    
    public const BNI = 'BNI';
    
    public const CHINABANK = 'CHINABANK';
    
    public const CIMBNIAGA = 'CIMBNIAGA';
    
    public const MTB = 'MTB';
    
    public const RCBC = 'RCBC';
    
    public const UBP = 'UBP';
    
    public const MANDIRI = 'MANDIRI';
    
    public const BBL = 'BBL';
    
    public const SCB = 'SCB';
    
    public const KTB = 'KTB';
    
    public const BAY = 'BAY';
    
    public const KBANK_MB = 'KBANK_MB';
    
    public const BAY_MB = 'BAY_MB';
    
    public const KTB_MB = 'KTB_MB';
    
    public const BBL_MB = 'BBL_MB';
    
    public const SCB_MB = 'SCB_MB';
    
    public const BDO_EPAY = 'BDO_EPAY';
    
    public const AUTODEBIT_UBP = 'AUTODEBIT_UBP';
    
    public const AFFIN_FPX = 'AFFIN_FPX';
    
    public const AGRO_FPX = 'AGRO_FPX';
    
    public const ALLIANCE_FPX = 'ALLIANCE_FPX';
    
    public const AMBANK_FPX = 'AMBANK_FPX';
    
    public const ISLAM_FPX = 'ISLAM_FPX';
    
    public const MUAMALAT_FPX = 'MUAMALAT_FPX';
    
    public const BOC_FPX = 'BOC_FPX';
    
    public const RAKYAT_FPX = 'RAKYAT_FPX';
    
    public const BSN_FPX = 'BSN_FPX';
    
    public const CIMB_FPX = 'CIMB_FPX';
    
    public const HLB_FPX = 'HLB_FPX';
    
    public const HSBC_FPX = 'HSBC_FPX';
    
    public const KFH_FPX = 'KFH_FPX';
    
    public const MAYB2_E_FPX = 'MAYB2E_FPX';
    
    public const MAYB2_U_FPX = 'MAYB2U_FPX';
    
    public const OCBC_FPX = 'OCBC_FPX';
    
    public const PUBLIC_FPX = 'PUBLIC_FPX';
    
    public const RHB_FPX = 'RHB_FPX';
    
    public const SCH_FPX = 'SCH_FPX';
    
    public const UOB_FPX = 'UOB_FPX';
    
    public const AFFIN_FPX_BUSINESS = 'AFFIN_FPX_BUSINESS';
    
    public const AGRO_FPX_BUSINESS = 'AGRO_FPX_BUSINESS';
    
    public const ALLIANCE_FPX_BUSINESS = 'ALLIANCE_FPX_BUSINESS';
    
    public const AMBANK_FPX_BUSINESS = 'AMBANK_FPX_BUSINESS';
    
    public const ISLAM_FPX_BUSINESS = 'ISLAM_FPX_BUSINESS';
    
    public const MUAMALAT_FPX_BUSINESS = 'MUAMALAT_FPX_BUSINESS';
    
    public const BNP_FPX_BUSINESS = 'BNP_FPX_BUSINESS';
    
    public const CIMB_FPX_BUSINESS = 'CIMB_FPX_BUSINESS';
    
    public const CITIBANK_FPX_BUSINESS = 'CITIBANK_FPX_BUSINESS';
    
    public const DEUTSCHE_FPX_BUSINESS = 'DEUTSCHE_FPX_BUSINESS';
    
    public const HLB_FPX_BUSINESS = 'HLB_FPX_BUSINESS';
    
    public const HSBC_FPX_BUSINESS = 'HSBC_FPX_BUSINESS';
    
    public const RAKYAT_FPX_BUSINESS = 'RAKYAT_FPX_BUSINESS';
    
    public const KFH_FPX_BUSINESS = 'KFH_FPX_BUSINESS';
    
    public const MAYB2_E_FPX_BUSINESS = 'MAYB2E_FPX_BUSINESS';
    
    public const OCBC_FPX_BUSINESS = 'OCBC_FPX_BUSINESS';
    
    public const PUBLIC_FPX_BUSINESS = 'PUBLIC_FPX_BUSINESS';
    
    public const RHB_FPX_BUSINESS = 'RHB_FPX_BUSINESS';
    
    public const SCH_FPX_BUSINESS = 'SCH_FPX_BUSINESS';
    
    public const UOB_FPX_BUSINESS = 'UOB_FPX_BUSINESS';
    
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
            throw new \InvalidArgumentException(sprintf('Invalid value for enum DirectDebitChannelCode: %s', $value));
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
            self::BCA_KLIKPAY,
            self::BCA_ONEKLIK,
            self::BDO,
            self::BPI,
            self::BRI,
            self::BNI,
            self::CHINABANK,
            self::CIMBNIAGA,
            self::MTB,
            self::RCBC,
            self::UBP,
            self::MANDIRI,
            self::BBL,
            self::SCB,
            self::KTB,
            self::BAY,
            self::KBANK_MB,
            self::BAY_MB,
            self::KTB_MB,
            self::BBL_MB,
            self::SCB_MB,
            self::BDO_EPAY,
            self::AUTODEBIT_UBP,
            self::AFFIN_FPX,
            self::AGRO_FPX,
            self::ALLIANCE_FPX,
            self::AMBANK_FPX,
            self::ISLAM_FPX,
            self::MUAMALAT_FPX,
            self::BOC_FPX,
            self::RAKYAT_FPX,
            self::BSN_FPX,
            self::CIMB_FPX,
            self::HLB_FPX,
            self::HSBC_FPX,
            self::KFH_FPX,
            self::MAYB2_E_FPX,
            self::MAYB2_U_FPX,
            self::OCBC_FPX,
            self::PUBLIC_FPX,
            self::RHB_FPX,
            self::SCH_FPX,
            self::UOB_FPX,
            self::AFFIN_FPX_BUSINESS,
            self::AGRO_FPX_BUSINESS,
            self::ALLIANCE_FPX_BUSINESS,
            self::AMBANK_FPX_BUSINESS,
            self::ISLAM_FPX_BUSINESS,
            self::MUAMALAT_FPX_BUSINESS,
            self::BNP_FPX_BUSINESS,
            self::CIMB_FPX_BUSINESS,
            self::CITIBANK_FPX_BUSINESS,
            self::DEUTSCHE_FPX_BUSINESS,
            self::HLB_FPX_BUSINESS,
            self::HSBC_FPX_BUSINESS,
            self::RAKYAT_FPX_BUSINESS,
            self::KFH_FPX_BUSINESS,
            self::MAYB2_E_FPX_BUSINESS,
            self::OCBC_FPX_BUSINESS,
            self::PUBLIC_FPX_BUSINESS,
            self::RHB_FPX_BUSINESS,
            self::SCH_FPX_BUSINESS,
            self::UOB_FPX_BUSINESS,
            self::XENDIT_ENUM_DEFAULT_FALLBACK
        ];
    }
}


