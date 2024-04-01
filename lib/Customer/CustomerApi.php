<?php
/**
 * CustomerApi
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
 * NOTE: This class is auto generated
 * Do not edit the class manually.
 */

namespace Xendit\Customer;

use GuzzleHttp\Client;
use GuzzleHttp\ClientInterface;
use GuzzleHttp\Exception\ConnectException;
use GuzzleHttp\Exception\RequestException;
use GuzzleHttp\Psr7\MultipartStream;
use GuzzleHttp\Psr7\Request;
use GuzzleHttp\RequestOptions;
use Xendit\Model;
use Xendit\XenditSdkException;
use Xendit\Configuration;
use Xendit\HeaderSelector;
use Xendit\ObjectSerializer;

/**
 * CustomerApi Class Doc Comment
 *
 * @category Class
 * @package  Xendit
 */
class CustomerApi
{
    /**
     * @var ClientInterface
     */
    protected $client;

    /**
     * @var Configuration
     */
    protected $config;

    /**
     * @var HeaderSelector
     */
    protected $headerSelector;

    /**
     * @var int Host index
     */
    protected $hostIndex;

    /** @var string[] $contentTypes **/
    public const contentTypes = [
        'createCustomer' => [
            'application/json',
        ],
        'getCustomer' => [
            'application/json',
        ],
        'getCustomerByReferenceID' => [
            'application/json',
        ],
        'updateCustomer' => [
            'application/json',
        ],
    ];

/**
     * @param ClientInterface $client
     * @param Configuration   $config
     * @param HeaderSelector  $selector
     * @param int             $hostIndex (Optional) host index to select the list of hosts if defined in the OpenAPI spec
     */
    public function __construct(
        ClientInterface $client = null,
        Configuration $config = null,
        HeaderSelector $selector = null,
        $hostIndex = 0
    ) {
        $this->client = $client ?: new Client();
        $this->config = $config ?: Configuration::getDefaultConfiguration();
        $this->headerSelector = $selector ?: new HeaderSelector();
        $this->hostIndex = $hostIndex;
    }

    public function setApiKey($apiKey)
    {
        $this->config->setApiKey($apiKey);
        return $this;
    }

    /**
     * Set the host index
     *
     * @param int $hostIndex Host index (required)
     */
    public function setHostIndex($hostIndex): void
    {
        $this->hostIndex = $hostIndex;
    }

    /**
     * Get the host index
     *
     * @return int Host index
     */
    public function getHostIndex()
    {
        return $this->hostIndex;
    }

    /**
     * @return Configuration
     */
    public function getConfig()
    {
        return $this->config;
    }

    /**
     * Operation createCustomer
     *
     * Create Customer
     *
     * @param  string $idempotency_key A unique key to prevent processing duplicate requests. (optional)
     * @param  string $for_user_id The sub-account user-id that you want to make this transaction for. (optional)
     * @param  \Xendit\Customer\CustomerRequest $customer_request Request object for end customer object (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['createCustomer'] to see the possible values for this operation
     *
     * @throws \Xendit\XenditSdkException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Xendit\Customer\Customer
     */
    public function createCustomer($idempotency_key = null, $for_user_id = null, $customer_request = null, string $contentType = self::contentTypes['createCustomer'][0])
    {
        list($response) = $this->createCustomerWithHttpInfo($idempotency_key, $for_user_id, $customer_request, $contentType);
        return $response;
    }

