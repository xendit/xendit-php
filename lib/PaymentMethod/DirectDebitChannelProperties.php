<?php
/**
 * DirectDebitChannelProperties
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
 * DirectDebitChannelProperties Class Doc Comment
 *
 * @category Class
 * @description Direct Debit Channel Properties
 * @package  Xendit
 * @implements \ArrayAccess<string, mixed>
 */
class DirectDebitChannelProperties implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'DirectDebitChannelProperties';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'success_return_url' => 'string',
        'failure_return_url' => 'string',
        'mobile_number' => 'string',
        'card_last_four' => 'string',
        'card_expiry' => 'string',
        'email' => 'string',
        'identity_document_number' => 'string',
        'require_auth' => 'bool',
        'account_number' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'success_return_url' => 'uri',
        'failure_return_url' => 'uri',
        'mobile_number' => null,
        'card_last_four' => null,
        'card_expiry' => null,
        'email' => null,
        'identity_document_number' => null,
        'require_auth' => null,
        'account_number' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'success_return_url' => false,
		'failure_return_url' => true,
		'mobile_number' => true,
		'card_last_four' => true,
		'card_expiry' => true,
		'email' => true,
		'identity_document_number' => true,
		'require_auth' => true,
		'account_number' => true
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
        'success_return_url' => 'success_return_url',
        'failure_return_url' => 'failure_return_url',
        'mobile_number' => 'mobile_number',
        'card_last_four' => 'card_last_four',
        'card_expiry' => 'card_expiry',
        'email' => 'email',
        'identity_document_number' => 'identity_document_number',
        'require_auth' => 'require_auth',
        'account_number' => 'account_number'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'success_return_url' => 'setSuccessReturnUrl',
        'failure_return_url' => 'setFailureReturnUrl',
        'mobile_number' => 'setMobileNumber',
        'card_last_four' => 'setCardLastFour',
        'card_expiry' => 'setCardExpiry',
        'email' => 'setEmail',
        'identity_document_number' => 'setIdentityDocumentNumber',
        'require_auth' => 'setRequireAuth',
        'account_number' => 'setAccountNumber'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'success_return_url' => 'getSuccessReturnUrl',
        'failure_return_url' => 'getFailureReturnUrl',
        'mobile_number' => 'getMobileNumber',
        'card_last_four' => 'getCardLastFour',
        'card_expiry' => 'getCardExpiry',
        'email' => 'getEmail',
        'identity_document_number' => 'getIdentityDocumentNumber',
        'require_auth' => 'getRequireAuth',
        'account_number' => 'getAccountNumber'
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
        $this->setIfExists('success_return_url', $data ?? [], null);
        $this->setIfExists('failure_return_url', $data ?? [], null);
        $this->setIfExists('mobile_number', $data ?? [], null);
        $this->setIfExists('card_last_four', $data ?? [], null);
        $this->setIfExists('card_expiry', $data ?? [], null);
        $this->setIfExists('email', $data ?? [], null);
        $this->setIfExists('identity_document_number', $data ?? [], null);
        $this->setIfExists('require_auth', $data ?? [], null);
        $this->setIfExists('account_number', $data ?? [], null);
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
     * Gets success_return_url
     *
     * @return string|null
     */
    public function getSuccessReturnUrl()
    {
        return $this->container['success_return_url'];
    }

    /**
     * Sets success_return_url
     *
     * @param string|null $success_return_url success_return_url
     *
     * @return self
     */
    public function setSuccessReturnUrl($success_return_url)
    {
        if (is_null($success_return_url)) {
            throw new \InvalidArgumentException('non-nullable success_return_url cannot be null');
        }
        $this->container['success_return_url'] = $success_return_url;

        return $this;
    }

    /**
     * Gets failure_return_url
     *
     * @return string|null
     */
    public function getFailureReturnUrl()
    {
        return $this->container['failure_return_url'];
    }

    /**
     * Sets failure_return_url
     *
     * @param string|null $failure_return_url failure_return_url
     *
     * @return self
     */
    public function setFailureReturnUrl($failure_return_url)
    {
        if (is_null($failure_return_url)) {
            array_push($this->openAPINullablesSetToNull, 'failure_return_url');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('failure_return_url', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['failure_return_url'] = $failure_return_url;

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
     * @param string|null $mobile_number Mobile number of the customer registered to the partner channel
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
     * Gets card_last_four
     *
     * @return string|null
     */
    public function getCardLastFour()
    {
        return $this->container['card_last_four'];
    }

    /**
     * Sets card_last_four
     *
     * @param string|null $card_last_four Last four digits of the debit card
     *
     * @return self
     */
    public function setCardLastFour($card_last_four)
    {
        if (is_null($card_last_four)) {
            array_push($this->openAPINullablesSetToNull, 'card_last_four');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('card_last_four', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['card_last_four'] = $card_last_four;

        return $this;
    }

    /**
     * Gets card_expiry
     *
     * @return string|null
     */
    public function getCardExpiry()
    {
        return $this->container['card_expiry'];
    }

    /**
     * Sets card_expiry
     *
     * @param string|null $card_expiry Expiry month and year of the debit card (in MM/YY format)
     *
     * @return self
     */
    public function setCardExpiry($card_expiry)
    {
        if (is_null($card_expiry)) {
            array_push($this->openAPINullablesSetToNull, 'card_expiry');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('card_expiry', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['card_expiry'] = $card_expiry;

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
     * @param string|null $email Email address of the customer that is registered to the partner channel
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
     * Gets identity_document_number
     *
     * @return string|null
     */
    public function getIdentityDocumentNumber()
    {
        return $this->container['identity_document_number'];
    }

    /**
     * Sets identity_document_number
     *
     * @param string|null $identity_document_number Identity number of the customer registered to the partner channel
     *
     * @return self
     */
    public function setIdentityDocumentNumber($identity_document_number)
    {
        if (is_null($identity_document_number)) {
            array_push($this->openAPINullablesSetToNull, 'identity_document_number');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('identity_document_number', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['identity_document_number'] = $identity_document_number;

        return $this;
    }

    /**
     * Gets require_auth
     *
     * @return bool|null
     */
    public function getRequireAuth()
    {
        return $this->container['require_auth'];
    }

    /**
     * Sets require_auth
     *
     * @param bool|null $require_auth require_auth
     *
     * @return self
     */
    public function setRequireAuth($require_auth)
    {
        if (is_null($require_auth)) {
            array_push($this->openAPINullablesSetToNull, 'require_auth');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('require_auth', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['require_auth'] = $require_auth;

        return $this;
    }

    /**
     * Gets account_number
     *
     * @return string|null
     */
    public function getAccountNumber()
    {
        return $this->container['account_number'];
    }

    /**
     * Sets account_number
     *
     * @param string|null $account_number Account number of the customer
     *
     * @return self
     */
    public function setAccountNumber($account_number)
    {
        if (is_null($account_number)) {
            array_push($this->openAPINullablesSetToNull, 'account_number');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('account_number', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['account_number'] = $account_number;

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


