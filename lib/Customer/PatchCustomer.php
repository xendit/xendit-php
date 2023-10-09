<?php
/**
 * PatchCustomer
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
 * PatchCustomer Class Doc Comment
 *
 * @category Class
 * @package  Xendit
 * @implements \ArrayAccess<string, mixed>
 */
class PatchCustomer implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'PatchCustomer';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'client_name' => 'string',
        'reference_id' => 'string',
        'individual_detail' => '\Xendit\Customer\IndividualDetail',
        'business_detail' => '\Xendit\Customer\BusinessDetail',
        'description' => 'string',
        'email' => 'string',
        'mobile_number' => 'string',
        'phone_number' => 'string',
        'metadata' => 'object',
        'addresses' => '\Xendit\Customer\AddressRequest[]',
        'identity_accounts' => '\Xendit\Customer\IdentityAccountRequest[]',
        'kyc_documents' => '\Xendit\Customer\KYCDocumentRequest[]',
        'status' => '\Xendit\Customer\EndCustomerStatus'
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
        'individual_detail' => null,
        'business_detail' => null,
        'description' => null,
        'email' => 'email',
        'mobile_number' => 'E164',
        'phone_number' => 'E164',
        'metadata' => null,
        'addresses' => null,
        'identity_accounts' => null,
        'kyc_documents' => null,
        'status' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'client_name' => true,
		'reference_id' => true,
		'individual_detail' => true,
		'business_detail' => true,
		'description' => true,
		'email' => true,
		'mobile_number' => true,
		'phone_number' => true,
		'metadata' => true,
		'addresses' => true,
		'identity_accounts' => true,
		'kyc_documents' => true,
		'status' => true
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
        'individual_detail' => 'individual_detail',
        'business_detail' => 'business_detail',
        'description' => 'description',
        'email' => 'email',
        'mobile_number' => 'mobile_number',
        'phone_number' => 'phone_number',
        'metadata' => 'metadata',
        'addresses' => 'addresses',
        'identity_accounts' => 'identity_accounts',
        'kyc_documents' => 'kyc_documents',
        'status' => 'status'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'client_name' => 'setClientName',
        'reference_id' => 'setReferenceId',
        'individual_detail' => 'setIndividualDetail',
        'business_detail' => 'setBusinessDetail',
        'description' => 'setDescription',
        'email' => 'setEmail',
        'mobile_number' => 'setMobileNumber',
        'phone_number' => 'setPhoneNumber',
        'metadata' => 'setMetadata',
        'addresses' => 'setAddresses',
        'identity_accounts' => 'setIdentityAccounts',
        'kyc_documents' => 'setKycDocuments',
        'status' => 'setStatus'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'client_name' => 'getClientName',
        'reference_id' => 'getReferenceId',
        'individual_detail' => 'getIndividualDetail',
        'business_detail' => 'getBusinessDetail',
        'description' => 'getDescription',
        'email' => 'getEmail',
        'mobile_number' => 'getMobileNumber',
        'phone_number' => 'getPhoneNumber',
        'metadata' => 'getMetadata',
        'addresses' => 'getAddresses',
        'identity_accounts' => 'getIdentityAccounts',
        'kyc_documents' => 'getKycDocuments',
        'status' => 'getStatus'
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
        $this->setIfExists('client_name', $data ?? [], null);
        $this->setIfExists('reference_id', $data ?? [], null);
        $this->setIfExists('individual_detail', $data ?? [], null);
        $this->setIfExists('business_detail', $data ?? [], null);
        $this->setIfExists('description', $data ?? [], null);
        $this->setIfExists('email', $data ?? [], null);
        $this->setIfExists('mobile_number', $data ?? [], null);
        $this->setIfExists('phone_number', $data ?? [], null);
        $this->setIfExists('metadata', $data ?? [], null);
        $this->setIfExists('addresses', $data ?? [], null);
        $this->setIfExists('identity_accounts', $data ?? [], null);
        $this->setIfExists('kyc_documents', $data ?? [], null);
        $this->setIfExists('status', $data ?? [], null);
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

        if (!is_null($this->container['reference_id']) && (mb_strlen($this->container['reference_id']) > 255)) {
            $invalidProperties[] = "invalid value for 'reference_id', the character length must be smaller than or equal to 255.";
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
            array_push($this->openAPINullablesSetToNull, 'client_name');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('client_name', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['client_name'] = $client_name;

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
     * @param string|null $reference_id Merchant's reference of this end customer, eg Merchant's user's id. Must be unique.
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
        if (!is_null($reference_id) && (mb_strlen($reference_id) > 255)) {
            throw new \InvalidArgumentException('invalid length for $reference_id when calling PatchCustomer., must be smaller than or equal to 255.');
        }

        $this->container['reference_id'] = $reference_id;

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
            throw new \InvalidArgumentException('invalid length for $description when calling PatchCustomer., must be smaller than or equal to 1000.');
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
            array_push($this->openAPINullablesSetToNull, 'email');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('email', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
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
            array_push($this->openAPINullablesSetToNull, 'mobile_number');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('mobile_number', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
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
            array_push($this->openAPINullablesSetToNull, 'phone_number');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('phone_number', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['phone_number'] = $phone_number;

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
            array_push($this->openAPINullablesSetToNull, 'addresses');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('addresses', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
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
            array_push($this->openAPINullablesSetToNull, 'identity_accounts');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('identity_accounts', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
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
            array_push($this->openAPINullablesSetToNull, 'kyc_documents');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('kyc_documents', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['kyc_documents'] = $kyc_documents;

        return $this;
    }

    /**
     * Gets status
     *
     * @return \Customer\EndCustomerStatus|null
     */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
     * Sets status
     *
     * @param \Customer\EndCustomerStatus|null $status status
     *
     * @return self
     */
    public function setStatus($status)
    {
        if (is_null($status)) {
            array_push($this->openAPINullablesSetToNull, 'status');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('status', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['status'] = $status;

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


