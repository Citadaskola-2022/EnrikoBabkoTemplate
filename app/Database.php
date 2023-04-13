<?php

namespace App;
use PDO;

class Database
{
    private static $instance = null;
    private PDO $pdo;

    public function __construct(){
        $config = [
            'host' => 'db',
            'port' => '3306',
            'dbname' => $_ENV['DB_NAME'],
            'charset' => 'utf8mb4',
        ];
        $dsn = 'mysql:' . http_build_query($config, '', ';') ;
        $this->connection= new PDO(
            $dsn,
            $_ENV['DB_USER'],
            $_ENV['DB_PASSWORD'],
            [
                PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
            ]
        );

        $this->pdo = new PDO($dsn, $_ENV['DB_USER'],  $_ENV['DB_PASSWORD']);
    }

    public static function getInstance(): self {
        if(self::$instance === null) {
            self::$instance = new Database();
        }

        return self::$instance;
    }

    public function query(string $sql, array $params = []) {

        $statement = $this->pdo->prepare($sql);
        $statement->execute($params);

        return $statement->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getOne(string $sql, array $params = []) {

        $statement = $this->pdo->prepare($sql);
        $statement->execute($params);

        return $statement->fetch(PDO::FETCH_ASSOC);
    }

}