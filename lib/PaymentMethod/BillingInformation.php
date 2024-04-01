<?php
/**
 * BillingInformation
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
 * BillingInformation Class Doc Comment
 *
 * @category Class
 * @description Billing Information
 * @package  Xendit
 * @implements \ArrayAccess<string, mixed>
 */
class BillingInformation implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'BillingInformation';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'country' => 'string',
        'street_line1' => 'string',
        'street_line2' => 'string',
        'city' => 'string',
        'province_state' => 'string',
        'postal_code' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'country' => null,
        'street_line1' => null,
        'street_line2' => null,
        'city' => null,
        'province_state' => null,
        'postal_code' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'country' => false,
		'street_line1' => true,
		'street_line2' => true,
		'city' => true,
		'province_state' => true,
		'postal_code' => true
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
        'country' => 'country',
        'street_line1' => 'street_line1',
        'street_line2' => 'street_line2',
        'city' => 'city',
        'province_state' => 'province_state',
        'postal_code' => 'postal_code'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'country' => 'setCountry',
        'street_line1' => 'setStreetLine1',
        'street_line2' => 'setStreetLine2',
        'city' => 'setCity',
        'province_state' => 'setProvinceState',
        'postal_code' => 'setPostalCode'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'country' => 'getCountry',
        'street_line1' => 'getStreetLine1',
        'street_line2' => 'getStreetLine2',
        'city' => 'getCity',
        'province_state' => 'getProvinceState',
        'postal_code' => 'getPostalCode'
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
        $this->setIfExists('country', $data ?? [], null);
        $this->setIfExists('street_line1', $data ?? [], null);
        $this->setIfExists('street_line2', $data ?? [], null);
        $this->setIfExists('city', $data ?? [], null);
        $this->setIfExists('province_state', $data ?? [], null);
        $this->setIfExists('postal_code', $data ?? [], null);
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

        if ($this->container['country'] === null) {
            $invalidProperties[] = "'country' can't be null";
        }
        if ((mb_strlen($this->container['country']) > 2)) {
            $invalidProperties[] = "invalid value for 'country', the character length must be smaller than or equal to 2.";
        }

        if (!is_null($this->container['street_line1']) && (mb_strlen($this->container['street_line1']) > 255)) {
            $invalidProperties[] = "invalid value for 'street_line1', the character length must be smaller than or equal to 255.";
        }

        if (!is_null($this->container['street_line2']) && (mb_strlen($this->container['street_line2']) > 255)) {
            $invalidProperties[] = "invalid value for 'street_line2', the character length must be smaller than or equal to 255.";
        }

        if (!is_null($this->container['city']) && (mb_strlen($this->container['city']) > 255)) {
            $invalidProperties[] = "invalid value for 'city', the character length must be smaller than or equal to 255.";
        }

        if (!is_null($this->container['province_state']) && (mb_strlen($this->container['province_state']) > 255)) {
            $invalidProperties[] = "invalid value for 'province_state', the character length must be smaller than or equal to 255.";
        }

        if (!is_null($this->container['postal_code']) && (mb_strlen($this->container['postal_code']) > 255)) {
            $invalidProperties[] = "invalid value for 'postal_code', the character length must be smaller than or equal to 255.";
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
     * Gets country
     *
     * @return string
     */
    public function getCountry()
    {
        return $this->container['country'];
    }

    /**
     * Sets country
     *
     * @param string $country country
     *
     * @return self
     */
    public function setCountry($country)
    {
        if (is_null($country)) {
            throw new \InvalidArgumentException('non-nullable country cannot be null');
        }
        if ((mb_strlen($country) > 2)) {
            throw new \InvalidArgumentException('invalid length for $country when calling BillingInformation., must be smaller than or equal to 2.');
        }

        $this->container['country'] = $country;

        return $this;
    }

    /**
     * Gets street_line1
     *
     * @return string|null
     */
    public function getStreetLine1()
    {
        return $this->container['street_line1'];
    }

    /**
     * Sets street_line1
     *
     * @param string|null $street_line1 street_line1
     *
     * @return self
     */
    public function setStreetLine1($street_line1)
    {
        if (is_null($street_line1)) {
            array_push($this->openAPINullablesSetToNull, 'street_line1');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('street_line1', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        if (!is_null($street_line1) && (mb_strlen($street_line1) > 255)) {
            throw new \InvalidArgumentException('invalid length for $street_line1 when calling BillingInformation., must be smaller than or equal to 255.');
        }

        $this->container['street_line1'] = $street_line1;

        return $this;
    }

    /**
     * Gets street_line2
     *
     * @return string|null
     */
    public function getStreetLine2()
    {
        return $this->container['street_line2'];
    }

    /**
     * Sets street_line2
     *
     * @param string|null $street_line2 street_line2
     *
     * @return self
     */
    public function setStreetLine2($street_line2)
    {
        if (is_null($street_line2)) {
            array_push($this->openAPINullablesSetToNull, 'street_line2');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('street_line2', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        if (!is_null($street_line2) && (mb_strlen($street_line2) > 255)) {
            throw new \InvalidArgumentException('invalid length for $street_line2 when calling BillingInformation., must be smaller than or equal to 255.');
        }

        $this->container['street_line2'] = $street_line2;

        return $this;
    }

    /**
     * Gets city
     *
     * @return string|null
     */
    public function getCity()
    {
        return $this->container['city'];
    }

    /**
     * Sets city
     *
     * @param string|null $city city
     *
     * @return self
     */
    public function setCity($city)
    {
        if (is_null($city)) {
            array_push($this->openAPINullablesSetToNull, 'city');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('city', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        if (!is_null($city) && (mb_strlen($city) > 255)) {
            throw new \InvalidArgumentException('invalid length for $city when calling BillingInformation., must be smaller than or equal to 255.');
        }

        $this->container['city'] = $city;

        return $this;
    }

    /**
     * Gets province_state
     *
     * @return string|null
     */
    public function getProvinceState()
    {
        return $this->container['province_state'];
    }

    /**
     * Sets province_state
     *
     * @param string|null $province_state province_state
     *
     * @return self
     */
    public function setProvinceState($province_state)
    {
        if (is_null($province_state)) {
            array_push($this->openAPINullablesSetToNull, 'province_state');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('province_state', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        if (!is_null($province_state) && (mb_strlen($province_state) > 255)) {
            throw new \InvalidArgumentException('invalid length for $province_state when calling BillingInformation., must be smaller than or equal to 255.');
        }

        $this->container['province_state'] = $province_state;

        return $this;
    }

    /**
     * Gets postal_code
     *
     * @return string|null
     */
    public function getPostalCode()
    {
        return $this->container['postal_code'];
    }

    /**
     * Sets postal_code
     *
     * @param string|null $postal_code postal_code
     *
     * @return self
     */
    public function setPostalCode($postal_code)
    {
        if (is_null($postal_code)) {
            array_push($this->openAPINullablesSetToNull, 'postal_code');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('postal_code', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        if (!is_null($postal_code) && (mb_strlen($postal_code) > 255)) {
            throw new \InvalidArgumentException('invalid length for $postal_code when calling BillingInformation., must be smaller than or equal to 255.');
        }

        $this->container['postal_code'] = $postal_code;

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