    /**
     * Operation createCustomerWithHttpInfo
     *
     * Create Customer
     *
     * @param  string $idempotency_key A unique key to prevent processing duplicate requests. (optional)
     * @param  string $for_user_id The sub-account user-id that you want to make this transaction for. (optional)
     * @param  \Xendit\Customer\CustomerRequest $customer_request Request object for end customer object (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['createCustomer'] to see the possible values for this operation
     *
     * @throws \Xendit\XenditSdkException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Xendit\Customer\Customer, HTTP status code, HTTP response headers (array of strings)
     */
    public function createCustomerWithHttpInfo($idempotency_key = null, $for_user_id = null, $customer_request = null, string $contentType = self::contentTypes['createCustomer'][0])
    {
        $request = $this->createCustomerRequest($idempotency_key, $for_user_id, $customer_request, $contentType);

        $options = $this->createHttpClientOption();
        try {
            $response = $this->client->send($request, $options);
        } catch (RequestException $e) {
            throw new XenditSdkException(
                $e->getResponse() && $e->getResponse()->getBody() ? json_decode((string) $e->getResponse()->getBody()) : null,
                (string) $e->getCode(),
                $e->getMessage() ? $e->getMessage() : sprintf('Error connecting to the API (%s)', "createCustomerRequest")
            );
        } catch (ConnectException $e) {
            throw new XenditSdkException(
                null,
                (string) $e->getCode(),
                $e->getMessage() ? $e->getMessage() : sprintf('Error connecting to the API (%s)', "createCustomerRequest")
            );
        }  catch (GuzzleException $e) {
            throw new XenditSdkException(
                null,
                (string) $e->getCode(),
                $e->getMessage() ? $e->getMessage() : sprintf('Error instantiating client for API (%s)', "createCustomerRequest")
            );
        }

        $statusCode = $response->getStatusCode();

        if ($statusCode < 200 || $statusCode > 299) {
            $errBodyContent = $response->getBody() ? json_decode((string) $response->getBody()) : null;

            throw new XenditSdkException(
                $errBodyContent,
                (string) $statusCode,
                $response->getReasonPhrase()
            );
        }
        $returnType = '\Xendit\Customer\Customer';
        if ($returnType === '\SplFileObject') {
            $content = $response->getBody(); //stream goes to serializer
        } else {
            $content = (string) $response->getBody();
            if ($returnType !== 'string') {
                $content = json_decode($content);
            }
        }

        return [
            ObjectSerializer::deserialize($content, $returnType, []),
            $response->getStatusCode(),
            $response->getHeaders()
        ];
    }

