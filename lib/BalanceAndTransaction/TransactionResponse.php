<?php
/**
 * TransactionResponse
 *
 * PHP version 7.4
 *
 * @category Class
 * @package  Xendit
 */

/**
 * Transaction Service V4 API
 *
 * The version of the OpenAPI document: 3.5.2
 */

/**
 * NOTE: This class is auto generated.
 * Do not edit the class manually.
 */

namespace Xendit\BalanceAndTransaction;


use \ArrayAccess;
use \Xendit\ObjectSerializer;
use \Xendit\Model\ModelInterface;

/**
 * TransactionResponse Class Doc Comment
 *
 * @category Class
 * @package  Xendit
 * @implements \ArrayAccess<string, mixed>
 */
class TransactionResponse implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'TransactionResponse';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'id' => 'string',
        'product_id' => 'string',
        'type' => '\Xendit\BalanceAndTransaction\TransactionResponseType',
        'status' => '\Xendit\BalanceAndTransaction\TransactionStatuses',
        'channel_category' => '\Xendit\BalanceAndTransaction\ChannelsCategories',
        'channel_code' => 'string',
        'account_identifier' => 'string',
        'reference_id' => 'string',
        'currency' => '\Xendit\BalanceAndTransaction\Currency',
        'amount' => 'float',
        'cashflow' => 'string',
        'settlement_status' => 'string',
        'estimated_settlement_time' => '\DateTime',
        'business_id' => 'string',
        'fee' => '\Xendit\BalanceAndTransaction\FeeResponse',
        'created' => '\DateTime',
        'updated' => '\DateTime'
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
        'product_id' => null,
        'type' => null,
        'status' => null,
        'channel_category' => null,
        'channel_code' => null,
        'account_identifier' => null,
        'reference_id' => null,
        'currency' => null,
        'amount' => null,
        'cashflow' => null,
        'settlement_status' => null,
        'estimated_settlement_time' => 'date-time',
        'business_id' => null,
        'fee' => null,
        'created' => 'date-time',
        'updated' => 'date-time'
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'id' => false,
		'product_id' => false,
		'type' => false,
		'status' => false,
		'channel_category' => false,
		'channel_code' => true,
		'account_identifier' => true,
		'reference_id' => false,
		'currency' => false,
		'amount' => false,
		'cashflow' => false,
		'settlement_status' => true,
		'estimated_settlement_time' => true,
		'business_id' => false,
		'fee' => false,
		'created' => false,
		'updated' => false
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
        'product_id' => 'product_id',
        'type' => 'type',
        'status' => 'status',
        'channel_category' => 'channel_category',
        'channel_code' => 'channel_code',
        'account_identifier' => 'account_identifier',
        'reference_id' => 'reference_id',
        'currency' => 'currency',
        'amount' => 'amount',
        'cashflow' => 'cashflow',
        'settlement_status' => 'settlement_status',
        'estimated_settlement_time' => 'estimated_settlement_time',
        'business_id' => 'business_id',
        'fee' => 'fee',
        'created' => 'created',
        'updated' => 'updated'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'product_id' => 'setProductId',
        'type' => 'setType',
        'status' => 'setStatus',
        'channel_category' => 'setChannelCategory',
        'channel_code' => 'setChannelCode',
        'account_identifier' => 'setAccountIdentifier',
        'reference_id' => 'setReferenceId',
        'currency' => 'setCurrency',
        'amount' => 'setAmount',
        'cashflow' => 'setCashflow',
        'settlement_status' => 'setSettlementStatus',
        'estimated_settlement_time' => 'setEstimatedSettlementTime',
        'business_id' => 'setBusinessId',
        'fee' => 'setFee',
        'created' => 'setCreated',
        'updated' => 'setUpdated'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'product_id' => 'getProductId',
        'type' => 'getType',
        'status' => 'getStatus',
        'channel_category' => 'getChannelCategory',
        'channel_code' => 'getChannelCode',
        'account_identifier' => 'getAccountIdentifier',
        'reference_id' => 'getReferenceId',
        'currency' => 'getCurrency',
        'amount' => 'getAmount',
        'cashflow' => 'getCashflow',
        'settlement_status' => 'getSettlementStatus',
        'estimated_settlement_time' => 'getEstimatedSettlementTime',
        'business_id' => 'getBusinessId',
        'fee' => 'getFee',
        'created' => 'getCreated',
        'updated' => 'getUpdated'
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

    public const CASHFLOW_IN = 'MONEY_IN';
    public const CASHFLOW_OUT = 'MONEY_OUT';
    public const SETTLEMENT_STATUS_PENDING = 'PENDING';
    public const SETTLEMENT_STATUS_SETTLED = 'SETTLED';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getCashflowAllowableValues()
    {
        return [
            self::CASHFLOW_IN,
            self::CASHFLOW_OUT,
        ];
    }

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getSettlementStatusAllowableValues()
    {
        return [
            self::SETTLEMENT_STATUS_PENDING,
            self::SETTLEMENT_STATUS_SETTLED,
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
        $this->setIfExists('id', $data ?? [], null);
        $this->setIfExists('product_id', $data ?? [], null);
        $this->setIfExists('type', $data ?? [], null);
        $this->setIfExists('status', $data ?? [], null);
        $this->setIfExists('channel_category', $data ?? [], null);
        $this->setIfExists('channel_code', $data ?? [], null);
        $this->setIfExists('account_identifier', $data ?? [], null);
        $this->setIfExists('reference_id', $data ?? [], null);
        $this->setIfExists('currency', $data ?? [], null);
        $this->setIfExists('amount', $data ?? [], null);
        $this->setIfExists('cashflow', $data ?? [], null);
        $this->setIfExists('settlement_status', $data ?? [], null);
        $this->setIfExists('estimated_settlement_time', $data ?? [], null);
        $this->setIfExists('business_id', $data ?? [], null);
        $this->setIfExists('fee', $data ?? [], null);
        $this->setIfExists('created', $data ?? [], null);
        $this->setIfExists('updated', $data ?? [], null);
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
        if (!preg_match("/^txn_[0-9a-f]{8}-[0-9a-f]{4}-4[0-9a-f]{3}-[89ab][0-9a-f]{3}-[0-9a-f]{12}$/", $this->container['id'])) {
            $invalidProperties[] = "invalid value for 'id', must be conform to the pattern /^txn_[0-9a-f]{8}-[0-9a-f]{4}-4[0-9a-f]{3}-[89ab][0-9a-f]{3}-[0-9a-f]{12}$/.";
        }

        if ($this->container['product_id'] === null) {
            $invalidProperties[] = "'product_id' can't be null";
        }
        if ($this->container['type'] === null) {
            $invalidProperties[] = "'type' can't be null";
        }
        if ($this->container['status'] === null) {
            $invalidProperties[] = "'status' can't be null";
        }
        if ($this->container['channel_category'] === null) {
            $invalidProperties[] = "'channel_category' can't be null";
        }
        if ($this->container['channel_code'] === null) {
            $invalidProperties[] = "'channel_code' can't be null";
        }
        if ($this->container['account_identifier'] === null) {
            $invalidProperties[] = "'account_identifier' can't be null";
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
        if ($this->container['cashflow'] === null) {
            $invalidProperties[] = "'cashflow' can't be null";
        }
        $allowedValues = $this->getCashflowAllowableValues();
        if (!is_null($this->container['cashflow']) && !in_array($this->container['cashflow'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'cashflow', must be one of '%s'",
                $this->container['cashflow'],
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getSettlementStatusAllowableValues();
        if (!is_null($this->container['settlement_status']) && !in_array($this->container['settlement_status'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'settlement_status', must be one of '%s'",
                $this->container['settlement_status'],
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['business_id'] === null) {
            $invalidProperties[] = "'business_id' can't be null";
        }
        if ($this->container['fee'] === null) {
            $invalidProperties[] = "'fee' can't be null";
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
     * @param string $id The unique id of a transaction. It will have `txn_` as prefix
     *
     * @return self
     */
    public function setId($id)
    {
        if (is_null($id)) {
            throw new \InvalidArgumentException('non-nullable id cannot be null');
        }

        if ((!preg_match("/^txn_[0-9a-f]{8}-[0-9a-f]{4}-4[0-9a-f]{3}-[89ab][0-9a-f]{3}-[0-9a-f]{12}$/", $id))) {
            throw new \InvalidArgumentException("invalid value for \$id when calling TransactionResponse., must conform to the pattern /^txn_[0-9a-f]{8}-[0-9a-f]{4}-4[0-9a-f]{3}-[89ab][0-9a-f]{3}-[0-9a-f]{12}$/.");
        }

        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets product_id
     *
     * @return string
     */
    public function getProductId()
    {
        return $this->container['product_id'];
    }

    /**
     * Sets product_id
     *
     * @param string $product_id The product_id of the transaction. Product id will have a different prefix for each product. You can use this id to match the transaction from this API to each product API.
     *
     * @return self
     */
    public function setProductId($product_id)
    {
        if (is_null($product_id)) {
            throw new \InvalidArgumentException('non-nullable product_id cannot be null');
        }
        $this->container['product_id'] = $product_id;

        return $this;
    }

    /**
     * Gets type
     *
     * @return \BalanceAndTransaction\TransactionResponseType
     */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
     * Sets type
     *
     * @param \BalanceAndTransaction\TransactionResponseType $type type
     *
     * @return self
     */
    public function setType($type)
    {
        if (is_null($type)) {
            throw new \InvalidArgumentException('non-nullable type cannot be null');
        }
        $this->container['type'] = $type;

        return $this;
    }

    /**
     * Gets status
     *
     * @return \BalanceAndTransaction\TransactionStatuses
     */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
     * Sets status
     *
     * @param \BalanceAndTransaction\TransactionStatuses $status status
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
     * Gets channel_category
     *
     * @return \BalanceAndTransaction\ChannelsCategories
     */
    public function getChannelCategory()
    {
        return $this->container['channel_category'];
    }

    /**
     * Sets channel_category
     *
     * @param \BalanceAndTransaction\ChannelsCategories $channel_category channel_category
     *
     * @return self
     */
    public function setChannelCategory($channel_category)
    {
        if (is_null($channel_category)) {
            throw new \InvalidArgumentException('non-nullable channel_category cannot be null');
        }
        $this->container['channel_category'] = $channel_category;

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
     * @param string $channel_code The channel of the transaction that is used. See [channel codes](https://docs.xendit.co/xendisburse/channel-codes) for the list of available per channel categories.
     *
     * @return self
     */
    public function setChannelCode($channel_code)
    {
        if (is_null($channel_code)) {
            array_push($this->openAPINullablesSetToNull, 'channel_code');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('channel_code', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['channel_code'] = $channel_code;

        return $this;
    }

    /**
     * Gets account_identifier
     *
     * @return string
     */
    public function getAccountIdentifier()
    {
        return $this->container['account_identifier'];
    }

    /**
     * Sets account_identifier
     *
     * @param string $account_identifier Account identifier of transaction. The format will be different from each channel.
     *
     * @return self
     */
    public function setAccountIdentifier($account_identifier)
    {
        if (is_null($account_identifier)) {
            array_push($this->openAPINullablesSetToNull, 'account_identifier');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('account_identifier', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['account_identifier'] = $account_identifier;

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
     * @param string $reference_id customer supplied reference/external_id
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
     * Gets currency
     *
     * @return \BalanceAndTransaction\Currency
     */
    public function getCurrency()
    {
        return $this->container['currency'];
    }

    /**
     * Sets currency
     *
     * @param \BalanceAndTransaction\Currency $currency currency
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
     * @param float $amount The transaction amount. The number of decimal places will be different for each currency according to ISO 4217.
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
     * Gets cashflow
     *
     * @return string
     */
    public function getCashflow()
    {
        return $this->container['cashflow'];
    }

    /**
     * Sets cashflow
     *
     * @param string $cashflow Representing whether the transaction is money in or money out For transfer, the transfer out side it will shows up as money out and on transfer in side in will shows up as money-in. Available values are `MONEY_IN` for money in and `MONEY_OUT` for money out.
     *
     * @return self
     */
    public function setCashflow($cashflow)
    {
        if (is_null($cashflow)) {
            throw new \InvalidArgumentException('non-nullable cashflow cannot be null');
        }
        $allowedValues = $this->getCashflowAllowableValues();
        if (!in_array($cashflow, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'cashflow', must be one of '%s'",
                    $cashflow,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['cashflow'] = $cashflow;

        return $this;
    }

    /**
     * Gets settlement_status
     *
     * @return string|null
     */
    public function getSettlementStatus()
    {
        return $this->container['settlement_status'];
    }

    /**
     * Sets settlement_status
     *
     * @param string|null $settlement_status The settlement status of the transaction. `PENDING` - Transaction amount has not been settled to merchant's balance. `SETTLED` - Transaction has been settled to merchant's balance
     *
     * @return self
     */
    public function setSettlementStatus($settlement_status)
    {
        if (is_null($settlement_status)) {
            array_push($this->openAPINullablesSetToNull, 'settlement_status');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('settlement_status', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $allowedValues = $this->getSettlementStatusAllowableValues();
        if (!is_null($settlement_status) && !in_array($settlement_status, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'settlement_status', must be one of '%s'",
                    $settlement_status,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['settlement_status'] = $settlement_status;

        return $this;
    }

    /**
     * Gets estimated_settlement_time
     *
     * @return \DateTime|null
     */
    public function getEstimatedSettlementTime()
    {
        return $this->container['estimated_settlement_time'];
    }

    /**
     * Sets estimated_settlement_time
     *
     * @param \DateTime|null $estimated_settlement_time Estimated settlement time will only apply to money-in transactions. For money-out transaction, the value will be `NULL`. Estimated settlement time in which transaction amount will be settled to merchant's balance.
     *
     * @return self
     */
    public function setEstimatedSettlementTime($estimated_settlement_time)
    {
        if (is_null($estimated_settlement_time)) {
            array_push($this->openAPINullablesSetToNull, 'estimated_settlement_time');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('estimated_settlement_time', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['estimated_settlement_time'] = $estimated_settlement_time;

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
     * @param string $business_id The id of business where this transaction belong to
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
     * Gets fee
     *
     * @return \BalanceAndTransaction\FeeResponse
     */
    public function getFee()
    {
        return $this->container['fee'];
    }

    /**
     * Sets fee
     *
     * @param \BalanceAndTransaction\FeeResponse $fee fee
     *
     * @return self
     */
    public function setFee($fee)
    {
        if (is_null($fee)) {
            throw new \InvalidArgumentException('non-nullable fee cannot be null');
        }
        $this->container['fee'] = $fee;

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
     * @param \DateTime $created Transaction created timestamp (UTC+0)
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
     * @param \DateTime $updated Transaction updated timestamp (UTC+0)
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


