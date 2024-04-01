<?php
/**
 * PaymentMethodApi
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
 * NOTE: This class is auto generated
 * Do not edit the class manually.
 */

namespace Xendit\PaymentMethod;

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
 * PaymentMethodApi Class Doc Comment
 *
 * @category Class
 * @package  Xendit
 */
class PaymentMethodApi
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
        'createPaymentMethod' => [
            'application/json',
        ],
        'getPaymentMethodByID' => [
            'application/json',
        ],
        'getPaymentsByPaymentMethodId' => [
            'application/json',
        ],
        'patchPaymentMethod' => [
            'application/json',
        ],
        'getAllPaymentMethods' => [
            'application/json',
        ],
        'expirePaymentMethod' => [
            'application/json',
        ],
        'authPaymentMethod' => [
            'application/json',
        ],
        'simulatePayment' => [
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
     * Operation createPaymentMethod
     *
     * Creates payment method
     *
     * @param  string $for_user_id for_user_id (optional)
     * @param  \Xendit\PaymentMethod\PaymentMethodParameters $payment_method_parameters payment_method_parameters (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['createPaymentMethod'] to see the possible values for this operation
     *
     * @throws \Xendit\XenditSdkException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Xendit\PaymentMethod\PaymentMethod
     */
    public function createPaymentMethod($for_user_id = null, $payment_method_parameters = null, string $contentType = self::contentTypes['createPaymentMethod'][0])
    {
        list($response) = $this->createPaymentMethodWithHttpInfo($for_user_id, $payment_method_parameters, $contentType);
        return $response;
    }

    /**
     * Operation createPaymentMethodWithHttpInfo
     *
     * Creates payment method
     *
     * @param  string $for_user_id (optional)
     * @param  \Xendit\PaymentMethod\PaymentMethodParameters $payment_method_parameters (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['createPaymentMethod'] to see the possible values for this operation
     *
     * @throws \Xendit\XenditSdkException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Xendit\PaymentMethod\PaymentMethod, HTTP status code, HTTP response headers (array of strings)
     */
    public function createPaymentMethodWithHttpInfo($for_user_id = null, $payment_method_parameters = null, string $contentType = self::contentTypes['createPaymentMethod'][0])
    {
        $request = $this->createPaymentMethodRequest($for_user_id, $payment_method_parameters, $contentType);

        $options = $this->createHttpClientOption();
        try {
            $response = $this->client->send($request, $options);
        } catch (RequestException $e) {
            throw new XenditSdkException(
                $e->getResponse() && $e->getResponse()->getBody() ? json_decode((string) $e->getResponse()->getBody()) : null,
                (string) $e->getCode(),
                $e->getMessage() ? $e->getMessage() : sprintf('Error connecting to the API (%s)', "createPaymentMethodRequest")
            );
        } catch (ConnectException $e) {
            throw new XenditSdkException(
                null,
                (string) $e->getCode(),
                $e->getMessage() ? $e->getMessage() : sprintf('Error connecting to the API (%s)', "createPaymentMethodRequest")
            );
        }  catch (GuzzleException $e) {
            throw new XenditSdkException(
                null,
                (string) $e->getCode(),
                $e->getMessage() ? $e->getMessage() : sprintf('Error instantiating client for API (%s)', "createPaymentMethodRequest")
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
        $returnType = '\Xendit\PaymentMethod\PaymentMethod';
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
     * Operation createPaymentMethodAsync
     *
     * Creates payment method
     *
     * @param  string $for_user_id (optional)
     * @param  \Xendit\PaymentMethod\PaymentMethodParameters $payment_method_parameters (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['createPaymentMethod'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function createPaymentMethodAsync($for_user_id = null, $payment_method_parameters = null, string $contentType = self::contentTypes['createPaymentMethod'][0])
    {
        return $this->createPaymentMethodAsyncWithHttpInfo($for_user_id, $payment_method_parameters, $contentType)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation createPaymentMethodAsyncWithHttpInfo
     *
     * Creates payment method
     *
     * @param  string $for_user_id (optional)
     * @param  \Xendit\PaymentMethod\PaymentMethodParameters $payment_method_parameters (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['createPaymentMethod'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function createPaymentMethodAsyncWithHttpInfo($for_user_id = null, $payment_method_parameters = null, string $contentType = self::contentTypes['createPaymentMethod'][0])
    {
        $returnType = '\Xendit\PaymentMethod\PaymentMethod';
        $request = $this->createPaymentMethodRequest($for_user_id, $payment_method_parameters, $contentType);

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
                        $e->getMessage() ? $e->getMessage() : sprintf('Error connecting to the API (%s)', "createPaymentMethodRequest")
                    );
                }
            );
    }

    /**
     * Create request for operation 'createPaymentMethod'
     *
     * @param  string $for_user_id (optional)
     * @param  \Xendit\PaymentMethod\PaymentMethodParameters $payment_method_parameters (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['createPaymentMethod'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function createPaymentMethodRequest($for_user_id = null, $payment_method_parameters = null, string $contentType = self::contentTypes['createPaymentMethod'][0])
    {




        $resourcePath = '/v2/payment_methods';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;


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
        if (isset($payment_method_parameters)) {
            if (stripos($headers['Content-Type'], 'application/json') !== false) {
                # if Content-Type contains "application/json", json_encode the body
                $httpBody = \GuzzleHttp\Utils::jsonEncode(ObjectSerializer::sanitizeForSerialization($payment_method_parameters));
            } else {
                $httpBody = $payment_method_parameters;
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
     * Operation getPaymentMethodByID
     *
     * Get payment method by ID
     *
     * @param  string $payment_method_id payment_method_id (required)
     * @param  string $for_user_id for_user_id (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getPaymentMethodByID'] to see the possible values for this operation
     *
     * @throws \Xendit\XenditSdkException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Xendit\PaymentMethod\PaymentMethod
     */
    public function getPaymentMethodByID($payment_method_id, $for_user_id = null, string $contentType = self::contentTypes['getPaymentMethodByID'][0])
    {
        list($response) = $this->getPaymentMethodByIDWithHttpInfo($payment_method_id, $for_user_id, $contentType);
        return $response;
    }

    /**
     * Operation getPaymentMethodByIDWithHttpInfo
     *
     * Get payment method by ID
     *
     * @param  string $payment_method_id (required)
     * @param  string $for_user_id (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getPaymentMethodByID'] to see the possible values for this operation
     *
     * @throws \Xendit\XenditSdkException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Xendit\PaymentMethod\PaymentMethod, HTTP status code, HTTP response headers (array of strings)
     */
    public function getPaymentMethodByIDWithHttpInfo($payment_method_id, $for_user_id = null, string $contentType = self::contentTypes['getPaymentMethodByID'][0])
    {
        $request = $this->getPaymentMethodByIDRequest($payment_method_id, $for_user_id, $contentType);

        $options = $this->createHttpClientOption();
        try {
            $response = $this->client->send($request, $options);
        } catch (RequestException $e) {
            throw new XenditSdkException(
                $e->getResponse() && $e->getResponse()->getBody() ? json_decode((string) $e->getResponse()->getBody()) : null,
                (string) $e->getCode(),
                $e->getMessage() ? $e->getMessage() : sprintf('Error connecting to the API (%s)', "getPaymentMethodByIDRequest")
            );
        } catch (ConnectException $e) {
            throw new XenditSdkException(
                null,
                (string) $e->getCode(),
                $e->getMessage() ? $e->getMessage() : sprintf('Error connecting to the API (%s)', "getPaymentMethodByIDRequest")
            );
        }  catch (GuzzleException $e) {
            throw new XenditSdkException(
                null,
                (string) $e->getCode(),
                $e->getMessage() ? $e->getMessage() : sprintf('Error instantiating client for API (%s)', "getPaymentMethodByIDRequest")
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
        $returnType = '\Xendit\PaymentMethod\PaymentMethod';
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
     * Operation getPaymentMethodByIDAsync
     *
     * Get payment method by ID
     *
     * @param  string $payment_method_id (required)
     * @param  string $for_user_id (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getPaymentMethodByID'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getPaymentMethodByIDAsync($payment_method_id, $for_user_id = null, string $contentType = self::contentTypes['getPaymentMethodByID'][0])
    {
        return $this->getPaymentMethodByIDAsyncWithHttpInfo($payment_method_id, $for_user_id, $contentType)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation getPaymentMethodByIDAsyncWithHttpInfo
     *
     * Get payment method by ID
     *
     * @param  string $payment_method_id (required)
     * @param  string $for_user_id (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getPaymentMethodByID'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getPaymentMethodByIDAsyncWithHttpInfo($payment_method_id, $for_user_id = null, string $contentType = self::contentTypes['getPaymentMethodByID'][0])
    {
        $returnType = '\Xendit\PaymentMethod\PaymentMethod';
        $request = $this->getPaymentMethodByIDRequest($payment_method_id, $for_user_id, $contentType);

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
                        $e->getMessage() ? $e->getMessage() : sprintf('Error connecting to the API (%s)', "getPaymentMethodByIDRequest")
                    );
                }
            );
    }

    /**
     * Create request for operation 'getPaymentMethodByID'
     *
     * @param  string $payment_method_id (required)
     * @param  string $for_user_id (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getPaymentMethodByID'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function getPaymentMethodByIDRequest($payment_method_id, $for_user_id = null, string $contentType = self::contentTypes['getPaymentMethodByID'][0])
    {

        // verify the required parameter 'payment_method_id' is set
        if ($payment_method_id === null || (is_array($payment_method_id) && count($payment_method_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $payment_method_id when calling getPaymentMethodByID'
            );
        }



        $resourcePath = '/v2/payment_methods/{paymentMethodId}';
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
        if ($payment_method_id !== null) {
            $resourcePath = str_replace(
                '{' . 'paymentMethodId' . '}',
                ObjectSerializer::toPathValue($payment_method_id),
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
     * Operation getPaymentsByPaymentMethodId
     *
     * Returns payments with matching PaymentMethodID.
     *
     * @param  string $payment_method_id payment_method_id (required)
     * @param  string $for_user_id for_user_id (optional)
     * @param  string[] $payment_request_id payment_request_id (optional)
     * @param  string[] $payment_method_id2 payment_method_id2 (optional)
     * @param  string[] $reference_id reference_id (optional)
     * @param  \PaymentMethod\PaymentMethodType[] $payment_method_type payment_method_type (optional)
     * @param  string[] $channel_code channel_code (optional)
     * @param  string[] $status status (optional)
     * @param  string[] $currency currency (optional)
     * @param  \DateTime $created_gte created_gte (optional)
     * @param  \DateTime $created_lte created_lte (optional)
     * @param  \DateTime $updated_gte updated_gte (optional)
     * @param  \DateTime $updated_lte updated_lte (optional)
     * @param  int $limit limit (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getPaymentsByPaymentMethodId'] to see the possible values for this operation
     *
     * @throws \Xendit\XenditSdkException on non-2xx response
     * @throws \InvalidArgumentException
     * @return object
     */
    public function getPaymentsByPaymentMethodId($payment_method_id, $for_user_id = null, $payment_request_id = null, $payment_method_id2 = null, $reference_id = null, $payment_method_type = null, $channel_code = null, $status = null, $currency = null, $created_gte = null, $created_lte = null, $updated_gte = null, $updated_lte = null, $limit = null, string $contentType = self::contentTypes['getPaymentsByPaymentMethodId'][0])
    {
        list($response) = $this->getPaymentsByPaymentMethodIdWithHttpInfo($payment_method_id, $for_user_id, $payment_request_id, $payment_method_id2, $reference_id, $payment_method_type, $channel_code, $status, $currency, $created_gte, $created_lte, $updated_gte, $updated_lte, $limit, $contentType);
        return $response;
    }

    /**
     * Operation getPaymentsByPaymentMethodIdWithHttpInfo
     *
     * Returns payments with matching PaymentMethodID.
     *
     * @param  string $payment_method_id (required)
     * @param  string $for_user_id (optional)
     * @param  string[] $payment_request_id (optional)
     * @param  string[] $payment_method_id2 (optional)
     * @param  string[] $reference_id (optional)
     * @param  \PaymentMethod\PaymentMethodType[] $payment_method_type (optional)
     * @param  string[] $channel_code (optional)
     * @param  string[] $status (optional)
     * @param  string[] $currency (optional)
     * @param  \DateTime $created_gte (optional)
     * @param  \DateTime $created_lte (optional)
     * @param  \DateTime $updated_gte (optional)
     * @param  \DateTime $updated_lte (optional)
     * @param  int $limit (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getPaymentsByPaymentMethodId'] to see the possible values for this operation
     *
     * @throws \Xendit\XenditSdkException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of object, HTTP status code, HTTP response headers (array of strings)
     */
    public function getPaymentsByPaymentMethodIdWithHttpInfo($payment_method_id, $for_user_id = null, $payment_request_id = null, $payment_method_id2 = null, $reference_id = null, $payment_method_type = null, $channel_code = null, $status = null, $currency = null, $created_gte = null, $created_lte = null, $updated_gte = null, $updated_lte = null, $limit = null, string $contentType = self::contentTypes['getPaymentsByPaymentMethodId'][0])
    {
        $request = $this->getPaymentsByPaymentMethodIdRequest($payment_method_id, $for_user_id, $payment_request_id, $payment_method_id2, $reference_id, $payment_method_type, $channel_code, $status, $currency, $created_gte, $created_lte, $updated_gte, $updated_lte, $limit, $contentType);

        $options = $this->createHttpClientOption();
        try {
            $response = $this->client->send($request, $options);
        } catch (RequestException $e) {
            throw new XenditSdkException(
                $e->getResponse() && $e->getResponse()->getBody() ? json_decode((string) $e->getResponse()->getBody()) : null,
                (string) $e->getCode(),
                $e->getMessage() ? $e->getMessage() : sprintf('Error connecting to the API (%s)', "getPaymentsByPaymentMethodIdRequest")
            );
        } catch (ConnectException $e) {
            throw new XenditSdkException(
                null,
                (string) $e->getCode(),
                $e->getMessage() ? $e->getMessage() : sprintf('Error connecting to the API (%s)', "getPaymentsByPaymentMethodIdRequest")
            );
        }  catch (GuzzleException $e) {
            throw new XenditSdkException(
                null,
                (string) $e->getCode(),
                $e->getMessage() ? $e->getMessage() : sprintf('Error instantiating client for API (%s)', "getPaymentsByPaymentMethodIdRequest")
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
        $returnType = 'object';
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
     * Operation getPaymentsByPaymentMethodIdAsync
     *
     * Returns payments with matching PaymentMethodID.
     *
     * @param  string $payment_method_id (required)
     * @param  string $for_user_id (optional)
     * @param  string[] $payment_request_id (optional)
     * @param  string[] $payment_method_id2 (optional)
     * @param  string[] $reference_id (optional)
     * @param  \PaymentMethod\PaymentMethodType[] $payment_method_type (optional)
     * @param  string[] $channel_code (optional)
     * @param  string[] $status (optional)
     * @param  string[] $currency (optional)
     * @param  \DateTime $created_gte (optional)
     * @param  \DateTime $created_lte (optional)
     * @param  \DateTime $updated_gte (optional)
     * @param  \DateTime $updated_lte (optional)
     * @param  int $limit (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getPaymentsByPaymentMethodId'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getPaymentsByPaymentMethodIdAsync($payment_method_id, $for_user_id = null, $payment_request_id = null, $payment_method_id2 = null, $reference_id = null, $payment_method_type = null, $channel_code = null, $status = null, $currency = null, $created_gte = null, $created_lte = null, $updated_gte = null, $updated_lte = null, $limit = null, string $contentType = self::contentTypes['getPaymentsByPaymentMethodId'][0])
    {
        return $this->getPaymentsByPaymentMethodIdAsyncWithHttpInfo($payment_method_id, $for_user_id, $payment_request_id, $payment_method_id2, $reference_id, $payment_method_type, $channel_code, $status, $currency, $created_gte, $created_lte, $updated_gte, $updated_lte, $limit, $contentType)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation getPaymentsByPaymentMethodIdAsyncWithHttpInfo
     *
     * Returns payments with matching PaymentMethodID.
     *
     * @param  string $payment_method_id (required)
     * @param  string $for_user_id (optional)
     * @param  string[] $payment_request_id (optional)
     * @param  string[] $payment_method_id2 (optional)
     * @param  string[] $reference_id (optional)
     * @param  \PaymentMethod\PaymentMethodType[] $payment_method_type (optional)
     * @param  string[] $channel_code (optional)
     * @param  string[] $status (optional)
     * @param  string[] $currency (optional)
     * @param  \DateTime $created_gte (optional)
     * @param  \DateTime $created_lte (optional)
     * @param  \DateTime $updated_gte (optional)
     * @param  \DateTime $updated_lte (optional)
     * @param  int $limit (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getPaymentsByPaymentMethodId'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getPaymentsByPaymentMethodIdAsyncWithHttpInfo($payment_method_id, $for_user_id = null, $payment_request_id = null, $payment_method_id2 = null, $reference_id = null, $payment_method_type = null, $channel_code = null, $status = null, $currency = null, $created_gte = null, $created_lte = null, $updated_gte = null, $updated_lte = null, $limit = null, string $contentType = self::contentTypes['getPaymentsByPaymentMethodId'][0])
    {
        $returnType = 'object';
        $request = $this->getPaymentsByPaymentMethodIdRequest($payment_method_id, $for_user_id, $payment_request_id, $payment_method_id2, $reference_id, $payment_method_type, $channel_code, $status, $currency, $created_gte, $created_lte, $updated_gte, $updated_lte, $limit, $contentType);

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
                        $e->getMessage() ? $e->getMessage() : sprintf('Error connecting to the API (%s)', "getPaymentsByPaymentMethodIdRequest")
                    );
                }
            );
    }

    /**
     * Create request for operation 'getPaymentsByPaymentMethodId'
     *
     * @param  string $payment_method_id (required)
     * @param  string $for_user_id (optional)
     * @param  string[] $payment_request_id (optional)
     * @param  string[] $payment_method_id2 (optional)
     * @param  string[] $reference_id (optional)
     * @param  \PaymentMethod\PaymentMethodType[] $payment_method_type (optional)
     * @param  string[] $channel_code (optional)
     * @param  string[] $status (optional)
     * @param  string[] $currency (optional)
     * @param  \DateTime $created_gte (optional)
     * @param  \DateTime $created_lte (optional)
     * @param  \DateTime $updated_gte (optional)
     * @param  \DateTime $updated_lte (optional)
     * @param  int $limit (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getPaymentsByPaymentMethodId'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function getPaymentsByPaymentMethodIdRequest($payment_method_id, $for_user_id = null, $payment_request_id = null, $payment_method_id2 = null, $reference_id = null, $payment_method_type = null, $channel_code = null, $status = null, $currency = null, $created_gte = null, $created_lte = null, $updated_gte = null, $updated_lte = null, $limit = null, string $contentType = self::contentTypes['getPaymentsByPaymentMethodId'][0])
    {

        // verify the required parameter 'payment_method_id' is set
        if ($payment_method_id === null || (is_array($payment_method_id) && count($payment_method_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $payment_method_id when calling getPaymentsByPaymentMethodId'
            );
        }















        $resourcePath = '/v2/payment_methods/{paymentMethodId}/payments';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $payment_request_id,
            'payment_request_id', // param base name
            'array', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $payment_method_id2,
            'payment_method_id', // param base name
            'array', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $reference_id,
            'reference_id', // param base name
            'array', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $payment_method_type,
            'payment_method_type', // param base name
            'array', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $channel_code,
            'channel_code', // param base name
            'array', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $status,
            'status', // param base name
            'array', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $currency,
            'currency', // param base name
            'array', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $created_gte,
            'created[gte]', // param base name
            'string', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $created_lte,
            'created[lte]', // param base name
            'string', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $updated_gte,
            'updated[gte]', // param base name
            'string', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $updated_lte,
            'updated[lte]', // param base name
            'string', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $limit,
            'limit', // param base name
            'integer', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);

        // header param: for-user-id
        if ($for_user_id !== null) {
            $headerParams['for-user-id'] = ObjectSerializer::toHeaderValue($for_user_id);
        }
        // path params
        if ($payment_method_id !== null) {
            $resourcePath = str_replace(
                '{' . 'paymentMethodId' . '}',
                ObjectSerializer::toPathValue($payment_method_id),
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
     * Operation patchPaymentMethod
     *
     * Patch payment methods
     *
     * @param  string $payment_method_id payment_method_id (required)
     * @param  string $for_user_id for_user_id (optional)
     * @param  \Xendit\PaymentMethod\PaymentMethodUpdateParameters $payment_method_update_parameters payment_method_update_parameters (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['patchPaymentMethod'] to see the possible values for this operation
     *
     * @throws \Xendit\XenditSdkException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Xendit\PaymentMethod\PaymentMethod
     */
    public function patchPaymentMethod($payment_method_id, $for_user_id = null, $payment_method_update_parameters = null, string $contentType = self::contentTypes['patchPaymentMethod'][0])
    {
        list($response) = $this->patchPaymentMethodWithHttpInfo($payment_method_id, $for_user_id, $payment_method_update_parameters, $contentType);
        return $response;
    }

    /**
     * Operation patchPaymentMethodWithHttpInfo
     *
     * Patch payment methods
     *
     * @param  string $payment_method_id (required)
     * @param  string $for_user_id (optional)
     * @param  \Xendit\PaymentMethod\PaymentMethodUpdateParameters $payment_method_update_parameters (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['patchPaymentMethod'] to see the possible values for this operation
     *
     * @throws \Xendit\XenditSdkException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Xendit\PaymentMethod\PaymentMethod, HTTP status code, HTTP response headers (array of strings)
     */
    public function patchPaymentMethodWithHttpInfo($payment_method_id, $for_user_id = null, $payment_method_update_parameters = null, string $contentType = self::contentTypes['patchPaymentMethod'][0])
    {
        $request = $this->patchPaymentMethodRequest($payment_method_id, $for_user_id, $payment_method_update_parameters, $contentType);

        $options = $this->createHttpClientOption();
        try {
            $response = $this->client->send($request, $options);
        } catch (RequestException $e) {
            throw new XenditSdkException(
                $e->getResponse() && $e->getResponse()->getBody() ? json_decode((string) $e->getResponse()->getBody()) : null,
                (string) $e->getCode(),
                $e->getMessage() ? $e->getMessage() : sprintf('Error connecting to the API (%s)', "patchPaymentMethodRequest")
            );
        } catch (ConnectException $e) {
            throw new XenditSdkException(
                null,
                (string) $e->getCode(),
                $e->getMessage() ? $e->getMessage() : sprintf('Error connecting to the API (%s)', "patchPaymentMethodRequest")
            );
        }  catch (GuzzleException $e) {
            throw new XenditSdkException(
                null,
                (string) $e->getCode(),
                $e->getMessage() ? $e->getMessage() : sprintf('Error instantiating client for API (%s)', "patchPaymentMethodRequest")
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
        $returnType = '\Xendit\PaymentMethod\PaymentMethod';
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
     * Operation patchPaymentMethodAsync
     *
     * Patch payment methods
     *
     * @param  string $payment_method_id (required)
     * @param  string $for_user_id (optional)
     * @param  \Xendit\PaymentMethod\PaymentMethodUpdateParameters $payment_method_update_parameters (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['patchPaymentMethod'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function patchPaymentMethodAsync($payment_method_id, $for_user_id = null, $payment_method_update_parameters = null, string $contentType = self::contentTypes['patchPaymentMethod'][0])
    {
        return $this->patchPaymentMethodAsyncWithHttpInfo($payment_method_id, $for_user_id, $payment_method_update_parameters, $contentType)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation patchPaymentMethodAsyncWithHttpInfo
     *
     * Patch payment methods
     *
     * @param  string $payment_method_id (required)
     * @param  string $for_user_id (optional)
     * @param  \Xendit\PaymentMethod\PaymentMethodUpdateParameters $payment_method_update_parameters (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['patchPaymentMethod'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function patchPaymentMethodAsyncWithHttpInfo($payment_method_id, $for_user_id = null, $payment_method_update_parameters = null, string $contentType = self::contentTypes['patchPaymentMethod'][0])
    {
        $returnType = '\Xendit\PaymentMethod\PaymentMethod';
        $request = $this->patchPaymentMethodRequest($payment_method_id, $for_user_id, $payment_method_update_parameters, $contentType);

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
                        $e->getMessage() ? $e->getMessage() : sprintf('Error connecting to the API (%s)', "patchPaymentMethodRequest")
                    );
                }
            );
    }

    /**
     * Create request for operation 'patchPaymentMethod'
     *
     * @param  string $payment_method_id (required)
     * @param  string $for_user_id (optional)
     * @param  \Xendit\PaymentMethod\PaymentMethodUpdateParameters $payment_method_update_parameters (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['patchPaymentMethod'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function patchPaymentMethodRequest($payment_method_id, $for_user_id = null, $payment_method_update_parameters = null, string $contentType = self::contentTypes['patchPaymentMethod'][0])
    {

        // verify the required parameter 'payment_method_id' is set
        if ($payment_method_id === null || (is_array($payment_method_id) && count($payment_method_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $payment_method_id when calling patchPaymentMethod'
            );
        }




        $resourcePath = '/v2/payment_methods/{paymentMethodId}';
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
        if ($payment_method_id !== null) {
            $resourcePath = str_replace(
                '{' . 'paymentMethodId' . '}',
                ObjectSerializer::toPathValue($payment_method_id),
                $resourcePath
            );
        }


        $headers = $this->headerSelector->selectHeaders(
            ['application/json', ],
            $contentType,
            $multipart
        );

        // for model (json/xml)
        if (isset($payment_method_update_parameters)) {
            if (stripos($headers['Content-Type'], 'application/json') !== false) {
                # if Content-Type contains "application/json", json_encode the body
                $httpBody = \GuzzleHttp\Utils::jsonEncode(ObjectSerializer::sanitizeForSerialization($payment_method_update_parameters));
            } else {
                $httpBody = $payment_method_update_parameters;
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
     * Operation getAllPaymentMethods
     *
     * Get all payment methods by filters
     *
     * @param  string $for_user_id for_user_id (optional)
     * @param  string[] $id id (optional)
     * @param  string[] $type type (optional)
     * @param  \PaymentMethod\PaymentMethodStatus[] $status status (optional)
     * @param  PaymentMethodReusability $reusability reusability (optional)
     * @param  string $customer_id customer_id (optional)
     * @param  string $reference_id reference_id (optional)
     * @param  string $after_id after_id (optional)
     * @param  string $before_id before_id (optional)
     * @param  int $limit limit (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getAllPaymentMethods'] to see the possible values for this operation
     *
     * @throws \Xendit\XenditSdkException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Xendit\PaymentMethod\PaymentMethodList
     */
    public function getAllPaymentMethods($for_user_id = null, $id = null, $type = null, $status = null, $reusability = null, $customer_id = null, $reference_id = null, $after_id = null, $before_id = null, $limit = null, string $contentType = self::contentTypes['getAllPaymentMethods'][0])
    {
        list($response) = $this->getAllPaymentMethodsWithHttpInfo($for_user_id, $id, $type, $status, $reusability, $customer_id, $reference_id, $after_id, $before_id, $limit, $contentType);
        return $response;
    }

    /**
     * Operation getAllPaymentMethodsWithHttpInfo
     *
     * Get all payment methods by filters
     *
     * @param  string $for_user_id (optional)
     * @param  string[] $id (optional)
     * @param  string[] $type (optional)
     * @param  \PaymentMethod\PaymentMethodStatus[] $status (optional)
     * @param  PaymentMethodReusability $reusability (optional)
     * @param  string $customer_id (optional)
     * @param  string $reference_id (optional)
     * @param  string $after_id (optional)
     * @param  string $before_id (optional)
     * @param  int $limit (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getAllPaymentMethods'] to see the possible values for this operation
     *
     * @throws \Xendit\XenditSdkException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Xendit\PaymentMethod\PaymentMethodList, HTTP status code, HTTP response headers (array of strings)
     */
    public function getAllPaymentMethodsWithHttpInfo($for_user_id = null, $id = null, $type = null, $status = null, $reusability = null, $customer_id = null, $reference_id = null, $after_id = null, $before_id = null, $limit = null, string $contentType = self::contentTypes['getAllPaymentMethods'][0])
    {
        $request = $this->getAllPaymentMethodsRequest($for_user_id, $id, $type, $status, $reusability, $customer_id, $reference_id, $after_id, $before_id, $limit, $contentType);

        $options = $this->createHttpClientOption();
        try {
            $response = $this->client->send($request, $options);
        } catch (RequestException $e) {
            throw new XenditSdkException(
                $e->getResponse() && $e->getResponse()->getBody() ? json_decode((string) $e->getResponse()->getBody()) : null,
                (string) $e->getCode(),
                $e->getMessage() ? $e->getMessage() : sprintf('Error connecting to the API (%s)', "getAllPaymentMethodsRequest")
            );
        } catch (ConnectException $e) {
            throw new XenditSdkException(
                null,
                (string) $e->getCode(),
                $e->getMessage() ? $e->getMessage() : sprintf('Error connecting to the API (%s)', "getAllPaymentMethodsRequest")
            );
        }  catch (GuzzleException $e) {
            throw new XenditSdkException(
                null,
                (string) $e->getCode(),
                $e->getMessage() ? $e->getMessage() : sprintf('Error instantiating client for API (%s)', "getAllPaymentMethodsRequest")
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
        $returnType = '\Xendit\PaymentMethod\PaymentMethodList';
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
     * Operation getAllPaymentMethodsAsync
     *
     * Get all payment methods by filters
     *
     * @param  string $for_user_id (optional)
     * @param  string[] $id (optional)
     * @param  string[] $type (optional)
     * @param  \PaymentMethod\PaymentMethodStatus[] $status (optional)
     * @param  PaymentMethodReusability $reusability (optional)
     * @param  string $customer_id (optional)
     * @param  string $reference_id (optional)
     * @param  string $after_id (optional)
     * @param  string $before_id (optional)
     * @param  int $limit (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getAllPaymentMethods'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getAllPaymentMethodsAsync($for_user_id = null, $id = null, $type = null, $status = null, $reusability = null, $customer_id = null, $reference_id = null, $after_id = null, $before_id = null, $limit = null, string $contentType = self::contentTypes['getAllPaymentMethods'][0])
    {
        return $this->getAllPaymentMethodsAsyncWithHttpInfo($for_user_id, $id, $type, $status, $reusability, $customer_id, $reference_id, $after_id, $before_id, $limit, $contentType)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation getAllPaymentMethodsAsyncWithHttpInfo
     *
     * Get all payment methods by filters
     *
     * @param  string $for_user_id (optional)
     * @param  string[] $id (optional)
     * @param  string[] $type (optional)
     * @param  \PaymentMethod\PaymentMethodStatus[] $status (optional)
     * @param  PaymentMethodReusability $reusability (optional)
     * @param  string $customer_id (optional)
     * @param  string $reference_id (optional)
     * @param  string $after_id (optional)
     * @param  string $before_id (optional)
     * @param  int $limit (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getAllPaymentMethods'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getAllPaymentMethodsAsyncWithHttpInfo($for_user_id = null, $id = null, $type = null, $status = null, $reusability = null, $customer_id = null, $reference_id = null, $after_id = null, $before_id = null, $limit = null, string $contentType = self::contentTypes['getAllPaymentMethods'][0])
    {
        $returnType = '\Xendit\PaymentMethod\PaymentMethodList';
        $request = $this->getAllPaymentMethodsRequest($for_user_id, $id, $type, $status, $reusability, $customer_id, $reference_id, $after_id, $before_id, $limit, $contentType);

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
                        $e->getMessage() ? $e->getMessage() : sprintf('Error connecting to the API (%s)', "getAllPaymentMethodsRequest")
                    );
                }
            );
    }

    /**
     * Create request for operation 'getAllPaymentMethods'
     *
     * @param  string $for_user_id (optional)
     * @param  string[] $id (optional)
     * @param  string[] $type (optional)
     * @param  \PaymentMethod\PaymentMethodStatus[] $status (optional)
     * @param  PaymentMethodReusability $reusability (optional)
     * @param  string $customer_id (optional)
     * @param  string $reference_id (optional)
     * @param  string $after_id (optional)
     * @param  string $before_id (optional)
     * @param  int $limit (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getAllPaymentMethods'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function getAllPaymentMethodsRequest($for_user_id = null, $id = null, $type = null, $status = null, $reusability = null, $customer_id = null, $reference_id = null, $after_id = null, $before_id = null, $limit = null, string $contentType = self::contentTypes['getAllPaymentMethods'][0])
    {










        if ($limit !== null && $limit < 1) {
            throw new \InvalidArgumentException('invalid value for "$limit" when calling PaymentMethodApi.getAllPaymentMethods, must be bigger than or equal to 1.');
        }
        

        $resourcePath = '/v2/payment_methods';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $id,
            'id', // param base name
            'array', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $type,
            'type', // param base name
            'array', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $status,
            'status', // param base name
            'array', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $reusability,
            'reusability', // param base name
            'PaymentMethodReusability', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $customer_id,
            'customer_id', // param base name
            'string', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $reference_id,
            'reference_id', // param base name
            'string', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $after_id,
            'after_id', // param base name
            'string', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $before_id,
            'before_id', // param base name
            'string', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $limit,
            'limit', // param base name
            'integer', // openApiType
            'form', // style
            true, // explode
            false // required
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
     * Operation expirePaymentMethod
     *
     * Expires a payment method
     *
     * @param  string $payment_method_id payment_method_id (required)
     * @param  string $for_user_id for_user_id (optional)
     * @param  \Xendit\PaymentMethod\PaymentMethodExpireParameters $payment_method_expire_parameters payment_method_expire_parameters (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['expirePaymentMethod'] to see the possible values for this operation
     *
     * @throws \Xendit\XenditSdkException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Xendit\PaymentMethod\PaymentMethod
     */
    public function expirePaymentMethod($payment_method_id, $for_user_id = null, $payment_method_expire_parameters = null, string $contentType = self::contentTypes['expirePaymentMethod'][0])
    {
        list($response) = $this->expirePaymentMethodWithHttpInfo($payment_method_id, $for_user_id, $payment_method_expire_parameters, $contentType);
        return $response;
    }

    /**
     * Operation expirePaymentMethodWithHttpInfo
     *
     * Expires a payment method
     *
     * @param  string $payment_method_id (required)
     * @param  string $for_user_id (optional)
     * @param  \Xendit\PaymentMethod\PaymentMethodExpireParameters $payment_method_expire_parameters (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['expirePaymentMethod'] to see the possible values for this operation
     *
     * @throws \Xendit\XenditSdkException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Xendit\PaymentMethod\PaymentMethod, HTTP status code, HTTP response headers (array of strings)
     */
    public function expirePaymentMethodWithHttpInfo($payment_method_id, $for_user_id = null, $payment_method_expire_parameters = null, string $contentType = self::contentTypes['expirePaymentMethod'][0])
    {
        $request = $this->expirePaymentMethodRequest($payment_method_id, $for_user_id, $payment_method_expire_parameters, $contentType);

        $options = $this->createHttpClientOption();
        try {
            $response = $this->client->send($request, $options);
        } catch (RequestException $e) {
            throw new XenditSdkException(
                $e->getResponse() && $e->getResponse()->getBody() ? json_decode((string) $e->getResponse()->getBody()) : null,
                (string) $e->getCode(),
                $e->getMessage() ? $e->getMessage() : sprintf('Error connecting to the API (%s)', "expirePaymentMethodRequest")
            );
        } catch (ConnectException $e) {
            throw new XenditSdkException(
                null,
                (string) $e->getCode(),
                $e->getMessage() ? $e->getMessage() : sprintf('Error connecting to the API (%s)', "expirePaymentMethodRequest")
            );
        }  catch (GuzzleException $e) {
            throw new XenditSdkException(
                null,
                (string) $e->getCode(),
                $e->getMessage() ? $e->getMessage() : sprintf('Error instantiating client for API (%s)', "expirePaymentMethodRequest")
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
        $returnType = '\Xendit\PaymentMethod\PaymentMethod';
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
     * Operation expirePaymentMethodAsync
     *
     * Expires a payment method
     *
     * @param  string $payment_method_id (required)
     * @param  string $for_user_id (optional)
     * @param  \Xendit\PaymentMethod\PaymentMethodExpireParameters $payment_method_expire_parameters (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['expirePaymentMethod'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function expirePaymentMethodAsync($payment_method_id, $for_user_id = null, $payment_method_expire_parameters = null, string $contentType = self::contentTypes['expirePaymentMethod'][0])
    {
        return $this->expirePaymentMethodAsyncWithHttpInfo($payment_method_id, $for_user_id, $payment_method_expire_parameters, $contentType)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation expirePaymentMethodAsyncWithHttpInfo
     *
     * Expires a payment method
     *
     * @param  string $payment_method_id (required)
     * @param  string $for_user_id (optional)
     * @param  \Xendit\PaymentMethod\PaymentMethodExpireParameters $payment_method_expire_parameters (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['expirePaymentMethod'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function expirePaymentMethodAsyncWithHttpInfo($payment_method_id, $for_user_id = null, $payment_method_expire_parameters = null, string $contentType = self::contentTypes['expirePaymentMethod'][0])
    {
        $returnType = '\Xendit\PaymentMethod\PaymentMethod';
        $request = $this->expirePaymentMethodRequest($payment_method_id, $for_user_id, $payment_method_expire_parameters, $contentType);

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
                        $e->getMessage() ? $e->getMessage() : sprintf('Error connecting to the API (%s)', "expirePaymentMethodRequest")
                    );
                }
            );
    }

    /**
     * Create request for operation 'expirePaymentMethod'
     *
     * @param  string $payment_method_id (required)
     * @param  string $for_user_id (optional)
     * @param  \Xendit\PaymentMethod\PaymentMethodExpireParameters $payment_method_expire_parameters (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['expirePaymentMethod'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function expirePaymentMethodRequest($payment_method_id, $for_user_id = null, $payment_method_expire_parameters = null, string $contentType = self::contentTypes['expirePaymentMethod'][0])
    {

        // verify the required parameter 'payment_method_id' is set
        if ($payment_method_id === null || (is_array($payment_method_id) && count($payment_method_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $payment_method_id when calling expirePaymentMethod'
            );
        }




        $resourcePath = '/v2/payment_methods/{paymentMethodId}/expire';
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
        if ($payment_method_id !== null) {
            $resourcePath = str_replace(
                '{' . 'paymentMethodId' . '}',
                ObjectSerializer::toPathValue($payment_method_id),
                $resourcePath
            );
        }


        $headers = $this->headerSelector->selectHeaders(
            ['application/json', ],
            $contentType,
            $multipart
        );

        // for model (json/xml)
        if (isset($payment_method_expire_parameters)) {
            if (stripos($headers['Content-Type'], 'application/json') !== false) {
                # if Content-Type contains "application/json", json_encode the body
                $httpBody = \GuzzleHttp\Utils::jsonEncode(ObjectSerializer::sanitizeForSerialization($payment_method_expire_parameters));
            } else {
                $httpBody = $payment_method_expire_parameters;
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
     * Operation authPaymentMethod
     *
     * Validate a payment method&#39;s linking OTP
     *
     * @param  string $payment_method_id payment_method_id (required)
     * @param  string $for_user_id for_user_id (optional)
     * @param  \Xendit\PaymentMethod\PaymentMethodAuthParameters $payment_method_auth_parameters payment_method_auth_parameters (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['authPaymentMethod'] to see the possible values for this operation
     *
     * @throws \Xendit\XenditSdkException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Xendit\PaymentMethod\PaymentMethod
     */
    public function authPaymentMethod($payment_method_id, $for_user_id = null, $payment_method_auth_parameters = null, string $contentType = self::contentTypes['authPaymentMethod'][0])
    {
        list($response) = $this->authPaymentMethodWithHttpInfo($payment_method_id, $for_user_id, $payment_method_auth_parameters, $contentType);
        return $response;
    }

    /**
     * Operation authPaymentMethodWithHttpInfo
     *
     * Validate a payment method&#39;s linking OTP
     *
     * @param  string $payment_method_id (required)
     * @param  string $for_user_id (optional)
     * @param  \Xendit\PaymentMethod\PaymentMethodAuthParameters $payment_method_auth_parameters (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['authPaymentMethod'] to see the possible values for this operation
     *
     * @throws \Xendit\XenditSdkException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Xendit\PaymentMethod\PaymentMethod, HTTP status code, HTTP response headers (array of strings)
     */
    public function authPaymentMethodWithHttpInfo($payment_method_id, $for_user_id = null, $payment_method_auth_parameters = null, string $contentType = self::contentTypes['authPaymentMethod'][0])
    {
        $request = $this->authPaymentMethodRequest($payment_method_id, $for_user_id, $payment_method_auth_parameters, $contentType);

        $options = $this->createHttpClientOption();
        try {
            $response = $this->client->send($request, $options);
        } catch (RequestException $e) {
            throw new XenditSdkException(
                $e->getResponse() && $e->getResponse()->getBody() ? json_decode((string) $e->getResponse()->getBody()) : null,
                (string) $e->getCode(),
                $e->getMessage() ? $e->getMessage() : sprintf('Error connecting to the API (%s)', "authPaymentMethodRequest")
            );
        } catch (ConnectException $e) {
            throw new XenditSdkException(
                null,
                (string) $e->getCode(),
                $e->getMessage() ? $e->getMessage() : sprintf('Error connecting to the API (%s)', "authPaymentMethodRequest")
            );
        }  catch (GuzzleException $e) {
            throw new XenditSdkException(
                null,
                (string) $e->getCode(),
                $e->getMessage() ? $e->getMessage() : sprintf('Error instantiating client for API (%s)', "authPaymentMethodRequest")
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
        $returnType = '\Xendit\PaymentMethod\PaymentMethod';
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
     * Operation authPaymentMethodAsync
     *
     * Validate a payment method&#39;s linking OTP
     *
     * @param  string $payment_method_id (required)
     * @param  string $for_user_id (optional)
     * @param  \Xendit\PaymentMethod\PaymentMethodAuthParameters $payment_method_auth_parameters (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['authPaymentMethod'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function authPaymentMethodAsync($payment_method_id, $for_user_id = null, $payment_method_auth_parameters = null, string $contentType = self::contentTypes['authPaymentMethod'][0])
    {
        return $this->authPaymentMethodAsyncWithHttpInfo($payment_method_id, $for_user_id, $payment_method_auth_parameters, $contentType)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation authPaymentMethodAsyncWithHttpInfo
     *
     * Validate a payment method&#39;s linking OTP
     *
     * @param  string $payment_method_id (required)
     * @param  string $for_user_id (optional)
     * @param  \Xendit\PaymentMethod\PaymentMethodAuthParameters $payment_method_auth_parameters (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['authPaymentMethod'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function authPaymentMethodAsyncWithHttpInfo($payment_method_id, $for_user_id = null, $payment_method_auth_parameters = null, string $contentType = self::contentTypes['authPaymentMethod'][0])
    {
        $returnType = '\Xendit\PaymentMethod\PaymentMethod';
        $request = $this->authPaymentMethodRequest($payment_method_id, $for_user_id, $payment_method_auth_parameters, $contentType);

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
                        $e->getMessage() ? $e->getMessage() : sprintf('Error connecting to the API (%s)', "authPaymentMethodRequest")
                    );
                }
            );
    }

    /**
     * Create request for operation 'authPaymentMethod'
     *
     * @param  string $payment_method_id (required)
     * @param  string $for_user_id (optional)
     * @param  \Xendit\PaymentMethod\PaymentMethodAuthParameters $payment_method_auth_parameters (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['authPaymentMethod'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function authPaymentMethodRequest($payment_method_id, $for_user_id = null, $payment_method_auth_parameters = null, string $contentType = self::contentTypes['authPaymentMethod'][0])
    {

        // verify the required parameter 'payment_method_id' is set
        if ($payment_method_id === null || (is_array($payment_method_id) && count($payment_method_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $payment_method_id when calling authPaymentMethod'
            );
        }




        $resourcePath = '/v2/payment_methods/{paymentMethodId}/auth';
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
        if ($payment_method_id !== null) {
            $resourcePath = str_replace(
                '{' . 'paymentMethodId' . '}',
                ObjectSerializer::toPathValue($payment_method_id),
                $resourcePath
            );
        }


        $headers = $this->headerSelector->selectHeaders(
            ['application/json', ],
            $contentType,
            $multipart
        );

        // for model (json/xml)
        if (isset($payment_method_auth_parameters)) {
            if (stripos($headers['Content-Type'], 'application/json') !== false) {
                # if Content-Type contains "application/json", json_encode the body
                $httpBody = \GuzzleHttp\Utils::jsonEncode(ObjectSerializer::sanitizeForSerialization($payment_method_auth_parameters));
            } else {
                $httpBody = $payment_method_auth_parameters;
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
     * Operation simulatePayment
     *
     * Makes payment with matching PaymentMethodID.
     *
     * @param  string $payment_method_id payment_method_id (required)
     * @param  \Xendit\PaymentMethod\SimulatePaymentRequest $simulate_payment_request simulate_payment_request (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['simulatePayment'] to see the possible values for this operation
     *
     * @throws \Xendit\XenditSdkException on non-2xx response
     * @throws \InvalidArgumentException
     * @return void
     */
    public function simulatePayment($payment_method_id, $simulate_payment_request = null, string $contentType = self::contentTypes['simulatePayment'][0])
    {
        $this->simulatePaymentWithHttpInfo($payment_method_id, $simulate_payment_request, $contentType);
    }

    /**
     * Operation simulatePaymentWithHttpInfo
     *
     * Makes payment with matching PaymentMethodID.
     *
     * @param  string $payment_method_id (required)
     * @param  \Xendit\PaymentMethod\SimulatePaymentRequest $simulate_payment_request (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['simulatePayment'] to see the possible values for this operation
     *
     * @throws \Xendit\XenditSdkException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of null, HTTP status code, HTTP response headers (array of strings)
     */
    public function simulatePaymentWithHttpInfo($payment_method_id, $simulate_payment_request = null, string $contentType = self::contentTypes['simulatePayment'][0])
    {
        $request = $this->simulatePaymentRequest($payment_method_id, $simulate_payment_request, $contentType);

        $options = $this->createHttpClientOption();
        try {
            $response = $this->client->send($request, $options);
        } catch (RequestException $e) {
            throw new XenditSdkException(
                $e->getResponse() && $e->getResponse()->getBody() ? json_decode((string) $e->getResponse()->getBody()) : null,
                (string) $e->getCode(),
                $e->getMessage() ? $e->getMessage() : sprintf('Error connecting to the API (%s)', "simulatePaymentRequest")
            );
        } catch (ConnectException $e) {
            throw new XenditSdkException(
                null,
                (string) $e->getCode(),
                $e->getMessage() ? $e->getMessage() : sprintf('Error connecting to the API (%s)', "simulatePaymentRequest")
            );
        }  catch (GuzzleException $e) {
            throw new XenditSdkException(
                null,
                (string) $e->getCode(),
                $e->getMessage() ? $e->getMessage() : sprintf('Error instantiating client for API (%s)', "simulatePaymentRequest")
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

        return [null, $statusCode, $response->getHeaders()];
    }

    /**
     * Operation simulatePaymentAsync
     *
     * Makes payment with matching PaymentMethodID.
     *
     * @param  string $payment_method_id (required)
     * @param  \Xendit\PaymentMethod\SimulatePaymentRequest $simulate_payment_request (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['simulatePayment'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function simulatePaymentAsync($payment_method_id, $simulate_payment_request = null, string $contentType = self::contentTypes['simulatePayment'][0])
    {
        return $this->simulatePaymentAsyncWithHttpInfo($payment_method_id, $simulate_payment_request, $contentType)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation simulatePaymentAsyncWithHttpInfo
     *
     * Makes payment with matching PaymentMethodID.
     *
     * @param  string $payment_method_id (required)
     * @param  \Xendit\PaymentMethod\SimulatePaymentRequest $simulate_payment_request (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['simulatePayment'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function simulatePaymentAsyncWithHttpInfo($payment_method_id, $simulate_payment_request = null, string $contentType = self::contentTypes['simulatePayment'][0])
    {
        $returnType = '\Xendit';
        $request = $this->simulatePaymentRequest($payment_method_id, $simulate_payment_request, $contentType);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    return [null, $response->getStatusCode(), $response->getHeaders()];
                },
                function ($e) {
                    throw new XenditSdkException(
                        $e->getResponse() && $e->getResponse()->getBody() ? json_decode((string) $e->getResponse()->getBody()) : null,
                        (string) $e->getCode(),
                        $e->getMessage() ? $e->getMessage() : sprintf('Error connecting to the API (%s)', "simulatePaymentRequest")
                    );
                }
            );
    }

    /**
     * Create request for operation 'simulatePayment'
     *
     * @param  string $payment_method_id (required)
     * @param  \Xendit\PaymentMethod\SimulatePaymentRequest $simulate_payment_request (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['simulatePayment'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function simulatePaymentRequest($payment_method_id, $simulate_payment_request = null, string $contentType = self::contentTypes['simulatePayment'][0])
    {

        // verify the required parameter 'payment_method_id' is set
        if ($payment_method_id === null || (is_array($payment_method_id) && count($payment_method_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $payment_method_id when calling simulatePayment'
            );
        }



        $resourcePath = '/v2/payment_methods/{paymentMethodId}/payments/simulate';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;


        // path params
        if ($payment_method_id !== null) {
            $resourcePath = str_replace(
                '{' . 'paymentMethodId' . '}',
                ObjectSerializer::toPathValue($payment_method_id),
                $resourcePath
            );
        }


        $headers = $this->headerSelector->selectHeaders(
            ['application/json', ],
            $contentType,
            $multipart
        );

        // for model (json/xml)
        if (isset($simulate_payment_request)) {
            if (stripos($headers['Content-Type'], 'application/json') !== false) {
                # if Content-Type contains "application/json", json_encode the body
                $httpBody = \GuzzleHttp\Utils::jsonEncode(ObjectSerializer::sanitizeForSerialization($simulate_payment_request));
            } else {
                $httpBody = $simulate_payment_request;
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
