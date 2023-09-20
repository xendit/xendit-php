<?php
/**
 * CreateInvoiceRequest
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
 * CreateInvoiceRequest Class Doc Comment
 *
 * @category Class
 * @description An object representing for an invoice creation request.
 * @package  Xendit
 * @implements \ArrayAccess<string, mixed>
 */
class CreateInvoiceRequest implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'CreateInvoiceRequest';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'external_id' => 'string',
        'amount' => 'float',
        'payer_email' => 'string',
        'description' => 'string',
        'invoice_duration' => 'string',
        'callback_virtual_account_id' => 'string',
        'should_send_email' => 'bool',
        'customer' => '\Xendit\Invoice\CustomerObject',
        'customer_notification_preference' => '\Xendit\Invoice\NotificationPreference',
        'success_redirect_url' => 'string',
        'failure_redirect_url' => 'string',
        'payment_methods' => 'string[]',
        'mid_label' => 'string',
        'should_authenticate_credit_card' => 'bool',
        'currency' => 'string',
        'reminder_time' => 'float',
        'local' => 'string',
        'reminder_time_unit' => 'string',
        'items' => '\Xendit\Invoice\InvoiceItem[]',
        'fees' => '\Xendit\Invoice\InvoiceFee[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'external_id' => null,
        'amount' => null,
        'payer_email' => null,
        'description' => null,
        'invoice_duration' => null,
        'callback_virtual_account_id' => null,
        'should_send_email' => null,
        'customer' => null,
        'customer_notification_preference' => null,
        'success_redirect_url' => null,
        'failure_redirect_url' => null,
        'payment_methods' => null,
        'mid_label' => null,
        'should_authenticate_credit_card' => null,
        'currency' => null,
        'reminder_time' => null,
        'local' => null,
        'reminder_time_unit' => null,
        'items' => null,
        'fees' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'external_id' => false,
		'amount' => false,
		'payer_email' => false,
		'description' => false,
		'invoice_duration' => false,
		'callback_virtual_account_id' => false,
		'should_send_email' => false,
		'customer' => false,
		'customer_notification_preference' => false,
		'success_redirect_url' => false,
		'failure_redirect_url' => false,
		'payment_methods' => false,
		'mid_label' => false,
		'should_authenticate_credit_card' => false,
		'currency' => false,
		'reminder_time' => false,
		'local' => false,
		'reminder_time_unit' => false,
		'items' => false,
		'fees' => false
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
        'external_id' => 'external_id',
        'amount' => 'amount',
        'payer_email' => 'payer_email',
        'description' => 'description',
        'invoice_duration' => 'invoice_duration',
        'callback_virtual_account_id' => 'callback_virtual_account_id',
        'should_send_email' => 'should_send_email',
        'customer' => 'customer',
        'customer_notification_preference' => 'customer_notification_preference',
        'success_redirect_url' => 'success_redirect_url',
        'failure_redirect_url' => 'failure_redirect_url',
        'payment_methods' => 'payment_methods',
        'mid_label' => 'mid_label',
        'should_authenticate_credit_card' => 'should_authenticate_credit_card',
        'currency' => 'currency',
        'reminder_time' => 'reminder_time',
        'local' => 'local',
        'reminder_time_unit' => 'reminder_time_unit',
        'items' => 'items',
        'fees' => 'fees'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'external_id' => 'setExternalId',
        'amount' => 'setAmount',
        'payer_email' => 'setPayerEmail',
        'description' => 'setDescription',
        'invoice_duration' => 'setInvoiceDuration',
        'callback_virtual_account_id' => 'setCallbackVirtualAccountId',
        'should_send_email' => 'setShouldSendEmail',
        'customer' => 'setCustomer',
        'customer_notification_preference' => 'setCustomerNotificationPreference',
        'success_redirect_url' => 'setSuccessRedirectUrl',
        'failure_redirect_url' => 'setFailureRedirectUrl',
        'payment_methods' => 'setPaymentMethods',
        'mid_label' => 'setMidLabel',
        'should_authenticate_credit_card' => 'setShouldAuthenticateCreditCard',
        'currency' => 'setCurrency',
        'reminder_time' => 'setReminderTime',
        'local' => 'setLocal',
        'reminder_time_unit' => 'setReminderTimeUnit',
        'items' => 'setItems',
        'fees' => 'setFees'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'external_id' => 'getExternalId',
        'amount' => 'getAmount',
        'payer_email' => 'getPayerEmail',
        'description' => 'getDescription',
        'invoice_duration' => 'getInvoiceDuration',
        'callback_virtual_account_id' => 'getCallbackVirtualAccountId',
        'should_send_email' => 'getShouldSendEmail',
        'customer' => 'getCustomer',
        'customer_notification_preference' => 'getCustomerNotificationPreference',
        'success_redirect_url' => 'getSuccessRedirectUrl',
        'failure_redirect_url' => 'getFailureRedirectUrl',
        'payment_methods' => 'getPaymentMethods',
        'mid_label' => 'getMidLabel',
        'should_authenticate_credit_card' => 'getShouldAuthenticateCreditCard',
        'currency' => 'getCurrency',
        'reminder_time' => 'getReminderTime',
        'local' => 'getLocal',
        'reminder_time_unit' => 'getReminderTimeUnit',
        'items' => 'getItems',
        'fees' => 'getFees'
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
        $this->setIfExists('external_id', $data ?? [], null);
        $this->setIfExists('amount', $data ?? [], null);
        $this->setIfExists('payer_email', $data ?? [], null);
        $this->setIfExists('description', $data ?? [], null);
        $this->setIfExists('invoice_duration', $data ?? [], null);
        $this->setIfExists('callback_virtual_account_id', $data ?? [], null);
        $this->setIfExists('should_send_email', $data ?? [], null);
        $this->setIfExists('customer', $data ?? [], null);
        $this->setIfExists('customer_notification_preference', $data ?? [], null);
        $this->setIfExists('success_redirect_url', $data ?? [], null);
        $this->setIfExists('failure_redirect_url', $data ?? [], null);
        $this->setIfExists('payment_methods', $data ?? [], null);
        $this->setIfExists('mid_label', $data ?? [], null);
        $this->setIfExists('should_authenticate_credit_card', $data ?? [], null);
        $this->setIfExists('currency', $data ?? [], null);
        $this->setIfExists('reminder_time', $data ?? [], null);
        $this->setIfExists('local', $data ?? [], null);
        $this->setIfExists('reminder_time_unit', $data ?? [], null);
        $this->setIfExists('items', $data ?? [], null);
        $this->setIfExists('fees', $data ?? [], null);
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
        if ($this->container['amount'] === null) {
            $invalidProperties[] = "'amount' can't be null";
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
     * @param string $external_id The external ID of the invoice.
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
     * @param float $amount The invoice amount.
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
     * @param string|null $description A description of the payment.
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
     * Gets invoice_duration
     *
     * @return string|null
     */
    public function getInvoiceDuration()
    {
        return $this->container['invoice_duration'];
    }

    /**
     * Sets invoice_duration
     *
     * @param string|null $invoice_duration The duration of the invoice.
     *
     * @return self
     */
    public function setInvoiceDuration($invoice_duration)
    {
        if (is_null($invoice_duration)) {
            throw new \InvalidArgumentException('non-nullable invoice_duration cannot be null');
        }
        $this->container['invoice_duration'] = $invoice_duration;

        return $this;
    }

    /**
     * Gets callback_virtual_account_id
     *
     * @return string|null
     */
    public function getCallbackVirtualAccountId()
    {
        return $this->container['callback_virtual_account_id'];
    }

    /**
     * Sets callback_virtual_account_id
     *
     * @param string|null $callback_virtual_account_id The ID of the callback virtual account.
     *
     * @return self
     */
    public function setCallbackVirtualAccountId($callback_virtual_account_id)
    {
        if (is_null($callback_virtual_account_id)) {
            throw new \InvalidArgumentException('non-nullable callback_virtual_account_id cannot be null');
        }
        $this->container['callback_virtual_account_id'] = $callback_virtual_account_id;

        return $this;
    }

    /**
     * Gets should_send_email
     *
     * @return bool|null
     */
    public function getShouldSendEmail()
    {
        return $this->container['should_send_email'];
    }

    /**
     * Sets should_send_email
     *
     * @param bool|null $should_send_email Indicates whether email notifications should be sent.
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
     * Gets payment_methods
     *
     * @return string[]|null
     */
    public function getPaymentMethods()
    {
        return $this->container['payment_methods'];
    }

    /**
     * Sets payment_methods
     *
     * @param string[]|null $payment_methods An array of available payment methods.
     *
     * @return self
     */
    public function setPaymentMethods($payment_methods)
    {
        if (is_null($payment_methods)) {
            throw new \InvalidArgumentException('non-nullable payment_methods cannot be null');
        }
        $this->container['payment_methods'] = $payment_methods;

        return $this;
    }

    /**
     * Gets mid_label
     *
     * @return string|null
     */
    public function getMidLabel()
    {
        return $this->container['mid_label'];
    }

    /**
     * Sets mid_label
     *
     * @param string|null $mid_label The middle label.
     *
     * @return self
     */
    public function setMidLabel($mid_label)
    {
        if (is_null($mid_label)) {
            throw new \InvalidArgumentException('non-nullable mid_label cannot be null');
        }
        $this->container['mid_label'] = $mid_label;

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
     * @return string|null
     */
    public function getCurrency()
    {
        return $this->container['currency'];
    }

    /**
     * Sets currency
     *
     * @param string|null $currency The currency of the invoice.
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
     * Gets reminder_time
     *
     * @return float|null
     */
    public function getReminderTime()
    {
        return $this->container['reminder_time'];
    }

    /**
     * Sets reminder_time
     *
     * @param float|null $reminder_time The reminder time.
     *
     * @return self
     */
    public function setReminderTime($reminder_time)
    {
        if (is_null($reminder_time)) {
            throw new \InvalidArgumentException('non-nullable reminder_time cannot be null');
        }
        $this->container['reminder_time'] = $reminder_time;

        return $this;
    }

    /**
     * Gets local
     *
     * @return string|null
     */
    public function getLocal()
    {
        return $this->container['local'];
    }

    /**
     * Sets local
     *
     * @param string|null $local The local.
     *
     * @return self
     */
    public function setLocal($local)
    {
        if (is_null($local)) {
            throw new \InvalidArgumentException('non-nullable local cannot be null');
        }
        $this->container['local'] = $local;

        return $this;
    }

    /**
     * Gets reminder_time_unit
     *
     * @return string|null
     */
    public function getReminderTimeUnit()
    {
        return $this->container['reminder_time_unit'];
    }

    /**
     * Sets reminder_time_unit
     *
     * @param string|null $reminder_time_unit The unit of the reminder time.
     *
     * @return self
     */
    public function setReminderTimeUnit($reminder_time_unit)
    {
        if (is_null($reminder_time_unit)) {
            throw new \InvalidArgumentException('non-nullable reminder_time_unit cannot be null');
        }
        $this->container['reminder_time_unit'] = $reminder_time_unit;

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


