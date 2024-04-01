<?php
/**
 * InvoiceApi
 * PHP version 7.4
 *
 * @category Class
 * @package  Xendit
 */

/**
 * xendit-invoice-service
 *
 * The version of the OpenAPI document: 1.7.6
 */

/**
 * NOTE: This class is auto generated
 * Do not edit the class manually.
 */

namespace Xendit\Invoice;

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
 * InvoiceApi Class Doc Comment
 *
 * @category Class
 * @package  Xendit
 */
class InvoiceApi
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
        'createInvoice' => [
            'application/json',
        ],
        'getInvoiceById' => [
            'application/json',
        ],
        'getInvoices' => [
            'application/json',
        ],
        'expireInvoice' => [
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
     * Operation createInvoice
     *
     * Create an invoice
     *
     * @param  \Xendit\Invoice\CreateInvoiceRequest $create_invoice_request create_invoice_request (required)
     * @param  string $for_user_id Business ID of the sub-account merchant (XP feature) (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['createInvoice'] to see the possible values for this operation
     *
     * @throws \Xendit\XenditSdkException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Xendit\Invoice\Invoice
     */
    public function createInvoice($create_invoice_request, $for_user_id = null, string $contentType = self::contentTypes['createInvoice'][0])
    {
        list($response) = $this->createInvoiceWithHttpInfo($create_invoice_request, $for_user_id, $contentType);
        return $response;
    }

    /**
     * Operation createInvoiceWithHttpInfo
     *
     * Create an invoice
     *
     * @param  \Xendit\Invoice\CreateInvoiceRequest $create_invoice_request (required)
     * @param  string $for_user_id Business ID of the sub-account merchant (XP feature) (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['createInvoice'] to see the possible values for this operation
     *
     * @throws \Xendit\XenditSdkException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Xendit\Invoice\Invoice, HTTP status code, HTTP response headers (array of strings)
     */
    public function createInvoiceWithHttpInfo($create_invoice_request, $for_user_id = null, string $contentType = self::contentTypes['createInvoice'][0])
    {
        $request = $this->createInvoiceRequest($create_invoice_request, $for_user_id, $contentType);

        $options = $this->createHttpClientOption();
        try {
            $response = $this->client->send($request, $options);
        } catch (RequestException $e) {
            throw new XenditSdkException(
                $e->getResponse() && $e->getResponse()->getBody() ? json_decode((string) $e->getResponse()->getBody()) : null,
                (string) $e->getCode(),
                $e->getMessage() ? $e->getMessage() : sprintf('Error connecting to the API (%s)', "createInvoiceRequest")
            );
        } catch (ConnectException $e) {
            throw new XenditSdkException(
                null,
                (string) $e->getCode(),
                $e->getMessage() ? $e->getMessage() : sprintf('Error connecting to the API (%s)', "createInvoiceRequest")
            );
        }  catch (GuzzleException $e) {
            throw new XenditSdkException(
                null,
                (string) $e->getCode(),
                $e->getMessage() ? $e->getMessage() : sprintf('Error instantiating client for API (%s)', "createInvoiceRequest")
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
        $returnType = '\Xendit\Invoice\Invoice';
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
     * Operation createInvoiceAsync
     *
     * Create an invoice
     *
     * @param  \Xendit\Invoice\CreateInvoiceRequest $create_invoice_request (required)
     * @param  string $for_user_id Business ID of the sub-account merchant (XP feature) (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['createInvoice'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function createInvoiceAsync($create_invoice_request, $for_user_id = null, string $contentType = self::contentTypes['createInvoice'][0])
    {
        return $this->createInvoiceAsyncWithHttpInfo($create_invoice_request, $for_user_id, $contentType)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation createInvoiceAsyncWithHttpInfo
     *
     * Create an invoice
     *
     * @param  \Xendit\Invoice\CreateInvoiceRequest $create_invoice_request (required)
     * @param  string $for_user_id Business ID of the sub-account merchant (XP feature) (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['createInvoice'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function createInvoiceAsyncWithHttpInfo($create_invoice_request, $for_user_id = null, string $contentType = self::contentTypes['createInvoice'][0])
    {
        $returnType = '\Xendit\Invoice\Invoice';
        $request = $this->createInvoiceRequest($create_invoice_request, $for_user_id, $contentType);

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
                        $e->getMessage() ? $e->getMessage() : sprintf('Error connecting to the API (%s)', "createInvoiceRequest")
                    );
                }
            );
    }

    /**
     * Create request for operation 'createInvoice'
     *
     * @param  \Xendit\Invoice\CreateInvoiceRequest $create_invoice_request (required)
     * @param  string $for_user_id Business ID of the sub-account merchant (XP feature) (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['createInvoice'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function createInvoiceRequest($create_invoice_request, $for_user_id = null, string $contentType = self::contentTypes['createInvoice'][0])
    {

        // verify the required parameter 'create_invoice_request' is set
        if ($create_invoice_request === null || (is_array($create_invoice_request) && count($create_invoice_request) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $create_invoice_request when calling createInvoice'
            );
        }



        $resourcePath = '/v2/invoices/';
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
        if (isset($create_invoice_request)) {
            if (stripos($headers['Content-Type'], 'application/json') !== false) {
                # if Content-Type contains "application/json", json_encode the body
                $httpBody = \GuzzleHttp\Utils::jsonEncode(ObjectSerializer::sanitizeForSerialization($create_invoice_request));
            } else {
                $httpBody = $create_invoice_request;
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
     * Operation getInvoiceById
     *
     * Get invoice by invoice id
     *
     * @param  string $invoice_id Invoice ID (required)
     * @param  string $for_user_id Business ID of the sub-account merchant (XP feature) (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getInvoiceById'] to see the possible values for this operation
     *
     * @throws \Xendit\XenditSdkException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Xendit\Invoice\Invoice
     */
    public function getInvoiceById($invoice_id, $for_user_id = null, string $contentType = self::contentTypes['getInvoiceById'][0])
    {
        list($response) = $this->getInvoiceByIdWithHttpInfo($invoice_id, $for_user_id, $contentType);
        return $response;
    }

    /**
     * Operation getInvoiceByIdWithHttpInfo
     *
     * Get invoice by invoice id
     *
     * @param  string $invoice_id Invoice ID (required)
     * @param  string $for_user_id Business ID of the sub-account merchant (XP feature) (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getInvoiceById'] to see the possible values for this operation
     *
     * @throws \Xendit\XenditSdkException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Xendit\Invoice\Invoice, HTTP status code, HTTP response headers (array of strings)
     */
    public function getInvoiceByIdWithHttpInfo($invoice_id, $for_user_id = null, string $contentType = self::contentTypes['getInvoiceById'][0])
    {
        $request = $this->getInvoiceByIdRequest($invoice_id, $for_user_id, $contentType);

        $options = $this->createHttpClientOption();
        try {
            $response = $this->client->send($request, $options);
        } catch (RequestException $e) {
            throw new XenditSdkException(
                $e->getResponse() && $e->getResponse()->getBody() ? json_decode((string) $e->getResponse()->getBody()) : null,
                (string) $e->getCode(),
                $e->getMessage() ? $e->getMessage() : sprintf('Error connecting to the API (%s)', "getInvoiceByIdRequest")
            );
        } catch (ConnectException $e) {
            throw new XenditSdkException(
                null,
                (string) $e->getCode(),
                $e->getMessage() ? $e->getMessage() : sprintf('Error connecting to the API (%s)', "getInvoiceByIdRequest")
            );
        }  catch (GuzzleException $e) {
            throw new XenditSdkException(
                null,
                (string) $e->getCode(),
                $e->getMessage() ? $e->getMessage() : sprintf('Error instantiating client for API (%s)', "getInvoiceByIdRequest")
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
        $returnType = '\Xendit\Invoice\Invoice';
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
     * Operation getInvoiceByIdAsync
     *
     * Get invoice by invoice id
     *
     * @param  string $invoice_id Invoice ID (required)
     * @param  string $for_user_id Business ID of the sub-account merchant (XP feature) (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getInvoiceById'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getInvoiceByIdAsync($invoice_id, $for_user_id = null, string $contentType = self::contentTypes['getInvoiceById'][0])
    {
        return $this->getInvoiceByIdAsyncWithHttpInfo($invoice_id, $for_user_id, $contentType)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation getInvoiceByIdAsyncWithHttpInfo
     *
     * Get invoice by invoice id
     *
     * @param  string $invoice_id Invoice ID (required)
     * @param  string $for_user_id Business ID of the sub-account merchant (XP feature) (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getInvoiceById'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getInvoiceByIdAsyncWithHttpInfo($invoice_id, $for_user_id = null, string $contentType = self::contentTypes['getInvoiceById'][0])
    {
        $returnType = '\Xendit\Invoice\Invoice';
        $request = $this->getInvoiceByIdRequest($invoice_id, $for_user_id, $contentType);

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
                        $e->getMessage() ? $e->getMessage() : sprintf('Error connecting to the API (%s)', "getInvoiceByIdRequest")
                    );
                }
            );
    }

    /**
     * Create request for operation 'getInvoiceById'
     *
     * @param  string $invoice_id Invoice ID (required)
     * @param  string $for_user_id Business ID of the sub-account merchant (XP feature) (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getInvoiceById'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function getInvoiceByIdRequest($invoice_id, $for_user_id = null, string $contentType = self::contentTypes['getInvoiceById'][0])
    {

        // verify the required parameter 'invoice_id' is set
        if ($invoice_id === null || (is_array($invoice_id) && count($invoice_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $invoice_id when calling getInvoiceById'
            );
        }



        $resourcePath = '/v2/invoices/{invoice_id}';
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
        if ($invoice_id !== null) {
            $resourcePath = str_replace(
                '{' . 'invoice_id' . '}',
                ObjectSerializer::toPathValue($invoice_id),
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
     * Operation getInvoices
     *
     * Get all Invoices
     *
     * @param  string $for_user_id Business ID of the sub-account merchant (XP feature) (optional)
     * @param  string $external_id external_id (optional)
     * @param  \Invoice\InvoiceStatus[] $statuses statuses (optional)
     * @param  float $limit limit (optional)
     * @param  \DateTime $created_after created_after (optional)
     * @param  \DateTime $created_before created_before (optional)
     * @param  \DateTime $paid_after paid_after (optional)
     * @param  \DateTime $paid_before paid_before (optional)
     * @param  \DateTime $expired_after expired_after (optional)
     * @param  \DateTime $expired_before expired_before (optional)
     * @param  string $last_invoice last_invoice (optional)
     * @param  \Invoice\InvoiceClientType[] $client_types client_types (optional)
     * @param  string[] $payment_channels payment_channels (optional)
     * @param  string $on_demand_link on_demand_link (optional)
     * @param  string $recurring_payment_id recurring_payment_id (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getInvoices'] to see the possible values for this operation
     *
     * @throws \Xendit\XenditSdkException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Xendit\Invoice\Invoice[]
     */
    public function getInvoices($for_user_id = null, $external_id = null, $statuses = null, $limit = null, $created_after = null, $created_before = null, $paid_after = null, $paid_before = null, $expired_after = null, $expired_before = null, $last_invoice = null, $client_types = null, $payment_channels = null, $on_demand_link = null, $recurring_payment_id = null, string $contentType = self::contentTypes['getInvoices'][0])
    {
        list($response) = $this->getInvoicesWithHttpInfo($for_user_id, $external_id, $statuses, $limit, $created_after, $created_before, $paid_after, $paid_before, $expired_after, $expired_before, $last_invoice, $client_types, $payment_channels, $on_demand_link, $recurring_payment_id, $contentType);
        return $response;
    }

    /**
     * Operation getInvoicesWithHttpInfo
     *
     * Get all Invoices
     *
     * @param  string $for_user_id Business ID of the sub-account merchant (XP feature) (optional)
     * @param  string $external_id (optional)
     * @param  \Invoice\InvoiceStatus[] $statuses (optional)
     * @param  float $limit (optional)
     * @param  \DateTime $created_after (optional)
     * @param  \DateTime $created_before (optional)
     * @param  \DateTime $paid_after (optional)
     * @param  \DateTime $paid_before (optional)
     * @param  \DateTime $expired_after (optional)
     * @param  \DateTime $expired_before (optional)
     * @param  string $last_invoice (optional)
     * @param  \Invoice\InvoiceClientType[] $client_types (optional)
     * @param  string[] $payment_channels (optional)
     * @param  string $on_demand_link (optional)
     * @param  string $recurring_payment_id (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getInvoices'] to see the possible values for this operation
     *
     * @throws \Xendit\XenditSdkException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Xendit\Invoice\Invoice[], HTTP status code, HTTP response headers (array of strings)
     */
    public function getInvoicesWithHttpInfo($for_user_id = null, $external_id = null, $statuses = null, $limit = null, $created_after = null, $created_before = null, $paid_after = null, $paid_before = null, $expired_after = null, $expired_before = null, $last_invoice = null, $client_types = null, $payment_channels = null, $on_demand_link = null, $recurring_payment_id = null, string $contentType = self::contentTypes['getInvoices'][0])
    {
        $request = $this->getInvoicesRequest($for_user_id, $external_id, $statuses, $limit, $created_after, $created_before, $paid_after, $paid_before, $expired_after, $expired_before, $last_invoice, $client_types, $payment_channels, $on_demand_link, $recurring_payment_id, $contentType);

        $options = $this->createHttpClientOption();
        try {
            $response = $this->client->send($request, $options);
        } catch (RequestException $e) {
            throw new XenditSdkException(
                $e->getResponse() && $e->getResponse()->getBody() ? json_decode((string) $e->getResponse()->getBody()) : null,
                (string) $e->getCode(),
                $e->getMessage() ? $e->getMessage() : sprintf('Error connecting to the API (%s)', "getInvoicesRequest")
            );
        } catch (ConnectException $e) {
            throw new XenditSdkException(
                null,
                (string) $e->getCode(),
                $e->getMessage() ? $e->getMessage() : sprintf('Error connecting to the API (%s)', "getInvoicesRequest")
            );
        }  catch (GuzzleException $e) {
            throw new XenditSdkException(
                null,
                (string) $e->getCode(),
                $e->getMessage() ? $e->getMessage() : sprintf('Error instantiating client for API (%s)', "getInvoicesRequest")
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
        $returnType = '\Xendit\Invoice\Invoice[]';
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
     * Operation getInvoicesAsync
     *
     * Get all Invoices
     *
     * @param  string $for_user_id Business ID of the sub-account merchant (XP feature) (optional)
     * @param  string $external_id (optional)
     * @param  \Invoice\InvoiceStatus[] $statuses (optional)
     * @param  float $limit (optional)
     * @param  \DateTime $created_after (optional)
     * @param  \DateTime $created_before (optional)
     * @param  \DateTime $paid_after (optional)
     * @param  \DateTime $paid_before (optional)
     * @param  \DateTime $expired_after (optional)
     * @param  \DateTime $expired_before (optional)
     * @param  string $last_invoice (optional)
     * @param  \Invoice\InvoiceClientType[] $client_types (optional)
     * @param  string[] $payment_channels (optional)
     * @param  string $on_demand_link (optional)
     * @param  string $recurring_payment_id (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getInvoices'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getInvoicesAsync($for_user_id = null, $external_id = null, $statuses = null, $limit = null, $created_after = null, $created_before = null, $paid_after = null, $paid_before = null, $expired_after = null, $expired_before = null, $last_invoice = null, $client_types = null, $payment_channels = null, $on_demand_link = null, $recurring_payment_id = null, string $contentType = self::contentTypes['getInvoices'][0])
    {
        return $this->getInvoicesAsyncWithHttpInfo($for_user_id, $external_id, $statuses, $limit, $created_after, $created_before, $paid_after, $paid_before, $expired_after, $expired_before, $last_invoice, $client_types, $payment_channels, $on_demand_link, $recurring_payment_id, $contentType)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation getInvoicesAsyncWithHttpInfo
     *
     * Get all Invoices
     *
     * @param  string $for_user_id Business ID of the sub-account merchant (XP feature) (optional)
     * @param  string $external_id (optional)
     * @param  \Invoice\InvoiceStatus[] $statuses (optional)
     * @param  float $limit (optional)
     * @param  \DateTime $created_after (optional)
     * @param  \DateTime $created_before (optional)
     * @param  \DateTime $paid_after (optional)
     * @param  \DateTime $paid_before (optional)
     * @param  \DateTime $expired_after (optional)
     * @param  \DateTime $expired_before (optional)
     * @param  string $last_invoice (optional)
     * @param  \Invoice\InvoiceClientType[] $client_types (optional)
     * @param  string[] $payment_channels (optional)
     * @param  string $on_demand_link (optional)
     * @param  string $recurring_payment_id (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getInvoices'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getInvoicesAsyncWithHttpInfo($for_user_id = null, $external_id = null, $statuses = null, $limit = null, $created_after = null, $created_before = null, $paid_after = null, $paid_before = null, $expired_after = null, $expired_before = null, $last_invoice = null, $client_types = null, $payment_channels = null, $on_demand_link = null, $recurring_payment_id = null, string $contentType = self::contentTypes['getInvoices'][0])
    {
        $returnType = '\Xendit\Invoice\Invoice[]';
        $request = $this->getInvoicesRequest($for_user_id, $external_id, $statuses, $limit, $created_after, $created_before, $paid_after, $paid_before, $expired_after, $expired_before, $last_invoice, $client_types, $payment_channels, $on_demand_link, $recurring_payment_id, $contentType);

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
                        $e->getMessage() ? $e->getMessage() : sprintf('Error connecting to the API (%s)', "getInvoicesRequest")
                    );
                }
            );
    }

    /**
     * Create request for operation 'getInvoices'
     *
     * @param  string $for_user_id Business ID of the sub-account merchant (XP feature) (optional)
     * @param  string $external_id (optional)
     * @param  \Invoice\InvoiceStatus[] $statuses (optional)
     * @param  float $limit (optional)
     * @param  \DateTime $created_after (optional)
     * @param  \DateTime $created_before (optional)
     * @param  \DateTime $paid_after (optional)
     * @param  \DateTime $paid_before (optional)
     * @param  \DateTime $expired_after (optional)
     * @param  \DateTime $expired_before (optional)
     * @param  string $last_invoice (optional)
     * @param  \Invoice\InvoiceClientType[] $client_types (optional)
     * @param  string[] $payment_channels (optional)
     * @param  string $on_demand_link (optional)
     * @param  string $recurring_payment_id (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getInvoices'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function getInvoicesRequest($for_user_id = null, $external_id = null, $statuses = null, $limit = null, $created_after = null, $created_before = null, $paid_after = null, $paid_before = null, $expired_after = null, $expired_before = null, $last_invoice = null, $client_types = null, $payment_channels = null, $on_demand_link = null, $recurring_payment_id = null, string $contentType = self::contentTypes['getInvoices'][0])
    {

















        $resourcePath = '/v2/invoices';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $external_id,
            'external_id', // param base name
            'string', // openApiType
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
            $limit,
            'limit', // param base name
            'number', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $created_after,
            'created_after', // param base name
            'string', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $created_before,
            'created_before', // param base name
            'string', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $paid_after,
            'paid_after', // param base name
            'string', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $paid_before,
            'paid_before', // param base name
            'string', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $expired_after,
            'expired_after', // param base name
            'string', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $expired_before,
            'expired_before', // param base name
            'string', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $last_invoice,
            'last_invoice', // param base name
            'string', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $client_types,
            'client_types', // param base name
            'array', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $payment_channels,
            'payment_channels', // param base name
            'array', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $on_demand_link,
            'on_demand_link', // param base name
            'string', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $recurring_payment_id,
            'recurring_payment_id', // param base name
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
     * Operation expireInvoice
     *
     * Manually expire an invoice
     *
     * @param  string $invoice_id Invoice ID to be expired (required)
     * @param  string $for_user_id Business ID of the sub-account merchant (XP feature) (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['expireInvoice'] to see the possible values for this operation
     *
     * @throws \Xendit\XenditSdkException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Xendit\Invoice\Invoice
     */
    public function expireInvoice($invoice_id, $for_user_id = null, string $contentType = self::contentTypes['expireInvoice'][0])
    {
        list($response) = $this->expireInvoiceWithHttpInfo($invoice_id, $for_user_id, $contentType);
        return $response;
    }

    /**
     * Operation expireInvoiceWithHttpInfo
     *
     * Manually expire an invoice
     *
     * @param  string $invoice_id Invoice ID to be expired (required)
     * @param  string $for_user_id Business ID of the sub-account merchant (XP feature) (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['expireInvoice'] to see the possible values for this operation
     *
     * @throws \Xendit\XenditSdkException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Xendit\Invoice\Invoice, HTTP status code, HTTP response headers (array of strings)
     */
    public function expireInvoiceWithHttpInfo($invoice_id, $for_user_id = null, string $contentType = self::contentTypes['expireInvoice'][0])
    {
        $request = $this->expireInvoiceRequest($invoice_id, $for_user_id, $contentType);

        $options = $this->createHttpClientOption();
        try {
            $response = $this->client->send($request, $options);
        } catch (RequestException $e) {
            throw new XenditSdkException(
                $e->getResponse() && $e->getResponse()->getBody() ? json_decode((string) $e->getResponse()->getBody()) : null,
                (string) $e->getCode(),
                $e->getMessage() ? $e->getMessage() : sprintf('Error connecting to the API (%s)', "expireInvoiceRequest")
            );
        } catch (ConnectException $e) {
            throw new XenditSdkException(
                null,
                (string) $e->getCode(),
                $e->getMessage() ? $e->getMessage() : sprintf('Error connecting to the API (%s)', "expireInvoiceRequest")
            );
        }  catch (GuzzleException $e) {
            throw new XenditSdkException(
                null,
                (string) $e->getCode(),
                $e->getMessage() ? $e->getMessage() : sprintf('Error instantiating client for API (%s)', "expireInvoiceRequest")
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
        $returnType = '\Xendit\Invoice\Invoice';
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
     * Operation expireInvoiceAsync
     *
     * Manually expire an invoice
     *
     * @param  string $invoice_id Invoice ID to be expired (required)
     * @param  string $for_user_id Business ID of the sub-account merchant (XP feature) (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['expireInvoice'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function expireInvoiceAsync($invoice_id, $for_user_id = null, string $contentType = self::contentTypes['expireInvoice'][0])
    {
        return $this->expireInvoiceAsyncWithHttpInfo($invoice_id, $for_user_id, $contentType)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation expireInvoiceAsyncWithHttpInfo
     *
     * Manually expire an invoice
     *
     * @param  string $invoice_id Invoice ID to be expired (required)
     * @param  string $for_user_id Business ID of the sub-account merchant (XP feature) (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['expireInvoice'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function expireInvoiceAsyncWithHttpInfo($invoice_id, $for_user_id = null, string $contentType = self::contentTypes['expireInvoice'][0])
    {
        $returnType = '\Xendit\Invoice\Invoice';
        $request = $this->expireInvoiceRequest($invoice_id, $for_user_id, $contentType);

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
                        $e->getMessage() ? $e->getMessage() : sprintf('Error connecting to the API (%s)', "expireInvoiceRequest")
                    );
                }
            );
    }

    /**
     * Create request for operation 'expireInvoice'
     *
     * @param  string $invoice_id Invoice ID to be expired (required)
     * @param  string $for_user_id Business ID of the sub-account merchant (XP feature) (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['expireInvoice'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function expireInvoiceRequest($invoice_id, $for_user_id = null, string $contentType = self::contentTypes['expireInvoice'][0])
    {

        // verify the required parameter 'invoice_id' is set
        if ($invoice_id === null || (is_array($invoice_id) && count($invoice_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $invoice_id when calling expireInvoice'
            );
        }



        $resourcePath = '/invoices/{invoice_id}/expire!';
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
        if ($invoice_id !== null) {
            $resourcePath = str_replace(
                '{' . 'invoice_id' . '}',
                ObjectSerializer::toPathValue($invoice_id),
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
