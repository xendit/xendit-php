<?php
/**
 * Payout
 *
 * PHP version 7.4
 *
 * @category Class
 * @package  Xendit
 */

/**
 * Payout Service
 *
 * The version of the OpenAPI document: 1.0.0
 */

/**
 * NOTE: This class is auto generated.
 * Do not edit the class manually.
 */

namespace Xendit\Payout;


use \ArrayAccess;
use \Xendit\ObjectSerializer;
use \Xendit\Model\ModelInterface;

/**
 * Payout Class Doc Comment
 *
 * @category Class
 * @package  Xendit
 * @implements \ArrayAccess<string, mixed>
 */
class Payout implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'Payout';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'reference_id' => 'string',
        'channel_code' => 'string',
        'channel_properties' => '\Xendit\Payout\DigitalPayoutChannelProperties',
        'amount' => 'float',
        'description' => 'string',
        'currency' => 'string',
        'receipt_notification' => '\Xendit\Payout\ReceiptNotification',
        'metadata' => 'object',
        'id' => 'string',
        'created' => '\DateTime',
        'updated' => '\DateTime',
        'business_id' => 'string',
        'status' => 'string',
        'failure_code' => 'string',
        'estimated_arrival_time' => '\DateTime'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'reference_id' => null,
        'channel_code' => null,
        'channel_properties' => null,
        'amount' => null,
        'description' => null,
        'currency' => null,
        'receipt_notification' => null,
        'metadata' => null,
        'id' => null,
        'created' => 'date-time',
        'updated' => 'date-time',
        'business_id' => null,
        'status' => null,
        'failure_code' => null,
        'estimated_arrival_time' => 'date-time'
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'reference_id' => false,
		'channel_code' => false,
		'channel_properties' => false,
		'amount' => false,
		'description' => false,
		'currency' => false,
		'receipt_notification' => false,
		'metadata' => false,
		'id' => false,
		'created' => false,
		'updated' => false,
		'business_id' => false,
		'status' => false,
		'failure_code' => false,
		'estimated_arrival_time' => false
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
        'reference_id' => 'reference_id',
        'channel_code' => 'channel_code',
        'channel_properties' => 'channel_properties',
        'amount' => 'amount',
        'description' => 'description',
        'currency' => 'currency',
        'receipt_notification' => 'receipt_notification',
        'metadata' => 'metadata',
        'id' => 'id',
        'created' => 'created',
        'updated' => 'updated',
        'business_id' => 'business_id',
        'status' => 'status',
        'failure_code' => 'failure_code',
        'estimated_arrival_time' => 'estimated_arrival_time'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'reference_id' => 'setReferenceId',
        'channel_code' => 'setChannelCode',
        'channel_properties' => 'setChannelProperties',
        'amount' => 'setAmount',
        'description' => 'setDescription',
        'currency' => 'setCurrency',
        'receipt_notification' => 'setReceiptNotification',
        'metadata' => 'setMetadata',
        'id' => 'setId',
        'created' => 'setCreated',
        'updated' => 'setUpdated',
        'business_id' => 'setBusinessId',
        'status' => 'setStatus',
        'failure_code' => 'setFailureCode',
        'estimated_arrival_time' => 'setEstimatedArrivalTime'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'reference_id' => 'getReferenceId',
        'channel_code' => 'getChannelCode',
        'channel_properties' => 'getChannelProperties',
        'amount' => 'getAmount',
        'description' => 'getDescription',
        'currency' => 'getCurrency',
        'receipt_notification' => 'getReceiptNotification',
        'metadata' => 'getMetadata',
        'id' => 'getId',
        'created' => 'getCreated',
        'updated' => 'getUpdated',
        'business_id' => 'getBusinessId',
        'status' => 'getStatus',
        'failure_code' => 'getFailureCode',
        'estimated_arrival_time' => 'getEstimatedArrivalTime'
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

    public const STATUS_SUCCEEDED = 'SUCCEEDED';
    public const STATUS_FAILED = 'FAILED';
    public const STATUS_ACCEPTED = 'ACCEPTED';
    public const STATUS_REQUESTED = 'REQUESTED';
    public const STATUS_LOCKED = 'LOCKED';
    public const STATUS_CANCELLED = 'CANCELLED';
    public const STATUS_REVERSED = 'REVERSED';
    public const FAILURE_CODE_INSUFFICIENT_BALANCE = 'INSUFFICIENT_BALANCE';
    public const FAILURE_CODE_REJECTED_BY_CHANNEL = 'REJECTED_BY_CHANNEL';
    public const FAILURE_CODE_TEMPORARY_TRANSFER_ERROR = 'TEMPORARY_TRANSFER_ERROR';
    public const FAILURE_CODE_INVALID_DESTINATION = 'INVALID_DESTINATION';
    public const FAILURE_CODE_TRANSFER_ERROR = 'TRANSFER_ERROR';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getStatusAllowableValues()
    {
        return [
            self::STATUS_SUCCEEDED,
            self::STATUS_FAILED,
            self::STATUS_ACCEPTED,
            self::STATUS_REQUESTED,
            self::STATUS_LOCKED,
            self::STATUS_CANCELLED,
            self::STATUS_REVERSED,
        ];
    }

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getFailureCodeAllowableValues()
    {
        return [
            self::FAILURE_CODE_INSUFFICIENT_BALANCE,
            self::FAILURE_CODE_REJECTED_BY_CHANNEL,
            self::FAILURE_CODE_TEMPORARY_TRANSFER_ERROR,
            self::FAILURE_CODE_INVALID_DESTINATION,
            self::FAILURE_CODE_TRANSFER_ERROR,
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
        $this->setIfExists('reference_id', $data ?? [], null);
        $this->setIfExists('channel_code', $data ?? [], null);
        $this->setIfExists('channel_properties', $data ?? [], null);
        $this->setIfExists('amount', $data ?? [], null);
        $this->setIfExists('description', $data ?? [], null);
        $this->setIfExists('currency', $data ?? [], null);
        $this->setIfExists('receipt_notification', $data ?? [], null);
        $this->setIfExists('metadata', $data ?? [], null);
        $this->setIfExists('id', $data ?? [], null);
        $this->setIfExists('created', $data ?? [], null);
        $this->setIfExists('updated', $data ?? [], null);
        $this->setIfExists('business_id', $data ?? [], null);
        $this->setIfExists('status', $data ?? [], null);
        $this->setIfExists('failure_code', $data ?? [], null);
        $this->setIfExists('estimated_arrival_time', $data ?? [], null);
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

        if ($this->container['reference_id'] === null) {
            $invalidProperties[] = "'reference_id' can't be null";
        }
        if ((mb_strlen($this->container['reference_id']) < 1)) {
            $invalidProperties[] = "invalid value for 'reference_id', the character length must be bigger than or equal to 1.";
        }

        if ($this->container['channel_code'] === null) {
            $invalidProperties[] = "'channel_code' can't be null";
        }
        if ($this->container['channel_properties'] === null) {
            $invalidProperties[] = "'channel_properties' can't be null";
        }
        if ($this->container['amount'] === null) {
            $invalidProperties[] = "'amount' can't be null";
        }
        if ($this->container['currency'] === null) {
            $invalidProperties[] = "'currency' can't be null";
        }
        if ($this->container['id'] === null) {
            $invalidProperties[] = "'id' can't be null";
        }
        if ($this->container['created'] === null) {
            $invalidProperties[] = "'created' can't be null";
        }
        if ($this->container['updated'] === null) {
            $invalidProperties[] = "'updated' can't be null";
        }
        if ($this->container['business_id'] === null) {
            $invalidProperties[] = "'business_id' can't be null";
        }
        if ($this->container['status'] === null) {
            $invalidProperties[] = "'status' can't be null";
        }
        $allowedValues = $this->getStatusAllowableValues();
        if (!is_null($this->container['status']) && !in_array($this->container['status'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'status', must be one of '%s'",
                $this->container['status'],
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getFailureCodeAllowableValues();
        if (!is_null($this->container['failure_code']) && !in_array($this->container['failure_code'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'failure_code', must be one of '%s'",
                $this->container['failure_code'],
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
     * @param string $reference_id A client defined payout identifier
     *
     * @return self
     */
    public function setReferenceId($reference_id)
    {
        if (is_null($reference_id)) {
            throw new \InvalidArgumentException('non-nullable reference_id cannot be null');
        }

        if ((mb_strlen($reference_id) < 1)) {
            throw new \InvalidArgumentException('invalid length for $reference_id when calling Payout., must be bigger than or equal to 1.');
        }

        $this->container['reference_id'] = $reference_id;

        return $this;
    }

    /**
     * Gets channel_code
     *
     * @return string
     */
    public function getChannelCode()
    {
        return $this->container['channel_code'];
    }

    /**
     * Sets channel_code
     *
     * @param string $channel_code Channel code of selected destination bank or e-wallet
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
     * Gets channel_properties
     *
     * @return \Payout\DigitalPayoutChannelProperties
     */
    public function getChannelProperties()
    {
        return $this->container['channel_properties'];
    }

    /**
     * Sets channel_properties
     *
     * @param \Payout\DigitalPayoutChannelProperties $channel_properties channel_properties
     *
     * @return self
     */
    public function setChannelProperties($channel_properties)
    {
        if (is_null($channel_properties)) {
            throw new \InvalidArgumentException('non-nullable channel_properties cannot be null');
        }
        $this->container['channel_properties'] = $channel_properties;

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
     * @param float $amount Amount to be sent to the destination account and should be a multiple of the minimum increment for the selected channel
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
     * Gets description
     *
     * @return string|null
     */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
     * Sets description
     *
     * @param string|null $description Description to send with the payout, the recipient may see this e.g., in their bank statement (if supported) or in email receipts we send on your behalf
     *
     * @return self
     */
    public function setDescription($description)
    {
        if (is_null($description)) {
            throw new \InvalidArgumentException('non-nullable description cannot be null');
        }
        $this->container['description'] = $description;

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
     * @param string $currency Currency of the destination channel using ISO-4217 currency code
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
     * Gets receipt_notification
     *
     * @return \Payout\ReceiptNotification|null
     */
    public function getReceiptNotification()
    {
        return $this->container['receipt_notification'];
    }

    /**
     * Sets receipt_notification
     *
     * @param \Payout\ReceiptNotification|null $receipt_notification receipt_notification
     *
     * @return self
     */
    public function setReceiptNotification($receipt_notification)
    {
        if (is_null($receipt_notification)) {
            throw new \InvalidArgumentException('non-nullable receipt_notification cannot be null');
        }
        $this->container['receipt_notification'] = $receipt_notification;

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
     * @param object|null $metadata Object of additional information you may use
     *
     * @return self
     */
    public function setMetadata($metadata)
    {
        if (is_null($metadata)) {
            throw new \InvalidArgumentException('non-nullable metadata cannot be null');
        }
        $this->container['metadata'] = $metadata;

        return $this;
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
     * @param string $id Xendit-generated unique identifier for each payout
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
     * Gets created
     *
     * @return \DateTime
     */
    public function getCreated()
    {
        return $this->container['created'];
    }

    /**
     * Sets created
     *
     * @param \DateTime $created The time payout was created on Xendit's system, in ISO 8601 format
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
     * @return \DateTime
     */
    public function getUpdated()
    {
        return $this->container['updated'];
    }

    /**
     * Sets updated
     *
     * @param \DateTime $updated The time payout was last updated on Xendit's system, in ISO 8601 format
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
     * Gets business_id
     *
     * @return string
     */
    public function getBusinessId()
    {
        return $this->container['business_id'];
    }

    /**
     * Sets business_id
     *
     * @param string $business_id Xendit Business ID
     *
     * @return self
     */
    public function setBusinessId($business_id)
    {
        if (is_null($business_id)) {
            throw new \InvalidArgumentException('non-nullable business_id cannot be null');
        }
        $this->container['business_id'] = $business_id;

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
     * @param string $status Status of payout
     *
     * @return self
     */
    public function setStatus($status)
    {
        if (is_null($status)) {
            throw new \InvalidArgumentException('non-nullable status cannot be null');
        }
        $allowedValues = $this->getStatusAllowableValues();
        if (!in_array($status, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'status', must be one of '%s'",
                    $status,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['status'] = $status;

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
     * @param string|null $failure_code If the Payout failed, we include a failure code for more details on the failure.
     *
     * @return self
     */
    public function setFailureCode($failure_code)
    {
        if (is_null($failure_code)) {
            throw new \InvalidArgumentException('non-nullable failure_code cannot be null');
        }
        $allowedValues = $this->getFailureCodeAllowableValues();
        if (!in_array($failure_code, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'failure_code', must be one of '%s'",
                    $failure_code,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['failure_code'] = $failure_code;

        return $this;
    }

    /**
     * Gets estimated_arrival_time
     *
     * @return \DateTime|null
     */
    public function getEstimatedArrivalTime()
    {
        return $this->container['estimated_arrival_time'];
    }

    /**
     * Sets estimated_arrival_time
     *
     * @param \DateTime|null $estimated_arrival_time Our estimated time on to when your payout is reflected to the destination account
     *
     * @return self
     */
    public function setEstimatedArrivalTime($estimated_arrival_time)
    {
        if (is_null($estimated_arrival_time)) {
            throw new \InvalidArgumentException('non-nullable estimated_arrival_time cannot be null');
        }
        $this->container['estimated_arrival_time'] = $estimated_arrival_time;

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


