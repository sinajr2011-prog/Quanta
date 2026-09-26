<?php
// Copy this file to backend/config.local.php on the server.
// Replace only the password value. Never publish or commit config.local.php.
return [
    'db' => [
        'host' => 'localhost',
        'name' => 'your_database',
        'user' => 'your_database_user',
        'pass' => 'PUT_YOUR_MYSQL_PASSWORD_HERE',
    ],
    'app' => [
        'session_ttl' => 86400,
        'allowed_origins' => 'https://your-domain.example',
    ],
];
