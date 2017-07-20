<?php

namespace XenditClient;

use XenditClient\HttpClient\Curl;


class XenditPHPClient {

    function __construct ($options) {
        $this->server_domain = 'https://api.xendit.co';
        $this->secret_api_key = $options['secret_api_key'];

        $this->xenditCurl = new Curl($this->secret_api_key);
    }

    function createInvoice ($external_id, $amount, $payer_email, $description, $invoice_options = null) {
        $headers = array();
        $headers[] = 'Content-Type: application/json';

        $end_point = $this->server_domain.'/v2/invoices';

        $data['external_id'] = $external_id;
        $data['amount'] = (int)$amount;
        $data['payer_email'] = $payer_email;
        $data['description'] = $description;

        if (!empty($invoice_options['callback_virtual_account_id'])) {
            $data['callback_virtual_account_id'] = $invoice_options['callback_virtual_account_id'];
        }
        
        $payload = json_encode($data);

        return $this->xenditCurl->request('post', $end_point, $headers, $payload);
    }

    function createDisbursement ($external_id, $amount, $bank_code, $account_holder_name, $account_number, $disbursement_options = null) {
        $headers = array();
        $headers[] = 'Content-Type: application/json';

        if (!empty($disbursement_options['X-IDEMPOTENCY-KEY'])) {
            array_push($headers, 'X-IDEMPOTENCY-KEY: '.$disbursement_options['X-IDEMPOTENCY-KEY']);
        }

        $end_point = $this->server_domain.'/disbursements';

        $data['external_id'] = $external_id;
        $data['amount'] = (int)$amount;
        $data['bank_code'] = $bank_code;
        $data['account_holder_name'] = $account_holder_name;
        $data['account_number'] = $account_number;

        $payload = json_encode($data);

        return $this->xenditCurl->request('post', $end_point, $headers, $payload);
    }

    function getVirtualAccountBanks () {
        $headers = array();
        $headers[] = 'Content-Type: application/json';

        $end_point = $this->server_domain.'/available_virtual_account_banks';
        
        return $this->xenditCurl->request('get', $end_point, $headers); 
    }

    function createCallbackVirtualAccount ($external_id, $bank_code, $name, $virtual_account_number = null) {
        $headers = array();
        $headers[] = 'Content-Type: application/json';

        $end_point = $this->server_domain.'/callback_virtual_accounts';

        $data['external_id'] = $external_id;
        $data['bank_code'] = $bank_code;
        $data['name'] = $name;

        if (!empty($virtual_account_number)) {
            $data['virtual_account_number'] = $virtual_account_number;
        }

        $payload = json_encode($data);

        return $this->xenditCurl->request('post', $end_point, $headers, $payload);
    }

    function getDisbursement ($disbursement_id) {
        $headers = array();
        $headers[] = 'Content-Type: application/json';

        $end_point = $this->server_domain.'/disbursements/'.$disbursement_id;

        return $this->xenditCurl->request('get', $end_point, $headers);
    }

    function getAvailableDisbursementBanks () {
        $headers = array();
        $headers[] = 'Content-Type: application/json';

        $end_point = $this->server_domain.'/available_disbursements_banks';

        return $this->xenditCurl->request('get', $end_point, $headers);            
    }

    function getInvoice ($invoice_id) {
        $headers = array();
        $headers[] = 'Content-Type: application/json';

        $end_point = $this->server_domain.'/v2/invoices/'.$invoice_id;

        return $this->xenditCurl->request('get', $end_point, $headers);
    }

    function getBalance () {
        $headers = array();
        $headers[] = 'Content-Type: application/json';

        $end_point = $this->server_domain.'/balance';

        return $this->xenditCurl->request('get', $end_point, $headers);
    }

    function captureCreditCardPayment ($external_id, $token_id, $amount) {
        $headers = array();
        $headers[] = 'Content-Type: application/json';

        $end_point = $this->server_domain.'/credit_card_charges';

        $data['external_id'] = $external_id;
        $data['token_id'] = $token_id;
        $data['amount'] = $amount;

        $payload = json_encode($data);

        return $this->xenditCurl->request('post', $end_point, $headers, $payload);
    }

    function issueCreditCardRefund ($credit_card_charge_id, $amount, $external_id, $options = null) {
        $headers = array();
        $headers[] = 'Content-Type: application/json';

        if (!empty($options['X-IDEMPOTENCY-KEY'])) {
            array_push($headers, 'X-IDEMPOTENCY-KEY: '.$options['X-IDEMPOTENCY-KEY']);
        }

        $end_point = $this->server_domain.'/credit_card_charges/'.$credit_card_charge_id.'/refunds';

        $data['amount'] = $amount;
        $data['external_id'] = $external_id;

        $payload = json_encode($data);

        return $this->xenditCurl->request('post', $end_point, $headers, $payload);
    }

    function validateBankAccountHolderName ($bank_account_number, $bank_code) {
        $headers = array();
        $headers[] = 'Content-Type: application/json';

        $end_point = $this->server_domain.'/bank_account_data_requests';

        $data['bank_account_number'] = $bank_account_number;
        $data['bank_code'] = $bank_code;

        $payload = json_encode($data);

        return $this->xenditCurl->request('post', $end_point, $headers, $payload);
    }
}
?>
