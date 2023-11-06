<?php
/**
 * CardChannelProperties
 *
 * PHP version 7.4
 *
 * @category Class
 * @package  Xendit
 */

/**
 * Payment Method Service v2
 *
 * The version of the OpenAPI document: 2.91.2
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
 * CardChannelProperties Class Doc Comment
 *
 * @category Class
 * @description Card Channel Properties
 * @package  Xendit
 * @implements \ArrayAccess<string, mixed>
 */
class CardChannelProperties implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'CardChannelProperties';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'skip_three_d_secure' => 'bool',
        'success_return_url' => 'string',
        'failure_return_url' => 'string',
        'cardonfile_type' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'skip_three_d_secure' => null,
        'success_return_url' => null,
        'failure_return_url' => null,
        'cardonfile_type' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'skip_three_d_secure' => true,
		'success_return_url' => true,
		'failure_return_url' => true,
		'cardonfile_type' => true
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
        'skip_three_d_secure' => 'skip_three_d_secure',
        'success_return_url' => 'success_return_url',
        'failure_return_url' => 'failure_return_url',
        'cardonfile_type' => 'cardonfile_type'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'skip_three_d_secure' => 'setSkipThreeDSecure',
        'success_return_url' => 'setSuccessReturnUrl',
        'failure_return_url' => 'setFailureReturnUrl',
        'cardonfile_type' => 'setCardonfileType'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'skip_three_d_secure' => 'getSkipThreeDSecure',
        'success_return_url' => 'getSuccessReturnUrl',
        'failure_return_url' => 'getFailureReturnUrl',
        'cardonfile_type' => 'getCardonfileType'
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

    public const CARDONFILE_TYPE_MERCHANT_UNSCHEDULED = 'MERCHANT_UNSCHEDULED';
    public const CARDONFILE_TYPE_CUSTOMER_UNSCHEDULED = 'CUSTOMER_UNSCHEDULED';
    public const CARDONFILE_TYPE_RECURRING = 'RECURRING';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getCardonfileTypeAllowableValues()
    {
        return [
            self::CARDONFILE_TYPE_MERCHANT_UNSCHEDULED,
            self::CARDONFILE_TYPE_CUSTOMER_UNSCHEDULED,
            self::CARDONFILE_TYPE_RECURRING,
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
        $this->setIfExists('skip_three_d_secure', $data ?? [], null);
        $this->setIfExists('success_return_url', $data ?? [], null);
        $this->setIfExists('failure_return_url', $data ?? [], null);
        $this->setIfExists('cardonfile_type', $data ?? [], null);
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

        if (!is_null($this->container['success_return_url']) && !preg_match("/^\\S{1,255}:\/\/\\S{0,1000}$/", $this->container['success_return_url'])) {
            $invalidProperties[] = "invalid value for 'success_return_url', must be conform to the pattern /^\\S{1,255}:\/\/\\S{0,1000}$/.";
        }

        if (!is_null($this->container['failure_return_url']) && !preg_match("/^\\S{1,255}:\/\/\\S{0,1000}$/", $this->container['failure_return_url'])) {
            $invalidProperties[] = "invalid value for 'failure_return_url', must be conform to the pattern /^\\S{1,255}:\/\/\\S{0,1000}$/.";
        }

        $allowedValues = $this->getCardonfileTypeAllowableValues();
        if (!is_null($this->container['cardonfile_type']) && !in_array($this->container['cardonfile_type'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'cardonfile_type', must be one of '%s'",
                $this->container['cardonfile_type'],
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
     * Gets skip_three_d_secure
     *
     * @return bool|null
     */
    public function getSkipThreeDSecure()
    {
        return $this->container['skip_three_d_secure'];
    }

    /**
     * Sets skip_three_d_secure
     *
     * @param bool|null $skip_three_d_secure This field value is only being used for reusability = MULTIPLE_USE. To indicate whether to perform 3DS during the linking phase. Defaults to false.
     *
     * @return self
     */
    public function setSkipThreeDSecure($skip_three_d_secure)
    {
        if (is_null($skip_three_d_secure)) {
            array_push($this->openAPINullablesSetToNull, 'skip_three_d_secure');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('skip_three_d_secure', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['skip_three_d_secure'] = $skip_three_d_secure;

        return $this;
    }

    /**
     * Gets success_return_url
     *
     * @return string|null
     */
    public function getSuccessReturnUrl()
    {
        return $this->container['success_return_url'];
    }

    /**
     * Sets success_return_url
     *
     * @param string|null $success_return_url URL where the end-customer is redirected if the authorization is successful
     *
     * @return self
     */
    public function setSuccessReturnUrl($success_return_url)
    {
        if (is_null($success_return_url)) {
            array_push($this->openAPINullablesSetToNull, 'success_return_url');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('success_return_url', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }

        if (!is_null($success_return_url) && (!preg_match("/^\\S{1,255}:\/\/\\S{0,1000}$/", $success_return_url))) {
            throw new \InvalidArgumentException("invalid value for \$success_return_url when calling CardChannelProperties., must conform to the pattern /^\\S{1,255}:\/\/\\S{0,1000}$/.");
        }

        $this->container['success_return_url'] = $success_return_url;

        return $this;
    }

    /**
     * Gets failure_return_url
     *
     * @return string|null
     */
    public function getFailureReturnUrl()
    {
        return $this->container['failure_return_url'];
    }

    /**
     * Sets failure_return_url
     *
     * @param string|null $failure_return_url URL where the end-customer is redirected if the authorization failed
     *
     * @return self
     */
    public function setFailureReturnUrl($failure_return_url)
    {
        if (is_null($failure_return_url)) {
            array_push($this->openAPINullablesSetToNull, 'failure_return_url');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('failure_return_url', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }

        if (!is_null($failure_return_url) && (!preg_match("/^\\S{1,255}:\/\/\\S{0,1000}$/", $failure_return_url))) {
            throw new \InvalidArgumentException("invalid value for \$failure_return_url when calling CardChannelProperties., must conform to the pattern /^\\S{1,255}:\/\/\\S{0,1000}$/.");
        }

        $this->container['failure_return_url'] = $failure_return_url;

        return $this;
    }

    /**
     * Gets cardonfile_type
     *
     * @return string|null
     */
    public function getCardonfileType()
    {
        return $this->container['cardonfile_type'];
    }

    /**
     * Sets cardonfile_type
     *
     * @param string|null $cardonfile_type Type of “credential-on-file” / “card-on-file” payment being made. Indicate that this payment uses a previously linked Payment Method for charging.
     *
     * @return self
     */
    public function setCardonfileType($cardonfile_type)
    {
        if (is_null($cardonfile_type)) {
            array_push($this->openAPINullablesSetToNull, 'cardonfile_type');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('cardonfile_type', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $allowedValues = $this->getCardonfileTypeAllowableValues();
        if (!is_null($cardonfile_type) && !in_array($cardonfile_type, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'cardonfile_type', must be one of '%s'",
                    $cardonfile_type,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['cardonfile_type'] = $cardonfile_type;

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


