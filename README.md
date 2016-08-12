# GET Invoice Example : #
```
PHP_ENV=staging php get_invoice_example.php 5760e6ad0e263a99266b33ea
```

```
PHP_ENV=[environment] php get_invoice_example.php [invoice_id]
```

# Create Invoice Example : #

```
PHP_ENV=staging php create_invoice_example.php albert1223  30000 albert@xendit.com "testing xendit 3000"
```

# Create Disbursement Example : #
```
PHP_ENV=staging php create_disbursement_example.php albert1223  30000 BCA Rizky 1234567890
```

# Create Callback Virtual Account Example : #
```
PHP_ENV=staging php create_callback_virtual_account_example.php albert1223 BCA Rizky
```

```
PHP_ENV=[environment] php create_invoice_example.php [external_id] [amount] [payer_email] [description]
```

# GET Balance Example : #
```
PHP_ENV=staging php get_balance_example.php
```

```
PHP_ENV=[environment] php get_balance_example.php
```

# Post Invoice Status Callback Example : #
```
1. Run php -S localhost:8006 post_invoice_status_callback_server_example.php 
2. When invoice is paid, xendit will hit localhost:8006/paid_invoice_from_xendit with POST method: 

Ex :
curl --include \
     --request POST \
     --header "Content-Type: application/json" \
     --data-binary "{
    \"id\": \"5691da1ccad1b1322b8a39e5\",
    \"user_id\": \"569c861f909bb3f68020d363\",
    \"external_id\": \"5691dab1322b8a39e51ccad1\",
    \"status\": \"COMPLETED\",
    \"is_high\": false,
    \"merchant_name\": \"Xendit\",
    \"merchant_profile_picture_url\": \"https://www.xendit.co/profile.png\",
    \"amount\": 8000000,
    \"billable_amount\": 8640000,
    \"payer_email\": \"payer@test.com\",
    \"description\": \"Invoice #123124123 for Nike shoes\",
    \"received_amount\": 7760000,
    \"xendit_fee_amount\": 79000,
    \"taxes\": [
        {
            \"name\": \"VAT\",
            \"percentage\": 0.10,
            \"amount\": 800000
        },
        {
            \"name\": \"PPH\",
            \"percentage\": -0.02,
            \"amount\": -160000
        }
    ],
    \"fees\": [
        {
            \"name\": \"Agent Fee\",
            \"percentage\": 0.02,
            \"amount\": 80000,
            \"xendit_user_id\": \"57078f3faedd2019cfd8b2fc\"
        }
    ]
}" \
'http://localhost:8006/paid_invoice_from_xendit'

3. localhost:8006/paid_invoice_from_xendit (callback url) get the paid invoice data.
```