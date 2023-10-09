<?php
/**
 * BusinessDetail
 *
 * PHP version 7.4
 *
 * @category Class
 * @package  Xendit
 */

/**
 * XENDIT SDK openapi spec
 *
 * The version of the OpenAPI document: 1.0.0
 */

/**
 * NOTE: This class is auto generated.
 * Do not edit the class manually.
 */

namespace Xendit\Customer;


use \ArrayAccess;
use \Xendit\ObjectSerializer;
use \Xendit\Model\ModelInterface;

/**
 * BusinessDetail Class Doc Comment
 *
 * @category Class
 * @package  Xendit
 * @implements \ArrayAccess<string, mixed>
 */
class BusinessDetail implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'BusinessDetail';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'business_name' => 'string',
        'business_type' => 'string',
        'date_of_registration' => 'string',
        'nature_of_business' => 'string',
        'business_domicile' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'business_name' => null,
        'business_type' => null,
        'date_of_registration' => null,
        'nature_of_business' => null,
        'business_domicile' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'business_name' => false,
		'business_type' => true,
		'date_of_registration' => true,
		'nature_of_business' => true,
		'business_domicile' => true
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
        'business_name' => 'business_name',
        'business_type' => 'business_type',
        'date_of_registration' => 'date_of_registration',
        'nature_of_business' => 'nature_of_business',
        'business_domicile' => 'business_domicile'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'business_name' => 'setBusinessName',
        'business_type' => 'setBusinessType',
        'date_of_registration' => 'setDateOfRegistration',
        'nature_of_business' => 'setNatureOfBusiness',
        'business_domicile' => 'setBusinessDomicile'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'business_name' => 'getBusinessName',
        'business_type' => 'getBusinessType',
        'date_of_registration' => 'getDateOfRegistration',
        'nature_of_business' => 'getNatureOfBusiness',
        'business_domicile' => 'getBusinessDomicile'
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

    public const BUSINESS_TYPE_CORPORATION = 'CORPORATION';
    public const BUSINESS_TYPE_SOLE_PROPRIETOR = 'SOLE_PROPRIETOR';
    public const BUSINESS_TYPE_PARTNERSHIP = 'PARTNERSHIP';
    public const BUSINESS_TYPE_COOPERATIVE = 'COOPERATIVE';
    public const BUSINESS_TYPE_TRUST = 'TRUST';
    public const BUSINESS_TYPE_NON_PROFIT = 'NON_PROFIT';
    public const BUSINESS_TYPE_GOVERNMENT = 'GOVERNMENT';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getBusinessTypeAllowableValues()
    {
        return [
            self::BUSINESS_TYPE_CORPORATION,
            self::BUSINESS_TYPE_SOLE_PROPRIETOR,
            self::BUSINESS_TYPE_PARTNERSHIP,
            self::BUSINESS_TYPE_COOPERATIVE,
            self::BUSINESS_TYPE_TRUST,
            self::BUSINESS_TYPE_NON_PROFIT,
            self::BUSINESS_TYPE_GOVERNMENT,
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
        $this->setIfExists('business_name', $data ?? [], null);
        $this->setIfExists('business_type', $data ?? [], null);
        $this->setIfExists('date_of_registration', $data ?? [], null);
        $this->setIfExists('nature_of_business', $data ?? [], null);
        $this->setIfExists('business_domicile', $data ?? [], null);
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

        if (!is_null($this->container['business_name']) && (mb_strlen($this->container['business_name']) > 255)) {
            $invalidProperties[] = "invalid value for 'business_name', the character length must be smaller than or equal to 255.";
        }

        $allowedValues = $this->getBusinessTypeAllowableValues();
        if (!is_null($this->container['business_type']) && !in_array($this->container['business_type'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'business_type', must be one of '%s'",
                $this->container['business_type'],
                implode("', '", $allowedValues)
            );
        }

        if (!is_null($this->container['date_of_registration']) && (mb_strlen($this->container['date_of_registration']) > 10)) {
            $invalidProperties[] = "invalid value for 'date_of_registration', the character length must be smaller than or equal to 10.";
        }

        if (!is_null($this->container['nature_of_business']) && (mb_strlen($this->container['nature_of_business']) > 255)) {
            $invalidProperties[] = "invalid value for 'nature_of_business', the character length must be smaller than or equal to 255.";
        }

        if (!is_null($this->container['business_domicile']) && (mb_strlen($this->container['business_domicile']) > 2)) {
            $invalidProperties[] = "invalid value for 'business_domicile', the character length must be smaller than or equal to 2.";
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
     * Gets business_name
     *
     * @return string|null
     */
    public function getBusinessName()
    {
        return $this->container['business_name'];
    }

    /**
     * Sets business_name
     *
     * @param string|null $business_name business_name
     *
     * @return self
     */
    public function setBusinessName($business_name)
    {
        if (is_null($business_name)) {
            throw new \InvalidArgumentException('non-nullable business_name cannot be null');
        }
        if ((mb_strlen($business_name) > 255)) {
            throw new \InvalidArgumentException('invalid length for $business_name when calling BusinessDetail., must be smaller than or equal to 255.');
        }

        $this->container['business_name'] = $business_name;

        return $this;
    }

    /**
     * Gets business_type
     *
     * @return string|null
     */
    public function getBusinessType()
    {
        return $this->container['business_type'];
    }

    /**
     * Sets business_type
     *
     * @param string|null $business_type business_type
     *
     * @return self
     */
    public function setBusinessType($business_type)
    {
        if (is_null($business_type)) {
            array_push($this->openAPINullablesSetToNull, 'business_type');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('business_type', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $allowedValues = $this->getBusinessTypeAllowableValues();
        if (!is_null($business_type) && !in_array($business_type, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'business_type', must be one of '%s'",
                    $business_type,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['business_type'] = $business_type;

        return $this;
    }

    /**
     * Gets date_of_registration
     *
     * @return string|null
     */
    public function getDateOfRegistration()
    {
        return $this->container['date_of_registration'];
    }

    /**
     * Sets date_of_registration
     *
     * @param string|null $date_of_registration date_of_registration
     *
     * @return self
     */
    public function setDateOfRegistration($date_of_registration)
    {
        if (is_null($date_of_registration)) {
            array_push($this->openAPINullablesSetToNull, 'date_of_registration');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('date_of_registration', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        if (!is_null($date_of_registration) && (mb_strlen($date_of_registration) > 10)) {
            throw new \InvalidArgumentException('invalid length for $date_of_registration when calling BusinessDetail., must be smaller than or equal to 10.');
        }

        $this->container['date_of_registration'] = $date_of_registration;

        return $this;
    }

    /**
     * Gets nature_of_business
     *
     * @return string|null
     */
    public function getNatureOfBusiness()
    {
        return $this->container['nature_of_business'];
    }

    /**
     * Sets nature_of_business
     *
     * @param string|null $nature_of_business nature_of_business
     *
     * @return self
     */
    public function setNatureOfBusiness($nature_of_business)
    {
        if (is_null($nature_of_business)) {
            array_push($this->openAPINullablesSetToNull, 'nature_of_business');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('nature_of_business', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        if (!is_null($nature_of_business) && (mb_strlen($nature_of_business) > 255)) {
            throw new \InvalidArgumentException('invalid length for $nature_of_business when calling BusinessDetail., must be smaller than or equal to 255.');
        }

        $this->container['nature_of_business'] = $nature_of_business;

        return $this;
    }

    /**
     * Gets business_domicile
     *
     * @return string|null
     */
    public function getBusinessDomicile()
    {
        return $this->container['business_domicile'];
    }

    /**
     * Sets business_domicile
     *
     * @param string|null $business_domicile ISO3166-2 country code
     *
     * @return self
     */
    public function setBusinessDomicile($business_domicile)
    {
        if (is_null($business_domicile)) {
            array_push($this->openAPINullablesSetToNull, 'business_domicile');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('business_domicile', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        if (!is_null($business_domicile) && (mb_strlen($business_domicile) > 2)) {
            throw new \InvalidArgumentException('invalid length for $business_domicile when calling BusinessDetail., must be smaller than or equal to 2.');
        }

        $this->container['business_domicile'] = $business_domicile;

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


