<?php
/**
 * VirtualAccount
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


use \ArrayAccess;
use \Xendit\ObjectSerializer;
use \Xendit\Model\ModelInterface;

/**
 * VirtualAccount Class Doc Comment
 *
 * @category Class
 * @description Virtual Account Payment Method Details
 * @package  Xendit
 * @implements \ArrayAccess<string, mixed>
 */
class VirtualAccount implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'VirtualAccount';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'min_amount' => 'float',
        'max_amount' => 'float',
        'amount' => 'float',
        'currency' => '\Xendit\PaymentRequest\PaymentRequestCurrency',
        'channel_code' => '\Xendit\PaymentRequest\VirtualAccountChannelCode',
        'channel_properties' => '\Xendit\PaymentRequest\VirtualAccountChannelProperties',
        'alternative_display_types' => 'string[]',
        'alternative_displays' => '\Xendit\PaymentRequest\VirtualAccountAlternativeDisplay[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'min_amount' => 'double',
        'max_amount' => 'double',
        'amount' => 'double',
        'currency' => null,
        'channel_code' => null,
        'channel_properties' => null,
        'alternative_display_types' => null,
        'alternative_displays' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'min_amount' => true,
		'max_amount' => true,
		'amount' => true,
		'currency' => false,
		'channel_code' => false,
		'channel_properties' => false,
		'alternative_display_types' => false,
		'alternative_displays' => false
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
        'min_amount' => 'min_amount',
        'max_amount' => 'max_amount',
        'amount' => 'amount',
        'currency' => 'currency',
        'channel_code' => 'channel_code',
        'channel_properties' => 'channel_properties',
        'alternative_display_types' => 'alternative_display_types',
        'alternative_displays' => 'alternative_displays'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'min_amount' => 'setMinAmount',
        'max_amount' => 'setMaxAmount',
        'amount' => 'setAmount',
        'currency' => 'setCurrency',
        'channel_code' => 'setChannelCode',
        'channel_properties' => 'setChannelProperties',
        'alternative_display_types' => 'setAlternativeDisplayTypes',
        'alternative_displays' => 'setAlternativeDisplays'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'min_amount' => 'getMinAmount',
        'max_amount' => 'getMaxAmount',
        'amount' => 'getAmount',
        'currency' => 'getCurrency',
        'channel_code' => 'getChannelCode',
        'channel_properties' => 'getChannelProperties',
        'alternative_display_types' => 'getAlternativeDisplayTypes',
        'alternative_displays' => 'getAlternativeDisplays'
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

    public const ALTERNATIVE_DISPLAY_TYPES_QR_STRING = 'QR_STRING';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getAlternativeDisplayTypesAllowableValues()
    {
        return [
            self::ALTERNATIVE_DISPLAY_TYPES_QR_STRING,
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
        $this->setIfExists('min_amount', $data ?? [], null);
        $this->setIfExists('max_amount', $data ?? [], null);
        $this->setIfExists('amount', $data ?? [], null);
        $this->setIfExists('currency', $data ?? [], null);
        $this->setIfExists('channel_code', $data ?? [], null);
        $this->setIfExists('channel_properties', $data ?? [], null);
        $this->setIfExists('alternative_display_types', $data ?? [], null);
        $this->setIfExists('alternative_displays', $data ?? [], null);
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

        if ($this->container['channel_code'] === null) {
            $invalidProperties[] = "'channel_code' can't be null";
        }
        if ($this->container['channel_properties'] === null) {
            $invalidProperties[] = "'channel_properties' can't be null";
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
     * Gets min_amount
     *
     * @return float|null
     */
    public function getMinAmount()
    {
        return $this->container['min_amount'];
    }

    /**
     * Sets min_amount
     *
     * @param float|null $min_amount min_amount
     *
     * @return self
     */
    public function setMinAmount($min_amount)
    {
        if (is_null($min_amount)) {
            array_push($this->openAPINullablesSetToNull, 'min_amount');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('min_amount', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['min_amount'] = $min_amount;

        return $this;
    }

    /**
     * Gets max_amount
     *
     * @return float|null
     */
    public function getMaxAmount()
    {
        return $this->container['max_amount'];
    }

    /**
     * Sets max_amount
     *
     * @param float|null $max_amount max_amount
     *
     * @return self
     */
    public function setMaxAmount($max_amount)
    {
        if (is_null($max_amount)) {
            array_push($this->openAPINullablesSetToNull, 'max_amount');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('max_amount', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['max_amount'] = $max_amount;

        return $this;
    }

    /**
     * Gets amount
     *
     * @return float|null
     */
    public function getAmount()
    {
        return $this->container['amount'];
    }

    /**
     * Sets amount
     *
     * @param float|null $amount amount
     *
     * @return self
     */
    public function setAmount($amount)
    {
        if (is_null($amount)) {
            array_push($this->openAPINullablesSetToNull, 'amount');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('amount', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['amount'] = $amount;

        return $this;
    }

    /**
     * Gets currency
     *
     * @return \PaymentRequest\PaymentRequestCurrency|null
     */
    public function getCurrency()
    {
        return $this->container['currency'];
    }

    /**
     * Sets currency
     *
     * @param \PaymentRequest\PaymentRequestCurrency|null $currency currency
     *
     * @return self
     */
    public function setCurrency($currency)
    {
        if (is_null($currency)) {
            throw new \InvalidArgumentException('non-nullable currency cannot be null');
        }
        $this->container['currency'] = $currency;

        return $this;
    }

    /**
     * Gets channel_code
     *
     * @return \PaymentRequest\VirtualAccountChannelCode
     */
    public function getChannelCode()
    {
        return $this->container['channel_code'];
    }

    /**
     * Sets channel_code
     *
     * @param \PaymentRequest\VirtualAccountChannelCode $channel_code channel_code
     *
     * @return self
     */
    public function setChannelCode($channel_code)
    {
        if (is_null($channel_code)) {
            throw new \InvalidArgumentException('non-nullable channel_code cannot be null');
        }
        $this->container['channel_code'] = $channel_code;

        return $this;
    }

    /**
     * Gets channel_properties
     *
     * @return \PaymentRequest\VirtualAccountChannelProperties
     */
    public function getChannelProperties()
    {
        return $this->container['channel_properties'];
    }

    /**
     * Sets channel_properties
     *
     * @param \PaymentRequest\VirtualAccountChannelProperties $channel_properties channel_properties
     *
     * @return self
     */
    public function setChannelProperties($channel_properties)
    {
        if (is_null($channel_properties)) {
            throw new \InvalidArgumentException('non-nullable channel_properties cannot be null');
        }
        $this->container['channel_properties'] = $channel_properties;

        return $this;
    }

    /**
     * Gets alternative_display_types
     *
     * @return string[]|null
     */
    public function getAlternativeDisplayTypes()
    {
        return $this->container['alternative_display_types'];
    }

    /**
     * Sets alternative_display_types
     *
     * @param string[]|null $alternative_display_types Alternative display requested for the virtual account
     *
     * @return self
     */
    public function setAlternativeDisplayTypes($alternative_display_types)
    {
        if (is_null($alternative_display_types)) {
            throw new \InvalidArgumentException('non-nullable alternative_display_types cannot be null');
        }
        $allowedValues = $this->getAlternativeDisplayTypesAllowableValues();
        if (array_diff($alternative_display_types, $allowedValues)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'alternative_display_types', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['alternative_display_types'] = $alternative_display_types;

        return $this;
    }

    /**
     * Gets alternative_displays
     *
     * @return \PaymentRequest\VirtualAccountAlternativeDisplay[]|null
     */
    public function getAlternativeDisplays()
    {
        return $this->container['alternative_displays'];
    }

    /**
     * Sets alternative_displays
     *
     * @param \PaymentRequest\VirtualAccountAlternativeDisplay[]|null $alternative_displays alternative_displays
     *
     * @return self
     */
    public function setAlternativeDisplays($alternative_displays)
    {
        if (is_null($alternative_displays)) {
            throw new \InvalidArgumentException('non-nullable alternative_displays cannot be null');
        }
        $this->container['alternative_displays'] = $alternative_displays;

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


