<?php
/**
 * Bank
 *
 * PHP version 7.4
 *
 * @category Class
 * @package  Xendit
 */

/**
 * xendit-invoice-service
 *
 * The version of the OpenAPI document: 1.5.0
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
 * Bank Class Doc Comment
 *
 * @category Class
 * @description An object representing bank details for invoices.
 * @package  Xendit
 * @implements \ArrayAccess<string, mixed>
 */
class Bank implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'Bank';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'bank_code' => '\Xendit\Invoice\BankCode',
        'collection_type' => 'string',
        'bank_branch' => 'string',
        'bank_account_number' => 'string',
        'account_holder_name' => 'string',
        'transfer_amount' => 'float',
        'alternative_displays' => '\Xendit\Invoice\AlternativeDisplayItem[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'bank_code' => null,
        'collection_type' => null,
        'bank_branch' => null,
        'bank_account_number' => null,
        'account_holder_name' => null,
        'transfer_amount' => null,
        'alternative_displays' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'bank_code' => false,
		'collection_type' => false,
		'bank_branch' => false,
		'bank_account_number' => false,
		'account_holder_name' => false,
		'transfer_amount' => false,
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
        'bank_code' => 'bank_code',
        'collection_type' => 'collection_type',
        'bank_branch' => 'bank_branch',
        'bank_account_number' => 'bank_account_number',
        'account_holder_name' => 'account_holder_name',
        'transfer_amount' => 'transfer_amount',
        'alternative_displays' => 'alternative_displays'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'bank_code' => 'setBankCode',
        'collection_type' => 'setCollectionType',
        'bank_branch' => 'setBankBranch',
        'bank_account_number' => 'setBankAccountNumber',
        'account_holder_name' => 'setAccountHolderName',
        'transfer_amount' => 'setTransferAmount',
        'alternative_displays' => 'setAlternativeDisplays'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'bank_code' => 'getBankCode',
        'collection_type' => 'getCollectionType',
        'bank_branch' => 'getBankBranch',
        'bank_account_number' => 'getBankAccountNumber',
        'account_holder_name' => 'getAccountHolderName',
        'transfer_amount' => 'getTransferAmount',
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
        $this->setIfExists('bank_code', $data ?? [], null);
        $this->setIfExists('collection_type', $data ?? [], null);
        $this->setIfExists('bank_branch', $data ?? [], null);
        $this->setIfExists('bank_account_number', $data ?? [], null);
        $this->setIfExists('account_holder_name', $data ?? [], null);
        $this->setIfExists('transfer_amount', $data ?? [], null);
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

        if ($this->container['bank_code'] === null) {
            $invalidProperties[] = "'bank_code' can't be null";
        }
        if ($this->container['collection_type'] === null) {
            $invalidProperties[] = "'collection_type' can't be null";
        }
        if ($this->container['account_holder_name'] === null) {
            $invalidProperties[] = "'account_holder_name' can't be null";
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
     * Gets bank_code
     *
     * @return \Invoice\BankCode
     */
    public function getBankCode()
    {
        return $this->container['bank_code'];
    }

    /**
     * Sets bank_code
     *
     * @param \Invoice\BankCode $bank_code bank_code
     *
     * @return self
     */
    public function setBankCode($bank_code)
    {
        if (is_null($bank_code)) {
            throw new \InvalidArgumentException('non-nullable bank_code cannot be null');
        }
        $this->container['bank_code'] = $bank_code;

        return $this;
    }

    /**
     * Gets collection_type
     *
     * @return string
     */
    public function getCollectionType()
    {
        return $this->container['collection_type'];
    }

    /**
     * Sets collection_type
     *
     * @param string $collection_type The collection type for the bank details.
     *
     * @return self
     */
    public function setCollectionType($collection_type)
    {
        if (is_null($collection_type)) {
            throw new \InvalidArgumentException('non-nullable collection_type cannot be null');
        }
        $this->container['collection_type'] = $collection_type;

        return $this;
    }

    /**
     * Gets bank_branch
     *
     * @return string|null
     */
    public function getBankBranch()
    {
        return $this->container['bank_branch'];
    }

    /**
     * Sets bank_branch
     *
     * @param string|null $bank_branch The branch of the bank.
     *
     * @return self
     */
    public function setBankBranch($bank_branch)
    {
        if (is_null($bank_branch)) {
            throw new \InvalidArgumentException('non-nullable bank_branch cannot be null');
        }
        $this->container['bank_branch'] = $bank_branch;

        return $this;
    }

    /**
     * Gets bank_account_number
     *
     * @return string|null
     */
    public function getBankAccountNumber()
    {
        return $this->container['bank_account_number'];
    }

    /**
     * Sets bank_account_number
     *
     * @param string|null $bank_account_number The bank account number.
     *
     * @return self
     */
    public function setBankAccountNumber($bank_account_number)
    {
        if (is_null($bank_account_number)) {
            throw new \InvalidArgumentException('non-nullable bank_account_number cannot be null');
        }
        $this->container['bank_account_number'] = $bank_account_number;

        return $this;
    }

    /**
     * Gets account_holder_name
     *
     * @return string
     */
    public function getAccountHolderName()
    {
        return $this->container['account_holder_name'];
    }

    /**
     * Sets account_holder_name
     *
     * @param string $account_holder_name The name of the account holder.
     *
     * @return self
     */
    public function setAccountHolderName($account_holder_name)
    {
        if (is_null($account_holder_name)) {
            throw new \InvalidArgumentException('non-nullable account_holder_name cannot be null');
        }
        $this->container['account_holder_name'] = $account_holder_name;

        return $this;
    }

    /**
     * Gets transfer_amount
     *
     * @return float|null
     */
    public function getTransferAmount()
    {
        return $this->container['transfer_amount'];
    }

    /**
     * Sets transfer_amount
     *
     * @param float|null $transfer_amount The transfer amount.
     *
     * @return self
     */
    public function setTransferAmount($transfer_amount)
    {
        if (is_null($transfer_amount)) {
            throw new \InvalidArgumentException('non-nullable transfer_amount cannot be null');
        }
        $this->container['transfer_amount'] = $transfer_amount;

        return $this;
    }

    /**
     * Gets alternative_displays
     *
     * @return \Invoice\AlternativeDisplayItem[]|null
     */
    public function getAlternativeDisplays()
    {
        return $this->container['alternative_displays'];
    }

    /**
     * Sets alternative_displays
     *
     * @param \Invoice\AlternativeDisplayItem[]|null $alternative_displays alternative_displays
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


