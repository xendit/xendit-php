<?php
/**
 * DirectDebitType
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
 * DirectDebitType Class Doc Comment
 *
 * @category Class
 * @description Representing the available Direct Debit channels used for invoice-related transactions.
 * @package  Xendit
 */
class DirectDebitType
{
    /**
     * Possible values of this enum
     */
    
    public const BA_BRI = 'BA_BRI';
    
    public const DC_BRI = 'DC_BRI';
    
    public const DD_BRI = 'DD_BRI';
    
    public const DD_MANDIRI = 'DD_MANDIRI';
    
    public const BA_BPI = 'BA_BPI';
    
    public const DC_BPI = 'DC_BPI';
    
    public const DD_BPI = 'DD_BPI';
    
    public const BA_UBP = 'BA_UBP';
    
    public const DC_UBP = 'DC_UBP';
    
    public const DD_UBP = 'DD_UBP';
    
    public const BCA_KLIKPAY = 'BCA_KLIKPAY';
    
    public const BA_BCA_KLIKPAY = 'BA_BCA_KLIKPAY';
    
    public const DC_BCA_KLIKPAY = 'DC_BCA_KLIKPAY';
    
    public const DD_BCA_KLIKPAY = 'DD_BCA_KLIKPAY';
    
    public const DD_BDO_EPAY = 'DD_BDO_EPAY';
    
    public const DD_RCBC = 'DD_RCBC';
    
    public const DD_CHINABANK = 'DD_CHINABANK';
    
    public const BA_CHINABANK = 'BA_CHINABANK';
    
    public const DC_CHINABANK = 'DC_CHINABANK';
    
    public const DD_PUBLIC_FPX = 'DD_PUBLIC_FPX';
    
    public const DD_AMBANK_FPX = 'DD_AMBANK_FPX';
    
    public const DD_KFH_FPX = 'DD_KFH_FPX';
    
    public const DD_AGRO_FPX = 'DD_AGRO_FPX';
    
    public const DD_AFFIN_FPX = 'DD_AFFIN_FPX';
    
    public const DD_ALLIANCE_FPX = 'DD_ALLIANCE_FPX';
    
    public const DD_MUAMALAT_FPX = 'DD_MUAMALAT_FPX';
    
    public const DD_HLB_FPX = 'DD_HLB_FPX';
    
    public const DD_ISLAM_FPX = 'DD_ISLAM_FPX';
    
    public const DD_RAKYAT_FPX = 'DD_RAKYAT_FPX';
    
    public const DD_CIMB_FPX = 'DD_CIMB_FPX';
    
    public const DD_UOB_FPX = 'DD_UOB_FPX';
    
    public const DD_BOC_FPX = 'DD_BOC_FPX';
    
    public const DD_BSN_FPX = 'DD_BSN_FPX';
    
    public const DD_OCBC_FPX = 'DD_OCBC_FPX';
    
    public const DD_HSBC_FPX = 'DD_HSBC_FPX';
    
    public const DD_SCH_FPX = 'DD_SCH_FPX';
    
    public const DD_MAYB2_U_FPX = 'DD_MAYB2U_FPX';
    
    public const DD_RHB_FPX = 'DD_RHB_FPX';
    
    public const DD_UOB_FPX_BUSINESS = 'DD_UOB_FPX_BUSINESS';
    
    public const DD_AGRO_FPX_BUSINESS = 'DD_AGRO_FPX_BUSINESS';
    
    public const DD_ALLIANCE_FPX_BUSINESS = 'DD_ALLIANCE_FPX_BUSINESS';
    
    public const DD_AMBANK_FPX_BUSINESS = 'DD_AMBANK_FPX_BUSINESS';
    
    public const DD_ISLAM_FPX_BUSINESS = 'DD_ISLAM_FPX_BUSINESS';
    
    public const DD_MUAMALAT_FPX_BUSINESS = 'DD_MUAMALAT_FPX_BUSINESS';
    
    public const DD_HLB_FPX_BUSINESS = 'DD_HLB_FPX_BUSINESS';
    
    public const DD_HSBC_FPX_BUSINESS = 'DD_HSBC_FPX_BUSINESS';
    
