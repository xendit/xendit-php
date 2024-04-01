<?php
/**
 * CardInformation
 *
 * PHP version 7.4
 *
 * @category Class
 * @package  Xendit
 */

/**
 * Payment Requests
 *
 * The version of the OpenAPI document: 1.59.0
 */

/**
 * NOTE: This class is auto generated.
 * Do not edit the class manually.
 */

namespace Xendit\PaymentRequest;


use \ArrayAccess;
use \Xendit\ObjectSerializer;
use \Xendit\Model\ModelInterface;

/**
 * CardInformation Class Doc Comment
 *
 * @category Class
 * @description Card Information
 * @package  Xendit
 * @implements \ArrayAccess<string, mixed>
 */
class CardInformation implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'CardInformation';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'token_id' => 'string',
        'masked_card_number' => 'string',
        'expiry_month' => 'string',
        'expiry_year' => 'string',
        'cardholder_name' => 'string',
        'fingerprint' => 'string',
        'type' => 'string',
        'network' => 'string',
        'country' => 'string',
        'issuer' => 'string',
        'card_number' => 'string',
        'one_time_token' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'token_id' => null,
        'masked_card_number' => null,
        'expiry_month' => null,
        'expiry_year' => null,
        'cardholder_name' => null,
        'fingerprint' => null,
        'type' => null,
        'network' => null,
        'country' => null,
        'issuer' => null,
        'card_number' => null,
        'one_time_token' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'token_id' => false,
		'masked_card_number' => false,
		'expiry_month' => false,
		'expiry_year' => false,
		'cardholder_name' => true,
		'fingerprint' => false,
		'type' => false,
		'network' => false,
		'country' => false,
		'issuer' => false,
		'card_number' => false,
		'one_time_token' => false
    ];

    /**
      * If a nullable field gets set to null, insert it here
      *
      * @var boolean[]
      */
    protected array $openAPINullablesSetToNull = [];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPITypes()
    {
        return self::$openAPITypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPIFormats()
    {
        return self::$openAPIFormats;
    }

    /**
     * Array of nullable properties
     *
     * @return array
     */
    protected static function openAPINullables(): array
    {
        return self::$openAPINullables;
    }

    /**
     * Array of nullable field names deliberately set to null
     *
     * @return boolean[]
     */
    private function getOpenAPINullablesSetToNull(): array
    {
        return $this->openAPINullablesSetToNull;
    }

    /**
     * Setter - Array of nullable field names deliberately set to null
     *
     * @param boolean[] $openAPINullablesSetToNull
     */
    private function setOpenAPINullablesSetToNull(array $openAPINullablesSetToNull): void
    {
        $this->openAPINullablesSetToNull = $openAPINullablesSetToNull;
    }

    /**
     * Checks if a property is nullable
     *
     * @param string $property
     * @return bool
     */
    public static function isNullable(string $property): bool
    {
        return self::openAPINullables()[$property] ?? false;
    }

    /**
     * Checks if a nullable property is set to null.
     *
     * @param string $property
     * @return bool
     */
    public function isNullableSetToNull(string $property): bool
    {
        return in_array($property, $this->getOpenAPINullablesSetToNull(), true);
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'token_id' => 'token_id',
        'masked_card_number' => 'masked_card_number',
        'expiry_month' => 'expiry_month',
        'expiry_year' => 'expiry_year',
        'cardholder_name' => 'cardholder_name',
        'fingerprint' => 'fingerprint',
        'type' => 'type',
        'network' => 'network',
        'country' => 'country',
        'issuer' => 'issuer',
        'card_number' => 'card_number',
        'one_time_token' => 'one_time_token'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'token_id' => 'setTokenId',
        'masked_card_number' => 'setMaskedCardNumber',
        'expiry_month' => 'setExpiryMonth',
        'expiry_year' => 'setExpiryYear',
        'cardholder_name' => 'setCardholderName',
        'fingerprint' => 'setFingerprint',
        'type' => 'setType',
        'network' => 'setNetwork',
        'country' => 'setCountry',
        'issuer' => 'setIssuer',
        'card_number' => 'setCardNumber',
        'one_time_token' => 'setOneTimeToken'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'token_id' => 'getTokenId',
        'masked_card_number' => 'getMaskedCardNumber',
        'expiry_month' => 'getExpiryMonth',
        'expiry_year' => 'getExpiryYear',
        'cardholder_name' => 'getCardholderName',
        'fingerprint' => 'getFingerprint',
        'type' => 'getType',
        'network' => 'getNetwork',
        'country' => 'getCountry',
        'issuer' => 'getIssuer',
        'card_number' => 'getCardNumber',
        'one_time_token' => 'getOneTimeToken'
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters()
    {
        return self::$getters;
    }

    /**
     * The original name of the model.
     *
     * @return string
     */
    public function getModelName()
    {
        return self::$openAPIModelName;
    }

    public const NETWORK_VISA = 'VISA';
    public const NETWORK_MASTERCARD = 'MASTERCARD';
    public const NETWORK_JCB = 'JCB';
    public const NETWORK_AMEX = 'AMEX';
    public const NETWORK_DISCOVER = 'DISCOVER';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getNetworkAllowableValues()
    {
        return [
            self::NETWORK_VISA,
            self::NETWORK_MASTERCARD,
            self::NETWORK_JCB,
            self::NETWORK_AMEX,
            self::NETWORK_DISCOVER,
        ];
    }

    /**
     * Associative array for storing property values
     *
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->setIfExists('token_id', $data ?? [], null);
        $this->setIfExists('masked_card_number', $data ?? [], null);
        $this->setIfExists('expiry_month', $data ?? [], null);
        $this->setIfExists('expiry_year', $data ?? [], null);
        $this->setIfExists('cardholder_name', $data ?? [], null);
        $this->setIfExists('fingerprint', $data ?? [], null);
        $this->setIfExists('type', $data ?? [], null);
        $this->setIfExists('network', $data ?? [], null);
        $this->setIfExists('country', $data ?? [], null);
        $this->setIfExists('issuer', $data ?? [], null);
        $this->setIfExists('card_number', $data ?? [], null);
        $this->setIfExists('one_time_token', $data ?? [], null);
    }

    /**
    * Sets $this->container[$variableName] to the given data or to the given default Value; if $variableName
    * is nullable and its value is set to null in the $fields array, then mark it as "set to null" in the
    * $this->openAPINullablesSetToNull array
    *
    * @param string $variableName
    * @param array  $fields
    * @param mixed  $defaultValue
    */
    private function setIfExists(string $variableName, array $fields, $defaultValue): void
    {
        if (self::isNullable($variableName) && array_key_exists($variableName, $fields) && is_null($fields[$variableName])) {
            $this->openAPINullablesSetToNull[] = $variableName;
        }

        $this->container[$variableName] = $fields[$variableName] ?? $defaultValue;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        $allowedValues = $this->getNetworkAllowableValues();
        if (!is_null($this->container['network']) && !in_array($this->container['network'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'network', must be one of '%s'",
                $this->container['network'],
                implode("', '", $allowedValues)
            );
        }

        return $invalidProperties;
    }

    /**
     * Validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {
        return count($this->listInvalidProperties()) === 0;
    }


    /**
     * Gets token_id
     *
     * @return string|null
     */
    public function getTokenId()
    {
        return $this->container['token_id'];
    }

    /**
     * Sets token_id
     *
     * @param string|null $token_id token_id
     *
     * @return self
     */
    public function setTokenId($token_id)
    {
        if (is_null($token_id)) {
            throw new \InvalidArgumentException('non-nullable token_id cannot be null');
        }
        $this->container['token_id'] = $token_id;

        return $this;
    }

    /**
     * Gets masked_card_number
     *
     * @return string|null
     */
    public function getMaskedCardNumber()
    {
        return $this->container['masked_card_number'];
    }

    /**
     * Sets masked_card_number
     *
     * @param string|null $masked_card_number 1st 6 and last 4 digits of the card
     *
     * @return self
     */
    public function setMaskedCardNumber($masked_card_number)
    {
        if (is_null($masked_card_number)) {
            throw new \InvalidArgumentException('non-nullable masked_card_number cannot be null');
        }
        $this->container['masked_card_number'] = $masked_card_number;

        return $this;
    }

    /**
     * Gets expiry_month
     *
     * @return string|null
     */
    public function getExpiryMonth()
    {
        return $this->container['expiry_month'];
    }

    /**
     * Sets expiry_month
     *
     * @param string|null $expiry_month Card expiry month in MM format
     *
     * @return self
     */
    public function setExpiryMonth($expiry_month)
    {
        if (is_null($expiry_month)) {
            throw new \InvalidArgumentException('non-nullable expiry_month cannot be null');
        }
        $this->container['expiry_month'] = $expiry_month;

        return $this;
    }

    /**
     * Gets expiry_year
     *
     * @return string|null
     */
    public function getExpiryYear()
    {
        return $this->container['expiry_year'];
    }

    /**
     * Sets expiry_year
     *
     * @param string|null $expiry_year Card expiry month in YY format
     *
     * @return self
     */
    public function setExpiryYear($expiry_year)
    {
        if (is_null($expiry_year)) {
            throw new \InvalidArgumentException('non-nullable expiry_year cannot be null');
        }
        $this->container['expiry_year'] = $expiry_year;

        return $this;
    }

    /**
     * Gets cardholder_name
     *
     * @return string|null
     */
    public function getCardholderName()
    {
        return $this->container['cardholder_name'];
    }

    /**
     * Sets cardholder_name
     *
     * @param string|null $cardholder_name Cardholder name
     *
     * @return self
     */
    public function setCardholderName($cardholder_name)
    {
        if (is_null($cardholder_name)) {
            array_push($this->openAPINullablesSetToNull, 'cardholder_name');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('cardholder_name', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['cardholder_name'] = $cardholder_name;

        return $this;
    }

    /**
     * Gets fingerprint
     *
     * @return string|null
     */
    public function getFingerprint()
    {
        return $this->container['fingerprint'];
    }

    /**
     * Sets fingerprint
     *
     * @param string|null $fingerprint fingerprint
     *
     * @return self
     */
    public function setFingerprint($fingerprint)
    {
        if (is_null($fingerprint)) {
            throw new \InvalidArgumentException('non-nullable fingerprint cannot be null');
        }
        $this->container['fingerprint'] = $fingerprint;

        return $this;
    }

    /**
     * Gets type
     *
     * @return string|null
     */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
     * Sets type
     *
     * @param string|null $type type
     *
     * @return self
     */
    public function setType($type)
    {
        if (is_null($type)) {
            throw new \InvalidArgumentException('non-nullable type cannot be null');
        }
        $this->container['type'] = $type;

        return $this;
    }

    /**
     * Gets network
     *
     * @return string|null
     */
    public function getNetwork()
    {
        return $this->container['network'];
    }

    /**
     * Sets network
     *
     * @param string|null $network network
     *
     * @return self
     */
    public function setNetwork($network)
    {
        if (is_null($network)) {
            throw new \InvalidArgumentException('non-nullable network cannot be null');
        }
        $allowedValues = $this->getNetworkAllowableValues();
        if (!in_array($network, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'network', must be one of '%s'",
                    $network,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['network'] = $network;

        return $this;
    }

    /**
     * Gets country
     *
     * @return string|null
     */
    public function getCountry()
    {
        return $this->container['country'];
    }

    /**
     * Sets country
     *
     * @param string|null $country country
     *
     * @return self
     */
    public function setCountry($country)
    {
        if (is_null($country)) {
            throw new \InvalidArgumentException('non-nullable country cannot be null');
        }
        $this->container['country'] = $country;

        return $this;
    }

    /**
     * Gets issuer
     *
     * @return string|null
     */
    public function getIssuer()
    {
        return $this->container['issuer'];
    }

    /**
     * Sets issuer
     *
     * @param string|null $issuer issuer
     *
     * @return self
     */
    public function setIssuer($issuer)
    {
        if (is_null($issuer)) {
            throw new \InvalidArgumentException('non-nullable issuer cannot be null');
        }
        $this->container['issuer'] = $issuer;

        return $this;
    }

    /**
     * Gets card_number
     *
     * @return string|null
     */
    public function getCardNumber()
    {
        return $this->container['card_number'];
    }

    /**
     * Sets card_number
     *
     * @param string|null $card_number card_number
     *
     * @return self
     */
    public function setCardNumber($card_number)
    {
        if (is_null($card_number)) {
            throw new \InvalidArgumentException('non-nullable card_number cannot be null');
        }
        $this->container['card_number'] = $card_number;

        return $this;
    }

    /**
     * Gets one_time_token
     *
     * @return string|null
     */
    public function getOneTimeToken()
    {
        return $this->container['one_time_token'];
    }

    /**
     * Sets one_time_token
     *
     * @param string|null $one_time_token one_time_token
     *
     * @return self
     */
    public function setOneTimeToken($one_time_token)
    {
        if (is_null($one_time_token)) {
            throw new \InvalidArgumentException('non-nullable one_time_token cannot be null');
        }
        $this->container['one_time_token'] = $one_time_token;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset): bool
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed|null
     */
    #[\ReturnTypeWillChange]
    public function offsetGet($offset)
    {
        return $this->container[$offset] ?? null;
    }

    /**
     * Sets value based on offset.
     *
     * @param int|null $offset Offset
     * @param mixed    $value  Value to be set
     *
     * @return void
     */
    public function offsetSet($offset, $value): void
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /**
     * Unsets offset.
     *
     * @param integer $offset Offset
     *
     * @return void
     */
    public function offsetUnset($offset): void
    {
        unset($this->container[$offset]);
    }

    /**
     * Serializes the object to a value that can be serialized natively by json_encode().
     * @link https://www.php.net/manual/en/jsonserializable.jsonserialize.php
     *
     * @return mixed Returns data which can be serialized by json_encode(), which is a value
     * of any type other than a resource.
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize()
    {
       return ObjectSerializer::sanitizeForSerialization($this);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        return json_encode(
            ObjectSerializer::sanitizeForSerialization($this),
            JSON_PRETTY_PRINT
        );
    }

    /**
     * Gets a header-safe presentation of the object
     *
     * @return string
     */
    public function toHeaderValue()
    {
        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}


