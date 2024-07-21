<?php

namespace Core;
use PDO;


class Database
{
    private $connection;

    public function __construct($config){
        $dsn = "mysql:" . http_build_query($config,'',';')
        $this->connection = new PDO($dsn, "root", "");
    }

    public function getAllUsers() {
        $stmt = $this->connection->prepare("SELECT * FROM users");
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}