<?php
declare(strict_types=1);

// Quanta production configuration.
// On shared hosting (including InfinityFree), place the real database password
// in backend/config.local.php. That file is denied by backend/.htaccess and is
// intentionally not included in source control or deployment archives.
$defaults = [
    'db' => [
        'host' => getenv('QUANTA_DB_HOST') ?: 'localhost',
        'name' => getenv('QUANTA_DB_NAME') ?: '',
        'user' => getenv('QUANTA_DB_USER') ?: '',
        'pass' => getenv('QUANTA_DB_PASS') ?: '',
    ],
    'ai' => [
        'url' => getenv('QUANTA_AI_URL') ?: 'https://api.gapgpt.app/v1/chat/completions',
        'key' => getenv('QUANTA_AI_KEY') ?: '',
        'model' => getenv('QUANTA_AI_MODEL') ?: 'gpt-4o-mini',
    ],
    'app' => [
        'session_ttl' => (int)(getenv('QUANTA_SESSION_TTL') ?: 86400),
        'allowed_origins' => getenv('QUANTA_ALLOWED_ORIGINS') ?: '',
    ],
];

$localFile = __DIR__ . '/config.local.php';
if (is_file($localFile)) {
    $local = require $localFile;
    if (is_array($local)) {
        $defaults = array_replace_recursive($defaults, $local);
    }
}

return $defaults;
