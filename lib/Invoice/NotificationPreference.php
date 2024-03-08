<?php
/**
 * NotificationPreference
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


use \ArrayAccess;
use \Xendit\ObjectSerializer;
use \Xendit\Model\ModelInterface;

/**
 * NotificationPreference Class Doc Comment
 *
 * @category Class
 * @description An object representing notification preferences for different invoice events.
 * @package  Xendit
 * @implements \ArrayAccess<string, mixed>
 */
class NotificationPreference implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'NotificationPreference';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'invoice_created' => '\Xendit\Invoice\NotificationChannel[]',
        'invoice_reminder' => '\Xendit\Invoice\NotificationChannel[]',
        'invoice_paid' => '\Xendit\Invoice\NotificationChannel[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'invoice_created' => null,
        'invoice_reminder' => null,
        'invoice_paid' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'invoice_created' => false,
		'invoice_reminder' => false,
		'invoice_paid' => false
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
        'invoice_created' => 'invoice_created',
        'invoice_reminder' => 'invoice_reminder',
        'invoice_paid' => 'invoice_paid'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'invoice_created' => 'setInvoiceCreated',
        'invoice_reminder' => 'setInvoiceReminder',
        'invoice_paid' => 'setInvoicePaid'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'invoice_created' => 'getInvoiceCreated',
        'invoice_reminder' => 'getInvoiceReminder',
        'invoice_paid' => 'getInvoicePaid'
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
        $this->setIfExists('invoice_created', $data ?? [], null);
        $this->setIfExists('invoice_reminder', $data ?? [], null);
        $this->setIfExists('invoice_paid', $data ?? [], null);
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
     * Gets invoice_created
     *
     * @return \Invoice\NotificationChannel[]|null
     */
    public function getInvoiceCreated()
    {
        return $this->container['invoice_created'];
    }

    /**
     * Sets invoice_created
     *
     * @param \Invoice\NotificationChannel[]|null $invoice_created Notification channels for when an invoice is created.
     *
     * @return self
     */
    public function setInvoiceCreated($invoice_created)
    {
        if (is_null($invoice_created)) {
            throw new \InvalidArgumentException('non-nullable invoice_created cannot be null');
        }
        $this->container['invoice_created'] = $invoice_created;

        return $this;
    }

    /**
     * Gets invoice_reminder
     *
     * @return \Invoice\NotificationChannel[]|null
     */
    public function getInvoiceReminder()
    {
        return $this->container['invoice_reminder'];
    }

    /**
     * Sets invoice_reminder
     *
     * @param \Invoice\NotificationChannel[]|null $invoice_reminder Notification channels for invoice reminders.
     *
     * @return self
     */
    public function setInvoiceReminder($invoice_reminder)
    {
        if (is_null($invoice_reminder)) {
            throw new \InvalidArgumentException('non-nullable invoice_reminder cannot be null');
        }
        $this->container['invoice_reminder'] = $invoice_reminder;

        return $this;
    }

    /**
     * Gets invoice_paid
     *
     * @return \Invoice\NotificationChannel[]|null
     */
    public function getInvoicePaid()
    {
        return $this->container['invoice_paid'];
    }

    /**
     * Sets invoice_paid
     *
     * @param \Invoice\NotificationChannel[]|null $invoice_paid Notification channels for when an invoice is paid.
     *
     * @return self
     */
    public function setInvoicePaid($invoice_paid)
    {
        if (is_null($invoice_paid)) {
            throw new \InvalidArgumentException('non-nullable invoice_paid cannot be null');
        }
        $this->container['invoice_paid'] = $invoice_paid;

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


