<?php
/**
 * PayoutApi
 * PHP version 7.4
 *
 * @category Class
 * @package  Xendit
 */

/**
 * Payout Service
 *
 * The version of the OpenAPI document: 1.0.0
 */

/**
 * NOTE: This class is auto generated
 * Do not edit the class manually.
 */

namespace Xendit\Payout;

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
 * PayoutApi Class Doc Comment
 *
 * @category Class
 * @package  Xendit
 */
class PayoutApi
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
        'cancelPayout' => [
            'application/json',
        ],
        'createPayout' => [
            'application/json',
        ],
        'getPayoutById' => [
            'application/json',
        ],
        'getPayoutChannels' => [
            'application/json',
        ],
        'getPayouts' => [
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
     * Operation cancelPayout
     *
     * API to cancel requested payouts that have not yet been sent to partner banks and e-wallets. Cancellation is possible if the payout has not been sent out via our partner and when payout status is ACCEPTED.
     *
     * @param  string $id Payout id returned from the response of /v2/payouts (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['cancelPayout'] to see the possible values for this operation
     *
     * @throws \Xendit\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return Xendit\Payout\GetPayouts200ResponseDataInner|Xendit\Payout\Error|Xendit\Payout\Error|Xendit\Payout\Error
     */
    public function cancelPayout($id, string $contentType = self::contentTypes['cancelPayout'][0])
    {
        list($response) = $this->cancelPayoutWithHttpInfo($id, $contentType);
        return $response;
    }

    /**
     * Operation cancelPayoutWithHttpInfo
     *
     * API to cancel requested payouts that have not yet been sent to partner banks and e-wallets. Cancellation is possible if the payout has not been sent out via our partner and when payout status is ACCEPTED.
     *
     * @param  string $id Payout id returned from the response of /v2/payouts (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['cancelPayout'] to see the possible values for this operation
     *
     * @throws \Xendit\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of Xendit\Payout\GetPayouts200ResponseDataInner|Xendit\Payout\Error|Xendit\Payout\Error|Xendit\Payout\Error, HTTP status code, HTTP response headers (array of strings)
     */
    public function cancelPayoutWithHttpInfo($id, string $contentType = self::contentTypes['cancelPayout'][0])
    {
        $request = $this->cancelPayoutRequest($id, $contentType);

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
                    if ('Xendit\Payout\GetPayouts200ResponseDataInner' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('Xendit\Payout\GetPayouts200ResponseDataInner' !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, 'Xendit\Payout\GetPayouts200ResponseDataInner', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                case 400:
                    if ('Xendit\Payout\Error' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('Xendit\Payout\Error' !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, 'Xendit\Payout\Error', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                case 404:
                    if ('Xendit\Payout\Error' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('Xendit\Payout\Error' !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, 'Xendit\Payout\Error', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                default:
                    if ('Xendit\Payout\Error' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('Xendit\Payout\Error' !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, 'Xendit\Payout\Error', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
            }

            $returnType = '\Payout\GetPayouts200ResponseDataInner';
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
                        'Xendit\Payout\GetPayouts200ResponseDataInner',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 400:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        'Xendit\Payout\Error',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 404:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        'Xendit\Payout\Error',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                default:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        'Xendit\Payout\Error',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation cancelPayoutAsync
     *
     * API to cancel requested payouts that have not yet been sent to partner banks and e-wallets. Cancellation is possible if the payout has not been sent out via our partner and when payout status is ACCEPTED.
     *
     * @param  Xenditstring $id Payout id returned from the response of /v2/payouts (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['cancelPayout'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function cancelPayoutAsync($id, string $contentType = self::contentTypes['cancelPayout'][0])
    {
        return $this->cancelPayoutAsyncWithHttpInfo($id, $contentType)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation cancelPayoutAsyncWithHttpInfo
     *
     * API to cancel requested payouts that have not yet been sent to partner banks and e-wallets. Cancellation is possible if the payout has not been sent out via our partner and when payout status is ACCEPTED.
     *
     * @param  Xenditstring $id Payout id returned from the response of /v2/payouts (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['cancelPayout'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function cancelPayoutAsyncWithHttpInfo($id, string $contentType = self::contentTypes['cancelPayout'][0])
    {
        $returnType = '\Payout\GetPayouts200ResponseDataInner';
        $request = $this->cancelPayoutRequest($id, $contentType);

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
     * Create request for operation 'cancelPayout'
     *
     * @param  string $id Payout id returned from the response of /v2/payouts (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['cancelPayout'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function cancelPayoutRequest($id, string $contentType = self::contentTypes['cancelPayout'][0])
    {

        // verify the required parameter 'id' is set
        if ($id === null || (is_array($id) && count($id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $id when calling cancelPayout'
            );
        }


        $resourcePath = '/v2/payouts/{id}/cancel';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;


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
        $defaultHeaders['xendit-lib-ver'] = '3.1.0';

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
     * Operation createPayout
     *
     * API to send money at scale to bank accounts &amp; eWallets
     *
     * @param  string $idempotency_key A unique key to prevent duplicate requests from pushing through our system. No expiration. (required)
     * @param  string $for_user_id The sub-account user-id that you want to make this transaction for. This header is only used if you have access to xenPlatform. See xenPlatform for more information. (optional)
     * @param  \Xendit\Payout\CreatePayoutRequest $create_payout_request create_payout_request (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['createPayout'] to see the possible values for this operation
     *
     * @throws \Xendit\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return Xendit\Payout\GetPayouts200ResponseDataInner|Xendit\Payout\Error|Xendit\Payout\Error|Xendit\Payout\Error|Xendit\Payout\Error|Xendit\Payout\Error
     */
    public function createPayout($idempotency_key, $for_user_id = null, $create_payout_request = null, string $contentType = self::contentTypes['createPayout'][0])
    {
        list($response) = $this->createPayoutWithHttpInfo($idempotency_key, $for_user_id, $create_payout_request, $contentType);
        return $response;
    }

    /**
     * Operation createPayoutWithHttpInfo
     *
     * API to send money at scale to bank accounts &amp; eWallets
     *
     * @param  string $idempotency_key A unique key to prevent duplicate requests from pushing through our system. No expiration. (required)
     * @param  string $for_user_id The sub-account user-id that you want to make this transaction for. This header is only used if you have access to xenPlatform. See xenPlatform for more information. (optional)
     * @param  \Xendit\Payout\CreatePayoutRequest $create_payout_request (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['createPayout'] to see the possible values for this operation
     *
     * @throws \Xendit\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of Xendit\Payout\GetPayouts200ResponseDataInner|Xendit\Payout\Error|Xendit\Payout\Error|Xendit\Payout\Error|Xendit\Payout\Error|Xendit\Payout\Error, HTTP status code, HTTP response headers (array of strings)
     */
    public function createPayoutWithHttpInfo($idempotency_key, $for_user_id = null, $create_payout_request = null, string $contentType = self::contentTypes['createPayout'][0])
    {
        $request = $this->createPayoutRequest($idempotency_key, $for_user_id, $create_payout_request, $contentType);

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
                    if ('Xendit\Payout\GetPayouts200ResponseDataInner' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('Xendit\Payout\GetPayouts200ResponseDataInner' !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, 'Xendit\Payout\GetPayouts200ResponseDataInner', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                case 400:
                    if ('Xendit\Payout\Error' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('Xendit\Payout\Error' !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, 'Xendit\Payout\Error', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                case 401:
                    if ('Xendit\Payout\Error' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('Xendit\Payout\Error' !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, 'Xendit\Payout\Error', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                case 403:
                    if ('Xendit\Payout\Error' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('Xendit\Payout\Error' !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, 'Xendit\Payout\Error', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                case 409:
                    if ('Xendit\Payout\Error' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('Xendit\Payout\Error' !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, 'Xendit\Payout\Error', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                default:
                    if ('Xendit\Payout\Error' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('Xendit\Payout\Error' !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, 'Xendit\Payout\Error', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
            }

            $returnType = '\Payout\GetPayouts200ResponseDataInner';
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
                        'Xendit\Payout\GetPayouts200ResponseDataInner',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 400:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        'Xendit\Payout\Error',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 401:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        'Xendit\Payout\Error',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 403:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        'Xendit\Payout\Error',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 409:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        'Xendit\Payout\Error',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                default:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        'Xendit\Payout\Error',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation createPayoutAsync
     *
     * API to send money at scale to bank accounts &amp; eWallets
     *
     * @param  Xenditstring $idempotency_key A unique key to prevent duplicate requests from pushing through our system. No expiration. (required)
     * @param  Xenditstring $for_user_id The sub-account user-id that you want to make this transaction for. This header is only used if you have access to xenPlatform. See xenPlatform for more information. (optional)
     * @param  Xendit\Xendit\Payout\CreatePayoutRequest $create_payout_request (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['createPayout'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function createPayoutAsync($idempotency_key, $for_user_id = null, $create_payout_request = null, string $contentType = self::contentTypes['createPayout'][0])
    {
        return $this->createPayoutAsyncWithHttpInfo($idempotency_key, $for_user_id, $create_payout_request, $contentType)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation createPayoutAsyncWithHttpInfo
     *
     * API to send money at scale to bank accounts &amp; eWallets
     *
     * @param  Xenditstring $idempotency_key A unique key to prevent duplicate requests from pushing through our system. No expiration. (required)
     * @param  Xenditstring $for_user_id The sub-account user-id that you want to make this transaction for. This header is only used if you have access to xenPlatform. See xenPlatform for more information. (optional)
     * @param  Xendit\Xendit\Payout\CreatePayoutRequest $create_payout_request (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['createPayout'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function createPayoutAsyncWithHttpInfo($idempotency_key, $for_user_id = null, $create_payout_request = null, string $contentType = self::contentTypes['createPayout'][0])
    {
        $returnType = '\Payout\GetPayouts200ResponseDataInner';
        $request = $this->createPayoutRequest($idempotency_key, $for_user_id, $create_payout_request, $contentType);

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
     * Create request for operation 'createPayout'
     *
     * @param  string $idempotency_key A unique key to prevent duplicate requests from pushing through our system. No expiration. (required)
     * @param  string $for_user_id The sub-account user-id that you want to make this transaction for. This header is only used if you have access to xenPlatform. See xenPlatform for more information. (optional)
     * @param  \Xendit\Payout\CreatePayoutRequest $create_payout_request (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['createPayout'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function createPayoutRequest($idempotency_key, $for_user_id = null, $create_payout_request = null, string $contentType = self::contentTypes['createPayout'][0])
    {

        // verify the required parameter 'idempotency_key' is set
        if ($idempotency_key === null || (is_array($idempotency_key) && count($idempotency_key) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $idempotency_key when calling createPayout'
            );
        }




        $resourcePath = '/v2/payouts';
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
        if (isset($create_payout_request)) {
            if (stripos($headers['Content-Type'], 'application/json') !== false) {
                # if Content-Type contains "application/json", json_encode the body
                $httpBody = \GuzzleHttp\Utils::jsonEncode(ObjectSerializer::sanitizeForSerialization($create_payout_request));
            } else {
                $httpBody = $create_payout_request;
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
        $defaultHeaders['xendit-lib-ver'] = '3.1.0';

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
     * Operation getPayoutById
     *
     * API to fetch the current status, or details of the payout
     *
     * @param  string $id Payout id returned from the response of /v2/payouts (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getPayoutById'] to see the possible values for this operation
     *
     * @throws \Xendit\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return Xendit\Payout\GetPayouts200ResponseDataInner|Xendit\Payout\Error|Xendit\Payout\Error|Xendit\Payout\Error|Xendit\Payout\Error
     */
    public function getPayoutById($id, string $contentType = self::contentTypes['getPayoutById'][0])
    {
        list($response) = $this->getPayoutByIdWithHttpInfo($id, $contentType);
        return $response;
    }

    /**
     * Operation getPayoutByIdWithHttpInfo
     *
     * API to fetch the current status, or details of the payout
     *
     * @param  string $id Payout id returned from the response of /v2/payouts (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getPayoutById'] to see the possible values for this operation
     *
     * @throws \Xendit\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of Xendit\Payout\GetPayouts200ResponseDataInner|Xendit\Payout\Error|Xendit\Payout\Error|Xendit\Payout\Error|Xendit\Payout\Error, HTTP status code, HTTP response headers (array of strings)
     */
    public function getPayoutByIdWithHttpInfo($id, string $contentType = self::contentTypes['getPayoutById'][0])
    {
        $request = $this->getPayoutByIdRequest($id, $contentType);

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
                    if ('Xendit\Payout\GetPayouts200ResponseDataInner' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('Xendit\Payout\GetPayouts200ResponseDataInner' !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, 'Xendit\Payout\GetPayouts200ResponseDataInner', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                case 401:
                    if ('Xendit\Payout\Error' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('Xendit\Payout\Error' !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, 'Xendit\Payout\Error', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                case 403:
                    if ('Xendit\Payout\Error' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('Xendit\Payout\Error' !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, 'Xendit\Payout\Error', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                case 404:
                    if ('Xendit\Payout\Error' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('Xendit\Payout\Error' !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, 'Xendit\Payout\Error', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                default:
                    if ('Xendit\Payout\Error' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('Xendit\Payout\Error' !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, 'Xendit\Payout\Error', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
            }

            $returnType = '\Payout\GetPayouts200ResponseDataInner';
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
                        'Xendit\Payout\GetPayouts200ResponseDataInner',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 401:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        'Xendit\Payout\Error',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 403:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        'Xendit\Payout\Error',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 404:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        'Xendit\Payout\Error',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                default:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        'Xendit\Payout\Error',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation getPayoutByIdAsync
     *
     * API to fetch the current status, or details of the payout
     *
     * @param  Xenditstring $id Payout id returned from the response of /v2/payouts (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getPayoutById'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getPayoutByIdAsync($id, string $contentType = self::contentTypes['getPayoutById'][0])
    {
        return $this->getPayoutByIdAsyncWithHttpInfo($id, $contentType)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation getPayoutByIdAsyncWithHttpInfo
     *
     * API to fetch the current status, or details of the payout
     *
     * @param  Xenditstring $id Payout id returned from the response of /v2/payouts (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getPayoutById'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getPayoutByIdAsyncWithHttpInfo($id, string $contentType = self::contentTypes['getPayoutById'][0])
    {
        $returnType = '\Payout\GetPayouts200ResponseDataInner';
        $request = $this->getPayoutByIdRequest($id, $contentType);

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
     * Create request for operation 'getPayoutById'
     *
     * @param  string $id Payout id returned from the response of /v2/payouts (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getPayoutById'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function getPayoutByIdRequest($id, string $contentType = self::contentTypes['getPayoutById'][0])
    {

        // verify the required parameter 'id' is set
        if ($id === null || (is_array($id) && count($id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $id when calling getPayoutById'
            );
        }


        $resourcePath = '/v2/payouts/{id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;


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
        $defaultHeaders['xendit-lib-ver'] = '3.1.0';

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
     * Operation getPayoutChannels
     *
     * API providing the current list of banks and e-wallets we support for payouts for both regions
     *
     * @param  string $currency Filter channels by currency from ISO-4217 values (optional)
     * @param  \Payout\ChannelCategory[] $channel_category Filter channels by category (optional)
     * @param  string $channel_code Filter channels by channel code, prefixed by ISO-3166 country code (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getPayoutChannels'] to see the possible values for this operation
     *
     * @throws \Xendit\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return Xendit\Payout\Channel[]|Xendit\Payout\Error
     */
    public function getPayoutChannels($currency = null, $channel_category = null, $channel_code = null, string $contentType = self::contentTypes['getPayoutChannels'][0])
    {
        list($response) = $this->getPayoutChannelsWithHttpInfo($currency, $channel_category, $channel_code, $contentType);
        return $response;
    }

    /**
     * Operation getPayoutChannelsWithHttpInfo
     *
     * API providing the current list of banks and e-wallets we support for payouts for both regions
     *
     * @param  string $currency Filter channels by currency from ISO-4217 values (optional)
     * @param  \Payout\ChannelCategory[] $channel_category Filter channels by category (optional)
     * @param  string $channel_code Filter channels by channel code, prefixed by ISO-3166 country code (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getPayoutChannels'] to see the possible values for this operation
     *
     * @throws \Xendit\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of Xendit\Payout\Channel[]|Xendit\Payout\Error, HTTP status code, HTTP response headers (array of strings)
     */
    public function getPayoutChannelsWithHttpInfo($currency = null, $channel_category = null, $channel_code = null, string $contentType = self::contentTypes['getPayoutChannels'][0])
    {
        $request = $this->getPayoutChannelsRequest($currency, $channel_category, $channel_code, $contentType);

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
                    if ('Xendit\Payout\Channel[]' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('Xendit\Payout\Channel[]' !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, 'Xendit\Payout\Channel[]', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                default:
                    if ('Xendit\Payout\Error' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('Xendit\Payout\Error' !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, 'Xendit\Payout\Error', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
            }

            $returnType = '\Payout\Channel[]';
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
                        'Xendit\Payout\Channel[]',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                default:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        'Xendit\Payout\Error',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation getPayoutChannelsAsync
     *
     * API providing the current list of banks and e-wallets we support for payouts for both regions
     *
     * @param  Xenditstring $currency Filter channels by currency from ISO-4217 values (optional)
     * @param  Xendit\Payout\ChannelCategory[] $channel_category Filter channels by category (optional)
     * @param  Xenditstring $channel_code Filter channels by channel code, prefixed by ISO-3166 country code (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getPayoutChannels'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getPayoutChannelsAsync($currency = null, $channel_category = null, $channel_code = null, string $contentType = self::contentTypes['getPayoutChannels'][0])
    {
        return $this->getPayoutChannelsAsyncWithHttpInfo($currency, $channel_category, $channel_code, $contentType)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation getPayoutChannelsAsyncWithHttpInfo
     *
     * API providing the current list of banks and e-wallets we support for payouts for both regions
     *
     * @param  Xenditstring $currency Filter channels by currency from ISO-4217 values (optional)
     * @param  Xendit\Payout\ChannelCategory[] $channel_category Filter channels by category (optional)
     * @param  Xenditstring $channel_code Filter channels by channel code, prefixed by ISO-3166 country code (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getPayoutChannels'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getPayoutChannelsAsyncWithHttpInfo($currency = null, $channel_category = null, $channel_code = null, string $contentType = self::contentTypes['getPayoutChannels'][0])
    {
        $returnType = '\Payout\Channel[]';
        $request = $this->getPayoutChannelsRequest($currency, $channel_category, $channel_code, $contentType);

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
     * Create request for operation 'getPayoutChannels'
     *
     * @param  string $currency Filter channels by currency from ISO-4217 values (optional)
     * @param  \Payout\ChannelCategory[] $channel_category Filter channels by category (optional)
     * @param  string $channel_code Filter channels by channel code, prefixed by ISO-3166 country code (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getPayoutChannels'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function getPayoutChannelsRequest($currency = null, $channel_category = null, $channel_code = null, string $contentType = self::contentTypes['getPayoutChannels'][0])
    {





        $resourcePath = '/payouts_channels';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $currency,
            'currency', // param base name
            'string', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $channel_category,
            'channel_category', // param base name
            'array', // openApiType
            'form', // style
            false, // explode
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
        $defaultHeaders['xendit-lib-ver'] = '3.1.0';

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
     * Operation getPayouts
     *
     * API to retrieve all matching payouts with reference ID
     *
     * @param  string $reference_id Reference_id provided when creating the payout (required)
     * @param  float $limit Number of records to fetch per API call (optional)
     * @param  string $after_id Used to fetch record after this payout unique id (optional)
     * @param  string $before_id Used to fetch record before this payout unique id (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getPayouts'] to see the possible values for this operation
     *
     * @throws \Xendit\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return Xendit\Payout\GetPayouts200Response|Xendit\Payout\Error|Xendit\Payout\Error
     */
    public function getPayouts($reference_id, $limit = null, $after_id = null, $before_id = null, string $contentType = self::contentTypes['getPayouts'][0])
    {
        list($response) = $this->getPayoutsWithHttpInfo($reference_id, $limit, $after_id, $before_id, $contentType);
        return $response;
    }

    /**
     * Operation getPayoutsWithHttpInfo
     *
     * API to retrieve all matching payouts with reference ID
     *
     * @param  string $reference_id Reference_id provided when creating the payout (required)
     * @param  float $limit Number of records to fetch per API call (optional)
     * @param  string $after_id Used to fetch record after this payout unique id (optional)
     * @param  string $before_id Used to fetch record before this payout unique id (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getPayouts'] to see the possible values for this operation
     *
     * @throws \Xendit\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of Xendit\Payout\GetPayouts200Response|Xendit\Payout\Error|Xendit\Payout\Error, HTTP status code, HTTP response headers (array of strings)
     */
    public function getPayoutsWithHttpInfo($reference_id, $limit = null, $after_id = null, $before_id = null, string $contentType = self::contentTypes['getPayouts'][0])
    {
        $request = $this->getPayoutsRequest($reference_id, $limit, $after_id, $before_id, $contentType);

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
                    if ('Xendit\Payout\GetPayouts200Response' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('Xendit\Payout\GetPayouts200Response' !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, 'Xendit\Payout\GetPayouts200Response', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                case 403:
                    if ('Xendit\Payout\Error' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('Xendit\Payout\Error' !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, 'Xendit\Payout\Error', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                default:
                    if ('Xendit\Payout\Error' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('Xendit\Payout\Error' !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, 'Xendit\Payout\Error', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
            }

            $returnType = '\Payout\GetPayouts200Response';
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
                        'Xendit\Payout\GetPayouts200Response',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 403:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        'Xendit\Payout\Error',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                default:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        'Xendit\Payout\Error',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation getPayoutsAsync
     *
     * API to retrieve all matching payouts with reference ID
     *
     * @param  Xenditstring $reference_id Reference_id provided when creating the payout (required)
     * @param  Xenditfloat $limit Number of records to fetch per API call (optional)
     * @param  Xenditstring $after_id Used to fetch record after this payout unique id (optional)
     * @param  Xenditstring $before_id Used to fetch record before this payout unique id (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getPayouts'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getPayoutsAsync($reference_id, $limit = null, $after_id = null, $before_id = null, string $contentType = self::contentTypes['getPayouts'][0])
    {
        return $this->getPayoutsAsyncWithHttpInfo($reference_id, $limit, $after_id, $before_id, $contentType)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation getPayoutsAsyncWithHttpInfo
     *
     * API to retrieve all matching payouts with reference ID
     *
     * @param  Xenditstring $reference_id Reference_id provided when creating the payout (required)
     * @param  Xenditfloat $limit Number of records to fetch per API call (optional)
     * @param  Xenditstring $after_id Used to fetch record after this payout unique id (optional)
     * @param  Xenditstring $before_id Used to fetch record before this payout unique id (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getPayouts'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getPayoutsAsyncWithHttpInfo($reference_id, $limit = null, $after_id = null, $before_id = null, string $contentType = self::contentTypes['getPayouts'][0])
    {
        $returnType = '\Payout\GetPayouts200Response';
        $request = $this->getPayoutsRequest($reference_id, $limit, $after_id, $before_id, $contentType);

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
     * Create request for operation 'getPayouts'
     *
     * @param  string $reference_id Reference_id provided when creating the payout (required)
     * @param  float $limit Number of records to fetch per API call (optional)
     * @param  string $after_id Used to fetch record after this payout unique id (optional)
     * @param  string $before_id Used to fetch record before this payout unique id (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getPayouts'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function getPayoutsRequest($reference_id, $limit = null, $after_id = null, $before_id = null, string $contentType = self::contentTypes['getPayouts'][0])
    {

        // verify the required parameter 'reference_id' is set
        if ($reference_id === null || (is_array($reference_id) && count($reference_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $reference_id when calling getPayouts'
            );
        }





        $resourcePath = '/v2/payouts';
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
        $defaultHeaders['xendit-lib-ver'] = '3.1.0';

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
