<?php
    switch (getenv('PHP_ENV')) {
        case "production":
            define('SERVER_DOMAIN', 'https://xendit-invoice-service-partner-prod.amf3pkx54m.us-west-2.elasticbeanstalk.com');
            break;
        case "staging":
            define('SERVER_DOMAIN', 'http://xendit-invoice-service-partner-staging.amf3pkx54m.us-west-2.elasticbeanstalk.com');
            break;
        default:
            define('SERVER_DOMAIN', 'localhost:8192');
    }
?>