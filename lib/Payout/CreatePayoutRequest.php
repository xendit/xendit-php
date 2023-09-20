<?php
/**
 * CreatePayoutRequest
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
 * CreatePayoutRequest Class Doc Comment
 *
 * @category Class
 * @description Information needed by Xendit to send money to the destination channel provided
 * @package  Xendit
 * @implements \ArrayAccess<string, mixed>
 */
class CreatePayoutRequest implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'CreatePayoutRequest';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'reference_id' => 'string',
        'channel_code' => 'string',
        'channel_properties' => '\Xendit\Payout\DigitalPayoutChannelProperties',
        'amount' => 'float',
        'description' => 'string',
        'currency' => 'string',
        'receipt_notification' => '\Xendit\Payout\ReceiptNotification',
        'metadata' => 'object'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'reference_id' => null,
        'channel_code' => null,
        'channel_properties' => null,
        'amount' => null,
        'description' => null,
        'currency' => null,
        'receipt_notification' => null,
        'metadata' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'reference_id' => false,
		'channel_code' => false,
		'channel_properties' => false,
		'amount' => false,
		'description' => false,
		'currency' => false,
		'receipt_notification' => false,
		'metadata' => false
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
        'reference_id' => 'reference_id',
        'channel_code' => 'channel_code',
        'channel_properties' => 'channel_properties',
        'amount' => 'amount',
        'description' => 'description',
        'currency' => 'currency',
        'receipt_notification' => 'receipt_notification',
        'metadata' => 'metadata'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'reference_id' => 'setReferenceId',
        'channel_code' => 'setChannelCode',
        'channel_properties' => 'setChannelProperties',
        'amount' => 'setAmount',
        'description' => 'setDescription',
        'currency' => 'setCurrency',
        'receipt_notification' => 'setReceiptNotification',
        'metadata' => 'setMetadata'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'reference_id' => 'getReferenceId',
        'channel_code' => 'getChannelCode',
        'channel_properties' => 'getChannelProperties',
        'amount' => 'getAmount',
        'description' => 'getDescription',
        'currency' => 'getCurrency',
        'receipt_notification' => 'getReceiptNotification',
        'metadata' => 'getMetadata'
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
        $this->setIfExists('reference_id', $data ?? [], null);
        $this->setIfExists('channel_code', $data ?? [], null);
        $this->setIfExists('channel_properties', $data ?? [], null);
        $this->setIfExists('amount', $data ?? [], null);
        $this->setIfExists('description', $data ?? [], null);
        $this->setIfExists('currency', $data ?? [], null);
        $this->setIfExists('receipt_notification', $data ?? [], null);
        $this->setIfExists('metadata', $data ?? [], null);
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

        if ($this->container['reference_id'] === null) {
            $invalidProperties[] = "'reference_id' can't be null";
        }
        if ((mb_strlen($this->container['reference_id']) < 1)) {
            $invalidProperties[] = "invalid value for 'reference_id', the character length must be bigger than or equal to 1.";
        }

        if ($this->container['channel_code'] === null) {
            $invalidProperties[] = "'channel_code' can't be null";
        }
        if ($this->container['channel_properties'] === null) {
            $invalidProperties[] = "'channel_properties' can't be null";
        }
        if ($this->container['amount'] === null) {
            $invalidProperties[] = "'amount' can't be null";
        }
        if ($this->container['currency'] === null) {
            $invalidProperties[] = "'currency' can't be null";
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
     * Gets reference_id
     *
     * @return string
     */
    public function getReferenceId()
    {
        return $this->container['reference_id'];
    }

    /**
     * Sets reference_id
     *
     * @param string $reference_id A client defined payout identifier
     *
     * @return self
     */
    public function setReferenceId($reference_id)
    {
        if (is_null($reference_id)) {
            throw new \InvalidArgumentException('non-nullable reference_id cannot be null');
        }

        if ((mb_strlen($reference_id) < 1)) {
            throw new \InvalidArgumentException('invalid length for $reference_id when calling CreatePayoutRequest., must be bigger than or equal to 1.');
        }

        $this->container['reference_id'] = $reference_id;

        return $this;
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
     * @param string $channel_code Channel code of selected destination bank or e-wallet
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
     * @return \Payout\DigitalPayoutChannelProperties
     */
    public function getChannelProperties()
    {
        return $this->container['channel_properties'];
    }

    /**
     * Sets channel_properties
     *
     * @param \Payout\DigitalPayoutChannelProperties $channel_properties channel_properties
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
     * Gets amount
     *
     * @return float
     */
    public function getAmount()
    {
        return $this->container['amount'];
    }

    /**
     * Sets amount
     *
     * @param float $amount Amount to be sent to the destination account and should be a multiple of the minimum increment for the selected channel
     *
     * @return self
     */
    public function setAmount($amount)
    {
        if (is_null($amount)) {
            throw new \InvalidArgumentException('non-nullable amount cannot be null');
        }
        $this->container['amount'] = $amount;

        return $this;
    }

    /**
     * Gets description
     *
     * @return string|null
     */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
     * Sets description
     *
     * @param string|null $description Description to send with the payout, the recipient may see this e.g., in their bank statement (if supported) or in email receipts we send on your behalf
     *
     * @return self
     */
    public function setDescription($description)
    {
        if (is_null($description)) {
            throw new \InvalidArgumentException('non-nullable description cannot be null');
        }
        $this->container['description'] = $description;

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
     * Gets receipt_notification
     *
     * @return \Payout\ReceiptNotification|null
     */
    public function getReceiptNotification()
    {
        return $this->container['receipt_notification'];
    }

    /**
     * Sets receipt_notification
     *
     * @param \Payout\ReceiptNotification|null $receipt_notification receipt_notification
     *
     * @return self
     */
    public function setReceiptNotification($receipt_notification)
    {
        if (is_null($receipt_notification)) {
            throw new \InvalidArgumentException('non-nullable receipt_notification cannot be null');
        }
        $this->container['receipt_notification'] = $receipt_notification;

        return $this;
    }

    /**
     * Gets metadata
     *
     * @return object|null
     */
    public function getMetadata()
    {
        return $this->container['metadata'];
    }

    /**
     * Sets metadata
     *
     * @param object|null $metadata Object of additional information you may use
     *
     * @return self
     */
    public function setMetadata($metadata)
    {
        if (is_null($metadata)) {
            throw new \InvalidArgumentException('non-nullable metadata cannot be null');
        }
        $this->container['metadata'] = $metadata;

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


