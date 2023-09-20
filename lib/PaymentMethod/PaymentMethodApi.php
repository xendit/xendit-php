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
 * The version of the OpenAPI document: 2.87.2
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
use Xendit\ApiException;
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
        'authPaymentMethod' => [
            'application/json',
        ],
        'createPaymentMethod' => [
            'application/json',
        ],
        'expirePaymentMethod' => [
            'application/json',
        ],
        'getAllPaymentChannels' => [
            'application/json',
        ],
        'getAllPaymentMethods' => [
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
     * Operation authPaymentMethod
     *
     * Validate a payment method&#39;s linking OTP
     *
     * @param  string $payment_method_id payment_method_id (required)
     * @param  \Xendit\PaymentMethod\PaymentMethodAuthParameters $payment_method_auth_parameters payment_method_auth_parameters (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['authPaymentMethod'] to see the possible values for this operation
     *
     * @throws \Xendit\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return Xendit\PaymentMethod\PaymentMethod|Xendit\PaymentMethod\GetAllPaymentMethods400Response|Xendit\PaymentMethod\GetAllPaymentMethods403Response|Xendit\PaymentMethod\GetAllPaymentMethods404Response|Xendit\PaymentMethod\CreatePaymentMethod409Response|Xendit\PaymentMethod\CreatePaymentMethod503Response|Xendit\PaymentMethod\GetAllPaymentMethodsDefaultResponse
     */
    public function authPaymentMethod($payment_method_id, $payment_method_auth_parameters = null, string $contentType = self::contentTypes['authPaymentMethod'][0])
    {
        list($response) = $this->authPaymentMethodWithHttpInfo($payment_method_id, $payment_method_auth_parameters, $contentType);
        return $response;
    }

    /**
     * Operation authPaymentMethodWithHttpInfo
     *
     * Validate a payment method&#39;s linking OTP
     *
     * @param  string $payment_method_id (required)
     * @param  \Xendit\PaymentMethod\PaymentMethodAuthParameters $payment_method_auth_parameters (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['authPaymentMethod'] to see the possible values for this operation
     *
     * @throws \Xendit\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of Xendit\PaymentMethod\PaymentMethod|Xendit\PaymentMethod\GetAllPaymentMethods400Response|Xendit\PaymentMethod\GetAllPaymentMethods403Response|Xendit\PaymentMethod\GetAllPaymentMethods404Response|Xendit\PaymentMethod\CreatePaymentMethod409Response|Xendit\PaymentMethod\CreatePaymentMethod503Response|Xendit\PaymentMethod\GetAllPaymentMethodsDefaultResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function authPaymentMethodWithHttpInfo($payment_method_id, $payment_method_auth_parameters = null, string $contentType = self::contentTypes['authPaymentMethod'][0])
    {
        $request = $this->authPaymentMethodRequest($payment_method_id, $payment_method_auth_parameters, $contentType);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? (string) $e->getResponse()->getBody() : null
                );
            } catch (ConnectException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    null,
                    null
                );
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        (string) $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    (string) $response->getBody()
                );
            }

            switch($statusCode) {
                case 200:
                    if ('Xendit\PaymentMethod\PaymentMethod' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('Xendit\PaymentMethod\PaymentMethod' !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, 'Xendit\PaymentMethod\PaymentMethod', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                case 400:
                    if ('Xendit\PaymentMethod\GetAllPaymentMethods400Response' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('Xendit\PaymentMethod\GetAllPaymentMethods400Response' !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, 'Xendit\PaymentMethod\GetAllPaymentMethods400Response', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                case 403:
                    if ('Xendit\PaymentMethod\GetAllPaymentMethods403Response' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('Xendit\PaymentMethod\GetAllPaymentMethods403Response' !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, 'Xendit\PaymentMethod\GetAllPaymentMethods403Response', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                case 404:
                    if ('Xendit\PaymentMethod\GetAllPaymentMethods404Response' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('Xendit\PaymentMethod\GetAllPaymentMethods404Response' !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, 'Xendit\PaymentMethod\GetAllPaymentMethods404Response', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                case 409:
                    if ('Xendit\PaymentMethod\CreatePaymentMethod409Response' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('Xendit\PaymentMethod\CreatePaymentMethod409Response' !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, 'Xendit\PaymentMethod\CreatePaymentMethod409Response', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                case 503:
                    if ('Xendit\PaymentMethod\CreatePaymentMethod503Response' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('Xendit\PaymentMethod\CreatePaymentMethod503Response' !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, 'Xendit\PaymentMethod\CreatePaymentMethod503Response', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                default:
                    if ('Xendit\PaymentMethod\GetAllPaymentMethodsDefaultResponse' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('Xendit\PaymentMethod\GetAllPaymentMethodsDefaultResponse' !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, 'Xendit\PaymentMethod\GetAllPaymentMethodsDefaultResponse', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
            }

            $returnType = '\PaymentMethod\PaymentMethod';
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

        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        'Xendit\PaymentMethod\PaymentMethod',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 400:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        'Xendit\PaymentMethod\GetAllPaymentMethods400Response',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 403:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        'Xendit\PaymentMethod\GetAllPaymentMethods403Response',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 404:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        'Xendit\PaymentMethod\GetAllPaymentMethods404Response',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 409:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        'Xendit\PaymentMethod\CreatePaymentMethod409Response',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 503:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        'Xendit\PaymentMethod\CreatePaymentMethod503Response',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                default:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        'Xendit\PaymentMethod\GetAllPaymentMethodsDefaultResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation authPaymentMethodAsync
     *
     * Validate a payment method&#39;s linking OTP
     *
     * @param  Xenditstring $payment_method_id (required)
     * @param  Xendit\Xendit\PaymentMethod\PaymentMethodAuthParameters $payment_method_auth_parameters (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['authPaymentMethod'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function authPaymentMethodAsync($payment_method_id, $payment_method_auth_parameters = null, string $contentType = self::contentTypes['authPaymentMethod'][0])
    {
        return $this->authPaymentMethodAsyncWithHttpInfo($payment_method_id, $payment_method_auth_parameters, $contentType)
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
     * @param  Xenditstring $payment_method_id (required)
     * @param  Xendit\Xendit\PaymentMethod\PaymentMethodAuthParameters $payment_method_auth_parameters (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['authPaymentMethod'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function authPaymentMethodAsyncWithHttpInfo($payment_method_id, $payment_method_auth_parameters = null, string $contentType = self::contentTypes['authPaymentMethod'][0])
    {
        $returnType = '\PaymentMethod\PaymentMethod';
        $request = $this->authPaymentMethodRequest($payment_method_id, $payment_method_auth_parameters, $contentType);

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
                function ($exception) {
                    $response = $exception->getResponse();
                    $statusCode = $response->getStatusCode();
                    throw new ApiException(
                        sprintf(
                            '[%d] Error connecting to the API (%s)',
                            $statusCode,
                            $exception->getRequest()->getUri()
                        ),
                        $statusCode,
                        $response->getHeaders(),
                        (string) $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'authPaymentMethod'
     *
     * @param  string $payment_method_id (required)
     * @param  \Xendit\PaymentMethod\PaymentMethodAuthParameters $payment_method_auth_parameters (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['authPaymentMethod'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function authPaymentMethodRequest($payment_method_id, $payment_method_auth_parameters = null, string $contentType = self::contentTypes['authPaymentMethod'][0])
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
        $defaultHeaders['xendit-lib-ver'] = '3.0.0';

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
     * Operation createPaymentMethod
     *
     * Creates payment method
     *
     * @param  \Xendit\PaymentMethod\PaymentMethodParameters $payment_method_parameters payment_method_parameters (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['createPaymentMethod'] to see the possible values for this operation
     *
     * @throws \Xendit\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return Xendit\PaymentMethod\PaymentMethod|Xendit\PaymentMethod\GetAllPaymentMethods400Response|Xendit\PaymentMethod\GetAllPaymentMethods403Response|Xendit\PaymentMethod\GetAllPaymentMethods404Response|Xendit\PaymentMethod\CreatePaymentMethod409Response|Xendit\PaymentMethod\CreatePaymentMethod503Response|Xendit\PaymentMethod\GetAllPaymentMethodsDefaultResponse
     */
    public function createPaymentMethod($payment_method_parameters = null, string $contentType = self::contentTypes['createPaymentMethod'][0])
    {
        list($response) = $this->createPaymentMethodWithHttpInfo($payment_method_parameters, $contentType);
        return $response;
    }

    /**
     * Operation createPaymentMethodWithHttpInfo
     *
     * Creates payment method
     *
     * @param  \Xendit\PaymentMethod\PaymentMethodParameters $payment_method_parameters (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['createPaymentMethod'] to see the possible values for this operation
     *
     * @throws \Xendit\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of Xendit\PaymentMethod\PaymentMethod|Xendit\PaymentMethod\GetAllPaymentMethods400Response|Xendit\PaymentMethod\GetAllPaymentMethods403Response|Xendit\PaymentMethod\GetAllPaymentMethods404Response|Xendit\PaymentMethod\CreatePaymentMethod409Response|Xendit\PaymentMethod\CreatePaymentMethod503Response|Xendit\PaymentMethod\GetAllPaymentMethodsDefaultResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function createPaymentMethodWithHttpInfo($payment_method_parameters = null, string $contentType = self::contentTypes['createPaymentMethod'][0])
    {
        $request = $this->createPaymentMethodRequest($payment_method_parameters, $contentType);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? (string) $e->getResponse()->getBody() : null
                );
            } catch (ConnectException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    null,
                    null
                );
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        (string) $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    (string) $response->getBody()
                );
            }

            switch($statusCode) {
                case 201:
                    if ('Xendit\PaymentMethod\PaymentMethod' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('Xendit\PaymentMethod\PaymentMethod' !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, 'Xendit\PaymentMethod\PaymentMethod', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                case 400:
                    if ('Xendit\PaymentMethod\GetAllPaymentMethods400Response' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('Xendit\PaymentMethod\GetAllPaymentMethods400Response' !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, 'Xendit\PaymentMethod\GetAllPaymentMethods400Response', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                case 403:
                    if ('Xendit\PaymentMethod\GetAllPaymentMethods403Response' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('Xendit\PaymentMethod\GetAllPaymentMethods403Response' !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, 'Xendit\PaymentMethod\GetAllPaymentMethods403Response', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                case 404:
                    if ('Xendit\PaymentMethod\GetAllPaymentMethods404Response' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('Xendit\PaymentMethod\GetAllPaymentMethods404Response' !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, 'Xendit\PaymentMethod\GetAllPaymentMethods404Response', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                case 409:
                    if ('Xendit\PaymentMethod\CreatePaymentMethod409Response' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('Xendit\PaymentMethod\CreatePaymentMethod409Response' !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, 'Xendit\PaymentMethod\CreatePaymentMethod409Response', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                case 503:
                    if ('Xendit\PaymentMethod\CreatePaymentMethod503Response' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('Xendit\PaymentMethod\CreatePaymentMethod503Response' !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, 'Xendit\PaymentMethod\CreatePaymentMethod503Response', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                default:
                    if ('Xendit\PaymentMethod\GetAllPaymentMethodsDefaultResponse' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('Xendit\PaymentMethod\GetAllPaymentMethodsDefaultResponse' !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, 'Xendit\PaymentMethod\GetAllPaymentMethodsDefaultResponse', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
            }

            $returnType = '\PaymentMethod\PaymentMethod';
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

        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 201:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        'Xendit\PaymentMethod\PaymentMethod',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 400:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        'Xendit\PaymentMethod\GetAllPaymentMethods400Response',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 403:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        'Xendit\PaymentMethod\GetAllPaymentMethods403Response',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 404:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        'Xendit\PaymentMethod\GetAllPaymentMethods404Response',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 409:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        'Xendit\PaymentMethod\CreatePaymentMethod409Response',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 503:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        'Xendit\PaymentMethod\CreatePaymentMethod503Response',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                default:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        'Xendit\PaymentMethod\GetAllPaymentMethodsDefaultResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation createPaymentMethodAsync
     *
     * Creates payment method
     *
     * @param  Xendit\Xendit\PaymentMethod\PaymentMethodParameters $payment_method_parameters (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['createPaymentMethod'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function createPaymentMethodAsync($payment_method_parameters = null, string $contentType = self::contentTypes['createPaymentMethod'][0])
    {
        return $this->createPaymentMethodAsyncWithHttpInfo($payment_method_parameters, $contentType)
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
     * @param  Xendit\Xendit\PaymentMethod\PaymentMethodParameters $payment_method_parameters (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['createPaymentMethod'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function createPaymentMethodAsyncWithHttpInfo($payment_method_parameters = null, string $contentType = self::contentTypes['createPaymentMethod'][0])
    {
        $returnType = '\PaymentMethod\PaymentMethod';
        $request = $this->createPaymentMethodRequest($payment_method_parameters, $contentType);

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
                function ($exception) {
                    $response = $exception->getResponse();
                    $statusCode = $response->getStatusCode();
                    throw new ApiException(
                        sprintf(
                            '[%d] Error connecting to the API (%s)',
                            $statusCode,
                            $exception->getRequest()->getUri()
                        ),
                        $statusCode,
                        $response->getHeaders(),
                        (string) $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'createPaymentMethod'
     *
     * @param  \Xendit\PaymentMethod\PaymentMethodParameters $payment_method_parameters (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['createPaymentMethod'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function createPaymentMethodRequest($payment_method_parameters = null, string $contentType = self::contentTypes['createPaymentMethod'][0])
    {



        $resourcePath = '/v2/payment_methods';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;




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
        $defaultHeaders['xendit-lib-ver'] = '3.0.0';

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
     * Operation expirePaymentMethod
     *
     * Expires a payment method
     *
     * @param  string $payment_method_id payment_method_id (required)
     * @param  \Xendit\PaymentMethod\PaymentMethodExpireParameters $payment_method_expire_parameters payment_method_expire_parameters (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['expirePaymentMethod'] to see the possible values for this operation
     *
     * @throws \Xendit\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return Xendit\PaymentMethod\PaymentMethod|Xendit\PaymentMethod\GetAllPaymentMethods400Response|Xendit\PaymentMethod\GetAllPaymentMethods403Response|Xendit\PaymentMethod\GetAllPaymentMethods404Response|Xendit\PaymentMethod\CreatePaymentMethod503Response|Xendit\PaymentMethod\GetAllPaymentMethodsDefaultResponse
     */
    public function expirePaymentMethod($payment_method_id, $payment_method_expire_parameters = null, string $contentType = self::contentTypes['expirePaymentMethod'][0])
    {
        list($response) = $this->expirePaymentMethodWithHttpInfo($payment_method_id, $payment_method_expire_parameters, $contentType);
        return $response;
    }

    /**
     * Operation expirePaymentMethodWithHttpInfo
     *
     * Expires a payment method
     *
     * @param  string $payment_method_id (required)
     * @param  \Xendit\PaymentMethod\PaymentMethodExpireParameters $payment_method_expire_parameters (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['expirePaymentMethod'] to see the possible values for this operation
     *
     * @throws \Xendit\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of Xendit\PaymentMethod\PaymentMethod|Xendit\PaymentMethod\GetAllPaymentMethods400Response|Xendit\PaymentMethod\GetAllPaymentMethods403Response|Xendit\PaymentMethod\GetAllPaymentMethods404Response|Xendit\PaymentMethod\CreatePaymentMethod503Response|Xendit\PaymentMethod\GetAllPaymentMethodsDefaultResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function expirePaymentMethodWithHttpInfo($payment_method_id, $payment_method_expire_parameters = null, string $contentType = self::contentTypes['expirePaymentMethod'][0])
    {
        $request = $this->expirePaymentMethodRequest($payment_method_id, $payment_method_expire_parameters, $contentType);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? (string) $e->getResponse()->getBody() : null
                );
            } catch (ConnectException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    null,
                    null
                );
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        (string) $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    (string) $response->getBody()
                );
            }

            switch($statusCode) {
                case 200:
                    if ('Xendit\PaymentMethod\PaymentMethod' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('Xendit\PaymentMethod\PaymentMethod' !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, 'Xendit\PaymentMethod\PaymentMethod', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                case 400:
                    if ('Xendit\PaymentMethod\GetAllPaymentMethods400Response' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('Xendit\PaymentMethod\GetAllPaymentMethods400Response' !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, 'Xendit\PaymentMethod\GetAllPaymentMethods400Response', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                case 403:
                    if ('Xendit\PaymentMethod\GetAllPaymentMethods403Response' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('Xendit\PaymentMethod\GetAllPaymentMethods403Response' !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, 'Xendit\PaymentMethod\GetAllPaymentMethods403Response', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                case 404:
                    if ('Xendit\PaymentMethod\GetAllPaymentMethods404Response' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('Xendit\PaymentMethod\GetAllPaymentMethods404Response' !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, 'Xendit\PaymentMethod\GetAllPaymentMethods404Response', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                case 503:
                    if ('Xendit\PaymentMethod\CreatePaymentMethod503Response' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('Xendit\PaymentMethod\CreatePaymentMethod503Response' !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, 'Xendit\PaymentMethod\CreatePaymentMethod503Response', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                default:
                    if ('Xendit\PaymentMethod\GetAllPaymentMethodsDefaultResponse' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('Xendit\PaymentMethod\GetAllPaymentMethodsDefaultResponse' !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, 'Xendit\PaymentMethod\GetAllPaymentMethodsDefaultResponse', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
            }

            $returnType = '\PaymentMethod\PaymentMethod';
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

        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        'Xendit\PaymentMethod\PaymentMethod',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 400:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        'Xendit\PaymentMethod\GetAllPaymentMethods400Response',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 403:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        'Xendit\PaymentMethod\GetAllPaymentMethods403Response',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 404:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        'Xendit\PaymentMethod\GetAllPaymentMethods404Response',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 503:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        'Xendit\PaymentMethod\CreatePaymentMethod503Response',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                default:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        'Xendit\PaymentMethod\GetAllPaymentMethodsDefaultResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation expirePaymentMethodAsync
     *
     * Expires a payment method
     *
     * @param  Xenditstring $payment_method_id (required)
     * @param  Xendit\Xendit\PaymentMethod\PaymentMethodExpireParameters $payment_method_expire_parameters (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['expirePaymentMethod'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function expirePaymentMethodAsync($payment_method_id, $payment_method_expire_parameters = null, string $contentType = self::contentTypes['expirePaymentMethod'][0])
    {
        return $this->expirePaymentMethodAsyncWithHttpInfo($payment_method_id, $payment_method_expire_parameters, $contentType)
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
     * @param  Xenditstring $payment_method_id (required)
     * @param  Xendit\Xendit\PaymentMethod\PaymentMethodExpireParameters $payment_method_expire_parameters (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['expirePaymentMethod'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function expirePaymentMethodAsyncWithHttpInfo($payment_method_id, $payment_method_expire_parameters = null, string $contentType = self::contentTypes['expirePaymentMethod'][0])
    {
        $returnType = '\PaymentMethod\PaymentMethod';
        $request = $this->expirePaymentMethodRequest($payment_method_id, $payment_method_expire_parameters, $contentType);

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
                function ($exception) {
                    $response = $exception->getResponse();
                    $statusCode = $response->getStatusCode();
                    throw new ApiException(
                        sprintf(
                            '[%d] Error connecting to the API (%s)',
                            $statusCode,
                            $exception->getRequest()->getUri()
                        ),
                        $statusCode,
                        $response->getHeaders(),
                        (string) $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'expirePaymentMethod'
     *
     * @param  string $payment_method_id (required)
     * @param  \Xendit\PaymentMethod\PaymentMethodExpireParameters $payment_method_expire_parameters (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['expirePaymentMethod'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function expirePaymentMethodRequest($payment_method_id, $payment_method_expire_parameters = null, string $contentType = self::contentTypes['expirePaymentMethod'][0])
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
        $defaultHeaders['xendit-lib-ver'] = '3.0.0';

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
     * Operation getAllPaymentChannels
     *
     * Get all payment channels
     *
     * @param  bool $is_activated is_activated (optional, default to true)
     * @param  string $type type (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getAllPaymentChannels'] to see the possible values for this operation
     *
     * @throws \Xendit\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return Xendit\PaymentMethod\PaymentChannelList|Xendit\PaymentMethod\GetAllPaymentMethods400Response|Xendit\PaymentMethod\GetAllPaymentMethods403Response|Xendit\PaymentMethod\GetAllPaymentMethodsDefaultResponse
     */
    public function getAllPaymentChannels($is_activated = true, $type = null, string $contentType = self::contentTypes['getAllPaymentChannels'][0])
    {
        list($response) = $this->getAllPaymentChannelsWithHttpInfo($is_activated, $type, $contentType);
        return $response;
    }

    /**
     * Operation getAllPaymentChannelsWithHttpInfo
     *
     * Get all payment channels
     *
     * @param  bool $is_activated (optional, default to true)
     * @param  string $type (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getAllPaymentChannels'] to see the possible values for this operation
     *
     * @throws \Xendit\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of Xendit\PaymentMethod\PaymentChannelList|Xendit\PaymentMethod\GetAllPaymentMethods400Response|Xendit\PaymentMethod\GetAllPaymentMethods403Response|Xendit\PaymentMethod\GetAllPaymentMethodsDefaultResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function getAllPaymentChannelsWithHttpInfo($is_activated = true, $type = null, string $contentType = self::contentTypes['getAllPaymentChannels'][0])
    {
        $request = $this->getAllPaymentChannelsRequest($is_activated, $type, $contentType);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? (string) $e->getResponse()->getBody() : null
                );
            } catch (ConnectException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    null,
                    null
                );
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        (string) $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    (string) $response->getBody()
                );
            }

            switch($statusCode) {
                case 200:
                    if ('Xendit\PaymentMethod\PaymentChannelList' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('Xendit\PaymentMethod\PaymentChannelList' !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, 'Xendit\PaymentMethod\PaymentChannelList', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                case 400:
                    if ('Xendit\PaymentMethod\GetAllPaymentMethods400Response' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('Xendit\PaymentMethod\GetAllPaymentMethods400Response' !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, 'Xendit\PaymentMethod\GetAllPaymentMethods400Response', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                case 403:
                    if ('Xendit\PaymentMethod\GetAllPaymentMethods403Response' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('Xendit\PaymentMethod\GetAllPaymentMethods403Response' !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, 'Xendit\PaymentMethod\GetAllPaymentMethods403Response', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                default:
                    if ('Xendit\PaymentMethod\GetAllPaymentMethodsDefaultResponse' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('Xendit\PaymentMethod\GetAllPaymentMethodsDefaultResponse' !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, 'Xendit\PaymentMethod\GetAllPaymentMethodsDefaultResponse', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
            }

            $returnType = '\PaymentMethod\PaymentChannelList';
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

        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        'Xendit\PaymentMethod\PaymentChannelList',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 400:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        'Xendit\PaymentMethod\GetAllPaymentMethods400Response',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 403:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        'Xendit\PaymentMethod\GetAllPaymentMethods403Response',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                default:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        'Xendit\PaymentMethod\GetAllPaymentMethodsDefaultResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation getAllPaymentChannelsAsync
     *
     * Get all payment channels
     *
     * @param  Xenditbool $is_activated (optional, default to true)
     * @param  Xenditstring $type (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getAllPaymentChannels'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getAllPaymentChannelsAsync($is_activated = true, $type = null, string $contentType = self::contentTypes['getAllPaymentChannels'][0])
    {
        return $this->getAllPaymentChannelsAsyncWithHttpInfo($is_activated, $type, $contentType)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation getAllPaymentChannelsAsyncWithHttpInfo
     *
     * Get all payment channels
     *
     * @param  Xenditbool $is_activated (optional, default to true)
     * @param  Xenditstring $type (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getAllPaymentChannels'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getAllPaymentChannelsAsyncWithHttpInfo($is_activated = true, $type = null, string $contentType = self::contentTypes['getAllPaymentChannels'][0])
    {
        $returnType = '\PaymentMethod\PaymentChannelList';
        $request = $this->getAllPaymentChannelsRequest($is_activated, $type, $contentType);

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
                function ($exception) {
                    $response = $exception->getResponse();
                    $statusCode = $response->getStatusCode();
                    throw new ApiException(
                        sprintf(
                            '[%d] Error connecting to the API (%s)',
                            $statusCode,
                            $exception->getRequest()->getUri()
                        ),
                        $statusCode,
                        $response->getHeaders(),
                        (string) $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'getAllPaymentChannels'
     *
     * @param  bool $is_activated (optional, default to true)
     * @param  string $type (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getAllPaymentChannels'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function getAllPaymentChannelsRequest($is_activated = true, $type = null, string $contentType = self::contentTypes['getAllPaymentChannels'][0])
    {




        $resourcePath = '/v2/payment_methods/channels';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $is_activated,
            'is_activated', // param base name
            'boolean', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $type,
            'type', // param base name
            'string', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);



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
        $defaultHeaders['xendit-lib-ver'] = '3.0.0';

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
     * Operation getAllPaymentMethods
     *
     * Get all payment methods by filters
     *
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
     * @throws \Xendit\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return Xendit\PaymentMethod\PaymentMethodList|Xendit\PaymentMethod\GetAllPaymentMethods400Response|Xendit\PaymentMethod\GetAllPaymentMethods403Response|Xendit\PaymentMethod\GetAllPaymentMethods404Response|Xendit\PaymentMethod\GetAllPaymentMethodsDefaultResponse
     */
    public function getAllPaymentMethods($id = null, $type = null, $status = null, $reusability = null, $customer_id = null, $reference_id = null, $after_id = null, $before_id = null, $limit = null, string $contentType = self::contentTypes['getAllPaymentMethods'][0])
    {
        list($response) = $this->getAllPaymentMethodsWithHttpInfo($id, $type, $status, $reusability, $customer_id, $reference_id, $after_id, $before_id, $limit, $contentType);
        return $response;
    }

    /**
     * Operation getAllPaymentMethodsWithHttpInfo
     *
     * Get all payment methods by filters
     *
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
     * @throws \Xendit\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of Xendit\PaymentMethod\PaymentMethodList|Xendit\PaymentMethod\GetAllPaymentMethods400Response|Xendit\PaymentMethod\GetAllPaymentMethods403Response|Xendit\PaymentMethod\GetAllPaymentMethods404Response|Xendit\PaymentMethod\GetAllPaymentMethodsDefaultResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function getAllPaymentMethodsWithHttpInfo($id = null, $type = null, $status = null, $reusability = null, $customer_id = null, $reference_id = null, $after_id = null, $before_id = null, $limit = null, string $contentType = self::contentTypes['getAllPaymentMethods'][0])
    {
        $request = $this->getAllPaymentMethodsRequest($id, $type, $status, $reusability, $customer_id, $reference_id, $after_id, $before_id, $limit, $contentType);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? (string) $e->getResponse()->getBody() : null
                );
            } catch (ConnectException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    null,
                    null
                );
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        (string) $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    (string) $response->getBody()
                );
            }

            switch($statusCode) {
                case 200:
                    if ('Xendit\PaymentMethod\PaymentMethodList' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('Xendit\PaymentMethod\PaymentMethodList' !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, 'Xendit\PaymentMethod\PaymentMethodList', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                case 400:
                    if ('Xendit\PaymentMethod\GetAllPaymentMethods400Response' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('Xendit\PaymentMethod\GetAllPaymentMethods400Response' !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, 'Xendit\PaymentMethod\GetAllPaymentMethods400Response', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                case 403:
                    if ('Xendit\PaymentMethod\GetAllPaymentMethods403Response' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('Xendit\PaymentMethod\GetAllPaymentMethods403Response' !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, 'Xendit\PaymentMethod\GetAllPaymentMethods403Response', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                case 404:
                    if ('Xendit\PaymentMethod\GetAllPaymentMethods404Response' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('Xendit\PaymentMethod\GetAllPaymentMethods404Response' !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, 'Xendit\PaymentMethod\GetAllPaymentMethods404Response', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                default:
                    if ('Xendit\PaymentMethod\GetAllPaymentMethodsDefaultResponse' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('Xendit\PaymentMethod\GetAllPaymentMethodsDefaultResponse' !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, 'Xendit\PaymentMethod\GetAllPaymentMethodsDefaultResponse', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
            }

            $returnType = '\PaymentMethod\PaymentMethodList';
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

        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        'Xendit\PaymentMethod\PaymentMethodList',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 400:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        'Xendit\PaymentMethod\GetAllPaymentMethods400Response',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 403:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        'Xendit\PaymentMethod\GetAllPaymentMethods403Response',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 404:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        'Xendit\PaymentMethod\GetAllPaymentMethods404Response',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                default:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        'Xendit\PaymentMethod\GetAllPaymentMethodsDefaultResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation getAllPaymentMethodsAsync
     *
     * Get all payment methods by filters
     *
     * @param  Xenditstring[] $id (optional)
     * @param  Xenditstring[] $type (optional)
     * @param  Xendit\PaymentMethod\PaymentMethodStatus[] $status (optional)
     * @param  XenditPaymentMethodReusability $reusability (optional)
     * @param  Xenditstring $customer_id (optional)
     * @param  Xenditstring $reference_id (optional)
     * @param  Xenditstring $after_id (optional)
     * @param  Xenditstring $before_id (optional)
     * @param  Xenditint $limit (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getAllPaymentMethods'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getAllPaymentMethodsAsync($id = null, $type = null, $status = null, $reusability = null, $customer_id = null, $reference_id = null, $after_id = null, $before_id = null, $limit = null, string $contentType = self::contentTypes['getAllPaymentMethods'][0])
    {
        return $this->getAllPaymentMethodsAsyncWithHttpInfo($id, $type, $status, $reusability, $customer_id, $reference_id, $after_id, $before_id, $limit, $contentType)
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
     * @param  Xenditstring[] $id (optional)
     * @param  Xenditstring[] $type (optional)
     * @param  Xendit\PaymentMethod\PaymentMethodStatus[] $status (optional)
     * @param  XenditPaymentMethodReusability $reusability (optional)
     * @param  Xenditstring $customer_id (optional)
     * @param  Xenditstring $reference_id (optional)
     * @param  Xenditstring $after_id (optional)
     * @param  Xenditstring $before_id (optional)
     * @param  Xenditint $limit (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getAllPaymentMethods'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getAllPaymentMethodsAsyncWithHttpInfo($id = null, $type = null, $status = null, $reusability = null, $customer_id = null, $reference_id = null, $after_id = null, $before_id = null, $limit = null, string $contentType = self::contentTypes['getAllPaymentMethods'][0])
    {
        $returnType = '\PaymentMethod\PaymentMethodList';
        $request = $this->getAllPaymentMethodsRequest($id, $type, $status, $reusability, $customer_id, $reference_id, $after_id, $before_id, $limit, $contentType);

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
                function ($exception) {
                    $response = $exception->getResponse();
                    $statusCode = $response->getStatusCode();
                    throw new ApiException(
                        sprintf(
                            '[%d] Error connecting to the API (%s)',
                            $statusCode,
                            $exception->getRequest()->getUri()
                        ),
                        $statusCode,
                        $response->getHeaders(),
                        (string) $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'getAllPaymentMethods'
     *
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
    public function getAllPaymentMethodsRequest($id = null, $type = null, $status = null, $reusability = null, $customer_id = null, $reference_id = null, $after_id = null, $before_id = null, $limit = null, string $contentType = self::contentTypes['getAllPaymentMethods'][0])
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
        $defaultHeaders['xendit-lib-ver'] = '3.0.0';

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
     * Operation getPaymentMethodByID
     *
     * Get payment method by ID
     *
     * @param  string $payment_method_id payment_method_id (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getPaymentMethodByID'] to see the possible values for this operation
     *
     * @throws \Xendit\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return Xendit\PaymentMethod\PaymentMethod|Xendit\PaymentMethod\GetAllPaymentMethods400Response|Xendit\PaymentMethod\GetAllPaymentMethods403Response|Xendit\PaymentMethod\GetAllPaymentMethods404Response|Xendit\PaymentMethod\GetAllPaymentMethodsDefaultResponse
     */
    public function getPaymentMethodByID($payment_method_id, string $contentType = self::contentTypes['getPaymentMethodByID'][0])
    {
        list($response) = $this->getPaymentMethodByIDWithHttpInfo($payment_method_id, $contentType);
        return $response;
    }

    /**
     * Operation getPaymentMethodByIDWithHttpInfo
     *
     * Get payment method by ID
     *
     * @param  string $payment_method_id (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getPaymentMethodByID'] to see the possible values for this operation
     *
     * @throws \Xendit\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of Xendit\PaymentMethod\PaymentMethod|Xendit\PaymentMethod\GetAllPaymentMethods400Response|Xendit\PaymentMethod\GetAllPaymentMethods403Response|Xendit\PaymentMethod\GetAllPaymentMethods404Response|Xendit\PaymentMethod\GetAllPaymentMethodsDefaultResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function getPaymentMethodByIDWithHttpInfo($payment_method_id, string $contentType = self::contentTypes['getPaymentMethodByID'][0])
    {
        $request = $this->getPaymentMethodByIDRequest($payment_method_id, $contentType);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? (string) $e->getResponse()->getBody() : null
                );
            } catch (ConnectException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    null,
                    null
                );
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        (string) $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    (string) $response->getBody()
                );
            }

            switch($statusCode) {
                case 200:
                    if ('Xendit\PaymentMethod\PaymentMethod' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('Xendit\PaymentMethod\PaymentMethod' !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, 'Xendit\PaymentMethod\PaymentMethod', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                case 400:
                    if ('Xendit\PaymentMethod\GetAllPaymentMethods400Response' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('Xendit\PaymentMethod\GetAllPaymentMethods400Response' !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, 'Xendit\PaymentMethod\GetAllPaymentMethods400Response', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                case 403:
                    if ('Xendit\PaymentMethod\GetAllPaymentMethods403Response' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('Xendit\PaymentMethod\GetAllPaymentMethods403Response' !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, 'Xendit\PaymentMethod\GetAllPaymentMethods403Response', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                case 404:
                    if ('Xendit\PaymentMethod\GetAllPaymentMethods404Response' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('Xendit\PaymentMethod\GetAllPaymentMethods404Response' !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, 'Xendit\PaymentMethod\GetAllPaymentMethods404Response', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                default:
                    if ('Xendit\PaymentMethod\GetAllPaymentMethodsDefaultResponse' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('Xendit\PaymentMethod\GetAllPaymentMethodsDefaultResponse' !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, 'Xendit\PaymentMethod\GetAllPaymentMethodsDefaultResponse', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
            }

            $returnType = '\PaymentMethod\PaymentMethod';
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

        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        'Xendit\PaymentMethod\PaymentMethod',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 400:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        'Xendit\PaymentMethod\GetAllPaymentMethods400Response',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 403:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        'Xendit\PaymentMethod\GetAllPaymentMethods403Response',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 404:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        'Xendit\PaymentMethod\GetAllPaymentMethods404Response',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                default:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        'Xendit\PaymentMethod\GetAllPaymentMethodsDefaultResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation getPaymentMethodByIDAsync
     *
     * Get payment method by ID
     *
     * @param  Xenditstring $payment_method_id (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getPaymentMethodByID'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getPaymentMethodByIDAsync($payment_method_id, string $contentType = self::contentTypes['getPaymentMethodByID'][0])
    {
        return $this->getPaymentMethodByIDAsyncWithHttpInfo($payment_method_id, $contentType)
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
     * @param  Xenditstring $payment_method_id (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getPaymentMethodByID'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getPaymentMethodByIDAsyncWithHttpInfo($payment_method_id, string $contentType = self::contentTypes['getPaymentMethodByID'][0])
    {
        $returnType = '\PaymentMethod\PaymentMethod';
        $request = $this->getPaymentMethodByIDRequest($payment_method_id, $contentType);

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
                function ($exception) {
                    $response = $exception->getResponse();
                    $statusCode = $response->getStatusCode();
                    throw new ApiException(
                        sprintf(
                            '[%d] Error connecting to the API (%s)',
                            $statusCode,
                            $exception->getRequest()->getUri()
                        ),
                        $statusCode,
                        $response->getHeaders(),
                        (string) $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'getPaymentMethodByID'
     *
     * @param  string $payment_method_id (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getPaymentMethodByID'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function getPaymentMethodByIDRequest($payment_method_id, string $contentType = self::contentTypes['getPaymentMethodByID'][0])
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
        $defaultHeaders['xendit-lib-ver'] = '3.0.0';

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
     * @param  string $after_id after_id (optional)
     * @param  string $before_id before_id (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getPaymentsByPaymentMethodId'] to see the possible values for this operation
     *
     * @throws \Xendit\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return Xenditobject|Xendit\PaymentMethod\GetAllPaymentMethods400Response|Xendit\PaymentMethod\GetAllPaymentMethods403Response|Xendit\PaymentMethod\GetAllPaymentMethods404Response|Xendit\PaymentMethod\CreatePaymentMethod503Response|Xendit\PaymentMethod\GetAllPaymentMethodsDefaultResponse
     */
    public function getPaymentsByPaymentMethodId($payment_method_id, $payment_request_id = null, $payment_method_id2 = null, $reference_id = null, $payment_method_type = null, $channel_code = null, $status = null, $currency = null, $created_gte = null, $created_lte = null, $updated_gte = null, $updated_lte = null, $limit = null, $after_id = null, $before_id = null, string $contentType = self::contentTypes['getPaymentsByPaymentMethodId'][0])
    {
        list($response) = $this->getPaymentsByPaymentMethodIdWithHttpInfo($payment_method_id, $payment_request_id, $payment_method_id2, $reference_id, $payment_method_type, $channel_code, $status, $currency, $created_gte, $created_lte, $updated_gte, $updated_lte, $limit, $after_id, $before_id, $contentType);
        return $response;
    }

    /**
     * Operation getPaymentsByPaymentMethodIdWithHttpInfo
     *
     * Returns payments with matching PaymentMethodID.
     *
     * @param  string $payment_method_id (required)
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
     * @param  string $after_id (optional)
     * @param  string $before_id (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getPaymentsByPaymentMethodId'] to see the possible values for this operation
     *
     * @throws \Xendit\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of Xenditobject|Xendit\PaymentMethod\GetAllPaymentMethods400Response|Xendit\PaymentMethod\GetAllPaymentMethods403Response|Xendit\PaymentMethod\GetAllPaymentMethods404Response|Xendit\PaymentMethod\CreatePaymentMethod503Response|Xendit\PaymentMethod\GetAllPaymentMethodsDefaultResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function getPaymentsByPaymentMethodIdWithHttpInfo($payment_method_id, $payment_request_id = null, $payment_method_id2 = null, $reference_id = null, $payment_method_type = null, $channel_code = null, $status = null, $currency = null, $created_gte = null, $created_lte = null, $updated_gte = null, $updated_lte = null, $limit = null, $after_id = null, $before_id = null, string $contentType = self::contentTypes['getPaymentsByPaymentMethodId'][0])
    {
        $request = $this->getPaymentsByPaymentMethodIdRequest($payment_method_id, $payment_request_id, $payment_method_id2, $reference_id, $payment_method_type, $channel_code, $status, $currency, $created_gte, $created_lte, $updated_gte, $updated_lte, $limit, $after_id, $before_id, $contentType);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? (string) $e->getResponse()->getBody() : null
                );
            } catch (ConnectException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    null,
                    null
                );
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        (string) $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    (string) $response->getBody()
                );
            }

            switch($statusCode) {
                case 200:
                    if ('Xenditobject' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('Xenditobject' !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, 'Xenditobject', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                case 400:
                    if ('Xendit\PaymentMethod\GetAllPaymentMethods400Response' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('Xendit\PaymentMethod\GetAllPaymentMethods400Response' !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, 'Xendit\PaymentMethod\GetAllPaymentMethods400Response', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                case 403:
                    if ('Xendit\PaymentMethod\GetAllPaymentMethods403Response' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('Xendit\PaymentMethod\GetAllPaymentMethods403Response' !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, 'Xendit\PaymentMethod\GetAllPaymentMethods403Response', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                case 404:
                    if ('Xendit\PaymentMethod\GetAllPaymentMethods404Response' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('Xendit\PaymentMethod\GetAllPaymentMethods404Response' !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, 'Xendit\PaymentMethod\GetAllPaymentMethods404Response', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                case 503:
                    if ('Xendit\PaymentMethod\CreatePaymentMethod503Response' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('Xendit\PaymentMethod\CreatePaymentMethod503Response' !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, 'Xendit\PaymentMethod\CreatePaymentMethod503Response', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                default:
                    if ('Xendit\PaymentMethod\GetAllPaymentMethodsDefaultResponse' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('Xendit\PaymentMethod\GetAllPaymentMethodsDefaultResponse' !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, 'Xendit\PaymentMethod\GetAllPaymentMethodsDefaultResponse', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
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

        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        'Xenditobject',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 400:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        'Xendit\PaymentMethod\GetAllPaymentMethods400Response',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 403:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        'Xendit\PaymentMethod\GetAllPaymentMethods403Response',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 404:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        'Xendit\PaymentMethod\GetAllPaymentMethods404Response',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 503:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        'Xendit\PaymentMethod\CreatePaymentMethod503Response',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                default:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        'Xendit\PaymentMethod\GetAllPaymentMethodsDefaultResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation getPaymentsByPaymentMethodIdAsync
     *
     * Returns payments with matching PaymentMethodID.
     *
     * @param  Xenditstring $payment_method_id (required)
     * @param  Xenditstring[] $payment_request_id (optional)
     * @param  Xenditstring[] $payment_method_id2 (optional)
     * @param  Xenditstring[] $reference_id (optional)
     * @param  Xendit\PaymentMethod\PaymentMethodType[] $payment_method_type (optional)
     * @param  Xenditstring[] $channel_code (optional)
     * @param  Xenditstring[] $status (optional)
     * @param  Xenditstring[] $currency (optional)
     * @param  Xendit\DateTime $created_gte (optional)
     * @param  Xendit\DateTime $created_lte (optional)
     * @param  Xendit\DateTime $updated_gte (optional)
     * @param  Xendit\DateTime $updated_lte (optional)
     * @param  Xenditint $limit (optional)
     * @param  Xenditstring $after_id (optional)
     * @param  Xenditstring $before_id (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getPaymentsByPaymentMethodId'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getPaymentsByPaymentMethodIdAsync($payment_method_id, $payment_request_id = null, $payment_method_id2 = null, $reference_id = null, $payment_method_type = null, $channel_code = null, $status = null, $currency = null, $created_gte = null, $created_lte = null, $updated_gte = null, $updated_lte = null, $limit = null, $after_id = null, $before_id = null, string $contentType = self::contentTypes['getPaymentsByPaymentMethodId'][0])
    {
        return $this->getPaymentsByPaymentMethodIdAsyncWithHttpInfo($payment_method_id, $payment_request_id, $payment_method_id2, $reference_id, $payment_method_type, $channel_code, $status, $currency, $created_gte, $created_lte, $updated_gte, $updated_lte, $limit, $after_id, $before_id, $contentType)
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
     * @param  Xenditstring $payment_method_id (required)
     * @param  Xenditstring[] $payment_request_id (optional)
     * @param  Xenditstring[] $payment_method_id2 (optional)
     * @param  Xenditstring[] $reference_id (optional)
     * @param  Xendit\PaymentMethod\PaymentMethodType[] $payment_method_type (optional)
     * @param  Xenditstring[] $channel_code (optional)
     * @param  Xenditstring[] $status (optional)
     * @param  Xenditstring[] $currency (optional)
     * @param  Xendit\DateTime $created_gte (optional)
     * @param  Xendit\DateTime $created_lte (optional)
     * @param  Xendit\DateTime $updated_gte (optional)
     * @param  Xendit\DateTime $updated_lte (optional)
     * @param  Xenditint $limit (optional)
     * @param  Xenditstring $after_id (optional)
     * @param  Xenditstring $before_id (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getPaymentsByPaymentMethodId'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getPaymentsByPaymentMethodIdAsyncWithHttpInfo($payment_method_id, $payment_request_id = null, $payment_method_id2 = null, $reference_id = null, $payment_method_type = null, $channel_code = null, $status = null, $currency = null, $created_gte = null, $created_lte = null, $updated_gte = null, $updated_lte = null, $limit = null, $after_id = null, $before_id = null, string $contentType = self::contentTypes['getPaymentsByPaymentMethodId'][0])
    {
        $returnType = 'object';
        $request = $this->getPaymentsByPaymentMethodIdRequest($payment_method_id, $payment_request_id, $payment_method_id2, $reference_id, $payment_method_type, $channel_code, $status, $currency, $created_gte, $created_lte, $updated_gte, $updated_lte, $limit, $after_id, $before_id, $contentType);

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
                function ($exception) {
                    $response = $exception->getResponse();
                    $statusCode = $response->getStatusCode();
                    throw new ApiException(
                        sprintf(
                            '[%d] Error connecting to the API (%s)',
                            $statusCode,
                            $exception->getRequest()->getUri()
                        ),
                        $statusCode,
                        $response->getHeaders(),
                        (string) $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'getPaymentsByPaymentMethodId'
     *
     * @param  string $payment_method_id (required)
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
     * @param  string $after_id (optional)
     * @param  string $before_id (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getPaymentsByPaymentMethodId'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function getPaymentsByPaymentMethodIdRequest($payment_method_id, $payment_request_id = null, $payment_method_id2 = null, $reference_id = null, $payment_method_type = null, $channel_code = null, $status = null, $currency = null, $created_gte = null, $created_lte = null, $updated_gte = null, $updated_lte = null, $limit = null, $after_id = null, $before_id = null, string $contentType = self::contentTypes['getPaymentsByPaymentMethodId'][0])
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
        $defaultHeaders['xendit-lib-ver'] = '3.0.0';

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
     * @param  \Xendit\PaymentMethod\PaymentMethodUpdateParameters $payment_method_update_parameters payment_method_update_parameters (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['patchPaymentMethod'] to see the possible values for this operation
     *
     * @throws \Xendit\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return Xendit\PaymentMethod\PaymentMethod|Xendit\PaymentMethod\GetAllPaymentMethods400Response|Xendit\PaymentMethod\GetAllPaymentMethods403Response|Xendit\PaymentMethod\GetAllPaymentMethods404Response|Xendit\PaymentMethod\GetAllPaymentMethodsDefaultResponse
     */
    public function patchPaymentMethod($payment_method_id, $payment_method_update_parameters = null, string $contentType = self::contentTypes['patchPaymentMethod'][0])
    {
        list($response) = $this->patchPaymentMethodWithHttpInfo($payment_method_id, $payment_method_update_parameters, $contentType);
        return $response;
    }

    /**
     * Operation patchPaymentMethodWithHttpInfo
     *
     * Patch payment methods
     *
     * @param  string $payment_method_id (required)
     * @param  \Xendit\PaymentMethod\PaymentMethodUpdateParameters $payment_method_update_parameters (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['patchPaymentMethod'] to see the possible values for this operation
     *
     * @throws \Xendit\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of Xendit\PaymentMethod\PaymentMethod|Xendit\PaymentMethod\GetAllPaymentMethods400Response|Xendit\PaymentMethod\GetAllPaymentMethods403Response|Xendit\PaymentMethod\GetAllPaymentMethods404Response|Xendit\PaymentMethod\GetAllPaymentMethodsDefaultResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function patchPaymentMethodWithHttpInfo($payment_method_id, $payment_method_update_parameters = null, string $contentType = self::contentTypes['patchPaymentMethod'][0])
    {
        $request = $this->patchPaymentMethodRequest($payment_method_id, $payment_method_update_parameters, $contentType);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? (string) $e->getResponse()->getBody() : null
                );
            } catch (ConnectException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    null,
                    null
                );
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        (string) $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    (string) $response->getBody()
                );
            }

            switch($statusCode) {
                case 200:
                    if ('Xendit\PaymentMethod\PaymentMethod' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('Xendit\PaymentMethod\PaymentMethod' !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, 'Xendit\PaymentMethod\PaymentMethod', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                case 400:
                    if ('Xendit\PaymentMethod\GetAllPaymentMethods400Response' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('Xendit\PaymentMethod\GetAllPaymentMethods400Response' !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, 'Xendit\PaymentMethod\GetAllPaymentMethods400Response', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                case 403:
                    if ('Xendit\PaymentMethod\GetAllPaymentMethods403Response' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('Xendit\PaymentMethod\GetAllPaymentMethods403Response' !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, 'Xendit\PaymentMethod\GetAllPaymentMethods403Response', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                case 404:
                    if ('Xendit\PaymentMethod\GetAllPaymentMethods404Response' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('Xendit\PaymentMethod\GetAllPaymentMethods404Response' !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, 'Xendit\PaymentMethod\GetAllPaymentMethods404Response', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                default:
                    if ('Xendit\PaymentMethod\GetAllPaymentMethodsDefaultResponse' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('Xendit\PaymentMethod\GetAllPaymentMethodsDefaultResponse' !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, 'Xendit\PaymentMethod\GetAllPaymentMethodsDefaultResponse', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
            }

            $returnType = '\PaymentMethod\PaymentMethod';
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

        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        'Xendit\PaymentMethod\PaymentMethod',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 400:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        'Xendit\PaymentMethod\GetAllPaymentMethods400Response',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 403:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        'Xendit\PaymentMethod\GetAllPaymentMethods403Response',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 404:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        'Xendit\PaymentMethod\GetAllPaymentMethods404Response',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                default:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        'Xendit\PaymentMethod\GetAllPaymentMethodsDefaultResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation patchPaymentMethodAsync
     *
     * Patch payment methods
     *
     * @param  Xenditstring $payment_method_id (required)
     * @param  Xendit\Xendit\PaymentMethod\PaymentMethodUpdateParameters $payment_method_update_parameters (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['patchPaymentMethod'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function patchPaymentMethodAsync($payment_method_id, $payment_method_update_parameters = null, string $contentType = self::contentTypes['patchPaymentMethod'][0])
    {
        return $this->patchPaymentMethodAsyncWithHttpInfo($payment_method_id, $payment_method_update_parameters, $contentType)
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
     * @param  Xenditstring $payment_method_id (required)
     * @param  Xendit\Xendit\PaymentMethod\PaymentMethodUpdateParameters $payment_method_update_parameters (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['patchPaymentMethod'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function patchPaymentMethodAsyncWithHttpInfo($payment_method_id, $payment_method_update_parameters = null, string $contentType = self::contentTypes['patchPaymentMethod'][0])
    {
        $returnType = '\PaymentMethod\PaymentMethod';
        $request = $this->patchPaymentMethodRequest($payment_method_id, $payment_method_update_parameters, $contentType);

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
                function ($exception) {
                    $response = $exception->getResponse();
                    $statusCode = $response->getStatusCode();
                    throw new ApiException(
                        sprintf(
                            '[%d] Error connecting to the API (%s)',
                            $statusCode,
                            $exception->getRequest()->getUri()
                        ),
                        $statusCode,
                        $response->getHeaders(),
                        (string) $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'patchPaymentMethod'
     *
     * @param  string $payment_method_id (required)
     * @param  \Xendit\PaymentMethod\PaymentMethodUpdateParameters $payment_method_update_parameters (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['patchPaymentMethod'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function patchPaymentMethodRequest($payment_method_id, $payment_method_update_parameters = null, string $contentType = self::contentTypes['patchPaymentMethod'][0])
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
        $defaultHeaders['xendit-lib-ver'] = '3.0.0';

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
     * Operation simulatePayment
     *
     * Makes payment with matching PaymentMethodID.
     *
     * @param  string $payment_method_id payment_method_id (required)
     * @param  \Xendit\PaymentMethod\SimulatePaymentRequest $simulate_payment_request simulate_payment_request (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['simulatePayment'] to see the possible values for this operation
     *
     * @throws \Xendit\ApiException on non-2xx response
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
     * @throws \Xendit\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of null, HTTP status code, HTTP response headers (array of strings)
     */
    public function simulatePaymentWithHttpInfo($payment_method_id, $simulate_payment_request = null, string $contentType = self::contentTypes['simulatePayment'][0])
    {
        $request = $this->simulatePaymentRequest($payment_method_id, $simulate_payment_request, $contentType);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? (string) $e->getResponse()->getBody() : null
                );
            } catch (ConnectException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    null,
                    null
                );
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        (string) $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    (string) $response->getBody()
                );
            }

            return [null, $statusCode, $response->getHeaders()];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 400:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        'Xendit\PaymentMethod\GetAllPaymentMethods400Response',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 403:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        'Xendit\PaymentMethod\GetAllPaymentMethods403Response',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 404:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        'Xendit\PaymentMethod\GetAllPaymentMethods404Response',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 503:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        'Xendit\PaymentMethod\CreatePaymentMethod503Response',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                default:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        'Xendit\PaymentMethod\GetAllPaymentMethodsDefaultResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation simulatePaymentAsync
     *
     * Makes payment with matching PaymentMethodID.
     *
     * @param  Xenditstring $payment_method_id (required)
     * @param  Xendit\Xendit\PaymentMethod\SimulatePaymentRequest $simulate_payment_request (optional)
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
     * @param  Xenditstring $payment_method_id (required)
     * @param  Xendit\Xendit\PaymentMethod\SimulatePaymentRequest $simulate_payment_request (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['simulatePayment'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function simulatePaymentAsyncWithHttpInfo($payment_method_id, $simulate_payment_request = null, string $contentType = self::contentTypes['simulatePayment'][0])
    {
        $returnType = '';
        $request = $this->simulatePaymentRequest($payment_method_id, $simulate_payment_request, $contentType);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    return [null, $response->getStatusCode(), $response->getHeaders()];
                },
                function ($exception) {
                    $response = $exception->getResponse();
                    $statusCode = $response->getStatusCode();
                    throw new ApiException(
                        sprintf(
                            '[%d] Error connecting to the API (%s)',
                            $statusCode,
                            $exception->getRequest()->getUri()
                        ),
                        $statusCode,
                        $response->getHeaders(),
                        (string) $response->getBody()
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
        $defaultHeaders['xendit-lib-ver'] = '3.0.0';

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