    public const DD_RAKYAT_FPX_BUSINESS = 'DD_RAKYAT_FPX_BUSINESS';
    
    public const DD_KFH_FPX_BUSINESS = 'DD_KFH_FPX_BUSINESS';
    
    public const DD_OCBC_FPX_BUSINESS = 'DD_OCBC_FPX_BUSINESS';
    
    public const DD_PUBLIC_FPX_BUSINESS = 'DD_PUBLIC_FPX_BUSINESS';
    
    public const DD_RHB_FPX_BUSINESS = 'DD_RHB_FPX_BUSINESS';
    
    public const DD_SCH_FPX_BUSINESS = 'DD_SCH_FPX_BUSINESS';
    
    public const DD_CITIBANK_FPX_BUSINESS = 'DD_CITIBANK_FPX_BUSINESS';
    
    public const DD_BNP_FPX_BUSINESS = 'DD_BNP_FPX_BUSINESS';
    
    public const DD_DEUTSCHE_FPX_BUSINESS = 'DD_DEUTSCHE_FPX_BUSINESS';
    
    public const DD_MAYB2_E_FPX_BUSINESS = 'DD_MAYB2E_FPX_BUSINESS';
    
    public const DD_CIMB_FPX_BUSINESS = 'DD_CIMB_FPX_BUSINESS';
    
    public const DD_AFFIN_FPX_BUSINESS = 'DD_AFFIN_FPX_BUSINESS';
    
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
            throw new \InvalidArgumentException(sprintf('Invalid value for enum DirectDebitType: %s', $value));
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
            self::BA_BRI,
            self::DC_BRI,
            self::DD_BRI,
            self::DD_MANDIRI,
            self::BA_BPI,
            self::DC_BPI,
            self::DD_BPI,
            self::BA_UBP,
            self::DC_UBP,
            self::DD_UBP,
            self::BCA_KLIKPAY,
            self::BA_BCA_KLIKPAY,
            self::DC_BCA_KLIKPAY,
            self::DD_BCA_KLIKPAY,
            self::DD_BDO_EPAY,
            self::DD_RCBC,
            self::DD_CHINABANK,
            self::BA_CHINABANK,
            self::DC_CHINABANK,
            self::DD_PUBLIC_FPX,
            self::DD_AMBANK_FPX,
            self::DD_KFH_FPX,
            self::DD_AGRO_FPX,
            self::DD_AFFIN_FPX,
            self::DD_ALLIANCE_FPX,
            self::DD_MUAMALAT_FPX,
            self::DD_HLB_FPX,
            self::DD_ISLAM_FPX,
            self::DD_RAKYAT_FPX,
            self::DD_CIMB_FPX,
            self::DD_UOB_FPX,
            self::DD_BOC_FPX,
            self::DD_BSN_FPX,
            self::DD_OCBC_FPX,
            self::DD_HSBC_FPX,
            self::DD_SCH_FPX,
            self::DD_MAYB2_U_FPX,
            self::DD_RHB_FPX,
            self::DD_UOB_FPX_BUSINESS,
            self::DD_AGRO_FPX_BUSINESS,
            self::DD_ALLIANCE_FPX_BUSINESS,
            self::DD_AMBANK_FPX_BUSINESS,
            self::DD_ISLAM_FPX_BUSINESS,
            self::DD_MUAMALAT_FPX_BUSINESS,
            self::DD_HLB_FPX_BUSINESS,
            self::DD_HSBC_FPX_BUSINESS,
            self::DD_RAKYAT_FPX_BUSINESS,
            self::DD_KFH_FPX_BUSINESS,
            self::DD_OCBC_FPX_BUSINESS,
            self::DD_PUBLIC_FPX_BUSINESS,
            self::DD_RHB_FPX_BUSINESS,
            self::DD_SCH_FPX_BUSINESS,
            self::DD_CITIBANK_FPX_BUSINESS,
            self::DD_BNP_FPX_BUSINESS,
            self::DD_DEUTSCHE_FPX_BUSINESS,
            self::DD_MAYB2_E_FPX_BUSINESS,
            self::DD_CIMB_FPX_BUSINESS,
            self::DD_AFFIN_FPX_BUSINESS,
            self::XENDIT_ENUM_DEFAULT_FALLBACK
        ];
    }
}


