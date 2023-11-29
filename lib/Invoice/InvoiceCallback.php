<?php
/**
 * InvoiceCallback
 *
 * PHP version 7.4
 *
 * @category Class
 * @package  Xendit
 */

/**
 * xendit-invoice-service
 *
 * The version of the OpenAPI document: 1.5.0
 */

/**
 * NOTE: This class is auto generated.
 * Do not edit the class manually.
 */

namespace Xendit\Invoice;


use \ArrayAccess;
use \Xendit\ObjectSerializer;
use \Xendit\Model\ModelInterface;

/**
 * InvoiceCallback Class Doc Comment
 *
 * @category Class
 * @description Invoice Callback Object
 * @package  Xendit
 * @implements \ArrayAccess<string, mixed>
 */
class InvoiceCallback implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'InvoiceCallback';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'id' => 'string',
        'external_id' => 'string',
        'user_id' => 'string',
        'status' => 'string',
        'merchant_name' => 'string',
        'amount' => 'float',
        'payer_email' => 'string',
        'description' => 'string',
        'paid_amount' => 'float',
        'created' => 'string',
        'updated' => 'string',
        'currency' => 'string',
        'paid_at' => 'string',
        'payment_method' => 'string',
        'payment_channel' => 'string',
        'payment_destination' => 'string',
        'payment_details' => '\Xendit\Invoice\PaymentDetails',
        'payment_id' => 'string',
        'success_redirect_url' => 'string',
        'failure_redirect_url' => 'string',
        'credit_card_charge_id' => 'string',
        'items' => '\Xendit\Invoice\InvoiceCallbackItem[]',
        'fees' => '\Xendit\Invoice\InvoiceFee[]',
        'should_authenticate_credit_card' => 'bool',
        'bank_code' => 'string',
        'ewallet_type' => 'string',
        'on_demand_link' => 'string',
        'recurring_payment_id' => 'string'
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
        'external_id' => null,
        'user_id' => null,
        'status' => null,
        'merchant_name' => null,
        'amount' => null,
        'payer_email' => null,
        'description' => null,
        'paid_amount' => null,
        'created' => null,
        'updated' => null,
        'currency' => null,
        'paid_at' => null,
        'payment_method' => null,
        'payment_channel' => null,
        'payment_destination' => null,
        'payment_details' => null,
        'payment_id' => null,
        'success_redirect_url' => null,
        'failure_redirect_url' => null,
        'credit_card_charge_id' => null,
        'items' => null,
        'fees' => null,
        'should_authenticate_credit_card' => null,
        'bank_code' => null,
        'ewallet_type' => null,
        'on_demand_link' => null,
        'recurring_payment_id' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'id' => false,
		'external_id' => false,
		'user_id' => false,
		'status' => false,
		'merchant_name' => false,
		'amount' => false,
		'payer_email' => false,
		'description' => false,
		'paid_amount' => false,
		'created' => false,
		'updated' => false,
		'currency' => false,
		'paid_at' => false,
		'payment_method' => false,
		'payment_channel' => false,
		'payment_destination' => false,
		'payment_details' => false,
		'payment_id' => false,
		'success_redirect_url' => false,
		'failure_redirect_url' => false,
		'credit_card_charge_id' => false,
		'items' => false,
		'fees' => false,
		'should_authenticate_credit_card' => false,
		'bank_code' => false,
		'ewallet_type' => false,
		'on_demand_link' => false,
		'recurring_payment_id' => false
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
        'external_id' => 'external_id',
        'user_id' => 'user_id',
        'status' => 'status',
        'merchant_name' => 'merchant_name',
        'amount' => 'amount',
        'payer_email' => 'payer_email',
        'description' => 'description',
        'paid_amount' => 'paid_amount',
        'created' => 'created',
        'updated' => 'updated',
        'currency' => 'currency',
        'paid_at' => 'paid_at',
        'payment_method' => 'payment_method',
        'payment_channel' => 'payment_channel',
        'payment_destination' => 'payment_destination',
        'payment_details' => 'payment_details',
        'payment_id' => 'payment_id',
        'success_redirect_url' => 'success_redirect_url',
        'failure_redirect_url' => 'failure_redirect_url',
        'credit_card_charge_id' => 'credit_card_charge_id',
        'items' => 'items',
        'fees' => 'fees',
        'should_authenticate_credit_card' => 'should_authenticate_credit_card',
        'bank_code' => 'bank_code',
        'ewallet_type' => 'ewallet_type',
        'on_demand_link' => 'on_demand_link',
        'recurring_payment_id' => 'recurring_payment_id'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'external_id' => 'setExternalId',
        'user_id' => 'setUserId',
        'status' => 'setStatus',
        'merchant_name' => 'setMerchantName',
        'amount' => 'setAmount',
        'payer_email' => 'setPayerEmail',
        'description' => 'setDescription',
        'paid_amount' => 'setPaidAmount',
        'created' => 'setCreated',
        'updated' => 'setUpdated',
        'currency' => 'setCurrency',
        'paid_at' => 'setPaidAt',
        'payment_method' => 'setPaymentMethod',
        'payment_channel' => 'setPaymentChannel',
        'payment_destination' => 'setPaymentDestination',
        'payment_details' => 'setPaymentDetails',
        'payment_id' => 'setPaymentId',
        'success_redirect_url' => 'setSuccessRedirectUrl',
        'failure_redirect_url' => 'setFailureRedirectUrl',
        'credit_card_charge_id' => 'setCreditCardChargeId',
        'items' => 'setItems',
        'fees' => 'setFees',
        'should_authenticate_credit_card' => 'setShouldAuthenticateCreditCard',
        'bank_code' => 'setBankCode',
        'ewallet_type' => 'setEwalletType',
        'on_demand_link' => 'setOnDemandLink',
        'recurring_payment_id' => 'setRecurringPaymentId'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'external_id' => 'getExternalId',
        'user_id' => 'getUserId',
        'status' => 'getStatus',
        'merchant_name' => 'getMerchantName',
        'amount' => 'getAmount',
        'payer_email' => 'getPayerEmail',
        'description' => 'getDescription',
        'paid_amount' => 'getPaidAmount',
        'created' => 'getCreated',
        'updated' => 'getUpdated',
        'currency' => 'getCurrency',
        'paid_at' => 'getPaidAt',
        'payment_method' => 'getPaymentMethod',
        'payment_channel' => 'getPaymentChannel',
        'payment_destination' => 'getPaymentDestination',
        'payment_details' => 'getPaymentDetails',
        'payment_id' => 'getPaymentId',
        'success_redirect_url' => 'getSuccessRedirectUrl',
        'failure_redirect_url' => 'getFailureRedirectUrl',
        'credit_card_charge_id' => 'getCreditCardChargeId',
        'items' => 'getItems',
        'fees' => 'getFees',
        'should_authenticate_credit_card' => 'getShouldAuthenticateCreditCard',
        'bank_code' => 'getBankCode',
        'ewallet_type' => 'getEwalletType',
        'on_demand_link' => 'getOnDemandLink',
        'recurring_payment_id' => 'getRecurringPaymentId'
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
        $this->setIfExists('external_id', $data ?? [], null);
        $this->setIfExists('user_id', $data ?? [], null);
        $this->setIfExists('status', $data ?? [], null);
        $this->setIfExists('merchant_name', $data ?? [], null);
        $this->setIfExists('amount', $data ?? [], null);
        $this->setIfExists('payer_email', $data ?? [], null);
        $this->setIfExists('description', $data ?? [], null);
        $this->setIfExists('paid_amount', $data ?? [], null);
        $this->setIfExists('created', $data ?? [], null);
        $this->setIfExists('updated', $data ?? [], null);
        $this->setIfExists('currency', $data ?? [], null);
        $this->setIfExists('paid_at', $data ?? [], null);
        $this->setIfExists('payment_method', $data ?? [], null);
        $this->setIfExists('payment_channel', $data ?? [], null);
        $this->setIfExists('payment_destination', $data ?? [], null);
        $this->setIfExists('payment_details', $data ?? [], null);
        $this->setIfExists('payment_id', $data ?? [], null);
        $this->setIfExists('success_redirect_url', $data ?? [], null);
        $this->setIfExists('failure_redirect_url', $data ?? [], null);
        $this->setIfExists('credit_card_charge_id', $data ?? [], null);
        $this->setIfExists('items', $data ?? [], null);
        $this->setIfExists('fees', $data ?? [], null);
        $this->setIfExists('should_authenticate_credit_card', $data ?? [], null);
        $this->setIfExists('bank_code', $data ?? [], null);
        $this->setIfExists('ewallet_type', $data ?? [], null);
        $this->setIfExists('on_demand_link', $data ?? [], null);
        $this->setIfExists('recurring_payment_id', $data ?? [], null);
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
        if ($this->container['external_id'] === null) {
            $invalidProperties[] = "'external_id' can't be null";
        }
        if ($this->container['user_id'] === null) {
            $invalidProperties[] = "'user_id' can't be null";
        }
        if ($this->container['status'] === null) {
            $invalidProperties[] = "'status' can't be null";
        }
        if ($this->container['merchant_name'] === null) {
            $invalidProperties[] = "'merchant_name' can't be null";
        }
        if ($this->container['amount'] === null) {
            $invalidProperties[] = "'amount' can't be null";
        }
        if ($this->container['created'] === null) {
            $invalidProperties[] = "'created' can't be null";
        }
        if ($this->container['updated'] === null) {
            $invalidProperties[] = "'updated' can't be null";
        }
        if ($this->container['currency'] === null) {
            $invalidProperties[] = "'currency' can't be null";
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
     * @param string $id An invoice ID generated by Xendit
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
     * Gets external_id
     *
     * @return string
     */
    public function getExternalId()
    {
        return $this->container['external_id'];
    }

    /**
     * Sets external_id
     *
     * @param string $external_id ID of your choice (typically the unique identifier of an invoice in your system)
     *
     * @return self
     */
    public function setExternalId($external_id)
    {
        if (is_null($external_id)) {
            throw new \InvalidArgumentException('non-nullable external_id cannot be null');
        }
        $this->container['external_id'] = $external_id;

        return $this;
    }

    /**
     * Gets user_id
     *
     * @return string
     */
    public function getUserId()
    {
        return $this->container['user_id'];
    }

    /**
     * Sets user_id
     *
     * @param string $user_id Xendit Business ID
     *
     * @return self
     */
    public function setUserId($user_id)
    {
        if (is_null($user_id)) {
            throw new \InvalidArgumentException('non-nullable user_id cannot be null');
        }
        $this->container['user_id'] = $user_id;

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
     * @param string $status The status of the invoice.
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
     * Gets merchant_name
     *
     * @return string
     */
    public function getMerchantName()
    {
        return $this->container['merchant_name'];
    }

    /**
     * Sets merchant_name
     *
     * @param string $merchant_name The name of company or website
     *
     * @return self
     */
    public function setMerchantName($merchant_name)
    {
        if (is_null($merchant_name)) {
            throw new \InvalidArgumentException('non-nullable merchant_name cannot be null');
        }
        $this->container['merchant_name'] = $merchant_name;

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
     * @param float $amount Nominal amount for the invoice
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
     * Gets payer_email
     *
     * @return string|null
     */
    public function getPayerEmail()
    {
        return $this->container['payer_email'];
    }

    /**
     * Sets payer_email
     *
     * @param string|null $payer_email Email of the payer
     *
     * @return self
     */
    public function setPayerEmail($payer_email)
    {
        if (is_null($payer_email)) {
            throw new \InvalidArgumentException('non-nullable payer_email cannot be null');
        }
        $this->container['payer_email'] = $payer_email;

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
     * @param string|null $description Description for the invoice
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
     * Gets paid_amount
     *
     * @return float|null
     */
    public function getPaidAmount()
    {
        return $this->container['paid_amount'];
    }

    /**
     * Sets paid_amount
     *
     * @param float|null $paid_amount Total amount paid for the invoice
     *
     * @return self
     */
    public function setPaidAmount($paid_amount)
    {
        if (is_null($paid_amount)) {
            throw new \InvalidArgumentException('non-nullable paid_amount cannot be null');
        }
        $this->container['paid_amount'] = $paid_amount;

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
     * @param string $created The date and time when the invoice was created.
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
     * @param string $updated The date and time when the invoice was last updated.
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
     * @param string $currency The currency of the invoice.
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
     * Gets paid_at
     *
     * @return string|null
     */
    public function getPaidAt()
    {
        return $this->container['paid_at'];
    }

    /**
     * Sets paid_at
     *
     * @param string|null $paid_at The date and time when the invoice was paid.
     *
     * @return self
     */
    public function setPaidAt($paid_at)
    {
        if (is_null($paid_at)) {
            throw new \InvalidArgumentException('non-nullable paid_at cannot be null');
        }
        $this->container['paid_at'] = $paid_at;

        return $this;
    }

    /**
     * Gets payment_method
     *
     * @return string|null
     */
    public function getPaymentMethod()
    {
        return $this->container['payment_method'];
    }

    /**
     * Sets payment_method
     *
     * @param string|null $payment_method The payment method used for the invoice.
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
     * Gets payment_channel
     *
     * @return string|null
     */
    public function getPaymentChannel()
    {
        return $this->container['payment_channel'];
    }

    /**
     * Sets payment_channel
     *
     * @param string|null $payment_channel The payment channel.
     *
     * @return self
     */
    public function setPaymentChannel($payment_channel)
    {
        if (is_null($payment_channel)) {
            throw new \InvalidArgumentException('non-nullable payment_channel cannot be null');
        }
        $this->container['payment_channel'] = $payment_channel;

        return $this;
    }

    /**
     * Gets payment_destination
     *
     * @return string|null
     */
    public function getPaymentDestination()
    {
        return $this->container['payment_destination'];
    }

    /**
     * Sets payment_destination
     *
     * @param string|null $payment_destination The payment destination.
     *
     * @return self
     */
    public function setPaymentDestination($payment_destination)
    {
        if (is_null($payment_destination)) {
            throw new \InvalidArgumentException('non-nullable payment_destination cannot be null');
        }
        $this->container['payment_destination'] = $payment_destination;

        return $this;
    }

    /**
     * Gets payment_details
     *
     * @return \Invoice\PaymentDetails|null
     */
    public function getPaymentDetails()
    {
        return $this->container['payment_details'];
    }

    /**
     * Sets payment_details
     *
     * @param \Invoice\PaymentDetails|null $payment_details payment_details
     *
     * @return self
     */
    public function setPaymentDetails($payment_details)
    {
        if (is_null($payment_details)) {
            throw new \InvalidArgumentException('non-nullable payment_details cannot be null');
        }
        $this->container['payment_details'] = $payment_details;

        return $this;
    }

    /**
     * Gets payment_id
     *
     * @return string|null
     */
    public function getPaymentId()
    {
        return $this->container['payment_id'];
    }

    /**
     * Sets payment_id
     *
     * @param string|null $payment_id The ID of the payment.
     *
     * @return self
     */
    public function setPaymentId($payment_id)
    {
        if (is_null($payment_id)) {
            throw new \InvalidArgumentException('non-nullable payment_id cannot be null');
        }
        $this->container['payment_id'] = $payment_id;

        return $this;
    }

    /**
     * Gets success_redirect_url
     *
     * @return string|null
     */
    public function getSuccessRedirectUrl()
    {
        return $this->container['success_redirect_url'];
    }

    /**
     * Sets success_redirect_url
     *
     * @param string|null $success_redirect_url The URL to redirect to on successful payment.
     *
     * @return self
     */
    public function setSuccessRedirectUrl($success_redirect_url)
    {
        if (is_null($success_redirect_url)) {
            throw new \InvalidArgumentException('non-nullable success_redirect_url cannot be null');
        }
        $this->container['success_redirect_url'] = $success_redirect_url;

        return $this;
    }

    /**
     * Gets failure_redirect_url
     *
     * @return string|null
     */
    public function getFailureRedirectUrl()
    {
        return $this->container['failure_redirect_url'];
    }

    /**
     * Sets failure_redirect_url
     *
     * @param string|null $failure_redirect_url The URL to redirect to on payment failure.
     *
     * @return self
     */
    public function setFailureRedirectUrl($failure_redirect_url)
    {
        if (is_null($failure_redirect_url)) {
            throw new \InvalidArgumentException('non-nullable failure_redirect_url cannot be null');
        }
        $this->container['failure_redirect_url'] = $failure_redirect_url;

        return $this;
    }

    /**
     * Gets credit_card_charge_id
     *
     * @return string|null
     */
    public function getCreditCardChargeId()
    {
        return $this->container['credit_card_charge_id'];
    }

    /**
     * Sets credit_card_charge_id
     *
     * @param string|null $credit_card_charge_id The ID associated with a credit card charge (if applicable).
     *
     * @return self
     */
    public function setCreditCardChargeId($credit_card_charge_id)
    {
        if (is_null($credit_card_charge_id)) {
            throw new \InvalidArgumentException('non-nullable credit_card_charge_id cannot be null');
        }
        $this->container['credit_card_charge_id'] = $credit_card_charge_id;

        return $this;
    }

    /**
     * Gets items
     *
     * @return \Invoice\InvoiceCallbackItem[]|null
     */
    public function getItems()
    {
        return $this->container['items'];
    }

    /**
     * Sets items
     *
     * @param \Invoice\InvoiceCallbackItem[]|null $items items
     *
     * @return self
     */
    public function setItems($items)
    {
        if (is_null($items)) {
            throw new \InvalidArgumentException('non-nullable items cannot be null');
        }
        $this->container['items'] = $items;

        return $this;
    }

    /**
     * Gets fees
     *
     * @return \Invoice\InvoiceFee[]|null
     */
    public function getFees()
    {
        return $this->container['fees'];
    }

    /**
     * Sets fees
     *
     * @param \Invoice\InvoiceFee[]|null $fees An array of fees associated with the invoice.
     *
     * @return self
     */
    public function setFees($fees)
    {
        if (is_null($fees)) {
            throw new \InvalidArgumentException('non-nullable fees cannot be null');
        }
        $this->container['fees'] = $fees;

        return $this;
    }

    /**
     * Gets should_authenticate_credit_card
     *
     * @return bool|null
     */
    public function getShouldAuthenticateCreditCard()
    {
        return $this->container['should_authenticate_credit_card'];
    }

    /**
     * Sets should_authenticate_credit_card
     *
     * @param bool|null $should_authenticate_credit_card Indicates whether credit card authentication is required.
     *
     * @return self
     */
    public function setShouldAuthenticateCreditCard($should_authenticate_credit_card)
    {
        if (is_null($should_authenticate_credit_card)) {
            throw new \InvalidArgumentException('non-nullable should_authenticate_credit_card cannot be null');
        }
        $this->container['should_authenticate_credit_card'] = $should_authenticate_credit_card;

        return $this;
    }

    /**
     * Gets bank_code
     *
     * @return string|null
     */
    public function getBankCode()
    {
        return $this->container['bank_code'];
    }

    /**
     * Sets bank_code
     *
     * @param string|null $bank_code The bank code for the bank details.
     *
     * @return self
     */
    public function setBankCode($bank_code)
    {
        if (is_null($bank_code)) {
            throw new \InvalidArgumentException('non-nullable bank_code cannot be null');
        }
        $this->container['bank_code'] = $bank_code;

        return $this;
    }

    /**
     * Gets ewallet_type
     *
     * @return string|null
     */
    public function getEwalletType()
    {
        return $this->container['ewallet_type'];
    }

    /**
     * Sets ewallet_type
     *
     * @param string|null $ewallet_type The type of eWallet.
     *
     * @return self
     */
    public function setEwalletType($ewallet_type)
    {
        if (is_null($ewallet_type)) {
            throw new \InvalidArgumentException('non-nullable ewallet_type cannot be null');
        }
        $this->container['ewallet_type'] = $ewallet_type;

        return $this;
    }

    /**
     * Gets on_demand_link
     *
     * @return string|null
     */
    public function getOnDemandLink()
    {
        return $this->container['on_demand_link'];
    }

    /**
     * Sets on_demand_link
     *
     * @param string|null $on_demand_link The on-demand link.
     *
     * @return self
     */
    public function setOnDemandLink($on_demand_link)
    {
        if (is_null($on_demand_link)) {
            throw new \InvalidArgumentException('non-nullable on_demand_link cannot be null');
        }
        $this->container['on_demand_link'] = $on_demand_link;

        return $this;
    }

    /**
     * Gets recurring_payment_id
     *
     * @return string|null
     */
    public function getRecurringPaymentId()
    {
        return $this->container['recurring_payment_id'];
    }

    /**
     * Sets recurring_payment_id
     *
     * @param string|null $recurring_payment_id The ID of the recurring payment.
     *
     * @return self
     */
    public function setRecurringPaymentId($recurring_payment_id)
    {
        if (is_null($recurring_payment_id)) {
            throw new \InvalidArgumentException('non-nullable recurring_payment_id cannot be null');
        }
        $this->container['recurring_payment_id'] = $recurring_payment_id;

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


