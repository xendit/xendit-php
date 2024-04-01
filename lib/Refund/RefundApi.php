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
 * The version of the OpenAPI document: 1.3.4
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
use Xendit\XenditSdkException;
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
        'createRefund' => [
            'application/json',
        ],
        'getRefund' => [
            'application/json',
        ],
        'getAllRefunds' => [
            'application/json',
        ],
        'cancelRefund' => [
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
     * Operation createRefund
     *
     * @param  string $idempotency_key idempotency_key (optional)
     * @param  string $for_user_id for_user_id (optional)
     * @param  \Xendit\Refund\CreateRefund $create_refund create_refund (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['createRefund'] to see the possible values for this operation
     *
     * @throws \Xendit\XenditSdkException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Xendit\Refund\Refund
     */
    public function createRefund($idempotency_key = null, $for_user_id = null, $create_refund = null, string $contentType = self::contentTypes['createRefund'][0])
    {
        list($response) = $this->createRefundWithHttpInfo($idempotency_key, $for_user_id, $create_refund, $contentType);
        return $response;
    }

    /**
     * Operation createRefundWithHttpInfo
     *
     * @param  string $idempotency_key (optional)
     * @param  string $for_user_id (optional)
     * @param  \Xendit\Refund\CreateRefund $create_refund (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['createRefund'] to see the possible values for this operation
     *
     * @throws \Xendit\XenditSdkException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Xendit\Refund\Refund, HTTP status code, HTTP response headers (array of strings)
     */
    public function createRefundWithHttpInfo($idempotency_key = null, $for_user_id = null, $create_refund = null, string $contentType = self::contentTypes['createRefund'][0])
    {
        $request = $this->createRefundRequest($idempotency_key, $for_user_id, $create_refund, $contentType);

        $options = $this->createHttpClientOption();
        try {
            $response = $this->client->send($request, $options);
        } catch (RequestException $e) {
            throw new XenditSdkException(
                $e->getResponse() && $e->getResponse()->getBody() ? json_decode((string) $e->getResponse()->getBody()) : null,
                (string) $e->getCode(),
                $e->getMessage() ? $e->getMessage() : sprintf('Error connecting to the API (%s)', "createRefundRequest")
            );
        } catch (ConnectException $e) {
            throw new XenditSdkException(
                null,
                (string) $e->getCode(),
                $e->getMessage() ? $e->getMessage() : sprintf('Error connecting to the API (%s)', "createRefundRequest")
            );
        }  catch (GuzzleException $e) {
            throw new XenditSdkException(
                null,
                (string) $e->getCode(),
                $e->getMessage() ? $e->getMessage() : sprintf('Error instantiating client for API (%s)', "createRefundRequest")
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
        $returnType = '\Xendit\Refund\Refund';
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
     * Operation createRefundAsync
     *
     * @param  string $idempotency_key (optional)
     * @param  string $for_user_id (optional)
     * @param  \Xendit\Refund\CreateRefund $create_refund (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['createRefund'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function createRefundAsync($idempotency_key = null, $for_user_id = null, $create_refund = null, string $contentType = self::contentTypes['createRefund'][0])
    {
        return $this->createRefundAsyncWithHttpInfo($idempotency_key, $for_user_id, $create_refund, $contentType)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation createRefundAsyncWithHttpInfo
     *
     * @param  string $idempotency_key (optional)
     * @param  string $for_user_id (optional)
     * @param  \Xendit\Refund\CreateRefund $create_refund (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['createRefund'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function createRefundAsyncWithHttpInfo($idempotency_key = null, $for_user_id = null, $create_refund = null, string $contentType = self::contentTypes['createRefund'][0])
    {
        $returnType = '\Xendit\Refund\Refund';
        $request = $this->createRefundRequest($idempotency_key, $for_user_id, $create_refund, $contentType);

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
                        $e->getMessage() ? $e->getMessage() : sprintf('Error connecting to the API (%s)', "createRefundRequest")
                    );
                }
            );
    }

    /**
     * Create request for operation 'createRefund'
     *
     * @param  string $idempotency_key (optional)
     * @param  string $for_user_id (optional)
     * @param  \Xendit\Refund\CreateRefund $create_refund (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['createRefund'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function createRefundRequest($idempotency_key = null, $for_user_id = null, $create_refund = null, string $contentType = self::contentTypes['createRefund'][0])
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
     * Operation getRefund
     *
     * @param  string $refund_id refund_id (required)
     * @param  string $idempotency_key idempotency_key (optional)
     * @param  string $for_user_id for_user_id (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getRefund'] to see the possible values for this operation
     *
     * @throws \Xendit\XenditSdkException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Xendit\Refund\Refund
     */
    public function getRefund($refund_id, $idempotency_key = null, $for_user_id = null, string $contentType = self::contentTypes['getRefund'][0])
    {
        list($response) = $this->getRefundWithHttpInfo($refund_id, $idempotency_key, $for_user_id, $contentType);
        return $response;
    }

    /**
     * Operation getRefundWithHttpInfo
     *
     * @param  string $refund_id (required)
     * @param  string $idempotency_key (optional)
     * @param  string $for_user_id (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getRefund'] to see the possible values for this operation
     *
     * @throws \Xendit\XenditSdkException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Xendit\Refund\Refund, HTTP status code, HTTP response headers (array of strings)
     */
    public function getRefundWithHttpInfo($refund_id, $idempotency_key = null, $for_user_id = null, string $contentType = self::contentTypes['getRefund'][0])
    {
        $request = $this->getRefundRequest($refund_id, $idempotency_key, $for_user_id, $contentType);

        $options = $this->createHttpClientOption();
        try {
            $response = $this->client->send($request, $options);
        } catch (RequestException $e) {
            throw new XenditSdkException(
                $e->getResponse() && $e->getResponse()->getBody() ? json_decode((string) $e->getResponse()->getBody()) : null,
                (string) $e->getCode(),
                $e->getMessage() ? $e->getMessage() : sprintf('Error connecting to the API (%s)', "getRefundRequest")
            );
        } catch (ConnectException $e) {
            throw new XenditSdkException(
                null,
                (string) $e->getCode(),
                $e->getMessage() ? $e->getMessage() : sprintf('Error connecting to the API (%s)', "getRefundRequest")
            );
        }  catch (GuzzleException $e) {
            throw new XenditSdkException(
                null,
                (string) $e->getCode(),
                $e->getMessage() ? $e->getMessage() : sprintf('Error instantiating client for API (%s)', "getRefundRequest")
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
        $returnType = '\Xendit\Refund\Refund';
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
     * Operation getRefundAsync
     *
     * @param  string $refund_id (required)
     * @param  string $idempotency_key (optional)
     * @param  string $for_user_id (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getRefund'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getRefundAsync($refund_id, $idempotency_key = null, $for_user_id = null, string $contentType = self::contentTypes['getRefund'][0])
    {
        return $this->getRefundAsyncWithHttpInfo($refund_id, $idempotency_key, $for_user_id, $contentType)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation getRefundAsyncWithHttpInfo
     *
     * @param  string $refund_id (required)
     * @param  string $idempotency_key (optional)
     * @param  string $for_user_id (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getRefund'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getRefundAsyncWithHttpInfo($refund_id, $idempotency_key = null, $for_user_id = null, string $contentType = self::contentTypes['getRefund'][0])
    {
        $returnType = '\Xendit\Refund\Refund';
        $request = $this->getRefundRequest($refund_id, $idempotency_key, $for_user_id, $contentType);

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
                        $e->getMessage() ? $e->getMessage() : sprintf('Error connecting to the API (%s)', "getRefundRequest")
                    );
                }
            );
    }

    /**
     * Create request for operation 'getRefund'
     *
     * @param  string $refund_id (required)
     * @param  string $idempotency_key (optional)
     * @param  string $for_user_id (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getRefund'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function getRefundRequest($refund_id, $idempotency_key = null, $for_user_id = null, string $contentType = self::contentTypes['getRefund'][0])
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
        // header param: for-user-id
        if ($for_user_id !== null) {
            $headerParams['for-user-id'] = ObjectSerializer::toHeaderValue($for_user_id);
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
     * Operation getAllRefunds
     *
     * @param  string $for_user_id for_user_id (optional)
     * @param  string $payment_request_id payment_request_id (optional)
     * @param  string $invoice_id invoice_id (optional)
     * @param  string $payment_method_type payment_method_type (optional)
     * @param  string $channel_code channel_code (optional)
     * @param  float $limit limit (optional)
     * @param  string $after_id after_id (optional)
     * @param  string $before_id before_id (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getAllRefunds'] to see the possible values for this operation
     *
     * @throws \Xendit\XenditSdkException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Xendit\Refund\RefundList
     */
    public function getAllRefunds($for_user_id = null, $payment_request_id = null, $invoice_id = null, $payment_method_type = null, $channel_code = null, $limit = null, $after_id = null, $before_id = null, string $contentType = self::contentTypes['getAllRefunds'][0])
    {
        list($response) = $this->getAllRefundsWithHttpInfo($for_user_id, $payment_request_id, $invoice_id, $payment_method_type, $channel_code, $limit, $after_id, $before_id, $contentType);
        return $response;
    }

    /**
     * Operation getAllRefundsWithHttpInfo
     *
     * @param  string $for_user_id (optional)
     * @param  string $payment_request_id (optional)
     * @param  string $invoice_id (optional)
     * @param  string $payment_method_type (optional)
     * @param  string $channel_code (optional)
     * @param  float $limit (optional)
     * @param  string $after_id (optional)
     * @param  string $before_id (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getAllRefunds'] to see the possible values for this operation
     *
     * @throws \Xendit\XenditSdkException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Xendit\Refund\RefundList, HTTP status code, HTTP response headers (array of strings)
     */
    public function getAllRefundsWithHttpInfo($for_user_id = null, $payment_request_id = null, $invoice_id = null, $payment_method_type = null, $channel_code = null, $limit = null, $after_id = null, $before_id = null, string $contentType = self::contentTypes['getAllRefunds'][0])
    {
        $request = $this->getAllRefundsRequest($for_user_id, $payment_request_id, $invoice_id, $payment_method_type, $channel_code, $limit, $after_id, $before_id, $contentType);

        $options = $this->createHttpClientOption();
        try {
            $response = $this->client->send($request, $options);
        } catch (RequestException $e) {
            throw new XenditSdkException(
                $e->getResponse() && $e->getResponse()->getBody() ? json_decode((string) $e->getResponse()->getBody()) : null,
                (string) $e->getCode(),
                $e->getMessage() ? $e->getMessage() : sprintf('Error connecting to the API (%s)', "getAllRefundsRequest")
            );
        } catch (ConnectException $e) {
            throw new XenditSdkException(
                null,
                (string) $e->getCode(),
                $e->getMessage() ? $e->getMessage() : sprintf('Error connecting to the API (%s)', "getAllRefundsRequest")
            );
        }  catch (GuzzleException $e) {
            throw new XenditSdkException(
                null,
                (string) $e->getCode(),
                $e->getMessage() ? $e->getMessage() : sprintf('Error instantiating client for API (%s)', "getAllRefundsRequest")
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
        $returnType = '\Xendit\Refund\RefundList';
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
     * Operation getAllRefundsAsync
     *
     * @param  string $for_user_id (optional)
     * @param  string $payment_request_id (optional)
     * @param  string $invoice_id (optional)
     * @param  string $payment_method_type (optional)
     * @param  string $channel_code (optional)
     * @param  float $limit (optional)
     * @param  string $after_id (optional)
     * @param  string $before_id (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getAllRefunds'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getAllRefundsAsync($for_user_id = null, $payment_request_id = null, $invoice_id = null, $payment_method_type = null, $channel_code = null, $limit = null, $after_id = null, $before_id = null, string $contentType = self::contentTypes['getAllRefunds'][0])
    {
        return $this->getAllRefundsAsyncWithHttpInfo($for_user_id, $payment_request_id, $invoice_id, $payment_method_type, $channel_code, $limit, $after_id, $before_id, $contentType)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation getAllRefundsAsyncWithHttpInfo
     *
     * @param  string $for_user_id (optional)
     * @param  string $payment_request_id (optional)
     * @param  string $invoice_id (optional)
     * @param  string $payment_method_type (optional)
     * @param  string $channel_code (optional)
     * @param  float $limit (optional)
     * @param  string $after_id (optional)
     * @param  string $before_id (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getAllRefunds'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getAllRefundsAsyncWithHttpInfo($for_user_id = null, $payment_request_id = null, $invoice_id = null, $payment_method_type = null, $channel_code = null, $limit = null, $after_id = null, $before_id = null, string $contentType = self::contentTypes['getAllRefunds'][0])
    {
        $returnType = '\Xendit\Refund\RefundList';
        $request = $this->getAllRefundsRequest($for_user_id, $payment_request_id, $invoice_id, $payment_method_type, $channel_code, $limit, $after_id, $before_id, $contentType);

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
                        $e->getMessage() ? $e->getMessage() : sprintf('Error connecting to the API (%s)', "getAllRefundsRequest")
                    );
                }
            );
    }

    /**
     * Create request for operation 'getAllRefunds'
     *
     * @param  string $for_user_id (optional)
     * @param  string $payment_request_id (optional)
     * @param  string $invoice_id (optional)
     * @param  string $payment_method_type (optional)
     * @param  string $channel_code (optional)
     * @param  float $limit (optional)
     * @param  string $after_id (optional)
     * @param  string $before_id (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getAllRefunds'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function getAllRefundsRequest($for_user_id = null, $payment_request_id = null, $invoice_id = null, $payment_method_type = null, $channel_code = null, $limit = null, $after_id = null, $before_id = null, string $contentType = self::contentTypes['getAllRefunds'][0])
    {










        $resourcePath = '/refunds';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $payment_request_id,
            'payment_request_id', // param base name
            'string', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $invoice_id,
            'invoice_id', // param base name
            'string', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $payment_method_type,
            'payment_method_type', // param base name
            'string', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $channel_code,
            'channel_code', // param base name
            'string', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $limit,
            'limit', // param base name
            'number', // openApiType
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
     * Operation cancelRefund
     *
     * @param  string $refund_id refund_id (required)
     * @param  string $idempotency_key idempotency_key (optional)
     * @param  string $for_user_id for_user_id (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['cancelRefund'] to see the possible values for this operation
     *
     * @throws \Xendit\XenditSdkException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Xendit\Refund\Refund
     */
    public function cancelRefund($refund_id, $idempotency_key = null, $for_user_id = null, string $contentType = self::contentTypes['cancelRefund'][0])
    {
        list($response) = $this->cancelRefundWithHttpInfo($refund_id, $idempotency_key, $for_user_id, $contentType);
        return $response;
    }

    /**
     * Operation cancelRefundWithHttpInfo
     *
     * @param  string $refund_id (required)
     * @param  string $idempotency_key (optional)
     * @param  string $for_user_id (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['cancelRefund'] to see the possible values for this operation
     *
     * @throws \Xendit\XenditSdkException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Xendit\Refund\Refund, HTTP status code, HTTP response headers (array of strings)
     */
    public function cancelRefundWithHttpInfo($refund_id, $idempotency_key = null, $for_user_id = null, string $contentType = self::contentTypes['cancelRefund'][0])
    {
        $request = $this->cancelRefundRequest($refund_id, $idempotency_key, $for_user_id, $contentType);

        $options = $this->createHttpClientOption();
        try {
            $response = $this->client->send($request, $options);
        } catch (RequestException $e) {
            throw new XenditSdkException(
                $e->getResponse() && $e->getResponse()->getBody() ? json_decode((string) $e->getResponse()->getBody()) : null,
                (string) $e->getCode(),
                $e->getMessage() ? $e->getMessage() : sprintf('Error connecting to the API (%s)', "cancelRefundRequest")
            );
        } catch (ConnectException $e) {
            throw new XenditSdkException(
                null,
                (string) $e->getCode(),
                $e->getMessage() ? $e->getMessage() : sprintf('Error connecting to the API (%s)', "cancelRefundRequest")
            );
        }  catch (GuzzleException $e) {
            throw new XenditSdkException(
                null,
                (string) $e->getCode(),
                $e->getMessage() ? $e->getMessage() : sprintf('Error instantiating client for API (%s)', "cancelRefundRequest")
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
        $returnType = '\Xendit\Refund\Refund';
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
     * Operation cancelRefundAsync
     *
     * @param  string $refund_id (required)
     * @param  string $idempotency_key (optional)
     * @param  string $for_user_id (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['cancelRefund'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function cancelRefundAsync($refund_id, $idempotency_key = null, $for_user_id = null, string $contentType = self::contentTypes['cancelRefund'][0])
    {
        return $this->cancelRefundAsyncWithHttpInfo($refund_id, $idempotency_key, $for_user_id, $contentType)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation cancelRefundAsyncWithHttpInfo
     *
     * @param  string $refund_id (required)
     * @param  string $idempotency_key (optional)
     * @param  string $for_user_id (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['cancelRefund'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function cancelRefundAsyncWithHttpInfo($refund_id, $idempotency_key = null, $for_user_id = null, string $contentType = self::contentTypes['cancelRefund'][0])
    {
        $returnType = '\Xendit\Refund\Refund';
        $request = $this->cancelRefundRequest($refund_id, $idempotency_key, $for_user_id, $contentType);

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
                        $e->getMessage() ? $e->getMessage() : sprintf('Error connecting to the API (%s)', "cancelRefundRequest")
                    );
                }
            );
    }

    /**
     * Create request for operation 'cancelRefund'
     *
     * @param  string $refund_id (required)
     * @param  string $idempotency_key (optional)
     * @param  string $for_user_id (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['cancelRefund'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function cancelRefundRequest($refund_id, $idempotency_key = null, $for_user_id = null, string $contentType = self::contentTypes['cancelRefund'][0])
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
        // header param: for-user-id
        if ($for_user_id !== null) {
            $headerParams['for-user-id'] = ObjectSerializer::toHeaderValue($for_user_id);
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
