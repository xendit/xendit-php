<?php
require_once __DIR__ . '/../vendor/autoload.php';

use PHPUnit\Framework\TestCase;
use Xendit\Configuration;
use Xendit\XenditSdkException;


final class InvoiceAPITest extends TestCase
{
    private Xendit\Invoice\InvoiceApi $apiInstance;

    protected function setUp(): void
    {
        // Load environment variables
        $dotenv = Dotenv\Dotenv::createImmutable(__DIR__, '.env.test');
        $dotenv->load();

        $api_key = getenv('DEVELOPMENT_API_KEY');
        Configuration::setXenditKey($api_key);

        // Initialize XenditClient
        $this->apiInstance = new Xendit\Invoice\InvoiceApi();
    }

    public function testCreateInvoice(): void
    {
        $response = null;
        try {
            $payload = [
                'amount' => 10000,
                'invoice_duration' => 172800,
                'external_id' => getenv('BUSINESS_ID') . "_" .time(),
                'description' => 'Test Invoice',
                'currency' => 'IDR',
                'reminder_time' => 1
            ];

            $response = $this->apiInstance->createInvoice($payload);
            print_r("createInvoice:" . $response . "\n");

            $this->assertNotNull($response);
            $this->assertEquals('PENDING', $response->getStatus());
        } catch (Exception $e){
            echo 'Exception createInvoice: ', $e->getMessage(), PHP_EOL;

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


    public function testGetInvoiceById(): void
    {
        try {
            $invoice_id = "654a103b5e6dfa587b6025c3";
            $response = $this->apiInstance->getInvoiceById($invoice_id);
            print_r("getInvoiceById:" . $response . "\n");

            $this->assertNotNull($response);
        } catch (Exception $e){
            echo 'Exception getInvoiceById: ', $e->getMessage(), PHP_EOL;

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
