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
        'type' => '\Xendit\PaymentMethod\PaymentMethodType',
        'country' => 'string',
        'reusability' => '\Xendit\PaymentMethod\PaymentMethodReusability',
        'customer_id' => 'string',
        'reference_id' => 'string',
        'description' => 'string',
        'card' => '\Xendit\PaymentMethod\CardParameters',
        'direct_debit' => '\Xendit\PaymentMethod\DirectDebitParameters',
        'ewallet' => '\Xendit\PaymentMethod\EWalletParameters',
        'over_the_counter' => '\Xendit\PaymentMethod\OverTheCounterParameters',
        'virtual_account' => '\Xendit\PaymentMethod\VirtualAccountParameters',
        'qr_code' => '\Xendit\PaymentMethod\QRCodeParameters',
        'metadata' => 'object',
        'billing_information' => '\Xendit\PaymentMethod\BillingInformation'
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
        'country' => null,
        'reusability' => null,
        'customer_id' => null,
        'reference_id' => null,
        'description' => null,
        'card' => null,
        'direct_debit' => null,
        'ewallet' => null,
        'over_the_counter' => null,
        'virtual_account' => null,
        'qr_code' => null,
        'metadata' => null,
        'billing_information' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'type' => false,
		'country' => true,
		'reusability' => false,
		'customer_id' => true,
		'reference_id' => false,
		'description' => true,
		'card' => false,
		'direct_debit' => false,
		'ewallet' => false,
		'over_the_counter' => false,
		'virtual_account' => false,
		'qr_code' => false,
		'metadata' => true,
		'billing_information' => true
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
        'country' => 'country',
        'reusability' => 'reusability',
        'customer_id' => 'customer_id',
        'reference_id' => 'reference_id',
        'description' => 'description',
        'card' => 'card',
        'direct_debit' => 'direct_debit',
        'ewallet' => 'ewallet',
        'over_the_counter' => 'over_the_counter',
        'virtual_account' => 'virtual_account',
        'qr_code' => 'qr_code',
        'metadata' => 'metadata',
        'billing_information' => 'billing_information'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'type' => 'setType',
        'country' => 'setCountry',
        'reusability' => 'setReusability',
        'customer_id' => 'setCustomerId',
        'reference_id' => 'setReferenceId',
        'description' => 'setDescription',
        'card' => 'setCard',
        'direct_debit' => 'setDirectDebit',
        'ewallet' => 'setEwallet',
        'over_the_counter' => 'setOverTheCounter',
        'virtual_account' => 'setVirtualAccount',
        'qr_code' => 'setQrCode',
        'metadata' => 'setMetadata',
        'billing_information' => 'setBillingInformation'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'type' => 'getType',
        'country' => 'getCountry',
        'reusability' => 'getReusability',
        'customer_id' => 'getCustomerId',
        'reference_id' => 'getReferenceId',
        'description' => 'getDescription',
        'card' => 'getCard',
        'direct_debit' => 'getDirectDebit',
        'ewallet' => 'getEwallet',
        'over_the_counter' => 'getOverTheCounter',
        'virtual_account' => 'getVirtualAccount',
        'qr_code' => 'getQrCode',
        'metadata' => 'getMetadata',
        'billing_information' => 'getBillingInformation'
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
        $this->setIfExists('country', $data ?? [], null);
        $this->setIfExists('reusability', $data ?? [], null);
        $this->setIfExists('customer_id', $data ?? [], null);
        $this->setIfExists('reference_id', $data ?? [], null);
        $this->setIfExists('description', $data ?? [], null);
        $this->setIfExists('card', $data ?? [], null);
        $this->setIfExists('direct_debit', $data ?? [], null);
        $this->setIfExists('ewallet', $data ?? [], null);
        $this->setIfExists('over_the_counter', $data ?? [], null);
        $this->setIfExists('virtual_account', $data ?? [], null);
        $this->setIfExists('qr_code', $data ?? [], null);
        $this->setIfExists('metadata', $data ?? [], null);
        $this->setIfExists('billing_information', $data ?? [], null);
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
     * @return \PaymentMethod\PaymentMethodType
     */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
     * Sets type
     *
     * @param \PaymentMethod\PaymentMethodType $type type
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
            array_push($this->openAPINullablesSetToNull, 'country');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('country', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['country'] = $country;

        return $this;
    }

    /**
     * Gets reusability
     *
     * @return \PaymentMethod\PaymentMethodReusability
     */
    public function getReusability()
    {
        return $this->container['reusability'];
    }

    /**
     * Sets reusability
     *
     * @param \PaymentMethod\PaymentMethodReusability $reusability reusability
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
     * Gets customer_id
     *
     * @return string|null
     */
    public function getCustomerId()
    {
        return $this->container['customer_id'];
    }

    /**
     * Sets customer_id
     *
     * @param string|null $customer_id customer_id
     *
     * @return self
     */
    public function setCustomerId($customer_id)
    {
        if (is_null($customer_id)) {
            array_push($this->openAPINullablesSetToNull, 'customer_id');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('customer_id', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['customer_id'] = $customer_id;

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
     * Gets card
     *
     * @return \PaymentMethod\CardParameters|null
     */
    public function getCard()
    {
        return $this->container['card'];
    }

    /**
     * Sets card
     *
     * @param \PaymentMethod\CardParameters|null $card card
     *
     * @return self
     */
    public function setCard($card)
    {
        if (is_null($card)) {
            throw new \InvalidArgumentException('non-nullable card cannot be null');
        }
        $this->container['card'] = $card;

        return $this;
    }

    /**
     * Gets direct_debit
     *
     * @return \PaymentMethod\DirectDebitParameters|null
     */
    public function getDirectDebit()
    {
        return $this->container['direct_debit'];
    }

    /**
     * Sets direct_debit
     *
     * @param \PaymentMethod\DirectDebitParameters|null $direct_debit direct_debit
     *
     * @return self
     */
    public function setDirectDebit($direct_debit)
    {
        if (is_null($direct_debit)) {
            throw new \InvalidArgumentException('non-nullable direct_debit cannot be null');
        }
        $this->container['direct_debit'] = $direct_debit;

        return $this;
    }

    /**
     * Gets ewallet
     *
     * @return \PaymentMethod\EWalletParameters|null
     */
    public function getEwallet()
    {
        return $this->container['ewallet'];
    }

    /**
     * Sets ewallet
     *
     * @param \PaymentMethod\EWalletParameters|null $ewallet ewallet
     *
     * @return self
     */
    public function setEwallet($ewallet)
    {
        if (is_null($ewallet)) {
            throw new \InvalidArgumentException('non-nullable ewallet cannot be null');
        }
        $this->container['ewallet'] = $ewallet;

        return $this;
    }

    /**
     * Gets over_the_counter
     *
     * @return \PaymentMethod\OverTheCounterParameters|null
     */
    public function getOverTheCounter()
    {
        return $this->container['over_the_counter'];
    }

    /**
     * Sets over_the_counter
     *
     * @param \PaymentMethod\OverTheCounterParameters|null $over_the_counter over_the_counter
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
     * @return \PaymentMethod\VirtualAccountParameters|null
     */
    public function getVirtualAccount()
    {
        return $this->container['virtual_account'];
    }

    /**
     * Sets virtual_account
     *
     * @param \PaymentMethod\VirtualAccountParameters|null $virtual_account virtual_account
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
     * Gets qr_code
     *
     * @return \PaymentMethod\QRCodeParameters|null
     */
    public function getQrCode()
    {
        return $this->container['qr_code'];
    }

    /**
     * Sets qr_code
     *
     * @param \PaymentMethod\QRCodeParameters|null $qr_code qr_code
     *
     * @return self
     */
    public function setQrCode($qr_code)
    {
        if (is_null($qr_code)) {
            throw new \InvalidArgumentException('non-nullable qr_code cannot be null');
        }
        $this->container['qr_code'] = $qr_code;

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
     * @param object|null $metadata metadata
     *
     * @return self
     */
    public function setMetadata($metadata)
    {
        if (is_null($metadata)) {
            array_push($this->openAPINullablesSetToNull, 'metadata');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('metadata', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['metadata'] = $metadata;

        return $this;
    }

    /**
     * Gets billing_information
     *
     * @return \PaymentMethod\BillingInformation|null
     */
    public function getBillingInformation()
    {
        return $this->container['billing_information'];
    }

    /**
     * Sets billing_information
     *
     * @param \PaymentMethod\BillingInformation|null $billing_information billing_information
     *
     * @return self
     */
    public function setBillingInformation($billing_information)
    {
        if (is_null($billing_information)) {
            array_push($this->openAPINullablesSetToNull, 'billing_information');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('billing_information', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['billing_information'] = $billing_information;

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


