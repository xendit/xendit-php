<?php
/**
 * Currency
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
 * Currency Class Doc Comment
 *
 * @category Class
 * @package  Xendit
 */
class Currency
{
    /**
     * Possible values of this enum
     */
    
    public const IDR = 'IDR';
    
    public const PHP = 'PHP';
    
    public const USD = 'USD';
    
    public const JPY = 'JPY';
    
    public const VND = 'VND';
    
    public const SGD = 'SGD';
    
    public const AED = 'AED';
    
    public const AFN = 'AFN';
    
    public const ALL = 'ALL';
    
    public const AMD = 'AMD';
    
    public const ANG = 'ANG';
    
    public const AOA = 'AOA';
    
    public const ARS = 'ARS';
    
    public const AUD = 'AUD';
    
    public const AWG = 'AWG';
    
    public const AZN = 'AZN';
    
    public const BAM = 'BAM';
    
    public const BBD = 'BBD';
    
    public const BDT = 'BDT';
    
    public const BGN = 'BGN';
    
    public const BHD = 'BHD';
    
    public const BIF = 'BIF';
    
    public const BMD = 'BMD';
    
    public const BND = 'BND';
    
    public const BOB = 'BOB';
    
    public const BRL = 'BRL';
    
    public const BSD = 'BSD';
    
    public const BTN = 'BTN';
    
    public const BWP = 'BWP';
    
    public const BYN = 'BYN';
    
    public const BZD = 'BZD';
    
    public const CAD = 'CAD';
    
    public const CDF = 'CDF';
    
    public const CHF = 'CHF';
    
    public const CLP = 'CLP';
    
    public const CNY = 'CNY';
    
    public const COP = 'COP';
    
    public const CRC = 'CRC';
    
    public const CUC = 'CUC';
    
    public const CUP = 'CUP';
    
    public const CVE = 'CVE';
    
    public const CZK = 'CZK';
    
    public const DJF = 'DJF';
    
    public const DKK = 'DKK';
    
    public const DOP = 'DOP';
    
    public const DZD = 'DZD';
    
    public const EGP = 'EGP';
    
    public const ERN = 'ERN';
    
    public const ETB = 'ETB';
    
    public const EUR = 'EUR';
    
    public const FJD = 'FJD';
    
    public const FKP = 'FKP';
    
    public const GBP = 'GBP';
    
    public const GEL = 'GEL';
    
    public const GGP = 'GGP';
    
    public const GHS = 'GHS';
    
    public const GIP = 'GIP';
    
    public const GMD = 'GMD';
    
    public const GNF = 'GNF';
    
    public const GTQ = 'GTQ';
    
    public const GYD = 'GYD';
    
    public const HKD = 'HKD';
    
    public const HNL = 'HNL';
    
    public const HRK = 'HRK';
    
    public const HTG = 'HTG';
    
    public const HUF = 'HUF';
    
    public const ILS = 'ILS';
    
    public const IMP = 'IMP';
    
    public const INR = 'INR';
    
    public const IQD = 'IQD';
    
    public const IRR = 'IRR';
    
    public const ISK = 'ISK';
    
    public const JEP = 'JEP';
    
    public const JMD = 'JMD';
    
    public const JOD = 'JOD';
    
    public const KES = 'KES';
    
    public const KGS = 'KGS';
    
    public const KHR = 'KHR';
    
    public const KMF = 'KMF';
    
    public const KPW = 'KPW';
    
    public const KRW = 'KRW';
    
    public const KWD = 'KWD';
    
    public const KYD = 'KYD';
    
    public const KZT = 'KZT';
    
    public const LAK = 'LAK';
    
    public const LBP = 'LBP';
    
    public const LKR = 'LKR';
    
    public const LRD = 'LRD';
    
    public const LSL = 'LSL';
    
    public const LYD = 'LYD';
    
    public const MAD = 'MAD';
    
    public const MDL = 'MDL';
    
    public const MGA = 'MGA';
    
    public const MKD = 'MKD';
    
    public const MMK = 'MMK';
    
    public const MNT = 'MNT';
    
    public const MOP = 'MOP';
    
    public const MRU = 'MRU';
    
    public const MUR = 'MUR';
    
    public const MVR = 'MVR';
    
    public const MWK = 'MWK';
    
    public const MXN = 'MXN';
    
    public const MYR = 'MYR';
    
    public const MZN = 'MZN';
    
    public const NAD = 'NAD';
    
    public const NGN = 'NGN';
    
    public const NIO = 'NIO';
    
    public const NOK = 'NOK';
    
    public const NPR = 'NPR';
    
    public const NZD = 'NZD';
    
    public const OMR = 'OMR';
    
    public const PAB = 'PAB';
    
    public const PEN = 'PEN';
    
    public const PGK = 'PGK';
    
    public const PKR = 'PKR';
    
    public const PLN = 'PLN';
    
    public const PYG = 'PYG';
    
    public const QAR = 'QAR';
    
    public const RON = 'RON';
    
    public const RSD = 'RSD';
    
    public const RUB = 'RUB';
    
