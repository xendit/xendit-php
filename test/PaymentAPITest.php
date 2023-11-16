<?php
require_once __DIR__ . '/../vendor/autoload.php';

use PHPUnit\Framework\TestCase;
use Xendit\Configuration;
use Xendit\Invoice\QrCode;
use Xendit\PaymentMethod\CardChannelProperties;
use Xendit\PaymentMethod\CardParameters;
use Xendit\PaymentMethod\CardParametersCardInformation;
use Xendit\PaymentMethod\DirectDebitParameters;
use Xendit\PaymentMethod\EWalletParameters;
use Xendit\PaymentMethod\PaymentMethodAuthParameters;
use Xendit\PaymentMethod\PaymentMethodParameters;
use Xendit\PaymentMethod\PaymentMethodStatus;
use Xendit\PaymentRequest\PaymentRequestParameters;
use Xendit\PaymentRequest\PaymentRequestStatus;
use Xendit\PaymentRequest\PaymentMethodType;
use Xendit\PaymentRequest\PaymentMethodReusability;
use Xendit\PaymentRequest\QRCodeChannelCode;
use Xendit\XenditSdkException;


final class PaymentAPITest extends TestCase
{
    private Xendit\PaymentMethod\PaymentMethodApi $pmApiInstance;
    private Xendit\PaymentRequest\PaymentRequestApi $prApiInstance;

    protected function setUp(): void
    {
        // Load environment variables
        $dotenv = Dotenv\Dotenv::createImmutable(__DIR__, '.env.test');
        $dotenv->load();

        $api_key = getenv('DEVELOPMENT_API_KEY');
        Configuration::setXenditKey($api_key);

        // Initialize XenditClient
        $this->pmApiInstance = new Xendit\PaymentMethod\PaymentMethodApi();
        $this->prApiInstance = new Xendit\PaymentRequest\PaymentRequestApi();
    }

    public function testCreateCardPayment(): void
    {
        try {
            // Creating a Payment Method
            $payment_method_parameters = new PaymentMethodParameters([
                'type' => Xendit\PaymentMethod\PaymentMethodType::CARD,
                'card' => new CardParameters([
                    "currency" => Xendit\PaymentRequest\PaymentRequestCurrency::IDR,
                    "channel_properties" => new CardChannelProperties([
                        "success_return_url" => "https://redirect.me/goodstuff",
                        "failure_return_url" => "https://redirect.me/badstuff"
                    ]),
                    "card_information" => new CardParametersCardInformation([
                        "card_number" => "4000000000001091",
                        "expiry_month" => "12",
                        "expiry_year" => "2027",
                        "cvv" => "123",
                        "cardholder_name" => "John Doe"
                    ])
                ]),
                "reusability" => Xendit\PaymentMethod\PaymentMethodReusability::ONE_TIME_USE,
                'metadata' => [
                    "foo" => "bar"
                ],
                "description" => "This is a description."
            ]);
            $create_pm_response = $this->pmApiInstance->createPaymentMethod(
                null,
                $payment_method_parameters
            );
            print_r("CARD createPaymentMethod:" . $create_pm_response . "\n");

            $this->assertNotNull($create_pm_response);
            $this->assertEquals(PaymentMethodStatus::PENDING, $create_pm_response->getStatus());

            // Creating a Payment Request
            $payment_request_parameters = new PaymentRequestParameters([
                'reference_id' => getenv('BUSINESS_ID') . "_" .time(),
                'amount' => 10000,
                'currency' => Xendit\PaymentRequest\PaymentRequestCurrency::IDR,
                'payment_method_id' => $create_pm_response->getId(),
                'capture_method' => Xendit\PaymentRequest\PaymentRequestCaptureMethod::AUTOMATIC,
                "description" => "This is a description.",
                'metadata' => [
                    "foo" => "bar"
                ],
            ]);
            $create_pr_response = $this->prApiInstance->createPaymentRequest(
                null,
                null,
                $payment_request_parameters
            );
            print_r("CARD createPaymentRequest:" . $create_pr_response . "\n");

            $this->assertNotNull($create_pr_response);
            $this->assertEquals(PaymentRequestStatus::REQUIRES_ACTION, $create_pr_response->getStatus());
            $this->assertEquals($create_pm_response->getId(), $create_pr_response->getPaymentMethod()["id"]);
            // NOTE: "When status is REQUIRES_ACTION, it means additional steps listed in `actions` is needed to complete this payment"
            $this->assertTrue(count($create_pr_response->getActions()) > 0);

        } catch (Exception $e){
            echo 'Exception testCreateCardPayment: ', $e->getMessage(), PHP_EOL;

            if ($e instanceof XenditSdkException){
                $ignoredErrorCodes = explode(',', $_ENV["IGNORED_ERRORCODE"]);
                if (!in_array($e->getErrorCode(), $ignoredErrorCodes)) {
                    $this->fail('An unexpected exception occurred: ' . $e->getMessage());
                }
            } else {
                $this->fail('An unexpected exception occurred: ' . $e->getMessage());
            }
        }
    }

