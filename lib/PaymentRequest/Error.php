<?php
/**
 * Error
 *
 * PHP version 7.4
 *
 * @category Class
 * @package  Xendit
 */

/**
 * Payment Requests
 *
 * The version of the OpenAPI document: 1.59.0
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
 * Error Class Doc Comment
 *
 * @category Class
 * @package  Xendit
 * @implements \ArrayAccess<string, mixed>
 */
class Error implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'Error';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'error_code' => 'string',
        'message' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'error_code' => null,
        'message' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'error_code' => true,
		'message' => true
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
        'error_code' => 'error_code',
        'message' => 'message'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'error_code' => 'setErrorCode',
        'message' => 'setMessage'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'error_code' => 'getErrorCode',
        'message' => 'getMessage'
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

    public const ERROR_CODE_ACCOUNT_ACCESS_BLOCKED = 'ACCOUNT_ACCESS_BLOCKED';
    public const ERROR_CODE_ADDRESS_VALIDATION_FAILED = 'ADDRESS_VALIDATION_FAILED';
    public const ERROR_CODE_AMOUNT_MISMATCHED = 'AMOUNT_MISMATCHED';
    public const ERROR_CODE_API_VALIDATION_ERROR = 'API_VALIDATION_ERROR';
    public const ERROR_CODE_AUTHENTICATION_FAILED = 'AUTHENTICATION_FAILED';
    public const ERROR_CODE_AUTHENTICATION_REQUIRED = 'AUTHENTICATION_REQUIRED';
    public const ERROR_CODE_CARD_DECLINED = 'CARD_DECLINED';
    public const ERROR_CODE_CHANNEL_CODE_NOT_SUPPORTED_ERROR = 'CHANNEL_CODE_NOT_SUPPORTED_ERROR';
    public const ERROR_CODE_CHANNEL_NOT_ACTIVATED = 'CHANNEL_NOT_ACTIVATED';
    public const ERROR_CODE_CHANNEL_UNAVAILABLE = 'CHANNEL_UNAVAILABLE';
    public const ERROR_CODE_COF_COMBINATION_NOT_ALLOWED_ERROR = 'COF_COMBINATION_NOT_ALLOWED_ERROR';
    public const ERROR_CODE_CURRENCY_MISMATCHED = 'CURRENCY_MISMATCHED';
    public const ERROR_CODE_CUSTOMER_NOT_FOUND_ERROR = 'CUSTOMER_NOT_FOUND_ERROR';
    public const ERROR_CODE_CUSTOMER_PAYMENT_METHOD_MISMATCHED = 'CUSTOMER_PAYMENT_METHOD_MISMATCHED';
    public const ERROR_CODE_DATA_NOT_FOUND = 'DATA_NOT_FOUND';
    public const ERROR_CODE_DATA_NOT_FOUND_ERROR = 'DATA_NOT_FOUND_ERROR';
    public const ERROR_CODE_DECLINED_BY_ISSUER = 'DECLINED_BY_ISSUER';
    public const ERROR_CODE_DECLINED_BY_PROCESSOR = 'DECLINED_BY_PROCESSOR';
    public const ERROR_CODE_DENIED_PERSON_LIST_MATCHED = 'DENIED_PERSON_LIST_MATCHED';
    public const ERROR_CODE_DUPLICATE_ERROR = 'DUPLICATE_ERROR';
    public const ERROR_CODE_DUPLICATE_REFERENCE = 'DUPLICATE_REFERENCE';
    public const ERROR_CODE_EXCEEDS_CAPTURABLE_AMOUNT = 'EXCEEDS_CAPTURABLE_AMOUNT';
    public const ERROR_CODE_EXPIRED_CARD = 'EXPIRED_CARD';
    public const ERROR_CODE_EXPIRED_OTP_ERROR = 'EXPIRED_OTP_ERROR';
    public const ERROR_CODE_FEATURE_NOT_ACTIVATED = 'FEATURE_NOT_ACTIVATED';
    public const ERROR_CODE_IDEMPOTENCY_ERROR = 'IDEMPOTENCY_ERROR';
    public const ERROR_CODE_INACTIVE_OR_UNAUTHORIZED_CARD = 'INACTIVE_OR_UNAUTHORIZED_CARD';
    public const ERROR_CODE_INSUFFICIENT_BALANCE = 'INSUFFICIENT_BALANCE';
    public const ERROR_CODE_INVALID_ACCOUNT_DETAILS = 'INVALID_ACCOUNT_DETAILS';
    public const ERROR_CODE_INVALID_CVV = 'INVALID_CVV';
    public const ERROR_CODE_INVALID_OTP_ERROR = 'INVALID_OTP_ERROR';
    public const ERROR_CODE_INVALID_PAYMENT_METHOD = 'INVALID_PAYMENT_METHOD';
    public const ERROR_CODE_ISSUER_UNAVAILABLE = 'ISSUER_UNAVAILABLE';
    public const ERROR_CODE_MANUAL_CAPTURE_NOT_SUPPORTED = 'MANUAL_CAPTURE_NOT_SUPPORTED';
    public const ERROR_CODE_MAX_ACCOUNT_LINKING = 'MAX_ACCOUNT_LINKING';
    public const ERROR_CODE_MAX_AMOUNT_LIMIT_ERROR = 'MAX_AMOUNT_LIMIT_ERROR';
    public const ERROR_CODE_MAX_OTP_ATTEMPTS_ERROR = 'MAX_OTP_ATTEMPTS_ERROR';
    public const ERROR_CODE_OPERATION_NOT_ALLOWED = 'OPERATION_NOT_ALLOWED';
    public const ERROR_CODE_OTP_DELIVERY_ERROR = 'OTP_DELIVERY_ERROR';
    public const ERROR_CODE_PAYMENT_METHOD_NOT_FOUND_ERROR = 'PAYMENT_METHOD_NOT_FOUND_ERROR';
    public const ERROR_CODE_PAYMENT_REQUEST_ALREADY_COMPLETED = 'PAYMENT_REQUEST_ALREADY_COMPLETED';
    public const ERROR_CODE_PAYMENT_REQUEST_ALREADY_FAILED = 'PAYMENT_REQUEST_ALREADY_FAILED';
    public const ERROR_CODE_PAYMENT_REQUEST_ALREADY_FULLY_CAPTURED = 'PAYMENT_REQUEST_ALREADY_FULLY_CAPTURED';
    public const ERROR_CODE_PAYMENT_STATUS_FAILED = 'PAYMENT_STATUS_FAILED';
    public const ERROR_CODE_PROCESSOR_CONFIGURATION_ERROR = 'PROCESSOR_CONFIGURATION_ERROR';
    public const ERROR_CODE_PROCESSOR_ERROR = 'PROCESSOR_ERROR';
    public const ERROR_CODE_PROCESSOR_TEMPORARILY_UNAVAILABLE = 'PROCESSOR_TEMPORARILY_UNAVAILABLE';
    public const ERROR_CODE_PROCESSOR_TIMEOUT = 'PROCESSOR_TIMEOUT';
    public const ERROR_CODE_REJECTED_BY_ACQUIRER = 'REJECTED_BY_ACQUIRER';
    public const ERROR_CODE_SERVER_ERROR = 'SERVER_ERROR';
    public const ERROR_CODE_STOLEN_CARD = 'STOLEN_CARD';
    public const ERROR_CODE_STRONG_CUSTOMER_AUTHENTICATION_REQUIRED = 'STRONG_CUSTOMER_AUTHENTICATION_REQUIRED';
    public const ERROR_CODE_SUSPECTED_FRAUDULENT = 'SUSPECTED_FRAUDULENT';
    public const ERROR_CODE_UNAUTHORIZED = 'UNAUTHORIZED';
    public const ERROR_CODE_DUPLICATED_FIXED_PAYMENT_INSTRUMENT = 'DUPLICATED_FIXED_PAYMENT_INSTRUMENT';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getErrorCodeAllowableValues()
    {
        return [
            self::ERROR_CODE_ACCOUNT_ACCESS_BLOCKED,
            self::ERROR_CODE_ADDRESS_VALIDATION_FAILED,
            self::ERROR_CODE_AMOUNT_MISMATCHED,
            self::ERROR_CODE_API_VALIDATION_ERROR,
            self::ERROR_CODE_AUTHENTICATION_FAILED,
            self::ERROR_CODE_AUTHENTICATION_REQUIRED,
            self::ERROR_CODE_CARD_DECLINED,
            self::ERROR_CODE_CHANNEL_CODE_NOT_SUPPORTED_ERROR,
            self::ERROR_CODE_CHANNEL_NOT_ACTIVATED,
            self::ERROR_CODE_CHANNEL_UNAVAILABLE,
            self::ERROR_CODE_COF_COMBINATION_NOT_ALLOWED_ERROR,
            self::ERROR_CODE_CURRENCY_MISMATCHED,
            self::ERROR_CODE_CUSTOMER_NOT_FOUND_ERROR,
            self::ERROR_CODE_CUSTOMER_PAYMENT_METHOD_MISMATCHED,
            self::ERROR_CODE_DATA_NOT_FOUND,
            self::ERROR_CODE_DATA_NOT_FOUND_ERROR,
            self::ERROR_CODE_DECLINED_BY_ISSUER,
            self::ERROR_CODE_DECLINED_BY_PROCESSOR,
            self::ERROR_CODE_DENIED_PERSON_LIST_MATCHED,
            self::ERROR_CODE_DUPLICATE_ERROR,
            self::ERROR_CODE_DUPLICATE_REFERENCE,
            self::ERROR_CODE_EXCEEDS_CAPTURABLE_AMOUNT,
            self::ERROR_CODE_EXPIRED_CARD,
            self::ERROR_CODE_EXPIRED_OTP_ERROR,
            self::ERROR_CODE_FEATURE_NOT_ACTIVATED,
            self::ERROR_CODE_IDEMPOTENCY_ERROR,
            self::ERROR_CODE_INACTIVE_OR_UNAUTHORIZED_CARD,
            self::ERROR_CODE_INSUFFICIENT_BALANCE,
            self::ERROR_CODE_INVALID_ACCOUNT_DETAILS,
            self::ERROR_CODE_INVALID_CVV,
            self::ERROR_CODE_INVALID_OTP_ERROR,
            self::ERROR_CODE_INVALID_PAYMENT_METHOD,
            self::ERROR_CODE_ISSUER_UNAVAILABLE,
            self::ERROR_CODE_MANUAL_CAPTURE_NOT_SUPPORTED,
            self::ERROR_CODE_MAX_ACCOUNT_LINKING,
            self::ERROR_CODE_MAX_AMOUNT_LIMIT_ERROR,
            self::ERROR_CODE_MAX_OTP_ATTEMPTS_ERROR,
            self::ERROR_CODE_OPERATION_NOT_ALLOWED,
            self::ERROR_CODE_OTP_DELIVERY_ERROR,
            self::ERROR_CODE_PAYMENT_METHOD_NOT_FOUND_ERROR,
            self::ERROR_CODE_PAYMENT_REQUEST_ALREADY_COMPLETED,
            self::ERROR_CODE_PAYMENT_REQUEST_ALREADY_FAILED,
            self::ERROR_CODE_PAYMENT_REQUEST_ALREADY_FULLY_CAPTURED,
            self::ERROR_CODE_PAYMENT_STATUS_FAILED,
            self::ERROR_CODE_PROCESSOR_CONFIGURATION_ERROR,
            self::ERROR_CODE_PROCESSOR_ERROR,
            self::ERROR_CODE_PROCESSOR_TEMPORARILY_UNAVAILABLE,
            self::ERROR_CODE_PROCESSOR_TIMEOUT,
            self::ERROR_CODE_REJECTED_BY_ACQUIRER,
            self::ERROR_CODE_SERVER_ERROR,
            self::ERROR_CODE_STOLEN_CARD,
            self::ERROR_CODE_STRONG_CUSTOMER_AUTHENTICATION_REQUIRED,
            self::ERROR_CODE_SUSPECTED_FRAUDULENT,
            self::ERROR_CODE_UNAUTHORIZED,
            self::ERROR_CODE_DUPLICATED_FIXED_PAYMENT_INSTRUMENT,
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
        $this->setIfExists('error_code', $data ?? [], null);
        $this->setIfExists('message', $data ?? [], null);
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

        $allowedValues = $this->getErrorCodeAllowableValues();
        if (!is_null($this->container['error_code']) && !in_array($this->container['error_code'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'error_code', must be one of '%s'",
                $this->container['error_code'],
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
     * Gets error_code
     *
     * @return string|null
     */
    public function getErrorCode()
    {
        return $this->container['error_code'];
    }

    /**
     * Sets error_code
     *
     * @param string|null $error_code error_code
     *
     * @return self
     */
    public function setErrorCode($error_code)
    {
        if (is_null($error_code)) {
            array_push($this->openAPINullablesSetToNull, 'error_code');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('error_code', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $allowedValues = $this->getErrorCodeAllowableValues();
        if (!is_null($error_code) && !in_array($error_code, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'error_code', must be one of '%s'",
                    $error_code,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['error_code'] = $error_code;

        return $this;
    }

    /**
     * Gets message
     *
     * @return string|null
     */
    public function getMessage()
    {
        return $this->container['message'];
    }

    /**
     * Sets message
     *
     * @param string|null $message message
     *
     * @return self
     */
    public function setMessage($message)
    {
        if (is_null($message)) {
            array_push($this->openAPINullablesSetToNull, 'message');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('message', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['message'] = $message;

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


