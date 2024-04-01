<?php
/**
 * PaymentMethodUpdateParameters
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


use \ArrayAccess;
use \Xendit\ObjectSerializer;
use \Xendit\Model\ModelInterface;

/**
 * PaymentMethodUpdateParameters Class Doc Comment
 *
 * @category Class
 * @package  Xendit
 * @implements \ArrayAccess<string, mixed>
 */
class PaymentMethodUpdateParameters implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'PaymentMethodUpdateParameters';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'description' => 'string',
        'reference_id' => 'string',
        'reusability' => '\Xendit\PaymentMethod\PaymentMethodReusability',
        'status' => '\Xendit\PaymentMethod\PaymentMethodStatus',
        'over_the_counter' => '\Xendit\PaymentMethod\OverTheCounterUpdateParameters',
        'virtual_account' => '\Xendit\PaymentMethod\VirtualAccountUpdateParameters'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'description' => null,
        'reference_id' => null,
        'reusability' => null,
        'status' => null,
        'over_the_counter' => null,
        'virtual_account' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'description' => false,
		'reference_id' => false,
		'reusability' => false,
		'status' => false,
		'over_the_counter' => false,
		'virtual_account' => false
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
        'description' => 'description',
        'reference_id' => 'reference_id',
        'reusability' => 'reusability',
        'status' => 'status',
        'over_the_counter' => 'over_the_counter',
        'virtual_account' => 'virtual_account'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'description' => 'setDescription',
        'reference_id' => 'setReferenceId',
        'reusability' => 'setReusability',
        'status' => 'setStatus',
        'over_the_counter' => 'setOverTheCounter',
        'virtual_account' => 'setVirtualAccount'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'description' => 'getDescription',
        'reference_id' => 'getReferenceId',
        'reusability' => 'getReusability',
        'status' => 'getStatus',
        'over_the_counter' => 'getOverTheCounter',
        'virtual_account' => 'getVirtualAccount'
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
        $this->setIfExists('description', $data ?? [], null);
        $this->setIfExists('reference_id', $data ?? [], null);
        $this->setIfExists('reusability', $data ?? [], null);
        $this->setIfExists('status', $data ?? [], null);
        $this->setIfExists('over_the_counter', $data ?? [], null);
        $this->setIfExists('virtual_account', $data ?? [], null);
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
     * @param string|null $description description
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
     * Gets reference_id
     *
     * @return string|null
     */
    public function getReferenceId()
    {
        return $this->container['reference_id'];
    }

    /**
     * Sets reference_id
     *
     * @param string|null $reference_id reference_id
     *
     * @return self
     */
    public function setReferenceId($reference_id)
    {
        if (is_null($reference_id)) {
            throw new \InvalidArgumentException('non-nullable reference_id cannot be null');
        }
        $this->container['reference_id'] = $reference_id;

        return $this;
    }

    /**
     * Gets reusability
     *
     * @return \PaymentMethod\PaymentMethodReusability|null
     */
    public function getReusability()
    {
        return $this->container['reusability'];
    }

    /**
     * Sets reusability
     *
     * @param \PaymentMethod\PaymentMethodReusability|null $reusability reusability
     *
     * @return self
     */
    public function setReusability($reusability)
    {
        if (is_null($reusability)) {
            throw new \InvalidArgumentException('non-nullable reusability cannot be null');
        }
        $this->container['reusability'] = $reusability;

        return $this;
    }

    /**
     * Gets status
     *
     * @return \PaymentMethod\PaymentMethodStatus|null
     */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
     * Sets status
     *
     * @param \PaymentMethod\PaymentMethodStatus|null $status status
     *
     * @return self
     */
    public function setStatus($status)
    {
        if (is_null($status)) {
            throw new \InvalidArgumentException('non-nullable status cannot be null');
        }
        $this->container['status'] = $status;

        return $this;
    }

    /**
     * Gets over_the_counter
     *
     * @return \PaymentMethod\OverTheCounterUpdateParameters|null
     */
    public function getOverTheCounter()
    {
        return $this->container['over_the_counter'];
    }

    /**
     * Sets over_the_counter
     *
     * @param \PaymentMethod\OverTheCounterUpdateParameters|null $over_the_counter over_the_counter
     *
     * @return self
     */
    public function setOverTheCounter($over_the_counter)
    {
        if (is_null($over_the_counter)) {
            throw new \InvalidArgumentException('non-nullable over_the_counter cannot be null');
        }
        $this->container['over_the_counter'] = $over_the_counter;

        return $this;
    }

    /**
     * Gets virtual_account
     *
     * @return \PaymentMethod\VirtualAccountUpdateParameters|null
     */
    public function getVirtualAccount()
    {
        return $this->container['virtual_account'];
    }

    /**
     * Sets virtual_account
     *
     * @param \PaymentMethod\VirtualAccountUpdateParameters|null $virtual_account virtual_account
     *
     * @return self
     */
    public function setVirtualAccount($virtual_account)
    {
        if (is_null($virtual_account)) {
            throw new \InvalidArgumentException('non-nullable virtual_account cannot be null');
        }
        $this->container['virtual_account'] = $virtual_account;

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


