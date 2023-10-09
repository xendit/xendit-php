<?php
/**
 * IndividualDetail
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
 * IndividualDetail Class Doc Comment
 *
 * @category Class
 * @package  Xendit
 * @implements \ArrayAccess<string, mixed>
 */
class IndividualDetail implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'IndividualDetail';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'given_names' => 'string',
        'given_names_non_roman' => 'string',
        'middle_name' => 'string',
        'surname' => 'string',
        'surname_non_roman' => 'string',
        'mother_maiden_name' => 'string',
        'gender' => 'string',
        'date_of_birth' => 'string',
        'nationality' => 'string',
        'place_of_birth' => 'string',
        'employment' => '\Xendit\Customer\EmploymentDetail'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'given_names' => null,
        'given_names_non_roman' => null,
        'middle_name' => null,
        'surname' => null,
        'surname_non_roman' => null,
        'mother_maiden_name' => null,
        'gender' => null,
        'date_of_birth' => null,
        'nationality' => null,
        'place_of_birth' => null,
        'employment' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'given_names' => false,
		'given_names_non_roman' => true,
		'middle_name' => true,
		'surname' => true,
		'surname_non_roman' => true,
		'mother_maiden_name' => true,
		'gender' => true,
		'date_of_birth' => true,
		'nationality' => true,
		'place_of_birth' => true,
		'employment' => true
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
        'given_names' => 'given_names',
        'given_names_non_roman' => 'given_names_non_roman',
        'middle_name' => 'middle_name',
        'surname' => 'surname',
        'surname_non_roman' => 'surname_non_roman',
        'mother_maiden_name' => 'mother_maiden_name',
        'gender' => 'gender',
        'date_of_birth' => 'date_of_birth',
        'nationality' => 'nationality',
        'place_of_birth' => 'place_of_birth',
        'employment' => 'employment'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'given_names' => 'setGivenNames',
        'given_names_non_roman' => 'setGivenNamesNonRoman',
        'middle_name' => 'setMiddleName',
        'surname' => 'setSurname',
        'surname_non_roman' => 'setSurnameNonRoman',
        'mother_maiden_name' => 'setMotherMaidenName',
        'gender' => 'setGender',
        'date_of_birth' => 'setDateOfBirth',
        'nationality' => 'setNationality',
        'place_of_birth' => 'setPlaceOfBirth',
        'employment' => 'setEmployment'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'given_names' => 'getGivenNames',
        'given_names_non_roman' => 'getGivenNamesNonRoman',
        'middle_name' => 'getMiddleName',
        'surname' => 'getSurname',
        'surname_non_roman' => 'getSurnameNonRoman',
        'mother_maiden_name' => 'getMotherMaidenName',
        'gender' => 'getGender',
        'date_of_birth' => 'getDateOfBirth',
        'nationality' => 'getNationality',
        'place_of_birth' => 'getPlaceOfBirth',
        'employment' => 'getEmployment'
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

    public const GENDER_MALE = 'MALE';
    public const GENDER_FEMALE = 'FEMALE';
    public const GENDER_OTHER = 'OTHER';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getGenderAllowableValues()
    {
        return [
            self::GENDER_MALE,
            self::GENDER_FEMALE,
            self::GENDER_OTHER,
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
        $this->setIfExists('given_names', $data ?? [], null);
        $this->setIfExists('given_names_non_roman', $data ?? [], null);
        $this->setIfExists('middle_name', $data ?? [], null);
        $this->setIfExists('surname', $data ?? [], null);
        $this->setIfExists('surname_non_roman', $data ?? [], null);
        $this->setIfExists('mother_maiden_name', $data ?? [], null);
        $this->setIfExists('gender', $data ?? [], null);
        $this->setIfExists('date_of_birth', $data ?? [], null);
        $this->setIfExists('nationality', $data ?? [], null);
        $this->setIfExists('place_of_birth', $data ?? [], null);
        $this->setIfExists('employment', $data ?? [], null);
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

        if (!is_null($this->container['given_names']) && (mb_strlen($this->container['given_names']) > 255)) {
            $invalidProperties[] = "invalid value for 'given_names', the character length must be smaller than or equal to 255.";
        }

        if (!is_null($this->container['given_names_non_roman']) && (mb_strlen($this->container['given_names_non_roman']) > 255)) {
            $invalidProperties[] = "invalid value for 'given_names_non_roman', the character length must be smaller than or equal to 255.";
        }

        if (!is_null($this->container['middle_name']) && (mb_strlen($this->container['middle_name']) > 255)) {
            $invalidProperties[] = "invalid value for 'middle_name', the character length must be smaller than or equal to 255.";
        }

        if (!is_null($this->container['surname']) && (mb_strlen($this->container['surname']) > 255)) {
            $invalidProperties[] = "invalid value for 'surname', the character length must be smaller than or equal to 255.";
        }

        if (!is_null($this->container['surname_non_roman']) && (mb_strlen($this->container['surname_non_roman']) > 255)) {
            $invalidProperties[] = "invalid value for 'surname_non_roman', the character length must be smaller than or equal to 255.";
        }

        if (!is_null($this->container['mother_maiden_name']) && (mb_strlen($this->container['mother_maiden_name']) > 255)) {
            $invalidProperties[] = "invalid value for 'mother_maiden_name', the character length must be smaller than or equal to 255.";
        }

        $allowedValues = $this->getGenderAllowableValues();
        if (!is_null($this->container['gender']) && !in_array($this->container['gender'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'gender', must be one of '%s'",
                $this->container['gender'],
                implode("', '", $allowedValues)
            );
        }

        if (!is_null($this->container['date_of_birth']) && (mb_strlen($this->container['date_of_birth']) > 30)) {
            $invalidProperties[] = "invalid value for 'date_of_birth', the character length must be smaller than or equal to 30.";
        }

        if (!is_null($this->container['nationality']) && (mb_strlen($this->container['nationality']) > 2)) {
            $invalidProperties[] = "invalid value for 'nationality', the character length must be smaller than or equal to 2.";
        }

        if (!is_null($this->container['place_of_birth']) && (mb_strlen($this->container['place_of_birth']) > 255)) {
            $invalidProperties[] = "invalid value for 'place_of_birth', the character length must be smaller than or equal to 255.";
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
     * Gets given_names
     *
     * @return string|null
     */
    public function getGivenNames()
    {
        return $this->container['given_names'];
    }

    /**
     * Sets given_names
     *
     * @param string|null $given_names given_names
     *
     * @return self
     */
    public function setGivenNames($given_names)
    {
        if (is_null($given_names)) {
            throw new \InvalidArgumentException('non-nullable given_names cannot be null');
        }
        if ((mb_strlen($given_names) > 255)) {
            throw new \InvalidArgumentException('invalid length for $given_names when calling IndividualDetail., must be smaller than or equal to 255.');
        }

        $this->container['given_names'] = $given_names;

        return $this;
    }

    /**
     * Gets given_names_non_roman
     *
     * @return string|null
     */
    public function getGivenNamesNonRoman()
    {
        return $this->container['given_names_non_roman'];
    }

    /**
     * Sets given_names_non_roman
     *
     * @param string|null $given_names_non_roman given_names_non_roman
     *
     * @return self
     */
    public function setGivenNamesNonRoman($given_names_non_roman)
    {
        if (is_null($given_names_non_roman)) {
            array_push($this->openAPINullablesSetToNull, 'given_names_non_roman');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('given_names_non_roman', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        if (!is_null($given_names_non_roman) && (mb_strlen($given_names_non_roman) > 255)) {
            throw new \InvalidArgumentException('invalid length for $given_names_non_roman when calling IndividualDetail., must be smaller than or equal to 255.');
        }

        $this->container['given_names_non_roman'] = $given_names_non_roman;

        return $this;
    }

    /**
     * Gets middle_name
     *
     * @return string|null
     */
    public function getMiddleName()
    {
        return $this->container['middle_name'];
    }

    /**
     * Sets middle_name
     *
     * @param string|null $middle_name middle_name
     *
     * @return self
     */
    public function setMiddleName($middle_name)
    {
        if (is_null($middle_name)) {
            array_push($this->openAPINullablesSetToNull, 'middle_name');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('middle_name', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        if (!is_null($middle_name) && (mb_strlen($middle_name) > 255)) {
            throw new \InvalidArgumentException('invalid length for $middle_name when calling IndividualDetail., must be smaller than or equal to 255.');
        }

        $this->container['middle_name'] = $middle_name;

        return $this;
    }

    /**
     * Gets surname
     *
     * @return string|null
     */
    public function getSurname()
    {
        return $this->container['surname'];
    }

    /**
     * Sets surname
     *
     * @param string|null $surname surname
     *
     * @return self
     */
    public function setSurname($surname)
    {
        if (is_null($surname)) {
            array_push($this->openAPINullablesSetToNull, 'surname');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('surname', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        if (!is_null($surname) && (mb_strlen($surname) > 255)) {
            throw new \InvalidArgumentException('invalid length for $surname when calling IndividualDetail., must be smaller than or equal to 255.');
        }

        $this->container['surname'] = $surname;

        return $this;
    }

    /**
     * Gets surname_non_roman
     *
     * @return string|null
     */
    public function getSurnameNonRoman()
    {
        return $this->container['surname_non_roman'];
    }

    /**
     * Sets surname_non_roman
     *
     * @param string|null $surname_non_roman surname_non_roman
     *
     * @return self
     */
    public function setSurnameNonRoman($surname_non_roman)
    {
        if (is_null($surname_non_roman)) {
            array_push($this->openAPINullablesSetToNull, 'surname_non_roman');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('surname_non_roman', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        if (!is_null($surname_non_roman) && (mb_strlen($surname_non_roman) > 255)) {
            throw new \InvalidArgumentException('invalid length for $surname_non_roman when calling IndividualDetail., must be smaller than or equal to 255.');
        }

        $this->container['surname_non_roman'] = $surname_non_roman;

        return $this;
    }

    /**
     * Gets mother_maiden_name
     *
     * @return string|null
     */
    public function getMotherMaidenName()
    {
        return $this->container['mother_maiden_name'];
    }

    /**
     * Sets mother_maiden_name
     *
     * @param string|null $mother_maiden_name mother_maiden_name
     *
     * @return self
     */
    public function setMotherMaidenName($mother_maiden_name)
    {
        if (is_null($mother_maiden_name)) {
            array_push($this->openAPINullablesSetToNull, 'mother_maiden_name');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('mother_maiden_name', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        if (!is_null($mother_maiden_name) && (mb_strlen($mother_maiden_name) > 255)) {
            throw new \InvalidArgumentException('invalid length for $mother_maiden_name when calling IndividualDetail., must be smaller than or equal to 255.');
        }

        $this->container['mother_maiden_name'] = $mother_maiden_name;

        return $this;
    }

    /**
     * Gets gender
     *
     * @return string|null
     */
    public function getGender()
    {
        return $this->container['gender'];
    }

    /**
     * Sets gender
     *
     * @param string|null $gender gender
     *
     * @return self
     */
    public function setGender($gender)
    {
        if (is_null($gender)) {
            array_push($this->openAPINullablesSetToNull, 'gender');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('gender', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $allowedValues = $this->getGenderAllowableValues();
        if (!is_null($gender) && !in_array($gender, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'gender', must be one of '%s'",
                    $gender,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['gender'] = $gender;

        return $this;
    }

    /**
     * Gets date_of_birth
     *
     * @return string|null
     */
    public function getDateOfBirth()
    {
        return $this->container['date_of_birth'];
    }

    /**
     * Sets date_of_birth
     *
     * @param string|null $date_of_birth date_of_birth
     *
     * @return self
     */
    public function setDateOfBirth($date_of_birth)
    {
        if (is_null($date_of_birth)) {
            array_push($this->openAPINullablesSetToNull, 'date_of_birth');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('date_of_birth', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        if (!is_null($date_of_birth) && (mb_strlen($date_of_birth) > 30)) {
            throw new \InvalidArgumentException('invalid length for $date_of_birth when calling IndividualDetail., must be smaller than or equal to 30.');
        }

        $this->container['date_of_birth'] = $date_of_birth;

        return $this;
    }

    /**
     * Gets nationality
     *
     * @return string|null
     */
    public function getNationality()
    {
        return $this->container['nationality'];
    }

    /**
     * Sets nationality
     *
     * @param string|null $nationality ISO3166-2 country code
     *
     * @return self
     */
    public function setNationality($nationality)
    {
        if (is_null($nationality)) {
            array_push($this->openAPINullablesSetToNull, 'nationality');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('nationality', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        if (!is_null($nationality) && (mb_strlen($nationality) > 2)) {
            throw new \InvalidArgumentException('invalid length for $nationality when calling IndividualDetail., must be smaller than or equal to 2.');
        }

        $this->container['nationality'] = $nationality;

        return $this;
    }

    /**
     * Gets place_of_birth
     *
     * @return string|null
     */
    public function getPlaceOfBirth()
    {
        return $this->container['place_of_birth'];
    }

    /**
     * Sets place_of_birth
     *
     * @param string|null $place_of_birth place_of_birth
     *
     * @return self
     */
    public function setPlaceOfBirth($place_of_birth)
    {
        if (is_null($place_of_birth)) {
            array_push($this->openAPINullablesSetToNull, 'place_of_birth');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('place_of_birth', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        if (!is_null($place_of_birth) && (mb_strlen($place_of_birth) > 255)) {
            throw new \InvalidArgumentException('invalid length for $place_of_birth when calling IndividualDetail., must be smaller than or equal to 255.');
        }

        $this->container['place_of_birth'] = $place_of_birth;

        return $this;
    }

    /**
     * Gets employment
     *
     * @return \Customer\EmploymentDetail|null
     */
    public function getEmployment()
    {
        return $this->container['employment'];
    }

    /**
     * Sets employment
     *
     * @param \Customer\EmploymentDetail|null $employment employment
     *
     * @return self
     */
    public function setEmployment($employment)
    {
        if (is_null($employment)) {
            array_push($this->openAPINullablesSetToNull, 'employment');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('employment', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['employment'] = $employment;

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


