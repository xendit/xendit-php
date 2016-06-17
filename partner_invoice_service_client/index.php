<?php
   class PartnerInvoiceServiceClient {
      
      function __construct ($options) {
         $this->server_domain = $options['server_domain'];
         $this->partner_id = $options['partner_id'];
         $this->secret_key = $options['secret_key'];
      }

      function getInvoice ($invoice_id, $nonce, $signature) {
         $curl = curl_init();

         $end_point = $this->server_domain.'/invoices/'.$invoice_id.'?partner_id='.$this->partner_id.'&nonce='.$nonce.'&signature='.$signature;

         echo $end_point;

         curl_setopt($curl, CURLOPT_URL, $end_point); 

         curl_exec($curl);         
         curl_close($curl);
      }

      function postInvoice ($amount, $payer_email, $description) {
         $curl = curl_init();

      	$end_point = $this->server_domain.'/invoices';

         $data["nonce"] = date('Y-m-d\TH:i:s\Z');
         $data["partner_id"] = $this->partner_id;
         $data["amount"] = $amount;
         $data["payer_email"] = $payer_email;
         $data["description"] = $description;
         $data["signature"] = $this->generateSignature($data, $this->secret_key);

         $raw_data = $this->generateRawData($data);

         curl_setopt($curl, CURLOPT_URL, $end_point); 
         curl_setopt($curl, CURLOPT_POST, true);
         curl_setopt($curl, CURLOPT_POSTFIELDS, $raw_data);

         curl_exec($curl);
         curl_close($curl);
      }

		function generateSignature ($data, $key) {
		    $value = "";

		    foreach ($data as $datum) {
		    	$value .= $datum;
		    }

		    return $this->str2hex(hash_hmac("sha1", $value, $key, TRUE));
		}

		function generateRawData ($data) {
         $raw_data = "";

         foreach($data as $key => $value) {
            if ($key === 'signature') {
               $raw_data .= $key . "=" . $value;
            } else {
               $raw_data .= $key . "=" . $value . "&";               
            }
         }

         return $raw_data;
		}

		function str2hex ($str) {
			return array_shift(unpack('H*', $str));
		}
	}
?>