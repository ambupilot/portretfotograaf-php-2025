<?php
// Eenvoudige .env loader
//$envPath = __DIR__ . '/../.env'; // LET OP; bij produktie .env in onderliggende map plaatsen! EN .env verwijderen uit ROOT
$envPath = __DIR__ . '/.env';
if (file_exists($envPath)) {
    $lines = file($envPath, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
    foreach ($lines as $line) {
        if (strpos(trim($line), '#') === 0) continue;
        list($key, $value) = explode('=', $line, 2);
        $_ENV[trim($key)] = trim($value);
    }
}
?>