    /**
     * Operation createCustomerAsync
     *
     * Create Customer
     *
     * @param  string $idempotency_key A unique key to prevent processing duplicate requests. (optional)
     * @param  string $for_user_id The sub-account user-id that you want to make this transaction for. (optional)
     * @param  \Xendit\Customer\CustomerRequest $customer_request Request object for end customer object (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['createCustomer'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function createCustomerAsync($idempotency_key = null, $for_user_id = null, $customer_request = null, string $contentType = self::contentTypes['createCustomer'][0])
    {
        return $this->createCustomerAsyncWithHttpInfo($idempotency_key, $for_user_id, $customer_request, $contentType)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation createCustomerAsyncWithHttpInfo
     *
     * Create Customer
     *
     * @param  string $idempotency_key A unique key to prevent processing duplicate requests. (optional)
     * @param  string $for_user_id The sub-account user-id that you want to make this transaction for. (optional)
     * @param  \Xendit\Customer\CustomerRequest $customer_request Request object for end customer object (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['createCustomer'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function createCustomerAsyncWithHttpInfo($idempotency_key = null, $for_user_id = null, $customer_request = null, string $contentType = self::contentTypes['createCustomer'][0])
    {
        $returnType = '\Xendit\Customer\Customer';
        $request = $this->createCustomerRequest($idempotency_key, $for_user_id, $customer_request, $contentType);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    if ($returnType === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ($returnType !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, $returnType, []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                },
                function ($e) {
                    throw new XenditSdkException(
                        $e->getResponse() && $e->getResponse()->getBody() ? json_decode((string) $e->getResponse()->getBody()) : null,
                        (string) $e->getCode(),
                        $e->getMessage() ? $e->getMessage() : sprintf('Error connecting to the API (%s)', "createCustomerRequest")
                    );
                }
            );
    }

    /**
     * Create request for operation 'createCustomer'
     *
     * @param  string $idempotency_key A unique key to prevent processing duplicate requests. (optional)
     * @param  string $for_user_id The sub-account user-id that you want to make this transaction for. (optional)
     * @param  \Xendit\Customer\CustomerRequest $customer_request Request object for end customer object (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['createCustomer'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function createCustomerRequest($idempotency_key = null, $for_user_id = null, $customer_request = null, string $contentType = self::contentTypes['createCustomer'][0])
    {





        $resourcePath = '/customers';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;


        // header param: idempotency-key
        if ($idempotency_key !== null) {
            $headerParams['idempotency-key'] = ObjectSerializer::toHeaderValue($idempotency_key);
        }
        // header param: for-user-id
        if ($for_user_id !== null) {
            $headerParams['for-user-id'] = ObjectSerializer::toHeaderValue($for_user_id);
        }


        $headers = $this->headerSelector->selectHeaders(
            ['application/json', ],
            $contentType,
            $multipart
        );

        // for model (json/xml)
        if (isset($customer_request)) {
            if (stripos($headers['Content-Type'], 'application/json') !== false) {
                # if Content-Type contains "application/json", json_encode the body
                $httpBody = \GuzzleHttp\Utils::jsonEncode(ObjectSerializer::sanitizeForSerialization($customer_request));
            } else {
                $httpBody = $customer_request;
            }
        } elseif (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $formParamValueItems = is_array($formParamValue) ? $formParamValue : [$formParamValue];
                    foreach ($formParamValueItems as $formParamValueItem) {
                        $multipartContents[] = [
                            'name' => $formParamName,
                            'contents' => $formParamValueItem
                        ];
                    }
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif (stripos($headers['Content-Type'], 'application/json') !== false) {
                # if Content-Type contains "application/json", json_encode the form parameters
                $httpBody = \GuzzleHttp\Utils::jsonEncode($formParams);
            } else {
                // for HTTP post (form)
                $httpBody = ObjectSerializer::buildQuery($formParams);
            }
        }

        // this endpoint requires HTTP basic authentication
        $headers['Authorization'] = 'Basic ' . base64_encode($this->config->getApiKey() . ":");

        $defaultHeaders = [];
        
        // Xendit's custom headers
        $defaultHeaders['xendit-lib'] = 'php';
        $defaultHeaders['xendit-lib-ver'] = '5.0.0';

        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        $operationHost = $this->config->getHost();
        $query = ObjectSerializer::buildQuery($queryParams);
        return new Request(
            'POST',
            $operationHost . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Operation getCustomer
     *
     * Get Customer By ID
     *
     * @param  string $id End customer resource id (required)
     * @param  string $for_user_id The sub-account user-id that you want to make this transaction for. (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getCustomer'] to see the possible values for this operation
     *
     * @throws \Xendit\XenditSdkException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Xendit\Customer\Customer
     */
    public function getCustomer($id, $for_user_id = null, string $contentType = self::contentTypes['getCustomer'][0])
    {
        list($response) = $this->getCustomerWithHttpInfo($id, $for_user_id, $contentType);
        return $response;
    }

    /**
     * Operation getCustomerWithHttpInfo
     *
     * Get Customer By ID
     *
     * @param  string $id End customer resource id (required)
     * @param  string $for_user_id The sub-account user-id that you want to make this transaction for. (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getCustomer'] to see the possible values for this operation
     *
     * @throws \Xendit\XenditSdkException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Xendit\Customer\Customer, HTTP status code, HTTP response headers (array of strings)
     */
    public function getCustomerWithHttpInfo($id, $for_user_id = null, string $contentType = self::contentTypes['getCustomer'][0])
    {
        $request = $this->getCustomerRequest($id, $for_user_id, $contentType);

        $options = $this->createHttpClientOption();
        try {
            $response = $this->client->send($request, $options);
        } catch (RequestException $e) {
            throw new XenditSdkException(
                $e->getResponse() && $e->getResponse()->getBody() ? json_decode((string) $e->getResponse()->getBody()) : null,
                (string) $e->getCode(),
                $e->getMessage() ? $e->getMessage() : sprintf('Error connecting to the API (%s)', "getCustomerRequest")
            );
        } catch (ConnectException $e) {
            throw new XenditSdkException(
                null,
                (string) $e->getCode(),
                $e->getMessage() ? $e->getMessage() : sprintf('Error connecting to the API (%s)', "getCustomerRequest")
            );
        }  catch (GuzzleException $e) {
            throw new XenditSdkException(
                null,
                (string) $e->getCode(),
                $e->getMessage() ? $e->getMessage() : sprintf('Error instantiating client for API (%s)', "getCustomerRequest")
            );
        }

        $statusCode = $response->getStatusCode();

        if ($statusCode < 200 || $statusCode > 299) {
            $errBodyContent = $response->getBody() ? json_decode((string) $response->getBody()) : null;

            throw new XenditSdkException(
                $errBodyContent,
                (string) $statusCode,
                $response->getReasonPhrase()
            );
        }
        $returnType = '\Xendit\Customer\Customer';
        if ($returnType === '\SplFileObject') {
            $content = $response->getBody(); //stream goes to serializer
        } else {
            $content = (string) $response->getBody();
            if ($returnType !== 'string') {
                $content = json_decode($content);
            }
        }

        return [
            ObjectSerializer::deserialize($content, $returnType, []),
            $response->getStatusCode(),
            $response->getHeaders()
        ];
    }

