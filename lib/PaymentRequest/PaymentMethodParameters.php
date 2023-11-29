<?php
/**
 * PaymentMethodParameters
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
 * PaymentMethodParameters Class Doc Comment
 *
 * @category Class
 * @package  Xendit
 * @implements \ArrayAccess<string, mixed>
 */
class PaymentMethodParameters implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'PaymentMethodParameters';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'type' => '\Xendit\PaymentRequest\PaymentMethodType',
        'reusability' => '\Xendit\PaymentRequest\PaymentMethodReusability',
        'description' => 'string',
        'reference_id' => 'string',
        'direct_debit' => '\Xendit\PaymentRequest\DirectDebitParameters',
        'ewallet' => '\Xendit\PaymentRequest\EWalletParameters',
        'over_the_counter' => '\Xendit\PaymentRequest\OverTheCounterParameters',
        'virtual_account' => '\Xendit\PaymentRequest\VirtualAccountParameters',
        'qr_code' => '\Xendit\PaymentRequest\QRCodeParameters'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'type' => null,
        'reusability' => null,
        'description' => null,
        'reference_id' => null,
        'direct_debit' => null,
        'ewallet' => null,
        'over_the_counter' => null,
        'virtual_account' => null,
        'qr_code' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'type' => false,
		'reusability' => false,
		'description' => true,
		'reference_id' => false,
		'direct_debit' => true,
		'ewallet' => true,
		'over_the_counter' => true,
		'virtual_account' => true,
		'qr_code' => true
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
        'type' => 'type',
        'reusability' => 'reusability',
        'description' => 'description',
        'reference_id' => 'reference_id',
        'direct_debit' => 'direct_debit',
        'ewallet' => 'ewallet',
        'over_the_counter' => 'over_the_counter',
        'virtual_account' => 'virtual_account',
        'qr_code' => 'qr_code'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'type' => 'setType',
        'reusability' => 'setReusability',
        'description' => 'setDescription',
        'reference_id' => 'setReferenceId',
        'direct_debit' => 'setDirectDebit',
        'ewallet' => 'setEwallet',
        'over_the_counter' => 'setOverTheCounter',
        'virtual_account' => 'setVirtualAccount',
        'qr_code' => 'setQrCode'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'type' => 'getType',
        'reusability' => 'getReusability',
        'description' => 'getDescription',
        'reference_id' => 'getReferenceId',
        'direct_debit' => 'getDirectDebit',
        'ewallet' => 'getEwallet',
        'over_the_counter' => 'getOverTheCounter',
        'virtual_account' => 'getVirtualAccount',
        'qr_code' => 'getQrCode'
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
        $this->setIfExists('type', $data ?? [], null);
        $this->setIfExists('reusability', $data ?? [], null);
        $this->setIfExists('description', $data ?? [], null);
        $this->setIfExists('reference_id', $data ?? [], null);
        $this->setIfExists('direct_debit', $data ?? [], null);
        $this->setIfExists('ewallet', $data ?? [], null);
        $this->setIfExists('over_the_counter', $data ?? [], null);
        $this->setIfExists('virtual_account', $data ?? [], null);
        $this->setIfExists('qr_code', $data ?? [], null);
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

        if ($this->container['type'] === null) {
            $invalidProperties[] = "'type' can't be null";
        }
        if ($this->container['reusability'] === null) {
            $invalidProperties[] = "'reusability' can't be null";
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
     * Gets type
     *
     * @return \PaymentRequest\PaymentMethodType
     */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
     * Sets type
     *
     * @param \PaymentRequest\PaymentMethodType $type type
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
     * Gets reusability
     *
     * @return \PaymentRequest\PaymentMethodReusability
     */
    public function getReusability()
    {
        return $this->container['reusability'];
    }

    /**
     * Sets reusability
     *
     * @param \PaymentRequest\PaymentMethodReusability $reusability reusability
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
            array_push($this->openAPINullablesSetToNull, 'description');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('description', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
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
     * Gets direct_debit
     *
     * @return \PaymentRequest\DirectDebitParameters|null
     */
    public function getDirectDebit()
    {
        return $this->container['direct_debit'];
    }

    /**
     * Sets direct_debit
     *
     * @param \PaymentRequest\DirectDebitParameters|null $direct_debit direct_debit
     *
     * @return self
     */
    public function setDirectDebit($direct_debit)
    {
        if (is_null($direct_debit)) {
            array_push($this->openAPINullablesSetToNull, 'direct_debit');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('direct_debit', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['direct_debit'] = $direct_debit;

        return $this;
    }

    /**
     * Gets ewallet
     *
     * @return \PaymentRequest\EWalletParameters|null
     */
    public function getEwallet()
    {
        return $this->container['ewallet'];
    }

    /**
     * Sets ewallet
     *
     * @param \PaymentRequest\EWalletParameters|null $ewallet ewallet
     *
     * @return self
     */
    public function setEwallet($ewallet)
    {
        if (is_null($ewallet)) {
            array_push($this->openAPINullablesSetToNull, 'ewallet');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('ewallet', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['ewallet'] = $ewallet;

        return $this;
    }

    /**
     * Gets over_the_counter
     *
     * @return \PaymentRequest\OverTheCounterParameters|null
     */
    public function getOverTheCounter()
    {
        return $this->container['over_the_counter'];
    }

    /**
     * Sets over_the_counter
     *
     * @param \PaymentRequest\OverTheCounterParameters|null $over_the_counter over_the_counter
     *
     * @return self
     */
    public function setOverTheCounter($over_the_counter)
    {
        if (is_null($over_the_counter)) {
            array_push($this->openAPINullablesSetToNull, 'over_the_counter');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('over_the_counter', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['over_the_counter'] = $over_the_counter;

        return $this;
    }

    /**
     * Gets virtual_account
     *
     * @return \PaymentRequest\VirtualAccountParameters|null
     */
    public function getVirtualAccount()
    {
        return $this->container['virtual_account'];
    }

    /**
     * Sets virtual_account
     *
     * @param \PaymentRequest\VirtualAccountParameters|null $virtual_account virtual_account
     *
     * @return self
     */
    public function setVirtualAccount($virtual_account)
    {
        if (is_null($virtual_account)) {
            array_push($this->openAPINullablesSetToNull, 'virtual_account');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('virtual_account', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['virtual_account'] = $virtual_account;

        return $this;
    }

    /**
     * Gets qr_code
     *
     * @return \PaymentRequest\QRCodeParameters|null
     */
    public function getQrCode()
    {
        return $this->container['qr_code'];
    }

    /**
     * Sets qr_code
     *
     * @param \PaymentRequest\QRCodeParameters|null $qr_code qr_code
     *
     * @return self
     */
    public function setQrCode($qr_code)
    {
        if (is_null($qr_code)) {
            array_push($this->openAPINullablesSetToNull, 'qr_code');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('qr_code', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['qr_code'] = $qr_code;

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