    public function testCreateDirectDebitPayment(): void
    {
        try {
            // Prerequisite: A Customer Object is created

            // Creating a Payment Method
            $payment_method_parameters = new PaymentMethodParameters([
                'type' => Xendit\PaymentMethod\PaymentMethodType::DIRECT_DEBIT,
                'direct_debit' => new DirectDebitParameters([
                    'channel_code' => Xendit\PaymentMethod\DirectDebitChannelCode::BRI,
                    'channel_properties' => new Xendit\PaymentMethod\DirectDebitChannelProperties([
                        'mobile_number' => '+62818555988',
                        'card_last_four' => '8888',
                        'card_expiry' => '06/24',
                        'email' => "email@email.com",
                    ])
                ]),
                "reusability" => Xendit\PaymentMethod\PaymentMethodReusability::ONE_TIME_USE,
                "customer_id" => "cust-59660fb7-dcf2-4bb9-b864-f69b081219d7"
            ]);
            $create_pm_response = $this->pmApiInstance->createPaymentMethod(
                null,
                $payment_method_parameters
            );
            print_r("DIRECT_DEBIT createPaymentMethod:" . $create_pm_response . "\n");

            $this->assertNotNull($create_pm_response);
            $this->assertEquals(PaymentMethodStatus::REQUIRES_ACTION, $create_pm_response->getStatus());
            $this->assertTrue(count($create_pm_response->getActions()) > 0);

            // Authenticate the created Payment Method
            $auth_pm_response = $this->pmApiInstance->authPaymentMethod(
                $create_pm_response->getId(),
                null,
                new PaymentMethodAuthParameters([
                    'auth_code' => "333000",
                ])
            );
            print_r("DIRECT_DEBIT authPaymentMethod:" . $auth_pm_response . "\n");

            $this->assertNotNull($auth_pm_response);
            $this->assertEquals(PaymentMethodStatus::ACTIVE, $auth_pm_response->getStatus());
            $this->assertTrue(count($auth_pm_response->getActions()) == 0);

            // Creating a Payment Request
            $payment_request_parameters =  new PaymentRequestParameters([
                'reference_id' => getenv('BUSINESS_ID') . "_" .time(),
                'amount' => 10000,
                'currency' => Xendit\PaymentRequest\PaymentRequestCurrency::IDR,
                'payment_method_id' => $create_pm_response->getId(),
                "description" => "This is a description.",
                'metadata' => [
                    "foo" => "bar"
                ],
            ]);
            $create_pr_response = $this->prApiInstance->createPaymentRequest(
                null,
                null,
                $payment_request_parameters
            );
            print_r("DIRECT_DEBIT createPaymentRequest:" . $create_pr_response . "\n");

            $this->assertNotNull($create_pr_response);
            $this->assertEquals(PaymentRequestStatus::REQUIRES_ACTION, $create_pr_response->getStatus());
            $this->assertEquals($create_pm_response->getId(), $create_pr_response->getPaymentMethod()["id"]);
            $this->assertTrue(count($create_pr_response->getActions()) > 0);

        } catch (Exception $e){
            echo 'Exception testCreateDirectDebitPayment: ', $e->getMessage(), PHP_EOL;

            if ($e instanceof XenditSdkException){
                $ignoredErrorCodes = explode(',', $_ENV["IGNORED_ERRORCODE"]);
                if (!in_array($e->getErrorCode(), $ignoredErrorCodes)) {
                    $this->fail('An unexpected exception occurred: ' . $e->getMessage());
                }
            } else {
                $this->fail('An unexpected exception occurred: ' . $e->getMessage());
            }
        }
    }

