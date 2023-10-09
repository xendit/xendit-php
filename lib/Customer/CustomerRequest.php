<?php
/**
 * CustomerRequest
 *
 * PHP version 7.4
 *
 * @category Class
 * @package  Xendit
 */

/**
 * XENDIT SDK openapi spec
 *
 * The version of the OpenAPI document: 1.0.0
 */

/**
 * NOTE: This class is auto generated.
 * Do not edit the class manually.
 */

namespace Xendit\Customer;


use \ArrayAccess;
use \Xendit\ObjectSerializer;
use \Xendit\Model\ModelInterface;

/**
 * CustomerRequest Class Doc Comment
 *
 * @category Class
 * @package  Xendit
 * @implements \ArrayAccess<string, mixed>
 */
class CustomerRequest implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'CustomerRequest';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'client_name' => 'string',
        'reference_id' => 'string',
        'type' => 'string',
        'individual_detail' => '\Xendit\Customer\IndividualDetail',
        'business_detail' => '\Xendit\Customer\BusinessDetail',
        'description' => 'string',
        'email' => 'string',
        'mobile_number' => 'string',
        'phone_number' => 'string',
        'addresses' => '\Xendit\Customer\AddressRequest[]',
        'identity_accounts' => '\Xendit\Customer\IdentityAccountRequest[]',
        'kyc_documents' => '\Xendit\Customer\KYCDocumentRequest[]',
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
        'client_name' => null,
        'reference_id' => null,
        'type' => null,
        'individual_detail' => null,
        'business_detail' => null,
        'description' => null,
        'email' => 'email',
        'mobile_number' => 'E164',
        'phone_number' => 'E164',
        'addresses' => null,
        'identity_accounts' => null,
        'kyc_documents' => null,
        'metadata' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'client_name' => false,
		'reference_id' => false,
		'type' => false,
		'individual_detail' => true,
		'business_detail' => true,
		'description' => true,
		'email' => false,
		'mobile_number' => false,
		'phone_number' => false,
		'addresses' => false,
		'identity_accounts' => false,
		'kyc_documents' => false,
		'metadata' => false
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
        'client_name' => 'client_name',
        'reference_id' => 'reference_id',
        'type' => 'type',
        'individual_detail' => 'individual_detail',
        'business_detail' => 'business_detail',
        'description' => 'description',
        'email' => 'email',
        'mobile_number' => 'mobile_number',
        'phone_number' => 'phone_number',
        'addresses' => 'addresses',
        'identity_accounts' => 'identity_accounts',
        'kyc_documents' => 'kyc_documents',
        'metadata' => 'metadata'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'client_name' => 'setClientName',
        'reference_id' => 'setReferenceId',
        'type' => 'setType',
        'individual_detail' => 'setIndividualDetail',
        'business_detail' => 'setBusinessDetail',
        'description' => 'setDescription',
        'email' => 'setEmail',
        'mobile_number' => 'setMobileNumber',
        'phone_number' => 'setPhoneNumber',
        'addresses' => 'setAddresses',
        'identity_accounts' => 'setIdentityAccounts',
        'kyc_documents' => 'setKycDocuments',
        'metadata' => 'setMetadata'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'client_name' => 'getClientName',
        'reference_id' => 'getReferenceId',
        'type' => 'getType',
        'individual_detail' => 'getIndividualDetail',
        'business_detail' => 'getBusinessDetail',
        'description' => 'getDescription',
        'email' => 'getEmail',
        'mobile_number' => 'getMobileNumber',
        'phone_number' => 'getPhoneNumber',
        'addresses' => 'getAddresses',
        'identity_accounts' => 'getIdentityAccounts',
        'kyc_documents' => 'getKycDocuments',
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

    public const TYPE_INDIVIDUAL = 'INDIVIDUAL';
    public const TYPE_BUSINESS = 'BUSINESS';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getTypeAllowableValues()
    {
        return [
            self::TYPE_INDIVIDUAL,
            self::TYPE_BUSINESS,
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
        $this->setIfExists('client_name', $data ?? [], null);
        $this->setIfExists('reference_id', $data ?? [], null);
        $this->setIfExists('type', $data ?? [], 'INDIVIDUAL');
        $this->setIfExists('individual_detail', $data ?? [], null);
        $this->setIfExists('business_detail', $data ?? [], null);
        $this->setIfExists('description', $data ?? [], null);
        $this->setIfExists('email', $data ?? [], null);
        $this->setIfExists('mobile_number', $data ?? [], null);
        $this->setIfExists('phone_number', $data ?? [], null);
        $this->setIfExists('addresses', $data ?? [], null);
        $this->setIfExists('identity_accounts', $data ?? [], null);
        $this->setIfExists('kyc_documents', $data ?? [], null);
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

        if ($this->container['reference_id'] === null) {
            $invalidProperties[] = "'reference_id' can't be null";
        }
        if ((mb_strlen($this->container['reference_id']) > 255)) {
            $invalidProperties[] = "invalid value for 'reference_id', the character length must be smaller than or equal to 255.";
        }

        $allowedValues = $this->getTypeAllowableValues();
        if (!is_null($this->container['type']) && !in_array($this->container['type'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'type', must be one of '%s'",
                $this->container['type'],
                implode("', '", $allowedValues)
            );
        }

        if (!is_null($this->container['description']) && (mb_strlen($this->container['description']) > 1000)) {
            $invalidProperties[] = "invalid value for 'description', the character length must be smaller than or equal to 1000.";
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
     * Gets client_name
     *
     * @return string|null
     */
    public function getClientName()
    {
        return $this->container['client_name'];
    }

    /**
     * Sets client_name
     *
     * @param string|null $client_name Entity's name for this client
     *
     * @return self
     */
    public function setClientName($client_name)
    {
        if (is_null($client_name)) {
            throw new \InvalidArgumentException('non-nullable client_name cannot be null');
        }
        $this->container['client_name'] = $client_name;

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
     * @param string $reference_id Merchant's reference of this end customer, eg Merchant's user's id. Must be unique.
     *
     * @return self
     */
    public function setReferenceId($reference_id)
    {
        if (is_null($reference_id)) {
            throw new \InvalidArgumentException('non-nullable reference_id cannot be null');
        }
        if ((mb_strlen($reference_id) > 255)) {
            throw new \InvalidArgumentException('invalid length for $reference_id when calling CustomerRequest., must be smaller than or equal to 255.');
        }

        $this->container['reference_id'] = $reference_id;

        return $this;
    }

    /**
     * Gets type
     *
     * @return string|null
     */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
     * Sets type
     *
     * @param string|null $type type
     *
     * @return self
     */
    public function setType($type)
    {
        if (is_null($type)) {
            throw new \InvalidArgumentException('non-nullable type cannot be null');
        }
        $allowedValues = $this->getTypeAllowableValues();
        if (!in_array($type, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'type', must be one of '%s'",
                    $type,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['type'] = $type;

        return $this;
    }

    /**
     * Gets individual_detail
     *
     * @return \Customer\IndividualDetail|null
     */
    public function getIndividualDetail()
    {
        return $this->container['individual_detail'];
    }

    /**
     * Sets individual_detail
     *
     * @param \Customer\IndividualDetail|null $individual_detail individual_detail
     *
     * @return self
     */
    public function setIndividualDetail($individual_detail)
    {
        if (is_null($individual_detail)) {
            array_push($this->openAPINullablesSetToNull, 'individual_detail');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('individual_detail', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['individual_detail'] = $individual_detail;

        return $this;
    }

    /**
     * Gets business_detail
     *
     * @return \Customer\BusinessDetail|null
     */
    public function getBusinessDetail()
    {
        return $this->container['business_detail'];
    }

    /**
     * Sets business_detail
     *
     * @param \Customer\BusinessDetail|null $business_detail business_detail
     *
     * @return self
     */
    public function setBusinessDetail($business_detail)
    {
        if (is_null($business_detail)) {
            array_push($this->openAPINullablesSetToNull, 'business_detail');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('business_detail', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['business_detail'] = $business_detail;

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
        if (!is_null($description) && (mb_strlen($description) > 1000)) {
            throw new \InvalidArgumentException('invalid length for $description when calling CustomerRequest., must be smaller than or equal to 1000.');
        }

        $this->container['description'] = $description;

        return $this;
    }

    /**
     * Gets email
     *
     * @return string|null
     */
    public function getEmail()
    {
        return $this->container['email'];
    }

    /**
     * Sets email
     *
     * @param string|null $email email
     *
     * @return self
     */
    public function setEmail($email)
    {
        if (is_null($email)) {
            throw new \InvalidArgumentException('non-nullable email cannot be null');
        }
        $this->container['email'] = $email;

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
     * @param string|null $mobile_number mobile_number
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
     * Gets phone_number
     *
     * @return string|null
     */
    public function getPhoneNumber()
    {
        return $this->container['phone_number'];
    }

    /**
     * Sets phone_number
     *
     * @param string|null $phone_number phone_number
     *
     * @return self
     */
    public function setPhoneNumber($phone_number)
    {
        if (is_null($phone_number)) {
            throw new \InvalidArgumentException('non-nullable phone_number cannot be null');
        }
        $this->container['phone_number'] = $phone_number;

        return $this;
    }

    /**
     * Gets addresses
     *
     * @return \Customer\AddressRequest[]|null
     */
    public function getAddresses()
    {
        return $this->container['addresses'];
    }

    /**
     * Sets addresses
     *
     * @param \Customer\AddressRequest[]|null $addresses addresses
     *
     * @return self
     */
    public function setAddresses($addresses)
    {
        if (is_null($addresses)) {
            throw new \InvalidArgumentException('non-nullable addresses cannot be null');
        }
        $this->container['addresses'] = $addresses;

        return $this;
    }

    /**
     * Gets identity_accounts
     *
     * @return \Customer\IdentityAccountRequest[]|null
     */
    public function getIdentityAccounts()
    {
        return $this->container['identity_accounts'];
    }

    /**
     * Sets identity_accounts
     *
     * @param \Customer\IdentityAccountRequest[]|null $identity_accounts identity_accounts
     *
     * @return self
     */
    public function setIdentityAccounts($identity_accounts)
    {
        if (is_null($identity_accounts)) {
            throw new \InvalidArgumentException('non-nullable identity_accounts cannot be null');
        }
        $this->container['identity_accounts'] = $identity_accounts;

        return $this;
    }

    /**
     * Gets kyc_documents
     *
     * @return \Customer\KYCDocumentRequest[]|null
     */
    public function getKycDocuments()
    {
        return $this->container['kyc_documents'];
    }

    /**
     * Sets kyc_documents
     *
     * @param \Customer\KYCDocumentRequest[]|null $kyc_documents kyc_documents
     *
     * @return self
     */
    public function setKycDocuments($kyc_documents)
    {
        if (is_null($kyc_documents)) {
            throw new \InvalidArgumentException('non-nullable kyc_documents cannot be null');
        }
        $this->container['kyc_documents'] = $kyc_documents;

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
            throw new \InvalidArgumentException('non-nullable metadata cannot be null');
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


