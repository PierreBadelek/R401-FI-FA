<?php

namespace Model;

use PDO;
use PDOException;


class Conn
{
    private static $instance = null;
    private $connexion;
    private static $host = 'localhost';
    private static $dbname = 'SAE401';
    private static $username = 'postgres';
    private static $password = 'etu';

    private function __construct()
    {
        $dsn = "pgsql:host=" . self::$host . ";port=5432;dbname=" . self::$dbname . ";user=" . self::$username . ";password=" . self::$password;

        try {
            $this->connexion = new PDO($dsn);
        } catch (PDOException $e) {
            die("Erreur de connexion à la base de données : " . $e->getMessage());
        }
    }

    public static function getInstance()
    {
        if (self::$instance === null) {
            self::$instance = new self();
        }
        return self::$instance->connexion;
    }
}

?>