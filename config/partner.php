<?php
    switch (getenv('PHP_ENV')) {
        case "production":
			define('PARTNER_ID', 'lhiBlWdjGCY70ASrT4zzNIIX');
            break;
        case "staging":
			define('PARTNER_ID', 'lhiBlWdjGCY70ASrT4zzNIIX');
            break;
        default:
			define('PARTNER_ID', 'foobar');
    }
?>