<?php
/**
 * Channel
 *
 * PHP version 7.4
 *
 * @category Class
 * @package  Xendit
 */

/**
 * Payout Service
 *
 * The version of the OpenAPI document: 1.0.0
 */

/**
 * NOTE: This class is auto generated.
 * Do not edit the class manually.
 */

namespace Xendit\Payout;


use \ArrayAccess;
use \Xendit\ObjectSerializer;
use \Xendit\Model\ModelInterface;

/**
 * Channel Class Doc Comment
 *
 * @category Class
 * @description Channel information where you can send the money to
 * @package  Xendit
 * @implements \ArrayAccess<string, mixed>
 */
class Channel implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'Channel';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'channel_code' => 'string',
        'channel_category' => '\Xendit\Payout\ChannelCategory',
        'currency' => 'string',
        'channel_name' => 'string',
        'amount_limits' => '\Xendit\Payout\ChannelAmountLimits'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'channel_code' => null,
        'channel_category' => null,
        'currency' => null,
        'channel_name' => null,
        'amount_limits' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'channel_code' => false,
		'channel_category' => false,
		'currency' => false,
		'channel_name' => false,
		'amount_limits' => false
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
        'channel_code' => 'channel_code',
        'channel_category' => 'channel_category',
        'currency' => 'currency',
        'channel_name' => 'channel_name',
        'amount_limits' => 'amount_limits'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'channel_code' => 'setChannelCode',
        'channel_category' => 'setChannelCategory',
        'currency' => 'setCurrency',
        'channel_name' => 'setChannelName',
        'amount_limits' => 'setAmountLimits'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'channel_code' => 'getChannelCode',
        'channel_category' => 'getChannelCategory',
        'currency' => 'getCurrency',
        'channel_name' => 'getChannelName',
        'amount_limits' => 'getAmountLimits'
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
        $this->setIfExists('channel_code', $data ?? [], null);
        $this->setIfExists('channel_category', $data ?? [], null);
        $this->setIfExists('currency', $data ?? [], null);
        $this->setIfExists('channel_name', $data ?? [], null);
        $this->setIfExists('amount_limits', $data ?? [], null);
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
        if ($this->container['channel_category'] === null) {
            $invalidProperties[] = "'channel_category' can't be null";
        }
        if ($this->container['currency'] === null) {
            $invalidProperties[] = "'currency' can't be null";
        }
        if ($this->container['channel_name'] === null) {
            $invalidProperties[] = "'channel_name' can't be null";
        }
        if ($this->container['amount_limits'] === null) {
            $invalidProperties[] = "'amount_limits' can't be null";
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
     * Gets channel_code
     *
     * @return string
     */
    public function getChannelCode()
    {
        return $this->container['channel_code'];
    }

    /**
     * Sets channel_code
     *
     * @param string $channel_code Destination channel to send the money to, prefixed by ISO-3166 country code
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
     * Gets channel_category
     *
     * @return \Payout\ChannelCategory
     */
    public function getChannelCategory()
    {
        return $this->container['channel_category'];
    }

    /**
     * Sets channel_category
     *
     * @param \Payout\ChannelCategory $channel_category channel_category
     *
     * @return self
     */
    public function setChannelCategory($channel_category)
    {
        if (is_null($channel_category)) {
            throw new \InvalidArgumentException('non-nullable channel_category cannot be null');
        }
        $this->container['channel_category'] = $channel_category;

        return $this;
    }

    /**
     * Gets currency
     *
     * @return string
     */
    public function getCurrency()
    {
        return $this->container['currency'];
    }

    /**
     * Sets currency
     *
     * @param string $currency Currency of the destination channel using ISO-4217 currency code
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
     * Gets channel_name
     *
     * @return string
     */
    public function getChannelName()
    {
        return $this->container['channel_name'];
    }

    /**
     * Sets channel_name
     *
     * @param string $channel_name Name of the destination channel
     *
     * @return self
     */
    public function setChannelName($channel_name)
    {
        if (is_null($channel_name)) {
            throw new \InvalidArgumentException('non-nullable channel_name cannot be null');
        }
        $this->container['channel_name'] = $channel_name;

        return $this;
    }

    /**
     * Gets amount_limits
     *
     * @return \Payout\ChannelAmountLimits
     */
    public function getAmountLimits()
    {
        return $this->container['amount_limits'];
    }

    /**
     * Sets amount_limits
     *
     * @param \Payout\ChannelAmountLimits $amount_limits amount_limits
     *
     * @return self
     */
    public function setAmountLimits($amount_limits)
    {
        if (is_null($amount_limits)) {
            throw new \InvalidArgumentException('non-nullable amount_limits cannot be null');
        }
        $this->container['amount_limits'] = $amount_limits;

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


