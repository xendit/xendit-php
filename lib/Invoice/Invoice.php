<?php
/**
 * Invoice
 *
 * PHP version 7.4
 *
 * @category Class
 * @package  Xendit
 */

/**
 * xendit-invoice-service
 *
 * The version of the OpenAPI document: 1.7.6
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
 * Invoice Class Doc Comment
 *
 * @category Class
 * @description An object representing details for an invoice.
 * @package  Xendit
 * @implements \ArrayAccess<string, mixed>
 */
class Invoice implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'Invoice';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'id' => 'string',
        'external_id' => 'string',
        'user_id' => 'string',
        'payer_email' => 'string',
        'description' => 'string',
        'payment_method' => '\Xendit\Invoice\InvoicePaymentMethod',
        'status' => '\Xendit\Invoice\InvoiceStatus',
        'merchant_name' => 'string',
        'merchant_profile_picture_url' => 'string',
        'locale' => 'string',
        'amount' => 'float',
        'expiry_date' => '\DateTime',
        'invoice_url' => 'string',
        'available_banks' => '\Xendit\Invoice\Bank[]',
        'available_retail_outlets' => '\Xendit\Invoice\RetailOutlet[]',
        'available_ewallets' => '\Xendit\Invoice\Ewallet[]',
        'available_qr_codes' => '\Xendit\Invoice\QrCode[]',
        'available_direct_debits' => '\Xendit\Invoice\DirectDebit[]',
        'available_paylaters' => '\Xendit\Invoice\Paylater[]',
        'should_exclude_credit_card' => 'bool',
        'should_send_email' => 'bool',
        'created' => '\DateTime',
        'updated' => '\DateTime',
        'success_redirect_url' => 'string',
        'failure_redirect_url' => 'string',
        'should_authenticate_credit_card' => 'bool',
        'currency' => '\Xendit\Invoice\InvoiceCurrency',
        'items' => '\Xendit\Invoice\InvoiceItem[]',
        'fixed_va' => 'bool',
        'reminder_date' => '\DateTime',
        'customer' => '\Xendit\Invoice\CustomerObject',
        'customer_notification_preference' => '\Xendit\Invoice\NotificationPreference',
        'fees' => '\Xendit\Invoice\InvoiceFee[]',
        'channel_properties' => '\Xendit\Invoice\ChannelProperties'
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
        'payer_email' => null,
        'description' => null,
        'payment_method' => null,
        'status' => null,
        'merchant_name' => null,
        'merchant_profile_picture_url' => null,
        'locale' => null,
        'amount' => 'double',
        'expiry_date' => 'date-time',
        'invoice_url' => null,
        'available_banks' => null,
        'available_retail_outlets' => null,
        'available_ewallets' => null,
        'available_qr_codes' => null,
        'available_direct_debits' => null,
        'available_paylaters' => null,
        'should_exclude_credit_card' => null,
        'should_send_email' => null,
        'created' => 'date-time',
        'updated' => 'date-time',
        'success_redirect_url' => null,
        'failure_redirect_url' => null,
        'should_authenticate_credit_card' => null,
        'currency' => null,
        'items' => null,
        'fixed_va' => null,
        'reminder_date' => 'date-time',
        'customer' => null,
        'customer_notification_preference' => null,
        'fees' => null,
        'channel_properties' => null
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
		'payer_email' => false,
		'description' => false,
		'payment_method' => false,
		'status' => false,
		'merchant_name' => false,
		'merchant_profile_picture_url' => false,
		'locale' => false,
		'amount' => false,
		'expiry_date' => false,
		'invoice_url' => false,
		'available_banks' => false,
		'available_retail_outlets' => false,
		'available_ewallets' => false,
		'available_qr_codes' => false,
		'available_direct_debits' => false,
		'available_paylaters' => false,
		'should_exclude_credit_card' => false,
		'should_send_email' => false,
		'created' => false,
		'updated' => false,
		'success_redirect_url' => false,
		'failure_redirect_url' => false,
		'should_authenticate_credit_card' => false,
		'currency' => false,
		'items' => false,
		'fixed_va' => false,
		'reminder_date' => false,
		'customer' => false,
		'customer_notification_preference' => false,
		'fees' => false,
		'channel_properties' => false
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
        'payer_email' => 'payer_email',
        'description' => 'description',
        'payment_method' => 'payment_method',
        'status' => 'status',
        'merchant_name' => 'merchant_name',
        'merchant_profile_picture_url' => 'merchant_profile_picture_url',
        'locale' => 'locale',
        'amount' => 'amount',
        'expiry_date' => 'expiry_date',
        'invoice_url' => 'invoice_url',
        'available_banks' => 'available_banks',
        'available_retail_outlets' => 'available_retail_outlets',
        'available_ewallets' => 'available_ewallets',
        'available_qr_codes' => 'available_qr_codes',
        'available_direct_debits' => 'available_direct_debits',
        'available_paylaters' => 'available_paylaters',
        'should_exclude_credit_card' => 'should_exclude_credit_card',
        'should_send_email' => 'should_send_email',
        'created' => 'created',
        'updated' => 'updated',
        'success_redirect_url' => 'success_redirect_url',
        'failure_redirect_url' => 'failure_redirect_url',
        'should_authenticate_credit_card' => 'should_authenticate_credit_card',
        'currency' => 'currency',
        'items' => 'items',
        'fixed_va' => 'fixed_va',
        'reminder_date' => 'reminder_date',
        'customer' => 'customer',
        'customer_notification_preference' => 'customer_notification_preference',
        'fees' => 'fees',
        'channel_properties' => 'channel_properties'
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
        'payer_email' => 'setPayerEmail',
        'description' => 'setDescription',
        'payment_method' => 'setPaymentMethod',
        'status' => 'setStatus',
        'merchant_name' => 'setMerchantName',
        'merchant_profile_picture_url' => 'setMerchantProfilePictureUrl',
        'locale' => 'setLocale',
        'amount' => 'setAmount',
        'expiry_date' => 'setExpiryDate',
        'invoice_url' => 'setInvoiceUrl',
        'available_banks' => 'setAvailableBanks',
        'available_retail_outlets' => 'setAvailableRetailOutlets',
        'available_ewallets' => 'setAvailableEwallets',
        'available_qr_codes' => 'setAvailableQrCodes',
        'available_direct_debits' => 'setAvailableDirectDebits',
        'available_paylaters' => 'setAvailablePaylaters',
        'should_exclude_credit_card' => 'setShouldExcludeCreditCard',
        'should_send_email' => 'setShouldSendEmail',
        'created' => 'setCreated',
        'updated' => 'setUpdated',
        'success_redirect_url' => 'setSuccessRedirectUrl',
        'failure_redirect_url' => 'setFailureRedirectUrl',
        'should_authenticate_credit_card' => 'setShouldAuthenticateCreditCard',
        'currency' => 'setCurrency',
        'items' => 'setItems',
        'fixed_va' => 'setFixedVa',
        'reminder_date' => 'setReminderDate',
        'customer' => 'setCustomer',
        'customer_notification_preference' => 'setCustomerNotificationPreference',
        'fees' => 'setFees',
        'channel_properties' => 'setChannelProperties'
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
        'payer_email' => 'getPayerEmail',
        'description' => 'getDescription',
        'payment_method' => 'getPaymentMethod',
        'status' => 'getStatus',
        'merchant_name' => 'getMerchantName',
        'merchant_profile_picture_url' => 'getMerchantProfilePictureUrl',
        'locale' => 'getLocale',
        'amount' => 'getAmount',
        'expiry_date' => 'getExpiryDate',
        'invoice_url' => 'getInvoiceUrl',
        'available_banks' => 'getAvailableBanks',
        'available_retail_outlets' => 'getAvailableRetailOutlets',
        'available_ewallets' => 'getAvailableEwallets',
        'available_qr_codes' => 'getAvailableQrCodes',
        'available_direct_debits' => 'getAvailableDirectDebits',
        'available_paylaters' => 'getAvailablePaylaters',
        'should_exclude_credit_card' => 'getShouldExcludeCreditCard',
        'should_send_email' => 'getShouldSendEmail',
        'created' => 'getCreated',
        'updated' => 'getUpdated',
        'success_redirect_url' => 'getSuccessRedirectUrl',
        'failure_redirect_url' => 'getFailureRedirectUrl',
        'should_authenticate_credit_card' => 'getShouldAuthenticateCreditCard',
        'currency' => 'getCurrency',
        'items' => 'getItems',
        'fixed_va' => 'getFixedVa',
        'reminder_date' => 'getReminderDate',
        'customer' => 'getCustomer',
        'customer_notification_preference' => 'getCustomerNotificationPreference',
        'fees' => 'getFees',
        'channel_properties' => 'getChannelProperties'
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
        $this->setIfExists('payer_email', $data ?? [], null);
        $this->setIfExists('description', $data ?? [], null);
        $this->setIfExists('payment_method', $data ?? [], null);
        $this->setIfExists('status', $data ?? [], null);
        $this->setIfExists('merchant_name', $data ?? [], null);
        $this->setIfExists('merchant_profile_picture_url', $data ?? [], null);
        $this->setIfExists('locale', $data ?? [], null);
        $this->setIfExists('amount', $data ?? [], null);
        $this->setIfExists('expiry_date', $data ?? [], null);
        $this->setIfExists('invoice_url', $data ?? [], null);
        $this->setIfExists('available_banks', $data ?? [], null);
        $this->setIfExists('available_retail_outlets', $data ?? [], null);
        $this->setIfExists('available_ewallets', $data ?? [], null);
        $this->setIfExists('available_qr_codes', $data ?? [], null);
        $this->setIfExists('available_direct_debits', $data ?? [], null);
        $this->setIfExists('available_paylaters', $data ?? [], null);
        $this->setIfExists('should_exclude_credit_card', $data ?? [], null);
        $this->setIfExists('should_send_email', $data ?? [], null);
        $this->setIfExists('created', $data ?? [], null);
        $this->setIfExists('updated', $data ?? [], null);
        $this->setIfExists('success_redirect_url', $data ?? [], null);
        $this->setIfExists('failure_redirect_url', $data ?? [], null);
        $this->setIfExists('should_authenticate_credit_card', $data ?? [], null);
        $this->setIfExists('currency', $data ?? [], null);
        $this->setIfExists('items', $data ?? [], null);
        $this->setIfExists('fixed_va', $data ?? [], null);
        $this->setIfExists('reminder_date', $data ?? [], null);
        $this->setIfExists('customer', $data ?? [], null);
        $this->setIfExists('customer_notification_preference', $data ?? [], null);
        $this->setIfExists('fees', $data ?? [], null);
        $this->setIfExists('channel_properties', $data ?? [], null);
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
        if ($this->container['merchant_profile_picture_url'] === null) {
            $invalidProperties[] = "'merchant_profile_picture_url' can't be null";
        }
        if ($this->container['amount'] === null) {
            $invalidProperties[] = "'amount' can't be null";
        }
        if ($this->container['expiry_date'] === null) {
            $invalidProperties[] = "'expiry_date' can't be null";
        }
        if ($this->container['invoice_url'] === null) {
            $invalidProperties[] = "'invoice_url' can't be null";
        }
        if ($this->container['available_banks'] === null) {
            $invalidProperties[] = "'available_banks' can't be null";
        }
        if ($this->container['available_retail_outlets'] === null) {
            $invalidProperties[] = "'available_retail_outlets' can't be null";
        }
        if ($this->container['available_ewallets'] === null) {
            $invalidProperties[] = "'available_ewallets' can't be null";
        }
        if ($this->container['available_qr_codes'] === null) {
            $invalidProperties[] = "'available_qr_codes' can't be null";
        }
        if ($this->container['available_direct_debits'] === null) {
            $invalidProperties[] = "'available_direct_debits' can't be null";
        }
        if ($this->container['available_paylaters'] === null) {
            $invalidProperties[] = "'available_paylaters' can't be null";
        }
        if ($this->container['should_send_email'] === null) {
            $invalidProperties[] = "'should_send_email' can't be null";
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
     * @return string|null
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param string|null $id The unique identifier for the invoice.
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
     * @param string $external_id The external identifier for the invoice.
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
     * @param string $user_id The user ID associated with the invoice.
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
     * @param string|null $payer_email The email address of the payer.
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
     * @param string|null $description A description of the invoice.
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
     * Gets payment_method
     *
     * @return \Invoice\InvoicePaymentMethod|null
     */
    public function getPaymentMethod()
    {
        return $this->container['payment_method'];
    }

    /**
     * Sets payment_method
     *
     * @param \Invoice\InvoicePaymentMethod|null $payment_method payment_method
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
     * Gets status
     *
     * @return \Invoice\InvoiceStatus
     */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
     * Sets status
     *
     * @param \Invoice\InvoiceStatus $status status
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
     * @param string $merchant_name The name of the merchant.
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
     * Gets merchant_profile_picture_url
     *
     * @return string
     */
    public function getMerchantProfilePictureUrl()
    {
        return $this->container['merchant_profile_picture_url'];
    }

    /**
     * Sets merchant_profile_picture_url
     *
     * @param string $merchant_profile_picture_url The URL of the merchant's profile picture.
     *
     * @return self
     */
    public function setMerchantProfilePictureUrl($merchant_profile_picture_url)
    {
        if (is_null($merchant_profile_picture_url)) {
            throw new \InvalidArgumentException('non-nullable merchant_profile_picture_url cannot be null');
        }
        $this->container['merchant_profile_picture_url'] = $merchant_profile_picture_url;

        return $this;
    }

    /**
     * Gets locale
     *
     * @return string|null
     */
    public function getLocale()
    {
        return $this->container['locale'];
    }

    /**
     * Sets locale
     *
     * @param string|null $locale The locale or language used for the invoice.
     *
     * @return self
     */
    public function setLocale($locale)
    {
        if (is_null($locale)) {
            throw new \InvalidArgumentException('non-nullable locale cannot be null');
        }
        $this->container['locale'] = $locale;

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
     * @param float $amount The total amount of the invoice.
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
     * Gets expiry_date
     *
     * @return \DateTime
     */
    public function getExpiryDate()
    {
        return $this->container['expiry_date'];
    }

    /**
     * Sets expiry_date
     *
     * @param \DateTime $expiry_date Representing a date and time in ISO 8601 format.
     *
     * @return self
     */
    public function setExpiryDate($expiry_date)
    {
        if (is_null($expiry_date)) {
            throw new \InvalidArgumentException('non-nullable expiry_date cannot be null');
        }
        $this->container['expiry_date'] = $expiry_date;

        return $this;
    }

    /**
     * Gets invoice_url
     *
     * @return string
     */
    public function getInvoiceUrl()
    {
        return $this->container['invoice_url'];
    }

    /**
     * Sets invoice_url
     *
     * @param string $invoice_url The URL to view the invoice.
     *
     * @return self
     */
    public function setInvoiceUrl($invoice_url)
    {
        if (is_null($invoice_url)) {
            throw new \InvalidArgumentException('non-nullable invoice_url cannot be null');
        }
        $this->container['invoice_url'] = $invoice_url;

        return $this;
    }

    /**
     * Gets available_banks
     *
     * @return \Invoice\Bank[]
     */
    public function getAvailableBanks()
    {
        return $this->container['available_banks'];
    }

    /**
     * Sets available_banks
     *
     * @param \Invoice\Bank[] $available_banks An array of available banks for payment.
     *
     * @return self
     */
    public function setAvailableBanks($available_banks)
    {
        if (is_null($available_banks)) {
            throw new \InvalidArgumentException('non-nullable available_banks cannot be null');
        }
        $this->container['available_banks'] = $available_banks;

        return $this;
    }

    /**
     * Gets available_retail_outlets
     *
     * @return \Invoice\RetailOutlet[]
     */
    public function getAvailableRetailOutlets()
    {
        return $this->container['available_retail_outlets'];
    }

    /**
     * Sets available_retail_outlets
     *
     * @param \Invoice\RetailOutlet[] $available_retail_outlets An array of available retail outlets for payment.
     *
     * @return self
     */
    public function setAvailableRetailOutlets($available_retail_outlets)
    {
        if (is_null($available_retail_outlets)) {
            throw new \InvalidArgumentException('non-nullable available_retail_outlets cannot be null');
        }
        $this->container['available_retail_outlets'] = $available_retail_outlets;

        return $this;
    }

    /**
     * Gets available_ewallets
     *
     * @return \Invoice\Ewallet[]
     */
    public function getAvailableEwallets()
    {
        return $this->container['available_ewallets'];
    }

    /**
     * Sets available_ewallets
     *
     * @param \Invoice\Ewallet[] $available_ewallets An array of available e-wallets for payment.
     *
     * @return self
     */
    public function setAvailableEwallets($available_ewallets)
    {
        if (is_null($available_ewallets)) {
            throw new \InvalidArgumentException('non-nullable available_ewallets cannot be null');
        }
        $this->container['available_ewallets'] = $available_ewallets;

        return $this;
    }

    /**
     * Gets available_qr_codes
     *
     * @return \Invoice\QrCode[]
     */
    public function getAvailableQrCodes()
    {
        return $this->container['available_qr_codes'];
    }

    /**
     * Sets available_qr_codes
     *
     * @param \Invoice\QrCode[] $available_qr_codes An array of available QR codes for payment.
     *
     * @return self
     */
    public function setAvailableQrCodes($available_qr_codes)
    {
        if (is_null($available_qr_codes)) {
            throw new \InvalidArgumentException('non-nullable available_qr_codes cannot be null');
        }
        $this->container['available_qr_codes'] = $available_qr_codes;

        return $this;
    }

    /**
     * Gets available_direct_debits
     *
     * @return \Invoice\DirectDebit[]
     */
    public function getAvailableDirectDebits()
    {
        return $this->container['available_direct_debits'];
    }

    /**
     * Sets available_direct_debits
     *
     * @param \Invoice\DirectDebit[] $available_direct_debits An array of available direct debit options for payment.
     *
     * @return self
     */
    public function setAvailableDirectDebits($available_direct_debits)
    {
        if (is_null($available_direct_debits)) {
            throw new \InvalidArgumentException('non-nullable available_direct_debits cannot be null');
        }
        $this->container['available_direct_debits'] = $available_direct_debits;

        return $this;
    }

    /**
     * Gets available_paylaters
     *
     * @return \Invoice\Paylater[]
     */
    public function getAvailablePaylaters()
    {
        return $this->container['available_paylaters'];
    }

    /**
     * Sets available_paylaters
     *
     * @param \Invoice\Paylater[] $available_paylaters An array of available pay-later options for payment.
     *
     * @return self
     */
    public function setAvailablePaylaters($available_paylaters)
    {
        if (is_null($available_paylaters)) {
            throw new \InvalidArgumentException('non-nullable available_paylaters cannot be null');
        }
        $this->container['available_paylaters'] = $available_paylaters;

        return $this;
    }

    /**
     * Gets should_exclude_credit_card
     *
     * @return bool|null
     */
    public function getShouldExcludeCreditCard()
    {
        return $this->container['should_exclude_credit_card'];
    }

    /**
     * Sets should_exclude_credit_card
     *
     * @param bool|null $should_exclude_credit_card Indicates whether credit card payments should be excluded.
     *
     * @return self
     */
    public function setShouldExcludeCreditCard($should_exclude_credit_card)
    {
        if (is_null($should_exclude_credit_card)) {
            throw new \InvalidArgumentException('non-nullable should_exclude_credit_card cannot be null');
        }
        $this->container['should_exclude_credit_card'] = $should_exclude_credit_card;

        return $this;
    }

    /**
     * Gets should_send_email
     *
     * @return bool
     */
    public function getShouldSendEmail()
    {
        return $this->container['should_send_email'];
    }

    /**
     * Sets should_send_email
     *
     * @param bool $should_send_email Indicates whether email notifications should be sent.
     *
     * @return self
     */
    public function setShouldSendEmail($should_send_email)
    {
        if (is_null($should_send_email)) {
            throw new \InvalidArgumentException('non-nullable should_send_email cannot be null');
        }
        $this->container['should_send_email'] = $should_send_email;

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
     * @param \DateTime $created Representing a date and time in ISO 8601 format.
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
     * @param \DateTime $updated Representing a date and time in ISO 8601 format.
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
     * Gets currency
     *
     * @return \Invoice\InvoiceCurrency|null
     */
    public function getCurrency()
    {
        return $this->container['currency'];
    }

    /**
     * Sets currency
     *
     * @param \Invoice\InvoiceCurrency|null $currency currency
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
     * Gets items
     *
     * @return \Invoice\InvoiceItem[]|null
     */
    public function getItems()
    {
        return $this->container['items'];
    }

    /**
     * Sets items
     *
     * @param \Invoice\InvoiceItem[]|null $items An array of items included in the invoice.
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
     * Gets fixed_va
     *
     * @return bool|null
     */
    public function getFixedVa()
    {
        return $this->container['fixed_va'];
    }

    /**
     * Sets fixed_va
     *
     * @param bool|null $fixed_va Indicates whether the virtual account is fixed.
     *
     * @return self
     */
    public function setFixedVa($fixed_va)
    {
        if (is_null($fixed_va)) {
            throw new \InvalidArgumentException('non-nullable fixed_va cannot be null');
        }
        $this->container['fixed_va'] = $fixed_va;

        return $this;
    }

    /**
     * Gets reminder_date
     *
     * @return \DateTime|null
     */
    public function getReminderDate()
    {
        return $this->container['reminder_date'];
    }

    /**
     * Sets reminder_date
     *
     * @param \DateTime|null $reminder_date Representing a date and time in ISO 8601 format.
     *
     * @return self
     */
    public function setReminderDate($reminder_date)
    {
        if (is_null($reminder_date)) {
            throw new \InvalidArgumentException('non-nullable reminder_date cannot be null');
        }
        $this->container['reminder_date'] = $reminder_date;

        return $this;
    }

    /**
     * Gets customer
     *
     * @return \Invoice\CustomerObject|null
     */
    public function getCustomer()
    {
        return $this->container['customer'];
    }

    /**
     * Sets customer
     *
     * @param \Invoice\CustomerObject|null $customer customer
     *
     * @return self
     */
    public function setCustomer($customer)
    {
        if (is_null($customer)) {
            throw new \InvalidArgumentException('non-nullable customer cannot be null');
        }
        $this->container['customer'] = $customer;

        return $this;
    }

    /**
     * Gets customer_notification_preference
     *
     * @return \Invoice\NotificationPreference|null
     */
    public function getCustomerNotificationPreference()
    {
        return $this->container['customer_notification_preference'];
    }

    /**
     * Sets customer_notification_preference
     *
     * @param \Invoice\NotificationPreference|null $customer_notification_preference customer_notification_preference
     *
     * @return self
     */
    public function setCustomerNotificationPreference($customer_notification_preference)
    {
        if (is_null($customer_notification_preference)) {
            throw new \InvalidArgumentException('non-nullable customer_notification_preference cannot be null');
        }
        $this->container['customer_notification_preference'] = $customer_notification_preference;

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
     * Gets channel_properties
     *
     * @return \Invoice\ChannelProperties|null
     */
    public function getChannelProperties()
    {
        return $this->container['channel_properties'];
    }

    /**
     * Sets channel_properties
     *
     * @param \Invoice\ChannelProperties|null $channel_properties channel_properties
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