    public function testCreateEWalletPayment():void
    {
        try {
            // Prerequisite: A Customer Object is created

            // Creating a Payment Method
            $payment_method_parameters = new PaymentMethodParameters([
                'type' => Xendit\PaymentMethod\PaymentMethodType::EWALLET,
                'ewallet' => new EWalletParameters([
                    'channel_code' => Xendit\PaymentMethod\EWalletChannelCode::OVO,
                    'channel_properties' => new Xendit\PaymentMethod\EWalletChannelProperties([
                        'success_return_url' => "https://redirect.me/goodstuff",
                        'failure_return_url' => "https://redirect.me/badstuff",
                        'cancel_return_url' => "https://redirect.me/nostuff",
                        'mobile_number' => "+62818555988"
                    ])
                ]),
                "reusability" => Xendit\PaymentMethod\PaymentMethodReusability::ONE_TIME_USE,
                "customer_id" => "cust-59660fb7-dcf2-4bb9-b864-f69b081219d7"
            ]);
            $create_pm_response = $this->pmApiInstance->createPaymentMethod(
                null,
                $payment_method_parameters
            );
            print_r("EWALLET createPaymentMethod:" . $create_pm_response . "\n");

            $this->assertNotNull($create_pm_response);
            $this->assertEquals(PaymentMethodStatus::ACTIVE, $create_pm_response->getStatus());
            $this->assertTrue(count($create_pm_response->getActions()) == 0);


            // Creating a Payment Request
            $payment_request_parameters = new PaymentRequestParameters([
                'reference_id' => getenv('BUSINESS_ID') . "_" .time(),
                'amount' => 10000,
                'currency' => Xendit\PaymentRequest\PaymentRequestCurrency::IDR,
                'payment_method_id' => $create_pm_response->getId(),
                "description" => "This is a description.",
                'metadata' => [
                    "foo" => "bar"
                ],
            ]);
            $create_pr_response = $this->prApiInstance->createPaymentRequest(
                null,
                null,
                $payment_request_parameters
            );
            print_r("EWALLET createPaymentRequest:" . $create_pr_response . "\n");

            $this->assertNotNull($create_pr_response);
            $this->assertEquals(PaymentRequestStatus::PENDING, $create_pr_response->getStatus());
            $this->assertEquals($create_pm_response->getId(), $create_pr_response->getPaymentMethod()["id"]);

        } catch (Exception $e){
            echo 'Exception testCreateEWalletPayment: ', $e->getMessage(), PHP_EOL;

            if ($e instanceof XenditSdkException){
                $ignoredErrorCodes = explode(',', $_ENV["IGNORED_ERRORCODE"]);
                if (!in_array($e->getErrorCode(), $ignoredErrorCodes)) {
                    $this->fail('An unexpected exception occurred: ' . $e->getMessage());
                }
            } else {
                $this->fail('An unexpected exception occurred: ' . $e->getMessage());
            }
        }
    }

    public function testCreateQRCodePayment():void
    {
        try {
            // Create Payment Method and Payment Request in one call
            $payment_request_parameters = new PaymentRequestParameters([
                'amount' => 10000,
                'currency' => Xendit\PaymentRequest\PaymentRequestCurrency::IDR,
                'payment_method' => new Xendit\PaymentRequest\PaymentMethodParameters([
                    'type' => Xendit\PaymentRequest\PaymentMethodType::QR_CODE,
                    'reusability' => Xendit\PaymentRequest\PaymentMethodReusability::ONE_TIME_USE,
                    'qr_code' => new Xendit\PaymentRequest\QRCodeParameters([
                        "channel_code" => Xendit\PaymentRequest\QRCodeChannelCode::DANA,
                    ]),
                ]),
                "description" => "This is a description.",
                'metadata' => [
                    "foo" => "bar"
                ],
            ]);
            $create_pr_response = $this->prApiInstance->createPaymentRequest(
                null,
                null,
                $payment_request_parameters
            );
            print_r("QR_CODE createPaymentRequest:" . $create_pr_response . "\n");

            $this->assertNotNull($create_pr_response);
            $this->assertEquals(PaymentRequestStatus::PENDING, $create_pr_response->getStatus());

        } catch (Exception $e){
            echo 'Exception testCreateQRCodePayment: ', $e->getMessage(), PHP_EOL;

            if ($e instanceof XenditSdkException){
                $ignoredErrorCodes = explode(',', $_ENV["IGNORED_ERRORCODE"]);
                if (!in_array($e->getErrorCode(), $ignoredErrorCodes)) {
                    $this->fail('An unexpected exception occurred: ' . $e->getMessage());
                }
            } else {
                $this->fail('An unexpected exception occurred: ' . $e->getMessage());
            }
        }
    }

