<?php

namespace AppTask\App\Lib;

use PDO;
use PDOException;

class Database {

    private string $host;
    private string $DB;
    private string $user;
    private string $pass;
    private string $charset;
    // protected PDO $connection;

    public function __construct()
    {
        $this->host = $_ENV['DB_HOST'];
        $this->DB = $_ENV['DB_NAME'];
        $this->user = $_ENV['DB_USER'];
        $this->pass = $_ENV['DB_PASS'];
        $this->charset = $_ENV['DB_CHARSET'];
    }

    public function connect(): PDO
    {
        try {
            $connection = "mysql:host=".$this->host.";dbname=".$this->DB.";charset=".$this->charset;
            $options = [
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
                PDO::ATTR_EMULATE_PREPARES => false,
            ];
            return new PDO($connection, $this->user, $this->pass, $options);
            
        } catch (PDOException $th) {
            // Manejar el error de conexión aquí
            //throw new PDOException($e->getMessage(), (int)$e->getCode());
            throw $th->getMessage();
        }
    }

}