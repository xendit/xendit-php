<?php

    namespace XenditClient;

    class XenditPHPClient {
        function __construct ($options) {
            if ($options['server_domain']) {
                $this->server_domain = $options['server_domain'];
            } else {
                $this->server_domain = 'https://api.xendit.co';
            }

            $this->secret_api_key = $options['secret_api_key'];
        }

        function createInvoice ($external_id, $amount, $payer_email, $description) {
            $curl = curl_init();

            $headers = array();
            $headers[] = 'Content-Type: application/json';

            $end_point = $this->server_domain.'/v2/invoices';

            $data['external_id'] = $external_id;
            $data['amount'] = (int)$amount;
            $data['payer_email'] = $payer_email;
            $data['description'] = $description;

            $payload = json_encode($data);

            curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);
            curl_setopt($curl, CURLOPT_USERPWD, $this->secret_api_key.":");
            curl_setopt($curl, CURLOPT_URL, $end_point);
            curl_setopt($curl, CURLOPT_POST, true);
            curl_setopt($curl, CURLOPT_POSTFIELDS, $payload);
            curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

            $response = curl_exec($curl);
            curl_close($curl);

            $responseObject = json_decode($response, true);
            return $responseObject;
        }

        function createDisbursement ($external_id, $amount, $bank_code, $account_holder_name, $account_number) {
            $curl = curl_init();

            $headers = array();
            $headers[] = 'Content-Type: application/json';

            $end_point = $this->server_domain.'/disbursements';

            $data['external_id'] = $external_id;
            $data['amount'] = (int)$amount;
            $data['bank_code'] = $bank_code;
            $data['account_holder_name'] = $account_holder_name;
            $data['account_number'] = $account_number;

            $payload = json_encode($data);

            curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);
            curl_setopt($curl, CURLOPT_USERPWD, $this->secret_api_key.":");
            curl_setopt($curl, CURLOPT_URL, $end_point);
            curl_setopt($curl, CURLOPT_POST, true);
            curl_setopt($curl, CURLOPT_POSTFIELDS, $payload);
            curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

            $response = curl_exec($curl);
            curl_close($curl);

            $responseObject = json_decode($response, true);
            return $responseObject;
        }

        function createCallbackVirtualAccount ($external_id, $bank_code, $name) {
            $curl = curl_init();

            $headers = array();
            $headers[] = 'Content-Type: application/json';

            $end_point = $this->server_domain.'/callback_virtual_accounts';

            $data['external_id'] = $external_id;
            $data['bank_code'] = $bank_code;
            $data['name'] = $name;

            $payload = json_encode($data);

            curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);
            curl_setopt($curl, CURLOPT_USERPWD, $this->secret_api_key.":");
            curl_setopt($curl, CURLOPT_URL, $end_point);
            curl_setopt($curl, CURLOPT_POST, true);
            curl_setopt($curl, CURLOPT_POSTFIELDS, $payload);
            curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

            $response = curl_exec($curl);
            curl_close($curl);

            $responseObject = json_decode($response, true);
            return $responseObject;
        }

        function getDisbursement ($disbursement_id) {
            $curl = curl_init();

            $headers = array();
            $headers[] = 'Content-Type: application/json';

            $end_point = $this->server_domain.'/disbursements/'.$disbursement_id;

            curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);
            curl_setopt($curl, CURLOPT_USERPWD, $this->secret_api_key.":");
            curl_setopt($curl, CURLOPT_URL, $end_point);
            curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

            $response = curl_exec($curl);
            curl_close($curl);

            $responseObject = json_decode($response, true);
            return $responseObject;
        }

        function getInvoice ($invoice_id) {
            $curl = curl_init();

            $headers = array();
            $headers[] = 'Content-Type: application/json';

            $end_point = $this->server_domain.'/v2/invoices/'.$invoice_id;

            curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);
            curl_setopt($curl, CURLOPT_USERPWD, $this->secret_api_key.":");
            curl_setopt($curl, CURLOPT_URL, $end_point);
            curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

            $response = curl_exec($curl);
            curl_close($curl);

            $responseObject = json_decode($response, true);
            return $responseObject;
        }

        function getBalance () {
            $curl = curl_init();

            $headers = array();
            $headers[] = 'Content-Type: application/json';

            $end_point = $this->server_domain.'/balance';

            curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);
            curl_setopt($curl, CURLOPT_USERPWD, $this->secret_api_key.":");
            curl_setopt($curl, CURLOPT_URL, $end_point);
            curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

            $response = curl_exec($curl);
            curl_close($curl);

            $responseObject = json_decode($response, true);
            return $responseObject;
        }
    }
?>
