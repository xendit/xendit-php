<?php
/**
 * TransactionApi
 * PHP version 7.4
 *
 * @category Class
 * @package  Xendit
 */

/**
 * Transaction Service V4 API
 *
 * The version of the OpenAPI document: 5.4.0
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
 * TransactionApi Class Doc Comment
 *
 * @category Class
 * @package  Xendit
 */
class TransactionApi
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
        'getTransactionByID' => [
            'application/json',
        ],
        'getAllTransactions' => [
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
     * Operation getTransactionByID
     *
     * Get a transaction based on its id
     *
     * @param  string $id id (required)
     * @param  string $for_user_id The sub-account user-id that you want to make this transaction for. This header is only used if you have access to xenPlatform. See xenPlatform for more information (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getTransactionByID'] to see the possible values for this operation
     *
     * @throws \Xendit\XenditSdkException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Xendit\BalanceAndTransaction\TransactionResponse
     */
    public function getTransactionByID($id, $for_user_id = null, string $contentType = self::contentTypes['getTransactionByID'][0])
    {
        list($response) = $this->getTransactionByIDWithHttpInfo($id, $for_user_id, $contentType);
        return $response;
    }

    /**
     * Operation getTransactionByIDWithHttpInfo
     *
     * Get a transaction based on its id
     *
     * @param  string $id (required)
     * @param  string $for_user_id The sub-account user-id that you want to make this transaction for. This header is only used if you have access to xenPlatform. See xenPlatform for more information (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getTransactionByID'] to see the possible values for this operation
     *
     * @throws \Xendit\XenditSdkException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Xendit\BalanceAndTransaction\TransactionResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function getTransactionByIDWithHttpInfo($id, $for_user_id = null, string $contentType = self::contentTypes['getTransactionByID'][0])
    {
        $request = $this->getTransactionByIDRequest($id, $for_user_id, $contentType);

        $options = $this->createHttpClientOption();
        try {
            $response = $this->client->send($request, $options);
        } catch (RequestException $e) {
            throw new XenditSdkException(
                $e->getResponse() && $e->getResponse()->getBody() ? json_decode((string) $e->getResponse()->getBody()) : null,
                (string) $e->getCode(),
                $e->getMessage() ? $e->getMessage() : sprintf('Error connecting to the API (%s)', "getTransactionByIDRequest")
            );
        } catch (ConnectException $e) {
            throw new XenditSdkException(
                null,
                (string) $e->getCode(),
                $e->getMessage() ? $e->getMessage() : sprintf('Error connecting to the API (%s)', "getTransactionByIDRequest")
            );
        }  catch (GuzzleException $e) {
            throw new XenditSdkException(
                null,
                (string) $e->getCode(),
                $e->getMessage() ? $e->getMessage() : sprintf('Error instantiating client for API (%s)', "getTransactionByIDRequest")
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
        $returnType = '\Xendit\BalanceAndTransaction\TransactionResponse';
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
     * Operation getTransactionByIDAsync
     *
     * Get a transaction based on its id
     *
     * @param  string $id (required)
     * @param  string $for_user_id The sub-account user-id that you want to make this transaction for. This header is only used if you have access to xenPlatform. See xenPlatform for more information (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getTransactionByID'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getTransactionByIDAsync($id, $for_user_id = null, string $contentType = self::contentTypes['getTransactionByID'][0])
    {
        return $this->getTransactionByIDAsyncWithHttpInfo($id, $for_user_id, $contentType)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation getTransactionByIDAsyncWithHttpInfo
     *
     * Get a transaction based on its id
     *
     * @param  string $id (required)
     * @param  string $for_user_id The sub-account user-id that you want to make this transaction for. This header is only used if you have access to xenPlatform. See xenPlatform for more information (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getTransactionByID'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getTransactionByIDAsyncWithHttpInfo($id, $for_user_id = null, string $contentType = self::contentTypes['getTransactionByID'][0])
    {
        $returnType = '\Xendit\BalanceAndTransaction\TransactionResponse';
        $request = $this->getTransactionByIDRequest($id, $for_user_id, $contentType);

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
                        $e->getMessage() ? $e->getMessage() : sprintf('Error connecting to the API (%s)', "getTransactionByIDRequest")
                    );
                }
            );
    }

    /**
     * Create request for operation 'getTransactionByID'
     *
     * @param  string $id (required)
     * @param  string $for_user_id The sub-account user-id that you want to make this transaction for. This header is only used if you have access to xenPlatform. See xenPlatform for more information (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getTransactionByID'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function getTransactionByIDRequest($id, $for_user_id = null, string $contentType = self::contentTypes['getTransactionByID'][0])
    {

        // verify the required parameter 'id' is set
        if ($id === null || (is_array($id) && count($id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $id when calling getTransactionByID'
            );
        }
        if (!preg_match("/^txn_[0-9a-f]{8}-[0-9a-f]{4}-4[0-9a-f]{3}-[89ab][0-9a-f]{3}-[0-9a-f]{12}$/", $id)) {
            throw new \InvalidArgumentException("invalid value for \"id\" when calling TransactionApi.getTransactionByID, must conform to the pattern /^txn_[0-9a-f]{8}-[0-9a-f]{4}-4[0-9a-f]{3}-[89ab][0-9a-f]{3}-[0-9a-f]{12}$/.");
        }
        


        $resourcePath = '/transactions/{id}';
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
     * Operation getAllTransactions
     *
     * Get a list of transactions
     *
     * @param  string $for_user_id The sub-account user-id that you want to make this transaction for. This header is only used if you have access to xenPlatform. See xenPlatform for more information (optional)
     * @param  \BalanceAndTransaction\TransactionTypes[] $types Transaction types that will be included in the result. Default is to include all transaction types (optional)
     * @param  \BalanceAndTransaction\TransactionStatuses[] $statuses Status of the transaction. Default is to include all status. (optional)
     * @param  \BalanceAndTransaction\ChannelsCategories[] $channel_categories Payment channels in which the transaction is carried out. Default is to include all channels. (optional)
     * @param  string $reference_id To filter the result for transactions with matching reference given (case sensitive) (optional)
     * @param  string $product_id To filter the result for transactions with matching product_id (a.k.a payment_id) given (case sensitive) (optional)
     * @param  string $account_identifier Account identifier of transaction. The format will be different from each channel. For example, on &#x60;BANK&#x60; channel it will be account number and on &#x60;CARD&#x60; it will be masked card number. (optional)
     * @param  float $amount Specific transaction amount to search for (optional)
     * @param  Currency $currency currency (optional)
     * @param  DateRangeFilter $created Filter time of transaction by created date. If not specified will list all dates. (optional)
     * @param  DateRangeFilter $updated Filter time of transaction by updated date. If not specified will list all dates. (optional)
     * @param  float $limit number of items in the result per page. Another name for \&quot;results_per_page\&quot; (optional, default to 10)
     * @param  string $after_id after_id (optional)
     * @param  string $before_id before_id (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getAllTransactions'] to see the possible values for this operation
     *
     * @throws \Xendit\XenditSdkException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Xendit\BalanceAndTransaction\TransactionsResponse
     */
    public function getAllTransactions($for_user_id = null, $types = null, $statuses = null, $channel_categories = null, $reference_id = null, $product_id = null, $account_identifier = null, $amount = null, $currency = null, $created = null, $updated = null, $limit = 10, $after_id = null, $before_id = null, string $contentType = self::contentTypes['getAllTransactions'][0])
    {
        list($response) = $this->getAllTransactionsWithHttpInfo($for_user_id, $types, $statuses, $channel_categories, $reference_id, $product_id, $account_identifier, $amount, $currency, $created, $updated, $limit, $after_id, $before_id, $contentType);
        return $response;
    }

    /**
     * Operation getAllTransactionsWithHttpInfo
     *
     * Get a list of transactions
     *
     * @param  string $for_user_id The sub-account user-id that you want to make this transaction for. This header is only used if you have access to xenPlatform. See xenPlatform for more information (optional)
     * @param  \BalanceAndTransaction\TransactionTypes[] $types Transaction types that will be included in the result. Default is to include all transaction types (optional)
     * @param  \BalanceAndTransaction\TransactionStatuses[] $statuses Status of the transaction. Default is to include all status. (optional)
     * @param  \BalanceAndTransaction\ChannelsCategories[] $channel_categories Payment channels in which the transaction is carried out. Default is to include all channels. (optional)
     * @param  string $reference_id To filter the result for transactions with matching reference given (case sensitive) (optional)
     * @param  string $product_id To filter the result for transactions with matching product_id (a.k.a payment_id) given (case sensitive) (optional)
     * @param  string $account_identifier Account identifier of transaction. The format will be different from each channel. For example, on &#x60;BANK&#x60; channel it will be account number and on &#x60;CARD&#x60; it will be masked card number. (optional)
     * @param  float $amount Specific transaction amount to search for (optional)
     * @param  Currency $currency (optional)
     * @param  DateRangeFilter $created Filter time of transaction by created date. If not specified will list all dates. (optional)
     * @param  DateRangeFilter $updated Filter time of transaction by updated date. If not specified will list all dates. (optional)
     * @param  float $limit number of items in the result per page. Another name for \&quot;results_per_page\&quot; (optional, default to 10)
     * @param  string $after_id (optional)
     * @param  string $before_id (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getAllTransactions'] to see the possible values for this operation
     *
     * @throws \Xendit\XenditSdkException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Xendit\BalanceAndTransaction\TransactionsResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function getAllTransactionsWithHttpInfo($for_user_id = null, $types = null, $statuses = null, $channel_categories = null, $reference_id = null, $product_id = null, $account_identifier = null, $amount = null, $currency = null, $created = null, $updated = null, $limit = 10, $after_id = null, $before_id = null, string $contentType = self::contentTypes['getAllTransactions'][0])
    {
        $request = $this->getAllTransactionsRequest($for_user_id, $types, $statuses, $channel_categories, $reference_id, $product_id, $account_identifier, $amount, $currency, $created, $updated, $limit, $after_id, $before_id, $contentType);

        $options = $this->createHttpClientOption();
        try {
            $response = $this->client->send($request, $options);
        } catch (RequestException $e) {
            throw new XenditSdkException(
                $e->getResponse() && $e->getResponse()->getBody() ? json_decode((string) $e->getResponse()->getBody()) : null,
                (string) $e->getCode(),
                $e->getMessage() ? $e->getMessage() : sprintf('Error connecting to the API (%s)', "getAllTransactionsRequest")
            );
        } catch (ConnectException $e) {
            throw new XenditSdkException(
                null,
                (string) $e->getCode(),
                $e->getMessage() ? $e->getMessage() : sprintf('Error connecting to the API (%s)', "getAllTransactionsRequest")
            );
        }  catch (GuzzleException $e) {
            throw new XenditSdkException(
                null,
                (string) $e->getCode(),
                $e->getMessage() ? $e->getMessage() : sprintf('Error instantiating client for API (%s)', "getAllTransactionsRequest")
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
        $returnType = '\Xendit\BalanceAndTransaction\TransactionsResponse';
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
     * Operation getAllTransactionsAsync
     *
     * Get a list of transactions
     *
     * @param  string $for_user_id The sub-account user-id that you want to make this transaction for. This header is only used if you have access to xenPlatform. See xenPlatform for more information (optional)
     * @param  \BalanceAndTransaction\TransactionTypes[] $types Transaction types that will be included in the result. Default is to include all transaction types (optional)
     * @param  \BalanceAndTransaction\TransactionStatuses[] $statuses Status of the transaction. Default is to include all status. (optional)
     * @param  \BalanceAndTransaction\ChannelsCategories[] $channel_categories Payment channels in which the transaction is carried out. Default is to include all channels. (optional)
     * @param  string $reference_id To filter the result for transactions with matching reference given (case sensitive) (optional)
     * @param  string $product_id To filter the result for transactions with matching product_id (a.k.a payment_id) given (case sensitive) (optional)
     * @param  string $account_identifier Account identifier of transaction. The format will be different from each channel. For example, on &#x60;BANK&#x60; channel it will be account number and on &#x60;CARD&#x60; it will be masked card number. (optional)
     * @param  float $amount Specific transaction amount to search for (optional)
     * @param  Currency $currency (optional)
     * @param  DateRangeFilter $created Filter time of transaction by created date. If not specified will list all dates. (optional)
     * @param  DateRangeFilter $updated Filter time of transaction by updated date. If not specified will list all dates. (optional)
     * @param  float $limit number of items in the result per page. Another name for \&quot;results_per_page\&quot; (optional, default to 10)
     * @param  string $after_id (optional)
     * @param  string $before_id (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getAllTransactions'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getAllTransactionsAsync($for_user_id = null, $types = null, $statuses = null, $channel_categories = null, $reference_id = null, $product_id = null, $account_identifier = null, $amount = null, $currency = null, $created = null, $updated = null, $limit = 10, $after_id = null, $before_id = null, string $contentType = self::contentTypes['getAllTransactions'][0])
    {
        return $this->getAllTransactionsAsyncWithHttpInfo($for_user_id, $types, $statuses, $channel_categories, $reference_id, $product_id, $account_identifier, $amount, $currency, $created, $updated, $limit, $after_id, $before_id, $contentType)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation getAllTransactionsAsyncWithHttpInfo
     *
     * Get a list of transactions
     *
     * @param  string $for_user_id The sub-account user-id that you want to make this transaction for. This header is only used if you have access to xenPlatform. See xenPlatform for more information (optional)
     * @param  \BalanceAndTransaction\TransactionTypes[] $types Transaction types that will be included in the result. Default is to include all transaction types (optional)
     * @param  \BalanceAndTransaction\TransactionStatuses[] $statuses Status of the transaction. Default is to include all status. (optional)
     * @param  \BalanceAndTransaction\ChannelsCategories[] $channel_categories Payment channels in which the transaction is carried out. Default is to include all channels. (optional)
     * @param  string $reference_id To filter the result for transactions with matching reference given (case sensitive) (optional)
     * @param  string $product_id To filter the result for transactions with matching product_id (a.k.a payment_id) given (case sensitive) (optional)
     * @param  string $account_identifier Account identifier of transaction. The format will be different from each channel. For example, on &#x60;BANK&#x60; channel it will be account number and on &#x60;CARD&#x60; it will be masked card number. (optional)
     * @param  float $amount Specific transaction amount to search for (optional)
     * @param  Currency $currency (optional)
     * @param  DateRangeFilter $created Filter time of transaction by created date. If not specified will list all dates. (optional)
     * @param  DateRangeFilter $updated Filter time of transaction by updated date. If not specified will list all dates. (optional)
     * @param  float $limit number of items in the result per page. Another name for \&quot;results_per_page\&quot; (optional, default to 10)
     * @param  string $after_id (optional)
     * @param  string $before_id (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getAllTransactions'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getAllTransactionsAsyncWithHttpInfo($for_user_id = null, $types = null, $statuses = null, $channel_categories = null, $reference_id = null, $product_id = null, $account_identifier = null, $amount = null, $currency = null, $created = null, $updated = null, $limit = 10, $after_id = null, $before_id = null, string $contentType = self::contentTypes['getAllTransactions'][0])
    {
        $returnType = '\Xendit\BalanceAndTransaction\TransactionsResponse';
        $request = $this->getAllTransactionsRequest($for_user_id, $types, $statuses, $channel_categories, $reference_id, $product_id, $account_identifier, $amount, $currency, $created, $updated, $limit, $after_id, $before_id, $contentType);

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
                        $e->getMessage() ? $e->getMessage() : sprintf('Error connecting to the API (%s)', "getAllTransactionsRequest")
                    );
                }
            );
    }

    /**
     * Create request for operation 'getAllTransactions'
     *
     * @param  string $for_user_id The sub-account user-id that you want to make this transaction for. This header is only used if you have access to xenPlatform. See xenPlatform for more information (optional)
     * @param  \BalanceAndTransaction\TransactionTypes[] $types Transaction types that will be included in the result. Default is to include all transaction types (optional)
     * @param  \BalanceAndTransaction\TransactionStatuses[] $statuses Status of the transaction. Default is to include all status. (optional)
     * @param  \BalanceAndTransaction\ChannelsCategories[] $channel_categories Payment channels in which the transaction is carried out. Default is to include all channels. (optional)
     * @param  string $reference_id To filter the result for transactions with matching reference given (case sensitive) (optional)
     * @param  string $product_id To filter the result for transactions with matching product_id (a.k.a payment_id) given (case sensitive) (optional)
     * @param  string $account_identifier Account identifier of transaction. The format will be different from each channel. For example, on &#x60;BANK&#x60; channel it will be account number and on &#x60;CARD&#x60; it will be masked card number. (optional)
     * @param  float $amount Specific transaction amount to search for (optional)
     * @param  Currency $currency (optional)
     * @param  DateRangeFilter $created Filter time of transaction by created date. If not specified will list all dates. (optional)
     * @param  DateRangeFilter $updated Filter time of transaction by updated date. If not specified will list all dates. (optional)
     * @param  float $limit number of items in the result per page. Another name for \&quot;results_per_page\&quot; (optional, default to 10)
     * @param  string $after_id (optional)
     * @param  string $before_id (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getAllTransactions'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function getAllTransactionsRequest($for_user_id = null, $types = null, $statuses = null, $channel_categories = null, $reference_id = null, $product_id = null, $account_identifier = null, $amount = null, $currency = null, $created = null, $updated = null, $limit = 10, $after_id = null, $before_id = null, string $contentType = self::contentTypes['getAllTransactions'][0])
    {












        if ($limit !== null && $limit > 50) {
            throw new \InvalidArgumentException('invalid value for "$limit" when calling TransactionApi.getAllTransactions, must be smaller than or equal to 50.');
        }
        
        if ($after_id !== null && !preg_match("/^txn_[0-9a-f]{8}-[0-9a-f]{4}-4[0-9a-f]{3}-[89ab][0-9a-f]{3}-[0-9a-f]{12}$/", $after_id)) {
            throw new \InvalidArgumentException("invalid value for \"after_id\" when calling TransactionApi.getAllTransactions, must conform to the pattern /^txn_[0-9a-f]{8}-[0-9a-f]{4}-4[0-9a-f]{3}-[89ab][0-9a-f]{3}-[0-9a-f]{12}$/.");
        }
        
        if ($before_id !== null && !preg_match("/^txn_[0-9a-f]{8}-[0-9a-f]{4}-4[0-9a-f]{3}-[89ab][0-9a-f]{3}-[0-9a-f]{12}$/", $before_id)) {
            throw new \InvalidArgumentException("invalid value for \"before_id\" when calling TransactionApi.getAllTransactions, must conform to the pattern /^txn_[0-9a-f]{8}-[0-9a-f]{4}-4[0-9a-f]{3}-[89ab][0-9a-f]{3}-[0-9a-f]{12}$/.");
        }
        

        $resourcePath = '/transactions';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $types,
            'types', // param base name
            'array', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $statuses,
            'statuses', // param base name
            'array', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $channel_categories,
            'channel_categories', // param base name
            'array', // openApiType
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
            $product_id,
            'product_id', // param base name
            'string', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $account_identifier,
            'account_identifier', // param base name
            'string', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $amount,
            'amount', // param base name
            'number', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $currency,
            'currency', // param base name
            'Currency', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $created,
            'created', // param base name
            'object', // openApiType
            'deepObject', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $updated,
            'updated', // param base name
            'object', // openApiType
            'deepObject', // style
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
