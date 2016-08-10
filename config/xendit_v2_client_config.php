<?php
    switch (getenv('PHP_ENV')) {
        case "production":
            define('SERVER_DOMAIN', 'https://api.xendit.co');
            define('SECRET_API_KEY', 'xnd_development_P4qDfOss0OCpl8RtKrROHjaQYNCk9dN5lSfk+R1l9Wbe+rSiCwZ3jw==');
            break;
        case "staging":
            define('SERVER_DOMAIN', 'http://xendit-api-gateway-staging.us-west-2.elasticbeanstalk.com');
            define('SECRET_API_KEY', 'xnd_development_P4iIfOss1OGunZVrK7EfEjKYbtalodl7mXWz+R1l9WTT/bynDwN3hQ==');
            break;
        default:
            define('SERVER_DOMAIN', 'localhost:8192');
            define('SECRET_API_KEY', 'LOCAL_SECRET_API_KEY');
    }
?>