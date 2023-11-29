<?php
/**
 * BalanceApi
 * PHP version 7.4
 *
 * @category Class
 * @package  Xendit
 */

/**
 * Transaction Service V4 API
 *
 * The version of the OpenAPI document: 3.5.2
 */

/**
 * NOTE: This class is auto generated
 * Do not edit the class manually.
 */

namespace Xendit\BalanceAndTransaction;

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
 * BalanceApi Class Doc Comment
 *
 * @category Class
 * @package  Xendit
 */
class BalanceApi
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
        'getBalance' => [
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
     * Operation getBalance
     *
     * Retrieves balances for a business, default to CASH type
     *
     * @param  string $account_type The selected balance type (optional, default to 'CASH')
     * @param  string $currency Currency for filter for customers with multi currency accounts (optional)
     * @param  string $for_user_id The sub-account user-id that you want to make this transaction for. This header is only used if you have access to xenPlatform. See xenPlatform for more information (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getBalance'] to see the possible values for this operation
     *
     * @throws \Xendit\XenditSdkException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Xendit\BalanceAndTransaction\Balance
     */
    public function getBalance($account_type = 'CASH', $currency = null, $for_user_id = null, string $contentType = self::contentTypes['getBalance'][0])
    {
        list($response) = $this->getBalanceWithHttpInfo($account_type, $currency, $for_user_id, $contentType);
        return $response;
    }

    /**
     * Operation getBalanceWithHttpInfo
     *
     * Retrieves balances for a business, default to CASH type
     *
     * @param  string $account_type The selected balance type (optional, default to 'CASH')
     * @param  string $currency Currency for filter for customers with multi currency accounts (optional)
     * @param  string $for_user_id The sub-account user-id that you want to make this transaction for. This header is only used if you have access to xenPlatform. See xenPlatform for more information (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getBalance'] to see the possible values for this operation
     *
     * @throws \Xendit\XenditSdkException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Xendit\BalanceAndTransaction\Balance, HTTP status code, HTTP response headers (array of strings)
     */
    public function getBalanceWithHttpInfo($account_type = 'CASH', $currency = null, $for_user_id = null, string $contentType = self::contentTypes['getBalance'][0])
    {
        $request = $this->getBalanceRequest($account_type, $currency, $for_user_id, $contentType);

        $options = $this->createHttpClientOption();
        try {
            $response = $this->client->send($request, $options);
        } catch (RequestException $e) {
            throw new XenditSdkException(
                $e->getResponse() && $e->getResponse()->getBody() ? json_decode((string) $e->getResponse()->getBody()) : null,
                (string) $e->getCode(),
                $e->getMessage() ? $e->getMessage() : sprintf('Error connecting to the API (%s)', "getBalanceRequest")
            );
        } catch (ConnectException $e) {
            throw new XenditSdkException(
                null,
                (string) $e->getCode(),
                $e->getMessage() ? $e->getMessage() : sprintf('Error connecting to the API (%s)', "getBalanceRequest")
            );
        }  catch (GuzzleException $e) {
            throw new XenditSdkException(
                null,
                (string) $e->getCode(),
                $e->getMessage() ? $e->getMessage() : sprintf('Error instantiating client for API (%s)', "getBalanceRequest")
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
        $returnType = '\Xendit\BalanceAndTransaction\Balance';
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
     * Operation getBalanceAsync
     *
     * Retrieves balances for a business, default to CASH type
     *
     * @param  string $account_type The selected balance type (optional, default to 'CASH')
     * @param  string $currency Currency for filter for customers with multi currency accounts (optional)
     * @param  string $for_user_id The sub-account user-id that you want to make this transaction for. This header is only used if you have access to xenPlatform. See xenPlatform for more information (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getBalance'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getBalanceAsync($account_type = 'CASH', $currency = null, $for_user_id = null, string $contentType = self::contentTypes['getBalance'][0])
    {
        return $this->getBalanceAsyncWithHttpInfo($account_type, $currency, $for_user_id, $contentType)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation getBalanceAsyncWithHttpInfo
     *
     * Retrieves balances for a business, default to CASH type
     *
     * @param  string $account_type The selected balance type (optional, default to 'CASH')
     * @param  string $currency Currency for filter for customers with multi currency accounts (optional)
     * @param  string $for_user_id The sub-account user-id that you want to make this transaction for. This header is only used if you have access to xenPlatform. See xenPlatform for more information (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getBalance'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getBalanceAsyncWithHttpInfo($account_type = 'CASH', $currency = null, $for_user_id = null, string $contentType = self::contentTypes['getBalance'][0])
    {
        $returnType = '\Xendit\BalanceAndTransaction\Balance';
        $request = $this->getBalanceRequest($account_type, $currency, $for_user_id, $contentType);

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
                        $e->getMessage() ? $e->getMessage() : sprintf('Error connecting to the API (%s)', "getBalanceRequest")
                    );
                }
            );
    }

    /**
     * Create request for operation 'getBalance'
     *
     * @param  string $account_type The selected balance type (optional, default to 'CASH')
     * @param  string $currency Currency for filter for customers with multi currency accounts (optional)
     * @param  string $for_user_id The sub-account user-id that you want to make this transaction for. This header is only used if you have access to xenPlatform. See xenPlatform for more information (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getBalance'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function getBalanceRequest($account_type = 'CASH', $currency = null, $for_user_id = null, string $contentType = self::contentTypes['getBalance'][0])
    {





        $resourcePath = '/balance';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $account_type,
            'account_type', // param base name
            'string', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $currency,
            'currency', // param base name
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
        $defaultHeaders['xendit-lib-ver'] = '3.7.0';

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
