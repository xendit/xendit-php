<?php
/**
 * CardVerificationResultsThreeDSecure
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
 * CardVerificationResultsThreeDSecure Class Doc Comment
 *
 * @category Class
 * @package  Xendit
 * @implements \ArrayAccess<string, mixed>
 */
class CardVerificationResultsThreeDSecure implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'CardVerificationResultsThreeDSecure';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'three_d_secure_flow' => 'string',
        'eci_code' => 'string',
        'three_d_secure_result' => 'string',
        'three_d_secure_result_reason' => 'string',
        'three_d_secure_version' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'three_d_secure_flow' => null,
        'eci_code' => null,
        'three_d_secure_result' => null,
        'three_d_secure_result_reason' => null,
        'three_d_secure_version' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'three_d_secure_flow' => true,
		'eci_code' => true,
		'three_d_secure_result' => true,
		'three_d_secure_result_reason' => true,
		'three_d_secure_version' => true
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
        'three_d_secure_flow' => 'three_d_secure_flow',
        'eci_code' => 'eci_code',
        'three_d_secure_result' => 'three_d_secure_result',
        'three_d_secure_result_reason' => 'three_d_secure_result_reason',
        'three_d_secure_version' => 'three_d_secure_version'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'three_d_secure_flow' => 'setThreeDSecureFlow',
        'eci_code' => 'setEciCode',
        'three_d_secure_result' => 'setThreeDSecureResult',
        'three_d_secure_result_reason' => 'setThreeDSecureResultReason',
        'three_d_secure_version' => 'setThreeDSecureVersion'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'three_d_secure_flow' => 'getThreeDSecureFlow',
        'eci_code' => 'getEciCode',
        'three_d_secure_result' => 'getThreeDSecureResult',
        'three_d_secure_result_reason' => 'getThreeDSecureResultReason',
        'three_d_secure_version' => 'getThreeDSecureVersion'
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

    public const THREE_D_SECURE_FLOW_CHALLENGE = 'CHALLENGE';
    public const THREE_D_SECURE_FLOW_FRICTIONLESS = 'FRICTIONLESS';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getThreeDSecureFlowAllowableValues()
    {
        return [
            self::THREE_D_SECURE_FLOW_CHALLENGE,
            self::THREE_D_SECURE_FLOW_FRICTIONLESS,
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
        $this->setIfExists('three_d_secure_flow', $data ?? [], null);
        $this->setIfExists('eci_code', $data ?? [], null);
        $this->setIfExists('three_d_secure_result', $data ?? [], null);
        $this->setIfExists('three_d_secure_result_reason', $data ?? [], null);
        $this->setIfExists('three_d_secure_version', $data ?? [], null);
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

        $allowedValues = $this->getThreeDSecureFlowAllowableValues();
        if (!is_null($this->container['three_d_secure_flow']) && !in_array($this->container['three_d_secure_flow'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'three_d_secure_flow', must be one of '%s'",
                $this->container['three_d_secure_flow'],
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
     * Gets three_d_secure_flow
     *
     * @return string|null
     */
    public function getThreeDSecureFlow()
    {
        return $this->container['three_d_secure_flow'];
    }

    /**
     * Sets three_d_secure_flow
     *
     * @param string|null $three_d_secure_flow three_d_secure_flow
     *
     * @return self
     */
    public function setThreeDSecureFlow($three_d_secure_flow)
    {
        if (is_null($three_d_secure_flow)) {
            array_push($this->openAPINullablesSetToNull, 'three_d_secure_flow');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('three_d_secure_flow', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $allowedValues = $this->getThreeDSecureFlowAllowableValues();
        if (!is_null($three_d_secure_flow) && !in_array($three_d_secure_flow, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'three_d_secure_flow', must be one of '%s'",
                    $three_d_secure_flow,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['three_d_secure_flow'] = $three_d_secure_flow;

        return $this;
    }

    /**
     * Gets eci_code
     *
     * @return string|null
     */
    public function getEciCode()
    {
        return $this->container['eci_code'];
    }

    /**
     * Sets eci_code
     *
     * @param string|null $eci_code eci_code
     *
     * @return self
     */
    public function setEciCode($eci_code)
    {
        if (is_null($eci_code)) {
            array_push($this->openAPINullablesSetToNull, 'eci_code');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('eci_code', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['eci_code'] = $eci_code;

        return $this;
    }

    /**
     * Gets three_d_secure_result
     *
     * @return string|null
     */
    public function getThreeDSecureResult()
    {
        return $this->container['three_d_secure_result'];
    }

    /**
     * Sets three_d_secure_result
     *
     * @param string|null $three_d_secure_result three_d_secure_result
     *
     * @return self
     */
    public function setThreeDSecureResult($three_d_secure_result)
    {
        if (is_null($three_d_secure_result)) {
            array_push($this->openAPINullablesSetToNull, 'three_d_secure_result');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('three_d_secure_result', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['three_d_secure_result'] = $three_d_secure_result;

        return $this;
    }

    /**
     * Gets three_d_secure_result_reason
     *
     * @return string|null
     */
    public function getThreeDSecureResultReason()
    {
        return $this->container['three_d_secure_result_reason'];
    }

    /**
     * Sets three_d_secure_result_reason
     *
     * @param string|null $three_d_secure_result_reason three_d_secure_result_reason
     *
     * @return self
     */
    public function setThreeDSecureResultReason($three_d_secure_result_reason)
    {
        if (is_null($three_d_secure_result_reason)) {
            array_push($this->openAPINullablesSetToNull, 'three_d_secure_result_reason');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('three_d_secure_result_reason', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['three_d_secure_result_reason'] = $three_d_secure_result_reason;

        return $this;
    }

    /**
     * Gets three_d_secure_version
     *
     * @return string|null
     */
    public function getThreeDSecureVersion()
    {
        return $this->container['three_d_secure_version'];
    }

    /**
     * Sets three_d_secure_version
     *
     * @param string|null $three_d_secure_version three_d_secure_version
     *
     * @return self
     */
    public function setThreeDSecureVersion($three_d_secure_version)
    {
        if (is_null($three_d_secure_version)) {
            array_push($this->openAPINullablesSetToNull, 'three_d_secure_version');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('three_d_secure_version', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['three_d_secure_version'] = $three_d_secure_version;

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


