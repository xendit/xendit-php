<?php
/**
 * PaymentRequestApi
 * PHP version 7.4
 *
 * @category Class
 * @package  Xendit
 */

/**
 * Payment Requests
 *
 * The version of the OpenAPI document: 1.42.3
 */

/**
 * NOTE: This class is auto generated
 * Do not edit the class manually.
 */

namespace Xendit\PaymentRequest;

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
 * PaymentRequestApi Class Doc Comment
 *
 * @category Class
 * @package  Xendit
 */
class PaymentRequestApi
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
        'authorizePaymentRequest' => [
            'application/json',
        ],
        'capturePaymentRequest' => [
            'application/json',
        ],
        'createPaymentRequest' => [
            'application/json',
        ],
        'getAllPaymentRequests' => [
            'application/json',
        ],
        'getPaymentRequestByID' => [
            'application/json',
        ],
        'getPaymentRequestCaptures' => [
            'application/json',
        ],
        'resendPaymentRequestAuth' => [
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
     * Operation authorizePaymentRequest
     *
     * Payment Request Authorize
     *
     * @param  string $payment_request_id payment_request_id (required)
     * @param  \Xendit\PaymentRequest\PaymentRequestAuthParameters $payment_request_auth_parameters payment_request_auth_parameters (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['authorizePaymentRequest'] to see the possible values for this operation
     *
     * @throws \Xendit\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return Xendit\PaymentRequest\PaymentRequest|Xendit\PaymentRequest\Error|Xendit\PaymentRequest\Error|Xendit\PaymentRequest\Error
     */
    public function authorizePaymentRequest($payment_request_id, $payment_request_auth_parameters = null, string $contentType = self::contentTypes['authorizePaymentRequest'][0])
    {
        list($response) = $this->authorizePaymentRequestWithHttpInfo($payment_request_id, $payment_request_auth_parameters, $contentType);
        return $response;
    }

    /**
     * Operation authorizePaymentRequestWithHttpInfo
     *
     * Payment Request Authorize
     *
     * @param  string $payment_request_id (required)
     * @param  \Xendit\PaymentRequest\PaymentRequestAuthParameters $payment_request_auth_parameters (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['authorizePaymentRequest'] to see the possible values for this operation
     *
     * @throws \Xendit\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of Xendit\PaymentRequest\PaymentRequest|Xendit\PaymentRequest\Error|Xendit\PaymentRequest\Error|Xendit\PaymentRequest\Error, HTTP status code, HTTP response headers (array of strings)
     */
    public function authorizePaymentRequestWithHttpInfo($payment_request_id, $payment_request_auth_parameters = null, string $contentType = self::contentTypes['authorizePaymentRequest'][0])
    {
        $request = $this->authorizePaymentRequestRequest($payment_request_id, $payment_request_auth_parameters, $contentType);

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
                    if ('Xendit\PaymentRequest\PaymentRequest' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('Xendit\PaymentRequest\PaymentRequest' !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, 'Xendit\PaymentRequest\PaymentRequest', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                case 400:
                    if ('Xendit\PaymentRequest\Error' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('Xendit\PaymentRequest\Error' !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, 'Xendit\PaymentRequest\Error', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                case 500:
                    if ('Xendit\PaymentRequest\Error' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('Xendit\PaymentRequest\Error' !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, 'Xendit\PaymentRequest\Error', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                default:
                    if ('Xendit\PaymentRequest\Error' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('Xendit\PaymentRequest\Error' !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, 'Xendit\PaymentRequest\Error', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
            }

            $returnType = '\PaymentRequest\PaymentRequest';
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
                        'Xendit\PaymentRequest\PaymentRequest',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 400:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        'Xendit\PaymentRequest\Error',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 500:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        'Xendit\PaymentRequest\Error',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                default:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        'Xendit\PaymentRequest\Error',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation authorizePaymentRequestAsync
     *
     * Payment Request Authorize
     *
     * @param  Xenditstring $payment_request_id (required)
     * @param  Xendit\Xendit\PaymentRequest\PaymentRequestAuthParameters $payment_request_auth_parameters (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['authorizePaymentRequest'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function authorizePaymentRequestAsync($payment_request_id, $payment_request_auth_parameters = null, string $contentType = self::contentTypes['authorizePaymentRequest'][0])
    {
        return $this->authorizePaymentRequestAsyncWithHttpInfo($payment_request_id, $payment_request_auth_parameters, $contentType)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation authorizePaymentRequestAsyncWithHttpInfo
     *
     * Payment Request Authorize
     *
     * @param  Xenditstring $payment_request_id (required)
     * @param  Xendit\Xendit\PaymentRequest\PaymentRequestAuthParameters $payment_request_auth_parameters (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['authorizePaymentRequest'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function authorizePaymentRequestAsyncWithHttpInfo($payment_request_id, $payment_request_auth_parameters = null, string $contentType = self::contentTypes['authorizePaymentRequest'][0])
    {
        $returnType = '\PaymentRequest\PaymentRequest';
        $request = $this->authorizePaymentRequestRequest($payment_request_id, $payment_request_auth_parameters, $contentType);

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
     * Create request for operation 'authorizePaymentRequest'
     *
     * @param  string $payment_request_id (required)
     * @param  \Xendit\PaymentRequest\PaymentRequestAuthParameters $payment_request_auth_parameters (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['authorizePaymentRequest'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function authorizePaymentRequestRequest($payment_request_id, $payment_request_auth_parameters = null, string $contentType = self::contentTypes['authorizePaymentRequest'][0])
    {

        // verify the required parameter 'payment_request_id' is set
        if ($payment_request_id === null || (is_array($payment_request_id) && count($payment_request_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $payment_request_id when calling authorizePaymentRequest'
            );
        }



        $resourcePath = '/payment_requests/{paymentRequestId}/auth';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;


        // path params
        if ($payment_request_id !== null) {
            $resourcePath = str_replace(
                '{' . 'paymentRequestId' . '}',
                ObjectSerializer::toPathValue($payment_request_id),
                $resourcePath
            );
        }


        $headers = $this->headerSelector->selectHeaders(
            ['application/json', ],
            $contentType,
            $multipart
        );

        // for model (json/xml)
        if (isset($payment_request_auth_parameters)) {
            if (stripos($headers['Content-Type'], 'application/json') !== false) {
                # if Content-Type contains "application/json", json_encode the body
                $httpBody = \GuzzleHttp\Utils::jsonEncode(ObjectSerializer::sanitizeForSerialization($payment_request_auth_parameters));
            } else {
                $httpBody = $payment_request_auth_parameters;
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
        $defaultHeaders['xendit-lib-ver'] = '3.0.0-beta.2';

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
     * Operation capturePaymentRequest
     *
     * Payment Request Capture
     *
     * @param  string $payment_request_id payment_request_id (required)
     * @param  \Xendit\PaymentRequest\CaptureParameters $capture_parameters capture_parameters (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['capturePaymentRequest'] to see the possible values for this operation
     *
     * @throws \Xendit\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return Xendit\PaymentRequest\Capture|Xendit\PaymentRequest\Error|Xendit\PaymentRequest\Error|Xendit\PaymentRequest\Error
     */
    public function capturePaymentRequest($payment_request_id, $capture_parameters = null, string $contentType = self::contentTypes['capturePaymentRequest'][0])
    {
        list($response) = $this->capturePaymentRequestWithHttpInfo($payment_request_id, $capture_parameters, $contentType);
        return $response;
    }

    /**
     * Operation capturePaymentRequestWithHttpInfo
     *
     * Payment Request Capture
     *
     * @param  string $payment_request_id (required)
     * @param  \Xendit\PaymentRequest\CaptureParameters $capture_parameters (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['capturePaymentRequest'] to see the possible values for this operation
     *
     * @throws \Xendit\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of Xendit\PaymentRequest\Capture|Xendit\PaymentRequest\Error|Xendit\PaymentRequest\Error|Xendit\PaymentRequest\Error, HTTP status code, HTTP response headers (array of strings)
     */
    public function capturePaymentRequestWithHttpInfo($payment_request_id, $capture_parameters = null, string $contentType = self::contentTypes['capturePaymentRequest'][0])
    {
        $request = $this->capturePaymentRequestRequest($payment_request_id, $capture_parameters, $contentType);

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
                    if ('Xendit\PaymentRequest\Capture' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('Xendit\PaymentRequest\Capture' !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, 'Xendit\PaymentRequest\Capture', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                case 400:
                    if ('Xendit\PaymentRequest\Error' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('Xendit\PaymentRequest\Error' !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, 'Xendit\PaymentRequest\Error', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                case 500:
                    if ('Xendit\PaymentRequest\Error' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('Xendit\PaymentRequest\Error' !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, 'Xendit\PaymentRequest\Error', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                default:
                    if ('Xendit\PaymentRequest\Error' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('Xendit\PaymentRequest\Error' !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, 'Xendit\PaymentRequest\Error', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
            }

            $returnType = '\PaymentRequest\Capture';
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
                        'Xendit\PaymentRequest\Capture',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 400:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        'Xendit\PaymentRequest\Error',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 500:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        'Xendit\PaymentRequest\Error',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                default:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        'Xendit\PaymentRequest\Error',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation capturePaymentRequestAsync
     *
     * Payment Request Capture
     *
     * @param  Xenditstring $payment_request_id (required)
     * @param  Xendit\Xendit\PaymentRequest\CaptureParameters $capture_parameters (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['capturePaymentRequest'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function capturePaymentRequestAsync($payment_request_id, $capture_parameters = null, string $contentType = self::contentTypes['capturePaymentRequest'][0])
    {
        return $this->capturePaymentRequestAsyncWithHttpInfo($payment_request_id, $capture_parameters, $contentType)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation capturePaymentRequestAsyncWithHttpInfo
     *
     * Payment Request Capture
     *
     * @param  Xenditstring $payment_request_id (required)
     * @param  Xendit\Xendit\PaymentRequest\CaptureParameters $capture_parameters (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['capturePaymentRequest'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function capturePaymentRequestAsyncWithHttpInfo($payment_request_id, $capture_parameters = null, string $contentType = self::contentTypes['capturePaymentRequest'][0])
    {
        $returnType = '\PaymentRequest\Capture';
        $request = $this->capturePaymentRequestRequest($payment_request_id, $capture_parameters, $contentType);

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
     * Create request for operation 'capturePaymentRequest'
     *
     * @param  string $payment_request_id (required)
     * @param  \Xendit\PaymentRequest\CaptureParameters $capture_parameters (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['capturePaymentRequest'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function capturePaymentRequestRequest($payment_request_id, $capture_parameters = null, string $contentType = self::contentTypes['capturePaymentRequest'][0])
    {

        // verify the required parameter 'payment_request_id' is set
        if ($payment_request_id === null || (is_array($payment_request_id) && count($payment_request_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $payment_request_id when calling capturePaymentRequest'
            );
        }



        $resourcePath = '/payment_requests/{paymentRequestId}/captures';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;


        // path params
        if ($payment_request_id !== null) {
            $resourcePath = str_replace(
                '{' . 'paymentRequestId' . '}',
                ObjectSerializer::toPathValue($payment_request_id),
                $resourcePath
            );
        }


        $headers = $this->headerSelector->selectHeaders(
            ['application/json', ],
            $contentType,
            $multipart
        );

        // for model (json/xml)
        if (isset($capture_parameters)) {
            if (stripos($headers['Content-Type'], 'application/json') !== false) {
                # if Content-Type contains "application/json", json_encode the body
                $httpBody = \GuzzleHttp\Utils::jsonEncode(ObjectSerializer::sanitizeForSerialization($capture_parameters));
            } else {
                $httpBody = $capture_parameters;
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
        $defaultHeaders['xendit-lib-ver'] = '3.0.0-beta.2';

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
     * Operation createPaymentRequest
     *
     * Create Payment Request
     *
     * @param  string $idempotency_key idempotency_key (optional)
     * @param  \Xendit\PaymentRequest\PaymentRequestParameters $payment_request_parameters payment_request_parameters (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['createPaymentRequest'] to see the possible values for this operation
     *
     * @throws \Xendit\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return Xendit\PaymentRequest\PaymentRequest|Xendit\PaymentRequest\Error|Xendit\PaymentRequest\Error|Xendit\PaymentRequest\Error
     */
    public function createPaymentRequest($idempotency_key = null, $payment_request_parameters = null, string $contentType = self::contentTypes['createPaymentRequest'][0])
    {
        list($response) = $this->createPaymentRequestWithHttpInfo($idempotency_key, $payment_request_parameters, $contentType);
        return $response;
    }

    /**
     * Operation createPaymentRequestWithHttpInfo
     *
     * Create Payment Request
     *
     * @param  string $idempotency_key (optional)
     * @param  \Xendit\PaymentRequest\PaymentRequestParameters $payment_request_parameters (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['createPaymentRequest'] to see the possible values for this operation
     *
     * @throws \Xendit\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of Xendit\PaymentRequest\PaymentRequest|Xendit\PaymentRequest\Error|Xendit\PaymentRequest\Error|Xendit\PaymentRequest\Error, HTTP status code, HTTP response headers (array of strings)
     */
    public function createPaymentRequestWithHttpInfo($idempotency_key = null, $payment_request_parameters = null, string $contentType = self::contentTypes['createPaymentRequest'][0])
    {
        $request = $this->createPaymentRequestRequest($idempotency_key, $payment_request_parameters, $contentType);

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
                    if ('Xendit\PaymentRequest\PaymentRequest' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('Xendit\PaymentRequest\PaymentRequest' !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, 'Xendit\PaymentRequest\PaymentRequest', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                case 400:
                    if ('Xendit\PaymentRequest\Error' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('Xendit\PaymentRequest\Error' !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, 'Xendit\PaymentRequest\Error', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                case 500:
                    if ('Xendit\PaymentRequest\Error' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('Xendit\PaymentRequest\Error' !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, 'Xendit\PaymentRequest\Error', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                default:
                    if ('Xendit\PaymentRequest\Error' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('Xendit\PaymentRequest\Error' !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, 'Xendit\PaymentRequest\Error', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
            }

            $returnType = '\PaymentRequest\PaymentRequest';
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
                        'Xendit\PaymentRequest\PaymentRequest',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 400:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        'Xendit\PaymentRequest\Error',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 500:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        'Xendit\PaymentRequest\Error',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                default:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        'Xendit\PaymentRequest\Error',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation createPaymentRequestAsync
     *
     * Create Payment Request
     *
     * @param  Xenditstring $idempotency_key (optional)
     * @param  Xendit\Xendit\PaymentRequest\PaymentRequestParameters $payment_request_parameters (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['createPaymentRequest'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function createPaymentRequestAsync($idempotency_key = null, $payment_request_parameters = null, string $contentType = self::contentTypes['createPaymentRequest'][0])
    {
        return $this->createPaymentRequestAsyncWithHttpInfo($idempotency_key, $payment_request_parameters, $contentType)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation createPaymentRequestAsyncWithHttpInfo
     *
     * Create Payment Request
     *
     * @param  Xenditstring $idempotency_key (optional)
     * @param  Xendit\Xendit\PaymentRequest\PaymentRequestParameters $payment_request_parameters (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['createPaymentRequest'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function createPaymentRequestAsyncWithHttpInfo($idempotency_key = null, $payment_request_parameters = null, string $contentType = self::contentTypes['createPaymentRequest'][0])
    {
        $returnType = '\PaymentRequest\PaymentRequest';
        $request = $this->createPaymentRequestRequest($idempotency_key, $payment_request_parameters, $contentType);

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
     * Create request for operation 'createPaymentRequest'
     *
     * @param  string $idempotency_key (optional)
     * @param  \Xendit\PaymentRequest\PaymentRequestParameters $payment_request_parameters (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['createPaymentRequest'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function createPaymentRequestRequest($idempotency_key = null, $payment_request_parameters = null, string $contentType = self::contentTypes['createPaymentRequest'][0])
    {




        $resourcePath = '/payment_requests';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;


        // header param: idempotency-key
        if ($idempotency_key !== null) {
            $headerParams['idempotency-key'] = ObjectSerializer::toHeaderValue($idempotency_key);
        }


        $headers = $this->headerSelector->selectHeaders(
            ['application/json', ],
            $contentType,
            $multipart
        );

        // for model (json/xml)
        if (isset($payment_request_parameters)) {
            if (stripos($headers['Content-Type'], 'application/json') !== false) {
                # if Content-Type contains "application/json", json_encode the body
                $httpBody = \GuzzleHttp\Utils::jsonEncode(ObjectSerializer::sanitizeForSerialization($payment_request_parameters));
            } else {
                $httpBody = $payment_request_parameters;
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
        $defaultHeaders['xendit-lib-ver'] = '3.0.0-beta.2';

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
     * Operation getAllPaymentRequests
     *
     * Get all payment requests by filter
     *
     * @param  string[] $reference_id reference_id (optional)
     * @param  string[] $id id (optional)
     * @param  string[] $customer_id customer_id (optional)
     * @param  int $limit limit (optional)
     * @param  string $before_id before_id (optional)
     * @param  string $after_id after_id (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getAllPaymentRequests'] to see the possible values for this operation
     *
     * @throws \Xendit\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return Xendit\PaymentRequest\PaymentRequestListResponse|Xendit\PaymentRequest\Error|Xendit\PaymentRequest\Error|Xendit\PaymentRequest\Error
     */
    public function getAllPaymentRequests($reference_id = null, $id = null, $customer_id = null, $limit = null, $before_id = null, $after_id = null, string $contentType = self::contentTypes['getAllPaymentRequests'][0])
    {
        list($response) = $this->getAllPaymentRequestsWithHttpInfo($reference_id, $id, $customer_id, $limit, $before_id, $after_id, $contentType);
        return $response;
    }

    /**
     * Operation getAllPaymentRequestsWithHttpInfo
     *
     * Get all payment requests by filter
     *
     * @param  string[] $reference_id (optional)
     * @param  string[] $id (optional)
     * @param  string[] $customer_id (optional)
     * @param  int $limit (optional)
     * @param  string $before_id (optional)
     * @param  string $after_id (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getAllPaymentRequests'] to see the possible values for this operation
     *
     * @throws \Xendit\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of Xendit\PaymentRequest\PaymentRequestListResponse|Xendit\PaymentRequest\Error|Xendit\PaymentRequest\Error|Xendit\PaymentRequest\Error, HTTP status code, HTTP response headers (array of strings)
     */
    public function getAllPaymentRequestsWithHttpInfo($reference_id = null, $id = null, $customer_id = null, $limit = null, $before_id = null, $after_id = null, string $contentType = self::contentTypes['getAllPaymentRequests'][0])
    {
        $request = $this->getAllPaymentRequestsRequest($reference_id, $id, $customer_id, $limit, $before_id, $after_id, $contentType);

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
                    if ('Xendit\PaymentRequest\PaymentRequestListResponse' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('Xendit\PaymentRequest\PaymentRequestListResponse' !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, 'Xendit\PaymentRequest\PaymentRequestListResponse', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                case 404:
                    if ('Xendit\PaymentRequest\Error' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('Xendit\PaymentRequest\Error' !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, 'Xendit\PaymentRequest\Error', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                case 500:
                    if ('Xendit\PaymentRequest\Error' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('Xendit\PaymentRequest\Error' !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, 'Xendit\PaymentRequest\Error', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                default:
                    if ('Xendit\PaymentRequest\Error' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('Xendit\PaymentRequest\Error' !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, 'Xendit\PaymentRequest\Error', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
            }

            $returnType = '\PaymentRequest\PaymentRequestListResponse';
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
                        'Xendit\PaymentRequest\PaymentRequestListResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 404:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        'Xendit\PaymentRequest\Error',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 500:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        'Xendit\PaymentRequest\Error',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                default:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        'Xendit\PaymentRequest\Error',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation getAllPaymentRequestsAsync
     *
     * Get all payment requests by filter
     *
     * @param  Xenditstring[] $reference_id (optional)
     * @param  Xenditstring[] $id (optional)
     * @param  Xenditstring[] $customer_id (optional)
     * @param  Xenditint $limit (optional)
     * @param  Xenditstring $before_id (optional)
     * @param  Xenditstring $after_id (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getAllPaymentRequests'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getAllPaymentRequestsAsync($reference_id = null, $id = null, $customer_id = null, $limit = null, $before_id = null, $after_id = null, string $contentType = self::contentTypes['getAllPaymentRequests'][0])
    {
        return $this->getAllPaymentRequestsAsyncWithHttpInfo($reference_id, $id, $customer_id, $limit, $before_id, $after_id, $contentType)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation getAllPaymentRequestsAsyncWithHttpInfo
     *
     * Get all payment requests by filter
     *
     * @param  Xenditstring[] $reference_id (optional)
     * @param  Xenditstring[] $id (optional)
     * @param  Xenditstring[] $customer_id (optional)
     * @param  Xenditint $limit (optional)
     * @param  Xenditstring $before_id (optional)
     * @param  Xenditstring $after_id (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getAllPaymentRequests'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getAllPaymentRequestsAsyncWithHttpInfo($reference_id = null, $id = null, $customer_id = null, $limit = null, $before_id = null, $after_id = null, string $contentType = self::contentTypes['getAllPaymentRequests'][0])
    {
        $returnType = '\PaymentRequest\PaymentRequestListResponse';
        $request = $this->getAllPaymentRequestsRequest($reference_id, $id, $customer_id, $limit, $before_id, $after_id, $contentType);

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
     * Create request for operation 'getAllPaymentRequests'
     *
     * @param  string[] $reference_id (optional)
     * @param  string[] $id (optional)
     * @param  string[] $customer_id (optional)
     * @param  int $limit (optional)
     * @param  string $before_id (optional)
     * @param  string $after_id (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getAllPaymentRequests'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function getAllPaymentRequestsRequest($reference_id = null, $id = null, $customer_id = null, $limit = null, $before_id = null, $after_id = null, string $contentType = self::contentTypes['getAllPaymentRequests'][0])
    {








        $resourcePath = '/payment_requests';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

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
            $id,
            'id', // param base name
            'array', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $customer_id,
            'customer_id', // param base name
            'array', // openApiType
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
            $before_id,
            'before_id', // param base name
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
        $defaultHeaders['xendit-lib-ver'] = '3.0.0-beta.2';

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
     * Operation getPaymentRequestByID
     *
     * Get payment request by ID
     *
     * @param  string $payment_request_id payment_request_id (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getPaymentRequestByID'] to see the possible values for this operation
     *
     * @throws \Xendit\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return Xendit\PaymentRequest\PaymentRequest|Xendit\PaymentRequest\Error|Xendit\PaymentRequest\Error|Xendit\PaymentRequest\Error
     */
    public function getPaymentRequestByID($payment_request_id, string $contentType = self::contentTypes['getPaymentRequestByID'][0])
    {
        list($response) = $this->getPaymentRequestByIDWithHttpInfo($payment_request_id, $contentType);
        return $response;
    }

    /**
     * Operation getPaymentRequestByIDWithHttpInfo
     *
     * Get payment request by ID
     *
     * @param  string $payment_request_id (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getPaymentRequestByID'] to see the possible values for this operation
     *
     * @throws \Xendit\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of Xendit\PaymentRequest\PaymentRequest|Xendit\PaymentRequest\Error|Xendit\PaymentRequest\Error|Xendit\PaymentRequest\Error, HTTP status code, HTTP response headers (array of strings)
     */
    public function getPaymentRequestByIDWithHttpInfo($payment_request_id, string $contentType = self::contentTypes['getPaymentRequestByID'][0])
    {
        $request = $this->getPaymentRequestByIDRequest($payment_request_id, $contentType);

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
                    if ('Xendit\PaymentRequest\PaymentRequest' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('Xendit\PaymentRequest\PaymentRequest' !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, 'Xendit\PaymentRequest\PaymentRequest', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                case 404:
                    if ('Xendit\PaymentRequest\Error' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('Xendit\PaymentRequest\Error' !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, 'Xendit\PaymentRequest\Error', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                case 500:
                    if ('Xendit\PaymentRequest\Error' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('Xendit\PaymentRequest\Error' !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, 'Xendit\PaymentRequest\Error', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                default:
                    if ('Xendit\PaymentRequest\Error' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('Xendit\PaymentRequest\Error' !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, 'Xendit\PaymentRequest\Error', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
            }

            $returnType = '\PaymentRequest\PaymentRequest';
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
                        'Xendit\PaymentRequest\PaymentRequest',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 404:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        'Xendit\PaymentRequest\Error',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 500:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        'Xendit\PaymentRequest\Error',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                default:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        'Xendit\PaymentRequest\Error',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation getPaymentRequestByIDAsync
     *
     * Get payment request by ID
     *
     * @param  Xenditstring $payment_request_id (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getPaymentRequestByID'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getPaymentRequestByIDAsync($payment_request_id, string $contentType = self::contentTypes['getPaymentRequestByID'][0])
    {
        return $this->getPaymentRequestByIDAsyncWithHttpInfo($payment_request_id, $contentType)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation getPaymentRequestByIDAsyncWithHttpInfo
     *
     * Get payment request by ID
     *
     * @param  Xenditstring $payment_request_id (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getPaymentRequestByID'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getPaymentRequestByIDAsyncWithHttpInfo($payment_request_id, string $contentType = self::contentTypes['getPaymentRequestByID'][0])
    {
        $returnType = '\PaymentRequest\PaymentRequest';
        $request = $this->getPaymentRequestByIDRequest($payment_request_id, $contentType);

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
     * Create request for operation 'getPaymentRequestByID'
     *
     * @param  string $payment_request_id (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getPaymentRequestByID'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function getPaymentRequestByIDRequest($payment_request_id, string $contentType = self::contentTypes['getPaymentRequestByID'][0])
    {

        // verify the required parameter 'payment_request_id' is set
        if ($payment_request_id === null || (is_array($payment_request_id) && count($payment_request_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $payment_request_id when calling getPaymentRequestByID'
            );
        }


        $resourcePath = '/payment_requests/{paymentRequestId}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;


        // path params
        if ($payment_request_id !== null) {
            $resourcePath = str_replace(
                '{' . 'paymentRequestId' . '}',
                ObjectSerializer::toPathValue($payment_request_id),
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
        $defaultHeaders['xendit-lib-ver'] = '3.0.0-beta.2';

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
     * Operation getPaymentRequestCaptures
     *
     * Get Payment Request Capture
     *
     * @param  string $payment_request_id payment_request_id (required)
     * @param  int $limit limit (optional)
     * @param  string $after_id after_id (optional)
     * @param  string $before_id before_id (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getPaymentRequestCaptures'] to see the possible values for this operation
     *
     * @throws \Xendit\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return Xendit\PaymentRequest\CaptureListResponse|Xendit\PaymentRequest\Error|Xendit\PaymentRequest\Error|Xendit\PaymentRequest\Error
     */
    public function getPaymentRequestCaptures($payment_request_id, $limit = null, $after_id = null, $before_id = null, string $contentType = self::contentTypes['getPaymentRequestCaptures'][0])
    {
        list($response) = $this->getPaymentRequestCapturesWithHttpInfo($payment_request_id, $limit, $after_id, $before_id, $contentType);
        return $response;
    }

    /**
     * Operation getPaymentRequestCapturesWithHttpInfo
     *
     * Get Payment Request Capture
     *
     * @param  string $payment_request_id (required)
     * @param  int $limit (optional)
     * @param  string $after_id (optional)
     * @param  string $before_id (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getPaymentRequestCaptures'] to see the possible values for this operation
     *
     * @throws \Xendit\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of Xendit\PaymentRequest\CaptureListResponse|Xendit\PaymentRequest\Error|Xendit\PaymentRequest\Error|Xendit\PaymentRequest\Error, HTTP status code, HTTP response headers (array of strings)
     */
    public function getPaymentRequestCapturesWithHttpInfo($payment_request_id, $limit = null, $after_id = null, $before_id = null, string $contentType = self::contentTypes['getPaymentRequestCaptures'][0])
    {
        $request = $this->getPaymentRequestCapturesRequest($payment_request_id, $limit, $after_id, $before_id, $contentType);

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
                    if ('Xendit\PaymentRequest\CaptureListResponse' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('Xendit\PaymentRequest\CaptureListResponse' !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, 'Xendit\PaymentRequest\CaptureListResponse', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                case 400:
                    if ('Xendit\PaymentRequest\Error' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('Xendit\PaymentRequest\Error' !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, 'Xendit\PaymentRequest\Error', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                case 500:
                    if ('Xendit\PaymentRequest\Error' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('Xendit\PaymentRequest\Error' !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, 'Xendit\PaymentRequest\Error', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                default:
                    if ('Xendit\PaymentRequest\Error' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('Xendit\PaymentRequest\Error' !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, 'Xendit\PaymentRequest\Error', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
            }

            $returnType = '\PaymentRequest\CaptureListResponse';
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
                        'Xendit\PaymentRequest\CaptureListResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 400:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        'Xendit\PaymentRequest\Error',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 500:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        'Xendit\PaymentRequest\Error',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                default:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        'Xendit\PaymentRequest\Error',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation getPaymentRequestCapturesAsync
     *
     * Get Payment Request Capture
     *
     * @param  Xenditstring $payment_request_id (required)
     * @param  Xenditint $limit (optional)
     * @param  Xenditstring $after_id (optional)
     * @param  Xenditstring $before_id (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getPaymentRequestCaptures'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getPaymentRequestCapturesAsync($payment_request_id, $limit = null, $after_id = null, $before_id = null, string $contentType = self::contentTypes['getPaymentRequestCaptures'][0])
    {
        return $this->getPaymentRequestCapturesAsyncWithHttpInfo($payment_request_id, $limit, $after_id, $before_id, $contentType)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation getPaymentRequestCapturesAsyncWithHttpInfo
     *
     * Get Payment Request Capture
     *
     * @param  Xenditstring $payment_request_id (required)
     * @param  Xenditint $limit (optional)
     * @param  Xenditstring $after_id (optional)
     * @param  Xenditstring $before_id (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getPaymentRequestCaptures'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getPaymentRequestCapturesAsyncWithHttpInfo($payment_request_id, $limit = null, $after_id = null, $before_id = null, string $contentType = self::contentTypes['getPaymentRequestCaptures'][0])
    {
        $returnType = '\PaymentRequest\CaptureListResponse';
        $request = $this->getPaymentRequestCapturesRequest($payment_request_id, $limit, $after_id, $before_id, $contentType);

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
     * Create request for operation 'getPaymentRequestCaptures'
     *
     * @param  string $payment_request_id (required)
     * @param  int $limit (optional)
     * @param  string $after_id (optional)
     * @param  string $before_id (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getPaymentRequestCaptures'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function getPaymentRequestCapturesRequest($payment_request_id, $limit = null, $after_id = null, $before_id = null, string $contentType = self::contentTypes['getPaymentRequestCaptures'][0])
    {

        // verify the required parameter 'payment_request_id' is set
        if ($payment_request_id === null || (is_array($payment_request_id) && count($payment_request_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $payment_request_id when calling getPaymentRequestCaptures'
            );
        }





        $resourcePath = '/payment_requests/{paymentRequestId}/captures';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

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
        if ($payment_request_id !== null) {
            $resourcePath = str_replace(
                '{' . 'paymentRequestId' . '}',
                ObjectSerializer::toPathValue($payment_request_id),
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
        $defaultHeaders['xendit-lib-ver'] = '3.0.0-beta.2';

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
     * Operation resendPaymentRequestAuth
     *
     * Payment Request Resend Auth
     *
     * @param  string $payment_request_id payment_request_id (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['resendPaymentRequestAuth'] to see the possible values for this operation
     *
     * @throws \Xendit\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return Xendit\PaymentRequest\PaymentRequest|Xendit\PaymentRequest\Error|Xendit\PaymentRequest\Error|Xendit\PaymentRequest\Error
     */
    public function resendPaymentRequestAuth($payment_request_id, string $contentType = self::contentTypes['resendPaymentRequestAuth'][0])
    {
        list($response) = $this->resendPaymentRequestAuthWithHttpInfo($payment_request_id, $contentType);
        return $response;
    }

    /**
     * Operation resendPaymentRequestAuthWithHttpInfo
     *
     * Payment Request Resend Auth
     *
     * @param  string $payment_request_id (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['resendPaymentRequestAuth'] to see the possible values for this operation
     *
     * @throws \Xendit\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of Xendit\PaymentRequest\PaymentRequest|Xendit\PaymentRequest\Error|Xendit\PaymentRequest\Error|Xendit\PaymentRequest\Error, HTTP status code, HTTP response headers (array of strings)
     */
    public function resendPaymentRequestAuthWithHttpInfo($payment_request_id, string $contentType = self::contentTypes['resendPaymentRequestAuth'][0])
    {
        $request = $this->resendPaymentRequestAuthRequest($payment_request_id, $contentType);

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
                    if ('Xendit\PaymentRequest\PaymentRequest' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('Xendit\PaymentRequest\PaymentRequest' !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, 'Xendit\PaymentRequest\PaymentRequest', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                case 400:
                    if ('Xendit\PaymentRequest\Error' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('Xendit\PaymentRequest\Error' !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, 'Xendit\PaymentRequest\Error', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                case 500:
                    if ('Xendit\PaymentRequest\Error' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('Xendit\PaymentRequest\Error' !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, 'Xendit\PaymentRequest\Error', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                default:
                    if ('Xendit\PaymentRequest\Error' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('Xendit\PaymentRequest\Error' !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, 'Xendit\PaymentRequest\Error', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
            }

            $returnType = '\PaymentRequest\PaymentRequest';
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
                        'Xendit\PaymentRequest\PaymentRequest',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 400:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        'Xendit\PaymentRequest\Error',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 500:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        'Xendit\PaymentRequest\Error',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                default:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        'Xendit\PaymentRequest\Error',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation resendPaymentRequestAuthAsync
     *
     * Payment Request Resend Auth
     *
     * @param  Xenditstring $payment_request_id (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['resendPaymentRequestAuth'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function resendPaymentRequestAuthAsync($payment_request_id, string $contentType = self::contentTypes['resendPaymentRequestAuth'][0])
    {
        return $this->resendPaymentRequestAuthAsyncWithHttpInfo($payment_request_id, $contentType)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation resendPaymentRequestAuthAsyncWithHttpInfo
     *
     * Payment Request Resend Auth
     *
     * @param  Xenditstring $payment_request_id (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['resendPaymentRequestAuth'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function resendPaymentRequestAuthAsyncWithHttpInfo($payment_request_id, string $contentType = self::contentTypes['resendPaymentRequestAuth'][0])
    {
        $returnType = '\PaymentRequest\PaymentRequest';
        $request = $this->resendPaymentRequestAuthRequest($payment_request_id, $contentType);

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
     * Create request for operation 'resendPaymentRequestAuth'
     *
     * @param  string $payment_request_id (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['resendPaymentRequestAuth'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function resendPaymentRequestAuthRequest($payment_request_id, string $contentType = self::contentTypes['resendPaymentRequestAuth'][0])
    {

        // verify the required parameter 'payment_request_id' is set
        if ($payment_request_id === null || (is_array($payment_request_id) && count($payment_request_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $payment_request_id when calling resendPaymentRequestAuth'
            );
        }


        $resourcePath = '/payment_requests/{paymentRequestId}/auth/resend';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;


        // path params
        if ($payment_request_id !== null) {
            $resourcePath = str_replace(
                '{' . 'paymentRequestId' . '}',
                ObjectSerializer::toPathValue($payment_request_id),
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
        $defaultHeaders['xendit-lib-ver'] = '3.0.0-beta.2';

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
