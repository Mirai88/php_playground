<?php

namespace Framework;
use PDO;
use PDOException;

class Database {

    private $connection;

    public function __construct(DatabaseConfig $config) {
        $dsn = "{$config->driver}:host={$config->host};port={$config->port};dbname={$config->dbname};charset={$config->charset}";


        $options = [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
        ];

        try {
            $this->connection = new PDO($dsn, $config->user, $config->password, $options);
        } catch (PDOException $e) {
            echo 'Connection failed: ' . $e->getMessage();
        }
    }

    /**
     * Execute a query
     * @param sql
     * @return PDOStatement
     */
    public function query($sql, $params = []) { 
        try {
            $stmt = $this->connection->prepare($sql);
            $stmt->execute($params);
            return $stmt;
        } catch (PDOException $e) {
            echo 'Query failed: ' . $e->getMessage();
            exit;
        }
    }

    public function lastInsertedId() {
        return $this->connection->lastInsertId();
    }
}
?>