<?php

    class XenditV2InvoiceClient {
      
        function __construct ($options) {
            $this->server_domain = $options['server_domain'];
            $this->secret_api_key = $options['secret_api_key'];
        }

        function createInvoice ($external_id, $amount, $payer_email, $description) {
            $curl = curl_init();

            $headers = array();
            $headers[] = 'Content-Type: application/json';

            $end_point = $this->server_domain.'/invoices';

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

            curl_exec($curl);
            curl_close($curl);
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

            curl_exec($curl);
            curl_close($curl);
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

            curl_exec($curl);
            curl_close($curl);
        }

        function postVirtualAccountPaidCallback ($payment_id, $external_id, $owner_id, $amount, $bank_code, $transaction_timestamp) {
            $curl = curl_init();

            $headers = array();
            $headers[] = 'Content-Type: application/json';

            $end_point = $this->server_domain.'/callback_virtual_accounts';

            $data['payment_id'] = $payment_id;
            $data['external_id'] = $external_id;
            $data['owner_id'] = $owner_id;
            $data['amount'] = $amount;
            $data['bank_code'] = $bank_code;
            $data['transaction_timestamp'] = $transaction_timestamp;

            $payload = json_encode($data);

            curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);
            curl_setopt($curl, CURLOPT_USERPWD, $this->secret_api_key.":");
            curl_setopt($curl, CURLOPT_URL, $end_point);
            curl_setopt($curl, CURLOPT_POST, true);
            curl_setopt($curl, CURLOPT_POSTFIELDS, $payload);

            curl_exec($curl);
            curl_close($curl);
        }

        function getDisbursement ($disbursement_id) {
            $curl = curl_init();

            $headers = array();
            $headers[] = 'Content-Type: application/json';

            $end_point = $this->server_domain.'/disbursements/'.$disbursement_id;

            curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);
            curl_setopt($curl, CURLOPT_USERPWD, $this->secret_api_key.":");
            curl_setopt($curl, CURLOPT_URL, $end_point); 

            curl_exec($curl);         
            curl_close($curl);
        }

        function getInvoice ($invoice_id) {
            $curl = curl_init();

            $headers = array();
            $headers[] = 'Content-Type: application/json';

            $end_point = $this->server_domain.'/invoices/'.$invoice_id;

            curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);
            curl_setopt($curl, CURLOPT_USERPWD, $this->secret_api_key.":");
            curl_setopt($curl, CURLOPT_URL, $end_point); 

            curl_exec($curl);         
            curl_close($curl);
        }

        function getBalance () {
            $curl = curl_init();

            $headers = array();
            $headers[] = 'Content-Type: application/json';

            $end_point = $this->server_domain.'/balance';

            curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);
            curl_setopt($curl, CURLOPT_USERPWD, $this->secret_api_key.":");
            curl_setopt($curl, CURLOPT_URL, $end_point); 

            curl_exec($curl);         
            curl_close($curl);
        }
    }
?>