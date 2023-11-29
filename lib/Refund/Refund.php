<?php
/**
 * Refund
 *
 * PHP version 7.4
 *
 * @category Class
 * @package  Xendit
 */

/**
 * Refund Service
 *
 * The version of the OpenAPI document: 1.3.4
 */

/**
 * NOTE: This class is auto generated.
 * Do not edit the class manually.
 */

namespace Xendit\Refund;


use \ArrayAccess;
use \Xendit\ObjectSerializer;
use \Xendit\Model\ModelInterface;

/**
 * Refund Class Doc Comment
 *
 * @category Class
 * @package  Xendit
 * @implements \ArrayAccess<string, mixed>
 */
class Refund implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'Refund';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'id' => 'string',
        'payment_request_id' => 'string',
        'amount' => 'float',
        'channel_code' => 'string',
        'country' => 'string',
        'currency' => 'string',
        'reference_id' => 'string',
        'failure_code' => 'string',
        'refund_fee_amount' => 'float',
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
        'amount' => 'double',
        'channel_code' => null,
        'country' => null,
        'currency' => null,
        'reference_id' => null,
        'failure_code' => null,
        'refund_fee_amount' => 'double',
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
		'payment_request_id' => false,
		'amount' => false,
		'channel_code' => false,
		'country' => false,
		'currency' => false,
		'reference_id' => true,
		'failure_code' => true,
		'refund_fee_amount' => true,
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
        'amount' => 'amount',
        'channel_code' => 'channel_code',
        'country' => 'country',
        'currency' => 'currency',
        'reference_id' => 'reference_id',
        'failure_code' => 'failure_code',
        'refund_fee_amount' => 'refund_fee_amount',
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
        'amount' => 'setAmount',
        'channel_code' => 'setChannelCode',
        'country' => 'setCountry',
        'currency' => 'setCurrency',
        'reference_id' => 'setReferenceId',
        'failure_code' => 'setFailureCode',
        'refund_fee_amount' => 'setRefundFeeAmount',
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
        'amount' => 'getAmount',
        'channel_code' => 'getChannelCode',
        'country' => 'getCountry',
        'currency' => 'getCurrency',
        'reference_id' => 'getReferenceId',
        'failure_code' => 'getFailureCode',
        'refund_fee_amount' => 'getRefundFeeAmount',
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
        $this->setIfExists('amount', $data ?? [], null);
        $this->setIfExists('channel_code', $data ?? [], null);
        $this->setIfExists('country', $data ?? [], null);
        $this->setIfExists('currency', $data ?? [], null);
        $this->setIfExists('reference_id', $data ?? [], null);
        $this->setIfExists('failure_code', $data ?? [], null);
        $this->setIfExists('refund_fee_amount', $data ?? [], null);
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
     * @return string|null
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param string|null $id id
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
            throw new \InvalidArgumentException('non-nullable payment_request_id cannot be null');
        }
        $this->container['payment_request_id'] = $payment_request_id;

        return $this;
    }

    /**
     * Gets amount
     *
     * @return float|null
     */
    public function getAmount()
    {
        return $this->container['amount'];
    }

    /**
     * Sets amount
     *
     * @param float|null $amount amount
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
     * Gets channel_code
     *
     * @return string|null
     */
    public function getChannelCode()
    {
        return $this->container['channel_code'];
    }

    /**
     * Sets channel_code
     *
     * @param string|null $channel_code channel_code
     *
     * @return self
     */
    public function setChannelCode($channel_code)
    {
        if (is_null($channel_code)) {
            throw new \InvalidArgumentException('non-nullable channel_code cannot be null');
        }
        $this->container['channel_code'] = $channel_code;

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
            throw new \InvalidArgumentException('non-nullable country cannot be null');
        }
        $this->container['country'] = $country;

        return $this;
    }

    /**
     * Gets currency
     *
     * @return string|null
     */
    public function getCurrency()
    {
        return $this->container['currency'];
    }

    /**
     * Sets currency
     *
     * @param string|null $currency currency
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
            array_push($this->openAPINullablesSetToNull, 'reference_id');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('reference_id', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['reference_id'] = $reference_id;

        return $this;
    }

    /**
     * Gets failure_code
     *
     * @return string|null
     */
    public function getFailureCode()
    {
        return $this->container['failure_code'];
    }

    /**
     * Sets failure_code
     *
     * @param string|null $failure_code failure_code
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
     * Gets refund_fee_amount
     *
     * @return float|null
     */
    public function getRefundFeeAmount()
    {
        return $this->container['refund_fee_amount'];
    }

    /**
     * Sets refund_fee_amount
     *
     * @param float|null $refund_fee_amount refund_fee_amount
     *
     * @return self
     */
    public function setRefundFeeAmount($refund_fee_amount)
    {
        if (is_null($refund_fee_amount)) {
            array_push($this->openAPINullablesSetToNull, 'refund_fee_amount');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('refund_fee_amount', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['refund_fee_amount'] = $refund_fee_amount;

        return $this;
    }

    /**
     * Gets created
     *
     * @return string|null
     */
    public function getCreated()
    {
        return $this->container['created'];
    }

    /**
     * Sets created
     *
     * @param string|null $created created
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
     * @return string|null
     */
    public function getUpdated()
    {
        return $this->container['updated'];
    }

    /**
     * Sets updated
     *
     * @param string|null $updated updated
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