    /**
     * Operation getCustomerAsync
     *
     * Get Customer By ID
     *
     * @param  string $id End customer resource id (required)
     * @param  string $for_user_id The sub-account user-id that you want to make this transaction for. (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getCustomer'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getCustomerAsync($id, $for_user_id = null, string $contentType = self::contentTypes['getCustomer'][0])
    {
        return $this->getCustomerAsyncWithHttpInfo($id, $for_user_id, $contentType)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation getCustomerAsyncWithHttpInfo
     *
     * Get Customer By ID
     *
     * @param  string $id End customer resource id (required)
     * @param  string $for_user_id The sub-account user-id that you want to make this transaction for. (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getCustomer'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getCustomerAsyncWithHttpInfo($id, $for_user_id = null, string $contentType = self::contentTypes['getCustomer'][0])
    {
        $returnType = '\Xendit\Customer\Customer';
        $request = $this->getCustomerRequest($id, $for_user_id, $contentType);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    if ($returnType === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ($returnType !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, $returnType, []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                },
                function ($e) {
                    throw new XenditSdkException(
                        $e->getResponse() && $e->getResponse()->getBody() ? json_decode((string) $e->getResponse()->getBody()) : null,
                        (string) $e->getCode(),
                        $e->getMessage() ? $e->getMessage() : sprintf('Error connecting to the API (%s)', "getCustomerRequest")
                    );
                }
            );
    }

    /**
     * Create request for operation 'getCustomer'
     *
     * @param  string $id End customer resource id (required)
     * @param  string $for_user_id The sub-account user-id that you want to make this transaction for. (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getCustomer'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function getCustomerRequest($id, $for_user_id = null, string $contentType = self::contentTypes['getCustomer'][0])
    {

        // verify the required parameter 'id' is set
        if ($id === null || (is_array($id) && count($id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $id when calling getCustomer'
            );
        }



        $resourcePath = '/customers/{id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;


        // header param: for-user-id
        if ($for_user_id !== null) {
            $headerParams['for-user-id'] = ObjectSerializer::toHeaderValue($for_user_id);
        }
        // path params
        if ($id !== null) {
            $resourcePath = str_replace(
                '{' . 'id' . '}',
                ObjectSerializer::toPathValue($id),
                $resourcePath
            );
        }


        $headers = $this->headerSelector->selectHeaders(
            ['application/json', ],
            $contentType,
            $multipart
        );

        // for model (json/xml)
        if (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $formParamValueItems = is_array($formParamValue) ? $formParamValue : [$formParamValue];
                    foreach ($formParamValueItems as $formParamValueItem) {
                        $multipartContents[] = [
                            'name' => $formParamName,
                            'contents' => $formParamValueItem
                        ];
                    }
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif (stripos($headers['Content-Type'], 'application/json') !== false) {
                # if Content-Type contains "application/json", json_encode the form parameters
                $httpBody = \GuzzleHttp\Utils::jsonEncode($formParams);
            } else {
                // for HTTP post (form)
                $httpBody = ObjectSerializer::buildQuery($formParams);
            }
        }

        // this endpoint requires HTTP basic authentication
        $headers['Authorization'] = 'Basic ' . base64_encode($this->config->getApiKey() . ":");

        $defaultHeaders = [];
        
        // Xendit's custom headers
        $defaultHeaders['xendit-lib'] = 'php';
        $defaultHeaders['xendit-lib-ver'] = '5.0.0';

        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        $operationHost = $this->config->getHost();
        $query = ObjectSerializer::buildQuery($queryParams);
        return new Request(
            'GET',
            $operationHost . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Operation getCustomerByReferenceID
     *
     * GET customers by reference id
     *
     * @param  string $reference_id Merchant&#39;s reference of end customer (required)
     * @param  string $for_user_id The sub-account user-id that you want to make this transaction for. (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getCustomerByReferenceID'] to see the possible values for this operation
     *
     * @throws \Xendit\XenditSdkException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Xendit\Customer\GetCustomerByReferenceID200Response
     */
    public function getCustomerByReferenceID($reference_id, $for_user_id = null, string $contentType = self::contentTypes['getCustomerByReferenceID'][0])
    {
        list($response) = $this->getCustomerByReferenceIDWithHttpInfo($reference_id, $for_user_id, $contentType);
        return $response;
    }

