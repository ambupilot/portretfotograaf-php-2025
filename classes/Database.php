<?php
class Database {
    private static $conn;

    public static function getConnection() {
        if (!self::$conn) {
            $host = 'localhost';
            $db = 'portretfotograaf';
            $user = 'martijn';
            $pass = 'kerssing';
            $dsn = "mysql:host=$host;dbname=$db;charset=utf8mb4";
            self::$conn = new PDO($dsn, $user, $pass, [
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
            ]);
        }
        return self::$conn;
    }
}
?>
