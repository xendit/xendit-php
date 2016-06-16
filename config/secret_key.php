<?php
    switch (getenv('PHP_ENV')) {
        case "production":
			define('SECRET_KEY', 'Igg21NRUfdTPbhbFUPNdw8XZ');
            break;
        case "staging":
			define('SECRET_KEY', 'Igg21NRUfdTPbhbFUPNdw8XZ');
            break;
        default:
			define('SECRET_KEY', 'foobar');
    }
?>