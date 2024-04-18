<?php

namespace Model\Connexion;

use PDO;
use PDOException;

class Conn
{
    private static $instance = null;
    private $connexion;

    private function __construct()
    {
        $configFile = file_get_contents('../../config.json');
        $config = json_decode($configFile, true);

        $dsn = "pgsql:host=" . $config['host'] . ";port=5432;dbname=" . $config['dbname'] . ";user=" . $config['username'] . ";password=" . $config['password'];

        try {
            $this->connexion = new PDO($dsn);
            $this->connexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
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
