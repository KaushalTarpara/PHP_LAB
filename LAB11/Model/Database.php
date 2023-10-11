<?php

namespace LAB11\Model;

require_once __DIR__ . '/../config.php';

use LAB11\Config;
use PDO;
use PDOException;

class Database extends Config
{
    private static $pdo;

    private function __construct()
    {
    }

    public static function getInstance()
    {
        if (!isset(self::$pdo)) {
            try {
                $dsn = "mysql:host=" . self::HOST . ";dbname=" . self::DATABASE;
                self::$pdo = new PDO($dsn, self::USERNAME, self::PASSWORD);
                self::$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            } catch (PDOException $e) {
                die("Database connection failed: " . $e->getMessage());
            }
        }

        return self::$pdo;
    }
}
