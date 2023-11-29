<?php
/**
 * XenditSdkException
 * PHP version 7.4
 *
 * @category Class
 * @package  Xendit
 */

/**
 * Payment Requests
 *
 * The version of the OpenAPI document: 1.45.2
 */

/**
 * NOTE: This class is auto generated.
 * Do not edit the class manually.
 */

namespace Xendit;

use \Exception;

/**
 * XenditSdkException Class Doc Comment
 *
 * @category Class
 * @package  Xendit
 */
class XenditSdkException extends Exception
{
    /**
     * Raw Response body from server. Useful for debugging when needed or when the error given is unclear
     *
     * @var \stdClass|string|null
     */
    protected $rawResponse;

    /**
     * Raw Response body from server. Useful for debugging when needed or when the error given is unclear
     *
     * @var string|null
     */
    protected $status;

    /**
     * Raw Response body from server. Useful for debugging when needed or when the error given is unclear
     *
     * @var string|null
     */
    protected $errorCode;

    /**
     * Raw Response body from server. Useful for debugging when needed or when the error given is unclear
     *
     * @var string|null
     */
    protected $errorMessage;


    /**
     * Constructor
     *
     * @param \stdClass|null                $rawResponse         Response Body
     * @param string|null                   $paramStatus            HTTP status code of the Response
     * @param string|null         $paramStatusText HTTP Message if any
     */
    public function __construct($rawResponse, $paramStatus, $paramStatusText)
    {
        if ($rawResponse === null) {
            $rawResponse = "";
        }
        $_status = $paramStatus;
        $_errorCode = "";
        $_errorMessage = "";

        if ($_status === "" && property_exists($rawResponse, "status")) {
            $_status = $rawResponse->status;
        }
        if ($_status === "" && property_exists($rawResponse, "status_code")) {
            $_status = $rawResponse->status_code;
        }
        if ($_status === "" && property_exists($rawResponse, "statusCode")) {
            $_status = $rawResponse->statusCode;
        }

        if (property_exists($rawResponse, "error")) {
            $_errorCode = $rawResponse->error;
        }
        if ($_errorCode === "" && property_exists($rawResponse, "error_code")) {
            $_errorCode = $rawResponse->error_code;
        }
        if ($_errorCode === "" && property_exists($rawResponse, "errorCode")) {
            $_errorCode = $rawResponse->errorCode;
        }

        if (property_exists($rawResponse, "message")) {
            $_errorMessage = $rawResponse->message;
        }
        if ($_errorMessage === "" && property_exists($rawResponse, "error_message")) {
            $_errorMessage = $rawResponse->error_message;
        }
        if ($_errorMessage === "" && property_exists($rawResponse, "errorMessage")) {
            $_errorMessage = $rawResponse->errorMessage;
        }
        if ($_errorMessage === "") {
            $_errorMessage = $paramStatusText;
        }

        parent::__construct($_errorMessage, intval($paramStatus));

        $this->rawResponse = $rawResponse;
        $this->status = $_status;
        $this->errorCode = $_errorCode;
        $this->errorMessage = $_errorMessage;
    }

    /**
     * Gets the raw response from server
     *
     * @return \stdClass|string|null
     */
    public function getRawResponse()
    {
        return $this->rawResponse;
    }

    /**
     * Gets HTTP status code (2xx, 4xx, 5xx, etc)
     *
     * @return string|null
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Gets Xendit Error Code
     *
     * @return string|null
     */
    public function getErrorCode()
    {
        return $this->errorCode;
    }

    /**
     * Gets Xendit Error Message
     *
     * @return string|null
     */
    public function getErrorMessage()
    {
        return $this->errorMessage;
    }

    /**
     * Gets Full Error, useful for debugging
     *
     * @return \stdClass
     */
    public function getFullError()
    {
        return (object) [
            'status' => $this->status,
            'errorCode' => $this->errorCode,
            'errorMessage' => $this->errorMessage,
            'rawResponse' => $this->rawResponse
        ];
    }
}
