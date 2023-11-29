<?php
/**
 * PaymentRequestChannelProperties
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
 * PaymentRequestChannelProperties Class Doc Comment
 *
 * @category Class
 * @package  Xendit
 * @implements \ArrayAccess<string, mixed>
 */
class PaymentRequestChannelProperties implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'PaymentRequestChannelProperties';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'success_return_url' => 'string',
        'failure_return_url' => 'string',
        'cancel_return_url' => 'string',
        'redeem_points' => 'string',
        'require_auth' => 'bool',
        'merchant_id_tag' => 'string',
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
        'success_return_url' => null,
        'failure_return_url' => null,
        'cancel_return_url' => null,
        'redeem_points' => null,
        'require_auth' => null,
        'merchant_id_tag' => null,
        'cardonfile_type' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'success_return_url' => false,
		'failure_return_url' => false,
		'cancel_return_url' => false,
		'redeem_points' => false,
		'require_auth' => false,
		'merchant_id_tag' => false,
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
        'success_return_url' => 'success_return_url',
        'failure_return_url' => 'failure_return_url',
        'cancel_return_url' => 'cancel_return_url',
        'redeem_points' => 'redeem_points',
        'require_auth' => 'require_auth',
        'merchant_id_tag' => 'merchant_id_tag',
        'cardonfile_type' => 'cardonfile_type'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'success_return_url' => 'setSuccessReturnUrl',
        'failure_return_url' => 'setFailureReturnUrl',
        'cancel_return_url' => 'setCancelReturnUrl',
        'redeem_points' => 'setRedeemPoints',
        'require_auth' => 'setRequireAuth',
        'merchant_id_tag' => 'setMerchantIdTag',
        'cardonfile_type' => 'setCardonfileType'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'success_return_url' => 'getSuccessReturnUrl',
        'failure_return_url' => 'getFailureReturnUrl',
        'cancel_return_url' => 'getCancelReturnUrl',
        'redeem_points' => 'getRedeemPoints',
        'require_auth' => 'getRequireAuth',
        'merchant_id_tag' => 'getMerchantIdTag',
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
        $this->setIfExists('success_return_url', $data ?? [], null);
        $this->setIfExists('failure_return_url', $data ?? [], null);
        $this->setIfExists('cancel_return_url', $data ?? [], null);
        $this->setIfExists('redeem_points', $data ?? [], null);
        $this->setIfExists('require_auth', $data ?? [], null);
        $this->setIfExists('merchant_id_tag', $data ?? [], null);
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

        if (!is_null($this->container['cancel_return_url']) && !preg_match("/^\\S{1,255}:\/\/\\S{0,1000}$/", $this->container['cancel_return_url'])) {
            $invalidProperties[] = "invalid value for 'cancel_return_url', must be conform to the pattern /^\\S{1,255}:\/\/\\S{0,1000}$/.";
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
            throw new \InvalidArgumentException('non-nullable success_return_url cannot be null');
        }

        if ((!preg_match("/^\\S{1,255}:\/\/\\S{0,1000}$/", $success_return_url))) {
            throw new \InvalidArgumentException("invalid value for \$success_return_url when calling PaymentRequestChannelProperties., must conform to the pattern /^\\S{1,255}:\/\/\\S{0,1000}$/.");
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
            throw new \InvalidArgumentException('non-nullable failure_return_url cannot be null');
        }

        if ((!preg_match("/^\\S{1,255}:\/\/\\S{0,1000}$/", $failure_return_url))) {
            throw new \InvalidArgumentException("invalid value for \$failure_return_url when calling PaymentRequestChannelProperties., must conform to the pattern /^\\S{1,255}:\/\/\\S{0,1000}$/.");
        }

        $this->container['failure_return_url'] = $failure_return_url;

        return $this;
    }

    /**
     * Gets cancel_return_url
     *
     * @return string|null
     */
    public function getCancelReturnUrl()
    {
        return $this->container['cancel_return_url'];
    }

    /**
     * Sets cancel_return_url
     *
     * @param string|null $cancel_return_url URL where the end-customer is redirected if the authorization cancelled
     *
     * @return self
     */
    public function setCancelReturnUrl($cancel_return_url)
    {
        if (is_null($cancel_return_url)) {
            throw new \InvalidArgumentException('non-nullable cancel_return_url cannot be null');
        }

        if ((!preg_match("/^\\S{1,255}:\/\/\\S{0,1000}$/", $cancel_return_url))) {
            throw new \InvalidArgumentException("invalid value for \$cancel_return_url when calling PaymentRequestChannelProperties., must conform to the pattern /^\\S{1,255}:\/\/\\S{0,1000}$/.");
        }

        $this->container['cancel_return_url'] = $cancel_return_url;

        return $this;
    }

    /**
     * Gets redeem_points
     *
     * @return string|null
     */
    public function getRedeemPoints()
    {
        return $this->container['redeem_points'];
    }

    /**
     * Sets redeem_points
     *
     * @param string|null $redeem_points REDEEM_NONE will not use any point, REDEEM_ALL will use all available points before cash balance is used. For OVO and ShopeePay tokenized payment use only.
     *
     * @return self
     */
    public function setRedeemPoints($redeem_points)
    {
        if (is_null($redeem_points)) {
            throw new \InvalidArgumentException('non-nullable redeem_points cannot be null');
        }
        $this->container['redeem_points'] = $redeem_points;

        return $this;
    }

    /**
     * Gets require_auth
     *
     * @return bool|null
     */
    public function getRequireAuth()
    {
        return $this->container['require_auth'];
    }

    /**
     * Sets require_auth
     *
     * @param bool|null $require_auth Toggle used to require end-customer to input undergo OTP validation before completing a payment. OTP will always be required for transactions greater than 1,000,000 IDR. For BRI tokenized payment use only.
     *
     * @return self
     */
    public function setRequireAuth($require_auth)
    {
        if (is_null($require_auth)) {
            throw new \InvalidArgumentException('non-nullable require_auth cannot be null');
        }
        $this->container['require_auth'] = $require_auth;

        return $this;
    }

    /**
     * Gets merchant_id_tag
     *
     * @return string|null
     */
    public function getMerchantIdTag()
    {
        return $this->container['merchant_id_tag'];
    }

    /**
     * Sets merchant_id_tag
     *
     * @param string|null $merchant_id_tag Tag for a Merchant ID that you want to associate this payment with. For merchants using their own MIDs to specify which MID they want to use
     *
     * @return self
     */
    public function setMerchantIdTag($merchant_id_tag)
    {
        if (is_null($merchant_id_tag)) {
            throw new \InvalidArgumentException('non-nullable merchant_id_tag cannot be null');
        }
        $this->container['merchant_id_tag'] = $merchant_id_tag;

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


