<?php
/**
 * FeeResponse
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


use \ArrayAccess;
use \Xendit\ObjectSerializer;
use \Xendit\Model\ModelInterface;

/**
 * FeeResponse Class Doc Comment
 *
 * @category Class
 * @package  Xendit
 * @implements \ArrayAccess<string, mixed>
 */
class FeeResponse implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'FeeResponse';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'xendit_fee' => 'float',
        'value_added_tax' => 'float',
        'xendit_withholding_tax' => 'float',
        'third_party_withholding_tax' => 'float',
        'status' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'xendit_fee' => null,
        'value_added_tax' => null,
        'xendit_withholding_tax' => null,
        'third_party_withholding_tax' => null,
        'status' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'xendit_fee' => false,
		'value_added_tax' => false,
		'xendit_withholding_tax' => false,
		'third_party_withholding_tax' => false,
		'status' => false
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
        'xendit_fee' => 'xendit_fee',
        'value_added_tax' => 'value_added_tax',
        'xendit_withholding_tax' => 'xendit_withholding_tax',
        'third_party_withholding_tax' => 'third_party_withholding_tax',
        'status' => 'status'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'xendit_fee' => 'setXenditFee',
        'value_added_tax' => 'setValueAddedTax',
        'xendit_withholding_tax' => 'setXenditWithholdingTax',
        'third_party_withholding_tax' => 'setThirdPartyWithholdingTax',
        'status' => 'setStatus'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'xendit_fee' => 'getXenditFee',
        'value_added_tax' => 'getValueAddedTax',
        'xendit_withholding_tax' => 'getXenditWithholdingTax',
        'third_party_withholding_tax' => 'getThirdPartyWithholdingTax',
        'status' => 'getStatus'
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

    public const STATUS_PENDING = 'PENDING';
    public const STATUS_COMPLETED = 'COMPLETED';
    public const STATUS_CANCELED = 'CANCELED';
    public const STATUS_REVERSED = 'REVERSED';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getStatusAllowableValues()
    {
        return [
            self::STATUS_PENDING,
            self::STATUS_COMPLETED,
            self::STATUS_CANCELED,
            self::STATUS_REVERSED,
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
        $this->setIfExists('xendit_fee', $data ?? [], null);
        $this->setIfExists('value_added_tax', $data ?? [], null);
        $this->setIfExists('xendit_withholding_tax', $data ?? [], null);
        $this->setIfExists('third_party_withholding_tax', $data ?? [], null);
        $this->setIfExists('status', $data ?? [], null);
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

        if ($this->container['xendit_fee'] === null) {
            $invalidProperties[] = "'xendit_fee' can't be null";
        }
        if ($this->container['value_added_tax'] === null) {
            $invalidProperties[] = "'value_added_tax' can't be null";
        }
        $allowedValues = $this->getStatusAllowableValues();
        if (!is_null($this->container['status']) && !in_array($this->container['status'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'status', must be one of '%s'",
                $this->container['status'],
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
     * Gets xendit_fee
     *
     * @return float
     */
    public function getXenditFee()
    {
        return $this->container['xendit_fee'];
    }

    /**
     * Sets xendit_fee
     *
     * @param float $xendit_fee Amount of the Xendit fee for this transaction.
     *
     * @return self
     */
    public function setXenditFee($xendit_fee)
    {
        if (is_null($xendit_fee)) {
            throw new \InvalidArgumentException('non-nullable xendit_fee cannot be null');
        }
        $this->container['xendit_fee'] = $xendit_fee;

        return $this;
    }

    /**
     * Gets value_added_tax
     *
     * @return float
     */
    public function getValueAddedTax()
    {
        return $this->container['value_added_tax'];
    }

    /**
     * Sets value_added_tax
     *
     * @param float $value_added_tax Amount of the VAT for this transaction.
     *
     * @return self
     */
    public function setValueAddedTax($value_added_tax)
    {
        if (is_null($value_added_tax)) {
            throw new \InvalidArgumentException('non-nullable value_added_tax cannot be null');
        }
        $this->container['value_added_tax'] = $value_added_tax;

        return $this;
    }

    /**
     * Gets xendit_withholding_tax
     *
     * @return float|null
     */
    public function getXenditWithholdingTax()
    {
        return $this->container['xendit_withholding_tax'];
    }

    /**
     * Sets xendit_withholding_tax
     *
     * @param float|null $xendit_withholding_tax Amount of the Xendit Withholding Tax for this transaction if applicable. See [Tax Documentation](https://docs.xendit.co/fees-and-vat#vat) for more information.
     *
     * @return self
     */
    public function setXenditWithholdingTax($xendit_withholding_tax)
    {
        if (is_null($xendit_withholding_tax)) {
            throw new \InvalidArgumentException('non-nullable xendit_withholding_tax cannot be null');
        }
        $this->container['xendit_withholding_tax'] = $xendit_withholding_tax;

        return $this;
    }

    /**
     * Gets third_party_withholding_tax
     *
     * @return float|null
     */
    public function getThirdPartyWithholdingTax()
    {
        return $this->container['third_party_withholding_tax'];
    }

    /**
     * Sets third_party_withholding_tax
     *
     * @param float|null $third_party_withholding_tax Amount of the 3rd Party Withholding Tax for this transaction if applicable. 3rd party example: Bank
     *
     * @return self
     */
    public function setThirdPartyWithholdingTax($third_party_withholding_tax)
    {
        if (is_null($third_party_withholding_tax)) {
            throw new \InvalidArgumentException('non-nullable third_party_withholding_tax cannot be null');
        }
        $this->container['third_party_withholding_tax'] = $third_party_withholding_tax;

        return $this;
    }

    /**
     * Gets status
     *
     * @return string|null
     */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
     * Sets status
     *
     * @param string|null $status status
     *
     * @return self
     */
    public function setStatus($status)
    {
        if (is_null($status)) {
            throw new \InvalidArgumentException('non-nullable status cannot be null');
        }
        $allowedValues = $this->getStatusAllowableValues();
        if (!in_array($status, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'status', must be one of '%s'",
                    $status,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['status'] = $status;

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