    public const RWF = 'RWF';
    
    public const SAR = 'SAR';
    
    public const SBD = 'SBD';
    
    public const SCR = 'SCR';
    
    public const SDG = 'SDG';
    
    public const SEK = 'SEK';
    
    public const SHP = 'SHP';
    
    public const SLL = 'SLL';
    
    public const SOS = 'SOS';
    
    public const SPL = 'SPL';
    
    public const SRD = 'SRD';
    
    public const STN = 'STN';
    
    public const SVC = 'SVC';
    
    public const SYP = 'SYP';
    
    public const SZL = 'SZL';
    
    public const THB = 'THB';
    
    public const TJS = 'TJS';
    
    public const TMT = 'TMT';
    
    public const TND = 'TND';
    
    public const TOP = 'TOP';
    
    public const _TRY = 'TRY';
    
    public const TTD = 'TTD';
    
    public const TVD = 'TVD';
    
    public const TWD = 'TWD';
    
    public const TZS = 'TZS';
    
    public const UAH = 'UAH';
    
    public const UGX = 'UGX';
    
    public const UYU = 'UYU';
    
    public const UZS = 'UZS';
    
    public const VEF = 'VEF';
    
    public const VUV = 'VUV';
    
    public const WST = 'WST';
    
    public const XAF = 'XAF';
    
    public const XCD = 'XCD';
    
    public const XDR = 'XDR';
    
    public const XOF = 'XOF';
    
    public const XPF = 'XPF';
    
    public const YER = 'YER';
    
    public const ZAR = 'ZAR';
    
    public const ZMW = 'ZMW';
    
    public const ZWD = 'ZWD';
    
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
            throw new \InvalidArgumentException(sprintf('Invalid value for enum Currency: %s', $value));
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
            self::IDR,
            self::PHP,
            self::USD,
            self::JPY,
            self::VND,
            self::SGD,
            self::AED,
            self::AFN,
            self::ALL,
            self::AMD,
            self::ANG,
            self::AOA,
            self::ARS,
            self::AUD,
            self::AWG,
            self::AZN,
            self::BAM,
            self::BBD,
            self::BDT,
            self::BGN,
            self::BHD,
            self::BIF,
            self::BMD,
            self::BND,
            self::BOB,
            self::BRL,
            self::BSD,
            self::BTN,
            self::BWP,
            self::BYN,
            self::BZD,
            self::CAD,
            self::CDF,
            self::CHF,
            self::CLP,
            self::CNY,
            self::COP,
            self::CRC,
            self::CUC,
            self::CUP,
            self::CVE,
            self::CZK,
            self::DJF,
            self::DKK,
            self::DOP,
            self::DZD,
            self::EGP,
            self::ERN,
            self::ETB,
            self::EUR,
            self::FJD,
            self::FKP,
            self::GBP,
            self::GEL,
            self::GGP,
            self::GHS,
            self::GIP,
            self::GMD,
            self::GNF,
            self::GTQ,
            self::GYD,
            self::HKD,
            self::HNL,
            self::HRK,
            self::HTG,
            self::HUF,
            self::ILS,
            self::IMP,
            self::INR,
            self::IQD,
            self::IRR,
            self::ISK,
            self::JEP,
            self::JMD,
            self::JOD,
            self::KES,
            self::KGS,
            self::KHR,
            self::KMF,
            self::KPW,
            self::KRW,
            self::KWD,
            self::KYD,
            self::KZT,
            self::LAK,
            self::LBP,
            self::LKR,
            self::LRD,
            self::LSL,
            self::LYD,
            self::MAD,
            self::MDL,
            self::MGA,
            self::MKD,
            self::MMK,
            self::MNT,
            self::MOP,
            self::MRU,
            self::MUR,
            self::MVR,
            self::MWK,
            self::MXN,
            self::MYR,
            self::MZN,
            self::NAD,
            self::NGN,
            self::NIO,
            self::NOK,
            self::NPR,
            self::NZD,
            self::OMR,
            self::PAB,
            self::PEN,
            self::PGK,
            self::PKR,
            self::PLN,
            self::PYG,
            self::QAR,
            self::RON,
            self::RSD,
            self::RUB,
            self::RWF,
            self::SAR,
            self::SBD,
            self::SCR,
            self::SDG,
            self::SEK,
            self::SHP,
            self::SLL,
            self::SOS,
            self::SPL,
            self::SRD,
            self::STN,
            self::SVC,
            self::SYP,
            self::SZL,
            self::THB,
            self::TJS,
            self::TMT,
            self::TND,
            self::TOP,
            self::_TRY,
            self::TTD,
            self::TVD,
            self::TWD,
            self::TZS,
            self::UAH,
            self::UGX,
            self::UYU,
            self::UZS,
            self::VEF,
            self::VUV,
            self::WST,
            self::XAF,
            self::XCD,
            self::XDR,
            self::XOF,
            self::XPF,
            self::YER,
            self::ZAR,
            self::ZMW,
            self::ZWD,
            self::XENDIT_ENUM_DEFAULT_FALLBACK
        ];
    }
}


