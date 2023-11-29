<?php
/**
 * PaymentCallbackData
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
 * PaymentCallbackData Class Doc Comment
 *
 * @category Class
 * @description Represents the actual funds transaction/attempt made to a payment method
 * @package  Xendit
 * @implements \ArrayAccess<string, mixed>
 */
class PaymentCallbackData implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'PaymentCallbackData';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'id' => 'string',
        'payment_request_id' => 'string',
        'reference_id' => 'string',
        'customer_id' => 'string',
        'currency' => 'string',
        'amount' => 'float',
        'country' => 'string',
        'status' => 'string',
        'payment_method' => '\Xendit\PaymentRequest\PaymentMethod',
        'channel_properties' => '\Xendit\PaymentRequest\PaymentRequestChannelProperties',
        'payment_detail' => 'object',
        'failure_code' => 'object',
        'created' => 'string',
        'updated' => 'string',
        'metadata' => 'object'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'id' => null,
        'payment_request_id' => null,
        'reference_id' => null,
        'customer_id' => null,
        'currency' => null,
        'amount' => 'double',
        'country' => null,
        'status' => null,
        'payment_method' => null,
        'channel_properties' => null,
        'payment_detail' => null,
        'failure_code' => null,
        'created' => null,
        'updated' => null,
        'metadata' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'id' => false,
		'payment_request_id' => true,
		'reference_id' => false,
		'customer_id' => true,
		'currency' => false,
		'amount' => false,
		'country' => false,
		'status' => false,
		'payment_method' => false,
		'channel_properties' => true,
		'payment_detail' => true,
		'failure_code' => true,
		'created' => false,
		'updated' => false,
		'metadata' => true
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
        'id' => 'id',
        'payment_request_id' => 'payment_request_id',
        'reference_id' => 'reference_id',
        'customer_id' => 'customer_id',
        'currency' => 'currency',
        'amount' => 'amount',
        'country' => 'country',
        'status' => 'status',
        'payment_method' => 'payment_method',
        'channel_properties' => 'channel_properties',
        'payment_detail' => 'payment_detail',
        'failure_code' => 'failure_code',
        'created' => 'created',
        'updated' => 'updated',
        'metadata' => 'metadata'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'payment_request_id' => 'setPaymentRequestId',
        'reference_id' => 'setReferenceId',
        'customer_id' => 'setCustomerId',
        'currency' => 'setCurrency',
        'amount' => 'setAmount',
        'country' => 'setCountry',
        'status' => 'setStatus',
        'payment_method' => 'setPaymentMethod',
        'channel_properties' => 'setChannelProperties',
        'payment_detail' => 'setPaymentDetail',
        'failure_code' => 'setFailureCode',
        'created' => 'setCreated',
        'updated' => 'setUpdated',
        'metadata' => 'setMetadata'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'payment_request_id' => 'getPaymentRequestId',
        'reference_id' => 'getReferenceId',
        'customer_id' => 'getCustomerId',
        'currency' => 'getCurrency',
        'amount' => 'getAmount',
        'country' => 'getCountry',
        'status' => 'getStatus',
        'payment_method' => 'getPaymentMethod',
        'channel_properties' => 'getChannelProperties',
        'payment_detail' => 'getPaymentDetail',
        'failure_code' => 'getFailureCode',
        'created' => 'getCreated',
        'updated' => 'getUpdated',
        'metadata' => 'getMetadata'
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
        $this->setIfExists('id', $data ?? [], null);
        $this->setIfExists('payment_request_id', $data ?? [], null);
        $this->setIfExists('reference_id', $data ?? [], null);
        $this->setIfExists('customer_id', $data ?? [], null);
        $this->setIfExists('currency', $data ?? [], null);
        $this->setIfExists('amount', $data ?? [], null);
        $this->setIfExists('country', $data ?? [], null);
        $this->setIfExists('status', $data ?? [], null);
        $this->setIfExists('payment_method', $data ?? [], null);
        $this->setIfExists('channel_properties', $data ?? [], null);
        $this->setIfExists('payment_detail', $data ?? [], null);
        $this->setIfExists('failure_code', $data ?? [], null);
        $this->setIfExists('created', $data ?? [], null);
        $this->setIfExists('updated', $data ?? [], null);
        $this->setIfExists('metadata', $data ?? [], null);
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

        if ($this->container['id'] === null) {
            $invalidProperties[] = "'id' can't be null";
        }
        if ($this->container['reference_id'] === null) {
            $invalidProperties[] = "'reference_id' can't be null";
        }
        if ($this->container['currency'] === null) {
            $invalidProperties[] = "'currency' can't be null";
        }
        if ($this->container['amount'] === null) {
            $invalidProperties[] = "'amount' can't be null";
        }
        if ($this->container['country'] === null) {
            $invalidProperties[] = "'country' can't be null";
        }
        if ($this->container['status'] === null) {
            $invalidProperties[] = "'status' can't be null";
        }
        if ($this->container['payment_method'] === null) {
            $invalidProperties[] = "'payment_method' can't be null";
        }
        if ($this->container['created'] === null) {
            $invalidProperties[] = "'created' can't be null";
        }
        if ($this->container['updated'] === null) {
            $invalidProperties[] = "'updated' can't be null";
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
     * Gets id
     *
     * @return string
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param string $id id
     *
     * @return self
     */
    public function setId($id)
    {
        if (is_null($id)) {
            throw new \InvalidArgumentException('non-nullable id cannot be null');
        }
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets payment_request_id
     *
     * @return string|null
     */
    public function getPaymentRequestId()
    {
        return $this->container['payment_request_id'];
    }

    /**
     * Sets payment_request_id
     *
     * @param string|null $payment_request_id payment_request_id
     *
     * @return self
     */
    public function setPaymentRequestId($payment_request_id)
    {
        if (is_null($payment_request_id)) {
            array_push($this->openAPINullablesSetToNull, 'payment_request_id');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('payment_request_id', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['payment_request_id'] = $payment_request_id;

        return $this;
    }

    /**
     * Gets reference_id
     *
     * @return string
     */
    public function getReferenceId()
    {
        return $this->container['reference_id'];
    }

    /**
     * Sets reference_id
     *
     * @param string $reference_id reference_id
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
     * Gets currency
     *
     * @return string
     */
    public function getCurrency()
    {
        return $this->container['currency'];
    }

    /**
     * Sets currency
     *
     * @param string $currency currency
     *
     * @return self
     */
    public function setCurrency($currency)
    {
        if (is_null($currency)) {
            throw new \InvalidArgumentException('non-nullable currency cannot be null');
        }
        $this->container['currency'] = $currency;

        return $this;
    }

    /**
     * Gets amount
     *
     * @return float
     */
    public function getAmount()
    {
        return $this->container['amount'];
    }

    /**
     * Sets amount
     *
     * @param float $amount amount
     *
     * @return self
     */
    public function setAmount($amount)
    {
        if (is_null($amount)) {
            throw new \InvalidArgumentException('non-nullable amount cannot be null');
        }
        $this->container['amount'] = $amount;

        return $this;
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
        $this->container['country'] = $country;

        return $this;
    }

    /**
     * Gets status
     *
     * @return string
     */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
     * Sets status
     *
     * @param string $status status
     *
     * @return self
     */
    public function setStatus($status)
    {
        if (is_null($status)) {
            throw new \InvalidArgumentException('non-nullable status cannot be null');
        }
        $this->container['status'] = $status;

        return $this;
    }

    /**
     * Gets payment_method
     *
     * @return \PaymentRequest\PaymentMethod
     */
    public function getPaymentMethod()
    {
        return $this->container['payment_method'];
    }

    /**
     * Sets payment_method
     *
     * @param \PaymentRequest\PaymentMethod $payment_method payment_method
     *
     * @return self
     */
    public function setPaymentMethod($payment_method)
    {
        if (is_null($payment_method)) {
            throw new \InvalidArgumentException('non-nullable payment_method cannot be null');
        }
        $this->container['payment_method'] = $payment_method;

        return $this;
    }

    /**
     * Gets channel_properties
     *
     * @return \PaymentRequest\PaymentRequestChannelProperties|null
     */
    public function getChannelProperties()
    {
        return $this->container['channel_properties'];
    }

    /**
     * Sets channel_properties
     *
     * @param \PaymentRequest\PaymentRequestChannelProperties|null $channel_properties channel_properties
     *
     * @return self
     */
    public function setChannelProperties($channel_properties)
    {
        if (is_null($channel_properties)) {
            array_push($this->openAPINullablesSetToNull, 'channel_properties');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('channel_properties', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['channel_properties'] = $channel_properties;

        return $this;
    }

    /**
     * Gets payment_detail
     *
     * @return object|null
     */
    public function getPaymentDetail()
    {
        return $this->container['payment_detail'];
    }

    /**
     * Sets payment_detail
     *
     * @param object|null $payment_detail payment_detail
     *
     * @return self
     */
    public function setPaymentDetail($payment_detail)
    {
        if (is_null($payment_detail)) {
            array_push($this->openAPINullablesSetToNull, 'payment_detail');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('payment_detail', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['payment_detail'] = $payment_detail;

        return $this;
    }

    /**
     * Gets failure_code
     *
     * @return object|null
     */
    public function getFailureCode()
    {
        return $this->container['failure_code'];
    }

    /**
     * Sets failure_code
     *
     * @param object|null $failure_code failure_code
     *
     * @return self
     */
    public function setFailureCode($failure_code)
    {
        if (is_null($failure_code)) {
            array_push($this->openAPINullablesSetToNull, 'failure_code');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('failure_code', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['failure_code'] = $failure_code;

        return $this;
    }

    /**
     * Gets created
     *
     * @return string
     */
    public function getCreated()
    {
        return $this->container['created'];
    }

    /**
     * Sets created
     *
     * @param string $created created
     *
     * @return self
     */
    public function setCreated($created)
    {
        if (is_null($created)) {
            throw new \InvalidArgumentException('non-nullable created cannot be null');
        }
        $this->container['created'] = $created;

        return $this;
    }

    /**
     * Gets updated
     *
     * @return string
     */
    public function getUpdated()
    {
        return $this->container['updated'];
    }

    /**
     * Sets updated
     *
     * @param string $updated updated
     *
     * @return self
     */
    public function setUpdated($updated)
    {
        if (is_null($updated)) {
            throw new \InvalidArgumentException('non-nullable updated cannot be null');
        }
        $this->container['updated'] = $updated;

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


