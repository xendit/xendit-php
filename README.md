# GET Invoice Example : #
```
cd src/
php examples/get_invoice_example.php 57ba6f57cf952cff10ebc073
```

```
php examples/get_invoice_example.php [invoice_id]
```

# Create Invoice Example : #

```
cd src/
php examples/create_invoice_example.php "CUSTOM_ID_0"  30000 "payer_email@sample.com" "this is a description"
```

```
php examples/create_invoice_example.php [external_id] [amount] [payer_email] [description]
```

# Create Disbursement Example : #
```
cd src/
php examples/create_disbursement_example.php "CUSTOM_ID_1"  30000 "BCA" "Rizky" "1234567890"
```

# Create Disbursement With Idempotency Key Example : #
```
cd src/
php examples/create_disbursement_with_idempotency_key_example.php "CUSTOM_ID_1"  30000 "BCA" "Rizky" "1234567890" "idempotencykeytest123"
```

# GET Disbursement Example : #
```
cd src/
php examples/get_disbursement_example.php "57ba93175ef9e7077bcb969e"
```

# Create Callback Virtual Account Example : #
```
cd src/
php examples/create_callback_virtual_account_example.php "CUSTOM_ID_2" "BCA" "Rizky"
```

# Create Callback Virtual Account With Virtual Account Number Example : #
```
cd src/
php examples/create_callback_virtual_account_example.php "CUSTOM_ID_2" "BCA" "Rizky" 100
```

# GET Balance Example : #
```
cd src/
php examples/get_balance_example.php
```

# Capture credit card payment
```
cd src/
php examples/capture_credit_card_payment_example.php [token_id] [amount] [external_id]
```

# Name validator
```
cd src/
php examples/validate_bank_account_holder_name.php [bank_account_number] [bank_code]
```

# Post Invoice Status Callback Example : #
```
1. Run: cd src/examples
2. Run: php -S localhost:8006 post_invoice_status_callback_server_example.php
3. When invoice is paid, xendit will hit localhost:8006/paid_invoice_from_xendit with POST method:

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

4. localhost:8006/paid_invoice_from_xendit (callback url) get the paid invoice data.
```

# Issue credit card refund without idempotency key
```
cd src/
php examples/issue_credit_card_refund_example.php [credit_card_charge_id] [amount] [external_id]
```

# Issue credit card refund with idempotency key
```
cd src/
php examples/issue_credit_card_refund_with_idempotency_example.php [credit_card_charge_id] [amount] [external_id] [optional-idempotency-key]
```