    /**
     * Operation getCustomerByReferenceIDWithHttpInfo
     *
     * GET customers by reference id
     *
     * @param  string $reference_id Merchant&#39;s reference of end customer (required)
     * @param  string $for_user_id The sub-account user-id that you want to make this transaction for. (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getCustomerByReferenceID'] to see the possible values for this operation
     *
     * @throws \Xendit\XenditSdkException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Xendit\Customer\GetCustomerByReferenceID200Response, HTTP status code, HTTP response headers (array of strings)
     */
    public function getCustomerByReferenceIDWithHttpInfo($reference_id, $for_user_id = null, string $contentType = self::contentTypes['getCustomerByReferenceID'][0])
    {
        $request = $this->getCustomerByReferenceIDRequest($reference_id, $for_user_id, $contentType);

        $options = $this->createHttpClientOption();
        try {
            $response = $this->client->send($request, $options);
        } catch (RequestException $e) {
            throw new XenditSdkException(
                $e->getResponse() && $e->getResponse()->getBody() ? json_decode((string) $e->getResponse()->getBody()) : null,
                (string) $e->getCode(),
                $e->getMessage() ? $e->getMessage() : sprintf('Error connecting to the API (%s)', "getCustomerByReferenceIDRequest")
            );
        } catch (ConnectException $e) {
            throw new XenditSdkException(
                null,
                (string) $e->getCode(),
                $e->getMessage() ? $e->getMessage() : sprintf('Error connecting to the API (%s)', "getCustomerByReferenceIDRequest")
            );
        }  catch (GuzzleException $e) {
            throw new XenditSdkException(
                null,
                (string) $e->getCode(),
                $e->getMessage() ? $e->getMessage() : sprintf('Error instantiating client for API (%s)', "getCustomerByReferenceIDRequest")
            );
        }

        $statusCode = $response->getStatusCode();

        if ($statusCode < 200 || $statusCode > 299) {
            $errBodyContent = $response->getBody() ? json_decode((string) $response->getBody()) : null;

            throw new XenditSdkException(
                $errBodyContent,
                (string) $statusCode,
                $response->getReasonPhrase()
            );
        }
        $returnType = '\Xendit\Customer\GetCustomerByReferenceID200Response';
        if ($returnType === '\SplFileObject') {
            $content = $response->getBody(); //stream goes to serializer
        } else {
            $content = (string) $response->getBody();
            if ($returnType !== 'string') {
                $content = json_decode($content);
            }
        }

        return [
            ObjectSerializer::deserialize($content, $returnType, []),
            $response->getStatusCode(),
            $response->getHeaders()
        ];
    }

