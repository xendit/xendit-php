<?php
/**
 * PaymentMethod
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
 * PaymentMethod Class Doc Comment
 *
 * @category Class
 * @package  Xendit
 * @implements \ArrayAccess<string, mixed>
 */
class PaymentMethod implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'PaymentMethod';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'id' => 'string',
        'business_id' => 'string',
        'type' => '\Xendit\PaymentMethod\PaymentMethodType',
        'country' => '\Xendit\PaymentMethod\PaymentMethodCountry',
        'customer_id' => 'string',
        'customer' => 'object',
        'reference_id' => 'string',
        'description' => 'string',
        'status' => '\Xendit\PaymentMethod\PaymentMethodStatus',
        'reusability' => '\Xendit\PaymentMethod\PaymentMethodReusability',
        'actions' => '\Xendit\PaymentMethod\PaymentMethodAction[]',
        'metadata' => 'object',
        'billing_information' => '\Xendit\PaymentMethod\BillingInformation',
        'failure_code' => 'string',
        'created' => '\DateTime',
        'updated' => '\DateTime',
        'ewallet' => '\Xendit\PaymentMethod\EWallet',
        'direct_debit' => '\Xendit\PaymentMethod\DirectDebit',
        'over_the_counter' => '\Xendit\PaymentMethod\OverTheCounter',
        'card' => '\Xendit\PaymentMethod\Card',
        'qr_code' => '\Xendit\PaymentMethod\QRCode',
        'virtual_account' => '\Xendit\PaymentMethod\VirtualAccount'
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
        'business_id' => null,
        'type' => null,
        'country' => null,
        'customer_id' => null,
        'customer' => null,
        'reference_id' => null,
        'description' => null,
        'status' => null,
        'reusability' => null,
        'actions' => null,
        'metadata' => null,
        'billing_information' => null,
        'failure_code' => null,
        'created' => 'date-time',
        'updated' => 'date-time',
        'ewallet' => null,
        'direct_debit' => null,
        'over_the_counter' => null,
        'card' => null,
        'qr_code' => null,
        'virtual_account' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'id' => false,
		'business_id' => false,
		'type' => false,
		'country' => false,
		'customer_id' => true,
		'customer' => true,
		'reference_id' => false,
		'description' => true,
		'status' => false,
		'reusability' => false,
		'actions' => false,
		'metadata' => true,
		'billing_information' => true,
		'failure_code' => true,
		'created' => false,
		'updated' => false,
		'ewallet' => true,
		'direct_debit' => true,
		'over_the_counter' => true,
		'card' => true,
		'qr_code' => true,
		'virtual_account' => true
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
        'business_id' => 'business_id',
        'type' => 'type',
        'country' => 'country',
        'customer_id' => 'customer_id',
        'customer' => 'customer',
        'reference_id' => 'reference_id',
        'description' => 'description',
        'status' => 'status',
        'reusability' => 'reusability',
        'actions' => 'actions',
        'metadata' => 'metadata',
        'billing_information' => 'billing_information',
        'failure_code' => 'failure_code',
        'created' => 'created',
        'updated' => 'updated',
        'ewallet' => 'ewallet',
        'direct_debit' => 'direct_debit',
        'over_the_counter' => 'over_the_counter',
        'card' => 'card',
        'qr_code' => 'qr_code',
        'virtual_account' => 'virtual_account'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'business_id' => 'setBusinessId',
        'type' => 'setType',
        'country' => 'setCountry',
        'customer_id' => 'setCustomerId',
        'customer' => 'setCustomer',
        'reference_id' => 'setReferenceId',
        'description' => 'setDescription',
        'status' => 'setStatus',
        'reusability' => 'setReusability',
        'actions' => 'setActions',
        'metadata' => 'setMetadata',
        'billing_information' => 'setBillingInformation',
        'failure_code' => 'setFailureCode',
        'created' => 'setCreated',
        'updated' => 'setUpdated',
        'ewallet' => 'setEwallet',
        'direct_debit' => 'setDirectDebit',
        'over_the_counter' => 'setOverTheCounter',
        'card' => 'setCard',
        'qr_code' => 'setQrCode',
        'virtual_account' => 'setVirtualAccount'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'business_id' => 'getBusinessId',
        'type' => 'getType',
        'country' => 'getCountry',
        'customer_id' => 'getCustomerId',
        'customer' => 'getCustomer',
        'reference_id' => 'getReferenceId',
        'description' => 'getDescription',
        'status' => 'getStatus',
        'reusability' => 'getReusability',
        'actions' => 'getActions',
        'metadata' => 'getMetadata',
        'billing_information' => 'getBillingInformation',
        'failure_code' => 'getFailureCode',
        'created' => 'getCreated',
        'updated' => 'getUpdated',
        'ewallet' => 'getEwallet',
        'direct_debit' => 'getDirectDebit',
        'over_the_counter' => 'getOverTheCounter',
        'card' => 'getCard',
        'qr_code' => 'getQrCode',
        'virtual_account' => 'getVirtualAccount'
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
        $this->setIfExists('business_id', $data ?? [], null);
        $this->setIfExists('type', $data ?? [], null);
        $this->setIfExists('country', $data ?? [], null);
        $this->setIfExists('customer_id', $data ?? [], null);
        $this->setIfExists('customer', $data ?? [], null);
        $this->setIfExists('reference_id', $data ?? [], null);
        $this->setIfExists('description', $data ?? [], null);
        $this->setIfExists('status', $data ?? [], null);
        $this->setIfExists('reusability', $data ?? [], null);
        $this->setIfExists('actions', $data ?? [], null);
        $this->setIfExists('metadata', $data ?? [], null);
        $this->setIfExists('billing_information', $data ?? [], null);
        $this->setIfExists('failure_code', $data ?? [], null);
        $this->setIfExists('created', $data ?? [], null);
        $this->setIfExists('updated', $data ?? [], null);
        $this->setIfExists('ewallet', $data ?? [], null);
        $this->setIfExists('direct_debit', $data ?? [], null);
        $this->setIfExists('over_the_counter', $data ?? [], null);
        $this->setIfExists('card', $data ?? [], null);
        $this->setIfExists('qr_code', $data ?? [], null);
        $this->setIfExists('virtual_account', $data ?? [], null);
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
     * Gets business_id
     *
     * @return string|null
     */
    public function getBusinessId()
    {
        return $this->container['business_id'];
    }

    /**
     * Sets business_id
     *
     * @param string|null $business_id business_id
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
     * Gets type
     *
     * @return \PaymentMethod\PaymentMethodType|null
     */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
     * Sets type
     *
     * @param \PaymentMethod\PaymentMethodType|null $type type
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
     * Gets country
     *
     * @return \PaymentMethod\PaymentMethodCountry|null
     */
    public function getCountry()
    {
        return $this->container['country'];
    }

    /**
     * Sets country
     *
     * @param \PaymentMethod\PaymentMethodCountry|null $country country
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
            throw new \InvalidArgumentException('non-nullable reference_id cannot be null');
        }
        $this->container['reference_id'] = $reference_id;

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
     * Gets status
     *
     * @return \PaymentMethod\PaymentMethodStatus|null
     */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
     * Sets status
     *
     * @param \PaymentMethod\PaymentMethodStatus|null $status status
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
     * Gets reusability
     *
     * @return \PaymentMethod\PaymentMethodReusability|null
     */
    public function getReusability()
    {
        return $this->container['reusability'];
    }

    /**
     * Sets reusability
     *
     * @param \PaymentMethod\PaymentMethodReusability|null $reusability reusability
     *
     * @return self
     */
    public function setReusability($reusability)
    {
        if (is_null($reusability)) {
            throw new \InvalidArgumentException('non-nullable reusability cannot be null');
        }
        $this->container['reusability'] = $reusability;

        return $this;
    }

    /**
     * Gets actions
     *
     * @return \PaymentMethod\PaymentMethodAction[]|null
     */
    public function getActions()
    {
        return $this->container['actions'];
    }

    /**
     * Sets actions
     *
     * @param \PaymentMethod\PaymentMethodAction[]|null $actions actions
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
     * Gets billing_information
     *
     * @return \PaymentMethod\BillingInformation|null
     */
    public function getBillingInformation()
    {
        return $this->container['billing_information'];
    }

    /**
     * Sets billing_information
     *
     * @param \PaymentMethod\BillingInformation|null $billing_information billing_information
     *
     * @return self
     */
    public function setBillingInformation($billing_information)
    {
        if (is_null($billing_information)) {
            array_push($this->openAPINullablesSetToNull, 'billing_information');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('billing_information', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['billing_information'] = $billing_information;

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
     * Gets created
     *
     * @return \DateTime|null
     */
    public function getCreated()
    {
        return $this->container['created'];
    }

    /**
     * Sets created
     *
     * @param \DateTime|null $created created
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
     * @return \DateTime|null
     */
    public function getUpdated()
    {
        return $this->container['updated'];
    }

    /**
     * Sets updated
     *
     * @param \DateTime|null $updated updated
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
     * Gets ewallet
     *
     * @return \PaymentMethod\EWallet|null
     */
    public function getEwallet()
    {
        return $this->container['ewallet'];
    }

    /**
     * Sets ewallet
     *
     * @param \PaymentMethod\EWallet|null $ewallet ewallet
     *
     * @return self
     */
    public function setEwallet($ewallet)
    {
        if (is_null($ewallet)) {
            array_push($this->openAPINullablesSetToNull, 'ewallet');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('ewallet', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['ewallet'] = $ewallet;

        return $this;
    }

    /**
     * Gets direct_debit
     *
     * @return \PaymentMethod\DirectDebit|null
     */
    public function getDirectDebit()
    {
        return $this->container['direct_debit'];
    }

    /**
     * Sets direct_debit
     *
     * @param \PaymentMethod\DirectDebit|null $direct_debit direct_debit
     *
     * @return self
     */
    public function setDirectDebit($direct_debit)
    {
        if (is_null($direct_debit)) {
            array_push($this->openAPINullablesSetToNull, 'direct_debit');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('direct_debit', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['direct_debit'] = $direct_debit;

        return $this;
    }

    /**
     * Gets over_the_counter
     *
     * @return \PaymentMethod\OverTheCounter|null
     */
    public function getOverTheCounter()
    {
        return $this->container['over_the_counter'];
    }

    /**
     * Sets over_the_counter
     *
     * @param \PaymentMethod\OverTheCounter|null $over_the_counter over_the_counter
     *
     * @return self
     */
    public function setOverTheCounter($over_the_counter)
    {
        if (is_null($over_the_counter)) {
            array_push($this->openAPINullablesSetToNull, 'over_the_counter');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('over_the_counter', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['over_the_counter'] = $over_the_counter;

        return $this;
    }

    /**
     * Gets card
     *
     * @return \PaymentMethod\Card|null
     */
    public function getCard()
    {
        return $this->container['card'];
    }

    /**
     * Sets card
     *
     * @param \PaymentMethod\Card|null $card card
     *
     * @return self
     */
    public function setCard($card)
    {
        if (is_null($card)) {
            array_push($this->openAPINullablesSetToNull, 'card');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('card', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['card'] = $card;

        return $this;
    }

    /**
     * Gets qr_code
     *
     * @return \PaymentMethod\QRCode|null
     */
    public function getQrCode()
    {
        return $this->container['qr_code'];
    }

    /**
     * Sets qr_code
     *
     * @param \PaymentMethod\QRCode|null $qr_code qr_code
     *
     * @return self
     */
    public function setQrCode($qr_code)
    {
        if (is_null($qr_code)) {
            array_push($this->openAPINullablesSetToNull, 'qr_code');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('qr_code', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['qr_code'] = $qr_code;

        return $this;
    }

    /**
     * Gets virtual_account
     *
     * @return \PaymentMethod\VirtualAccount|null
     */
    public function getVirtualAccount()
    {
        return $this->container['virtual_account'];
    }

    /**
     * Sets virtual_account
     *
     * @param \PaymentMethod\VirtualAccount|null $virtual_account virtual_account
     *
     * @return self
     */
    public function setVirtualAccount($virtual_account)
    {
        if (is_null($virtual_account)) {
            array_push($this->openAPINullablesSetToNull, 'virtual_account');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('virtual_account', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['virtual_account'] = $virtual_account;

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


