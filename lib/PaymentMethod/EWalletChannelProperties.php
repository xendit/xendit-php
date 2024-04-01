<?php
/**
 * EWalletChannelProperties
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
 * EWalletChannelProperties Class Doc Comment
 *
 * @category Class
 * @description EWallet Channel Properties
 * @package  Xendit
 * @implements \ArrayAccess<string, mixed>
 */
class EWalletChannelProperties implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'EWalletChannelProperties';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'success_return_url' => 'string',
        'failure_return_url' => 'string',
        'cancel_return_url' => 'string',
        'pending_return_url' => 'string',
        'mobile_number' => 'string',
        'redeem_points' => 'string',
        'cashtag' => 'string'
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
        'pending_return_url' => null,
        'mobile_number' => null,
        'redeem_points' => null,
        'cashtag' => null
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
		'pending_return_url' => false,
		'mobile_number' => false,
		'redeem_points' => false,
		'cashtag' => false
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
        'pending_return_url' => 'pending_return_url',
        'mobile_number' => 'mobile_number',
        'redeem_points' => 'redeem_points',
        'cashtag' => 'cashtag'
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
        'pending_return_url' => 'setPendingReturnUrl',
        'mobile_number' => 'setMobileNumber',
        'redeem_points' => 'setRedeemPoints',
        'cashtag' => 'setCashtag'
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
        'pending_return_url' => 'getPendingReturnUrl',
        'mobile_number' => 'getMobileNumber',
        'redeem_points' => 'getRedeemPoints',
        'cashtag' => 'getCashtag'
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
        $this->setIfExists('pending_return_url', $data ?? [], null);
        $this->setIfExists('mobile_number', $data ?? [], null);
        $this->setIfExists('redeem_points', $data ?? [], null);
        $this->setIfExists('cashtag', $data ?? [], null);
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

        if (!is_null($this->container['pending_return_url']) && !preg_match("/^\\S{1,255}:\/\/\\S{0,1000}$/", $this->container['pending_return_url'])) {
            $invalidProperties[] = "invalid value for 'pending_return_url', must be conform to the pattern /^\\S{1,255}:\/\/\\S{0,1000}$/.";
        }

        if (!is_null($this->container['cashtag']) && !preg_match("/^[$][a-zA-Z0-9_]{3,15}$/", $this->container['cashtag'])) {
            $invalidProperties[] = "invalid value for 'cashtag', must be conform to the pattern /^[$][a-zA-Z0-9_]{3,15}$/.";
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
            throw new \InvalidArgumentException("invalid value for \$success_return_url when calling EWalletChannelProperties., must conform to the pattern /^\\S{1,255}:\/\/\\S{0,1000}$/.");
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
            throw new \InvalidArgumentException("invalid value for \$failure_return_url when calling EWalletChannelProperties., must conform to the pattern /^\\S{1,255}:\/\/\\S{0,1000}$/.");
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
            throw new \InvalidArgumentException("invalid value for \$cancel_return_url when calling EWalletChannelProperties., must conform to the pattern /^\\S{1,255}:\/\/\\S{0,1000}$/.");
        }

        $this->container['cancel_return_url'] = $cancel_return_url;

        return $this;
    }

    /**
     * Gets pending_return_url
     *
     * @return string|null
     */
    public function getPendingReturnUrl()
    {
        return $this->container['pending_return_url'];
    }

    /**
     * Sets pending_return_url
     *
     * @param string|null $pending_return_url URL where the end-customer is redirected if the authorization is pending
     *
     * @return self
     */
    public function setPendingReturnUrl($pending_return_url)
    {
        if (is_null($pending_return_url)) {
            throw new \InvalidArgumentException('non-nullable pending_return_url cannot be null');
        }

        if ((!preg_match("/^\\S{1,255}:\/\/\\S{0,1000}$/", $pending_return_url))) {
            throw new \InvalidArgumentException("invalid value for \$pending_return_url when calling EWalletChannelProperties., must conform to the pattern /^\\S{1,255}:\/\/\\S{0,1000}$/.");
        }

        $this->container['pending_return_url'] = $pending_return_url;

        return $this;
    }

    /**
     * Gets mobile_number
     *
     * @return string|null
     */
    public function getMobileNumber()
    {
        return $this->container['mobile_number'];
    }

    /**
     * Sets mobile_number
     *
     * @param string|null $mobile_number Mobile number of customer in E.164 format (e.g. +628123123123). For OVO one time payment use only.
     *
     * @return self
     */
    public function setMobileNumber($mobile_number)
    {
        if (is_null($mobile_number)) {
            throw new \InvalidArgumentException('non-nullable mobile_number cannot be null');
        }
        $this->container['mobile_number'] = $mobile_number;

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
     * Gets cashtag
     *
     * @return string|null
     */
    public function getCashtag()
    {
        return $this->container['cashtag'];
    }

    /**
     * Sets cashtag
     *
     * @param string|null $cashtag Available for JENIUSPAY only
     *
     * @return self
     */
    public function setCashtag($cashtag)
    {
        if (is_null($cashtag)) {
            throw new \InvalidArgumentException('non-nullable cashtag cannot be null');
        }

        if ((!preg_match("/^[$][a-zA-Z0-9_]{3,15}$/", $cashtag))) {
            throw new \InvalidArgumentException("invalid value for \$cashtag when calling EWalletChannelProperties., must conform to the pattern /^[$][a-zA-Z0-9_]{3,15}$/.");
        }

        $this->container['cashtag'] = $cashtag;

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