    /**
     * Operation getCustomerByReferenceIDAsync
     *
     * GET customers by reference id
     *
     * @param  string $reference_id Merchant&#39;s reference of end customer (required)
     * @param  string $for_user_id The sub-account user-id that you want to make this transaction for. (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getCustomerByReferenceID'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getCustomerByReferenceIDAsync($reference_id, $for_user_id = null, string $contentType = self::contentTypes['getCustomerByReferenceID'][0])
    {
        return $this->getCustomerByReferenceIDAsyncWithHttpInfo($reference_id, $for_user_id, $contentType)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation getCustomerByReferenceIDAsyncWithHttpInfo
     *
     * GET customers by reference id
     *
     * @param  string $reference_id Merchant&#39;s reference of end customer (required)
     * @param  string $for_user_id The sub-account user-id that you want to make this transaction for. (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getCustomerByReferenceID'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getCustomerByReferenceIDAsyncWithHttpInfo($reference_id, $for_user_id = null, string $contentType = self::contentTypes['getCustomerByReferenceID'][0])
    {
        $returnType = '\Xendit\Customer\GetCustomerByReferenceID200Response';
        $request = $this->getCustomerByReferenceIDRequest($reference_id, $for_user_id, $contentType);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    if ($returnType === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ($returnType !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, $returnType, []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                },
                function ($e) {
                    throw new XenditSdkException(
                        $e->getResponse() && $e->getResponse()->getBody() ? json_decode((string) $e->getResponse()->getBody()) : null,
                        (string) $e->getCode(),
                        $e->getMessage() ? $e->getMessage() : sprintf('Error connecting to the API (%s)', "getCustomerByReferenceIDRequest")
                    );
                }
            );
    }

    /**
     * Create request for operation 'getCustomerByReferenceID'
     *
     * @param  string $reference_id Merchant&#39;s reference of end customer (required)
     * @param  string $for_user_id The sub-account user-id that you want to make this transaction for. (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getCustomerByReferenceID'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function getCustomerByReferenceIDRequest($reference_id, $for_user_id = null, string $contentType = self::contentTypes['getCustomerByReferenceID'][0])
    {

        // verify the required parameter 'reference_id' is set
        if ($reference_id === null || (is_array($reference_id) && count($reference_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $reference_id when calling getCustomerByReferenceID'
            );
        }
        if (strlen($reference_id) > 255) {
            throw new \InvalidArgumentException('invalid length for "$reference_id" when calling CustomerApi.getCustomerByReferenceID, must be smaller than or equal to 255.');
        }
        


        $resourcePath = '/customers';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $reference_id,
            'reference_id', // param base name
            'string', // openApiType
            'form', // style
            true, // explode
            true // required
        ) ?? []);

        // header param: for-user-id
        if ($for_user_id !== null) {
            $headerParams['for-user-id'] = ObjectSerializer::toHeaderValue($for_user_id);
        }


        $headers = $this->headerSelector->selectHeaders(
            ['application/json', ],
            $contentType,
            $multipart
        );

        // for model (json/xml)
        if (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $formParamValueItems = is_array($formParamValue) ? $formParamValue : [$formParamValue];
                    foreach ($formParamValueItems as $formParamValueItem) {
                        $multipartContents[] = [
                            'name' => $formParamName,
                            'contents' => $formParamValueItem
                        ];
                    }
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif (stripos($headers['Content-Type'], 'application/json') !== false) {
                # if Content-Type contains "application/json", json_encode the form parameters
                $httpBody = \GuzzleHttp\Utils::jsonEncode($formParams);
            } else {
                // for HTTP post (form)
                $httpBody = ObjectSerializer::buildQuery($formParams);
            }
        }

        // this endpoint requires HTTP basic authentication
        $headers['Authorization'] = 'Basic ' . base64_encode($this->config->getApiKey() . ":");

        $defaultHeaders = [];
        
        // Xendit's custom headers
        $defaultHeaders['xendit-lib'] = 'php';
        $defaultHeaders['xendit-lib-ver'] = '5.0.0';

        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        $operationHost = $this->config->getHost();
        $query = ObjectSerializer::buildQuery($queryParams);
        return new Request(
            'GET',
            $operationHost . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Operation updateCustomer
     *
     * Update End Customer Resource
     *
     * @param  string $id End customer resource id (required)
     * @param  string $for_user_id The sub-account user-id that you want to make this transaction for. (optional)
     * @param  \Xendit\Customer\PatchCustomer $patch_customer Update Request for end customer object (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['updateCustomer'] to see the possible values for this operation
     *
     * @throws \Xendit\XenditSdkException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Xendit\Customer\Customer
     */
    public function updateCustomer($id, $for_user_id = null, $patch_customer = null, string $contentType = self::contentTypes['updateCustomer'][0])
    {
        list($response) = $this->updateCustomerWithHttpInfo($id, $for_user_id, $patch_customer, $contentType);
        return $response;
    }

