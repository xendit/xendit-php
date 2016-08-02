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

# Post Virtual Account Paid Callback Example : #

```
PHP_ENV=staging php post_virtual_account_paid_callback_example.php payment1234 user_2345678 owner_123456 50000 BCA 
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
