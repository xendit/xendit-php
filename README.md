# GET Example : #
```
PHP_ENV=staging php getPartnerInvoiceServiceClient.php 5760e6ad0e263a99266b33ea 12131415 dd560a7692b468a57b4053c97a025ea76e2c29ba
```

```
PHP_ENV=[environment] php getPartnerInvoiceServiceClient.php [invoice_id] [nonce] [signature]
```

# Post Example : #

```
PHP_ENV=staging php postInvoicePartnerServiceClient.php 30000 lingga@xendit.com "testing xendit 3000"
```

```
PHP_ENV=[environment] php postInvoicePartnerServiceClient.php [amount] [payer_email] [description]
```