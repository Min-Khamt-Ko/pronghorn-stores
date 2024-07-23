<?php

namespace Core;

use PDO;

class Database
{
    private $connection;
    private $statement;

    public function __construct($config)
    {
        $dsn = "mysql:" . http_build_query($config, '', ';');
        $this->connection = new PDO($dsn, "root", "", [
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
        ]);
    }

    public function query($query, $params = [])
    {
        $this->statement = $this->connection->prepare($query);
        $this->statement->execute($params);
        return $this;
    }

    public function get()
    {
        return $this->statement->fetchAll();
    }

    public function fetch()
    {
        return $this->statement->fetch();
    }

    public function findOrFail()
    {
        $result = $this->fetch();

        if (!$result) {
            abort(404);
        }
        return $result;
    }

}