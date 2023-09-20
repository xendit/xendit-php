<?php
/**
 * RefundApi
 * PHP version 7.4
 *
 * @category Class
 * @package  Xendit
 */

/**
 * Refund Service
 *
 * The version of the OpenAPI document: 1.2.3
 */

/**
 * NOTE: This class is auto generated
 * Do not edit the class manually.
 */

namespace Xendit\Refund;

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
 * RefundApi Class Doc Comment
 *
 * @category Class
 * @package  Xendit
 */
class RefundApi
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
        'cancelRefund' => [
            'application/json',
        ],
        'createRefund' => [
            'application/json',
        ],
        'getAllRefunds' => [
            'application/json',
        ],
        'getRefund' => [
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
     * Operation cancelRefund
     *
     * @param  string $refund_id refund_id (required)
     * @param  string $idempotency_key idempotency_key (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['cancelRefund'] to see the possible values for this operation
     *
     * @throws \Xendit\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return Xendit\Refund\Refund|Xendit\Refund\CreateRefund400Response|Xendit\Refund\CreateRefund403Response|Xendit\Refund\CreateRefund404Response|Xendit\Refund\CreateRefundDefaultResponse
     */
    public function cancelRefund($refund_id, $idempotency_key = null, string $contentType = self::contentTypes['cancelRefund'][0])
    {
        list($response) = $this->cancelRefundWithHttpInfo($refund_id, $idempotency_key, $contentType);
        return $response;
    }

    /**
     * Operation cancelRefundWithHttpInfo
     *
     * @param  string $refund_id (required)
     * @param  string $idempotency_key (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['cancelRefund'] to see the possible values for this operation
     *
     * @throws \Xendit\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of Xendit\Refund\Refund|Xendit\Refund\CreateRefund400Response|Xendit\Refund\CreateRefund403Response|Xendit\Refund\CreateRefund404Response|Xendit\Refund\CreateRefundDefaultResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function cancelRefundWithHttpInfo($refund_id, $idempotency_key = null, string $contentType = self::contentTypes['cancelRefund'][0])
    {
        $request = $this->cancelRefundRequest($refund_id, $idempotency_key, $contentType);

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
                    if ('Xendit\Refund\Refund' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('Xendit\Refund\Refund' !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, 'Xendit\Refund\Refund', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                case 400:
                    if ('Xendit\Refund\CreateRefund400Response' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('Xendit\Refund\CreateRefund400Response' !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, 'Xendit\Refund\CreateRefund400Response', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                case 403:
                    if ('Xendit\Refund\CreateRefund403Response' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('Xendit\Refund\CreateRefund403Response' !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, 'Xendit\Refund\CreateRefund403Response', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                case 404:
                    if ('Xendit\Refund\CreateRefund404Response' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('Xendit\Refund\CreateRefund404Response' !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, 'Xendit\Refund\CreateRefund404Response', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                default:
                    if ('Xendit\Refund\CreateRefundDefaultResponse' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('Xendit\Refund\CreateRefundDefaultResponse' !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, 'Xendit\Refund\CreateRefundDefaultResponse', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
            }

            $returnType = '\Refund\Refund';
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
                        'Xendit\Refund\Refund',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 400:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        'Xendit\Refund\CreateRefund400Response',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 403:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        'Xendit\Refund\CreateRefund403Response',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 404:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        'Xendit\Refund\CreateRefund404Response',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                default:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        'Xendit\Refund\CreateRefundDefaultResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation cancelRefundAsync
     *
     * @param  Xenditstring $refund_id (required)
     * @param  Xenditstring $idempotency_key (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['cancelRefund'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function cancelRefundAsync($refund_id, $idempotency_key = null, string $contentType = self::contentTypes['cancelRefund'][0])
    {
        return $this->cancelRefundAsyncWithHttpInfo($refund_id, $idempotency_key, $contentType)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation cancelRefundAsyncWithHttpInfo
     *
     * @param  Xenditstring $refund_id (required)
     * @param  Xenditstring $idempotency_key (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['cancelRefund'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function cancelRefundAsyncWithHttpInfo($refund_id, $idempotency_key = null, string $contentType = self::contentTypes['cancelRefund'][0])
    {
        $returnType = '\Refund\Refund';
        $request = $this->cancelRefundRequest($refund_id, $idempotency_key, $contentType);

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
     * Create request for operation 'cancelRefund'
     *
     * @param  string $refund_id (required)
     * @param  string $idempotency_key (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['cancelRefund'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function cancelRefundRequest($refund_id, $idempotency_key = null, string $contentType = self::contentTypes['cancelRefund'][0])
    {

        // verify the required parameter 'refund_id' is set
        if ($refund_id === null || (is_array($refund_id) && count($refund_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $refund_id when calling cancelRefund'
            );
        }



        $resourcePath = '/refunds/{refundID}/cancel';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;


        // header param: idempotency-key
        if ($idempotency_key !== null) {
            $headerParams['idempotency-key'] = ObjectSerializer::toHeaderValue($idempotency_key);
        }
        // path params
        if ($refund_id !== null) {
            $resourcePath = str_replace(
                '{' . 'refundID' . '}',
                ObjectSerializer::toPathValue($refund_id),
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
            'POST',
            $operationHost . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Operation createRefund
     *
     * @param  string $idempotency_key idempotency_key (optional)
     * @param  \Xendit\Refund\CreateRefund $create_refund create_refund (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['createRefund'] to see the possible values for this operation
     *
     * @throws \Xendit\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return Xendit\Refund\Refund|Xendit\Refund\CreateRefund400Response|Xendit\Refund\CreateRefund403Response|Xendit\Refund\CreateRefund404Response|Xendit\Refund\CreateRefund409Response|Xendit\Refund\CreateRefund503Response|Xendit\Refund\CreateRefundDefaultResponse
     */
    public function createRefund($idempotency_key = null, $create_refund = null, string $contentType = self::contentTypes['createRefund'][0])
    {
        list($response) = $this->createRefundWithHttpInfo($idempotency_key, $create_refund, $contentType);
        return $response;
    }

    /**
     * Operation createRefundWithHttpInfo
     *
     * @param  string $idempotency_key (optional)
     * @param  \Xendit\Refund\CreateRefund $create_refund (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['createRefund'] to see the possible values for this operation
     *
     * @throws \Xendit\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of Xendit\Refund\Refund|Xendit\Refund\CreateRefund400Response|Xendit\Refund\CreateRefund403Response|Xendit\Refund\CreateRefund404Response|Xendit\Refund\CreateRefund409Response|Xendit\Refund\CreateRefund503Response|Xendit\Refund\CreateRefundDefaultResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function createRefundWithHttpInfo($idempotency_key = null, $create_refund = null, string $contentType = self::contentTypes['createRefund'][0])
    {
        $request = $this->createRefundRequest($idempotency_key, $create_refund, $contentType);

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
                    if ('Xendit\Refund\Refund' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('Xendit\Refund\Refund' !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, 'Xendit\Refund\Refund', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                case 400:
                    if ('Xendit\Refund\CreateRefund400Response' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('Xendit\Refund\CreateRefund400Response' !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, 'Xendit\Refund\CreateRefund400Response', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                case 403:
                    if ('Xendit\Refund\CreateRefund403Response' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('Xendit\Refund\CreateRefund403Response' !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, 'Xendit\Refund\CreateRefund403Response', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                case 404:
                    if ('Xendit\Refund\CreateRefund404Response' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('Xendit\Refund\CreateRefund404Response' !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, 'Xendit\Refund\CreateRefund404Response', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                case 409:
                    if ('Xendit\Refund\CreateRefund409Response' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('Xendit\Refund\CreateRefund409Response' !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, 'Xendit\Refund\CreateRefund409Response', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                case 503:
                    if ('Xendit\Refund\CreateRefund503Response' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('Xendit\Refund\CreateRefund503Response' !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, 'Xendit\Refund\CreateRefund503Response', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                default:
                    if ('Xendit\Refund\CreateRefundDefaultResponse' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('Xendit\Refund\CreateRefundDefaultResponse' !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, 'Xendit\Refund\CreateRefundDefaultResponse', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
            }

            $returnType = '\Refund\Refund';
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
                        'Xendit\Refund\Refund',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 400:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        'Xendit\Refund\CreateRefund400Response',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 403:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        'Xendit\Refund\CreateRefund403Response',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 404:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        'Xendit\Refund\CreateRefund404Response',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 409:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        'Xendit\Refund\CreateRefund409Response',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 503:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        'Xendit\Refund\CreateRefund503Response',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                default:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        'Xendit\Refund\CreateRefundDefaultResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation createRefundAsync
     *
     * @param  Xenditstring $idempotency_key (optional)
     * @param  Xendit\Xendit\Refund\CreateRefund $create_refund (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['createRefund'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function createRefundAsync($idempotency_key = null, $create_refund = null, string $contentType = self::contentTypes['createRefund'][0])
    {
        return $this->createRefundAsyncWithHttpInfo($idempotency_key, $create_refund, $contentType)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation createRefundAsyncWithHttpInfo
     *
     * @param  Xenditstring $idempotency_key (optional)
     * @param  Xendit\Xendit\Refund\CreateRefund $create_refund (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['createRefund'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function createRefundAsyncWithHttpInfo($idempotency_key = null, $create_refund = null, string $contentType = self::contentTypes['createRefund'][0])
    {
        $returnType = '\Refund\Refund';
        $request = $this->createRefundRequest($idempotency_key, $create_refund, $contentType);

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
     * Create request for operation 'createRefund'
     *
     * @param  string $idempotency_key (optional)
     * @param  \Xendit\Refund\CreateRefund $create_refund (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['createRefund'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function createRefundRequest($idempotency_key = null, $create_refund = null, string $contentType = self::contentTypes['createRefund'][0])
    {




        $resourcePath = '/refunds';
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
        if (isset($create_refund)) {
            if (stripos($headers['Content-Type'], 'application/json') !== false) {
                # if Content-Type contains "application/json", json_encode the body
                $httpBody = \GuzzleHttp\Utils::jsonEncode(ObjectSerializer::sanitizeForSerialization($create_refund));
            } else {
                $httpBody = $create_refund;
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
     * Operation getAllRefunds
     *
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getAllRefunds'] to see the possible values for this operation
     *
     * @throws \Xendit\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return Xendit\Refund\RefundList|Xendit\Refund\CreateRefundDefaultResponse
     */
    public function getAllRefunds(string $contentType = self::contentTypes['getAllRefunds'][0])
    {
        list($response) = $this->getAllRefundsWithHttpInfo($contentType);
        return $response;
    }

    /**
     * Operation getAllRefundsWithHttpInfo
     *
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getAllRefunds'] to see the possible values for this operation
     *
     * @throws \Xendit\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of Xendit\Refund\RefundList|Xendit\Refund\CreateRefundDefaultResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function getAllRefundsWithHttpInfo(string $contentType = self::contentTypes['getAllRefunds'][0])
    {
        $request = $this->getAllRefundsRequest($contentType);

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
                    if ('Xendit\Refund\RefundList' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('Xendit\Refund\RefundList' !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, 'Xendit\Refund\RefundList', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                default:
                    if ('Xendit\Refund\CreateRefundDefaultResponse' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('Xendit\Refund\CreateRefundDefaultResponse' !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, 'Xendit\Refund\CreateRefundDefaultResponse', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
            }

            $returnType = '\Refund\RefundList';
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
                        'Xendit\Refund\RefundList',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                default:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        'Xendit\Refund\CreateRefundDefaultResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation getAllRefundsAsync
     *
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getAllRefunds'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getAllRefundsAsync(string $contentType = self::contentTypes['getAllRefunds'][0])
    {
        return $this->getAllRefundsAsyncWithHttpInfo($contentType)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation getAllRefundsAsyncWithHttpInfo
     *
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getAllRefunds'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getAllRefundsAsyncWithHttpInfo(string $contentType = self::contentTypes['getAllRefunds'][0])
    {
        $returnType = '\Refund\RefundList';
        $request = $this->getAllRefundsRequest($contentType);

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
     * Create request for operation 'getAllRefunds'
     *
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getAllRefunds'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function getAllRefundsRequest(string $contentType = self::contentTypes['getAllRefunds'][0])
    {


        $resourcePath = '/refunds/';
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
     * Operation getRefund
     *
     * @param  string $refund_id refund_id (required)
     * @param  string $idempotency_key idempotency_key (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getRefund'] to see the possible values for this operation
     *
     * @throws \Xendit\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return Xendit\Refund\Refund|Xendit\Refund\CreateRefundDefaultResponse
     */
    public function getRefund($refund_id, $idempotency_key = null, string $contentType = self::contentTypes['getRefund'][0])
    {
        list($response) = $this->getRefundWithHttpInfo($refund_id, $idempotency_key, $contentType);
        return $response;
    }

    /**
     * Operation getRefundWithHttpInfo
     *
     * @param  string $refund_id (required)
     * @param  string $idempotency_key (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getRefund'] to see the possible values for this operation
     *
     * @throws \Xendit\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of Xendit\Refund\Refund|Xendit\Refund\CreateRefundDefaultResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function getRefundWithHttpInfo($refund_id, $idempotency_key = null, string $contentType = self::contentTypes['getRefund'][0])
    {
        $request = $this->getRefundRequest($refund_id, $idempotency_key, $contentType);

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
                    if ('Xendit\Refund\Refund' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('Xendit\Refund\Refund' !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, 'Xendit\Refund\Refund', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                default:
                    if ('Xendit\Refund\CreateRefundDefaultResponse' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('Xendit\Refund\CreateRefundDefaultResponse' !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, 'Xendit\Refund\CreateRefundDefaultResponse', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
            }

            $returnType = '\Refund\Refund';
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
                        'Xendit\Refund\Refund',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                default:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        'Xendit\Refund\CreateRefundDefaultResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation getRefundAsync
     *
     * @param  Xenditstring $refund_id (required)
     * @param  Xenditstring $idempotency_key (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getRefund'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getRefundAsync($refund_id, $idempotency_key = null, string $contentType = self::contentTypes['getRefund'][0])
    {
        return $this->getRefundAsyncWithHttpInfo($refund_id, $idempotency_key, $contentType)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation getRefundAsyncWithHttpInfo
     *
     * @param  Xenditstring $refund_id (required)
     * @param  Xenditstring $idempotency_key (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getRefund'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getRefundAsyncWithHttpInfo($refund_id, $idempotency_key = null, string $contentType = self::contentTypes['getRefund'][0])
    {
        $returnType = '\Refund\Refund';
        $request = $this->getRefundRequest($refund_id, $idempotency_key, $contentType);

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
     * Create request for operation 'getRefund'
     *
     * @param  string $refund_id (required)
     * @param  string $idempotency_key (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getRefund'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function getRefundRequest($refund_id, $idempotency_key = null, string $contentType = self::contentTypes['getRefund'][0])
    {

        // verify the required parameter 'refund_id' is set
        if ($refund_id === null || (is_array($refund_id) && count($refund_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $refund_id when calling getRefund'
            );
        }



        $resourcePath = '/refunds/{refundID}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;


        // header param: idempotency-key
        if ($idempotency_key !== null) {
            $headerParams['idempotency-key'] = ObjectSerializer::toHeaderValue($idempotency_key);
        }
        // path params
        if ($refund_id !== null) {
            $resourcePath = str_replace(
                '{' . 'refundID' . '}',
                ObjectSerializer::toPathValue($refund_id),
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