    /**
     * Operation updateCustomerWithHttpInfo
     *
     * Update End Customer Resource
     *
     * @param  string $id End customer resource id (required)
     * @param  string $for_user_id The sub-account user-id that you want to make this transaction for. (optional)
     * @param  \Xendit\Customer\PatchCustomer $patch_customer Update Request for end customer object (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['updateCustomer'] to see the possible values for this operation
     *
     * @throws \Xendit\XenditSdkException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Xendit\Customer\Customer, HTTP status code, HTTP response headers (array of strings)
     */
    public function updateCustomerWithHttpInfo($id, $for_user_id = null, $patch_customer = null, string $contentType = self::contentTypes['updateCustomer'][0])
    {
        $request = $this->updateCustomerRequest($id, $for_user_id, $patch_customer, $contentType);

        $options = $this->createHttpClientOption();
        try {
            $response = $this->client->send($request, $options);
        } catch (RequestException $e) {
            throw new XenditSdkException(
                $e->getResponse() && $e->getResponse()->getBody() ? json_decode((string) $e->getResponse()->getBody()) : null,
                (string) $e->getCode(),
                $e->getMessage() ? $e->getMessage() : sprintf('Error connecting to the API (%s)', "updateCustomerRequest")
            );
        } catch (ConnectException $e) {
            throw new XenditSdkException(
                null,
                (string) $e->getCode(),
                $e->getMessage() ? $e->getMessage() : sprintf('Error connecting to the API (%s)', "updateCustomerRequest")
            );
        }  catch (GuzzleException $e) {
            throw new XenditSdkException(
                null,
                (string) $e->getCode(),
                $e->getMessage() ? $e->getMessage() : sprintf('Error instantiating client for API (%s)', "updateCustomerRequest")
            );
        }

        $statusCode = $response->getStatusCode();

        if ($statusCode < 200 || $statusCode > 299) {
            $errBodyContent = $response->getBody() ? json_decode((string) $response->getBody()) : null;

            throw new XenditSdkException(
                $errBodyContent,
                (string) $statusCode,
                $response->getReasonPhrase()
            );
        }
        $returnType = '\Xendit\Customer\Customer';
        if ($returnType === '\SplFileObject') {
            $content = $response->getBody(); //stream goes to serializer
        } else {
            $content = (string) $response->getBody();
            if ($returnType !== 'string') {
                $content = json_decode($content);
            }
        }

        return [
            ObjectSerializer::deserialize($content, $returnType, []),
            $response->getStatusCode(),
            $response->getHeaders()
        ];
    }

