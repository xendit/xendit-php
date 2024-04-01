<?php
/**
 * PaymentRequest
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
 * PaymentRequest Class Doc Comment
 *
 * @category Class
 * @package  Xendit
 * @implements \ArrayAccess<string, mixed>
 */
class PaymentRequest implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'PaymentRequest';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'id' => 'string',
        'created' => 'string',
        'updated' => 'string',
        'reference_id' => 'string',
        'business_id' => 'string',
        'customer_id' => 'string',
        'customer' => 'object',
        'amount' => 'float',
        'min_amount' => 'float',
        'max_amount' => 'float',
        'country' => '\Xendit\PaymentRequest\PaymentRequestCountry',
        'currency' => '\Xendit\PaymentRequest\PaymentRequestCurrency',
        'payment_method' => '\Xendit\PaymentRequest\PaymentMethod',
        'description' => 'string',
        'failure_code' => 'string',
        'capture_method' => '\Xendit\PaymentRequest\PaymentRequestCaptureMethod',
        'initiator' => '\Xendit\PaymentRequest\PaymentRequestInitiator',
        'card_verification_results' => '\Xendit\PaymentRequest\PaymentRequestCardVerificationResults',
        'status' => '\Xendit\PaymentRequest\PaymentRequestStatus',
        'actions' => '\Xendit\PaymentRequest\PaymentRequestAction[]',
        'metadata' => 'object',
        'shipping_information' => '\Xendit\PaymentRequest\PaymentRequestShippingInformation',
        'items' => '\Xendit\PaymentRequest\PaymentRequestBasketItem[]'
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
        'created' => null,
        'updated' => null,
        'reference_id' => null,
        'business_id' => null,
        'customer_id' => null,
        'customer' => null,
        'amount' => 'double',
        'min_amount' => 'double',
        'max_amount' => 'double',
        'country' => null,
        'currency' => null,
        'payment_method' => null,
        'description' => null,
        'failure_code' => null,
        'capture_method' => null,
        'initiator' => null,
        'card_verification_results' => null,
        'status' => null,
        'actions' => null,
        'metadata' => null,
        'shipping_information' => null,
        'items' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'id' => false,
		'created' => false,
		'updated' => false,
		'reference_id' => false,
		'business_id' => false,
		'customer_id' => true,
		'customer' => true,
		'amount' => false,
		'min_amount' => true,
		'max_amount' => true,
		'country' => false,
		'currency' => false,
		'payment_method' => false,
		'description' => true,
		'failure_code' => true,
		'capture_method' => true,
		'initiator' => true,
		'card_verification_results' => true,
		'status' => false,
		'actions' => false,
		'metadata' => true,
		'shipping_information' => true,
		'items' => true
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
        'created' => 'created',
        'updated' => 'updated',
        'reference_id' => 'reference_id',
        'business_id' => 'business_id',
        'customer_id' => 'customer_id',
        'customer' => 'customer',
        'amount' => 'amount',
        'min_amount' => 'min_amount',
        'max_amount' => 'max_amount',
        'country' => 'country',
        'currency' => 'currency',
        'payment_method' => 'payment_method',
        'description' => 'description',
        'failure_code' => 'failure_code',
        'capture_method' => 'capture_method',
        'initiator' => 'initiator',
        'card_verification_results' => 'card_verification_results',
        'status' => 'status',
        'actions' => 'actions',
        'metadata' => 'metadata',
        'shipping_information' => 'shipping_information',
        'items' => 'items'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'created' => 'setCreated',
        'updated' => 'setUpdated',
        'reference_id' => 'setReferenceId',
        'business_id' => 'setBusinessId',
        'customer_id' => 'setCustomerId',
        'customer' => 'setCustomer',
        'amount' => 'setAmount',
        'min_amount' => 'setMinAmount',
        'max_amount' => 'setMaxAmount',
        'country' => 'setCountry',
        'currency' => 'setCurrency',
        'payment_method' => 'setPaymentMethod',
        'description' => 'setDescription',
        'failure_code' => 'setFailureCode',
        'capture_method' => 'setCaptureMethod',
        'initiator' => 'setInitiator',
        'card_verification_results' => 'setCardVerificationResults',
        'status' => 'setStatus',
        'actions' => 'setActions',
        'metadata' => 'setMetadata',
        'shipping_information' => 'setShippingInformation',
        'items' => 'setItems'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'created' => 'getCreated',
        'updated' => 'getUpdated',
        'reference_id' => 'getReferenceId',
        'business_id' => 'getBusinessId',
        'customer_id' => 'getCustomerId',
        'customer' => 'getCustomer',
        'amount' => 'getAmount',
        'min_amount' => 'getMinAmount',
        'max_amount' => 'getMaxAmount',
        'country' => 'getCountry',
        'currency' => 'getCurrency',
        'payment_method' => 'getPaymentMethod',
        'description' => 'getDescription',
        'failure_code' => 'getFailureCode',
        'capture_method' => 'getCaptureMethod',
        'initiator' => 'getInitiator',
        'card_verification_results' => 'getCardVerificationResults',
        'status' => 'getStatus',
        'actions' => 'getActions',
        'metadata' => 'getMetadata',
        'shipping_information' => 'getShippingInformation',
        'items' => 'getItems'
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
        $this->setIfExists('created', $data ?? [], null);
        $this->setIfExists('updated', $data ?? [], null);
        $this->setIfExists('reference_id', $data ?? [], null);
        $this->setIfExists('business_id', $data ?? [], null);
        $this->setIfExists('customer_id', $data ?? [], null);
        $this->setIfExists('customer', $data ?? [], null);
        $this->setIfExists('amount', $data ?? [], null);
        $this->setIfExists('min_amount', $data ?? [], null);
        $this->setIfExists('max_amount', $data ?? [], null);
        $this->setIfExists('country', $data ?? [], null);
        $this->setIfExists('currency', $data ?? [], null);
        $this->setIfExists('payment_method', $data ?? [], null);
        $this->setIfExists('description', $data ?? [], null);
        $this->setIfExists('failure_code', $data ?? [], null);
        $this->setIfExists('capture_method', $data ?? [], null);
        $this->setIfExists('initiator', $data ?? [], null);
        $this->setIfExists('card_verification_results', $data ?? [], null);
        $this->setIfExists('status', $data ?? [], null);
        $this->setIfExists('actions', $data ?? [], null);
        $this->setIfExists('metadata', $data ?? [], null);
        $this->setIfExists('shipping_information', $data ?? [], null);
        $this->setIfExists('items', $data ?? [], null);
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
        if ($this->container['created'] === null) {
            $invalidProperties[] = "'created' can't be null";
        }
        if ($this->container['updated'] === null) {
            $invalidProperties[] = "'updated' can't be null";
        }
        if ($this->container['reference_id'] === null) {
            $invalidProperties[] = "'reference_id' can't be null";
        }
        if ($this->container['business_id'] === null) {
            $invalidProperties[] = "'business_id' can't be null";
        }
        if ($this->container['currency'] === null) {
            $invalidProperties[] = "'currency' can't be null";
        }
        if ($this->container['payment_method'] === null) {
            $invalidProperties[] = "'payment_method' can't be null";
        }
        if ($this->container['status'] === null) {
            $invalidProperties[] = "'status' can't be null";
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
     * @param string $business_id business_id
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
     * Gets customer
     *
     * @return object|null
     */
    public function getCustomer()
    {
        return $this->container['customer'];
    }

    /**
     * Sets customer
     *
     * @param object|null $customer customer
     *
     * @return self
     */
    public function setCustomer($customer)
    {
        if (is_null($customer)) {
            array_push($this->openAPINullablesSetToNull, 'customer');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('customer', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['customer'] = $customer;

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
     * Gets min_amount
     *
     * @return float|null
     */
    public function getMinAmount()
    {
        return $this->container['min_amount'];
    }

    /**
     * Sets min_amount
     *
     * @param float|null $min_amount min_amount
     *
     * @return self
     */
    public function setMinAmount($min_amount)
    {
        if (is_null($min_amount)) {
            array_push($this->openAPINullablesSetToNull, 'min_amount');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('min_amount', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['min_amount'] = $min_amount;

        return $this;
    }

    /**
     * Gets max_amount
     *
     * @return float|null
     */
    public function getMaxAmount()
    {
        return $this->container['max_amount'];
    }

    /**
     * Sets max_amount
     *
     * @param float|null $max_amount max_amount
     *
     * @return self
     */
    public function setMaxAmount($max_amount)
    {
        if (is_null($max_amount)) {
            array_push($this->openAPINullablesSetToNull, 'max_amount');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('max_amount', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['max_amount'] = $max_amount;

        return $this;
    }

    /**
     * Gets country
     *
     * @return \PaymentRequest\PaymentRequestCountry|null
     */
    public function getCountry()
    {
        return $this->container['country'];
    }

    /**
     * Sets country
     *
     * @param \PaymentRequest\PaymentRequestCountry|null $country country
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
     * @return \PaymentRequest\PaymentRequestCurrency
     */
    public function getCurrency()
    {
        return $this->container['currency'];
    }

    /**
     * Sets currency
     *
     * @param \PaymentRequest\PaymentRequestCurrency $currency currency
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
     * @param string|null $description description
     *
     * @return self
     */
    public function setDescription($description)
    {
        if (is_null($description)) {
            array_push($this->openAPINullablesSetToNull, 'description');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('description', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['description'] = $description;

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
     * Gets capture_method
     *
     * @return \PaymentRequest\PaymentRequestCaptureMethod|null
     */
    public function getCaptureMethod()
    {
        return $this->container['capture_method'];
    }

    /**
     * Sets capture_method
     *
     * @param \PaymentRequest\PaymentRequestCaptureMethod|null $capture_method capture_method
     *
     * @return self
     */
    public function setCaptureMethod($capture_method)
    {
        if (is_null($capture_method)) {
            array_push($this->openAPINullablesSetToNull, 'capture_method');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('capture_method', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['capture_method'] = $capture_method;

        return $this;
    }

    /**
     * Gets initiator
     *
     * @return \PaymentRequest\PaymentRequestInitiator|null
     */
    public function getInitiator()
    {
        return $this->container['initiator'];
    }

    /**
     * Sets initiator
     *
     * @param \PaymentRequest\PaymentRequestInitiator|null $initiator initiator
     *
     * @return self
     */
    public function setInitiator($initiator)
    {
        if (is_null($initiator)) {
            array_push($this->openAPINullablesSetToNull, 'initiator');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('initiator', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['initiator'] = $initiator;

        return $this;
    }

    /**
     * Gets card_verification_results
     *
     * @return \PaymentRequest\PaymentRequestCardVerificationResults|null
     */
    public function getCardVerificationResults()
    {
        return $this->container['card_verification_results'];
    }

    /**
     * Sets card_verification_results
     *
     * @param \PaymentRequest\PaymentRequestCardVerificationResults|null $card_verification_results card_verification_results
     *
     * @return self
     */
    public function setCardVerificationResults($card_verification_results)
    {
        if (is_null($card_verification_results)) {
            array_push($this->openAPINullablesSetToNull, 'card_verification_results');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('card_verification_results', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['card_verification_results'] = $card_verification_results;

        return $this;
    }

    /**
     * Gets status
     *
     * @return \PaymentRequest\PaymentRequestStatus
     */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
     * Sets status
     *
     * @param \PaymentRequest\PaymentRequestStatus $status status
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
     * Gets actions
     *
     * @return \PaymentRequest\PaymentRequestAction[]|null
     */
    public function getActions()
    {
        return $this->container['actions'];
    }

    /**
     * Sets actions
     *
     * @param \PaymentRequest\PaymentRequestAction[]|null $actions actions
     *
     * @return self
     */
    public function setActions($actions)
    {
        if (is_null($actions)) {
            throw new \InvalidArgumentException('non-nullable actions cannot be null');
        }
        $this->container['actions'] = $actions;

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
     * Gets shipping_information
     *
     * @return \PaymentRequest\PaymentRequestShippingInformation|null
     */
    public function getShippingInformation()
    {
        return $this->container['shipping_information'];
    }

    /**
     * Sets shipping_information
     *
     * @param \PaymentRequest\PaymentRequestShippingInformation|null $shipping_information shipping_information
     *
     * @return self
     */
    public function setShippingInformation($shipping_information)
    {
        if (is_null($shipping_information)) {
            array_push($this->openAPINullablesSetToNull, 'shipping_information');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('shipping_information', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['shipping_information'] = $shipping_information;

        return $this;
    }

    /**
     * Gets items
     *
     * @return \PaymentRequest\PaymentRequestBasketItem[]|null
     */
    public function getItems()
    {
        return $this->container['items'];
    }

    /**
     * Sets items
     *
     * @param \PaymentRequest\PaymentRequestBasketItem[]|null $items items
     *
     * @return self
     */
    public function setItems($items)
    {
        if (is_null($items)) {
            array_push($this->openAPINullablesSetToNull, 'items');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('items', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['items'] = $items;

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


