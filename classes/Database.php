<?php
require_once __DIR__ . '/../env.php';

class Database {
    private static $conn;

    public static function getConnection() {
        if (!self::$conn) {
            $host = $_ENV['DB_HOST'];
            $db = $_ENV['DB_NAME'];
            $user = $_ENV['DB_USER'];
            $pass = $_ENV['DB_PASS'];
            $dsn = "mysql:host=$host;dbname=$db;charset=utf8mb4";
            self::$conn = new PDO($dsn, $user, $pass, [
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
            ]);
        }
        return self::$conn;
    }
}
?>
