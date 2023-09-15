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
 * The version of the OpenAPI document: 3.4.2
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
use Xendit\ApiException;
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
        'getAllTransactions' => [
            'application/json',
        ],
        'getTransactionByID' => [
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
     * @throws \Xendit\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return Xendit\BalanceAndTransaction\TransactionsResponse|Xendit\BalanceAndTransaction\ValidationError|Xendit\BalanceAndTransaction\ServerError
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
     * @throws \Xendit\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of Xendit\BalanceAndTransaction\TransactionsResponse|Xendit\BalanceAndTransaction\ValidationError|Xendit\BalanceAndTransaction\ServerError, HTTP status code, HTTP response headers (array of strings)
     */
    public function getAllTransactionsWithHttpInfo($for_user_id = null, $types = null, $statuses = null, $channel_categories = null, $reference_id = null, $product_id = null, $account_identifier = null, $amount = null, $currency = null, $created = null, $updated = null, $limit = 10, $after_id = null, $before_id = null, string $contentType = self::contentTypes['getAllTransactions'][0])
    {
        $request = $this->getAllTransactionsRequest($for_user_id, $types, $statuses, $channel_categories, $reference_id, $product_id, $account_identifier, $amount, $currency, $created, $updated, $limit, $after_id, $before_id, $contentType);

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
                    if ('Xendit\BalanceAndTransaction\TransactionsResponse' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('Xendit\BalanceAndTransaction\TransactionsResponse' !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, 'Xendit\BalanceAndTransaction\TransactionsResponse', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                case 400:
                    if ('Xendit\BalanceAndTransaction\ValidationError' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('Xendit\BalanceAndTransaction\ValidationError' !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, 'Xendit\BalanceAndTransaction\ValidationError', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                default:
                    if ('Xendit\BalanceAndTransaction\ServerError' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('Xendit\BalanceAndTransaction\ServerError' !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, 'Xendit\BalanceAndTransaction\ServerError', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
            }

            $returnType = '\BalanceAndTransaction\TransactionsResponse';
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
                        'Xendit\BalanceAndTransaction\TransactionsResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 400:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        'Xendit\BalanceAndTransaction\ValidationError',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                default:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        'Xendit\BalanceAndTransaction\ServerError',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation getAllTransactionsAsync
     *
     * Get a list of transactions
     *
     * @param  Xenditstring $for_user_id The sub-account user-id that you want to make this transaction for. This header is only used if you have access to xenPlatform. See xenPlatform for more information (optional)
     * @param  Xendit\BalanceAndTransaction\TransactionTypes[] $types Transaction types that will be included in the result. Default is to include all transaction types (optional)
     * @param  Xendit\BalanceAndTransaction\TransactionStatuses[] $statuses Status of the transaction. Default is to include all status. (optional)
     * @param  Xendit\BalanceAndTransaction\ChannelsCategories[] $channel_categories Payment channels in which the transaction is carried out. Default is to include all channels. (optional)
     * @param  Xenditstring $reference_id To filter the result for transactions with matching reference given (case sensitive) (optional)
     * @param  Xenditstring $product_id To filter the result for transactions with matching product_id (a.k.a payment_id) given (case sensitive) (optional)
     * @param  Xenditstring $account_identifier Account identifier of transaction. The format will be different from each channel. For example, on &#x60;BANK&#x60; channel it will be account number and on &#x60;CARD&#x60; it will be masked card number. (optional)
     * @param  Xenditfloat $amount Specific transaction amount to search for (optional)
     * @param  XenditCurrency $currency (optional)
     * @param  XenditDateRangeFilter $created Filter time of transaction by created date. If not specified will list all dates. (optional)
     * @param  XenditDateRangeFilter $updated Filter time of transaction by updated date. If not specified will list all dates. (optional)
     * @param  Xenditfloat $limit number of items in the result per page. Another name for \&quot;results_per_page\&quot; (optional, default to 10)
     * @param  Xenditstring $after_id (optional)
     * @param  Xenditstring $before_id (optional)
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
     * @param  Xenditstring $for_user_id The sub-account user-id that you want to make this transaction for. This header is only used if you have access to xenPlatform. See xenPlatform for more information (optional)
     * @param  Xendit\BalanceAndTransaction\TransactionTypes[] $types Transaction types that will be included in the result. Default is to include all transaction types (optional)
     * @param  Xendit\BalanceAndTransaction\TransactionStatuses[] $statuses Status of the transaction. Default is to include all status. (optional)
     * @param  Xendit\BalanceAndTransaction\ChannelsCategories[] $channel_categories Payment channels in which the transaction is carried out. Default is to include all channels. (optional)
     * @param  Xenditstring $reference_id To filter the result for transactions with matching reference given (case sensitive) (optional)
     * @param  Xenditstring $product_id To filter the result for transactions with matching product_id (a.k.a payment_id) given (case sensitive) (optional)
     * @param  Xenditstring $account_identifier Account identifier of transaction. The format will be different from each channel. For example, on &#x60;BANK&#x60; channel it will be account number and on &#x60;CARD&#x60; it will be masked card number. (optional)
     * @param  Xenditfloat $amount Specific transaction amount to search for (optional)
     * @param  XenditCurrency $currency (optional)
     * @param  XenditDateRangeFilter $created Filter time of transaction by created date. If not specified will list all dates. (optional)
     * @param  XenditDateRangeFilter $updated Filter time of transaction by updated date. If not specified will list all dates. (optional)
     * @param  Xenditfloat $limit number of items in the result per page. Another name for \&quot;results_per_page\&quot; (optional, default to 10)
     * @param  Xenditstring $after_id (optional)
     * @param  Xenditstring $before_id (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getAllTransactions'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getAllTransactionsAsyncWithHttpInfo($for_user_id = null, $types = null, $statuses = null, $channel_categories = null, $reference_id = null, $product_id = null, $account_identifier = null, $amount = null, $currency = null, $created = null, $updated = null, $limit = 10, $after_id = null, $before_id = null, string $contentType = self::contentTypes['getAllTransactions'][0])
    {
        $returnType = '\BalanceAndTransaction\TransactionsResponse';
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
     * Operation getTransactionByID
     *
     * Get a transaction based on its id
     *
     * @param  string $id id (required)
     * @param  string $for_user_id The sub-account user-id that you want to make this transaction for. This header is only used if you have access to xenPlatform. See xenPlatform for more information (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getTransactionByID'] to see the possible values for this operation
     *
     * @throws \Xendit\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return Xendit\BalanceAndTransaction\TransactionResponse|Xendit\BalanceAndTransaction\ValidationError|Xendit\BalanceAndTransaction\ServerError
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
     * @throws \Xendit\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of Xendit\BalanceAndTransaction\TransactionResponse|Xendit\BalanceAndTransaction\ValidationError|Xendit\BalanceAndTransaction\ServerError, HTTP status code, HTTP response headers (array of strings)
     */
    public function getTransactionByIDWithHttpInfo($id, $for_user_id = null, string $contentType = self::contentTypes['getTransactionByID'][0])
    {
        $request = $this->getTransactionByIDRequest($id, $for_user_id, $contentType);

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
                    if ('Xendit\BalanceAndTransaction\TransactionResponse' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('Xendit\BalanceAndTransaction\TransactionResponse' !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, 'Xendit\BalanceAndTransaction\TransactionResponse', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                case 400:
                    if ('Xendit\BalanceAndTransaction\ValidationError' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('Xendit\BalanceAndTransaction\ValidationError' !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, 'Xendit\BalanceAndTransaction\ValidationError', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                default:
                    if ('Xendit\BalanceAndTransaction\ServerError' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('Xendit\BalanceAndTransaction\ServerError' !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, 'Xendit\BalanceAndTransaction\ServerError', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
            }

            $returnType = '\BalanceAndTransaction\TransactionResponse';
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
                        'Xendit\BalanceAndTransaction\TransactionResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 400:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        'Xendit\BalanceAndTransaction\ValidationError',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                default:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        'Xendit\BalanceAndTransaction\ServerError',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation getTransactionByIDAsync
     *
     * Get a transaction based on its id
     *
     * @param  Xenditstring $id (required)
     * @param  Xenditstring $for_user_id The sub-account user-id that you want to make this transaction for. This header is only used if you have access to xenPlatform. See xenPlatform for more information (optional)
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
     * @param  Xenditstring $id (required)
     * @param  Xenditstring $for_user_id The sub-account user-id that you want to make this transaction for. This header is only used if you have access to xenPlatform. See xenPlatform for more information (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getTransactionByID'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getTransactionByIDAsyncWithHttpInfo($id, $for_user_id = null, string $contentType = self::contentTypes['getTransactionByID'][0])
    {
        $returnType = '\BalanceAndTransaction\TransactionResponse';
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