    public function testVirtualAccountPayment():void
    {
        try {
            // Create Payment Method and Payment Request in one call
            $payment_request_parameters = new PaymentRequestParameters([
                'amount' => 10000,
                'currency' => Xendit\PaymentRequest\PaymentRequestCurrency::IDR,
                'payment_method' => new Xendit\PaymentRequest\PaymentMethodParameters([
                    'type' => Xendit\PaymentRequest\PaymentMethodType::VIRTUAL_ACCOUNT,
                    'reference_id' => getenv('BUSINESS_ID') . "_" .time(),
                    'reusability' => Xendit\PaymentRequest\PaymentMethodReusability::ONE_TIME_USE,
                    'virtual_account' => new Xendit\PaymentRequest\VirtualAccountParameters([
                        "channel_code" => Xendit\PaymentRequest\VirtualAccountChannelCode::BRI,
                        "channel_properties" => new Xendit\PaymentRequest\VirtualAccountChannelProperties([
                            "customer_name" => "John Doe"
                        ])
                    ]),
                ]),
            ]);
            $create_pr_response = $this->prApiInstance->createPaymentRequest(
                null,
                null,
                $payment_request_parameters
            );
            print_r("VIRTUAL_ACCOUNT createPaymentRequest:" . $create_pr_response . "\n");

            $this->assertNotNull($create_pr_response);
            $this->assertEquals(PaymentRequestStatus::PENDING, $create_pr_response->getStatus());

        } catch (Exception $e){
            echo 'Exception testVirtualAccountPayment: ', $e->getMessage(), PHP_EOL;

            if ($e instanceof XenditSdkException){
                $ignoredErrorCodes = explode(',', $_ENV["IGNORED_ERRORCODE"]);
                if (!in_array($e->getErrorCode(), $ignoredErrorCodes)) {
                    $this->fail('An unexpected exception occurred: ' . $e->getMessage());
                }
            } else {
                $this->fail('An unexpected exception occurred: ' . $e->getMessage());
            }
        }
    }

    public function testOverTheCounterPayment():void
    {
        try {
            // Create Payment Method and Payment Request in one call
            $payment_request_parameters = new PaymentRequestParameters([
                'amount' => 10000,
                'currency' => Xendit\PaymentRequest\PaymentRequestCurrency::IDR,
                'payment_method' => new Xendit\PaymentRequest\PaymentMethodParameters([
                    'type' => Xendit\PaymentRequest\PaymentMethodType::OVER_THE_COUNTER,
                    'reusability' => Xendit\PaymentRequest\PaymentMethodReusability::ONE_TIME_USE,
                    'over_the_counter' => new Xendit\PaymentRequest\OverTheCounterParameters([
                        "channel_code" => Xendit\PaymentRequest\OverTheCounterChannelCode::ALFAMART,
                        "channel_properties" => new Xendit\PaymentRequest\OverTheCounterChannelProperties([
                            "customer_name" => "John Doe"
                        ])
                    ]),
                ]),
            ]);
            $create_pr_response = $this->prApiInstance->createPaymentRequest(
                null,
                null,
                $payment_request_parameters
            );
            print_r("OVER_THE_COUNTER createPaymentRequest:" . $create_pr_response . "\n");

            $this->assertNotNull($create_pr_response);
            $this->assertEquals(PaymentRequestStatus::PENDING, $create_pr_response->getStatus());

        } catch (Exception $e){
            echo 'Exception testOverTheCounterPayment: ', $e->getMessage(), PHP_EOL;

            if ($e instanceof XenditSdkException){
                $ignoredErrorCodes = explode(',', $_ENV["IGNORED_ERRORCODE"]);
                if (!in_array($e->getErrorCode(), $ignoredErrorCodes)) {
                    $this->fail('An unexpected exception occurred: ' . $e->getMessage());
                }
            } else {
                $this->fail('An unexpected exception occurred: ' . $e->getMessage());
            }
        }
    }

    public function testGetPaymentMethodById(): void
    {
        try {
            $payment_method_id = "pm-89a09e44-3a9f-4bf3-903e-3f68ec170723";
            $response = $this->pmApiInstance->getPaymentMethodByID($payment_method_id);
            print_r("getPaymentMethodByID:" . $response . "\n");

            $this->assertNotNull($response);
        } catch (Exception $e){
            echo 'Exception getPaymentMethodByID: ', $e->getMessage(), PHP_EOL;

            if ($e instanceof XenditSdkException){
                $ignoredErrorCodes = explode(',', $_ENV["IGNORED_ERRORCODE"]);
                if (!in_array($e->getErrorCode(), $ignoredErrorCodes)) {
                    $this->fail('An unexpected exception occurred: ' . $e->getMessage());
                }
            } else {
                $this->fail('An unexpected exception occurred: ' . $e->getMessage());
            }
        }
    }

    public function testGetPaymentRequestById(): void
    {
        try {
            $payment_request_id = "pr-6fd4595a-d6da-4939-9b65-b9f57ebf78dc";
            $response = $this->prApiInstance->getPaymentRequestByID($payment_request_id);
            print_r("getPaymentRequestByID:" . $response . "\n");

            $this->assertNotNull($response);
        } catch (Exception $e){
            echo 'Exception getPaymentRequestByID: ', $e->getMessage(), PHP_EOL;

            if ($e instanceof XenditSdkException){
                $ignoredErrorCodes = explode(',', $_ENV["IGNORED_ERRORCODE"]);
                if (!in_array($e->getErrorCode(), $ignoredErrorCodes)) {
                    $this->fail('An unexpected exception occurred: ' . $e->getMessage());
                }
            } else {
                $this->fail('An unexpected exception occurred: ' . $e->getMessage());
            }
        }
    }

}