    /**
     * Operation updateCustomerAsync
     *
     * Update End Customer Resource
     *
     * @param  string $id End customer resource id (required)
     * @param  string $for_user_id The sub-account user-id that you want to make this transaction for. (optional)
     * @param  \Xendit\Customer\PatchCustomer $patch_customer Update Request for end customer object (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['updateCustomer'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function updateCustomerAsync($id, $for_user_id = null, $patch_customer = null, string $contentType = self::contentTypes['updateCustomer'][0])
    {
        return $this->updateCustomerAsyncWithHttpInfo($id, $for_user_id, $patch_customer, $contentType)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation updateCustomerAsyncWithHttpInfo
     *
     * Update End Customer Resource
     *
     * @param  string $id End customer resource id (required)
     * @param  string $for_user_id The sub-account user-id that you want to make this transaction for. (optional)
     * @param  \Xendit\Customer\PatchCustomer $patch_customer Update Request for end customer object (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['updateCustomer'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function updateCustomerAsyncWithHttpInfo($id, $for_user_id = null, $patch_customer = null, string $contentType = self::contentTypes['updateCustomer'][0])
    {
        $returnType = '\Xendit\Customer\Customer';
        $request = $this->updateCustomerRequest($id, $for_user_id, $patch_customer, $contentType);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    if ($returnType === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ($returnType !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, $returnType, []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                },
                function ($e) {
                    throw new XenditSdkException(
                        $e->getResponse() && $e->getResponse()->getBody() ? json_decode((string) $e->getResponse()->getBody()) : null,
                        (string) $e->getCode(),
                        $e->getMessage() ? $e->getMessage() : sprintf('Error connecting to the API (%s)', "updateCustomerRequest")
                    );
                }
            );
    }

    /**
     * Create request for operation 'updateCustomer'
     *
     * @param  string $id End customer resource id (required)
     * @param  string $for_user_id The sub-account user-id that you want to make this transaction for. (optional)
     * @param  \Xendit\Customer\PatchCustomer $patch_customer Update Request for end customer object (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['updateCustomer'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function updateCustomerRequest($id, $for_user_id = null, $patch_customer = null, string $contentType = self::contentTypes['updateCustomer'][0])
    {

        // verify the required parameter 'id' is set
        if ($id === null || (is_array($id) && count($id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $id when calling updateCustomer'
            );
        }




        $resourcePath = '/customers/{id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;


        // header param: for-user-id
        if ($for_user_id !== null) {
            $headerParams['for-user-id'] = ObjectSerializer::toHeaderValue($for_user_id);
        }
        // path params
        if ($id !== null) {
            $resourcePath = str_replace(
                '{' . 'id' . '}',
                ObjectSerializer::toPathValue($id),
                $resourcePath
            );
        }


        $headers = $this->headerSelector->selectHeaders(
            ['application/json', ],
            $contentType,
            $multipart
        );

        // for model (json/xml)
        if (isset($patch_customer)) {
            if (stripos($headers['Content-Type'], 'application/json') !== false) {
                # if Content-Type contains "application/json", json_encode the body
                $httpBody = \GuzzleHttp\Utils::jsonEncode(ObjectSerializer::sanitizeForSerialization($patch_customer));
            } else {
                $httpBody = $patch_customer;
            }
        } elseif (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $formParamValueItems = is_array($formParamValue) ? $formParamValue : [$formParamValue];
                    foreach ($formParamValueItems as $formParamValueItem) {
                        $multipartContents[] = [
                            'name' => $formParamName,
                            'contents' => $formParamValueItem
                        ];
                    }
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif (stripos($headers['Content-Type'], 'application/json') !== false) {
                # if Content-Type contains "application/json", json_encode the form parameters
                $httpBody = \GuzzleHttp\Utils::jsonEncode($formParams);
            } else {
                // for HTTP post (form)
                $httpBody = ObjectSerializer::buildQuery($formParams);
            }
        }

        // this endpoint requires HTTP basic authentication
        $headers['Authorization'] = 'Basic ' . base64_encode($this->config->getApiKey() . ":");

        $defaultHeaders = [];
        
        // Xendit's custom headers
        $defaultHeaders['xendit-lib'] = 'php';
        $defaultHeaders['xendit-lib-ver'] = '5.0.0';

        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        $operationHost = $this->config->getHost();
        $query = ObjectSerializer::buildQuery($queryParams);
        return new Request(
            'PATCH',
            $operationHost . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Create http client option
     *
     * @throws \RuntimeException on file opening failure
     * @return array of http client options
     */
    protected function createHttpClientOption()
    {
        $options = [];
        if ($this->config->getDebug()) {
            $options[RequestOptions::DEBUG] = fopen($this->config->getDebugFile(), 'a');
            if (!$options[RequestOptions::DEBUG]) {
                throw new \RuntimeException('Failed to open the debug file: ' . $this->config->getDebugFile());
            }
        }

        return $options;
    }
}
